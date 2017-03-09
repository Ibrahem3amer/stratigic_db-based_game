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
					
					
						<!-- taxes -->
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading">
							
								View My Soldiers
							
							</div>
							
							<div class = "panel-body">
							
								<table class = "table table-bordered table-right" >
								
										
										
										<tr>
										
											<td colspan = "1" width="30%">
											
												<a class = "btn-default" href = "#"> Strength: </a>
											</td>
											
											<td colspan = "1"> 
											
												xxxx
											
											</td>
										
										</tr>
										
										
										<tr>
										
											<td colspan = "1" width="30%">
											
												<a class = "btn-default" href = "#"> Idle Millitary Units: </a>
											</td>
											
											<td colspan = "1"> 
											
												xxx
											
											</td>
										
										</tr>
										
										<tr>
										
											<td colspan = "1" width="30%">
											
												<a class = "btn-default" href = "#">Defending Millitary Units: </a>
											</td>
											
											<td colspan = "1"> 
											
												xxx
											
											</td>
										
										</tr>
										
										<tr>
										
											<td colspan = "1" width="30%">
											
												<a class = "btn-default" href = "#"> Millitary Units at war: </a>
											</td>
											
											<td colspan = "1"> 
											
												xxx
											
											</td>
										
										</tr>
										
										<tr>
										
											<td colspan = "1" width="30%">
											
												<a class = "btn-default" href = "#"> Total Millitary Casualties: </a>
											</td>
											
											<td colspan = "1"> 
											
												xxx
											
											</td>
										
										</tr>
										
										
										
										
										<tr>
										
											<th colspan = "4" >
											
												Available Units
											
											</th>
										
										</tr>
										
										<tr>
										
											<td colspan = "2">
											
												<a href = "info.php?id=0" class = "btn-default"> <i class = "fa fa-external-link"></i> <strong> Archer</strong>  </a>
											</td>
											
											<td colspan = "2">
											
												xxxxxxx
												
												<div class = "right">

													<a href = "trainNewSoliders.php?id=0" class = "btn btn-default"> Train New  </a>
													<a href = "deployUnits.php?id=0" class = "btn btn-default"> Deploy Units  </a>
												
												</div>
											
											</td>
										</tr>
										
										
										
										<tr>
										
											<td colspan = "2">
											
												<a href = "info.php?id=0" class = "btn-default"> <i class = "fa fa-external-link"></i> <strong> Warrior</strong>  </a>
											</td>
											
											<td colspan = "2">
											
												xxxxxxx
												
												<div class = "right">

													<a href = "trainNewSoliders.php?id=0" class = "btn btn-default"> Train New  </a>
													<a href = "deployUnits.php?id=0" class = "btn btn-default"> Deploy Units  </a>
												
												</div>
											
											</td>
										</tr>
										
										<tr>
										
											<td colspan = "2">
											
												<a href = "info.php?id=0" class = "btn-default"> <i class = "fa fa-external-link"></i> <strong> Knight</strong>  </a>
											</td>
											
											<td colspan = "2">
											
												xxxxxxx
												
												<div class = "right">

													<a href = "trainNewSoliders.php?id=0" class = "btn btn-default"> Train New  </a>
													<a href = "deployUnits.php?id=0" class = "btn btn-default"> Deploy Units  </a>
												
												</div>
											
											</td>
										</tr>
										
										<tr>
										
											<td colspan = "2">
											
												<a href = "info.php?id=0" class = "btn-default"> <i class = "fa fa-external-link"></i> <strong> Horseman</strong>  </a>
											</td>
											
											<td colspan = "2">
											
												xxxxxxx
												
												<div class = "right">

													<a href = "trainNewSoliders.php?id=0" class = "btn btn-default"> Train New  </a>
													<a href = "deployUnits.php?id=0" class = "btn btn-default"> Deploy Units  </a>
												
												</div>
											
											</td>
										</tr>
										
										<tr>
										
											<td colspan = "2">
											
												<a href = "info.php?id=0" class = "btn-default"> <i class = "fa fa-external-link"></i> <strong> Macemen</strong>  </a>
											</td>
											
											<td colspan = "2">
											
												xxxxxxx
												
												<div class = "right">

													<a href = "trainNewSoliders.php?id=0" class = "btn btn-default"> Train New  </a>
													<a href = "deployUnits.php?id=0" class = "btn btn-default"> Deploy Units  </a>
												
												</div>
											
											</td>
										</tr>
										
										
										
										
										
										
										
										
										
								</table>
							
							
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
