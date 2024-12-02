<?php
$servername = "localhost"; // Sesuaikan dengan server Anda
$username = "root";        // Sesuaikan dengan username Anda
$password = "";            // Sesuaikan dengan password Anda
$database = "db_barang";   // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    // echo "Koneksi berhasil"; // Opsional, untuk debugging
}
?>
