<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;

class GameController extends Controller
{
    public function change_user_nation(Request $ajax_call)
    {
        //logic to change user nation
    }
    public function estimate_total_bills($nation_id)
    {
    	$bills_due_per_cycle = \DB::table('nation_financial')->where('nation_id', $nation_id)->pluck('bills_due_per_cycle');

    	//pluck returns an array
    	$bills_due_per_cycle = $bills_due_per_cycle[0];

    	//grab it from settings table
    	//$cycle_length = \DB::table('settings')->pluck('cycle_length');
    	$cycle_length = 7;

    	//getting lastest bills payment date
    	$last_bill_payment = \DB::table('nation_time_tracking')->where('nation_id', $nation_id)->pluck('last_bill_payment');
    	$last_bill_payment = Carbon::parse($last_bill_payment[0]);

    	$now = Carbon::now();
		$elapsed_time = $last_bill_payment->diffInDays($now);

		$elapsed_cycles = $elapsed_time/$cycle_length;

		$bills_due = $bills_due_per_cycle * $elapsed_cycles;
		\DB::table('nation_financial')->where('nation_id', $nation_id)->update([
			'total_bills_due' => $bills_due,
		]);

		return true;
    }

    public function pay_bills($nation_id)
    {	
    	$total_bills_due = \DB::table('nation_financial')->where('nation_id', $nation_id)->pluck('total_bills_due');
    	$total_bills_due = $total_bills_due[0];

    	$total_money = \DB::table('nation_financial')->where('nation_id', $nation_id)->pluck('total_money_available');
    	$total_money = $total_money[0];

    	if($total_money > $total_bills_due)
    	{
    		$total_money -= $total_bills_due;
    		$total_bills_due = 0;
    		\DB::table('nation_financial')->where('nation_id', $nation_id)->update([
				'total_money_available' => $total_money,
			]);
			\DB::table('nation_financial')->where('nation_id', $nation_id)->update([
				'total_bills_due' => $total_bills_due,
			]);
    		\DB::table('nation_time_tracking')->where('nation_id', $nation_id)->update([
				'last_bill_payment' => Carbon::now(),
			]);
			return true;
    	}
    	return false;
    }

    public function estimate_total_taxes($nation_id)
    {
    	$tax_rate = \DB::table('nations')->where('id', $nation_id)->pluck('tax_rate');
    	$tax_rate = $tax_rate[0];

    	$total_population = \DB::table('nation_population')->where('nation_id', $nation_id)->pluck('total_population');
    	$total_population = $total_population[0];

    	$last_tax = \DB::table('nation_time_tracking')->where('nation_id', $nation_id)->pluck('last_tax_collection');
    	$last_tax = Carbon::parse($last_tax[0]);

    	//grab it from settings table
    	//$cycle_length = \DB::table('settings')->pluck('cycle_length');
    	$cycle_length = 7;

    	$elapsed_time = $last_tax->diffInDays(Carbon::now());

    	$elapsed_cycles = $elapsed_time/$cycle_length;

    	$tax_due_per_citizen = $tax_rate * $elapsed_cycles;

    	$available_taxes = $tax_due_per_citizen * $total_population;

		\DB::table('nation_financial')->where('nation_id', $nation_id)->update([
			'total_available_taxes' => $available_taxes,
		]);

		return true;
    }

    public function collect_taxes($nation_id)
    {
    	$total_available_taxes = \DB::table('nation_financial')->where('nation_id', $nation_id)->pluck('total_available_taxes');
    	$total_available_taxes = $total_available_taxes[0];

    	$total_money = \DB::table('nation_financial')->where('nation_id', $nation_id)->pluck('total_money_available');
    	$total_money = $total_money[0];

    	$total_money += $total_available_taxes;

		\DB::table('nation_financial')->where('nation_id', $nation_id)->update([
			'total_available_taxes' => 0,
		]);
		\DB::table('nation_financial')->where('nation_id', $nation_id)->update([
			'total_money_available' => $total_money,
		]);
		\DB::table('nation_time_tracking')->where('nation_id', $nation_id)->update([
			'last_tax_collection' => Carbon::now(),
		]);

		return true;


    }

    public function last_r_edit($nation_id)
    {
        $last_time = \DB::table('nation_time_tracking')->where('nation_id', $nation_id)->first();
        return $last_time->last_religion_edit;   
    }

