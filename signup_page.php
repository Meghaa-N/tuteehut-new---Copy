<!DOCTYPE html>
<!-- saved from url=(0054)https://preview.colorlib.com/theme/studylab/index.html -->
<?php include "visibility.php"?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>TuteeHUT | SIGNUP</title>
<style>
  button
  {
    background-color: #010217;
    color:white;
    border-color: #010217;
  }
</style>


<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/css" rel="stylesheet">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/font-awesome.min.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/animate.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/owl.carousel.min.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/owl.theme.default.min.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/magnific-popup.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/bootstrap-datepicker.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.timepicker.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/flaticon.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/style.css">
<style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style><script type="text/javascript" charset="UTF-8" src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/util.js.download"></script><script type="text/javascript" charset="UTF-8" src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/AuthenticationService.Authenticate"></script></head>

<body style="background-color:#010217 ">
  <section class="ftco-section ftco-no-pb ftco-no-pt"  >
<div class="container" style="border:10px double #010217;background-color: white;margin-top: 5%;margin-bottom: 5%;max-width: 60%">
<!--<div class="row">-->
<div class="try" style="padding:10%">
<!--<div class="login-wrap p-4 p-md-5">-->
<h3 class="mb-4" style="text-align: center;color:#010217">Register Now</h3>
<form  action="signup.php" class="signup-form" name="signup" method='POST' onsubmit="return validateForm()">
<div class="form-group">
<label class="label" for="name" style="color:#010217">Full Name<span style='color: red'>*</span></label>
<input type="text" class="form-control" name="name" placeholder="Enter Name" required pattern="[a-z A-Z]+">
</div>
<div class="form-group">
<label class="label" for="email" style="color:#010217">Email ID<span style='color: red'>*</span></label>
<input type="text" onclick="hide_error()"class="form-control" name="email" placeholder="Email" required>
</div>
<div class="form-group">
<label class="label" for="phno" style="color:#010217">Phone Number<span style='color: red'>*</span></label>
<input type="text" class="form-control" name="phno" placeholder="Phone Number" required pattern="[0-9]+">
</div>
<div class="form-group">
<label class="label"style="color:#010217" required>Department<span style='color: red'>*</span></label>
<input type="text" class="form-control" required="[a-zA-Z0-9-]" name="dept" placeholder="Department" >
</div>
<div class="form-group">
<label class="label"style="color:#010217" required>Year<span style='color: red'>*</span></label>
<select class="form-control" name="year" placeholder="year" required >
  <option value='1'>1</option>
  <option value='2'>2</option>
  <option value='3'>3</option>
  <option value='4'>4</option>
</select>
</div>
<div class="form-group">
<label class="label" for="email" name="address" style="color:#010217" required>City<span style='color: red'>*</span></label>
<input type="text" class="form-control" required="[a-zA-Z-]" name="City/Village" placeholder="Address">
</div>
<div class="form-group">
<label class="label" for="password" style="color:#010217"  >Password<span style='color: red'>*</span></label>
<input id="password-field" type="password" name="password" class="form-control" placeholder="password" required>
</div>
<div class="form-group">
<label class="label" for="password" style="color:#010217">Confirm Password<span style='color: red'>*</span></label>
<input id="password-field" onclick="hide_error()" type="password" class="form-control" placeholder="Confirm Password" name="cpassword" required>
</div>
<div class="form-group">
<p id="error" style="color: red"></p></div>

<button type="submit" style="position:relative;left:40%;background-color: #010217; padding:1.4%;width:20%">SIGN UP</button>

</form>
<script>
  function hide_error()
{
  document.getElementById('error').innerHTML="";

}
function validateForm() {
  var name = document.forms["signup"]["name"].value;
  
  var phno = document.forms["signup"]["phno"].value;
  var dept = document.forms["signup"]["dept"].value;
  var password = document.forms["signup"]["password"].value;
  var cpassword = document.forms["signup"]["cpassword"].value;
  var em = document.forms["signup"]["email"].value;

  
  if (password.localeCompare(cpassword)!=0)
   {
    document.getElementById('error').innerHTML="Password And Confirm Password do not match!";
    return false;
  }
  if(phno.length!=10)
  {
    document.getElementById('error').innerHTML="Enter valid Phone Number!";
    return false;

  }
  if(password.length<6)
  {
    document.getElementById('error').innerHTML="Password must be atleast 6 digits!";
    return false;

  }



  var flag;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      flag =this.responseText;
  }
   
      };
  xhttp.open("POST", "email_verification.php", false);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("em="+em);
if(flag==0)
      {
        document.getElementById('error').innerHTML="Email already exists! Try logging in!";
        return false;
      }
      else if(flag==1)
      {
        return true;
      }
      else
      {
        document.getElementById('error').innerHTML="Invalid pattern for email ID!";
        return false;
      }
     
    }
   
</script>


   
</script>


<p class="text-center">Already have an account? <a href="login.php" style="color:#010217">Login</a></p>
</div>
</div>
</div>
</div>
</section>

