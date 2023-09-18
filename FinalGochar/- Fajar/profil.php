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
          <a class="nav-link" href="../- Fajar/profil.php">
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
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

  <section class="section profile">
    <?php
        $tampil = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$_SESSION[email]'");
        $gas = mysqli_fetch_array($tampil);
    ?>

      <div class="row">
        <div class="col-xl-4">



          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="image/<?php echo $_SESSION['foto'] ?>" alt="Profile" class="rounded-circle">
              <h2><?php echo $gas['username'] ?></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ubah Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Samaran</div>
                    <div class="col-lg-9 col-md-8"><?php echo $gas['username']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['email']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">NoTelepon</div>
                    <div class="col-lg-9 col-md-8"><?php echo $gas['noHp']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jumlah Poin</div>
                    <div class="col-lg-9 col-md-8">50 poin</div>
                  </div>
                </div>
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method='POST' enctype="multipart/form-data">

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto profile</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="image/<?php echo $_SESSION['foto'] ?>" alt="Profile">
                        <div class="pt-2">
                          <!-- <a href="upload.php" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a> -->
                          <label for="file-upload" class="btn btn-primary btn-sm" style="border: 1px solid #ccc; display: inline-block; padding: 6px 12px; cursor: pointer"> <i class="bi bi-upload" style="color:white;"></i></label>
                          <input  name="berkas" id="file-upload" type="file" style="display: none" />                      
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>
      
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Samaran</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="username" type="text" class="form-control" id="username" value=<?php echo $gas['username'] ?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="text" class="form-control" id="email" value=<?php echo $gas['email'] ?> readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">No telepon</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="noHp" type="text" class="form-control" id="nohp" value=<?php echo $gas['noHp'] ?>>
                      </div>
                    </div>

                    <div class="text-center">
                      <button id="kirim" type="submit" class="btn btn-primary" name="submit">Simpan perubahan</button>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="row mb-3"></label>
                      <div class="col-md-8 col-lg-9">
                        <a class="nav-link collapsed" href="login.html">
                          <i class="bi bi-box-arrow-in-right"></i>
                          <span>LogOut</span>
                        </a>
                      </div>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">
                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="ubahpassword.php" method='POST'>
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Password Terdahulu</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="passwordlama" type="password" class="form-control" id="Passwordlama" >
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Password Baru</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="passwordbaru" type="password" class="form-control" id="Passwordbaru" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Masukkan Kembali Password Baru</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="konfirmasipassword" type="password" class="form-control" id="konfirmasipassword" required>
                      </div>
                    </div>

                    <div class="text-center">
                      <button name='ubah' type="submit" class="btn btn-primary">Ubah Password</buttonn>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
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

<?php

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $noHp = $_POST['noHp'];
    $email = $_SESSION['email'];
   
    // $sql = "UPDATE user SET username = '$username', noHp = '$noHp' WHERE email='$email'";
    // $hasil = $koneksi->query($sql);

    // ambil data file
    $namaFile = $_FILES['berkas']['name'];
    $namaSementara = $_FILES['berkas']['tmp_name'];

    // tentukan lokasi file akan dipindahkan
    $dirUpload = "image/";

    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

    $sql = "UPDATE user SET username = '$username', noHp = '$noHp', foto ='$namaFile' WHERE email='$email'";
    $hasil = $koneksi->query($sql);

    if ($terupload) {
      echo "Upload berhasil!<br/>";
      echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
  } else {
      echo "Upload Gagal!";
  }
   
  echo "<script>
	alert ('Silahkan refresh kembali untuk memperbarui profil');
	</script>";
}
?>
