-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 30, 2024 lúc 04:28 AM
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
  `MACB` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT ' Ma can bo',
  `HOTEN` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Ho ten',
  `GIOITINH` tinyint(1) NOT NULL COMMENT 'Gioi tinh',
  `NTNS` date NOT NULL COMMENT 'Ngay sinh',
  `DIACHI` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Dia chi',
  `SDT` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'So dien thoai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='danh sach can bo';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dsdetai`
--

CREATE TABLE `dsdetai` (
  `MADETAI` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Ma de tai',
  `TENDETAI` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Ten de tai',
  `KINHPHI` int(11) NOT NULL COMMENT 'Kinh phi',
  `MAHN` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT 'Ma hoi nghi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='danh sach de tai';

--
-- Đang đổ dữ liệu cho bảng `dsdetai`
--

INSERT INTO `dsdetai` (`MADETAI`, `TENDETAI`, `KINHPHI`, `MAHN`) VALUES
('MT001', 'Xu ly nuoc thai nha may che bien', 1100000, 'BL001'),
('MT002', 'Xu ly rac cong nghiep', 1300000, 'BL001'),
('NDCVT', 'Nhan dan chu viet tay', 2000000, 'SG231'),
('TOUDM', 'Ung dung toi uu hoa du bao mua lu', 4000000, 'SG231'),
('XLAVB', 'Xu ly anh van ban', 5000000, 'BL101');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dshoinghi`
--

CREATE TABLE `dshoinghi` (
  `MAHN` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Ma hoi nghi',
  `TENHN` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Ten hoi nghi',
  `NGAYTC` date NOT NULL COMMENT 'Ngay to chuc',
  `DIADIEMTC` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Dia diem to chuc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='danh sach hoi nghi';

--
-- Đang đổ dữ liệu cho bảng `dshoinghi`
--

INSERT INTO `dshoinghi` (`MAHN`, `TENHN`, `NGAYTC`, `DIADIEMTC`) VALUES
('BL001', 'Hoi nghi moi truong', '2014-10-10', 'Da lat'),
('BL101', 'Hoi nghi doi moi phuong phap day -hoc', '2015-12-21', 'Ha Noi'),
('HN003', 'Hoi nghi CNTT', '2016-02-15', 'Ha Noi'),
('SG231', 'Hoi nghi @', '2014-03-15', 'TP Ho Chi Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dsthamgia`
--

CREATE TABLE `dsthamgia` (
  `MADETAI` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Ma de tai',
  `MACB` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Ma can bo',
  `TROCAP` decimal(10,0) NOT NULL COMMENT 'Tro cap'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='danh sah tham gia';

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
-- Các ràng buộc cho bảng `dsthamgia`
--
ALTER TABLE `dsthamgia`
  ADD CONSTRAINT `dsthamgia_ibfk_1` FOREIGN KEY (`MADETAI`) REFERENCES `dsdetai` (`MADETAI`),
  ADD CONSTRAINT `dsthamgia_ibfk_2` FOREIGN KEY (`MACB`) REFERENCES `dscanbo` (`MACB`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
