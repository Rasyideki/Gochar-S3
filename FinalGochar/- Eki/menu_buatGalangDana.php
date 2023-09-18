<?php
include('../conf/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>GoCHAR | StartYourGood!</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/Icon.png" rel="icon" />
    <link href="../assets/img/Icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.4.1
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="donasi.html" class="logo d-flex align-items-center">
          <img src="../assets/img/gocharrrr.png" alt="gocharlogo" />
          <span class="d-none d-lg-block">GoChar</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- End Logo -->
      
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="../- Hafiz/donasi.php">
            <i class="bi bi-cash-coin"></i>
            <span>Donasi</span>
          </a>
        </li>
        <!-- End Menu Utama Nav -->

        <li class="nav-item">
          <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-box2-heart"></i><span>Galang Dana</span><i class="bi bi-chevron-down ms-auto"></i> </a>
          <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
            <li>
              <a href="menu_buatgalangdana.html" class="active"> <i class="bi bi-circle"></i><span>Buat Galang Dana</span> </a>
            </li>
            <li>
              <a href="menu_galangdanasaya.html"> <i class="bi bi-circle"></i><span>Galang Dana Saya</span> </a>
            </li>
          </ul>
        </li>
        <!-- End GalangDana Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="../- Javier/leaderboard.php">
            <i class="bi bi-trophy"></i>
            <span>Peringkat</span>
          </a>
        </li>
        <!-- End Papan Peringkat Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="../- Javier/misi.php">
            <i class="bi bi-activity"></i>
            <span>Misi</span>
          </a>
        </li>
        <!--end misi-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="../- Fajar/profil.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
          </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-contact.html">
            <i class="bi bi-envelope"></i>
            <span>Contact</span>
          </a>
        </li>
        <!-- End Contact Page Nav -->
      </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Buat Galang Dana</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Buat Galang Dana</li>
          </ol>
        </nav>
      </div>
     <!-- End Page Title -->
      <section class="section">
        <div class="row">
        <!-- Card with an image on top -->
        <div class="col-lg-4">
          <div class="card">
            <img src="../assets/img/Gambar.jpg" class="card-img-top" alt="poster">
            <div class="card-body">
              <h6 class="card-title">Buat Galang Dana +</h6>
              <p class="card-text">Ayo buat langkah kebaikanmu dengan membantu saudara-saudara kita yang membutuhkan, kalau bukan kamu yang memulai siapa lagi?.</p>
              <div class="text-center">
                <a href="form_galangDonasi.php">
                  <button type="submit" class="btn btn-outline-primary btn-lg" >Ayo Mulai Langkahmu !</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card with an image on top -->
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Kisah Heroik!</h5>

                <!-- Slides with indicators -->
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="../assets/img/Rahmat.png" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Rahmat Kembali Bersekolah !</h5>
                        <p>Berkat bantuan orang-orang baik rahmat tahalu bisa kembali ke sekolah hingga jenjang smp.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="../assets/img/rumah-roboh.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Bantuan Cianjur</h5>
                        <p>Bantuan cianjur terkumpul cukup untuk memasoki pangan.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="../assets/img/gunung.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Gunung sinabung</h5>
                        <p>bantuan di alurkan untuk tenda tenda pengungsian.</p>
                      </div>
                    </div>
                  </div>

                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>

                </div><!-- End Slides with captions -->
            </div>
          </div>
          <div class="col-lg-8">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">:)</h5>
                <p>Sedari kecil
                  Tumbuh untuk berbagi
                  Makanan yang menjadi bekal
                  Dimakan dan habis dibagi-bagiBerbagi adalah cara
                  Untuk lebih mawas diri
                  Dengan sesama saling merasa
                  Agar tumbuh tenggang rasa
                  
                  Sahabat salah satu tempat berbagi
                  manjadi pelita bagi kita yang merasa sendiri
                  Hidup butuh berbagi dan dibagi-bagi
                  Termasuk cerita personal diri</p>
              </div>
            </div>
          </div>
      </section>
    </main>
    <!--End Main Page-->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>NiceAdmin</span></strong
        >. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.min.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>
