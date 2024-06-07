-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 30, 2024 lúc 05:29 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hoithao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dscanbo`
--

CREATE TABLE `dscanbo` (
  `MACB` varchar(10) NOT NULL COMMENT 'ma can bo',
  `HOTEN` varchar(50) NOT NULL COMMENT 'ho ten',
  `GIOITINH` tinyint(1) NOT NULL COMMENT 'gioi tinh',
  `NTNS` date NOT NULL COMMENT 'ngay sinh',
  `DIACHI` varchar(255) NOT NULL COMMENT 'dia chi',
  `SDT` varchar(15) NOT NULL COMMENT 'so dien thoai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dsdetai`
--

CREATE TABLE `dsdetai` (
  `MADETAI` varchar(10) NOT NULL COMMENT 'MA DE TAI',
  `TENDETAI` varchar(50) NOT NULL COMMENT 'TEN DE TAI',
  `KINHPHI` int(11) NOT NULL COMMENT 'KINH PHI',
  `MAHN` varchar(10) NOT NULL COMMENT 'MA HOI THAO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dsdetai`
--

INSERT INTO `dsdetai` (`MADETAI`, `TENDETAI`, `KINHPHI`, `MAHN`) VALUES
('MT001', 'XU LY NUOC THAY NHA MAY CHE BIEN', 1100000, 'BL001'),
('MT002', 'XU LY RAC CN', 1300000, 'BL001'),
('NDCVT', 'NHAN DANG CHU VIET TAY', 2000000, 'SG231'),
('TH123', 'xu ly hang', 200000, 'SG231'),
('TH990', 'XU LY VAT TU', 200000, 'SG231'),
('TH999', 'SACH', 200000, 'BL001'),
('TOUDM', 'UNG DUNG TOI UU HOA DU BAO MUA LU', 4000000, 'SG231'),
('XLAVB', 'XU LY ANH VAN BAN', 5000000, 'BL101');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dshoinghi`
--

CREATE TABLE `dshoinghi` (
  `MAHN` varchar(10) NOT NULL COMMENT 'MA HOI NGHI',
  `TENHN` varchar(50) NOT NULL COMMENT 'TEN HOI NGHI',
  `NGAYTC` date NOT NULL COMMENT 'NGAY TO CHUC',
  `DIADIEMTC` varchar(255) NOT NULL COMMENT 'DIA DIEM TO CHUC'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dshoinghi`
--

INSERT INTO `dshoinghi` (`MAHN`, `TENHN`, `NGAYTC`, `DIADIEMTC`) VALUES
('BL001', 'HOI NGHI MOI TRUONG', '2014-10-10', 'DA LAT'),
('BL101', 'HOI NGHI DOI MOI PHUONG PHAP DAY - HOC', '2015-12-21', 'BAC LIEU'),
('HN003', 'HOI NGHI CNTT', '2016-02-15', 'HA NOI'),
('SG231', 'HOI NGHI @', '2014-03-15', 'TP HO CHI MINH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dsthamgia`
--

CREATE TABLE `dsthamgia` (
  `MADETAI` varchar(10) NOT NULL COMMENT 'MA DE TAI',
  `MACB` varchar(10) NOT NULL COMMENT 'MA CAN BO',
  `TROCAP` int(11) NOT NULL COMMENT 'TRO CAP'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dscanbo`
--
ALTER TABLE `dscanbo`
  ADD PRIMARY KEY (`MACB`);

--
-- Chỉ mục cho bảng `dsdetai`
--
ALTER TABLE `dsdetai`
  ADD PRIMARY KEY (`MADETAI`),
  ADD KEY `MAHN` (`MAHN`);

--
-- Chỉ mục cho bảng `dshoinghi`
--
ALTER TABLE `dshoinghi`
  ADD PRIMARY KEY (`MAHN`);

--
-- Chỉ mục cho bảng `dsthamgia`
--
ALTER TABLE `dsthamgia`
  ADD PRIMARY KEY (`MADETAI`,`MACB`),
  ADD KEY `MACB` (`MACB`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dsdetai`
--
ALTER TABLE `dsdetai`
  ADD CONSTRAINT `dsdetai_ibfk_1` FOREIGN KEY (`MAHN`) REFERENCES `dshoinghi` (`MAHN`);

--
-- Các ràng buộc cho bảng `dsthamgia`
--
ALTER TABLE `dsthamgia`
  ADD CONSTRAINT `dsthamgia_ibfk_1` FOREIGN KEY (`MACB`) REFERENCES `dscanbo` (`MACB`),
  ADD CONSTRAINT `dsthamgia_ibfk_2` FOREIGN KEY (`MADETAI`) REFERENCES `dsdetai` (`MADETAI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
