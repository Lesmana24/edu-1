<?php
session_start();

// Inisialisasi keranjang jika belum ada
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($product_id > 0) {
    // Tambahkan ke keranjang
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]++;
    } else {
        $_SESSION['cart'][$product_id] = 1;
    }
    
    // Set pesan sukses
    $_SESSION['message'] = 'Produk berhasil ditambahkan ke keranjang!';
    $_SESSION['message_type'] = 'success';
} else {
    // Set pesan error
    $_SESSION['message'] = 'Produk tidak valid!';
    $_SESSION['message_type'] = 'error';
}

// Redirect ke halaman utama
header('Location: Toko online.php');
exit;
?>