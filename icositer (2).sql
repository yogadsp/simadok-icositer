-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Apr 2019 pada 21.05
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'JSAT'),
(11, 'IOP'),
(21, 'sbsn'),
(22, 'ADAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bid_subbid`
--

CREATE TABLE `bid_subbid` (
  `id_bid_subbid` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `id_subbidang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bid_subbid`
--

INSERT INTO `bid_subbid` (`id_bid_subbid`, `id_bidang`, `id_subbidang`) VALUES
(29, 1, 34),
(30, 1, 35),
(31, 11, 36),
(32, 11, 37);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(10) NOT NULL,
  `judul_jurnal` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `judul_jurnal`) VALUES
(1, 'The Delay Simulation on Hierarchical Structure for Semi-Double Track of Railway Line Using Max-Plus Algebra'),
(2, 'A systematic survey of plant biodiversity study within the land of Institut Teknologi Sumatera (ITERA)'),
(3, 'Development of Submerged Biofilter Design for Wastewater Conservation: Carbonaceous Removal Study'),
(4, 'Design of Ontology-based Question Answering System for Incompleted Sentence Problem'),
(5, 'The effect of cross-shaped line width on the absorbance performance of terahertz metamaterial based on paper as spacer'),
(6, 'Atmospheric drag effect on LAPAN A1 orbit during geomagnetic storm 2017'),
(98, 'Perubahan Lingkungan'),
(99, 'Keamanan Data'),
(100, 'Penanaman Kembali'),
(101, 'Dampak Lingkungan'),
(102, 'Perubahan Ekonomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `email` varchar(50) NOT NULL,
  `nama_penulis` varchar(35) DEFAULT NULL,
  `afiliasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penulis`
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
-- Struktur dari tabel `peran`
--

CREATE TABLE `peran` (
  `id_peran` int(1) NOT NULL,
  `nama_peran` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peran`
--

INSERT INTO `peran` (`id_peran`, `nama_peran`) VALUES
(1, 'admin'),
(2, 'editor'),
(3, 'penulis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pusat_data`
--

CREATE TABLE `pusat_data` (
  `id_pusat` int(10) NOT NULL,
  `id_jurnal` int(10) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_bid_subbid` int(11) NOT NULL,
  `nama_penulis` varchar(200) NOT NULL,
  `email` varchar(20) NOT NULL,
  `afiliasi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `dokumen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pusat_data`
--

INSERT INTO `pusat_data` (`id_pusat`, `id_jurnal`, `id_user`, `id_bid_subbid`, `nama_penulis`, `email`, `afiliasi`, `status`, `dokumen`) VALUES
(13, 99, 'yoga', 30, 'Oktario, Adi RIsmawan, Miftahul Rohim, Joko', 'oktario@gmail.com', 'ITERA', '', '3aeabf84c90a7966420a8a3467d67301.pdf'),
(15, 101, 'yoga', 31, 'Oktario, Andi', 'andi@gmal.com', 'ITERA', 'Sudah Terupload', 'fa52c225c798319a02631c70fab0a668.pdf'),
(16, 102, 'yoga', 32, 'Yoga Dwi Septana', 'yoga@gmail.com', 'ITERA', 'Sudah Terupload', 'b2348924d70581c5525552be456dd407.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_bidang`
--

CREATE TABLE `sub_bidang` (
  `id_subbidang` int(11) NOT NULL,
  `nama_subbidang` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_bidang`
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
(10, 'Smart and Green Infstructurera'),
(34, 'Lingkungan'),
(35, 'Keamanan'),
(36, 'Kehutanan'),
(37, 'Ekonomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `id_peran` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `pass`, `id_peran`) VALUES
('haha', 'e9f5713dec55d727bb35392cec6190ce', 3),
('hoh', '614b7df69165603557df83f9af9dc02a', 2),
('yoga', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `bid_subbid`
--
ALTER TABLE `bid_subbid`
  ADD PRIMARY KEY (`id_bid_subbid`),
  ADD KEY `fk_bidang` (`id_bidang`),
  ADD KEY `fk_subbidang` (`id_subbidang`);

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
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jurnal` (`id_jurnal`),
  ADD KEY `fk_bid_subbid` (`id_bid_subbid`);

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
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `bid_subbid`
--
ALTER TABLE `bid_subbid`
  MODIFY `id_bid_subbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `pusat_data`
--
ALTER TABLE `pusat_data`
  MODIFY `id_pusat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sub_bidang`
--
ALTER TABLE `sub_bidang`
  MODIFY `id_subbidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bid_subbid`
--
ALTER TABLE `bid_subbid`
  ADD CONSTRAINT `fk_bidang` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id_bidang`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_subbidang` FOREIGN KEY (`id_subbidang`) REFERENCES `sub_bidang` (`id_subbidang`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pusat_data`
--
ALTER TABLE `pusat_data`
  ADD CONSTRAINT `fk_bid_subbid` FOREIGN KEY (`id_bid_subbid`) REFERENCES `bid_subbid` (`id_bid_subbid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pusat_data_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pusat_data_ibfk_5` FOREIGN KEY (`id_jurnal`) REFERENCES `jurnal` (`id_jurnal`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_peran`) REFERENCES `peran` (`id_peran`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
