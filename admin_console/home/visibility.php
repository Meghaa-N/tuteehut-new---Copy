<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'tuteeHUT');




$sql="SELECT visibility FROM home where headings='quiz'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
$quiz_section=$val["visibility"];


$sql="SELECT visibility FROM home where headings='quiz1'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
$quiz1=$val["visibility"];

$sql="SELECT visibility FROM home where headings='quiz2'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
$quiz2=$val["visibility"];

$sql="SELECT visibility FROM home where headings='quiz3'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
$quiz3=$val["visibility"];




$sql="SELECT visibility FROM home where headings='result'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
$result_section=$val["visibility"];


$sql="SELECT visibility FROM home where headings='result1'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
$result1=$val["visibility"];

$sql="SELECT visibility FROM home where headings='result2'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
$result2=$val["visibility"];

$sql="SELECT visibility FROM home where headings='result3'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
$result3=$val["visibility"];

      
/*$sql="SELECT paragraphs FROM home where headings='initial_subheading'";
$result=mysqli_query($conn,$sql);
$val = mysqli_fetch_assoc($result);
echo $val['paragraphs'];
*/
?>