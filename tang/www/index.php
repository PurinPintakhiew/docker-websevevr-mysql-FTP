<html>
<head>
<title>ลงชื่อเข้าใช้</title>
  <a href="register.php">ลงทะเบียน</a>
  <style>
    .G {
    background-color:dodgerblue;
    width: 300px;
    padding: 25px;
    border: 3px solid gray;
    margin: 25px;
    }
    body{
      background-image: url('img/p.png');
    }
  </style>
</head>
<body>

<div style="padding-top:50px">
<div align="center"> 
<div class="G">

<h1>Login</h1>
<form action="Loging.php" method="post"> 
  <input type="text" id="name" name="name" placeholder="Username"><br><br>
  <input type="password"  id="pass" name="pass" placeholder="Password"><br><br>
  <input type="submit" name="submit" value="ลงชื่อเข้าใช้">
</form>

</div>
</div>
</div>
</body>
</html>