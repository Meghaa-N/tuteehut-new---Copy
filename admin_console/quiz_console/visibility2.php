<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
include "config.php";
$id = $_POST['id'];
$query = "SELECT * FROM fillups WHERE id = $id";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$visibility = $row['visibility'];

if(isset($_POST['id'])){
    if($visibility == 1) {
        $query = "UPDATE fillups SET visibility = 0 where id=$id";
    }else{
        $query = "UPDATE fillups SET visibility = 1 where id=$id";
    }
    if(mysqli_query($con,$query)){
        echo "<script>";
		echo "window.location.href = 'quiz_console.php';";
		echo "</script>";
    }else{
        echo "<script>";
		echo "alert('Error Updating record');";
		echo "window.location.href = 'quiz_console.php';";
		echo "</script>";
    }

    mysqli_close($con);
}
else{
    echo "Error";
}