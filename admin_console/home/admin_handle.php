<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'tuteeHUT');
if(isset($_POST['welcome'])){
$change=$_POST['initial_subheading'];
$sql="update home set paragraphs='$change' where headings='initial_subheading'";
$result=mysqli_query($conn,$sql);
}


if(isset($_POST['heading'])){          
$change1=$_POST['initial_heading'];
$sql="update home set paragraphs='$change1' where headings='initial_heading'";
$result=mysqli_query($conn,$sql);
}
      
/*$change2=$_POST['initial_definition'];
$sql="update home set paragraphs='$change2' where headings='initial_definition'";
$result=mysqli_query($conn,$sql);*/



if(isset($_POST['contacthead'])){
$change3=$_POST['contact_head'];
$sql="update home set paragraphs='$change3' where headings='contact_heading'";
$result=mysqli_query($conn,$sql);}

if(isset($_POST['contact_address'])){

$change3=$_POST['address'];
$sql="update home set paragraphs='$change3' where headings='address'";
$result=mysqli_query($conn,$sql);}

if(isset($_POST['phone1'])){
$change4=$_POST['contact1'];
$sql="update home set paragraphs='$change4' where headings='phone_number1'";
$result=mysqli_query($conn,$sql);
}

/*$change5=$_POST['about_subtext'];
$sql="update home set paragraphs='$change5' where headings='about_subtext'";
$result=mysqli_query($conn,$sql);*/

if(isset($_POST['about_des'])){
$change10=$_POST['about_definition'];
$sql="update home set paragraphs='$change10' where headings='About_definition'";
$result=mysqli_query($conn,$sql);}

if(isset($_POST['phone2'])){

$change1=$_POST['contact2'];
$sql="update home set paragraphs='$change1' where headings='phone_number2'";
$result=mysqli_query($conn,$sql);
}




/*$change1=$_POST['quiz1_type'];
$sql="update home set paragraphs='$change1' where headings='quiz1_type'";
$result=mysqli_query($conn,$sql);*/
if(isset($_POST['quiz1_head'])){
$change1=$_POST['quiz1_heading'];
$sql="update home set paragraphs='$change1' where headings='quiz1_heading'";
$result=mysqli_query($conn,$sql);}

if(isset($_POST['quiz1_des'])){

$change1=$_POST['quiz1_description'];
$sql="update home set paragraphs='$change1' where headings='quiz1_description'";
$result=mysqli_query($conn,$sql);}

/*$sql="update home set paragraphs='$change1' where headings='quiz2_type'";
$result=mysqli_query($conn,$sql);*/

if(isset($_POST['quiz2_head'])){
$change1=$_POST['quiz2_heading'];
$sql="update home set paragraphs='$change1' where headings='quiz2_heading'";
$result=mysqli_query($conn,$sql);}

if(isset($_POST['quiz2_des'])){
$change1=$_POST['quiz2_description'];
$sql="update home set paragraphs='$change1' where headings='quiz2_description'";
$result=mysqli_query($conn,$sql);}

/*$change1=$_POST['quiz3_type'];
$sql="update home set paragraphs='$change1' where headings='quiz3_type'";
$result=mysqli_query($conn,$sql);*/
if(isset($_POST['quiz3_head'])){
$change1=$_POST['quiz3_heading'];
$sql="update home set paragraphs='$change1' where headings='quiz3_heading'";
$result=mysqli_query($conn,$sql);}

if(isset($_POST['quiz3_des'])){
$change1=$_POST['quiz3_description'];
$sql="update home set paragraphs='$change1' where headings='quiz3_description'";
$result=mysqli_query($conn,$sql);
}




