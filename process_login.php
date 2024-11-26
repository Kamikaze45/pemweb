<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $sql = "SELECT * FROM users WHERE email='$email' And name='$name'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login berhasil! Selamat datang, " . $row['name'];
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Email/Name tidak ditemukan!";
    }

    $conn->close();
}
?>
