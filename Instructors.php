<?php
  include('admin/db_connect.php');
  //echo 'Host information: '.$mysqli->host_info;
  //echo '<br>';
  //echo 'Protocol version: '.$mysqli->protocol_version;
  $sql = "SELECT * FROM `details`";
  $result = mysqli_query($mysqli, $sql);
  $details = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  mysqli_close($mysqli);
  //print_r($details);
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'tuteeHUT');


?>
<!DOCTYPE html>
<!-- saved from url=(0059)https://preview.colorlib.com/theme/studylab/instructor.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>TuteeHUT | Instructors</title>
<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--
<link href="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/css" rel="stylesheet">
<link rel="stylesheet" href="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/font-awesome.min.css">
<link rel="stylesheet" href="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/A.animate.css+owl.carousel.min.css+owl.theme.default.min.css+magnific-popup.css+bootstrap-datepicker.css+jquery.timepicker.css+flaticon.css+style.css,Mcc.kvjnZeWn2e.css.pagespee.css">
-->
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  /*background: #3B5998;*/
  color: white;
}

/* Twitter */
.fa-twitter {
  /*background: #55ACEE;*/
  color: white;
}
.fa-instagram {
  color: white;
}
.space{
  float: left;
  padding: 15px;
}

</style>
<script type="text/javascript" charset="UTF-8" src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/util.js.download"></script><script type="text/javascript" charset="UTF-8" src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/AuthenticationService.Authenticate">
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
</script></head>
<body>
<!--
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="margin-left: 0px;">
<div class="container" style="margin-left: 0px;">
<a href="#"><img src="logo/1500.png" style="height: 10%;width:10%;padding:0%;margin: 0;border:0"></a>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
<li class="nav-item"><a href="HomePage.php#about" class="nav-link">About</a></li>
<li class="nav-item"><a href="login.php" class="nav-link">Quiz</a></li>
<li class="nav-item active"><a href="Instructors.php" class="nav-link">Instructors</a></li>
<li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
</ul>
</div>
</div>
</nav>
-->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container" style="padding:0">
<img src="newlogo1.png" style="height: 10%;width:10%;padding:0%;margin: 0;border:0"></div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav" style="padding: 0">
<ul class="navbar-nav ml-auto">
<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
<li class="nav-item"><a href="index.php#about" class="nav-link">About</a></li>

<li class="nav-item"><a href="department.php" class="nav-link">Department</a></li>
<li class="nav-item active "><a href="Instructors.php" class="nav-link">Instructors</a></li>
<!--<li class="nav-item"><a href="general_quiz.php" class="nav-link">Quiz</a></li>-->
<li class="nav-item" onclick="contact_change()"><a href="#contact" class="nav-link">Contact</a></li>
<li class="nav-item"><a href="signup_page.php" class="nav-link">SIGNUP</a></li>
</ul>
</div>
</div>
</nav>
<!-- END nav -->
<!--
<section class="hero-wrap hero-wrap-2" style="background-image:url(admin_console/admin/uploaded_images/tree-736885_1280.jpg)">
-->
<section style="background-color: #010217; height: 100vh; width: auto; padding-top: 40vh">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
<div class="col-md-9 ftco-animate pb-5 text-center fadeInUp ftco-animated" style=>

<!--<p class="breadcrumbs"><span class="mr-2"><a href="https://preview.colorlib.com/theme/studylab/index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Certified Instructor <i class="fa fa-chevron-right"></i></span></p>-->

<h1 class="mb-0 bread">INSTRUCTORS</h1>
<h2 class="mb-0 bread" style="color: white; ">Get to know your Instructors!!</h2>
</div>
</div>
</div>
</section>

<section class="ftco-section bg-light">

