<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php

session_start();
if(isset($_SESSION['name']))
{

  $conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'tuteeHUT');
$sql="SELECT * FROM events";
$result=mysqli_query($conn,$sql); 
$sql1="SELECT * from departments WHERE sno != 11";
$result1=mysqli_query($conn,$sql1);

?>

<!DOCTYPE html>
<style>
  #display td, #display th,#display1 td, #display1 th
  {
    text-align: center;
  }
  #display td,#display1
  {
    padding: 3%;
  }
  #display
  {
    position: relative;
    left:30%;
    border:2px solid black;
    width:40%;
  }

  #display1
  {
    position: relative;
    left:30%;
    border:2px solid black;
    width:40%;
  }
  .button
{
  color: white;
  border-color: tomato;
  text-align: center;
  background-color: tomato;
  width:7em;
  height: 3em;
  position:relative;
  left:300%;
}
hr
{
  border:0.5px solid black;
}
#table1,#table2,#table3
{
  position: relative;
  left:22%;
}
#table1 td,#table2 td,#table3 td
{
  padding:2%;
}
#table2,#table3
{
  width:50%;
}

  </style>


<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>admin_home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
      <li ><a href="../admin/info.php">INSTRUCTOR</a></li>
      
      <li ><a href="../department/department_home.php">DEPARTMENT</a></li>
      <li class="active"><a href="../event/event_home.php">EVENT</a></li>
      <li><a href="../home/logout.php">LOGOUT</a></li>
    </ul>
  </div>
</nav>
  <form action="event_insert.php" method='POST' onsubmit="alert('Change has been implemented!');" enctype="multipart/form-data">

      <h3 style="text-align: center;">INSERT NEW EVENT</h3><hr>
  
  <table id='table1'>

  <tr>
      <td>NAME</td>
      <td><input type="text" rows='3' cols='50' name="new_name" placeholder="Enter name"></td>
    </tr>
    <tr>
      <td>DESCRIPTION</td>
      <td><textarea  rows='4' cols='80' name="new_description" placeholder="Description">
      </textarea><td>
      </td>
    </td>
  </tr>
  <tr>
      <td>DEPARTMENT ID</td>
      <td><input type="text" rows='3' cols='50' name="department_id" placeholder="Department ID"><td>
      </td>
    </td>
  </tr>
<tr>
  <td>IMAGE</td>
      <td>
        <input  type="file" name="new_image">
      </td></tr>
      <tr>
      <td>
        <input class="button" type='submit' name='new' value='INSERT'>
      </td>
    </tr></table><br><hr style="border:0.5px solid black"><br>


    <table id="display">
   <tr>
    <th colspan=3 style="text-align: center; position: center; border-top: 2px solid black;border-bottom: 2px solid black">EVENTS</th>
  </tr>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Department ID</th>
  </tr>
<?php while( $val = mysqli_fetch_assoc($result))
{
  ?>
  <tr>
    <td><?php echo $val['sno'] ?></td>
    <td><?php echo $val['name'] ?></td>
    <td><?php echo $val['department'] ?></td>

  </tr>
<?php } ?></table>

<table id="display1">
<tr>
  <th colspan=3 style="text-align: center; position: center; border-top: 2px solid black;border-bottom: 2px solid black">DEPARTMENT</th></tr>
  <tr>
    <th>Department ID</th>
    <th style="border-right: 2px solid black">Department Name</th>
  </tr>
  <?php while( $val = mysqli_fetch_assoc($result1))
{
  ?>
  <tr>
    <td><?php echo $val['sno'] ?></td>
    <td style="border-right: 2px solid black"><?php echo $val['name'] ?></td>


  </tr>
<?php } ?></table>



  <br><hr style="border:0.5px solid black"><h3 style="text-align: center;">DELETE EVENT</h3><hr style="border:0.5px solid black"><table id="table3">
    <tr>
      <td>ENTER ID to be deleted:</td>
      <td><input type="text" name="id1" placeholder="Enter ID"></td></tr><tr>
      <td>

        <input style="left:100%" class="button" type='submit' name='delete' value='DELETE'>
      </td>
    </tr>
</table></form><hr style="border:0.5px solid black">
<table id="table2">
  
      <h3 style="text-align: center;">UPDATE EVENT</h3><hr style="border:0.5px solid black">

<form action="event_update_home.php" method="post"> 
    
  <tr>
      <td>ENTER ID to be changed:</td>
      <td><input required type="text" rows='3' cols='50' name="id" placeholder="Enter ID"></td>
    </tr>
  
      <td>
        <input class="button" style="left:100%"type='submit' name='update' value='UPDATE'>
      </td></form>
    </table>
    <br><br>
    <!--</tr>
  </table>
</form>-->
</body>
</html>
<?php 
}
else
{
   echo '<script>alert("PLEASE LOGIN TO CONTINUE");';
   echo "window.location.href = '../home/admin_login.php';</script>";

}
?>

