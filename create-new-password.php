<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="/signup/css/register.css">
	<script type="text/javascript"> 
          
		  // Function to check Whether both passwords 
		  // is same or not. 
		  function check_pass() 
	{
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
	  // If password not entered 
	if (password != confirmPassword) 
	  {
	document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
	document.getElementById('submit').disabled = true;
  }
   
else if (password == '' || confirmPassword == '') 
  {
	document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
	document.getElementById('submit').disabled = true;
  }
	else 
  {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
	document.getElementById('submit').disabled = false;
  }
		
	}
		
	  </script>   
</head>
<body>
    
<?php
                $selector = $_GET['selector'];
                $validator = $_GET['validator'];

                if (empty($selector) || empty($validator)) 
                {
                    echo "Could not validate your request";                        
                }
                else
                {   
                    //checks if the variable is in hexadecimal format
                    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) 
                    {
                    ?>
<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div">
			
				<form action="includes/reset-password.inc.php" method="POST" >
                    <img src="/images/talent.png" class="logo-img">
					<h3 class="text-center">Set Your Password!</h3>
                  
					

						<input type="hidden" name="selector" value = "<?php echo $selector?>">
                        <input type="hidden" name="validator" value = "<?php echo $validator?>">

<!-- New password -->
					<div class="form-group">
						<label for="New password">New Password:</label>
						<input type="password" id="txtPassword" name="pwd" placeholder="Enter new password" onkeyup='check_pass();' onchange='check_pass();'  class="form-control form-control-lg" required>
					</div>
<!-- Confirm new password -->

<div class="form-group">
						<label for="Confirm new password">Confirm new passsword:</label>
						<input type="password" id="txtConfirmPassword" name="pwd-repeat" placeholder="Confirm new password" onkeyup='check_pass();' onchange='check_pass();'  class="form-control form-control-lg" required>
						<span id='message'></span>
					</div>
					
	
					<!--This is for button-->

					<div class="form-group">
						<button disabled="true" id="submit" name="reset-password-submit" type="submit" class="btn btn-primary btn-block btn-lg">Reset Password</button>
					</div>

					<p class="text-center">Not a member?<a href="/signup/registration.php"><br>Sign up</a></p>

                </form>
           </div>		
		</div>
    </div>
	  
    <?php
                    }
                }

                ?>

	
</body>
</html>