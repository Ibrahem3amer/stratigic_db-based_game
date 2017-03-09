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
					
						<div class = "panel-heading"> Main Menu </div>
						
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
										
									<a href = "login.php" >  Login </a>
									
								</li>
							
							</ul>
						
						</div>
					
					</div>
					
			
					
					<div class = "panel panel-default panel-custom">
					
						<div class = "panel-heading"> Top Nations </div>
						
						<div class = "panel-body"> 
						
							<ul>
							
								<li> 
										
									<a href = "viewNation.php?nationID=000" > Nation1 </a>
									
								</li>
							
								<li> 
										
									<a href = "viewNation.php?nationID=000" > Nation2 </a>
									
								</li>
							
								<li> 
										
									<a href = "viewNation.php?nationID=000" > Nation3 </a>
									
								</li>
							
								<li> 
										
									<a href = "viewNation.php?nationID=000" > Nation4 </a>
									
								</li>
							
								<li> 
										
									<a href = "viewNation.php?nationID=000" > Nation5 </a>
									
								</li>
							
								<li> 
										
									<a href = "viewNation.php?nationID=000" > Nation6 </a>
									
								</li>
							
								<li> 
										
									<a href = "viewNation.php?nationID=000" > Nation7 </a>
									
								</li>
							
								<li> 
										
									<a href = "viewNation.php?nationID=000" > Nation8 </a>
									
								</li>
							
								<li> 
										
									<a href = "viewNation.php?nationID=000" > Nation9 </a>
									
								</li>
							
								<li> 
										
									<a href = "viewNation.php?nationID=000" > Nation10 </a>
									
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
								Some Cool Info About The Game 
								
							</div>
							
							<div class = "panel-body">
							
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis leo, cursus eget odio eu, eleifend laoreet nisi. 
								Donec tincidunt, quam at pharetra euismod, arcu purus vestibulum lectus, ac auctor urna felis non velit. In convallis orci ante,
								ut molestie nulla tempor at. Sed iaculis nisl enim, sit amet condimentum lectus ullamcorper a. Vestibulum condimentum cursus dui. 
								Donec vel dui purus. Vivamus facilisis arcu sit amet justo pulvinar, eget accumsan nisl facilisis. Pellentesque ac ante mi. Lorem 
								ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut tincidunt dui. Mauris vel ex congue, euismod augue eget, dapibus erat.
							
							</div>
							

						</div>
						
						<div class = "panel panel-default panel-custom" >
						
							<div class = "panel-body">
								<img src = "images/map.jpg" class = "img-responsive img-rounded"> </img>
							</div>
						
							<div class = "panel-footer">
								<center> Map Preview</center>
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
