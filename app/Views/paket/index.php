<div class="d-flex justify-content-between align-items-center mb-3">
    <h3><i class="bi bi-router"></i> Daftar Paket Jaringan</h3>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
        <i class="bi bi-plus-lg"></i> Tambah Paket
    </button>
</div>

<table class="table table-striped shadow-sm align-middle">
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Nama Paket</th>
            <th>Kecepatan</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach($paket as $p): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($p['nama_paket']) ?></td>
            <td><?= esc($p['kecepatan']) ?></td>
            <td>Rp <?= number_format($p['harga'], 0, ',', '.') ?></td>
            <td><?= esc($p['deskripsi']) ?></td>
            <td>
                <button 
                    class="btn btn-warning btn-sm editBtn" 
                    data-id="<?= $p['id'] ?>"
                    data-nama="<?= esc($p['nama_paket']) ?>"
                    data-kecepatan="<?= esc($p['kecepatan']) ?>"
                    data-harga="<?= esc($p['harga']) ?>"
                    data-deskripsi="<?= esc($p['deskripsi']) ?>"
                    data-bs-toggle="modal"
                    data-bs-target="#editModal">
                    <i class="bi bi-pencil"></i>
                </button>
                <a href="/paket/delete/<?= $p['id'] ?>" 
                   class="btn btn-danger btn-sm" 
                   onclick="return confirm('Yakin ingin hapus paket ini?')">
                   <i class="bi bi-trash"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- ========================= MODAL TAMBAH ========================= -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="/paket/store" method="post">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="addModalLabel"><i class="bi bi-plus-circle"></i> Tambah Paket Jaringan</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label>Nama Paket</label>
            <input type="text" name="nama_paket" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Kecepatan</label>
            <input type="text" name="kecepatan" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Simpan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- ========================= MODAL EDIT ========================= -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="editForm" method="post">
        <div class="modal-header bg-warning text-dark">
          <h5 class="modal-title" id="editModalLabel"><i class="bi bi-pencil-square"></i> Edit Paket</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" id="edit_id">

          <div class="mb-3">
            <label>Nama Paket</label>
            <input type="text" name="nama_paket" id="edit_nama" class="form-control" required>
          </div>

          <div class="mb-3">
            <label>Kecepatan</label>
            <input type="text" name="kecepatan" id="edit_kecepatan" class="form-control" required>
          </div>

          <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" id="edit_harga" class="form-control" required>
          </div>

          <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" id="edit_deskripsi" class="form-control"></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-warning text-dark">
            <i class="bi bi-check-circle"></i> Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- ========================= SCRIPT ========================= -->
<script>
  // Saat tombol edit ditekan, isi form edit otomatis
  document.querySelectorAll('.editBtn').forEach(btn => {
    btn.addEventListener('click', function() {
      const id = this.getAttribute('data-id');
      const nama = this.getAttribute('data-nama');
      const kecepatan = this.getAttribute('data-kecepatan');
      const harga = this.getAttribute('data-harga');
      const deskripsi = this.getAttribute('data-deskripsi');

      // Isi field modal
      document.getElementById('edit_id').value = id;
      document.getElementById('edit_nama').value = nama;
      document.getElementById('edit_kecepatan').value = kecepatan;
      document.getElementById('edit_harga').value = harga;
      document.getElementById('edit_deskripsi').value = deskripsi;

      // Ganti action form ke endpoint update yang benar
      document.getElementById('editForm').action = '/paket/update/' + id;
    });
  });
</script>
