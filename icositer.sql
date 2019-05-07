-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 Mei 2019 pada 12.07
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
(21, 'sbsn');

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
(34, 1, 39);

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
(108, 'Ini Jdullllll'),
(109, 'asd');

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
(29, '2019-05-07', 'yoga', 109, 34, 'asdas', 'asdasd', 'as', 'asd', '36f6c809103f74b338120ed68804ac7e.pdf');

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
(39, 'Contoh');

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
('yoga', '21232f297a57a5a743894a0e4a801fc3', 1),
('yoga', '5aee9dbd2a188839105073571bee1b1f', 2),
('yoga', 'de3709b8e6f81a4ef5a858b7a2d28883', 3);

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
  MODIFY `id_bid_subbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `pusat_data`
--
ALTER TABLE `pusat_data`
  MODIFY `id_pusat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sub_bidang`
--
ALTER TABLE `sub_bidang`
  MODIFY `id_subbidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
