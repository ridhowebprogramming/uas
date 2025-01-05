 <?php include "header.php";?>
<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'lowongan_kerja';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mendapatkan data lowongan kerja
$sql = "SELECT * FROM lowongan";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Data Lowongan Kerja</title>
</head>
<body>
    <h2></h2>
    <form action="upload_lowongan.php" method="POST" enctype="multipart/form-data">
        <label for="lowongan_kerja">Judul Lowongan Kerja:</label><br>
        <input type="text" id="lowongan_kerja" name="lowongan_kerja" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi" rows="5" required></textarea><br><br>

        <label for="foto">Upload Foto:</label><br>
        <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

        <button type="submit">Upload</button>
    </form>
</body>
</html>
