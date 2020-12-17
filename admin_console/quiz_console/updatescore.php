<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
include "config.php";
if(isset($_POST["update"])){
$id = $_POST["id"];
$score = $_POST["score"];
echo $score;
$query = "UPDATE quiz_details SET score = '$score' WHERE id = '$id'";

if(isset($_POST['update'])){
    if(mysqli_query($con,$query)){
        echo "<script>";
        echo "alert('Score updated successfully');";
		echo "window.location.href = 'view_responses.php';";
		echo "</script>";
    }else{
        echo "<script>";
		echo("Error Updating record: " . mysqli_error($con));
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

