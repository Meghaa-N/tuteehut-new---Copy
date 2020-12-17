<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php 
include('db_connect.php');
$id = $mysqli -> real_escape_string($_POST['id']);
//echo $id;
$sql = "DELETE FROM `details` WHERE `id`=$id";
if ($mysqli->query($sql) === TRUE) {
  //echo "Record deleted successfully";
    echo "<script>";
    echo "alert('Details deleted successfully!!');";
    echo "window.location.href = 'info.php';";
    echo "</script>";
} else {
  //echo "Error deleting record: " . $mysqli->error;
    echo "<script>";
      echo "alert('Error deleting the record');";
      echo "window.location.href = 'info.php';";
      echo "</script>";
}
 ?>