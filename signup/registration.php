<?php

session_start();
$server='162.215.253.205';
$user='innoszdh_global';
$pass='kuber123';
$db='innoszdh_globaltalents';
$port = '3306';
$connection=mysqli_connect($server,$user,$pass,$db,$port);


//$connection=new mysqli("162.215.253.205","innoszdh_global","innoszdh_globaltalents");//Modify last argument with the name of your database
if ($connection -> connect_errno)
{
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
 
    $f_name = $_POST['firstname'];
    $l_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = mysqli_real_escape_string($db,$_POST['password']); 
    //$pass = $_POST['password'];
    //$pwd = password_hash($pass,PASSWORD_DEFAULT);
    $type = $_POST['user'];
    
    // $u_name = $_POST['username'];
    // $gender = $_POST['gender'];
    // $country = $_POST['country'];
    // $state = $_POST['state'];
    // $city = $_POST['city'];
    
    //Name of table is users
    //Please refer User.sql for schema 
    $sql="INSERT INTO USERS (first_name,last_name,email_id,password,type) VALUES ('".$f_name."','".$l_name."','".$email."','".$password."','".$type."')";
    $data=$connection->query($sql);
        
    if($data == 1)
    {
        //echo "New record created successfully";
    }
        else
        {
            echo "Error:  " . $sql . "<br>" . $con->error;
        }
        header('Location: ../login.php');
        exit();
?>