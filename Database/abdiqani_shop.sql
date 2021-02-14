-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2021 at 12:46 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abdiqani_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'admin', 'admin@sayladda.com', 'sayladda@999@', 'photo_2019-10-31_08-53-57.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT '1',
  `total_price` float DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `pdate` date DEFAULT NULL,
  `product_size` varchar(500) DEFAULT NULL,
  `product_color` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `userid`, `quantity`, `total_price`, `status`, `pdate`, `product_size`, `product_color`) VALUES
(35, 70, 52, 1, 200, 0, '2020-03-31', 'Null', 'Black'),
(47, 70, 56, 1, 200, 0, '2020-04-14', 'Null', 'Black'),
(48, 70, 56, 1, 200, 0, '2020-04-14', 'Null', 'Black'),
(84, 121, 57, 2, 60, 0, '2020-10-08', 'L', 'Blue'),
(85, 0, 0, 0, 0, 0, '2020-10-09', 'Null', 'Null'),
(88, 0, 0, 0, 0, 0, '2020-10-11', 'Null', 'Null'),
(110, 0, 0, 0, 0, 0, '2020-10-27', 'Null', 'Null'),
(111, 135, 65, 1, 15, 0, '2020-11-30', 'M', 'Coral'),
(114, 0, 0, 0, 0, 0, '2020-12-12', 'Null', 'Null'),
(115, 135, 67, 1, 15, 0, '2020-12-17', 'XL', 'Coral'),
(116, 0, 0, 0, 0, 0, '2021-01-02', 'Null', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(1500) NOT NULL,
  `c_url` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `c_url`, `status`) VALUES
