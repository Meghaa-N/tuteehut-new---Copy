<?php
session_start();
$i=0;
$flag=0;
$increment="select max(ID) m from user_details";
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'tuteehut');
$check=mysqli_query($con,$increment);
if($check)
{
	$val = mysqli_fetch_assoc($check);
}
$i=$val['m']+1;
$name=$_POST['name'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$dept=$_POST['dept'];
$address=$_POST['address'];
$pass=$_POST['password'];
$pass1=$_POST['cpassword'];
$year=$_POST['year'];

$sql="select * from user_details where Email='$email'";
$temp=mysqli_query($con,$sql);
$result=mysqli_fetch_assoc($temp);
$val=mysqli_num_rows($result);
if($val==0){
	$flag=0;
$reg="insert into user_details(ID,Name,Email,phone,department,year,address,password) values($i,'$name','$email','$phno','$dept',$year,'$address','$pass')";

$h=mysqli_query($con,$reg);
if ($h) {
     $_SESSION['email']=$email;
     $_SESSION['name']=$name;
     $_SESSION['phone']=$phno;
     $_SESSION['user_id']=$i;
     header("location: logged.php");

	     	}
else {
    echo mysqli_error($con);
}
}
else
{
	$flag=1;
	 header("location: HomePage.php");
}

?>

