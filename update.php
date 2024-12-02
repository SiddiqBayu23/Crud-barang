<?php
include 'koneksi.php'; // Koneksi ke database

if (isset($_POST['update'])) {
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $rolluser = $_POST['rolluser'];

    // Query untuk mengupdate data
    $sql = "UPDATE tb_user 
            SET username='$username', name='$name', email='$email', telp='$telp', rolluser='$rolluser' 
            WHERE id_user=$id_user";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect ke halaman utama setelah update
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
