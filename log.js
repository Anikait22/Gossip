var a=document.getElementById("verify");
var adata=a.textContent;
document.getElementById("invalid").innerHTML=adata;
if(adata.length<30)
	document.getElementById("invalid").style.display="inline";
function show() 
{ 
	var temp=document.getElementById("password"); 
	if (temp.type=="password") 
		temp.type="text";  
	else
		temp.type="password";  
}