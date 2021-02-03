-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 03:08 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warga`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbkriteria`
--

CREATE TABLE `tbkriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL,
  `pekerjaan` varchar(5) NOT NULL,
  `penghasilan` varchar(5) NOT NULL,
  `status` varchar(5) NOT NULL,
  `jumlahanak` varchar(5) NOT NULL,
  `tempattinggal` varchar(5) NOT NULL,
  `user` varchar(10) NOT NULL,
  `user_tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkriteria`
--

INSERT INTO `tbkriteria` (`id_kriteria`, `nama_kriteria`, `pekerjaan`, `penghasilan`, `status`, `jumlahanak`, `tempattinggal`, `user`, `user_tgl`) VALUES
('1', 'coba', '0.25', '0.4', '0.1', '0.15', '0.1', 'ficky', '2018-12-19'),
('2', 'ass', '0.2', '0.2', '0.2', '0.2', '0.2', '', '0000-00-00'),
('3', 'ASD', '0.2', '0.2', '0.2', '0.2', '0.2', '', '0000-00-00'),
('4', 'GAJI', '0.4', '0.25', '0.15', '0.1', '0.1', '', '0000-00-00'),
('5', 'asdsad', '0.25', '0.25', '0.25', '0.25', '0', '', '0000-00-00'),
('K001', 'ASD', '0.25', '0.3', '0.15', '0.15', '0.15', '', '0000-00-00'),
('K002', 'Ficky', '0.25', '0.35', '0.1', '0.15', '0.15', 'ficky', '2018-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbwarga`
--

CREATE TABLE `tbwarga` (
  `idpenduduk` varchar(16) NOT NULL,
  `nikpenduduk` varchar(16) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(10) NOT NULL,
  `pekerjaan` int(1) NOT NULL,
  `penghasilan` int(1) NOT NULL,
  `hp` varchar(14) NOT NULL,
  `status` int(1) NOT NULL,
  `jumlahanak` int(1) NOT NULL,
  `tempattinggal` int(1) NOT NULL,
  `user` varchar(10) NOT NULL,
  `user_tgl` date NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbwarga`
--

INSERT INTO `tbwarga` (`idpenduduk`, `nikpenduduk`, `nama`, `alamat`, `jk`, `pekerjaan`, `penghasilan`, `hp`, `status`, `jumlahanak`, `tempattinggal`, `user`, `user_tgl`, `nilai`) VALUES
('P001', '360620024004000', 'M. NURFICKY', 'kp. bungaok gareba rt.01/02, desa kemuning, kecamatan legok, kab. tangerang', 'L', 2, 2, '081880902936', 2, 3, 1, 'ficky', '2018-12-19', '0.690'),
('P002', '3603021244123464', 'FICKY', 'legok', 'P', 3, 3, '+6281280902936', 1, 7, 2, '', '0000-00-00', '0.875'),
('P005', '3603200808011996', 'SAID BADAR', 'legok', 'L', 1, 3, '+6281280902936', 2, 1, 1, '', '0000-00-00', '0.619'),
('P006', '3603200808011996', 'trisna wangsih', 'bungaok', 'P', 1, 1, '+6281280902936', 2, 1, 1, '', '0000-00-00', '0.452'),
('P007', '3603200808011996', 'M. NURFICKY', 'bungaok', 'P', 1, 2, '+6281280902936', 2, 2, 1, 'ficky', '2018-12-19', '0.571');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`, `level`) VALUES
('ficky', '123456', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbkriteria`
--
ALTER TABLE `tbkriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbwarga`
--
ALTER TABLE `tbwarga`
  ADD PRIMARY KEY (`idpenduduk`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
