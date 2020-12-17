<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'tuteehut');


$username=$_POST['user_name'];
$pass=$_POST['password'];


$sql="select * from admin where username='$username' and password='$pass'";
$result=mysqli_query($con,$sql);
$temp=mysqli_fetch_assoc($result);
$_SESSION['name']=$temp['username'];
header("location: ../quiz_console/quiz_console.php");

?>