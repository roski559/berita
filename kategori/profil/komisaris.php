<?php 

	include "config/config.php";

	$sql = mysqli_query($con, "SELECT * FROM tbl_organisasi");
	$data = mysqli_fetch_array($sql);

 ?>
 		<style>
 			
 			.img{
 				width: 200px;
 			}

 			#img{
 				width: 200px;
 			}

 			.text{
			  	padding-left: 20px;
			}

 			@media only screen and (max-width: 560px) {
			  .img{
			  	width: 100px;
			  	margin-top: -400px;
			  }

			  #img{
			  	width: 100px;
			  	margin-top: -340px;
			  }

			  .text{
			  	padding-left: 15px;
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
			    <li class="breadcrumb-item active" aria-current="page">Dewan Komisaris</li>
			  </ol>
			</nav>

<h4 style="background-image: linear-gradient(#00CED1, #0000FF); color: white; width: 300px; border-radius: 10px;">DEWAN KOMISARIS</h4><hr style="margin-top: -8px;">
 <table cellspacing="5" cellpadding="0">
 	<tbody>
	 	<tr>
	 		<td><img id="img" src="assets/img/komisaris/erlangga.jpg"></td>
	 		<td class="text" style="font-size: 20px; font-weight: 600; color: royalblue;">Erlangga Satriagung
	 			<p style="font-size: 13px; font-weight: 500; color: black;">Komisaris Utama</p>
	 			<p style="font-size: 15px; font-weight: 400; color: black;">Menjabat sebagai Komisaris Utama Peruri Security Printing sesuai dengan Akta Perubahan No. 68 tanggal 28 Oktober 2018. Bapak Erlangga Satriagung meraih gelar Insinyur di Institut Teknologi Sepuluh Nopember pada tahun 1984. Riwayat jabatan:</p>
	 			<ul style="font-size: 15px; font-weight: 400; color: black;">
			 		<li>Komisaris Utama Peruri Security Printing (Oktober 2018 – sekarang)</li>
			 		<li>Direktur PT. Panca Wira Jatim Jawa Timur (Oktober 2018 – sekarang)</li>
			 		<li>Komisaris Utama PT. Jatim Graha Utama</li>
			 		<li>Direktur Jatim Graha Utama</li>
			 	</ul>
	 		</td>
	 	</tr>
	 	<tr>
	 		<td><img class="img" src="assets/img/komisaris/fajar_rizki.jpeg"></td>
	 		<td class="text" style="font-size: 20px; font-weight: 600; color: royalblue; padding-top: 50px;">Fajar Rizki
	 			<p style="font-size: 13px; font-weight: 500; color: black;">Komisaris</p>
	 			<p style="font-size: 15px; font-weight: 400; color: black;">Menjabat sebagai Komisaris Peruri Security Printing sesuai dengan Akta Perubahan No. 20 tanggal 9 Desember 2021. Bapak Fajar Rizki meraih sarjana Ekonomi Manajemen di Universitas Pancasila pada tahun 1993. Kemudian pada 2008 berhasil menyelesaikan gelar Magister Manajemen di Sekolah Tinggi Manajemen PPM, Jakarta. Riwayat jabatan:</p>
	 			<ul style="font-size: 15px; font-weight: 400; color: black;">
			 		<li>Komisaris Peruri Security Printing (Desember 2021 – sekarang)</li>
			 		<li>Direktur Pengembangan Usaha Perum Peruri (Juli 2018 – Sekarang)</li>
			 		<li>Kepala Divisi Pengelolaan Aset dan Anak Perusahaan Perum Peruri</li>
			 		<li>Kepala Divisi Keuangan dan Akuntansi Perum Peruri</li>
			 	</ul>
	 		</td>
	 	</tr>
 	</tbody>
 </table>