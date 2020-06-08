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
if(isset($_POST['signup-btn'])){

    $type = $_POST['user'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = mysqli_real_escape_string($connection,$_POST["password"]);
    $passwordConfirm = $_POST['passwordConfirm'];


    //validation
    if(empty($firstname)){
        $errors['firstname'] = "First Name Required";
    }
    if(empty($lastname)){
        $errors['lastname'] = "Last Name Required";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email address is invalid";
    }
    if(empty($email)){
        $errors['email'] = "Email Required";
    }
    if(empty($password)){
        $errors['password'] = "Password Required";
    }
    if($password !== $passwordConfirm){
        $errors['password'] = "The two passwords do not match";
    }

    $emailQuery = "SELECT * from USERS where email_id =? LIMIT 1";
    $stmt = $connection->prepare($emailQuery);
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result = $stmt->get_result();
    $usercount = $result->num_rows;
    $stmt->close();

    if($usercount>0){
        $errors['email'] = "Email already exists";
    }

    if(count($errors)===0){
        //$password = password_hash($password,PASSWORD_DEFAULT);

        $sql="INSERT INTO USERS (first_name,last_name,email_id,password,type) VALUES (?,?,?,?,?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param('sssss',$firstname,$lastname,$email,$password,$type);
        
        if($stmt->execute()){
            //login user
        $user_id = $connection->insert_id;
        $_SESSION['userid'] = $user_id;
        $_SESSION['first_name'] = $firstname;
        $_SESSION['email_id'] = $email;

        //set flash message
        $_SESSION['message'] = "Registration done successfully";
        $_SESSION['alert-class'] = "alert-success";
        header('location: ../login.php');
        exit();

        }else{
            $errors['db_error'] ="Database error failed to register";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="./css/register.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div">
				<form action=" " method="post">
                    <img src="/images/talent.png" class="logo-img">
					<h3 class="text-center">REGISTER</h3>

                    <span class="form-group" style="font-size: 15px;padding-bottom: 10px;">
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
                    <?php if(count($errors)>0): ?>
			        <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
					</div>   
                    <?php endif; ?>

					
                    <div class="form-group">
						<label for="firstname">First Name</label>
						<input type="text" name="firstname" value="<?php echo $firstname; ?>" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
						<label for="lastname">Last Name</label>
						<input type="text" name="lastname" value="<?php echo $lastname; ?>" class="form-control form-control-lg">
					</div>


					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" name="email"  value="<?php echo $email; ?>" class="form-control form-control-lg">
					</div>


					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" name="password" class="form-control form-control-lg">
					</div>

					<div class="form-group">
						<label for="passwordConfirm">Confirm Password:</label>
						<input type="password" name="passwordConfirm" class="form-control form-control-lg">
					</div>

					<!--This is for button-->

					<div class="form-group">
						<button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
					</div>

					<p class="text-center">Already a member?<a href="../login.php"><br>Sign In</a></p>

				</form>
			</div>		
		</div>
	</div>
</body>
</html>