<!DOCTYPE html>
<html>

<head>
    <title>Delete</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="table.css">
</head>

<body style="background-color: #43EE8E">
    <h1>ลบสมาชิก</h1>
        <a href="/FTP/FormAdmin.php">หน้าหลัก</a> |
        <a href="search.php">หน้าค้นหาสมาชิก</a> |
        <a href="">ลบสมาชิก</a> |
        <a href="Fupdate.php">แก้ไข</a> 
    <hr>
    <form action="" method="post">
       ID / Name:
        <input type="text" name="txt_id" required />
        <input type="submit" value="Search" /> <br />
    </form>
    <br />
        <?php
        require 'connectDB.php';
      if (isset($_POST['txt_id'])) {  
            $id = $_POST['txt_id']; 
            $search = "SELECT * FROM login WHERE ID = '$id' OR name LIKE '%$id%' ";
            $result = mysqli_query($con, $search);
      ?>

      <table><tr> 
                <th>ID</th> 
                <th>Username</th> 
                <th>Password</th> 
                <th>Name</th> 
                <th>Email</th> 
                <th>Level</th>
                <th>Delete</th>
                    </tr>
        <?php
            if($result) {  
                while($row = mysqli_fetch_array($result)) {
                ?>
           <td><?=$row["ID"]?></td>
            <td><?=$row["username"]?> </td>
            <td><?=$row["password"]?> </td>
            <td><?=$row["name"]?> </td>
            <td><?=$row["email"]?> </td>
            <td><?=$row["level"]?> </td>
            <td><a href="deleteDB.php?id=<?=$row["ID"]?>">Delete</a></td>
            </tr>
                
            
 <?php
                }
            }
            "</table>";
        }
 ?>         
        
    
</body>
</html>