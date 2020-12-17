<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
if (isset($_SESSION["name"]))
{
include "config.php";
$query1 = "SELECT * FROM questions";
$query2 = "SELECT * FROM fillups";
$result1 = mysqli_query($con,$query1);
$result2 = mysqli_query($con,$query2);
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TuteeHUT</a>
    </div>
    <ul class="nav navbar-nav" style="float:right">
      <li class="active"><a href="../quiz_console/quiz_console.php" >QUIZ</a></li>
      <li><a href="../quiz_console/view_responses.php">RESPONSES</a></li>
      <li ><a href="../home/admin_home.php">HOME</a></li>
      <li ><a href="../admin/info.php">INSTRUCTOR</a></li>
      
      <li ><a href="../department/department_home.php">DEPARTMENT</a></li>
      <li ><a href="../event/event_home.php">EVENT</a></li>
      <li><a href="../home/logout.php">LOGOUT</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<h3>Multiple choice questions
<button type = "button" class="btn btn-primary"><a href = "addmcq.php" style = "text-decoration : none;color : white;">Add MCQ</a></button></h3><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Option-1</th>
                <th>Option-2</th>
                <th>Option-3</th>
                <th>Option-4</th>
                <th>Answer</th>
                <th>QuizID</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result1)){
            ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['question'];?></td>
                    <td><?php echo $row['option1'];?></td>
                    <td><?php echo $row['option2'];?></td>
                    <td><?php echo $row['option3'];?></td>
                    <td><?php echo $row['option4'];?></td>
                    <td><?php echo $row['answer'];?></td>
                    <td><?php echo $row['quizid'];?></td>
                    <td>
                    <form action="visibility1.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <input type="submit" class="<?php if($row['visibility'] == 1) echo "btn btn-success"; else echo "btn btn-danger";?>" value = "<?php if($row['visibility'] == 1) echo "Visible"; else echo "Not visible";?>">
                    </form>
                    <br>
                    <form action="update1.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <input type="submit" value="Update" name="update" class="btn btn-warning">
                    </form>
                    <br>
                    <form action="delete1.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <input type="submit" value="Delete" name="delete" class="btn btn-danger">
                    </form>
                    </td>
                </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
</div>
<div class="container">
<h3>Fill in the blanks
<button type = "button" class="btn btn-primary"><a href = "addfillups.php" style = "text-decoration : none;color : white;">Add Fill up</a></button></h3><br>        
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Answer</th>
                <th>QuizID</th>
                <th>Visibility</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result2)){
            ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['question'];?></td>
                    <td><?php echo $row['answer'];?></td>
                    <td><?php echo $row['quizid'];?></td>
                    <td>
                    <form action="visibility2.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <input type="submit" class="<?php if($row['visibility'] == 1) echo "btn btn-success"; else echo "btn btn-danger";?>" value = "<?php if($row['visibility'] == 1) echo "Visible"; else echo "Not visible";?>">
                    </form>
                    <br>
                    <form action="update2.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <input type="submit" value="Update" name="update" class="btn btn-warning">
                    </form>
                    <br>
                    <form action="delete2.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <input type="submit" value="Delete" name="delete" class="btn btn-danger">
                    </form>
                    </td>
                </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
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