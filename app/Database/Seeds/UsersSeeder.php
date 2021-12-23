<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class UsersSeeder extends Seeder
{
 public function run()
 {
 //
 $data = [
 [
 'username' => 'Ferry',
 'password' => password_hash('ferry', PASSWORD_BCRYPT),
 'name' => 'I Putu Ferry Setiawan',
 'created_at' => Time::now()
 ]
 ];
 $this->db->table('users')->insertBatch($data);
 }
}
