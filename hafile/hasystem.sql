-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 02:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hasystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `id` int(10) NOT NULL,
  `username` mediumtext NOT NULL,
  `numberphone` varchar(13) NOT NULL,
  `password` varchar(130) NOT NULL,
  `sex` int(130) NOT NULL,
  `age` int(10) NOT NULL,
  `source` int(130) NOT NULL,
  `status` int(130) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`id`, `username`, `numberphone`, `password`, `sex`, `age`, `source`, `status`, `date`) VALUES
(1, 'Khanh Dep Trai', '0868091604', 'khanhkhanh', 0, 16, 0, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(10) NOT NULL,
  `mkh` int(10) NOT NULL,
  `name` varchar(130) NOT NULL,
  `addrress` varchar(1000) NOT NULL,
  `place` varchar(130) NOT NULL,
  `phone` int(12) NOT NULL,
  `product` mediumtext NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `size` text NOT NULL,
  `sale` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `pay` text NOT NULL,
  `info` text NOT NULL,
  `status` varchar(130) NOT NULL,
  `1` int(11) NOT NULL,
  `2` int(11) NOT NULL,
  `3` int(11) NOT NULL,
  `4` int(11) NOT NULL,
  `5` int(11) NOT NULL,
  `6` int(11) NOT NULL,
  `7` int(11) NOT NULL,
  `8` int(11) NOT NULL,
  `9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `mkh`, `name`, `addrress`, `place`, `phone`, `product`, `quantity`, `price`, `size`, `sale`, `order_date`, `exp_date`, `pay`, `info`, `status`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`) VALUES
