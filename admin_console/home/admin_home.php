<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
if(isset($_SESSION["name"]))
{
 include "visibility.php"
?>


<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>TuteeHUT | Admin console</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .images
    {
      height:25%;
      width:25%;
      margin-bottom: 3%;
    }
    .postition
    {
      width:25%;
      padding-left:3%;
      text-align: center;
    }
    button
    {
      background-color: rgba(10,100,200,0.7);
      border-color: rgba(10,100,200,0);
      width:100px;
      height: 40px;
      color: white;
    }
    textarea
    {
      margin:3%
    }
    

  </style>
  <script type="text/javascript">
  function visibility()
  {
    if(<?php echo $quiz_section;?>)
    {
      document.getElementById("quiz_section").innerHTML="HIDE";
      document.getElementById('quiz_section').style.backgroundColor='red';
      document.getElementById('quiz_section').style.borderColor='red';

    }
    else
    {
      document.getElementById("quiz_section").innerHTML = "SHOW";
      document.getElementById('quiz_section').style.backgroundColor='green';
      document.getElementById('quiz_section').style.borderColor='green'
    }

    if(<?php echo $quiz1;?>)
    {
      document.getElementById("quiz1").innerHTML="HIDE";
      document.getElementById('quiz1').style.backgroundColor='red';
      document.getElementById('quiz1').style.borderColor='red';

    }
    else
    {
      document.getElementById("quiz1").innerHTML = "SHOW";
      document.getElementById('quiz1').style.backgroundColor='green';
      document.getElementById('quiz1').style.borderColor='green';
    }

    if(<?php echo $quiz2;?>)
    {
      document.getElementById("quiz2").innerHTML="HIDE";
      document.getElementById('quiz2').style.backgroundColor='red';
      document.getElementById('quiz2').style.borderColor='red';

    }
    else
    {
      document.getElementById("quiz2").innerHTML = "SHOW";
      document.getElementById('quiz2').style.backgroundColor='green';
      document.getElementById('quiz2').style.borderColor='green';
    }

    if(<?php echo $quiz3;?>)
    {
      document.getElementById("quiz3").innerHTML="HIDE";
      document.getElementById('quiz3').style.backgroundColor='red';
      document.getElementById('quiz3').style.borderColor='red';

    }
    else
    {
      document.getElementById("quiz3").innerHTML = "SHOW";
      document.getElementById('quiz3').style.backgroundColor='green';
      document.getElementById('quiz3').style.borderColor='green';
    }




    if(<?php echo $result_section;?>)
    {
      document.getElementById("result_section").innerHTML="HIDE";
      document.getElementById('result_section').style.backgroundColor='red';
      document.getElementById('result_section').style.borderColor='red';

    }
    else
    {
      document.getElementById("result_section").innerHTML = "SHOW";
      document.getElementById('result_section').style.backgroundColor='green';
      document.getElementById('result_section').style.borderColor='green';
    }

    if(<?php echo $result1;?>)
    {
      document.getElementById("result1").innerHTML="HIDE";
      document.getElementById('result1').style.backgroundColor='red';
      document.getElementById('result1').style.borderColor='red';

    }
    else
    {
      document.getElementById("result1").innerHTML = "SHOW";
      document.getElementById('result1').style.backgroundColor='green';
      document.getElementById('result1').style.borderColor='green';
      

    }

    if(<?php echo $result2;?>)
    {
      document.getElementById("result2").innerHTML="HIDE";
      document.getElementById('result2').style.backgroundColor='red';
       document.getElementById('result2').style.borderColor='red';

    }
    else
    {
      document.getElementById("result2").innerHTML = "SHOW";
      document.getElementById('result2').style.backgroundColor='green';
      document.getElementById('result2').style.borderColor='green';
    }

    if(<?php echo $result3;?>)
    {
      document.getElementById("result3").innerHTML="HIDE";
      document.getElementById('result3').style.backgroundColor='red';
      document.getElementById('result3').style.borderColor='red';

    }
    else
    {
      document.getElementById("result3").innerHTML = "SHOW";
      document.getElementById('result3').style.backgroundColor='green';
      document.getElementById('result3').style.borderColor='green';
    }
  }
</script>
  <body onload="visibility()">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TuteeHUT</a>
    </div>
    <ul class="nav navbar-nav" style="float:right">
      <li ><a href="../quiz_console/quiz_console.php" >QUIZ</a></li>
      <li><a href="../quiz_console/view_responses.php">RESPONSES</a></li>
      <li class="active"><a href="../home/admin_home.php">HOME</a></li>
      <li ><a href="../admin/info.php">INSTRUCTOR</a></li>
      
      <li ><a href="../department/department_home.php">DEPARTMENT</a></li>
      <li ><a href="../event/event_home.php">EVENT</a></li>
      <li><a href="../home/logout.php">LOGOUT</a></li>
    </ul>
  </div>
</nav>
</nav>
  <form action="admin_handle.php" method='POST' onsubmit="alert('Change has been implemented!');" enctype="multipart/form-data">
  <table>
   <tr>
    <th colspan=3 style="text-align: center; position: center; border-top: 2px solid black;border-bottom: 2px solid black">HOME</th></tr>
    <tr >
      <th style="text-align: center;">POSITION</th>
      <th style="text-align: center;">CONTENT</th>
      <th >OPTIONS</th></tr>
      <tr>
      <td class="postition" >Welcome Text</td>
     <td style="text-align: center;">
      <textarea style="margin:3%" rows='3' cols='50' name="initial_subheading"><?php $sql="SELECT paragraphs FROM home where headings='initial_subheading'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?></textarea>
    </td>
    <td>
      <button type="submit" name="welcome">CHANGE</button>
    </td>
    </tr>
    <tr>
      <td class="postition">InitiaL HEADING</td>
     <td style="text-align: center;">
        <textarea  rows='3' cols='50' name="initial_heading"><?php $sql="SELECT paragraphs FROM home where headings='initial_heading'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" name="heading">CHANGE</button>
    </tr>

    <!--<tr>
      <td class="postition">Initial Definition</td>
     <td>
        <textarea  rows='3' cols='50'name="initial_definition"><?php $sql="SELECT paragraphs FROM home where headings='initial_definition'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" >CHANGE</button>
    </tr>

    <tr>
      <td class="postition">Back_Ground Image</td>
      <td><img class="images"src="<?php $sql="select name from images where position='background'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>">
     <td>
        <input type="file" name="upload">
    
      <input type='submit' name='image' value='CHANGE'></a>
    </tr>
-->


    <tr>
    <th colspan=2 style="position: center;text-align: center; border-top: 2px solid black">QUIZ SECTION</th>
    <td style="border-top: 2px solid black"><button   name="quiz_section" id="quiz_section" ></button></td></tr>
    <th colspan=2 style="text-align:center; position: center; border-top: 2px solid black">QUIZ 1</th>
  <td style="border-top: 2px solid black" ><button   name="quiz1" id="quiz1" ></button></td></tr>
    <tr>
  <!--<tr>

      <td class="postition">Quiz 1 TYPE</td>
     <td>
        <textarea rows='3' cols='50' name="quiz1_type"><?php $sql="SELECT paragraphs FROM home where headings='quiz1_type'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit">CHANGE</button>
    </tr>-->
  
  <tr>
      <td class="postition">QUIZ 1 TOPIC</td>
     <td style="text-align: center;">
        <textarea rows='3' cols='50' name="quiz1_heading"><?php $sql="SELECT paragraphs FROM home where headings='quiz1_heading'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" name="quiz1_head">CHANGE</button>
      
    </tr>
    <tr>
      <td class="postition">QUIZ 1 DESCRIPTION</td>
     <td style="text-align: center;">
        <textarea rows='3' cols='50' name="quiz1_description"><?php $sql="SELECT paragraphs FROM home where headings='quiz1_description'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" name="quiz1_des" >CHANGE</button>
    </tr>
    <tr>
      <td class="postition">Quiz_1 Image</td>
      <td style="text-align: center;"><img class="images"src="<?php $sql="select name from images where position='quiz1'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>">
     <td>
        <input type="file" name="upload_quiz1">
    
      <input type='submit' name='image1' value='CHANGE'></a>
    </tr>


<tr>
    <th colspan=2 style="text-align:center;position: center; border-top: 2px solid black">QUIZ 2</th>
  <td style="border-top: 2px solid black"><button   name="quiz2" id="quiz2" ></button></td></tr>

    <!--<tr>
      <td class="postition">Quiz 2 TYPE</td>
     <td>
        <textarea rows='3' cols='50' name="quiz2_type"><?php $sql="SELECT paragraphs FROM home where headings='quiz2_type'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit">CHANGE</button>
    </tr>-->
  <tr>
      <td class="postition">QUIZ 2 TOPIC</td>
     <td style="text-align: center;">
        <textarea rows='3' cols='50' name="quiz2_heading"><?php $sql="SELECT paragraphs FROM home where headings='quiz2_heading'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" name="quiz2_head" >CHANGE</button>
    </tr>
    <tr>
      <td class="postition">QUIZ 2 DESCRIPTION</td>
     <td style="text-align: center;">
        <textarea rows='3' cols='50' name="quiz2_description"><?php $sql="SELECT paragraphs FROM home where headings='quiz2_description'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" name="quiz2_des" >CHANGE</button>
    </tr>

<tr>
      <td class="postition">Quiz_2 Image</td>
      <td style="text-align: center;"><img class="images"src="<?php $sql="select name from images where position='quiz2'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>">
     <td>
        <input type="file" name="upload_quiz2">
    
      <input type='submit' name='image2' value='CHANGE'></a>
    </tr>





    <tr>
      <th colspan=2 style="text-align:center;position: center; border-top: 2px solid black">QUIZ 3</th>
  <td style="border-top: 2px solid black"><button   name="quiz3" id="quiz3" ></button></td></tr>
    <!--<tr>
      <td class="postition">Quiz 3 TYPE</td>
     <td>
        <textarea rows='3' cols='50' name="quiz3_type"><?php $sql="SELECT paragraphs FROM home where headings='quiz3_type'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit">CHANGE</button>
    </tr>-->
  <tr>
      <td class="postition">QUIZ 3 TOPIC</td>
     <td style="text-align: center;">
        <textarea rows='3' cols='50' name="quiz3_heading"><?php $sql="SELECT paragraphs FROM home where headings='quiz3_heading'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" name="quiz3_head">CHANGE</button>
    </tr>
    <tr>
      <td class="postition">QUIZ 3 DESCRIPTION</td>
     <td style="text-align: center;">
        <textarea rows='3' cols='50' name="quiz3_description"><?php $sql="SELECT paragraphs FROM home where headings='quiz3_description'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" name="quiz3_des">CHANGE</button>
    </tr>
  <tr>
      <td class="postition">Quiz_3 Image</td>
      <td style="text-align: center;"><img class="images"src="<?php $sql="select name from images where position='quiz3'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>">
     <td>
        <input type="file" name="upload_quiz3">
    
      <input type='submit' name='image3' value='CHANGE'></a>
    </tr>



  
  


   <tr>
    <th colspan=3 style="text-align: center; position: center; border-top: 2px solid black">ABOUT</th></tr>
  <!--<tr>
      <td class="postition">About Page subtext</td>
     <td>
        <textarea rows='3' cols='50' name="about_subtext"><?php $sql="SELECT paragraphs FROM home where headings='about_subtext'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit">CHANGE</button>
    </tr>-->
  <tr>
      <td class="postition">About content</td>
     <td style="text-align: center;">
        <textarea rows='3' cols='50' name="about_definition"><?php $sql="SELECT paragraphs FROM home where headings='About_definition'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" name="about_des">CHANGE</button>
    </tr>
    <tr>
      <td class="postition">About_1 Image</td>
      <td style="text-align: center;"><img style="height: 10em"class="images"src="<?php $sql="select name from images where position='about1'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>">
     <td>
        <input type="file" name="upload_about1">
    
      <input type='submit' name='about1' value='CHANGE'></a>
    </tr>
     <!--<tr>
      <td class="postition">About_2 Image</td>
      <td><img class="images"src="<?php $sql="select name from images where position='about2'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>">
     <td>
        <input type="file" name="upload_about2">
    
      <input type='submit' name='about2' value='CHANGE'></a>
    </tr>-->



  




<!-- <tr>
    <th colspan=3 style="position: center; border-top: 2px solid black">STAGES</th></tr>
  <tr>
      <td class="postition">Stage Page content</td>
     <td>
        <textarea rows='3' cols='50' name="stages_intro"><?php $sql="SELECT paragraphs FROM home where headings='stages_intro'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit">CHANGE</button>
    </tr>
  <tr>
      <td class="postition">Quality Description</td>
     <td>
        <textarea  rows='3' cols='50' name="quality_description"><?php $sql="SELECT paragraphs FROM home where headings='quality_description'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" >CHANGE</button>
    </tr>
    <tr>
      <td class="postition">Instructor Description</td>
     <td>
        <textarea rows='3' cols='50' name="instructor_description"><?php $sql="SELECT paragraphs FROM home where headings='instructor_description'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" >CHANGE</button>
    </tr>
    <tr>
      <td class="postition">Quiz description</td>
     <td>
        <textarea rows='3' cols='50' name="quiz_praise"><?php $sql="SELECT paragraphs FROM home where headings='quiz_praise'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" >CHANGE</button>
    </tr>
    <tr>
      <td class="postition">Certification Description</td>
     <td>
        <textarea rows='3' cols='50' name="get_certified"><?php $sql="SELECT paragraphs FROM home where headings='get_certified'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" >CHANGE</button>
    </tr>-->
    

  



    <!--<tr>
    <th colspan=2 style="position: center; border-top: 2px solid black">RESULT SECTION</th>
    <td style="border-top: 2px solid black"> <button   name="result_section" id="result_section" ></button></td></tr>
    <th colspan=2 style="position: center; border-top: 2px solid black">RESULT 1</th>
  <td style="border-top: 2px solid black"><button   name="result1" id="result1" ></button></td></tr>
    <tr>
  <tr>

      <td class="postition">RESULT 1 DATE</td>
     <td>
        <textarea rows='3' cols='50' name="result1_date"><?php $sql="SELECT paragraphs FROM home where headings='result1_date'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit">CHANGE</button>
    </tr>
  
  <tr>
      <td class="postition">RESULT 1 HEADING</td>
     <td>
        <textarea rows='3' cols='50' name="result1_heading"><?php $sql="SELECT paragraphs FROM home where headings='result1_heading'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" >CHANGE</button>
      
    </tr>
    <tr>
      <td class="postition">RESULT 1 DESCRIPTION</td>
     <td>
        <textarea rows='3' cols='50' name="result1_description"><?php $sql="SELECT paragraphs FROM home where headings='result1_description'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" >CHANGE</button>
    </tr>
    <tr>
 <td class="postition">RESULT 1 Image</td>
      <td><img class="images"src="<?php $sql="select name from images where position='result1'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>">
     <td>
        <input type="file" name="upload_result1">
    
      <input type='submit' name='button_result1' value='CHANGE'></a>
    </tr>

<tr>
    <th colspan=2 style="position: center; border-top: 2px solid black">RESULT 2</th>
  <td style="border-top: 2px solid black"><button   name="result2" id="result2" ></button></td></tr>

    <tr>
      <td class="postition">RESULT 2 TYPE</td>
     <td>
        <textarea rows='3' cols='50'name="result2_date"><?php $sql="SELECT paragraphs FROM home where headings='result2_date'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit">CHANGE</button>
    </tr>
  <tr>
      <td class="postition">RESULT 2 TOPIC</td>
     <td>
        <textarea rows='3' cols='50'name="result2_heading"><?php $sql="SELECT paragraphs FROM home where headings='result2_heading'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" >CHANGE</button>
    </tr>
    <tr>
      <td class="postition">RESULT 2 DESCRIPTION</td>
     <td>
        <textarea rows='3' cols='50' name="result2_description"><?php $sql="SELECT paragraphs FROM home where headings='result2_description'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?></textarea>
    </td>
    <td>
      <button type="submit" >CHANGE</button>
    </tr>

    <tr>
 <td class="postition">RESULT 2 Image</td>
      <td><img class="images"src="<?php $sql="select name from images where position='result2'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>">
     <td>
        <input type="file" name="upload_result2">
    
      <input type='submit' name='button_result2' value='CHANGE'></a>
    </tr>


    <tr>
      <th colspan=2 style="position: center; border-top: 2px solid black">RESULT 3</th>
  <td style="border-top: 2px solid black"><button   name="result3" id="result3" ></button></td></tr>
    <tr>
      <td class="postition">Result 3 TYPE</td>
     <td>
        <textarea rows='3' cols='50' name="result3_date"><?php $sql="SELECT paragraphs FROM home where headings='result3_date'";$result=mysqli_query($conn,$sql);$val = mysqli_fetch_assoc($result);echo $val['paragraphs'];?></textarea>
    </td>
    <td>
      <button type="submit">CHANGE</button>
    </tr>
  <tr>
      <td class="postition">RESULT 3 TOPIC</td>
     <td><textarea rows='3' cols='50' name="result3_heading"><?php $sql="SELECT paragraphs FROM home where headings='result3_heading'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea></td>
    <td>
      <button type="submit" >CHANGE</button>
    </tr>
    <tr>
      <td class="postition">RESULT 3 DESCRIPTION</td>
     <td><textarea rows='3' cols='50' name="result3_description"><?php 
     $sql="SELECT paragraphs FROM home where headings='result3_description'";$result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" >CHANGE</button>
    </tr>
     <tr>
 <td class="postition">RESULT 3 Image</td>
      <td><img class="images"src="<?php $sql="select name from images where position='result3'";
      $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['name'];?>">
     <td>
        <input type="file" name="upload_result3">
    
      <input type='submit' name='button_result3' value='CHANGE'></a>
    </tr>
-->
  
  






   <tr>
    <th colspan=3 style="text-align: center; position: center; border-top: 2px solid black">CONTACT</th></tr>
  <tr>
      <td class="postition">Contact Page Heading</td>
     <td style="text-align: center;">
        <textarea rows='3' cols='50' name="contact_head">
          <?php $sql="SELECT paragraphs FROM home where headings='contact_heading'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" name="contacthead">CHANGE</button>
    </tr>
  <tr>
      <td class="postition">Address</td>
     <td style="text-align: center;">
        <textarea rows='3' cols='50' name="address">
          <?php $sql="SELECT paragraphs FROM home where headings='address'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" name="contact_address">CHANGE</button>
    </tr>
    <tr>
      <td class="postition">Contact Number 1</td>
     <td style="text-align: center;">
        <textarea rows='3' cols='50' name="contact1">
          <?php $sql="SELECT paragraphs FROM home where headings='phone_number1'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" name="phone1" >CHANGE</button>
    </tr>
    <tr>
      <td class="postition">Contact Number2</td>
     <td style="text-align: center;">
        <textarea rows='3' cols='50' name="contact2">
          <?php $sql="SELECT paragraphs FROM home where headings='phone_number2'";
          $result=mysqli_query($conn,$sql);
          $val = mysqli_fetch_assoc($result);
             echo $val['paragraphs'];?>
        </textarea>
    </td>
    <td>
      <button type="submit" name="phone2">CHANGE</button>
    </tr>
 
</form>
</body>
<?php

}
else
{
   echo '<script>alert("PLEASE LOGIN TO CONTINUE");';
   echo "window.location.href = '../home/admin_login.php';</script>";
}
?>

      






      