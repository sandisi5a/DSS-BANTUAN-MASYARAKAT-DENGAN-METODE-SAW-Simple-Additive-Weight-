<?php 
include 'css.php';
include 'konek.php';
include 'cek_session.php';

$vidkriteria=$_POST['txtidkriteria'];
$vnamakriteria=$_POST['txtnamakriteria'];

$vpekerjaan=$_POST['txtpekerjaan']/100;
$vpenghasilan=$_POST['txtpenghasilan']/100;
$vstatus=$_POST['txtstatus']/100;
$vjumlahanak=$_POST['txtjumlahanak']/100;
$vtempattinggal=$_POST['txttempattinggal']/100;
$vtotal=$vpekerjaan+$vpenghasilan+$vstatus+$vjumlahanak+$vtempattinggal;
if ($vtotal>1)
	{echo "Persentase lebih dari 100% <a href=kriteria.php> <b>--Back--</a> "; }
		elseif ($vtotal<1) 
	{echo "Persentase Kurang dari 100% <a href=kriteria.php> <b>--Back--</a> ";}
		else
	{
		$simpan=mysqli_query($conn, "INSERT INTO tbkriteria (id_kriteria,nama_kriteria,pekerjaan,penghasilan,status,jumlahanak,tempattinggal,user,user_tgl) VALUES('$vidkriteria','$vnamakriteria','$vpekerjaan','$vpenghasilan','$vstatus','$vjumlahanak','$vtempattinggal','$sesen_username','$tgl')");
		if ($simpan)
		{header('location:kriteria_list.php');}
			else
		{echo "Data Gagal disimpan";}
	}
?>
