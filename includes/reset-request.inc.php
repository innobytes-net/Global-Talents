<?php
    //Connecting to database

     $server='162.215.253.205';
     $user='innoszdh_global';
     $pass='kuber123';
     $db='USERS';
     $port = '3306';
     $connection= mysqli_connect($server,$user,$pass,$db);
     if(!$connection){
         die("Database Error:". $connection->connect_error);
     }
    
    
    // $server='localhost';
    // $user='root';
    // $pass='';
    // $db='user';
    // $port = '3306';
    // $connection= mysqli_connect($server,$user,$pass,$db,$port);
    // if(!$connection){
    //     die("Database Error:". $connection->connect_error);
    // }
    
$errors = array();
$userEmail = "";

//if user clicks on forgot password button
if(isset($_POST['reset-request-submit']))
{

    $userEmail = $_POST['email'];
    //validation
    if(empty($userEmail))
    {
        $errors['email'] = "Email Required";
    }

	$sql = "SELECT * FROM USERS where email_id = '$userEmail' ";
	$result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)==1)
    {
    
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);	
    
    //Uncomment this url for server
    $url = "https://globaltalents.co/create-new-password.php?selector=". $selector . "&validator=" . bin2hex($token);
    

    //Uncomment this url for Localhost 
   // $url = "http://localhost/Global-Talents/create-new-password.php?selector=". $selector . "&validator=" . bin2hex($token);
    

    $expires = date("U") + 1800;

    $sql = "DELETE FROM pwdReset where pwdResetEmail=? ;";
    $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt,$sql)) 
        {
            echo "There was an error!";
            exit();
        }
        else 
        {
            mysqli_stmt_bind_param($stmt, "s", $userEmail);
            mysqli_stmt_execute($stmt);
        }
    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES 
    ( ?,?,?,?);" ;
$stmt = mysqli_stmt_init($connection);

if (!mysqli_stmt_prepare($stmt,$sql)) 
{
    echo "There was an error!";
    exit();
}
else 
{
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
    mysqli_stmt_execute($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($connection);

//Sending email 

 $to = $userEmail;
 $subject = "Reset password link for GlobalTalents account";
 $message = "<p> Click the link to reset your password for your account. This link will expire in 1 hour</p> ";
 $message.= '<p> Here is the password reset link: </br>';
 $message.= '<a href="'. $url . '">' . $url . '</a></p>';


require_once ('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'globaltalent087@gmail.com';
$mail->Password = 'Globaltalent1234';
$mail->SetFrom('innobytes@GlobalTalent.co');
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AddAddress($to);

$mail->Send();

header("Location: ../reset-password.php?reset=success");

}
    else
    {
		header("Location: ../login.php?email=absent");
	}

}
else 
{
    header("Location: ../index.php");
}
?>