<?php 

	include "config/config.php";

	$id = $_GET['id'];

	$image = mysqli_query($con, "SELECT * FROM tbl_gallery WHERE id_img='$id'");
	$gmbr = mysqli_fetch_array($image);
	
 ?>

  			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color: black;">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Produk</li>
			    <li class="breadcrumb-item active" aria-current="page">Detail</li>
			  </ol>
			</nav>


	<h4 style="background-image: linear-gradient(#00CED1, #0000FF); color: white; width: 300px; border-radius: 10px; "><?= $gmbr['judul'] ?></h4><hr style="margin-top: -8px; width: 100%;">
	<center><img style="border: 2px solid black; width: 45%; margin-top: 8px;" src="assets/img/produk/<?= $gmbr['gambar'] ?>"></center>		
	<p class="mt-4 text-justify"><?= $gmbr['deskripsi'] ?></p>

	<a href="index.php?page=produk" style="border-radius: 8px; border: 2px solid black; text-decoration: none; color: white; font-weight: 500; width: 100px; text-align: center; background: linear-gradient( #4da8da, #0f6ea0, #013a5a);">Kembali</a>