<?php 

	$id = $_GET['id'];

	$sql = mysqli_query($con, "SELECT * FROM tbl_posts WHERE id_post='$id'");
	$data = mysqli_fetch_array($sql);

 ?>

<div class="row">
	<div class="col-lg-10 m-auto">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Form <?= $_GET['page'] ?></h5>
			</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-12">
							<label for="judul">Judul Artikel</label>
							<input id="judul" type="text" name="judul" placeholder="Masukkan Judul" class="form-control" value="<?= $data['judul'] ?>">
						</div>
						<div class="col-lg-12">
							<label for="sinopsis">Sinopsis</label>
							<input id="sinopsis" type="text" name="sinopsis" placeholder="Masukkan Sinopsis" class="form-control" value="<?= $data['sinopsis'] ?>">
						</div>
						<div class="col-lg-6 mt-3">
							<label for="kategori">Kategori</label>
							<input id="kategori" type="text" name="kategori" class="form-control" value="<?= $data['kategori'] ?>" readonly>
							<!-- <select name="kategori" class="form-control">
								<option value="" disabled="">-- Kategori --</option>
								<option value="<?= $data['kategori'] ?>"><?= $data['kategori'] ?></option>
								<option value="Info-umum">Info Umum</option>
								<option value="Berita">Berita</option>
								<option value="Kontak">Kontak</option>
							</select> -->
						</div>
						<div class="col-lg-6 mt-3">
							<label for="file">Gambar Utama</label>
							<input id="file" type="file" name="file" class="form-control" value="<?= $data['img'] ?>">
							<input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
						</div>
						<div class="col-lg-6 mt-3">
							<label for="file1">Gambar Thumbnail</label>
							<input id="file1" type="file" name="file1" class="form-control" value="<?= $data['thumbnail'] ?>">
							<input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
						</div>
						<div class="col-lg-12 mt-3">
							<label for="artikel">Deskripsi Artikel</label>
							<textarea class="form-control" name="artikel" id="artikel" cols="30" rows="10"><?= $data['artikel'] ?></textarea>
						</div>
						<div class="col-lg-12 mt-3">
							<button name="submit" class="btn btn-primary btn-block">Edit Data</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 

	if(isset($_POST['submit'])) {
		$id = $_GET['id'];
		$judul = $_POST['judul'];
		$kategori = $_POST['kategori'];
		$date = $_POST['tanggal'];
		$artikel = $_POST['artikel'];
		$sinopsis = $_POST['sinopsis'];
		// Set Upload Gambar Utama
		$ekstensi_boleh = array('png', 'jpg', 'jpeg', 'svg', 'webp', 'jfif');
		$gambar = $_FILES['file']['name'];
		$ex = explode('.', $gambar);
		$ekstensi = strtolower(end($ex));
		$ukuran = $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];
		//set Upload Gambar Thumbnail
		$ekstensi_boleh1 = array('png', 'jpg', 'jpeg', 'svg', 'webp', 'jfif');
		$gambar1 = $_FILES['file1']['name'];
		$ex1 = explode('.', $gambar1);
		$ekstensi1 = strtolower(end($ex1));
		$ukuran1 = $_FILES['file1']['size'];
		$file_tmp1 = $_FILES['file1']['tmp_name'];

		$sql= mysqli_query($con, "SELECT * FROM tbl_posts WHERE id_post='$id'");
		$data = mysqli_fetch_array($sql);

			if(!empty($gambar)) {
				if(in_array($ekstensi, $ekstensi_boleh) === true) {
					if($ukuran < 4000000) {
						move_uploaded_file($file_tmp,'../assets/file/post/'. $gambar);
						$sql = mysqli_query($con, "UPDATE tbl_posts SET img='$gambar', judul='$judul', artikel='$artikel', sinopsis='$sinopsis', kategori='$kategori' WHERE id_post='$id'");
						echo "<script>alert('Data Berhasil Di ubah!')</script>";
						echo "<script>window.location.href='index.php?page=tampil-beranda'</script>";
					}
				} 
			} else {
				$gambar = $data['img'];
				$sql = mysqli_query($con, "UPDATE tbl_posts SET img='$gambar', judul='$judul', artikel='$artikel', sinopsis='$sinopsis', kategori='$kategori' WHERE id_post='$id'");
				echo "<script>alert('Data Berhasil Di ubah!')</script>";
				echo "<script>window.location.href='index.php?page=tampil-beranda'</script>";
			}

		$sql= mysqli_query($con, "SELECT * FROM tbl_posts WHERE id_post='$id'");
		$data = mysqli_fetch_array($sql);

			if(!empty($gambar1)) {
				if(in_array($ekstensi1, $ekstensi_boleh1) === true) {
					if($ukuran1 < 4000000) {
						move_uploaded_file($file_tmp1,'../assets/file/thumbnail/'. $gambar1);
						$sql = mysqli_query($con, "UPDATE tbl_posts SET thumbnail='$gambar1', judul='$judul', artikel='$artikel', sinopsis='$sinopsis', kategori='$kategori' WHERE id_post='$id'");
						echo "<script>alert('Data Berhasil Di ubah!')</script>";
						echo "<script>window.location.href='index.php?page=tampil-beranda'</script>";
					}
				} 
			} else {
				$gambar1 = $data['thumbnail'];
				$sql = mysqli_query($con, "UPDATE tbl_posts SET thumbnail='$gambar1', judul='$judul', artikel='$artikel', sinopsis='$sinopsis', kategori='$kategori' WHERE id_post='$id'");
				echo "<script>alert('Data Berhasil Di ubah!')</script>";
				echo "<script>window.location.href='index.php?page=tampil-beranda'</script>";
			}
	}

 ?>