<script type="text/javascript" language="javascript">
	function first()
	{
		var x1=document.getElementById("firstname").value;
    	if(x1.length>20)
		{
			var a=document.createElement("p");
			a.setAttribute("id","invalidfirst");
			document.getElementById("first").appendChild(a);	
			document.getElementById("invalidfirst").innerHTML="Maximum of 20 characters allowed";
			document.getElementById("sub").disabled=true;
			return false;
		}
		else
		{
			var b=document.getElementById("invalidfirst");
			document.getElementById("first").removeChild(b);
			document.getElementById("sub").disabled=false;
			return true;
		}
	}
	function last()
	{
		var x2=document.getElementById("lastname").value;
		if(x2.length>20)
		{
			var a=document.createElement("p");
			a.setAttribute("id","invalidlast");
			document.getElementById("last").appendChild(a);
			document.getElementById("invalidlast").innerHTML="Maximum of 20 characters allowed";
			document.getElementById("sub").disabled=true;
        	return false;
		}
		else
		{
			var b=document.getElementById("invalidlast");
			document.getElementById("last").removeChild(b);
			document.getElementById("sub").disabled=false;
			return true;
		}
	}
	function pass()
	{
		var p=document.getElementById("password").value;
		if(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/.test(p))
		{
			var b=document.getElementById("invalidpassword");
			document.getElementById("pass").removeChild(b);
			document.getElementById("sub").disabled=false;
			return (true);		
		}
    	var a=document.createElement("p");
		a.setAttribute("id","invalidpassword");
		document.getElementById("pass").appendChild(a);
		document.getElementById("invalidpassword").innerHTML="Invalid Password";
		document.getElementById("sub").disabled=true;
    	return (false);
	}
	function show() 
	{ 
		var temp=document.getElementById("password"); 
    	if (temp.type=="password") 
			temp.type="text";  
		else
			temp.type="password";  
	} 
	function show1() 
	{ 
		var temp1=document.getElementById("confirmpassword"); 
    	if (temp1.type=="password") 
			temp1.type="text";  
		else
			temp1.type="password";  
	} 
	function confirm()
	{
		var x1=document.getElementById("password").value;
		var x2=document.getElementById("confirmpassword").value;
		var b=document.createElement("p");
		b.setAttribute("id","invalidpass");		
		document.getElementById("con").appendChild(b);
		var a=document.createElement("p");
		a.setAttribute("id","Validpass");
		document.getElementById("con").appendChild(a);
    	if(x1==x2)
		{
			var b=document.getElementById("invalidpass");
			document.getElementById("con").removeChild(b);
			document.getElementById("Validpass").innerHTML="Passwords match";
			document.getElementById("sub").disabled=false;
        	return true;
		}
		else
		{
			var a=document.getElementById("Validpass");
			document.getElementById("con").removeChild(a);
			document.getElementById("invalidpass").innerHTML="Passwords dont match";
			document.getElementById("sub").disabled=true;
			return false;
		}
	}
	function mob()
	{
		var x1=document.getElementById("number").value;
    	if (x1.length==10)
		{
			var a=document.getElementById("invalidphone");
			document.getElementById("num").removeChild(a);
			document.getElementById("sub").disabled=false;
			return true;
		}
		else
		{
			var a=document.createElement("p");
			a.setAttribute("id","invalidphone");
			document.getElementById("num").appendChild(a);
			document.getElementById("invalidphone").innerHTML="Mobile number should be of 10 digits";
			document.getElementById("sub").disabled=true;
        	return false;
		}
	}
</script>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "gossip";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, password, email, mobile, age, gender) VALUES (?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssiis", $first, $last, $password, $email, $mobile, $age, $gender);
	$first=$_POST["firstname"];
	$last=$_POST["lastname"];
	$password=$_POST["password"];
	$email=$_POST["email"];
	$mobile=$_POST["phone"];
	$age=$_POST["age"];
	$gender=$_POST["gen"];
	$stmt->execute();
	echo "New records created successfully";
	$stmt->close();
	$conn->close();
?>