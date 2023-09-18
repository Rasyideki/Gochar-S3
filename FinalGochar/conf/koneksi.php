<?php

//Inisiasi nilai-nilai paramater koneksi
$namaServer = "localhost"; // isikan sesuai nama server Anda
$namaPengguna = "root"; //isikan sesuai nama pengguna Basisdata Anda
$password = ""; //isikan sesuai password Anda
$nama_db = "db_gochar";
//Membuat koneksi
$koneksi = new mysqli($namaServer, $namaPengguna, $password, $nama_db);
//memeriksa apakah koneksi sukses dilakukan
if (!$koneksi) {
	die("Koneksi gagal : " . $koneksi->connect_error. "<br>");
}
echo "Koneksi sukses. <br >";
?>
