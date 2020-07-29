 <?php
 
 session_start();
 
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
                <a class="nav-link" href="home.php">
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
                <a class="nav-link active" href="post.php">
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
						Erfinden Techno.
						 

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
		    <form action="index.php" method="POST">
                      <button type="submit" name="logout" class="dropdown-item text-danger" href="#">
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
                <h4 class="page-title">Post Job</h4>
              </div>
            </div>
            <!-- End Page Header -->

		<div >
		  <div class="container">
			<div class="row">
		   
			  <div class="col-md-12 col-lg-8 mb-5">
			  
				<form action="postjobaction.php" method="POST" name="postAjob" class="p-5 bg-white">
				  
				  <div class="row form-group">
					<div class="col-md-12 mb-3 mb-md-0">
					  <label class="font-weight-bold" for="fullname">Job Title</label>
					  <input name="jobTitle" type="text" id="fullname" class="form-control" placeholder="eg. Professional UI/UX Designer">
					</div>
				  </div>

				  <div class="row form-group mb-5">
					<div class="col-md-12 mb-3 mb-md-0">
					  <label class="font-weight-bold" for="fullname">Company</label>
					  <input name="companyName" type="text" id="fullname" class="form-control" placeholder="eg. Facebook, Inc.">
					</div>
				  </div>

          
				  <div class="row form-group mb-5">
					<div class="col-md-12 mb-3 mb-md-0">
      <label  class="font-weight-bold" for="fullname"><b>Category</b></label>
      <select data-placeholder="any other skills..." class="form-control" name="category" required>
<!-- categories that will decide the next drop-down -->
        <option value=1> "Designers and Creatives"</option>
          <option value=2>"Programmers & Developers"</option>
            <option value=3>"Administrative Support Specialists"</option>
              <option value=4>"Writers & Translaters"</option>
                <option value=5>"Finance Professionals"</option>
                  <option value=6>"Sales & Marketing Professionals"</option>
        
      </select>

    </div>
				 </div>

         <div class="row form-group mb-5">
					<div class="col-md-12 mb-3 mb-md-0">
          <label  class="font-weight-bold" for="fullname"><b>Salary</b></label><br>
          <select id="cars"
            style="padding: 4px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;">
            <option value="Dollar">₹</option>
            <option value="Dollar">$</option>
            <option value="YEN"> ¥</option>
            <option value="Euro">€</option>
            <option value="POUND">£</option>
          </select>
          <input required class="" type="text" id="rate" placeholder="0.00" name="salary"
            style=" margin-left: 2px;width:50%;padding: 5px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;">

        </div>
        </div>

				  <div class="row form-group">
					<div class="col-md-12"><h3>Job Type</h3></div>
					<div class="col-md-12 mb-3 mb-md-0">
					  <label for="option-job-type-1">
						<input type="radio" id="option-job-type-1" value="Full Time" name="job-type"> Full Time
					  </label>
					</div>
					<div class="col-md-12 mb-3 mb-md-0">
					  <label for="option-job-type-2">
						<input type="radio" id="option-job-type-2" value="Part Time" name="job-type"> Part Time
					  </label>
					</div>

					<div class="col-md-12 mb-3 mb-md-0">
					  <label for="option-job-type-3">
						<input type="radio" id="option-job-type-3" value="Freelance" name="job-type"> Freelance
					</div>
					<div class="col-md-12 mb-3 mb-md-0">
					  <label for="option-job-type-4">
						<input type="radio" id="option-job-type-4" value="Internship" name="job-type"> Internship
					  </label>
					</div>
					<div class="col-md-12 mb-3 mb-md-0">
					  <label for="option-job-type-4">
						<input type="radio" id="option-job-type-4" value="Temporary" name="job-type"> Temporary
					  </label>
					</div>

				  </div>

				  <div class="row form-group mb-4">
					<div class="col-md-12"><h3>Location</h3></div>
					<div class="col-md-12 mb-3 mb-md-0">
					  <input name="location" type="text" class="form-control" placeholder="Western City, UK
	">
					</div>
				  </div>

				  <div class="row form-group">
					<div class="col-md-12"><h3>Job Description</h3></div>
					<div class="col-md-12 mb-3 mb-md-0">
					  <textarea name="jobDescription" class="form-control" id="" cols="30" rows="5"></textarea>
					</div>
				  </div>

				  <div class="row form-group">
					<div class="col-md-12">
					  <button type="submit" name="jobPost"  class="btn btn-primary  py-2 px-5">Post Job</button>
					</div>
				  </div>

	  
				</form>
			  </div>

			  <div class="col-lg-4">
				<div class="p-4 mb-3 bg-white">
				  <h3 class="h5 text-black mb-3">Contact Info</h3>
				  <p class="mb-0 font-weight-bold">Address</p>
				  <p class="mb-4">	InnoBytes Technologies Pvt. Ltd. Row House No. C-101,
				  SwapnaShilp, Five Gardens Soc., Pune, Maharashtra, 411017 India</p>

				  <p class="mb-0 font-weight-bold">Phone</p>
				  <p class="mb-4"><a href="#">+91 8999825013</a></p>

				  <p class="mb-0 font-weight-bold">Email Address</p>
				  <p class="mb-0"><a href="#">info@innobytes.in</a></p>

				</div>
				
				<div class="p-4 mb-3 bg-white">
				  <h3 class="h5 text-black mb-3">About</h3>
				  <p> Freelancing happens to be the new favourite thing of individuals of this century.
 				  Global Talents provides a online market space where employers can hire people to work 
				   on different areas and technologies, who can work remotely at the comfort of their space.</p>
				  <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
				</div>
			  </div>
			</div>
		  </div>
		</div>



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