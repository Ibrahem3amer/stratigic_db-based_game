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
		
		
			<!-- Financial Status -->
			<div class = "panel panel-default panel-custom">
			
				<div class = "panel-heading">
				
					Financial Status
				
				</div>
				
				<div class = "panel-body">
				
					<!-- overview -->
					<div> 
						<span class = "right panel-div-title">  [Overview] </span><br/>
						
						
						<div class = "left">
							<img id = "pieChart1" src = "{{URL::to('images/chart1.png')}}" class = "img-responsive "> </img>
						
							<img id = "pieChart1_map" src = "{{URL::to('/images/chartMap1.png')}}" class = "img-responsive "> </img>
					
							<a id = "pieChart1_title" class = "btn-default"> <i class = "fa fa-exclamation-circle" > </i> Income Sources </a>
						</div>
				
						<div id = "overviewLabel1" class = "right">
						
						<br/>
							<table> 
								<tr>
									<td>
									<b>Total Available Money:</b>  
									</td>
									
									<td><span class = "green">  {{$financial->total_money_available}} <i class = "fa fa-caret-up"> </i> </span>
									</td>
								</tr>
								
								<tr>
									<td>
										<b>Total Bills Due:</b>
									 <hr>
									</td>
									
									<td>
										<span class = "red">  {{$financial->total_bills_due}}<i class = "fa fa-caret-down"> </i> </span> 
									 <hr>
									 </td>
								</tr>
								
								<tr>
									<td>
										<b>Money Remaining After Payment: &nbsp;</b>
									</td>
									
									<td>
										<span class = "red">  $000000000000 <i class = "fa fa-caret-down"> </i> </span> 
									 </td>
								</tr>
							</table>
									 <span class = "alert-danger red"> <i class = "fa fa-exclamation-triangle " > </i> You do not have enough money to pay bills! </span>
							<br/><br/>
						</div>
					</div>
					
					<hr class = "panel-hr"/>
					<!-- details -->
					<div>
						<span class = "right panel-div-title">  [Details] </span><br/>
						<table class = "table-bordered table table-right" style = "width:100%">
						
							<tr>
							
								<th colspan = "2" >
								
									Spendings
								
								</th>
							
							</tr>
						
							<tr>
							
								<td style = "width:50%">
								
									total money spent on bills
								</td>
								
								<td>
								
									{{$financial->total_money_spent_on_bills}}
								
								</td>
							
							</tr>
							<tr>
							
								<td>
								
									total money spent on constructions
								</td>
								
								<td>
								
									{{$financial->total_money_spent_on_constrction}}
								
								</td>
							
							</tr>
							<tr>
							
								<td>
								
									total money spent on millitary
								</td>
								
								<td>
								
									{{$financial->total_money_spent_on_millitary}}
								
								</td>
							
							</tr>
						
							<tr>
							
								<td>
								
									<b> total money spent  </b>
								</td>
								
								<td>
								
									<b>{{
										$financial->total_money_spent_on_bills + 
										$financial->total_money_spent_on_millitary +
										$financial->total_money_spent_on_constrction }}</b>
								
								</td>
							
							</tr>
							
							<tr>
							
								<th colspan = "2" >
								
									Taxes
								
								</th>
							
							</tr>
							<tr>
							
								<td>
								
									tax rate 
								</td>
								
								<td>
								
									{{$nation->tax_rate}}
								
								</td>
							
							</tr>
							<tr>
							
								<td>
								
									tax paying citizens 
								</td>
								
								<td>
								
									{{$financial->tax_paying_citizien}}
								
								</td>
							
							</tr>
							
							<tr>
							
								<td>
								
									tax per cycle
								</td>
								
								<td>
								
									{{$financial->tax_due_per_cycle}}
								
								</td>
							
							</tr>
							<tr>
							
								<td>
								
									<b> total available tax </b>
								</td>
								
								<td>
								
									{{$financial->total_available_taxes}}
								
								</td>
							
							</tr>
							
							<tr>
							
								<th colspan = "2"></th>
							
							</tr>
							
							<tr>
							
								<td>
									<b> Total Money Available </b>
								</td>
								
								<td>
									<span class = "green">  <b> {{$financial->total_money_available}} </b><i class = "fa fa-caret-up"> </i> </span> 
								</td>
							
							</tr>
						</table>
						
					</div>
				
				
				</div>

			</div>
			
		
	</main>
@endsection