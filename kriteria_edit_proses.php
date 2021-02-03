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
	{echo "Persentase lebih dari 100% <a href=kriteria_list.php> <b>--Back--</a> "; }
		elseif ($vtotal<1) 
	{echo "Persentase Kurang dari 100% <a href=kriteria_list.php> <b>--Back--</a> ";}
		else
	{
		$update=mysqli_query($conn, "update tbkriteria set pekerjaan='$vpekerjaan', penghasilan='$vpenghasilan', status='$vstatus', jumlahanak='$vjumlahanak', tempattinggal='$vtempattinggal', user='$sesen_username', user_tgl='$tgl' where id_kriteria='$vidkriteria' ");
		if ($update)
		{header('location:kriteria_list.php');}
			else
		{echo "Data Gagal disimpan";}
	}
?>
