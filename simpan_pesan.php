<?php
// 1. Panggil kabel koneksi yang sudah Anda buat
include 'koneksi.php';

// 2. Tangkap data yang dikirim dari form HTML
$nama  = $_POST['name'];
$email = $_POST['email'];
$pesan = $_POST['message'];

// 3. Masukkan data tersebut ke dalam tabel pesan-kontak
// PENTING: Karena nama tabel Anda menggunakan tanda hubung/strip (-), 
// maka nama tabel harus diapit dengan tanda backtick (`) yang ada di bawah tombol Esc keyboard Anda.
$query = "INSERT INTO `pesan-kontak` (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

// 4. Eksekusi kodenya
if (mysqli_query($koneksi, $query)) {
    // Jika berhasil, munculkan notifikasi lalu kembalikan pengunjung ke index.php
    echo "<script>
            alert('Pesan berhasil terkirim! Sistem database berfungsi.');
            window.location.href = 'index.php'; 
          </script>";
} else {
    // Jika gagal, tampilkan pesan error
    echo "Gagal mengirim pesan: " . mysqli_error($koneksi);
}
?>