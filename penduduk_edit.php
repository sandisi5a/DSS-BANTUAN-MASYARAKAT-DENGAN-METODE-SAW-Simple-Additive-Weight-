<?php 
include 'css.php';
include 'menu.php';
include 'konek.php';
?>
<div id="wrapper">
	
	
	<div id="page-wrapper">

				<ol class="breadcrumb">
					<li><a href="menu.php"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active"><i class="fa fa-caret-square-o-down"></i> >> Master</a></li>
					<li class="active"> >> Tambah Warga</li>
				</ol>

		
		<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			<script type='text/javascript'>
				$(document).ready(function() {
					$('#frm_user').validate({
						rules:{
							fullName: true,
							address: true,
							gender: true,
							position: true,
							handPhone: true,
							status: true,
							blocked: true,
							username: true,
							password: true
						},
						messages:{
							fullName:{
								required: "This is a required field."
							},
							address:{
								required: "This is a required field."
							},
							gender:{
								required: "This is a required field."
							},
							position:{
								required: "This is a required field."
							},
							handPhone:{
								required: "This is a required field."
							},
							status:{
								required: "This is a required field."
							},
							blocked:{
								required: "This is a required field."
							},
							username:{
								required: "This is a required field."
							},
							password:{
								required: "This is a required field."
							}
						}
					});
					
					$('#frm_reset').validate({
						rules:{
							username: true,
							password: true
						},
						messages:{
							username:{
								required: "This is a required field."
							},
							password:{
								required: "This is a required field."
							}
						}
					});
				});
			</script>
		
		<div class="row">
			<div class="container">
				
				
					<h3>Edit Warga</h3>
					<form role="form" method="POST" action="penduduk_edit_proses.php" id="frm_user">
						<?php
						
						$sql="select * from tbwarga where idpenduduk='$_GET[id_penduduk]' ";
						$qry=mysqli_query($conn, $sql) or die("Query Edit Penduduk Gagal");
						$baris=mysqli_fetch_array($qry);
						?>

						<div class="form-group">
							<label>ID Penduduk</label>
							<input type="text" name="idpenduduk" class="required" value="<?php echo $baris['idpenduduk']; ?>" readonly style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
						</div>
						<div class="form-group">
							<label>NIK Penduduk</label>
							<input type="text" name="nikpenduduk" class="required" value="<?php echo $baris['nikpenduduk']; ?>" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" name="nama" class="required" value="<?php echo $baris['nama']; ?>" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" class="required" value="<?php echo $baris['alamat']; ?>" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select name="jk" class="required" value="<?php echo $baris['jk']; ?>" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
								<option value="">- Pilih Gender -</option>
								<option value="L">Laki-laki</option>
								<option value="P">Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label>Pekerjaan</label>
							<select name="pekerjaan" class="required" <?php echo $baris['pekerjaan']; ?> style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
								<option value="">- Pilih -</option>
								<option value="1">PNS</option>
								<option value="2">Karyawan Swasta</option>
								<option value="3">Harian Lepas</option>
								<option value="4">Serabutan</option>
							</select>
						</div>
						
						<div class="form-group">
							<label>Penghasilan</label>
							<select name="penghasilan" class="required" value="<?php echo $baris['penghasilan']; ?>" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
								<option value="">- Pilih Penghasilan -</option>
								<option value="4">Rp. 1.000.000 - 2.000.000</option>
								<option value="3">Rp. 2.000.000 - 3.000.000</option>
								<option value="2">Rp. 3.000.000 - 4.000.000</option>
								<option value="1">Rp. 4.000.000 - 10.000.000</option>
							</select>
						</div>
						<div class="form-group">
							<label>No. HP</label>
							<input type="text" name="hp" class="required" value="<?php echo $baris['hp']; ?>" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
						</div>
						<div class="form-group">
							<label>Status</label>
							<select name="status" class="required" value="<?php echo $baris['status']; ?>" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
								<option value="">- Pilih Status -</option>
								<option value="2">Sudah Menikah</option>
								<option value="1">Belum Menikah</option>
							</select>
						</div>
						<div class="form-group">
							<label>Jumlah Anak</label>
							<select name="jumlahanak" class="required" value="<?php echo $baris['jumlahanak']; ?>" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
								<option value="">- Jumlah -</option>
								<option value="1">Belum punya</option>
								<option value="2">1 Anak</option>
								<option value="3">2 Anak</option>
								<option value="4">3 Anak</option>
								<option value="5">4 Anak</option>
								<option value="6">5 Anak</option>
								<option value="7">6 Anak</option>
							</select>
						</div>
						<div class="form-group">
							<label>Tempat Tinggal</label>
							<select name="tempattinggal" class="required" value="<?php echo $baris['tempattinggal']; ?>" style="display: block; width: 270px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
								<option value="">- Pilih -</option>
								<option value="1">Rumah Pribadi</option>
								<option value="2">Kontrakan</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Update</button>
					</form>
				
				


		</div>
	</div>
</div><!-- /#wrapper -->
