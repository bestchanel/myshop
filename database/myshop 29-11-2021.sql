-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2021 at 08:17 AM
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
  `cart_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `user_id`, `product_id`) VALUES
(11, 4, 31),
(12, 4, 9),
(13, 4, 41),
(14, 4, 30),
(15, 4, 28),
(16, 4, 10),
(17, 4, 7),
(18, 4, 19),
(2080, 0, 34),
(2664, 0, 31),
(2663, 0, 31),
(2079, 0, 34),
(2078, 0, 34),
(2077, 0, 34),
(2076, 0, 34),
(840, 8, 10),
(2665, 0, 31),
(839, 8, 10),
(838, 8, 10),
(2662, 0, 31),
(2656, 0, 33),
(2075, 0, 34);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cheat`
--

CREATE TABLE `tbl_cheat` (
  `cheat_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `cheat_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cheat_val` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cheat_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cheat`
--

INSERT INTO `tbl_cheat` (`cheat_id`, `user_id`, `cheat_code`, `cheat_val`, `cheat_date`) VALUES
(1, 3, 'm', '0', '2021-11-28 16:54:49'),
(2, 3, 'm', '1000000', '2021-11-28 16:55:16'),
(3, 3, 'm', 'a', '2021-11-28 16:55:51'),
(4, 3, 'a(fail)', 'r(error)', '2021-11-28 16:56:39'),
(5, 3, 'a(fail)', 'r(error)', '2021-11-28 16:59:54'),
(6, 3, 'a(fail)', 'r(error)', '2021-11-28 17:01:23'),
(7, 3, 'm', '56.78', '2021-11-28 17:01:52'),
(8, 3, 'm', '1256.78', '2021-11-28 17:06:59'),
(9, 3, 'm', '5000', '2021-11-28 17:08:22'),
(10, 3, 'r', 'm', '2021-11-28 17:08:58'),
(11, 3, 'p', 'https://c.tenor.com/3zBz29aUOM8AAAAC/anime-profile.gif', '2021-11-28 17:16:13'),
(12, 3, '(fail)', 'm-5000(error)', '2021-11-28 17:33:47'),
(13, 3, '(fail)', 'm-1000(error)', '2021-11-28 17:33:55'),
(14, 3, '(fail)', 'm-1000(error)', '2021-11-28 17:34:46'),
(15, 3, '(fail)', 'm-1000(error)', '2021-11-28 17:36:07'),
(16, 3, 'm', '1000', '2021-11-28 17:37:11'),
(17, 3, 'm', '', '2021-11-28 17:38:04'),
(18, 3, 'r', '', '2021-11-28 17:38:04'),
(19, 3, 'm', '', '2021-11-28 17:38:20'),
(20, 3, 'r', '', '2021-11-28 17:38:20'),
(21, 3, 'm', '5000', '2021-11-28 17:39:46'),
(22, 3, 'r', 's', '2021-11-28 17:39:46'),
(23, 3, 'm', '1000', '2021-11-28 17:40:27'),
(24, 3, 'r', 'a', '2021-11-28 17:40:27'),
(25, 3, 'm', '1000000', '2021-11-28 21:01:54'),
(26, 3, 'p', 'https://c.tenor.com/bnoJIyF0egwAAAAC/eat-profile-picture.gif', '2021-11-28 21:04:12'),
(27, 9, 'r', 'a', '2021-11-28 21:17:30'),
(28, 9, 'm', '99999999999', '2021-11-28 21:17:53'),
(29, 9, 'p', 'https://cdn.discordapp.com/avatars/563350850865725450/c9b3fc8ffad024cb52f1576e5e355d72.webp', '2021-11-28 21:20:52'),
(30, 3, 'r', 'm', '2021-11-29 12:43:22'),
(31, 3, 'r', 'a', '2021-11-29 13:13:17'),
(32, 5, 'm', '99999999999', '2021-11-29 13:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discount`
--

CREATE TABLE `tbl_discount` (
  `dis_id` int(11) NOT NULL,
  `dis_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dis_value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dis_method` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dis_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_discount`
--

INSERT INTO `tbl_discount` (`dis_id`, `dis_code`, `dis_value`, `dis_method`, `dis_detail`) VALUES
(1, 'yaijoy', '0.75', '*', 'ได้รับส่วนลด 25%');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `not_id` int(255) NOT NULL,
  `bill_code` varchar(255) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `dis_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_count` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price_total` int(255) NOT NULL,
  `noti_buyer_accept` int(11) NOT NULL,
  `noti_seller_accept` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_detail` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_group` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_brand` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_image` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `promotion` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_rate` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_updateby` int(11) NOT NULL,
  `product_addby` int(11) NOT NULL,
  `product_lastupdate` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_insert` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_detail`, `product_group`, `product_price`, `product_brand`, `product_image`, `promotion`, `product_rate`, `product_updateby`, `product_addby`, `product_lastupdate`, `product_insert`) VALUES
(2, 'AM4 AMD RYZEN 5 5600X', '• 6 Cores • 12 Threads • Discrete Graphics Require', 'CPU', '10300', 'AMD', 'https://www.jib.co.th/img_master/product/original/20210825104649_43471_21_2.jpg', '0', '33', 0, 0, '2021-11-23 15:28:01', '2021-11-23 15:28:01'),
(3, 'AMD Ryzen™ 5 3600', '# of CPU Cores 6 # of Threads 12 Max. Boost Clock ', 'CPU', '5780', 'AMD', 'https://www.jib.co.th/img_master/product/original/20210825104649_43471_21_2.jpg', '0', '33', 0, 0, '2021-11-23 15:28:01', '2021-11-23 15:28:01'),
(6, 'Intel® Core™ i5-1135G7', '# Cores 4  # Threads 8 Speed 4.20 GHz ', 'CPU', '5900', 'INTEL', 'https://www.intel.com/content/dam/www/global/ark/badges/208228_128.gif/jcr:content/renditions/_64.gif', '', '22', 0, 0, '2021-11-23 15:28:01', '2021-11-23 15:28:01'),
(7, 'RTX3090/24GB GIGABYTE GAMING (OC/D6)', 'NVIDIA Ampere Streaming Multiprocessors 2nd Genera', 'VGA', '87575', 'gigabyte', 'https://img.advice.co.th/images_nas/pic_product4/A0133107/A0133107OK_BIG_1.jpg', '1', '12', 0, 0, '2021-11-23 15:28:01', '2021-11-23 15:28:01'),
(8, 'GTX1050TI/4GB GIGABYTE (OC/D5)', 'Features  Powered by GeForce® GTX 1050 Ti Integrat', 'VGA', '5970', 'GIGABYTE', 'https://img.advice.co.th/images_nas/pic_product4/A0094050/A0094050OK_BIG_1.jpg', '1', '35', 0, 0, '2021-11-23 15:28:01', '2021-11-23 15:28:01'),
(12, 'CPU COOLER TSUNAMI TSS-1000 RGB', 'การออกแบบใบพัด มี 5 ใบ การระบายอากาศสูงสุด 90 วัตต์', 'CPU_COOLLER', '280', 'TSUNAMI', 'https://img.advice.co.th/images_nas/pic_product4/A0125615/A0125615OK_BIG_1.jpg', '', '45', 0, 0, '2021-11-23 20:48:23', '2021-11-23 20:48:23'),
(9, 'Monitor 31.5\' AOC Q32V3S/WS (IPS, HDMI, DP) 2K 75H', 'จอแสดงผล QHD IPS ทำให้สามารถรับชมภาพในมุมมองที่กว้าง', 'MONITOR', '8890', 'AOC', 'https://img.advice.co.th/images_nas/pic_product4/A0136894/A0136894OK_BIG_1.jpg', '1', '75', 0, 0, '2021-11-23 15:33:45', '2021-11-23 15:33:45'),
(10, 'ATX CASE (NP) VIKINGS A3 (BLACK)', 'รองรับเมนบอร์ด : ATX, Micro ATX, Mini ITX ', 'CASE', '570', 'VIKINGS', 'https://img.advice.co.th/images_nas/pic_product4/A0131519/A0131519OK_BIG_1.jpg', '1', '46', 3, 0, '2021-11-28 21:14:45', '2021-11-23 19:47:32'),
(11, 'INTEL Core i5-11400F', ' Model Brand INTEL - INTEL Series Core i5 Model Co', 'CPU', '6990', 'intel', 'https://notebookspec.com/web/pc/pic-pc/cpu/20210317-104155_1.png', '', '26', 0, 0, '2021-11-23 19:53:58', '2021-11-23 19:53:58'),
(13, 'Mini Power Supply (80+ Platinum) 750W CORSAIR SF75', 'The CORSAIR SF750 80 PLUS Platinum SFX Power Suppl', 'POWER_SUPPLY', '4990', 'CORSAIR', 'https://img.advice.co.th/images_nas/pic_product4/A0139354/A0139354OK_BIG_1.jpg', '', '39', 0, 0, '2021-11-23 20:59:48', '2021-11-23 20:59:48'),
(17, 'RAM DDR3(1333) 4GB HYNIX 16 CHIP', 'Capacity 4 GB Memory Type DDR3 Speed Bus 1333 MHz', 'RAM', '610', 'HYNIX', 'models/images/1637684503.jpg', '', '95', 0, 0, '2021-11-23 23:21:43', '2021-11-23 23:21:43'),
(20, '120 GB SSD SATA PNY CS900 (SSD7CS900-120-RB)', 'Sequential Read of up to 515MB/s and Write of up t', 'SSD', '680', 'PNY', 'https://img.advice.co.th/images_nas/pic_product4/A0136359/A0136359OK_BIG_1.jpg', '', '46', 0, 0, '2021-11-23 23:29:22', '2021-11-23 23:29:22'),
(19, 'RAM DDR2(800) 2GB BLACKBERRY 16CHIP', 'Capacity : 2GB Memory Type : DDR2 Speed Bus : 800M', 'RAM', '450', 'BLACKBERRY', 'https://img.advice.co.th/images_nas/pic_product4/A0131977/A0131977OK_BIG_1.jpg', '', '31', 0, 0, '2021-11-23 23:26:19', '2021-11-23 23:26:19'),
(21, '120 GB SSD SATA WD GREEN (WDS120G2G0A)', 'Sequential read speeds of up to 545MB/s. Ultra low', 'SSD', '950', 'Western', 'https://img.advice.co.th/images_nas/pic_product4/A0108214/A0108214OK_BIG_1.jpg', '', '49', 0, 0, '2021-11-23 23:31:31', '2021-11-23 23:31:31'),
(22, '128 GB SSD SATA APACER AS350 (AP128GAS350-1)', 'Capacity : 128 GB Interface : SATA III Form Factor', 'SSD', '790', 'APACER', 'https://img.advice.co.th/images_nas/pic_product4/A0134975/A0134975OK_BIG_1.jpg', '', '68', 0, 0, '2021-11-23 23:33:38', '2021-11-23 23:33:38'),
(23, '120 GB SSD SATA KINGSTON A400 (SA400S37/120G)', 'Capacity : 120 GB Interface : SATA III Form Factor', 'RAM', '900', 'KINGSTON', 'https://img.advice.co.th/images_nas/pic_product4/A0100025/A0100025OK_BIG_1.jpg', '', '69', 0, 0, '2021-11-23 23:35:18', '2021-11-23 23:35:18'),
(24, 'Monitor 49\' SAMSUNG ODYSSEY LC49G95TSSEXXT (VA, HD', 'ดื่มด่ำไปกับการเล่นเกมได้ยิ่งกว่าเดิมด้วยความโค้ง ', 'MONITOR', '44900', 'Samsung', 'https://img.advice.co.th/images_nas/pic_product4/A0132620/A0132620OK_BIG_1.jpg', '', '71', 0, 0, '2021-11-23 23:37:16', '2021-11-23 23:37:16'),
(25, 'MAINBOARD (AM4) ASROCK A320M-DVS R4.0', 'AMD AM4 Socket 2 DIMMs, Supports DDR4 3200+(OC)* 1', 'MAINBOARD', '1590', 'ASROCK', 'https://img.advice.co.th/images_nas/pic_product4/A0123055/A0123055OK_BIG_1.jpg', '', '13', 0, 0, '2021-11-23 23:39:03', '2021-11-23 23:39:03'),
(26, 'MAINBOARD (AM4) MSI A320M-A PRO', 'Supports 1st, 2nd and 3rd Gen AMD Ryzen™ / Ryzen™ ', 'MAINBOARD', '1450', 'MSI', 'models/images/1637685706.png', '', '37', 0, 0, '2021-11-23 23:41:46', '2021-11-23 23:41:46'),
(27, '1 TB HDD CCTV TOSHIBA S300 (5700RPM, 64MB, SATA-3,', 'EMEA Region, Toshiba Storage Solutions – The 3.5-i', 'HDD', '1150', 'TOSHIBA', 'models/images/1637685856.png', '', '58', 0, 0, '2021-11-23 23:44:16', '2021-11-23 23:44:16'),
(28, '1 TB HDD CCTV WD PURPLE (5400RPM, 64MB, SATA-3, WD', 'Capacity : 1 TB transfer Rate : 110 MB/s Interface', 'HDD', '1250', 'Western', 'models/images/1637729862.png', '1', '54', 0, 0, '2021-11-24 11:57:42', '2021-11-24 11:57:42'),
(29, 'VGA SAPPHIRE RADEON RX 6600 PULSE GAMING - 8GB GDDR6X', 'Memory Size : 8GB Memory Type : GDDR6 Memory Interface : 128-bit Bus Interface : PCI Express 4.0 Output : HDMI x 1, DisplayPort x 3', 'VGA', '20900', 'SAPPHIRE', 'models/images/1637736096.png', '', '45', 0, 0, '2021-11-24 13:41:36', '2021-11-24 13:41:36'),
(30, 'Mini Power Supply (80+ Gold) 650W COOLER MASTER V650 SFX (MPY-6501-SFHAGV)', 'SFX Form Factor : This unit is compatible with all SFX cases and suitable for mini-ITX system builds.SFX-to-ATX Bracket : The included bracket allows users to install this unit securely in traditional ATX cases.80 PLUS Gold Certified : This certification guarantees a typical efficiency of 90% under normal operating conditions.Quiet FDB Fan : The 92mm FDB fan delivers effective, quiet, and efficient cooling.Full-Modular Cabling : Modular cables reduce clutter, increase airflow, and improve overall efficiency and thermal performance.', 'POWER_SUPPLY', '3980', 'COOLERMASTER', 'models/images/1637824398.png', '1', '0', 0, 3, '2021-11-25 11:31:20', '2021-11-24 16:20:02'),
(33, 'CASE (เคส) DARKFLASH DK151 (WHITE) (ATX)', '• Dimension : 432 x 206 x 363 mm • Maximum CPU Cooler Height : 160 mm • 3.5\" & 2.5\" Combo Bay x 1 • 3.5\" Bay x 1 • 2.5\" Bay x 2', 'CASE', '1490', 'DARKFLASH', 'models/images/1637824754.jpg', '', '0', 3, 3, '2021-11-25 14:19:14', '2021-11-25 14:19:14'),
(31, 'CPU AIR COOLER (พัดลมซีพียู) AEROCOOL MIRAGE 5 ARGB', '• Infinity Mirror RGB design delivers a unique and mesmerizing lighting experience • Comes with built-in RGB lighting effects and compatibility with Addressable RGB motherboards or hubs • Heat Core Touch Technology with 5 ultra-efficient thermal heat pipes • Powerful cooling fan inspired by the turbojet design delivers superior cooling performance • Black coating on fins increases heat dissipation area and improves efficiency of dissipation • TDP (Thermal Design Power) up to 150W', 'CPU_COOLLER', '1390', 'AEROCOOL', 'models/images/1637748843.png', '1', '0', 3, 3, '2021-11-24 17:14:03', '2021-11-24 17:14:03'),
(32, 'AMD Ryzen 7 5700G', ' Socket AM4 # of Cores 8 # of Threads 16 Base Clock 3.80 GHz Boost Clock 4.60 GHz L2 Cache 4MB L3 Cache 16MB Technology 7nm TDP Warranty การรับประกัน 3 ปี', 'CPU', '11900', 'AMD', 'https://notebookspec.com/web/pc/pic-pc/cpu/20210602-164704_1.png', '', '0', 0, 0, '2021-11-24 19:39:52', '2021-11-24 19:39:52'),
(34, 'CASE (เคส) MSI MAG VAMPIRIC 100L (ATX)', '• Dimension : 205 x 390 x 457 mm • Maximum CPU Cooler Height : 160 mm • 3.5', 'CASE', '1490', 'MSI', 'models/images/1637824861.jpg', '', '0', 3, 3, '2021-11-25 20:11:38', '2021-11-25 14:21:01'),
(35, 'CASE (เคส) ANTEC NX320', '• Dimension : 422x215x446 mm • Maximum CPU Cooler Height : 160 mm • 3.5\" & 2.5\" Combo Bay x 2 • 2.5\" Bay x 3', 'CASE', '1790', 'ANTEC', 'models/images/1637824936.jpg', '', '0', 3, 3, '2021-11-25 14:22:16', '2021-11-25 14:22:16'),
(36, '8GB (8GBx1) DDR4/3200 RAM PC (แรมพีซี) ADDLINK SPIDER 4 DDR4 (BLACK) (AG8GB32C16S4UB)', '• Capacity : 8GB • Speed : 3200 MHz • Part Number : AG8GB32C16S4UB • 8GBx1 • UDIMM / PC', 'RAM', '1459', 'ADDLINK', 'models/images/1637825104.jpg', '', '0', 3, 3, '2021-11-25 14:25:04', '2021-11-25 14:25:04'),
(37, 'CASE (เคส) DARKFLASH DK150 (WHITE) (ATX)', '• Dimension : 432 x 206 x 370 mm • Maximum CPU Cooler Height : 160 mm • 3.5\" & 2.5\" Combo Bay x 1 • 3.5\" Bay x 1 • 2.5\" Bay x 2', 'CASE', '1490', 'DARKFLASH', 'models/images/1637825222.jpg', '', '0', 3, 3, '2021-11-25 14:27:02', '2021-11-25 14:27:02'),
(38, 'CASE AEROCOOL WAVE G BK-V3 BLACK', 'Wave MID TOWER CASE * Designed with ventilation in mind, this case delivers superior air flow while allowing for viewing of your front LED fans. This high-performance mid tower case comes equipped with a tempered glass side panel to showcase the inside of your rig. Supports liquid cooling in the front and rear of the case for maximum efficiency cooling.  - Air vents in the front of the case allow for increased air flow and circulation  - Tempered glass side panel to showcase the inside of your rig  - Fan mounts on the PSU shroud allow for superior VGA cooling  - Supports liquid cooling in the front and rear of the case  - Supports air cooling in the front, top, and rear of the case  - Supports CPU cooler up to 158mm', 'CASE', '1490', 'AEROCOOL', 'models/images/1637825476.jpg', '', '0', 3, 3, '2021-11-25 14:30:40', '2021-11-25 14:30:40'),
(39, 'POWER SUPPLY (อุปกรณ์จ่ายไฟ) CORSAIR CX750M - 750W 80 PLUS BRONZE (CP-9020222-NA)', '• 750 Watt • 80 Plus Bronze • Semi Modular • ATX', 'POWER_SUPPLY', '2890', 'CORSAIR', 'models/images/1637825611.jpg', '', '0', 3, 3, '2021-11-25 14:33:31', '2021-11-25 14:33:31'),
(40, 'MAINBOARD (เมนบอร์ด) 1700 ASUS ROG STRIX Z690-E GAMING WIFI', '• Intel LGA 1700 • Intel Z690 • 4 x DDR5 DIMM • ATX', 'MAINBOARD', '17200', 'ASUS', 'models/images/1637825734.jpg', '', '0', 3, 3, '2021-11-25 14:35:34', '2021-11-25 14:35:34'),
(41, 'MAINBOARD (เมนบอร์ด) 1700 GIGABYTE Z690 GAMING X DDR4', '• Intel LGA 1700 • Intel Z690 • 4 x DDR4 DIMM • ATX', 'MAINBOARD', '7890', 'GIGABYTE', 'models/images/1637825817.jpg', '1', '0', 3, 3, '2021-11-25 14:36:57', '2021-11-25 14:36:57'),
(42, 'MAINBOARD (เมนบอร์ด) 1700 GIGABYTE Z690 UD', '• Intel LGA 1700 • Intel Z690 • 4 x DDR5 DIMM • ATX', 'MAINBOARD', '7290', 'GIGABYTE', 'models/images/1637826322.jpg', '', '0', 3, 3, '2021-11-25 14:45:22', '2021-11-25 14:45:22'),
(43, 'MAINBOARD (เมนบอร์ด) 1200 ASROCK H510M-HDV R2.0', '• Intel LGA 1200 • Intel H510 • 2 x DDR4 DIMM • Micro-ATX', 'MAINBOARD', '2390', 'ASROCK', 'models/images/1637845838.jfif', '', '0', 0, 3, '2021-11-25 20:12:45', '2021-11-25 20:10:38');

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
  `user_role` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_status` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_allow` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`, `user_name`, `user_phone`, `user_money`, `user_mail`, `user_address`, `user_profile`, `user_insert`, `user_update`, `user_role`, `user_status`, `user_allow`) VALUES
(0, 'admin', '1234', 'แอดมิน ITU', '0987654320', '99999999', 'admin@gmail.com', '555/656', 'models/images/1637729450.png', '2021-11-23 03:45:01', '2021-11-27 17:46:12', 'Admin', 'แอดมิน', 'allow'),
(2, 'member', '1234', 'Member Zz', '0987654321', '0', 'member@gm.com', '555/656', 'https://i.pinimg.com/474x/50/70/10/5070101ae7cc267a1ba03d30abdd38e9.jpg', '2021-11-23 03:26:25', '2021-11-23 03:26:25', 'Member', 'สมาชิกทั่วไป', 'ban'),
(3, 'NonNie', '1234', 'NonNie EiTaiYo', '0812345670', '981325', 'NonNie@Eitaiyo.co.th', '300  SEVERN HENDERSON NV 89002-8126 USA', 'https://c.tenor.com/bnoJIyF0egwAAAAC/eat-profile-picture.gif', '2021-11-23 03:39:19', '2021-11-28 16:08:04', 'Admin', 'โปรแกรมเมอร์', 'allow'),
(4, 'Kamiku2356', 'Kamiku2356', 'Kamiku2356', '0978654123', '0', 'Kamiku2356@gmail.com', '56/78', 'https://i.pinimg.com/474x/50/70/10/5070101ae7cc267a1ba03d30abdd38e9.jpg', '2021-11-23 03:40:57', '2021-11-23 03:40:57', 'Member', 'สมาชิกทั่วไป', 'ban'),
(5, 'jeck', 'revelsoftlnw', 'Jekzy Lozz', '0987456321', '99999941634', 'jeck@hotmail.com', '56/79', 'https://virl.bc.ca/wp-content/uploads/2019/01/AccountIcon2.png', '2021-11-23 03:42:40', '2021-11-23 03:42:40', 'Sellman', 'พ่อค้า/แม่ค้า', 'allow'),
(6, 'member1', 'member1', 'member1', 'member1', '0', 'member1@member1.com', 'member1', 'https://virl.bc.ca/wp-content/uploads/2019/01/AccountIcon2.png', '2021-11-23 03:45:01', '2021-11-23 03:45:01', 'Member', 'สมาชิกทั่วไป', 'allow'),
(7, 'ประยุกธ์', '1234', 'ประยุทธ์ จันทร์โอชา', '0982452523', '0', 'gg@gmail.com', '88/88', 'https://virl.bc.ca/wp-content/uploads/2019/01/AccountIcon2.png', '2021-11-24 20:00:03', '2021-11-24 20:35:43', 'Member', 'สมาชิกทั่วไป', 'allow'),
(8, 'prayut', '1234', 'prayut', '0974563421', '0', 'pt@gmail.com', '88/88', 'https://virl.bc.ca/wp-content/uploads/2019/01/AccountIcon2.png', '2021-11-24 20:02:19', '2021-11-24 20:02:19', 'Sellman', 'พ่อค้า/แม่ค้า', 'allow'),
(9, 'best', '1234', 'Best Chanel', '0888888888', '99999999999', 'BestChanel@gmail.com', 'บริษัท เอสโซ่ (ประเทศไทย) จํากัด บริษัท ซี.เอส.เค.', 'https://cdn.discordapp.com/avatars/563350850865725450/c9b3fc8ffad024cb52f1576e5e355d72.webp', '2021-11-28 21:16:51', '2021-11-28 21:16:51', 'Admin', 'ดีไซด์เนอร์', 'allow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_cheat`
--
ALTER TABLE `tbl_cheat`
  ADD PRIMARY KEY (`cheat_id`);

--
-- Indexes for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`not_id`);

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
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3050;

--
-- AUTO_INCREMENT for table `tbl_cheat`
--
ALTER TABLE `tbl_cheat`
  MODIFY `cheat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  MODIFY `dis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `not_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID ผู้ใช้', AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
