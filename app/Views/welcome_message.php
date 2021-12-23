<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= (isset($pageTitle)) ? $pageTitle : 'Selamat Datang Di Perpustakaan STMIK Palangkaraya'; ?></title>
  <base href="/">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>


<div class="row">
		<div class="col m12">
			<div class="text-center bold card-panel teal darken-2 center white-text">
				<br>
				<h5>
                   Selamat Datang Diperpustakaan STMIK Palangkaraya
				</h5>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col m12">
			<div class="text-center card-panel teal darken-2 center white-text">
				<p>
                   Sistem Informasi Perpustakaan STMIK merupakan sistem yang digunakan untuk melakukan Pengolaan Data Buku yang ada di Perpustakaan STMIK Palangkaraya.
				</p>
				<div>
				<img src="dist/img/perpustakaan.jpg" width="900" height="400">
				</div><br>
				<a href="<?= base_url('/koleksi'); ?>" class="btn btn-warning text-bold text-center">Koleksi Buku	</a>
				<a href="<?= base_url('/login'); ?>" class="btn btn-warning text-bold text-center">Login Admin</a>
				
			</div>
		</div>
	</div>