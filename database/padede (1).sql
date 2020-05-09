-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 03:28 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `padede`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `tanggal`) VALUES
(87, '2019-06-01'),
(88, '2019-06-02'),
(89, '2019-06-03'),
(90, '2019-06-04'),
(91, '2019-06-05'),
(92, '2019-06-06'),
(93, '2019-06-07'),
(94, '2019-06-08'),
(95, '2019-06-10'),
(96, '2019-06-11'),
(97, '2019-06-12'),
(98, '2019-06-13'),
(99, '2019-06-14'),
(100, '2019-06-15'),
(101, '2019-06-17'),
(102, '2019-06-18'),
(103, '2019-06-19'),
(104, '2019-06-20'),
(105, '2019-06-21'),
(106, '2019-06-22'),
(107, '2019-06-24'),
(108, '2019-06-25'),
(109, '2019-06-26'),
(110, '2019-06-27'),
(111, '2019-06-28'),
(112, '2019-06-29'),
(113, '2019-06-30'),
(114, '2019-07-01'),
(115, '2019-07-02'),
(116, '2019-07-03'),
(117, '2019-07-04'),
(118, '2019-07-05'),
(119, '2019-07-06'),
(120, '2019-07-08'),
(141, '2019-07-31'),
(142, '2019-07-26'),
(143, '2019-07-14'),
(144, '2019-07-15'),
(145, '2019-07-16'),
(146, '2019-07-18'),
(147, '2019-07-19'),
(148, '2019-07-20'),
(149, '2019-07-21'),
(150, '2019-07-23'),
(151, '2019-07-24'),
(152, '2019-07-25'),
(153, '2019-07-27'),
(154, '2019-07-28'),
(155, '2019-07-29'),
(156, '2019-07-30'),
(157, '2019-08-01'),
(158, '2019-08-03'),
(159, '2019-08-04'),
(160, '2019-08-05'),
(161, '2019-08-06'),
(162, '2019-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `noakun` int(5) NOT NULL,
  `jenisakun` varchar(11) NOT NULL,
  `namaakun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`noakun`, `jenisakun`, `namaakun`) VALUES
(111, 'Aset', 'Kas'),
(123, 'Aset', 'asdasd'),
(411, 'Pendapatan', 'Pendapatan jasa'),
(511, 'Beban', 'Beban Gaji');

-- --------------------------------------------------------

--
-- Table structure for table `bonus`
--

CREATE TABLE `bonus` (
  `id_bonus` int(20) NOT NULL,
  `kode_bonus` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` int(20) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bonus`
--

INSERT INTO `bonus` (`id_bonus`, `kode_bonus`, `tanggal`, `nominal`, `jenis`) VALUES
(2, 'BN-01', '2019-08-01', 120000000, 'Bonus');

-- --------------------------------------------------------

--
-- Table structure for table `coa`
--

CREATE TABLE `coa` (
  `no_akun` char(5) NOT NULL,
  `nama_akun` varchar(30) DEFAULT NULL,
  `header_akun` int(1) NOT NULL,
  `saldo_awal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coa`
--

INSERT INTO `coa` (`no_akun`, `nama_akun`, `header_akun`, `saldo_awal`) VALUES
('111', 'Kas', 1, 0),
('212', 'Utang Gaji', 2, 0),
('411', 'Pendapatan Jasa', 4, 0),
('511', 'Beban Gaji', 5, 0),
('513', 'Beban Pajak', 5, 0),
('888', 'asd', 0, 0),
('999', 'testing', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `iddept` varchar(15) NOT NULL,
  `namadept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`iddept`, `namadept`) VALUES
('DEPT-0001', 'Keuangan'),
('DEPT-0002', 'HRD');

-- --------------------------------------------------------

--
-- Table structure for table `detailpegawai`
--

