<?php
include 'dbconnection.php';

$mob=$_POST["mobile"];
$password=$_POST["password"];
if($mob!="" && $password!="")
{
	$sql_query="select count(*) as cntUser from users where mobile='".$mob."' and password='".$password."'";
    $result=mysqli_query($conn,$sql_query);
    $row=mysqli_fetch_array($result);
    $count=$row['cntUser'];
    if($count>0)
	{
    	$_SESSION['mobile']=$mob;
        header('Location: homepage.php');
		$sql="select username from users where mobile='".$mob."'";
    	$result=mysqli_query($conn, $sql);
		$user=mysqli_fetch_assoc($result);
		$file=fopen("user.txt","w") or die("Unable to open file!");
		fwrite($file,$user["username"]);
		fclose($file);
    }
	else
	{
    	echo "Invalid username/password";
    }
}
?>