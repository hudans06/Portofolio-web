<?php
$host     = "localhost";
$username = "root";       
$password = "";           
$database = "portofolio-huda-db"; // Sesuai nama database Anda

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>