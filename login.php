<!DOCTYPE html>
<!-- saved from url=(0054)https://preview.colorlib.com/theme/studylab/index.html -->
<?php include "visibility.php"?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>TuteeHUT | Login</title>
<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<script type="text/javascript">
  function hide_error()
{
  document.getElementById('error').innerHTML="";

}
  function visibility_checking()
  {
    if(<?php echo $quiz_section ?>)
    {
      document.getElementById('quiz').style.display='show';
    }
    else
    {
      document.getElementById('quiz').style.display='none';
      
    }

    if(<?php echo $quiz1 ?>)
    {
      document.getElementById('quiz1').style.display='show';
    }
    else
    {
      document.getElementById('quiz1').style.display='none';
      
    }

    if(<?php echo $quiz2 ?>)
    {
      document.getElementById('quiz2').style.display='show';
    }
    else
    {
      document.getElementById('quiz2').style.display='none';
      
    }

    if(<?php echo $quiz3 ?>)
    {
      document.getElementById('quiz3').style.display='show';
    }
    else
    {
      document.getElementById('quiz3').style.display='none';
      
    }



    if(<?php echo $result_section ?>)
    {
      document.getElementById('result').style.display='show';
    }
    else
    {
      document.getElementById('result').style.display='none';
      
    }

    if(<?php echo $result1 ?>)
    {
      document.getElementById('result1').style.display='show';
    }
    else
    {
      document.getElementById('result1').style.display='none';
      
    }

    if(<?php echo $result2 ?>)
    {
      document.getElementById('result2').style.display='show';
    }
    else
    {
      document.getElementById('result2').style.display='none';
      
    }

    if(<?php echo $result3 ?>)
    {
      document.getElementById('result3').style.display='show';
    }
    else
    {
      document.getElementById('result3').style.display='none';
      
    }

  }
</script>

<script>
  function password_verify(){
  var flag;
  var em = document.forms["login"]["email"].value;
  var password = document.forms["login"]["password"].value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      flag =this.responseText;
  }
  
  };
  xhttp.open("POST", "login_verification.php", false);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("em="+em+"&password="+password);
if(flag==0)
      {
        document.getElementById('error').innerHTML="Invalid user name or password!";
        return false;
      }
      else
      {
        return true;
      }
     
    }
   
  
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<h3 class="mb-4" style="text-align: center;color:#010217">LOGIN</h3>
<!-- END nav -->

<!--<section class="ftco-section ftco-no-pb ftco-no-pt" style="margin-top: 5%">
<div class="container">
<div class="row">
<div class="col-md-7"></div>
<div class="col-md-5 order-md-last">
<div class="login-wrap p-4 p-md-5">
<h3 class="mb-4">LOGIN</h3>-->
<form action="loginhandle.php" class="signup-form" name="login" method='POST' onsubmit="return password_verify()">

<div class="form-group">
<label class="label" for="email">Email ID<span style='color: red'>*</span></label>
<input type="email" class="form-control" onclick="hide_error()" name="email" placeholder="Email" required>
</div>

<div class="form-group">
<label class="label" for="password"   >Password<span style='color: red'>*</span></label>
<input id="password-field" type="password" onclick="hide_error()" name="password" class="form-control" placeholder="password" required>
</div>
<div class="form-group">
<p id="error" style="color: red"></p></div>
<div class="form-group d-flex justify-content-end mt-4">
<button type="submit" style="position:relative;margin-right: 45%" class="btn btn-primary submit">LOGIN</button>
</div>
</form>

<p class="text-center">New?  <a href="signup_page.php">Sign UP</a></p>
</div>
</div>
</div>
</div>
</section>

<!--<div class="container">
<div class="row justify-content-center pb-4">
<div class="col-md-12 heading-section text-center ftco-animate">
<span class="subheading">Start Learning Today</span>
<h2 class="mb-4">Browse Online Course Category</h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-3 col-lg-2">
<a href="https://preview.colorlib.com/theme/studylab/index.html#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-1.jpg);">
<div class="text w-100 text-center">
<h3>IT &amp; Software</h3>
<span>100 course</span>
</div>
</a>
</div>
<div class="col-md-3 col-lg-2">
<a href="https://preview.colorlib.com/theme/studylab/index.html#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-9.jpg);">
<div class="text w-100 text-center">
<h3>Music</h3>
<span>100 course</span>
</div>
</a>
</div>
<div class="col-md-3 col-lg-2">
<a href="https://preview.colorlib.com/theme/studylab/index.html#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-3.jpg);">
<div class="text w-100 text-center">
<h3>Photography</h3>
<span>100 course</span>
</div>
</a>
</div>
<div class="col-md-3 col-lg-2">
<a href="https://preview.colorlib.com/theme/studylab/index.html#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-5.jpg);">
<div class="text w-100 text-center">
<h3>Marketing</h3>
<span>100 course</span>
</div>
</a>
</div>
<div class="col-md-3 col-lg-2">
<a href="https://preview.colorlib.com/theme/studylab/index.html#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-8.jpg);">
<div class="text w-100 text-center">
<h3>Health</h3>
<span>100 course</span>
</div>
</a>
</div>
<div class="col-md-3 col-lg-2">
<a href="https://preview.colorlib.com/theme/studylab/index.html#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-6.jpg);">
<span class="text w-100 text-center">
<h3>Audio Video</h3>
<span>100 course</span>
</span>
</a>
</div>-->

