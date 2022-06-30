function enableButton(){
	if(document.getElementById("agreepd").checked==true){
        document.getElementById("submitpd").disabled=false;
	}
	else{
        document.getElementById("submitpd").disabled=true;	
	}
}
