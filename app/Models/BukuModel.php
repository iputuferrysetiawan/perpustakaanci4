<?php
namespace App\Models;
use CodeIgniter\Model;
class BukuModel extends Model
{
 protected $table = "buku";
 protected $primaryKey = "id_buku";
 protected $returnType = "object";
 protected $useTimestamps = true;
 protected $allowedFields = ['id_buku', 'title', 'penerbit', 'tahun_terbit',
 'stok_buku','foto'];
 }

 