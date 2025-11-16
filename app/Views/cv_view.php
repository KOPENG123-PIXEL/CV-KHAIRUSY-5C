<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV <?= esc($biodata['nama']) ?></title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
    body { 
      font-family: 'Inter', sans-serif; 
      background-color: #f3f4f6; /* abu muda */
    }
    .section-header {
      border-bottom: 3px solid #60a5fa;
      padding-bottom: 8px;
      margin-bottom: 20px;
      font-weight: 700;
      color: #1f2937;
      font-size: 1.5rem;
    }
  </style>
</head>
<body class="min-h-screen p-4 sm:p-8 lg:p-12">

  <div class="bg-white shadow-2xl rounded-3xl w-full max-w-6xl mx-auto p-6 sm:p-10 lg:p-12">

  <!-- NAVBAR -->
            <nav class="bg-gradient-to-r from-blue-500 to-blue-600 shadow-lg mb-8">
                <div class="max-w-4xl mx-auto px-6 py-4 flex justify-center space-x-6 text-white font-semibold">

                    <!-- ITEM: Pendidikan -->
                    <a href="<?= site_url('pendidikan') ?>"
                    class="px-4 py-2 rounded-full transition-all duration-300 
                            hover:bg-white hover:text-blue-600 hover:shadow-md
                            <?= (service('uri')->getSegment(1) === 'pendidikan') ? 'bg-white text-blue-600 shadow-md' : '' ?>">
                        Pendidikan
                    </a>

                    <!-- ITEM: Pengalaman -->
                    <a href="<?= site_url('pengalaman') ?>"
                    class="px-4 py-2 rounded-full transition-all duration-300 
                            hover:bg-white hover:text-blue-600 hover:shadow-md
                            <?= (service('uri')->getSegment(1) === 'pengalaman') ? 'bg-white text-blue-600 shadow-md' : '' ?>">
                        Pengalaman
                    </a>

                    <!-- ITEM: Keahlian -->
                    <a href="<?= site_url('keahlian') ?>"
                    class="px-4 py-2 rounded-full transition-all duration-300 
                            hover:bg-white hover:text-blue-600 hover:shadow-md
                            <?= (service('uri')->getSegment(1) === 'keahlian') ? 'bg-white text-blue-600 shadow-md' : '' ?>">
                        Keahlian
                    </a>

                </div>
            </nav>


    
    <!-- HEADER DAN BIODATA -->
    <header class="text-center mb-10 border-b pb-6">
        <img src="/uploads/<?= esc($biodata['foto']) ?>" 
             alt="Foto Profil" 
             class="mx-auto w-32 h-32 object-cover rounded-full ring-4 ring-blue-500 shadow-lg mb-4"
             onerror="this.onerror=null;this.src='https://placehold.co/128x128/9ca3af/ffffff?text=FOTO';">
        
        <h1 class="text-4xl font-extrabold text-gray-900 mb-1"><?= esc($biodata['nama']) ?></h1>
        
        <p class="text-lg text-blue-600 font-semibold mb-3">
            <span class="inline-block mx-1">|</span>
            <?= esc($biodata['email']) ?>
            <span class="inline-block mx-1">|</span>
            <?= esc($biodata['telepon']) ?>
            <span class="inline-block mx-1">|</span>
        </p>
        
        <p class="text-gray-500 text-sm mb-4">
            <span class="font-bold text-gray-700">Alamat:</span> <?= esc($biodata['alamat']) ?>
        </p>

        <div class="max-w-3xl mx-auto mt-4 p-4 bg-blue-50 rounded-xl shadow-inner">
            <p class="text-gray-700 italic">
                <?= esc($biodata['deskripsi']) ?>
            </p>
        </div>
    </header>

    <!-- GRID KONTEN -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-10">

        <!-- KOLOM KIRI -->
        <div class="lg:col-span-1 space-y-8">
            
            <!-- KEAHLIAN -->
            <section>
                <h3 class="section-header text-xl">🧠 Keahlian</h3>
                <ul class="space-y-3">
                    <?php if (!empty($keahlian)): ?>
                        <?php foreach($keahlian as $k): ?>
                            <li class="bg-gray-100 p-3 rounded-lg shadow-sm">
                                <div class="flex justify-between items-center">
                                    <span class="font-medium text-gray-700"><?= esc($k['nama_keahlian']) ?></span>
                                    <span class="text-xs font-semibold text-white bg-blue-500 px-3 py-1 rounded-full shadow-md">
                                        <?= esc($k['level']) ?>
                                    </span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-gray-400 italic">Belum ada data keahlian.</p>
                    <?php endif; ?>
                </ul>
            </section>

            <!-- PENDIDIKAN -->
        <section>
            <h3 class="section-header text-xl">🎓 Pendidikan</h3>
            <ol class="relative border-l border-gray-200 ml-4 space-y-6">                  
                <?php if (!empty($pendidikan)): ?>
                    <?php foreach($pendidikan as $p): ?>
                        <li class="mb-4 ml-4">
                            <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -left-1.5 border border-white"></div>

                            <time class="mb-1 text-sm font-normal leading-none text-gray-400">
                                <?= esc($p['tahun_mulai']) ?> - <?= esc($p['tahun_selesai']) ?>
                            </time>

                            <h4 class="text-lg font-semibold text-gray-900">
                                <?= esc($p['jurusan']) ?>
                            </h4>

                            <p class="text-base font-normal text-gray-500">
                                <?= esc($p['nama_institusi']) ?>
                            </p>

                            <!-- 🔵 Tombol Deskripsi Ditambahkan di sini -->
                            <a href="<?= site_url('pendidikan/detail/' . $p['id']) ?>" 
                            class="inline-block text-sm text-blue-600 font-semibold hover:underline mt-2">
                            ➤ Deskripsi
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-gray-400 italic">Belum ada data pendidikan.</p>
                <?php endif; ?>
            </ol>
        </section>

        </div>

        <!-- KOLOM KANAN -->
        <div class="lg:col-span-2 space-y-10">
            
            <!-- PENGALAMAN -->
            <section>
                <h3 class="section-header">💼 Pengalaman</h3>
                <div class="space-y-6">
                    <?php if (!empty($pengalaman)): ?>
                        <?php foreach($pengalaman as $e): ?>
                            <div class="p-5 bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800"><?= esc($e['posisi']) ?></h4>
                                    <span class="text-sm font-semibold text-blue-700 bg-blue-100 px-3 py-1 rounded-full">
                                        <?= esc($e['tahun']) ?>
                                    </span>
                                </div>
                                <p class="text-md font-medium text-gray-600 mb-3">@ <?= esc($e['nama_tempat']) ?></p>
                                <p class="text-gray-700 border-l-4 border-blue-400 pl-3 italic">
                                    <?= esc($e['deskripsi']) ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-gray-400 italic">Belum ada data pengalaman.</p>
                    <?php endif; ?>
                </div>
            </section>

            <!-- PORTOFOLIO -->
            <?php if (!empty($portofolio)): ?>
            <section>
                <h3 class="section-header">📁 Portofolio Proyek</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php foreach($portofolio as $pf): ?>
                        <div class="bg-blue-50 p-5 rounded-xl border border-blue-200 shadow-md">
                            <h4 class="text-lg font-bold text-blue-700 mb-2"><?= esc($pf['judul']) ?></h4>
                            <p class="text-gray-700 mb-3 text-sm"><?= esc($pf['deskripsi']) ?></p>
                            <a href="<?= esc($pf['link']) ?>" target="_blank" class="inline-flex items-center text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 rounded-lg px-4 py-2 transition duration-150 shadow-lg">
                                Lihat Proyek
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <?php endif; ?>

        </div>
    </div>

    <!-- FOOTER -->
    <footer class="mt-12 pt-6 border-t text-center text-gray-400 text-sm">
        Dokumen CV Dibuat dengan PHP & Tailwind CSS | Hak Cipta &copy; <?= date('Y') ?>
    </footer>

  </div>

</body>
</html>
