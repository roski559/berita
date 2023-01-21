<?php 

	include "config/config.php";

	$query = mysqli_query($con, "SELECT * FROM tbl_posts WHERE kategori='berita' ORDER BY date DESC");

 ?>

 <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color: black;">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Media dan Informasi</li>
			  </ol>
			</nav>

<?php foreach($query as $data): ?>
	<div class="col-md-4 col-xs-12 mt-3">
		<h3 class="text-primary" style="height: 100px;"><?= $data['judul'] ?></h3>
		<!-- <img src="assets/file/post/<?= $data['img'] ?>" alt="" class="img-thumbnail"> -->
		<img src="assets/file/thumbnail/<?= $data['thumbnail'] ?>" alt="" class="img-thumbnail">
		<div>
			<i class="ion-calendar">&nbsp; <?= $data['date'] ?> &nbsp;</i>
			<!-- <i class="ion-person">&nbsp; <?= $data['sinopsis'] ?></i> -->
		</div>
		<p class="article-text"><?= substr($data['sinopsis'], 0, 100) ?></p>
		<a href="index.php?page=detail&id=<?= $data['id_post'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
	</div>
<?php endforeach; ?>

<!-- Pagination -->
		<!-- <div class="d-flex justify-content-center">
			<nav aria-label="..." class="mt-5">
			  <ul class="pagination">
			    <li class="page-item">
			      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
			    </li>
			    <li class="page-item active"><a class="page-link" href="#">1</a></li>
			    <li class="page-item" aria-current="page">
			      <a class="page-link" href="#">2</a>
			    </li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#">Next</a>
			    </li>
			  </ul>
			</nav>
		</div> -->
	</div>
</div>
