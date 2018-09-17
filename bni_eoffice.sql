-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 01:25 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bni_eoffice`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_feed`
--

CREATE TABLE `comment_feed` (
  `no` int(10) NOT NULL,
  `no_feed` int(10) NOT NULL,
  `text` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_feed`
--

INSERT INTO `comment_feed` (`no`, `no_feed`, `text`, `username`, `date`) VALUES
(1, 2, '0', 'k055292', '2018-09-13 02:32:15'),
(2, 2, '123123', 'k055292', '2018-09-13 03:32:52'),
(3, 2, '1123123', 'k055292', '2018-09-13 03:34:10'),
(4, 2, '123123', 'k055292', '2018-09-13 03:35:57'),
(5, 2, '0', 'k055292', '2018-09-13 03:36:12'),
(6, 1, 'AING GANTENG', 'k055292', '2018-09-13 03:37:35'),
(7, 1, 'ANJING BAGONG SETAN', 'k055292', '2018-09-13 03:39:04'),
(8, 1, 'TAI BAGONG', 'k055292', '2018-09-13 03:39:08'),
(9, 3, 'AING GANTENG', 'k055292', '2018-09-13 04:02:49'),
(10, 3, 'haseum', 'k055292', '2018-09-13 04:02:57'),
(11, 3, 'koaskoakso', 'k055292', '2018-09-13 04:03:21'),
(12, 8, 'tai ah', 'k055292', '2018-09-13 04:03:49'),
(13, 9, 'tai anjing', 'k055292', '2018-09-13 04:06:15'),
(14, 9, 'jancuk', 'k055292', '2018-09-13 04:06:21'),
(15, 9, 'AING GANTENG', 'k055292', '2018-09-13 04:10:37'),
(16, 11, 'AING GANTENG', 'k055292', '2018-09-16 20:38:50');

-- --------------------------------------------------------

--
-- Table structure for table `nama_unit`
--

CREATE TABLE `nama_unit` (
  `kd_unit` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nama_unit`
--

INSERT INTO `nama_unit` (`kd_unit`, `nama`) VALUES
(2, 'PNC'),
(3, 'UMC'),
(4, 'PMC FUNDING'),
(5, 'PMC CR'),
(6, 'PMC BB'),
(7, 'PMC KUR TANI'),
(8, 'PMC ABB'),
(9, 'ADC'),
(10, 'KCP CIKAJANG'),
(11, 'KCP PAMEUNGPEK'),
(12, 'KCP LIMBANGAN'),
(13, 'KK KADUNGORA'),
(14, 'KK CILEDUG'),
(15, 'OUTSOURCE');

-- --------------------------------------------------------

--
-- Table structure for table `postfeed`
--

CREATE TABLE `postfeed` (
  `no` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postfeed`
--

INSERT INTO `postfeed` (`no`, `username`, `text`, `date`, `status_delete`) VALUES
(1, 'k055292', '123123123', '2018-09-17 02:27:24', 1),
(2, 'k055292', '213123', '2018-09-13 08:37:01', 1),
(3, 'k055292', 'KAPAN BISA KAYA', '2018-09-17 02:27:20', 1),
(4, 'k055292', 'KAPAN BISA KAYA', '2018-09-13 08:56:58', 1),
(5, 'k055292', 'HAYANG KAWIN', '2018-09-13 08:57:56', 1),
(6, 'k055292', 'haem', '2018-09-13 09:03:41', 1),
(7, 'k055292', 'haem', '2018-09-13 09:03:43', 1),
(8, 'k055292', 'haem', '2018-09-13 09:05:21', 1),
(9, 'k055292', 'hapeuk', '2018-09-17 02:27:18', 1),
(10, 'lucky', 'ah tai anjing \r\nedan haeums half \r\nlanhaj hsjjsjsb njaiissbb bahjajabbd bajuaisbbbs \r\nhahuaiabbbs \r\nbahusjsja', '2018-09-17 02:32:10', 0),
(11, 'k055292', 'AH CAU', '2018-09-17 02:34:26', 1),
(12, 'k055292', '', '2018-09-17 02:23:37', 1),
(13, 'k055292', '', '2018-09-16 21:33:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resume_kunjungan`
--

CREATE TABLE `resume_kunjungan` (
  `no` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `resume` text NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_kunjungan`
--

INSERT INTO `resume_kunjungan` (`no`, `tanggal`, `nama_instansi`, `pic`, `no_hp`, `resume`, `username`) VALUES
(1, '2018-09-10', 'PENGGADAIAN', 'DENI', 2147483647, 'Dari Hasil kunjungan didapati bahwa PENGGADAIAN memiliki PAYROLL yang dibayarkan di BNI dan BRI', 'K055292'),
(2, '2018-09-10', '1233333', '122', 2147483647, 'Dari Hasil kunjungan didapati bahwa PENGGADAIAN memiliki PAYROLL yang dibayarkan di BNI dan BRI\r\n\r\n\r\n\r\nasdasdasd\r\nadsasdasdas\r\nASDasdasdas', 'K055292'),
(3, '2018-09-10', '12222222', '1233', 3333, 'AA', 'K055292'),
(4, '1970-01-01', '', '', 0, 'AA', 'K055292'),
(5, '2018-09-10', '13', 'ASDASD', 123123, '21312312', 'K055292');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `no_surat` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kd_unit` int(10) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `hal` text NOT NULL,
  `output` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`no_surat`, `tanggal`, `kd_unit`, `tujuan`, `hal`, `output`, `username`, `timestamp`, `lampiran`) VALUES
(1, '2018-09-05', 3, 'PCR', 'PENGANTAR REIMBURSE JAL', 'GRT/3/1/2018', 'k055292', '2018-09-06 10:32:45', ''),
(2, '2018-09-06', 3, 'PCR', 'Pengantar Surat Reimburse HUT RI ke 25', 'GRT/3/2/2018', 'k055292', '2018-09-07 09:22:41', '1.pdf'),
(3, '2018-09-07', 2, 'WBN', 'DATA BUREKOL', 'GRT/2/3/2018', 'k055292', '2018-09-07 04:00:55', ''),
(4, '2018-09-06', 7, 'WBN', 'ASDASDASDASDAS', 'GRT/7/4/2018', 'k055292', '2018-09-07 04:03:06', ''),
(5, '2018-09-06', 5, 'WBN', 'ASDASDASDASDAS', 'GRT/5/5/2018', 'k055292', '2018-09-07 04:06:48', ''),
(6, '2018-09-08', 3, 'QWA', '11111111111111111123', 'GRT/3/6/2018', 'k055292', '2018-09-07 04:08:32', ''),
(7, '2018-09-08', 3, 'QWA', '11111111111111111123', 'GRT/3/7/2018', 'k055292', '2018-09-07 04:09:02', ''),
(8, '2018-09-08', 3, 'QWA', '11111111111111111123', 'GRT/3/8/2018', 'k055292', '2018-09-07 04:09:24', ''),
(9, '2018-09-08', 3, 'QWA', '11111111111111111123', 'GRT/3/9/2018', 'k055292', '2018-09-07 04:09:54', ''),
(10, '2018-09-13', 3, 'asdasd', '123123', 'GRT/3/10/2018', 'k055292', '2018-09-13 02:59:27', ''),
(11, '2018-09-17', 4, 'ASDASD', '123123', 'GRT/4/11/2018', 'k055292', '2018-09-17 03:17:16', ''),
(12, '2018-09-17', 4, 'ASDASD', '123123', 'GRT/4/12/2018', 'k055292', '2018-09-17 03:17:25', ''),
(13, '2018-09-17', 2, 'ASDASDASDAS', '12312312312', 'GRT/2/13/2018', 'k055292', '2018-09-17 03:48:58', ''),
(14, '2018-09-17', 9, '123123123', 'ASDASDASDASDASDASDASDASDASD', 'GRT/9/14/2018', 'k055292', '2018-09-17 03:50:07', '');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar_rahasia`
--

CREATE TABLE `surat_keluar_rahasia` (
  `no` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kd_unit` int(10) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `hal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar_rahasia`
--

INSERT INTO `surat_keluar_rahasia` (`no`, `tanggal`, `kd_unit`, `tujuan`, `hal`) VALUES
(1, '2018-08-16', 2, 'sdasdas', '12312312');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `no` int(10) NOT NULL,
  `no_task` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deadline` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`no`, `no_task`, `username`, `judul`, `deskripsi`, `status`, `deadline`, `created`, `last_update`) VALUES
(1, 1, 'k055292', 'A', 'A', 0, '2018-09-17', '2018-09-17 05:22:48', '2018-09-17 05:22:48'),
(2, 2, 'k055292', 'A', 'A', 0, '2018-09-17', '2018-09-17 05:23:36', '2018-09-17 05:23:36'),
(3, 3, 'k055292', 'Mengerjakan PENYELESAIAN PERSEKOT', 'KERJAKAN PENYELESAIAN PERSEKOT ULANG TAHUN JANUARI 2018', 0, '2018-09-20', '2018-09-17 06:09:30', '2018-09-17 06:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama`, `email`, `status`, `last_login`) VALUES
('k055292', '$2y$10$M2UMKLM0OkFwQ7t75MEYSO5LqJtCq5hq2H/xBF0zic.WF7JIy4udi', 'Lucky Anggara', 'anggara.lucky1992@Gmail.com', 0, '2018-09-17 11:23:43'),
('lucky', '$2y$10$Izbv9ygA9NRTF3fubjd0b.WcQpIBg44x3qjvT1znvxR21.SF0RbZi', 'Desi Evilia Agustikarina', 'anggara.lucky1992@Gmail.com', 0, '2018-09-17 06:59:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_feed`
--
ALTER TABLE `comment_feed`
  ADD PRIMARY KEY (`no`),
  ADD KEY `no_feed` (`no_feed`,`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `nama_unit`
--
ALTER TABLE `nama_unit`
  ADD PRIMARY KEY (`kd_unit`);

--
-- Indexes for table `postfeed`
--
ALTER TABLE `postfeed`
  ADD PRIMARY KEY (`no`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `resume_kunjungan`
--
ALTER TABLE `resume_kunjungan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `unit` (`kd_unit`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `surat_keluar_rahasia`
--
ALTER TABLE `surat_keluar_rahasia`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `kd_unit` (`kd_unit`),
  ADD UNIQUE KEY `kd_unit_2` (`kd_unit`),
  ADD KEY `kd_unit_3` (`kd_unit`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`no`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nama_unit`
--
ALTER TABLE `nama_unit`
  MODIFY `kd_unit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `surat_keluar_rahasia`
--
ALTER TABLE `surat_keluar_rahasia`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment_feed`
--
ALTER TABLE `comment_feed`
  ADD CONSTRAINT `comment_feed_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `comment_feed_ibfk_2` FOREIGN KEY (`no_feed`) REFERENCES `postfeed` (`no`);

--
-- Constraints for table `postfeed`
--
ALTER TABLE `postfeed`
  ADD CONSTRAINT `postfeed_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD CONSTRAINT `surat_keluar_ibfk_1` FOREIGN KEY (`kd_unit`) REFERENCES `nama_unit` (`kd_unit`),
  ADD CONSTRAINT `surat_keluar_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `surat_keluar_rahasia`
--
ALTER TABLE `surat_keluar_rahasia`
  ADD CONSTRAINT `surat_keluar_rahasia_ibfk_1` FOREIGN KEY (`kd_unit`) REFERENCES `nama_unit` (`kd_unit`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
