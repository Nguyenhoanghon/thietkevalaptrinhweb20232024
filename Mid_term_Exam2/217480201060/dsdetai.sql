-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 05:16 AM
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
-- Table structure for table `dsdetai`
--

CREATE TABLE `dsdetai` (
  `MADETAI` varchar(10) NOT NULL,
  `TENDETAI` varchar(50) NOT NULL,
  `KINHPHI` int(11) NOT NULL,
  `MAHN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dsdetai`
--

INSERT INTO `dsdetai` (`MADETAI`, `TENDETAI`, `KINHPHI`, `MAHN`) VALUES
('BL002', 'php', 500000, 'SG231'),
('MT001', 'Xu lu nuoc thai nha may che bien', 1100000, 'BL001'),
('MT002', 'Xu lu rac CN', 1300000, 'BL001'),
('NDCVT', 'Nhan dang chu viet tay', 2000000, 'SG231'),
('sgd', 'sgr', 5555, 'SG231'),
('TOUDM', 'Ung dung toi uu hoa du bao mua lu', 4000000, 'SG231'),
('XLAVB', 'Xu lu anh van ban', 5000000, 'BL101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dsdetai`
--
ALTER TABLE `dsdetai`
  ADD PRIMARY KEY (`MADETAI`),
  ADD KEY `DT-HN` (`MAHN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dsdetai`
--
ALTER TABLE `dsdetai`
  ADD CONSTRAINT `DT-HN` FOREIGN KEY (`MAHN`) REFERENCES `dshoinghi` (`MAHN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