    public function last_tax_rate($nation_id)
    {
        $last_time = \DB::table('nation_time_tracking')->where('nation_id', $nation_id)->first();
        return $last_time->last_tax_rate_edit; 
    }

    /* the end of APIs section */
    /***************************/

    public function get_private_info($nation_id = null)
    {
        $nation = \App\Nation::find(\Auth::user()->current_nation_id);
        $ruler = \App\User::find($nation->ruler_id);
        $land = \App\Land::find($nation->land_id);
        $population = \DB::table('nation_population')->where('nation_id', $nation->id)->first();
        $millitary = \DB::table('nation_millitary')->where('nation_id', $nation->id)->first();
        $user_soldiers = \DB::table('users_soldiers')->where('nation_id', $nation->id)->get();
        $financial = \DB::table('nation_financial')->where('nation_id', $nation->id)->first();
        $resources = \DB::table('nation_resources')->where('nation_id', $nation->id)->get();

        $nation_time_tracking = \DB::table('nation_time_tracking')->where('nation_id', $nation->id)->first();

        $billing_date = new Carbon($nation_time_tracking->last_bill_payment);

        $billing_diff = $billing_date->diff(Carbon::now())->days;
        
        return view('menus.viewNationInfo', compact('nation', 'ruler', 'land', 'population', 'millitary', 'user_soldiers', 'financial', 'resources', 'billing_date', 'billing_diff'));
    }

    public function edit_nation()
    {
        $nation_id = \Auth::user()->current_nation_id;

        //raising of bug - what if user has multiple nations?
        $nation = \App\Nation::find($nation_id);
        $colors = explode(',', $nation->nation_colors);
        return view('menus.editNation', compact('nation', 'colors'));
    }

    public function update_nation(Request $request)
    {
        $last_religion_edit = $this->last_r_edit($request->nation_id);
        $last_religion_edit = new Carbon($last_religion_edit);
        $last_tax_edit = $this->last_tax_rate($request->nation_id);
        $last_tax_edit = new Carbon($last_tax_edit);
        $now = Carbon::now();

        //checking for the validation of the request
        //if( $last_religion_edit->diff($now)->days <= 3 || $last_tax_edit->diff($now)->days <= 1 )
            //return redirect()->back()->withInput()->with('error', 'validation error!');

        $nation = \App\Nation::find($request->nation_id)->update([
                'state_name' => $request->nation_name,
                'nation_slogan' => $request->nation_slogan,
                'nation_colors' => $request->nation_color1.','.$request->nation_color2,
                'nation_religion' => $request->nation_religion,
                'war_prefrence' => $request->nation_war_preference,
                'tax_rate' => $request->tax_rate,
            ]);


        if($request->hasFile('flag_img'))
            if($this->upload_photo($request))
            {
                return '$this->upload_photo($request)';
            }
            else
                return redirect('/');
        else
            return redirect()->back();
    }

    public function upload_photo($request)
    {
        if($request->file('flag_img')->isValid())
        {
            $cpanelPath = 'images';
            $imgSource = $request->file('flag_img')->getClientOriginalExtension();
            $imgNewName = rand(11111, 99999).'.'.$imgSource;

            $img = $request->file('flag_img')->move($cpanelPath, $imgNewName);
            $path = $img->getPathName();
            $nation = \App\Nation::find($request->nation_id)->first();
            $nation->nation_flag = $path; 
            $nation->save();
            return true;
        }
        return false;
    }

    public function make_trade_deal(Request $request)
    {

        //accepting offerd goods that has value > 0
        for ($i=0, $si = sizeof($request->resources_offered_name); $i < $si; $i++) { 
            if($request->resources_offered_list[$i] > 0)
                $offered_list[$request->resources_offered_name[$i]] = $request->resources_offered_list[$i];
        }

        //packing them to be stored
        $json_offered = json_encode($offered_list);

        //accepting requested goods that has value > 0
        for ($i=0, $si = sizeof($request->resources_requested_name); $i < $si; $i++) { 
            if($request->resources_requested_list[$i] > 0)
                $requested_list[$request->resources_requested_name[$i]] = $request->resources_requested_list[$i];
        }

        $json_requested = json_encode($requested_list);

        $nation_id = \Auth::user()->current_nation_id;
        $user_nation = \App\Nation::find($nation_id);
        $target_nation = \App\Nation::where('state_name', $request->nation_name)->first();

        //check if same nation 
        if($user_nation->id == $target_nation->id)
            return redirect()->back();

        //insert new deal
        $new_request = \DB::table('nation_trade')->insert([
                'nation_id' => $user_nation->id,
                'targeted_nation_id' => $target_nation->id,
                'offer' => $json_offered,
                'request' => $json_requested
            ]);

        return redirect()->back();
    }

