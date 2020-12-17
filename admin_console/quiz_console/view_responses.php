<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
if (isset($_SESSION["name"]))
{
include "config.php";
$query = "SELECT * FROM quiz_details";
$result = mysqli_query($con,$query);
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
      <li ><a href="../quiz_console/quiz_console.php" >QUIZ</a></li>
      <li class="active"><a href="../quiz_console/view_responses.php">RESPONSES</a></li>
      <li ><a href="../home/admin_home.php">HOME</a></li>
      <li ><a href="../admin/info.php">INSTRUCTOR</a></li>
      
      <li ><a href="../department/department_home.php">DEPARTMENT</a></li>
      <li ><a href="../event/event_home.php">EVENT</a></li>
      <li><a href="../home/logout.php">LOGOUT</a></li>
    </ul>
  </div>
</nav>
<div class="container">

    <table class="table table-hover">
        <thead>
            <tr>
                <th>S.No.</th>  
                <th>Name</th>
                <th>Phone</th>
                <th>Answer</th>
                <th>QuizID</th>
                <th>Score</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
                while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['answer'];?></td>
                    <td><?php echo $row['quizid'];?></td>
                    <td>
                    
                    <form action="updatescore.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <input type="text" name="score" value="<?php echo $row['score'];?>">
                        <input type="submit" value="Update score" name="update" class="btn btn-success">
                    </form>
                </td>
                <td>
                    
                    <form action="deleteresponse.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <input type="submit" value="Delete response" name="delete" class="btn btn-danger">
                    </form>
                    <br>
                </td>
                </tr>
                <?php
                $i++;
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