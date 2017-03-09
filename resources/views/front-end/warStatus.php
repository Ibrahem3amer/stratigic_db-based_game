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
				
                 <a  class="btn btn-default" id="menu-toggle"> <span class = "fa fa-align-justify"> </span></a>
			
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
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading">
								War Status
								
							</div>
							 
							<div class = "panel-body">
								
								<span class = "right panel-div-title">  [Ongoing War] </span><br/>
								
								
								<table class = "table table-bordered table-right table-special">
								
								
								<tr>
									<td colspan = "2">
									
									</td>
									
									<td colspan = "5">
									
										<center>
										<img src = "images/flag.jpg" class = "img-responsive"></img>
										<strong> My Nation </strong> <br/>
										Strength: xx
										</center>
										
									
									</td>
									
									<td colspan = "5">
									
										<center>
										<img src = "images/flag.jpg" class = "img-responsive"></img>
										<strong> Enemy Nation </strong> <br/>
										Strength: xx <i class = "fa fa-exclamation red"> </i>  
										</center>
									
									</td>
								
								</tr>
								
								<tr>
								
									<th colspan = "12">
									
										Recent Battle Results
									
									</th>
								
								</tr>
								
								<tr>
									<td colspan = "2">
									</td>
									
									<td colspan = "3">
									
										<div class = "altable bold" smlText = "Atk"> Attacking </div>
									
									</td>
									
									<td colspan = "2">
									
										
										<div class = "altable bold" smlText = "Def"> Defending </div>
									
									</td>
									
									<td colspan = "3">
									
										
										<div class = "altable bold" smlText = "Atk"> Attacking </div>
									
									</td>
									
									<td colspan = "2">
									
										
										<div class = "altable bold" smlText = "Def"> Defending </div>
									
									</td>
								
								</tr>
								
								<tr>
									<td colspan = "2">
										<strong>
										
											Newly Deployed Units:
										
										</strong>
									</td>
									
									<td colspan = "3">
									
										xxx
									
									</td>
									
									<td colspan = "2">
									
										
										xxx
									
									</td>
									
									<td colspan = "3">
									
										
										xxx
									
									</td>
									
									<td colspan = "2">
									
										
										xxx
									
									</td>
								
								</tr>
								<tr>
									<td colspan = "2">
										<strong>
										
											Casualties :
										
										</strong>
									</td>
									
									<td colspan = "3">
									
										xxx
									
									</td>
									
									<td colspan = "2">
									
										
										xxx
									
									</td>
									
									<td colspan = "3">
									
										xxx
									
									</td>
									
									<td colspan = "2">
									
										
										xxx
									
									</td>
								
								</tr>
								<tr>
									<td colspan = "2">
										<strong>
										
											Total Currently Deployed Units:
										
										</strong>
									</td>
									
									<td colspan = "3">
									
										xxx
									
									</td>
									
									<td colspan = "2">
									
										
										xxx
									
									</td>
									
									<td colspan = "3">
									
										xxx
									
									</td>
									
									<td colspan = "2">
									
										
										xxx
									
									</td>
								
								</tr>
								
								
								<tr>
								
									<th colspan = "12">
									
										Overall Results
									
									</th>
								
								</tr>
								<tr>
									<td colspan = "2">
									</td>
									
									<td colspan = "3">
									
										<div class = "altable bold" smlText = "Atk"> Attacking </div>
									
									</td>
									
									<td colspan = "2">
									
										
										<div class = "altable bold" smlText = "Def"> Defending </div>
									
									</td>
									
									<td colspan = "3">
									
										
										<div class = "altable bold" smlText = "Atk"> Attacking </div>
									
									</td>
									
									<td colspan = "2">
									
										
										<div class = "altable bold" smlText = "Def"> Defending </div>
									
									</td>
								
								</tr>
								
								<tr>
									<td colspan = "2">
										<strong>
										
											Total Deployed Units:
										
										</strong>
									</td>
									
									<td colspan = "3">
									
										xxx
									
									</td>
									
									<td colspan = "2">
									
										
										xxx
									
									</td>
									
									<td colspan = "3">
									
										
										xxx
									
									</td>
									
									<td colspan = "2">
									
										
										xxx
									
									</td>
								
								</tr>
								<tr>
									<td colspan = "2">
										<strong>
										
											Total Casualties:
										
										</strong>
									</td>
									
									<td colspan = "3">
									
										xxx
									
									</td>
									
									<td colspan = "2">
									
										
										xxx
									
									</td>
									
									<td colspan = "3">
									
										
										xxx
									
									</td>
									
									<td colspan = "2">
									
										
										xxx
									
									</td>
								
								</tr>
								<tr>
									<td colspan = "2">
										<strong>
										
											Buildings Destroyed:
										
										</strong>
									</td>
									
									<td colspan = "5">
									
										xxx
									
									</td>
									
									
									<td colspan = "5">
									
										
										xxx
									
									</td>
								
								</tr>
								<tr>
									<td colspan = "2">
										<strong>
										
											Time Elapsed Since Start:
										
										</strong>
									</td>
									
									<td colspan = "10">
									
										1 month 10 days 
									
									</td>
									
								
								</tr>
								
								</table>
								
								<div class = "container-fluid">
								
								
									<div class = "row">
									
									
										<div class = "col-lg-4 col-md-12">
										
										<button type = "submit" class = "btn btn-default"  style = "width:100%; font-size:22px; padding-left:35px; padding-right:35px;">
										
											Make Attack
											
											<p style = "font-size:14px; margin:0px; padding:0px;"> 
											
												<i class = "fa fa-clock-o"></i> wait for 23:11 
											
											</p>
										</button>
										<br/><br/>
										</div>
										
										<div class = "col-lg-4 col-md-6">
										<button type = "submit" class = "btn btn-disabled"  style = "width:100%; font-size:22px; padding-left:35px; padding-right:35px;">
								
								
											Take Over
											
											<p style = "font-size:14px; margin:0px; padding:0px;"> 
											
												<i class = "fa fa-exclamation-triangle"></i> Enemy too strong currently
											
											</p>
										</button>
										<br/><br/>
										</div>
										
										<div class = "col-lg-4 col-md-6">
										<button type = "submit" class = "btn btn-default"  style = "width:100%; font-size:22px; padding-left:35px; padding-right:35px;">
										
											Deploy Defense
											
											<p style = "font-size:14px; margin:0px; padding:0px;"> 
											
												<i class = "fa fa-clock-o"></i> wait for 23:11 
											
											</p>
										</button>
										<br/><br/>
										</div>
										
										<div class = "col-lg-2">
										
										</div>
										
										<div class = "col-lg-4 col-md-6" >
								
											<button type = "submit" class = "btn btn-default"  style = "width:100%; font-size:22px; padding-left:35px; padding-right:35px;">
											
												Make Peace
												
												<p style = "font-size:14px; margin:0px; padding:0px;"> 
												
													<i class = "fa fa-exclamation-circle"></i> You'll lose the turn
												
												</p>
											</button>
										<br/><br/>
										
										</div>
										
										
										<div class = "col-lg-4 col-md-6">
										
										<button type = "submit" class = "btn btn-default"  style = "width:100%; font-size:22px; padding-left:35px; padding-right:35px;">
										
											Surrender
											
											<p style = "font-size:14px; margin:0px; padding:0px;"> 
											
												<i class = "fa fa-exclamation-triangle red"></i> you will give up your land
											
											</p>
										</button>
										<br/><br/>
										</div>
										
										<div class = "col-lg-2 ">
										
										</div>
									
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
	
	<script type = "text/javascript" src = "js/main.js"> </script>
	
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
