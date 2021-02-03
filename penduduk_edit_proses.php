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

$update=mysqli_query($conn, "update tbwarga set nikpenduduk='$vnikpenduduk', nama='$vnama', alamat='$valamat', jk='$vjk', pekerjaan='$vpekerjaan', penghasilan='$vpenghasilan', hp='$vhp', status='$vstatus', jumlahanak='$vjumlahanak', tempattinggal='$vtempattinggal', user='$sesen_username', user_tgl='$tgl' where idpenduduk='$vidpenduduk' ");
if ($update) { 
	header('location:penduduk.php?code=1');
} else{
echo "Data Gagal disimpan";
}

?>
