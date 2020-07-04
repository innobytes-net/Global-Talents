

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="/signup/css/register.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div">
			
				<form action="includes/reset-request.inc.php" method="post">
                    <img src="/images/talent.png" class="logo-img">
					<h3 class="text-center">Reset Your Password!</h3>
                        <p>Clink on the link sent to your email to reset your Password.</p>
                  
				


					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" name="email" placeholder="Your email address"  class="form-control form-control-lg">
					</div>


	
					<!--This is for button-->

					<div class="form-group">
						<button type="submit" name="reset-request-submit" class="btn btn-primary btn-block btn-lg">Send E-mail</button>
					</div>

					<p class="text-center">Not a member?<a href="../signup/registration.php"><br>Sign up</a></p>

                </form>
                <?php
                    if (isset($_GET['reset'])) {
                        if ($_GET['reset'] == "success") {
                        
                            echo "<p>Check your email for the link</p>";
                        }
                    }
 
                ?>
			</div>		
		</div>
	</div>
</body>
</html>