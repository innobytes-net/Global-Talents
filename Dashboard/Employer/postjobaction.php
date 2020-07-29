<?php

session_start();


//   $server='162.215.253.205';
//    $user='innoszdh_global';
//    $pass='kuber123';
//    $db='innoszdh_globaltalents';
//  $port = '3306';
 
$server='localhost';
$user='root';
$pass='';
$db='user';
$port = '3306';



$connection= mysqli_connect($server,$user,$pass,$db,$port);
if(!$connection){
    die("Database Error:". $connection->connect_error);
}


if($_SERVER['REQUEST_METHOD'] === 'POST')
{
             
   // $userid = $row['userid']; 
    
    
    // 
    // $userid = $_SESSION['userid'];         
   

//Inserting company details and location

        $jobTitle= $_POST["jobTitle"];
        $companyName =  $_POST["companyName"];
        $jobType =  $_POST["job-type"];
        $location =  $_POST["location"];
        $jobDescription =  $_POST["jobDescription"];
        $phone=$_SESSION['phoneNo'];
        $emailid = $_SESSION['email_id'];
         $Employerid = $_SESSION['userid'];
         $categoryId = $_POST['category'];
         $salary = $_POST['salary'];
        
$sql = "INSERT INTO `job_post` (`category_id`, `company_name`, `job_title`, `job_description`, `job_location`, `salary`, `contact_user`, `contact_email`,`Employer_Id`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
$stmt = mysqli_stmt_init($connection);

mysqli_stmt_prepare($stmt,$sql);
    if (!mysqli_stmt_prepare($stmt,$sql)) 
    {
    echo "There was error in inserting values!";
    exit();
    }
    else 
    {

    mysqli_stmt_bind_param($stmt, "isssssssi",$categoryId,$companyName,$jobTitle,$jobDescription,$location,$salary,$phone,$emailid,$Employerid);
    
    }

if (mysqli_stmt_execute($stmt)) {
  echo "worked";
}    
else {
    echo "Insertion of Job Post details didn't work";
}

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

    header('location: home.php');
    exit();
            }

        
else
{
    echo "Re-submit the form";
}



?>