-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 08:00 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_alternatif`
--

CREATE TABLE `tab_alternatif` (
  `id_alternatif` int(10) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_alternatif`
--

INSERT INTO `tab_alternatif` (`id_alternatif`, `nama_alternatif`) VALUES
(1, 'Absen 1'),
(2, 'Absen 2'),
(3, 'Absen 3'),
(4, 'Absen 4'),
(5, 'Absen 5'),
(6, 'Absen 6'),
(7, 'Absen 7'),
(8, 'Absen 8'),
(9, 'Absen 9'),
(10, 'Absen 10');

-- --------------------------------------------------------

--
-- Table structure for table `tab_kriteria`
--

CREATE TABLE `tab_kriteria` (
  `id_kriteria` int(10) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot` float NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_kriteria`
--

INSERT INTO `tab_kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `status`) VALUES
(1, 'Pekerjaan orangtua', 1, 'Cost'),
(2, 'Nilai IPK', 2, 'Benefit'),
(3, 'Lama Kuliah', 3, 'Benefit'),
(4, 'Status Kuliah', 3, 'Benefit'),
(5, 'Kesehatan Keluarga', 1, 'Cost');

-- --------------------------------------------------------

--
-- Table structure for table `tab_topsis`
--

CREATE TABLE `tab_topsis` (
  `id_alternatif` int(10) NOT NULL,
  `id_kriteria` int(10) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_topsis`
--

INSERT INTO `tab_topsis` (`id_alternatif`, `id_kriteria`, `nilai`) VALUES
(1, 1, 2),
(1, 2, 3),
(1, 3, 1),
(1, 4, 1),
(1, 5, 2),
(2, 1, 2),
(2, 2, 4),
(2, 3, 1),
(2, 4, 1),
(2, 5, 3),
(3, 1, 3),
(3, 2, 2),
(3, 3, 1),
(3, 4, 1),
(3, 5, 2),
(4, 1, 2),
(4, 2, 4),
(4, 3, 1),
(4, 4, 1),
(4, 5, 2),
(5, 1, 2),
(5, 2, 4),
(5, 3, 1),
(5, 4, 1),
(5, 5, 1),
(6, 1, 1),
(6, 2, 2),
(6, 3, 1),
(6, 4, 1),
(6, 5, 3),
(7, 1, 3),
(7, 2, 4),
(7, 3, 1),
(7, 4, 1),
(7, 5, 1),
(8, 1, 1),
(8, 2, 1),
(8, 3, 1),
(8, 4, 1),
(8, 5, 3),
(9, 1, 2),
(9, 2, 3),
(9, 3, 1),
(9, 4, 1),
(9, 5, 3),
(10, 1, 3),
(10, 2, 1),
(10, 3, 1),
(10, 4, 0),
(10, 5, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_alternatif`
--
ALTER TABLE `tab_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tab_kriteria`
--
ALTER TABLE `tab_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tab_topsis`
--
ALTER TABLE `tab_topsis`
  ADD PRIMARY KEY (`id_alternatif`,`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tab_topsis`
--
ALTER TABLE `tab_topsis`
  ADD CONSTRAINT `tab_topsis_ibfk_2` FOREIGN KEY (`id_alternatif`) REFERENCES `tab_alternatif` (`id_alternatif`),
  ADD CONSTRAINT `tab_topsis_ibfk_3` FOREIGN KEY (`id_kriteria`) REFERENCES `tab_kriteria` (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
