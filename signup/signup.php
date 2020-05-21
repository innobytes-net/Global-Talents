<?php
session_start();
require_once "config.php";

 $loginURL = $googleClient->createAuthUrl();

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
				<form class="login100-form validate-form flex-sb flex-w" name="registration" method="POST" action="registration.php" >
					  
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
					<span class="login100-form-title" style="font-size: 30px;padding-bottom: 20px;">
					 Sign Up With
					</span>
					<a href="#" class="btn-google m-b-20" style="text-decoration: none;">
						<img src="images/icons/linkedin.png" alt="linkedin" height="30px" width="30px">
						LinkedIn
					</a>

					<a href='<?php echo $loginURL ;?>' class="btn-google m-b-20" style="text-decoration: none;">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>
 


					<p data-v-733406b2="" data-v-44072c38="" class="btn-separator my-30"><span data-v-733406b2="" data-v-44072c38="">OR</span></p>


					<div class="wrap-input100 validate-input" data-validate = "Username is required" style="margin-top:20px;width: 45%;margin-bottom: 20px;">
						<input class="input100" type="text" name="firstname" placeholder="Firstname" required>
						<span class="focus-input100"></span>
					 
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required" style="margin-top:20px;width: 45%;margin-bottom: 20px;">
						<input class="input100" type="text" name="lastname" placeholder="Lastname" required>
						<span class="focus-input100"></span>
					 
					</div>
					


					<div class="wrap-input100 validate-input" data-validate = "Email is required" style="width: 100%;margin-bottom: 20px;" >
						<input class="input100" type="text" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required" style="width: 100%;margin-bottom: 20px;" >
						<input class="input100" type="text" name="password" placeholder="Create Password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn "  >
						<button type="submit" class="login100-form-btn">
							Sign up

						</button>
					</div>
 
						
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script>
		var a=document.getElementById
	</script>

    <div class="main">

        <div class="container">
            <h2>Sign Up and Get Started</h2>
            <form method="POST" id="signup-form" class="signup-form" action = "registration.php" enctype="multipart/form-data">
                
                <h3>
                    <span class="title_text">Personal Information</span>
                </h3>
                <fieldset>
                    <h4 class="text-center">What do you want to do?</h4>
                    
                    <div class="heading">
                        <button class="btn btn-default" onclick="myFunction()"
                        type="button"  
                        style=" color: white;background-color:#1abc9c;border-radius: 5px;padding: 20px;"
                        required="required" id="btn-1">
                            <span class="d-none d-full-user-type-inline">I WANT TO WORK</span>
                             
                            
                        </button>
                        <button class="btn btn-default ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" onclick="myFunction1()" id="btn-2" 
                        style="color: white;background-color:black;border-radius: 5px;padding: 20px;"type="button" tracking="" tracking-event="click" tracking-location="registration" tracking-sublocation="complete_your_account" tracking-data="[]" tracking-label="register_as_freelancer" tracking-value="" tracking-item-type="null" tracking-olog="1" tracking-snowplow="1" tracking-gtm="0" tracking-element="" tracking-gtm-event="ga" data-ng-click="setFlow('freelancer_high_potential');" data-ng-model="flowSwitch" data-eo-btn-radio="'freelancer'" name="flowSwitchBtn" data-ng-required="!flowSwitch" required="required">
                            <span class="d-none d-full-user-type-inline">I WANT TO HIRE</span>
                            
                        </button>

                    </div>
                
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="first_name" class="form-label">First name</label>
                            <input type="text" name="first_name" id="first_name" placeholder="First Name" />

                            <label for="last_name" class="form-label">Last name</label>
                            <input type="text" name="last_name" id="last_name" placeholder="Last Name" />
                        </div>
                        <div class="fieldset-content">
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" style="width: 400px;" name="email" id="email"placeholder="Email" />
    
                                
                            </div>
                     
    
                       
    
                        <div class="form-group form-password">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" data-indicator="pwindicator" />
                            
                        </div>

                    <div class="fieldset-footer">
                        <span>Step 1 of 2</span>
                    </div>

                </fieldset>
                 
                <h3>
                    <span class="title_text">Account Infomation</span>
                </h3>
                <fieldset>
                    
                    
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" placeholder="User Name" />
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="form-label">Gender</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" value="male" id="male" checked="checked" />
                                <label for="male">Male</label>
    
                                <input type="radio" name="gender" value="female" id="female" />
                                <label for="female">Female</label>
                            </div>
                        </div>
                        <div class="form-select">
                            <label for="country" class="form-label">Country</label>
                            <select name="country" id="country">
                                <option value="">Country</option>
                                <option value="India">India</option>
                                
                            </select>
                            <label for="state" class="form-label">State</label>
                            <select onchange="print_city('state', this.selectedIndex);" name="state" id="sts">
                                
                            </select>
                            <label for="city" class="form-label">City</label>
                            <select name="city" id="state"></select>
                            <script language="javascript">print_state("sts");</script>
                        </div>                 

                </fieldset>

                 </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="vendor/minimalist-picker/dobpicker.js"></script>
    <script src="vendor/jquery.pwstrength/jquery.pwstrength.js"></script>
    <script src="js/main.js"></script>
   <script>
         function myFunction() { 
                document.getElementById("btn-1").style.background ="#1abc9c"; 
                document.getElementById("btn-2").style.background ="black"; 
            }  
            function myFunction1() { 
                document.getElementById("btn-2").style.background ="#1abc9c"; 
                document.getElementById("btn-1").style.background ="black"; 
            }  

   </script>
   
</body>
</html>