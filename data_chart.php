<?php
include 'koneksi.php';

// Ambil semua data semester berurutan dari id terkecil
$query = "SELECT * FROM `tabel_skill_semester` ORDER BY id ASC";
$hasil = mysqli_query($koneksi, $query);

$data_semester = [];
while($baris = mysqli_fetch_assoc($hasil)) {
    $data_semester[] = $baris;
}

// Ubah data menjadi format JSON agar bisa dibaca oleh JavaScript Chart.js
header('Content-Type: application/json');
echo json_encode($data_semester);
?>