<!--<section class="ftco-section bg-light" id="quiz">
<div class="container">
<div class="row justify-content-center pb-4">
<div class="col-md-12 heading-section text-center ftco-animate">
<span class="subheading">C'mon, Let's do some serious quizzing!</span>
<h2 class="mb-4"> Recent Quizzes</h2>
</div>
</div>
<div class="row">
<div class="col-md-4 ftco-animate" id="quiz1">
<div class="project-wrap" style="height: 91%" id="quiz1">
<p title='Login to attend' class="img" style="background-image: url(admin_console/home/<?php $sql="select name from images where position='quiz1'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>);">
<span class="price"><?php $sql="SELECT paragraphs FROM home where headings='quiz1_type'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span>
</a>
<div class="text p-4">
<h3><?php $sql="SELECT paragraphs FROM home where headings='quiz1_heading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></h3>
<p class="advisor"><span><?php $sql="SELECT paragraphs FROM home where headings='quiz1_description'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span></p>
<!--<ul class="d-flex justify-content-between">
<li><span class="flaticon-shower"></span>2300</li>
<li class="price">$199</li>
</ul>
</div>
</div>
</div>

<div class="col-md-4 ftco-animate" id="quiz2">
<div class="project-wrap" style="height: 91%" >
<p title="Login to attend!" class="img" style="background-image: url(admin_console/home/<?php $sql="select name from images where position='quiz2'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>);">
<span class="price"><?php $sql="SELECT paragraphs FROM home where headings='quiz2_type'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span>
</a>
<div class="text p-4">
<h3><?php $sql="SELECT paragraphs FROM home where headings='quiz2_heading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></h3>
<p class="advisor"><span><?php $sql="SELECT paragraphs FROM home where headings='quiz2_description'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span></p>
<!--<ul class="d-flex justify-content-between">
<li><span class="flaticon-shower"></span>2300</li>
<li class="price">$199</li>
</ul>
</div>
</div>
</div>
<div class="col-md-4 ftco-animate" id="quiz3">
<div class="project-wrap" style="height: 91%" >
<p title="login to attend" class="img" style="background-image: url(admin_console/home/<?php $sql="select name from images where position='quiz3'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>);">
<span class="price"><?php $sql="SELECT paragraphs FROM home where headings='quiz3_type'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span>
</a>
<div class="text p-4">
<h3><?php $sql="SELECT paragraphs FROM home where headings='quiz3_heading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></h3>
<p class="advisor"><span><?php $sql="SELECT paragraphs FROM home where headings='quiz3_description'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span></p>
<!--<ul class="d-flex justify-content-between">
<<li><span class="flaticon-shower"></span>2300</li>
<li class="price">$199</li>
</ul>-->
</div>
</div>
</div><!--
<div class="col-md-4 ftco-animate">
<div class="project-wrap">
<a href="https://preview.colorlib.com/theme/studylab/index.html#" class="img" style="background-image: url(images/work-4.jpg);">
<span class="price">Software</span>
</a>
<div class="text p-4">
<h3><a href="https://preview.colorlib.com/theme/studylab/index.html#">Design for the web with adobe photoshop</a></h3>
<p class="advisor">Advisor <span>Tony Garret</span></p>
<ul class="d-flex justify-content-between">
<li><span class="flaticon-shower"></span>2300</li>
<li class="price">$199</li>
</ul>
</div>
</div>
</div>
<div class="col-md-4 ftco-animate">
<div class="project-wrap">
<a href="https://preview.colorlib.com/theme/studylab/index.html#" class="img" style="background-image: url(images/work-5.jpg);">
<span class="price">Software</span>
</a>
<div class="text p-4">
<h3><a href="https://preview.colorlib.com/theme/studylab/index.html#">Design for the web with adobe photoshop</a></h3>
<p class="advisor">Advisor <span>Tony Garret</span></p>
<ul class="d-flex justify-content-between">
<li><span class="flaticon-shower"></span>2300</li>
<li class="price">$199</li>
</ul>
</div>
</div>
</div>
<div class="col-md-4 ftco-animate">
<div class="project-wrap">
<a href="https://preview.colorlib.com/theme/studylab/index.html#" class="img" style="background-image: url(images/work-6.jpg);">
<span class="price">Software</span>
</a>
<div class="text p-4">
<h3><a href="https://preview.colorlib.com/theme/studylab/index.html#">Design for the web with adobe photoshop</a></h3>
<p class="advisor">Advisor <span>Tony Garret</span></p>
<ul class="d-flex justify-content-between">
<li><span class="flaticon-shower"></span>2300</li>
<li class="price">$199</li>
</ul>
</div>
</div>
</div>
</div>
</div>
  <div class="col-md-12 text-center mt-5">
