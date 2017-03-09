@extends('game.base')

@section('page_content')
	<main>


		<div  class = "container-fluid">
		
		
			<!-- resources -->
			<div class = "panel panel-default panel-custom">
			
				<div class = "panel-heading">
				
					Resources
				
				</div>
				
				<div class = "panel-body">
				
					<!-- my resources -->
					<div> 
						<span class = "right panel-div-title">  [my resources] </span><br/>
		
						<div class = "container-fluid">
						
							<div class = "row">
								@foreach($nation_resources as $resource)
									<div class = "col-lg-4  col-md-4 col-sm-6 col-xs-6">
									
										<img src = "{{URL::to('/images/resource.png')}}" class = "img-responsive" ></img>
										<p style = "margin-bottom:0px;"> <b> {{$resource->resource_name}} </b> </p>
										<p style = "margin-bottom:0px;"> Quantity {{$resource->resource_qunatity}}</p>
										
										<br/>
										<br/>
									</div>
								@endforeach
							</div>
						
						
						</div>
						
					</div>
					<hr class = "panel-hr"/>
					
					<div> 
						<span class = "right panel-div-title">  [make a new trade deal] </span><br/>
						<form action="{{URL::to('/game/api/maketraderequest')}}" method="post">	
							{{ csrf_field() }}
							<div class = "container-fluid">
									<div class = "" style = "color: black; background-color: #eeeeee; padding: 15px; border-radius: 5px; border:1px solid lightgrey;">
									
										<b> Trade Width: </b>
										<input list="nations" name="nation_name">
										<datalist id="nations">
											@foreach($nations as $nation)
												<option value="{{$nation->state_name}}">{{$nation->state_name}}</option>
											@endforeach
										</datalist>

									</div><hr style = "margin:5px;">
									
									<div style = "color: black; background-color: #eeeeee; padding: 15px; border-radius: 5px; border:1px solid lightgrey;"> 
									
									<div class = "row">
									
										<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12" >
										
											<div style = "background-color: #cccccc; min-height:250px; max-height: 250px; border:1px solid grey; border-radius: 5px; overflow-y:scroll;">
											
												<div class = "container-fluid">
												
													<div class = "row">
														@foreach($nation_resources as $resource)
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "{{URL::to($resource->resource_logo)}}" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;" />
																<h5>{{$resource->resource_name}}</h5>
																<input type="hidden" value="{{$resource->resource_name}}" name="resources_offered_name[]" />
																<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;" name="resources_offered_list[]">
															</div>
														@endforeach
													</div>
												
												</div>
											
											</div>
											
											<center>
											<div>
											<p style = "position:relative; top: 10px; " > <b> Offered Goods </b> </p>
											
											</div></center>
											
										
										</div>
										
										<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12" >
										
											<div style = "background-color: #cccccc; min-height:250px; max-height: 250px; border:1px solid grey; border-radius: 5px; overflow-y:scroll;">
											
												<div class = "container-fluid">
												
													<div class = "row">
													
														<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
															
															<img src = "{{URL::to('/images/resource.png')}}" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
															<h5>item from admin items table</h5>
															<input type="hidden" value="admin_item" name="resources_requested_name[]" />
															<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;" name="resources_requested_list[]">
														</div>
														@foreach($nation_resources as $resource)
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "{{URL::to($resource->resource_logo)}}" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;" />
																<h5>{{$resource->resource_name}}</h5>
																<input type="hidden" value="{{$resource->resource_name}}" name="resources_requested_name[]" />
																<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;" name="resources_requested_list[]">
															</div>
														@endforeach
													
													</div>
												
												</div>
											
											</div>
											
											<center>
											<div>
											<p style = "position:relative; top: 10px; " > <b> Requested Goods </b> </p>
											
											</div></center>
											
										
										</div>
										
									</div>

							
								</div>
								
								<hr style = "margin:5px;">
								
								<div style = "color: black; background-color: #eeeeee; padding: 15px; border-radius: 5px; border:1px solid lightgrey;">
									<center>
									<input type = "submit" class = "btn btn-default" value = "Make Offer" style = "font-size:22px; padding-left:35px; padding-right:35px;">
									
									<input type = "button" class = "btn btn-default" value = "Clear Offer" style = "font-size:22px; padding-left:35px; padding-right:35px;">
									
									<input type = "button" class = "btn btn-default" value = "Clear Request" style = "font-size:22px; padding-left:35px; padding-right:35px;">
									
									</center>
								</div>
							</div>
						</form>
						
					</div>
				
					<br/>
				</div>

			</div>
			
		
			<div class = "panel panel-default panel-custom">
			
				<div class = "panel-heading">
					Pending Trade Deals
				</div>
				
				<div class = "panel-body">
				<!-- pending trade deals-->
					@if(isset($nation_deals))
						<div> 
								<span class = "right panel-div-title">  [1 / <?php echo(sizeof($nation_deals))?>] </span><br/>
								@foreach($nation_deals as $deal)
									<form action="{{URL::to('/game/api/activaterequest')}}" method="post">
										{{csrf_field()}}
										<input type="hidden" value="{{$deal->id}}" name="deal_id" />
										<input type="hidden" value="0" name="counter_deal" />
										<input type="hidden" value="1" name="remove_deal" />
										<div class = "container-fluid">
										
											<div class = "" style = "color: black; background-color: #eeeeee; padding: 15px; border-radius: 5px; border:1px solid lightgrey;">
											
												<b> Offered By: </b> <a href = "{{URL::to('/game/getnationinfo/').'/'.$deal->nation_id}}" class = "btn-default"> <?php echo(\App\Nation::find($deal->nation_id)->pluck('state_name')->first());?></a>
											</div><hr style = "margin:5px;">
											
											<div style = "color: black; background-color: #eeeeee; padding: 15px; border-radius: 5px; border:1px solid lightgrey;"> 
											
											<div class = "row">
											
												<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12" >
												
													<div style = "background-color: #cccccc; min-height:250px; max-height: 250px; border:1px solid grey; border-radius: 5px; overflow-y:scroll;">
													
														<div class = "container-fluid">
														
															<div class = "row">
															<?php $offers = json_decode($deal->offer); ?>
																@foreach($offers as $name=>$value)
																	<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																		
																		<img src = "{{URL::to('images/resource.png')}}" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																		<h5>{{$name}}</h5>
																		<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;" value="{{$value}}" name="counter_offered_value[{{$name}}]"accept="">
																	</div>
																@endforeach
															
															</div>
														
														</div>
													
													</div>
													
													<center>
													<div>
													<p style = "position:relative; top: 10px; " > <b> Offered Goods </b> </p>
													
													</div></center>
													
												
												</div>
												
												<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12" >
												
													<div style = "background-color: #cccccc; min-height:250px; max-height: 250px; border:1px solid grey; border-radius: 5px; overflow-y:scroll;">
													
														<div class = "container-fluid">
														
															<div class = "row">
															<?php $request = json_decode($deal->request); ?>
																@foreach($request as $name=>$value)
																	<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																		
																		<img src = "{{URL::to('images/resource.png')}}" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																		<h5>{{$name}}</h5>
																		<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;" value="{{$value}}" name="counter_request_value[{{$name}}]">
																	</div>
																@endforeach
															
															</div>
														
														</div>
													
													</div>
													
													<center>
													<div>
													<p style = "position:relative; top: 10px; " > <b> Requested Goods </b> </p>
													
													</div></center>
													
												
												</div>
												
											</div>
										
											</div>
											
											<hr style = "margin:5px;">
											
											<div style = "color: black; background-color: #eeeeee; padding: 15px; border-radius: 5px; border:1px solid lightgrey;">
												<center>
												<input type = "submit" class = "btn btn-default" value = "Accept Offer" style = "font-size:22px; padding-left:35px; padding-right:35px;">
												
												<input type = "submit" class = "btn btn-default" value = "Make Counter Offer" style = "font-size:22px; padding-left:35px; padding-right:35px;">
												
												<input type = "submit" class = "btn btn-default" value = "Reject Offer" style = "font-size:22px; padding-left:35px; padding-right:35px;">
												
												</center>
											</div>
										
										</div>
									</form>
								@endforeach
						</div>
					@endif
					
				</div>
			
			</div>
	</main>
@endsection