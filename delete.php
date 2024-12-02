<?php
include 'koneksi.php'; // Koneksi ke database

// Periksa apakah ID dikirim melalui URL
if (isset($_GET['id'])) {
    $id_user = $_GET['id'];

    // Query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM tb_user WHERE id_user = $id_user";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect ke halaman utama setelah delete
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID tidak ditemukan.";
}

$conn->close();
?>
