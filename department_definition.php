<!DOCTYPE html>
<!-- saved from url=(0054)https://preview.colorlib.com/theme/studylab/index.html -->
<?php include "visibility.php";
$sql="select * from departments where sno=$_SESSION[department]";$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>TuteeHUT | Department | <?php echo $val['name']?></title>
<head><link rel="icon" href="favicon.ico" type="image/icon type">
<meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
<style>
  #event
  {
    background-color:#010217;
    color:white;
    border-color: #010217;
  }


#event_handler {
  position: relative;
  left:6vw;
  display: inline-block;
}

#events_display {
  position: absolute;

  display: none;
  
}

#event_handler:hover #events_display {
  display: block;
  min-width:20vw;
}

#event_handler:hover button {
  background-color: #010217;
}
li
{
  text-align: center;
  display: block;
  background-color: #286bbd;
  color:#ffffff;
  text-decoration: none;
  padding  :4%;
}
li:hover
{
  cursor: pointer;
  color:#010217;
  background-color: #95c0f5;
}
li
{
  color: #ffffff;
}


.button
{
  padding-left:25%;

}

button
{
  height: 60px;
  width:200px;
}
  
</style>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
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
  <img  style="background-size:cover;width:100%;max-height:50vh;position:relative;" src="admin_console/home/<?php echo $val['image'];?>"><br><br><h1 style="font-size:3.5em;font-weight: normal;text-shadow: 1px 1px #010217;  font-family:all;text-align: center"><?php $sql="select * from departments where sno=$_SESSION[department]";$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['name'];?></h1><br><br>
  
<!--<div class="login-wrap p-4 p-md-5">-->
<h3  class="mb-4" style="white-space:pre-wrap;text-align:justify;color:#010217;"><?php $sql="select * from departments where sno=$_SESSION[department]";$result=mysqli_query($conn,$sql);

$val = mysqli_fetch_assoc($result);
echo $val['definition'];?> </h3>
<div class="button" >
  <div id="event_handler"   style="position:relative;">
  <button  style="white-space: pre-wrap;" id="event" onmouseover="events_hover()">EVENTS  <i class="fas fa-angle-down"></i> </button>
  <div id="events_display">
    <ul id="events_list" style="color: white">
    </ul>
  </div>
  </div>
</div></div></div>
</section>
<!--<section style = "padding-left: 25%">
  <div id="event_handler"   style="position:relative;">
  <button  id="event" onmouseover="events_hover()">EVENTS  <i class="fas fa-angle-down"></i> </button>
  <div id="events_display">
    <ul id="events_list" style="color: white">
    </ul>
  </div>
  </div>
</section>--><br><br><br><br>
</body>
<script>
  
  function events_hover()
  {
    
    var text="";
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      text =this.responseText;
    }
    
  }
  xhttp.open("POST", "departments_handle.php", false);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();
  document.getElementById("events_display").style.display='show';
  document.getElementById("events_list").innerHTML = text;



  }

  function event_divert(id)
  {
    var choose=id;
     var text="";
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      text =this.responseText;
    }
    
  }
  xhttp.open("POST", "event_handle.php", false);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("event="+choose);
  
  window.location.href ='event.php';


  }
</script>
  