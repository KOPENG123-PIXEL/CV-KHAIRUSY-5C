<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pengalaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-xl">

    <h1 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-3">
        💼 Daftar Lengkap Pengalaman
    </h1>

    <div class="space-y-6">
        <?php foreach ($pengalaman as $p): ?>
            <div class="p-5 border border-gray-200 bg-blue-50 rounded-xl shadow-md">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-blue-800"><?= esc($p['posisi']) ?></h3>
                    <span class="text-sm bg-blue-200 text-blue-800 px-3 py-1 rounded-full font-semibold">
                        <?= esc($p['tahun']) ?>
                    </span>
                </div>

                <p class="font-medium text-gray-700 mb-2">@ <?= esc($p['nama_tempat']) ?></p>

                <p class="text-gray-600 italic border-l-4 border-blue-400 pl-3">
                    <?= esc($p['deskripsi']) ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mt-8">
        <a href="<?= site_url('cv') ?>" 
           class="text-blue-600 font-semibold hover:underline">
           ← Kembali ke CV
        </a>
    </div>

</div>

</body>
</html>
