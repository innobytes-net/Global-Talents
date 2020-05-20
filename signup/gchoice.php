<?php

require_once "config.php";

//Access token after authentication is saved 
if (isset($_GET['code'])) 
{
    $token = $googleClient->fetchAccessTokenWithAuthCode($_GET['code']);
	$_SESSION['access token'] = $token;
	
}

// Work/Hire choice for users authenticating through API 
//The information is sent to googleCallback.php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110  p-b-33">
				<img src="images/talent.png"  class="login100-form-img p-b-1">
				<form class="login100-form validate-form flex-sb flex-w" name="gchoice" method="POST" action="googleCallback.php" >
					  
					<span class="login100-form-title" style="font-size: 15px;padding-bottom: 10px;">
						What do you want to do?
					</span>
					<div class="form-radio" style="padding-left: 85px;">
						 
						<div class="form-radio-item">
							<input type="radio" name="user" value="hire" id="hire" checked="checked" style="padding:10px;" required />
							<label for="hire" style="font-size: 15px; ">Hire</label>

							<input type="radio" name="user" value="work" id="work" required/>
							<label for="work" style="font-size: 15px; ">Work</label>
						</div>
					</div>
					
					<div class="container-login100-form-btn "  >
						<button type="submit" class="login100-form-btn" height=2%>
							Sign up

						</button>
					</div>
 
						
					</div>
				</form>
			</div>
		</div>
	</div>