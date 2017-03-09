const VALUES = {'acceptOffer':0, 'makeCounter':1, 'rejectOffer':2};

function setAction(name, formId){
	
	var input = document.getElementById(formId + "_action");
	input.value = VALUES[name];
	
}

function clearOffer(){
	
	var offerDiv = document.getElementById("div_offer"),
		offerDivChildren = offerDiv.getElementsByTagName("INPUT");
		
	for(var i = 0; i<offerDivChildren.length; i++){
		
		if(typeof offerDivChildren[i]!= null){
			
			offerDivChildren[i].value = 0;
			
		}
		
	}
	
}

function clearRequest(){
	
	var requestDiv = document.getElementById("div_request"),
		requestDivChildren = requestDiv.getElementsByTagName("INPUT");
		
	for(var i = 0; i<requestDivChildren.length; i++){
		
		if(typeof requestDivChildren[i]!= null){
			
			requestDivChildren[i].value = 0;
			
		}
		
	}
	
}