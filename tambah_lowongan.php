<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli('localhost', 'root', '', 'lowongan_kerja');

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $nama_perusahaan = $_POST['nama_perusahaan'];
    $posisi = $_POST['posisi'];
    $lokasi = $_POST['lokasi'];
    $gaji = $_POST['gaji'];
    $tanggal_posting = date('Y-m-d');

    $sql = "INSERT INTO lowongan (nama_perusahaan, posisi, lokasi, gaji, tanggal_posting)
            VALUES ('$nama_perusahaan', '$posisi', '$lokasi', $gaji, '$tanggal_posting')";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lowongan</title>
</head>
<body>
    <h1>Tambah Lowongan Kerja</h1>
    <form method="POST">
        <label for="nama_perusahaan">Nama Perusahaan:</label><br>
        <input type="text" id="nama_perusahaan" name="nama_perusahaan" required><br><br>
        
        <label for="posisi">Posisi:</label><br>
        <input type="text" id="posisi" name="posisi" required><br><br>
        
        <label for="lokasi">Lokasi:</label><br>
        <input type="text" id="lokasi" name="lokasi" required><br><br>
        
        <label for="gaji">Gaji:</label><br>
        <input type="number" id="gaji" name="gaji" required><br><br>
        
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
