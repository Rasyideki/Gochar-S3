
<?php

session_start();

if (!(isset($_SESSION['email']) || $_SESSION['email'] == ''))
{
    header("location:pengaturan.php");
}

include "../conf/koneksi.php";

$passwordbaru = mysqli_real_escape_string($koneksi, $_POST['passwordbaru']);
$konfirmasipassword= mysqli_real_escape_string($koneksi, $_POST['konfirmasipassword']);
$email = mysqli_real_escape_string($koneksi, $_SESSION['email']);

if ($passwordbaru <> $konfirmasipassword)
{
    echo "<script> alert ('maaf password baru dan konfirmasi tidak sama!');
    document.location ='pengaturan.php'</script>";
}
else if (mysqli_query($koneksi, "UPDATE user SET password='$passwordbaru' WHERE email='$email'"))
{
    echo "<script> alert ('password berhasil diubah!');
    document.location ='pengaturan.php'</script>";
}
else
{
    mysqli_error($koneksi);
}
mysqli_close($koneksi);

?>


<!-- <?php
include "conf/koneksi.php";
 
$passwordlama           = md5($_POST['passwordlama']);
$passwordbaru           = $_POST['passwordbaru'];
$konfirmasipassword     = $_POST['konfirmasipassword'];
$email                  = $_POST['email'];
$username               = $_POST['username'];

$cekuser =mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$passwordlama'");

$data = mysqli_fetch_array($cekuser);

if ($data){
    $passwordbaru  = $_POST['passwordbaru'];
    $konfirmasipassword   = $_POST['konfirmasipassword'];

    if($passwordbaru == $konfirmasipassword){
        $pass_ok = md5($konfirmasipassword);
        $ubah =mysqli_query($koneksi, "UPDATE user SET password = '$pass_ok' WHERE email = '$data[email]'");

        if($ubah){
            echo "<script> alert ('password berhasil diubah!');
            document.location ='pengaturan.php'</script>";
        }
    }else{
        echo "<script> alert ('maaf password baru dan konfirmasi tidak sama!');
        document.location ='pengaturan.php'</script>";
    }
}else {
        echo "<script> alert ('maaf password lama anda tidak sama/tidak teradaftar');
        document.location ='pengaturan.php'</script>";
}
?> -->
