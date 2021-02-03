<?php
include 'css.php';
include 'konek.php';
include 'menu.php';
?>
<div id="wrapper">
					<ol class="breadcrumb">
					<li><a href="menu.php"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active"><i class="fa fa-caret-square-o-down"></i> >> Master</a></li>
					<li class="active"> >> Daftar Warga</li>
				</ol>
	
<h3>Daftar Warga</h3>
<form action="penduduk_tambah.php" method="post">
<button type="submit" class="btn btn-primary">Tambah Warga</button>
</form>
					<div class="table-responsive">
						<table class="table table-bordered table-hover tablesorter">
							<thead>
								<tr>
									
									<th>No. <i class="fa fa-sort"></i></th>
									<th>ID Penduduk <i class="fa fa-sort"></i></th>
									<th>NIK Penduduk <i class="fa fa-sort"></i></th>
									<th>Nama Lengkap <i class="fa fa-sort"></i></th>
									<th>Alamat <i class="fa fa-sort"></i></th>
									<th>Jenis Kelamin <i class="fa fa-sort"></i></th>
									<th>Pekerjaan <i class="fa fa-sort"></i></th>
									<th>Penghasilan <i class="fa fa-sort"></i></th>
									<th>No. HP <i class="fa fa-sort"></i></th>
									<th>Status <i class="fa fa-sort"></i></th>
									<th>Jumlah Anak <i class="fa fa-sort"></i></th>
									<th>Tempat Tinggal <i class="fa fa-sort"></i></th>
									<th>Action <i class="fa fa-sort"></i></th>
								</tr>
							</thead>
							<tbody>
								


		<?php 

		$no=1;
		//Tarik Data di TB WARGA
		$sql="select * from tbwarga ";
		$qry=mysqli_query($conn, $sql) or die("Query Salah");
		$baris=mysqli_fetch_array($qry);

		//Cari Hasil Maximal dari setiap Kolom di TB WARGA
		$sql2="SELECT MAX(pekerjaan) AS pekerjaan, MAX(penghasilan) AS penghasilan, MAX(status) AS status, MAX(jumlahanak) AS jumlahanak, MAX(tempattinggal) AS tempattinggal FROM tbwarga  ";
		$qry2=mysqli_query($conn, $sql2) or die("Query Salah!!");
		$baris2=mysqli_fetch_array($qry2);

		//Tarik Data di TB WARGA
		$sql3="select * from tbwarga  ";
		$qry3=mysqli_query($conn, $sql3) or die("Query Salah");
		
		?>

								<?php while ($baris3=mysqli_fetch_array($qry3)) { ?>

								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $baris3['idpenduduk']; ?></td>
									<td><?php echo $baris3['nikpenduduk']; ?></td>
									<td><?php echo $baris3['nama']; ?></td>
									<td><?php echo $baris3['alamat']; ?></td>
									<td><?php if($baris3['jk']=="L") {echo "Laki-Laki";}
												elseif ($baris3['jk']=="P") {echo "Perempuan";} 
											?>			
										</td>
									<td><?php
										if($baris3['pekerjaan']=="1") {echo "PNS";}
												elseif ($baris3['pekerjaan']=="2") {echo "Karyawan Swasta";} 
												elseif ($baris3['pekerjaan']=="3") {echo "Harian Lepas";}
												elseif ($baris3['pekerjaan']=="4") {echo "Serabutan";}
											?>
										</td>
									<td><?php
										if($baris3['penghasilan']=="1") {echo "Rp. 4 Juta - <br>10 Juta";}
												elseif ($baris3['penghasilan']=="2") {echo "Rp. 3 Juta - <br>4 Juta";} 
												elseif ($baris3['penghasilan']=="3") {echo "Rp. 2 Juta - <br>3 Juta";}
												elseif ($baris3['penghasilan']=="4") {echo "Rp. 1 Juta - <br>2 Juta";}
											?>	
										</td>
									<td><?php echo $baris3['hp']; ?></td>
									<td><?php
										if($baris3['status']=="1") {echo "Belum Menikah";}
												elseif ($baris3['status']=="2") {echo "Sudah Menikah";} 
											?>
										</td>
									<td><?php
										if($baris3['jumlahanak']=="1") {echo "1 Anak";}
												elseif ($baris3['jumlahanak']=="2") {echo "2 Anak";} 
												elseif ($baris3['jumlahanak']=="3") {echo "3 Anak";}
												elseif ($baris3['jumlahanak']=="4") {echo "4 Anak";}
												elseif ($baris3['jumlahanak']=="5") {echo "5 Anak";} 
												elseif ($baris3['jumlahanak']=="6") {echo "6 Anak";}
												elseif ($baris3['jumlahanak']=="7") {echo "7 Anak";}
											?>
										</td>
									<td><?php
										if($baris3['tempattinggal']=="1") {echo "Rumah Pribadi";}
												elseif ($baris3['tempattinggal']=="2") {echo "Ngontrak";} 
											?>
										</td>
									<td>
										<a href="penduduk_edit.php?id_penduduk=<?php echo $baris3['idpenduduk']; ?>" onclick="return confirm('Edit data ini?');"><button type="button" class="btn btn-success">Edit</button></a>
										<a href="penduduk_delete.php?id_penduduk=<?php echo $baris3['idpenduduk']; ?>" onclick="return confirm('Yakin hapus data ini?');"><button type="button" class="btn btn-danger">Delete</button></a>
									</td>
									<?php } ?>
								</tr>
								
							</tbody>
						</table>
					</div>
</div>