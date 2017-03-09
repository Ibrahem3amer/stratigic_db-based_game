<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class construction_controller extends Controller
{
    public function display_construction()
    {
    	$nation = \App\Nation::find(\Auth::user()->current_nation_id);


    	$buildings = \DB::table('nation_constructions')
    		->where('nation_id', $nation->id)
    		->get();

		$nation_population = \DB::table('nation_population')
    		->where('nation_id', $nation->id)
    		->first();


    	return view('menus.displayConstructions', compact('buildings', 'nation', 'nation_population'));
    }

    public function construct_new_building()
    {	

    	$nation = \App\Nation::find(\Auth::user()->current_nation_id);


    	$buildings = \DB::table('buildings')
    		->get();

		$nation_population = \DB::table('nation_population')
    		->where('nation_id', $nation->id)
    		->first();

		$nation_financial = \DB::table('nation_financial')
    		->where('nation_id', $nation->id)
    		->first();

		$nation_resources = \DB::table('nation_resources')
    		->where('nation_id', $nation->id)
    		->pluck('resource_qunatity', 'resource_name');



    	return view('menus.constructBuilding', compact('buildings', 'nation', 'nation_population', 'nation_financial', 'nation_resources'));
    }

    public function buy_building(Request $request)
    {
    	//validate resources 
    	$has_resources = $this->has_resources($request);
    	//terminate if user has no enough rsources
    	if(!$has_resources)
    		return redirect()->back()->with('notification', 'No enough resources!');
    	
    	//validate prerequisites 
    	$has_prerequisites = $this->has_prerequisites($request);
    	//terminate if user has missed one of required buildings
    	if(!$has_prerequisites)
    		return redirect()->back()->with('notification', 'No enough required buildings');

    	//validate money
    	$has_money = $this->has_money($request);

    	if($has_resources && $has_prerequisites && $has_money)
    		return redirect()->back()->with('notification', 'Proccess completed!');
    	else 
    		return redirect()->back()->with('notification', 'Check your balance!');
    }

    public function has_resources($request)
    {
    	$user_resources = \DB::table('nation_resources')
    		->where('nation_id', \Auth::user()->current_nation_id)
    		->pluck('resource_qunatity','resource_name');

		$building = \DB::table('buildings')
			->find($request->building_id);

		$building_resources = json_decode($building->construction_resources_cost);

		foreach ($building_resources as $name => $value) {

			//checking if user have all resources, else return false 
			if(!isset($user_resources[$name]))
				return false;
			//check amount of resource 
			else if($value > $user_resources[$name])
				return false;
		}

		return true;		

    }

    public function has_prerequisites($request)
    {
    	$user_buildings = \DB::table('nation_constructions')
    		->where('nation_id', \Auth::user()->current_nation_id)
    		->pluck('building_id');

		$building = \DB::table('buildings')
			->find($request->building_id);

		$building_requested = json_decode($building->required_buildings);

		if(sizeof($building_requested) > 0)
			foreach ($building_requested as $r_building) {
				$r_building = \DB::table('buildings')
					->where('building_name', $r_building)
					->first();

				//checking if user have all resources, else return false
				if(!array_search($r_building->id, $user_buildings))
					return false;

			}

		return true;	
    }

    public function has_money($request)
    {
    	$user_money = \DB::table('nation_financial')
    		->where('nation_id', \Auth::user()->current_nation_id)
    		->first();

		$building = \DB::table('buildings')
			->find($request->building_id);

		$rest = $user_money->total_money_available - 
				($request->building_amount * $building->money_cost);

		if($rest >= 0)
    		return $this->activate_buying($request, $rest, $building);
    	else
    		return false;


    }		

	public function activate_buying($request, $rest, $building)
	{
		//getting nation info 
		$nation = \App\Nation::find(\Auth::user()->current_nation_id);

		//update money for user
		$user_money = \DB::table('nation_financial')
    		->where('nation_id', \Auth::user()->current_nation_id)
    		->update([
    				'total_money_available' => $rest
    			]);

		//move constructions details to user account * amount 
		$user_constructions = \DB::table('nation_constructions')
    		->insert([
    				'nation_id' => $nation->id,
    				'building_id' => $building->id,
    				'is_constructed' => 1,
    				'maintenance_cost' => $building->money_cost,
    				'count' => $request->building_amount
    			]);

		return true;
	}

	public function get_nation_tech()
	{
		//get user tech
		$nation = \App\Nation::find(\Auth::user()->current_nation_id);

		$nation_tech = \DB::table('nation_tech')
    		->where('nation_id', $nation->id)
    		->get();

		$techs = [];
		if(sizeof($nation_tech) > 0)
			foreach ($nation_tech as $tech) {
				$instance = \DB::table('technologies')->select('id', 'name', 'desc')->find($tech->tech_id);
				array_push($techs, $instance);
			}

		return json_encode($techs);
	}

	public function get_tech()
	{
		$techs = \DB::table('technologies')
			->select('id', 'name')
			->get();

		return json_encode($techs);
	}

	public function get_full_tech(Request $request)
	{

		$techs = \DB::table('technologies')
			->find($request->techId);

		$callback_array = [];


		$callback_array['description']			 	= $techs->desc;
		$callback_array['researchResourcesCost'] 	= json_decode($techs->tech_resources_cost);
		$callback_array['requiredBuildings']		= json_decode($techs->required_buildings);
		$callback_array['requiredTechnologies'] 	= json_decode($techs->required_tech);

		return json_encode($callback_array);
	}

	public function get_nation_resources()
	{
		$nation = \App\Nation::find(\Auth::user()->current_nation_id);

		$nation_resources = \DB::table('nation_resources')
    		->where('nation_id', $nation->id)
    		->pluck('resource_qunatity','resource_name');


		return json_encode($nation_resources);
	}

	public function display_tech()
	{
		$nation_tech = $this->get_nation_tech();
		$all_tech = \DB::table('technologies')
			->get();
		return view('menus.tech', compact('nation_tech', 'all_tech'));
	}

	public function get_nation_builds()
	{
    	$user_buildings = \DB::table('nation_constructions')
    		->where('nation_id', \Auth::user()->current_nation_id)
    		->get();

		$callback_array = [];

		if(sizeof($user_buildings) > 0)
			foreach ($user_buildings as $build) {
				$building_info = \DB::table('buildings')->find($build->building_id);
				$callback_array[$building_info->building_name] = $build->count;
			}

		return json_encode($callback_array);
	}

	public function unlock_tech(Request $request)
	{
		//just a placeholder 
		$tech = \DB::table('technologies')
			->find(1);

		$nation = \App\Nation::find(\Auth::user()->current_nation_id);

		$nation_tech = \DB::table('nation_tech')
			->where('nation_id', $nation->id)
			->pluck('tech_id');


		//check for duplication
		if(in_array($tech->id, $nation_tech))
			return redirect()->back()->with('status', 'You already have this tech');


		//check for cost 
		$has_resources = $this->has_tech_resources($tech, $nation);
    	//terminate if user has missed one of resources
    	if(!$has_resources)
    		return redirect()->back()->with('status', 'No enough resources!');

    	//check for required tech 
		$has_tech = $this->has_enough_tech($tech, $nation);
    	//terminate if user has missed one of resources
    	if(!$has_tech)
    		return redirect()->back()->with('status', 'No required technologies!');

    	//check for required buildings 
		$has_buildings = $this->has_tech_buildings($tech, $nation);
    	//terminate if user has missed one of resources
    	if(!$has_buildings)
    		return redirect()->back()->with('status', 'No required buildings!');

    	//add tech to user account 
    	\DB::table('nation_tech')
    		->where('nation_id', $nation->id)
    		->insert([
    				'nation_id' => $nation->id,
    				'tech_id' => $tech->id
    			]);
    	return redirect()->back()->with('status', 'Tech unlocked!');


	}

	public function has_tech_resources($tech, $nation)
	{
		//grab nation resources 
    	$user_resources = \DB::table('nation_resources')
    		->where('nation_id', $nation->id)
    		->pluck('resource_qunatity','resource_name');


		$tech_resources = json_decode($tech->tech_resources_cost);

		foreach ($tech_resources as $name => $value) {

			//checking if user have all resources, else return false 
			if(!isset($user_resources[$name]))
				return false;
			//checking amount 
			else if($value > $user_resources[$name])
				return false;
		}

		return true;
	}

	public function has_enough_tech($tech, $nation)
	{
		//grab nation tech 
    	$user_tech = \DB::table('nation_tech')
    		->where('nation_id', $nation->id)
    		->pluck('tech_id');
		//grabing tech info 
		foreach ($user_tech as $tech_id) {
			$tech = \DB::table('technologies')->find($tech_id);
			$user_tech[$tech->name] = 1;
		}

		$tech_required = json_decode($tech->required_tech);
		//if no tech required
		if(sizeof($tech_required) < 0)
			return true;

		foreach ($tech_required as $tech) {
			foreach ($tech as $key => $value) {
				//tech has two attributes ['name'], ['desc'] I want to check names
				if($key == 'name')
					//checking if user_tech has required technologies
					if(!isset($user_tech[$key]))
						return false;
			}
		}

		return true;
	}

	public function has_tech_buildings($tech, $nation)
	{
    	$user_buildings = \DB::table('nation_constructions')
    		->where('nation_id', $nation->id)
    		->pluck('building_id');

		$building_requested = json_decode($tech->required_buildings);
		//if no builds required
		if(sizeof($tech_required) < 0)
			return true;
		
		foreach ($building_requested as $building => $num) {
			$r_building = \DB::table('buildings')
				->where('building_name', $building)
				->first();

			//checking if user have all builds, else return false
			if(!array_search($r_building->id, $user_buildings))
				return false;

			$building_count = \DB::table('nation_constructions')
    		->where('nation_id', $nation->id)
    		->where('building_id', $r_building->id)
    		->select('count')
    		->first();

    		//cheking for the amount of required building
    		if($building_count < $num)
    			return false;

		}

		return true;
	}

}
