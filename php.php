<?php

// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "tokoku";

$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// Inisialisasi variabel
$nama = $harga = $deskripsi = "";
$pesan = "";

// Proses saat form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"]);
    $harga = trim($_POST["harga"]);
    $deskripsi = trim($_POST["deskripsi"]);

    // Validasi
    if ($nama == "" || $harga == "" || $deskripsi == "") {
        $pesan = "Semua field harus diisi!";
    } else {
        // Masukkan ke database
        $stmt = $conn->prepare("INSERT INTO produk (nama, harga, deskripsi) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $nama, $harga, $deskripsi);

        if ($stmt->execute()) {
            $pesan = "Produk berhasil ditambahkan!";
            // Kosongkan form setelah berhasil
            $nama = $harga = $deskripsi = "";
        } else {
            $pesan = "Gagal menambahkan produk: " . $conn->error;
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Produk</title>
</head>
<body>
    <h2>Form Tambah Produk</h2>
    <form method="post" action="">
        <label>Nama Produk:</label><br>
        <input type="text" name="nama" value="<?php echo htmlspecialchars($nama); ?>"><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="<?php echo htmlspecialchars($harga); ?>"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi"><?php echo htmlspecialchars($deskripsi); ?></textarea><br><br>

        <input type="submit" value="Simpan">
    </form>

    <p style="color: red;"><?php echo $pesan; ?></p>
</body>
</html>
