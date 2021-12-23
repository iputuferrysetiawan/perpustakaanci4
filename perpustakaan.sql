-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 06:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(30) CHARACTER SET utf8 NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `penerbit` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tahun_terbit` varchar(30) CHARACTER SET utf8 NOT NULL,
  `stok_buku` varchar(20) CHARACTER SET utf8 NOT NULL,
  `foto` varchar(500) CHARACTER SET utf8 NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `title`, `penerbit`, `tahun_terbit`, `stok_buku`, `foto`, `created_at`, `updated_at`) VALUES
('B001', 'Belajar HTML & CSS  Dasar', 'I Putu Ferry Setiawan', '2020', '30', '1639656308_962c6f3a9a2af8ec8153.jpg', '2021-12-16 03:25:24', '2021-12-20 22:29:07'),
('B002', 'Membangun Website Sekolah Dengan HTML & CSS', 'Muhammad Vicky', '2020', '20', '1639895140_9c710b7702af6a513c3c.png', '2021-12-19 00:25:40', '2021-12-22 19:12:03'),
('B003', 'Membangun Website CMS Dengan Laravel', 'Jefandra Meilano F.T ', '2020', '30', '1639895423_e1394c8db09cd6a326b2.png', '2021-12-19 00:30:23', '2021-12-22 19:12:55'),
('B005', 'Semua Bisa Menjadi Programmer Python', 'Pelina Inda Aswari', '2020', '15', '1639895528_2d54b52e39fce3724c14.jpg', '2021-12-19 00:32:08', '2021-12-22 19:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `jenis_kelamin`, `no_telp`, `email`, `alamat`, `foto`, `created_at`, `updated_at`) VALUES
('C2055201050', 'Jefandra Meilano F.T', 'Teknik Informatika', 'pria', '0812345556700', 'jeftod69@gmail.com', 'Jalan ', '1639655502_61aacefc7a73fa2aae57.jpeg', '2021-12-16 04:59:38', '2021-12-22 19:03:42'),
('C2055201051', 'I Putu Ferry Setiawan', 'Teknik Informatika', 'pria', '085705201431', 'iputuferrysetiawan2002@gmail.com', 'Jalan Junjung Buih 3A No 9 Palangkaraya', '1639656982_a9fc0a4c6b107510c5da.jpg', '2021-12-16 03:35:24', '2021-12-16 06:16:22'),
('C2055201054', 'Muhammad Vicky', 'Teknik Informatika', 'pria', '085712348989', 'muhammadvicky@gmail.com', 'Jl. Rajawali No . 69, Palangkaraya', '1640232650_fbd4448235f6791a7ce8.png', '2021-12-22 22:10:50', '2021-12-22 22:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-10-14-051958', 'App\\Database\\Migrations\\Users', 'default', 'App', 1634189640, 1),
(2, '2021-11-18-110822', 'App\\Database\\Migrations\\Mahasiswa', 'default', 'App', 1637234199, 2);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` varchar(10) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `id_buku` varchar(10) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `tanggal_pinjam`, `tanggal_kembali`, `id_buku`, `nim`, `nama_petugas`, `created_at`, `updated_at`) VALUES
('1', '2021-11-20', '2021-12-20', 'B001', 'C205520105', 'I Putu Ferry Setiawan', '2021-12-20 21:23:47', '2021-12-20 21:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` varchar(10) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `denda` varchar(30) NOT NULL,
  `id_buku` varchar(30) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `tanggal_pengembalian`, `denda`, `id_buku`, `nim`, `nama_petugas`, `created_at`, `updated_at`) VALUES
('1', '2021-12-12', '-', 'B001', 'C2055201052', 'I Putu Ferry Setiawan', '2021-12-20 21:52:43', '2021-12-22 22:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `created_at`, `updated_at`) VALUES
('admin', '$2y$10$l6kirb2IjqwyndKRJ9LHuu9HV60.uWyLbR47jC78eVqtbYdiUDfWy', 'admin', '2021-11-26 20:20:41', NULL),
('Ferry', '$2y$10$/7mXU6QTxbiyGN1NGaawm.rp8Q15hpyipzufWSFO8bK4LfROmyg9K', 'I Putu Ferry Setiawan', '2021-10-14 08:00:49', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `tanggal_kembali` (`tanggal_kembali`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
