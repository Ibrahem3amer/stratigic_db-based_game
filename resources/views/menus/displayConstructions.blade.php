@extends('game.base')

@section('page_content')
	<main>
	
		<div  class = "container-fluid">
		
		
			<!-- taxes -->
			<div class = "panel panel-default panel-custom">
			
				<div class = "panel-heading">
				
					View My Constructions
				
				</div>
				
				<div class = "panel-body">
				
					<table class = "table table-bordered table-right" >
					
							
							
							<tr>
							
								<td colspan = "2" width="30%">
								
									<a class = "btn-default" href = "#"> Population: </a>
								</td>
								
								<td colspan = "2"> 
								
									{{$nation_population->total_population}}
								
								</td>
							
							</tr>
							
							<tr>
								<?php $land = \DB::table('lands')->find($nation->land_id); ?>
								<td colspan = "2" width="30%">
								
									<a class = "btn-default" href = "#"> Free Land Area: </a>
								</td>
								
								<td colspan = "2"> 
								
									{{$land->land_size}}
								
								</td>
							
							</tr>
							
							<tr>
							
								<td colspan = "2" width="30%">
								
									<a class = "btn-default" href = "#"> Total Buildings Constructed: </a>
								</td>
								
								<td colspan = "2"> 
								
									{{sizeof($buildings)}}
								
								</td>
							
							</tr>
							
							<tr>
								<td colspan = "2" width="30%">
								
									<a class = "btn-default" href = "#"> <i class = "fa fa-exclamation-circle"></i> Total Buildings Maintenance Cost: </a>
								</td>
								
								<td colspan = "2">
								
									${{$nation->additional_maintenance_per_cycle * sizeof($buildings)}}
								
								</td>
							
							</tr>
							
							<tr>
							
								<th colspan = "4" >
								
									Constructed Buildings
								
								</th>
							
							</tr>
							<tr>
								
								@foreach($buildings as $build)
								<?php $building = \DB::table('buildings')->find($build->building_id); ?>
								<td width = "50%" >
									<a href = "#" class = "btn-default"> <i class = "fa fa-external-link"></i> <strong> {{$building->building_name}}  </strong> </a>
								</td>
								@endforeach
							
							</tr>

							
							
							
							
					</table>
				
				
				</div>

			</div>
			
		
	</main>
@endsection