<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Political Game</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link href = "css/simple-sidebar.css" rel = "stylesheet">
	<link href = "css/font-awesome.min.css" rel = "stylesheet">
	<link href = "css/styles.css" rel = "stylesheet">
	
</head>

<body>
	
	<div id = "wrapper" class = "container-fluid"> 
	
		<header id = "top" class = "row">
		
		
			
			<div id = "topLogo"  class = "col-lg-4">
				<img src = "images/logo.png" class = "img-fluid"> </img>
			</div>
		</header>
	
	
		
		
			<div id = "sidebar-wrapper">
				<ul class = "sidebar-nav">
				
                 <a  class="btn btn-default" id="menu-toggle"> <i class = "fa fa-align-justify"> </i></a>
			
					<div class = "panel panel-default panel-custom">
					
						<div class = "panel-heading"> User Menu </div>
						
						<div class = "panel-body"> 
						
							<ul>
							
								<li> 
										
									<a href = "index.php" >  Home </a>
									
								</li>
							
								<li> 
										
									<a href = "about.php" >  About </a>
									
								</li>
							
								<li> 
										
									<a href = "forum.php" >  Forum </a>
									
								</li>
							
								<li> 
										
									<a href = "profile.php" >  Profile </a>
									
								</li>
							
								<li> 
										
									<a href = "messages.php" >  Messages </a>
									
								</li>
							
								<li> 
										
									<a href = "logout.php" >  Logout </a>
									
								</li>
							
							</ul>
						
						</div>
					
					</div>
					
				
					<div class = "panel panel-default panel-custom">
					
						<div class = "panel-heading"> Main Menu </div>
						
						<div class = "panel-body"> 
						
							<ul>
							
								<li> 
										
									<a href = "viewNationInfo.php" >  View Nation Info </a>
									
								</li>
							
								<li> 
										
									<a href = "governmentPosition.php" >  Goverment Position </a>
									
								</li>
							
								<li> 
										
									<a href = "editNation.php" >  Edit Nation </a>
									
								</li>
							
								
							</ul>
						
						</div>
					
					</div>
					
					
					<div class = "panel panel-default panel-custom">
					
						<div class = "panel-heading"> Economy & Finance</div>
						
						<div class = "panel-body"> 
						
							<ul>
							
								<li> 
										
									<a href = "financialStatus.php" > Financial Status </a>
									
								</li>
							
							
								<li> 
										
									<a href = "resources.php" > Resources </a>
									
								</li>
								
								
								<li> 
										
									<a href = "collectTaxes.php" > Collect Taxes</a>
									
								</li>
							
								<li> 
										
									<a href = "payBills.php" > Pay Bills </a>
									
								</li>
							
								<li> 
										
									<a href = "grievances.php" > Grievances </a>
									
								</li>
							
								
							</ul>
						
						</div>
					
					</div>
					
					
					<div class = "panel panel-default panel-custom">
					
						<div class = "panel-heading"> Construction </div>
						
						<div class = "panel-body"> 
						
							<ul>
							
								<li> 
										
									<a href = "viewMyConstructions.php" > View My Constructions </a>
									
								</li>
							
								<li> 
										
									<a href = "constructNewBuildings.php" > Construct New Buildings </a>
									
								</li>
							
								<li> 
										
									<a href = "technology_research.php" > Technology & Research </a>
									
								</li>
							
								
							</ul>
						
						</div>
					
					</div>
					
					
					<div class = "panel panel-default panel-custom">
					
						<div class = "panel-heading"> Combat & War </div>
						
						<div class = "panel-body"> 
						
							<ul>
							
								<li> 
										
									<a href = "warStatus.php" > War Status </a>
									
								</li>
							
								<li> 
										
									<a href = "declareWar.php" > Declare War</a>
									
								</li>
							<li> 
										
									<a href = "trainNewSoliders.php" > Train new soldiers</a>
									
								</li>
							
								<li> 
										
									<a href = "viewMySoldiers.php" > View my soldiers</a>
									
								</li>
							
								<li> 
										
									<a href = "deployUnits.php" > Deploy Units </a>
									
								</li>
							
								
							</ul>
						
						</div>
					
					</div>
				
				
				</ul>
				
			</div>
			
			
			
			<div id = "page-content-wrapper">
			
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
										
											<div class = "col-lg-4  col-md-4 col-sm-6 col-xs-6">
											
												<img src = "images/resource.png" class = "img-responsive" ></img>
												<p style = "margin-bottom:0px;"> <b> Stone </b> </p>
												
												<br/>
												<br/>
											</div>
										
											<div class = "col-lg-4 col-md-4 col-sm-6 col-xs-6">
												<img src = "images/resource.png" class = "img-responsive" ></img>
												<p style = "margin-bottom:0px;"> <b> Wood </b> </p>
												
												<br/>
												<br/>
											
											</div>
										
											<div class = "col-lg-4 col-md-4 col-sm-6 col-xs-6">
												<img src = "images/resource.png" class = "img-responsive" ></img>
												<p style = "margin-bottom:0px;"> <b> Iron </b> </p>
												
												<br/>
												<br/>
											
											</div>
										
											<div class = "col-lg-4 col-md-4 col-sm-6 col-xs-6">
												<img src = "images/resource.png" class = "img-responsive" ></img>
												<p style = "margin-bottom:0px;"> <b> Food </b> </p>
												
												<br/>
												<br/>
											
											
											</div>
										
										</div>
									
									
									</div>
									
								</div>
								<hr class = "panel-hr"/>
								
								<div> 
									<span class = "right panel-div-title">  [make a new trade deal] </span><br/>
					
									<div class = "container-fluid">
									
										<div class = "" style = "color: black; background-color: #eeeeee; padding: 15px; border-radius: 5px; border:1px solid lightgrey;">
										
											<b> Trade Width: </b>
											<select style = "width: 200px;">
											
												<option> nation 1 </option>
												<option> nation 2 </option>
												<option> nation 3 </option>
												<option> nation 4 </option>
												<option> nation 5 </option>
												
											
											</select>
										</div><hr style = "margin:5px;">
										
										<div style = "color: black; background-color: #eeeeee; padding: 15px; border-radius: 5px; border:1px solid lightgrey;"> 
										
										<div class = "row">
										
											<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12" >
											
												<div id = "div_offer"  style = "background-color: #cccccc; min-height:250px; max-height: 250px; border:1px solid grey; border-radius: 5px; overflow-y:scroll;">
												
													<div class = "container-fluid">
													
														<div class = "row">
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<input type = "number" value = "0" min = "0"   style = "width:100%; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<input type = "number"value = "0"  min = "0"  style = "width:100%; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<input type = "number" value = "0" min = "0"  style = "width:100%; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<input type = "number" value = "0" min = "0"  style = "width:100%; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<input type = "number" value = "0" min = "0"  style = "width:100%; border-radius:5px; margin-top:5px;">
															</div>
														
														</div>
													
													</div>
												
												</div>
												
												<center>
												<div>
												<p style = "position:relative; top: 10px; " > <b> Offered Goods </b> </p>
												
												</div></center>
												
											
											</div>
											
											<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12" >
											
												<div id = "div_request" style = "background-color: #cccccc; min-height:250px; max-height: 250px; border:1px solid grey; border-radius: 5px; overflow-y:scroll;">
												
													<div class = "container-fluid">
													
														<div class = "row">
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<input type = "number" value = "0" min = "0" style = "width:100%; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<input type = "number"  value = "0" min = "0"  style = "width:100%; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<input type = "number"  value = "0" min = "0" style = "width:100%; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<input type = "number" value = "0"  min = "0" style = "width:100%; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<input type = "number"  value = "0" min = "0" style = "width:100%; border-radius:5px; margin-top:5px;">
															</div>
														
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
											
											<input type = "submit" class = "btn btn-default"  value = "Make Offer" style = "font-size:22px; padding-left:35px; padding-right:35px;">
											
											<input type = "submit" class = "btn btn-default" onclick = "clearOffer();" value = "Clear Offer" style = "font-size:22px; padding-left:35px; padding-right:35px;">
											
											<input type = "submit" class = "btn btn-default" onclick = "clearRequest();" value = "Clear Request" style = "font-size:22px; padding-left:35px; padding-right:35px;">
											
											</center>
										</div>
									
									</div>
									
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
								<div> 
						
										<div class = "container-fluid">
										
											<div class = "" style = "color: black; background-color: #eeeeee; padding: 15px; border-radius: 5px; border:1px solid lightgrey;">
											
												<b> Offered By: </b> <a href = "viewNationInfo.php?nationId=0" class = "btn-default"> Nation Name</a>
											</div><hr style = "margin:5px;">
											
											<div style = "color: black; background-color: #eeeeee; padding: 15px; border-radius: 5px; border:1px solid lightgrey;"> 
											
											<div class = "row">
											
												<div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12" >
												
													<div style = "background-color: #cccccc; min-height:250px; max-height: 250px; border:1px solid grey; border-radius: 5px; overflow-y:scroll;">
													
														<div class = "container-fluid">
														
															<div class = "row">
															
																<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																	
																	<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																	<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;">
																</div>
															
																<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																	
																	<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																	<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;">
																</div>
															
																<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																	
																	<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																	<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;">
																</div>
															
																<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																	
																	<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																	<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;">
																</div>
															
																<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																	
																	<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																	<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;">
																</div>
															
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
																	
																	<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																	<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;">
																</div>
															
																<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																	
																	<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																	<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;">
																</div>
															
																<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																	
																	<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																	<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;">
																</div>
															
																<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																	
																	<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																	<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;">
																</div>
															
																<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																	
																	<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																	<input type = "number" style = "width:100%; border-radius:5px; margin-top:5px;">
																</div>
															
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
												<!-- NOTE: form_id should be replaced by unique ID for each form-->
												<input id = "form_id_action" value = "0" type = "hidden" value = "acceptOffer">
												<input type = "submit" class = "btn btn-default" onclick = "setAction('acceptOffer', 'form_id');" value = "Accept Offer" style = "font-size:22px; padding-left:35px; padding-right:35px;">
												<input type = "submit" class = "btn btn-default" onclick = "setAction('makeCounter', 'form_id');"  value = "Make Counter Offer" style = "font-size:22px; padding-left:35px; padding-right:35px;">
												<input type = "submit" class = "btn btn-default" onclick = "setAction('rejectOffer', 'form_id');"  value = "Reject Offer" style = "font-size:22px; padding-left:35px; padding-right:35px;">
												
												</center>
											</div>
										
										</div>
										
									</div>
								
							</div>
						
						</div>
				</main>
	
				<footer class = "container-fluid  panel-custom">
					<br/>
					<div class = "panel col-lg-*">
						<div class = "panel-footer">
							Lorem ipsum dolor sit amet
						</div>
						&nbsp;&nbsp;&nbsp;Copyright &copy; 2016 political game, All rights reserved
						<div class = "right">
							<a href = "#"> Home </a> |
							<a href = "#"> Forums </a> |
							<a href = "#"> Terms </a> |
							<a href = "#"> Links </a>
						</div>
					</div>
				</footer>
			

			</div>
			
			
	

	</div>
	

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	
    <script src="js/main.js"></script>

    <script src="js/resources.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	
    <script>
	
	
	
    $("#menu-toggle").click(function(e) {
        $("#wrapper").toggleClass("toggled");
		
		
    });
    </script>
	
	
</body>

</html>
