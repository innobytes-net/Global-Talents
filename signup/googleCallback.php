
<?php

//Fetches work/Hire choice of user and enters it into 

require_once "config.php";

//Checks if user is already authenticated 
if (isset($_SESSION['access token'])) 
{
    $googleClient->setAccessToken($_SESSION['access token']);
}

//Access token after authentication
else if (isset($_GET['code'])) 
{
    $token = $googleClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access token'] = $token;
}

else 
{
    header('Location: /login.html');    
}

$oAuth = new Google_Service_Oauth2($googleClient);

$userData = $oAuth->userinfo_v2_me->get(); //Contains all user data in array

$_SESSION['email'] = $userData['email']; 
$_SESSION['first_name'] = $userData['given_name'];
$_SESSION['id'] = $userData['id'];

//Connection to database
$connection=new mysqli("localhost","root","","user");
if ($connection -> connect_errno)
{
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
 
    $f_name = $_SESSION['first_name'];
    $l_name = $_SESSION['type'];
    $email = $_SESSION['email'];
    $pass = $_SESSION['id'];
    $pwd = password_hash($pass,PASSWORD_DEFAULT);
    $type = $_POST['user'];//Takes choice from gchoice.php
    
    // $u_name = $_POST['username'];
    // $gender = $_POST['gender'];
    // $country = $_POST['country'];
    // $state = $_POST['state'];
    // $city = $_POST['city'];
    
    $sql="INSERT INTO USERS (first_name,last_name,email_id,password,type) VALUES ('".$f_name."','".$l_name."','".$email."','".$pwd."','".$type."')";
    $data=$connection->query($sql);
        
    if($data == 1)
    {
        echo "New record created successfully";
    }
        else
        {
            echo "Error:  " . $sql . "<br>" . $con->error;
        }
header('Location: ../login.html');
exit();
?>
