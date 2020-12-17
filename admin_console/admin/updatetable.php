<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
  $mysqli = new mysqli("localhost","root","","tuteehut");
  if($mysqli->connect_error){
    die("connection error" . $mysqli->error);
  }
  $uname = $mysqli -> real_escape_string($_POST['name']);
  $ujob = $mysqli -> real_escape_string($_POST['job']);
  $udescription = $mysqli -> real_escape_string($_POST['description']);
  $id = $mysqli -> real_escape_string($_POST['id']);
  $earlier_name = $_POST['earlier_image'];
  $sql = "UPDATE `details` SET `id`= '$id',`name`='$uname',`job`='$ujob',`description`='$udescription' WHERE `id` = $id";
  $msg = "";
  //echo $uname . $job . $udescription
  if (isset($_POST['submit'])) {

  $filename = $_FILES["image"]["name"];
  //echo $filename;
  if(isset($filename)){
  $tempname = $_FILES["image"]["tmp_name"];
  $folder = "uploaded_images/".$filename;
  if (move_uploaded_file($tempname, $folder))  {
            echo $msg = "Image uploaded successfully";
            $sql = "UPDATE `details` SET `id`= '$id',`name`='$uname',`job`='$ujob',`description`='$udescription', `image`='$filename' WHERE `id` = $id";

        }else{
            echo $msg = "Failed to upload image";
      }
  }
}

    //$sql = "INSERT INTO `details`(`name`, `job`, `description`, `image`) VALUES ('$name', '$job', '$description', '$filename' )";
    if($mysqli->query($sql)){
      //echo " data inserted successfully";
      echo "<script>";
      echo "alert('Details sent to database successfully!!');";
      echo "window.location.href = 'info.php';";
      echo "</script>";
    }
    else{
      //echo 'query error' . $mysqli->error;
      echo "<script>";
      echo "alert('unable to update data');";
      echo "window.location.href = 'info.php';";
      echo "</script>";
    }
?>