<a href="#" class="btn btn-secondary">Want More?</a>
</div>
</section>
</section>
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/.jpg);">
<div class="overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 d-flex align-items-center">
<div class="icon"><span class="flaticon-online"></span></div>
<div class="text">
<strong class="number" data-number="400">400</strong>
<span>Online Courses</span>
</div>
</div>
</div>
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 d-flex align-items-center">
<div class="icon" ></div>
<div class="text">
<strong class="number" data-number="4500">4,500</strong>
<span>Students Enrolled</span>
</div>
</div>
</div>
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 d-flex align-items-center">
<div class="icon"><span class="flaticon-instructor"></span></div>
<div class="text">
<strong class="number" data-number="1200">1,200</strong>
<span>Experts Instructors</span>
</div>
</div>
</div>
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 d-flex align-items-center">
<div class="icon"><span class="flaticon-tools"></span></div>
<div class="text">
<strong class="number" data-number="300">300</strong>
<span>Hours Content</span>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-about img" id="about">
<div class="container">
<div class="row d-flex">
<div class="col-md-12 about-intro">
<div class="row">
<div class="col-md-6 d-flex">
<div class="d-flex about-wrap">
<div class="img d-flex align-items-center justify-content-center" style="background-image:url(admin_console/home/<?php $sql="select name from images where position='about1'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>);">
</div>
<div class="img-2 d-flex align-items-center justify-content-center" style="background-image:url(admin_console/home/<?php $sql="select name from images where position='about2'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>);">
</div>
</div>
</div>
<div class="col-md-6 pl-md-5 py-5">
<div class="row justify-content-start pb-3">
<div class="col-md-12 heading-section ftco-animate">
<span class="subheading" id="aboutus"><?php $sql="SELECT paragraphs FROM home where headings='about_subtext'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span>
<h2 class="mb-4">ABOUT US</h2>
<p style="white-space: pre-line">
  <?php 
$sql="SELECT paragraphs FROM home where headings='About_definition'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];
    ?>
</p>
<!--<p><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="btn btn-primary">Get in touch with us</a></p>-->
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!--<section class="ftco-section testimony-section bg-light">
<div class="overlay" style="background-image: url(images/bg_2.jpg);"></div>
<div class="container">
<div class="row pb-4">
<div class="col-md-7 heading-section ftco-animate">
<span class="subheading">Testimonial</span>
<h2 class="mb-4">What Are Students Says</h2>
</div>
</div>
</div>
<div class="container container-2">
<div class="row ftco-animate">
<div class="col-md-12">
<div class="carousel-testimony owl-carousel owl-loaded owl-drag">





