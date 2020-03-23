<!DOCTYPE html>
<html>
<head>
   <title>ลงทะเบียน</title>
   <a href="index.php">ลงชื่อเข้าใช้</a>
  <style>
    .G {
    background-color:lightcoral;
    width: 300px;
    padding: 25px;
    border: 3px solid gray;
    margin: 25px;
    }
    body{
      background-image: url('img/wr.jpg');
    }
  </style>
</head>
<body>
<div style="padding-top:50px">
<div align="center"> 
<div class="G">
    <h3>สมัครสมาชิก</h3>
    <form method="post" action="insertDB.php">
        <input type="text" name="usern" placeholder="Username"><br><br>
        <input type="password" name="pass" placeholder="Password"><br><br>
        <input type="text" name="name" placeholder="FirstName & LastName"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>สถานะ: 
        <input type="radio" id="level" name="level" value="member">Member<br><br>
        <button type="submit" name="submit">สมัคร</button>
    </form>
</div>
</div>
</div>
</body>
</html>