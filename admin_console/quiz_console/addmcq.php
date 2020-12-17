<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
if (isset($_SESSION["name"]))
{
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Add MCQ</title>
<head>
<body>
<div class="container">
    <form action="savemcq.php" method = "post">
    <div class="form-group">
        <label>Question</label>
        <input type = "text" class="form-control" name = "question">
    </div>
    <div class="form-group">
        <label>Option-1</label>
        <input type = "text" class="form-control" name = "option1">
    </div>
    <div class="form-group">
        <label>Option-2</label>
        <input type = "text" class="form-control" name = "option2">
    </div>
    <div class="form-group">
        <label>Option-3</label>
        <input type = "text" class="form-control" name = "option3">
    </div>
    <div class="form-group">
        <label>Option-4</label>
        <input type = "text" class="form-control" name = "option4">
    </div>
    <div class="form-group">
        <label>Answer</label>
        <input type = "text" class="form-control" name = "answer">
    </div>
    <div class="form-group">
        <label>Quiz-ID</label>
        <input type = "text" class="form-control" name = "quizid">
    </div>
    <input type="submit" class="btn btn-info" name = "submit" value = "Add">
  </form>
</div>
</body>
</html>
<?php
}
else
{
    echo '<script>alert("PLEASE LOGIN TO CONTINUE");';
   echo "window.location.href = '../home/admin_login.php';</script>";

}?>