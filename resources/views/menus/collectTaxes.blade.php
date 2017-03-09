@extends('game.base')

@section('page_content')
	<main>
	
		<div  class = "container-fluid">
		
		
			<!-- taxes -->
			<div class = "panel panel-default panel-custom">
			
				<div class = "panel-heading">
				
					Collect Taxes
				
				</div>
				
				<div class = "panel-body">
				
					<img src = "{{URL::to('/images/taxes.png')}}" class = "img-responsive"> </img>
					<form action="{{URL::to('/game/collecttaxes')}}" method="post">
						{{ csrf_field() }}
						<table class = "table table-bordered table-right">
						
						<tr>
								
									<th colspan = "2" >
									
										Taxes
									
									</th>
								
								</tr>
								<tr>
								
									<td width="50%">
									
										tax rate 
									</td>
									
									<td>
									
										{{$nation->tax_rate}}%
									
									</td>
								
								</tr>
								<tr>
								
									<td>
									
										tax paying citizens 
									</td>
									
									<td>
									
										{{$nation_financial->tax_paying_citizien}}
									
									</td>
								
								</tr>
								<tr>
								
									<td>
									
										tax per citizen
									</td>
									
									<td>
									
										$xxx
									
									</td>
								
								</tr>
								<tr>
								
									<td>
									
										total tax per cycle
									</td>
									
									<td>
									
										$xxxxxx
									
									</td>
								
								</tr>
								<tr>
								
									<td>
									
										<b> total available tax </b>
									</td>
									
									<td>
									
										${{$nation_financial->total_available_taxes}}
									
									</td>
								
								</tr>
								
						</table>
					
						<input type = "submit" value = "collect taxes now" class = "form-control"> 
					</form>
				
				</div>

			</div>
			
		
	</main>
@endsection