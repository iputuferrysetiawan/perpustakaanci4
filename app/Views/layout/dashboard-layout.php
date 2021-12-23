<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></title>
  <base href="/">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="nav text-bold">
      <li class="nav-item d-none d-sm-inline-block">
          <a href="/home" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/login" class="nav-link">Login Admin</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto text-bold">
      <li class="nav-item d-none d-sm-inline-block">
          <a href="/logout" class="nav-link">Logout</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/home" class="brand-link">
        <img src="dist/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Perpustakaan STMIK</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            
            <li class="nav-item">
              <a href="<?= route_to('user.profile') ?>" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Petugas

                </p>
              </a>
            </li>
            <li class="nav-item">
               <a href="/mahasiswa" class="nav-link">
                <i class="nav-icon fas fa-user-edit"></i>
                <p>
                  Mahasiswa

                </p>
              </a>
            </li>

            <li class="nav-item">
               <a href="/buku" class="nav-link">
               <i class="nav-icon fas fa-book-medical"></i>
                <p>
                  Data Buku

                </p>
              </a>
            </li>
            <li class="nav-item">
               <a href="/koleksi" class="nav-link">
               <i class="nav-icon fas fa-book"></i>
                <p>
                  Koleksi Buku

                </p>
              </a>
            </li>
            <hr>
            <a  class="brand-link">
            <li class="nav-item text-center">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALBJREFUSEvlk9ERgzAMQ6UNuknLBnSETtSOwCiMwAiwCRuolzs+WgjBOECPq78TP1uWiJ2LO/fHHwMkvQBUJPuUzC6JhuZPAC2AewriBVwANACuSxAXIEgiyQRxA6yQCUCSMrLRkiw+/28N6EjekoCM6aNfs25gGSYmUfB2sJ+rSH71/AnA5G/retEbWENkgcweeStI0kUjyINkbZl6VQ4GSOlpHkDH52CtBEvvz7/BG5jTShlMGfBfAAAAAElFTkSuQmCC"/>
            <br>
        <span class="brand-text font-weight-light">Transaksi Perpustakaan</span>
      </a>

            <li class="nav-item">
               <a href="/peminjaman" class="nav-link">
               <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAMRJREFUSEvtlNENgzAMBe0FygZklW4CTFbYpKvABnSBVJYcRCM7tgSRkGj+ENFd/HgEofLCyny4mWCd5xEAYhPC4I3WHRHDOwaPXolLkMHT4V0SU6DA3ZKiQIBPTE5R0WNxElUgwZsQeiIK71SJKCjBUzZeiSj4LEsfY3wxbMpOvtV0L0HE4dG2VOOfpUbEkqcSyxYJSRDxLcHJZLZIydz8uGkMU/Cv6bVqmlfw1Jpq1/MpNfXe/dI+s6ZH4O4f7Yik+gRfiKeOGdBh1TwAAAAASUVORK5CYII="/>
               
                <p>
                  Peminjaman Buku
                </p>
              </a>
            </li>
            <li class="nav-item">
               <a href="/pengembalian" class="nav-link">
               <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALBJREFUSEvtldENgCAMROsEjMBo6mY4miM4gaYJEFNbribyodFfjnv2OHGgzs/Q2Z8+DNjWNRHRHmKcWzEinRpR3jRm42RBPDoPgDkXiDBnzRJinOS05iErBhXiNWdYs0UaJO8p8ZlvXiaBNVUg5xTUWM4CCGCxAYHmzYhk/QSkmj9a02xGpS1/TbXD5euDi/HX9Hp/WjVFPyzXh1ZMZE2RObyLPAZIc2sCZKatvx9wAOZjghmlyRr7AAAAAElFTkSuQmCC"/>
                <p>
                  Pengembalian Buku
                </p>
              </a>
            </li>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= $pageTitle ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= route_to('user.home') ?>">Home</a></li>
                <li class="breadcrumb-item active"><?= $pageTitle ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">

          <?= $this->renderSection('content'); ?>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">

      <!-- Default to the left -->
      <strong>Copyright&copy;2021<a href="https://www.stmikplk.ac.id/website/">Perpustakaan STMIK Palangkaraya</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  
  <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- Page specific script -->
  <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <script>
      $(function() {
        bsCustomFileInput.init();
 });
</script>
</body>

</html>