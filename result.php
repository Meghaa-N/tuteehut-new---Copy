<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
include "config.php";
$answers = $_POST;
$score = 0;
$ques = " ";
$quizid = $_SESSION['event'];

$name = $_SESSION['name'];
$phone = $_SESSION['phone'];

foreach ($answers as $id => $answer){
	$qid = "SELECT * FROM questions WHERE id = $id";
	$result = mysqli_query($con,$qid);
	$row = mysqli_fetch_assoc($result);
	if(strtolower($row['answer']) == strtolower($answer)) 
			$score++;
	$ques = $ques.$answer.",";
}
foreach ($answers as $id => $answer){
	$qid = "SELECT * FROM fillups WHERE id = $id";
	$result = mysqli_query($con,$qid);
	$row = mysqli_fetch_assoc($result);
	if(strtolower($row['answer']) == strtolower($answer))
		$score++;
}
$_SESSION["marks"] = $score;
$query = "INSERT INTO quiz_details (name,phone,answer,score,quizid)VALUES('$name','$phone','$ques','$score','$quizid')";
if(mysqli_query($con,$query)){
	echo "<script>";
	echo "window.location.href = 'end.php';";
	echo "</script>";
}
else{
	echo "<script>";
	echo "alert('Oops...Try again!!');";
	echo "window.location.href = 'quiz.php';";
	echo "</script>";
}
mysqli_close($con);
?>