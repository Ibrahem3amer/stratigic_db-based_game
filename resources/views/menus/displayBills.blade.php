@extends('game.base')

@section('page_content')
	<main>
	
		<div  class = "container-fluid">
		
		
			<!-- taxes -->
			<div class = "panel panel-default panel-custom">
			
				<div class = "panel-heading">
				
					Pay Bills
				
				</div>
				@if(session()->has('error'))
					<div class="alert alert-danger" role="alert">{{session('error')}}</div>
				@endif
				<div class = "panel-body">
					<form action="{{URL::to('/game/paybills')}}" method="post">
						{{ csrf_field() }}
						<img src = "{{URL::to('/images/taxes.png')}}" class = "img-responsive"> </img>
						
						<table class = "table table-bordered table-right">
						
								<tr>
								
									<th colspan = "2" >
									
										Bills
									
									</th>
								
								</tr>
								<tr>
								
									<td width="50%">
									
										<a class = "btn-default" href = "#"> <i class = "fa fa-exclaimation-circle"></i> Last bill payment date </a>
									</td>
									
									<td>
									
										{{$nation_last_bills_date->last_bill_payment}}
									
									</td>
								
								</tr>
								
								<tr>
								
									<th colspan = "2" >
									
										Properties & Costs
									
									</th>
								
								</tr>
								<tr>
								
									<td>
									
										total millitary units
									</td>
									
									<td>
									
										{{sizeof($nation_soldiers)}}
									
									</td>
								
								</tr>
								<tr>
								
									<td class = "red" >
									
										total millitary maintenace cost
									</td>
									
									<td class = "red">
									
										<?php $sum = 0;?>
										@foreach($nation_soldiers as $type)
											<?php $sum += 	$type->soldier_type_count * 
															$type->upkeep_cost; 
											?>
										@endforeach

										${{$sum * $nation->millitary_upkeep_effect}}
									
									</td>
								
								</tr>
								<tr>
								
									<td>
									
										number of constructed buildings
									</td>
									
									<td>
									
										{{sizeof($nation_bulidings)}}
									
									</td>
								
								</tr>	
								<tr>
								
									<td>
									
										additional maintenance cost
									</td>
									
									<td>
									
										${{$nation->additional_maintenance_per_cycle}}
									
									</td>
								
								</tr>
								<tr>
								
									<td class = "red">
									
										total construction maintenace cost
									</td>
									
									<td class = "red">
									
										<?php $buildings_sum = 0;?>
										@foreach($nation_bulidings as $building)
											<?php $sum += $building->maintenance_cost; ?>
										@endforeach

										${{$buildings_sum}}
									
									</td>
								
								</tr>
								
								<tr>
									<th colspan = "2"></th>
								</tr>
								<tr>
								
									<td class = "red">
									
										<b> total available money</b>
									</td>
									
									<td class = "red">
									
										<b>${{$nation_financial->total_money_available}}</br>
									
									</td>
								</tr>
								<tr>
								
									<td>
									
										<b> total bills due</b>
									</td>
									
									<td>
									
										<b>${{$nation_financial->total_bills_due}}</br>
									
									</td>
								</tr>
								<tr>
								
									<td class = "green" >
									
										<b> moeny after paying bills</b>
									</td>
									<?php $money_after = 0; ?>
									<?php $money_after =  $nation_financial->total_money_available - $nation_financial->total_bills_due; ?>
									@if($money_after > 0)
										<td class = "green">
										
											<b>${{$money_after}}
											</br>
										
										</td>
									@else
										<td class = "red">
										
											<b>${{$money_after}}
											</br>
										
										</td>
									@endif
								</tr>
								
						</table>
					
						<input type = "submit" value = "Pay bills now" class = "form-control"> 
					</form>
				</div>

			</div>
			
		
	</main>
@endsection