/*$change1=$_POST['result1_date'];
$sql="update home set paragraphs='$change1' where headings='result1_date'";
$result=mysqli_query($conn,$sql);

$change1=$_POST['result1_heading'];
$sql="update home set paragraphs='$change1' where headings='result1_heading'";
$result=mysqli_query($conn,$sql);

$change1=$_POST['result1_description'];
$sql="update home set paragraphs='$change1' where headings='result1_description'";
$result=mysqli_query($conn,$sql);

$change1=$_POST['result2_date'];
$sql="update home set paragraphs='$change1' where headings='result2_date'";
$result=mysqli_query($conn,$sql);

$change1=$_POST['result2_heading'];
$sql="update home set paragraphs='$change1' where headings='result2_heading'";
$result=mysqli_query($conn,$sql);

$change1=$_POST['result2_description'];
$sql="update home set paragraphs='$change1' where headings='result2_description'";
$result=mysqli_query($conn,$sql);

$change1=$_POST['result3_date'];
$sql="update home set paragraphs='$change1' where headings='result3_date'";
$result=mysqli_query($conn,$sql);

$change1=$_POST['result3_heading'];
$sql="update home set paragraphs='$change1' where headings='result3_heading'";
$result=mysqli_query($conn,$sql);

$change1=$_POST['result3_description'];
$sql="update home set paragraphs='$change1' where headings='result3_description'";
$result=mysqli_query($conn,$sql);






$change1=$_POST['stages_intro'];
$sql="update home set paragraphs='$change1' where headings='stages_intro'";
$result=mysqli_query($conn,$sql);

$change1=$_POST['quality_description'];
$sql="update home set paragraphs='$change1' where headings='quality_description'";
$result=mysqli_query($conn,$sql);

$change1=$_POST['instructor_description'];
$sql="update home set paragraphs='$change1' where headings='instructor_description'";
$result=mysqli_query($conn,$sql);

$change1=$_POST['quiz_praise'];
$sql="update home set paragraphs='$change1' where headings='quiz_praise'";
$result=mysqli_query($conn,$sql);

$change1=$_POST['get_certified'];
$sql="update home set paragraphs='$change1' where headings='get_certified'";
$result=mysqli_query($conn,$sql);*/

if(isset($_POST['quiz_section'])) { 
  $sql="select visibility from home where headings='quiz'";
  $result=mysqli_query($conn,$sql);
  $option=mysqli_fetch_assoc($result);
  if($option["visibility"]==0)
  {
    $sql="update home set visibility=1 where headings='quiz'";

  }
  else
  {
    $sql="update home set visibility=0 where headings='quiz'";
  }

    $result=mysqli_query($conn,$sql);
            
}

if(isset($_POST['quiz1'])) { 
  $sql="select visibility from home where headings='quiz1'";
  $result=mysqli_query($conn,$sql);
  $option=mysqli_fetch_assoc($result);
  if($option["visibility"]==0)
  {
    $sql="update home set visibility=1 where headings='quiz1'";

  }
  else
  {
    $sql="update home set visibility=0 where headings='quiz1'";
  }

    $result=mysqli_query($conn,$sql);
            
}

if(isset($_POST['quiz2'])) { 
  $sql="select visibility from home where headings='quiz2'";
  $result=mysqli_query($conn,$sql);
  $option=mysqli_fetch_assoc($result);
  if($option["visibility"]==0)
  {
    $sql="update home set visibility=1 where headings='quiz2'";

  }
  else
  {
    $sql="update home set visibility=0 where headings='quiz2'";
  }

   $result=mysqli_query($conn,$sql);
  }


  if(isset($_POST['quiz3'])) { 
  $sql="select visibility from home where headings='quiz3'";
  $result=mysqli_query($conn,$sql);
  $option=mysqli_fetch_assoc($result);
  if($option["visibility"]==0)
  {
    $sql="update home set visibility=1 where headings='quiz3'";

  }
  else
  {
    $sql="update home set visibility=0 where headings='quiz3'";
  }

    $result=mysqli_query($conn,$sql);
            
}





