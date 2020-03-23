<?php
require 'connectFTP.php';
echo "<br>";
if(isset($_POST['submit'])){
    $destination_file = $_FILES['file']['name'];
    $source_file = $_FILES['file']['tmp_name'];
    $size_file=$_FILES['file']['size'];

    $up = ftp_put($ftp_con, $destination_file, $source_file, FTP_BINARY);

    if(!$up){
        echo "<script type='text/javascript'>";
	    echo "alert('อัปโหลดข้อมูลไม่สำเร็จ');";
	    echo "window.location = 'FormUser.php'; ";
	    echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
	    echo "alert('อัปโหลดข้อมูลสำเร็จ');";
	    echo "window.location = 'FormUser.php'; ";
	    echo "</script>";
    }
}
?>