<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'tuteehut');
$sql="select * from events where department=$_SESSION[department]";
$temp=mysqli_query($con,$sql);

$text="";

 while ($row = mysqli_fetch_assoc($temp)) {
        $text=$text."<li id='".$row['sno']."'onclick='event_divert(this.id)'>".$row['name']."</li>";
    }
    echo $text;
?>