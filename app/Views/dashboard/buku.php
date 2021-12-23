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
 <a href="<?= base_url('/buku/create'); ?>" class="btn btn-primary">Tambah</a><hr />
 <table class="table table-bordered">
 <thead>
 <tr>
 <th>No</th>
 <th>ID Buku</th>
 <th>Title</th>
 <th>Penerbit</th>
 <th>Tahun Terbit</th>
 <th>Stok Buku</th>
 <th>Action</th>
 </tr>
 </thead>
 <tbody>
 <?php $no = 1;
foreach ($buku as $row) {
 ?>
 <tr>
 <td><?= $no++; ?></td>
 <td><?= $row->id_buku; ?></td>
 <td><?= $row->title; ?></td>
 <td><?= $row->penerbit; ?></td>
 <td><?= $row->tahun_terbit; ?></td>
 <td><?= $row->stok_buku; ?></td>
 <td>
 <a title="View" href="<?=base_url("buku/view/$row->id_buku"); ?>" class="btn btn-info">View</a>
 <a title="Edit" href="<?= base_url("buku/edit/$row->id_buku"); ?>" class="btn btn-info">Edit</a><br>
 <a title="Delete" href="<?=base_url("buku/delete/$row->id_buku") ?>" class="btn btn-danger"onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</a>
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