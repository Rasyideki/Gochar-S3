<?php
//mengakses file koneksi.php
include "../conf/koneksi.php"; 
session_start();
$email = $_SESSION['email']
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
        <h1>Form</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="forms-elements.html">Pilih Kategori</a></li>
            <li class="breadcrumb-item active">Form</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->
      <a href="menu_buatGalangDana.php" class="btn"><span class="bi-box-arrow-in-left"></span></a>

      <section class="section">
        <div class="col-md-10 mx-auto">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">Buat Galang Danamu !</h6>

              <!--Awalan Form-->
              <form class="row g-3 needs-validation" action="" method="post" novalidate enctype="multipart/form-data">
                <label class="col-sm-3" style="color: red">Data diri penggalang</label>
                <div class="row mb-3"></div>

                <!--awalan NIK-->
                <div class="row mb-3">
                  <label for="namapenggalang" class="col-sm-2 col-form-label">NIK </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Masukan NIK Sesuai KTP" name="NIK" id="NIK" required />
                    <div class="invalid-feedback">NIK tidak boleh kosong!</div>
                  </div>
                </div>
                <!--end NIK-->

                <!--awalan nama-->
                <div class="row mb-3">
                  <label for="namapenggalang" class="col-sm-2 col-form-label">Nama </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Masukan Nama Sesuai KTP" name="namapenggalang" id="namapenggalang" required />
                    <div class="invalid-feedback">Nama tidak boleh kosong!</div>
                  </div>
                </div>
                <!--end nama-->

                <!--awalanemain-->
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" value=<?php  echo $_SESSION['email']?> required readonly />
                    <div class="invalid-feedback">Email tidak boleh kosong!</div>
                  </div>
                </div>
                <!--end email-->

                <!--awalan Nohp-->
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Nomor handphone</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="nohp" id="nohp" placeholder="Masukkan Nomor yang aktif" required />
                    <div class="invalid-feedback">Nomor handphone tidak boleh kosong!</div>
                  </div>
                </div>
                <!--end Nohp-->

                <!--awalan pekerjaan-->
                <div class="row mb-3">
                  <label for="namapenggalang" class="col-sm-2 col-form-label">Pekerjaan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Masukan Pekerjaan Anda Saat Ini" name="pekerjaan" id="pekerjaan" required />
                    <div class="invalid-feedback">Pekerjaan tidak boleh kosong!</div>
                  </div>
                </div>
                <!--end pekerjaan-->

                <!--awalan Nama Institusi-->
                <!-- <div class="row mb-3">
                      <label for="namapenggalang" class="col-sm-2 col-form-label">nama institusi</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukan Nama Institusi Anda Saat Ini" name="namainstitusi" id="namainstitusi" required>
                        <div class="invalid-feedback">Pilih kategori !</div>
                      </div>
                    </div> -->
                <!--end Nama Institusi-->

                <!--awlan norek-->
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">No Rekening Bank</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Masukkan Nomor Rekening Penggalang" name="norek" id="norek" required />
                    <div class="invalid-feedback">No Rekening Bank tidak boleh kosong!</div>
                  </div>
                </div>
                <!--end norek-->

                <!--awalan Instagram-->
                <!-- <div class="row mb-5"> 
                      <label class="col-sm-2 col-form-label"><i class="bi bi-instagram"> Instagram</i></label>
                      <div class="col-sm-10">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">@</span>
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="instagram" id="insta" required>
                          <div class="invalid-feedback">Pilih kategori !</div>
                        </div>
                      </div>
                    </div> -->
                <!--end instagram-->

                <label class="col-sm-3" style="color: red">Rician Galang Donasi</label>
                <div class="row mb-3"></div>

                <!--awalan kategori-->
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Kategori</label>
                  <div class="col-sm-10">
                    <select id="kategori" class="form-select" name="kategori" aria-label="Default select example" required>
                      <option selected aria-placeholder=""></option>
                      <option value="bantuanpendidikan">Bantuan Pendidikan</option>
                      <option value="bencanaalam">Bencan Alam</option>
                      <option value="difabel">Difabel</option>
                      <option value="kemanusiaan">Kemanusiaan</option>
                      <option value="pantiasuhan">Panti Asuhan</option>
                      <option value="bantuankesehatan">Bantuan Kesehatan</option>
                    </select>
                    <div class="invalid-feedback">Pilih Kategori !</div>
                  </div>
                </div>
                <!--end kategori-->

                <!--awalan Judul-->
                <div class="row mb-3">
                  <label for="judulgalangdana" class="col-sm-2 col-form-label">Judul Campaign</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul" required />
                    <div class="invalid-feedback">Judul campaign tidak boleh kosong !</div>
                  </div>
                </div>
                <!--end judul-->

                <!--awalan cerita-->
                <div class="row mb-3">
                  <label for="cerita" class="col-sm-2 col-form-label">Cerita</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" id="cerita" name="cerita" required></textarea>
                    <div class="invalid-feedback">Cerita tidak boleh kosong !</div>
                  </div>
                </div>
                <!--end cerita-->

                <!--awalan upgambar-->
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Upload Gambar</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="foto" id="foto" required />
                    <div class="invalid-feedback">Masukan Gambar!</div>
                  </div>
                </div>
                <!--end upgambar-->

                <!-- awalan target donasi-->
                <div class="input-group mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Target donasi</label>
                  <span class="input-group-text">Rp.</span>
                  <input type="number" class="form-control" placeholder="0" aria-label="jumlah (ke Rupiah terdekat)" id="target_donasi" name="target_donasi" required />
                  <div class="invalid-feedback">Target donasi tidak boleh kosong!</div>
                </div>
                <!--end target donasi-->

                <!--awalan lamapenyelenggaraan-->
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Lama Penyelenggaraan Donasi</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="durasi" id="7" value="7hari" required />
                      <label class="form-check-label" for="7"> 7 Hari </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="durasi" id="30" value="30hari" required />
                      <label class="form-check-label" for="30"> 30 Hari </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="durasi" id="60" value="60hari" required />
                      <label class="form-check-label" for="60"> 60 Hari </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="durasi" id="90" value="90hari" required />
                      <label class="form-check-label" for="90"> 90 Hari </label>
                    </div>
                    <div class="invalid-feedback">Pilih lama penyelenggaraan!</div>
                  </div>
                </fieldset>
                <!--end lama penyelenggara-->

                <!--awalan penggunaan dana-->
                <div class="row mb-3">
                  <label for="rincian" class="col-sm-2 col-form-label">Rincian Penggunaan Dana</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="rincian" id="rincian" required></textarea>
                    <div class="invalid-feedback">Rincian Penggunaan Dana tidak boleh kosong!</div>
                  </div>
                </div>
                <!--end penggunaan dana-->

                <label class="col-sm-3" style="color: red">Data diri penerima</label>
                <div class="row mb-3"></div>

                <!--awalan penerima-->
                <div class="row mb-3">
                  <label for="penerima" class="col-sm-2 col-form-label">Penerima instasi/individu</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="penerima" id="penerima" required />
                    <div class="invalid-feedback">Penerima tidak boleh kosong !</div>
                  </div>
                </div>
                <!--end penerima-->

                <!--awalan tujuan-->
                <div class="row mb-3">
                  <label for="tujuan_donasi" class="col-sm-2 col-form-label">Tujuan Pengumpulan Dana</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="tujuan_donasi" id="tujuan_donasi" required></textarea>
                    <div class="invalid-feedback">Tujuan pengumpulan dana tidak boleh kosong!</div>
                  </div>
                </div>
                <!--end tujuan-->

                <!--awalan lokasi-->
                <div class="row mb-3">
                  <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="lokasi" id="lokasi" required></textarea>
                    <div class="invalid-feedback">Lokasi tidak boleh kosong!</div>
                  </div>
                </div>
                <!--end lokasi-->

                <!--awalan button-->
                <div class="row mb-3">
                  <div class="col-sm-10">
                  <a href="Tampilkan_data_BGD.php?email=<?php echo $email?>">
                    <button type="submit" class="btn btn-outline-success btn-lg" name="submit">Submit</button>  
                  </a>
                  </div>
                </div>
                <!--end button-->
              </form>
              <!--end Form-->
            </div>
            <!--end card body-->
          </div>
          <!--end card-->
        </div>
        <!--end card col-->
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

