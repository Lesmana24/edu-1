<?php
include 'koneksi.php';

// Ambil ID produk dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // Query untuk menghapus produk
    $sql = "DELETE FROM products WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: Toko online.php?message=Produk berhasil dihapus&type=success");
    } else {
        header("Location: Toko online.php?message=Gagal menghapus produk&type=error");
    }
} else {
    header("Location: Toko online.php?message=ID produk tidak valid&type=error");
}

mysqli_close($conn);
?>