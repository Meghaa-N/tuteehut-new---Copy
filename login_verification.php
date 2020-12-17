<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'tuteehut');
$email=$_POST['em'];
$password=$_POST['password'];
$sql="select * from user_details where Email='$email' and password='$password'";
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