<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1290px, 0px, 0px); transition: all 0s ease 0s; width: 4193px;"><div class="owl-item cloned" style="width: 292.5px; margin-right: 30px;"><div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="star">
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</p>
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div></div><div class="owl-item cloned" style="width: 292.5px; margin-right: 30px;"><div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="star">
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</p>
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div></div><div class="owl-item cloned" style="width: 292.5px; margin-right: 30px;"><div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="star">
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</p>
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div></div><div class="owl-item cloned" style="width: 292.5px; margin-right: 30px;"><div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="star">
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</p>
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div></div><div class="owl-item active" style="width: 292.5px; margin-right: 30px;"><div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="star">
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</p>
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div></div><div class="owl-item active" style="width: 292.5px; margin-right: 30px;"><div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="star">
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</p>
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div></div><div class="owl-item active" style="width: 292.5px; margin-right: 30px;"><div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="star">
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</p>
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div></div><div class="owl-item active" style="width: 292.5px; margin-right: 30px;"><div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="star">
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</p>
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div></div><div class="owl-item" style="width: 292.5px; margin-right: 30px;"><div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="star">
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</p>
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div></div><div class="owl-item cloned" style="width: 292.5px; margin-right: 30px;"><div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="star">
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</p>
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div></div><div class="owl-item cloned" style="width: 292.5px; margin-right: 30px;"><div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="star">
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</p>
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div></div><div class="owl-item cloned" style="width: 292.5px; margin-right: 30px;"><div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="star">
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</p>
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div></div><div class="owl-item cloned" style="width: 292.5px; margin-right: 30px;"><div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="star">
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</p>
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div></div></div></div><div class="owl-nav disabled"><button role="presentation" class="owl-prev"><span class="ion-ios-arrow-back"></span></button><button role="presentation" class="owl-next"><span class="ion-ios-arrow-forward"></span></button></div><div class="owl-dots"><button class="owl-dot active"><span></span></button><button class="owl-dot"><span></span></button></div></div>
</div>
</div>
</div>-->
<!--<section class="ftco-intro ftco-section ftco-no-pb">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12 text-center">
<div class="img" style="background-image: url(images/bg_4.jpg);">
<div class="overlay"></div>
<h2>We Are StudyLab An Online Learning Center</h2>
<p>We can manage your dream building A small river named Duden flows by their place</p>
<p class="mb-0"><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="btn btn-primary px-4 py-3">Enroll Now</a></p>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section services-section">
<div class="container">
<div class="row d-flex">
<div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center" style="height: 100%">
<div class="w-100 mb-4 mb-md-0" style="height: 100%">
<span class="subheading">So, what exactly are we doing here?</span>
<h2 class="mb-4">The stages</h2>
<p style="white-space: pre-wrap;"><?php $sql="SELECT paragraphs FROM home where headings='stages_intro'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></p>
</div>
</div>
<div class="col-md-6" >
<div class="row" style="height: 100%">
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate" >
<div class="services" style="height: 100%;box-shadow: 5px 5px 15px rgb(230, 230, 230)">
<div class="icon d-flex align-items-center justify-content-center" style="background-image:url(images/high_quality2.png);background-size: cover"></div>
<div class="media-body">
<h3 class="heading mb-3">Top Quality Content</h3>
<p><?php $sql="SELECT paragraphs FROM home where headings='quality_description'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></p>
</div>
</div>
</div>
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
<div class="services"style="height: 100%;box-shadow: 5px 5px 15px rgb(230, 230, 230)">
<div class="icon icon-2 d-flex align-items-center justify-content-center" style="background-image:url(images/instructor.png);background-size: cover"></span></div>
<div class="media-body">
<h3 class="heading mb-3">Highly Skilled Instructors</h3>
<p><?php $sql="SELECT paragraphs FROM home where headings='instructor_description'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></p>
</div>
</div>
</div>
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
<div class="services" style="height: 100%;box-shadow: 5px 5px 15px rgb(230, 230, 230)">
<div class="icon icon-3 d-flex align-items-center justify-content-center" style="background-image:url(images/world_class.png);background-size: cover"></div>
<div class="media-body">
<h3 class="heading mb-3">World Class Quiz</h3>
<p><?php $sql="SELECT paragraphs FROM home where headings='quiz_praise'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></p>
</div>
</div>
</div>
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate" >
<div class="services" style="height: 100%;box-shadow: 5px 5px 15px rgb(230, 230, 230)">
<div class="icon icon-4 d-flex align-items-center justify-content-center" style="background-image:url(images/certificate.jpg);background-size: cover"></div>
<div class="media-body">
<h3 class="heading mb-3">Get Certified</h3>
<p><?php $sql="SELECT paragraphs FROM home where headings='get_certified'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</section>
<section class="ftco-section bg-light" id="result">
<div class="container" >
<div class="row justify-content-center pb-4">
<div class="col-md-12 heading-section text-center ftco-animate">
<h2 class="mb-4">RESULTS</h2>
</div>
</div>
<div class="row d-flex">

<div class="col-lg-4 ftco-animate" id="result1">
<div class="blog-entry">
<a href="#" class="block-20" style="background-image: url(admin_console/home/<?php $sql="select name from images where position='result1'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>);background-size: cover">
</a>
<div class="text d-block">
<div class="meta">
<p>
<a >published on: <span class="fa fa-calendar mr-2"><?php $sql="SELECT paragraphs FROM home where headings='result1_date'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span></a>
</p>
</div>
<h3 class="heading"><a href="#"><?php $sql="SELECT paragraphs FROM home where headings='result1_heading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></a></h3>
<p style="white-space: pre-wrap;"><?php $sql="SELECT paragraphs FROM home where headings='result1_description'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></p>
<p><a href="#" class="btn btn-secondary py-2 px-3">More</a></p>
</div>
</div>
</div>

