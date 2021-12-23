<?php
namespace App\Controllers;
use App\Models\BukuModel;
class Koleksi extends BaseController
{
 protected $buku;
 function __construct()
 {
 $this->buku = new BukuModel();
 }
 public function index()
 {
 $data['pageTitle'] = 'Daftar Buku';
 $data['buku'] = $this->buku->findAll();
 return view('dashboard/koleksi', $data);
 }
 public function view($id_buku)
 {
 $dataBuku = $this->buku->find($id_buku);
 if (empty($dataBuku)) {
 throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Buku
Tidak ditemukan !');
 }
 $data['pageTitle'] = 'Data Buku';
 $data['buku'] = $dataBuku;
 return view('dashboard/koleksi_view', $data);
 }

 }
