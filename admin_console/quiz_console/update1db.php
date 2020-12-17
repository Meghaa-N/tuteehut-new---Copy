<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
include "config.php";
$id = mysqli_real_escape_string($con, $_POST["id"]);
$question = mysqli_real_escape_string($con, $_POST["question"]);
$option1 = mysqli_real_escape_string($con, $_POST["option1"]);
$option2 = mysqli_real_escape_string($con, $_POST["option2"]);
$option3 = mysqli_real_escape_string($con, $_POST["option3"]);
$option4 = mysqli_real_escape_string($con, $_POST["option4"]);
$answer = mysqli_real_escape_string($con, $_POST["answer"]);
$quizid = mysqli_real_escape_string($con, $_POST["quizid"]);

$query = "UPDATE questions
SET question = '$question', option1 = '$option1', option2 = '$option2', option3 = '$option3', option4 = '$option4', answer = '$answer',quizid = '$quizid'
WHERE id = $id";

if(isset($_POST['submit'])){
    if(mysqli_query($con,$query)){
        echo "<script>";
        echo "alert('Record updated successfully');";
		echo "window.location.href = 'quiz_console.php';";
		echo "</script>";
    }else{
        echo "<script>";
		echo("Error Updating record: " . mysqli_error($con));
		echo "window.location.href = 'quiz_console.php';";
		echo "</script>";
    }
}
else{
    echo "Error";
}
mysqli_close($con);
?>
