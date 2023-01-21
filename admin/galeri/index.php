<?php 

	include "../config/config.php";

	$sql = mysqli_query($con, "SELECT * FROM tbl_gallery");

 ?>
<div class="row">
	<div class="col-lg-10 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Form Galeri Produk</h5>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12">
						<form method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="file">Masukkan File</label>
								<input type="file" name="file" class="form-control">
								<p class="text-danger mt-1" style="font-size: 12px;">Ekstensi File yang di perbolehkan : jpg, png max. 4MB</p>
							</div>
							<div class="form-group">
								<label for="judul">Judul</label>
								<input type="text" id="judul" name="judul" placeholder="Masukkan Judul" class="form-control">
							</div>	
							<div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<textarea class="form-control" id="deskripsi" name="deskripsi" cols="30" rows="10"></textarea>
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

	<div class="col-lg-15 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Produk Gambar Diunggah</h5>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th width="30">No</th>
						<th class="text-center">Gambar</th>
						<th class="text-center">Judul</th>
						<th>Deskripsi</th>
						<th class="text-center">Aksi</th>
					</tr>
				<?php 
					$no = 1;
					foreach($sql as $data):
				 ?>
					<tr>
						<th><?= $no++; ?></th>
						<th class="text-center"><img src="../assets/img/produk/<?= $data['gambar'] ?>" width="100" height="50"></th>
						<th class="text-center"><p><?= $data['judul'] ?></p></th>
						<th><p><?= $data['deskripsi'] ?></p></th>
						<th class="text-center">
							<a href="index.php?page=hapus-galeri&id=<?= $data['id_img'] ?>" class="btn btn-danger">
								<i class="fas fa-trash"></i>
							</a>
							<a href="index.php?page=edit-galeri&id=<?=$data['id_img'] ?>" class="btn btn-warning text-white">
								<i class="fas fa-edit"></i>
						</th>
					</tr>
				<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
	
</div>

<?php 

	include "../config/config.php";

	if(isset($_POST['submit'])) {
		// set judul dan deskripsi
		$judul = $_POST['judul'];
		$deskripsi = $_POST['deskripsi'];
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
					move_uploaded_file($file_tmp, '../assets/img/produk/'. $gambar);
					$sql = mysqli_query($con, "INSERT INTO tbl_gallery VALUES ('', '$judul', '$gambar', '$deskripsi')");
					echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
					echo "<script>window.location.href='index.php?page=galeri'</script>";
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