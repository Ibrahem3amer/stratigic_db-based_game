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
    <link href="{{URL::to('/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
	<link href = "{{URL::to('/css/styles.css')}}" rel = "stylesheet">
	<link href = "{{URL::to('/css/simple-sidebar.css')}}" rel = "stylesheet">
	<link href = "{{URL::to('/css/font-awesome.min.css')}}" rel = "stylesheet">
	
</head>

<body>
	
	<div id = "wrapper" class = "container-fluid"> 
	
		<header id = "top" class = "row">
		
		
			
			<div id = "topLogo"  class = "col-lg-4">
				<img src = "{{URL::to('/images/logo.png')}}" class = "img-fluid"> </img>
				
				
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
										
									<a href = "{{URL::to('/')}}" >  Home </a>
									
								</li>
							
								<li> 
										
									<a href = "about.php" >  About </a>
									
								</li>
							
								<li> 
										
									<a href = "http://solar-gn.com/forum/" >  Forum </a>
									
								</li>
								@if(\Auth::check())
								<li> 
										
									<a href = "http://solar-gn.com/forum/memberlist.php?mode=viewprofile&u={{\Auth::user()->user_forum_id}}" >  Profile </a>
									
								</li>
								
								<li> 
										
									<a href = "http://solar-gn.com/forum/ucp.php?i=pm&folder=inbox" >  Messages </a>
									
								</li>
								
								<li> 
										
									<a href = "{{URL::to('/game/logout')}}" >  Logout </a>
									
								</li>
								@else
								<li> 
										
									<a href = "{{URL::to('/game/login')}}" >  Login </a>
									
								</li>
								@endif
							</ul>
						
						</div>
					</div>
					
					@if(\Auth::check())
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading"> Main Menu </div>
							
							<div class = "panel-body"> 
							
								<ul>
								
									<li> 
											
										<a href = "{{URL::to('/game/getnationinfo')}}" >  View Nation Info </a>
										
									</li>
								
									<li> 
											
										<a href = "governmentPosition.php" >  Goverment Position </a>
										
									</li>
								
									<li> 
											
										<a href = "{{URL::to('/game/editnation')}}" >  Edit Nation </a>
										
									</li>
								
									
								</ul>
							
							</div>
						
						</div>
						
						
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading"> Economy & Finance</div>
							
							<div class = "panel-body"> 
							
								<ul>
								
									<li> 
											
										<a href = "{{URL::to('/game/getfinfo')}}" > Financial Status </a>
										
									</li>
								
								
									<li> 
											
										<a href = "{{URL::to('/game/getresources')}}" > Resources </a>
										
									</li>
									
									
									<li> 
											
										<a href = "{{URL::to('/game/displaytaxes')}}" > Collect Taxes</a>
										
									</li>
								
									<li> 
											
										<a href = "{{URL::to('/game/displaybills')}}" > Pay Bills </a>
										
									</li>
								
									<li> 
											
										<a href = "{{URL::to('/game/displaygrievances')}}" > Grievances </a>
										
									</li>
								
									
								</ul>
							
							</div>
						
						</div>
						
						
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading"> Construction </div>
							
							<div class = "panel-body"> 
							
								<ul>
								
									<li> 
											
										<a href = "{{URL::to('/game/displayconstructions')}}" > View My Constructions </a>
										
									</li>
								
									<li> 
											
										<a href = "{{URL::to('/game/construct')}}" > Construct New Buildings </a>
										
									</li>
								
									<li> 
											
										<a href = "{{URL::to('/game/tech')}}" > Technology & Research </a>
										
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
					@else
						<div class = "panel panel-default panel-custom">
						
							<div class = "panel-heading"> Top 10 nations </div>
							
							<div class = "panel-body"> 
							
								<ul>
								
									<li> 
											
										<a href = "#" > Nation name </a>
										
									</li>
									<li> 
											
										<a href = "#" > Nation name </a>
										
									</li>
									<li> 
											
										<a href = "#" > Nation name </a>
										
									</li>
									<li> 
											
										<a href = "#" > Nation name </a>
										
									</li>
									<li> 
											
										<a href = "#" > Nation name </a>
										
									</li>
									<li> 
											
										<a href = "#" > Nation name </a>
										
									</li>
									<li> 
											
										<a href = "#" > Nation name </a>
										
									</li>
									<li> 
											
										<a href = "#" > Nation name </a>
										
									</li>
									<li> 
											
										<a href = "#" > Nation name </a>
										
									</li>
									<li> 
											
										<a href = "#" > Nation name </a>
										
									</li>
								
								</ul>
							
							</div>
						
						</div>
					@endif
				
				</ul>
				
			</div>

			<div id = "page-content-wrapper">
				<div class = "col-*-*">
				@if(isset($time))
					<span  id = "serverTime"  >Server Time: {{$time}}<br/></span>				
				@endif
				<div id = "nationSelection">
					<h5><strong>
					<select id = "optNationSelection" onchange = "changeNation();" style = "min-width: 200px">
						@if(isset($users_nations))
							@foreach($users_nations as $nation)
								<option value="{{$nation->id}}">{{$nation->name}}</option>
							@endforeach
						@endif
					</select></strong></h5>
					
					</div>
				@yield('page_content')
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
    <script src="{{URL::to('/js/jquery.js')}}"></script>
	
    <script src="{{URL::to('/js/main.js')}}"></script>

	
    <script src="{{URL::to('/js/main.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::to('/js/bootstrap.min.js')}}"></script>
	
	
    <script>
	
	
	
    $("#menu-toggle").click(function(e) {
        $("#wrapper").toggleClass("toggled");
		
		
    });
    </script>
</body>

</html>
