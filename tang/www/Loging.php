
<?php
session_start();
require 'connectDB.php';

    if(isset($_POST['submit'])){
         $username = $_POST['name'];
         $password = $_POST['pass'];

        $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result)){
            
            $row = mysqli_fetch_assoc($result);
            $L = $row['level'];
            if($L=='admin'){
                echo "<script type='text/javascript'>";
	            echo "alert('สำเร็จ');";
	            echo "window.location = '/FTP/FormAdmin.php'; ";
	            echo "</script>";
            }
            if($L=='member'){
                echo "<script type='text/javascript'>";
	            echo "alert('สำเร็จ');";
	            echo "window.location = '/FTP/FormUser.php'; ";
	            echo "</script>";
            }
        }else{
            echo "<script>";
                echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                echo "window.history.back()";
            echo "</script>";

          }
    }
?>