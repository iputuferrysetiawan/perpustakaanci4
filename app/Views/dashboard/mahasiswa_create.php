<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
 <!-- general form elements -->
 <div class="card card-primary">
 <div class="card-header">
 <h3 class="card-title">Tambah Data Mahasiswa</h3>
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
base_url('mahasiswa/store') ?> "enctype="multipart/form-data">
 <?= csrf_field(); ?>
 <div class="card-body">
 <div class="form-group row">
 <label for="nim" class="col-sm-2 col-formlabel">Nim</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="nim"
name="nim" placeholder="Nim" value="<?= old('nim'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="nama" class="col-sm-2 col-formlabel">Nama</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="nama"
name="nama" value="<?= old('nama'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="jurusan" class="col-sm-2 col-formlabel">Jurusan</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="jurusan"
name="jurusan" value="<?= old('jurusan'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="jenis_kelamin" class="col-sm-2 col-formlabel">Jenis Kelamin</label>
 <div class="col-sm-6">
 <select name="jenis_kelamin" class="form-control"
id="jenis_kelamin">
 <option value="pria">Pria</option>
 <option value="wanita">Wanita</option>
 </select>
 </div>
 </div>
 <div class="form-group row">
 <label for="no_telp" class="col-sm-2 col-form-label">No
Telp</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="no_telp"
name="no_telp" value="<?= old('no_telp') ?>" />
 </div>
 </div>
 <div class="form-group row">
 <label for="email" class="col-sm-2 col-formlabel">Email</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="email"
name="email" value="<?= old('email') ?>" />
 </div>
 </div>
 <div class="form-group row">
 <label for="alamat" class="col-sm-2 col-formlabel">Alamat</label>
 <div class="col-sm-10">
 <textarea class="form-control" name="alamat"
id="alamat"><?= old('alamat') ?></textarea>
 </div>
 </div>
 <div class="form-group row">
 <label for="foto" class="col-sm-2 col-form-label">Foto Diri</label>
 <div class="custom-file col-sm-6">
 <input type="file" class="custom-file-input" id="foto" name="foto">
 <label class="custom-file-label" for="foto">Pilih Foto Diri</label>
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
