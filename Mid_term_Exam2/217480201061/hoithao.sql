-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 06:02 AM
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
  `DIACHI` varchar(255) NOT NULL COMMENT 'Địa chỉ',
  `SDT` int(15) NOT NULL COMMENT 'Số điện thoại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dsdetai`
--

CREATE TABLE `dsdetai` (
  `MADETAI` varchar(10) NOT NULL COMMENT 'Mã đề tài',
  `TENDETAI` varchar(50) NOT NULL COMMENT 'Tên đề tài',
  `KINHPHI` int(11) NOT NULL COMMENT 'Kinh phí',
  `MAHN` varchar(10) NOT NULL COMMENT 'Mã hội nghị'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dsdetai`
--

INSERT INTO `dsdetai` (`MADETAI`, `TENDETAI`, `KINHPHI`, `MAHN`) VALUES
('MT001', 'Xử lý nước thải nhà máy chế biến', 1100000, 'BL001'),
('MT002', 'Xử lý rác CN', 1300000, 'BL001'),
('MT003', 'Xử lý rác thải nhựa', 3000000, 'BL001'),
('NDVCT', 'Nhận dạng viết chữ tay', 2000000, 'SG231'),
('TOUDM', 'Ứng dụng tối ưu hoá dự báo mùa lũ', 4000000, 'SG231'),
('XLAVB', 'Xử lý ảnh văn bản', 5000000, 'BL101');

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
('BL001', 'Hội nghị môi trường', '2014-10-10', 'Đà Lạt'),
('BL101', 'Hội nghị đổi mới phương pháp dạy - học', '2015-12-21', 'Bạc Liêu'),
('HN003', 'Hội nghị CNTT', '2016-02-15', 'Hà Nội'),
('SG231', 'Hội nghị @', '2014-03-15', 'TP Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Table structure for table `dsthamgia`
--

CREATE TABLE `dsthamgia` (
  `MADETAI` varchar(10) NOT NULL COMMENT 'Mã đề tài',
  `MACB` varchar(10) NOT NULL COMMENT 'Mã cán bộ',
  `TROCAP` int(255) NOT NULL COMMENT 'Trợ cấp'
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
  ADD PRIMARY KEY (`MADETAI`),
  ADD KEY `MAHN` (`MAHN`);

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
  ADD KEY `MACB` (`MACB`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dsdetai`
--
ALTER TABLE `dsdetai`
  ADD CONSTRAINT `dsdetai_ibfk_1` FOREIGN KEY (`MAHN`) REFERENCES `dshoinghi` (`MAHN`);

--
-- Constraints for table `dsthamgia`
--
ALTER TABLE `dsthamgia`
  ADD CONSTRAINT `dsthamgia_ibfk_1` FOREIGN KEY (`MADETAI`) REFERENCES `dsdetai` (`MADETAI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
