-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 07:09 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icositer`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(5) NOT NULL,
  `nama_bidang` varchar(30) NOT NULL,
  `id_subbidang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `nama_bidang`, `id_subbidang`) VALUES
(1, 'JSAT', 1),
(2, 'JSAT', 2),
(3, 'JSAT', 3),
(4, 'JSAT', 4),
(5, 'JSAT', 5),
(6, 'JSAT', 6),
(7, 'JSAT', 7),
(8, 'JSAT', 8),
(9, 'JSAT', 9),
(10, 'JSAT', 10),
(11, 'IOP', 1),
(12, 'IOP', 2),
(13, 'IOP', 3),
(14, 'IOP', 4),
(15, 'IOP', 5),
(16, 'IOP', 6),
(17, 'IOP', 7),
(18, 'IOP', 8),
(19, 'IOP', 9),
(20, 'IOP', 10),
(21, 'sbsn', 1),
(22, 'sbsn', 2),
(23, 'sbsn', 3),
(24, 'sbsn', 4),
(25, 'sbsn', 5),
(26, 'sbsn', 6),
(27, 'sbsn', 7),
(28, 'sbsn', 8),
(29, 'sbsn', 9),
(30, 'sbsn', 10);

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(10) NOT NULL,
  `judul_jurnal` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `judul_jurnal`) VALUES
(1, 'The Delay Simulation on Hierarchical Structure for Semi-Double Track of Railway Line Using Max-Plus Algebra'),
(2, 'A systematic survey of plant biodiversity study within the land of Institut Teknologi Sumatera (ITERA)'),
(3, 'Development of Submerged Biofilter Design for Wastewater Conservation: Carbonaceous Removal Study'),
(4, 'Design of Ontology-based Question Answering System for Incompleted Sentence Problem'),
(5, 'The effect of cross-shaped line width on the absorbance performance of terahertz metamaterial based on paper as spacer'),
(6, 'Atmospheric drag effect on LAPAN A1 orbit during geomagnetic storm 2017');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `email` varchar(50) NOT NULL,
  `nama_penulis` varchar(35) DEFAULT NULL,
  `afiliasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`email`, `nama_penulis`, `afiliasi`) VALUES
('arysca.wisnu@tk.itera.ac.id', 'Arysca Wisnu Satria', 'ITERA'),
('indah.oktaviani@bi.itera.ac.id', 'Indah Oktaviani', 'ITERA'),
('pratiwinindhita@gmail.com', 'Nindhita Pratiwi', 'ITERA'),
('rajif@if.itera.ac.id', 'Rajif Agung Yunmar', 'ITERA'),
('tri.utomo@ma.itera.ac.id', 'Tri Utomo', 'ITERA'),
('yudistira@me.itera.ac.id', 'Hadi Teguh Yudistira', 'ITERA');

-- --------------------------------------------------------

--
-- Table structure for table `peran`
--

CREATE TABLE `peran` (
  `id_peran` int(1) NOT NULL,
  `nama_peran` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peran`
--

INSERT INTO `peran` (`id_peran`, `nama_peran`) VALUES
(1, 'admin'),
(2, 'editor'),
(3, 'penulis');

-- --------------------------------------------------------

--
-- Table structure for table `pusat_data`
--

CREATE TABLE `pusat_data` (
  `id_pusat` int(10) NOT NULL,
  `id_jurnal` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_bidang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pusat_data`
--

INSERT INTO `pusat_data` (`id_pusat`, `id_jurnal`, `email`, `id_user`, `id_bidang`) VALUES
(1, 1, 'tri.utomo@ma.itera.ac.id', 'yoga', 3),
(2, 2, 'indah.oktaviani@bi.itera.ac.id', 'yoga', 3),
(3, 3, 'arysca.wisnu@tk.itera.ac.id', 'yoga', 1),
(4, 4, 'rajif@if.itera.ac.id', 'yoga', 18),
(5, 5, 'yudistira@me.itera.ac.id', 'yoga', 19),
(6, 6, 'pratiwinindhita@gmail.com', 'yoga', 15);

-- --------------------------------------------------------

--
-- Table structure for table `sub_bidang`
--

CREATE TABLE `sub_bidang` (
  `id_subbidang` int(10) NOT NULL,
  `nama_subbidang` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_bidang`
--

INSERT INTO `sub_bidang` (`id_subbidang`, `nama_subbidang`) VALUES
(1, 'Science and Applicative Technology'),
(2, 'Environmental Science and Sustainable Development'),
(3, 'Fundamental Science'),
(4, 'Agricultural Technology and Smart Farm'),
(5, 'Atmospheric Science'),
(6, 'Energy System'),
(7, 'General'),
(8, 'Information and Communication Technology (ICT)'),
(9, 'Smart and Advanced Materials'),
(10, 'Smart and Green Infstructurera');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `id_peran` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `pass`, `id_peran`) VALUES
('yoga', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`),
  ADD KEY `id_subbidang` (`id_subbidang`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `peran`
--
ALTER TABLE `peran`
  ADD PRIMARY KEY (`id_peran`);

--
-- Indexes for table `pusat_data`
--
ALTER TABLE `pusat_data`
  ADD PRIMARY KEY (`id_pusat`),
  ADD KEY `email` (`email`),
  ADD KEY `id_bidang` (`id_bidang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jurnal` (`id_jurnal`);

--
-- Indexes for table `sub_bidang`
--
ALTER TABLE `sub_bidang`
  ADD PRIMARY KEY (`id_subbidang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_peran` (`id_peran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pusat_data`
--
ALTER TABLE `pusat_data`
  MODIFY `id_pusat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_bidang`
--
ALTER TABLE `sub_bidang`
  MODIFY `id_subbidang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bidang`
--
ALTER TABLE `bidang`
  ADD CONSTRAINT `bidang_ibfk_1` FOREIGN KEY (`id_subbidang`) REFERENCES `sub_bidang` (`id_subbidang`) ON UPDATE CASCADE;

--
-- Constraints for table `pusat_data`
--
ALTER TABLE `pusat_data`
  ADD CONSTRAINT `pusat_data_ibfk_1` FOREIGN KEY (`email`) REFERENCES `penulis` (`email`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pusat_data_ibfk_2` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id_bidang`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pusat_data_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pusat_data_ibfk_5` FOREIGN KEY (`id_jurnal`) REFERENCES `jurnal` (`id_jurnal`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_peran`) REFERENCES `peran` (`id_peran`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
