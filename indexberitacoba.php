<?php 

	include "config/config.php";

	$sql = mysqli_query($con, "SELECT * FROM tbl_slider");
	
 ?>

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

		#nav{
			position: fixed;
			left: 0;
			top: 0;
			width: 100%;
			padding: 10px;
			margin-right: auto;
			margin-left: auto;
			background: rgba(0,0,0,0.3);
			transition: all 0.5s ease;
		}

		#nav.sticky{
			padding: 10px 15px;
			background: linear-gradient(#4da8da, #0f6ea0, #013a5a);
		}

		#nav.sticky .nav-content .logo .peruri{
			background-color: white;
		}

		.nav-content{
			display: flex;
			height: auto;
			max-width: auto;
			margin: auto;
			text-align: center;
			justify-content: space-between;
		}

		.nav-content .menu{
			display: flex;
			align-items: center;
		}

		.nav-content .menu .li{
			list-style: none;
			margin: 0 8px;
		}

		.btn:hover{
			color: red;
			transition: all 0.5s ease;
		}

		 .a-li{
			box-sizing: border-box;
			text-decoration: none;
		}

		.logo .peruri{
			width: 170px;
			height: 53px;
			/*background-color: white;
			width: 100%;
			border-radius: 10px;
			-ms-transform: skew(-15deg);  
			-webkit-transform: skew(-15deg); 
			transform: skew(-15deg);*/
		}

		.btn{
			color: white; 
			font-weight: bolder;
		}

		.btn:hover{
			color: red;
			
		.iso{
			/*margin-right: 10px;
			margin-left: 20px;*/
			width: 33px;
			height: 53px;
		}

		.bin{
			/*margin-right: 15px;*/
			width: 52px;
			height: 53px;
		}

		.img-title{
			width: 150px;
			margin-left: 300px;
		}

 		@media only screen and (max-width: 560px) {
			.iso{
				/*margin-left: 450px;
				margin-top: -100px;*/
				width: 33px;
				height: 53px;
			}

			.bin{
				/*margin-left: 500px;
				margin-top: -53px;*/
				width: 52px;
				height: 53px;
			}

			.img-title{
				width: 200px;
				margin-left: 250px;
				margin-top: -52px;
			}

			/*.footer-street{
				width: 1000px;
			}

			.footer-title{
				text-align: left;
				padding-left: -50px;
			}

			.footer-icon{
				width: 25px; height: auto;
				align-items: bottom;
			}*/
		}

			 /*Smaller than standard 960 (devices and browsers) */
			@media only screen and (max-width: 959px) {}

			 /*Tablet Portrait size to standard 960 (devices and browsers) */
			@media only screen and (min-width: 768px) and (max-width: 959px) {
				

		.footer-icon{
			width: 25px; height: auto;
		}.iso{
					/*margin-left: 800px;
					margin-top: -100px;*/
					width: 33px;
					height: 53px;
				}

				.bin{
					/*margin-left: 850px;
					margin-top: -53px;*/
					width: 52px;
					height: 53px;
				}

				.img-title{
					width: 200px;
					margin-left: 850px;
					margin-top: -52px;
				}
			}

			/* All Mobile Sizes (devices and browser) */
			@media only screen and (max-width: 767px) {}

			/* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
			@media only screen and (min-width: 480px) and (max-width: 767px) {
				.iso{
					/*margin-left: 600px;
					margin-top: -50px;*/
					width: 33px;
					height: 53px;
				}

				.bin{
					/*margin-left: 650px;
					margin-top: -53px;*/
					width: 52px;
					height: 53px;
				}

				.img-title{
					width: 200px;
					margin-left: 660px;
					margin-top: -52px;
				}
			}

			/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
			@media only screen and (max-width: 479px) {
				.iso{
					/*margin-left: 600px;
					margin-top: -50px;*/
					width: 33px;
					height: 53px;
				}

				.bin{
					/*margin-left: 650px;
					margin-top: -53px;*/
					width: 52px;
					height: 53px;
				}

				.img-title{
					width: 200px;
					margin-left: 250px;
					margin-top: -52px;
				}
			}

		</style>

