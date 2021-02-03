<?php

include 'css.php';
include 'konek.php';
include 'menu.php';
?>

		<?php 

		$no=1;
		//Tarik Data di TB WARGA
		$sql="select * from tbwarga ";
		$qry=mysqli_query($conn, $sql) or die("Query Salah");

		//Cari Hasil Maximal dari setiap Kolom di TB WARGA
		$sql2="SELECT MAX(pekerjaan) AS pekerjaan, MAX(penghasilan) AS penghasilan, MAX(status) AS status, MAX(jumlahanak) AS jumlahanak, MAX(tempattinggal) AS tempattinggal FROM tbwarga  ";
		$qry2=mysqli_query($conn, $sql2) or die("Query Salah!!");
		$baris2=mysqli_fetch_array($qry2);

		//Tarik Data di TB WARGA
		$sql3="select * from tbwarga ORDER BY nilai DESC ";
		$qry3=mysqli_query($conn, $sql3) or die("Query Salah");
		
		//Tarik Data di TB KRITERIA
		$vidkriteria=$_POST['txtkriteria'];
		$sql4="select * from tbkriteria where id_kriteria='$vidkriteria' ";
		$qry4=mysqli_query($conn, $sql4) or die ("Query SQL4 salah");
		$baris4=mysqli_fetch_array($qry4);
		?>


		<?php while ($baris=mysqli_fetch_array($qry)) {

									$idpenduduk=$baris['idpenduduk'];
									$kerja=$baris['pekerjaan']/$baris2['pekerjaan']*$baris4['pekerjaan'];	
									$hasil=$baris['penghasilan']/$baris2['penghasilan']*$baris4['penghasilan'];
									$status=$baris['status']/$baris2['status']*$baris4['status'];
									$anak=$baris['jumlahanak']/$baris2['jumlahanak']*$baris4['jumlahanak'];
									$tinggal=$baris['tempattinggal']/$baris2['tempattinggal']*$baris4['tempattinggal'];
									$total=$kerja+$hasil+$status+$anak+$tinggal;
									
									$update=mysqli_query($GLOBALS["___mysqli_ston"], "update tbwarga set nilai='$total' where idpenduduk='$idpenduduk'  ");
									echo "<script>location.href='penduduk_list2.php?kriteria=$vidkriteria'</script>";
									} ?>


<?php $stop=((is_null($___mysqli_res = mysqli_close($conn))) ? false : $___mysqli_res); ?>