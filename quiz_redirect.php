<!DOCTYPE html>
<!-- saved from url=(0054)https://preview.colorlib.com/theme/studylab/index.html -->
<?php 
include "visibility.php";
include "config.php";
$sql = "SELECT * FROM events WHERE sno = $_SESSION[event]";
$res = mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($res);
//echo $val['visibility'];
if($val['visibility'] == 0)
{
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>TuteeHUT | QUIZ</title>
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
<div style="text-align:center;"><h1>Coming soon!!</h1></div>

<a style="color:white" href="logged.php"><button style="height:3.5em;width:6.5em;position:relative;left:40%;background-color: #010217;color:white"id="event" >HOME</button></a>

<?php
}
else{
	echo "<script>";
  echo "window.location.href = 'quiz_new.php';";
  echo "</script>";
}
?>


