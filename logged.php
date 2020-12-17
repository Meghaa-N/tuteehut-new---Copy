<!DOCTYPE html>
<!-- saved from url=(0054)https://preview.colorlib.com/theme/studylab/index.html -->
<?php include "visibility.php";
if(isset($_SESSION['email']))
{ 
	?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<title>TuteeHUT | Home</title>
<style>
  .project-wrap {
    margin-bottom: 30px;
    width: 100%;
    background: #fff;
    -webkit-box-shadow: 0px 0px 0px -0px rgba(0, 0, 0, 0);
    -moz-box-shadow: 0px 0px 0px -0px rgba(0, 0, 0, 0);
    box-shadow: 0px 10px 23px -8px rgba(0, 0, 0, 0);
}
</style>
<script type="text/javascript">
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
  function home_change()
  {
    document.getElementById('home').className='nav-item active';
    document.getElementById('about1').className='nav-item';
    document.getElementById('contact1').className='nav-item';
    


  }

  function about_change()
  {
    document.getElementById('home').className='nav-item';
    document.getElementById('about1').className='nav-item active';
    document.getElementById('contact1').className='nav-item';
  }

  function contact_change()
  {
    document.getElementById('home').className='nav-item';
    document.getElementById('about1').className='nav-item';
    document.getElementById('contact1').className='nav-item active';
    
  }
</script>

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/style.css">
<style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style><script type="text/javascript" charset="UTF-8" src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/util.js.download"></script><script type="text/javascript" charset="UTF-8" src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/AuthenticationService.Authenticate"></script></head>
<body onload="visibility_checking()" style="background-color: #fff">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<img src="newlogo1.png" style="height: 10%;width:10%;padding:0%;margin: 0;border:0"></div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
<li class="nav-item active" onclick="home_change()" id="home"><a href="logged.php" class="nav-link">Home</a></li>
<li class="nav-item" onclick="about_change()" id="about1"><a href="#about" class="nav-link">About</a></li>


<li class="nav-item"><a href="logged_department.php" class="nav-link">Department</a></li>
<li class="nav-item"><a href="loggedinstructor.php" class="nav-link">Instructors</a></li>
<li class="nav-item"><a href="general_quiz.php" class="nav-link">Quiz</a></li>
<li class="nav-item" id="contact1"onclick="contact_change()"><a href="#contact" class="nav-link">Contact</a></li>
<li class="nav-item"><a href="logout.php" class="nav-link">LOGOUT</a></li>
</ul>
</div>
</div>
</nav>
<!-- END nav -->
<section style="background-color: #010217;">

<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true" >
<div style="position:relative;left:20%;width:50%"class="col-md-7 ftco-animate fadeInUp ftco-animated">
<h2 class="subheading" style="text-align: center;font-size: 18px"   id='initial_subheading'><?php 
$sql="SELECT paragraphs FROM home where headings='initial_subheading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?> <?php echo $_SESSION['name']?> ! </span>
<h1 style="text-align: center;"class="mb-4" id='intial_heading'>
<?php 
$sql="SELECT paragraphs FROM home where headings='initial_heading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];
?>
</h1>
 <!--<a style="position: relative;left:43%" href="signup_page.php" class="btn btn-white">SIGN UP</a></p>-->
</div>
</div>
</div>
</div>

</section>


<section class="ftco-section ftco-about img" id="about" style="border-left: 50px solid #010217" onmouseover="about_change()" onmouseout="home_change()">
<div class="container" >
<div class="row d-flex">
<div class="col-md-12 about-intro">
<div class="row">
<div class="col-md-6 d-flex" style="max-width:30%">
<div class="d-flex about-wrap" style="min-height: 400px;margin: 0;border-right:0">
<img  class="img d-flex align-items-center justify-content-center" src="admin_console/home/<?php $sql="select name from images where position='about1'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>" style="background-size: cover;min-height: 400px;min-width: 300px;max-width: 100%">
<!--<div class="img-2 d-flex align-items-center justify-content-center" style="background-image:url(admin_console/home/<?php $sql="select name from images where position='about2'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>);">
</div>-->
</div>
</div>
<div class="col-md-6 pl-md-5 py-5" style="min-width: 67%">
<div class="row justify-content-start pb-3">
<div class="col-md-12 heading-section ftco-animate" >
<!--<span class="subheading" id="aboutus"><?php $sql="SELECT paragraphs FROM home where headings='about_subtext'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span>-->
<h2 class="mb-4" style="font-weight: 900">GET TO KNOW US</h2>
<p style="white-space: pre-line;color:#010217" style="column-width: 60%">
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
</section>
<section class="ftco-section bg-light" id="quiz" style="background-color: #fff;border-right: 50px solid #010217;border-top: 50px solid #010217;">
<div class="container" style="background-color: #fff">
<div class="row justify-content-center pb-4" style="background-color: #fff">
<div class="col-md-12 heading-section text-center ftco-animate" style="background-color: #fff">
<h2 class="mb-4" style="font-weight: 900;color:#010217">EVENT UPDATES</h2>
</div>
</div>
<div class="row">
<div class="col-md-4 ftco-animate" id="quiz1">
<div class="project-wrap" id="quiz1" style="height:91%;box-shadow: 0px 0px 0px -0px rgba(0, 0, 0, 0);background-color: #fff">
<img  src="admin_console/home/<?php $sql="select name from images where position='quiz1'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>" style="height:60%;width:50%;border-radius:60%;position: relative;left:25%">
<!--<span class="price"><?php $sql="SELECT paragraphs FROM home where headings='quiz1_type'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span>-->
</p>
<div class="text p-4">
<h3 style="color:#010217;text-align: center;font-weight: 700"><?php $sql="SELECT paragraphs FROM home where headings='quiz1_heading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></h3>
<h1 style="text-align: center;" class="advisor"><span style="color:#010217;text-align: center;"><?php $sql="SELECT paragraphs FROM home where headings='quiz1_description'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span></p>
<!--<ul class="d-flex justify-content-between">
<li><span class="flaticon-shower"></span>2300</li>
<li class="price">$199</li>
</ul>-->
</div>
</div>
</div>
<div class="col-md-4 ftco-animate" id="quiz2">
<div class="project-wrap" id="quiz2" style="height:91%;box-shadow: 0px 0px 0px -0px rgba(0, 0, 0, 0);background-color: #fff">
<img  src="admin_console/home/<?php $sql="select name from images where position='quiz2'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>" style="height:60%;width:50%;border-radius:50%;position: relative;left:25%">
<!--<span class="price"><?php $sql="SELECT paragraphs FROM home where headings='quiz2_type'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span>-->
</p>
<div class="text p-4">
<h3 style="color:#010217;text-align: center;font-weight: 700"><?php $sql="SELECT paragraphs FROM home where headings='quiz2_heading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></h3>
<h1 style="text-align: center;" class="advisor"><span style="color:#010217;text-align: center;"><?php $sql="SELECT paragraphs FROM home where headings='quiz2_description'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span></p>

