<?php

if (isset($_POST['reset-password-submit'])) 
{
    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

        if (empty($password) || empty($passwordRepeat)) 
            {
      
                    header("Location: ../../login.php?newpd=empty");
                    exit();
            }
        else if ($password!=$passwordRepeat)
            {
                
                header("Location: ../create-new-password.php?newpd=pwdnotsame");
                exit();
            }
            
            $currentDate = date("U");

            //Connecting to database

    //  $server='localhost';
    //  $user='root';
    //  $pass='';
    //  $db='user';
    //  $port = '3306';

     $server='162.215.253.205';
      $user='innoszdh_global';
      $pass='kuber123';
      $db='USERS';
      $port = '3306';
      $connection= mysqli_connect($server,$user,$pass,$db);
      if(!$connection){
          die("Database Error:". $connection->connect_error);
      }

    $connection= mysqli_connect($server,$user,$pass,$db,$port);
    if(!$connection)
    {
        die("Database Error:". $connection->connect_error);
    }
    
    $sql = "SELECT * FROM pwdReset where pwdResetSelector=? AND pwdResetExpires>=? ;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt,$sql)) 
    {
        echo "There was an error!";
        exit();
    }
    else 
    {
        mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if (!$row = mysqli_fetch_assoc($result)) 
        {
        echo "You need to re-submit reset request";
        exit();
        }
        else 
        {
            $tokeninBinary = hex2bin($validator);
            $tokenCheck = password_verify($tokeninBinary, $row['pwdResetToken']);
            
            //CHECKS IF USER'S TOKEN MATCHES WITH THE ONE IN DATABASE
            if ($tokenCheck === false) 
            {
                echo "You need to re-submit reset request";
                exit();
            }
            else if ($tokenCheck === true )
            {
                //Checks if user is present in the table
                $tokenEmail = $row['pwdResetEmail'];
                $sql = "SELECT * FROM USERS where email_id=? ;";
                $stmt = mysqli_stmt_init($connection);
                 if (!mysqli_stmt_prepare($stmt,$sql)) 
                {
                    echo "There was an error!";
                    exit();
                }
                else 
                {
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);

                    $result = mysqli_stmt_get_result($stmt);

                    if (!$row = mysqli_fetch_assoc($result)) 
                    {
                    echo "You need to re-submit reset request";
                    exit();
                    }
                    $newpwdHash = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "UPDATE users SET password=? where email_id=? ;";
                    $stmt = mysqli_stmt_init($connection);
                    if (!mysqli_stmt_prepare($stmt,$sql)) 
                   {
                       echo "There was an error!";
                       exit();
                   }
                   else 
                   {
                    mysqli_stmt_bind_param($stmt, "ss",$newpwdHash, $tokenEmail);
                    mysqli_stmt_execute($stmt);
    
                    //Deleting token from pwdReset table
                            $sql = "DELETE FROM pwdReset where pwdResetEmail=? ;";
                            $stmt = mysqli_stmt_init($connection);
                            if (!mysqli_stmt_prepare($stmt,$sql)) 
                            {
                                echo "There was an error!";
                                exit();
                            }
                            else 
                            {
                                mysqli_stmt_bind_param($stmt, "s",$tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../../login.php?newpwd=passwordupdated");
                            }
     
                    }   
                
                }

            }
        }
    }
}
else
{
        header("Location: ../../index.php");
}                
?>