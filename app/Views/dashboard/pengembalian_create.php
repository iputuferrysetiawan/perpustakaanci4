<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
 <!-- general form elements -->
 <div class="card card-primary">
 <div class="card-header">
 <h3 class="card-title">Tambah Data Pengembalian</h3>
 </div>
 <!-- /.card-header -->
 <!-- form start -->
 <?php if (!empty(session()->getFlashdata('error'))) : ?>
 <div class="alert alert-light alert-dismissible fade show"
role="alert">
 <h4 class="alert-heading">Periksa Entrian Form</h4>
 </hr />
 <?php echo session()->getFlashdata('error'); ?>
 <button type="button" class="close" data-dismiss="alert" arialabel="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <?php endif; ?>
 <form class="form-horizontal" method="post" action="<?=
base_url('pengembalian/store') ?> "enctype="multipart/form-data">
 <?= csrf_field(); ?>
 <div class="card-body">
 <div class="form-group row">
 <label for="id_pengembalian" class="col-sm-2 col-formlabel">ID Pengembalian</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="id_pengembalian"
name="id_pengembalian" placeholder="Id_pengembalian" value="<?= old('id_pengembalian'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="tanggal_pengembalian" class="col-sm-2 col-formlabel">Tanggal Pengembalian</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="tanggal_pengembalian"
name="tanggal_pengembalian" value="<?= old('tanggal_pengembalian'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="denda" class="col-sm-2 col-formlabel">Denda</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="denda"
name="denda" value="<?= old('denda'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="id_buku"
name="id_buku" value="<?= old('id_buku') ?>" />
 </div>
 </div>
 <div class="form-group row">
 <label for="nim" class="col-sm-2 col-formlabel">NIM</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="nim"
name="nim" value="<?= old('nim') ?>" />
 </div>
 </div>
 <div class="form-group row">
 <label for="nama_petugas" class="col-sm-2 col-formlabel">Nama Petugas</label>
 <div class="col-sm-10">
 <textarea class="form-control" name="nama_petugas"
id="nama_petugas"><?= old('nama_petugas') ?></textarea>
 </div>
 </div>
 </div>
 <!-- /.card-body -->
 <div class="card-footer">
 <button type="submit" class="btn btn-primary">Simpan</button>
 </div>
 <!-- /.card-footer -->
 </form>
 </div>
 <!-- /.card -->
</div>
<?= $this->endSection('content'); ?>
