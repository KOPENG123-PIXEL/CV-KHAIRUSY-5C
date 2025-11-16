<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Pendidikan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-white shadow-md border-b border-gray-200 mb-6">
    <div class="max-w-4xl mx-auto px-4 py-3 flex justify-center space-x-8 font-semibold text-gray-700">
        <a href="<?= site_url('/') ?>" class="hover:text-blue-600">Home</a>
        <a href="<?= site_url('pendidikan') ?>" class="text-blue-600 font-bold">Pendidikan</a>
        <a href="<?= site_url('pengalaman') ?>" class="hover:text-blue-600">Pengalaman</a>
        <a href="<?= site_url('keahlian') ?>" class="hover:text-blue-600">Keahlian</a>
    </div>
</nav>

<div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-xl">
    <h2 class="text-3xl font-bold mb-6 text-blue-700">📘 Riwayat Pendidikan</h2>

    <ol class="relative border-l border-gray-300 ml-6">
        <?php foreach ($pendidikan as $p): ?>
            <li class="mb-10 ml-6">
                <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -left-1.5 border border-white"></div>

                <p class="text-sm text-gray-500">
                    <?= $p['tahun_mulai'] ?> - <?= $p['tahun_selesai'] ?>
                </p>

                <h3 class="text-xl font-bold text-gray-800"><?= $p['jurusan'] ?></h3>

                <p class="text-gray-600"><?= $p['nama_institusi'] ?></p>

                <a href="<?= site_url('pendidikan/detail/' . $p['id']) ?>"
                   class="text-blue-600 font-semibold hover:underline mt-2 inline-block">
                    ➤ Lihat Deskripsi
                </a>
            </li>
        <?php endforeach; ?>
    </ol>
</div>

</body>
</html>