<?php
//mengakses file koneksi.php
include "../conf/koneksi.php";

if (isset($_POST['submit'])) {
  $NIK            = $_POST['NIK'];
  $namapenggalang = $_POST['namapenggalang'];
  $email          = $_POST['email'];
  $nohp           = $_POST['nohp'];
  $pekerjaan      = $_POST['pekerjaan'];
  $norek          = $_POST['norek'];
  $kategori       = $_POST['kategori'];
  $judul          = $_POST['judul'];
  $cerita         = $_POST['cerita'];
  // $foto           = $_POST['foto'];
  $target_donasi  = $_POST['target_donasi'];
  $durasi         = $_POST['durasi'];
  $rincian        = $_POST['rincian'];
  $penerima       = $_POST['penerima'];
  $tujuan_donasi  = $_POST['tujuan_donasi'];
  $lokasi         = $_POST['lokasi'];

  $namaFile = $_FILES['foto']['name'];
  $namaSementara = $_FILES['foto']['tmp_name'];
  
  $sql = "INSERT INTO `galang_donasi` (`kategori`,`judul`,`cerita`,`foto`,`target_donasi`,`durasi`,`rincian`,`email`,`penerima`,`tujuan_donasi`,`lokasi`) VALUES ('$kategori','$judul','$cerita','$namaFile','$target_donasi','$durasi','$rincian','$email','$penerima','$tujuan_donasi','$lokasi'); ";
  
  $sql2 = "UPDATE user SET NIK = '$NIK', noHp = '$nohp', pekerjaan = '$pekerjaan' WHERE email='$email'";
  
  
  $hasil = $koneksi->query($sql);
  
  $hasil2 = $koneksi->query($sql2);

  // ambil data file

  
  // tentukan lokasi file akan dipindahkan
  $dirUpload = "../- Hafiz/Image/";
  
    // pindahkan file
  $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

  echo "<script>window.location.href='tampilanBuatGalangDana.php'</script>";
} else {
	echo "tambah data gagal. Pesan error: ".$koneksi->error;
}
$koneksi->close(); // menutup koneksi
          
?>
