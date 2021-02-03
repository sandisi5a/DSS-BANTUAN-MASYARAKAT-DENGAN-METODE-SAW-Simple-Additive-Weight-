<?php
include 'css.php';
include 'konek.php';
include 'menu.php';
?>

				<ol class="breadcrumb">
					<li><a href="menu.php"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active"><i class="fa fa-caret-square-o-down"></i> >> Master</a></li>
					<li class="active"> >> Daftar Kriteria</li>
				</ol>

<h3>Daftrar Kriteria</h3>
<form action="kriteria.php" method="post">
<button type="submit" class="btn btn-primary">Tambah Kriteria</button>
</form>
					<div class="table-responsive">
						<table class="table table-bordered table-hover tablesorter">
							<thead>
								<tr>
									<th>No. <i class="fa fa-sort"></i></th>
									<th>ID Kriteria <i class="fa fa-sort"></i></th>
									<th>Kriteria <i class="fa fa-sort"></i></th>
									<th>Pekerjaan <i class="fa fa-sort"></i></th>
									<th>Penghasilan <i class="fa fa-sort"></i></th>
									<th>Status <i class="fa fa-sort"></i></th>
									<th>Jumlah Anak <i class="fa fa-sort"></i></th>
									<th>Tempat Tinggal <i class="fa fa-sort"></i></th>
									<th>Action <i class="fa fa-sort"></i></th>
								</tr>
							</thead>
							<tbody>
								


		<?php 

		$no=1;
		//Tarik Data di TB KRITERIA
		$sql="select * from tbkriteria ";
		$qry=mysqli_query($conn, $sql) or die("Query Salah");
		
	
		?>
								<?php while ($baris=mysqli_fetch_array($qry)) { ?>

								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $baris['id_kriteria']; ?></td>
									<td><?php echo $baris['nama_kriteria']; ?></td>
									<td><?php $pekerjaan=$baris['pekerjaan']*100;
									echo $pekerjaan; ?>%</td>
									<td><?php $penghasilan=$baris['penghasilan']*100;
									echo $penghasilan; ?>%</td>
									<td><?php $status=$baris['status']*100;
									echo $status; ?>%</td>
									<td><?php $jumlahanak=$baris['jumlahanak']*100;
									echo $jumlahanak; ?>%</td>
									<td><?php $jumlahanak=$baris['tempattinggal']*100;
									echo $jumlahanak; ?>%</td>
									<td>
										<a href="kriteria_edit.php?idkriteria=<?php echo $baris['id_kriteria']; ?> " onclick="return confirm('Edit data ini?');"><button type="button" class="btn btn-success">Edit</button></a>
										<a href="kriteria_delete.php?idkriteria=<?php echo $baris['id_kriteria']; ?>" onclick="return confirm('Anda yakin ingin menghapus?');"><button type="button" class="btn btn-danger">Delete</button></a>
									</td>
									<?php } ?>
								</tr>
								
							</tbody>
						</table>
					</div>