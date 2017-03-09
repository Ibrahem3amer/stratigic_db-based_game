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
							
								Pay Bills
							
							</div>
							
							<div class = "panel-body">
							
								<img src = "images/taxes.png" class = "img-responsive"> </img>
								
								<table class = "table table-bordered table-right">
								
										<tr>
										
											<th colspan = "2" >
											
												Bills
											
											</th>
										
										</tr>
										<tr>
										
											<td width="50%">
											
												<a class = "btn-default" href = "#"> <i class = "fa fa-exclaimation-circle"></i> Last bill payment date </a>
											</td>
											
											<td>
											
												xx/xx/xxxx
											
											</td>
										
										</tr>
										
										<tr>
										
											<th colspan = "2" >
											
												Properties & Costs
											
											</th>
										
										</tr>
										<tr>
										
											<td>
											
												total millitary units
											</td>
											
											<td>
											
												xxxxxxx
											
											</td>
										
										</tr>
										<tr>
										
											<td>
											
												millitary unit maintenace cost
											</td>
											
											<td>
											
												$xxx
											
											</td>
										
										</tr>
										<tr>
										
											<td class = "red" >
											
												total millitary maintenace cost
											</td>
											
											<td class = "red">
											
												$xxxxxx
											
											</td>
										
										</tr>
										<tr>
										
											<td>
											
												number of constructed buildings
											</td>
											
											<td>
											
												xxxxx
											
											</td>
										
										</tr>
										<tr>
										
											<td>
											
												maintenance cost per building 
											</td>
											
											<td>
											
												$xxx
											
											</td>
										
										</tr>
										<tr>
										
											<td>
											
												additional maintenance cost
											</td>
											
											<td>
											
												$xxxxx
											
											</td>
										
										</tr>
										<tr>
										
											<td class = "red">
											
												total construction maintenace cost
											</td>
											
											<td class = "red">
											
												$xxxxxxxx
											
											</td>
										
										</tr>
										
										<tr>
											<th colspan = "2"></th>
										</tr>
										<tr>
										
											<td class = "red">
											
												<b> total available money</b>
											</td>
											
											<td class = "red">
											
												<b>$xxxxxxxx</br>
											
											</td>
										</tr>
										<tr>
										
											<td>
											
												<b> total bills due</b>
											</td>
											
											<td>
											
												<b>$xxxxxxxx</br>
											
											</td>
										</tr>
										<tr>
										
											<td class = "green" >
											
												<b> moeny after paying bills</b>
											</td>
											
											<td class = "green">
											
												<b>$xxxxxxxx</br>
											
											</td>
										</tr>
										
								</table>
							
								<input type = "submit" value = "Pay bills now" class = "form-control"> 
							
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
