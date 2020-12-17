<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
if(isset($_POST['id']))
  {
    $conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'tuteeHUT');

$id=$_POST['id'];
$sql="select * from events where sno=$id";
$temp=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($temp);
$_SESSION['id']=$id;
?>
<script>
  function visibility(){
  if(<?php echo $result['visibility'] ?>){
    
    document.getElementById("visible1").innerHTML = "HIDE";
  document.getElementById('visible1').style.backgroundColor='red';
      document.getElementById('visible1').style.borderColor='red';
   
    }
    else
    {
      

      document.getElementById("visible1").innerHTML = "SHOW";
      document.getElementById('visible1').style.backgroundColor='green';
      document.getElementById('visible1').style.borderColor='green';
      
    }
  }
</script>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>TuteeHUT</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
  .button
{
  color: white;
  border-color: dodgerBlue;
  text-align: center;
  background-color: dodgerBlue;
  width:7em;
  height: 3em;
  position:relative;
  }
  </style>
</head>
<body onload="visibility()">
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
      <li  class="active"><a href="../event/event_home.php">EVENT</a></li>
      <li><a href="../home/logout.php">LOGOUT</a></li>
    </ul>
  </div>
</nav>
<table>
	<form action="event_update.php" method="post" enctype="multipart/form-data">
		<tr>
           <th>UPDATE EVENTS</th>
        </tr>
        <tr>
      <td>NAME:</td>
      <td><textarea rows='3' cols='50' name="update_name"><?php echo $result['name'] ?></textarea></td>
      <td><input class="button" type="submit" name="name_change" value="CHANGE"></td>
    </tr>
    <tr>
      <td>DESCRIPTION</td>
      <td><textarea  rows='4' cols='80' name="update_description"><?php echo $result['definition'] ?></textarea></td>
      <td><input class="button" type="submit" name="description_change" value="CHANGE"></td></tr>
  <tr>
      <td>DEPARTMENT ID</td>
      <td><textarea  rows='4' cols='20' name="update_department"><?php echo $result['department'] ?>
      </textarea>
    </td>
    <td><input class="button" type="submit" name="department_change" value="CHANGE"></td>

  </tr>
<tr>
	<td>IMAGE</td>
	<td>
		<img style="height: 10em;width: 10em" src="<?php echo $result['image']?>">
  
      
        <input  type="file" name="upload_image"></td>
        <td><input class="button" type="submit" name="image_change" value="CHANGE"></td>

      </tr>
    <tr>
      <br>
  <td>VISIBILITY</td>
        <td>
          <button type="submit" id = 'visible1' name="visible"></button>

        </form></td>
    </tr>
</form>
</table>
</body>
<?php 
}
else
{
   echo '<script>alert("PLEASE Fill in an ID TO CONTINUE");';
   echo "window.location.href = 'event_home.php';</script>";

}