/*
if(isset($_POST['result_section'])) { 
  $sql="select visibility from home where headings='result'";
  $result=mysqli_query($conn,$sql);
  $option=mysqli_fetch_assoc($result);
  if($option["visibility"]==0)
  {
    $sql="update home set visibility=1 where headings='result'";

  }
  else
  {
    $sql="update home set visibility=0 where headings='result'";
  }

    $result=mysqli_query($conn,$sql);
            
}

if(isset($_POST['result1'])) { 
  $sql="select visibility from home where headings='result1'";
  $result=mysqli_query($conn,$sql);
  $option=mysqli_fetch_assoc($result);
  if($option["visibility"]==0)
  {
    $sql="update home set visibility=1 where headings='result1'";

  }
  else
  {
    $sql="update home set visibility=0 where headings='result1'";
  }

    $result=mysqli_query($conn,$sql);
            
}

if(isset($_POST['result2'])) { 
  $sql="select visibility from home where headings='result2'";
  $result=mysqli_query($conn,$sql);
  $option=mysqli_fetch_assoc($result);
  if($option["visibility"]==0)
  {
    $sql="update home set visibility=1 where headings='result2'";

  }
  else
  {
    $sql="update home set visibility=0 where headings='result2'";
  }

   $result=mysqli_query($conn,$sql);
  }


  if(isset($_POST['result3'])) { 
  $sql="select visibility from home where headings='result3'";
  $result=mysqli_query($conn,$sql);
  $option=mysqli_fetch_assoc($result);
  if($option["visibility"]==0)
  {
    $sql="update home set visibility=1 where headings='result3'";

  }
  else
  {
    $sql="update home set visibility=0 where headings='result3'";
  }

    $result=mysqli_query($conn,$sql);
            
}

*/



if(isset($_POST["image"])) {
  $namefile=basename($_FILES["upload"]["name"]);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(empty($_FILES["upload"]["name"])){
  echo "<script>alert('Content missing. Try again!.')</script>";}
  else
  {

  $check = getimagesize($_FILES["upload"]["tmp_name"]);
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
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.')</alert>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
    $sql="update images set name='$target_file' where position='background'";
    if (mysqli_query($conn, $sql)) {
} else {
  echo "<script>alert('Error: ' . $sql . '<br>'' . mysqli_error($conn)')</script>";
}

    echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["upload"]["name"])). " has been uploaded.')</script>";
  } else {
    echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
  }
}
}
}



if(isset($_POST["image1"])) {
  $namefile=basename($_FILES["upload_quiz1"]["name"]);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["upload_quiz1"]["name"]);
$uploadOk = 1;
if(empty($_FILES["upload"]["name"])){
  echo "<script>alert('Content missing. Try again!.')</script>";}
  else
  {


$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["upload_quiz1"]["tmp_name"]);
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
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.')</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["upload_quiz1"]["tmp_name"], $target_file)) {
    $sql="update images set name='$target_file' where position='quiz1'";
    if (mysqli_query($conn, $sql)) {
} else {
  echo "<script>alert('Error: ' . $sql . '<br>'' . mysqli_error($conn)')</script>";
}

    echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["upload_quiz1"]["name"])). " has been uploaded.')</script>";
  } else {
    echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
  }
}
}
}


if(isset($_POST["image2"])) {
  $namefile=basename($_FILES["upload_quiz2"]["name"]);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["upload_quiz2"]["name"]);
$uploadOk = 1;
if(empty($_FILES["upload"]["name"])){
  echo "<script>alert('Content missing. Try again!.')</script>";}
  else
  {

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["upload_quiz2"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "<script>alert('File is not an image.')</scipt>";
    $uploadOk = 0;
  }

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.')</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["upload_quiz2"]["tmp_name"], $target_file)) {
    $sql="update images set name='$target_file' where position='quiz2'";
    if (mysqli_query($conn, $sql)) {
} else {
  echo "<script>alert('Error: ' . $sql . '<br>'' . mysqli_error($conn)')</script>";
}

    echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["upload_quiz2"]["name"])). " has been uploaded.')</script>";
  } else {
    echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
  }
}
}
}



if(isset($_POST["image3"])) {
  $namefile=basename($_FILES["upload_quiz3"]["name"]);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["upload_quiz3"]["name"]);
