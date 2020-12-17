<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
include "config.php";
if(isset($_POST["id"])){
$id = $_POST['id'];
$query = "SELECT * FROM fillups WHERE id = $id";
$result = mysqli_query($con,$query);
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <form action="update2db.php" method = "post">
    <?php
        while($row = mysqli_fetch_assoc($result)){
    ?>
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
    <div class="form-group">
        <label>Question</label>
        <input type = "text" class="form-control" name = "question" value = "<?php echo $row['question'];?>">
    </div>
    <div class="form-group">
        <label>Answer</label>
        <input type = "text" class="form-control" name = "answer" value = "<?php echo $row['answer'];?>">
    </div>
    <div class="form-group">
        <label>Quiz-ID</label>
        <input type = "text" class="form-control" name = "quizid" value = "<?php echo $row['quizid'];?>">
    </div>
    <input type="submit" class="btn btn-info" name = "submit" value = "Submit">
    <?php
    }
    ?>
  </form>
</div>
</body>
<?php
mysqli_close($con);
}
else
{
    echo '<script>alert("PLEASE LOGIN TO CONTINUE");';
   echo "window.location.href = '../home/admin_login.php';</script>";

}?>