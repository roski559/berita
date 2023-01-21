<?php 

	$sql = mysqli_query($con, "SELECT * FROM tbl_direksi");

 ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h5>Data Postingan Direksi</h5>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr class="text-center">
						<th>No</th>
						<th>Image</th>
						<th>Artikel</th>
						<th>Aksi</th>
					</tr>
				<?php $no = 1; foreach($sql as $data): ?>
					<tr>
						<td><?= $no++; ?></td>
						<td><?= substr($data['artikel'], 0, 100) ?></td>
						<td class="text-center">
							<img src="../assets/img/direksi/<?= $data['img'] ?>" width="80" height="50">
						</td>
						<td class="text-center">
							<a href="index.php?page=hapus-direksi&id=<?=$data['id_direksi'] ?>" class="btn btn-danger">
								<i class="fas fa-trash"></i>
							</a>
							<a href="index.php?page=edit-direksi&id=<?=$data['id_direksi'] ?>" class="btn btn-warning text-white">
								<i class="fas fa-edit"></i>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
</div>