$uploadOk = 1;
if(empty($_FILES["upload"]["name"])){
  echo "<script>alert('Content missing. Try again!.')</script>";}
  else
  {

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["upload_quiz3"]["tmp_name"]);
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
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.')</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["upload_quiz3"]["tmp_name"], $target_file)) {
    $sql="update images set name='$target_file' where position='quiz3'";
    if (mysqli_query($conn, $sql)) {
} else {
  echo "<script>alert('Error: ' . $sql . '<br>'' . mysqli_error($conn)')</script>";
}

    echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["upload_quiz3"]["name"])). " has been uploaded.')</script>";
  } else {
    echo "<script>alert('Sorry, there was an error uploading your file.'</script>";
  }
}
}
}

if(isset($_POST["about1"])) {
  $namefile=basename($_FILES["upload_about1"]["name"]);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["upload_about1"]["name"]);
$uploadOk = 1;
if(empty($_FILES["upload"]["name"])){
  echo "<script>alert('Content missing. Try again!.')</script>";}
  else
  {

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["upload_about1"]["tmp_name"]);
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
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.')</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["upload_about1"]["tmp_name"], $target_file)) {
    $sql="update images set name='$target_file' where position='about1'";
    if (mysqli_query($conn, $sql)) {
} else {
  echo "<script>alert('Error: ' . $sql . '<br>''. mysqli_error($conn)')</script>";
}

    echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["upload_about1"]["name"])). " has been uploaded.')</script>";
  } else {
    echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
  }
}
}
}


if(isset($_POST["about2"])) {
  $namefile=basename($_FILES["upload_about2"]["name"]);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["upload_about2"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["upload_about2"]["tmp_name"]);
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
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.')</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["upload_about2"]["tmp_name"], $target_file)) {
    $sql="update images set name='$target_file' where position='about2'";
    if (mysqli_query($conn, $sql)) {
} else {
  echo "<script>alert('Error: ' . $sql . '<br>'' . mysqli_error($conn)')</script>";
}

    echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["upload_about2"]["name"])). " has been uploaded.')</script>";
  } else {
    echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
  }
}
}


if(isset($_POST["button_result1"])) {
  $namefile=basename($_FILES["upload_result1"]["name"]);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["upload_result1"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["upload_result1"]["tmp_name"]);
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
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.')</scipt>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["upload_result1"]["tmp_name"], $target_file)) {
    $sql="update images set name='$target_file' where position='result1'";
    if (mysqli_query($conn, $sql)) {
  
} else {
  echo "<script>alert('Error: ' . $sql . '<br>'' . mysqli_error($conn)')</script>";
}

    echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["upload_result1"]["name"])). " has been uploaded.'</script>";
  } else {
    echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
  }
}
}

if(isset($_POST["button_result2"])) {
  $namefile=basename($_FILES["upload_result2"]["name"]);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["upload_result2"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["upload_result2"]["tmp_name"]);
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
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.')</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["upload_result2"]["tmp_name"], $target_file)) {
    $sql="update images set name='$target_file' where position='result2'";
    if (mysqli_query($conn, $sql)) {
} else {
  echo "<script>alert('Error: ' . $sql . '<br>'' . mysqli_error($conn)')</script>";
}

    echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["upload_result2"]["name"])). " has been uploaded.')</script>";
  } else {
    echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
  }
}
}

if(isset($_POST["button_result3"])) {
  $namefile=basename($_FILES["upload_result3"]["name"]);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["upload_result3"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["upload_result3"]["tmp_name"]);
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
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.')</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["upload_result3"]["tmp_name"], $target_file)) {
    $sql="update images set name='$target_file' where position='result3'";
    if (mysqli_query($conn, $sql)) {
  
} else {
  echo "<script>alert('Error: '' . $sql . '<br>'' . mysqli_error($conn)')</script>";
}

    echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["upload_result3"]["name"])). " has been uploaded.')</script>";
  } else {
    echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
  }
}
}


//header("location:admin_home.php");

echo "<script>window.location.href = '../home/admin_home.php';</script>";
?>