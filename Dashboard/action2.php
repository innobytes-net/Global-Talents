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

$errors = array();

//if user clicks on submit button

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
             
   // $userid = $row['userid']; 
    
    $firstname = $_SESSION['first_name']; 
    $lastname = $_SESSION['last_name'];
    $userid = $_SESSION['userid'];         
   // echo "User is ".$userid;     
   $temp = explode(".", $_FILES["profilepic"]["name"]);
   $newfilename = "{$userid}{$firstname}";
   $newfilename.= '.' . end($temp);
        
    //inserting profile pic in Profile-directory
    //$extension = end(explode(".", $newfilename));

        if ($_FILES["profilepic"]["size"] < 2097152) {
            if ($_FILES["profilepic"]["error"] > 0)
            {
                echo "Return Code: " . $_FILES["profilepic"]["error"] . "<br />";
            }
            else
            {
              //  echo "Upload: " . $newfilename . "<br />";
            // echo "Temp file: " . $_FILES["profilepic"]["tmp_name"] . "<br />";

            if(!is_dir("EmpProfile/")) 
            {
                mkdir("EmpProfile/");
            }
            //moving uploaded file
            move_uploaded_file($_FILES["profilepic"]["tmp_name"],"EmpProfile/".$newfilename);
                    
          //  echo "Stored in: " . "Profile/". $newfilename;
                
            }
        } else 
        {
            echo "Invalid file";
        }
    //Profile pic path
    
    $profilePicPath = "EmpProfile/". $newfilename;


//Inserting company details and location

        $companyName= $_POST["companyName"];
        $aboutCompany =  $_POST["aboutCompany"];
        $website =  $_POST["companyLink"];
        $phone =  $_POST["phone"];
        $_SESSION['phoneNo'] = $phone;

        $country =  $_POST["country"];
        $state =  $_POST["state"];
        $city = $_POST["city"];   
        $zipcode = $_POST["zipcode"];
        $role = $_POST['role'];
        $payment = '';
        $_SESSION['phoneNo'] = $phone;
        
$sql = "INSERT INTO `employer` (`userid`, `company_name`, `country`, `city`, `state`, `website`, `phone`, `payment_method`, `role`, `profile_pic`, `zipcode`, `about`) VALUES 
(?,?,?,?,?,?,?,?,?,?,?,?);" ;
$stmt = mysqli_stmt_init($connection);

mysqli_stmt_prepare($stmt,$sql);
    if (!mysqli_stmt_prepare($stmt,$sql)) 
    {
    echo "There was error in inserting values!";
    exit();
    }
    else 
    {

    mysqli_stmt_bind_param($stmt, "isssssssssss",$userid,$companyName,$country,$city,$state,$website,$phone,$payment,$role,$profilePicPath,$zipcode,$aboutCompany);
    
    }

if (mysqli_stmt_execute($stmt)) {
  echo "worked";
}    
else {
    echo "Insertion of employer details didn't work";
}

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

    header('location: Employer/home.php');
    exit();
            }

        
else
{
    echo "Re-submit the form";
}
?>
