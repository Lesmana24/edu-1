<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "toko_online";

// Buat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>