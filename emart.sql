-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2015 at 10:36 AM
-- Server version: 5.5.16
-- PHP Version: 5.4.0beta2-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emart`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--
-- Creation: Oct 05, 2015 at 10:05 AM
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(50) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `area` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL DEFAULT 'Gujarat',
  `pincode` int(6) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `address`
--

INSERT DELAYED IGNORE INTO `address` (`cid`, `street`, `landmark`, `area`, `city`, `state`, `pincode`) VALUES
(1, 'abc', 'bahbhabh', 'hbakha', 'hbhab', 'Gujarat', 395004),
(2, 'jj', 'j', 'kj', 'k', 'kjjk', 8979790);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--
-- Creation: Oct 05, 2015 at 10:14 AM
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `pid` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `sprice` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--
-- Creation: Oct 05, 2015 at 10:23 AM
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `catid` varchar(15) NOT NULL,
  `catname` varchar(50) NOT NULL,
  `catdesc` varchar(500) NOT NULL,
  `veg` tinyint(1) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `currentorder`
--
-- Creation: Oct 05, 2015 at 10:16 AM
--

DROP TABLE IF EXISTS `currentorder`;
CREATE TABLE IF NOT EXISTS `currentorder` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `gtotal` int(10) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `finishedorder`
--
-- Creation: Oct 05, 2015 at 10:25 AM
--

DROP TABLE IF EXISTS `finishedorder`;
CREATE TABLE IF NOT EXISTS `finishedorder` (
  `oid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `gtotal` int(10) NOT NULL,
  `status` int(2) NOT NULL,
  `bill` varbinary(500) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--
-- Creation: Oct 05, 2015 at 10:17 AM
--

DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `oid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `sprice` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--
-- Creation: Oct 05, 2015 at 10:22 AM
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `weight` int(10) NOT NULL,
  `pdescription` varchar(500) NOT NULL,
  `sprice` int(10) NOT NULL,
  `mrp` int(10) NOT NULL,
  `image` varbinary(500) NOT NULL,
  `instock` int(10) NOT NULL,
  `catid` varchar(15) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