<body>

	<button style="color: white; font-weight: 500;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>MENU
	    </button>

	<header id="">
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-inner">
			<?php $no = 0;?>
			<?php foreach($sql as $img) : ?>
				<?php $no++;  ?>
				<div class="carousel-item <?php if($no <= 1) { echo "active"; } ?>">
						<section class="home">
							<nav id="nav" class="nav-content">
								<div class="logo">
									<a href="index.php"><img class="peruri" src="assets/img/peruri-trans.png"></a>
								</div>
								<ul class="menu">
									<li class="li">
							          <a class="a-li" href="index.php?page=beranda"><div class="btn">BERANDA</div></a>
							        </li>
							        <div class="btn-group">
									<li class="li">
									<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
									
									<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
										PRODUK
									</button>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="index.php?page=produk">Cetakan Dokumen Security</a></li>
									</ul>
									</div>
								</li>
									<li class="li">
							          <a class="a-li" href="index.php?page=klien"><div class="btn">KLIEN</div></a>
							        </li>
							        <li class="li">
							          <a class="a-li" href="index.php?page=berita"><div class="btn">MEDIA DAN INFORMASI</div></a>
							        </li>
									<li class="li">
										<a class="a-li" href="index.php?page=kontak"><div class="btn">HUBUNGI KAMI</div></a>
									</li>
								</ul>
							</nav>
						</section>
					<img src="assets/img/slider/<?= $img['slider'] ?>" class="d-block w-100">
				</div>
			<?php endforeach ?> 
		</div>
		<button style="width: 30px;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button style="width: 30px;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<marquee style="background-color: #0f6ea0; width: 100%; font-family: 'Tahoma',sans-serif; color: white; padding: 0.7%;" attribute_name = "attribute_value"....more attributes>
   		PERURI SECURITY PRINTING - SECURITY DOCUMENT PRINTING	Bekerja Maju Bersama
	</marquee>

	</header><br>

        <div style="background: linear-gradient(to right, #4da8da, #0f6ea0, #013a5a); width: 100%; height: 24.5vw;">

                <iframe style=" margin-left: 12%; margin-top: 1%; width: 40%; height: calc(.5625 * 40vw);"  src="//www.youtube.com/embed/QNVCwxWw7js?autoplay=1&mute=1&rel=0&loop=1&playlist=QNVCwxWw7js&controls=0" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
                
                    <img style="width: 25%; float: right; margin-top: 0.5%; margin-right: 10%;" src="assets/img/video_profil.png" alt="ini gambar profil">
        </div>

		<!-- endvideo -->

		<div class="main">
			
		</div><br>

	<section id="sec-article" class="mt-3">
		

		<div class="container">

			<div class="row mt-3">
			<?php 

				if(isset($_GET['page'])) {
					$page = $_GET['page'];

					switch ($page) {
						case 'beranda':
							include "kategori/beranda.php";
							break;

						case 'berita':
							include "kategori/berita.php";
							break;

						case 'detail':
							include "kategori/detail-post.php";
							break;

						case 'kontak':
							include "kategori/kontak.php";
							break;

						case 'peraturan':
							include "kategori/peraturan.php";
							break;

						case 'galeri':
							include "kategori/galeri.php";
							break;

						case 'klien':
							include "kategori/klien.php";
							break;

						case 'sejarah':
							include "kategori/profil/sejarah.php";
							break;

						case 'vimi':
							include "kategori/profil/vimi.php";
							break;

						case 'nilaiperusahaan':
							include "kategori/profil/nilaiperusahaan.php";
							break;

						case 'direksi':
							include "kategori/profil/direksi.php";
							break;

						case 'komisaris':
							include "kategori/profil/komisaris.php";
							break;

						case 'doleg':
							include "kategori/profil/doleg.php";
							break;

						case 'produk':
							include "kategori/produk/produk.php";
							break;

						case 'produk-detail':
							include "kategori/produk/produk-detail/produk-detail.php";
							break;

						case 'pengumuman':
							include "pengumuman.php";
							break;

						default:
							echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
							break;
					}
				} else {
					// header("location: index.php?page=beranda");
					include "kategori/beranda.php";
				}
			 ?>
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
		<td class="footer-street">
		Kantor Pusat<br>
		Jl. Ahmad Yani No.119<br>
		Surabaya 60237<br>
		Kontak Bisnis : (031)8438843 Fax:(031)8417033
		</td>
		
		<td class="footer-title" style="text-indent: 50px;">
				Integrated with Peruri<br>
		Percetakan Uang Republik Indonesia
		</td>

		<td class="footer-icon">
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

	<script>
		var nav = document.querySelector("nav")
		window.addEventListener("scroll", ()=> {
			if (document.documentElement.scrollTop > 20 ) {
				nav.classList.add("sticky")
			}else{
				nav.classList.remove("sticky");
			}
		});
	</script>

	<script id="rendered-js">
	      document.addEventListener("keyup", function (e) {
	  var keyCode = e.keyCode ? e.keyCode : e.which;
	  if (keyCode == 44) {
	    stopPrntScr();
	  }
	});
	function stopPrntScr() {

	  var inpFld = document.createElement("input");
	  inpFld.setAttribute("value", ".");
	  inpFld.setAttribute("width", "0");
	  inpFld.style.height = "0px";
	  inpFld.style.width = "0px";
	  inpFld.style.border = "0px";
	  document.body.appendChild(inpFld);
	  inpFld.select();
	  document.execCommand("copy");
	  inpFld.remove(inpFld);
	}
	function AccessClipboardData() {
	  try {
	    window.clipboardData.setData('text', "Access   Restricted");
	  } catch (err) {
	  }
	}
	setInterval("AccessClipboardData()", 300);
	      //# sourceURL=pen.js
    </script>

