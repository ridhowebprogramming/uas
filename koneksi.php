<?php
//aturan
$server     ="localhost";
$user       ="root";
$pass       ="";
$db         ="wabproswu";

$koneksi    = mysqli_connect ($server,$user,$pass,$db);

//keterangan
if(!$koneksi){
    die("Koneksi Gagal". mysqli_connect_error());

}else{
    //echo "Koneksi Berhasil";
}

?>