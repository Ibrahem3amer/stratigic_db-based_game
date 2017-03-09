const VALUES = {'payDue':0, 'payDifferent':1, 'refuse':2};

function setAction(action, formId){
	
	event.preventDefault();
	document.getElementById("inAction_"+ formId).value = VALUES[action];
	//document.getElementById(formId).submit();
	
}