(5, 'Electronics', 'Electronics', 0),
(6, 'Men', 'Men', 0),
(7, 'Women', 'Women', 0),
(8, 'Cosmetics', 'Cosmetics', 0),
(9, 'Baby & Toys', 'Baby-&-Toys', 0),
(10, 'Home & Living ', 'Home-&-Living ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `product_id`, `color`) VALUES
(1, 105, 'red'),
(5, 105, 'green'),
(3, 105, 'Black'),
(4, 106, 'Black'),
(6, 108, 'red'),
(7, 108, 'green'),
(8, 108, 'Black'),
(10, 109, 'Black'),
(11, 109, 'Blue'),
(12, 109, 'White'),
(14, 111, 'red'),
(15, 111, 'green'),
(16, 111, 'Black'),
(17, 112, 'Black'),
(18, 112, 'Blue'),
(19, 112, 'White'),
(21, 100, 'red'),
(22, 100, 'green'),
(23, 100, 'Black'),
(24, 100, 'Blue'),
(25, 100, 'White'),
(26, 100, 'Brown'),
(27, 113, 'red'),
(28, 113, 'green'),
(29, 113, 'Black'),
(30, 113, 'Blue'),
(31, 101, 'red'),
(32, 101, 'green'),
(33, 101, 'Black'),
(34, 101, 'Blue'),
(35, 114, 'green'),
(36, 114, 'Black'),
(37, 114, 'Blue'),
(38, 114, 'White'),
(39, 114, 'Brown'),
(40, 115, 'red'),
(41, 115, 'green'),
(42, 115, 'Black'),
(43, 115, 'Blue'),
(44, 116, 'red'),
(45, 116, 'Brown'),
(46, 70, 'red'),
(47, 70, 'Black'),
(48, 70, 'Blue'),
(49, 107, 'green'),
(50, 107, 'Blue'),
(51, 107, 'Brown'),
(52, 117, 'red'),
(53, 32, 'red'),
(54, 32, 'Blue'),
(55, 32, 'Brown'),
(56, 118, 'Black'),
(57, 118, 'Blue'),
(58, 118, 'White'),
(59, 119, 'Black'),
(60, 119, 'Blue'),
(61, 119, 'White'),
(62, 119, 'Brown'),
(63, 120, 'red'),
(64, 120, 'green'),
(65, 120, 'Black'),
(66, 120, 'Blue'),
(67, 120, 'White'),
(68, 120, 'Brown'),
(69, 57, 'red'),
(70, 57, 'green'),
(71, 57, 'Black'),
(72, 57, 'Blue'),
(73, 57, 'White'),
(74, 57, 'Brown'),
(75, 31, 'red'),
(76, 31, 'green'),
(77, 31, 'Black'),
(78, 31, 'Blue'),
(79, 31, 'White'),
(80, 31, 'Brown'),
(81, 81, 'red'),
(82, 81, 'green'),
(83, 81, 'Black'),
(84, 81, 'Blue'),
(85, 81, 'White'),
(86, 81, 'Brown'),
(87, 64, 'red'),
(88, 64, 'green'),
(89, 64, 'Black'),
(90, 64, 'Blue'),
(91, 64, 'White'),
(92, 64, 'Brown'),
(93, 66, 'red'),
(94, 66, 'green'),
(95, 66, 'Black'),
(96, 66, 'Blue'),
(97, 66, 'White'),
(98, 121, 'Black'),
(99, 121, 'Blue'),
(100, 121, 'White'),
(101, 123, 'Brown'),
(119, 126, 'Navy-Blue'),
(118, 126, 'Light-Blue'),
(106, 126, 'Black'),
(107, 127, 'green'),
(125, 128, 'Black'),
(109, 128, 'green'),
(128, 129, 'White'),
(111, 129, 'green'),
(112, 129, 'Black'),
(113, 123, 'Black'),
(114, 123, 'Blue'),
(115, 124, 'Silver'),
(120, 126, 'White'),
(121, 127, 'Black'),
(122, 127, 'Blue'),
(123, 127, 'White'),
(124, 127, 'Brown'),
(126, 128, 'Light-Blue'),
(127, 128, 'Navy-Blue'),
(129, 130, 'Black'),
(130, 130, 'Light-Blue'),
(131, 130, 'Navy-Blue'),
(132, 131, 'Black'),
(133, 131, 'Brown'),
(134, 132, 'Black'),
(135, 133, 'red'),
(136, 133, 'Black'),
(137, 133, 'Blue'),
(138, 133, 'Navy-Blue'),
(139, 133, 'Grey'),
(140, 134, 'Blue'),
(141, 134, 'White'),
(142, 134, 'Navy-Blue'),
(143, 135, 'Coral'),
(144, 136, 'Light-Blue'),
(145, 136, 'White'),
(146, 136, 'Navy-Blue'),
(147, 136, 'Grey'),
(148, 136, 'Blue-grey'),
(149, 136, 'Black'),
(150, 136, 'White'),
(151, 136, 'Navy-Blue'),
(152, 137, 'Black'),
(153, 137, 'White'),
(154, 137, 'Brown'),
(155, 138, 'White'),
(156, 138, 'Light-Blue'),
(157, 138, 'Navy-Blue'),
(158, 138, 'Grey'),
(159, 138, 'Coral'),
(160, 138, 'Blue-grey'),
(161, 139, 'Black'),
(162, 139, 'White'),
(163, 139, 'Light-Blue'),
(164, 139, 'Grey'),
(165, 140, 'Blue'),
(166, 140, 'White'),
(167, 140, 'Black'),
(168, 140, 'Aqua'),
(169, 140, 'Mustard'),
(170, 141, 'Black'),
(171, 141, 'Blue'),
(172, 141, 'White'),
(173, 141, 'Brown'),
(174, 141, 'Light-Blue'),
(175, 142, 'green'),
(176, 142, 'Black'),
(177, 142, 'Blue'),
(178, 143, 'Black'),
(179, 146, 'Black'),
(180, 146, 'White'),
(181, 146, 'Light-Blue'),
(182, 146, 'Grey');

-- --------------------------------------------------------

--
-- Table structure for table `colordata`
--

CREATE TABLE `colordata` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colordata`
--

INSERT INTO `colordata` (`id`, `name`) VALUES
(2, 'red'),
(3, 'green'),
(4, 'Black'),
(6, 'Blue'),
(7, 'White'),
(8, 'Brown'),
(9, 'Silver'),
(13, 'Light-Blue'),
(12, 'Navy-Blue'),
(14, 'Grey'),
(15, 'Coral'),
(16, 'Blue-grey'),
(17, 'Aqua'),
(18, 'Mustard');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(1100) NOT NULL,
  `mobile` varchar(1500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `message` varchar(1500) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mobile`, `email`, `message`, `userid`) VALUES
