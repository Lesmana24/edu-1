<?php
// Pastikan session_start() dipanggil di paling atas
session_start();

header('Content-Type: application/json');

$response = ['success' => false];

// Perbaikan: Inisialisasi keranjang jika belum ada
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
    $remove = isset($_POST['remove']) ? boolval($_POST['remove']) : false;

    if ($product_id > 0) {
        // Hapus item jika diperlukan
        if ($remove) {
            if (isset($_SESSION['cart'][$product_id])) {
                unset($_SESSION['cart'][$product_id]);
                $response['success'] = true;
                $response['message'] = 'Item dihapus dari keranjang';
            }
        } 
        // Update kuantitas
        else if ($quantity > 0) {
            $_SESSION['cart'][$product_id] = $quantity;
            $response['success'] = true;
            $response['message'] = 'Keranjang diperbarui';
        }
    }
}

echo json_encode($response);
exit;
?>