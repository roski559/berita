<?php 

	$id = $_GET['id'];

	$sql = mysqli_query($con, "SELECT * FROM tbl_gallery WHERE id_img='$id'");
	$data = mysqli_fetch_array($sql);

 ?>

<div class="col-lg-14 col-xs-12">
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
								<input type="file" name="file" class="form-control" value="<?= $data['gambar'] ?>">
								<p class="text-danger mt-1" style="font-size: 12px;">Ukuran Gambar max. 4MB</p>
							</div>
							<div class="form-group">
								<label for="judul">Judul</label>
								<input id="judul" type="text" name="judul" placeholder="Masukkan Judul" class="form-control" value="<?= $data['judul'] ?>">
							</div>	
							<div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10"><?= $data['deskripsi'] ?></textarea>
							</div>
							<div class="form-group">
								<button name="submit" class="btn btn-primary btn-block">Edit Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php 

	if(isset($_POST['submit'])) {
		$judul = $_POST['judul'];
		$deskripsi = $_POST['deskripsi'];
		// Set Upload Gambar
		$ekstensi_boleh = array('png', 'jpeg', 'jfif', 'svg', 'jpg', 'webp');
		$gambar = $_FILES['file']['name'];
		$ex = explode('.', $gambar);
		$ekstensi = strtolower(end($ex));
		$ukuran = $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];

		if(!empty($gambar)) {
			if(in_array($ekstensi, $ekstensi_boleh) === true) {
				if($ukuran < 4000000) {
					move_uploaded_file($file_tmp, '../assets/img/produk/'. $gambar);
					$sql = mysqli_query($con, "UPDATE tbl_gallery SET judul='$judul', gambar='$gambar', deskripsi='$deskripsi' WHERE id_img='$id'");
					echo "<script>alert('Data Berhasil Di ubah!')</script>";
					echo "<script>window.location.href='index.php?page=tampil-galeri'</script>";
				}
			} 
		} else {
			$gambar = $data['gambar'];
			$sql = mysqli_query($con, "UPDATE tbl_gallery SET judul='$judul', gambar='$gambar', deskripsi='$deskripsi' WHERE id_img='$id'");
			echo "<script>alert('Data Berhasil Di ubah!')</script>";
			echo "<script>window.location.href='index.php?page=tampil-galeri'</script>";
		}
	}
	
 ?>