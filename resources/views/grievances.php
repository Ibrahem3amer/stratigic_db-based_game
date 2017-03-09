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
										
									<a href = "declareWar.php" > Train new soldiers</a>
									
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
					
					
						<!-- grievances -->
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading">
							
								Grievances
							
							</div>
							
							<div class = "panel-body">
							
								
								<div> 
									<span class = "right panel-div-title">  [Make New Request] </span><br/>
					
									<table class = "table-bordered table table-right" style = "width:100%">
									
										
										<tr>
										
											<td>
											
												Nation:
											</td>
											
											<td>
											
												<select id = "selectedNationId">
												
													<option value = "natId_1"> Nation1 Name </option>
													
													<option value = "natId_2"> Nation2 Name </option>
													
													<option value = "natId_3"> Nation3 Name </option>
												
												</select>
											
											</td>
										
										</tr>
										
										<tr>
										
											<td>
											
												Due Date
											</td>
											
											<td>
											
												<input type = "date"> </input>
											
											</td>
										
										</tr>
										<tr>
										
											<td colspan = "2">
											
											
												<div style = "background-color: #cccccc; min-height:250px; max-height: 250px; border:1px solid grey; border-radius: 5px; overflow-y:scroll;">
												
													<div class = "container-fluid">
													
														<div class = "row">
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<div style = "float:left";><b>Steel</b></div><br/>
																<input type = "number" value = "0" min = "0" style = "width:100%; float:left; max-width:150px; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<div style = "float:left";><b>Iron</b></div><br/>
																<input type = "number" value = "0" min = "0" style = "width:100%; float:left; max-width:150px; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<div style = "float:left";><b>Wood</b></div><br/>
																<input type = "number" value = "0" min = "0" style = "width:100%; float:left; max-width:150px; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<div style = "float:left";><b>Paper</b></div><br/>
																<input type = "number"  value = "0" min = "0" style = "width:100%;float:left; max-width:150px;  border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<div style = "float:left";><b>Stone</b></div><br/>
																<input type = "number" value = "0" min = "0" style = "width:100%; float:left; max-width:150px; border-radius:5px; margin-top:5px;">
															</div>
														
														</div>
													
													</div>
												
												</div>
												
												<center>
												<div>
												<p style = "position:relative; top: 10px; " > <b> Requested Goods </b> </p>
												
												</div></center><br/>
												
												<input type = "submit" class = "form-control" value = "Send Grievance Request"> 
											</td>
										
										</tr>
										
										
										
										
									</table>
									
					
								</div>
							
								<br/>
								<hr class = "panel-hr"/>
								
								<div> 
								
									<span class = "right panel-div-title">  [Pending Grievance Requests] </span><br/>
									
									<table class = "table-bordered table table-right" style = "width:100%">
									
										
										<tr>
										
											<td>
											
												Nation:
											</td>
											
											<td>
											
												Nation Name
											
											</td>
										
										</tr>
										
										<tr>
										
											<td>
											
												Due Date
											</td>
											
											<td>
											
												xx/xx/xxxx
											
											</td>
										
										</tr>
										<tr>
										
											<td colspan = "2">
											
											
												<div style = "background-color: #cccccc; min-height:250px; max-height: 250px; border:1px solid grey; border-radius: 5px; overflow-y:scroll;">
												
													<div class = "container-fluid">
													
														<div class = "row">
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<div style = "float:left";><b>Wood</b></div><br/>
																<div style = "float:left";><b>Asking:12</b></div><br/>
																<input type = "number" value = "12" min = "0" style = "width:100%; float:left; max-width:150px; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<div style = "float:left";><b>Stone</b></div><br/>
																<div style = "float:left";><b>Asking: 946</b></div><br/>
																<input type = "number" value = "946" min = "0" style = "width:100%; float:left; max-width:150px; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<div style = "float:left";><b>Iron</b></div><br/>
																<div style = "float:left";><b>Asking: 33</b></div><br/>
																<input type = "number" value = "33" min = "0" style = "width:100%; float:left; max-width:150px; border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<div style = "float:left";><b>Glass</b></div><br/>
																<div style = "float:left";><b>Asking: 135</b></div><br/>
																<input type = "number"  value = "135" min = "0" style = "width:100%;float:left; max-width:150px;  border-radius:5px; margin-top:5px;">
															</div>
														
															<div class = "col-lg-4 col-md-4 col-sm-4 col-xs-6" style = "margin-top:10px; margin-bottom:15px;" >
																
																<img src = "images/resource.png" class = "img-responsive" style = "border: 1px solid grey ; border-radius:10px;"></img>
																<div style = "float:left";><b>Paper</b></div><br/>
																<div style = "float:left";><b>Asking: 893</b></div><br/>
																<input type = "number" value = "893" min = "0" style = "width:100%; float:left; max-width:150px; border-radius:5px; margin-top:5px;">
															</div>
														
														</div>
													
													</div>
												
												</div>
												
												<center>
												<div>
												<p style = "position:relative; top: 10px; " > <b> Requested Goods </b> </p>
												
												</div></center><br/>
												
												<form> 
												
												<input id = "inAction" type = "hidden" class = "" >
												<div style = "color: black; background-color: #eeeeee; padding: 15px; border-radius: 5px; border:1px solid lightgrey;">
													<center>
													<input type = "submit" class = "btn btn-default" onclick = "setAction('payDue');" value = "Pay Due Amount" style = "font-size:22px; padding-left:35px; padding-right:35px;">
													
													<input type = "submit" class = "btn btn-default" onclick = "setAction('payDifferent');" value = "Pay Different Amount" style = "font-size:22px; padding-left:35px; padding-right:35px;">
													
													<input type = "submit" class = "btn btn-default" onclick = "setAction('refuse');" value = "Refuse Request" style = "font-size:22px; padding-left:35px; padding-right:35px;">
													
													</center>
												</div>
												
												</form>
												
												<script type = "text/javascript" src = "js/grievances.js"> </script>
											</td>
										
										</tr>
										
										
										
										
									</table>
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


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	
    <script>
	
	
	
    $("#menu-toggle").click(function(e) {
        $("#wrapper").toggleClass("toggled");
		
		
    });
    </script>
	
	
</body>

</html>
