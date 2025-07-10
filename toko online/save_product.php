<?php
include 'koneksi.php';
$target_dir = "images/";

// Buat folder jika belum ada
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// Cek apakah folder writable
if (!is_writable($target_dir)) {
    $message = "Folder images tidak memiliki izin tulis. Silakan berikan izin Full Control pada folder images.";
    $type = "error";
    header("Location: create.php?message=" . urlencode($message) . "&type=$type");
    exit;
}
// Tangkap data dari form
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$name = mysqli_real_escape_string($conn, $_POST['name']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$category = mysqli_real_escape_string($conn, $_POST['category']);

// Default gambar
$image = 'default.jpg';

// Proses upload gambar jika ada
if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $target_dir = "images/";
    
    // Pastikan folder images ada
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    // Dapatkan ekstensi file
    $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
    
    // Generate nama unik untuk gambar
    $image = uniqid() . '.' . $imageFileType;
    $target_file = $target_dir . $image;
    
    // Validasi ekstensi file
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowed_extensions)) {
        $message = "Maaf, hanya file JPG, JPEG, PNG, dan GIF yang diizinkan.";
        header("Location: create.php?message=" . urlencode($message) . "&type=error");
        exit;
    }
    
    // Validasi ukuran file (maksimal 5MB)
    if ($_FILES["image"]["size"] > 5000000) {
        $message = "Maaf, ukuran file terlalu besar. Maksimal 5MB.";
        header("Location: create.php?message=" . urlencode($message) . "&type=error");
        exit;
    }
    
    // Coba upload file
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // File berhasil diupload
    } else {
        $message = "Maaf, terjadi kesalahan saat mengupload file.";
        header("Location: create.php?message=" . urlencode($message) . "&type=error");
        exit;
    }
}

// Query database
if ($id > 0) {
    // Update produk yang sudah ada
    $sql = "UPDATE products SET 
            name = '$name', 
            price = '$price', 
            description = '$description', 
            category = '$category', 
            image = '$image' 
            WHERE id = $id";
} else {
    // Tambah produk baru
    $sql = "INSERT INTO products (name, price, description, category, image) 
            VALUES ('$name', '$price', '$description', '$category', '$image')";
}

if (mysqli_query($conn, $sql)) {
    $message = $id > 0 ? "Produk berhasil diperbarui" : "Produk berhasil ditambahkan";
    $type = "success";
    $redirect = "Toko online.php";
} else {
    $message = $id > 0 ? "Gagal memperbarui produk" : "Gagal menambahkan produk";
    $message .= ": " . mysqli_error($conn);
    $type = "error";
    $redirect = $id > 0 ? "update.php?id=$id" : "create.php";
}

mysqli_close($conn);
header("Location: $redirect?message=" . urlencode($message) . "&type=$type");
?>