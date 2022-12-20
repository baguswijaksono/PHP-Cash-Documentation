-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2022 at 09:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_dinamis`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_minggu`
--

CREATE TABLE `data_minggu` (
  `kd_minggu` int(10) NOT NULL,
  `kd_pembayar` int(10) NOT NULL,
  `minggu1` int(10) NOT NULL,
  `minggu2` int(11) NOT NULL,
  `minggu3` int(3) NOT NULL,
  `minggu4` int(10) NOT NULL,
  `minggu5` int(10) NOT NULL,
  `minggu6` int(10) NOT NULL,
  `minggu7` int(19) NOT NULL,
  `minggu8` int(3) NOT NULL,
  `minggu9` int(3) NOT NULL,
  `minggu10` int(3) NOT NULL,
  `minggu11` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_minggu`
--

INSERT INTO `data_minggu` (`kd_minggu`, `kd_pembayar`, `minggu1`, `minggu2`, `minggu3`, `minggu4`, `minggu5`, `minggu6`, `minggu7`, `minggu8`, `minggu9`, `minggu10`, `minggu11`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jumlah`
--

CREATE TABLE `jumlah` (
  `kd_jumlah` int(10) NOT NULL,
  `nominal_jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumlah`
--

INSERT INTO `jumlah` (`kd_jumlah`, `nominal_jumlah`) VALUES
(1, 5000),
(2, 10000),
(3, 15000),
(4, 20000),
(5, 25000),
(6, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `kaskeluar`
--

CREATE TABLE `kaskeluar` (
  `nomor` int(10) NOT NULL,
  `rincian` varchar(1000) NOT NULL,
  `jumlah_pengeluaran` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kaskeluar`
--

INSERT INTO `kaskeluar` (`nomor`, `rincian`, `jumlah_pengeluaran`, `debit`, `saldo`, `keterangan`) VALUES
(1, 'hdhdeewe', 10012, 100, 100, 'fgdy');

-- --------------------------------------------------------

--
-- Table structure for table `kasmasuk`
--

CREATE TABLE `kasmasuk` (
  `id` int(11) NOT NULL,
  `kd_pembayar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasmasuk`
--

INSERT INTO `kasmasuk` (`id`, `kd_pembayar`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `metode`
--

CREATE TABLE `metode` (
  `kd_metode` int(11) NOT NULL,
  `nama_metode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metode`
--

INSERT INTO `metode` (`kd_metode`, `nama_metode`) VALUES
(1, 'Tunai'),
(2, 'Gopay'),
(3, 'Dana'),
(4, 'Ovo');

-- --------------------------------------------------------

--
-- Table structure for table `minggu`
--

CREATE TABLE `minggu` (
  `kd_minggu` int(11) NOT NULL,
  `nama_minggu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minggu`
--

INSERT INTO `minggu` (`kd_minggu`, `nama_minggu`) VALUES
(1, 'Minggu 1'),
(2, 'Minggu 2'),
(3, 'Minggu 3'),
(4, 'Minggu 4'),
(5, 'Minggu 5'),
(6, 'Minggu 6'),
(7, 'Minggu 7'),
(8, 'Minggu 8'),
(9, 'Minggu 9'),
(10, 'Minggu 10'),
(11, 'Minggu 11'),
(12, 'Minggu 12');

-- --------------------------------------------------------

--
-- Table structure for table `pembayar`
--

CREATE TABLE `pembayar` (
  `kd_pembayar` int(11) NOT NULL,
  `nama_pembayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayar`
--

INSERT INTO `pembayar` (`kd_pembayar`, `nama_pembayar`) VALUES
(1, 'Ade Prasetyo'),
(2, 'Afifah Naura Kamilia'),
(3, 'Agustinus Ricad Simbolon'),
(4, 'Annisa Aisyah Amini Nur Rohmah'),
(5, 'Azyumi Azra'),
(6, 'Bagus Muhammad Wijaksono'),
(7, 'Dewi Maharani'),
(8, 'Dwi Krisnandi'),
(9, 'Faris Adhi Laksana Yusuf'),
(10, 'Febrian Giovanni'),
(11, 'Ferina Ayu Fella Puspita'),
(12, 'Kanya Audy Prahmadyta'),
(13, 'Maulana Arya Yoga Juliansyah'),
(14, 'Muhammad Naufal Yesha Rendra'),
(15, 'Nabilla Syaharani Putri S');

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE `penerima` (
  `kd_penerima` int(11) NOT NULL,
  `nama_penerima` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`kd_penerima`, `nama_penerima`) VALUES
(1, 'Nandya Nurmala'),
(2, 'Bagus Muhammad Wijaksono');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_kas`
--

CREATE TABLE `riwayat_kas` (
  `kd_riwayat` int(15) NOT NULL,
  `kd_metode` int(11) NOT NULL,
  `kd_minggu` int(10) NOT NULL,
  `kd_jumlah` int(11) NOT NULL,
  `kd_penerima` int(10) NOT NULL,
  `kd_pembayar` int(10) NOT NULL,
  `kd_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_kas`
--

INSERT INTO `riwayat_kas` (`kd_riwayat`, `kd_metode`, `kd_minggu`, `kd_jumlah`, `kd_penerima`, `kd_pembayar`, `kd_status`) VALUES
(421112201, 1, 1, 1, 2, 22, 1),
(422312211, 2, 11, 3, 2, 22, 1),
(423210102, 3, 2, 2, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `kd_status` int(10) NOT NULL,
  `nama_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`kd_status`, `nama_status`) VALUES
(1, 'Selesai'),
(2, 'Belum Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `akses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `akses_id`) VALUES
(1, 'bendahara1', 'bendahara1', 1),
(2, 'bendahara2', 'bendahara2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_minggu`
--
ALTER TABLE `data_minggu`
  ADD PRIMARY KEY (`kd_minggu`);

--
-- Indexes for table `jumlah`
--
ALTER TABLE `jumlah`
  ADD PRIMARY KEY (`kd_jumlah`);

--
-- Indexes for table `kaskeluar`
--
ALTER TABLE `kaskeluar`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `kasmasuk`
--
ALTER TABLE `kasmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metode`
--
ALTER TABLE `metode`
  ADD PRIMARY KEY (`kd_metode`);

--
-- Indexes for table `minggu`
--
ALTER TABLE `minggu`
  ADD PRIMARY KEY (`kd_minggu`);

--
-- Indexes for table `pembayar`
--
ALTER TABLE `pembayar`
  ADD PRIMARY KEY (`kd_pembayar`);

--
-- Indexes for table `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`kd_penerima`);

--
-- Indexes for table `riwayat_kas`
--
ALTER TABLE `riwayat_kas`
  ADD PRIMARY KEY (`kd_riwayat`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`kd_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kaskeluar`
--
ALTER TABLE `kaskeluar`
  MODIFY `nomor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
