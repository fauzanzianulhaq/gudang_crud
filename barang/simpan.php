<?php
include '../config/koneksi.php';

$nama  = $_POST['nama_barang'];
$stok  = $_POST['stok'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "
    INSERT INTO barang (nama_barang, stok, harga)
    VALUES ('$nama', '$stok', '$harga')
");

header("Location: index.php");
?>
