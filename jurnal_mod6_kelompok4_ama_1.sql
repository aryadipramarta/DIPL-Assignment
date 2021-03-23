-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 05:18 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal_mod6_kelompok4_ama`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alamatpembeli`
--

CREATE TABLE `tb_alamatpembeli` (
  `id_alamat` int(10) NOT NULL,
  `id_pembeli` int(10) NOT NULL,
  `jalan_alamat` varchar(50) NOT NULL,
  `kota_alamat` varchar(50) NOT NULL,
  `provinsi_alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(10) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `spesifikasi` varchar(250) NOT NULL,
  `kondisi_barang` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kurir`
--

CREATE TABLE `tb_kurir` (
  `id_Agent_Kurir` int(11) NOT NULL,
  `Nama_Agent` varchar(50) NOT NULL,
  `area_kurir` varchar(50) NOT NULL,
  `Ongkos_kirim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `id_transaksi` int(10) NOT NULL,
  `judul_laporan` varchar(100) NOT NULL,
  `tanggal_laporan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(10) NOT NULL,
  `id_transaksi` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `order_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(10) NOT NULL,
  `username_pegawai` varchar(25) NOT NULL,
  `password_pegawai` varchar(25) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `noHP_pegawai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `id_transaksi` int(10) NOT NULL,
  `metode_pembayaran` varchar(25) NOT NULL,
  `status_pembayaran` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `id_pembeli` int(10) NOT NULL,
  `username_pembeli` varchar(25) NOT NULL,
  `password_pembeli` varchar(25) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `noHp_pembeli` varchar(13) NOT NULL,
  `email_pembeli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemilik`
--

CREATE TABLE `tb_pemilik` (
  `id_pemilik` int(10) NOT NULL,
  `id_laporan` int(10) NOT NULL,
  `username_pemilik` varchar(25) NOT NULL,
  `password_pemilik` varchar(25) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_Agent_Kurir` int(11) NOT NULL,
  `Harga_Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alamatpembeli`
--
ALTER TABLE `tb_alamatpembeli`
  ADD PRIMARY KEY (`id_alamat`),
  ADD UNIQUE KEY `fk_pembeli1` (`id_pembeli`) USING BTREE;

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
  ADD PRIMARY KEY (`id_Agent_Kurir`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`),
  ADD UNIQUE KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `tb_pemilik`
--
ALTER TABLE `tb_pemilik`
  ADD PRIMARY KEY (`id_pemilik`),
  ADD KEY `id_laporan` (`id_laporan`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_pembeli` (`id_pembeli`),
  ADD UNIQUE KEY `id_Agent_Kurir` (`id_Agent_Kurir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alamatpembeli`
--
ALTER TABLE `tb_alamatpembeli`
  MODIFY `id_alamat` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
  MODIFY `id_Agent_Kurir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  MODIFY `id_pembeli` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_alamatpembeli`
--
ALTER TABLE `tb_alamatpembeli`
  ADD CONSTRAINT `fk_pembeli1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`);

--
-- Constraints for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD CONSTRAINT `tb_laporan_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`),
  ADD CONSTRAINT `tb_laporan_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`);

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`),
  ADD CONSTRAINT `tb_order_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`);

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`);

--
-- Constraints for table `tb_pemilik`
--
ALTER TABLE `tb_pemilik`
  ADD CONSTRAINT `tb_pemilik_ibfk_1` FOREIGN KEY (`id_laporan`) REFERENCES `tb_laporan` (`id_laporan`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_Agent_Kurir`) REFERENCES `tb_kurir` (`id_Agent_Kurir`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
