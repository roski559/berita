<?php 
  ob_start();
  session_start();

  include "../config/config.php";

  if(!$_SESSION['user']) {
    header("location: login.php");
  }


  require_once "template/header.php";

?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        <?php 

          if(isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
              case 'home':
                include "dashboard/index.php";
                break;

              case 'tampil-beranda':
                include "beranda/data-beranda.php";
                break;

              case 'tambah-beranda':
                include "beranda/tambah-beranda.php";
                break;

              case 'hapus-beranda':
                include "beranda/hapus-beranda.php";
                break;

              case 'edit-beranda':
                include "beranda/edit-beranda.php";
                break;

              case 'tampil-berita':
                include "berita/data-berita.php";
                break;

              case 'tambah-berita':
                include "berita/tambah-berita.php";
                break;

              case 'hapus-berita':
                include "berita/hapus-berita.php";
                break;

              case 'edit-berita':
                include "berita/edit-berita.php";
                break;

              case 'kebijakan':
                include "kebijakan/index.php";
                break;

              case 'peraturan':
                include "peraturan/index.php";
                break;

              case 'galeri':
                include "galeri/index.php";
                break;

              case 'edit-galeri':
                include "galeri/edit-galeri.php";
                break;

              case 'tampil-galeri':
                include "galeri/index.php";
                break;

              case 'slider':
                include "slider/index.php";
                break;

              case 'tampil-slider':
                include "slider/index.php";
                break;

              case 'edit-slider':
                include "slider/edit-slider.php";
                break;

              case 'hapus-slider':
                include "slider/hapus-slider.php";
                break;

              case 'klien':
                include "klien/index.php";
                break;

              case 'hapus-galeri':
                include "galeri/hapus-galeri.php";
                break;

              case 'struktur-organisasi':
                include "struktur/index.php";
                break;

              case 'user':
                include "akun/index.php";
                break;

              case 'sejarah':
                include "sejarah/index.php";
                break;

              case 'vimi':
                include "vimi/index.php";
                break;

              case 'nilaiperusahaan':
                include "nilaiperusahaan/index.php";
                break;


              default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
            }
          } else {
            include "dashboard/index.php";
          }

         ?>

      </div>
      <!-- /. New Row -->
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<?php 

  require_once "template/footer.php";

?>