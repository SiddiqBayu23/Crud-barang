<?php
include 'koneksi.php'; // Koneksi ke database

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil data user berdasarkan ID
$sql = "SELECT * FROM tb_user WHERE id_user = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="mt-4">Edit User</h2>
    <form method="POST" action="update.php">
        <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
        <div class="mb-3">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
        </div>
        <div class="mb-3">
            <label>Telp:</label>
            <input type="text" name="telp" class="form-control" value="<?php echo $row['telp']; ?>">
        </div>
        <div class="mb-3">
            <label>Roll User:</label>
            <input type="text" name="rolluser" class="form-control" value="<?php echo $row['rolluser']; ?>">
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
