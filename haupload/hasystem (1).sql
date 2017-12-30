-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2017 at 07:41 AM
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
  `link_fb` text NOT NULL,
  `chat_lieu` text NOT NULL,
  `kieu_dang` text NOT NULL,
  `xs` int(11) NOT NULL,
  `s` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `xl` int(11) NOT NULL,
  `xxl` int(11) NOT NULL,
  `xxxl` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `chiet_khau` int(11) NOT NULL,
  `da_coc` int(11) NOT NULL,
  `hinh_thuc` text NOT NULL,
  `hinh_thucck` int(11) NOT NULL,
  `ghi_chu_tt` text NOT NULL,
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

INSERT INTO `donhang` (`id`, `mkh`, `name`, `addrress`, `place`, `phone`, `product`, `quantity`, `price`, `size`, `sale`, `order_date`, `exp_date`, `pay`, `info`, `link_fb`, `chat_lieu`, `kieu_dang`, `xs`, `s`, `m`, `l`, `xl`, `xxl`, `xxxl`, `city`, `chiet_khau`, `da_coc`, `hinh_thuc`, `hinh_thucck`, `ghi_chu_tt`, `status`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`) VALUES
(151, 1, 'Dao Duy Khanh', '129 nguyen trai, thanh xuan', 'ha noi', 868925649, '2', 100, 99000, '', 2, '2017-12-30', '2017-12-30', '9900000', 'COD', 'http://khanhdeptrai.com', 'coston', 'coc tay', 20, 20, 20, 20, 5, 5, 10, 0, 100000, 1000000, '', 0, 'VCB', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(152, 0, 'Dao Duy Khanh', '129 nguyen trai, thanh xuan', 'ha noi', 868925649, '', 100, 99000, '', 2, '2017-12-30', '2017-12-30', '9900000', 'COD', 'http://khanhdeptrai.com', 'coston', 'coc tay', 20, 20, 20, 20, 5, 5, 10, 0, 100000, 1000000, '', 0, 'ACB', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(153, 1, 'Dao Duy Khanh', '129 nguyen trai, thanh xuan', 'ha noi', 868925649, '2', 100, 99000, '', 2, '2017-12-30', '2017-12-30', '9900000', 'COD', 'http://khanhdeptrai.com', 'coston', 'coc tay', 20, 20, 20, 20, 5, 5, 10, 0, 100000, 1000000, '', 0, 'VCB', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(154, 1, 'Dao Duy Khanh', '129 nguyen trai, thanh xuan', 'ha noi', 868925649, '1', 100, 99000, '', 2, '2017-12-30', '2017-12-30', '9900000', 'COD', 'http://khanhdeptrai.com', 'coston', 'coc tay', 20, 20, 20, 20, 5, 5, 10, 0, 100000, 1000000, '', 0, 'VCB', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(155, 1, 'Dao Duy Khanh', '129 nguyen trai, thanh xuan', 'ha noi', 868925649, '1', 100, 99000, '', 2, '2017-12-30', '2017-12-30', '9900000', 'COD', 'http://khanhdeptrai.com', 'coston', 'coc tay', 20, 20, 20, 20, 5, 5, 10, 0, 100000, 1000000, '', 0, 'ACB', '', 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
  `password` varchar(130) NOT NULL,
  `leader` int(11) NOT NULL,
  `pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `code`, `employer`, `permision`, `username`, `password`, `leader`, `pro`) VALUES
(1, 'HAM-4458256', 'Má»¹ DuyÃªn', 1, 'myduyen', '184d74effe51077c54f2596d1a740d46', 0, 0),
(2, 'HAM-4458256', 'KhÃ¡nh Linh', 2, 'khanhlinh', '184d74effe51077c54f2596d1a740d46', 0, 0),
(3, 'HAM-4458256', 'KhÃ¡nh Äáº¹p Trai', 3, 'khanhdeptrai', '184d74effe51077c54f2596d1a740d46', 0, 0),
(4, 'HAM-4458256', 'Sếp', 69, 'sep', '184d74effe51077c54f2596d1a740d46', 0, 0);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

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
