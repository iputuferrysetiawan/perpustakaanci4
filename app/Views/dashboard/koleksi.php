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
 </tr>
 <?php
 }
 ?>
 </tbody>
 </table>
</div>
<!-- /.card-body -->
<?= $this->endSection('content'); ?>