<?php
namespace App\Models;
use CodeIgniter\Model;
class PengembalianModel extends Model
{
 protected $table = "pengembalian";
 protected $primaryKey = "id_pengembalian";
 protected $returnType = "object";
 protected $useTimestamps = true;
 protected $allowedFields = ['id_pengembalian', 'tanggal_pengembalian', 'denda', 'id_buku',
 'nim','nama_petugas'];
 }