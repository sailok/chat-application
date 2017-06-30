<?php 
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<title>Chat box</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="assets/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/main.css">
</head>

<body>

<div id="chatlogs" class="animated fadeIn">
	<span>Start your conversation...</span>	
</div>

<div class="text-center animated fadeIn" id="forms">
	<span id="uname">Name:</span> &nbsp;
	<input type="text" name="user" id="username" placeholder="Username" required="required"><br><br>
	<span id="uname"  style="position: relative;top: -60px; left: -13px;">Messege:</span> &nbsp;
	<textarea rows="3" id="msg" name="messege" required="required" placeholder="Type your messege" style="position: relative; left: -13px;"></textarea>
	<br>
	<a href="#" onclick="submit()"><button class="btn btn-secondary" id="button">Send</button></a>
</div>
<div class="logo text-center justify-content-center animated fadeInDown">
	<h1 style="font-size:65px;color: #fff;"><b>thechatroom</b></h1><br>
	<footer>
		<h6>Design made by <b><a class ="weblink" href="https://sailok.github.io/My-Portfolio/" id="link" target="_blank">&nbsp;< Sailok Chinta ></a></b></h6>
		<h6>© Sailok chinta. All Rights Reserved.</h6>
	</footer>
</div>
	
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/main.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	/*$.ajaxSetup({
		cache:false
	});*/
	setInterval(function(){
			console.log("sailok");
		$("#chatlogs").load("php-assets/logs.php");
		console.log("sailok");
		},2000);
});

</script>
</html>