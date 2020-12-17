<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
if(isset($_POST['id']))
  {$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'tuteeHUT');

$id=$_POST['id'];
$sql="select * from departments where sno=$id";
$temp=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($temp);
$_SESSION['id']=$id;
?>
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<title>TuteeHUT</title>
<style>
  table
  {
    position: relative;
    left:22%;
  }
  td
  {
    padding: 2%;
    margin: 2%;
  }
  .button
  {
    position: relative;
    left:20%;
    color: white;
  border-color: rgb(100, 149, 237);
  text-align: center;
  background-color: rgb(100, 149, 237);
  width:7em;
  height: 3em;
  position:relative;

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
 <h1 style="text-align: center;">UPDATE DEPARTMENT</h1><hr>
<table>
	<form action="update_department_handle.php" method="post" enctype="multipart/form-data">
		
        <tr>
      <td>NAME:</td>
      <td><textarea rows='3' cols='50' name="update_name"><?php echo $result['name'] ?></textarea></td>
      <td><input class="button" type="submit" value="CHANGE" name="name_change"></td>
    </tr>
    <tr>
      <td>DESCRIPTION: </td>
      <td><textarea  rows='4' cols='70' name="update_description"><?php echo $result['definition'] ?>
      </textarea>
       <td><input class="button" type="submit" value="CHANGE" name="description"></td>
    </td>
  </tr>
<tr>
	<td>IMAGE</td>
	<td>
		<img style="height: 10em;width: 10em" src="<?php echo $result['image']?>">
  <input  type="file" name="upload_image"></td>
         <td><input class="button" type="submit" value="CHANGE" name="image"></td>
      </tr>
      
</form>
</table>
</body>
<?php
}
else
{
  echo '<script>alert("PLEASE Fill in an ID TO CONTINUE");';
   echo "window.location.href = 'department_home.php';</script>";
}