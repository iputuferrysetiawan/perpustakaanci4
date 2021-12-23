<?php
namespace App\Models;
use CodeIgniter\Model;
class PeminjamanModel extends Model
{
 protected $table = "peminjaman";
 protected $primaryKey = "id_pinjam";
 protected $returnType = "object";
 protected $useTimestamps = true;
 protected $allowedFields = ['id_pinjam', 'tanggal_pinjam', 'tanggal_kembali', 'id_buku',
 'nim','nama_petugas'];
 }