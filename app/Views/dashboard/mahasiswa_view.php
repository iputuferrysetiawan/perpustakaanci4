<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-12">
 <!-- general form elements -->
 <section class="content">
 <div class="container-fluid">
 <div class="row">
 <!-- /.card-header -->
 <!-- form start -->
 <div class="col-md-3">
 <!-- Profile Image -->
 <div class="card card-primary card-outline">
 <div class="card-body box-profile">
 <div class="text-center">
 <img class="profile-user-img img-fluid img-circle"
 src="/img/<?= $mahasiswa->foto; ?>" alt="User profile picture">
 </div>
 <h3 class="profile-username text-center"><?=
$mahasiswa->nama; ?></h3>
 <p class="text-muted text-center"><?= $mahasiswa->nim; ?><br><?= $mahasiswa->jurusan; ?></p>
 </div>
 <!-- /.card-body -->
 </div>
 <!-- /.card -->
 </div>
 <div class="col-md-9">
 <div class="card card-primary">
 <div class="card-header">
 <h3 class="card-title">About Me</h3>
 </div>
 <!-- /.card-header -->
 <div class="card-body">
 <strong><i class="fas fa-book mr-1"></i>
Education</strong>
 <p class="text-muted">
 Jurusan <?= $mahasiswa->jurusan; ?> Pada
 Sekolah Tinggi Manajemen dan Informatika
(STMIK) Palangkaraya
 </p>
 <hr>
 <strong><i class="fas fa-mobile-alt mr-1"></i> No
Telp/HP</strong>
 <p class="text-muted"><?= $mahasiswa->no_telp;
?></p>
 <hr>
 <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
 <p class="text-muted"><?= $mahasiswa->email; ?></p>
 <hr>
 <strong><i class="fas fa-map-marker-alt mr-1"></i>
Location</strong>
 <p class="text-muted"><?= $mahasiswa->alamat;
?></p>
 </div>
 <!-- /.card-body -->
 </div>
 <!-- /.card -->
 </div>
 </div>
 <!-- /.card -->
 </div>
</div>
<?= $this->endSection('content'); ?>
