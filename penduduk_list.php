<?php
include 'css.php';
include 'konek.php';
include 'menu.php';
?>
<div id="wrapper">
					<ol class="breadcrumb">
					<li><a href="menu.php"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active"><i class="fa fa-caret-square-o-down"></i> >> Transaksi</a></li>
					<li class="active"> >> List Penduduk</li>
				</ol>
<h3>Rekomendasi Warga yang layak diberikan bantuan Dana</h3>
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
									<th>Nilai <i class="fa fa-sort"></i></th>
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
		
		//Tarik Data di TB KRITERIA
		$vidkriteria=$_POST['txtkriteria'];
		$sql4="select * from tbkriteria where id_kriteria='$vidkriteria' ";
		$qry4=mysqli_query($conn, $sql4) or die ("Query SQL4 salah");
		$baris4=mysqli_fetch_array($qry4);
		?>

		<h4>KRITERIA BERDASARKAN : <b><?php echo $baris4['nama_kriteria']; ?> </h4>
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
									<td><?php $kerja=$baris3['pekerjaan']/$baris2['pekerjaan']*$baris4['pekerjaan'];
										if($baris3['pekerjaan']=="1") {echo "PNS";}
												elseif ($baris3['pekerjaan']=="2") {echo "Karyawan Swasta";} 
												elseif ($baris3['pekerjaan']=="3") {echo "Harian Lepas";}
												elseif ($baris3['pekerjaan']=="4") {echo "Serabutan";}
											?>
										</td>
									<td><?php $hasil=$baris3['penghasilan']/$baris2['penghasilan']*$baris4['penghasilan'];
										if($baris3['penghasilan']=="1") {echo "Rp. 4 Juta - <br>10 Juta";}
												elseif ($baris3['penghasilan']=="2") {echo "Rp. 3 Juta - <br>4 Juta";} 
												elseif ($baris3['penghasilan']=="3") {echo "Rp. 2 Juta - <br>3 Juta";}
												elseif ($baris3['penghasilan']=="4") {echo "Rp. 1 Juta - <br>2 Juta";}
											?>	
										</td>
									<td><?php echo $baris3['hp']; ?></td>
									<td><?php $status=$baris3['status']/$baris2['status']*$baris4['status'];
										if($baris3['status']=="1") {echo "Belum Menikah";}
												elseif ($baris3['status']=="2") {echo "Sudah Menikah";} 
											?>
										</td>
									<td><?php $anak=$baris3['jumlahanak']/$baris2['jumlahanak']*$baris4['jumlahanak'];
										if($baris3['jumlahanak']=="1") {echo "1 Anak";}
												elseif ($baris3['jumlahanak']=="2") {echo "2 Anak";} 
												elseif ($baris3['jumlahanak']=="3") {echo "3 Anak";}
												elseif ($baris3['jumlahanak']=="4") {echo "4 Anak";}
												elseif ($baris3['jumlahanak']=="5") {echo "5 Anak";} 
												elseif ($baris3['jumlahanak']=="6") {echo "6 Anak";}
												elseif ($baris3['jumlahanak']=="7") {echo "7 Anak";}
											?>
										</td>
									<td><?php $tinggal=$baris3['tempattinggal']/$baris2['tempattinggal']*$baris4['tempattinggal'];
										if($baris3['tempattinggal']=="1") {echo "Rumah Pribadi";}
												elseif ($baris3['tempattinggal']=="2") {echo "Ngontrak";} 
											?>
										</td>
									<td><?php echo $total=$kerja+$hasil+$status+$anak+$tinggal; ?></td>
									<td>
										
										<a href="users.php?module=user&act=delete&userID={$dataUser[dataUser].userID}" onclick="return confirm('Pilih');"><button type="button" class="btn btn-success">Aprov</button></a>
									</td>
									<?php } ?>
								</tr>
								
							</tbody>
						</table>
					</div>
</div>