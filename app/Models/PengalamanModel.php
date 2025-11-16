<?php
namespace App\Models;
use CodeIgniter\Model;

class PengalamanModel extends Model {
    protected $table = 'pengalaman';
    protected $allowedFields = ['nama_tempat', 'posisi', 'tahun', 'deskripsi', 'biodata_id'];
}
