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
    if (empty($nama) || empty($harga)) {
        $pesan = "Semua field harus diisi!";
    } elseif (!is_numeric($harga)) {
        $pesan = "Harga harus berupa angka!";
    } else {
        // Masukkan ke database
        $stmt = $conn->prepare("INSERT INTO produk (nama, harga, deskripsi) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $nama, $harga, $deskripsi);
        
        if ($stmt->execute()) {
            header("Location: ".$_SERVER['PHP_SELF']); // Redirect ke halaman yang sama
            exit();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Form Tambah Produk</h2>
        <form method="post" action="">
            <div class="mb-3">
                <label class="form-label">Nama Produk:</label>
                <input type="text" class="form-control" name="nama" value="<?php echo htmlspecialchars($nama); ?>">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Harga:</label>
                <input type="number" class="form-control" name="harga" value="<?php echo htmlspecialchars($harga); ?>">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Deskripsi:</label>
                <textarea class="form-control" name="deskripsi"><?php echo htmlspecialchars($deskripsi); ?></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <?php if (!empty($pesan)): ?>
            <div class="alert <?php echo strpos($pesan, 'berhasil') !== false ? 'alert-success' : 'alert-danger'; ?> mt-3">
                <?php echo $pesan; ?>
            </div>
        <?php endif; ?>

        <h3 class="mt-4">Daftar Produk</h3>
        <table id="produk" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM produk");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
                        echo "<td>" . number_format($row["harga"], 0, ',', '.') . "</td>";
                        echo "<td>" . htmlspecialchars($row["deskripsi"]) . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
<!-- Pake datatable aja biar cepet hehe -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>
    <script>
$(document).ready(function() {
    $('#produk').DataTable({
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.13.6/i18n/id.json"
        },
        "responsive": true
    });
});
</script>
</body>
</html>