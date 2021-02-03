<?php 
include 'css.php';
include 'konek.php';

$vidkriteria=$_GET["idkriteria"];


		$delete=mysqli_query($conn, "delete from tbkriteria where id_kriteria=$vidkriteria ");
		if ($delete)
		{header('location:kriteria_list.php');}
			else
		{echo "Data Gagal Dihapus";}
?>
