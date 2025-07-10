<?php
// Pastikan session_start() dipanggil di paling atas
session_start();

// Perbaikan: Inisialisasi keranjang jika belum ada
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Kosongkan keranjang
$_SESSION['cart'] = [];

// Redirect ke halaman sebelumnya
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>