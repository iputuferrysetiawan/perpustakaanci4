<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
<!-- general form elements -->
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Edit Data Mahasiswa</h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<?php if (!empty(session()->getFlashdata('error'))) : ?>
<div class="alert alert-light alert-dismissible fade show" role="alert">
<h4 class="alert-heading">Periksa Entrian Form</h4>
</hr />
<?php echo session()->getFlashdata('error'); ?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php endif; ?>
<form class="form-horizontal" method="post" action="<?= base_url('mahasiswa/update/' . $mahasiswa->nim) ?>"enctype="multipart/form-data">
<?= csrf_field(); ?>
<div class="card-body">
<div class="form-group row">
<label for="nama" class="col-sm-2 col-form-label">Nama</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa->nama; ?>">
</div>
</div>
<div class="form-group row">
<label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mahasiswa->jurusan; ?>">
</div>
</div>
<div class="form-group row">
<label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
<div class="col-sm-6">
<select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
<option value="pria" <?= ($mahasiswa->jenis_kelamin == "pria" ? "selected" : ""); ?>>Pria</option>
<option value="wanita" <?= ($mahasiswa->jenis_kelamin == "wanita" ? "selected" : ""); ?>>Wanita</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $mahasiswa->no_telp; ?>" />
</div>
</div>
<div class="form-group row">
<label for="email" class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa->email; ?>" />
</div>
</div>
<div class="form-group row">
<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
<div class="col-sm-10">
<textarea class="form-control" name="alamat" id="alamat"><?= $mahasiswa->alamat; ?></textarea>
</div>
</div>
</div>
<div class="form-group row">
<input type="hidden" id="fotolama" name="fotolama" value="<?=
$mahasiswa->foto; ?>">
<label for="foto" class="col-sm-2 col-form-label">Foto Diri</label>
<div class="custom-file col-sm-6">
<input type="file" class="custom-file-input" id="foto" name="foto">
<label class="custom-file-label" for="foto"><?= $mahasiswa->foto;
?></label>
</div>
<?php if (!empty($mahasiswa->foto)) : ?>
<div class="card-body box-profile col-sm-6">
<div class="text-center">
<img class="profile-user-img img-fluid img-circle"
src="/img/<?= $mahasiswa->foto; ?>" alt="User profile picture">
</div>
</div>
<?php endif; ?>
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