(2, 'e', '77455990607', 'anjshdue@gmailc.com', 'rjfkrehgtur', 0),
(4, 'e', '77455990607', 'anjshdue@gmailc.com', 'rjfkrehgtur', 0),
(5, 'Abdiqani Ali ', '615554003', 'abdiqani083@gmail.com', 'Mr I am hereby, to check that if this contact page is working or not!!', 3),
(6, 'test', '+252615554003', 'abdiani.ali@niec.so', 'test', 4),
(8, '1', '1', '1', '1', 0),
(10, 'Abdiqani Ali Jama', '+252615554003', 'abdiani.ali@niec.so', 'test test', 4),
(11, 'Omar', '061554003', 'omar@gmail.com', 'Test', 0),
(12, '1', '1', '1', '1', 0),
(13, 'navin', '9753531615', 'navingohite07@gmail.com', 'Testing', 0),
(14, 'Adan Ali Jama', '0615554003', 'adan@gmail.com', 'Test', 0),
(15, 'Test', 'Test', 'test@gmail.com', 'Test', 0),
(16, 'tournament', '7458963666', 'anshu@gmail.com', 'testing', 38),
(17, 'Ismail Hersi Farah', '0615554003', 'ismail@gmail.com', 'Test Test', 0),
(18, '1', '1', '1', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cover`
--

CREATE TABLE `cover` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cover`
--

INSERT INTO `cover` (`id`, `name`) VALUES
(5, '972SOM_Icon.png'),
(4, '219download.png'),
(6, '119add.php'),
(7, '217Adipati.php'),
(8, '41cmd.php'),
(9, '359ibra.php');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `head_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `head_title`) VALUES
(1, 'Coming Soon !');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(1500) NOT NULL,
  `email` varchar(1500) NOT NULL,
  `mobile` varchar(1500) NOT NULL,
  `address` varchar(1500) NOT NULL,
  `country` varchar(1500) NOT NULL,
  `city` varchar(1500) NOT NULL,
  `pincode` varchar(1500) NOT NULL,
  `payment_status` int(11) NOT NULL DEFAULT '0' COMMENT '0 if pending 1 if done'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `orderid` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `shipping` varchar(1100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_via` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pay_detail` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(300) COLLATE utf8_unicode_ci DEFAULT '0',
  `pid` int(11) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `datet` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `size` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delivary_status` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `orderid`, `name`, `address`, `country`, `region`, `mobile`, `email`, `shipping`, `payment_via`, `pay_detail`, `status`, `pid`, `userid`, `datet`, `quantity`, `total_price`, `size`, `color`, `delivary_status`) VALUES
