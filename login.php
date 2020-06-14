<?php
session_start();
$server='162.215.253.205';
$user='innoszdh_global';
$pass='kuber123';
$db='innoszdh_globaltalents';
$port = '3306';
$connection= new mysqli($server,$user,$pass,$db,$port);
if($connection->connect_error){
    die("Database Error:". $connection->connect_error);
}
$errors = array();
$firstname = "";
$lastname = "";
$email = "";
//if user clicks on signup button
if(isset($_POST['signin-btn'])){

    $email = $_POST['email'];
	// $password = $_POST['password'];
	$password = $_POST['password'];
	
    
    
      
    

    //validation
    if(empty($email)){
        $errors['email'] = "Email Required";
    }
    if(empty($password)){
        $errors['password'] = "Password Required";
	}
	
	// $sql="select * from USERS where email_id='".$email."' AND password='".$password."' ";
    
    // $result = mysqli_query($connection,$sql);
    //   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
    //   $count = mysqli_num_rows($result);
	$sql = "SELECT * FROM USERS where email_id = '$email' && password='$password'";
	$result = mysqli_query($connection,$sql);
	if(mysqli_num_rows($result)==1){
			//return true;
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['alert-class'] = "alert-success";
			$_SESSION['email_id'] = $email;
			header('location: index.php');
			exit();
			

	}else{
		$errors['login_fail']="Wrong Credentials";
	}

	//  $sql = "SELECT * FROM users where email_id = ? LIMIT 1";
	//  $stmt = $connection->prepare($sql);
	//  $stmt->bind_param('s',$email);
	//  $stmt->execute();
	//  $result =  $stmt->get_result();
	//  $user = $result->fetch_assoc();

	//  if(count($errors)===0){
	// 	if(password_verify($password, $user['password'])){
	// 		//login user
			
	// 		// $_SESSION['userid'] = $user['userid'];
	// 		// $_SESSION['first_name'] = $user['first_name'];
	// 		// $_SESSION['email_id'] = $user['email_id'];
	
	// 		//set flash message
	// 		$_SESSION['message'] = "You are now logged in";
	// 		$_SESSION['alert-class'] = "alert-success";
	// 		header('location: ./login.php');
	// 		exit();
	
	// 	}else{
	// 		$errors['login_fail']="Wrong Credentials";
	// 	}
	// }
	

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="/signup/css/register.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div">
			<?php if(isset($_SESSION['message'])): ?>
			<div class="alert <?php echo $_SESSION['alert-class']; ?>">
				<?php 
				echo $_SESSION['message'];
				unset($_SESSION['message']);
				unset($_SESSION['alert-class']);
				?>
			</div>
			<?php endif; ?>
		
				<form action="login.php" method="post">
                    <img src="/images/talent.png" class="logo-img">
					<h3 class="text-center">LOGIN</h3>

                    <?php if(count($errors)>0): ?>
			        <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
					</div>   
                    <?php endif; ?>

				


					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" name="email"  value="<?php echo $email; ?>" class="form-control form-control-lg">
					</div>


					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" name="password" class="form-control form-control-lg">
						<?php
						if (isset($_GET['newpwd'])) 
						{
							if ($_GET['newpwd'] == "passwordupdated") 
							{
								echo "<p>Your password is reset</p>";
							}
						}
						?>
						<a href="fpwd/reset-password.php" class=" " style="text-decoration: none;">
    		            Forgot?
        		      </a>
					</div>

					<!--This is for button-->

					<div class="form-group">
						<button type="submit" name="signin-btn" class="btn btn-primary btn-block btn-lg">Sign In</button>
					</div>
					<?php
						if (isset($_GET['email'])) 
						{
							if ($_GET['email'] == "absent") 
							{
					?>
								<p style="color:Tomato;">There is no user registered with this mail-id</p>
								<p style="color:Tomato;">Sign-up to log in.</p>
					<?php		
							}
						}
						?>
					<p class="text-center">Not a member?<a href="/signup/registration.php"><br>Sign up</a></p>

				</form>
			</div>		
		</div>
	</div>
</body>
</html>