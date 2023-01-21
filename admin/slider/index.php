<?php 

	include "../config/config.php";

	$sql = mysqli_query($con, "SELECT * FROM tbl_slider");

 ?>
<div class="row">
	<div class="col-lg-6 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Slider Diunggah</h5>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th width="30">No</th>
						<th class="text-center">Gambar Slider</th>
						<th class="text-center">Aksi</th>
					</tr>
				<?php 
					$no = 1;
					foreach($sql as $img):
				 ?>
					<tr>
						<th><?= $no++; ?></th>
						<th class="text-center"><img src="../assets/img/slider/<?= $img['slider'] ?>" width="180" height="50"></th>
						<th class="text-center">
							<a href="index.php?page=hapus-slider&id=<?= $img['id_slider'] ?>" class="btn btn-danger">
								<i class="fas fa-trash"></i>
							</a>
							<a href="index.php?page=edit-slider&id=<?=$img['id_slider'] ?>" class="btn btn-warning text-white">
								<i class="fas fa-edit"></i>
							</a>
						</th>
					</tr>
				<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Form Slider</h5>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12">
						<form method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="file">Masukkan Gambar</label>
								<input type="file" name="file" class="form-control">
								<p class="text-danger mt-1" style="font-size: 12px;">Ukuran Gambar max. 4MB</p>
							</div>
							<div class="form-group">
								<button name="submit" class="btn btn-primary btn-block">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 

	include "../config/config.php";

	if(isset($_POST['submit'])) {
		// Set Upload Gambar
		$ekstensi_boleh = array('png', 'jpg', 'jpeg', 'svg', 'webp', 'jfif');
		$gambar = $_FILES['file']['name'];
		$ex = explode('.', $gambar);
		$ekstensi = strtolower(end($ex));
		$ukuran = $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];

		if(!empty($gambar)) {
			if(in_array($ekstensi, $ekstensi_boleh) === true) {
				if($ukuran < 4000000) {
					move_uploaded_file($file_tmp, '../assets/img/slider/'. $gambar);
					$sql = mysqli_query($con, "INSERT INTO tbl_slider VALUES ('', '$gambar')");
					echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
					echo "<script>window.location.href='index.php?page=slider'</script>";
				} else {
					echo "<script>alert('Ukuran tidak boleh > 4MB')</script>";
				}
			} else {
				echo "<script>alert('Ekstensi tidak sesuai')</script>";
			}
		} else {
			echo "<script>alert('Mohon memilih file yang akan di upload')</script>";
		}
	}
	
 ?>