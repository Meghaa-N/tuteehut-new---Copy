<?php
session_start();
echo "<script>";
echo "alert('Oops!!Payment failed');";
echo "window.location.href = 'logged.php';";
echo "</script>";
  //redirect to this page if payment is failiure
  //else redirect to payment_success.php
?>