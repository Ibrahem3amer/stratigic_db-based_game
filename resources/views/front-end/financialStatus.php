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
	<link href = "css/chartist.min.css" rel = "stylesheet">
	<link href = "css/simple-sidebar.css" rel = "stylesheet">
	<link href = "css/font-awesome.min.css" rel = "stylesheet">
	<link href = "css/styles.css" rel = "stylesheet">
	<link href = "css/styles_financialStatus.css" rel = "stylesheet">
	
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
					
					
						<!-- Financial Status -->
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading">
							
								Financial Status
							
							</div>
							
							<div class = "panel-body">
							
								<!-- overview -->
								<div> 
									<span class = "right panel-div-title">  [Overview] </span><br/>
									
									
									<div class = "left">
										<img id = "pieChart1" src = "images/chart1.png" class = "img-responsive "> </img>
									
										<img id = "pieChart1_map" src = "images/chartMap1.png" class = "img-responsive "> </img>
								
										<a id = "pieChart1_title" class = "btn-default"> <i class = "fa fa-exclamation-circle" > </i> Income Sources </a>
									</div>
							
									<div id = "overviewLabel1" class = "right">
									
									<br/>
										<table> 
											<tr>
												<td>
												<b>Total Available Money:</b>  
												</td>
												
												<td><span class = "green">  $999999999998 <i class = "fa fa-caret-up"> </i> </span>
												</td>
											</tr>
											
											<tr>
												<td>
													<b>Total Bills Due:</b>
												 <hr>
												</td>
												
												<td>
													<span class = "red">  $999999999999 <i class = "fa fa-caret-down"> </i> </span> 
												 <hr>
												 </td>
											</tr>
											
											<tr>
												<td>
													<b>Money Remaining After Payment: &nbsp;</b>
												</td>
												
												<td>
													<span class = "red">  $000000000000 <i class = "fa fa-caret-down"> </i> </span> 
												 </td>
											</tr>
										</table>
												 <span class = "alert-danger red"> <i class = "fa fa-exclamation-triangle " > </i> You do not have enough money to pay bills! </span>
										<br/><br/>
									</div>
								</div>
								
								<hr class = "panel-hr"/>
								<!-- details -->
								<div>
									<span class = "right panel-div-title">  [Details] </span><br/>
									<table class = "table-bordered table table-right" style = "width:100%">
									
										<tr>
										
											<th colspan = "2" >
											
												Spendings
											
											</th>
										
										</tr>
									
										<tr>
										
											<td style = "width:50%">
											
												total money spent on bills
											</td>
											
											<td>
											
												$xxx
											
											</td>
										
										</tr>
										<tr>
										
											<td>
											
												total money spent on constructions
											</td>
											
											<td>
											
												$xxx
											
											</td>
										
										</tr>
										<tr>
										
											<td>
											
												total money spent on millitary
											</td>
											
											<td>
											
												$xxx
											
											</td>
										
										</tr>
									
										<tr>
										
											<td>
											
												<b> total money spent  </b>
											</td>
											
											<td>
											
												<b>$xxx </b>
											
											</td>
										
										</tr>
										
										<tr>
										
											<th colspan = "2" >
											
												Taxes
											
											</th>
										
										</tr>
										<tr>
										
											<td>
											
												tax rate 
											</td>
											
											<td>
											
												xx
											
											</td>
										
										</tr>
										<tr>
										
											<td>
											
												tax paying citizens 
											</td>
											
											<td>
											
												xxxxxxx
											
											</td>
										
										</tr>
										
										<tr>
										
											<td>
											
												tax per cycle
											</td>
											
											<td>
											
												$xxxxxx
											
											</td>
										
										</tr>
										<tr>
										
											<td>
											
												<b> total available tax </b>
											</td>
											
											<td>
											
												$xxxxxxxx
											
											</td>
										
										</tr>
										
										<tr>
										
											<th colspan = "2"></th>
										
										</tr>
										
										<tr>
										
											<td>
												<b> Total Money Available </b>
											</td>
											
											<td>
												<span class = "green">  <b> $999999999999 </b><i class = "fa fa-caret-up"> </i> </span> 
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
