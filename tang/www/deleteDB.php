<?php
require 'connectDB.php';

if(isset($_GET['id'])){
$id = $_GET["id"];


$sql = "DELETE FROM login WHERE ID='$id' ";

if ($con->query($sql) === TRUE) {
    
    echo "<script type='text/javascript'>";
	echo "alert('ลบสำเร็จ');";
	echo "window.location = 'Fdelete.php'; ";
	echo "</script>";

} else {
    echo "<script type='text/javascript'>";
	echo "alert('ลบไม่สำเร็จ');";
	echo "window.location = 'Fdelete.php'; ";
	echo "</script>";
}
}
