<?php include('conf/koneksi.php'); 
// $id_gd = $_GET['id'];
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
<link href="assets/img/Icon.png" rel="icon" />
<link href="assets/img/Icon.png" rel="apple-touch-icon" />

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
<link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
<link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
<link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet" />

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
      <img src="assets/img/gocharrrr.png" alt="gocharlogo" />
      <span class="d-none d-lg-block">GoChar</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>
  <!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword" />
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div>
  <!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle" href="#">
          <i class="bi bi-search"></i>
        </a>
      </li>
      <!-- End Search Icon-->
    </ul>
  </nav>
  <!-- End Icons Navigation -->
</header>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link collapsed" href="donasi.php">
        <i class="bi bi-house-door"></i>
        <span>Menu Utama</span>
      </a>
    </li>
    <!-- End Menu Utama Nav -->

    <li class="nav-item">
      <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-box2-heart"></i><span>Galang Dana</span><i class="bi bi-chevron-down ms-auto"></i> </a>
      <ul id="forms-nav" class="nav-content" data-bs-parent="#sidebar-nav">
        <li>
          <a href="menu_buatgalangdana.html"> <i class="bi bi-circle"></i><span>Buat Galang Dana</span> </a>
        </li>
        <li>
          <a href="menu_galangdanasaya.html"> <i class="bi bi-circle"></i><span>Galang Dana Saya</span> </a>
        </li>
      </ul>
    </li>
    <!-- End GalangDana Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="menu_papanperingkat.html">
        <i class="bi bi-trophy"></i>
        <span>Peringkat</span>
      </a>
    </li>
    <!-- End Papan Peringkat Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="menu_misi.html">
        <i class="bi bi-activity"></i>
        <span>Misi</span>
      </a>
    </li>
    <!--end misi-->
    <li class="nav-item">
      <a class="nav-link collapsed" href="pengaturan.html">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li>
    <!-- End Profile Page Nav -->
  </ul>
</aside>
<!-- End Sidebar-->


    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Verifikasi</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="donasi.php">Home</a></li>
            <li class="breadcrumb-item active">Verifikasi</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->
      <!--Main Page-->
      <main id="main" class="main">

      <div class="container"> 

        <?php $ambil = $koneksi->query("SELECT * FROM galang_donasi ORDER BY id_gd DESC LIMIT 1;"); ?>
        <?php while($per_data = $ambil->fetch_assoc()){?>
          
          <div class="col-md-10 mx-auto" >
            <div class="card" >
              <h6 class="card-title">Yakin Galang Danamu Sudah benar?</h6>
              <img src="assets/img/<?php echo $per_data['foto']?>"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $per_data['judul']?></h5>
              
              <div class="row">
                <div class="col-md-8"><p class="card-text">Rp 50000000 Terkumpul dari Rp<?php echo $per_data['target_donasi']?></p></div>
                <div class="col-md-4"><p class="card-text text-end"><?php echo $per_data['durasi']?></p></div>
              </div>
              <br>
              <p class="card-text fw-bold">Informasi Penggalangan Dana</p>
              <p class="card-text">Penggalang Dana  : <?php echo $per_data['email']?></p>
              <p class="card-text">Penerima Dana    : <?php echo $per_data['penerima']?></p>
              <hr> 
              <p class="card-text"><?php echo $per_data['cerita']?></p>
              
              <div class="text-center">
                <a href="gdbdone.html" class="btn btn-primary">Submit</a>
              </div>
            </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <!-- End Page Title -->
        </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

