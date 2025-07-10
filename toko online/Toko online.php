<?php
session_start();

include 'koneksi.php';

// Inisialisasi keranjang jika belum ada
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'php_errors.log');

// Tangkap pesan dari URL
$message = isset($_GET['message']) ? $_GET['message'] : '';
$message_type = isset($_GET['type']) ? $_GET['type'] : '';

// Ambil kategori dari URL jika ada
$selected_category = isset($_GET['category']) ? $_GET['category'] : '';

// Query untuk mengambil semua produk
$sql = "SELECT * FROM products";
if (!empty($selected_category)) {
    $sql .= " WHERE category = '$selected_category'";
}
$result = mysqli_query($conn, $sql);

// Simpan hasil produk dalam array
$products = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}

// Query untuk mengambil kategori unik
$category_sql = "SELECT DISTINCT category FROM products";
$category_result = mysqli_query($conn, $category_sql);
$categories = [];
if ($category_result) {
    while ($row = mysqli_fetch_assoc($category_result)) {
        $categories[] = $row['category'];
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Toko Online Kami</h1>
        </div>
        
        <!-- Ikon Keranjang (tanpa panel) -->
        <div class="cart-container">
            <div class="cart-icon" id="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count" id="cart-count">
                    <?php 
                    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                        echo array_sum($_SESSION['cart']);
                    } else {
                        echo '0';
                    }
                    ?>
                </span>
            </div>
        </div>
    </header>
    
    <nav>
        <div class="container">
            <ul>
                <li><a href="Toko online.php" class="active">Beranda</a></li>
                <li><a href="create.php">Tambah Produk</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
        <?php if (isset($message)): ?>
            <div class="message message-<?php echo $message_type; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        
        <h2 style="text-align: center; margin: 30px 0;">Daftar Produk</h2>
        
        <!-- Filter Kategori -->
        <div class="filter-container">
            <div class="filter-header">
                <h3>Filter Kategori</h3>
            </div>
            <div class="filter-buttons">
                <a href="Toko online.php" class="filter-btn <?php echo empty($selected_category) ? 'active' : ''; ?>">Semua Produk</a>
                <?php foreach ($categories as $category): ?>
                    <a href="Toko online.php?category=<?php echo urlencode($category); ?>" 
                       class="filter-btn <?php echo $selected_category == $category ? 'active' : ''; ?>">
                       <?php echo htmlspecialchars($category); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="product-grid">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $row): ?>
                    <div class="product-card">
                        <img src="images/<?php echo htmlspecialchars($row['image']); ?>" 
                             alt="<?php echo htmlspecialchars($row['name']); ?>" 
                             class="product-image">
                        <div class="product-content">
                            <h3 class="product-title"><?php echo htmlspecialchars($row['name']); ?></h3>
                            <p class="product-price">Rp <?php echo number_format($row['price'], 0, ',', '.'); ?></p>
                            <p class="product-description"><?php echo htmlspecialchars($row['description']); ?></p>
                            <span class="product-category"><?php echo htmlspecialchars($row['category']); ?></span>
                            
                            <!-- Tombol Tambah ke Keranjang -->
                            <a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="add-to-cart-btn">
                                <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                            </a>
                            
                            <div class="product-actions">
                                <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">Edit</a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" 
                                   class="btn btn-delete" 
                                   onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                    Hapus
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div style="grid-column: 1/-1; text-align: center; padding: 40px;">
                    <p>Tidak ada produk yang ditemukan.</p>
                    <a href="create.php" class="btn" style="margin-top: 20px;">Tambah Produk Pertama</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Panel Keranjang (dipindahkan ke bagian bawah) -->
    <div class="cart-panel" id="cart-panel">
        <h3>Keranjang Belanja</h3>
        
        <div class="cart-items" id="cart-items">
            <?php 
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])): 
                $cart_total = 0;
                
                // Gunakan koneksi baru untuk query keranjang
                $conn_cart = mysqli_connect("localhost", "root", "", "toko_online");
                
                foreach ($_SESSION['cart'] as $product_id => $quantity): 
                    $sql = "SELECT * FROM products WHERE id = $product_id";
                    $result_cart = mysqli_query($conn_cart, $sql);
                    $product = mysqli_fetch_assoc($result_cart);
                    
                    if ($product):
                        $subtotal = $product['price'] * $quantity;
                        $cart_total += $subtotal;
            ?>
                    <div class="cart-item" data-id="<?php echo $product_id; ?>">
                        <img src="images/<?php echo htmlspecialchars($product['image']); ?>" 
                             alt="<?php echo htmlspecialchars($product['name']); ?>" 
                             class="cart-item-image">
                        <div class="cart-item-details">
                            <div class="cart-item-title"><?php echo htmlspecialchars($product['name']); ?></div>
                            <div class="cart-item-price">Rp <?php echo number_format($product['price'], 0, ',', '.'); ?></div>
                            <div class="cart-item-quantity">
                                <button class="quantity-minus">-</button>
                                <input type="number" class="quantity-input" value="<?php echo $quantity; ?>" min="1">
                                <button class="quantity-plus">+</button>
                            </div>
                        </div>
                        <button class="cart-item-remove">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                <?php endif; ?>
                <?php endforeach; 
                
                // Tutup koneksi keranjang
                mysqli_close($conn_cart);
                ?>
            <?php else: ?>
                <p>Keranjang belanja kosong</p>
            <?php endif; ?>
        </div>
        
        <?php if (isset($cart_total)): ?>
        <div class="cart-total">
            Total: Rp <span id="cart-total"><?php echo number_format($cart_total, 0, ',', '.'); ?></span>
        </div>
        
        <div class="cart-actions">
            <a href="clear_cart.php" class="btn btn-cancel">Kosongkan</a>
            <a href="checkout.php" class="btn">Checkout</a>
        </div>
        <?php endif; ?>
    </div>
    
    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Toko Online. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
    
    <script>
        // Toggle keranjang
        document.getElementById('cart-icon').addEventListener('click', function() {
            document.getElementById('cart-panel').classList.toggle('active');
        });
        
        // Update kuantitas
        document.querySelectorAll('.quantity-plus').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.previousElementSibling;
                input.value = parseInt(input.value) + 1;
                updateCart(input.closest('.cart-item').dataset.id, input.value);
            });
        });
        
        document.querySelectorAll('.quantity-minus').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.nextElementSibling;
                if (parseInt(input.value) > 1) {
                    input.value = parseInt(input.value) - 1;
                    updateCart(input.closest('.cart-item').dataset.id, input.value);
                }
            });
        });
        
        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('change', function() {
                if (parseInt(this.value) < 1) this.value = 1;
                updateCart(this.closest('.cart-item').dataset.id, this.value);
            });
        });
        
        // Hapus item
        document.querySelectorAll('.cart-item-remove').forEach(button => {
            button.addEventListener('click', function() {
                const item = this.closest('.cart-item');
                removeFromCart(item.dataset.id);
                item.remove();
                updateCartCount();
            });
        });
        
        // Fungsi update keranjang
        function updateCart(productId, quantity) {
            const formData = new FormData();
            formData.append('product_id', productId);
            formData.append('quantity', quantity);
            
            fetch('update_cart.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    updateCartTotal();
                    updateCartCount();
                }
            });
        }
        
        // Fungsi hapus item
        function removeFromCart(productId) {
            const formData = new FormData();
            formData.append('product_id', productId);
            formData.append('remove', true);
            
            fetch('update_cart.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    updateCartTotal();
                    updateCartCount();
                }
            });
        }
        
        // Update total keranjang
        function updateCartTotal() {
            let total = 0;
            document.querySelectorAll('.cart-item').forEach(item => {
                const price = parseFloat(item.querySelector('.cart-item-price').textContent.replace('Rp ', '').replace(/\./g, ''));
                const quantity = parseInt(item.querySelector('.quantity-input').value);
                total += price * quantity;
            });
            
            document.getElementById('cart-total').textContent = 
                total.toLocaleString('id-ID');
        }
        
        // Update jumlah keranjang
        function updateCartCount() {
            let count = 0;
            document.querySelectorAll('.cart-item').forEach(item => {
                count += parseInt(item.querySelector('.quantity-input').value);
            });
            
            document.getElementById('cart-count').textContent = count;
        }
    </script>
</body>
</html>
<?php 
// Tutup koneksi utama
mysqli_close($conn); 
?>