<!DOCTYPE html>
<html>

<head>
    <title>Search</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="table.css">
</head>

<body style="background-color: #43EE8E">
    <h1>ค้นหาสมาชิก</h1>
    <hr>
    <a href="/FTP/FormAdmin.php">หน้าหลัก</a> |
        <a href="">หน้าค้นหาสมาชิก</a> |
        <a href="Fdelete.php">ลบสมาชิก</a> |
        <a href="Fupdate.php">แก้ไข</a> 
    <hr>
    <form action="" method="post">
       ID/Name :
        <input type="text" name="txt_id" />
        <input type="submit" value="ค้นหา" /> <br />
    </form>
    <br />
        <?php
        require 'connectDB.php';
      if (isset($_POST['txt_id'])) {  
            $id = $_POST['txt_id']; 
            $search = "SELECT * FROM login WHERE ID = '$id' OR name LIKE '%$id%' ";
            $result = mysqli_query($con, $search);
                  echo    "<table><tr> 
                              <th>ID</th> <th>Username</th> <th>Pasword</th> <th>Name</th> <th>Email</th> <th>Level</th>
                          </tr>";
                  if($result) {  
                      while($row = mysqli_fetch_array($result)) {
                  echo "<td>" . $row["ID"] . "</td>";
                  echo "<td>" . $row["username"] . "</td>";
                  echo "<td>" . $row["password"] . "</td>";
                  echo "<td>" . $row["name"] . "</td>";
                  echo "<td>" . $row["email"] . "</td>";
                  echo "<td>" . $row["level"] . "</td>";
                  echo "</tr>";
                      }
                  echo "</table>";
                }
              }
 ?>         
        
    
</body>
</html>