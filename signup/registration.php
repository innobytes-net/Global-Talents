<?php

session_start();

$connection=new mysqli("localhost","root","","user");//Modify last argument with the name of your database
if ($connection -> connect_errno)
{
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
 
    $f_name = $_POST['firstname'];
    $l_name = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pwd = password_hash($pass,PASSWORD_DEFAULT);
    $type = $_POST['user'];
    
    // $u_name = $_POST['username'];
    // $gender = $_POST['gender'];
    // $country = $_POST['country'];
    // $state = $_POST['state'];
    // $city = $_POST['city'];
    
    //Name of table is users
    //Please refer User.sql for schema 
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

?>