CREATE TABLE `detailpegawai` (
  `idjenis` varchar(15) NOT NULL,
  `namajenis` varchar(30) NOT NULL,
  `gaji` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpegawai`
--

INSERT INTO `detailpegawai` (`idjenis`, `namajenis`, `gaji`) VALUES
('JP-0001', 'Tetap', 1500000),
('JP-0002', 'Bulanan', 1000000),
('JP-0003', 'Harian', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_absensi_rfid`
--

CREATE TABLE `detail_absensi_rfid` (
  `id_detail_absensi` int(11) NOT NULL,
  `id_absensi` int(11) NOT NULL,
  `rfid` text,
  `status` text NOT NULL COMMENT 'Masuk,Sakit,Izin,Alfa',
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `keterangan` enum('Presensi Masuk','Presensi Keluar','','') NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_absensi_rfid`
--

INSERT INTO `detail_absensi_rfid` (`id_detail_absensi`, `id_absensi`, `rfid`, `status`, `jam_masuk`, `jam_keluar`, `keterangan`, `jam`) VALUES
(119, 87, '1', 'Masuk', '07:09:57', '00:00:00', 'Presensi Masuk', '00:00:00'),
(120, 87, '2', 'Masuk', '07:10:01', '00:00:00', 'Presensi Masuk', '00:00:00'),
(121, 87, '3', 'Masuk', '07:10:04', '00:00:00', 'Presensi Masuk', '00:00:00'),
(122, 87, '4', 'Masuk', '07:10:06', '00:00:00', 'Presensi Masuk', '00:00:00'),
(123, 87, '5', 'Masuk', '07:10:09', '00:00:00', 'Presensi Masuk', '00:00:00'),
(124, 87, '10', 'Masuk', '07:11:39', '00:00:00', 'Presensi Masuk', '00:00:00'),
(125, 87, '1576117318', 'Masuk', '07:11:46', '00:00:00', 'Presensi Masuk', '00:00:00'),
(126, 88, '1', 'Masuk', '07:12:30', '00:00:00', 'Presensi Masuk', '00:00:00'),
(127, 88, '1576117318', 'Masuk', '07:12:31', '00:00:00', 'Presensi Masuk', '00:00:00'),
(128, 88, '2', 'Masuk', '07:12:34', '00:00:00', 'Presensi Masuk', '00:00:00'),
(129, 88, '3', 'Masuk', '07:12:35', '00:00:00', 'Presensi Masuk', '00:00:00'),
(130, 88, '4', 'Masuk', '07:12:36', '00:00:00', 'Presensi Masuk', '00:00:00'),
(131, 88, '5', 'Masuk', '07:12:37', '00:00:00', 'Presensi Masuk', '00:00:00'),
(132, 88, '10', 'Masuk', '07:12:40', '00:00:00', 'Presensi Masuk', '00:00:00'),
(133, 89, '1576117318', 'Masuk', '07:22:30', '00:00:00', 'Presensi Masuk', '00:00:00'),
(134, 89, '1', 'Masuk', '07:22:33', '00:00:00', 'Presensi Masuk', '00:00:00'),
(135, 89, '2', 'Masuk', '07:22:36', '00:00:00', 'Presensi Masuk', '00:00:00'),
(136, 89, '3', 'Masuk', '07:22:38', '00:00:00', 'Presensi Masuk', '00:00:00'),
(137, 89, '4', 'Masuk', '07:22:41', '00:00:00', 'Presensi Masuk', '00:00:00'),
(138, 89, '5', 'Masuk', '07:22:44', '00:00:00', 'Presensi Masuk', '00:00:00'),
(139, 90, '1', 'Masuk', '07:23:00', '00:00:00', 'Presensi Masuk', '00:00:00'),
(140, 90, '2', 'Masuk', '07:23:04', '00:00:00', 'Presensi Masuk', '00:00:00'),
(141, 90, '3', 'Masuk', '07:23:06', '00:00:00', 'Presensi Masuk', '00:00:00'),
(142, 90, '4', 'Masuk', '07:23:07', '00:00:00', 'Presensi Masuk', '00:00:00'),
(143, 90, '5', 'Masuk', '07:23:10', '00:00:00', 'Presensi Masuk', '00:00:00'),
(144, 91, '1', 'Masuk', '07:23:48', '00:00:00', 'Presensi Masuk', '00:00:00'),
(145, 91, '2', 'Masuk', '07:23:49', '00:00:00', 'Presensi Masuk', '00:00:00'),
(146, 91, '3', 'Masuk', '07:23:50', '00:00:00', 'Presensi Masuk', '00:00:00'),
(147, 91, '4', 'Masuk', '07:23:51', '00:00:00', 'Presensi Masuk', '00:00:00'),
(148, 91, '5', 'Masuk', '07:23:52', '00:00:00', 'Presensi Masuk', '00:00:00'),
(149, 92, '1', 'Masuk', '07:24:00', '00:00:00', 'Presensi Masuk', '00:00:00'),
(150, 92, '2', 'Masuk', '07:24:01', '00:00:00', 'Presensi Masuk', '00:00:00'),
(151, 92, '3', 'Masuk', '07:24:02', '00:00:00', 'Presensi Masuk', '00:00:00'),
(152, 92, '4', 'Masuk', '07:24:03', '00:00:00', 'Presensi Masuk', '00:00:00'),
(153, 92, '5', 'Masuk', '07:24:03', '00:00:00', 'Presensi Masuk', '00:00:00'),
(154, 93, '1', 'Masuk', '07:24:12', '00:00:00', 'Presensi Masuk', '00:00:00'),
(155, 93, '2', 'Masuk', '07:24:12', '00:00:00', 'Presensi Masuk', '00:00:00'),
(156, 93, '3', 'Masuk', '07:24:13', '00:00:00', 'Presensi Masuk', '00:00:00'),
(157, 93, '4', 'Masuk', '07:24:14', '00:00:00', 'Presensi Masuk', '00:00:00'),
(158, 93, '5', 'Masuk', '07:24:15', '00:00:00', 'Presensi Masuk', '00:00:00'),
(159, 94, '1', 'Masuk', '07:08:26', '00:00:00', 'Presensi Masuk', '00:00:00'),
(160, 94, '2', 'Masuk', '07:08:27', '00:00:00', 'Presensi Masuk', '00:00:00'),
(161, 94, '3', 'Masuk', '07:08:28', '00:00:00', 'Presensi Masuk', '00:00:00'),
(162, 94, '4', 'Masuk', '07:08:29', '00:00:00', 'Presensi Masuk', '00:00:00'),
(163, 94, '5', 'Masuk', '07:08:31', '00:00:00', 'Presensi Masuk', '00:00:00'),
(164, 95, '1', 'Masuk', '07:09:50', '00:00:00', 'Presensi Masuk', '00:00:00'),
(165, 95, '2', 'Masuk', '07:09:51', '00:00:00', 'Presensi Masuk', '00:00:00'),
(166, 95, '3', 'Masuk', '07:09:52', '00:00:00', 'Presensi Masuk', '00:00:00'),
(167, 95, '4', 'Masuk', '07:09:54', '00:00:00', 'Presensi Masuk', '00:00:00'),
(168, 95, '5', 'Masuk', '07:09:55', '00:00:00', 'Presensi Masuk', '00:00:00'),
(169, 96, '1', 'Masuk', '07:10:12', '00:00:00', 'Presensi Masuk', '00:00:00'),
(170, 96, '2', 'Masuk', '07:10:14', '00:00:00', 'Presensi Masuk', '00:00:00'),
(171, 96, '3', 'Masuk', '07:10:15', '00:00:00', 'Presensi Masuk', '00:00:00'),
(172, 96, '4', 'Masuk', '07:10:17', '00:00:00', 'Presensi Masuk', '00:00:00'),
(173, 96, '5', 'Masuk', '07:10:18', '00:00:00', 'Presensi Masuk', '00:00:00'),
(174, 97, '1', 'Masuk', '07:10:27', '00:00:00', 'Presensi Masuk', '00:00:00'),
(175, 97, '2', 'Masuk', '07:10:28', '00:00:00', 'Presensi Masuk', '00:00:00'),
(176, 97, '3', 'Masuk', '07:10:29', '00:00:00', 'Presensi Masuk', '00:00:00'),
(177, 97, '4', 'Masuk', '07:10:29', '00:00:00', 'Presensi Masuk', '00:00:00'),
(178, 97, '5', 'Masuk', '07:10:30', '00:00:00', 'Presensi Masuk', '00:00:00'),
(179, 98, '1', 'Masuk', '07:10:40', '00:00:00', 'Presensi Masuk', '00:00:00'),
(180, 98, '2', 'Masuk', '07:10:40', '00:00:00', 'Presensi Masuk', '00:00:00'),
(181, 98, '3', 'Masuk', '07:10:41', '00:00:00', 'Presensi Masuk', '00:00:00'),
(182, 98, '4', 'Masuk', '07:10:42', '00:00:00', 'Presensi Masuk', '00:00:00'),
(183, 98, '5', 'Masuk', '07:10:42', '00:00:00', 'Presensi Masuk', '00:00:00'),
(184, 99, '1', 'Masuk', '07:10:48', '00:00:00', 'Presensi Masuk', '00:00:00'),
(185, 99, '2', 'Masuk', '07:10:49', '00:00:00', 'Presensi Masuk', '00:00:00'),
(186, 99, '3', 'Masuk', '07:10:50', '00:00:00', 'Presensi Masuk', '00:00:00'),
(187, 99, '4', 'Masuk', '07:10:50', '00:00:00', 'Presensi Masuk', '00:00:00'),
(188, 99, '5', 'Masuk', '07:10:51', '00:00:00', 'Presensi Masuk', '00:00:00'),
(189, 100, '1', 'Masuk', '07:10:57', '00:00:00', 'Presensi Masuk', '00:00:00'),
(190, 100, '2', 'Masuk', '07:10:58', '00:00:00', 'Presensi Masuk', '00:00:00'),
(191, 100, '3', 'Masuk', '07:10:58', '00:00:00', 'Presensi Masuk', '00:00:00'),
(192, 100, '4', 'Masuk', '07:10:59', '00:00:00', 'Presensi Masuk', '00:00:00'),
(193, 101, '1', 'Masuk', '07:11:08', '00:00:00', 'Presensi Masuk', '00:00:00'),
(194, 101, '2', 'Masuk', '07:11:10', '00:00:00', 'Presensi Masuk', '00:00:00'),
(195, 101, '3', 'Masuk', '07:11:11', '00:00:00', 'Presensi Masuk', '00:00:00'),
(196, 101, '4', 'Masuk', '07:11:12', '00:00:00', 'Presensi Masuk', '00:00:00'),
(197, 101, '5', 'Masuk', '07:11:13', '00:00:00', 'Presensi Masuk', '00:00:00'),
(198, 102, '1', 'Masuk', '07:11:22', '00:00:00', 'Presensi Masuk', '00:00:00'),
(199, 102, '2', 'Masuk', '07:11:23', '00:00:00', 'Presensi Masuk', '00:00:00'),
(200, 102, '3', 'Masuk', '07:11:24', '00:00:00', 'Presensi Masuk', '00:00:00'),
(201, 102, '4', 'Masuk', '07:11:24', '00:00:00', 'Presensi Masuk', '00:00:00'),
(202, 102, '5', 'Masuk', '07:11:25', '00:00:00', 'Presensi Masuk', '00:00:00'),
(203, 103, '1', 'Masuk', '07:11:32', '00:00:00', 'Presensi Masuk', '00:00:00'),
(204, 103, '2', 'Masuk', '07:11:33', '00:00:00', 'Presensi Masuk', '00:00:00'),
(205, 103, '3', 'Masuk', '07:11:33', '00:00:00', 'Presensi Masuk', '00:00:00'),
(206, 103, '4', 'Masuk', '07:11:34', '00:00:00', 'Presensi Masuk', '00:00:00'),
(207, 103, '5', 'Masuk', '07:11:35', '00:00:00', 'Presensi Masuk', '00:00:00'),
(208, 104, '1', 'Masuk', '07:11:40', '00:00:00', 'Presensi Masuk', '00:00:00'),
(209, 104, '2', 'Masuk', '07:11:42', '00:00:00', 'Presensi Masuk', '00:00:00'),
(210, 104, '3', 'Masuk', '07:11:43', '00:00:00', 'Presensi Masuk', '00:00:00'),
(211, 104, '4', 'Masuk', '07:11:45', '00:00:00', 'Presensi Masuk', '00:00:00'),
(212, 104, '5', 'Masuk', '07:11:46', '00:00:00', 'Presensi Masuk', '00:00:00'),
(213, 105, '1', 'Masuk', '07:11:59', '00:00:00', 'Presensi Masuk', '00:00:00'),
(214, 105, '2', 'Masuk', '07:12:00', '00:00:00', 'Presensi Masuk', '00:00:00'),
(215, 105, '3', 'Masuk', '07:12:01', '00:00:00', 'Presensi Masuk', '00:00:00'),
(216, 105, '4', 'Masuk', '07:12:02', '00:00:00', 'Presensi Masuk', '00:00:00'),
(217, 105, '5', 'Masuk', '07:12:02', '00:00:00', 'Presensi Masuk', '00:00:00'),
(218, 106, '1', 'Masuk', '07:12:09', '00:00:00', 'Presensi Masuk', '00:00:00'),
(219, 106, '3', 'Masuk', '07:12:09', '00:00:00', 'Presensi Masuk', '00:00:00'),
(220, 106, '2', 'Masuk', '07:12:10', '00:00:00', 'Presensi Masuk', '00:00:00'),
(221, 106, '5', 'Masuk', '07:12:11', '00:00:00', 'Presensi Masuk', '00:00:00'),
(222, 107, '1', 'Masuk', '07:12:19', '00:00:00', 'Presensi Masuk', '00:00:00'),
(223, 107, '2', 'Masuk', '07:12:21', '00:00:00', 'Presensi Masuk', '00:00:00'),
(224, 107, '3', 'Masuk', '07:12:22', '00:00:00', 'Presensi Masuk', '00:00:00'),
(225, 107, '5', 'Masuk', '07:12:23', '00:00:00', 'Presensi Masuk', '00:00:00'),
(226, 108, '1', 'Masuk', '07:12:35', '00:00:00', 'Presensi Masuk', '00:00:00'),
(227, 108, '3', 'Masuk', '07:12:36', '00:00:00', 'Presensi Masuk', '00:00:00'),
(228, 108, '4', 'Masuk', '07:12:37', '00:00:00', 'Presensi Masuk', '00:00:00'),
(229, 108, '5', 'Masuk', '07:12:39', '00:00:00', 'Presensi Masuk', '00:00:00'),
(230, 109, '1', 'Masuk', '07:12:45', '00:00:00', 'Presensi Masuk', '00:00:00'),
(231, 109, '2', 'Masuk', '07:12:46', '00:00:00', 'Presensi Masuk', '00:00:00'),
(232, 109, '3', 'Masuk', '07:12:47', '00:00:00', 'Presensi Masuk', '00:00:00'),
(233, 110, '1', 'Masuk', '07:12:52', '00:00:00', 'Presensi Masuk', '00:00:00'),
(234, 110, '2', 'Masuk', '07:12:53', '00:00:00', 'Presensi Masuk', '00:00:00'),
(235, 110, '3', 'Masuk', '07:12:54', '00:00:00', 'Presensi Masuk', '00:00:00'),
(236, 110, '4', 'Masuk', '07:12:55', '00:00:00', 'Presensi Masuk', '00:00:00'),
(237, 110, '5', 'Masuk', '07:12:56', '00:00:00', 'Presensi Masuk', '00:00:00'),
(238, 111, '1', 'Masuk', '07:13:02', '00:00:00', 'Presensi Masuk', '00:00:00'),
(239, 111, '2', 'Masuk', '07:13:03', '00:00:00', 'Presensi Masuk', '00:00:00'),
(240, 111, '3', 'Masuk', '07:13:04', '00:00:00', 'Presensi Masuk', '00:00:00'),
(241, 111, '5', 'Masuk', '07:13:05', '00:00:00', 'Presensi Masuk', '00:00:00'),
(242, 112, '1', 'Masuk', '07:13:11', '00:00:00', 'Presensi Masuk', '00:00:00'),
(243, 112, '2', 'Masuk', '07:13:11', '00:00:00', 'Presensi Masuk', '00:00:00'),
(244, 112, '3', 'Masuk', '07:13:12', '00:00:00', 'Presensi Masuk', '00:00:00'),
(245, 112, '4', 'Masuk', '07:13:13', '00:00:00', 'Presensi Masuk', '00:00:00'),
(246, 112, '5', 'Masuk', '07:13:15', '00:00:00', 'Presensi Masuk', '00:00:00'),
(247, 112, '1576117318', 'Masuk', '07:27:42', '00:00:00', 'Presensi Masuk', '00:00:00'),
(248, 113, '1576117318', 'Masuk', '07:28:22', '00:00:00', 'Presensi Masuk', '00:00:00'),
(249, 114, '1', 'Masuk', '07:06:56', '00:00:00', 'Presensi Masuk', '00:00:00'),
(250, 115, '1', 'Masuk', '07:07:43', '00:00:00', 'Presensi Masuk', '00:00:00'),
(251, 116, '1', 'Masuk', '07:07:49', '00:00:00', 'Presensi Masuk', '00:00:00'),
(252, 117, '1', 'Masuk', '07:07:55', '00:00:00', 'Presensi Masuk', '00:00:00'),
(253, 118, '1', 'Masuk', '07:08:06', '00:00:00', 'Presensi Masuk', '00:00:00'),
(254, 119, '1', 'Masuk', '07:08:10', '00:00:00', 'Presensi Masuk', '00:00:00'),
(255, 120, '1', 'Masuk', '07:08:59', '00:00:00', 'Presensi Masuk', '00:00:00'),
(277, 141, '1576117318', 'Masuk', '07:19:55', '00:00:00', 'Presensi Masuk', '00:00:00'),
(278, 142, '1576117318', 'Masuk', '07:20:19', '00:00:00', 'Presensi Masuk', '00:00:00'),
(279, 143, '5', 'Masuk', '07:21:24', '00:00:00', 'Presensi Masuk', '00:00:00'),
(280, 143, '1576117318', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '07:46:00'),
(281, 143, '1576117318', 'Masuk', '00:00:00', '00:00:00', 'Presensi Keluar', '07:46:05'),
(282, 143, '4', 'Masuk', '07:00:00', '15:00:00', 'Presensi Masuk', '07:00:00'),
(283, 107, '1576117318', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '15:05:23'),
(284, 144, '3', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '07:49:50'),
(285, 144, '3', 'Masuk', '00:00:00', '00:00:00', 'Presensi Keluar', '10:52:28'),
(288, 144, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:34:49'),
(289, 144, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Keluar', '13:35:19'),
(290, 145, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:44:19'),
(291, 146, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:44:55'),
(292, 146, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Keluar', '13:45:06'),
(293, 147, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:45:02'),
(294, 148, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:45:30'),
(295, 149, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:45:21'),
(296, 150, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:46:29'),
(297, 151, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:46:37'),
(298, 152, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:47:22'),
(299, 152, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Keluar', '13:48:20'),
(300, 142, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:47:48'),
(301, 153, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:47:53'),
(302, 154, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:48:12'),
(303, 155, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:48:17'),
(304, 156, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:48:23'),
(305, 141, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:48:28'),
(306, 157, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:48:37'),
(307, 158, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:48:59'),
(308, 159, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:49:08'),
(309, 160, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:49:21'),
(310, 161, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:49:30'),
(311, 162, '2400551407', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:49:43'),
(312, 157, '5', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '08:43:55'),
(313, 157, '6', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '13:47:08'),
(314, 157, '1577014294', 'Masuk', '00:00:00', '00:00:00', 'Presensi Masuk', '19:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `detail_shift`
--

CREATE TABLE `detail_shift` (
  `id` int(11) NOT NULL,
  `id_detail_shift` int(30) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL,
  `id_shift` varchar(10) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_shift`
--

INSERT INTO `detail_shift` (`id`, `id_detail_shift`, `tanggal`, `id_pegawai`, `id_shift`, `tanggal_mulai`, `tanggal_selesai`) VALUES
(23, 1, '07/11/2019 - 07/13/2019', 'TRX-2', 'Shift-01', '2019-07-11', '2019-07-13'),
(25, 3, '07/15/2019 - 07/16/2019', 'TRX-3', 'Shift-03', '2019-07-15', '2019-07-16'),
(26, 4, '07/14/2019 - 07/15/2019', 'TRX-4', 'Shift-01', '2019-07-14', '2019-07-15'),
(27, 5, '06/24/2019 - 06/25/2019', 'TRX-3', 'Shift-02', '2019-06-24', '2019-06-25'),
(28, 6, '07/15/2019 - 07/16/2019', 'TRX-1', 'Shift-01', '2019-07-15', '2019-07-16'),
(31, 7, '07/15/2019 - 07/16/2019', 'TRX-4', 'Shift-01', '2019-07-15', '2019-07-16'),
(32, 8, '07/18/2019 - 08/30/2019', 'TRX-4', 'Shift-01', '2019-07-18', '2019-08-30'),
(33, 9, '08/01/2019 - 08/03/2019', 'TRX-8', 'Shift-01', '2019-08-01', '2019-08-03'),
(34, 10, '08/01/2019 - 08/03/2019', 'TRX-9', 'Shift-01', '2019-08-01', '2019-08-03'),
(35, 11, '08/01/2019 - 08/03/2019', 'TRX-9', 'Shift-02', '2019-08-01', '2019-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `id_pegawai` varchar(30) NOT NULL,
  `bonus` int(11) NOT NULL,
  `tunjangan` int(11) NOT NULL,
  `gajipokok` int(20) NOT NULL,
  `gajitotal` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `idjabatan` varchar(11) NOT NULL,
  `gajipokok` int(15) NOT NULL,
  `namajabatan` varchar(255) NOT NULL,
  `tunjangan` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`idjabatan`, `gajipokok`, `namajabatan`, `tunjangan`) VALUES
('JB-01', 7000000, 'Manager', 700000),
('JB-02', 6000000, 'Sekretaris', 600000),
('JB-03', 4500000, 'Bendahara', 450000),
('JB-04', 4000000, 'Kepala Bagian', 400000),
('JB-05', 4250000, 'Staff', 425000),
('JB-06', 5000000, 'testing', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `no` int(11) NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `no_akun` int(11) NOT NULL,
  `tanggal_jurnal` date NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`no`, `no_transaksi`, `no_akun`, `tanggal_jurnal`, `posisi`, `nominal`) VALUES
(5, 'BN-01', 111, '2019-08-01', 'debit', 120000000),
(6, 'BN-01', 411, '2019-08-01', 'kredit', 120000000),
(7, 'PYRLL201908260001', 511, '2019-08-26', 'debit', 14490479),
(8, 'PYRLL201908260001', 111, '2019-08-26', 'kredit', 14490479);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `rfid` varchar(10) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `idjabatan` varchar(11) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `bpjs` varchar(10) NOT NULL,
  `ptkp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `username`, `nama_lengkap`, `rfid`, `pendidikan`, `idjabatan`, `tempat`, `ttl`, `bpjs`, `ptkp`) VALUES
('TRX-1', 'dedesumantri', 'Dede Sumantri', '3', 'S2', 'JB-01', 'Jakarta', '1998-03-23', 'Ya', 'K1'),
('TRX-2', 'bili', 'Mutiara', '1', 'S1', 'JB-03', 'madura', '1998-01-01', 'Ya', 'K1'),
('TRX-3', 'apoy123', 'Apoy', '1576117318', 'SMA/SMK', 'JB-05', 'Jakarta', '1998-02-02', 'Ya', 'TK0'),
('TRX-4', 'otong', 'otong surotong', '2400551407', 'S1', 'JB-04', 'bojongsoang', '2000-01-01', 'Ya', 'K3'),
('TRX-6', 'Ahmad ', 'Bili', '2', 'S1', 'JB-04', 'cikunir', '1998-01-01', 'Ya', 'TK0'),
('TRX-8', 'agung', 'agung', '5', 'S1', 'JB-04', 'Bandung', '1990-05-27', 'Ya', 'TK0'),
('TRX-9', 'juki', 'juki', '1577014294', 'SMA/SMK', 'JB-05', 'bandung', '1998-10-10', 'Ya', 'TK0');

-- --------------------------------------------------------

--
-- Table structure for table `penggajian`
--

CREATE TABLE `penggajian` (
  `id` int(11) NOT NULL,
  `no_transaksi` varchar(50) NOT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `total` int(30) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `id_pegawai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggajian`
--

INSERT INTO `penggajian` (`id`, `no_transaksi`, `tanggal_transaksi`, `total`, `status`, `id_pegawai`) VALUES
(3, 'PYRLL201908260001', '2019-08-26', 14490479, 'Berhasil', 'TRX-9');

-- --------------------------------------------------------

--
-- Table structure for table `ptkp`
--

CREATE TABLE `ptkp` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `besaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ptkp`
--

INSERT INTO `ptkp` (`id`, `kode`, `besaran`) VALUES
(1, 'TK0', 4500000),
(2, 'TK1', 4875000),
(3, 'TK2', 5250000),
(4, 'TK3', 5250000),
(5, 'K0', 4875000),
(6, 'K1', 5250000),
(7, 'K2', 5625000),
(8, 'K3', 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `name`) VALUES
(1, 'admin\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id_shift` varchar(10) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id_shift`, `shift`, `jam_masuk`, `jam_keluar`) VALUES
('Shift-01', 'Pagi', '07:01:00', '15:00:00'),
('Shift-02', 'Siang', '15:01:00', '23:00:00'),
('Shift-03', 'Malam', '23:01:00', '07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `idtrans` varchar(15) NOT NULL,
  `tgltrans` date NOT NULL,
  `totaltrans` varchar(20) NOT NULL,
  `statustrans` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` varchar(30) NOT NULL,
  `tgl_trans` date DEFAULT NULL,
  `jml_trans` int(11) DEFAULT NULL,
  `created_by` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `tgl_trans`, `jml_trans`, `created_by`) VALUES
('AGP-1', '2018-09-29', NULL, 'admin'),
('AGP-2', '2018-09-29', NULL, 'admin'),
('PIN-7', '2018-09-29', NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` varchar(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `level`) VALUES
('q123', 'dede', '123123', 'manager'),
('q321', 'demantri', 'asdasd', 'hrd');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`username`, `password`, `alamat`, `no_telp`, `email`, `status`, `level`) VALUES
('agung', 'agung123', 'jl sumbawa no 7', '081803606996', 'agung@gmail.com', 'aktif', ''),
('Ahmad ', 'ahmad123', 'jl cikunir', '123123123', 'ahmadf@gmail.com', 'aktif', ''),
('apoy123', 'apoy123', 'jl ciganitri', '0989888888', 'apoy@gmail.com', 'aktif', ''),
('bili', 'bili123', 'jl sukbir', '0878777777', 'bili@gmail.com', 'aktif', ''),
('dedesumantri', 'dede123', 'jl radio', '087877472553', 'dedesmantri@gmail.com', 'aktif', ''),
('hrd', 'hrd123', 'tes', '08777777777', 'testing@gmail.com', 'aktif', 'HRD'),
('juki', 'juki123', 'jl sukbir', '089899892553', 'juki@gmail.com', 'aktif', ''),
('Keuangan', 'keuangan123', 'jl telkom', '087877472553', 'wida@gmail.com', 'aktif', 'Keuangan'),
('Manager', 'manager123', 'jl rajamandala', '087877987667', 'upi@gmail.com', 'aktif', 'Manager'),
('otong', 'otong123', 'bojongsoang', '1234567', 'otong@gmail.com', 'aktif', ''),
('testing', 'tes123', 'tes', '123321123', 'testing@gmail.com', 'aktif', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`noakun`);

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`id_bonus`);

--
-- Indexes for table `coa`
--
ALTER TABLE `coa`
  ADD PRIMARY KEY (`no_akun`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`iddept`);

--
-- Indexes for table `detailpegawai`
--
ALTER TABLE `detailpegawai`
  ADD PRIMARY KEY (`idjenis`);

--
-- Indexes for table `detail_absensi_rfid`
--
ALTER TABLE `detail_absensi_rfid`
  ADD PRIMARY KEY (`id_detail_absensi`),
  ADD KEY `FK_ID_ABSENSI` (`id_absensi`),
  ADD KEY `id_absensi` (`id_absensi`);

--
-- Indexes for table `detail_shift`
--
ALTER TABLE `detail_shift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`idjabatan`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `fk_username_pegawai` (`username`);

--
-- Indexes for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptkp`
--
ALTER TABLE `ptkp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id_shift`);

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`idtrans`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `bonus`
--
ALTER TABLE `bonus`
  MODIFY `id_bonus` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_absensi_rfid`
--
ALTER TABLE `detail_absensi_rfid`
  MODIFY `id_detail_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT for table `detail_shift`
--
ALTER TABLE `detail_shift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ptkp`
--
ALTER TABLE `ptkp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_absensi_rfid`
--
ALTER TABLE `detail_absensi_rfid`
  ADD CONSTRAINT `FK_ID_ABSENSI` FOREIGN KEY (`id_absensi`) REFERENCES `absensi` (`id_absensi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
