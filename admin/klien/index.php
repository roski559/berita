<?php 

	// $sql = mysqli_query($con, "SELECT * FROM tbl_klien");
	// $data = mysqli_fetch_array($sql);
	
	$sql = mysqli_query($con, "SELECT * FROM tbl_klien");
	$data = mysqli_fetch_array($sql);

 ?>

 	<style>
 		
 		.input{
 			width: auto;
 			height: 300px;
 		}

 	</style>

<div class="row">
	<div class="col-lg-4 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Gambar Data Hubungan Klien</h5>
			</div>
			<div class="card-body">
				<img src="../assets/file/klien/<?= $data['img'] ?>" style="width: 100%;height: 30vh;">
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Title Data</h5>
			</div>
			<div class="card-body">
				<p><?= $data['title'] ?></p>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Isi Data</h5>
			</div>
			<div class="card-body">
				<p><?= $data['isi'] ?></p>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Form <?= $_GET['page'] ?></h5>
			</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-12 mt-3">
							<label for="file">Masukkan File Gambar</label>
							<input type="file" name="file" class="form-control" value="<?= $data['img'] ?>">
							<p class="text-danger mt-2" style="font-size: 12px;">Ukuran Gambar MAX 5MB</p>
						</div>
						<div class="col-lg-12 mt-3">
                            <label for="title">Keterangan Isi</label>
                            <textarea class="form-control" name="title" id="title" style="height:150px"><?= $data['title'] ?></textarea>
                        </div>
						<div class="col-lg-12 mt-3">
                            <label for="isi">Keterangan Isi</label>
                            <textarea class="form-control" name="isi" id="isi" style="height:250px"><?= $data['isi'] ?></textarea>
                        </div>
						<div class="col-lg-12 mt-1">
							<button name="submit" name="submit" class="btn btn-primary btn-block">Edit Data</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 

	if(isset($_POST['submit'])) {
		$title = $_POST['title'];
		$isi = $_POST['isi'];
		// Set Upload Gambar
		$ekstensi_boleh = array('png', 'jpeg', 'jfif', 'svg', 'jpg', 'webp');
		$gambar = $_FILES['file']['name'];
		$ex = explode('.', $gambar);
		$ekstensi = strtolower(end($ex));
		$ukuran = $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];

		if(!empty($gambar)) {
			if(in_array($ekstensi, $ekstensi_boleh) === true) {
				if($ukuran < 5000000) {
					move_uploaded_file($file_tmp, '../assets/file/klien/'. $gambar);
					$sql = mysqli_query($con, "UPDATE tbl_klien SET img='$gambar', title='$title', isi='$isi'");
					echo "<script>alert('Data Berhasil Di ubah!')</script>";
					echo "<script>window.location.href='index.php?page=klien'</script>";
				}
			} 
		} else {
			$gambar = $data['img'];
			$sql = mysqli_query($con, "UPDATE tbl_klien SET img='$gambar', title='$title', isi='$isi'");
			echo "<script>alert('Data Berhasil Di ubah!')</script>";
			echo "<script>window.location.href='index.php?page=klien'</script>";
		}
	}
 ?>