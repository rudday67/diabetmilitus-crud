-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 01:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diabet`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai_alternatif`
--

CREATE TABLE `nilai_alternatif` (
  `id_alternatif` int(30) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `alternatif` varchar(50) NOT NULL,
  `dosis` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tingkat_efektivitas` varchar(50) NOT NULL,
  `efek_samping` varchar(50) NOT NULL,
  `durasi_aktif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai_alternatif`
--

INSERT INTO `nilai_alternatif` (`id_alternatif`, `nama_obat`, `alternatif`, `dosis`, `harga`, `tingkat_efektivitas`, `efek_samping`, `durasi_aktif`) VALUES
(1, 'Metformin', 'A1', '5', '40', '08', '002', '012'),
(2, 'Glibenclamide', 'A2', '005', '450', '07', '004', '012'),
(7, 'RUDDAY', 'apas rudy', 'wira', 'rudy ', 'satya', 'wira', 'dharma');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `alternatif` varchar(50) NOT NULL,
  `nilai_c1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_kriteria`, `alternatif`, `nilai_c1`) VALUES
(6, 'Metformin', '50000'),
(7, 'Glibenclamide', '5'),
(8, 'Insulin Lispro', '9'),
(9, 'Acarbose', '50'),
(10, 'Sitagliptin', '100'),
(15, 'sdsd', '1006666'),
(16, 'eee', '500');

-- --------------------------------------------------------

--
-- Table structure for table `table_kriteria`
--

CREATE TABLE `table_kriteria` (
  `id_obat` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `bobot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_kriteria`
--

INSERT INTO `table_kriteria` (`id_obat`, `kode`, `kriteria`, `tipe`, `bobot`) VALUES
(1, 'C1', 'Dosis', 'Binefi', '20%'),
(2, 'C2', 'Harga', 'Cost', '15%'),
(3, 'C3', 'Tingkat Efektivitas', 'Binefit', '25%'),
(4, 'C4', 'Efek Samping ', 'Cost', '25%'),
(9, 'C5', 'Durasi Aktif', 'Binefit', '15%'),
(11, 'rrddd', 'rrdd', 'rrdd', 'rrddrr'),
(18, 'C5', 'Durasi Aktif', 'Binefit', '26%');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perangkingan`
--

CREATE TABLE `tbl_perangkingan` (
  `id_perangkingan` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `alternatif` varchar(50) NOT NULL,
  `skor_total` varchar(50) NOT NULL,
  `rangking` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_perangkingan`
--

INSERT INTO `tbl_perangkingan` (`id_perangkingan`, `nama_obat`, `alternatif`, `skor_total`, `rangking`) VALUES
(1, 'morfent', 'A1', '', '10'),
(2, 'Glibenclamide', 'A2', '6', '9'),
(4, 'rudy satya ', 'Insulin Lispro', '10', '25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `table_kriteria`
--
ALTER TABLE `table_kriteria`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tbl_perangkingan`
--
ALTER TABLE `tbl_perangkingan`
  ADD PRIMARY KEY (`id_perangkingan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  MODIFY `id_alternatif` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `table_kriteria`
--
ALTER TABLE `table_kriteria`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_perangkingan`
--
ALTER TABLE `tbl_perangkingan`
  MODIFY `id_perangkingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
