<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Pengalaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-white shadow-md border-b border-gray-200 mb-6">
    <div class="max-w-4xl mx-auto px-4 py-3 flex justify-center space-x-8 font-semibold text-gray-700">
        <a href="<?= site_url('/') ?>" class="hover:text-blue-600">Home</a>
        <a href="<?= site_url('pendidikan') ?>" class="hover:text-blue-600">Pendidikan</a>
        <a href="<?= site_url('pengalaman') ?>" class="text-blue-600 font-bold">Pengalaman</a>
        <a href="<?= site_url('keahlian') ?>" class="hover:text-blue-600">Keahlian</a>
    </div>
</nav>

<div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-xl">
    <h2 class="text-3xl font-bold mb-6 text-blue-700">💼 Riwayat Pengalaman</h2>

    <div class="space-y-6">
        <?php foreach ($pengalaman as $e): ?>
            <div class="p-5 bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                <div class="flex justify-between items-start mb-2">
                    <h4 class="text-xl font-bold text-gray-800"><?= $e['posisi'] ?></h4>
                    <span class="text-sm font-semibold text-blue-700 bg-blue-100 px-3 py-1 rounded-full">
                        <?= $e['tahun'] ?>
                    </span>
                </div>
                <p class="text-md font-medium text-gray-600 mb-3">@ <?= $e['nama_tempat'] ?></p>
                <p class="text-gray-700 border-l-4 border-blue-400 pl-3 italic">
                    <?= $e['deskripsi'] ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
