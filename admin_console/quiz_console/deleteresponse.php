<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
include "config.php";
if(isset($_POST["delete"])){
$id = $_POST['id'];
$query = "DELETE FROM quiz_details WHERE id = $id";

if(isset($_POST['id'])){
    if(mysqli_query($con,$query)){
        echo "<script>";
        echo "alert('Response deleted successfully');";
    	echo "window.location.href = 'view_responses.php';";
    	echo "</script>";
    }else{
        echo "<script>";
    	echo "alert('Error deleting response');";
    	echo "window.location.href = 'view_responses.php';";
    	echo "</script>";
    }
}
else{
    echo "Error";
}

mysqli_close($con);
}
else
    {
    echo '<script>alert("PLEASE LOGIN TO CONTINUE");';
   echo "window.location.href = '../home/admin_login.php';</script>";

}?>