<div class="container">
<div class="row">
  <?php foreach($details as $detail){ ?>
<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch fadeInUp ftco-animated">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image: url(admin_console/admin/uploaded_images/<?php echo $detail['image'];?>);">
<!--<img src="admin/uploaded_images/<?php echo $detail['image'];?>" alt="Image" onerror="this.onerror = null; this.src='admin/uploaded_images/tree-736885_1280.jpg'" class = "img-fluid">--><!--<img src="admin/uploaded_images/<?php echo detail['image']; ?>" alt="admin/uploaded_images/tree-736885_1280.jpg"> --></div>
</div>
<div class="text pt-3">
<h3><a href="#"><?php echo htmlspecialchars($detail['name']); ?></a></h3>
<span class="position mb-2"><?php echo htmlspecialchars($detail['job']); ?></span>
<div class="faded card" style="border:0px">
<p><?php echo htmlspecialchars($detail['description']); ?></p>
<!--ul class="ftco-social text-center">
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-twitter"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-facebook"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-google"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-instagram"></span></a></li>
</ul> -->
</div>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
<!--
<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch fadeInUp ftco-animated">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image:url(images/xteacher-2.jpg.pagespeed.ic.lVGVM1ZqjP.webp)"></div>
</div>
<div class="text pt-3">
<h3><a href="https://preview.colorlib.com/theme/studylab/instructor-details.html">Mitch Parker</a></h3>
<span class="position mb-2">Programmer</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
<ul class="ftco-social text-center">
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-twitter"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-facebook"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-google"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch fadeInUp ftco-animated">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image:url(images/xteacher-3.jpg.pagespeed.ic.be19mwXdaz.webp)"></div>
</div>
<div class="text pt-3">
<h3><a href="https://preview.colorlib.com/theme/studylab/instructor-details.html">Stella Smith</a></h3>
<span class="position mb-2">Developer</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
<ul class="ftco-social text-center">
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-twitter"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-facebook"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-google"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch fadeInUp ftco-animated">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image:url(images/xteacher-4.jpg.pagespeed.ic.SFpQ0mRyix.webp)"></div>
</div>
<div class="text pt-3">
<h3><a href="https://preview.colorlib.com/theme/studylab/instructor-details.html">Monshe Henderson</a></h3>
<span class="position mb-2">Graphic</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
<ul class="ftco-social text-center">
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-twitter"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-facebook"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-google"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch fadeInUp ftco-animated">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image:url(images/xteacher-5.jpg.pagespeed.ic.ZduX31RDtO.webp)"></div>
</div>
<div class="text pt-3">
<h3><a href="https://preview.colorlib.com/theme/studylab/instructor-details.html">Bianca Wilson</a></h3>
<span class="position mb-2">Business</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
<ul class="ftco-social text-center">
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-twitter"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-facebook"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-google"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch fadeInUp ftco-animated">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image:url(images/xteacher-6.jpg.pagespeed.ic.awW0IeAxxv.webp)"></div>
</div>
<div class="text pt-3">
<h3><a href="https://preview.colorlib.com/theme/studylab/instructor-details.html">Mitch Parker</a></h3>
<span class="position mb-2">Programmer</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
<ul class="ftco-social text-center">
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-twitter"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-facebook"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-google"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch fadeInUp ftco-animated">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image:url(images/xteacher-7.jpg.pagespeed.ic.KNONdnf_Ng.webp)"></div>
</div>
<div class="text pt-3">
<h3><a href="https://preview.colorlib.com/theme/studylab/instructor-details.html">Stella Smith</a></h3>
<span class="position mb-2">Developer</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
<ul class="ftco-social text-center">
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-twitter"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-facebook"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-google"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch fadeInUp ftco-animated">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image:url(images/xteacher-8.jpg.pagespeed.ic.SH5IBaru_R.webp)"></div>
</div>
<div class="text pt-3">
<h3><a href="https://preview.colorlib.com/theme/studylab/instructor-details.html">Monshe Henderson</a></h3>
<span class="position mb-2">Graphic</span>
<div class="faded">
<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
<ul class="ftco-social text-center">
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-twitter"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-facebook"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-google"></span></a></li>
<li class="ftco-animate fadeInUp ftco-animated"><a href="https://preview.colorlib.com/theme/studylab/instructor.html#"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="row mt-5">
<div class="col text-center">
<div class="block-27">
<ul>
<li><a href="https://preview.colorlib.com/theme/studylab/instructor.html#">&lt;</a></li>
<li class="active"><span>1</span></li>
<li><a href="https://preview.colorlib.com/theme/studylab/instructor.html#">2</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/instructor.html#">3</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/instructor.html#">4</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/instructor.html#">5</a></li>
<li><a href="https://preview.colorlib.com/theme/studylab/instructor.html#">&gt;</a></li>
</ul>
</div>
</div>
</div>
</div>
</section>
--></section>
<!--
<footer class="ftco-footer ftco-no-pt" id="contact" style="padding-bottom: 0.5em">
-->
<footer id="contact" onmouseover="contact_change()" onmouseout="home_change()" style="background-color: #010217; padding-bottom: 0.5em">
<div class="container" >
<div class="row mb-5" >
<div class="col-md pt-5" >
<div class="ftco-footer-widget pt-md-5 mb-4" >
<h2 class="ftco-heading-2" style="color: #edf0f5;"><?php $sql="SELECT paragraphs FROM home where headings='contact_heading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></h2>
<p><?php $sql="SELECT paragraphs FROM home where headings='contact_about'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?>
  </p>
<ul>
<!--
<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
-->
<a href="#"><li class="fa fa-twitter space"></li></a>
<a href="#"><li class="fa fa-facebook space"></li></a>
<a href="#"><li class="fa fa-instagram space"></li></a>

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
</div>-->
<div class="col-md pt-5">
<div class="ftco-footer-widget pt-md-5 mb-4">
<h2 class="ftco-heading-2" style="color: #edf0f5;">Contact</h2>
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
<script src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/jquery.min.js.pagespeed.jm.xZH2zNe7lE.js.download"></script>
<script src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/jquery-migrate-3.0.1.min.js+popper.min.js+bootstrap.min.js.pagespeed.jc.erZkhhbLI0.js.download"></script><script>eval(mod_pagespeed_2RG6nigRym);</script>
<script>eval(mod_pagespeed_2Q$AIxptJ1);</script>
<script>eval(mod_pagespeed_U6$WzY$9Ti);</script>
<script src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/jquery.easing.1.3.js+jquery.waypoints.min.js+jquery.stellar.min.js+owl.carousel.min.js.pagespeed.jc.Ssjbe0x5Ik.js.download"></script><script>eval(mod_pagespeed_ytlwXAatuZ);</script>
<script>eval(mod_pagespeed_ZRRMJUgrRe);</script>
<script>eval(mod_pagespeed_BoKWE_g8RP);</script>
<script>eval(mod_pagespeed_BBI8$G5zE3);</script>
<script src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/jquery.magnific-popup.min.js+jquery.animateNumber.min.js+bootstrap-datepicker.js+scrollax.min.js+google-map.js+main.js.pagespeed.jc.T607vrhnGx.js.download"></script><script>eval(mod_pagespeed_CcXD5T6stf);</script>
<script>eval(mod_pagespeed__daDZx_CLv);</script>
<script>eval(mod_pagespeed_5Ynut4vbtl);</script>
<script>eval(mod_pagespeed_vjETjsVCO$);</script>
<script src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/js"></script>
<script>eval(mod_pagespeed_SeO09j3m4K);</script>
<script>eval(mod_pagespeed_ICRlmQwWHo);</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/js(1)"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','UA-23581568-13');</script>

</body></html>
