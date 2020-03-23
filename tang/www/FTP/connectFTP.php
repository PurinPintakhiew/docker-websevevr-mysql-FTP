<?php
    $ftp_host = "192.168.43.39";
    $ftp_user = "Tang";
    $ftp_pass = 1234;

   $ftp_con = ftp_connect($ftp_host,21) or die("not connected");
   $ftp_login = ftp_login($ftp_con,$ftp_user,$ftp_pass);
   ftp_pasv($ftp_con,TRUE);

   if((!$ftp_con) || (!$ftp_login)){
    echo "ไม่มีการเชื่อมต่อ";
    exit();
   }else{
    echo "เชื่อมต่อสำเร็จ..";
    }
?>