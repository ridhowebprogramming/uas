<?php

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

//insert data
$sql = "insert into admin (username,password) values ('$username','$password')";
$query = mysqli_query($koneksi,$sql);

?>

<script>
    alert('Penambahan Admin Berhasil');
    document.location ='login.php';
    </script>
