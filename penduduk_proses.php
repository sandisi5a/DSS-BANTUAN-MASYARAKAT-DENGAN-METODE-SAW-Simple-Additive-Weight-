<?php 
include 'css.php';
include 'konek.php';
include 'cek_session.php';

$vidpenduduk=$_POST['idpenduduk'];
$vnikpenduduk=$_POST['nikpenduduk'];
$vnama=$_POST['nama'];
$valamat=$_POST['alamat'];
$vjk=$_POST['jk'];
$vpekerjaan=$_POST['pekerjaan'];
$vpenghasilan=$_POST['penghasilan'];
$vhp=$_POST['hp'];
$vstatus=$_POST['status'];
$vjumlahanak=$_POST['jumlahanak'];
$vtempattinggal=$_POST['tempattinggal'];

$simpan=mysqli_query($conn, "INSERT INTO tbwarga (idpenduduk,nikpenduduk,nama,alamat,jk,pekerjaan,penghasilan,hp,status,jumlahanak,tempattinggal,user,user_tgl) VALUES('$vidpenduduk','$vnikpenduduk','$vnama','$valamat','$vjk','$vpekerjaan','$vpenghasilan','$vhp','$vstatus','$vjumlahanak','$vtempattinggal','$sesen_username','$tgl')");
if ($simpan) { 
	header('location:penduduk.php?code=1');
} else{
echo "Data Gagal disimpan";
}

?>