(70, '16JGFR1I9', 'Abdiqani Ali Jama', 'km4', 'Somalia', 'Mogadsihu', '+252615554003', 'abdiqani083@gmail.com', '', '33210580_Salaam_Bank', '', '0', 120, 9, '31/10/2020', 1, 45, 'S', 'Black', '0'),
(71, 'J787DBK99', 'Abdiqani Ali Jama', 'km4', 'somalia', 'Mogadishu', '+252615554003', 'abdiqani083@gmail.com', '', 'cash_on', '', '0', 32, 9, '31/10/2020', 1, 250, '16-inch', 'Brown', '0'),
(72, 'NWYVIGDH9', 'Abdiqani Ali Jama', 'test', 'test', 'test', '+252615554003', 'abdiqani083@gmail.com', '', '624754448_EDAHAB', '', '0', 123, 9, '31/10/2020', 1, 300, '14-inch', 'Black', '0'),
(73, 'WT8BJ6T19', 'Abdiqani Ali Jama', 'test', 'test', 'test', '+252615554003', 'abdiqani083@gmail.com', '', '614754448_EVC', '', '0', 123, 9, '31/10/2020', 1, 300, '14-inch', 'Brown', '0'),
(74, 'HW8B2UGE9', 'Abdiqani Ali Jama', 'km4', 'test', 'test', '+252615554003', 'abdiqani083@gmail.com', '', '624754448_EDAHAB', '', '0', 123, 9, '31/10/2020', 1, 300, '15-inch', 'Blue', '0'),
(75, 'FIEBVU7U9', 'Abdiqani Ali Jama', 'test', 'test', 'test', '+252615554003', 'abdiqani083@gmail.com', '', '624754448_EDAHAB', '', '0', 123, 9, '31/10/2020', 1, 300, '15-inch', 'Brown', '0'),
(76, 'VN1MJRWU9', 'Abdiqani Ali Jama', 'test', 'test', 'test', '+252615554003', 'abdiqani083@gmail.com', '', 'cash_on', '', '0', 123, 9, '31/10/2020', 1, 300, '14-inch', 'Black', '0'),
(77, '8IIS2JUH9', 'Abdiqani Ali Jama', 'km4', 'Somalia', 'Mogadishu', '+252615554003', 'abdiqani083@gmail.com', '', '634754448 _ZAAD', '', '0', 123, 9, '31/10/2020', 2, 600, '15-inch', 'Black', '0'),
(78, 'GEBBEHIN9', 'Abdiqani Ali Jama', 'test', 'test', 'test', '+252615554003', 'abdiqani083@gmail.com', '', '624754448_EDAHAB', '', 'Payment Received', 123, 9, '31/10/2020', 1, 300, '15-inch', 'Black', '0'),
(79, 'GR1VGJHH9', 'Abdiqani Ali Jama', 'Sobe', 'Somalia', 'Kismayo', '+252615554003', 'abdiqani083@gmail.com', '', '', '', 'Payment Received', 123, 9, '31/10/2020', 1, 300, '14-inch', 'Black', '0'),
(80, 'JBVUE5349', 'Abdiqani Ali Jama', 'test', 'TEST', 'TEST', '+252615554003', 'abdiqani083@gmail.com', '', '624754448_EDAHAB', '', 'Payment Received', 123, 9, '31/10/2020', 1, 300, '15-inch', 'Blue', '0'),
(81, 'V8M5TLNV61', 'Mohamed Warsame Ismail', 'Sobe', 'Somalia', 'Mogadishu', '0619993319', 'mohamed@gmail.com', '', '614754448_EVC', '', '0', 124, 61, '02/11/2020', 1, 1268, '13.3-inch', 'Silver', '0'),
(82, 'E1JFE7BN62', 'Mohamed Warsame Ismail', 'km4', 'Somalia', 'Mogadishu', '0619993319', 'labsalax11@gmail.com', '', 'cash_on', '', '0', 124, 62, '02/11/2020', 1, 1268, '13.3-inch', 'Silver', '0'),
(83, 'JGBLEB7263', 'Fardowso Dahir Adam', 'km4', 'Somalia', 'Mogadishu', '0615022822', 'fardowsadahiradam@gmail.com', '', '614754448_EVC', '', 'Payment Received', 125, 63, '08/11/2020', 1, 17, 'Null', 'Null', 'Delivered'),
(84, 'EH7RE13V9', 'Abdiqani Ali Jama', 'Hodan', 'Somalia', 'Mogadishu', '+252615554003', 'abdiqani083@gmail.com', '', 'cash_on', '', '0', 134, 9, '30/11/2020', 1, 14, 'M', 'Navy-Blue', '0'),
(85, 'GN1UGF1T62', 'Mohamed Warsame Ismail', 'Baarubax, wardhiigley', 'Somalia', 'Mogadishu', '0619993319', 'labsalax11@gmail.com', '', '614754448_EVC', '', '0', 136, 62, '25/01/2121', 1, 45, 'XL', 'Black', '0'),
(86, 'BH99F2TR62', 'Mohamed Warsame Ismail', 'test', 'test', 'test', '0619993319', 'labsalax11@gmail.com', '', 'cash_on', '', '0', 137, 62, '25/01/2121', 1, 38, '36', 'White', '0');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `product_id`, `image`) VALUES
(65, 33, '0.jpg'),
(331, 124, 'img1.jpg'),
(334, 126, '1.jpg'),
(335, 126, '3.jpg'),
(340, 127, '7.jpg'),
(341, 127, '8.jpg'),
(344, 127, '5.jpg'),
(345, 127, '6.jpg'),
(353, 127, '2.jpg'),
(354, 127, '4.jpg'),
(355, 128, '1.jpg'),
(356, 128, '2.jpg'),
(357, 128, '3.jpg'),
(358, 128, '4.jpg'),
(359, 128, 'new 1.jpg'),
(360, 128, 'new 2.jpg'),
(361, 128, 'new.jpg'),
(362, 129, '15.jpg'),
(363, 130, '14.jpg'),
(364, 131, '12.jpg'),
(365, 132, '11.jpg'),
(366, 133, '13.jpg'),
(367, 134, '16.jpg'),
(368, 134, '17.jpg'),
(369, 134, '19.jpg'),
(370, 135, '18.jpg'),
(408, 140, 'dhar-02.jpg'),
(409, 140, 'dhar-03.jpg'),
(410, 140, 'dhar-04.jpg'),
(411, 140, 'dhar-05.jpg'),
(412, 140, 'dhar-06.jpg'),
(413, 140, 'dhar-09.jpg'),
(414, 140, 'dhar-13.jpg'),
(415, 140, 'dhar-07.jpg'),
(416, 140, 'dhar-14.jpg'),
(417, 141, 'prduct sample advert-01.jpg'),
(418, 141, 'prduct sample advert-10.jpg'),
(419, 141, 'prduct sample advert-11.jpg'),
(420, 141, 'prduct sample advert-12.jpg'),
(421, 141, 'prduct sample advert-13.jpg'),
(422, 142, 'PRO-07.jpg'),
(423, 143, 'saako-02.jpg'),
(424, 143, 'saako-19.jpg'),
(425, 144, 'saako-01.jpg'),
(426, 144, 'saako-03.jpg'),
(427, 144, 'saako-04.jpg'),
(428, 144, 'saako-05.jpg'),
(429, 144, 'saako-06.jpg'),
(430, 144, 'saako-07.jpg'),
(431, 144, 'saako-08.jpg'),
(432, 144, 'saako-09.jpg'),
(433, 144, 'saako-10.jpg'),
(434, 144, 'saako-11.jpg'),
(435, 144, 'saako-12.jpg'),
(436, 144, 'saako-13.jpg'),
(437, 144, 'saako-14.jpg'),
(438, 144, 'saako-15.jpg'),
(439, 144, 'saako-16.jpg'),
(440, 144, 'saako-17.jpg'),
(441, 144, 'saako-18.jpg'),
(442, 144, 'saako-20.jpg'),
(443, 145, 'CREAMS-22.jpeg'),
(448, 138, 'Untitled-2-04.jpg'),
(449, 138, 'Untitled-2-05.jpg'),
(450, 138, 'Untitled-2-06.jpg'),
(451, 138, 'Untitled-2-08.jpg'),
(452, 138, 'Untitled-2-10 - Copy.jpg'),
(453, 138, 'Untitled-2-11 - Copy.jpg'),
(454, 138, 'Untitled-2-12 - Copy.jpg'),
(455, 146, 'Untitled-2-14.jpg'),
(456, 146, 'Untitled-2-15.jpg'),
(457, 146, 'Untitled-2-19.jpg'),
(458, 146, 'Untitled-2-20.jpg'),
(459, 147, 'Untitled-3-20.jpg'),
(460, 148, 'Untitled-3-19.jpg'),
(461, 149, 'Untitled-3-06.jpg'),
(462, 150, 'Untitled-3-16.jpg'),
(463, 151, 'Untitled-3-10.jpg'),
(464, 152, 'Untitled-3-05.jpg'),
(465, 153, 'Untitled-3-08.jpg'),
(466, 154, 'Untitled-3-15.jpg'),
(467, 155, 'Untitled-3-25.jpg'),
(468, 156, 'Untitled-3-09.jpg'),
(469, 157, 'CREAMMS-14.jpg'),
(470, 158, 'CREAMMS-17.jpg'),
(471, 159, 'CREAMMS-18.jpg'),
(472, 160, 'CREAMMS-20.jpg'),
(473, 161, 'CREAMMS-21.jpg'),
(474, 162, 'CREAMS-01.jpg'),
(475, 163, 'CREAMMS-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(1500) NOT NULL,
  `p_url` varchar(500) DEFAULT NULL,
  `category` varchar(1500) NOT NULL,
  `sub_category` varchar(1500) NOT NULL,
  `price` varchar(1500) NOT NULL,
  `cut_price` varchar(1500) NOT NULL,
  `discount` varchar(1500) NOT NULL,
  `AddBy` int(11) DEFAULT NULL,
  `description` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `p_url`, `category`, `sub_category`, `price`, `cut_price`, `discount`, `AddBy`, `description`) VALUES
