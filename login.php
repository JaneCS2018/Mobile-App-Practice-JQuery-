<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/login.css">
	<script src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script src="js/login.js"></script>
	<script>
		$(function(){
			checkLogin();
		})
	</script>
	<?php
	include "partials/head.html";
	?>
</head>
<body>
    <div id="fadeout">
    <div class="momo"><img src="images/Map.gif"></div>
    <div><img src="images/uni.png"></div>
    <div class="loading"><img src="images/loading.gif"></div>
    </div>
    <div class="container" id="fadein" style="display:none">
	    
		<div class="login-form col-lg-12 col-md-12 col-sm-12">
		    <div class="title col-lg-12 col-md-12 col-sm-12"><img src="images/uni.png"></div>
			<form>
				<input type="text" id="login-email" placeholder="Username"><br>
				<input type="password" id="login-pass" placeholder="Password"><br>
				<button type="button" class="login_button">Login</button>
			</form>
			<div class="link">
			<a href="Forget.php">FORGOT PASSWORD</a><br>	
			<div class="link01"><a href="Create.php">CREATE NEW ACCOUNT</a></div>
			</div>
		</div>
		<div class="loggedin-section col-lg-12 col-md-12 col-sm-12">
			<div id="transition_out"><img src="images/Loading01.gif"></div>
			<div id="transition_in">
			<button class="js-logout">Logout</button>
			</div>
             
		</div>
	</div>
</body>

<script>
	setTimeout(function() {
  $("#fadeout").fadeOut().empty();
}, 6000);
	setTimeout(function() {
  $(".container").css("display","initial");
}, 6000);
	setTimeout(function() {
    $("#transition_out").fadeOut().empty();
  }, 10000);
  	setTimeout(function() {
    $("#transition_in").css("display","initial");
  }, 11000); 
</script>
</html>