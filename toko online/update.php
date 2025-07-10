<?php
include 'koneksi.php';

// Ambil ID produk dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Query untuk mengambil data produk
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);

// Jika produk tidak ditemukan
if (!$product) {
    header("Location: Toko online.php?message=Produk tidak ditemukan&type=error");
    exit;
}
if (isset($_GET['message']) && isset($_GET['type'])) {
    $message = $_GET['message'];
    $message_type = $_GET['type'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk - Toko Online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Toko Online Kami</h1>
        </div>
    </header>
    
    <nav>
        <div class="container">
            <ul>
                <li><a href="Toko online.php">Beranda</a></li>
                <li><a href="create.php">Tambah Produk</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="form-container">
            <h2>Edit Produk</h2>
            
            <form action="save_product.php" method="post">
                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                
                <div class="form-group">
                    <label for="name">Nama Produk</label>
                    <input type="text" id="name" name="name" class="form-control" 
                           value="<?php echo htmlspecialchars($product['name']); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="price">Harga (Rp)</label>
                    <input type="number" id="price" name="price" class="form-control" 
                           value="<?php echo $product['price']; ?>" min="0" required>
                </div>
                
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea id="description" name="description" class="form-control" required><?php 
                        echo htmlspecialchars($product['description']); 
                    ?></textarea>
                </div>
                
                <div class="form-group">
                    <label for="category">Kategori</label>
                    <select id="category" name="category" class="form-control" required>
                        <option value="elektronik" <?php echo ($product['category'] == 'elektronik') ? 'selected' : ''; ?>>Elektronik</option>
                        <option value="fashion" <?php echo ($product['category'] == 'fashion') ? 'selected' : ''; ?>>Fashion</option>
                        <option value="olahraga" <?php echo ($product['category'] == 'olahraga') ? 'selected' : ''; ?>>Olahraga</option>
                        <option value="rumah" <?php echo ($product['category'] == 'rumah') ? 'selected' : ''; ?>>Perabotan Rumah</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="image">Gambar Produk</label>
                    <input type="file" id="image" name="image" class="form-control">
                    <p style="margin-top: 10px; font-size: 0.9em; color: #777;">
                        Kosongkan jika tidak ingin mengganti gambar
                    </p>
                    <div style="margin-top: 10px; text-align: center;">
                        <img src="images/<?php echo htmlspecialchars($product['image']); ?>" 
                             alt="Current Image" 
                             style="max-width: 150px; border-radius: 8px;">
                    </div>
                </div>
                
                <div class="form-buttons">
                    <button type="submit" class="btn">Perbarui Produk</button>
                    <a href="Toko online.php" class="btn btn-cancel">Batal</a>
                </div>
            </form>
        </div>
    </div>
    
    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Toko Online. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
</body>
</html>
<?php mysqli_close($conn); ?>