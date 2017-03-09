
//global variable to hold the data 
__data = {};

window.addEventListener("load",  function(){
	
	getData(function(){
		
		//all data loaded successfully
		displayMyTechnologies();
		
		displayAvailableTechnologies();
		
			
		var select_tech = document.getElementById("select_tech");
		var defId = getSelectedValue(select_tech);
		
		getTechnologyInfo(defId, displayResearchNewTechnology);
		
		select_tech.addEventListener("change", function(){
			
			var techId = getSelectedValue(this);
			getTechnologyInfo(techId, displayResearchNewTechnology);

		});
			
	});
	
	
});


function getData(callback){
	
	//this is all the data that's loaded at start 
	__loadProgress = 4;
	
	//TODO: replace this with an AJAX request 
	__data ={};
			
	//get my technologies
	$.ajax({
       type: "get",
       url: "/game/api/getnationtech",
	   data: {
	   },
       success: function(html){
		   __loadProgress--;

		   console.log(html);
		   __data.myTechnologies = JSON.parse(html);
		   console.log(__data.myTechnologies);
		   
		   if(__loadProgress == 0){
			
				callback();
			   
		   }
       }
    });
	
	
	//get nation resources 
	$.ajax({
       type: "get",
       url: "/game/api/nationresources",
	   data: {
	   },
       success: function(html){
		   __loadProgress--;
		   __data.nationResources = JSON.parse(html);
		   
		   if(__loadProgress == 0){
			
				callback();
			   
		   }
       }
	});
	
	//get nation buildings 
	$.ajax({
       type: "get",
       url: "/game/api/nationbuildings",
	   data: {
	   },
       success: function(html){
		   __loadProgress--;
		   __data.nationBuildings = JSON.parse(html);
		   
		   if(__loadProgress == 0){
			
				callback();
			   
		   }
       }
	
	});
	
	//get available technologies 
	$.ajax({
       type: "get",
       url: "/game/api/gettech",
	   data: {
	   },
       success: function(html){
		   __loadProgress--;
		   __data.availableTechnologies = JSON.parse(html);
		   
		   if(__loadProgress == 0){
			
				callback();
			   
		   }
       }
	
	});
	
	
	
}

function displayAvailableTechnologies(){
	
	var availableTechnologies = __data.availableTechnologies;
	
	var select_tech = document.getElementById("select_tech");
	
	for(var i = 0; i<availableTechnologies.length; i++){
		
		var newOp = document.createElement("OPTION");
		newOp.value = availableTechnologies[i].id;
		newOp.text = availableTechnologies[i].name;
		select_tech.appendChild(newOp);
		
	}
	
}

function displayMyTechnologies(){
	
	var myTechnologies = __data.myTechnologies;
	
	var table = getTbody(document.getElementById("table_myTechnologies"));
	

	
	for(var i = 0; i<myTechnologies.length; i++){
		
		var item = myTechnologies[i];
	
		var newTr = document.createElement("TR"),
			newTdName = document.createElement("TD"),
			newTdDesc = document.createElement("TD");
			
			
		newTdName.innerText = item.name;
		newTdDesc.innerText = item.desc;
		
		newTr.appendChild(newTdName);
		newTr.appendChild(newTdDesc);
		
		table.appendChild(newTr);
	}	
	
}


function getTechnologyInfo(techId, callback){
	
	$.ajax({
       type: "get",
       url: "/game/api/getfulltech",
	   data: {
		   techId: techId
	   },
       success: function(html){
       	   console.log(html);
		   var techData = JSON.parse(html);
		   console.log(techData);
		   callback(techData);
       }
    });
	
	
}

