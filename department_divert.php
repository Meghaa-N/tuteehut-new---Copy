<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
$id=$_GET['identity'];
$_SESSION['department']=$id;
echo $_SESSION['department'];
?>