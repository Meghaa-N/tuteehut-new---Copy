<!DOCTYPE html>
<!-- saved from url=(0054)https://preview.colorlib.com/theme/studylab/index.html -->
<?php include "visibility.php";?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>TuteeHUT | Events</title>
<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<style>
  button
  {
    background-color: #010217;
    color:white;
    border-color: #010217;
  }


#event_handler {
  position: relative;
  left:30%;
  display: inline-block;
}

#events_display {
  position: absolute;

  display: none;
  
}

#event_handler:hover #events_display {
  display: block;
  min-width:200px;
}

#event_handler:hover button {
  background-color: #3e8e41;
}
li
{
  text-align: center;
  display: block;
  background-color: white;
  color:black;
  text-decoration: none;
  
}
li:hover
{
  background-color: rgba(200,200,200,1);
}
li a
{
  color: #010217;
}


  
</style>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

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
<div class="container" style="border:10px double #010217;background-color: white;margin-top: 5%;margin-bottom: 5%;max-width: 70%">
<!--<div class="row">-->
<div class="try" style="padding:10%">

  <img  style="background-size:cover;width:100%;max-height:50vh;position:relative;" src="admin_console/home/<?php $sql="select * from events where sno=$_SESSION[event]";$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);echo $val['image'];?>"><h1 style="font-family:all; ;text-align: center"><?php  $sql="select * from events where sno=$_SESSION[event]";$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['name'];?></h1><br><br>
  
<!--<div class="login-wrap p-4 p-md-5">-->
<h3 class="mb-4" style="white-space:pre-wrap;text-align: center;color:#010217"><?php $sql="select * from events where sno=$_SESSION[event]";$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['definition'];?>  </h3>
<a style="color:white" href="log.php"><button style="height:3.5em;width:6.5em;position:relative;left:43%;background-color: #010217;color:white"id="event" >REGISTER</button></a>
</div>
</div>
</section>
<!--<section style = "position: relative;left:43%;width:20%;">

  <div class='pm-button'><a href='https://www.payumoney.com/paybypayumoney/#/E9A6987953A2838815AA23DD2F7D6A73'><img src='https://www.payumoney.com/media/images/payby_payumoney/new_buttons/23.png' /></a></div>
  <a style="color:white" href="log.php"><button style="height:3.5em;width:6.5em;position:relative;left:20%;background-color: dodgerblue;color:white"id="event" >REGISTER</button></a>-->
</section><br><br><br>
</body>