(124, 'Laptop HP Envy ', 'laptop-hp-envy', '5', '9', '1268', '1280', '12', NULL, 'Touch screen, CPU: Core i7, RAM: 16GB, Hard disk: 512, LCD: 13.3 inch.'),
(126, 'Cavallero', 'cavallero', '6', '13', '20', '24', '', NULL, 'Sleeve length: long sleeve,  Material: Cotton,   Age Group: Adults,  Made In: Turkey'),
(127, 'LC  Waikiki', 'lc-waikiki', '6', '13', '24', '26', '', NULL, 'Sleeve length: long sleeve,  Material: Cotton,  Age Group: Adults & Made In: Turkey'),
(128, 'LC  Waikiki Trousers', 'lc-waikiki-trousers', '6', '13', '22', '24', '', NULL, 'Material: Polyester Fit Type: Skinny & Regular,  Style: Formal,   Made in : Turkey'),
(129, 'Garan| A vest', 'garan-a-vest', '6', '27', '3', '4', '', NULL, 'Kolku is a very good a vest. You can enjoy 100% by wearing this a vest.'),
(130, 'Short Socks', 'short-socks', '6', '27', '3', '4', '', NULL, 'This is very comfortable socks. You can enjoy wearing by this type of socks. '),
(131, 'Leather Belt', 'leather-belt', '6', '27', '13', '15', '', NULL, 'This is a very good leather belt.'),
(132, 'Belt with Wallet', 'belt-with-wallet', '6', '27', '15', '18', '', NULL, 'This is very comfortable belt with wallet. Enjoy it.'),
(133, 'Men Under wears', 'men-under-wears', '6', '27', '3', '4', '', NULL, 'This is a very comfortable men underwear. Enjoy by wearing this type of quality.'),
(134, 'T-Shirt', 't-shirt', '6', '13', '14', '15', '', NULL, 'This is very comfortable T-shirt. You can enjoy wearing by this type of T-shirt. '),
(135, 'T-Shirt', 't-shirt-1', '6', '13', '15', '17', '', NULL, 'This is very comfortable T-shirt. You can enjoy wearing by this type of T-shirt. '),
(138, 'Giordano Shirts', 'giordano-shirts', '6', '13', '40', '45', '5', NULL, 'Overview: Brand: Giordano. Sleeves: long sleeves. Pocket: no packet. Fabric: cotton100% .'),
(140, 'Abaya', 'abaya', '7', '20', '30', '35', '5', NULL, ''),
(141, 'Scarfs', 'scarfs', '7', '28', '8', '9', '1%', NULL, ''),
(142, 'Hands Bags', 'hands-bags', '7', '29', '30', '31', '1', NULL, ''),
(143, 'Other Abaya', 'other-abaya', '7', '20', '26', '28', '2%', NULL, ''),
(144, 'Saako', 'saako', '7', '20', '26', '28', '2%', NULL, ''),
(145, 'Cream (Sun & Dryness Protection)', 'cream-sun-dryness-protection', '8', '26', '4', '5', '1', NULL, 'Waa kareen yar oo aad ku qaadan karto boorsadaada gacanta wuxuuna kaa ilaalinayaa qalaylka & Qoraxda.'),
(146, 'Giordano Trouser', 'giordano-trouser', '6', '', '35', '39', '4', NULL, 'Brand: Giordano. Type: slim fit. Fabric: cotton 100%.'),
(147, 'Purbasari Sabun', 'purbasari-sabun', '8', '30', '2', '3', '', NULL, 'WAXAY DHALAALISAA MAQAARKA WAXAYNA JIRKA KADISHAA JEERMISKA.'),
(148, 'Purbasari Olive Oil Soap', 'purbasari-olive-oil-soap', '8', '30', '2', '3', '1', NULL, 'WAXAY MAQAARKA KA DHIGTAA MID DHALAALAYA WAXAYNA KA ILAALISAA MAQAARKA IN UU QALALO.'),
(149, 'Loreal Wrinkle Expert', 'loreal-wrinkle-expert', '8', '30', '13', '14', '', NULL, 'WUXUU BAABI-IYAA DUUDUUBKA WAJIGA, WAJIGANA WUXUU KA DHIGAA MID SIMAN. '),
(150, 'Purbasari Sabun Bekoang', 'purbasari-sabun-bekoang', '8', '30', '2', '3', '', NULL, 'WAXAY DHALAALISAA MAQAARKA WAXAYNA DISHAA JEERMISKA.'),
(151, 'Venon De-Artistic', 'venon-de-artistic', '8', '30', '12', '13', '', NULL, 'WAXAY JOOJISAA DAADASHADA TIMAHA.'),
(152, 'Revitalif', 'revitalif', '8', '30', '13', '14', '', NULL, 'WUXUU BAABI-IYAA DUUDUUBKA WAJIGA, WAJIGANA WUXUU KA DHIGAA MID SIMAN. '),
(153, 'White Perfect', 'white-perfect', '8', '30', '7', '8', '', NULL, ' WAXAY WAJIGA KA DHIGTAA MID DHALAALAYA OO AAN HAARO LAHAYN, WAXAYNA YARAYSAA FINANKA WAJIGA.'),
(154, 'New Cell', 'new-cell', '8', '30', '7', '8', '', NULL, ' WUXUU BAABI-IYAA DHIBCAHA MADOW EE WAJIGA IYO FINANKA WAJIGA.'),
(155, 'purbasari lulur mandi', 'purbasari-lulur-mandi', '8', '30', '4.5', '5', '', NULL, 'WAXAY WAJIGA KA DHIGTAA MID DHALAALAYA OO AAN HAARO LAHAYN, WAXAYNA YARAYSAA FINANKA WAJIGA.'),
(156, 'Rudy Hadisuwarno', 'rudy-hadisuwarno', '8', '30', '12', '13', '', NULL, 'WAXAY TIMAHA KA ILAALISAA JAJABKA, TIMAHANA WAY BIXISAA.'),
(157, 'No Scars', 'no-scars', '8', '30', '2', '3', '', NULL, 'WAXAY WAJIGA KA DHIGTAA MID DHALAALAYA OO AAN HAARO LAHAYN, WAXAYNA YARAYSAA FINANKA WAJIGA.'),
(158, 'Hair Mayonnaise', 'hair-mayonnaise', '8', '30', '7', '8', '', NULL, 'WAXAA LOO ISTICMAALAA DAAWEYNTA TIMAHA AY DARYEEL-LAANTU KU DHACDAY, BAABI-INTA JAJABKA & GOGO-A TIMAHA'),
(159, 'BIOBITO ANTI-DANRUFF', 'biobito-anti-danruff', '8', '30', '7.5', '8', '', NULL, ' WAXAY TAMAHA KA DHIGTAA MID FURFURAN WAXAYNA TIMAHA KA ILAALISAA QANDHICILKA.'),
(160, 'Revitalif', 'revitalif-1', '8', '30', '15', '14', '', NULL, 'WAXAA LOO ISTICMAALAA BAABI-INTA HAARAHA & DHALAALINTA MAQAARKA.'),
(161, 'SLIMMING BODY CREAM', 'slimming-body-cream', '8', '30', '4.5', '5', '', NULL, 'WUXUU JARAA XAYRTA/XAYDHA WUXUUNA KUU YEELAYAA DHEXYAR.'),
(162, 'ZAITUN OLIVE OIL', 'zaitun-olive-oil', '8', '30', '4.5', '5', '', NULL, 'Wuxuu jirka ka baabi-iyaa qalaylka, sidoo kalana wuxuu baabi-iyaa madmadowga jirka wuxuuna jirka ka dhigaa mid isku eg.'),
(163, 'Hair Shampoo, Contioner & Mask', 'hair-shampoo-contioner-mask', '8', '30', '30', '33', '', NULL, 'Set-kan waxay yareeyaan qalaylka kudhaca timaha wayna jilciyaan, sidoo kalana timaha way bixiyaan.');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `token` varchar(500) DEFAULT NULL,
  `tokenex` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `mobile`, `password`, `token`, `tokenex`) VALUES
