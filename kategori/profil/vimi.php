<?php 

	include "config/config.php";

	$sql = mysqli_query($con, "SELECT * FROM tbl_vimi");
	$data = mysqli_fetch_array($sql);

 ?>

 		<style>
 			
 			.img{
 				width: 800px; 
 				border: black solid 3px;
  			}


 			@media only screen and (max-width: 560px) {
			  .img{
			  	width: 300px;
			  	border: black solid 2.5px;
			  }
			}

			/* Smaller than standard 960 (devices and browsers) */
			@media only screen and (max-width: 959px) {}

			/* Tablet Portrait size to standard 960 (devices and browsers) */
			@media only screen and (min-width: 768px) and (max-width: 959px) {}

			/* All Mobile Sizes (devices and browser) */
			@media only screen and (max-width: 767px) {}

			/* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
			@media only screen and (min-width: 480px) and (max-width: 767px) {}

			/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
			@media only screen and (max-width: 479px) {}

 		</style>

 			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color: black;">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Profil</li>
			    <li class="breadcrumb-item active" aria-current="page">Visi & Misi Perusahaan</li>
			  </ol>
			</nav>

<h4 style="background-image: linear-gradient(#00CED1, #0000FF); color: white; width: 200px; border-radius: 10px;">VISI & MISI</h4><hr style="margin-top: -8px;">
 <center><img src="assets/file/vimi/<?= $data['img'] ?>" class="img"></center>
 <p class="text"><?= $data['isi'] ?></p>