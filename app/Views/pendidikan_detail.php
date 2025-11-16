<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Pendidikan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-2xl mx-auto p-6 mt-10 bg-white shadow-lg rounded-xl">
    <h2 class="text-3xl font-bold text-blue-700 mb-4">🎓 Detail Pendidikan</h2>

    <p class="text-gray-600 text-sm">
        Periode: <?= $pendidikan['tahun_mulai'] ?> - <?= $pendidikan['tahun_selesai'] ?>
    </p>

    <h3 class="text-2xl font-bold mt-2"><?= $pendidikan['jurusan'] ?></h3>

    <p class="text-lg text-gray-700">{{ $pendidikan['nama_institusi'] }}</p>

    <div class="mt-4 p-4 bg-blue-50 border-l-4 border-blue-500 rounded">
        <p class="text-gray-700"><?= $pendidikan['deskripsi'] ?></p>
    </div>

    <a href="<?= site_url('pendidikan') ?>" 
       class="mt-6 inline-block text-blue-600 font-semibold hover:underline">
        ← Kembali
    </a>
</div>

</body>
</html>
