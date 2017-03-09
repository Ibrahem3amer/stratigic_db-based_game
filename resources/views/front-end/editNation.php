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
					
					
						<!-- Edit Nation -->
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
										<input type = "text" value = "Nation name" >
									</td>
								
								
								</tr>
								
								
								
								
								<tr>
								
									<td>
										Nation Slogan:
									</td>
									
									
									<td>
										<textarea type = "text"  style = "width: 60%"> some catchy slogan</textarea>
									
									</td>
								
								
								
								</tr>
								
								<tr>
								
									<td>
										Nation Flag:<br/>
									</td>
									
									
									<td>
											
												<img class = "img img-responsive thumbnail " src ="images/flag.jpg"> </img>
											
												
												<select >
												
													<option> select flag </option>
													<option> flag option 1</option>
													<option> flag option 2</option>
													<option> flag option 3</option>
													
													
												
												</select><br/><br/>
												Upload new flag: 
												<input type = "file" >
									</td>
								
								
								
								</tr>
								
								<tr>
								
									<td>
										Nation Colors:<br/>
									</td>
									
									
									<td>
									
										<input type = "color">
										<input type = "color">
											
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
										<select >
										
											<option> select religion </option>
											<option> religion option 1</option>
											<option> religion option 2</option>
											<option> religion option 3</option>
											
											
										
										</select>
										
									
									</td>
								
								</tr>
								
								
								<tr>
								
									<td>
										War Preference: 
									</td>
									
									
									<td>
										<select >
										
											<option> define war preference </option>
											<option> war preference 1</option>
											<option> war preference 2</option>
											
											
										
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
										<input type = "number">
										
									
									</td>
								
								</tr>
							</table>
							
							<input type = "submit" class = "form-control" style = "">
								
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
