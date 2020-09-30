<?php
include "dbconnection.php";

if(!isset($_SESSION['mobile'])){
    header('Location: login.php');
}
else
{
	$cookie_name="user";
	$cookie_value=$_SESSION['mobile'];;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gossip</title>
<link href="Main.css" rel="stylesheet" type="text/css">
<script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
<script src="https://widget.rss.app/v1/carousel.js" type="text/javascript" async></script>
</head>
<body>
<div id="he"><center><h2><span id="text">GET READY TO CHANGE THE WAY YOU MULTITASK<br>#GOSSIP LAUNCHING SOON<br></span><span id="time"></span></h2></center></div>
<div id="News" class="News"><rssapp-carousel id="ZLFUmqSWEZR1yzWW"></rssapp-carousel></div>
<div id="modules" class="modules">
  <center><h1 id="mod">Select Main Module</h1></center>
  <hr>
  <div class="item3" onMouseOut="pause3()" onMouseOver="play3()"><a href="google sheets.php"><br><span>Google Sheets</span><br><br><video id="v3" width="400" height="240"><source src="Meet the new Google Sheets_9AyoRkr4I3U_1080p.mp4" type="video/mp4"></video></a>
  </div> 
  <div class="item2" onMouseOut="pause2()" onMouseOver="play2()"><a class="mod" href="game.php"><br><span>Games</span><br><br><video id="v2" width="400" height="240"><source src="Galaxy Pass has arrived in Soccer Stars. Can you conquer it__qQQj3F04zoY_1080p.mp4" type="video/mp4"></video></a>
  </div>
  <div class="item1" onMouseOut="pause1()" onMouseOver="play1()"><a class="mod" href="chat.php"><br><span>Gossip</span><br><br><video id="v1" width="400" height="240"><source src="" type="video/mp4"></video></a>
  </div>
  <div class="item4" onMouseOut="pause4()" onMouseOver="play4()"><a href="texteditor.php"><br><span>Small Seo Tools</span><br><br><video id="v4" width="400" height="240"><source src="Best Plagiarism Checker Online - How to Check Plagiarism Free - [Small SEO Tools]_OB2F3L3alRY_1080p.mp4" type="video/mp4"></video></a> 
  </div>
  <div class="item5" onMouseOut="pause5()" onMouseOver="play5()"><a href="maps.php"><br><span>Google Maps</span><br><br><video id="v5" width="400" height="240"><source src="Google Maps_ There's More to Explore_ZG4JQX4BO9A_1080p.mp4" type="video/mp4"></video></a>
  </div>
  <div class="item6" onMouseOut="pause6()" onMouseOver="play6()"><a href="saavan.php"><br><span>Jio Saavan</span><br><br><video id="v6" width="400" height="240"><source src="Say hello to JioSaavn_Ee2_gdnpTtU_1080p.mp4" type="video/mp4"></video></a>
  </div>
</div>
<div id="ab"></div>
<br>
<div id="about" class="about">
<header>
	<section class="profileHeader">
    	<h1 id="name"></h1>
    	<hr>
    </section>
</header>
<section class="mainContent"> 
  	<section class="section1">
    	<h2 class="sectionTitle">User Profile</h2>
    	<hr class="sectionTitleRule">
    	<hr class="sectionTitleRule2">
		<div id="img">
			<img src="profile.png" width="200">
		</div>
    	<div class="section1Content">
      		<p><span class="acd"><b>Username : </span><span id="use" class="abc"></span></p>
			<p><span class="acd">Email : </span><span id="email" class="abc"></span></p>
      		<p><span class="acd">Mobile : </span><span id="mobile" class="abc"></span></p>
      		<p><span class="acd">Age : </span><span id="ag" class="abc"></span></p>
			<p><span class="acd">Gender : </span><span id="gender" class="abc"></span></p></b>
    	</div>
	</section>
</section>
</div>
<div id="setting" class="setting">
<header>
	<section class="profileHeader">
    	<h1 id="goss">Gossip</h1>
    	<hr>
    </section>
</header>
<section class="mainContent"> 
  	<section class="section1">
    	<h2 class="sectionTitle" id="set">Settings</h2>
    	<hr class="sectionTitleRule">
    	<hr class="sectionTitleRule2">
		<div id="setimg">
			<img src="settings.png" width="150">
		</div>
    	<div class="section1Content">
      		<form method="post" action="login.php">
				<center><input type="button" class="change" value="Change Password" onClick="passchan()" />
				<input type="button" class="change" value="Focus Mode" onClick="openFullscreen()" />
				<input type="button" class="change" value="Change Username" onClick="userchan()" /></center>
				<br>
				<label for="newpass" id="newpass">New Password*</label>
      			<input required name="newpass" id="newpass1" value="" type="password" value="" class="change2" onBlur="check()" autocapitalize="off" autocorrect="off"/>
				<div class="hide-show" onClick="show1()">
			    <span id="show1">Show</span>
      			</div><br><br>
				<p id="invalid1">Invalid Password</p><br>
				<label for="confirmpass" id="confirmpass">Confirm Password*</label>
      			<input required name="confirmpass" id="confirmpass1" type="password" value="" onBlur="confirm()" class="change2" autocapitalize="off" autocorrect="off"/>
				<div class="hide-show" onClick="show2()">
			    <span id="show2">Show</span>
      			</div><br><br>
				<p id="invalid2">Passwords dont match</p><br>
				<label for="newuser" id="newuser">New Username*</label>
      			<input required name="newuser" id="newuser1" value="" type="text" class="change2" autocapitalize="off" autocorrect="off"/>
				<button id="update" type="submit">Update</button>
			</form>
			<div id="space"><br><br><br><br></div>
    	</div>
	</section>
</section>
</div>
<div id="nav">
	<ul>
		<li><a href="login.php">Logout</a></li>
  		<li><a href="#setting">Settings</a></li>
  		<li><a href="#ab" id="prof"></a></li>
  		<li><a href="#modules">Modules</a></li>
		<li><a href="#News">News</a></li>
		<li class="log"><img width="50px" src="logo.png"></li>
		<li class="te">Gossip © 2020 - All Rights Reserved</li>
	</ul>
</div>
</body>
<div id="profnav" class="php">
	<?php
		include "navprof.php";
	?>
</div>
<div id="em" class="php">
    <?php
        include "em.php";
    ?>
</div>
<div id="mob" class="php">
    <?php
        include "mob.php";
    ?>
</div>
<div id="age" class="php">
    <?php
        include "age.php";
    ?>
</div>
<div id="gen" class="php">
    <?php
        include "gen.php";
    ?>
</div>
<div id="profile" class="php">
    <?php
        include "profdb.php";
    ?>
</div>
<div id="pass" class="php">
    <?php
        include "pass.php";
    ?>
</div>
<script type="text/javascript" src="hom2.js"></script>
<script type="text/javascript" src="home.js"></script>
<script type="text/javascript" src="time.js"></script>
</html>