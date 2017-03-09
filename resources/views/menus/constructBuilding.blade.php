@extends('game.base')

@section('page_content')
	<main>
	
		<div  class = "container-fluid">
			@if(session()->has('notification'))
				<div class="alert alert-info" role="alert">{{session('notification')}}</div>
			@endif
			@foreach($buildings as $build)
			<form action="{{URL::to('/game/construct')}}" method="post">
				{{ csrf_field() }}
				<input type="hidden" value="{{$build->id}}" name="building_id" />
				<?php	$stats = \DB::table('building_stats')->find($build->id);
						$resources = json_decode($build->construction_resources_cost);
						$req_buildings = json_decode($build->required_buildings);
						?>
				<div class = "panel panel-default panel-custom">
				
					<div class = "panel-heading">
						View Building Info
						
					</div>
					
					<div class = "panel-body">
					
						<!-- summary -->
						<div> 
							<span class = "right panel-div-title">  [Summary] </span><br/>
							
							
							
							<h2><strong>{{$build->building_name}}</strong></h2>
							
							<p> 
							{{$build->description}}
								
								
							</p>
							
						
						</div><!--ends summary -->
						<hr class = "panel-hr" />
						
						<!-- Details -->
						<div>
							<span class = "right panel-div-title">  [Details] </span><br/>
							
							<table class = "table table-bordered table-right">
						
								<tr>
								
									<th colspan = "4" >
									
										Construction Cost
									
									</th>
								
								</tr>
								<tr>
								
									<td width="25%">
									
										Money Cost
									</td>
									
									<td  width="25%">
									
										${{$build->money_cost}}
									
									</td>
								
								
									@foreach($resources as $name => $value)
									<tr >								
										<td width="25%">
										
											{{$name}}
										</td>
										
										<td  width="25%">
										
											{{$value}}
										
										</td>
									</tr>
									@endforeach
								
								</tr>
								
								<tr>
								
									<th colspan = "4" >
									
										Required Buildings (prerequisites)
									
									</th>
								
								</tr>
								<tr>
								
									@if(sizeof($req_buildings) > 0)
										@foreach($req_buildings as $name => $count)
											<?php $build_info = \DB::table('buildings')->where('building_name', $name)->first();
												$user_build = \DB::table('nation_constructions')->where('nation_id', $nation->id)
													->pluck('count', 'building_id');
												$user_count = 0;
												if(isset($user_build[$build_info->id]))
												{
													$user_count = $user_build[$build_info->id];
												}
											?>
											<td >
												{{$name}}
											</td>
											<td >
												
												{{$count}} <strong> / {{$user_count}}</strong>
											
											</td>
										@endforeach
									@endif
								
									<td >
									
									</td>
									
									<td >
									
									
									</td>
								
								</tr>
								
								<tr>
								
									<th colspan = "4" >
									
										Effects
									
									</th>
								
								</tr>
								
								<tr>
								
									<td colspan = "2">
									
										Income Per Cycle
									
									</td>
									
									<td colspan = "2">
										
										${{$stats->income_per_cycle}}
										
									</td>
								
								</tr>
								<tr>
								
									<td colspan = "2">
									
										Population Happiness
									
									</td>
									
									<td colspan = "2">
										
										<span class = "green" > +{{$stats->happiness_effect}}% </span>
										
									</td>
								
								</tr>
								<tr>
								
									<td colspan = "2">
									
										Crime Rate
									
									</td>
									
									<td colspan = "2">
										
										<span class = "red" > +{{$stats->crime_rate_effect}}% </span>
										
									</td>
								
								</tr>
								<tr>
								
									<td colspan = "2">
									
										Population Growth Rate
									
									</td>
									
									<td colspan = "2">
										
										{{$stats->population_rate_effect}}
										
									</td>
								
								</tr>
								<tr>
								
									<td colspan = "1">
									
										Stone Collected per cycle
									
									</td>
									
									<td colspan = "1">
										
										{{$stats->stone_income_per_cycle}}
										
									</td>
								
									<td colspan = "1">
									
										Wood Collected per cycle
									
									</td>
									
									<td colspan = "1">
										
										{{$stats->wood_income_per_cycle}}
										
									</td>
								</tr>
								<tr>
									<td colspan = "1">
									
										Iron Collected per cycle
									
									</td>
									
									<td colspan = "1">
										
										{{$stats->iron_income_per_cycle}}
										
									</td>
								
								
								</tr>
								<tr>
								
									<td colspan = "2">
									
										Population Coverage
									
									</td>
									
									<td colspan = "2">
										
										{{$stats->population_coverage}}
										
									</td>
								
								</tr>
								<tr>
								
									<td colspan = "2">
									
										Millitary Unit Upkeep Cost
									
									</td>
									
									<td colspan = "2">
										
										+${{$stats->military_unit_upkeep_cost_effect}}
										
									</td>
								
								</tr>
								<tr>
								
									<td colspan = "2">
									
										Millitary Unit Effectiveness
									
									</td>
									
									<td colspan = "2">
										
										+%{{$stats->military_unit_effectiveness_effect}}
										
									</td>
								
								</tr>
								
								
								
						</table>
					
							<hr class = "panel-hr"></hr>
					
							<div>
								
								<table class = "table table-bordered table-right">
								
									<td colspan = "4">
										<label> Amount: </label> <input type="number" name="building_amount" value="">
									
									</td>
									<tr>
									
										<th>
											
										</th>
									
										<th>
											Available
										</th>
									
										<th>
											Cost 
										</th>
									
										<th>
											Remaining
										</th>
									
									
									</tr>
								

										@foreach($resources as $name => $value)
										<tr>
											<td>
												{{$name}}
											</td>
											<td>
												@if(isset($nation_resources[$name]))
													@if($nation_resources[$name] > $value)
														<span class = "green"> {{$nation_resources[$name]}} <i class = "fa fa-exclamation-triangle"></i></span>
													@else
														<span class = "red"> {{$nation_resources[$name]}} <i class = "fa fa-exclamation-triangle"></i></span>
													@endif
												@else
													<span class = "red">None<i class = "fa fa-exclamation-triangle"></i></span>
												@endif
											</td>
											<td>
												{{$value}}
											</td>
											<td>
												{{isset($nation_resources[$name])
													?$nation_resources[$name] - $value
													:$value - $value}}
											</td>
										</tr>
										@endforeach
									<tr>
										
										<td>
											Money 
										</td>
										<td>
											@if(isset($nation_financial->total_money_available))
												@if($nation_financial->total_money_available > 		$build->money_cost)
													<span class = "green"> {{$nation_financial->total_money_available}}
												@else
													<span class = "red"> {{$nation_financial->total_money_available}} <i class = "fa fa-exclamation-triangle"></i></span>
												@endif
											@else
												<span class = "red">None<i class = "fa fa-exclamation-triangle"></i></span>
											@endif
										</td>
										<td>
											{{$build->money_cost}}
										</td>
										<td>
											{{isset($nation_financial->total_money_available)
												?$nation_financial->total_money_available - $build->money_cost
												:$build->money_cost - $build->money_cost}}
										</td>
									
									</tr>
									
									
								
								</table>
								
								
							<button type = "submit" class = "form-control"  > <i class = "fa fa-shopping-cart" ></i> Purchase Buildings </button>
							</div>
							<br/>
							<br/>
						</div>	
					</div>

				</div>
			</form>
			@endforeach
		</div>	
		
	</main>
@endsection