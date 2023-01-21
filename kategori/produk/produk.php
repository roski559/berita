<?php 

	include "config/config.php";

	$image = mysqli_query($con, "SELECT * FROM tbl_gallery");

 ?> 

 	<style>

        	.container-lg{
        	}

        	.gallery{
        		padding: 80px 0;
        		margin-top: -5%;
        	}

        	.gallery .gallery-item{
        		cursor: pointer;
        	}
        	
        	.gallery-item{
        	width: 67.5%; 
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
        		width: 67.5%; 
        		padding-bottom: 1%; 
        		padding-top: 1%; 
        		text-align: center;
        		font-weight: 500;
        	}

        	#gallery-modal .modal-img{
        		width: 50%;
        		height: 20vw;
        		margin-left: 25%;
        		margin-bottom: 3%; 
        	}

        	#gallery-modal .modal-body{
        		width: auto;
        		height: auto;
        	}

        </style>

 			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color: black;">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Produk</li>
			    <li class="breadcrumb-item active" aria-current="page">Dokumen Security</li>
			  </ol>
			</nav>

<h4 style="background-image: linear-gradient(#00CED1, #0000FF); color: white; width: 300px; border-radius: 10px;">DOKUMEN SECURITY</h4><hr style="margin-top: -8px;">
    
        <section class="gallery min-vh-100" >
	        <center>
	        	<div class="container-lg">
	        		<div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
	        			<?php foreach($image as $gmbr): ?>
		        			<div class="col">
		        				<a class="a" href="index.php?page=produk-detail&id=<?= $gmbr['id_img'] ?>"><img class="gallery-item" alt="produk peruri security printing" src="assets/img/produk/<?= $gmbr['gambar'] ?>"><div class="text"><?= $gmbr['judul'] ?></div></a>
		        			</div>
						<?php endforeach; ?>
	        		</div>
	        	</div>
	        </center>

	        <ul style="margin-top: 5%; margin-bottom: -8%; font-size: 18px;">
	        	<li style="margin-bottom: 1%;"><b>Dokumen Pendidikan</b> : Ijasah, Transkrip, Sertifikat, Raport, dll</li>
	        	<li style="margin-bottom: 1%;"><b>Dokumen Perijinan</b> : IMB, TDP, SIUP, Ijin Gangguan (HO), TDI, IUI, dll</li>
	        	<li style="margin-bottom: 1%;"><b>Dokumen Perhubungan</b> : Karcis dan Stiker Parkir, Uji Tipe, Tiket Perjalanan, dll</li>
	        	<li style="margin-bottom: 1%;"><b>Dokumen Perpajakan</b> : SKPD, SPOPD, SPPT, PBB, dll</li>
	        	<li style="margin-bottom: 1%;"><b>Dokumen Kependudukan</b> : Akta Kematian, Akta Register, Kartu Keluarga, dll</li>
	        	<li style="margin-bottom: 1%;"><b>Dokumen Perbankan</b> : Bilyet Deposito, Buku Tabungan, Cek, Bilyet Giro, Surat Saham, dll</li>
	        	<li style="margin-bottom: 1%;"><b>Dokumen KPU</b> : Surat Suara, Segel, Template, Form</li>
	        </ul>
    	</section>

		<!-- Modal -->
		<!-- <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
			      <div class="modal-body">
			      	<h5 style="background-image: linear-gradient(#00CED1, #0000FF); color: white; width: 35%; border-radius: 10px; text-indent: 10px;">DOKUMEN PENDIDIKAN</h5><br>
			        <img class="modal-img" alt="produk peruri security printing" src="assets/img/produk/pendidikan.jpeg" border="2"/>
				      	<p style="text-indent: 5%; font-weight: 500; font-size: 10;">
				        </p>
			      </div>
		    </div>
		  </div>
		</div> -->
		<!-- end modal -->


		<!-- modal script -->
		<!-- <script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/main.js"></script> -->
		<!-- end modal script -->