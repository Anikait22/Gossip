var a=document.getElementById("profnav");
var adata=a.textContent;
document.getElementById("prof").innerHTML=adata;

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
function openFullscreen2() 
{
	document.getElementById("m").requestFullscreen();
}