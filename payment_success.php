<?php
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'tuteeHUT');
$sql="INSERT INTO log (user_id,event_id) VALUES ($_SESSION[user_id], $_SESSION[event])";
$result=mysqli_query($conn,$sql);

  echo "<script>";
  echo "window.location.href = 'quiz_redirect.php';";
  echo "</script>";

  //redirect to this page if payment is successful
  //else redirect to payment_failure.php
?>
