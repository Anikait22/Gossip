<?php
	include "dbconnection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="reg.css">
    <title>Gossip - Create Account</title>
	<script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>
<body>
<center><div class="login_form">
  <section class="login-wrapper">
    <div class="logo">
		 <img class="lo" src="logo.png">
    </div>
    <form id="reg" class="reg" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="firstname3">First Name*<br>
      </label>
      <input  required name="firstname" type="text" id="firstname" onBlur="first()" autocapitalize="off" autocorrect="off"/>
	  <label for="lastname">Last Name*</label>
      <input  required name="lastname" type="text" id="lastname" onBlur="last()" autocapitalize="off" autocorrect="off"/>
	  <label for="lastname">User Name*</label>
      <input  required name="username" type="text" id="username" autocapitalize="off" autocorrect="off"/>
	  <label for="password">Password*</label>
      <input class="password" required onBlur="pass()" id="password" name="password" type="password"/>
	  <div class="hide-show" onClick="show()">
		  <span>Show</span>
      </div><br><br><br>
	  <div id="pass"></div>
	  <p align="left"><ul>
		<li>Password must have a Uppercase Character</li>
		<li>Password must have a Lower Character</li>
		<li>Password must have a Number</li>
		<li>Password must have a Special Character</li>
		</ul></p><br>
	  <label for="confirmpassword">Confirm Password*</label>
      <input class="password" required id="confirmpassword" onBlur="confirm()" name="confirmpassword" type="password"/>
      <div class="hide-show" onClick="show1()">
		  <span>Show</span>
      </div><br><br><br>
	  <div id="con"></div>
	  <label for="email">Email*</label>
      <input  required name="email" type="email" id="email" autocapitalize="off" autocorrect="off"/>
	  <label for="number">Mobile No.*</label>
      <input  required name="phone" type="number" id="number" onBlur="mob()"/>
	  <div id="num"></div>
	  <label for="age">Age*</label>
      <input  required name="age" id="age" type="number"/>
	  <label for="gen">Gender</label>
	  <div class="gender">
  	  <input type="radio" name="gen" class="gen" value="Male">Male<br>
	  <input type="radio" name="gen" class="gen" value="Female">Female<br>
	  <input type="radio" name="gen" class="gen" value="Other">Other
	  </div>
	  <br>
	  <br>
	  <br>
	  <br>
	  <p id="invalid"></p>
	  <br>
	  <p>* Required</p>
	  <p><a href="login.php">Login</a></p>
	  <button class="sub" id="sub" type="submit">Sign Up</button>
    </form>
</section>
</div></center>
</body>
<div id="verify">
<?php
	include "regdb.php";
?>
</div>
<script type="text/javascript" src="reg.js"></script>
</html>