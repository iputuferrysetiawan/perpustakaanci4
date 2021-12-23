<?php
namespace App\Models;
use CodeIgniter\Model;
class MahasiswaModel extends Model
{
 protected $table = "mahasiswa";
 protected $primaryKey = "nim";
 protected $returnType = "object";
 protected $useTimestamps = true;
 protected $allowedFields = ['nim', 'nama', 'jurusan', 'jenis_kelamin',
 'no_telp', 'email', 'alamat','foto'];
 }