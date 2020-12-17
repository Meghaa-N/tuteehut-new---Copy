<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'tuteehut');
$username=$_GET['user_name'];
$password=$_GET['password'];
$sql="select * from admin where username='$username' and password='$password'";
$temp=mysqli_query($con,$sql);
$val=mysqli_num_rows($temp);
if($val==0){
	echo '0';
}
else
{
	echo '1';
}

?>