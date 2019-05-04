-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2019 pada 19.02
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
(32, 11, 37),
(33, 21, 38);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `tgl_galeri` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `tgl_galeri`, `keterangan`, `gambar`, `id_user`) VALUES
(3, '2019-05-08', 'Pembagian Hadiah', 'c400d8bbbccbe48f6346c261394207f8.png', 'yoga');

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
(98, 'Perubahan Lingkungan Hidup'),
(99, 'Keamanan Data'),
(100, 'Penanaman Kembali'),
(101, 'Dampak Lingkungan'),
(102, 'Perubahan Ekonomi'),
(103, 'Orang- Orang'),
(104, 'Ini Judul Jurnal'),
(105, 'Perubahan Bidang'),
(106, 'ASDD'),
(107, 'Kehutanan Hujan');

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
  `tgl_input` date DEFAULT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_jurnal` int(10) NOT NULL,
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

INSERT INTO `pusat_data` (`id_pusat`, `tgl_input`, `id_user`, `id_jurnal`, `id_bid_subbid`, `nama_penulis`, `email`, `afiliasi`, `status`, `dokumen`) VALUES
(15, '2019-05-01', 'yoga', 101, 31, 'ASEEQQ', 'andi@gmal.comm', 'ITERA', 'Sudah Terupload', ''),
(16, '2019-05-01', 'yoga', 102, 30, 'Yoga Dwi Septana, Alafadi Pratama', 'yoga@gmail.com', 'ITERA', 'Sudah Terupload', 'b2348924d70581c5525552be456dd407.pdf'),
(17, '2019-05-01', 'yoga', 103, 33, 'Joko, Adi', 'adi@gmail.com', 'ITERA', 'Pilihan', '7ef40d9e353b4bb34cf58544ca60e1cb.pdf'),
(18, '2019-05-01', 'yoga', 104, 33, 'Ini Nama, Ini Juga', 'ini@email.com', 'INI', 'Ini Status', 'b685b1378a22d506db15ca5b1c641d55.pdf'),
(19, '2019-05-01', 'yoga', 105, 33, 'Orang', 'orang@gmail.com', 'ITERA', 'Masih Jurnal', 'ee267297895d67416961d87147d28d4c.pdf'),
(20, '2020-09-01', 'yoga', 2, 29, 'Yoga', 'yoga@gmail.com', 'ITERA', 'Mahasiswa', 'qweqweqdasdqwdqw.pdf'),
(21, '2021-01-09', 'yoga', 6, 33, 'Kaka', 'kaka@gmail.com', 'ITERA', 'Jarang', 'asdasl;qhwleknqwe.pdf'),
(22, '2019-05-09', 'yoga', 3, 30, 'Golang', 'golang@gmail.com', 'ITERA', 'Sendiri', 'alskfjalkfadfdf.pdf'),
(23, '2019-05-01', 'yoga', 1, 30, 'Dea', 'dea@gmail.com', 'ITERA', 'Sendiri', 'laksflakjfsdf.pdf'),
(24, '2019-05-08', 'yoga', 100, 30, 'Kokok', 'koko@gmail.com', 'ITB', 'Terupload', 'lkasjdlkajsldkjasd.php'),
(25, '2019-05-06', 'yoga', 98, 32, 'Jaim', 'jaim@gmail.com', 'ITS', 'Rame', 'asldalsjdasd.pdf'),
(26, '2019-05-02', 'yoga', 106, 33, 'JJA', 'jja@gmail.com', 'ITB', 'Sendiri', '0322ddd797a93e4a7f1d1bc08141d397.pdf'),
(27, '2019-05-04', 'yoga', 107, 31, 'Andi, Dono', 'dono@gmail.com', 'ITERA', 'Sudah Terupload', '22bd4c1f08d2dffc1a68b5ba31be2bb3.pdf');

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
(37, 'Ekonomi'),
(38, 'Ini Bidang');

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
('yoga', '21232f297a57a5a743894a0e4a801fc3', 1),
('yoga', '5aee9dbd2a188839105073571bee1b1f', 2);

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
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `fk_userk` (`id_user`);

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
  ADD KEY `id_jurnal` (`id_jurnal`),
  ADD KEY `fk_bid_subbid` (`id_bid_subbid`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indexes for table `sub_bidang`
--
ALTER TABLE `sub_bidang`
  ADD PRIMARY KEY (`id_subbidang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`,`id_peran`),
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
  MODIFY `id_bid_subbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `pusat_data`
--
ALTER TABLE `pusat_data`
  MODIFY `id_pusat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sub_bidang`
--
ALTER TABLE `sub_bidang`
  MODIFY `id_subbidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `fk_userk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pusat_data`
--
ALTER TABLE `pusat_data`
  ADD CONSTRAINT `fk_bid_subbid` FOREIGN KEY (`id_bid_subbid`) REFERENCES `bid_subbid` (`id_bid_subbid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE,
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
