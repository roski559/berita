
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PERURI SECURITY PRINTING</title>

	<link rel="stylesheet" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="assets/css/bootstrap-utilities.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="icon" href="assets/img/logo_peruri.png">
</head>

		<style>

		.peruri{
			width: 170px;
			height: 53px;
		}
			
		.iso{
			margin-right: 10px;
			margin-left: 20px;
			width: 33px;
			height: 53px;
		}

		.bin{
			margin-right: 15px;
			width: 52px;
			height: 53px;
		}

		.text{
			font-weight: 500;
			text-indent: 20px;
			margin-top: 30px;
		}

		.text1{
			font-weight: 500;
			font-size: 30px;
			margin-top: 20px;
		}

		#i{
			color: #4e4f50;
		}


		</style>

<body>

	<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
			<div class="container-fluid">
			  	<a href="index.php"><img class="peruri" src="assets/img/peruri-trans.png"></a>
			 </div>
				<img class="iso" src="assets/img/iso-medium.jpg">
				<img class="bin" src="assets/img/bin-medium.jpg">
		</nav>
	<!-- end navbar -->
	
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light p-2" style="background: linear-gradient(#4da8da, #0f6ea0, #013a5a);">
	  <div class="container-fluid">
	    <button style="color: white; font-weight: 500;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>MENU
	    </button>
	    <div class="collapse navbar-collapse" id="navbarScroll">
		      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px; margin-left: auto; margin-right: auto; text-indent: 25px;">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="index.php?page=beranda"><div style="color: white; font-weight: 500;">BERANDA</div></a>
		        </li>
				<div class="btn-group">
				<button type="button" class="btn dropdown-toggle" style="color: white; font-weight: 500; text-indent: 25px;" data-bs-toggle="dropdown" aria-expanded="false">
					PROFIL
				</button>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="index.php?page=sejarah">Sejarah Perusahaan</a></li>
					<li><a class="dropdown-item" href="index.php?page=vimi">Visi Misi Perusahaan</a></li>
					<li><a class="dropdown-item" href="index.php?page=nilaiperusahaan">Nilai-Nilai Perusahaan</a></li>
					<li><a class="dropdown-item" href="index.php?page=direksi">Direksi</a></li>
					<li><a class="dropdown-item" href="index.php?page=komisaris">Dewan Komisaris</a></li>
					<li><a class="dropdown-item" href="index.php?page=doleg">Dokumen Legalitas</a></li>
				</ul>
				<button type="button" class="btn dropdown-toggle" style="color: white; font-weight: 500; text-indent: 25px;" data-bs-toggle="dropdown" aria-expanded="false">
					PRODUK
				</button>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="index.php?page=produk">Cetakan Dokumen Security</a></li>
				</ul>
				</div>
				<li class="nav-item">
		          <a class="nav-link" href="index.php?page=klien"><div style="color: white; font-weight: 500;">KLIEN</div></a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="index.php?page=berita"><div style="color: white; font-weight: 500;">MEDIA DAN INFORMASI</div></a>
		        </li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?page=kebijakan"><div style="color: white; font-weight: 500;">HUBUNGI KAMI</div></a>
				</li>
		        
		      </ul>
	    </div>
	  </div>
	</nav>
	<!-- end navbar -->

	<header id="">
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img src="assets/img/slider/slider_00.jpg", class="size" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			<img src="assets/img/slider/slider_01.jpg", class="size" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			<img src="assets/img/slider/slider_02.jpg", class="size" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			<img src="assets/img/slider/slider_03.jpg", class="size" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			<img src="assets/img/slider/slider_04.jpg", class="size" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			<img src="assets/img/slider/slider_05.jpg", class="size" class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<marquee style="background-color: #0f6ea0; width: 100%; height: 100%; font-family: 'Tahoma',sans-serif; color: white; padding: 0.7%;" attribute_name = "attribute_value"....more attributes>
   		PERURI SECURITY PRINTING - SECURITY DOCUMENT PRINTING	Bekerja Maju Bersama
	</marquee>

	</header><br>
		<!-- video -->
        <div style="background: linear-gradient(to right, #4da8da, #0f6ea0, #013a5a); width: 100%; height: 24.5vw;">

                <iframe style=" margin-left: 12%; margin-top: 1%; width: 40%; height: calc(.5625 * 40vw);"  src="//www.youtube.com/embed/QNVCwxWw7js?autoplay=1&mute=1&rel=0&loop=1&playlist=QNVCwxWw7js&controls=0" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
                
                    <img style="width: 25%; float: right; margin-top: 0.5%; margin-right: 10%;" src="assets/img/video_profil.png" alt="ini gambar profil">
        </div>

		<!-- endvideo -->

		<div class="main">
			
		</div><br>

	<section id="sec-article" class="mt-3">
		

		<div class="container">

			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color: black;">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
			  </ol>
			</nav>

<h4 style="background-image: linear-gradient(#00CED1, #0000FF); color: white; width: 300px; border-radius: 10px;">PENGUMUMAN</h4><hr style="margin-top: -8px; width: 80%; float: right;">
<p class="text1">Waspada Penipuan Rekrutmen Karyawan Mengatasnamakan Perum Peruri / Peruri Wira Timur</p>
<i id="i" class="ion-calendar">&nbsp; <!-- <?= date("d-m-Y") ?> --> 2 Januari 2017 </i>
 <p class="text">Sehubungan dengan adanya pengumuman penerimaan karyawan yang mengatasnamakan Peruri melalui media online disertai permintaan reservasi tiket atau pembayaran lainnya, dengan ini disampaikan bahwa informasi tersebut tidak benar / palsu. Pengumuman mengenai penerimaan karyawan Peruri Wira Timur secara resmi hanya dipublikasikan melalui situs resmi perusahaan yaitu www.peruriwiratimur.co.id dan tidak dipungut biaya apapun. </p>

		</div>

	</section>

	<footer id="footer" class="mt-5 p-3 bg-dark">
		<div class="container text-center">
		<p class="text-white">&nbsp; Copyright &copy; PERURISECPRINT 2022 | Repost by IT-Tehnik</p>
		</div>
	</footer>

	<div class="home">
		<table width="100%">
		<tr>
		<td>
		Kantor Pusat<br>
		Jl. Ahmad Yani No.119<br>
		Surabaya 60237<br>
		Kontak Bisnis : (031)8438843 Fax:(031)8417033
		</td>
		
		<td style="text-indent: 50px;">
				Integrated with Peruri<br>
		Percetakan Uang Republik Indonesia
		</td>

		<td>
			<a href="https://instagram.com/perurisecurityprinting">
				<img src="assets/img/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"
				 style="width: 25px; height: auto;">
				</a>
			<a href="https://wa.me/6285703195050/">
				<img src="assets/img/icon/fb.png" class="" data-toggle="tooltip" title="Facebook" 
				style="width: 25px; height: auto;">
			</a>
			<a href="https://wa.me/6285703195050/">
				<img src="assets/img/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter" 
				style="width: 25px; height: auto;">
			</a>
			<a href="https://www.youtube.com/channel/UCAUvxdXddRJmr7rbD9n4Wcw">
				<img src="assets/img/icon/youtube.png" class="" data-toggle="tooltip" title="Youtube" 
				style="width: 33px; height: 24.5px;">
			</a>
		</td>
		</tr>
		</table>
	</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>

</body>
</html>