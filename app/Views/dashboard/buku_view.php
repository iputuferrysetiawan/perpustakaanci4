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
 <div class="card card-danger card-outline">
 <div class="card-body box-profile">
 <div class="text-center">
 <img class="profile-user-img img-fluid img-circle"
 src="/img/<?= $buku->foto; ?>" alt="User profile picture">
 </div>
 <h3 class="profile-username text-center"><?=
$buku->title; ?></h3>
 </div>
 <!-- /.card-body -->
 </div>
 <!-- /.card -->
 </div>
 <div class="col-md-9">
 <div class="card card-danger">
 <div class="card-header">
 <h3 class="card-title">Tentang Buku</h3>
 </div>
 <!-- /.card-header -->
 <div class="card-body">
 <strong><i class="fas fa-id-badge mr-1"></i> ID Buku</strong>
 <p class="text-muted"><?= $buku->id_buku;
?></p>
<hr>
<strong><i class="fas fa-user-alt mr-1"></i> Penerbit</strong>
 <p class="text-muted"><?= $buku->penerbit;
?></p>
<hr>
 <strong><i class="far fa-calendar-alt mr-1"></i></i> Tahun Terbit</strong>
 <p class="text-muted"><?= $buku->tahun_terbit;
?></p>
 <hr>
 <strong><i class="fab fa-stack-overflow mr-1"></i> Stok Buku</strong>
 <p class="text-muted"><?= $buku->stok_buku; ?></p>
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
