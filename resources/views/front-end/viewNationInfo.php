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
					
						<!-- nation summary panel -->
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading">
								Nation Summary
								
							</div>
							
							<div class = "panel-body">
							
								<!-- nation summary-->
								<div> 
									<span class = "right panel-div-title">  [Nation Summary] </span><br/>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tortor nulla, aliquet at purus ac, mattis pellentesque massa. Donec sed elit sapien.
									Nunc gravida tortor a sodales efficitur. Praesent posuere rhoncus varius. Donec sit amet rhoncus nulla. Ut rutrum elementum justo, vel consectetur nulla scelerisque eu. 
									Aliquam eget neque sit amet augue aliquam ultricies ut nec justo. Donec faucibus et diam non ornare. Praesent vitae elementum leo. Vivamus rhoncus neque euismod arcu dictum, 
									a aliquet urna porta. Pellentesque consequat, purus at fermentum bibendum, odio quam sodales lectus, ac luctus leo risus vel lectus. Mauris vel consectetur libero. 
									Nulla a commodo velit, sed malesuada ante. Nullam nec auctor dolor. Sed pharetra turpis libero, sed tristique magna fermentum quis. Mauris sit amet eros accumsan, 
									porttitor velit vitae, ultricies lectus.
									
								
								</div><!--ends nation summary -->
								<hr class = "panel-hr" />
								
								<!--  Notifications -->
								<div>
									<span class = "right panel-div-title">  [Your Notifications] </span><br/>
									
									<div class=" alert-danger red">
									  <i class = "fa fa-exclamation-triangle"></i> You haven't paid your bills today, you last paid your bills on xx  &nbsp; &nbsp;
									  <a class =  "btn-default" href = "#">  Pay bills now </a>
									</div><br/>
											
									<div class=" alert-success green">
									  <i class = "fa fa-check-circle"></i> You're up-to-date with your tax collection, you last collected taxes on xx 
									</div>	<br/>
											
									<div >
									
										This is some other information that describes your nation.
									
									</div>					
								</div><!--ends notifications-->
								
							</div>
							

						</div>
						
						
						<!-- Nation Information -->
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading">
								Nation Information
								
							</div>
							
							<div class = "panel-body collapsed">
							<table class = "table table-striped table-bordered table-special " >
									
								<tr>
								
									<td>
										Ruler:
									</td>
									
									<td>
										User Name 
										<a href = "#" class = "btn btn-default" title = "view profile"> <i class = "fa fa-user"> </i>  </a>
										<a href = "#" class = "btn btn-default" title = "send message"> <i class = "fa fa-envelope"> </i>  </a>
									</td>
								
								
								</tr>
								
								
								
								
								<tr>
								
									<td>
										Nation Name: 
									</td>
									
									
									<td>
										nation name
									
									</td>
								
								
								
								</tr>
								
								<tr>
								
									<td>
										Land Name:
									</td>
									
									
									<td>
										xxxx 
										<a href = "#" class = "btn btn-default" title = "preview land on map"> <i class = "fa fa-eye"> </i> preview land </a>
									
									</td>
								
								
								
								</tr>
								
								
								<tr>
								
									<td>
										Tax Rate:
									</td>
									
									
									<td>
										xxxx 
									
									</td>
								
								
								</tr>
										
								<tr>
								
									<td>
										War Preference:
									</td>
									
									
									<td>
										peaceful 
									
									</td>
								
								
								</tr>	
										
										
							</table>
								
							</div>
							

						</div>
						
						
						<!-- Population Information -->
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading">
								Population Information
								
							</div>
							
							<div class = "panel-body collapsed">
							<table class = "table table-striped table-bordered table-special " >
									
								<tr>
								
									<td>
										Total Population:
									</td>
									
									<td>
										xxx
									</td>
								
								</tr>
								<tr>
									<td>
										Population Happiness:
									</td>
								
									<td>
										happy
									</td>
								
								
								</tr>
								<tr>
									<td>
										Crime Rate:
									</td>
								
									<td>
										xxx
									</td>
								
								
								</tr>
								<tr>
								
									<td>
										Population growth per cycle:
									</td>
								
									<td>
										xxx / 10
									</td>
									
								
								</tr>
								
								
								
										
										
							</table>
								
							</div>
							

						</div>
						
				
						<!-- Millitary Information -->
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading">
								Millitary Information
								
							</div>
							
							<div class = "panel-body collapsed">
							<table class = "table table-striped table-bordered table-special " >
									
								
								<tr>
									<td>
										Strength:
									</td>
								
									<td>
										xxx
									</td>
								
								
								</tr>
								<tr>
								
									<td rowspan = "2">  Total Soliders: </td>
									
									<td>xxxxxx </td>
								</tr>
								<tr>
									<td>
										<table class = "table ">
											
										
											<tr>
											
												<td> Archers: </td>
												<td> xxx </td>
											</tr>
											<tr>
											
												<td> Knights: </td>
												<td> xxx </td>
											</tr>
											<tr>
											
												<td> Macemen: </td>
												<td> xxx </td>
											</tr>
											<tr>
											
												<td> Horsemen: </td>
												<td> xxx </td>
											</tr>
										</table>
										
									</td>
									
								
								</tr>
								<tr>
									<td>
										Deployed Soldiers:
									</td>
								
									<td>
										xxx
									</td>
								
								
								</tr>
								<tr>
									<td>
										Defending Soldiers:
									</td>
									
									<td>
										xxx
									</td>
								
								</tr>
								<tr>
								
									<td>
										Total causalties:
									</td>
								
									<td>
										xxx
									</td>
									
								
								</tr>
								<tr>
									<td>
										War Status:
									</td>
								
									<td>
										xxx
									</td>
								
								</tr>
								
								
								
								
										
										
							</table>
								
							</div>
							

						</div>
					
						
						
						<!-- Financial Information -->
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading">
								Financial Information
								
							</div>
							
							<div class = "panel-body collapsed">
							<table class = "table table-striped table-bordered table-special " >
									
								<tr>
								
									<td>
									Money:
									</td>
									
									<td>
									xxxxxx
									</td>
								
								</tr>
								
								<tr>
								
									<td rowspan = "2">  Total Resources Available: </td>
									
									<td>
										 market worth: xxxxx
									</td>
								</tr>
								<tr>
									<td>
										<table class = "table ">
											
										
											<tr>
											
												<td> Wood: </td>
												<td> xxx </td>
											</tr>
											<tr>
											
												<td> Stone: </td>
												<td> xxx </td>
											</tr>
											<tr>
											
												<td> Iron: </td>
												<td> xxx </td>
											</tr>
											<tr>
											
												<td> Food: </td>
												<td> xxx </td>
											</tr>
										</table>
										
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
