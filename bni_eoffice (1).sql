-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 01:14 PM
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
(1, 'PUT'),
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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postfeed`
--

INSERT INTO `postfeed` (`no`, `username`, `text`, `date`) VALUES
(1, 'lucky', 'Myfirst POST', '2018-09-11 17:00:00'),
(2, 'k055292', 'BALSKDLAK\r\naBLKALKB\r\nABLKALKSKBLAKSBL\r\nALSKLKLAS', '2018-09-11 17:00:00'),
(3, 'k055292', '11', '0000-00-00 00:00:00'),
(4, 'k055292', '1314', '0000-00-00 00:00:00'),
(5, 'lucky', 'Risma bau', '0000-00-00 00:00:00'),
(6, 'k055292', 'RISMA BAU PISAN', '0000-00-00 00:00:00'),
(7, 'k055292', '123123', '0000-00-00 00:00:00');

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
(9, '2018-09-08', 3, 'QWA', '11111111111111111123', 'GRT/3/9/2018', 'k055292', '2018-09-07 04:09:54', '');

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
  `no` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `last_added` date NOT NULL,
  `deadline` date NOT NULL,
  `status` int(1) NOT NULL,
  `last_changed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('k055292', '$2y$10$M2UMKLM0OkFwQ7t75MEYSO5LqJtCq5hq2H/xBF0zic.WF7JIy4udi', 'Lucky Anggara', 'anggara.lucky1992@Gmail.com', 0, '2018-09-12 11:13:50'),
('lucky', '$2y$10$Izbv9ygA9NRTF3fubjd0b.WcQpIBg44x3qjvT1znvxR21.SF0RbZi', 'Desi Evilia Agustikarina', 'anggara.lucky1992@Gmail.com', 1, '2018-09-12 06:09:23');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`no`);

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
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
