-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 01:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitrasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_alumni`
--

CREATE TABLE `data_alumni` (
  `nama` varchar(25) NOT NULL,
  `nim` int NOT NULL,
  `prodi` varchar(75) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `tahun_lulus` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_alumni`
--

CREATE TABLE `pertanyaan_alumni` (
  `id` int NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nim` int NOT NULL,
  `prodi` varchar(75) NOT NULL,
  `tahun_lulus` int NOT NULL,
  `status` varchar(25) NOT NULL,
  `waktu_tunggu` varchar(30) NOT NULL,
  `nama_dudi` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat_dudi` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `pendapatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pertanyaan_alumni`
--

INSERT INTO `pertanyaan_alumni` (`id`, `nama`, `nim`, `prodi`, `tahun_lulus`, `status`, `waktu_tunggu`, `nama_dudi`, `alamat_dudi`, `jabatan`, `pendapatan`) VALUES
(21, 'Fajar Dwi J', 220202083, 'D4 Teknologi Rekayasa Multimedia', 2023, 'Bekerja', '6-12 Bulan', 'sffffsf', 'fefefe', 'sfeffekp', '1.000.000 - 2.000.000'),
(22, 'JUKIr', 232323, 'D4 Teknologi Rekayasa Multimedia', 2023, 'Bekerja', 'Lebih dari 1 Tahun', 'efefe', 'ssffsfsf', 'sfffd', '500.000 - 1.000.000'),
(23, 'user', 2, 'D4 Rekayasa Keamanan Siber', 2023, 'Kuliah', '0-6 Bulan', 'wddw', 'dw', 'wwww', '500.000 - 1.000.000'),
(24, 'gajalas', 224234, 'D4 Akutansi Keuangan Lembaga Syariah', 2023, 'Tidak Keduanya', 'Lebih dari 1 Tahun', 'ffsfddf', 'efefeff', 'fewfefef', '500.000 - 1.000.000'),
(25, 'hhslksks', 434343, 'D4 Teknologi Rekayasa Multimedia', 2023, 'Kuliah', 'Lebih dari 1 Tahun', 'gfbgbgb', 'efrgrrgrg', 'efrrrgrg', '500.000 - 1.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_legalisir`
--

CREATE TABLE `tb_legalisir` (
  `id` int NOT NULL,
  `nama` varchar(25) NOT NULL,
  `prodi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tahun_lulus` int NOT NULL,
  `alasan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_legalisir`
--

INSERT INTO `tb_legalisir` (`id`, `nama`, `prodi`, `tahun_lulus`, `alasan`) VALUES
(2, 'user', 'D4 Teknologi Rekayasa Multimedia', 2023, 'Daftar Kerja'),
(3, 'Fajar Dwi Junianto', 'D4 Rekayasa Keamanan Siber', 2019, 'Kerja');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int NOT NULL,
  `nama_prodi` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pertanyaan_alumni`
--
ALTER TABLE `pertanyaan_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_legalisir`
--
ALTER TABLE `tb_legalisir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pertanyaan_alumni`
--
ALTER TABLE `pertanyaan_alumni`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_legalisir`
--
ALTER TABLE `tb_legalisir`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
