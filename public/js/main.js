const SYMB_WARN = "<i class = 'fa fa-exclamation-triangle'></i>";


window.addEventListener("resize",  function(){
	
	alterTexts();
});

window.addEventListener("load",  function(){
	
	alterTexts();
	
	getAvailableNations();
	
	displayServerTime();
	
	formatTexts();
	
});

function formatTexts(){
	
	var formatableTexts = document.getElementsByClassName("formatable");
	for(var i = 0; i<formatableTexts.length; i++){
		
		var curText = formatableTexts[i];
		
		
		var oldval = curText.innerText;
		var dollar = "";
		if(oldval[0] == '$'){
			oldval = oldval.slice(1,oldval.length);
			dollar = "$";
		}
		oldval = parseInt(oldval,10);
		
		var minval = parseInt(curText.getAttribute('minval'),10),
			maxval = parseInt(curText.getAttribute('maxval'),10); 
		
		//ie not expecting any formatting here 
		if(isNaN(minval) && isNaN(maxval))continue;
		
		if(oldval < minval || oldval > maxval){
			curText.innerHTML = "";
			
			var newText = '<span class = "red"> <i class = "fa fa-exclamation-triangle"></i> ' + dollar + oldval.toString() + ' </span>';
			
			curText.innerHTML = newText;
		}else{
			curText.innerHTML = "";
			
			var newText = '<span class = "green">' + dollar + oldval.toString() + '</span>';
			
			curText.innerHTML = newText;
			
		}
		
		
		
		
	}
	
}

function displayServerTime(){
	
	var time = "";
	$.ajax({
       type: "POST",
       url: "./funcs/getTime.php",
	   data: {
	   },
       success: function(html){
		time = html;
		document.getElementById("serverTime").innerHTML = "Server Time: " + time;
       }
    });
	
}

function changeNation(){
	
	var nationId = getSelectedValue(document.getElementById("optNationSelection"));
	console.log(name);
	$.ajax({
       type: "POST",
       url: "./game/api/changeNation.php",
	   data: {
		   nationId: nationId
	   },
       success: function(html){
		   window.location.reload();
       }
    });
	
	
}

/*
	function: getAvailableNations, gets the available nation 
*/
function getAvailableNations(){
	
	var menu = document.getElementById("optNationSelection");
	/*TODO: REPLACE THIS WITH */

	$.ajax({
       type: "POST",
       url: "./game/api/getAvailableNations.php",
	   data: {
	   },
       success: function(html){
		  
		//should look like this: 
		var nations = [
			{
				"name": "nation1", 
				"id": "1"
			},
			{
				"name": "nation2", 
				"id": "2"
			},
			{
				"name": "nation3", 
				"id": "3"
			}
			
		]; 
		   
		//var nations = JSON.parse(html);
		while(nations.length>0){
			
			var curNation = nations.pop();
			
			var opt = document.createElement("OPTION");
			opt.value = curNation.id;
			opt.innerText = curNation.name;
			menu.appendChild(opt);
			
		}
       }
    });
		

	
}


function alterTexts(){
	
	var w = document.getElementById("page-content-wrapper").offsetWidth;
	
	var altables = document.getElementsByClassName("altable");
	for(var i = 0; i <altables.length; i++){
		
		
		if(altables[i].innerHTML != altables[i].getAttribute("smlText")){
			altables[i].setAttribute("largeText", altables[i].innerHTML);
		}
		if(w < 700){
			
			altables[i].innerHTML = altables[i].getAttribute("smlText");
			
		}else{
			altables[i].innerHTML = altables[i].getAttribute("largeText");
		}
	}
	
}

function getSelectedText(e){
	
	return e.options[e.selectedIndex].text;
	
}


function getSelectedValue(e){
	
	return e.options[e.selectedIndex].value;
	
}

function getTbody(table){
	
	var c = table.childNodes;
	for(var i = 0; i<c.length; i++){
		if(c[i].nodeName == "TBODY"){
			return c[i];
		}
	}
	
}

function insertAfter(newNode, referenceNode) {
	
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}