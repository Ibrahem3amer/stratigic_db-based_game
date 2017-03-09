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
								About the game | How to play
								
							</div>
							
							<div class = "panel-body">
								
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis leo, cursus eget odio eu, eleifend laoreet nisi. 
								Donec tincidunt, quam at pharetra euismod, arcu purus vestibulum lectus, ac auctor urna felis non velit. In convallis orci ante,
								ut molestie nulla tempor at. Sed iaculis nisl enim, sit amet condimentum lectus ullamcorper a. Vestibulum condimentum cursus dui. 
								Donec vel dui purus. Vivamus facilisis arcu sit amet justo pulvinar, eget accumsan nisl facilisis. Pellentesque ac ante mi. Lorem 
								ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut tincidunt dui. Mauris vel ex congue, euismod augue eget, dapibus erat.
								</br>
								</br>
							
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis leo, cursus eget odio eu, eleifend laoreet nisi. 
								Donec tincidunt, quam at pharetra euismod, arcu purus vestibulum lectus, ac auctor urna felis non velit. In convallis orci ante,
								ut molestie nulla tempor at. Sed iaculis nisl enim, sit amet condimentum lectus ullamcorper a. Vestibulum condimentum cursus dui. 
								Donec vel dui purus. Vivamus facilisis arcu sit amet justo pulvinar, eget accumsan nisl facilisis. Pellentesque ac ante mi. Lorem 
								ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut tincidunt dui. Mauris vel ex congue, euismod augue eget, dapibus erat.
								</br>
								</br>
							
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis leo, cursus eget odio eu, eleifend laoreet nisi. 
								Donec tincidunt, quam at pharetra euismod, arcu purus vestibulum lectus, ac auctor urna felis non velit. In convallis orci ante,
								ut molestie nulla tempor at. Sed iaculis nisl enim, sit amet condimentum lectus ullamcorper a. Vestibulum condimentum cursus dui. 
								Donec vel dui purus. Vivamus facilisis arcu sit amet justo pulvinar, eget accumsan nisl facilisis. Pellentesque ac ante mi. Lorem 
								ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut tincidunt dui. Mauris vel ex congue, euismod augue eget, dapibus erat.
								</br>
								</br>
							
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
