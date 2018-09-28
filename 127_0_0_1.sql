-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 12:30 PM
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
CREATE DATABASE IF NOT EXISTS `bni_eoffice` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bni_eoffice`;

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
(16, 11, 'AING GANTENG', 'k055292', '2018-09-16 20:38:50'),
(17, 1, '123123', 'k055292', '2018-09-17 21:52:38'),
(18, 1, 'ANJING', 'k055292', '2018-09-17 21:52:54'),
(19, 1, '123', 'k055292', '2018-09-17 21:53:15'),
(20, 1, '12312312312', 'k055292', '2018-09-17 21:56:35'),
(21, 12, 'tai', 'k055292', '2018-09-18 21:06:00'),
(22, 16, '', 'k055292', '2018-09-19 04:51:11'),
(23, 16, '', 'k055292', '2018-09-19 04:51:42'),
(24, 16, '', 'k055292', '2018-09-19 05:08:18'),
(25, 16, '', 'k055292', '2018-09-19 05:08:51'),
(26, 16, '', 'k055292', '2018-09-19 05:09:04'),
(27, 16, '', 'k055292', '2018-09-19 05:57:38'),
(28, 15, '', 'k055292', '2018-09-19 06:05:25'),
(29, 16, '', 'lucky', '2018-09-19 07:00:39'),
(30, 16, '', 'lucky', '2018-09-19 07:01:20'),
(31, 16, '16=123123', 'lucky', '2018-09-19 07:12:09'),
(32, 16, '16=123123', 'lucky', '2018-09-19 07:13:01'),
(33, 16, '16=ah+cau', 'lucky', '2018-09-19 07:13:32'),
(34, 15, '15=123123', 'lucky', '2018-09-19 07:14:04'),
(35, 15, '15=edan+bagong', 'lucky', '2018-09-19 07:14:09'),
(36, 14, '14=cau+lu', 'lucky', '2018-09-19 07:14:12'),
(37, 16, '', 'lucky', '2018-09-19 07:14:50'),
(38, 12, '', 'k055292', '2018-09-19 21:44:57'),
(39, 16, '', 'k055292', '2018-09-24 20:07:08');

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
(1, 'k055292', '123123123', '2018-09-18 01:31:28', 0),
(2, 'k055292', '213123', '2018-09-19 03:10:42', 0),
(3, 'k055292', 'KAPAN BISA KAYA', '2018-09-19 03:10:45', 0),
(4, 'k055292', 'KAPAN BISA KAYA', '2018-09-13 08:56:58', 1),
(5, 'k055292', 'HAYANG KAWIN', '2018-09-13 08:57:56', 1),
(6, 'k055292', 'haem', '2018-09-19 03:12:35', 0),
(7, 'k055292', 'haem', '2018-09-19 03:10:49', 0),
(8, 'k055292', 'haem', '2018-09-19 03:12:32', 0),
(9, 'k055292', 'hapeuk', '2018-09-19 03:12:29', 0),
(10, 'lucky', 'ah tai anjing \r\nedan haeums half \r\nlanhaj hsjjsjsb njaiissbb bahjajabbd bajuaisbbbs \r\nhahuaiabbbs \r\nbahusjsja', '2018-09-18 04:40:20', 1),
(11, 'k055292', 'AH CAU', '2018-09-17 02:34:26', 1),
(12, 'k055292', '1<br />\r\n', '2018-09-17 23:44:24', 0),
(13, 'k055292', 'test 1', '2018-09-17 23:44:37', 0),
(14, 'k055292', 'Pengen Pulang Cepet', '2018-09-20 02:33:30', 0),
(15, 'k055292', 'asdasd', '2018-09-20 02:32:57', 1),
(16, 'lucky', 'asdasdasd', '2018-09-18 21:04:28', 0),
(17, 'k055292', 'HAPEUK', '2018-09-20 05:14:50', 0),
(18, 'k055292', 'TAI', '2018-09-24 20:07:01', 0),
(19, 'k055292', 'TAI', '2018-09-27 02:38:43', 1),
(20, 'k055292', 'CAU', '2018-09-27 02:38:40', 1);

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
(3, '2018-09-07', 2, 'WBN', 'DATA BUREKOL', 'GRT/2/3/2018', 'k055292', '2018-09-25 01:28:56', 'GRT-2-3-2018-DATA BUREKOL.pdf'),
(4, '2018-09-06', 7, 'WBN', 'ASDASDASDASDAS', 'GRT/7/4/2018', 'k055292', '2018-09-07 04:03:06', ''),
(5, '2018-09-06', 5, 'WBN', 'ASDASDASDASDAS', 'GRT/5/5/2018', 'k055292', '2018-09-07 04:06:48', ''),
(6, '2018-09-08', 3, 'QWA', '11111111111111111123', 'GRT/3/6/2018', 'k055292', '2018-09-07 04:08:32', ''),
(7, '2018-09-08', 3, 'QWA', '11111111111111111123', 'GRT/3/7/2018', 'k055292', '2018-09-07 04:09:02', ''),
(8, '2018-09-08', 3, 'QWA', '11111111111111111123', 'GRT/3/8/2018', 'k055292', '2018-09-21 08:05:05', 'GRT-3-8-2018.jpg'),
(9, '2018-09-08', 3, 'QWA', '11111111111111111123', 'GRT/3/9/2018', 'k055292', '2018-09-25 07:39:51', 'GRT-3-9-2018-11111111111111111123.pdf'),
(10, '2018-09-13', 3, 'asdasd', '123123', 'GRT/3/10/2018', 'k055292', '2018-09-21 08:07:57', 'GRT-3-10-2018.zip'),
(11, '2018-09-17', 4, 'ASDASD', '123123', 'GRT/4/11/2018', 'k055292', '2018-09-21 08:05:47', 'GRT-4-11-2018.jpg'),
(12, '2018-09-17', 4, 'ASDASD', '123123', 'GRT/4/12/2018', 'k055292', '2018-09-21 07:56:20', 'GRT-4-12-2018.pdf'),
(13, '2018-09-17', 2, 'ASDASDASDAS', '12312312312', 'GRT/2/13/2018', 'k055292', '2018-09-21 08:03:27', 'GRT-2-13-2018.pdf'),
(14, '2018-09-17', 9, '123123123', 'ASDASDASDASDASDASDASDASDASD', 'GRT/9/14/2018', 'k055292', '2018-09-21 08:01:41', 'GRT-9-14-2018.pdf'),
(15, '2018-09-18', 8, 'DINSOS', 'DATA AGEN', 'GRT/8/15/2018', 'lucky', '2018-09-21 07:59:18', 'GRT-8-15-2018.pdf'),
(16, '2018-09-20', 2, 'UNIT UMC', 'PERMINTAAN PEGAWAI BARU', 'GRT/2/16/2018', 'k055292', '2018-09-26 08:27:06', 'GRT-2-16-2018-PERMINTAAN PEGAWAI BARU.jpg'),
(17, '2018-09-20', 3, '213', '12', 'GRT/3/17/2018', 'k055292', '2018-09-25 04:31:09', 'GRT-3-17-2018-12.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar_rahasia`
--

