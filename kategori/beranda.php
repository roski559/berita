<?php 

	include "config/config.php";

	$query = mysqli_query($con, "SELECT * FROM tbl_posts ORDER BY date desc");
	$image = mysqli_query($con, "SELECT * FROM tbl_gallery");
	
 ?>


			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color: black;">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Beranda</li>
			  </ol>
			</nav>

 		<style>

        	.gallery{
        		margin-bottom: -200px;
        	}

			/*produk*/
			.produk{
        		margin-top: 25px;
        		width: 350px;
        		margin: 10px;
        		padding: 0;
        		margin-left: -15px;
			}

			
        	.gallery .gallery-item{
        		cursor: pointer;
        	}
        	
        	.gallery-item{
        	width: 100%; 
        	border: 1px solid black; 
        	border-bottom: none;
        	max-width: 100%;
        	}

        	.a{
        		text-decoration: none;
        		color: black;
        	}

        	.a:hover{
        		color: #4e4f50;
        	}

        	.text{
        		border: 1px solid black; 
        		width: 100%; 
        		padding-bottom: 5px; 
        		padding-top: 5px; 
        		text-align: center;
        		font-weight: 500;
        		margin-right: 13%;
        	}

        	.gallery .container-lg .produk .swiper {
		        width: 100%; 
		      }

		      .swiper-slide {
		        margin-top: 3%;

		        /* Center slide text vertically */
		        display: -webkit-box;
		        display: -ms-flexbox;
		        display: -webkit-flex;
		        display: flex;
		        -webkit-box-pack: left;
		        -ms-flex-pack: left;
		        -webkit-justify-content: left;
		        justify-content: left;
		        -webkit-box-align: left;
		        -ms-flex-align: left;
		        -webkit-align-items: left;
		        align-items: left;
		      }

		      .swiper-slide img {
		        display: block;
		        width: 330px; 
		        object-fit: cover;
		      }


		      /*berita*/

		      .berita{
        		margin-top: 25px;
        		width: 340px;
        		margin: 10px;
        		padding: 0;
        		margin-left: 2px;
        		/*border: 1px solid black;*/
     		}

			.berita .swiper{
				width: 330px;
				margin-left: 10px;
				margin-top: 3%;
				/*height: 70vw;	
				border: 1px solid black;
				border-top: none;
				*/
			}

			/*.berita .swiper .text-berita{
		      	padding-top: 250px;
		      	padding-left: 30px;
		      	margin-left: auto;
		      	margin-right: auto;
			}*/

			.berita .swiper-slide .img-berita{
				display: block;
		        width: 330px; 
		        object-fit: cover;
		        border: 1px solid black;

		      }

		      .text-berita{
        		width: 690px; 
        		/*padding-bottom: 5px; 
        		padding-top: 5px; */
        		font-weight: 500;
        		margin-right: 50px;
        		padding-left: 5px;
		      }

		      .p{
		      	/*border: 1px solid black;*/
		      	width: 320px; 
		      }

		      #i{
		      	/*border: 1px solid black;*/
		      }

		      .a-berita{
		      	text-decoration: none;
		      	color: black;
		      }

		      .a-berita:hover{
		      	color: #4e4f50;
		      }


		      /*pengumuman*/
		      .pen{
        		margin-top: 25px;
        		width: 350px;
        		margin: 10px;
        		padding: 0;
        		margin-left: 15px;
		      }

		      .text-pen{
		      	margin-top: 20px;
		      }

		      .a-pen{
		      	text-decoration: none;
		      	color: black;
		      }

		      .a-pen:hover{
		      	color: #4e4f50;
		      }
		      /*end pengumunan*/

		      /*zoom img dokumen*/
		      	.kotak .gallery-item {
				  -webkit-transition: 2s ease;
				  transition: 2s ease;
				  width: 800px;
				}
				 
				.zoom-effect:hover .kotak .gallery-item {
				  -webkit-transform: scale(1.08);
				  transform: scale(1.08);
				}
		      /*end zoom img dokumen*/

		      /*zoom img berita*/
		      	.kotak .img-berita {
				  -webkit-transition: 2s ease;
				  transition: 2s ease;
				  width: 800px;
				}
				 
				.zoom-effect:hover .kotak .img-berita {
				  -webkit-transform: scale(1.08);
				  transform: scale(1.08);
				}
		      /*end zoom img berita*/

		    @media only screen and (max-width: 560px) {
		    	.gallery{
        			margin-bottom:-20px;
        		}

        		/*produk*/
				.produk{
	        		margin-top: 25px;
	        		width: 320px;
	        		margin: 10px;
	        		padding: 0;
	        		margin-left: -15px;
				}

				
	        	.gallery .gallery-item{
	        		cursor: pointer;
	        	}
	        	
	        	.gallery-item{
	        	width: 100%; 
	        	border: 1px solid black; 
	        	border-bottom: none;
	        	max-width: 100%;
	        	}

	        	.a{
	        		text-decoration: none;
	        		color: black;
	        	}

	        	.a:hover{
	        		color: #4e4f50;
	        	}

	        	.text{
	        		border: 1px solid black; 
	        		width: 100%; 
	        		padding-bottom: 5px; 
	        		padding-top: 5px; 
	        		text-align: center;
	        		font-weight: 500;
	        		margin-right: 13%;
	        	}

	        	.gallery .container-lg .produk .swiper {
			        width: 100%; 
			      }

			      .swiper-slide {
			        margin-top: 3%;

			        /* Center slide text vertically */
			        display: -webkit-box;
			        display: -ms-flexbox;
			        display: -webkit-flex;
			        display: flex;
			        -webkit-box-pack: left;
			        -ms-flex-pack: left;
			        -webkit-justify-content: left;
			        justify-content: left;
			        -webkit-box-align: left;
			        -ms-flex-align: left;
			        -webkit-align-items: left;
			        align-items: left;
			      }

			      .swiper-slide img {
			        display: block;
			        width: 330px; 
			        object-fit: cover;
			      }


			      /*berita*/

			      .berita{
	        		margin-top: 25px;
	        		width: 300px;
	        		margin: 10px;
	        		padding: 0;
	        		margin-left: -18px;
	        		/*border: 1px solid black;*/
	     		}

				.berita .swiper{
					width: 330px;
					margin-left: 10px;
					margin-top: 3%;
					/*height: 70vw;	
					border: 1px solid black;
					border-top: none;
					*/
				}

				/*.berita .swiper .text-berita{
			      	padding-top: 250px;
			      	padding-left: 30px;
			      	margin-left: auto;
			      	margin-right: auto;
				}*/

				.berita .swiper-slide .img-berita{
					display: block;
			        width: 330px; 
			        object-fit: cover;
			        border: 1px solid black;

			      }

			      .text-berita{
	        		width: 690px; 
	        		/*padding-bottom: 5px; 
	        		padding-top: 5px; */
	        		font-weight: 500;
	        		margin-right: 50px;
	        		padding-left: 5px;
			      }

			      .p{
			      	/*border: 1px solid black;*/
			      	width: 320px; 
			      }

			      #i{
			      	/*border: 1px solid black;*/
			      }

			      .a-berita{
			      	text-decoration: none;
			      	color: black;
			      }

			      .a-berita:hover{
			      	color: #4e4f50;
			      }


			      /*pengumuman*/
			      .pen{
	        		margin-top: 25px;
	        		width: 360px;
	        		margin: 10px;
	        		padding: 0;
	        		margin-left: -10px;
			      }

			      .text-pen{
			      	margin-top: 20px;
			      }

			      .a-pen{
			      	text-decoration: none;
			      	color: black;
			      }

			      .a-pen:hover{
			      	color: #4e4f50;
			      }
			      /*end pengumunan*/

			      /*zoom img dokumen*/
			      	.kotak .gallery-item {
					  -webkit-transition: 2s ease;
					  transition: 2s ease;
					  width: 800px;
					}
					 
					.zoom-effect:hover .kotak .gallery-item {
					  -webkit-transform: scale(1.08);
					  transform: scale(1.08);
					}
			      /*end zoom img dokumen*/

			      /*zoom img berita*/
			      	.kotak .img-berita {
					  -webkit-transition: 2s ease;
					  transition: 2s ease;
					  width: 800px;
					}
					 
					.zoom-effect:hover .kotak .img-berita {
					  -webkit-transform: scale(1.08);
					  transform: scale(1.08);
					}
			      /*end zoom img berita*/
		    }

			 /*Smaller than standard 960 (devices and browsers) */
			@media only screen and (max-width: 959px) {}

			 /*Tablet Portrait size to standard 960 (devices and browsers) */
			@media only screen and (min-width: 768px) and (max-width: 959px) {}

			 /*All Mobile Sizes (devices and browser) */
			@media only screen and (max-width: 767px) {}

			 /*Mobile Landscape Size to Tablet Portrait (devices and browsers) */
			@media only screen and (min-width: 480px) and (max-width: 767px) {}

			/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
			@media only screen and (max-width: 479px) {}

        </style>
        		<!-- <div class="container-beranda"> -->
        	<section class="gallery min-vh-100" >
	        	<div class="container-lg">
	        		<div class="row gy-7 row-cols-1 row-cols-sm-2 row-cols-md-3">
	        			<div class="col">
        				<div class="produk">
        					<h4 style="background-image: linear-gradient(#00CED1, #0000FF); color: white; width: 300px; border-radius: 10px;">DOKUMEN SECURITY</h4><hr style="margin-top: -8px; width: 50%; float: right;">
        					<div class="pinggir">
		        				<div class="swiper mySwiper">
      								<div class="swiper-wrapper">
      									<?php foreach($image as $gmbr): ?>
						        			<div class="swiper-slide">
						        				<div class="zoom-effect">
						        					<div class="kotak">
						        						<a class="a" href="index.php?page=produk"><img class="gallery-item" alt="produk peruri security printing" src="assets/img/produk/<?= $gmbr['gambar'] ?>"><div class="text"><?= $gmbr['judul'] ?></div></a>
						        					</div>
						        				</div>
						        			</div>
										<?php endforeach; ?>
					        		</div>
					        		<!-- <div style="margin-bottom: 8%; background-color: #0f6ea0;"> -->
						        		<div class="swiper-button-next" style="margin-right: 20px;"></div>
								      	<div class="swiper-button-prev"></div>
								      	<!-- <div class="swiper-pagination"></div> -->
							     	<!-- </div> -->
							     	
							 </div>
						</div>
						</div>
					</div>
	<!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

