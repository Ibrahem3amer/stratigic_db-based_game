<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;

class financial_controller extends Controller
{
    public function get_info()
    {
    	//get user nation
    	$user = \Auth::user();
    	//should spcify which nation to get
    	//$nation = \App\Nation::where('ruler_id', $user->id)->first();
        $nation = \App\Nation::where('ruler_id', $user->id)->where('id', 8)->first();

    	$financial = \DB::table('nation_financial')->where('nation_id', $nation->id)->first();

    	return view('menus.financialStatus', compact('financial', 'nation'));
    }

    public function get_resources()
    {
    	$user = \Auth::user();
    	$nations = \App\Nation::get();
        $nation = \App\Nation::where('ruler_id', $user->id)->where('id', 8)->first();
    	//$nation = \App\Nation::where('ruler_id', $user->id)->first();
    	$nation_resources = \DB::table('nation_resources')->where('nation_id', $nation->id)->get();

        //get any pending deals
        $nation_deals = \DB::table('nation_trade')->where('targeted_nation_id', $nation->id)->where('accepted', '0')->get();


    	return view('menus.resources', compact('nation', 'nation_resources', 'nations', 'nation_deals'));
    }

    public function display_taxes()
    {
        //getting tax info 
        $nation = \App\Nation::find(\Auth::user()->current_nation_id);
        $nation_financial = \DB::table('nation_financial')
            ->where('nation_id', $nation->id)
            ->first();

        return view('menus.collectTaxes', compact('nation', 'nation_financial'));

    }

    public function collect_taxes(Request $tax_request)
    {

        //getting tax info 
        $nation = \App\Nation::find(\Auth::user()->current_nation_id);
        
        $nation_financial = \DB::table('nation_financial')
            ->where('nation_id', $nation->id)
            ->first();

        $total_available_tax = $this->calculate_available_tax($nation, $nation_financial);

        //updating values
        $nation_financial_update = \DB::table('nation_financial')
            ->where('nation_id', $nation->id)
            ->update([
                    'total_money_available'             => $nation_financial->total_money_available + $total_available_tax,
                    'total_money_from_tax_collection'   => $nation_financial->total_money_from_tax_collection + $total_available_tax
                ]);
        
        return redirect()->back();





    }

    public function calculate_available_tax($nation, $nation_financial)
    {
        $last_tax_date = \DB::table('nation_time_tracking')
            ->where('nation_id', $nation->id)
            ->first();

        //times instances
        $last_tax_date = new Carbon($last_tax_date->last_tax_collection);
        $now = Carbon::now();

        //difference in days
        $days_elapsed = $last_tax_date->diff($now)->days;
        $cycles_elapsed = $days_elapsed / 8; //$cycle_length from admin settings
        $total_tax_per_cycle =  $nation->tax_rate * 
                                $nation_financial->tax_paying_citizien;
        $total_available_tax = $total_tax_per_cycle * $cycles_elapsed;

        $last_tax_date = \DB::table('nation_time_tracking')
            ->where('nation_id', $nation->id)
            ->update([
                    'last_tax_collection' => $now
                ]);

        return $total_available_tax;

    }

    public function display_bills()
    {
        $nation = \App\Nation::find(\Auth::user()->current_nation_id);
        
        $nation_financial = \DB::table('nation_financial')
            ->where('nation_id', $nation->id)
            ->first();

        $nation_last_bills_date = \DB::table('nation_time_tracking')
            ->where('nation_id', $nation->id)
            ->first();

        $nation_military = \DB::table('nation_millitary')
            ->where('nation_id', $nation->id)
            ->first();

        $nation_soldiers = \DB::table('users_soldiers')
            ->where('nation_id', $nation->id)
            ->get();

        $nation_bulidings = \DB::table('nation_constructions')
            ->where('nation_id', $nation->id)
            ->get();

        return view('menus.displayBills', compact('nation', 'nation_financial', 'nation_military', 'nation_bulidings', 'nation_last_bills_date', 'nation_soldiers'));

    }

    public function pay_bills(Request $bills_request)
    {
        $nation = \App\Nation::find(\Auth::user()->current_nation_id);

        //calculate bills due to military and constrictions
        $total_bills_due = $this->calculate_bills($nation);

        $total_money = \DB::table('nation_financial')
            ->where('nation_id', $nation->id)
            ->first();

        $now = Carbon::now();

        $rest = $total_money->total_money_available - $total_bills_due;
        if($rest > 0){

            //update time 
            \DB::table('nation_time_tracking')
                ->where('nation_id', $nation->id)
                ->update([
                        'last_bill_payment' => $now
                ]);

            //update total available money 
            \DB::table('nation_financial')
                ->where('nation_id', $nation->id)
                ->update([
                        'total_money_available' => $rest,
                        'total_bills_due' => 0
                ]);

            //update bills due 

            return redirect()->back();

        }
        else{
            $balance_error = 'You do not have enough money for this operation';        
            return redirect()->back()->with('error', $balance_error);
                       
        }
        

    }

    public function calculate_bills($nation)
    {

        $nation_last_bills_date = \DB::table('nation_time_tracking')
            ->where('nation_id', $nation->id)
            ->first();

        $nation_soldiers = \DB::table('users_soldiers')
            ->where('nation_id', $nation->id)
            ->get();

        $nation_bulidings = \DB::table('nation_constructions')
            ->where('nation_id', $nation->id)
            ->get();

        //times instances
        $last_bills_date = new Carbon($nation_last_bills_date->last_bill_payment);
        $now = Carbon::now();

        //difference in days
        $days_elapsed = $last_bills_date->diff($now)->days;
        $cycles_elapsed = $days_elapsed / 8; //$cycle_length from admin settings

        //calculate military cost
        $total_military_cost = 0;
        foreach ($nation_soldiers as $type) {
            $total_military_cost += $type->soldier_type_count * $type->upkeep_cost;
        }

        //calculate bulidings cost
        $total_construction_cost = 0;
        foreach ($nation_bulidings as $building) {
            $total_construction_cost += $building->maintenance_cost;
        }

        $total_bills_due = (    $total_military_cost 
                                + 
                                $total_construction_cost 
                                + 
                                $nation->additional_maintenance_per_cycle ) 
                                *
                                $cycles_elapsed;

        return $total_bills_due;

    }

    public function display_grievances()
    {
        $nation = \App\Nation::find(\Auth::user()->current_nation_id);

        $grievances = \DB::table('grievances')
            ->where('target_nation_id', $nation->id)
            ->get();

        return view('menus.grievances', compact('grievances'));
    }

    public function pay_grievances()
    {
        $nation = \App\Nation::find(\Auth::user()->current_nation_id);

        $nation_financial = \DB::table('nation_financial')
            ->where('nation_id', $nation->id)
            ->first();

        $grievances = \DB::table('grievances')
            ->where('target_nation_id', $nation->id)
            ->sum('money_required');

        $rest = $nation_financial->total_money_available - $grievances;
        if($rest >= 0) {
            //update total available money 
            \DB::table('nation_financial')
                ->where('nation_id', $nation->id)
                ->update([
                        'total_money_available' => $rest
                ]);
            return redirect()->back();

        }
        else{
            $balance_error = 'You do not have enough money for this operation';        
            return redirect()->back()->with('error', $balance_error);
                       
        }
    }
}
