<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'tuteeHUT');

if(isset($_POST['name_change'])) {
  $name=$_POST['update_name'];
  $sql="update departments set name='$name' where sno=$_SESSION[id]";
  $temp=mysqli_query($conn,$sql);
}


if(isset($_POST['description'])) {
  $definition=$_POST['update_description'];
  $sql="update departments set definition='$definition' where sno=$_SESSION[id]";
  $temp=mysqli_query($conn,$sql);
}


if(isset($_POST["image"])) {
  $namefile=basename($_FILES["upload_image"]["name"]);
$target_dir = "../home/uploads/";
$target_file = $target_dir . basename($_FILES["upload_image"]["name"]);
//echo $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(empty($_FILES["upload_image"]["name"])){
  echo "<script>alert('Some contents are empty...Please try again')</script>";}
else{
  $check = getimagesize($_FILES["upload_image"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "<script>alert('File is not an image.')</script>";
    $uploadOk = 0;
  }


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
  $uploadOk = 0;
  echo "<script>window.location.href = 'department_home.php';</script>";
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.')</alert>";
  echo "<script>window.location.href = 'department_home.php';</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["upload_image"]["tmp_name"], $target_file)) {
    $sql="update departments set image='$target_file' where sno=$_SESSION[id]";
    if (mysqli_query($conn, $sql)) {
} else {
  echo mysqli_error($conn);
}

    echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["upload_image"]["name"])). " has been uploaded.');window.location.href = 'department_home.php';</script>";
  } else {
    echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
    echo "<script>window.location.href = 'department_home.php';</script>";
  }
}
}
}
echo "<script>window.location.href = 'department_home.php';</script>"

  ?>
