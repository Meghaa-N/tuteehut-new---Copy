<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'tuteehut';

$mysqli = mysqli_connect(
  $db_host,
  $db_user,
  $db_password,
  $db_db
);
if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  //echo 'Success: A proper connection to MySQL was made.';
  //echo '<br>';
?>
