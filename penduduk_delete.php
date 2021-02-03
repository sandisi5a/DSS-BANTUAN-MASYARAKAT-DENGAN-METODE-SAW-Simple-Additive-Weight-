<?php 
include 'css.php';
include 'konek.php';

$vidpenduduk=$_GET['id_penduduk'];


		$delete=mysqli_query($conn, "delete from tbwarga where idpenduduk='$_GET[id_penduduk]' ");
		if ($delete)
		{header('location:penduduk.php');}
			else
		{echo "Data Gagal Dihapus";}
?>
