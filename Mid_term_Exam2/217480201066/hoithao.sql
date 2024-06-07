-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 05:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoithao`
--

-- --------------------------------------------------------

--
-- Table structure for table `dscanbo`
--

CREATE TABLE `dscanbo` (
  `MACB` varchar(10) NOT NULL COMMENT 'Mã cán bộ',
  `HOTEN` varchar(50) NOT NULL COMMENT 'Họ tên',
  `GIOITINH` tinyint(1) NOT NULL COMMENT 'Giới tính',
  `NTNS` date NOT NULL COMMENT 'Ngày sinh',
  `DIACHI` varchar(255) NOT NULL COMMENT 'địa chỉ',
  `SDT` varchar(15) NOT NULL COMMENT 'số điện thoại'
) ENGINE=InnoDB DEFAULT CHARSET=dec8 COLLATE=dec8_bin COMMENT='danh sach can bo';

-- --------------------------------------------------------

--
-- Table structure for table `dsdetai`
--

CREATE TABLE `dsdetai` (
  `MADETAI` varchar(10) NOT NULL COMMENT 'Mã đề tài',
  `TENDETAI` varchar(50) NOT NULL COMMENT 'Tên đề tài',
  `KINHPHI` int(11) NOT NULL COMMENT 'Kinh phi',
  `MAHN` varchar(10) NOT NULL COMMENT 'Mã hội nghị'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dsdetai`
--

INSERT INTO `dsdetai` (`MADETAI`, `TENDETAI`, `KINHPHI`, `MAHN`) VALUES
('MT001', 'Xu ly nuoc thai nha may tai che', 11000000, 'BL001'),
('MT002', 'Xu ly rac CN', 13000000, 'BL001'),
('MT003', 'Moi truong thu 3', 1500000, 'BL001'),
('NDCVT', 'Nhan dang chu viet tay', 20000000, 'SG231'),
('TOUDM', 'Ung dung toi uu hoa du bao mua lu', 40000000, 'SG231'),
('XLAVB', 'Xu ly anh van ban', 50000000, 'BL101');

-- --------------------------------------------------------

--
-- Table structure for table `dshoinghi`
--

CREATE TABLE `dshoinghi` (
  `MAHN` varchar(10) NOT NULL COMMENT 'Mã hội nghị',
  `TENHN` varchar(50) NOT NULL COMMENT 'Tên hội nghị',
  `NGAYTC` date NOT NULL COMMENT 'Ngày tổ chức',
  `DIADIEMTC` varchar(255) NOT NULL COMMENT 'Địa điểm tổ chức'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dshoinghi`
--

INSERT INTO `dshoinghi` (`MAHN`, `TENHN`, `NGAYTC`, `DIADIEMTC`) VALUES
('BL001', 'Hoi nghi moi truong', '2014-10-10', 'Da Lat'),
('BL101', 'Hoi nghi doi moi phuong phap day hoc', '2015-12-21', 'Bac Lieu'),
('HN003', 'Hoi nghi CNTT', '2016-02-15', 'Ha Noi'),
('SG231', 'Hoi nghi @', '2014-03-15', 'TP Ho Chi Minh');

-- --------------------------------------------------------

--
-- Table structure for table `dsthamgia`
--

CREATE TABLE `dsthamgia` (
  `MADETAI` varchar(10) NOT NULL COMMENT 'Mã đề tài',
  `MACB` varchar(10) NOT NULL COMMENT 'Mã cán bộ',
  `TROCAP` int(11) NOT NULL COMMENT 'Trợ cấp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dscanbo`
--
ALTER TABLE `dscanbo`
  ADD PRIMARY KEY (`MACB`);

--
-- Indexes for table `dsdetai`
--
ALTER TABLE `dsdetai`
  ADD PRIMARY KEY (`MADETAI`);

--
-- Indexes for table `dshoinghi`
--
ALTER TABLE `dshoinghi`
  ADD PRIMARY KEY (`MAHN`);

--
-- Indexes for table `dsthamgia`
--
ALTER TABLE `dsthamgia`
  ADD PRIMARY KEY (`MADETAI`,`MACB`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dsthamgia`
--
ALTER TABLE `dsthamgia`
  ADD CONSTRAINT `dsthamgia_ibfk_1` FOREIGN KEY (`MADETAI`) REFERENCES `dsdetai` (`MADETAI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
