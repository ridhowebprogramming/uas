<?php
// Konfigurasi database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'webproswu';

// Koneksi ke database
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Hapus data
    $sql = "SELECT foto FROM lowongan_kerja WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (file_exists($row['foto'])) {
            unlink($row['foto']); // Hapus file foto
        }
    }

    $sql = "DELETE FROM lowongan_kerja WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
header("Location: list_lowongan.php");
exit;
?>

