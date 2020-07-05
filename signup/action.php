<?php
session_start();

  $server='162.215.253.205';
   $user='innoszdh_global';
   $pass='kuber123';
   $db='innoszdh_globaltalents';
 $port = '3306';
 
//  $server='localhost';
//  $user='root';
//  $pass='';
//  $db='user';
//  $port = '3306';

$connection= mysqli_connect($server,$user,$pass,$db,$port);
if(!$connection){
    die("Database Error:". $connection->connect_error);
}

$errors = array();

//if user clicks on submit button

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    //Getting userid from email stored in session

        $sql = "SELECT userid FROM USERS where email_id=? ;";
        
        $stmt = mysqli_stmt_init($connection);
                    if (!mysqli_stmt_prepare($stmt,$sql)) 
                {
                    echo "There was an error in finding user!";
                    exit();
                }
                else 
                {
                    //User email from Session 
                     $Email = $_SESSION['email_id'];
                    //$Email = '';
                    mysqli_stmt_bind_param($stmt, "s", $Email);
                    mysqli_stmt_execute($stmt);

                    $result = mysqli_stmt_get_result($stmt);
                    
                    if(!$row = mysqli_fetch_assoc($result))
                    {
                    echo "User id wasn't available";
                    exit();
                    }
            
   // $userid = $row['userid']; 
    
    $firstname = $_SESSION['first_name']; 
    $lastname = $_SESSION['last_name'];
    $userid = $_SESSION['userid'];         
   // echo "User is ".$userid;     
   $temp = explode(".", $_FILES["profilepic"]["name"]);
   $newfilename = "{$userid}{$firstname}{$lastname}";
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

            if(!is_dir("Profile/")) 
            {
                mkdir("Profile/");
            }
            //moving uploaded file
            move_uploaded_file($_FILES["profilepic"]["tmp_name"],"Profile/". $newfilename);
                    
          //  echo "Stored in: " . "Profile/". $newfilename;
                
            }
        } else 
        {
            echo "Invalid file";
        }
    //Inserting profile pic path in table Profilepic
    $Pic_id = $userid;
    $profilePicPath = "Profile/". $newfilename;

//Entering the profile pic id and inserting file path
            $sql = "INSERT INTO profile_picId (Pic_id , image) VALUES (?,?);" ;
            $stmt = mysqli_stmt_init($connection);

                if (!mysqli_stmt_prepare($stmt,$sql)) 
                {
                echo "There was error in inserting values!";
                exit();
                }
                else 
                {

                mysqli_stmt_bind_param($stmt, "is",$Pic_id,$profilePicPath );
                
                }
            if (mysqli_stmt_execute($stmt)) {
                //echo "worked";
            }    
            else {
                echo " Profile Pic insertion didn't work";
            }

//Inserting education details
$edu_historyId = $userid;
        $institute= $_POST["institute"];
        $areaofStudy =  $_POST["study"];
        $degree =  $_POST["degree"];
        $Yearstart =  $_POST["Yearstart"];
        $Yearend = $_POST["Yearend"];   
        $sql =  "INSERT INTO `Education_details` (`edu_historyId`,`institute_name`, `area_of_study`, `start_date`, `end_date`) 
        VALUES (?, ?, ?, ?, ?);" ;
        $stmt = mysqli_stmt_init($connection);

            if (!mysqli_stmt_prepare($stmt,$sql)) 
            {
            echo "There was error in inserting education details!";
            exit();
            }
            else 
            {

            mysqli_stmt_bind_param($stmt, "issss",$userid,$institute,$areaofStudy,$Yearstart,$Yearend);
            
            }
        if (mysqli_stmt_execute($stmt)) {
            //echo "worked";
        }    
        else {
            echo "Insertion of education details work";
        }

    //Inserting residential details
    $locationId = $userid;
    
    $streetAddress= $_POST["streetAddress"];
    $apartment =  $_POST["apartment"];
    $country =  $_POST["country"];
    $state =  $_POST["state"];
    $city = $_POST["city"];   
    $zipcode = $_POST["zipcode"];
    $sql =  "INSERT INTO `location` (`street_add`, `appartment`, `country`, `state`, `city`, `zip`, `locationId`)
     VALUES (?,?,?,?,?,?,?);" ;
    $stmt = mysqli_stmt_init($connection);

        if (!mysqli_stmt_prepare($stmt,$sql)) 
        {
        echo "There was error in inserting residential values!";
        exit();
        }
        else 
        {

        mysqli_stmt_bind_param($stmt, "ssssssi",$streetAddress,$apartment,$country,$state,$city,$zipcode,$locationId);
        
        }
    if (mysqli_stmt_execute($stmt)) {
    //    echo "worked";
    }    
    else {
        echo "Insertion of residential details didn't work";
    }
