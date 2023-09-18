<?php
require '../conf/koneksi.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$query_sql = "INSERT INTO user (email, password, username) VALUES ('$email','$username','$password')";

if(mysqli_query($koneksi, $query_sql)){
    header("Location: login.html");
}else{
    echo "Pendaftaran Gagal";
}
?>