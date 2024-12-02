<?php
$conn = new mysqli("localhost", "root", "", "db_barang");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Membuat tabel
$sql = "CREATE TABLE tb_user (
    id_user INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    name VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100),
    telp VARCHAR(15),
    rolluser VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabel tb_user berhasil dibuat";
} else {
    echo "Error membuat tabel: " . $conn->error;
}

$conn->close();
?>
