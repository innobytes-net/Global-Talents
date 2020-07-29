<?php

include "config/db.php";

$user = $_SESSION['userid'];;
$sql1 = "SELECT job_id FROM job_post WHERE Employer_Id=?;" ;
$stmt1= $conn->prepare($sql1);
$stmt1->bind_param("i", $user);
$stmt1->execute();
$result1 = $stmt1->get_result(); // get the mysqli result

$data = '';
while ($row1 = $result1->fetch_assoc()) {

 $job_id = $row1['job_id'];
                          
 $sql2 = "SELECT users.first_name, users.last_name, users.email_id,job_application.contact,job_application.country, job_application.application_date
 FROM users
 INNER JOIN job_application ON users.userid = job_application.userid WHERE job_application.job_id=?;" ;
 $stmt2= $conn->prepare($sql2);
 $stmt2->bind_param("i", $job_id);
$stmt2->execute();
 $result2 = $stmt2->get_result(); // get the mysqli result
 
 while ($row2 = $result2->fetch_assoc())
 {

   $data.='<tr>
   <td>'.
     $row2['first_name'].'
   </td>
   <td>'.
   $row2['last_name'].'
   </td>
   <td>'.
     $row2['email_id'].
     '
   </td>
   <td>'.
   $row2['contact']
   .'</td>
   
   <td>'.
   $row2['country']
   .'</td>
   <td>'.
   $row2['application_date'].'
   </td>
   
 </tr>';
 
 }

}

?>

<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Employer Dashboard</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100" >
    
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="home.php" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <span class="d-none d-md-inline ml-1">Employer Dashboard</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">person</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="home.php">
                  <i class="material-icons">dashboard</i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="jobs.php">
                  <i class="material-icons">work</i>
                  <span>Jobs</span>
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link " href="employee.php">
                  <i class="material-icons">person</i>
                  <span>Employees</span>
                </a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link " href="profile.php">
                  <i class="material-icons">bar_chart</i>
                  <span>Profile</span>
                </a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link " href="post.php">
                  <i class="material-icons">person_add</i>
                  <span>Post Job</span>
                </a>
              </li>			  
            

            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                  <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
              </form>
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" style="height:40px" src="images/avatars/img.png" alt="User Avatar">
                    <span class="d-none d-md-inline-block"> 
				 
					</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="profile.php">
                      <i class="material-icons">&#xE7FD;</i> Profile</a>
                    <a class="dropdown-item" href="add_user.php">
                      <i class="material-icons">note_add</i> Add New User</a>
                      <a class="dropdown-item" href="update_password.php">
                      <i class="material-icons">admin_panel_settings</i> Update Password</a>

                    <div class="dropdown-divider"></div>
		    <form action="http://localhost/Global-Talents/index.php?logout=1" method="POST">
                      <button type="submit" name="logout" class="dropdown-item text-danger" href="http://localhost/Global-Talents/index.php?logout=1">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </button>
		    </form>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Dashboard</span>
                <h3 class="page-title">Employer Panel</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Small Stats Blocks -->
            <div class="row">
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Total Jobs</span>
                        <h6 class="stats-small__value count my-3">
                         
                      </div>
                      <div class="stats-small__data">
                        <span class="stats-small__percentage stats-small__percentage--increase">4.7%</span>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Job Seekers</span>
                        <h6 class="stats-small__value count my-3">
                        
                        </h6>
                      </div>
                      <div class="stats-small__data">
                        <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Job Posted</span>
                        <h6 class="stats-small__value count my-3">
                          
                        </h6>
                      </div>
                      <div class="stats-small__data">
                        <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                      </div>
                    </div>
                    <canvas height="120" class=""></canvas>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Small Stats Blocks -->

            <div class="row">
              <div class="col">
                  <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                      <h6 class="m-0">Latest Applicants</h6>
                    </div>
                    <div class="card-body p-0 pb-3 text-center">
                      <table class="table mb-0">
                        <thead class="bg-light">
                          <tr>
                           
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact No.</th>
							<th scope="col">Country</th>
							<th scope="col">Timestamp</th>								
                           </tr>
                        </thead>
                        <tbody>
                            
                <?php echo $data; ?>
						  
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            <div class="row">
              <!-- Discussions Component -->
              <div class="col-lg-10 col-md-12 col-sm-12 mb-4" >
                <div class="card card-small blog-comments">
                  <div class="card-header border-bottom">
                    <h6 class="m-1">Latest Jobs</h6>
                  </div>
                  <?php
                   // get the mysqli result

  
  $sql = " SELECT * FROM job_post WHERE job_id=? LIMIT 1 ;" ;
  $stmt= $conn->prepare($sql);
  $stmt->bind_param("i", $job_id);
  $stmt->execute();
  $result = $stmt->get_result();
while ($rowjobs = $result->fetch_assoc()) {
                  ?>
                      <div class="card-body p-0">
                        <div style="padding: 10px 20px;">
                          <div>
                            <h4> </h4>
                            <p style="float: right;">Location: <?php echo $rowjobs['job_location'] ?></p>
                          </div>
                          <p class="text-secondary" style="margin-bottom: 5px;;">Job Title:  <?php echo $rowjobs['job_title'] ?></p>
                          <p style="float: right;">Salary: <?php echo $rowjobs['salary'] ?></p>
                          <p class="text-muted">Job Description:  <?php echo $rowjobs['job_description'] ?></p>
                          <hr>
                        </div>
                      </div>
                </div>
<?php
} 
?>
              </div>
              <!-- End Discussions Component -->



			  
              
              <!-- End Top Referrals Component -->
            </div>
          </div>
        </main>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
    <script src="scripts/app/app-blog-overview.1.1.0.js"></script>
  </body>
</html>