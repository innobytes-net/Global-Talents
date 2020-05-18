<?php
session_start();

$con = mysqli_connect('localhost','root','sarang1234');
mysqli_select_db($con,'usersignup');

$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$pwd = password_hash($pass,PASSWORD_DEFAULT);
$u_name = $_POST['username'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];

$sql="INSERT INTO usertable (first_name,last_name,email,password,gender,country,state,city,username) VALUES ('".$f_name."','".$l_name."','".$email."','".$pwd."','".$gender."','".$country."','".$state."','".$city."','".$u_name."')";
    $data=mysqli_query($con,$sql);
    
if($data == 1){
    echo "New record created successfully";
}
    else{
        echo "Error:  " . $sql . "<br>" . $con->error;
    }


?>