<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
 <!-- general form elements -->
 <div class="card card-primary">
 <div class="card-header">
 <h3 class="card-title">Tambah Data Peminjaman</h3>
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
base_url('peminjaman/store') ?>">
 <?= csrf_field(); ?>
 <div class="card-body">
 <div class="form-group row">
 <label for="id_pinjam" class="col-sm-2 col-formlabel">ID Peminjaman</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="id_pinjam"
name="id_pinjam" placeholder="id_pinjam" value="<?= old('id_pinjam'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="tanggal_pinjam" class="col-sm-2 col-formlabel">Tanggal Pinjam</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="tanggal_pinjam"
name="tanggal_pinjam" value="<?= old('tanggal_pinjam'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="tanggal_kembali" class="col-sm-2 col-form-label">Tanggal Kembali</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="tanggal_kembali"
name="tanggal_kembali" value="<?= old('tanggal_kembali') ?>" />
 </div>
 </div>
 <div class="form-group row">
 <label for="id_buku" class="col-sm-2 col-formlabel">ID Buku</label>
 <div class="col-sm-10">
 <textarea class="form-control" name="id_buku"
id="id_buku"><?= old('id_buku') ?></textarea>
 </div>
 </div>
 <div class="form-group row">
 <label for="nim" class="col-sm-2 col-formlabel">NIM</label>
 <div class="col-sm-10">
 <textarea class="form-control" name="nim"
id="nim"><?= old('nim') ?></textarea>
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
