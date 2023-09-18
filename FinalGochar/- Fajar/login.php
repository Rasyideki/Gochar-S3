<?php
require '../conf/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query_sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);
$row = $result -> fetch_assoc();

if(mysqli_num_rows($result) > 0){
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['foto'] =$row['foto'];
    header("Location: ../- Hafiz/donasi.php");
}else{
    echo "Pendaftaran Gagal";
}
?>