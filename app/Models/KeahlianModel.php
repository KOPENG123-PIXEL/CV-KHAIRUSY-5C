<?php
namespace App\Models;
use CodeIgniter\Model;

class KeahlianModel extends Model {
    protected $table = 'keahlian';
    protected $allowedFields = ['nama_keahlian', 'level', 'biodata_id'];
}