<div class="col-lg-4 ftco-animate" id="result2">
<div class="blog-entry">
<a href="#" class="block-20" style="background-image: url(admin_console/home/<?php $sql="select name from images where position='result2'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>);background-size: cover">
</a>
<div class="text d-block">
<div class="meta">
<p>
<a >published on: <span class="fa fa-calendar mr-2"><?php $sql="SELECT paragraphs FROM home where headings='result2_date'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span></a>
</p>
</div>
<h3 class="heading"><a href="#"><?php $sql="SELECT paragraphs FROM home where headings='result2_heading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></a></h3>
<p style="white-space: pre-wrap;"><?php $sql="SELECT paragraphs FROM home where headings='result2_description'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></p>
<p><a href="#" class="btn btn-secondary py-2 px-3">More</a></p>
</div>
</div>
</div>


<div class="col-lg-4 ftco-animate" id='result3'>
<div class="blog-entry">
<a href="#" class="block-20" style="background-image: url(admin_console/home/<?php $sql="select name from images where position='result3'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>);background-size: cover">
</a>
<div class="text d-block">
<div class="meta">
<p>
<a >published on: <span class="fa fa-calendar mr-2"><?php $sql="SELECT paragraphs FROM home where headings='result3_date'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span></a>
</p>
</div>
<h3 class="heading" ><a href="#"><?php $sql="SELECT paragraphs FROM home where headings='result3_heading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></a></h3>
<p style="white-space: pre-wrap;"><?php $sql="SELECT paragraphs FROM home where headings='result3_description'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></p>
<p><a href="#" class="btn btn-secondary py-2 px-3">More</a></p>
</div>
</div>
</div>

</div>
</div>
</section>
<footer class="ftco-footer ftco-no-pt" id="contact" style="padding-bottom: 0.5em">
<div class="container" >
<div class="row mb-5" >
<div class="col-md pt-5" >
<div class="ftco-footer-widget pt-md-5 mb-4" >
<h2 class="ftco-heading-2"><?php $sql="SELECT paragraphs FROM home where headings='contact_heading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></h2>
<p><?php $sql="SELECT paragraphs FROM home where headings='contact_about'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?>
  </p>
<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
<!--<div class="col-md pt-5">
<div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
<h2 class="ftco-heading-2">Help Desk</h2>
<ul class="list-unstyled">
<li><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="py-2 d-block">Customer Care</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="py-2 d-block">Legal Help</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="py-2 d-block">Services</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="py-2 d-block">Privacy and Policy</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="py-2 d-block">Refund Policy</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="py-2 d-block">Call Us</a></li>
</ul>
</div>
</div>
<div class="col-md pt-5">
<div class="ftco-footer-widget pt-md-5 mb-4">
<h2 class="ftco-heading-2">Recent Courses</h2>
<ul class="list-unstyled">
<li><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="py-2 d-block">Computer Engineering</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="py-2 d-block">Web Design</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="py-2 d-block">Business Studies</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="py-2 d-block">Civil Engineering</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="py-2 d-block">Computer Technician</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/index.html#" class="py-2 d-block">Web Developer</a></li>
</ul>
</div>
</div>
<div class="col-md pt-5">
<div class="ftco-footer-widget pt-md-5 mb-4">
<h2 class="ftco-heading-2">Have a Questions?</h2>
<div class="block-23 mb-3">
<ul>
<li><span class="icon fa fa-map-marker"></span><span class="text">
  <?php $sql="SELECT paragraphs FROM home where headings='address'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?>
  
</span></li>
<li><a href="#"><span class="icon fa fa-phone"></span><span class="text"><?php $sql="SELECT paragraphs FROM home where headings='phone_number1'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?>
  </span></a></li>
<li><a href="#"><span class="icon fa fa-phone"></span><span class="text"><?php $sql="SELECT paragraphs FROM home where headings='phone_number2'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?>
  </span></a></li>
<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@tuteehut.com</span></a></li>
</ul>
</div>
</div>
</div>
</div>

</div>
</footer>
<!-- loader -->
<div id="ftco-loader" class="fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"></circle></svg></div>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery-migrate-3.0.1.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/popper.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/bootstrap.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.easing.1.3.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.waypoints.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.stellar.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/owl.carousel.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.magnific-popup.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.animateNumber.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/bootstrap-datepicker.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/scrollax.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/js"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/google-map.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/main.js.download"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/js(1)"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','UA-23581568-13');</script>

</body></html>