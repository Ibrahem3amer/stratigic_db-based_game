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
	<link href = "css/styles.css" rel = "stylesheet">
	<link href = "css/simple-sidebar.css" rel = "stylesheet">
	<link href = "css/font-awesome.min.css" rel = "stylesheet">
	
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
					
						<span  id = "serverTime"  >Server Time: <?php echo date("m/d/Y H:i:s A") ?>  </span>
					
					</div>
				
					<div  class = "container-fluid">
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading">
								Profile
								
							</div>
							
							<div class = "panel-body">
							
								<!-- ruler info -->
								<div> 
									<span class = "right panel-div-title">  [Ruler Info] </span><br/>
								
									<table>
									
										<tr>
										
										<td>
										<img src = "images/profilePic.png" width = "140" height = "140" class = "img-thumbnail img-circle "> </img>
										</td>
										
										
										<td >
										
											<h3> <b> <?php echo "GET User Name" ?> </b> </h3>
											<h3> Nation ID: <?php echo "GET xxx"?> </h3>
											<h3 style = "margin-top:10px"> 
												<a href = "messages.php" class = "btn btn-default" > <i class = "fa fa-envelope"></i> </a> 
												<a href = "friends.php"class = "btn btn-default"> <i class = "fa fa-user"> </i> </a>
											</h3>
										</td>
										</tr>
									
									</table>
								
								</div><!-- ends ruler info -->
								<hr class = "panel-hr" />
								
								<!-- edit my data-->
								<div>
									<span class = "right panel-div-title">  [Edit My Data] </span><br/>
								
									<table class = "table table-striped table-bordered table-right" >
									
										<tr>
										
											<td>
												Email Address
											</td>
											
											<td>
												<?php echo "GET something@example.com" ?>
												<a href = "#" class = "btn btn-default"> <i class = "fa fa-pencil"> </i>  </span> </a>
											
											</td>
										
										
										</tr>
										
										
										
										
										<tr>
										
											<td>
												Some Other Data
											</td>
											
											
											<td>
												<?php echo "GET some data" ?>
												<a href = "#" class = "btn btn-default"> <i class = "fa fa-pencil"> </i> </a>
											
											</td>
										
										
										
										</tr>
										
										<tr>
										
											<td>
												Some Other Data
											</td>
											
											
											<td>
												<?php echo "GET some data" ?>
												<a href = "#" class = "btn btn-default"> <i class = "fa fa-pencil"> </i>  </span> </a>
											
											</td>
										
										
										
										</tr>
									<tr>
										
											<td>
												Change Password
											</td>
											
											<td>
												<table> 
												
													<tr>
														
														<td>
															<input type = "password" class="collapsed"> <br/>
														</td>
														<td>
															<label> Current Password</label>
														</td>
													</tr>
													
													<tr>
														<td>
															<input type = "password" class="collapsed"> <br/>
														</td>
														<td>
															<label> New Password </label>
														</td>
														
													</tr>
													
													<tr>
														
														<td>
															<input type = "password" class="collapsed"> <br/>
														</td>
														<td>
															<label> Confirm New Password </label>
														</td>
													</tr>
												
												</table>
											</td>
										
										
										</tr>
									</table>
								
								</div><!--ends edit my data-->
								<hr class = "panel-hr"/>
								
								<!-- preferences-->
								<div>
									<span class = "right panel-div-title">  [Preferences] </span><br/>
									
									<table class = "table table-striped table-bordered table-right" >
									
										<tr>
										
											<td>
												Some preference
											</td>
											
											<td>
												<input type = "checkbox" > some description about this preference
											</td>
										
										
										</tr>
										
										
										
										
										<tr>
										
										
											<td>
												Some preference
											</td>
											
											<td>
												<input type = "checkbox" > some description about this preference
											</td>
										
										</tr>
										
										<tr>
										
										
											<td>
												Some preference
											</td>
											
											<td>
												<input type = "checkbox" > some description about this preference
											</td>
										
										</tr>
										<tr>
										
										
											<td class = "align-right">
												Some preference
											</td>
											
											<td>
												<input type = "checkbox" > some description about this preference
											</td>
										
										</tr>
									</table>
								</div><!-- ends preferences -->
								
								<br/>
								<b> <input type = "submit" class = "form-control" > </input> </b>
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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
    <script>
	
	
	
    $("#menu-toggle").click(function(e) {
        $("#wrapper").toggleClass("toggled");
		
		
    });
    </script>
</body>

</html>
