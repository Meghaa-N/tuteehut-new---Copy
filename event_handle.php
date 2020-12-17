<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
$id=$_POST['event'];
$_SESSION['event']=$id;
echo $_SESSION['event'];
?>