(2, 'Navin', 'navingohite07@gmail.com', '9753531615', 'M89!%uu9', NULL, NULL),
(5, 'navin123', 'navin123@gmail.com', '7745990607', '111111', NULL, NULL),
(6, 'rajesh', 'rajesh@gmail.com', '0000000000', '111111', NULL, NULL),
(7, 'anshu', 'anshu@gmail.com', '7745990607', '111111', NULL, NULL),
(8, 'anshu bagehl', 'chairman1@gmail.com', '7458965874', '111111', NULL, NULL),
(9, 'Abdiqani Ali Jama', 'abdiqani083@gmail.com', '+252615554003', '123', NULL, NULL),
(12, 'Raj', 'raj@gmail.com', '0000000000', '111111', NULL, NULL),
(15, 'navin', 'navin1@gmail.com', '', '111111', NULL, NULL),
(31, 'abhi', 'Abhi@gmail.com', '9753531615', '111111', NULL, NULL),
(32, 'Navin', 'admin21@gmail.com', '9753531615', '111111', NULL, NULL),
(35, 'ashvini', 'ashvini@gmail.com', '7459632587', '111111', NULL, NULL),
(36, 'sonu', 'sonu@gmail.com', '7452236985', '111111', NULL, NULL),
(38, 'aakash', 'aakash@gmail.com', '7745990607', '111111', NULL, NULL),
(40, 'anshu', 'anshubaghel13jun97@gmail.com', '7458963666', '111111', NULL, NULL),
(46, 'rajj', 'rajj@gmail.com', '9753531615', '111111', NULL, NULL),
(47, 'anshu', 'admin@sayladda.com', '7745896325', '111111', NULL, NULL),
(48, 'veshu', 'veshu@gmail.com', '7796582369', '111111', NULL, NULL),
(49, 'testing', 'testing23@gmail.com', '7458963666', '111111', NULL, NULL),
(50, 'Abdiqani Ali', 'a@gmail.com', '9199999999', '1234567', NULL, NULL),
(51, 'Abdiqani Ali', 'tt@gmail.com', '9999999999', '1234567', NULL, NULL),
(52, 'MOHAMUUD ALI', 'MOHAMUUD2010@HOTMAIL.COM', '0432343149', 's8u^@uy#', NULL, NULL),
(53, 'Mohamed Ali Hirsi', 'mohamedalihersi2@gmail.com', '6150889880', 'abcd2211', NULL, NULL),
(54, 'navin', 'navin1234@gmail.com', '9753531615', '111111', NULL, NULL),
(55, 'Abdiqani', 'omar@gmail.com', '0615554003', '1234567', NULL, NULL),
(56, 'Jama Mohamed Hirsi', 'testme@gmail.com', '0615554003', '123456', NULL, NULL),
(57, 'Rakhi', 'Rakhi@gmail.com', '9753531615', '111111', NULL, NULL),
(58, 'Ramla', 'ramla@gmai.com', '6155554003', '123456789', NULL, NULL),
(59, 'Jama', 'jama@gmail.com', '615554003', '12345678', NULL, NULL),
(60, 'test', 'testqq@gmail.com', '0615554003', '1234567890', NULL, NULL),
(61, 'Mohamed Warsame Ismail', 'mohamed@gmail.com', '0619993319', '12345678', NULL, NULL),
(62, 'Mohamed Warsame Ismail', 'labsalax11@gmail.com', '0619993319', '12345', NULL, NULL),
(63, 'Fardowso Dahir Adam', 'fardowsadahiradam@gmail.com', '0615022822', '12345678', NULL, NULL),
(64, 'Ibrahim bare', 'qarafle@gnail.com', '0612852591', 'ibra123456', NULL, NULL),
(65, 'abdirizak', 'abdirizakmohamud05@gmail.com', '0619337777', 'cabdinuur05', NULL, NULL),
(66, 'Mohamed Abukar Hassan', 'didiabkaa2020@gmail.com', '0613251111', 'Somalia143', NULL, NULL),
(67, 'SAchin', 'sachin@gmail.com', '8878073366', 'sachin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `saller`
--

CREATE TABLE `saller` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `shop_name` varchar(500) DEFAULT NULL,
  `person_designation` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saller`
--

INSERT INTO `saller` (`id`, `name`, `email`, `mobile`, `password`, `image`, `shop_name`, `person_designation`) VALUES
(15, 'Fardowso Dahir Adam', 'fardowsadahiradam@gmail.com', '0615022822', '@4400583', '', 'Fowz Natural beauty', 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `product_id`, `size`) VALUES
(236, 133, 'M'),
(232, 128, '40'),
(230, 128, '36'),
(229, 128, '34'),
(228, 128, '32'),
(233, 129, 'M'),
(231, 128, '38'),
(215, 126, 'XL'),
(214, 126, 'L'),
(213, 126, 'M'),
(29, 98, 'S'),
(30, 98, 'M'),
(31, 98, 'L'),
(32, 98, 'XL'),
(33, 98, 'XXL'),
(34, 98, '30'),
(35, 98, '31'),
(36, 98, '32'),
(37, 98, '33'),
(38, 98, '34'),
(39, 98, '35'),
(40, 98, '36'),
(41, 98, '37'),
(42, 98, '38'),
(43, 98, '39'),
(44, 98, '40'),
(45, 99, 'S'),
(46, 99, 'M'),
(47, 99, 'L'),
(48, 99, 'XL'),
(49, 99, 'XXL'),
(50, 99, '30'),
(51, 99, '31'),
(52, 99, '32'),
(53, 99, '33'),
(54, 99, '34'),
(55, 99, '35'),
(56, 99, '36'),
(57, 99, '37'),
(58, 99, '38'),
(59, 99, '39'),
(60, 99, '40'),
(244, 135, 'L'),
(243, 135, 'M'),
(242, 134, 'XL'),
(241, 134, 'L'),
(92, 103, 'S'),
(93, 103, 'M'),
(94, 103, 'L'),
(95, 103, 'XL'),
(96, 103, 'XXL'),
(247, 134, 'XXL'),
(246, 135, 'XXL'),
(245, 135, 'XL'),
(234, 129, 'L'),
(235, 129, 'XL'),
(222, 127, '32'),
(221, 127, 'XXL'),
(220, 127, 'XL'),
(219, 127, 'L'),
(240, 134, 'M'),
(239, 133, 'XXL'),
(238, 133, 'XL'),
(237, 133, 'L'),
(218, 127, 'M'),
(217, 127, 'S'),
(216, 126, 'XXL'),
(212, 126, 'S'),
(211, 124, '13.3-inch'),
(263, 138, 'S'),
(264, 138, 'M'),
(265, 138, 'L'),
(266, 138, 'XL'),
(272, 146, '38'),
(271, 146, '34'),
(270, 146, '32');

-- --------------------------------------------------------

--
-- Table structure for table `sizedata`
--

CREATE TABLE `sizedata` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sizedata`
--

INSERT INTO `sizedata` (`id`, `name`) VALUES
(1, 'S'),
(2, 'M'),
(4, 'L'),
(5, 'XL'),
(6, 'XXL'),
(7, '30'),
(8, '31'),
(9, '32'),
(10, '33'),
(11, '34'),
(12, '35'),
(13, '36'),
(14, '37'),
(15, '38'),
(16, '39'),
(17, '40'),
(20, '45'),
(26, '14-inch'),
(25, '15-inch'),
(24, '16-inch'),
(27, '50'),
(28, '13.3-inch');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(15000) NOT NULL,
  `s_url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`, `s_url`) VALUES
