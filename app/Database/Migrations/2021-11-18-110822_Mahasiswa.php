<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Mahasiswa extends Migration
{
public function up()
{
$this->forge->addField([
'nim' => [
'type' => 'VARCHAR',
'constraint' => '11',
],
'nama' => [
'type' => 'VARCHAR',
'constraint' => '255',
],
'jurusan' => [
'type' => 'VARCHAR',
'constraint' => '255',
],
'jenis_kelamin' => [
'type' => 'ENUM',
'constraint' => "'pria','wanita'",
],
'no_telp' => [
'type' => 'VARCHAR',
'constraint' => '100',
],
'email' => [
'type' => 'VARCHAR',
'constraint' => '100',
],
'alamat' => [
'type' => 'VARCHAR',
'constraint' => '255',
],
'created_at' => [
'type' => 'DATETIME',
'null' => true,
],
'updated_at' => [
'type' => 'DATETIME',
'null' => true,
]
]);
$this->forge->addPrimaryKey('nim');
$this->forge->createTable('mahasiswa');
}
//--------------------------------------------------------------------
public function down()
{
$this->forge->dropTable('mahasiswa');
}
}
