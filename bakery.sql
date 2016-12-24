-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 01:24 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Name`, `Email`, `Phone`, `Message`) VALUES
('Granit', 'niti@niti.niti', 392392939, 'Test 12 12 ');

-- --------------------------------------------------------

--
-- Table structure for table `produktet`
--

CREATE TABLE `produktet` (
  `ID` int(50) NOT NULL,
  `Emri` varchar(250) NOT NULL,
  `Lloji` varchar(250) NOT NULL,
  `Permbajtja` varchar(250) NOT NULL,
  `Forma` varchar(250) NOT NULL,
  `Aditiv` varchar(250) NOT NULL,
  `Cmimi` float NOT NULL,
  `Foto` varchar(250) NOT NULL,
  `Added_date` date NOT NULL,
  `Porositur` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produktet`
--

INSERT INTO `produktet` (`ID`, `Emri`, `Lloji`, `Permbajtja`, `Forma`, `Aditiv`, `Cmimi`, `Foto`, `Added_date`, `Porositur`) VALUES
(1, 'Buke Standarde', 'Buke', 'Miell, krip, aditiv, uje', 'E gjate', 'Me aditiv', 0.3, 'images/buka.png', '2016-11-03', 14),
(2, 'Burek me mish', 'Burek', 'Mish, miell, kripe', 'I gjate', '', 0.7, 'images/burek.jpg', '2016-11-03', 12),
(3, 'Gjevrek me Susam', 'Gjevrek', 'Susam, miell, kripe', 'Rreth', '', 0.5, 'images/gjevrek.jpg', '2016-11-03', 16),
(4, 'Kifle me Qokollade', 'Kifle', 'Qokollade, miell, kripe, aditiv', 'Standarde', '', 0.5, 'images/kifle.jpg', '2016-12-03', 15),
(5, 'Torte me Qokollade', 'Torte', 'Qokollade, miell, kripe, sheqer', 'Rreth', '', 2, 'images/torte-qokollade.jpg', '2016-12-03', 10),
(6, 'Burek me Spinaq', 'Burek', 'Spinaq, miell, kripe', 'Rreth', '', 0.7, 'images/burek-spinaq.jpeg', '2016-12-04', 19),
(7, 'Kifle me Gjem', 'Kifle', 'Gjem, miell, kripe, aditiv', 'Standarde', '', 0.5, 'images/kifle-jam.jpg', '2016-12-04', 16),
(8, 'Burek me Djath', 'Burek', 'Djath, miell, kripe', 'Rreth', '', 0.7, 'images/burek-djath.jpg', '2016-12-04', 17),
(9, 'Buke pa Aditiv', 'Buke', 'Miell, krip, uje', 'E gjate', 'Pa aditiv', 0.4, 'images/buka-pa-aditiv.jpg', '2016-12-04', 13),
(10, 'Trilece', 'Torte', 'Qumesht, miell, sheqer, karamel', 'Katrore', '', 2.5, 'images/trilece.jpg', '2016-12-04', 14),
(11, 'Buke Integrale', 'Buke ', 'Miell integral, tershere, kripe, aditiv, tharm', 'Gjate', 'Me aditiv', 1.7, 'images/buke-integrale.jpg', '2016-12-12', 5),
(21, 'Kifle me mak', 'Kifle', 'Miell, mak, kripe, sheqer, uje', 'Rreth', 'Pa aditiv', 0.5, 'images/kifle-mak.jpg', '2016-12-18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `ID` int(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Emri` varchar(50) NOT NULL,
  `Mbiemri` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Adresa` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID`, `Username`, `Emri`, `Mbiemri`, `Email`, `Password`, `Adresa`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin'),
(3, 'lab', 'lab', 'lab', 'lab', 'lab', 'lab');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Emri` varchar(50) NOT NULL,
  `Mbiemri` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Adresa` varchar(100) NOT NULL,
  `Roli` varchar(20) NOT NULL DEFAULT 'User'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`ID`, `Username`, `Emri`, `Mbiemri`, `Email`, `Password`, `Adresa`, `Roli`) VALUES
(1, 'GetoarLlalloshi', 'Getoar', 'Llalloshi', 'gl@ubt-uni.net', '1234', 'Fushe Kosove', 'User'),
(40, 'get', 'get', 'get', 'get', 'get', 'get', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `order_status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `creation_date`, `order_status`) VALUES
(46, 1, '2016-12-05', 'pending'),
(45, 1, '2016-12-05', 'pending'),
(44, 1, '2016-12-04', 'pending'),
(43, 1, '2016-12-04', 'pending'),
(42, 1, '2016-12-04', 'pending'),
(41, 1, '2016-12-04', 'pending'),
(40, 1, '2016-12-04', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`id`, `order_id`, `product_name`, `product_price`, `product_quantity`) VALUES
(52, 46, 'Kifle me Qokollade', 0.50, 14),
(51, 46, 'Torte me Qokollade', 2.00, 1),
(50, 46, 'Burek me mish', 0.70, 1),
(49, 46, 'Buke Standarde', 0.30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vecante`
--

CREATE TABLE `tbl_vecante` (
  `ID` int(10) NOT NULL,
  `Emri` varchar(50) DEFAULT NULL,
  `Permbajtja` varchar(50) DEFAULT NULL,
  `Aditiv` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produktet`
--
ALTER TABLE `produktet`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vecante`
--
ALTER TABLE `tbl_vecante`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produktet`
--
ALTER TABLE `produktet`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tbl_vecante`
--
ALTER TABLE `tbl_vecante`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
