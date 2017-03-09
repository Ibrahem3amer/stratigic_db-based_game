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
					
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading">
								Train New Soliders
								
							</div>
							
							<div class = "panel-body">
							
								<!-- summary -->
								<div> 
									<span class = "right panel-div-title">  [Summary] </span><br/>
									
									
									
									<h2><strong>
									<select style = "min-width: 200px">
									
										<option>
										
										Archer
										
										</option>
									
										<option>
										
										Archer
										
										</option>
									
										<option>
										
										Archer
										
										</option>
									
										<option>
										
										Archer
										
										</option>
									
									</select></strong></h2>
									
									<p> 
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
									Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
									when an unknown printer took a galley of type and scrambled it to make a type specimen book.
										
										
									</p>
									
								
								</div><!--ends summary -->
								<hr class = "panel-hr" />
								
								<!-- Details -->
								<div>
									<span class = "right panel-div-title">  [Details] </span><br/>
									
									<table class = "table table-bordered table-right">
								
										<tr>
										
											<td >
											
												Training Cost:
											</td>
										
											<td >
											
												xxx
											</td>
										
										</tr>
										
										<tr>
										
											<th colspan = "4" >
											
												Required Buildings (prerequisites)
											
											</th>
										
										</tr>
										<tr>
										
											<td >
											
												Small House
											</td>
											
											<td >
											
												xxxxx <strong> /xxxxx </strong>
											
											</td>
										
										
											<td >
											
												Large House
											</td>
											
											<td >
											
												xxxxx <strong> /xxxxx </strong>
											
											</td>
										
										</tr>
										<tr>
										
											<td >
											
												Church
											</td>
											
											<td >
											
												<span class = "red" >xxxxx </span><strong> /xxxxx </strong>
											
											</td>
										
										
											<td >
											
											</td>
											
											<td >
											
											
											</td>
										
										</tr>
										
										
										
										<tr>
										
											<th colspan = "4" >
											
												Strength
											
											</th>
										
										</tr>
										
										<tr>
										
											<td colspan = "2">
											
												Range Attack Strength
											
											</td>
											
											<td colspan = "2">
												
												xxx
												
											</td>
										
										</tr>
										<tr>
										
											<td colspan = "2">
											
												Range Defense Strength
											
											</td>
											
											<td colspan = "2">
												
												xxx
												
											</td>
										
										</tr>
										<tr>
										
											<td colspan = "2">
											
												Melee Attack Strength
												
											</td>
											
											<td colspan = "2">
												
												xxx
												
											</td>
										
										</tr>
										<tr>
										
											<td colspan = "2">
											
												Melee Defense Strength
											
											</td>
											
											<td colspan = "2">
												
												xxx
												
											</td>
										
										</tr>
										
										
										
								</table>
							
									<hr class = "panel-hr"></hr>
							
									<div class = "right" >
										
										<table class = "table table-bordered table-right">
										
											<tr>
											
											<td colspan = "4">
												<label> Amount: </label> <input type = "number">
											
											</td>
											
											</tr>
											
											<tr>
											
												<th>
													
												</th>
											
												<th>
													Available
												</th>
											
												<th>
													Cost 
												</th>
											
												<th>
													Remaining
												</th>
											
											
											</tr>
										
											
											<tr>
												
												<td>
													Money 
												</td>
												<td>
													xxx
												</td>
												<td>
													xxxx
												</td>
												<td>
													xxxx
												</td>
											
											</tr>
											
											
										
										</table>
										
										
									<button type = "submit" class = "form-control"  > <i class = "fa fa-shopping-cart" ></i> Train Units </button>
									</div>
									<br/>
									<br/>
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
