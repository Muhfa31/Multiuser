<?php
$hostname = "localhost";
$database = "db_multiuser";
$username = "root";
$password = "31052001";
$koneksi = mysqli_connect($hostname, $username, $password, $database);
// script cek koneksi
if (!$koneksi) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
?> 

