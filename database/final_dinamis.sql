-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2022 at 08:22 AM
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
-- Table structure for table `data_kas`
--

CREATE TABLE `data_kas` (
  `na` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `minggu1` enum('P','U','H') NOT NULL,
  `minggu2` enum('P','U','H') NOT NULL,
  `minggu3` enum('P','U','H') NOT NULL,
  `minggu4` enum('P','U','H') NOT NULL,
  `minggu5` enum('P','U','H') NOT NULL,
  `minggu6` enum('P','U','H') NOT NULL,
  `minggu7` enum('P','U','H') NOT NULL,
  `minggu8` enum('P','U','H') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kas`
--

INSERT INTO `data_kas` (`na`, `nama`, `minggu1`, `minggu2`, `minggu3`, `minggu4`, `minggu5`, `minggu6`, `minggu7`, `minggu8`) VALUES
(1, 'Ade Prasetyo', 'P', 'P', 'P', 'P', 'P', 'P', 'H', 'P'),
(2, 'Affifah Naura Kamilia', 'P', 'P', 'P', 'P', 'P', 'U', 'P', 'P'),
(3, 'Agustinus Ricad Simbolom', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(4, 'Annisa Aisyah Amini Nur Rohmah', 'P', 'P', 'P', 'P', 'P', 'U', 'P', 'P'),
(5, 'Azyumi Azra', 'P', 'P', 'P', 'P', 'P', 'U', 'P', 'P'),
(6, 'Bagus Muhammad Wijaksono', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(7, 'Dewi Maharani', 'P', 'P', 'P', 'P', 'P', 'U', 'P', 'P'),
(8, 'Dwi Krisnandi', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(9, 'Faris Adhi Laksana Yusuf', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(10, 'Febrian Giovanni', 'P', 'P', 'P', 'P', 'P', 'P', 'U', 'P'),
(11, 'Ferina Ayu Fella Puspita', 'P', 'P', 'P', 'P', 'U', 'U', 'U', 'P'),
(12, 'Kanya Audy Prahmadyta', 'P', 'P', 'U', 'U', 'U', 'U', 'U', 'P'),
(13, 'Maulana Arya Yoga Juliansyah', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(14, 'Muhammad Naufal Yesha Rendra', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(15, 'Nabilla Syaharani Putri S', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(16, 'Nandya Nurmala', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(17, 'Putri Ayu Widyaningrum', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(18, 'Raihana Khalika Putri', 'P', 'P', 'P', 'P', 'U', 'U', 'U', 'P'),
(19, 'Salma Afdhila Khalda', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(20, 'Syalita Widyandini', 'P', 'P', 'P', 'P', 'U', 'U', 'U', 'P'),
(21, 'Vannisa Ardiani', 'P', 'P', 'P', 'U', 'U', 'U', 'U', 'P'),
(22, 'Yudha Zaniargo', 'P', 'P', 'P', 'P', 'P', 'U', 'U', 'P'),
(23, 'Dummy', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H');

-- --------------------------------------------------------

--
-- Table structure for table `data_kas_out`
--

CREATE TABLE `data_kas_out` (
  `id` int(11) NOT NULL,
  `dt` date NOT NULL,
  `dtl` varchar(100) NOT NULL,
  `cnt` int(3) NOT NULL,
  `dbt` int(11) NOT NULL,
  `sldo` int(11) NOT NULL,
  `prf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kas_out`
--

INSERT INTO `data_kas_out` (`id`, `dt`, `dtl`, `cnt`, `dbt`, `sldo`, `prf`) VALUES
(1, '2022-11-30', 'Membayar biaya pendaftaran Kelas IK-2D untuk mengikuti e-Sports', 1, 150, 25000, 'n/a'),
(2, '2022-11-30', 'Membeli Kertas Kado Untuk Sampul buku tugas Mata Kuliah Pendidikan Kewarganegaraan', 4, 22000, 3000, 'n/a'),
(3, '2022-11-30', 'Membeli Kertas Kado Untuk Sampul buku tugas Mata Kuliah Pendidikan Kewarganegaraan Kedua', 2, 11000, 8000, 'n/a'),
(4, '2022-11-30', 'Membayar Sewa lapangan buat latihan Bulutangkis cewe', 1, 60000, 23000, 'n/a\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `id` int(10) NOT NULL,
  `tr_code` int(6) NOT NULL,
  `py_nm` varchar(100) NOT NULL,
  `rc_nm` varchar(100) NOT NULL,
  `dt_rc` date NOT NULL,
  `py_mtd` enum('g','d','o','t') NOT NULL,
  `py_for` varchar(25) NOT NULL,
  `ttl_py` int(10) NOT NULL,
  `sts_py` enum('d','u') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_history`
--

INSERT INTO `payment_history` (`id`, `tr_code`, `py_nm`, `rc_nm`, `dt_rc`, `py_mtd`, `py_for`, `ttl_py`, `sts_py`) VALUES
(1, 10100, 'Ade Praseto', 'Bagus Muhammad Wijaksono', '2022-11-28', 't', 'Minggu 1', 10000, 'd'),
(2, 10200, 'Ade Prasetyo', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 2', 5000, 'd'),
(3, 10300, 'Ade Prasetyo', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 3', 5000, 'd'),
(4, 10400, 'Ade Prasetyo', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 4', 5000, 'd'),
(5, 10500, 'Ade Prasetyo', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 5', 5000, 'd'),
(6, 10600, 'Ade Prasetyo', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 6', 5000, 'd'),
(7, 10700, 'Ade Prasetyo', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 7', 5000, 'd'),
(8, 10800, 'Ade Prasetyo', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 8', 5000, 'd'),
(9, 20100, 'Afifah Naura Kamilia', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 1', 10000, 'd'),
(10, 20200, 'Afifah Naura Kamilia', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 2', 5000, 'd'),
(11, 20300, 'Afifah Naura Kamilia', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 3', 5000, 'd'),
(12, 20400, 'Afifah Naura Kamilia', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 4', 5000, 'd'),
(13, 20500, 'Afifah Naura Kamilia', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 5', 5000, 'd'),
(14, 20600, 'Afifah Naura Kamilia', 'Bagus MUhammad Wijaksono', '2022-11-29', 't', 'Minggu 6', 5000, 'd'),
(15, 20700, 'Afifah Naura Kamilia', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 7', 5000, 'd'),
(16, 20800, 'Afifah Naura Kamilia', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 8', 5000, 'd'),
(17, 30100, 'Agustinus Ricad Simbolon', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 1', 10000, 'd'),
(18, 30200, 'Agustinus Ricad Simbolon', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 2', 5000, 'd'),
(19, 30300, 'Agustinus Ricad Simbolon', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 3', 5000, 'd'),
(20, 30500, 'Agustinus Ricad Simbolon', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 4', 5000, 'd'),
(21, 30600, 'Agustinus Ricad Simbolon', 'Bagus MUhammad Wijaksono', '2022-11-29', 't', 'Minggu 5', 5000, 'd'),
(22, 30700, 'Agustinus Ricad Simbolon', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 6', 5000, 'd'),
(23, 30800, 'Agustinus Ricad Simbolon', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 7', 5000, 'd'),
(24, 30900, 'Agustinus Ricad Simbolon', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 8', 5000, 'd'),
(25, 40100, 'Anisa Aisyah A N R', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 1', 10000, 'd'),
(26, 40200, 'Anisa Aisya A N R', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 2', 5000, 'd'),
(27, 40300, 'Anisa Aisya A N R', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 3', 5000, 'd'),
(28, 40400, 'Anisa Aisya A N R', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 4', 5000, 'd'),
(29, 40500, 'Anisa Aisya A N R', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 5', 5000, 'd'),
(30, 40600, 'Anisa Aisya A N R', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 6', 5000, 'd'),
(31, 40700, 'Anisa Aisya A N R', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 7', 5000, 'd'),
(32, 40800, 'Anisa Aisya A N R', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 8', 5000, 'd'),
(33, 50100, 'Azyumi Azra', 'Bagus Muhammad Wijaksono', '2022-11-29', 't', 'Minggu 1', 10000, 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kas`
--
ALTER TABLE `data_kas`
  ADD PRIMARY KEY (`na`);

--
-- Indexes for table `data_kas_out`
--
ALTER TABLE `data_kas_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
