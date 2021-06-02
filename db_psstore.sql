-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 05:00 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psstore`
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
  `kode_pos` int(11) NOT NULL,
  `provinsi_alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alamatpembeli`
--

INSERT INTO `tb_alamatpembeli` (`id_alamat`, `id_pembeli`, `jalan_alamat`, `kota_alamat`, `kode_pos`, `provinsi_alamat`) VALUES
(20, 19, 'asd', 'asd', 0, 'asd'),
(21, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(22, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(23, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(24, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(25, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(26, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(27, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(28, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(29, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(30, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(31, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(32, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(33, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(34, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(35, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(36, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali'),
(37, 15, 'Jalan Siulan Gang Nusa Indah I no 11', 'Kota Denpasar', 80238, 'Bali');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(10) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `spesifikasi` varchar(250) NOT NULL,
  `kondisi_barang` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `img_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `merk`, `spesifikasi`, `kondisi_barang`, `harga`, `stok`, `img_barang`) VALUES
(1, 'Iphone 11 test', 'Layar Liquid Retina HD\r\nLayar LCD Multi-Touch sepenuhnya 6,1 inci (diagonal) dengan teknologi IPS\r\nResolusi 1792 x 828 piksel pada 326 ppi\r\nRasio kontras 1400:1 (umum)\r\nLayar True Tone\r\nLayar warna luas (P3)\r\nHaptic Touch\r\nKecerahan maks 625 nit (umu', 'Baru', 12500000, 12, 'mobile1.jpeg'),
(2, 'Iphone 12', 'Rilis: 23 Oktober 2020.Berat: 164 g. Material: Kaca bagian depan Ceramic Shield, bagian belakang kaca, dan menggunakan bingkai aluminium. Jenis dan Ukuran Layar: Super Retina XDR OLED, HDR10, 6,1 inci (rasio layar ke bodi ~86%) Resolusi Layar: 1.170 ', 'Baru', 21500000, -4, 'iphone12.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kurir`
--

CREATE TABLE `tb_kurir` (
  `id_Agent_Kurir` int(11) NOT NULL,
  `Nama_Agent` varchar(50) NOT NULL,
  `Ongkos_kirim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kurir`
--

INSERT INTO `tb_kurir` (`id_Agent_Kurir`, `Nama_Agent`, `Ongkos_kirim`) VALUES
(1, 'JNE', 25000),
(2, 'JNT', 22500),
(3, 'SiCepat', 23000),
(4, 'Tiki', 28000),
(5, 'Pos Indonesia', 35000);

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
-- Table structure for table `tb_metodepembayaran`
--

CREATE TABLE `tb_metodepembayaran` (
  `id_metodepembayaran` int(11) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `nomer_rekening` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_metodepembayaran`
--

INSERT INTO `tb_metodepembayaran` (`id_metodepembayaran`, `nama_rekening`, `nomer_rekening`, `atas_nama`) VALUES
(1, 'BANK BCA', '0329009779', 'Aryadi Pramarta'),
(2, 'BANK MANDIRI', '1110004590473', 'Daffa Ulayya'),
(3, 'BANK BNI', '0106427035', 'Ajeung Angsaweni'),
(4, 'BANK BRI', '0090238212345', 'Delvanita');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(10) NOT NULL,
  `id_pembeli` int(11) DEFAULT NULL,
  `order_status` varchar(32) NOT NULL,
  `tanggal_beli` date NOT NULL DEFAULT current_timestamp(),
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `id_pembeli`, `order_status`, `tanggal_beli`, `total_bayar`) VALUES
(4, 19, 'Unconfirmed', '2021-06-01', 0),
(5, 19, 'Unconfirmed', '2021-06-01', 0),
(6, 19, 'Unconfirmed', '2021-06-01', 0),
(7, 19, 'Unconfirmed', '2021-06-01', 55523000),
(8, 15, 'Unconfirmed', '2021-06-02', 25025000),
(9, 15, 'Unconfirmed', '2021-06-02', 25025000),
(10, 15, 'Unconfirmed', '2021-06-02', 25025000),
(11, 15, 'Unconfirmed', '2021-06-02', 34035000),
(12, 15, 'Unconfirmed', '2021-06-02', 64522500);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `id_order_detail` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order_detail`
--

INSERT INTO `tb_order_detail` (`id_order_detail`, `id_barang`, `id_order`, `qty`) VALUES
(5, 2, 4, 2),
(6, 1, 4, 1),
(7, 2, 7, 2),
(8, 1, 7, 1),
(9, 1, 8, 2),
(10, 1, 9, 2),
(11, 1, 10, 2),
(12, 1, 11, 1),
(13, 2, 11, 1),
(14, 2, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(10) NOT NULL,
  `username_pegawai` varchar(25) NOT NULL,
  `password_pegawai` varchar(255) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `noHP_pegawai` varchar(15) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `username_pegawai`, `password_pegawai`, `nama_pegawai`, `noHP_pegawai`, `role_id`) VALUES
(1, 'admin1', '123', 'admin 1', '08123123332', 2),
(2, 'pegawai1', '202cb962ac59075b964b07152d234b70', 'Pegawai 1 ', '08123331232', 2),
(3, 'user1', '12345', 'pegawai1', '081111111', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `id_pembeli` int(10) NOT NULL,
  `username_pembeli` varchar(50) NOT NULL,
  `password_pembeli` varchar(255) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `noHp_pembeli` varchar(13) NOT NULL,
  `email_pembeli` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`id_pembeli`, `username_pembeli`, `password_pembeli`, `nama_pembeli`, `noHp_pembeli`, `email_pembeli`, `role_id`) VALUES
(10, 'tes123', '$2y$10$/f9B5UADzBrT637acmLu0.RbtWbKGFjB8WwcBfoY0VSK479JontsW', 'tes', '8123853722', 'aryadipramarta@gmail.com', 1),
(11, 'budi123', '$2y$10$gcJ/AMqYJVCGBx.HgJTjh.ndbtD6suzec5kJwS16fyOkhe7.jVHBe', 'Budi', '08123123123', 'budiamail@gmail.com', 1),
(12, 'andi123', '$2y$10$0hiW9o53iCE9EeQO0HQ0NOUy6bGJgmxVPH0/1IwJIPLxO82Hj7mG2', 'Andi Sentosa', '0812345671', 'andisentosa@gmail.com', 1),
(13, 'delva123', '$2y$10$XLFTDwn2WbW2HOq/QmXoT.cTygFwWxRfw/G71V7cwu3/CyiZomhpC', 'Delvanita', '08123123122', 'delvanita@gmail.com', 1),
(14, 'tes111', '$2y$10$lZUwnaWIwRqbDoH3enRBJeyrJOY80CMBjkfnqWWME8K9Q7sJwPKPy', 'Tes123', '08123123', 'asdasd@gmail.com', 1),
(15, 'pembeli123', '$2y$10$ooPQ2.s0wC24kzOgxEHtw.UxuyDsrWcwqC72uGK5RbNUoDk9mmv/y', 'pembeli', '1234567890', 'pembeli123@gmail.com', 1),
(16, 'aryadi69', '$2y$10$a7jT7IOXjpb02mHRTgBTmO9S3PauZltw7UfIb0VnQ4VenUY1gfjEe', 'aryadi69', '081231123123', 'aryadi69@gmail.com', 1),
(17, 'tes12345', '$2y$10$4RlR8i9MaYr6devJ6pf5n.U7/27DMANHCtg4YWrj/UKyvzQijpkwq', 'Testing123', '12312312', 'testing123@gmail.com', 1),
(18, 'pembeli3', '$2y$10$deFstsHmhZlrpZWiGTADLeScAp2je3GDwhE9rAhdbmO93XxBElwTS', 'pembeli3', '081333333', 'pembeli333@gmail.com', 1),
(19, 'abi1', '$2y$10$QSz6zSY5BM9Nn/NFXh1Oh.EMcHOQLMso3.bKR9uFoPBGb9lnNOEn.', 'abi', '001293123', 'abikadek@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemilik`
--

CREATE TABLE `tb_pemilik` (
  `id_pemilik` int(10) NOT NULL,
  `username_pemilik` varchar(25) NOT NULL,
  `password_pemilik` varchar(255) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemilik`
--

INSERT INTO `tb_pemilik` (`id_pemilik`, `username_pemilik`, `password_pemilik`, `nama_pemilik`, `role_id`) VALUES
(1, 'pemilik123', '123', 'pemilik123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_Agent_Kurir` int(11) NOT NULL,
  `id_metodepembayaran` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_pembeli`, `id_Agent_Kurir`, `id_metodepembayaran`, `harga_total`) VALUES
(1, 19, 3, 1, 55523000),
(2, 15, 1, 3, 25025000),
(4, 15, 1, 3, 25025000),
(5, 15, 5, 3, 34035000),
(6, 15, 2, 4, 64522500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alamatpembeli`
--
ALTER TABLE `tb_alamatpembeli`
  ADD PRIMARY KEY (`id_alamat`),
  ADD KEY `fk_pembeli1` (`id_pembeli`);

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
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `tb_laporan ibfk_1` (`id_pegawai`);

--
-- Indexes for table `tb_metodepembayaran`
--
ALTER TABLE `tb_metodepembayaran`
  ADD PRIMARY KEY (`id_metodepembayaran`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `tb_order_fk1` (`id_pembeli`);

--
-- Indexes for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD PRIMARY KEY (`id_order_detail`),
  ADD KEY `order_detail_fk1` (`id_barang`),
  ADD KEY `order_detail_fk2` (`id_order`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `tb_pemilik`
--
ALTER TABLE `tb_pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `tb_transaksi_ibfk_3` (`id_metodepembayaran`),
  ADD KEY `id_pembeli` (`id_pembeli`) USING BTREE,
  ADD KEY `id_Agent_Kurir` (`id_Agent_Kurir`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alamatpembeli`
--
ALTER TABLE `tb_alamatpembeli`
  MODIFY `id_alamat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
  MODIFY `id_Agent_Kurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_metodepembayaran`
--
ALTER TABLE `tb_metodepembayaran`
  MODIFY `id_metodepembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  MODIFY `id_order_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  MODIFY `id_pembeli` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_pemilik`
--
ALTER TABLE `tb_pemilik`
  MODIFY `id_pemilik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_alamatpembeli`
--
ALTER TABLE `tb_alamatpembeli`
  ADD CONSTRAINT `fk_pembeli1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD CONSTRAINT `tb_laporan ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`),
  ADD CONSTRAINT `tb_laporan_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`);

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_fk1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD CONSTRAINT `order_detail_fk1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_fk2` FOREIGN KEY (`id_order`) REFERENCES `tb_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_Agent_Kurir`) REFERENCES `tb_kurir` (`id_Agent_Kurir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_metodepembayaran`) REFERENCES `tb_metodepembayaran` (`id_metodepembayaran`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
