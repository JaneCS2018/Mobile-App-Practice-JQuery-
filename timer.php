<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Shojumaru" rel="stylesheet">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/login.css">
	<script src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script src="js/login.js"></script>
	
	<?php
	include "partials/head.html";
	?>
</head>

<body>
<div id='countdown'>10</div>
<script>
	 $(function() {
        var cd = $('#countdown');
        var c = parseInt(cd.text(),10);
        var interv = setInterval(function() {
            c--;
            cd.html(c);
            if (c == 0) {
                window.alert("Time is up.");
                clearInterval(interv);
            }
        }, 1000);
    });

</script>
 </body>
<!-- Read more at http://www.askdavetaylor.com/how_do_i_create_a_javascript_countdown_timer_on_my_web_page/#EE4DsL8M0SDCrgBS.99
 --></html>