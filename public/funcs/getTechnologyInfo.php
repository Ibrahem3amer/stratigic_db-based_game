<?php

// $_POST["techId"];  <= the requested technology's Id is stored in this  

$techId = $_POST["techId"];

switch($techId){
	
	case "techId_1":
	echo 
	'{
						
		"description": "Tech description here 1",
		"researchResourcesCost": {
		
			"money": "250",
			"wood": "20",
			"paper": "15"
		
		},
		"requiredBuildings": {
			
			"Hospital": "10",
			"Church": "1",
			"School": "2"
		
		},
		
		"requiredTechnologies": [
			
			{
				"name": "Mining",
				"desc": "tech 1 description"
			},
			
			{
				"name": "Farming",
				"desc": "tech 2 description"
			},
			
			{
				"name": "Rocket Science",
				"desc": "tech 3 description"
			}
		
		]
		
			
	}';
	
	break;
	
	case "techId_2":
	echo 
	'{
						
		"description": "Tech description here 2",
		"researchResourcesCost": {
		
			"money": "555",
			"wood": "2",
			"iron": "100",
			"paper": "230",
			"marble": "12"
		
		},
		"requiredBuildings": {
			
			"House": "100",
			"House": "100",
			"House": "100",
			"Mine": "2"
		
		},
		
		"requiredTechnologies": [
			
			{
				"name": "Medecine",
				"desc": "tech 1 description"
			},
			
			{
				"name": "Rocket Science",
				"desc": "tech 2 description"
			}
		
		]
		
			
	}';
	
	
	
	break;
	
	case "techId_3":
	
	echo 
	'{
						
		"description": "Tech description here 3",
		"researchResourcesCost": {
		
			"money": "890",
			"glass": "10",
			"wood": "150",
			"rubber": "150"
		
		},
		"requiredBuildings": {
			
			"Barracks": "1"
		
		},
		
		"requiredTechnologies": [
			
			{
				"name": "Millitia",
				"desc": "tech 1 description"
			},
			
			{
				"name": "Dragon Training",
				"desc": "tech 2 description"
			}
		
		]
		
			
	}';
	
	break;
}


?>