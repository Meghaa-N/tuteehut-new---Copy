<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
include "config.php";
if(isset($_POST["submit"])){
$question = $_POST["question"];
$option1 = $_POST["option1"];
$option2 = $_POST["option2"];
$option3 = $_POST["option3"];
$option4 = $_POST["option4"];
$answer = $_POST["answer"];
$quizid = $_POST["quizid"];

$query = "INSERT INTO questions (question,option1,option2,option3,option4,answer,quizid)VALUES('$question','$option1','$option2','$option3','$option4','$answer','$quizid')";
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
