<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body style="background-color: #43EE8E">
<h1>แก้ไขข้อมูลสมาชิก</h1>
        <a href="/FTP/FormAdmin.php">หน้าหลัก</a> |
        <a href="search.php">หน้าค้นหาสมาชิก</a> |
        <a href="Fdelete.php">ลบสมาชิก</a> |
        <a href="">แก้ไข</a> 
    <hr>
    <form action="" method="post">
        ID:
        <input type="text" name="txt_id" required>
        <input type="submit" value="ค้นหา"> <br>
</form>
<hr>
<table>
<?php
        require 'connectDB.php';
        if (isset($_POST['txt_id'])) 
        {
            $id = $_POST['txt_id'];
            $search = "SELECT * FROM login WHERE ID = '$id' ";
            $result = mysqli_query($con, $search); 
            $row = mysqli_fetch_array($result);
        }
?>
    <form method="post" action="">
                 <tr>
                 <td> ID: </td>
                    <td>
                        <input type="text" name="id" value="<?php echo $row['ID'];?>"  readonly>
                    </td>
                 </tr>
                <tr>
                <td> Username: </td>
                    <td>
                        <input type="text" name="user"  value="<?php echo $row['username'];?>" />
                    </td>
                </tr>
                <tr>
                <td> Password </td>
                    <td>
                        <input type="password" name="pass"  value="<?php echo $row['password'];?>" />
                    </td>
                </tr>
                <tr>
                <td> Name: </td>
                    <td>
                        <input type="text" name="name"  value="<?php echo $row['name'];?>" />
                    </td>
                <tr>
                <td> Email: </td>
                    <td>
                        <input type="text" name="mail"  value="<?php echo $row['email'];?>" />
                    </td>
                <tr>       
            </table>  <br>
        <input type="submit" name="update" value="แก้ไขข้อมูล">
    </form>

</table> <br>
<?php
        require 'connectDB.php';
        if(isset($_POST['update']))
        {
            $idup = $_POST['id'];
            $userup = $_POST['user'];
            $passup = $_POST['pass'];
            $nameup = $_POST['name'];
            $mail = $_POST['mail'];
        $upd = " UPDATE login SET username = '$userup',password = '$passup', 
        name = '$nameup' ,email='$mail' WHERE ID = '$idup'";
        $result = mysqli_query($con, $upd);
        if ($result)
            { 
                echo "<script type='text/javascript'>";
                echo "alert('แก้ไขสำเร็จ');";
                echo "window.location = 'Fupdate.php'; ";
                echo "</script>";
            }
        else{ 
            echo "<script type='text/javascript'>";
            echo "alert('แก้ไขไม่สำเร็จ');";
            echo "window.location = 'Fupdate.php'; ";
            echo "</script>";
         }
        }
    ?>

</body>
</html>