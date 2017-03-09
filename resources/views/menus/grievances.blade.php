@extends('game.base')

@section('page_content')
	<main>
	
		<div  class = "container-fluid">
		
		
			<!-- grievances -->
			@if(session()->has('error'))
				<div class="alert alert-danger" role="alert">{{session('error')}}</div>
			@endif
			<div class = "panel panel-default panel-custom">
			
				<div class = "panel-heading">
				
					Grievances
				
				</div>
				
				<div class = "panel-body">
				
					
					<div>
						<span class = "right panel-div-title">  [grievance requests] </span><br/>
						@foreach($grievances as $grievance)
						<table class = "table-bordered table table-right" style = "width:100%">
						
							
							<tr>
							
								<td>
								
									Nation:
								</td>
								
								<td>
								
									<a href = "viewNationInfo.php?nationId=0" class = "btn-default"> <?php $t_nation = \App\Nation::find($grievance->nation_id)->first(); ?>
									{{$t_nation->state_name}}
									</a>
								
								</td>
							
							</tr>
							
							<tr>
							
								<td>
								
									Due Date
								</td>
								
								<td>
								
									{{$grievance->due_date}}
								
								</td>
							
							</tr>
							<tr>
							
								<td>
								
									Money Amount
								</td>
								
								<td>
								
									${{$grievance->money_required}}
								
								</td>
							
							</tr>
							
							
							
							
						</table>
						@endforeach

						<a href="{{URL::to('/game/paygrievances')}}">
							<input type = "button" class = "form-control" value = "Pay your debts">
						</a>
						
		
					</div>
				
					<br/>
				</div>

			</div>
			
			
	</main>
@endsection