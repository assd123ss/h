-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 05:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prd_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `img_id` int(4) NOT NULL COMMENT 'รหัสรูปภาพ',
  `img_name` varchar(50) DEFAULT NULL COMMENT 'ชื่อรูปภาพ',
  `img_detail` varchar(100) DEFAULT NULL COMMENT 'รายละเอียดรูปภาพ',
  `img_price` int(11) DEFAULT NULL COMMENT 'ราคารูปภาพ',
  `imgtype_id` int(10) DEFAULT NULL COMMENT 'รหัสประเภทรูปภาพ',
  `img` varchar(50) DEFAULT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `imgtype`
--

CREATE TABLE `imgtype` (
  `imgtype_id` int(10) NOT NULL COMMENT 'รหัสประเภทรูปภาพ',
  `imgtype_name` varchar(50) DEFAULT NULL COMMENT 'ชื่อประเภทรูปภาพ',
  `typeing` varchar(200) DEFAULT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `username` varchar(20) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `password` varchar(50) NOT NULL COMMENT 'รหัสผ่าน',
  `admin_name` varchar(50) NOT NULL COMMENT 'ชื่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `admin_name`) VALUES
(1, 'chaiwat123', '12345', 'ชัยวัฒน์');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `user_id` int(4) NOT NULL COMMENT 'รหัสสมาชิก',
  `name` varchar(20) DEFAULT NULL COMMENT 'ชื่อผู้ใช้งาน',
  `lastname` varchar(20) DEFAULT NULL COMMENT 'นามสกุล',
  `brithday` date DEFAULT NULL COMMENT 'วันเกิด',
  `gender` int(2) DEFAULT NULL COMMENT 'เพศ',
  `address` varchar(100) DEFAULT NULL COMMENT 'ที่อยู่',
  `email` varchar(50) DEFAULT NULL COMMENT 'อีเมลล์สมาชิก',
  `username` varchar(20) DEFAULT NULL COMMENT 'ชื่อ',
  `password` varchar(50) DEFAULT NULL COMMENT 'รหัสผ่าน',
  `tel` varchar(10) CHARACTER SET latin1 DEFAULT NULL COMMENT 'เบอร์โทร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`user_id`, `name`, `lastname`, `brithday`, `gender`, `address`, `email`, `username`, `password`, `tel`) VALUES
(123, 'ชัยวัฒน์ ', 'ทิวาพัฒน์', '2002-05-04', 1, 'ubonratchatani', 'chaiwat123@gmail.com', 'chaiwat123', '12345', '0988989765'),
(1234, 'ชัยวัฒน์ ', 'ทิวาพัฒน์', '0000-00-00', 1, 'อุบลราชธานี', 'chaiwat123@gmail.com', 'chaiwat123', '12345', '0988989765');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`img_id`),
  ADD UNIQUE KEY `imgtype_id` (`imgtype_id`);

--
-- Indexes for table `imgtype`
--
ALTER TABLE `imgtype`
  ADD PRIMARY KEY (`imgtype_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `img_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'รหัสรูปภาพ';

--
-- AUTO_INCREMENT for table `imgtype`
--
ALTER TABLE `imgtype`
  MODIFY `imgtype_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเภทรูปภาพ';

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=1235;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