    public function activate_trade_request(Request $deal_request)
    {
        //checking if this was sent as counter-deal instance
        if($deal_request->counter_deal > 0){
            $this->make_counter_deal($deal_request);
            return redirect()->back();
        }

        //checking if this was sent as remove-deal instance
        if($deal_request->remove_deal > 0){
            $this->remove_deal($deal_request);
            return redirect()->back();
        }
        
        //get the deal instance
        $deal = \DB::table('nation_trade')->find($deal_request->deal_id);

        $offering_nation = \App\Nation::find($deal->nation_id);
        $target_nation = \App\Nation::find($deal->targeted_nation_id);

        //incrementing resources
        $offers = json_decode($deal->offer);
        $requests = json_decode($deal->request);

        if($this->offer_nation($deal, $offers) && $this->request_nation($deal, $requests))
            //changing offer status 
            \DB::table('nation_trade')
                ->where('id', $deal_request->deal_id)
                ->update(['accepted' => 1]);
        else
            dd('value limitation error');
            //raise an error that value doesn't allow deal

        return redirect()->back();
    }

    public function offer_nation($deal, $offers)
    {
        foreach ($offers as $name => $value) {

            //increment target nation 
            //check if nation has this type of resources
            $query = \DB::table('nation_resources')
                ->where('nation_id', $deal->targeted_nation_id)
                ->where('resource_name', $name)
                ->first();

            if(!is_null($query)){
                if($query->resource_qunatity >= $value)
                    \DB::table('nation_resources')->where('nation_id', $deal->targeted_nation_id)
                    ->where('resource_name', $name)
                    //increment old value
                    ->increment('resource_qunatity', $value);
                else
                    return false;
            }
            else
                \DB::table('nation_resources')
                    ->insert([
                            'nation_id'     => $deal->targeted_nation_id,
                            'resource_name' => $name,
                            'resource_qunatity' => $value
                    ]);

            //decrement offering nation
            \DB::table('nation_resources')
                ->where('nation_id', $deal->nation_id)
                ->where('resource_name', $name)
                ->decrement('resource_qunatity', $value);

        }
        return true;
    }

    public function request_nation($deal, $requests)
    {
        foreach ($requests as $name => $value) {

            //decrement target nation 
            //check if nation has this type of resources
            $query = \DB::table('nation_resources')
                ->where('nation_id', $deal->nation_id)
                ->where('resource_name', $name)
                ->first();

            if(!is_null($query)){
                if($query->resource_qunatity >= $value)
                    \DB::table('nation_resources')->where('nation_id', $deal->nation_id)
                    ->where('resource_name', $name)
                    //increment old value
                    ->increment('resource_qunatity', $value);
                else
                    return false;
            }

            //decrement offering nation
            \DB::table('nation_resources')
                ->where('nation_id', $deal->targeted_nation_id)
                ->where('resource_name', $name)
                ->decrement('resource_qunatity', $value);

        }

        return true;
    }

    public function make_counter_deal($deal_request)
    {
        $nation = \DB::table('nation_trade')->find($deal_request->deal_id);

        $deal = \DB::table('nation_trade')
            ->where('id', $deal_request->deal_id)
            ->update([
                    'offer'                 => json_encode($deal_request->counter_offered_value),
                    'request'               => json_encode($deal_request->counter_request_value),
                    'counter'               => 1,
                    'nation_id'             => $nation->targeted_nation_id,
                    'targeted_nation_id'    => $nation->nation_id
                ]);
        return;
    }

    public function remove_deal($deal_request)
    {
        $deal = \DB::table('nation_trade')
            ->where('id', $deal_request->deal_id)
            ->delete();
        return;
    }

}
