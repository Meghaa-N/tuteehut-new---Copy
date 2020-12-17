
<!DOCTYPE html>
<!-- saved from url=(0059)https://preview.colorlib.com/theme/studylab/instructor.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Blah</title>
<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--
<link href="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/css" rel="stylesheet">
<link rel="stylesheet" href="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/font-awesome.min.css">
<link rel="stylesheet" href="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/A.animate.css+owl.carousel.min.css+owl.theme.default.min.css+magnific-popup.css+bootstrap-datepicker.css+jquery.timepicker.css+flaticon.css+style.css,Mcc.kvjnZeWn2e.css.pagespee.css">
-->
<link href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/css" rel="stylesheet">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/font-awesome.min.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/animate.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/owl.carousel.min.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/owl.theme.default.min.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/magnific-popup.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/bootstrap-datepicker.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.timepicker.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/flaticon.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/style.css">

<style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style><script type="text/javascript" charset="UTF-8" src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/util.js.download"></script><script type="text/javascript" charset="UTF-8" src="./StudyLab_instructor - Free Bootstrap 4 Template by Colorlib_files/AuthenticationService.Authenticate"></script></head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<a class="navbar-brand" href="https://preview.colorlib.com/theme/studylab/index.html"><span>Study</span>Lab</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto" >
<li  class="nav-item"><a href="admin_home.php" class="nav-link" style='color:black'>Home PAGE</a></li>
<li class="nav-item"><a href="quiz_console/quiz.php" class="nav-link" style="color: black">Quiz</a></li>
<li class="nav-item active"><a href="admin/info.php" class="nav-link" style="color: black">Department</a></li>

</ul>
</div>
</div>
</nav>

<?php
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
</head>
<div class="container">
<h3>Multiple choice questions</h3>
<button type = "button" class="btn btn-danger"><a href = "addmcq.php" style = "text-decoration : none;color : white;">Add MCQ</a></button>
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
                <th>Visibility</th>
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
                        <input type="submit" value="Delete" name="delete" class="btn btn-primary">
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
<h3>Fill in the blanks</h3>
<button type = "button" class="btn btn-danger"><a href = "addfillups.php" style = "text-decoration : none;color : white;">Add Fill up</a></button>         
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Answer</th>
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
                        <input type="submit" value="Delete" name="delete" class="btn btn-primary">
                    </form>
                    </td>
                </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
</div>
<?php
mysqli_close($con);
?>