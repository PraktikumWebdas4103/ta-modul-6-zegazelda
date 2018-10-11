-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 05:54 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regis`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `nama` varchar(35) NOT NULL,
  `nim` int(10) NOT NULL,
  `alamat` text NOT NULL,
  `pass` varchar(25) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `kelamin` varchar(25) NOT NULL,
  `hobi` varchar(25) NOT NULL,
  `fakultas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`nama`, `nim`, `alamat`, `pass`, `kelas`, `kelamin`, `hobi`, `fakultas`) VALUES
('kshadk', 12345, 'khwakhkdshk', '12345', 'd3mi-04', 'laki-laki', 'makan', 'terapan'),
('itawulan', 2147483647, 'ewjlrjw', '12345', 'd3mi-01', 'perempuan', 'makan', 'terapan');

-- --------------------------------------------------------

--
-- Table structure for table `simpan`
--

CREATE TABLE `simpan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(55) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `cerita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
