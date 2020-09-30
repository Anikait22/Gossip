var a=document.getElementById("profnav");
var adata=a.textContent;
document.getElementById("prof").innerHTML=adata;
document.getElementById("use").innerHTML=adata;
var b=document.getElementById("profile");
var bdata=b.textContent;
document.getElementById("name").innerHTML=bdata;
var c=document.getElementById("em");
var cdata=c.textContent;
document.getElementById("email").innerHTML=cdata;
var d=document.getElementById("mob");
var ddata=d.textContent;
document.getElementById("mobile").innerHTML=ddata;
var e=document.getElementById("age");
var edata=e.textContent;
document.getElementById("ag").innerHTML=edata;
var f=document.getElementById("gen");
var fdata=f.textContent;
document.getElementById("gender").innerHTML=fdata;
var m=document.getElementById("pass");
var mdata=m.textContent;

function passchan()
{
	document.getElementById("newuser").style.display="none";
	document.getElementById("newuser1").style.display="none";
	document.getElementById("newuser1").removeAttribute("required");
	document.getElementById("space").style.display="none";
	document.getElementById("show1").style.display="inline";
	document.getElementById("show2").style.display="inline";
	document.getElementById("newpass").style.display="inline";
	document.getElementById("newpass1").style.display="inline";
	document.getElementById("confirmpass").style.display="inline";
	document.getElementById("confirmpass1").style.display="inline";
	document.getElementById("update").style.display="block";
	document.getElementById("update").disabled=false;	
}
function userchan()
{
	document.getElementById("newpass").style.display="none";
	document.getElementById("space").style.display="none";
	document.getElementById("newpass1").style.display="none";
	document.getElementById("newpass1").removeAttribute("required");
	document.getElementById("confirmpass1").removeAttribute("required");
	document.getElementById("confirmpass").style.display="none";
	document.getElementById("confirmpass1").style.display="none";
	document.getElementById("show1").style.display="none";
	document.getElementById("show2").style.display="none";
	document.getElementById("invalid1").style.display="none";
	document.getElementById("invalid2").style.display="none";
	document.getElementById("newuser").style.display="inline";
	document.getElementById("newuser1").style.display="inline";
	document.getElementById("update").style.display="block";
	document.getElementById("update").disabled=false;	
}
function check()
{
	var h=document.getElementById("newpass1").value;
	if(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/.test(h))
	{
		document.getElementById("invalid1").style.display="none";
		document.getElementById("update").disabled=false;	
	}
	else
	{
		document.getElementById("invalid1").style.display="inline";
		document.getElementById("update").disabled=true;
	}
}
function confirm()
{
	var x1=document.getElementById("newpass1").value;
	var x2=document.getElementById("confirmpass1").value;
	if(x1==x2)
	{
		document.getElementById("invalid2").style.display="none";
		document.getElementById("update").disabled=false;	
	}
	else
	{
		document.getElementById("invalid2").style.display="inline";
		document.getElementById("update").disabled=true;
	}
}
function show1() 
{ 
	var temp=document.getElementById("newpass1"); 
    if (temp.type=="password") 
		temp.type="text";  
	else
		temp.type="password";  
} 
function show2() 
{ 
	var temp=document.getElementById("confirmpass1"); 
    if (temp.type=="password") 
		temp.type="text";  
	else
		temp.type="password";  
} 
function openFullscreen() 
{
	if(document.fullscreenElement)
	{
		document.exitFullscreen()
		document.documentElement.style.border="0px";
	}
		
	else
	{
		document.documentElement.requestFullscreen();
		document.documentElement.style.border="red solid 2px";
	}
}