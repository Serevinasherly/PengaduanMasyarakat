-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 03:57 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pm`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `basmallah`
--
CREATE TABLE `basmallah` (
`id_tanggapan` int(11)
,`id_pengaduan` int(11)
,`tgl_pengaduan` date
,`nik` char(16)
,`nama` varchar(35)
,`alamat` varchar(50)
,`judul` varchar(50)
,`isi_laporan` text
,`foto` varchar(225)
,`status` enum('menunggu','proses','selesai','')
,`tgl_tanggapan` date
,`tanggapan` text
,`id_petugas` int(11)
,`nama_petugas` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `masyarakat`
--
CREATE TABLE `masyarakat` (
`id_pengaduan` int(11)
,`tgl_pengaduan` date
,`nik` char(16)
,`nama` varchar(35)
,`alamat` varchar(50)
,`judul` varchar(50)
,`isi_laporan` text
,`foto` varchar(225)
,`status` enum('menunggu','proses','selesai','')
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `petugas`
--
CREATE TABLE `petugas` (
`id_tanggapan` int(11)
,`tgl_tanggapan` date
,`tanggapan` text
,`id_petugas` int(11)
,`nama_petugas` varchar(25)
);

-- --------------------------------------------------------

--
-- Table structure for table `tb_masyarakat`
--

CREATE TABLE `tb_masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_masyarakat`
--

INSERT INTO `tb_masyarakat` (`nik`, `nama`, `username`, `password`, `telp`, `alamat`) VALUES
('087635347', 'salsa', 'bila', '0143c1e8e97da861c623ff508a441c54', '08976543456', 'jeddah'),
('098738973', ' aknesya lika diana', 'aknesya', 'ee0bc1d951eac32aa8e73b3e80d71842', '987658', ' jatim'),
('098786', 'rasyad sagraha prawiradinata', 'rasyad1', 'cd6121d51da5b4b4728a1c1665deb5dd', '098767564676', 'planet'),
('567899', 'heti irawati', 'heti', '91e40e3e0f48f78ceb1207e34f82ddfe', '086754168', 'bogor selatan'),
('8678567', '   sirfi sarifah sari', 'sirfi', 'd25f28b37f19b90b34bd23c912609d4b', '   999098', '   kepooamat'),
('8888888888871', 'serevina', 'srvinaa', '0c74c581ca274ef9e34143ec85f5ab04', '91789689', ''),
('9876', ' serevina', 'serevina01', 'b722dc84e45d035d1712582e6b30179e', '08765', 'ciawi'),
('9989378', ' refi okt', 'refii', 'c05011f8c3683bfe51e9270cce88f98f', '098787866', ' kota bogor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaduan`
--

CREATE TABLE `tb_pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL DEFAULT '',
  `judul` varchar(50) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `status` enum('menunggu','proses','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengaduan`
--

INSERT INTO `tb_pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `judul`, `isi_laporan`, `foto`, `status`) VALUES
(13, '2020-05-05', '8888888888871', 'ini ada hujan', '   kenapa aku bingung yah atuhda atuda apa gtu pokoknya begono', 'pengaduan-200505-19ab7b42f4.png', 'selesai'),
(18, '2020-05-15', '9989378', 'mati lampu', '   di bogor', 'pengaduan-200515-f6556dfe94.jpg', 'selesai'),
(20, '2020-06-05', '9989378', 'indihome eror', 'modem gimana?', 'pengaduan-200605-f4be00279e.jpg', 'menunggu'),
(21, '2020-06-08', '9876', 'mati lampu di bogor jabar', '   di seluruh bogor mati lampu', 'pengaduan-200608-88e1ce84f9.jpg', 'selesai'),
(23, '2020-06-21', '567899', 'sembako', 'sembako belum turun', 'pengaduan-200621-54f9dcaffe.PNG', 'selesai'),
(24, '2020-06-22', '567899', 'macet', '   dijalan raya bogor', 'pengaduan-200622-23af4b45f1.PNG', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('Admin','Petugas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'vina', 'vina', '4b6f3a28abb4d210316d6f96ff5330c7', '08576985847', 'Admin'),
(5, 'sherly', 'sherly', '1c8b06358890d6c512859b21557315b4', '08576985847', 'Admin'),
(7, 'aku namanya', 'aku', '89ccfac87d8d06db06bf3211cb2d69ed', '  08976', 'Petugas'),
(8, 'kaila nadira', 'kailanadira', '48278692e5216a64a275f331a350eb74', '0089048', 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanggapan`
--