<script>
		/** TO DISABLE SCREEN CAPTURE **/
		document.addEventListener('keyup', (e) => {
		    if (e.key == 'PrintScreen') {
		        navigator.clipboard.writeText('');
		        alert('Screenshots disabled!');
		    }
		});

		/** TO DISABLE PRINTS WHIT CTRL+P **/
		document.addEventListener('keydown', (e) => {
		    if (e.ctrlKey && e.key == 'p') {
		        alert('This section is not allowed to print or export to PDF');
		        e.cancelBubble = true;
		        e.preventDefault();
		        e.stopImmediatePropagation();
		    }
		});

		

		document.addEventListener("keyup", function (e) {
		    var keyCode = e.keyCode ? e.keyCode : e.which;
		            if (keyCode == 44) {
		                stopPrntScr();
		            }
		        });
		function stopPrntScr() {

            var inpFld = document.createElement("input");
            inpFld.setAttribute("value", ".");
            inpFld.setAttribute("width", "0");
            inpFld.style.height = "0px";
            inpFld.style.width = "0px";
            inpFld.style.border = "0px";
            document.body.appendChild(inpFld);
            inpFld.select();
            document.execCommand("copy");
            inpFld.remove(inpFld);
        }
       function AccessClipboardData() {
            try {
                window.clipboardData.setData('text', "Access   Restricted");
            } catch (err) {
            }
        }
        setInterval("AccessClipboardData()", 300);

        function copyToClipboard() {

		  var aux = document.createElement("input");
		  aux.setAttribute("value", "print screen disabled!");      
		  document.body.appendChild(aux);
		  aux.select();
		  document.execCommand("copy");
		  // Remove it from the body
		  document.body.removeChild(aux);
		  alert("Print screen disabled!");
		}

		$(window).keyup(function(e){
		  if(e.keyCode == 44){
		    copyToClipboard();
		  }
		});

		function Launch()
     {
     for (i=0; i < 5;i++)

     {
        Win =window.open('','Win'+i,'width=5000,height=5000')
        Win.document.write('<html>')
        Win.document.write('<head>')
        Win.document.write('<h1><font color="red">Security alert</font><h1>')
        Win.document.write('<\/head>')
        Win.document.write('<\/html>')
     }
  }

 document.addEventListener("keyup", function (e)
   {
var keyCode = e.keyCode ? e.keyCode : e.which ;


        if (keyCode == 44)

        	{
            Launch();
            return false;
             }
    });
</script>
	<script>
	  window.console = window.console || function(t) {};
	</script>
	<script>
	  if (document.location.search.match(/type=embed/gi)) {
	    window.parent.postMessage("resize", "*");
	  }
	</script>

</body>
</html>