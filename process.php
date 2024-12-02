<?php
$conn = new mysqli("localhost", "root", "", "db_barang");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $rolluser = $_POST['rolluser'];

    $sql = "INSERT INTO tb_user (username, name, password, email, telp, rolluser)
            VALUES ('$username', '$name', '$password', '$email', '$telp', '$rolluser')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
