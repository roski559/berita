<?php 

	include "config/config.php";

	$id = $_GET['id'];

	$query = mysqli_query($con, "SELECT * FROM tbl_posts WHERE id_post='$id'");
	$data = mysqli_fetch_array($query);
	
 ?>

 			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color: black;">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Media dan Informasi</li>
			    <li class="breadcrumb-item active" aria-current="page">Detail</li>
			  </ol>
			</nav>

 <div class="col-lg-10 col-xs-12">
	<h3><?= $data['judul'] ?></h3>
	<p class="mt-3 text-muted" style="font-size: 12px;"><i class="ion-calendar"></i>&nbsp;<?= $data['date'] ?>&nbsp;&nbsp;<a href="#" class="text-muted" style="text-transform: uppercase;text-decoration: none;"><?= $data['kategori'] ?></a></p>	
	<img src="assets/file/post/<?= $data['img'] ?>" class="img-fluid">		
	<p class="mt-4 text-justify"><?= $data['artikel'] ?></p>
 </div>
 <div class="col-lg-2"></div>
<a href="index.php?page=berita" style="border-radius: 8px; border: 2px solid black; text-decoration: none; color: white; font-weight: 500; width: 100px; text-align: center; background: linear-gradient( #4da8da, #0f6ea0, #013a5a);">Kembali</a>