<?php
// Konfigurasi database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'wabproswu';

// Koneksi ke database
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $lowongan_kerja = $conn->real_escape_string($_POST['lowongan_kerja']);
    $deskripsi = $conn->real_escape_string($_POST['deskripsi']);
    $foto = $_FILES['foto'];

    // Proses upload foto
    $target_dir = "uploads/";
    $foto_name = basename($foto['name']);
    $target_file = $target_dir . time() . "_" . $foto_name;
    $upload_ok = 1;
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validasi file
    if (getimagesize($foto['tmp_name']) === false) {
        echo "File bukan gambar.";
        $upload_ok = 0;
    }
    if ($upload_ok && move_uploaded_file($foto['tmp_name'], $target_file)) {
        // Simpan data ke database
        $sql = "INSERT INTO lowongan_kerja (lowongan_kerja, deskripsi, foto) VALUES ('$lowongan_kerja', '$deskripsi', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil disimpan.";
            echo "<a href = 'list_lowongan.php' > Lihat Daftar Lowongan Kerja </a>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Gagal mengupload foto.";
    }
}

$conn->close();
?>
