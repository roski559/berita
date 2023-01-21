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
							<label for="judul">Judul</label>
							<input id="judul" type="text" name="judul" placeholder="Masukkan Judul" class="form-control">
						</div>
						<div class="col-lg-12">
							<label for="sinopsis">Sinopsis</label>
							<input id="sinopsis" type="text" name="sinopsis" placeholder="Masukkan Judul" class="form-control">
						</div>
						<div class="col-lg-6 mt-3">
							<label>Kategori</label>
							<select name="kategori" class="form-control">
								<!-- <option value="" disabled="">-- Kategori --</option>
								<option value="info-umum">Info Umum</option>
								<option value="kontak">Kontak</option> -->
								<option value="berita">Berita</option>								
							</select>
						</div>
						<div class="col-lg-6 mt-3">
							<label for="img1">Gambar Utama Berita</label>
							<input id="img1" type="file" name="file" class="form-control">
							<p class="text-danger mt-1" style="font-size: 12px;">Ekstensi File yang di perbolehkan : jpg, png max. 4MB</p>
							<input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
						</div>
						<div class="col-lg-6 mt-3">
							<label for="img2">Gambar Thumbnail Berita</label>
							<input id="img2" type="file" name="file1" class="form-control">
							<p class="text-danger mt-1" style="font-size: 12px;">Ekstensi File yang di perbolehkan : jpg, png max. 4MB</p>
							<input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
						</div>
						<div class="col-lg-12 mt-3">
							<label for="artikel">Artikel</label>
							<textarea id="artikel" class="form-control" name="artikel" cols="30" rows="10"></textarea>
						</div>
						<div class="col-lg-12 mt-3">
							<button name="submit" class="btn btn-primary btn-block">Tambah</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 

	if(isset($_POST['submit'])) {
		$judul = $_POST['judul'];
		$kategori = $_POST['kategori'];
		$date = $_POST['tanggal'];
		$artikel = $_POST['artikel'];
		$sinopsis = $_POST['sinopsis'];
		// Set Upload Gambar
		$ekstensi_boleh = array('png', 'jpg', 'jpeg', 'svg', 'webp', 'jfif');
		$gambar = $_FILES['file']['name'];
		$ex = explode('.', $gambar);
		$ekstensi = strtolower(end($ex));
		$ukuran = $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];
		// Set Upload Gambar
		$ekstensi_boleh1 = array('png', 'jpg', 'jpeg', 'svg', 'webp', 'jfif');
		$gambar1 = $_FILES['file1']['name'];
		$ex1 = explode('.', $gambar1);
		$ekstensi1 = strtolower(end($ex1));
		$ukuran1 = $_FILES['file1']['size'];
		$file_tmp1 = $_FILES['file1']['tmp_name'];

			if(in_array($ekstensi, $ekstensi_boleh) === true) {
				if($ukuran < 4000000) {
					move_uploaded_file($file_tmp, '../assets/file/post/'. $gambar);
					$sql = mysqli_query($con, "INSERT INTO tbl_posts VALUES ('', '$gambar', '$judul', '$artikel', '$date', '$kategori', '$sinopsis')");
					echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
					echo "<script>window.location.href='index.php?page=tampil-beranda'</script>";
				} else {
					echo "<script>alert('Ukuran tidak boleh > 4MB')</script>";
				}
			} else {
				echo "<script>alert('Ekstensi tidak sesuai')</script>";
			}

			if(in_array($ekstensi1, $ekstensi_boleh1) === true) {
				if($ukuran1 < 4000000) {
					move_uploaded_file($file_tmp1, '../assets/file/thumbnail/'. $gambar1);
					$sql = mysqli_query($con, "INSERT INTO tbl_posts VALUES ('', '$gambar', '$gambar1', '$judul', '$artikel', '$date', '$kategori', '$sinopsis')");
					echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
					echo "<script>window.location.href='index.php?page=tampil-beranda'</script>";
				} else {
					echo "<script>alert('Ukuran tidak boleh > 4MB')</script>";
				}
			} else {
				echo "<script>alert('Ekstensi tidak sesuai')</script>";
			}
	}

 ?>