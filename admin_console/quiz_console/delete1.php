<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
include "config.php";
$id = $_POST['id'];
$query = "DELETE FROM questions WHERE id = $id";

if(isset($_POST['id'])){
    if(mysqli_query($con,$query)){
        echo "<script>";
    	echo "window.location.href = 'quiz_console.php';";
    	echo "</script>";
    }else{
        echo "<script>";
    	echo "alert('Error deleting record');";
    	echo "window.location.href = 'quiz_console.php';";
    	echo "</script>";
    }
}
else{
    echo "Error";
}

mysqli_close($con);
?>