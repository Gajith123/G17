function enableButton(){
    if(document.getElementById("agreeterms").checked==true){
        document.getElementById("submits").disabled=false;
    }
    else{
        document.getElementById("submits").disabled=true;  
    }
}