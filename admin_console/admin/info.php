<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
if (isset($_SESSION['name']))
{
  include('db_connect.php');
  //echo 'Host information: '.$mysqli->host_info;
  //echo '<br>';
  //echo 'Protocol version: '.$mysqli->protocol_version;
  $sql = "SELECT * FROM `details`";
  $result = mysqli_query($mysqli, $sql);
  $details = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //print_r($details);
  mysqli_free_result($result);
  mysqli_close($mysqli);

/*
  include('db_connect.php');
  $id = $mysqli -> real_escape_string($_POST['id']);
  echo $id;
  $sql = "SELECT `name`, `job`, `description`, `image` FROM `details` WHERE  `id` = $id";
  $result = mysqli_query($mysqli, $sql);
  $details = mysqli_fetch_all($result, MYSQLI_ASSOC);
  print_r($details);
*/
  /*
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'Instructors';
  $db_port = 8889;

  $mysqli = mysqli_connect(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
  if ($mysqli->connect_error) {
      echo 'Errno: '.$mysqli->connect_errno;
      echo '<br>';
      echo 'Error: '.$mysqli->connect_error;
      exit();
    }
    //echo 'Success: A proper connection to MySQL was made.';

  //$name = "$_POST['name']";
  //$job = "$_POST['job']";
  //$description = "$_POST['description']";

  if(isset($_POST['submit'])){

            $name = mysqli_real_escape_string($mysqli, $_POST['name']);
            $job = mysqli_real_escape_string($mysqli, $_POST['job']);
            $description = mysqli_real_escape_string($mysqli, $_POST['description']);
  }


  $name = mysqli -> real_escape_string($_POST['name'];
  $job = mysqli -> real_escape_string($_POST['job'];
  $description = mysqli -> real_escape_string($_POST['description'];
  //create sql
  $sql = "INSERT INTO `details`(`name`, `job`, `description`) VALUES ('$name', '$job', $description )";
  //save to db
  if(mysqli_query($mysqli, $sql)){
    //Success
    //header('location: tuteehut/instructors.php');
    echo inserted successfully;
  }
  else{
    echo 'query error:' . mysqli_error($mysqli);
  }
//s$mysqli->close();
include('admin/db_connect.php');
//echo 'Host information: '.$mysqli->host_info;
//echo '<br>';
//echo 'Protocol version: '.$mysqli->protocol_version;
$sql = "SELECT * FROM `details`";
$result = mysqli_query($mysqli, $sql);
$details = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($mysqli);
*/
?>


<!--
<link href="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/css" rel="stylesheet">
<link rel="stylesheet" href="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/font-awesome.min.css">
<link rel="stylesheet" href="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/A.animate.css+owl.carousel.min.css+owl.theme.default.min.css+magnific-popup.css+bootstrap-datepicker.css+jquery.timepicker.css+flaticon.css+style.css,Mcc.kvjnZeWn2e.css.pagespee.css">
-->

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<!--   <link href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/css" rel="stylesheet">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/font-awesome.min.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/animate.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/owl.carousel.min.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/owl.theme.default.min.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/magnific-popup.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/bootstrap-datepicker.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.timepicker.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/flaticon.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style><script type="text/javascript" charset="UTF-8" src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/util.js.download"></script><script type="text/javascript" charset="UTF-8" src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/AuthenticationService.Authenticate"></script></head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
   <style media="screen">
     .dabba{
       padding-left: 30px;
       padding-bottom: 20px;
       padding-top: 20px;
     }
     table, td, th{
       padding: 10px;
     }
   </style>
     <title></title>
   </head>
   <body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TuteeHUT</a>
    </div>
    <ul class="nav navbar-nav" style="float:right">
      <li ><a href="../quiz_console/quiz_console.php" >QUIZ</a></li>
      <li><a href="../quiz_console/view_responses.php">RESPONSES</a></li>
      <li ><a href="../home/admin_home.php">HOME</a></li>
      <li class="active"><a href="../admin/info.php">INSTRUCTOR</a></li>
      
      <li ><a href="../department/department_home.php">DEPARTMENT</a></li>
      <li ><a href="../event/event_home.php">EVENT</a></li>
      <li><a href="../home/logout.php">LOGOUT</a></li>
    </ul>
  </div>
</nav>
     <div class="dabba">
     <h3> Add Instructor </h3>
     <form action="insert.php" method="POST" enctype="multipart/form-data" >
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Name</label>
        <!--<textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="name" value="<?php echo htmlspecialchars($name); ?>"></textarea>-->
        <input type="text" name="name">
        </div>
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Job title</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="job"></textarea>
        </div>
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
      </div>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
     </form>
     <br>
     <h3>ID and instructors name: </h3>
     <table class="table-bordered table-dark">
       <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Job title</th>
         <th>Description
         </th>
       </tr>
       <?php foreach($details as $detail){  ?>
        <tr>
          <td><?php echo htmlspecialchars($detail['id']); ?></td>
          <td><?php echo htmlspecialchars($detail['name']); ?></td>
          <td><?php echo htmlspecialchars($detail['job']); ?></td>
          <td><?php echo htmlspecialchars($detail['description']); ?></td>
        </tr>
      <?php } ?>
     </table>
     <br>
     <h3>Update Details</h3>
     <form action="update.php" method="POST" enctype="multipart/form-data" >
       <label>Enter id of the instructor:</label>
       <input type="number" name="id" value="id" min="0">
       <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
    </form>
     <br>
     <h3>Delete Details</h3>
     <form action="delete.php" method="POST" enctype="multipart/form-data" >
       <label>Enter id of the instructor:</label>
       <input type="number" name="id" value="id" min="0">
       <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

   </body>
 </html>
 <?php

}

else
{
    echo '<script>alert("PLEASE LOGIN TO CONTINUE");';
   echo "window.location.href = '../home/admin_login.php';</script>";
}?>
