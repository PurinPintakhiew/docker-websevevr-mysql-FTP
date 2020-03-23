<html>
  <head>
  <title>LIST</title>
  <style>
</style>
</head>
<body style="background-color:aqua">
  <a href="FormUser.php">หน้าหลัก</a>
<br>
<br>
<?php
require('connectFTP.php');
echo "<br/>";

?>

<table width="50%" border="1" cellspacing="0">
  <thead>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Size(bytes)</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $file_list = ftp_nlist($ftp_con,".");
    $i = 0;
    foreach ($file_list as $file) {
      $fsize = ftp_size($ftp_con, $file);
    ?>
      <tr>
        <td><?= $i+1 ?></td>
        <td><?= $file ?></td>
        <td><?= $fsize ?></td>
      </tr>
    <?php
    $i++; 
    }
    ?>
  </tbody>
</table>
<?php
ftp_close($ftp_con); 
?>
</body>
</html>