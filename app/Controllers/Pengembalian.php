<?php
namespace App\Controllers;
use App\Models\PengembalianModel;
class Pengembalian extends BaseController
{
 protected $pengembalian;
 function __construct()
 {
 $this->pengembalian = new PengembalianModel();
 }
 
 public function update($id_pengembalian)
 {
 if (!$this->validate([
  'id_pengembalian' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
    ],
 'tanggal_pengembalian' => [
 'rules' => 'required',
 'errors' => [
 'required' => '{field} Harus diisi'
 ]
 ],
 'denda' => [
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
 $this->pengembalian->update($id_pengembalian, [
  'id_pengembalian' => $this->request->getVar('id_pengembalian'),
 'tanggal_pengembalian' => $this->request->getVar('tanggal_pengembalian'),
 'denda' => $this->request->getVar('denda'),
 'id_buku' => $this->request->getVar('id_buku'),
 'nim' => $this->request->getVar('nim'),
 'nama_petugas' => $this->request->getVar('nama_petugas')
 ]);
 session()->setFlashdata('message', 'Update Data Pengembalian
Berhasil');
 return redirect()->to('/pengembalian');
 }
 
 function edit($id_pengembalian)
 {
 $dataPengembalian = $this->pengembalian->find($id_pengembalian);
 if (empty($dataPengembalian)) {
 throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Pengembalian
Tidak ditemukan !');
 }
 $data['pageTitle'] = 'Edit Data Pengembalian';
 $data['pengembalian'] = $dataPengembalian;
 return view('dashboard/pengembalian_edit', $data);
 }
 public function create()
 {
 $data['pageTitle'] = 'Input Data Pengembalian';
 return view('dashboard/pengembalian_create', $data);
 }
 public function store()
 {
 if (!$this->validate([
 'id_pengembalian' => [
 'rules' => 'required',
 'errors' => [
 'required' => '{field} Harus diisi'
 ]
 ],
 'tanggal_pengembalian' => [
 'rules' => 'required',
 'errors' => [
 'required' => '{field} Harus diisi'
 ]
 ],
 'denda' => [
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
 $this->pengembalian->insert([
 'id_pengembalian' => $this->request->getVar('id_pengembalian'),
 'tanggal_pengembalian' => $this->request->getVar('tanggal_pengembalian'),
 'denda' => $this->request->getVar('denda'),
 'id_buku' => $this->request->getVar('id_buku'),
 'nim' => $this->request->getVar('nim'),
 'nama_petugas' => $this->request->getVar('nama_petugas')

 ]);
 session()->setFlashdata('message', 'Tambah Data Pengembalian Berhasil');
 return redirect()->to('/pengembalian');}

 public function index()
 {
 $data['pageTitle'] = 'Daftar Pengembalian';
 $data['pengembalian'] = $this->pengembalian->findAll();
 return view('dashboard/pengembalian', $data);
 }
 function delete($id_pengembalian)
 {
 $dataPengembalian = $this->pengembalian->find($id_pengembalian);
 if (empty($dataPengembalian)) {
 throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Pengembalian
Tidak ditemukan !');
 }
 $this->pengembalian->delete($id_pengembalian);
 session()->setFlashdata('message', 'Delete Data Pengembalian
Berhasil');
 return redirect()->to('/pengembalian');
 }
 public function view($id_pengembalian)
 {
 $dataPengembalian = $this->pengembalian->find($id_pengembalian);
 if (empty($dataPengembalian)) {
 throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Pengembalian
Tidak ditemukan !');
 }
 $data['pageTitle'] = 'Data Pengembalian';
 $data['pengembalian'] = $dataPengembalian;
 return view('dashboard/pengembalian_view', $data);
 }

 }
