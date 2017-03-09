@extends('game.base')
@section('page_content')
	<main>

	
		<div  class = "container-fluid">
		
		
			<!-- Edit Nation -->
			<form action="{{URL::to('/game/editnation')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="nation_id" value="{{$nation->id}}" />
				<div class = "panel panel-default panel-custom">
				
					<div class = "panel-heading">
						Edit Nation
						
					</div>
					
					<div class = "panel-body collapsed">
					<table class = "table table-striped table-bordered " >
							
						<tr>
						
							<td style = "width: 40%;">
								Nation Name:
							</td>
							
							<td>
								<input type = "text" name="nation_name" value = "{{$nation->state_name}}" >
							</td>
						
						
						</tr>
						
						
						
						
						<tr>
						
							<td>
								Nation Slogan:
							</td>
							
							
							<td>
								<textarea type = "text"  name="nation_slogan" style = "width: 60%">{{$nation->nation_slogan}}</textarea>
							
							</td>
						
						
						
						</tr>
						
						<tr>
						
							<td>
								Nation Flag:<br/>
							</td>
							
							
							<td>
									
										<img class = "img img-responsive thumbnail " src ="{{url($nation->nation_flag)}}" width="200px" height="200px"> </img>
									
										
										<select name="nation_flag">
										
											<option> select flag </option>
											<option> flag option 1</option>
											<option> flag option 2</option>
											<option> flag option 3</option>
											
											
										
										</select><br/><br/>
										Upload new flag: 
										<input type = "file" name="flag_img">
							</td>
						
						
						
						</tr>
						
						<tr>
						
							<td>
								Nation Colors:<br/>
							</td>
							
							
							<td>
							
								<input type = "color" name="nation_color1" value="{{$colors[0]}}">
								<input type = "color" name="nation_color2" value="{{$colors[1]}}" >
									
							</td>
						
						
						
						</tr>
						
						<tr>
						
							<td>
								<a href = "#" class="btn-default"> <i class ="fa fa-info-circle" ></i>  National Religion: </a> <br/>
								<small class = "grey">
								
									the main relgiion that you designate for your nation has an impact on your people's happiness, crime rate and other factors. 
									You may change your nation's religion only every 3 cycle.
								
								</small>
							</td>
							
							
							<td>
								<h6><i>current: {{$nation->nation_religion}}</i></h6>
								<select name="nation_religion">
								
									<option value="select religion"> select religion </option>
									<option value="religion option 1"> religion option 1</option>

								</select>
								
							
							</td>
						
						</tr>
						
						
						<tr>
						
							<td>
								War Preference: 
							</td>
							
							
							<td>
								<h6><i>current: {{$nation->war_prefrence}}</i></h6>
								<select name="nation_war_preference">
								
									<option value="peace"> peace </option>
									<option value="evil"> evil</option>

								</select>
								
							
							</td>
						
						</tr>
								
						<tr>
						
							<td>
								<a href = "#" class="btn-default"> <i class ="fa fa-info-circle" ></i>  Tax Rate: </a> <br/>
								<small class = "grey">
								
									You may edit this value once per cycle
								
								</small>
							</td>
							
							
							<td>
								<input type = "number" name="tax_rate" value="{{$nation->	tax_rate}}">
								
							
							</td>
						
						</tr>
					</table>
					
					<input type = "submit" class = "form-control" style = "">
						
					</div>
					

				</div>
			</form>
			
		
	</main>
@endsection