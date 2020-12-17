<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php

include('db_connect.php');
$id = $mysqli -> real_escape_string($_POST['id']);
//echo $id;
$sql = "SELECT `id`, `name`, `job`, `description`, `image` FROM `details` WHERE  `id` = $id";
$result = mysqli_query($mysqli, $sql);
$details = mysqli_fetch_all($result, MYSQLI_ASSOC);
//print_r($details);
/*
$uname = $mysqli -> real_escape_string($_POST['name']);
$ujob = $mysqli -> real_escape_string($_POST['job']);
$udescription = $mysqli -> real_escape_string($_POST['description']);
echo $uname . $job . $udescription
*/
//echo $id;

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <title></title>
   </head>
   <body>
     <form action="updatetable.php" method="POST" enctype="multipart/form-data" >
        <div class="form-group">
          <?php foreach($details as $detail){ ?>
        <label for="exampleFormControlTextarea1">id (Do not change the value only for display)</label><br>
        <input type="number" name="id" value="<?php echo htmlspecialchars($detail['id']); ?>" readonly><br>
        <label for="exampleFormControlTextarea1">Name (update)</label><br>
        <!--<textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="name" value="<?php echo htmlspecialchars($name); ?>"></textarea>-->
        <input type="text" name="name" value="<?php echo htmlspecialchars($detail['name']); ?>">
        </div>
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Job title (update)</label><br>
        <!--<textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="ujob" value="default"></textarea>-->
        <!--<textarea rows="1" name="ujob" value="<?php echo htmlspecialchars($detail['job']); ?>"></textarea>-->
        <input type="textarea" name="job" value="<?php echo htmlspecialchars($detail['job']); ?>">
        </div>
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Description (update)</label><br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"><?php echo htmlspecialchars($detail['description']); ?></textarea>
        </div>
        <div class="form-group">
        <label for="exampleFormControlFile1">Example file input (update)</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" >
        <input type="hidden" id="earlier_image" name = "earlier_image" value="<?php echo $detail['image'];?>" >
        <img class="img-fluid" src="uploaded_images/<?php echo $detail['image'];?>" width="200px">
      </div>
    <?php } ?>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
     </form>
   </body>
 </html>