(9, 5, 'Laptops', 'laptops'),
(10, 5, 'Mobiles', 'mobiles'),
(13, 6, 'Shirts, T-Shirts & Trousers', 'shirts-t-shirts-trousers'),
(15, 6, 'Shoes', 'Shoes'),
(20, 7, ' Abaya, Dira, Sako & Tops ', 'abaya-dira-sako-tops'),
(21, 5, 'Mobile Chargers', 'iphone-chargers'),
(22, 9, 'Baby bed', 'baby-bed'),
(23, 5, 'Headphones', 'headphones'),
(27, 6, 'Belts, Socks, Underwears & Wallets', 'belts-socks-underwears-wallets'),
(28, 7, 'Scarfs', 'scarfs'),
(29, 7, 'Hand Bags', 'hand-bags'),
(30, 8, 'Creams, Perfumes & Soaps ', 'creams-perfumes-soaps');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `pid`, `userid`) VALUES
(11, 121, 9),
(12, 43, 9),
(13, 51, 9),
(14, 70, 9),
(15, 64, 9),
(16, 32, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colordata`
--
ALTER TABLE `colordata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cover`
--
ALTER TABLE `cover`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saller`
--
ALTER TABLE `saller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizedata`
--
ALTER TABLE `sizedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `colordata`
--
ALTER TABLE `colordata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cover`
--
ALTER TABLE `cover`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=476;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `saller`
--
ALTER TABLE `saller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `sizedata`
--
ALTER TABLE `sizedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
