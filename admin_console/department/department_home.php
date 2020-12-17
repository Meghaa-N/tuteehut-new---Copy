<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
if(isset($_SESSION["name"]))
{
 
 $conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'tuteeHUT');

$sql="SELECT * FROM departments WHERE sno != 11";
          $result=mysqli_query($conn,$sql);
         
?>

<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>TuteeHUT | Admin console</title>
  <head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .images
    {
      height:15%;
      width:15%;
    }
    .postition
    {
      width:25%;
      padding-left:3%;
      text-align: center;
    }
    button
    {
      background-color: rgba(10,100,200,0.7);
      border-color: rgba(10,100,200,0);
      width:100px;
      height: 40px;
      color: white;
    }
    #table1
    {
      position: relative;
      left:25%;
      width:50%;
      
      text-align: center;
      border:2px solid black;
      border-bottom: 2px solid black;
    }
    #table2,#table3,#table4
    {
      position: relative;
      left:22%;
      width:65%;
    }
    #table1 th

    {
      text-align: center;
      border-bottom: 2px solid black;
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
#table2 td, #table3 td,#table4 td
{
  padding:2%;
}
hr
{
  border:0.5px solid black;
}


  </style>

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
      
      <li class="active" ><a href="../department/department_home.php">DEPARTMENT</a></li>
      <li ><a href="../event/event_home.php">EVENT</a></li>
      <li><a href="../home/logout.php">LOGOUT</a></li>
    </ul>
  </div>
</nav>

  <form action="department_insert.php" method='POST' onsubmit="alert('Change has been implemented!');" enctype="multipart/form-data">
    
  
<h3 style="text-align: center;">INSERT NEW DEPARTMENT</h3><hr>
<table id="table2">
      
  
  <tr>
      <td>NAME</td>
      <td><input type="text" rows='4' cols='45' name="new_name" placeholder="Enter name"></td>
    </tr>
    <tr>
      <td>DESCRIPTION</td>
      <td><textarea  rows='5' cols='70' name="new_description" placeholder="Description">
      </textarea><td>
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
    </tr>
    <tr>
      </table><br><hr><br><br>
      <table id="table1">
   
  <tr>
    <th>ID</th>
    <th>Name</th>
  </tr>
<?php while( $val = mysqli_fetch_assoc($result))
{
  ?>
  <tr>
    <td style="border-right: 2px solid black"><?php echo $val['sno'] ?></td>
    <td><?php echo $val['name'] ?></td>

  </tr>
<?php } ?>
<tr></tr></table><hr style="background-color: black">
      <h3 style="text-align: center;">DELETE DEPARTMENT</h3><hr>
      

      <table id="table3">
        <tr>
      <td>ENTER ID to be deleted:</td>
      <td><input type="text" name="id1" placeholder="Enter ID"></td>
    </tr>
      <tr>
      <td>
    
        <input style="left:80%" class="button" type='submit' name='delete' value='DELETE'>
      </td>
    </tr>
</table>

</form>
<br><hr><h3 style="text-align: center;">UPDATE DEPARTMENT(Enter 11 to update the general quiz)</h3><hr>
<form action="update_department.php" method="post" enctype="multipart/form-data"> <table id="table4">
    
  <tr>
      <td>ENTER ID to be changed:</td>
      <td><input type="text" rows='3' cols='50' name="id" placeholder="Enter ID" required></td>
    </tr>
  
    
    <!--<tr>
      <td>NAME:</td>
      <td><input type="text" rows='3' cols='50' name="update_name" placeholder="Enter Name"></td>
    </tr>
    <tr>
      <td>DESCRIPTION</td>
      <td><textarea  rows='4' cols='80' name="update_description" placeholder="Description">
      </textarea><td>
      </td>
    </td>
  </tr>
<tr>
  <td>IMAGE</td>
      <td>
        <input  type="file" name="update_image">
      </td></tr>
      <tr>-->
      <td>
        <input style="left:80%"class="button" type='submit' name='update' value='UPDATE'>
      </td></table><br><br>
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
      