//Inserting values into employee table    
    $job_title = $_POST['job_title'];
    
    $phone_no = $_POST['phone_no'];
    
    $perhrate = $_POST['perhrate'];
    
    $expertise_level = $_POST["expertise"];
    
    $fluency = $_POST['fluency'];
    
$sql = "INSERT INTO employee (userid, phone, job_title, perhrate, Pic_id, expertise_lvl,language_prf_id,edu_historyId,locationId)
VALUES (?,?,?,?,?,?,?,?,?);" ;
$stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt,$sql)) 
    {
    echo "There was error in inserting values!";
    exit();
    }
    else 
    {

    mysqli_stmt_bind_param($stmt, "iisdisiii",$userid,$phone_no,$job_title,$perhrate,$Pic_id,$expertise_level,
    $fluency, $edu_historyId, $locationId);
    
    }
if (mysqli_stmt_execute($stmt)) {
 //   echo "worked";
}    
else {
    echo "Insertion of employee details didn't work";
}

//Inserting CV


$temp = explode(".", $_FILES["cv"]["name"]);
$newfilename = "{$userid}{$firstname}{$lastname}";
$newfilename.= '.' . end($temp);
        if ($_FILES["cv"]["size"] < 2097152) {
            if ($_FILES["cv"]["error"] > 0)
            {
                echo "Return Code: " . $_FILES["cv"]["error"] . "<br />";
            }
            else
            {
            //    echo "Upload: " . $newfilename . "<br />";
            // echo "Temp file: " . $_FILES["profilepic"]["tmp_name"] . "<br />";

            if(!is_dir("CV/")) 
                {
                mkdir("CV/");
                }
                //moving uploaded file
                    move_uploaded_file($_FILES["cv"]["tmp_name"],"CV/". $newfilename);
                    
              //      echo "Stored in: " . "CV/". $newfilename;
                
            }
        } else 
        {
            echo "Invalid file";
        }
        
        $cvFilePath = "CV/". $newfilename;


        $sql = "INSERT INTO `employee_cv` (`userid`, `cv`) VALUES (?,?);" ;
        $stmt = mysqli_stmt_init($connection);

            if (!mysqli_stmt_prepare($stmt,$sql)) 
            {
            echo "There was error in inserting CV values!";
            exit();
            }
            else 
            {

            mysqli_stmt_bind_param($stmt, "is",$userid,$cvFilePath);
            
            }
        if (mysqli_stmt_execute($stmt)) {
          //  echo "worked";
        }    
        else {
            echo "Insertion of CV didn't work";
        }

//Inserting details from about section of employee
        $about = $_POST['about'];
        $sql =  "INSERT INTO `employee_about` (`userid`, `about_me`) VALUES (?,?);"; 
        $stmt = mysqli_stmt_init($connection);

        if (!mysqli_stmt_prepare($stmt,$sql)) 
        {
        echo "There was error in inserting about section!";
        exit();
        }
        else 
        {

        mysqli_stmt_bind_param($stmt, "is",$userid,$about);

        }
        if (mysqli_stmt_execute($stmt)) {
        //echo "worked";
        }    
        else {
        echo "Insertion of about section didn't work";
        }

//Inserting employee skills details

    $skillid = $_POST["choices"];
    $sql =  "INSERT INTO `employee_has_skills` (`employee_detail_userid`, `skill_id`) VALUES (?, ?);"; 
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt,$sql)) 
    {
    echo "There was error in inserting skill values!";
    exit();
    }
    else 
    {

    mysqli_stmt_bind_param($stmt, "ii",$userid,$skillid);

    }
    if (mysqli_stmt_execute($stmt)) {
    //echo "worked";
    }    
    else {
    echo "employee has skill didn't work";
    }

//Inserting employee's previous employment details

    $sql =  "INSERT INTO `emp_employment_detail` (`userid`, `company_name`, `job_title`, `city`, `country`, `from_month`, `from_year`, `to_month`, `to_year`)
    VALUES (?,?,?,?,?,?,?,?,?);"; 
    $company_name = $_POST["company"];
    $job = $_POST["job"];
    $countryPrevJob = $_POST["countryPrevJob"];
    $cityPrevJob = $_POST["cityPrevJob"];
    $from_month = $_POST["from_month"];
    $from_year = $_POST["from_year"];
    $to_month = $_POST["to_month"];
    $to_year = $_POST["to_year"];
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt,$sql)) 
    {
    echo "There was error in inserting values!";
    exit();
    }
    else 
    {

    mysqli_stmt_bind_param($stmt, "issssssss",$userid,$company_name,$job,$cityPrevJob,$countryPrevJob,$from_month,$from_year,$to_month,$to_year);

    }
    if (mysqli_stmt_execute($stmt)) {
    //echo "worked";
    }    
    else {
    echo "Prev employment didn't work";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

    header('location: ../index.php');
    exit();
            }

        }
else
{
    echo "Re-submit the form";
}
?>
