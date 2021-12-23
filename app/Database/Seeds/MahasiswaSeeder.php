<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class MahasiswaSeeder extends Seeder
{
public function run()
{
$data = [
[
'nim' => 'C2055201001',
'nama' => 'Alexander Osten Prawara',
 'jurusan' => 'Teknik Informatika',
'jenis_kelamin' => 'pria',
'no_telp' => '081234555678',
'email' => 'ostensadja@gmail.com',
'alamat' => 'Jl. Perkutut No. 51, Palangka
Raya',
'created_at' => Time::now()
],
[
'nim' => 'C2055201002',
'nama' => 'Budi',
 'jurusan' => 'Teknik Informatika',
'jenis_kelamin' => 'pria',
'no_telp' => '08571234567',
'email' => 'budi@gmail.com',
'alamat' => 'Jl. G.Obos No. 77, Palangka
Raya',
'created_at' => Time::now()
],
[
'nim' => 'C2055201003',
'nama' => 'Avrilyne Odela Prawara',
 'jurusan' => 'Sistem Informasi',
'jenis_kelamin' => 'wanita',
'no_telp' => '08122334455',
'email' => 'odela@gmail.com',
'alamat' => 'Jl. Rembulan No. 90, Palangka
Raya',
'created_at' => Time::now()
]
];
$this->db->table('mahasiswa')->insertBatch($data);
}
 }