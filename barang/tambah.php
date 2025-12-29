<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-100 to-slate-100 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-slate-800">
        ➕ Tambah Barang
    </h2>

    <form action="simpan.php" method="post" class="space-y-4">
        <div>
            <label class="block mb-1 font-semibold">Nama Barang</label>
            <input type="text" name="nama_barang"
                   class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-300"
                   required>
        </div>

        <div>
            <label class="block mb-1 font-semibold">Stok</label>
            <input type="number" name="stok"
                   class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-300"
                   required>
        </div>

        <div>
            <label class="block mb-1 font-semibold">Harga</label>
            <input type="number" name="harga"
                   class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-300"
                   required>
        </div>

        <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg font-semibold">
            Simpan Data
        </button>

        <a href="index.php"
           class="block text-center text-slate-500 hover:text-slate-700 mt-2">
            ← Kembali
        </a>
    </form>
</div>

</body>
</html>
