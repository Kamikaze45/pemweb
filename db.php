<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pt_bandi_car";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
