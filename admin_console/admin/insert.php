<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
  include('db_connect.php');
  //$mysqli = new mysqli("localhost","root","","Instructors");
  if($mysqli->connect_error){
    die("connection error" . $mysqli->error);
}
  $name = $mysqli -> real_escape_string($_POST['name']);
  $job = $mysqli -> real_escape_string($_POST['job']);
  $description = $mysqli -> real_escape_string($_POST['description']);
  if (isset($_POST['submit'])) {

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploaded_images/".$filename;
  //$msg = '';
  //$target = "uploaded_images/" . basename($_FILES['image']['name']);
  //$image = $_FILES['image']['name'];
  /*
  $file = $_FILES['image'];
    if(isset($file)) {
        $filename = $_FILES['image']['name'];
        $filetmp = $_FILES['image']['tmp_name'];
        $filesize = $_FILES['image']['size'];
        $fileerror = $_FILES['image']['error'];
        $filetype = $_FILES['image']['type'];

        $fileext = explode('.', $filename);
        $fileactualext = strtolower(end($fileext));

        $allowed = array('jpg', 'jpeg', 'png');
        if (in_array($fileactualext, $allowed)) {
            if ($fileerror === 0) {
                $filenamenew = uniqid('', true) . "." . $fileactualext;
                $filedestination = "uploaded_images/" . $filenamenew;
                move_uploaded_file($filetmp, $filedestination);
            } else {
                //$_SESSION['data'] = $_POST;
                echo "<script>";
                echo "alert('Image not uploaded...try again!!');";
                //echo "window.location.href = 'contact.php';";
                echo "</script>";
                die('Not Uploaded');
            }else {
            //$_SESSION['data'] = $_POST;
            echo "<script>";
            echo "alert('File type not supported...try again!!');";
            //echo "window.location.href = 'contact.php';";
            echo "</script>";
            die('Not Uploaded');
        }

      }
      */
  $sql = "INSERT INTO `details`(`name`, `job`, `description`, `image`) VALUES ('$name', '$job', '$description', '$filename' )";
  //$sql = "INSERT INTO `details`(`name`, `job`, `description`) VALUES ('$name', '$job', '$description' )";

  //$sql = "INSERT INTO 'details'('name', 'job', 'description', 'image') VALUES ('$name', '$job', '$description', '$filenamenew' )";
  
  //move_uploaded_file($tempname, $folder);
  
  if (move_uploaded_file($tempname, $folder))  {
            //echo $msg = "Image uploaded successfully";
            echo "<script>";
            echo "alert('Details sent to database successfully!!');";
            echo "window.location.href = 'info.php';";
            echo "</script>";
        }else{
            echo "<script>";
            echo "alert('Image not uploaded');";
            echo "window.location.href = 'info.php';";
            echo "</script>";
            //echo $msg = "Failed to upload image";
      }
  if($mysqli->query($sql)){
    //Success
    //header('location: tuteehut/instructors.php');
    echo "inserted successfully";
  }
  else{
    echo 'query error' . $mysqli->error;
  }
}
?>
  