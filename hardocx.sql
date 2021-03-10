-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2019 at 06:40 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardocx`
--

-- --------------------------------------------------------

--
-- Table structure for table `a3`
--

DROP TABLE IF EXISTS `a3`;
CREATE TABLE IF NOT EXISTS `a3` (
  `shop` varchar(20) DEFAULT NULL,
  `blacksingle` int(11) DEFAULT NULL,
  `blackdouble` int(11) DEFAULT NULL,
  `colorsingle` int(11) DEFAULT NULL,
  `colordouble` int(11) DEFAULT NULL,
  KEY `shop` (`shop`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a3`
--

INSERT INTO `a3` (`shop`, `blacksingle`, `blackdouble`, `colorsingle`, `colordouble`) VALUES
('hardocx', 10, 15, 15, 20),
('stmarys', 11, 17, 18, 22),
('lakshmi123', 9, 14, 14, 18),
('bijuprinters', NULL, NULL, NULL, NULL),
('edezhath', NULL, NULL, NULL, NULL),
('stjoseph', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `a4`
--

DROP TABLE IF EXISTS `a4`;
CREATE TABLE IF NOT EXISTS `a4` (
  `shop` varchar(20) NOT NULL,
  `blacksingle` varchar(20) DEFAULT NULL,
  `blackdouble` varchar(20) DEFAULT NULL,
  `colorsingle` varchar(20) DEFAULT NULL,
  `colordouble` varchar(20) DEFAULT NULL,
  KEY `shop` (`shop`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a4`
--

INSERT INTO `a4` (`shop`, `blacksingle`, `blackdouble`, `colorsingle`, `colordouble`) VALUES
('hardocx', '5', '3', '8', '12'),
('stmarys', NULL, NULL, NULL, NULL),
('lakshmi123', NULL, NULL, NULL, NULL),
('bijuprinters', NULL, NULL, NULL, NULL),
('edezhath', NULL, NULL, NULL, NULL),
('stjoseph', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `a5`
--

DROP TABLE IF EXISTS `a5`;
CREATE TABLE IF NOT EXISTS `a5` (
  `shop` varchar(20) NOT NULL,
  `blacksingle` int(11) DEFAULT NULL,
  `blackdouble` int(11) DEFAULT NULL,
  `colorsingle` int(11) DEFAULT NULL,
  `colordouble` int(11) DEFAULT NULL,
  KEY `shop` (`shop`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a5`
--

INSERT INTO `a5` (`shop`, `blacksingle`, `blackdouble`, `colorsingle`, `colordouble`) VALUES
('hardocx', 3, 5, 6, 10),
('stmarys', NULL, NULL, NULL, NULL),
('lakshmi123', NULL, NULL, NULL, NULL),
('bijuprinters', NULL, NULL, NULL, NULL),
('edezhath', NULL, NULL, NULL, NULL),
('stjoseph', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `name` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Customer Registration ';

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`name`, `mobile`, `username`, `password`) VALUES
('Akhil K Thomas', '9746029812', 'akhilk', 'helloworld');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`) VALUES
('akhilk', 'helloworld', 'customer'),
('hardocx', 'helloworld', 'business'),
('stmarys', 'stmarys123', 'business'),
('lakshmi123', 'lakshmi123', 'business'),
('bijuprinters', 'bijuprinters123', 'business'),
('edezhath', 'edezhath123', 'business'),
('stjoseph', 'stjoseph123', 'business');

-- --------------------------------------------------------

--
-- Table structure for table `messenger`
--

DROP TABLE IF EXISTS `messenger`;
CREATE TABLE IF NOT EXISTS `messenger` (
  `id` varchar(20) NOT NULL,
  `message` varchar(20) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `ipaddr` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `side` varchar(20) NOT NULL,
  `pages` varchar(20) NOT NULL,
  `noofpages` int(11) NOT NULL,
  `noofcopies` int(11) NOT NULL,
  `remarks` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `shop` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `dmode` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `orderid` varchar(20) NOT NULL,
  `mode` varchar(20) NOT NULL,
  `refno` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `username` varchar(20) NOT NULL,
  `shopid` varchar(20) NOT NULL,
  `quality` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `service` varchar(20) NOT NULL,
  `overall` varchar(20) NOT NULL,
  `review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

DROP TABLE IF EXISTS `shops`;
CREATE TABLE IF NOT EXISTS `shops` (
  `shopname` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shopname`, `mobile`, `owner`, `username`, `zipcode`) VALUES
('Biju Printers', '9869969878', 'biju', 'bijuprinters', '682007'),
('Edezhath Printers', '8965754655', 'edward', 'edezhath', '682007'),
('Hardocx', '9746029812', 'Akhil K Thomas', 'hardocx', '682008'),
('Lakshmi Stores', '4565558565', 'lakshmi', 'lakshmi123', '682008'),
('St Joseph printers', '2568788788', 'joseph', 'stjoseph', '682007'),
('St Marys Stores', '9856969989', 'xavier', 'stmarys', '682008');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `a3`
--
ALTER TABLE `a3`
  ADD CONSTRAINT `a3_ibfk_1` FOREIGN KEY (`shop`) REFERENCES `shops` (`username`);

--
-- Constraints for table `a4`
--
ALTER TABLE `a4`
  ADD CONSTRAINT `a4_ibfk_1` FOREIGN KEY (`shop`) REFERENCES `shops` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
