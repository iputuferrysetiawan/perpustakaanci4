<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<!-- /.card-header -->
<div class="card-body">
 <?php if (!empty(session()->getFlashdata('message'))) : ?>
 <div class="alert alert-success alert-dismissible fade show"
role="alert">
 <?php echo session()->getFlashdata('message'); ?>
 <button type="button" class="close" data-dismiss="alert" arialabel="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <?php endif; ?>
 <a href="<?= base_url('pengembalian/create'); ?>" class="btn btn-primary">Tambah</a><hr />
 <table class="table table-bordered">
 <thead>
 <tr>
 <th>No</th>
 <th>ID Pengembalian</th>
 <th>Tanggal Pengembalian</th>
 <th>Denda</th>
 <th>ID Buku</th>
 <th>NIM</th>
 <th>Nama Petugas</th>
 <th>Action</th>
 </tr>
 </thead>
 <tbody>
 <?php $no = 1; 
 foreach ($pengembalian as $row) {
?>
 <tr>
 <td><?= $no++; ?></td>
 <td><?= $row->id_pengembalian; ?></td>
 <td><?= $row->tanggal_pengembalian; ?></td>
 <td><?= $row->denda; ?></td>
 <td><?= $row->id_buku; ?></td>
 <td><?= $row->nim; ?></td>
 <td><?= $row->nama_petugas; ?></td>
 <td>
 <a title="Edit" href="<?= base_url("pengembalian/edit/$row->id_pengembalian"); ?>" class="btn btn-info">Edit</a>
 <a title="Delete" href="<?=base_url("pengembalian/delete/$row->id_pengembalian") ?>" class="btn btn-danger"onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</a>
 </td>
 </tr>
 <?php
 }
 ?>
 </tbody>
 </table>
</div>
<!-- /.card-body -->
<?= $this->endSection('content'); ?>