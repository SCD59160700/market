-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 06, 2020 at 05:23 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `mk_id` int(11) NOT NULL COMMENT 'รหัสตลาด',
  `mk_name` varchar(255) NOT NULL COMMENT 'ชื่อตลาด',
  `mk_img` varchar(255) NOT NULL COMMENT 'รูปตลาด',
  `mk_status` varchar(45) NOT NULL COMMENT 'สถานะ',
  `mk_type` varchar(45) NOT NULL COMMENT 'ประเภทตลาด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`mk_id`, `mk_name`, `mk_img`, `mk_status`, `mk_type`) VALUES
(1, 'ตลาดบางระจันทร์', '', 'active', 'Fresh'),
(2, 'ตลาดอินทร์', '', 'active', 'local'),
(13, 'ตลาดรึป่าว', '', 'active', 'Fresh'),
(14, 'market', '', 'active', 'ตลาดสด');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ord_id` int(11) NOT NULL,
  `ord_tel` varchar(10) NOT NULL,
  `ord_total` float NOT NULL,
  `create_at` datetime NOT NULL,
  `ord_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `od_id` int(11) NOT NULL COMMENT 'รหัสรายละเอียดใบสั่งซื้อ',
  `od_amount` int(11) NOT NULL COMMENT 'จำนวนสินค้า',
  `od_price` int(11) NOT NULL COMMENT 'ราคาสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prd_id` int(11) NOT NULL,
  `prd_name` varchar(255) NOT NULL,
  `prd_detail` text NOT NULL,
  `prd_stock` int(11) NOT NULL,
  `prd_sell` int(11) NOT NULL,
  `prd_price` float NOT NULL,
  `prd_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prd_id`, `prd_name`, `prd_detail`, `prd_stock`, `prd_sell`, `prd_price`, `prd_img`) VALUES
(1, 'patwo', 'mnbvcx', 64, 0, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL COMMENT 'รหัสร้านค้า',
  `shop_name` varchar(255) NOT NULL COMMENT 'ชื่อร้านค้า',
  `shop_detail` text NOT NULL COMMENT 'รายละเอียดร้านค้า',
  `shop_cd_condition` text NOT NULL COMMENT 'เงื่อนไขการสั่งซื้อ',
  `shop_contact` text NOT NULL COMMENT 'ช่องทางการติดต่อ',
  `shop_img` varchar(255) NOT NULL COMMENT 'รูป',
  `shop_status` varchar(45) NOT NULL COMMENT 'สถานะร้านค้า',
  `mk_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `shop_name`, `shop_detail`, `shop_cd_condition`, `shop_contact`, `shop_img`, `shop_status`, `mk_id`, `user_id`) VALUES
(33, 'ป้าสมใจ', 'ขายขนมหวานทุกชนิด', 'ซื้อได้ไม่เกินคนละ500ชิ้น/คน', 'line:somjaizamak ', '', 'status', 2, 0),
(46, 'jam', 'นกดากดเาสากดเ', 'หกหเกด้เก้', 'dfhaeth', '', 'active', 2, 0),
(48, 'ขนมเบื้อง', 'นกดากดเาสากดเ', 'หกหเกด้เก้', 'ดเ่ด้าเ่', '', 'active', 1, 18),
(49, 'ขนมเบื้อง', 'นกดากดเาสากดเ', 'หกหเกด้เก้', 'ดเ่ด้าเ่', '', 'active', 11, 41),
(50, 'ขนมเบื้อง', 'นกดากดเาสากดเ', 'หกหเกด้เก้', 'ดเ่ด้าเ่', '', 'active', 1, 41),
(51, 'ของชำ', 'ajsdgl', 'เาเ่าส่า', 'dfhaeth', '', 'active', 13, 61);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL COMMENT 'รหัสสมาชิก',
  `user_fname` varchar(255) NOT NULL COMMENT 'ชื่อ',
  `user_lname` varchar(255) NOT NULL COMMENT 'นามสกุล',
  `user_username` varchar(45) NOT NULL COMMENT 'ยูสเซอร์เนม',
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL COMMENT 'อีเมลล์',
  `user_tel` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `user_address` text NOT NULL,
  `user_status` varchar(45) NOT NULL,
  `user_type` varchar(45) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fname`, `user_lname`, `user_username`, `user_pass`, `user_email`, `user_tel`, `user_address`, `user_status`, `user_type`, `create_at`, `update_at`) VALUES
(18, 'us', '123', 'user1', '1234', 'fhjsdfghjkl', '852063', 'ikhgdfghj', 'active', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'ad', '1111', 'admin1', '1234', 'tyuihj', 'fghjkk', 'kujhnmhkjkl', '', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'su', 'admin', 'super', '1234', 'hujkghjk', 'sdfghj', 'dfghjkl', '', 'superadmin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'ch', 'lee', 'root', '12345', 'exam@gmail.com', '05866fg', 'hjl', 'active', 'superadmin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'ja', 'na', 'admin', '1234', 'gdf@gmail.com', '0856261615', 'fasdgadfg', 'inactive', 'user', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'je', 'lee', 'jeno', '1234', 'gdf@gmail.com', '025852025', 'fasdgadfg', 'inactive', 'admin', '2020-08-03 06:21:50', '0000-00-00 00:00:00'),
(64, 'te', 'narak', 'ten', '1234', 'gdf@gmail.com', '086562624', 'thrjty', 'active', 'user', '2020-08-18 00:00:00', '0000-00-00 00:00:00'),
(65, 'sg', 'dgfgh', 'jaem', '', 'gdf@gmail.com', '', 'rshyy', 'active', 'admin', '2020-08-05 06:09:52', '0000-00-00 00:00:00'),
(66, 'lu', 'wong', 'cus', '1234', 'gdf@gmail.com', '0856261615', 'china ', 'active', 'superadmin', '2020-08-05 06:14:38', '0000-00-00 00:00:00'),
(67, 'ku', 'wong', 'kun', '1234', 'gdf@gmail.com', '0856261615', 'china ', 'active', 'admin', '2020-08-05 06:17:28', '0000-00-00 00:00:00'),
(68, 'ji', 'park', 'jisung', '1234', 'gdf@gmail.com', '0856261615', 'sczdv', 'inactive', 'admin', '2020-08-05 07:40:27', '0000-00-00 00:00:00'),
(71, 'te', 'changpueng', 'Pretz7788', '11111111', 'nungmai_91@hotmail.com', '0861303696', '77/555ww  dfdgds   gggggggg  5555 yyyyy  ddddddddddddddddddddddddddddddd', 'active', 'user', '2020-08-05 01:00:40', '0000-00-00 00:00:00'),
(72, '55', '555555', '555555555555', '55555555555', '6666666@hotmail.com', '55555', '55555', 'active', 'user', '2020-08-05 01:04:29', '0000-00-00 00:00:00'),
(73, 'ss', 'ssss', 'sss', '1234', 'gdf@gmail.com', 'ุุุุ66666', 'fasdgadfg', 'active', 'user', '2020-08-05 01:10:46', '0000-00-00 00:00:00'),
(74, 'ee', 'eeee', 'eee', '123', 'gdf@gmail.com', '0856261615', 'fasdgadfg', 'active', 'user', '2020-08-05 01:13:46', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`mk_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prd_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `mk_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสตลาด', AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสรายละเอียดใบสั่งซื้อ';
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสร้านค้า', AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=75;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `ord_user_id` FOREIGN KEY (`ord_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
