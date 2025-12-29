<?php
include '../config/koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM barang");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Gudang Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen">

<div class="max-w-6xl mx-auto p-8">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-slate-800">
            📦 Manajemen Gudang
        </h1>
        <a href="tambah.php"
           class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg shadow">
            + Tambah Barang
        </a>
    </div>

    <!-- Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-slate-200 text-slate-700">
                <tr>
                    <th class="p-4">No</th>
                    <th class="p-4">Nama Barang</th>
                    <th class="p-4">Stok</th>
                    <th class="p-4">Harga</th>
                    <th class="p-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($data)) : ?>
                <tr class="border-b hover:bg-slate-50">
                    <td class="p-4"><?= $no++ ?></td>
                    <td class="p-4 font-semibold"><?= $row['nama_barang'] ?></td>
                    <td class="p-4"><?= $row['stok'] ?></td>
                    <td class="p-4">Rp <?= number_format($row['harga']) ?></td>
                    <td class="p-4 flex justify-center gap-2">
                        <a href="edit.php?id=<?= $row['id'] ?>"
                           class="bg-yellow-400 hover:bg-yellow-500 px-3 py-1 rounded text-white text-sm">
                           Edit
                        </a>
                        <a href="hapus.php?id=<?= $row['id'] ?>"
                           onclick="return confirm('Yakin ingin menghapus?')"
                           class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded text-white text-sm">
                           Hapus
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
