<?php
include('../conf/koneksi.php');
session_start();
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
          <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-box2-heart"></i><span>Galang Dana</span><i class="bi bi-chevron-down ms-auto"></i> </a>
          <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
              <a href="../- Eki/menu_buatGalangDana.php"> <i class="bi bi-circle"></i><span>Buat Galang Dana</span> </a>
            </li>
            <li>
              <a href="menu_galangdanasaya.html"> <i class="bi bi-circle"></i><span>Galang Dana Saya</span> </a>
            </li>
          </ul>
        </li>
        <!-- End GalangDana Nav -->
        <li class="nav-item">
          <a class="nav-link" href="../- Javier/leaderboard.php">
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
        <h1>Leaderboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Leaderboard</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section profile">
        <div class="row">

        <!-- Urutan Pertama -->

          <div class="col-xl-4 mx-auto">
            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                <img
                  src="https://cdn-icons-png.flaticon.com/512/3601/3601002.png"
                  style="width: 60px; height: 60px; margin-left: -220px; margin-top: -20px"
                />
                <img src="../assets/img/profile-img.jpg" style="width: 90px; height: 90px; border-radius: 100%; margin-top: -20px;" />
                <h2 class="text-center"><?php
              $query1=mysqli_query($koneksi,"SELECT user.username FROM user JOIN sum ON (user.email=sum.email) ORDER BY total_poin DESC LIMIT 1 OFFSET 0");
              $row = $query1 ->fetch_assoc();
              echo $row['username'];
              ?></h2>
                <div class="mt-2">
                <img src="https://cdn-icons-png.flaticon.com/512/5219/5219370.png" style="width: 20px; height: 20px"/></img>
                <p style="float: left;"><?php
              $query4=mysqli_query($koneksi,"SELECT sum.total_poin FROM sum JOIN user ON (user.email=sum.email) ORDER BY total_poin DESC LIMIT 1 OFFSET 0");
              $row = $query4 ->fetch_assoc();
              echo $row['total_poin'];
              ?></p>
              </div>
              </div>
            </div>
          </div>

          <div class="row ">
            
          <!-- Urutan kedua -->

            <div class="col-xl-4 mx-auto">
              <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                  <img
                    src="https://cdn-icons-png.flaticon.com/512/3601/3601634.png"
                    style="width: 60px; height: 60px; margin-left: -212px; margin-top: -20px"
                  />
                  <img src="../assets/img/profile-img.jpg" style="width: 90px; height: 90px; border-radius: 100%; margin-top: -20px;" />
                  <h2 class="text-center"><?php
              $query2=mysqli_query($koneksi,"SELECT user.username FROM user JOIN sum ON (user.email=sum.email) ORDER BY total_poin DESC LIMIT 1 OFFSET 1");
              $row = $query2 ->fetch_assoc();
              echo $row['username'];
              ?></h2>
                <di</h2>
                  <div class="mt-2">
                  <img src="https://cdn-icons-png.flaticon.com/512/5219/5219370.png" style="width: 20px; height: 20px"/></img>
                  <p style="float: left;"><?php
              $query5=mysqli_query($koneksi,"SELECT sum.total_poin FROM sum JOIN user ON (user.email=sum.email) ORDER BY total_poin DESC LIMIT 1 OFFSET 1");
              $row = $query5 ->fetch_assoc();
              echo $row['total_poin'];
              ?></h2>
                <di</p>
                </div>
                </div>
              </div>
            </div>

            <!-- urutan ketiga -->

            <div class="col-xl-4 mx-auto">
              <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                  <img
                    src="https://cdn-icons-png.flaticon.com/512/9037/9037218.png"
                    style="width: 60px; height: 60px; margin-left: -212px; margin-top: -20px"
                  />
                  <img src="../assets/img/profile-img.jpg" style="width: 90px; height: 90px; border-radius: 100%; margin-top: -20px;" />
                  <h2 class="text-center"><?php
              $query3=mysqli_query($koneksi,"SELECT user.username FROM user JOIN sum ON (user.email=sum.email) ORDER BY total_poin DESC LIMIT 1 OFFSET 2");
              $row = $query3 ->fetch_assoc();
              echo $row['username'];
              ?></h2>
                <di</h2>
                  <div class="mt-2">
                  <img src="https://cdn-icons-png.flaticon.com/512/5219/5219370.png" style="width: 20px; height: 20px"/></img>
                  <p style="float: left;"><?php
              $query6=mysqli_query($koneksi,"SELECT sum.total_poin FROM sum JOIN user ON (user.email=sum.email) ORDER BY total_poin DESC LIMIT 1 OFFSET 2");
              $row = $query6 ->fetch_assoc();
              echo $row['total_poin'];
              ?></p>
                </div>
                </div>
              </div>
            </div>
            
          </div>
          
          <!-- Table with stripped rows -->
          <div class="card">
            <div class="card-body">
              <?php
              $query=mysqli_query($koneksi,"SELECT user.username,sum.total_poin FROM user JOIN sum ON (user.email=sum.email) ORDER BY total_poin DESC LIMIT 2 OFFSET 3")?>

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Rank</th>
                <th scope="col">Name</th>
                <th scope="col">Point</th>
              </tr>
            </thead>
            <?php
            $no=4;
            while($r=mysqli_fetch_array($query)) {
              echo"<tr><td>$no</td>
                      <td>$r[username]</td>
                      <td>$r[total_poin]</td>";
            $no++;
            }?>
          </table>

            </div>
          </div>
          <!--End Table with stripped rows -->
          </div>
      </section> 

            

          
    </main>

    <!-- End #main -->



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
