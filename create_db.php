<?php
$servername = "localhost"; // Sesuaikan dengan server Anda
$username = "root";        // Sesuaikan dengan username Anda
$password = "";            // Sesuaikan dengan password Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Membuat database
$sql = "CREATE DATABASE db_barang";
if ($conn->query($sql) === TRUE) {
    echo "Database berhasil dibuat";
} else {
    echo "Error membuat database: " . $conn->error;
}

$conn->close();
?>