(92, 0, 'chÃ³ khÃ¡nh', 'gá»‘c 5', '5', 925323082, '1', 34, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-22', '', '', '0', 1, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 0, 'Quang Du', 'Hanoi, Viá»‡t Nam, TrÃ¡i Äáº¥t, Há»‡ Máº·t Trá»i', '29', 988020046, '2', 2, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-22', '', '', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 0, 'e khÃ¡nh', '1', '3', 925323082, '3', 54, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-22', '', '', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 0, 'Quang Du 2', 'Hanoi, Viá»‡t Nam, TrÃ¡i Äáº¥t, Há»‡ Máº·t Trá»i', '31', 988020046, '2', 2, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-22', '', '', '3', 1, 1, 1, 1, 1, 1, 1, 0, 0),
(96, 0, 'Quang Du 3', 'Hanoi, Viá»‡t Nam, TrÃ¡i Äáº¥t, Há»‡ Máº·t Trá»i', '20', 988020046, '2', 2, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-22', '', '', '3', 1, 0, 0, 0, 0, 0, 0, 0, 0),
(97, 0, 'Quang Du 4', 'Hanoi, Viá»‡t Nam, TrÃ¡i Äáº¥t, Há»‡ Máº·t Trá»i', '30', 988020046, '2', 2, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-22', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(98, 0, 'NgÆ°á»i yÃªu khÃ¡nh', '1', '40', 925323082, '3', 54, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-22', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(99, 0, 'Quang Du 5', 'Hanoi, Viá»‡t Nam, TrÃ¡i Äáº¥t, Há»‡ Máº·t Trá»i', '39', 988020046, '3', 2, 99000, 'S:1/X:5/L:17/XL:2', 0, '0000-00-00', '2017-12-22', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100, 0, 'NgÆ°á»i yÃªu tháº¯ng', '1', '35', 925323082, '1', 54, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-22', '', '', '2', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(101, 0, 'Quang Du 6', 'Hanoi, Viá»‡t Nam, TrÃ¡i Äáº¥t, Há»‡ Máº·t Trá»i', '15', 988020046, '1', 2, 99000, 'S:1/X:5/L:17/XL:2', 0, '0000-00-00', '2017-12-22', '', '', '2', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(102, 0, 'Quang Du 8', 'Hanoi, Viá»‡t Nam, TrÃ¡i Äáº¥t, Há»‡ Máº·t Trá»i', '16', 988020046, '3', 2, 99000, 'S:1/X:5/L:17/XL:2', 0, '0000-00-00', '2017-12-22', '', '', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(103, 0, 'Quang Du 9', 'Hanoi, Viá»‡t Nam, TrÃ¡i Äáº¥t, Há»‡ Máº·t Trá»i', '25', 988020046, '2', 2, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-22', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(104, 0, 'Quang Du 10', 'Hanoi, Viá»‡t Nam, TrÃ¡i Äáº¥t, Há»‡ Máº·t Trá»i', '37', 988020046, '3', 2, 99000, 'S:1/X:5/L:17/XL:2', 0, '0000-00-00', '2017-12-22', '', '', '0', 1, 0, 0, 0, 0, 0, 0, 0, 0),
(105, 0, 'Nguyá»…n Tiáº¿n PhÆ°Æ¡ng', '129A Tráº§n Duy HÆ°ng, Gá»‘c cÃ¢y sá»‘ 3', '33', 95415162, '2', 3, 99000, 'S:1/X:5/L:17/XL:2', 0, '0000-00-00', '2017-12-22', '', '', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(106, 0, 'Má»¹ DuyÃªn', '129 Nguyá»…n trÃ£i, thanh xuÃ¢n', '41', 92647548, '3', 22, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-23', '', '', '2', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(107, 0, 'KhÃ¡nh Linh', '129 Nguyá»…n trÃ£i, thanh xuÃ¢n', '36', 92647548, '1', 22, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-23', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(108, 0, 'KhÃ¡nh Äáº¹p Trai', '129 Nguyá»…n trÃ£i, thanh xuÃ¢n', '34', 92647548, '3', 22, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-23', '', '', '3', 1, 1, 0, 1, 0, 0, 0, 0, 0),
(109, 0, 'KhÃ¡nh Äáº¹p Trai', '129 Nguyá»…n trÃ£i, thanh xuÃ¢n', '44', 92647548, '3', 22, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-23', '', '', '1', 1, 0, 0, 0, 0, 0, 0, 0, 0),
(110, 0, 'KhÃ¡nh Äáº¹p Trai', '129 Nguyá»…n trÃ£i, thanh xuÃ¢n', '11', 92647548, '3', 22, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-23', '', '', '3', 1, 0, 0, 0, 0, 0, 0, 0, 0),
(111, 0, 'KhÃ¡nh Äáº¹p Trai', '129 Nguyá»…n trÃ£i, thanh xuÃ¢n', '6', 92647548, '2', 22, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-23', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(112, 0, 'KhÃ¡nh Äáº¹p Trai', '129 Nguyá»…n trÃ£i, thanh xuÃ¢n', '54', 92647548, '3', 22, 99000, 'S:1/X:5/L:17/XL:2', 1, '0000-00-00', '2017-12-23', '', '', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(113, 0, 'KhÃ¡nh Äáº¹p Trai', '129 Nguyá»…n trÃ£i, thanh xuÃ¢n', '21', 92647548, '3', 22, 99000, 'S:1/X:5/L:17/XL:2', 0, '0000-00-00', '2017-12-23', '', '', '3', 1, 0, 0, 0, 0, 0, 0, 0, 0),
(114, 0, 'KhÃ¡nh Äáº¹p Trai', '129 Nguyá»…n trÃ£i, thanh xuÃ¢n', '24', 92647548, '2', 22, 99000, 'S:1/X:5/L:17/XL:2', 0, '0000-00-00', '2017-12-23', '', '', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(115, 0, 'KhÃ¡nh Äáº¹p Trai', '129 Nguyá»…n trÃ£i, thanh xuÃ¢n', '2', 92647548, '3', 22, 99000, 'S:1/X:5/L:17/XL:2', 0, '0000-00-00', '2017-12-23', '', '', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(10) NOT NULL,
  `code` varchar(130) NOT NULL,
  `employer` varchar(130) NOT NULL,
  `permision` int(10) NOT NULL,
  `username` varchar(130) NOT NULL,
  `password` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `code`, `employer`, `permision`, `username`, `password`) VALUES
(1, 'HAM-4458256', 'Má»¹ DuyÃªn', 1, 'myduyen', '184d74effe51077c54f2596d1a740d46'),
(2, 'HAM-4458256', 'KhÃ¡nh Linh', 2, 'khanhlinh', '184d74effe51077c54f2596d1a740d46'),
(3, 'HAM-4458256', 'KhÃ¡nh Äáº¹p Trai', 3, 'khanhdeptrai', '184d74effe51077c54f2596d1a740d46'),
(4, 'HAM-4458256', 'Sếp', 69, 'sep', '184d74effe51077c54f2596d1a740d46');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(10) NOT NULL,
  `link` mediumtext NOT NULL,
  `name` varchar(130) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `link`, `name`, `date`) VALUES
(1, 'http://hinhnendepnhat.net/wp-content/uploads/2017/07/nhung-hinh-anh-dep-danh-cho-facebook-ve-chu-meo-dang-yeu.jpg', 'T?p m?i', '0000-00-00'),
(2, 'http://hinhnendepnhat.net/wp-content/uploads/2017/07/nhung-hinh-anh-dep-danh-cho-facebook-ve-chu-meo-dang-yeu.jpg', 'T?p m?i2', '0000-00-00'),
(3, 'http://hinhnendepnhat.net/wp-content/uploads/2017/07/nhung-hinh-anh-dep-danh-cho-facebook-ve-chu-meo-dang-yeu.jpg', 'T?p m?i3', '0000-00-00'),
(4, 'http://hinhnendepnhat.net/wp-content/uploads/2017/07/nhung-hinh-anh-dep-danh-cho-facebook-ve-chu-meo-dang-yeu.jpg', 'T?p m?i4', '0000-00-00'),
(5, 'http://hinhnendepnhat.net/wp-content/uploads/2017/07/nhung-hinh-anh-dep-danh-cho-facebook-ve-chu-meo-dang-yeu.jpg', 'T?p m?i5', '0000-00-00'),
(6, 'http://hinhnendepnhat.net/wp-content/uploads/2017/07/nhung-hinh-anh-dep-danh-cho-facebook-ve-chu-meo-dang-yeu.jpg', 'T?p m?i6', '0000-00-00'),
(7, 'http://hinhnendepnhat.net/wp-content/uploads/2017/07/nhung-hinh-anh-dep-danh-cho-facebook-ve-chu-meo-dang-yeu.jpg', 'T?p m?i7', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `id` int(10) NOT NULL,
  `name` varchar(130) NOT NULL,
  `img` mediumtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numberphone` (`numberphone`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
