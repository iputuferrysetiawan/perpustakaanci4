<?php
namespace App\Controllers;
use App\Models\PeminjamanModel;
class Peminjaman extends BaseController
{
 protected $peminjaman;
 function __construct()
 {
 $this->peminjaman = new PeminjamanModel();
 }
 
 public function update($id_pinjam)
 {
 if (!$this->validate([
  'id_pinjam' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
    ],
 'tanggal_pinjam' => [
 'rules' => 'required',
 'errors' => [
 'required' => '{field} Harus diisi'
 ]
 ],
 'tanggal_kembali' => [
 'rules' => 'required',
 'errors' => [
 'required' => '{field} Harus diisi'
 ]
 ],
 'id_buku' => [
 'rules' => 'required',
 'errors' => [
 'required' => '{field} Harus diisi'
 ]
 ],
 'nim' => [
  'rules' => 'required',
  'errors' => [
  'required' => '{field} Harus diisi'
  ]
  ],
  'nama_petugas' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
    ],
 ])) {
 session()->setFlashdata('error', $this->validator->listErrors());
 return redirect()->back();
 }
 $this->peminjaman->update($id_pinjam, [
  'id_pinjam' => $this->request->getVar('id_pinjam'),
 'tanggal_pinjam' => $this->request->getVar('tanggal_pinjam'),
 'tanggal_kembali' => $this->request->getVar('tanggal_kembali'),
 'id_buku' => $this->request->getVar('id_buku'),
 'nim' => $this->request->getVar('nim'),
 'nama_petugas' => $this->request->getVar('nama_petugas')
 ]);
 session()->setFlashdata('message', 'Update Data Peminjaman
Berhasil');
 return redirect()->to('/peminjaman');
 }
 
 function edit($id_pinjam)
 {
 $dataPeminjaman = $this->peminjaman->find($id_pinjam);
 if (empty($dataPeminjaman)) {
 throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Peminjaman
Tidak ditemukan !');
 }
 $data['pageTitle'] = 'Edit Data Peminjaman';
 $data['peminjaman'] = $dataPeminjaman;
 return view('dashboard/peminjaman_edit', $data);
 }
 public function create()
 {
 $data['pageTitle'] = 'Input Data Peminjaman';
 return view('dashboard/peminjaman_create', $data);
 }
 public function store()
 {
 if (!$this->validate([
 'id_pinjam' => [
 'rules' => 'required',
 'errors' => [
 'required' => '{field} Harus diisi'
 ]
 ],
 'tanggal_pinjam' => [
 'rules' => 'required',
 'errors' => [
 'required' => '{field} Harus diisi'
 ]
 ],
 'tanggal_kembali' => [
 'rules' => 'required',
 'errors' => [
 'required' => '{field} Harus diisi'
 ]
 ],
 'id_buku' => [
 'rules' => 'required',
 'errors' => [
 'required' => '{field} Harus diisi'
 ]
 ],
 'nim' => [
  'rules' => 'required',
  'errors' => [
  'required' => '{field} Harus diisi'
  ]
  ],
  'nama_petugas' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
    ],
 ])) {
 session()->setFlashdata('error', $this->validator->listErrors());
 return redirect()->back()->withInput();
 }
 $this->peminjaman->insert([
 'id_pinjam' => $this->request->getVar('id_pinjam'),
 'tanggal_pinjam' => $this->request->getVar('tanggal_pinjam'),
 'tanggal_kembali' => $this->request->getVar('tanggal_kembali'),
 'id_buku' => $this->request->getVar('id_buku'),
 'nim' => $this->request->getVar('nim'),
 'nama_petugas' => $this->request->getVar('nama_petugas')

 ]);
 session()->setFlashdata('message', 'Tambah Data Peminjaman Berhasil');
 return redirect()->to('/peminjaman');}

 public function index()
 {
 $data['pageTitle'] = 'Daftar Peminjaman';
 $data['peminjaman'] = $this->peminjaman->findAll();
 return view('dashboard/peminjaman', $data);
 }
 function delete($id_pinjam)
 {
 $dataPeminjaman = $this->peminjaman->find($id_pinjam);
 if (empty($dataPeminjaman)) {
 throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Peminjaman
Tidak ditemukan !');
 }
 $this->peminjaman->delete($id_pinjam);
 session()->setFlashdata('message', 'Delete Data Peminjaman
Berhasil');
 return redirect()->to('/peminjaman');
 }
 public function view($id_pinjam)
 {
 $dataPeminjaman = $this->peminjaman->find($id_pinjam);
 if (empty($dataPeminjaman)) {
 throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Peminjaman
Tidak ditemukan !');
 }
 $data['pageTitle'] = 'Data Peminjaman';
 $data['peminjaman'] = $dataPeminjaman;
 return view('dashboard/peminjaman_view', $data);
 }

 }
