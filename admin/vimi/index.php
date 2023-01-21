<?php 

	$sql = mysqli_query($con, "SELECT * FROM tbl_vimi");
	$data = mysqli_fetch_array($sql);

 ?>

<script>
$(document).ready(function() {
	$('#summernote').summernote();
		});
</script>

	<style>

		.note-editor .dropdown-toggle::after{
			all: unset;
		}
		
		.note-editor .note-dropdown-menu{
			box-sizing: content-box;
		}

		.note-editor .note-modal-footer{
			box-sizing: content-box;
		}

	</style>

<div class="row">
	<div class="col-lg-10 col-xs-12">
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
                                    <label for="summernote">Keterangan Isi</label>
                                    <textarea class="form-control" name="isi" id="summernote" style="height:250px"><?= $data['isi'] ?></textarea>
                        </div>
						<div class="col-lg-12 mt-1">
							<button name="submit" name="submit" class="btn btn-primary btn-block">Edit Data</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Gambar Data Visi & Misi</h5>
			</div>
			<div class="card-body">
				<img src="../assets/file/vimi/<?= $data['img'] ?>" style="width: 100%;height: 30vh;">
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Isi Data Visi & Misi</h5>
			</div>
			<div class="card-body">
				<p><?= $data['isi'] ?></p>
			</div>
		</div>
	</div>
</div>

<?php 

	if(isset($_POST['submit'])) {
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
					move_uploaded_file($file_tmp, '../assets/file/vimi/'. $gambar);
					$sql = mysqli_query($con, "UPDATE tbl_vimi SET img='$gambar', isi='$isi'");
					echo "<script>alert('Data Berhasil Di ubah!')</script>";
					echo "<script>window.location.href='index.php?page=vimi'</script>";
				}
			} 
		} else {
			$gambar = $data['gambar'];
			$sql = mysqli_query($con, "UPDATE tbl_vimi SET img='$gambar', isi='$isi'");
			echo "<script>alert('Data Berhasil Di ubah!')</script>";
			echo "<script>window.location.href='index.php?page=vimi'</script>";
		}
	}
 ?>

