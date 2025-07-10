<?php
include 'koneksi.php';
if (isset($_GET['message']) && isset($_GET['type'])) {
    $message = $_GET['message'];
    $message_type = $_GET['type'];
}
// Inisialisasi variabel
$name = $price = $description = $category = '';
$image = 'default.jpg';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Toko Online</title>
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
                <li><a href="create.php" class="active">Tambah Produk</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
        <div class="form-container">
            <h2>Tambah Produk Baru</h2>
            
            <form action="save_product.php" method="post">
                <div class="form-group">
                    <label for="name">Nama Produk</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="price">Harga (Rp)</label>
                    <input type="number" id="price" name="price" class="form-control" min="0" required>
                </div>
                
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea id="description" name="description" class="form-control" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="category">Kategori</label>
                    <select id="category" name="category" class="form-control" required>
                        <option value="elektronik">Elektronik</option>
                        <option value="fashion">Fashion</option>
                        <option value="olahraga">Olahraga</option>
                        <option value="rumah">Perabotan Rumah</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="image">Gambar Produk</label>
                    <input type="file" id="image" name="image" class="form-control">
                    <p style="margin-top: 10px; font-size: 0.9em; color: #777;">
                        Kosongkan jika ingin menggunakan gambar default
                    </p>
                </div>
                
                <div class="form-buttons">
                    <button type="submit" class="btn">Simpan Produk</button>
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