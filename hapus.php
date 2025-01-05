<?php
    include "koneksi.php";

$id = $_GET['id'];
mysqli_query($koneksi,"delete from admin where id = '$id'");
echo"<script>alert('Hapus Data Berhasil');document.location= 'admin.php';</script>";

?>