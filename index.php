<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="mt-4">db Barang</h2>
    <form method="POST" action="process.php">
        <div class="mb-3">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Telp:</label>
            <input type="text" name="telp" class="form-control">
        </div>
        <div class="mb-3">
            <label>Roll User:</label>
            <input type="text" name="rolluser" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <h3 class="mt-4">Daftar User</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>Telp</th>
                <th>Roll User</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = new mysqli("localhost", "root", "", "db_barang");
            $result = $conn->query("SELECT * FROM tb_user");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_user']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['telp']}</td>
                        <td>{$row['rolluser']}</td>
                        <td>
                            <a href='edit.php?id={$row['id_user']}' class='btn btn-warning'>Edit</a>
                            <a href='delete.php?id={$row['id_user']}' class='btn btn-danger'>Delete</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
