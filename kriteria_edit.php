<?php 
include 'css.php';
include 'menu.php';
include 'konek.php';
?>
<div id="wrapper">
	
				<ol class="breadcrumb">
					<li><a href="menu.php"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active"><i class="fa fa-caret-square-o-down"></i> >> Master</a></li>
					<li class="active"> >> Edit Kriteria</li>
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
<?php 
$sql ="select * from tbkriteria where id_kriteria='$_GET[idkriteria]' ";
$qry =mysqli_query($conn, $sql) or die("Query Edit Kriteria Salah");
$baris =mysqli_fetch_array($qry);
?>

		<div class="row">
			<div class="container">
				
				
					<h3>Edit Kriteria</h3>
					<form role="form" method="POST" action="kriteria_edit_proses.php" id="frm_user">




						<div class="form-group">
							<label>ID Kriteria</label>
							<input type="text" name="txtidkriteria" class="required" value="<?php echo $baris['id_kriteria']; ?>" readonly style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
						</div>
						<div class="form-group">
							<label>Nama Kriteria</label>
							<input type="text" name="txtnamakriteria" class="required" value="<?php echo $baris['nama_kriteria']; ?>" readonly style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
						</div>
						<br><br><br>
						<h3>Persentase Kriteria</h3>
						<br>
						<div class="form-group">
							<label>Pekerjaan</label>
							<input type="number" name="txtpekerjaan" class="required" value="<?php echo $krj=$baris['pekerjaan']*100; ?>" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
						</div>
						
						<div class="form-group">
							<label>Penghasilan</label>
							<input type="number" name="txtpenghasilan" class="required" value="<?php echo $hsl=$baris['penghasilan']*100; ?>" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
						</div>
			
						<div class="form-group">
							<label>Status</label>
							<input type="number" name="txtstatus" class="required" value="<?php echo $sts=$baris['status']*100; ?>" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
						<div class="form-group">
							<label>Jumlah Anak</label>
							<input type="number" name="txtjumlahanak" class="required" value="<?php echo $ank=$baris['jumlahanak']*100; ?>" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
						</div>
						<div class="form-group">
							<label>Tempat Tinggal</label>
							<input type="number" name="txttempattinggal" class="required" value="<?php echo $tgl=$baris['tempattinggal']*100; ?>" style="display: block; width: 270px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
						</div>
						<button type="submit" class="btn btn-primary">Update</button>
					</form>
				
				


		</div>
	</div>
</div><!-- /#wrapper -->
