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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
  <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
  <style>
  ul {
		   list-style-type: none;
		    margin-top: 15px;
			margin-bottom: 5px;
			margin-right: 388px;
			margin-left: 388px;
			
			padding-top: 20px;
			padding-right: 80px;
			padding-bottom: 12px;
			padding-left: 40px;
			
			overflow: hidden;
			background-color: white;
			border: 2px solid grey;
		}

		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}

		li a:hover {
		  background-color: #111;
		}

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
.enddrop
{   position:relative;
	width:80%;
	margin-left:60%;
}
.labelend
{   position:relative;
	margin-left:38%;
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

  <form id="regForm" name="regForm" method="POST" action="action.php" enctype="multipart/form-data">
    <h1>Profile Details:</h1>
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
      <h2>About You:</h2>
      <div class="form-row mt-4">
        <div class="col-12 col-sm-6">
          <h3>Job Title</h3> <input class="multisteps-form__input form-control"  name="job_title" id="job" type="text"
            placeholder="e.g Web Developer" required />
        </div>
      </div>

      <div class="form-row mt-4">
        <div class="col-12 col-sm-6">
          <h3>Phone</h3> <input class="multisteps-form__input form-control" name="phone_no" type="text" required
            placeholder="Phone number" />
        </div>
        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
          <h3>Per Hour Rate</h3>
          <select id="cars"
            style="padding: 4px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;">
            <option value="Dollar">₹</option>
            <option value="Dollar">$</option>
            <option value="YEN"> ¥</option>
            <option value="Euro">€</option>
            <option value="POUND">£</option>
          </select>
          <input required class="" type="text" id="rate" placeholder="0.00" name="perhrate"
            style=" margin-left: 2px;width:50%;padding: 5px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;">

        </div>


      </div>
      <div class="form-row mt-4">
        <h3>Upload Profile Picture</h3>
        <input class="multisteps-form__input form-control" type="file" name="profilepic"
          id="prof" style="padding: 4px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;" accept="image/*" />
      </div>
      <div class="form-row mt-4" style="width: 300px;">
        <div class="about" style="width: 300px;">
          <h3>Tell us about yourself</h3> <textarea name="about" required id="des" cols="30" rows="5" class="form-control"
            style="width:650px;padding:10px"></textarea>
        </div>
      </div>

    </div>

    <div class="tab">
      <h2>Your Skills:</h2>
     <div class="form-row mt-2">
      <label  class="label1"><b>Category</b></label><br>
      <select data-placeholder="any other skills..." class="form-control" name="category" required>
<!-- categories that will decide the next drop-down -->
        <option value=1> "Designers and Creatives"</option>
          <option value=2>"Programmers & Developers"</option>
            <option value=3>"Administrative Support Specialists"</option>
              <option value=4>"Writers & Translaters"</option>
                <option value=5>"Finance Professionals"</option>
                  <option value=6>"Sales & Marketing Professionals"</option>
        
      </select><br><br>

    </div>
      <div class="form-row mt-2">
        <label for="otherskills" class="label1"><b>Other Skills</b></label><br>
        <select data-placeholder="any other skills..." class="form-control" name="choices" id="choices" required>
<!-- populated using JS -->
       
        </select><br><br>

      </div>
     
        <b> Expertise </b>


        <input type="radio" id="entry" name="expertise" value="entry">
        <label for="entry">Entry level</label><br>
        <input type="radio" id="intermediate" name="expertise" value="intermediate">
        <label for="intermediate">Intermediate</label><br>
        <input type="radio" id="expert" name="expertise" value="expert">
        <label for="expert">Expert</label><br>
      <div class="form-row mt-2">

        <label for="fluency" class="label1">
          <div><b>English  Fluency</b></div>
        </label>
        <select data-placeholder="select language proficiency..." class="form-control" name="fluency" required>

          <option value=0>0 – No Proficiency</option>
          <option value=1>1 – Elementary Proficiency</option>
          <option value=2>2 – Limited Working Proficiency</option>
          <option value=3>3 – Professional Working Proficiency</option>
          <option value=4>4 – Full Professional Proficiency</option>
          <option value=5>5 – Native / Bilingual Proficiency</option>
        </select><br><br>


      </div>


      <div class="form-row mt-2">
        <b>Upload Your CV or related document</b>
        <input name="cv" class="multisteps-form__input form-control" type="file" id="cvfile"
          style="padding: 4px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;" accept=".pdf" required />
      </div>
      <br>
      <hr>
    </div>

    <div class="tab">
      <h3>Education Details
      </h3>
        <br>
        <h4> Add recent college degress earned.</h4>
       <br>
      <form class="modal-content" action="/action_page.php">
 
      <label for="institute"><b>School/Institute name</b0></label>
      <input type="text"  name="institute" required>

      <label for="study"><b> Area of Study</b></label>
      <input type="text" name="study" >

      <label for="degree"><b>Degree</b></label>
      <input type="text"  name="degree" >
   <div class="form-row ">
                    <div class="col-12 col-sm-7">
						<label for="Yearstart"><b>Year Attended:<b></label>

                    </div>
                    <div class="col-12 col-sm-5 ">
					  <label for="Yearend" class="labelend"><b>Year:<b></label>
   	
                    </div>
                  </div>
	 
      
  <div class="form-row ">
                    <div class="col-12 col-sm-4"> 
						<select class="startdrop" name="Yearstart" id ="EventStartTimeMin" >
     <option value="FROM">FROM</option>
 <option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
     </select>

                    </div>
                    <div class="col-12 col-sm-5">
					   
    <select class="enddrop" name="Yearend" id="EventendTimeMin">
    <option value="TO(END)">TO(end)</option>
   <option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
  </select>
                    </div>
                  </div>
  <br><br><br>
        <hr>
    </div>


	       <!--single form panel-->
              <div class="tab">
               
                <h3 >Employment details</h3>
               
                   <br> <br><h4> Add Recent Employment details.</h4> 
				   		   <br>
    <form class="modal-content" action="/action_page.php">
    
     
      <label for="company"><b>Company</b></label>
      <input type="text"  name="company" required>

      <label for="job"><b>Job title</b></label>
      <input type="text" name="job" required >

   <div class="form-row ">
                    <div class="col-12 col-sm-6">
						<label for="city"><b>City:<b></label>

                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
					  <label for="country" class="labelend"><b>Country:<b></label>
   	
                    </div>
    </div>
	 
      
  <div class="form-row ">
                    <div class="col-12 col-sm-4">
	<select name="cityPrevJob" class="startdrop" >
	<option value="Mumbai">Mumbai</option>
      <option value="Pune">Pune</option> 
     </select>

                    </div>
                    <div class="col-12 col-sm-5">
					   
    <select name="countryPrevJob" class="enddrop" >
                 <option value="India">India</option>

    </select>
  
   	
                    </div>
    </div>
	<br>
	<b> Period:</b><br>
     <b> From </b>
	 <br>
	 <div class="form-row ">
        <div class="col-12 col-sm-4">
	<select name="from_month"  class="startdrop" id="startdrop1"  >
	<option value="Month">Month</option>
	 <option value="January">January</option>
<option value="Febuary">Febuary</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
 
     </select>

         </div>
          <div class="col-12 col-sm-5">
					   
    <select name="from_year" class="enddrop" id="enddrop1"   >
                 <option value="Year">Year</option>
				 <option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>

    </select>
  
   	
          </div>
    </div>
	 <br>
	   <b> Till </b>
	 <br>
	 <div class="form-row ">
        <div class="col-12 col-sm-4">
	<select name="to_month" class="startdrop" id="startdrop2" >
	<option value="Month">Month</option>
	<option value="January">January</option>
<option value="Febuary">Febuary</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
      
     </select>

         </div>
          <div class="col-12 col-sm-5">
					   
    <select name="to_year" class="enddrop" id="enddrop2"  >
                 <option value="Year">Year</option>
				 <option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>

    </select>
  
   	
          </div>

    </div> 
				         
                  
				  
				
				   
				   <br><hr>
  
              </div>	
           		  
				   
 

  
              <div class="tab">
                <h3 class="multisteps-form__title">Location<hr></h3>
                <div class>
                Street Address  <input class="multisteps-form__input form-control" name="streetAddress" type="text" placeholder=" " required/>
                </div>
                    <div class="multisteps-form__content" style="margin-top: 10px;">
                     Apartment <input class="multisteps-form__input form-control" name="apartment" type="text" placeholder=" " required/>
                    </div> 


                     <div class="button-row d-flex mt-4">

                          <div class="col-12 col-sm-6 mt-4 mt-sm-0" style="padding-left:0px;">
                             Country 
                            <select name="country" id="cars" style="padding: 4px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;width: 200px;padding-left: 0px;">
                             <option value="India">India</option>
                            
                           </select>
                          </div>
                   
                         

                           <div class="col-12 col-sm-6 mt-4 mt-sm-0" style="padding-left:0px;">
                            State
                           <select name="state" id="cars" style="padding: 4px;border-radius: 0.25rem;background-color: #fff;margin-left: 23px;    border: 1px solid #ced4da;width: 200px;padding-left: 0px;">
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Kerala">Kerala</option> 
                          </select>
                          </div>

                        </div>


                        <div class="button-row d-flex mt-4">

                          <div class="col-12 col-sm-6 mt-4 mt-sm-0" style="padding-left:0px;">
                              City
                            <select name="city" id="cars" style="padding: 4px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;width: 200px;padding-left: 0px;margin-left: 31px;margin-bottom: 25px;">
                             <option value="Mumbai">Mumbai</option>
                            </select>
                          </div>
                          
                          <div class="col-12 col-sm-6 mt-4 mt-sm-0" style="padding-left:0px;">
                            Zipcode
                            <input type="text" name="zipcode" id=""style="padding: 4px;border-radius: 0.25rem;background-color: #fff;    border: 1px solid #ced4da;width: 200px;padding-left: 0px;margin-bottom:25px; ">
                           
                        </div>
                   
                         

                           

                        </div>
						<hr>

                    
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
      <span class="step"></span>
      <span class="step"></span>
	  <span class="step"> </span>
    </div>
  </form>

 
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
<script  src="./script.js"></script>
 <script>
  
 const job=document.getElementById('job');
const rate=document.getElementById('rate');
const des=document.getElementById('des');

job.addEventListener('blur',(e)=>{
  const val=e.target.value;
  if(val.length<1)
  {
    alert("Field is required");
  }
})

rate.addEventListener('blur',(e)=>{
  const val=e.target.value;
  if(val<1)
  {
    alert("Rate should be more than 0");
  }
})

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
	  
	  if(currentTab==1  )
	  {   for (i = 0; i < y.length-1; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
	  }
	  
	  
	  if(currentTab==2)
	  {
	      if(y[0].value=="")
		    { alert("Please fill school details");
			y[0].className +="invalid";
			valid=false;
			}
	     if ($("#EventStartTimeMin").val() === "FROM") {
              alert("Please fill Year start");
			  valid =false;
             }		
		 if ($("#EventendTimeMin").val() === "TO(END)") {
              alert("Please fill Year end");
			  valid =false;
             }		
	
	  }
	  if(currentTab==3)
	  {  
	    if(y[0].value=="")
		    { alert("Please fill Company Name");
			y[0].className +="invalid";
			valid=false;
			}
			if(y[1].value=="")
		    { alert("Please fill Job title");
			y[1].className +="invalid";
			valid=false;
			}
	        if ($("#enddrop1").val() === "Year") {
              alert("Please fill Year");
			  valid =false;
             }	
			if ($("#enddrop2").val() === "Year") {
              alert("Please fill Year");
			  valid =false;
             }	
			 
			 if ($("#startdrop1").val() === "Month") {
              alert("Please fill Month");
			  valid =false;
             }	
	   if ($("#startdrop2").val() === "Month") {
              alert("Please fill Month");
			  valid =false;
             }
	  
	  }
	   if(currentTab==4)
	  {  
	    if(y[0].value=="")
		    { alert("Please fill Company Name");
			y[0].className +="invalid";
			valid=false;
			}
			if(y[1].value=="")
		    { alert("Please fill Job title");
			y[1].className +="invalid";
			valid=false;
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


// object literal holding data for option elements
var Select_List_Data = {
    
    'choices': { // name of associated select box
        
        // names match option values in controlling select box
        1: {
            text: ["2D Animation","2D Design","3D Animation","3D Rigging","Ableton live","ACDSee","Acrylic Painting","Adobe Acrobat",
"Adobe After Effects","Adobe Audition","Adobe Captivate","Adobe contribute","Adobe Creative Suite","Adobe Director","Adobe eLearning Suite",
"Adobe Encore","Adobe Fireworks","Adobe Freehand","Adobe GoLive","Adobe Illustrator","Adobe Imageready","Adobe InDesign","Adobe Insight",
"Adobe LiveCycle Designer","Adobe Muse","Adobe PageMaker","Adobe Photoshop","Adobe Photoshop Lightroom","Adobe Premiere","Adobe Premiere Elements",
"Adobe Premiere Pro","Adobe Soundbooth","Adobe Wallaby","AGAL","Album Cover Design","Alibre Design","Animation","Anime Studio","Apple iBooks",
"Apple iWeb","Apple iWork","Apple Motion","Art Direction","Articulate","Articulate Engage","Articulate Presenter","Articulate Storyline","Articulate Studio","Artlantis Studio",
"ArtRage","Arts & Crafts"],
          value: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,
42,43,44,45,46,47,48,49,50,51]
},
        2: {
            text: [".NET Compact Framework","Ajax Developers","C# Developers","Facebook API Developers","HTML Developers","iOS Developers","Java Developers","Magento Developers",
"Objective-C Developers","PHP Developers","Ruby on Rails Developers","SQL Programmers","Twitter API Developers","Wordpress Developers",
".NET Framework","Android Developers","CSS Developers","HTML5 Developers","JavaScript Developers","MySQL Developers","Python Developers",
"SQL Server Developers","Twitter Bootstrap Developers",".NET Remoting","API Developers","jQuery Developers","ASP.NET Developers"],
            value: [53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79]
        },

        3: {
            text: ["Administrative Support Assista","BPO Call Center Agents","Calendar Management Assistants","Data Entry Specialists","Email Handlers",
"Google Docs Experts","Helpdesk Support Contracts","Internet Researchers","PDF Conversion Experts",
"Research Assistants","Skype Assistants","Technical Support Agents","Virtual Assistants","Appointment Setters","Chat Support Agents",
"Data Miners","Email Tech Support Agents","Google Search Agents","Transcriptionists","Article Submission Contracts","Computer Skill Freelancers",
"Google Sheets Experts","Typing Agents","Customer Service Agents"
                ],
            value: [81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104]
        },
        4: {
            text: ["Academic Writers",
                    "Business Writers","Content Writers","Editors","French Writers & Translators","German Writers & Translators","Italian Writers & Translators",
                    "Spanish Writers & Translators",
                    "Russian Writers & Translators",
                    "English Writers & Translators",
                    "Journalists","Microsoft Word Experts", "Press Release Writers",      "Sales Writers","Technical Writers",
                    "Web Content Managers","Article Writers","Copy Editors", "Ghostwriters","Proofreaders","Screen Writers",
                    "Translators",   "Writers", "Copywriters","Creative Writers"
                    ],
            value: [105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129]
        },
        5: {
            text: ["Accounting Assistants","Accounts Payable Specialists","Accounts Receivable Specialist",
"Basecamp Specialists","Bookkeeping Assistants","Budgeting & Forecasting Contra",
"Business Analysts","Business Coaches","Business Development Analysts","Business Planning Analysts","Enterprise Resource Planners","Excel Experts","Financial Forecasters & Modele",
"Financial Reporting Analysts","Human Resource Managers","LinkedIn Recruiters","Negotiation Specialists","Project Management Analysts",
"Quickbooks Contractors","Recruiting Assistants","Scrum Assistants","Spreadsheet Experts","Statistics Analysts","Tax Preparation Specialist",
"Xero Contractors"],
            value: [130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154]
            },
        6: {
            text: ["Advertising Consultants","B2B Marketers", "Blog Writers",    "Brand Strategists","Cold Callers",
                    "CRM Consultants", "Direct Marketers",  "Email Marketing Consultants",   "Google Adwords Experts",
                    "Google Analytics Consultants","Google Website Optimizer Consu","Internet marketing Consultants",
                    "Lead Generation Specialists",  "Link Builders", "Market Researchers",
                    "Marketing Strategists", "On-Page Optimization Experts", "Outbound Sales Consultants",
                    "PPC Specialists", "Sales Consultants", "SEM Specialists","SEO Experts","Social Media Consultants",
                    "Telemarketers"],
            value: [155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178]
         }
    
    }    
};


// removes all option elements in select box 
// removeGrp (optional) boolean to remove optgroups
function removeAllOptions(sel, removeGrp) {
    var len, groups, par;
    if (removeGrp) {
        groups = sel.getElementsByTagName('optgroup');
        len = groups.length;
        for (var i=len; i; i--) {
            sel.removeChild( groups[i-1] );
        }
    }
    
    len = sel.options.length;
    for (var i=len; i; i--) {
        par = sel.options[i-1].parentNode;
        par.removeChild( sel.options[i-1] );
    }
}

function appendDataToSelect(sel, obj) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions(obj) {
        var f = document.createDocumentFragment();
        var o;
        
        for (var i=0, len=obj.text.length; i<len; i++) {
            o = document.createElement('option');
            o.appendChild( document.createTextNode( obj.text[i] ) );
            
            if ( obj.value ) {
                o.value = obj.value[i];
            }
            
            f.appendChild(o);
        }
        return f;
    }
    
    if ( obj.text ) {
        opts = addOptions(obj);
        f.appendChild(opts);
    } else {
        for ( var prop in obj ) {
            if ( obj.hasOwnProperty(prop) ) {
                labels.push(prop);
            }
        }
        
        for (var i=0, len=labels.length; i<len; i++) {
            group = document.createElement('optgroup');
            group.label = labels[i];
            f.appendChild(group);
            opts = addOptions(obj[ labels[i] ] );
            group.appendChild(opts);
        }
    }
    sel.appendChild(f);
}

// anonymous function assigned to onchange event of controlling select box
document.forms['regForm'].elements['category'].onchange = function(e) {
    // name of associated select box
    var relName = 'choices';
    
    // reference to associated select box 
    var relList = this.form.elements[ relName ];
    
    // get data from object literal based on selection in controlling select box (this.value)
    var obj = Select_List_Data[ relName ][ this.value ];
    
    // remove current option elements
    removeAllOptions(relList, true);
    
    // call function to add optgroup/option elements
    // pass reference to associated select box and data for new options
    appendDataToSelect(relList, obj);
};


// populate associated select box as page loads
(function() { // immediate function to avoid globals
    
    var form = document.forms['regForm'];
    
    // reference to controlling select box
    var sel = form.elements['category'];
    sel.selectedIndex = 0;
    
    // name of associated select box
    var relName = 'choices';
    // reference to associated select box
    var rel = form.elements[ relName ];
    
    // get data for associated select box passing its name
    // and value of selected in controlling select box
    var data = Select_List_Data[ relName ][ sel.value ];
    
    // add options to associated select box
    appendDataToSelect(rel, data);
    
}());

var fileprof = document.getElementById('prof');

fileprof.onchange = function(e) {
  var ext = this.value.match(/\.([^\.]+)$/)[1];
  switch (ext) {
    case 'jpg':
    case 'bmp':
    case 'png':
    case 'tif':
      alert('Allowed');
      break;
    default:
      alert('Not allowed');
      this.value = '';
  }
};

var sizeprof = document.getElementById("prof");

sizeprof.onchange = function() {
    if(this.files[0].size > 2097152){
       alert("File size should be less than 2MB!");
       this.value = "";
    };
};

var filecv = document.getElementById('cvfile');

filecv.onchange = function(e) {
  var ext = this.value.match(/\.([^\.]+)$/)[1];
  switch (ext) {
    case 'pdf':
      alert('Allowed');
      break;
    default:
      alert('Not allowed');
      this.value = '';
  }
};


var sizecv = document.getElementById("cvfile");

sizecv.onchange = function() {
    if(this.files[0].size > 2097152){
       alert("File size should be less than 2MB!");
       this.value = "";
    };
};
  </script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
</body>

</html>