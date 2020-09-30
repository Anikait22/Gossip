<?php
$mob=$_SESSION['mobile'];
$sql="select * from users where mobile='".$mob."'";
$result=mysqli_query($conn, $sql);
$user=mysqli_fetch_assoc($result);
echo htmlspecialchars($user["age"]);
?>