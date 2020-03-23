<?php
require 'connectDB.php';

if(isset($_POST['submit'])){
    $user = $_POST['usern'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $lavel = $_POST['level'];

    $sql = "INSERT INTO login (username,password,name,email,level)
    VALUES ('$user','$pass','$name','$mail','$lavel') ";
    $result = mysqli_query($con, $sql);
if ($result)
{
    echo "<script type='text/javascript'>";
	echo "alert('สมัครสมาชิกสำเร็จ');";
	echo "window.location = 'register.php'; ";
	echo "</script>";
}
else
{
    echo "<script type='text/javascript'>";
	echo "alert('สมัครสมาชิกไม่สำเร็จ');";
	echo "window.location = 'register.php'; ";
	echo "</script>";
}

}
?>