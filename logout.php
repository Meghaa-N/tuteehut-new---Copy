<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<?php
session_start();
session_cache_expire();
session_destroy();
echo '<script>';
   echo "window.location.href = 'index.php';</script>";
  ?>