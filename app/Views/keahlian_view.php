<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Keahlian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-white shadow-md border-b border-gray-200 mb-6">
    <div class="max-w-4xl mx-auto px-4 py-3 flex justify-center space-x-8 font-semibold text-gray-700">
        <a href="<?= site_url('/') ?>" class="hover:text-blue-600">Home</a>
        <a href="<?= site_url('pendidikan') ?>" class="hover:text-blue-600">Pendidikan</a>
        <a href="<?= site_url('pengalaman') ?>" class="hover:text-blue-600">Pengalaman</a>
        <a href="<?= site_url('keahlian') ?>" class="text-blue-600 font-bold">Keahlian</a>
    </div>
</nav>

<div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-xl">
    <h2 class="text-3xl font-bold mb-6 text-blue-700">🛠️ Keahlian</h2>

    <ul class="space-y-3">
        <?php foreach ($keahlian as $k): ?>
            <li class="p-4 bg-white border border-gray-200 rounded-lg shadow hover:shadow-md transition">
                <span class="text-lg font-semibold text-gray-800"><?= $k['nama_keahlian'] ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>
