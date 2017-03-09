@extends('game.base')

@section('page_content')
	<div id = "dataDiv" style = "display:none;">
	
	</div>
	
	<script type = "text/javascript" src = "{{URL::to('/js/technology_research.js')}}"></script> 
	<main>

		<div  class = "container-fluid">
			<div class = "panel panel-default panel-custom">
			
				<div class = "panel-heading">
					Technology & Research
					
				</div>
				
				<div class = "panel-body">
					
					<span class = "right panel-div-title">  [Unlocked Technologies] </span><br/>
					
					<table id = "table_myTechnologies" class = "table table-bordered table-striped table-right"> 
					
						<tr>
						
							
							<th>
								My Technologies
							</th>
						
						
						</tr>
					
						
					</table> 
					
					
					
					<hr class = "panel-hr"/>

					<br/>
					<span class = "right panel-div-title">  [Research New Technologies] </span><br/>	

	
					<!-- summary -->
					<div> 
						
						
						
						<h2><strong>
						
						<select id = "select_tech" style = "min-width: 200px">
						
						</select></strong></h2>
						
						<p id = "p_techDesc"> 
							
							
						</p>
						
					
					</div><!--ends summary -->
					<hr class = "panel-hr" />
					
					<!-- Details -->
					<div>
						<span class = "right panel-div-title">  [Details] </span><br/>
						
						
						
						
						<table id = "table_techInfo" class = "table table-bordered table-right">
						
						</table>
				
							
						<button type = "submit" class = "form-control"  > <i class = "fa fa-shopping-cart" ></i> Unlock Technology </button>
							
						</div>
						<br/>
						<br/>
					</div>	
			
					
				
				</div>
				

			</div>
	
		</div>
	
	</main>
@endsection