CREATE TABLE `surat_keluar_rahasia` (
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
-- Dumping data for table `surat_keluar_rahasia`
--

INSERT INTO `surat_keluar_rahasia` (`no_surat`, `tanggal`, `kd_unit`, `tujuan`, `hal`, `output`, `username`, `timestamp`, `lampiran`) VALUES
(1, '2018-09-25', 3, 'UNIT ADC', 'MEMO DISPOSISI', 'GRT/3/1/2018/R', 'k055292', '2018-09-25 08:05:32', 'GRT-3-1-2018-MEMO DISPOSISI.pdf'),
(2, '2018-09-25', 4, '213123', '123123', 'GRT/4/2/2018/R', 'k055292', '2018-09-25 08:25:56', ''),
(3, '2018-09-25', 4, '213', '11', 'GRT/4/3/2018/R', 'k055292', '2018-09-25 08:27:23', ''),
(4, '2018-09-25', 4, '123', '123123', 'GRT/4/4/2018/R', 'k055292', '2018-09-25 08:27:49', 'GRT-4-4-2018-123123.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `no_register` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `hal` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `detail_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `disposisi` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`no_register`, `tanggal`, `no_surat`, `pengirim`, `hal`, `username`, `detail_date`, `disposisi`, `lampiran`) VALUES
(1, '2018-09-27', '1', 'JAL', 'REIMBURSEMENT', 'lucky', '2018-09-26 23:18:14', 'pmc,umc,pbn,pbp', ''),
(2, '2018-09-28', '12', '22', 'asdasd', 'k055292', '0000-00-00 00:00:00', '', ''),
(3, '2018-09-28', '12', '11', '1111', 'k055292', '0000-00-00 00:00:00', '', ''),
(4, '2018-09-28', '12', 'TAIIII', '123iop12jpejpojpojf-0j2 1pajspojaspo j-02 j1pojrp opajsfp0jPO POAJSPDOJASPODJQ-0W 1P2OJ POJ ASODASDASD', 'k055292', '0000-00-00 00:00:00', '', ''),
(5, '2018-09-30', '2312312/DFHKSDJF/123123', 'SFASFASF', 'ASDASJDHOAHSDJAOI SDOASHDOIAHSODHAOIS DOAIHSDOIAHSD OAISDASDASDA', 'k055292', '0000-00-00 00:00:00', '', ''),
(6, '2018-09-28', '12312312', '3DSDASDA DSADASD', 'AS ASDASDASDASD ASD AS', 'k055292', '0000-00-00 00:00:00', '', ''),
(7, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(8, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(9, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(10, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(11, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(12, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(13, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(14, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(15, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(16, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(17, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(18, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(19, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(20, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(21, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(22, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(23, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(24, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(25, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(26, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(27, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(28, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(29, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(30, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(31, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(32, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(33, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(34, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(35, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(36, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(37, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(38, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(39, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(40, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(41, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(42, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(43, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(44, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(45, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(46, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(47, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(48, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(49, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(50, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(51, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(52, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(53, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(54, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(55, '0000-00-00', '1123123213', 'asdjasdjasdasd', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(56, '0000-00-00', '62', '62-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(57, '0000-00-00', '63', '63-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(58, '0000-00-00', '64', '64-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(59, '0000-00-00', '65', '65-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(60, '0000-00-00', '66', '66-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(61, '0000-00-00', '67', '67-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(62, '0000-00-00', '68', '68-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(63, '0000-00-00', '69', '69-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(64, '0000-00-00', '70', '70-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(65, '0000-00-00', '71', '71-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(66, '0000-00-00', '72', '72-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(67, '0000-00-00', '73', '73-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(68, '0000-00-00', '74', '74-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(69, '0000-00-00', '75', '75-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(70, '0000-00-00', '76', '76-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(71, '0000-00-00', '77', '77-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(72, '0000-00-00', '78', '78-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(73, '0000-00-00', '79', '79-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(74, '0000-00-00', '80', '80-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(75, '0000-00-00', '81', '81-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(76, '0000-00-00', '82', '82-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(77, '0000-00-00', '83', '83-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(78, '0000-00-00', '84', '84-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(79, '0000-00-00', '85', '85-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(80, '0000-00-00', '86', '86-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(81, '0000-00-00', '87', '87-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(82, '0000-00-00', '88', '88-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(83, '0000-00-00', '89', '89-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(84, '0000-00-00', '90', '90-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(85, '0000-00-00', '91', '91-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(86, '0000-00-00', '92', '92-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(87, '0000-00-00', '93', '93-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(88, '0000-00-00', '94', '94-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(89, '0000-00-00', '95', '95-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(90, '0000-00-00', '96', '96-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(91, '0000-00-00', '97', '97-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(92, '0000-00-00', '98', '98-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(93, '0000-00-00', '99', '99-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(94, '0000-00-00', '100', '100-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(95, '0000-00-00', '101', '101-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(96, '0000-00-00', '102', '102-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(97, '0000-00-00', '103', '103-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(98, '0000-00-00', '104', '104-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(99, '0000-00-00', '105', '105-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(100, '0000-00-00', '106', '106-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(101, '0000-00-00', '107', '107-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(102, '0000-00-00', '108', '108-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(103, '0000-00-00', '109', '109-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(104, '0000-00-00', '110', '110-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(105, '0000-00-00', '111', '111-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(106, '0000-00-00', '112', '112-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(107, '0000-00-00', '113', '113-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(108, '0000-00-00', '114', '114-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(109, '0000-00-00', '115', '115-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(110, '0000-00-00', '116', '116-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(111, '0000-00-00', '117', '117-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(112, '0000-00-00', '118', '118-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(113, '0000-00-00', '119', '119-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(114, '0000-00-00', '120', '120-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(115, '0000-00-00', '121', '121-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(116, '0000-00-00', '122', '122-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(117, '0000-00-00', '123', '123-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(118, '0000-00-00', '124', '124-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(119, '0000-00-00', '125', '125-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(120, '0000-00-00', '126', '126-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(121, '0000-00-00', '127', '127-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(122, '0000-00-00', '128', '128-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(123, '0000-00-00', '129', '129-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(124, '0000-00-00', '130', '130-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(125, '0000-00-00', '131', '131-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(126, '0000-00-00', '132', '132-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(127, '0000-00-00', '133', '133-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(128, '0000-00-00', '134', '134-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(129, '0000-00-00', '135', '135-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(130, '0000-00-00', '136', '136-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(131, '0000-00-00', '137', '137-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(132, '0000-00-00', '138', '138-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(133, '0000-00-00', '139', '139-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(134, '0000-00-00', '140', '140-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(135, '0000-00-00', '141', '141-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(136, '0000-00-00', '142', '142-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(137, '0000-00-00', '143', '143-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(138, '0000-00-00', '144', '144-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(139, '0000-00-00', '145', '145-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(140, '0000-00-00', '146', '146-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(141, '0000-00-00', '147', '147-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(142, '0000-00-00', '148', '148-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(143, '0000-00-00', '149', '149-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(144, '0000-00-00', '150', '150-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(145, '0000-00-00', '151', '151-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(146, '0000-00-00', '152', '152-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(147, '0000-00-00', '153', '153-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(148, '0000-00-00', '154', '154-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(149, '0000-00-00', '155', '155-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(150, '0000-00-00', '156', '156-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(151, '0000-00-00', '157', '157-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(152, '0000-00-00', '158', '158-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(153, '0000-00-00', '159', '159-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(154, '0000-00-00', '160', '160-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(155, '0000-00-00', '161', '161-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(156, '0000-00-00', '162', '162-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(157, '0000-00-00', '163', '163-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(158, '0000-00-00', '164', '164-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(159, '0000-00-00', '165', '165-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(160, '0000-00-00', '166', '166-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(161, '0000-00-00', '167', '167-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(162, '0000-00-00', '168', '168-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(163, '0000-00-00', '169', '169-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(164, '0000-00-00', '170', '170-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(165, '0000-00-00', '171', '171-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(166, '0000-00-00', '172', '172-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(167, '0000-00-00', '173', '173-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(168, '0000-00-00', '174', '174-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(169, '0000-00-00', '175', '175-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(170, '0000-00-00', '176', '176-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(171, '0000-00-00', '177', '177-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(172, '0000-00-00', '178', '178-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(173, '0000-00-00', '179', '179-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(174, '0000-00-00', '180', '180-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(175, '0000-00-00', '181', '181-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(176, '0000-00-00', '182', '182-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(177, '0000-00-00', '183', '183-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(178, '0000-00-00', '184', '184-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(179, '0000-00-00', '185', '185-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(180, '0000-00-00', '186', '186-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(181, '0000-00-00', '187', '187-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(182, '0000-00-00', '188', '188-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(183, '0000-00-00', '189', '189-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(184, '0000-00-00', '190', '190-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(185, '0000-00-00', '191', '191-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(186, '0000-00-00', '192', '192-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(187, '0000-00-00', '193', '193-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(188, '0000-00-00', '194', '194-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(189, '0000-00-00', '195', '195-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(190, '0000-00-00', '196', '196-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(191, '0000-00-00', '197', '197-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(192, '0000-00-00', '198', '198-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(193, '0000-00-00', '199', '199-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(194, '0000-00-00', '200', '200-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(195, '0000-00-00', '201', '201-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(196, '0000-00-00', '202', '202-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(197, '0000-00-00', '203', '203-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(198, '0000-00-00', '204', '204-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(199, '0000-00-00', '205', '205-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(200, '0000-00-00', '206', '206-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(201, '0000-00-00', '207', '207-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(202, '0000-00-00', '208', '208-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(203, '0000-00-00', '209', '209-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(204, '0000-00-00', '210', '210-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(205, '0000-00-00', '211', '211-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(206, '0000-00-00', '212', '212-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(207, '0000-00-00', '213', '213-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(208, '0000-00-00', '214', '214-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(209, '0000-00-00', '215', '215-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(210, '0000-00-00', '216', '216-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(211, '0000-00-00', '217', '217-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(212, '0000-00-00', '218', '218-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(213, '0000-00-00', '219', '219-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(214, '0000-00-00', '220', '220-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(215, '0000-00-00', '221', '221-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(216, '0000-00-00', '222', '222-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(217, '0000-00-00', '223', '223-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(218, '0000-00-00', '224', '224-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(219, '0000-00-00', '225', '225-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(220, '0000-00-00', '226', '226-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(221, '0000-00-00', '227', '227-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(222, '0000-00-00', '228', '228-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(223, '0000-00-00', '229', '229-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(224, '0000-00-00', '230', '230-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(225, '0000-00-00', '231', '231-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(226, '0000-00-00', '232', '232-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(227, '0000-00-00', '233', '233-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(228, '0000-00-00', '234', '234-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(229, '0000-00-00', '235', '235-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(230, '0000-00-00', '236', '236-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(231, '0000-00-00', '237', '237-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(232, '0000-00-00', '238', '238-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(233, '0000-00-00', '239', '239-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(234, '0000-00-00', '240', '240-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(235, '0000-00-00', '241', '241-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(236, '0000-00-00', '242', '242-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(237, '0000-00-00', '243', '243-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(238, '0000-00-00', '244', '244-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(239, '0000-00-00', '245', '245-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(240, '0000-00-00', '246', '246-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(241, '0000-00-00', '247', '247-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(242, '0000-00-00', '248', '248-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(243, '0000-00-00', '249', '249-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(244, '0000-00-00', '250', '250-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(245, '0000-00-00', '251', '251-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(246, '0000-00-00', '252', '252-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(247, '0000-00-00', '253', '253-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(248, '0000-00-00', '254', '254-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(249, '0000-00-00', '255', '255-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(250, '0000-00-00', '256', '256-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(251, '0000-00-00', '257', '257-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(252, '0000-00-00', '258', '258-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(253, '0000-00-00', '259', '259-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(254, '0000-00-00', '260', '260-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(255, '0000-00-00', '261', '261-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(256, '0000-00-00', '262', '262-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(257, '0000-00-00', '263', '263-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(258, '0000-00-00', '264', '264-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(259, '0000-00-00', '265', '265-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(260, '0000-00-00', '266', '266-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(261, '0000-00-00', '267', '267-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(262, '0000-00-00', '268', '268-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(263, '0000-00-00', '269', '269-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(264, '0000-00-00', '270', '270-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(265, '0000-00-00', '271', '271-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(266, '0000-00-00', '272', '272-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(267, '0000-00-00', '273', '273-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(268, '0000-00-00', '274', '274-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(269, '0000-00-00', '275', '275-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(270, '0000-00-00', '276', '276-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(271, '0000-00-00', '277', '277-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(272, '0000-00-00', '278', '278-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(273, '0000-00-00', '279', '279-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(274, '0000-00-00', '280', '280-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(275, '0000-00-00', '281', '281-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(276, '0000-00-00', '282', '282-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(277, '0000-00-00', '283', '283-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(278, '0000-00-00', '284', '284-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(279, '0000-00-00', '285', '285-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(280, '0000-00-00', '286', '286-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(281, '0000-00-00', '287', '287-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(282, '0000-00-00', '288', '288-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(283, '0000-00-00', '289', '289-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(284, '0000-00-00', '290', '290-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(285, '0000-00-00', '291', '291-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(286, '0000-00-00', '292', '292-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(287, '0000-00-00', '293', '293-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(288, '0000-00-00', '294', '294-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(289, '0000-00-00', '295', '295-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(290, '0000-00-00', '296', '296-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(291, '0000-00-00', '297', '297-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(292, '0000-00-00', '298', '298-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(293, '0000-00-00', '299', '299-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(294, '0000-00-00', '300', '300-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(295, '0000-00-00', '301', '301-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(296, '0000-00-00', '302', '302-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(297, '0000-00-00', '303', '303-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(298, '0000-00-00', '304', '304-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(299, '0000-00-00', '305', '305-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(300, '0000-00-00', '306', '306-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(301, '0000-00-00', '307', '307-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(302, '0000-00-00', '308', '308-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(303, '0000-00-00', '309', '309-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(304, '0000-00-00', '310', '310-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(305, '0000-00-00', '311', '311-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(306, '0000-00-00', '312', '312-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(307, '0000-00-00', '313', '313-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(308, '0000-00-00', '314', '314-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(309, '0000-00-00', '315', '315-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(310, '0000-00-00', '316', '316-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(311, '0000-00-00', '317', '317-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(312, '0000-00-00', '318', '318-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(313, '0000-00-00', '319', '319-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(314, '0000-00-00', '320', '320-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(315, '0000-00-00', '321', '321-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(316, '0000-00-00', '322', '322-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(317, '0000-00-00', '323', '323-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(318, '0000-00-00', '324', '324-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(319, '0000-00-00', '325', '325-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(320, '0000-00-00', '326', '326-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(321, '0000-00-00', '327', '327-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(322, '0000-00-00', '328', '328-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(323, '0000-00-00', '329', '329-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(324, '0000-00-00', '330', '330-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(325, '0000-00-00', '331', '331-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(326, '0000-00-00', '332', '332-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(327, '0000-00-00', '333', '333-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(328, '0000-00-00', '334', '334-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0'),
(329, '0000-00-00', '335', '335-43371', 'asdkalskdhlakshdlkahsdlkashd', 'lucky', '0000-00-00 00:00:00', '0', '0');

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
  `status_task` tinyint(1) NOT NULL,
  `deadline` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`no`, `no_task`, `username`, `judul`, `deskripsi`, `status_task`, `deadline`, `created`, `last_update`) VALUES
(1, 1, 'k055292', 'A', 'A', 1, '2018-09-17', '2018-09-18 06:41:56', '2018-09-18 01:41:56'),
(2, 2, 'k055292', 'A', 'A', 1, '2018-09-17', '2018-09-18 06:44:40', '2018-09-18 01:44:40'),
(4, 4, 'k055292', 'INPUT ELO', 'INPUT ELO AN DASLDLASLDL', 1, '2018-09-22', '2018-09-18 06:24:22', '2018-09-18 01:24:22'),
(5, 5, 'k055292', 'ASDASD', '123123', 1, '2018-09-18', '2018-09-20 02:33:57', '2018-09-19 21:33:57'),
(6, 6, 'k055292', '213123', 'asdasd', 1, '2018-09-18', '2018-09-19 02:32:29', '2018-09-18 21:32:29'),
(8, 8, 'k055292', '123123', '123123', 0, '2018-09-18', '2018-09-18 06:21:37', '2018-09-18 00:42:55'),
(9, 1, 'lucky', 'Buat Notin Aktivitas', 'ASDJLAKSJDLJASLDJALSJDLKJASDLK', 1, '2018-09-18', '2018-09-18 06:41:56', '2018-09-18 01:41:56');

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
('k055292', '$2y$10$M2UMKLM0OkFwQ7t75MEYSO5LqJtCq5hq2H/xBF0zic.WF7JIy4udi', 'Lucky Anggara', 'anggara.lucky1992@Gmail.com', 1, '2018-09-28 05:24:48'),
('lucky', '$2y$10$Izbv9ygA9NRTF3fubjd0b.WcQpIBg44x3qjvT1znvxR21.SF0RbZi', 'Desi Evilia Agustikarina', 'anggara.lucky1992@Gmail.com', 1, '2018-09-20 06:01:11');

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
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `unit` (`kd_unit`),
  ADD KEY `username` (`username`),
  ADD KEY `kd_unit` (`kd_unit`,`username`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`no_register`),
  ADD KEY `unit` (`no_surat`),
  ADD KEY `username` (`username`),
  ADD KEY `kd_unit` (`no_surat`,`username`);

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
  ADD CONSTRAINT `surat_keluar_rahasia_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `surat_keluar_rahasia_ibfk_2` FOREIGN KEY (`kd_unit`) REFERENCES `nama_unit` (`kd_unit`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
