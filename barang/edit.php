<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-slate-800">
        ✏️ Edit Barang
    </h2>

    <form action="update.php" method="post" class="space-y-4">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <input type="text" name="nama_barang"
               value="<?= $row['nama_barang'] ?>"
               class="w-full border rounded-lg p-2">

        <input type="number" name="stok"
               value="<?= $row['stok'] ?>"
               class="w-full border rounded-lg p-2">

        <input type="number" name="harga"
               value="<?= $row['harga'] ?>"
               class="w-full border rounded-lg p-2">

        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg">
            Update Data
        </button>
    </form>
</div>

</body>
</html>
