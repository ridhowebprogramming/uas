<?php

include "koneksi.php";
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

//insert data
$sql = "update admin set username = '$username', password ='$password' where id = '$id'";
$query = mysqli_query($koneksi,$sql);

?>

<script>
    alert('Update Admin Berhasil');
    document.location ='admin.php';
    </script>