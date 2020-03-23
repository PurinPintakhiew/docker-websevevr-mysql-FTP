<?php
session_start();
require('connectFTP.php');

if(isset($_GET['name'])){
    $file = $_GET['name'];

if (ftp_delete($ftp_con, $file))
  {
    echo "<script type='text/javascript'>";
    echo "alert('ลบ $file สำเร็จ');";
    echo "window.location = 'ListAdmin.php'; ";
    echo "</script>";;
  }
else
  {
    echo "<script type='text/javascript'>";
    echo "alert('ลบ $file ไม่สำเร็จ');";
    echo "window.location = 'ListAdmin.php'; ";
    echo "</script>";
  }
}

ftp_close($ftp_con);
?>