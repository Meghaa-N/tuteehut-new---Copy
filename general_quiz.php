<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
$_SESSION['department'] = 11;
echo "<script>";
echo "window.location.href = 'department_definition.php';";
echo "</script>";
 ?>