<!--<ul class="d-flex justify-content-between">
<li><span class="flaticon-shower"></span>2300</li>
<li class="price">$199</li>
</ul>-->
</div>
</div>
</div>
<div class="col-md-4 ftco-animate" id="quiz3">
<div class="project-wrap" id="quiz3" style="height:91%;box-shadow: 0px 0px 0px -0px rgba(0, 0, 0, 0);background-color: #fff">
<img  src="admin_console/home/<?php $sql="select name from images where position='quiz3'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>" style="height:60%;width:50%;border-radius:50%;position: relative;left:25%">
<!--<span class="price"><?php $sql="SELECT paragraphs FROM home where headings='quiz3_type'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span>-->
</p>
<div class="text p-4">
<h3 style="color:#010217;text-align: center;font-weight: 700"><?php $sql="SELECT paragraphs FROM home where headings='quiz3_heading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></h3>
<h1 style="text-align: center;" class="advisor"><span style="color:#010217;text-align: center;"><?php $sql="SELECT paragraphs FROM home where headings='quiz3_description'";
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

</div>
</div>
  <!--<div class="col-md-12 text-center mt-5">
<a href="#" class="btn btn-secondary">Want More?</a>
</div>-->
</section>
</section>

</section>

<footer  id="contact" onmouseover="contact_change()" onmouseout="home_change()" style="background-color: #010217; padding-bottom: 0.5em">
<div class="container" >
<div class="row mb-5" >
<div class="col-md pt-5" >
<div class="ftco-footer-widget pt-md-5 mb-4" >
<h2 class="ftco-heading-2" style="color: white"><?php $sql="SELECT paragraphs FROM home where headings='contact_heading'";
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

<div class="col-md pt-5">
<div class="ftco-footer-widget pt-md-5 mb-4">
<h2 class="ftco-heading-2" style="color: white">Contact</h2>
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
<div id="ftco-loader" class="fullscreen" style="background-color: #010217"></div>
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
<?php 
}
else{
	echo "<script>alert('Please login/signup to access this page! ')</script>";

echo "<script>window.location.href = 'login.php';</script>";
}
?>

    
