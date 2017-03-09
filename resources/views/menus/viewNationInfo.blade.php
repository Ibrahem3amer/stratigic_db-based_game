@extends('game.base')

@section('page_content')
	<main>

		<div class = "col-*-*">
		
			<span  id = "serverTime"  >Server Time:  <br/></span>				
			<div id = "nationSelection">
				<h5><strong>
				<select id = "optNationSelection" onchange = "changeNation();" style = "min-width: 200px">
				
					<option>
					
					Default Nation
					
					</option>
				
				</select></strong></h5>
				
			</div>
		
		</div>
	
		<div  class = "container-fluid">
		
			<!-- nation summary panel -->
			<div class = "panel panel-default panel-custom">
			
				<div class = "panel-heading">
					Nation Summary
					
				</div>
				
				<div class = "panel-body">
				
					<!-- nation summary-->
					<div> 
						<span class = "right panel-div-title">  [Nation Summary] </span><br/>
						{{$nation->nation_summary}}
						
					
					</div><!--ends nation summary -->
					<hr class = "panel-hr" />
					
					<!--  Notifications -->
					<div>
						<span class = "right panel-div-title">  [Your Notifications] </span><br/>
						@if($billing_diff > 0 )						
							<div class=" alert-danger red">
							  <i class = "fa fa-exclamation-triangle"></i> You haven't paid your bills today, you last paid your bills on {{$billing_diff}}  &nbsp; &nbsp;
							  <a class =  "btn-default" href = "#">  Pay bills now </a>
							</div><br/>
						@else
							<div class=" alert-success green">
							  <i class = "fa fa-check-circle"></i> You're up-to-date with your tax collection, you last collected taxes on {{$billing_date}} 
							</div>	<br/>
						@endif
								

								
						<div >
						
							This is some other information that describes your nation.
						
						</div>					
					</div><!--ends notifications-->
					
				</div>
				

			</div>
			
			
			<!-- Nation Information -->
			<div class = "panel panel-default panel-custom">
			
				<div class = "panel-heading">
					Nation Information
					
				</div>
				
				<div class = "panel-body collapsed">
				<table class = "table table-striped table-bordered table-special " >
						
					<tr>
					
						<td>
							Ruler:
						</td>
						
						<td>
							{{$ruler->name}} 
							<a href = "http://solar-gn.com/forum/memberlist.php?mode=viewprofile&u={{$ruler->user_forum_id}}" class = "btn btn-default" title = "view profile"> <i class = "fa fa-user"> </i>  </a>
							<a href = "http://solar-gn.com/forum/ucp.php?i=pm&mode=compose&u={{$ruler->user_forum_id}}" class = "btn btn-default" title = "send message"> <i class = "fa fa-envelope"> </i>  </a>
						</td>
					
					
					</tr>
					
					
					
					
					<tr>
					
						<td>
							Nation Name: 
						</td>
						
						
						<td>
							{{$nation->state_name}}
						
						</td>
					
					
					
					</tr>
					
					<tr>
					
						<td>
							Land Name:
						</td>
						
						
						<td>
							{{$land->land_name}} 
							<a href = "#" class = "btn btn-default" title = "preview land on map"> <i class = "fa fa-eye"> </i> preview land </a>
						
						</td>
					
					
					
					</tr>
					
					
					<tr>
					
						<td>
							Tax Rate:
						</td>
						
						
						<td>
							{{$nation->tax_rate}} 
						
						</td>
					
					
					</tr>
							
					<tr>
					
						<td>
							War Preference:
						</td>
						
						
						<td>
							{{$nation->war_prefrence}} 
						
						</td>
					
					
					</tr>	
							
							
				</table>
					
				</div>
				

			</div>
			@if(\Auth::check())
				@if($nation->ruler_id == \Auth::user()->id)
					<!-- Population Information -->
					<div class = "panel panel-default panel-custom">
					
						<div class = "panel-heading">
							Population Information
							
						</div>
						
						<div class = "panel-body collapsed">
						<table class = "table table-striped table-bordered table-special " >
								
							<tr>
							
								<td>
									Total Population:
								</td>
								
								<td>
									{{$population->total_population}}
								</td>
							
							</tr>
							<tr>
								<td>
									Population Happiness:
								</td>
							
								<td>
									{{$population->happiness}}
								</td>
							
							
							</tr>
							<tr>
								<td>
									Crime Rate:
								</td>
							
								<td>
									{{$population->crime_rate}}
								</td>
							
							
							</tr>
							<tr>
							
								<td>
									Population growth per cycle:
								</td>
							
								<td>
									{{$population->population_growth_per_cycle}} / 10
								</td>
								
							
							</tr>
							
							
							
									
									
						</table>
							
						</div>
						

					</div>
					
			
					<!-- Millitary Information -->
					<div class = "panel panel-default panel-custom">
					
						<div class = "panel-heading">
							Millitary Information
							
						</div>
						
						<div class = "panel-body collapsed">
						<table class = "table table-striped table-bordered table-special " >
								
							
							<tr>
								<td>
									Strength:
								</td>
							
								<td>
									{{$millitary->strength}}
								</td>
							
							
							</tr>
							<tr>
							
								<td rowspan = "2">  Total Soliders: </td>
								
								<td>{{$millitary->total_soldiers}}</td>
							</tr>
							<tr>
								<td>
									<table class = "table ">
										
										@foreach($user_soldiers as $type)
										<tr>
										
											<td> {{$type->soldier_type}}: </td>
											<td> {{$type->soldier_type_count}} </td>
										</tr>
										@endforeach
									</table>
									
								</td>
								
							
							</tr>
							<tr>
								<td>
									Deployed Soldiers:
								</td>
							
								<td>
									{{$millitary->deployed_soldiers}}
								</td>
							
							
							</tr>
							<tr>
								<td>
									Defending Soldiers:
								</td>
								
								<td>
									{{$millitary->defending_soldiers}}
								</td>
							
							</tr>
							<tr>
							
								<td>
									Total causalties:
								</td>
							
								<td>
									{{$millitary->casualty}}
								</td>
								
							
							</tr>
							<tr>
								<td>
									War Status:
								</td>
							
								<td>
									{{$millitary->war_status}}
								</td>
							
							</tr>
							
							
							
							
									
									
						</table>
							
						</div>	
					
					</div>
				
					
					
					<!-- Financial Information -->
					<div class = "panel panel-default panel-custom">
					
						<div class = "panel-heading">
							Financial Information
							
						</div>
						
						<div class = "panel-body collapsed">
						<table class = "table table-striped table-bordered table-special " >
								
							<tr>
							
								<td>
								Money:
								</td>
								
								<td>
								{{$financial->total_money_available}}
								</td>
							
							</tr>
							
							<tr>
							
								<td rowspan = "2">  Total Resources Available: </td>
								
								<td>
									 market worth: {{$financial->resources_market_worth}}
								</td>
							</tr>
							<tr>
								<td>
									<table class = "table ">
										
										@foreach($resources as $resource)
										<tr>
										
											<td> {{$resource->resource_name}}: </td>
											<td> {{$resource->resource_qunatity}} </td>
										</tr>
										@endforeach
									</table>
									
								</td>
								
							
							</tr>
							
						</table>
							
						</div>
					</div>
				@endif
			@endif
	
	</main>
@endsection