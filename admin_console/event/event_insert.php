<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'tuteeHUT');



if(isset($_POST['new'])) {
  $new_name=$_POST['new_name'];
  $new_definition=$_POST['new_description'];
  $department_id=$_POST['department_id'];
  $namefile=basename($_FILES["new_image"]["name"]);
$target_dir = "../home/uploads/";
$target_file = $target_dir . basename($_FILES["new_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(empty($_FILES["new_image"]["name"])||empty($new_name)||empty($_POST['new_description']))
{
  echo "<script>alert('Some contents are empty! Cannot be inserted!')</script>";

}
else
{
  $check = getimagesize($_FILES["new_image"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "<script>alert('File is not an image.')</script>";
    $uploadOk = 0;
  }


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" )
 {
  echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
  echo "<script>window.location.href = 'event_home.php';</script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0)
 {
  echo "<script>alert('Sorry, your file was not uploaded.')</alert>";
// if everything is ok, try to upload file
} 
else
 {
  if (move_uploaded_file($_FILES["new_image"]["tmp_name"], $target_file)) 
  {
    $sql="insert into events(name,definition,department,image) values('$new_name','$new_definition', $department_id, '$target_file')";
  if (mysqli_query($conn, $sql)) 
  {

  } 
  else 
  {
  echo "<script>alert('Error: ' . $sql . '<br>'' . mysqli_error($conn)')</script>";
  }

  echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["new_image"]["name"])). " has been uploaded.')</script>";
  } 
  else 
  {
    echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
    echo "<script>window.location.href = 'event_home.php';</script>";
  }
}
}
}


if(isset($_POST['delete'])) {
  $id=$_POST['id1'];
  $sql="delete from events where sno=$id";
  $temp=mysqli_query($conn,$sql);
}

echo "<script>window.location.href = 'event_home.php';</script>";
?>