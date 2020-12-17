<?php 
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'tuteehut');
$sql="select * from departments WHERE sno != 11";
$temp=mysqli_query($con,$sql);
include('visibility.php') ?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>TuteeHUT | Department</title>
<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://kit.fontawesome.com/a076d05399.js">
  </script>
  <script>
    function department_change()
  {
    document.getElementById('department1').className='nav-item active';
    document.getElementById('about1').className='nav-item';
    document.getElementById('contact1').className='nav-item';
    


  }

  

  function contact_change()
  {
    
    document.getElementById('department1').className='nav-item';
    document.getElementById('about1').className='nav-item';
    document.getElementById('contact1').className='nav-item active';
    
  }</script>
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
<body onload="visibility_checking()" style="background-color: #fff">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container" style="padding:0">
<img src="newlogo1.png" style="height: 10%;width:10%;padding:0%;margin: 0;border:0"></div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav" style="padding: 0">
<ul class="navbar-nav ml-auto">
<li class="nav-item"><a href="logged.php" class="nav-link">Home</a></li>
<li class="nav-item" id="about1"><a href="index.php#about" class="nav-link">About</a></li>

<li class="nav-item active" id="department1"><a href="logged_department.php" class="nav-link">Department</a></li>
<li class="nav-item "><a href="loggedinstructor.php" class="nav-link">Instructors</a></li>
<li class="nav-item"><a href="general_quiz.php" class="nav-link">Quiz</a></li>
<li class="nav-item" id="contact1" onclick="contact_change()"><a href="#contact" class="nav-link">Contact</a></li>
<li class="nav-item"><a href="logout.php" class="nav-link">LOGOUT</a></li>
</ul>
</div>
</div>
</nav>
<!-- END nav -->
<!--<section style="background-color: #010217;">

<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true" >
<div style="position:relative;left:20%;width:50%"class="col-md-7 ftco-animate fadeInUp ftco-animated">

<h1 style="text-align: center;"class="mb-4" id='intial_heading'>
DEPARTMENTS
</h1>
 
</div>
</div>
</div>
</div>

</section>-->
<section style="background-color: #010217; height: 100vh; width: auto; padding-top: 40vh">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
<div class="col-md-9 ftco-animate pb-5 text-center fadeInUp ftco-animated" style=>

<!--<p class="breadcrumbs"><span class="mr-2"><a href="https://preview.colorlib.com/theme/studylab/index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Certified Instructor <i class="fa fa-chevron-right"></i></span></p>-->

<h1 class="mb-0 bread">DEPARTMENT</h1>
</div>
</div>
</div>
</section>
<section class="ftco-section bg-light" id="quiz" style="background-color: #fff;border-right: 50px solid #010217;border-top: 50px solid #010217;min-height:100%;">
<div class="container" style="min-height: 100%; background-color: #fff">
<div class="row justify-content-center pb-4" style="background-color: #fff">
<div class="col-md-12 heading-section text-center ftco-animate" style="background-color: #fff">

</div>
</div>
<div class="row">
  <?php 

 while ($row = mysqli_fetch_assoc($temp)) {?>
<div class="col-md-4 ftco-animate">
<div class="project-wrap" style="max-height:91%;box-shadow: 0px 0px 0px -0px rgba(0, 0, 0, 0);background-color: #fff">
<img id='<?php echo $row['sno']?>' onclick="request(this.id)" src="admin_console/home/<?php echo $row['image'];?>" style="cursor:pointer;background-size:cover;border-radius:60%;width:15vw;height:15vw;position:relative;left:18%;">
<!--<span class="price"><?php $sql="SELECT paragraphs FROM home where headings='quiz1_type'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];?></span>-->
</p>
<div class="text p-4" style="min-height: 100%">
<h3 style="color:#010217;text-align: center;font-weight: 700"><?php echo $row['name']; ?></h3>
<h1 style="text-align: center;" class="advisor"><span style="color:#010217;text-align: center;"></span></p>
<!--<ul class="d-flex justify-content-between">
<li><span class="flaticon-shower"></span>2300</li>
<li class="price">$199</li>
</ul>-->
</div>
</div>

</div>
<?php } ?> 
</h1>
</div>
</div>
</div>
</div>
</div>
</section>


<script>
  function request(id)
  {
    var select=id;
;    var temp;
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      temp =this.responseText;
    }
  }
  xhttp.open("GET", "department_divert.php?identity="+select, false);
  xhttp.send();
  window.location.href ='department_definition.php';
  }
</script>









<footer onmouseover="contact_change()" onmouseout="department_change()" id="contact" style="background-color: #010217; padding-bottom: 0.5em">
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