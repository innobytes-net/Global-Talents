<?php

session_start();
require 'config/db.php';
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
    $password = $_POST['password'];
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

    $emailQuery = "SELECT * from USERS where email =? LIMIT 1";
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
        $password = password_hash($password,PASSWORD_DEFAULT);

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
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['aler-success'] = "alert-success";
        header('location: ../login.php');
        exit();

        }else{
            $errors['db_error'] ="Database error failed to register";
        }
    }
}





?>