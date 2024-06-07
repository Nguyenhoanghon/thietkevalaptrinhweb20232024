-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 06:00 AM
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
-- Database: `quanlyhoithao`
--

-- --------------------------------------------------------

--
-- Table structure for table `dscanbo`
--

CREATE TABLE `dscanbo` (
  `MACB` varchar(10) NOT NULL COMMENT 'Ma can bo',
  `HOTEN` varchar(50) NOT NULL COMMENT 'Ho ten',
  `GIOITINH` tinyint(1) NOT NULL COMMENT 'Gioi tinh',
  `NTNS` date NOT NULL COMMENT 'Ngay sinh',
  `DIACHI` varchar(255) NOT NULL COMMENT 'Dia chi',
  `SDT` varchar(15) NOT NULL COMMENT 'So dien thoai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci COMMENT='danh sach can bo';

-- --------------------------------------------------------

--
-- Table structure for table `dsdetai`
--

CREATE TABLE `dsdetai` (
  `MADETAI` varchar(10) NOT NULL COMMENT 'Ma de tai',
  `TENDETAI` varchar(50) NOT NULL COMMENT 'Ten de tai',
  `KINHPHI` int(11) NOT NULL COMMENT 'Kinh phi',
  `MAHN` varchar(10) NOT NULL COMMENT 'Ma hoi nghi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci COMMENT='danh sach de tai';

--
-- Dumping data for table `dsdetai`
--

INSERT INTO `dsdetai` (`MADETAI`, `TENDETAI`, `KINHPHI`, `MAHN`) VALUES
('MT001', 'Xu ly nuoc thai nha may che bien', 1100000, 'BL001'),
('MT002', 'Xu ly rac CN', 1300000, 'BL001'),
('MTS', 'Moi truong sach', 2000000, 'HN003'),
('NDCVT', 'Nhan dang chu viet tay', 2000000, 'SG231'),
('TOUDM', 'Ung dung toi uu hoa du bao mua lu', 4000000, 'SG231'),
('XLAVB', 'Xu ly anh van ban', 5000000, 'BL101');

-- --------------------------------------------------------

--
-- Table structure for table `dshoinghi`
--

CREATE TABLE `dshoinghi` (
  `MAHN` varchar(10) NOT NULL COMMENT 'Ma hoi nghi',
  `TENHN` varchar(50) NOT NULL COMMENT 'Ten hoi nghi',
  `NGAYTC` date NOT NULL COMMENT 'Ngay to chuc',
  `DIADIEMTC` varchar(255) NOT NULL COMMENT 'Dia diem to chuc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `dshoinghi`
--

INSERT INTO `dshoinghi` (`MAHN`, `TENHN`, `NGAYTC`, `DIADIEMTC`) VALUES
('BL001', 'Hoi nghi moi truong', '2014-10-10', 'Da Lat'),
('BL101', 'Hoi nghi doi moi phuong phap day-hoc', '2015-12-21', 'Bac Lieu'),
('HN003', 'Hoi nghi CNTT', '2016-02-15', 'Ha Noi'),
('SG231', 'Hoi nghi @', '2014-03-15', 'TP Ho Chi Minh');

-- --------------------------------------------------------

--
-- Table structure for table `dsthamgia`
--

CREATE TABLE `dsthamgia` (
  `MADETAI` varchar(10) NOT NULL,
  `MACB` varchar(10) NOT NULL,
  `TROCAP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci COMMENT='danh sach tham gia';

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
  ADD PRIMARY KEY (`MADETAI`),
  ADD KEY `DETAI` (`MAHN`);

--
-- Indexes for table `dshoinghi`
--
ALTER TABLE `dshoinghi`
  ADD PRIMARY KEY (`MAHN`);

--
-- Indexes for table `dsthamgia`
--
ALTER TABLE `dsthamgia`
  ADD PRIMARY KEY (`MADETAI`,`MACB`),
  ADD KEY `THAMGIACANBO` (`MACB`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dsdetai`
--
ALTER TABLE `dsdetai`
  ADD CONSTRAINT `DETAI` FOREIGN KEY (`MAHN`) REFERENCES `dshoinghi` (`MAHN`);

--
-- Constraints for table `dsthamgia`
--
ALTER TABLE `dsthamgia`
  ADD CONSTRAINT `THAMGIACANBO` FOREIGN KEY (`MACB`) REFERENCES `dscanbo` (`MACB`),
  ADD CONSTRAINT `THAMGIADETAI` FOREIGN KEY (`MADETAI`) REFERENCES `dsdetai` (`MADETAI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
