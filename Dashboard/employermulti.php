<?php

session_start();

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
  <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
 
    * {
      box-sizing: border-box;
    }

    body {
      background-color: #f1f1f1;
    }

    #regForm {
      background-color: #ffffff;
      margin: 100px auto;
      font-family: Raleway;
      padding: 40px;
      width: 70%;
      min-width: 300px;
    }

    h1 {
      text-align: center;
    }

    input {
      padding: 10px;
      width: 100%;
      font-size: 17px;
      font-family: Raleway;
      border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
      background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
      display: none;
    }

    button {
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 17px;
      font-family: Raleway;
      cursor: pointer;
    }

    button:hover {
      opacity: 0.8;
    }

    #prevBtn {
      background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbbbbb;
      border: none;
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }

    .step.active {
      opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #4CAF50;
    }
	

.startdrop
{  
	width:100%;

}
.label1
{
	width:100%;
}

.wrapper {
  padding:4em;
  padding-bottom: 0;
  border: 2px solid grey;
}
a{
	text-decoration:none;
}
  </style>
</head>

<body>

  <form id="regForm" method="POST" action="action2.php" enctype="multipart/form-data">
    <h1>Profile Details:</h1>
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
      <h2>About You:</h2>
      <div class="form-row mt-4">
        
          <b>Company Name(If representing any company)</b> </h3> <input name="companyName" class="multisteps-form__input form-control" id="job" type="text"
            placeholder="e.g. Facebook"  />
        
      </div>
	  <div class="form-row mt-4" style="width: 500px;">
	    <b>About you (or company description if representing any company)</b>
        <div class="about" style="width: 500px;">
          </b> <textarea name="aboutCompany" required id="des" cols="30" rows="5" class="form-control"
            style="width:650px;padding:10px"></textarea>
        </div>
      </div>
	  
	  
       <div class="form-row mt-4">
        
          <b>Social Media profile link(or company Website link if representing a company )</b> 
          <input name="companyLink" class="multisteps-form__input form-control" type="text" required
            placeholder="www.google.com" />
       </div>
	   
     		   
      <div class="form-row mt-4">
        
          <b>Phone Number</b> <input name="phone" class="multisteps-form__input form-control" type="text" required
            placeholder="Phone number" />
        
       

      </div>
	  
	  
      <div class="form-row mt-4">
        <b>Upload Profile Picture</b>
        <input name="profilepic" class="multisteps-form__input form-control" type="file"
          style="padding: 4px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;" accept="image/*"/>
      </div>
      <div class="form-row mt-4">
                
        <label for="fluency" class="label1">
          <div><b>Designation/Role</b></div>
        </label>
        <input name="role" class="multisteps-form__input form-control" type="text"
          style="padding: 4px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;" />
        
      </div> 
    </div>

    

    

  
              <div class="tab">
                <h3 class="multisteps-form__title"><b>Location</b></h3>
                <div  class="multisteps-form__content">
                <b>Street Address</b>  
                <input name="streetAddress" class="multisteps-form__input form-control" type="text" placeholder=" " required/>
                </div>
                    <div class="multisteps-form__content" style="margin-top: 10px;">
                     <b> Apartment(or office building name) </b> <input name="zipcode" class="multisteps-form__input form-control" type="text" placeholder=" " required/>
                    </div> 


                     <div class="button-row d-flex mt-4">

                          <div class="col-12 col-sm-6 mt-4 mt-sm-0" style="padding-left:0px;">
                             <b>Country</b> 
                            <select name="country" id="cars" style="padding: 4px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;width: 200px;padding-left: 0px;">
                             <option value="India">India</option>
                            
                           </select>
                          </div>
                   
                         

                           <div class="col-12 col-sm-6 mt-4 mt-sm-0" style="padding-left:0px;">
                            <b>State</b>
                           <select name="state" id="cars" style="padding: 4px;border-radius: 0.25rem;background-color: #fff;margin-left: 23px;    border: 1px solid #ced4da;width: 200px;padding-left: 0px;">
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Kerala">Kerala</option> 
                          </select>
                          </div>

                        </div>


                        <div class="button-row d-flex mt-4">

                          <div class="col-12 col-sm-6 mt-4 mt-sm-0" style="padding-left:0px;">
                             <b> City</b>
                            <select name="city" id="cars" style="padding: 4px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;width: 200px;padding-left: 0px;margin-left: 31px;margin-bottom: 25px;">
                             <option value="Mumbai">Mumbai</option>
                            </select>
                          </div>
                          
                          <div class="col-12 col-sm-6 mt-4 mt-sm-0" style="padding-left:0px;">
                            <b>Zipcode</b>
                            <input type="text" name="zipcode" id=""style="padding: 4px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;width: 200px;padding-left: 0px;margin-bottom:25px; ">
                           
                        </div>
                   
                         

                           

                        </div>
						

                    
                  </div>
    
    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>

    </div>
  </form>

 
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
<script  src="./script.js"></script>
 <script>
  


const des=document.getElementById('des');



des.addEventListener('blur',(e)=>{
  const val=e.target.value;
  if(val.length<100)
  {
    alert("Description should be of atleast 100 words");
  }
})

$(".chosen-select").chosen({
      no_results_text: "Oops, nothing found!"
    })
	
 
	

    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
	  
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
	  /* if(currentTab ==3 && y.style.display=="flex")
 	      { 
            alert("please fill Education details");
			return false;
		  }
      else  if(currentTab ==4 && z.style.display=="flex")
 	      {
            alert("please fill Employment details");
			return false;
		  }	*/	  
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
	  
	  if(currentTab==0  )
	  {   for (i = 1; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
	  
	  
	  }
	  
	  if(currentTab==1  )
	  {   for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
	  }
	  
	  
      // A loop that checks every input field in the current tab:
     
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }

  </script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
</body>

</html>