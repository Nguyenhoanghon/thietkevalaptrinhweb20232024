-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 30, 2024 lúc 04:57 AM
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
  `MACB` varchar(10) NOT NULL COMMENT 'Mã cán bộ',
  `HOTEN` varchar(50) NOT NULL COMMENT 'Họ tên',
  `GIOITINH` tinyint(1) NOT NULL COMMENT 'Giới tính',
  `NTNS` date NOT NULL COMMENT 'Ngày sinh',
  `DIACHI` varchar(255) NOT NULL COMMENT 'Đại chỉ',
  `SDT` varchar(15) NOT NULL COMMENT 'Số điện thoại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dsdetai`
--

CREATE TABLE `dsdetai` (
  `MADETAI` varchar(10) NOT NULL COMMENT 'Mã đề tài',
  `TENDETAI` varchar(50) NOT NULL COMMENT 'Tên đề tài',
  `KINHPHI` int(11) NOT NULL COMMENT 'Kinh phí',
  `MAHN` varchar(10) NOT NULL COMMENT 'Mã hội nghị'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dsdetai`
--

INSERT INTO `dsdetai` (`MADETAI`, `TENDETAI`, `KINHPHI`, `MAHN`) VALUES
('DHBL', 'Kiểm tra', 100000, 'BL001'),
('MT001', 'Xử lý nước thải nhà máy chế biến', 1100000, 'BL001'),
('MT002', 'Xử lý rác CN', 1300000, 'BL001'),
('NDCVT', 'Nhận dạng chữ viết tay', 2000000, 'SG231'),
('TOUDM', 'Ứng dụng tối ưu hoá dự báo mưa lũ', 4000000, 'SG231'),
('XLAVB', 'Xử lý văn bản hình ảnh', 5000000, 'BL101');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dshoinghi`
--

CREATE TABLE `dshoinghi` (
  `MAHN` varchar(10) NOT NULL COMMENT 'Mã hội nghị',
  `TENHN` varchar(50) NOT NULL COMMENT 'Tên hội nghị',
  `NGAYTC` date NOT NULL COMMENT 'Ngày tổ chức',
  `DIADIEMTC` varchar(255) NOT NULL COMMENT 'Địa điểm tổ chức'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dshoinghi`
--

INSERT INTO `dshoinghi` (`MAHN`, `TENHN`, `NGAYTC`, `DIADIEMTC`) VALUES
('BL001', 'Hội nghị môi trường', '2014-10-10', 'Đà Lạt'),
('BL101', 'Hội nghị đổi mới phương pháp dạy - học', '2015-12-21', 'Bạc Liêu'),
('HN003', 'Hội nghị CNTT', '2016-02-15', 'Hà Nội'),
('SG231', 'Hội nghị môi trường', '2014-03-15', 'TP Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dsthamgia`
--

CREATE TABLE `dsthamgia` (
  `MADETAI` varchar(10) NOT NULL COMMENT 'Mã đề tài',
  `MACB` varchar(10) NOT NULL COMMENT 'Mã cán bộ',
  `TROCAP` int(11) NOT NULL COMMENT 'Trợ cấp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

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
  ADD PRIMARY KEY (`MADETAI`,`MACB`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dscanbo`
--
ALTER TABLE `dscanbo`
  ADD CONSTRAINT `dscanbo_ibfk_1` FOREIGN KEY (`MACB`) REFERENCES `dsthamgia` (`MACB`);

--
-- Các ràng buộc cho bảng `dsdetai`
--
ALTER TABLE `dsdetai`
  ADD CONSTRAINT `dsdetai_ibfk_1` FOREIGN KEY (`MAHN`) REFERENCES `dshoinghi` (`MAHN`);

--
-- Các ràng buộc cho bảng `dsthamgia`
--
ALTER TABLE `dsthamgia`
  ADD CONSTRAINT `dsthamgia_ibfk_1` FOREIGN KEY (`MADETAI`) REFERENCES `dsdetai` (`MADETAI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
