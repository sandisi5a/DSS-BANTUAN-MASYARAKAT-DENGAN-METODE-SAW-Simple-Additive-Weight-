<?php 
include 'css.php';
include 'menu.php';
?>


				<ol class="breadcrumb">
					<li><a href="menu.php"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active"><i class="fa fa-caret-square-o-down"></i> >> Transaksi</a></li>
					<li class="active"> >> Pilih Kriteria</li>
				</ol>
		
		<div class="container">
			<div class="container">
				
				
					<h3>Pilih Kriteria</h3>
					<form role="form" method="POST" action="penduduk_list_proses.php" id="frm_user">

						<div class="form-group">
							<label>Kriteria</label>
							<select name="txtkriteria" class="required" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
								<option value="">- Pilih -</option>
								<?php 
								include 'konek.php';
								$sql="select * from tbkriteria";
								$qry=mysqli_query($conn, $sql) or die("Query Gagal"); 

					while ($baris=mysqli_fetch_array($qry))
						{ ?>
					<option value="<?php echo $baris['id_kriteria']; ?>"> <?php echo $baris['nama_kriteria']; ?></option>
					<?php } ?>
								
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				
				


		</div>
	</div>