function displayResearchNewTechnology(techInfo){

	var table_techInfo =document.getElementById("table_techInfo");
	
	//clear 
	table_techInfo.innerHTML = "<tbody> </tbody>";
	table_techInfo = getTbody(table_techInfo);
	
	
	
		
	//p_techDesc
	var p_techDesc = document.getElementById("p_techDesc");
	p_techDesc.innerText = techInfo.description;
	
	
	{//tr_researchCost
		
		var tr_researchCost = document.createElement("TR"),
			th_researchCost = document.createElement("TH");
			
		th_researchCost.colSpan = "4";
		th_researchCost.innerText = "Research Cost";
		tr_researchCost.appendChild(th_researchCost);
		table_techInfo.appendChild(tr_researchCost);
		
		
		var resources = techInfo.researchResourcesCost;
		var n = 0;
		var newTr = document.createElement("TR");
		var prevNode = tr_researchCost;
		for (var resource in resources) {
			if (resources.hasOwnProperty(resource)) {
				
				if(n == 2){
					n = 0;
					insertAfter(newTr,prevNode);
					prevNode = newTr;
					newTr = document.createElement("TR");
					
				}
				
				var newTdName = document.createElement("TD"),
					newTdVal = document.createElement("TD");
					
				newTdName.innerText = resource;
				newTdName.width = "25%";
				
				var ownRes = __data["nationResources"][resource] || "0",
					reqRes = resources[resource],
					clr = (parseInt(ownRes, 10) < parseInt(reqRes, 10))? "red" : "green",
					warn = (clr == "red")? SYMB_WARN : "";
				
				newTdVal.innerHTML = "<span class = '"+ clr+"'>" + ownRes + "/ <b>"  + reqRes + " </b>" + warn+"</span>" ;
				newTdVal.width = "25%";
				
				newTr.appendChild(newTdName);
				newTr.appendChild(newTdVal);
				n++;
				
				
			}
		}
		if(n == 1){
			
			//there is a remaining row with only one item in it, so
			//add an empty item after it 
			var newTdName = document.createElement("TD"),
					newTdVal = document.createElement("TD");
					
				newTdName.innerText = "";
				newTdName.width = "25%";
				
				newTdVal.innerText = "";
				newTdVal.width = "25%";
				
				newTr.appendChild(newTdName);
				newTr.appendChild(newTdVal);
				
				
			//then append it 
			insertAfter(newTr, prevNode);
		}
	}
	
	
	{//tr_requiredBuildings
		var tr_requiredBuildings = document.createElement("TR"),
			th_requiredBuildings = document.createElement("TH");
			
		th_requiredBuildings.colSpan = "4";
		th_requiredBuildings.innerText = "Required Buildings (prerequisites)";
		tr_requiredBuildings.appendChild(th_requiredBuildings);
		table_techInfo.appendChild(tr_requiredBuildings);
		
		
		var buildings = techInfo.requiredBuildings;
		var n = 0;
		var newTr = document.createElement("TR");
		var prevNode = tr_requiredBuildings;
		for (var item in buildings) {
			if (buildings.hasOwnProperty(item)) {
				
				if(n == 2){
					n = 0;
					insertAfter(newTr,prevNode);
					prevNode = newTr;
					newTr = document.createElement("TR");
					
				}
				
				var newTdName = document.createElement("TD"),
					newTdVal = document.createElement("TD");
					
				newTdName.innerText = item;
				newTdName.width = "25%";
				
				var ownBuild = __data["nationBuildings"][item] || "0",
					reqBuild = buildings[item],
					clr = (parseInt(ownBuild, 10) < parseInt(reqBuild, 10))? "red" : "green",
					warn = (clr == "red")? SYMB_WARN : "";
				
				newTdVal.innerHTML = "<span class = '"+ clr+"'>" + ownBuild + "/ <b>"  + reqBuild + " </b>" + warn+"</span>" ;
				newTdVal.width = "25%";
				
				newTr.appendChild(newTdName);
				newTr.appendChild(newTdVal);
				n++;
				
				
			}
		}
		if(n == 1){
			
			//there is a remaining row with only one item in it, so
			//add an empty item after it 
			var newTdName = document.createElement("TD"),
					newTdVal = document.createElement("TD");
					
				newTdName.innerText = "";
				newTdName.width = "25%";
				
				newTdVal.innerText = "";
				newTdVal.width = "25%";
				
				newTr.appendChild(newTdName);
				newTr.appendChild(newTdVal);
				
				
			//then append it 
			insertAfter(newTr, prevNode);
		}
		if(n == 2){
			insertAfter(newTr,prevNode);
			prevNode = newTr;
			newTr = document.createElement("TR");
		}
	}
	
	
	{//tr_requiredTechnologies
			
		var tr_requiredTechnologies = document.createElement("TR"),
			th_requiredTechnologies = document.createElement("TH");
		
		th_requiredTechnologies.colSpan = "4";
		th_requiredTechnologies.innerText = "Required Technologies (prerequisites)";
		tr_requiredTechnologies.appendChild(th_requiredTechnologies);
		table_techInfo.appendChild(tr_requiredTechnologies);
		
		
		var tech = techInfo.requiredTechnologies;
		var prevNode = tr_requiredTechnologies;
		for (var i =0; i<tech.length; i++) {
			
			var item = tech[i];
			
			var newTr = document.createElement("TR");
				
			
			var newTdName = document.createElement("TD"),
				newTdVal = document.createElement("TD");
				
			
			var ownTech = typeof (__data["myTechnologies"][item["name"]]) != "undefined";
				clr = (ownTech)? "green" : "red",
				warn = (clr == "red")? SYMB_WARN : "";
				
				
				
			newTdName.innerHTML = "<span class = '"+ clr+"'>" + item["name"] + warn+"</span>" ;
			newTdName.colSpan = "2";
			
			
			newTdVal.innerHTML = "<span class = '"+ clr+"'>" + item["desc"] +"</span>" ;
			newTdVal.colSpan = "2";
			
			newTr.appendChild(newTdName);
			newTr.appendChild(newTdVal);
			
			insertAfter(newTr,prevNode);
			prevNode = newTr;	
		}
	
	}
	
	
	
	
	
}