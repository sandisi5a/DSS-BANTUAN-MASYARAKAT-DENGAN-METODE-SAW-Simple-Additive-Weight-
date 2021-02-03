<?php
session_start();
if(!isset($_SESSION['username'])) {
   echo "GAGAL"; 
} else {
	$tgl=date('Y-m-d');
	$username= $_SESSION['username'];
	$cekuser = mysqli_query($conn, ("SELECT * FROM tb_login WHERE username = '$username'"));
   	$hasil = mysqli_fetch_array($cekuser);
	$sesen_username = $hasil['username'];
	$sesen_level = $hasil['level']; 
}
?>