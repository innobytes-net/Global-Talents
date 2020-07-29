 <?php

 include "config/db.php"; 

 $sql = " SELECT * FROM users WHERE userid=? ;" ;
 $userid = $_SESSION['userid'];
 $stmt= $conn->prepare($sql);
 $stmt->bind_param("i", $userid);
$stmt->execute();
 $result = $stmt->get_result(); // get the mysqli result

	if(mysqli_num_rows($result)==1){
    $row= $result->fetch_assoc();			
  }
  else
  {
		echo "Fail";
	}



 ?>

<html class="no-js h-100" lang="en" >
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
  <body class="h-100" style="background-image: url('images/avatars/back2.jpg');  background-repeat: no-repeat;  background-size: cover;">
    
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
                <a class="nav-link " href="home.php">
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
                <a class="nav-link active" href="profile.php">
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
          <!-- / .main-navbar -->          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		        <span class="text-uppercase page-subtitle" >Dashboard</span>
                <h3 class="page-title">User's Profile</h3>
              </div>
            </div>
            <!-- End Page Header -->
					
					
					
					
							
			<div class="row" style="margin-top:36px; margin-left:285px; " >
              <div class="col-lg-6" >
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="images/avatars/img.png" alt="User Avatar" width="110"> </div>
                    <h4 class="mb-0">

					 
						
					</h4>
                    <span class="text-muted d-block mb-2">Project Manager</span>
                  </div>
				  
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-6">
					
					    <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" value="<?php echo $row["first_name"]; ?>" readonly> </div>
                              <div class="form-group col-md-6">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" value="<?php echo $row["last_name"]; ?>" readonly> </div>
                            </div>
						
						<div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="phone">Contact No.</label>
                                <input type="text" class="form-control" id="phone" value=0 readonly> </div>
                              <div class="form-group col-md-6">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" value=0 readonly> 
                        </div>	
						      <div class="form-group col-md-6">
                                <label for="email_id">Email</label>
                                <input type="email" class="form-control" id="email_id" value="<?php echo $row["email_id"];?>" readonly> </div>
                        
                    </li>
                 
				 </ul>
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







