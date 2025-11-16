<?php
namespace App\Models;
use CodeIgniter\Model;

class PendidikanModel extends Model {
    protected $table = 'pendidikan';
    protected $allowedFields = ['nama_institusi', 'jurusan', 'tahun_mulai', 'tahun_selesai', 'biodata_id'];
}