<div class="berita">
	<div class="col">
        					<h4 style="background-image: linear-gradient(#00CED1, #0000FF); color: white; width: 250px; border-radius: 10px; margin-left: 10px;">BERITA TERKINI</h4><hr style="margin-top: -8px; width: 50%; float: right;">
        						<div class="swiper mySwiper">
      								<div class="swiper-wrapper">
      									<?php foreach($query as $data): ?>
					        				<div id="slide-berita" class="swiper-slide">
					        					<div class="zoom-effect">
					        						<div class="kotak">
					        							<!-- <a href="index.php?page=berita"><img src="assets/file/post/<?= $data['img'] ?>" alt="" class="img-berita"></a> -->
					        							<a class="a-berita" href="index.php?page=berita">
					        							<img src="assets/file/thumbnail/<?= $data['thumbnail'] ?>" alt="" class="img-berita">
						        						<div class="text-berita">
													 	<i id="i" class="ion-calendar">&nbsp; <?= $data['date'] ?> </i>
														<p class="p"><?= $data['sinopsis'] ?></p>
														</div>
														</a>
													</div>
												</div>
						        			</div>
										<?php endforeach; ?>
					        		</div>
					        		<!-- <div style="margin-bottom: 8%; background-color: #0f6ea0;"> -->
						        		<div class="swiper-button-next"></div>
								      	<div class="swiper-button-prev"></div>
								      	<!-- <div class="swiper-pagination"></div> -->
							     	<!-- </div> -->
							    </div>
		    </div>
</div>
	<!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>


    <div class="pen">
    	<div class="col">
	        <h4 style="background-image: linear-gradient(#00CED1, #0000FF); color: white; width: 300px; border-radius: 10px;">PENGUMUMAN</h4><hr style="margin-top: -20px; width: 50%; float: right;">
				<a class="a-pen" href="pengumuman.php"><p class="text-pen">Waspada Penipuan Rekrutmen Karyawan Mengatasnamakan Perum Peruri / Peruri Wira Timur</p></a>
		</div>
	</div>

		</div>
	</div>
</section>

	<!-- </div> -->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
