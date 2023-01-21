<?php 

	include "config/config.php";

	$sql = mysqli_query($con, "SELECT * FROM tbl_klien");
	$data = mysqli_fetch_array($sql);

 ?>

 			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color: black;">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Daftar Hubungan Klien</li>
			  </ol>
			</nav>

<h4 style="background-image: linear-gradient(#00CED1, #0000FF); color: white; width: 27%; border-radius: 10px;">HUBUNGAN CLIENT'S</h4><hr style="margin-top: -8px;">
 <img src="assets/file/klien/<?= $data['img'] ?>" style="width: 100%; border: aqua solid 5px; border-radius: 10px;">
 <p align="center" style="font-size: 18px; font-weight: 500; margin-bottom: 50px;"><?= $data['title'] ?></p>

 <p style="font-size: 18px; font-weight: 500; text-indent: 50px;"><?= $data['isi'] ?></p>