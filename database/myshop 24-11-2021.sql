-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2021 at 04:52 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_detail` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_group` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_brand` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_image` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `promotion` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_rate` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_lastupdate` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_insert` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_detail`, `product_group`, `product_price`, `product_brand`, `product_image`, `promotion`, `product_rate`, `product_lastupdate`, `product_insert`) VALUES
(2, 'AM4 AMD RYZEN 5 5600X', '• 6 Cores • 12 Threads • Discrete Graphics Require', 'CPU', '10300', 'AMD', 'https://www.jib.co.th/img_master/product/original/20210825104649_43471_21_2.jpg', '0', '10', '2021-11-23 15:28:01', '2021-11-23 15:28:01'),
(3, 'AMD Ryzen™ 5 3600', '# of CPU Cores 6 # of Threads 12 Max. Boost Clock ', 'CPU', '5780', 'AMD', 'https://www.jib.co.th/img_master/product/original/20210825104649_43471_21_2.jpg', '0', '5', '2021-11-23 15:28:01', '2021-11-23 15:28:01'),
(6, 'Intel® Core™ i5-1135G7', '# Cores 4  # Threads 8 Speed 4.20 GHz ', 'CPU', '5900', 'INTEL', 'https://www.intel.com/content/dam/www/global/ark/badges/208228_128.gif/jcr:content/renditions/_64.gif', '', '7', '2021-11-23 15:28:01', '2021-11-23 15:28:01'),
(7, 'RTX3090/24GB GIGABYTE GAMING (OC/D6)', 'NVIDIA Ampere Streaming Multiprocessors 2nd Genera', 'VGA', '87575', 'gigabyte', 'https://img.advice.co.th/images_nas/pic_product4/A0133107/A0133107OK_BIG_1.jpg', '1', '2', '2021-11-23 15:28:01', '2021-11-23 15:28:01'),
(8, 'GTX1050TI/4GB GIGABYTE (OC/D5)', 'Features  Powered by GeForce® GTX 1050 Ti Integrat', 'VGA', '5970', 'GIGABYTE', 'https://img.advice.co.th/images_nas/pic_product4/A0094050/A0094050OK_BIG_1.jpg', '1', '0', '2021-11-23 15:28:01', '2021-11-23 15:28:01'),
(12, 'CPU COOLER TSUNAMI TSS-1000 RGB', 'การออกแบบใบพัด มี 5 ใบ การระบายอากาศสูงสุด 90 วัตต', 'CPU_COOLLER', '280', 'TSUNAMI ', 'https://img.advice.co.th/images_nas/pic_product4/A0125615/A0125615OK_BIG_1.jpg', '', '0', '2021-11-23 20:48:23', '2021-11-23 20:48:23'),
(9, 'Monitor 31.5\' AOC Q32V3S/WS (IPS, HDMI, DP) 2K 75H', 'จอแสดงผล QHD IPS ทำให้สามารถรับชมภาพในมุมมองที่กว้', 'MONITOR', '8890', 'AOC ', 'https://img.advice.co.th/images_nas/pic_product4/A0136894/A0136894OK_BIG_1.jpg', '1', '0', '2021-11-23 15:33:45', '2021-11-23 15:33:45'),
(10, 'ATX CASE (NP) VIKINGS A3 (BLACK)', 'รองรับเมนบอร์ด : ATX, Micro ATX, Mini ITX มีพอร์ตเ', 'CASE', '570', 'VIKINGS', 'https://img.advice.co.th/images_nas/pic_product4/A0131519/A0131519OK_BIG_1.jpg', '1', '0', '2021-11-23 19:47:32', '2021-11-23 19:47:32'),
(11, 'INTEL Core i5-11400F', ' Model Brand INTEL - INTEL Series Core i5 Model Co', 'CPU', '6990', 'intel', 'https://notebookspec.com/web/pc/pic-pc/cpu/20210317-104155_1.png', '', '0', '2021-11-23 19:53:58', '2021-11-23 19:53:58'),
(13, 'Mini Power Supply (80+ Platinum) 750W CORSAIR SF75', 'The CORSAIR SF750 80 PLUS Platinum SFX Power Suppl', 'POWER_SUPPLY', '4990', 'CORSAIR', 'https://img.advice.co.th/images_nas/pic_product4/A0139354/A0139354OK_BIG_1.jpg', '', '0', '2021-11-23 20:59:48', '2021-11-23 20:59:48'),
(17, 'RAM DDR3(1333) 4GB HYNIX 16 CHIP', 'Capacity 4 GB Memory Type DDR3 Speed Bus 1333 MHz', 'RAM', '610', 'HYNIX ', 'models/images/1637684503.jpg', '', '0', '2021-11-23 23:21:43', '2021-11-23 23:21:43'),
(20, '120 GB SSD SATA PNY CS900 (SSD7CS900-120-RB)', 'Sequential Read of up to 515MB/s and Write of up t', 'SSD', '680', 'PNY', 'https://img.advice.co.th/images_nas/pic_product4/A0136359/A0136359OK_BIG_1.jpg', '', '0', '2021-11-23 23:29:22', '2021-11-23 23:29:22'),
(19, 'RAM DDR2(800) 2GB BLACKBERRY 16CHIP', 'Capacity : 2GB Memory Type : DDR2 Speed Bus : 800M', 'RAM', '450', 'BLACKBERRY', 'https://img.advice.co.th/images_nas/pic_product4/A0131977/A0131977OK_BIG_1.jpg', '', '0', '2021-11-23 23:26:19', '2021-11-23 23:26:19'),
(21, '120 GB SSD SATA WD GREEN (WDS120G2G0A)', 'Sequential read speeds of up to 545MB/s. Ultra low', 'SSD', '950', 'Western', 'https://img.advice.co.th/images_nas/pic_product4/A0108214/A0108214OK_BIG_1.jpg', '', '0', '2021-11-23 23:31:31', '2021-11-23 23:31:31'),
(22, '128 GB SSD SATA APACER AS350 (AP128GAS350-1)', 'Capacity : 128 GB Interface : SATA III Form Factor', 'SSD', '790', 'APACER', 'https://img.advice.co.th/images_nas/pic_product4/A0134975/A0134975OK_BIG_1.jpg', '', '0', '2021-11-23 23:33:38', '2021-11-23 23:33:38'),
(23, '120 GB SSD SATA KINGSTON A400 (SA400S37/120G)', 'Capacity : 120 GB Interface : SATA III Form Factor', 'RAM', '900', 'KINGSTON', 'https://img.advice.co.th/images_nas/pic_product4/A0100025/A0100025OK_BIG_1.jpg', '', '0', '2021-11-23 23:35:18', '2021-11-23 23:35:18'),
(24, 'Monitor 49\' SAMSUNG ODYSSEY LC49G95TSSEXXT (VA, HD', 'ดื่มด่ำไปกับการเล่นเกมได้ยิ่งกว่าเดิมด้วยความโค้ง ', 'MONITOR', '44900', 'Samsung', 'https://img.advice.co.th/images_nas/pic_product4/A0132620/A0132620OK_BIG_1.jpg', '', '0', '2021-11-23 23:37:16', '2021-11-23 23:37:16'),
(25, 'MAINBOARD (AM4) ASROCK A320M-DVS R4.0', 'AMD AM4 Socket 2 DIMMs, Supports DDR4 3200+(OC)* 1', 'MAINBOARD', '1590', 'ASROCK', 'https://img.advice.co.th/images_nas/pic_product4/A0123055/A0123055OK_BIG_1.jpg', '', '0', '2021-11-23 23:39:03', '2021-11-23 23:39:03'),
(26, 'MAINBOARD (AM4) MSI A320M-A PRO', 'Supports 1st, 2nd and 3rd Gen AMD Ryzen™ / Ryzen™ ', 'MAINBOARD', '1450', 'MSI', 'models/images/1637685706.png', '', '0', '2021-11-23 23:41:46', '2021-11-23 23:41:46'),
(27, '1 TB HDD CCTV TOSHIBA S300 (5700RPM, 64MB, SATA-3,', 'EMEA Region, Toshiba Storage Solutions – The 3.5-i', 'HDD', '1150', 'TOSHIBA', 'models/images/1637685856.png', '', '0', '2021-11-23 23:44:16', '2021-11-23 23:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL COMMENT 'ID ผู้ใช้',
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_money` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_profile` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'รูปโปรไฟล์',
  `user_insert` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'วันที่สมัคร',
  `user_update` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'วันที่อัปเดทล่าสุด',
  `user_role` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`, `user_name`, `user_phone`, `user_money`, `user_mail`, `user_address`, `user_profile`, `user_insert`, `user_update`, `user_role`) VALUES
(1, 'admin', '1234', 'แอดมินไอตู่', '0987654320', '99999999', 'admin@gmail.com', '555/656', 'models/images/1637729450.png', '2021-11-23 03:45:01', '2021-11-24 11:50:50', 'Admin'),
(2, 'member', '1234', 'Member Zz', '0987654321', '0', 'member@gm.com', '555/656', 'https://i.pinimg.com/474x/50/70/10/5070101ae7cc267a1ba03d30abdd38e9.jpg', '2021-11-23 03:26:25', '2021-11-23 03:26:25', 'member'),
(3, 'NonNie', '123456', 'NonNie EiTaiYo', '0812345670', '0', 'NonNie@Eitaiyo.co.th', '8/77', 'models/images/1637727092.png', '2021-11-23 03:39:19', '2021-11-24 11:36:27', 'member'),
(4, 'Kamiku2356', 'Kamiku2356', 'Kamiku2356', '0978654123', '0', 'Kamiku2356@gmail.com', '56/78', 'https://i.pinimg.com/474x/50/70/10/5070101ae7cc267a1ba03d30abdd38e9.jpg', '2021-11-23 03:40:57', '2021-11-23 03:40:57', 'member'),
(5, 'jeck', 'revelsoftlnw', 'Jekzy Lozz', '0987456321', '0', 'jeck@hotmail.com', '56/79', 'https://virl.bc.ca/wp-content/uploads/2019/01/AccountIcon2.png', '2021-11-23 03:42:40', '2021-11-23 03:42:40', 'member'),
(6, 'member1', 'member1', 'member1', 'member1', '0', 'member1@member1.com', 'member1', 'https://virl.bc.ca/wp-content/uploads/2019/01/AccountIcon2.png', '2021-11-23 03:45:01', '2021-11-23 03:45:01', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID ผู้ใช้', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
