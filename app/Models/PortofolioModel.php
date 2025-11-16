<?php
namespace App\Models;
use CodeIgniter\Model;

class PortofolioModel extends Model {
    protected $table = 'portofolio';
    protected $allowedFields = ['judul', 'deskripsi', 'link', 'biodata_id'];
}