CREATE TABLE `tb_tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tanggapan`
--

INSERT INTO `tb_tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(3, 18, '2020-05-15', 'kami akan segera tangani harap tunggu', 7),
(4, 13, '2020-05-25', 'sedia payung sebelum hujan', 7),
(5, 21, '2020-06-08', 'kami akan segera menangani nya harap tunggu himbauan kami', 7),
(7, 23, '2020-06-21', 'rt dan rw akan segera turun', 8);

-- --------------------------------------------------------

--
-- Structure for view `basmallah`
--
DROP TABLE IF EXISTS `basmallah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `basmallah`  AS  select `tb_tanggapan`.`id_tanggapan` AS `id_tanggapan`,`tb_tanggapan`.`id_pengaduan` AS `id_pengaduan`,`tb_pengaduan`.`tgl_pengaduan` AS `tgl_pengaduan`,`tb_pengaduan`.`nik` AS `nik`,`tb_masyarakat`.`nama` AS `nama`,`tb_masyarakat`.`alamat` AS `alamat`,`tb_pengaduan`.`judul` AS `judul`,`tb_pengaduan`.`isi_laporan` AS `isi_laporan`,`tb_pengaduan`.`foto` AS `foto`,`tb_pengaduan`.`status` AS `status`,`tb_tanggapan`.`tgl_tanggapan` AS `tgl_tanggapan`,`tb_tanggapan`.`tanggapan` AS `tanggapan`,`tb_tanggapan`.`id_petugas` AS `id_petugas`,`tb_petugas`.`nama_petugas` AS `nama_petugas` from (((`tb_tanggapan` join `tb_pengaduan` on((`tb_tanggapan`.`id_pengaduan` = `tb_pengaduan`.`id_pengaduan`))) join `tb_masyarakat` on((`tb_pengaduan`.`nik` = `tb_masyarakat`.`nik`))) join `tb_petugas` on((`tb_tanggapan`.`id_petugas` = `tb_petugas`.`id_petugas`))) ;

-- --------------------------------------------------------

--
-- Structure for view `masyarakat`
--
DROP TABLE IF EXISTS `masyarakat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `masyarakat`  AS  select `tb_pengaduan`.`id_pengaduan` AS `id_pengaduan`,`tb_pengaduan`.`tgl_pengaduan` AS `tgl_pengaduan`,`tb_pengaduan`.`nik` AS `nik`,`tb_masyarakat`.`nama` AS `nama`,`tb_masyarakat`.`alamat` AS `alamat`,`tb_pengaduan`.`judul` AS `judul`,`tb_pengaduan`.`isi_laporan` AS `isi_laporan`,`tb_pengaduan`.`foto` AS `foto`,`tb_pengaduan`.`status` AS `status` from (`tb_pengaduan` join `tb_masyarakat` on((`tb_pengaduan`.`nik` = `tb_masyarakat`.`nik`))) ;

-- --------------------------------------------------------

--
-- Structure for view `petugas`
--
DROP TABLE IF EXISTS `petugas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `petugas`  AS  select `tb_tanggapan`.`id_tanggapan` AS `id_tanggapan`,`tb_tanggapan`.`tgl_tanggapan` AS `tgl_tanggapan`,`tb_tanggapan`.`tanggapan` AS `tanggapan`,`tb_tanggapan`.`id_petugas` AS `id_petugas`,`tb_petugas`.`nama_petugas` AS `nama_petugas` from (`tb_tanggapan` join `tb_petugas` on((`tb_tanggapan`.`id_petugas` = `tb_petugas`.`id_petugas`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_pengaduan` (`id_pengaduan`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD CONSTRAINT `tb_pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_masyarakat` (`nik`);

--
-- Constraints for table `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  ADD CONSTRAINT `tb_tanggapan_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`),
  ADD CONSTRAINT `tb_tanggapan_ibfk_2` FOREIGN KEY (`id_pengaduan`) REFERENCES `tb_pengaduan` (`id_pengaduan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
