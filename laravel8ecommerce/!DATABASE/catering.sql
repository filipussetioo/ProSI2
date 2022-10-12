-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 07:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catering`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `telepon` int(15) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id` int(5) NOT NULL,
  `alamat_lengkap` varchar(30) NOT NULL,
  `pinpoin` POINT NOT NULL,
  /* Even from v5.7.5 you can define an index for it */
  /*SPATIAL INDEX `SPATIAL` (`pinpoin`)*/,
  `nomor_pelanggan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id` int(5) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat_lengkap` varchar(30) NOT NULL,
  `alamat_tambahan` varchar(30),
  `nomor_handphone` int(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(5) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar_menu` varchar(30) NOT NULL,
  `terjual` int(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(5) NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `harga` int(7) NOT NULL,
  `gambar_paket` text NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paket_jadwal`
--

CREATE TABLE `paket_jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `id_paket` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paket_menu`
--

CREATE TABLE `paket_menu` (
  `id_menu` int(5) NOT NULL,
  `id_paket` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `nomor_pelanggan` int(5) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nomor_handphone` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status_berlangganan` tinyint(1) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_tipe_pelanggan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `kurir_id` int(5) NOT NULL,
  `id_transaksi` int(5) NOT NULL,
  `status_id` int(5) NOT NULL,
  `tanggal_jam_dikirim` datetime NOT NULL,
  `tanggal_jam_diterima` datetime
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(5) NOT NULL,
  `nama_promo` varchar(30) NOT NULL,
  `potongan_promo` float NOT NULL,
  `deskripsi_promo` varchar(100) NOT NULL,
  `kode_promo` varchar(30) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `id_tipe_pelanggan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(5) NOT NULL,
  `nama_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipe_pelanggan`
--

CREATE TABLE `tipe_pelanggan` (
  `id` int(5) NOT NULL,
  `tipe_pelanggan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(5) NOT NULL,
  `admin_id` int(5) NOT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal_berlangganan_awal` date NOT NULL,
  `tanggal_berlangganan_akhir` date NOT NULL,
  `id_paket` int(5) NOT NULL,
  `jumlah_paket` int(5) NOT NULL,
  `total_harga` int(15) NOT NULL,
  `nomor_pelanggan` int(15) NOT NULL,
  `id_alamat` int(5) NOT NULL,
  `kode_promo` int(5) NOT NULL,
  `catatan_tambahan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_jadwal`
--
ALTER TABLE `paket_jadwal`
  ADD KEY `idJadwal` (`id_jadwal`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `paket_menu`
--
ALTER TABLE `paket_menu`
  ADD KEY `idMenu` (`id_menu`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`nomor_pelanggan`),
  ADD KEY `idTipePelanggan` (`id_tipe_pelanggan`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD KEY `idTransaksi` (`id_transaksi`),
  ADD KEY `kurirId` (`status_id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idTipePelanggan2` (`id_tipe_pelanggan`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_pelanggan`
--
ALTER TABLE `tipe_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAdmin` (`admin_id`),
  ADD KEY `idPaket` (`id_paket`),
  ADD KEY `nomorPelanggan` (`nomor_pelanggan`),
  ADD KEY `idAlamat` (`id_alamat`),
  ADD KEY `kodePromo` (`kode_promo`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paket_jadwal`
--
ALTER TABLE `paket_jadwal`
  ADD CONSTRAINT `idJadwal` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paket_jadwal_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paket_menu`
--
ALTER TABLE `paket_menu`
  ADD CONSTRAINT `idMenu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paket_menu_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `id_paket` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `idTipePelanggan` FOREIGN KEY (`id_tipe_pelanggan`) REFERENCES `tipe_pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `idTransaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kurirId` FOREIGN KEY (`status_id`) REFERENCES `kurir` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `statusId` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `idTipePelanggan2` FOREIGN KEY (`id_tipe_pelanggan`) REFERENCES `tipe_pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `idAdmin` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idAlamat` FOREIGN KEY (`id_alamat`) REFERENCES `alamat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idPaket` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kodePromo` FOREIGN KEY (`kode_promo`) REFERENCES `promo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nomorPelanggan` FOREIGN KEY (`nomor_pelanggan`) REFERENCES `pelanggan` (`nomor_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
