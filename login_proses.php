<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
   session_start();
   require_once("konek.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $cekuser = mysqli_query($conn, "SELECT * FROM tb_login WHERE username = '$username'");
   $hasil = mysqli_fetch_array($cekuser);
   if(mysqli_num_rows($cekuser) == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:menu.php');
     }
   }
?>
</body>
</html>