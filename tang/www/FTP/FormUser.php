<html>
<head>
<title>FTP</title>
<a href="ListUser.php">รายละเอียดข้อมูล</a> |
<a href="../Logout.php" >ออกจากระบบ</a>
<style>
.col {
    background-color:royalblue;
    width: 400px;
    padding: 25px;
    border: 3px solid gray;
    margin: 25px; 
}
body{
  background-image: url('../img/4.jpg');
  background-size: 105%
}
</style>
</head>
<body>
<div class="container" style="padding-top:100px">
<div align="center">
<div class="col" >
<h1>FTP</h1>
<h1>My Member</h1>
<form action="uploadU.php" method="POST" enctype="multipart/form-data"> 
    <input type="file" name="file" id="file">
    <button type="submit" name="submit">upload</button>
</form>
</div>
</div>
</div>
</body>
</html>
