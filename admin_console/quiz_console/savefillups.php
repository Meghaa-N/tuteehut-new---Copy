<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
include "config.php";
if(isset($_POST["submit"])){
$question = $_POST["question"];
$answer = $_POST["answer"];
$quizid = $_POST["quizid"];

$query = "INSERT INTO fillups (question,answer,quizid)VALUES('$question','$answer','$quizid')";
if(mysqli_query($con,$query)){
	echo "<script>";
	echo "alert('Question added successfully!!');";
	echo "window.location.href = 'quiz_console.php';";
	echo "</script>";
}
else{
	echo "Data not inserted";
}
mysqli_close($con);
}
else
{
    echo '<script>alert("PLEASE LOGIN TO CONTINUE");';
   echo "window.location.href = '../home/admin_login.php';</script>";

}?>