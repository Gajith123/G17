function checkPassword()
{
	var x=document.getElementById("pwd").value;
	var y=document.getElementById("rpwd").value
	if(x!=y){
		alert("Password Mismatch");
		return false;
	}
}

function enableButton()
{
	if(document.getElementById("agreeterms").checked==true){
        document.getElementById("submits").disabled=false;
        document.getElementById("submitc").disabled=false;
	}
	else{
        document.getElementById("submits").disabled=true;
        document.getElementById("submitc").disabled=true;	
	}
}
