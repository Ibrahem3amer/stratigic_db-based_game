@extends('game.base')

@section('page_content')
	<main>

		<div class = "col-*-*">
		
			<span  id = "serverTime"  >Server Time: {{$time}}  </span>
		
		</div>

		<div  class = "container-fluid">
			<div class = "panel panel-default panel-custom">
			
				<div class = "panel-heading">
					User Login
					
				</div>
				
				<div class = "panel-body">
					
					<p> Login using your forum account below, if this is your first time logging in, you'll have to wait for admin's authorization before you can access the game.</p>
					<center>
					@if(!Auth::check())
					<form action="/game/login" method="post">
						{{ csrf_field() }}
						
						<table class = "table-right table-outlined"   > 
							
							<tr>
							
								<th colspan = "2">
										<b>Login</b>
									
								</th>
							</tr>
							<tr><td></td><td></td></tr>
							<tr>
								<td >
									<label> Username: </label> 
								</td>
								<td>
									&nbsp;<input type = "text" name="user_name" class ="form"> 
								</td>
							</tr>
							<tr>
							
								<td style = "padding:10px;">
									<label > Password: </label> 
								</td>
								
								<td>
									&nbsp;<input type = "password" name="user_password"> 
								</td>
							
							</tr>
							<tr>
							
								<td>
									<p> Remember me?: </p> 
								</td>
								
								<td style = "vertical-align:top;">
									&nbsp;<input type = "checkbox" name="user_remember"> 
								</td>
							
							</tr>
							
							
							<tr>
							
								<td colspan = "2">
										
									<input type = "submit" value = "Login" class = "form-control" >
									<a href = "{{URL::to('/game/forgot_password')}}" class = "btn-default right" > <i class = "fa fa-exclamation-circle"></i> forgot password? </a>
											
								</td>
							</tr>
						</table>
							
					</form>
					@endif
					</center>
				
				</div>
				

			</div>

		</div>

	</main>
@endsection