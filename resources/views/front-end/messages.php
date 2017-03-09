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
	<link href = "css/styles_messages.css" rel = "stylesheet">
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
								Messages
								
							</div>
							
							<div class = "panel-body collapsed">
							
								<table id = "messagesTable-wrapper" class="table table-special min-height-300 table-responsive"> 
								
								<tr>
									<td style = "width: 80px; text-align:left;"> 
										<ul class="nav nav-pills-custom">
										  <li class="active"><a data-toggle="tab" href="#received">Received Messages</a></li>
										  <li><a data-toggle="tab" href="#sent">Sent Messages</a></li>
										</ul>

									</td>
									
									<td>
									
									<div class="tab-content">
									
									  <div id="received" class="tab-pane fade in active">
									  
										<table id = "messagesTable" class = "table table-striped ">
										
											<tr>
											
												<th></th>
												
												<th class = "hideable" style = "width: 90px" > Date </th>
												<th class = "hideable" > From </th>
												<th style = "width: 300px"> Subject </th>
												<th colspan = "4"> Actions </th>
												<th> <input type = "checkbox"> </th>
											
											</tr>
											
											
											
											<tr>
											
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-envelope" alt = "view" > </i> </a></td>
												<td class = "hideable"> <small> <?php echo date("m/d/Y  h:i:s A") ?> </small></td>
												<td class = "hideable"> <a href = "viewProfile.php?"> sender </a> </td>
												<td style = "width: 300px"> <a href = "message.php?" > this message has a subject </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-envelope-open" alt = "view" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"><i class = "fa fa-reply" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-arrow-up" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-trash" > </i> </a> </td>
												<td> <center> <input type = "checkbox"> </center> </td>
											
											</tr>
											<tr>
											
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-envelope" alt = "view" > </i> </a></td>
												<td class = "hideable"> <small> <?php echo date("m/d/Y  h:i:s A") ?> </small></td>
												<td class = "hideable"> <a href = "viewProfile.php?"> sender </a> </td>
												<td style = "width: 300px"> <a href = "message.php?" > this message has a subject </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-envelope-open" alt = "view" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"><i class = "fa fa-reply" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-arrow-up" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-trash" > </i> </a> </td>
												<td> <center> <input type = "checkbox"> </center> </td>
											
											</tr>
											
											<tr>
											
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-envelope" alt = "view" > </i> </a></td>
												<td class = "hideable"> <small> <?php echo date("m/d/Y  h:i:s A") ?> </small></td>
												<td class = "hideable"> <a href = "viewProfile.php?"> sender </a> </td>
												<td style = "width: 300px"> <a href = "message.php?" > this message has a subject </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-envelope-open" alt = "view" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"><i class = "fa fa-reply" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-arrow-up" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-trash" > </i> </a> </td>
												<td> <center> <input type = "checkbox"> </center> </td>
											
											</tr>
											
											
											
											
											
										
										</table>
									  
									  </div>
									  
									  <div id="sent" class="tab-pane fade">
										<table id = "messagesTable" class = "table table-striped">
										
											<tr>
											
												<th></th>
												
												<th  class = "hideable"style = "width: 90px" > Date </th>
												<th class = "hideable"> To </th>
												<th style = "width: 300px"> Subject </th>
												<th colspan = "4"> Actions </th>
												<th> <input type = "checkbox"> </th>
											
											</tr>
											
											
											
											
											<tr>
											
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-envelope" alt = "view" > </i> </a></td>
												<td class = "hideable"> <small> <?php echo date("m/d/Y  h:i:s A") ?> </small></td>
												<td class = "hideable"> <a href = "viewProfile.php?"> receiver </a> </td>
												<td style = "width: 300px"> <a href = "message.php?" > this message has a subject </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-envelope-open" alt = "view" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"><i class = "fa fa-reply" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-arrow-up" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-trash" > </i> </a> </td>
												<td> <center> <input type = "checkbox"> </center> </td>
											
											</tr>
											<tr>
											
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-envelope" alt = "view" > </i> </a></td>
												<td class = "hideable"> <small> <?php echo date("m/d/Y  h:i:s A") ?> </small></td>
												<td class = "hideable"> <a href = "viewProfile.php?"> receiver </a> </td>
												<td style = "width: 300px"> <a href = "message.php?" > this message has a subject </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-envelope-open" alt = "view" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"><i class = "fa fa-reply" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-arrow-up" > </i> </a> </td>
												<td> <a href = "#" class = "icon-big"> <i class = "fa fa-trash" > </i> </a> </td>
												<td> <center> <input type = "checkbox"> </center> </td>
											
											</tr>
											
											
										
										</table>
									  </div>
									  
									  
									</div>
									</td>
								</tr>
								
								
								<tr>
									
									<td>
									
									<div id = "messagesPagination">
									
										<a href = "#"> << </a>
										<a href = "#"> < </a>
										
										Page 1 / 1
										
										<a href = "#"> > </a>
										<a href = "#"> >> </a>
									
									</div>
										
									</td>
									
									<div class = " right"   style = "padding:10px; vertical-align:middle;">
										<select id = "messagesActionSelect" >
										
											<option value="" disabled selected>select an action</option>
											<option value = "delete"> Delete </option>
											<option value = "markAsRead"> Mark as read </option>
											<option value = "markAsUnread"> Mark as unread </option>
										
										</select>
										<button type = "submit" class = " btn-default"> Go </button>
									</div>
									
									<td>
									<div class = " right"   style = "padding:10px; vertical-align:middle;">
										<select id = "messagesActionSelect" >
										
											<option value="" disabled selected>select an action</option>
											<option value = "delete"> Delete </option>
											<option value = "markAsRead"> Mark as read </option>
											<option value = "markAsUnread"> Mark as unread </option>
										
										</select>
										<button type = "submit" class = " btn-default"> Go </button>
									</div>
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
<!--


-->