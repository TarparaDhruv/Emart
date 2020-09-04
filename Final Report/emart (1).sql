-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2015 at 11:45 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `address` (
  `cid` int(11) NOT NULL,
  `add1` varchar(100) NOT NULL,
  `add2` varchar(100) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `area` varchar(25) DEFAULT NULL,
  `city` varchar(25) NOT NULL DEFAULT 'surat',
  `state` varchar(25) NOT NULL DEFAULT 'gujarat',
  `pincode` mediumint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`cid`, `add1`, `add2`, `landmark`, `area`, `city`, `state`, `pincode`) VALUES
(15, 'sai shraddhaa', '', 'sudama chowk', 'mota varachha', 'surat', 'gujarat', 394101),
(16, 'sai shraddhaa', 'sudama chowk', 'sudama chowk', 'mota varachha', 'ahemdabad', 'gujarat', 394101),
(18, 'hjgfahg', 'hghghgjh', 'jhgjhghghjg', 'hghjg', 'surat', 'gujarat', 8388607),
(19, 'gghgjhg', 'jhgjhgjhg', 'hjgjhgjh', 'hjghjgjhgj', 'surat', 'gujarat', 8388607),
(20, '', '', '', '', 'surat', 'gujarat', 123456),
(21, 'hgjh', 'jhjhhjgjhghj', 'yiuhiuuiuhu', 'buhgvvgh', 'surat', 'gujarat', -50),
(22, 'mhgfkj', 'kjhkhfk', 'khfjhfkhj', 'kjfkjf', 'surat', 'gujarat', 39),
(23, '', '', '', '', 'surat', 'gujarat', 8388607),
(24, '', '', '', '', 'surat', 'gujarat', 1234567),
(25, '', '', '', NULL, 'surat', 'gujarat', 0),
(26, '', '', '', NULL, 'surat', 'gujarat', 0),
(27, 'hfyuf', 'vuygyugyuguy', 'uyfyugyu', 'fyufyug', 'surat', 'gujarat', 394210),
(28, 'hjvyu', 'guygyuguj', 'gyugyuu', 'ugugu', 'surat', 'gujarat', 8388607),
(29, 'bdsfnjqhf', 'jjhefjwhj', 'jhjhdj', 'jjhfjgfj', 'baroda', 'gujarat', 395004),
(30, 'mnb.b.b', 'nbnbnb', 'nbnbnbmnb', 'nbnbnbmnb', 'surat', 'gujarat', 326598),
(31, 'hy', 'ffyfy', 'fyfyfyfyf', 'yftyfy', 'surat', 'gujarat', 1231654),
(32, 'jvyuf', 'yvfyfy', 'fyfytfyfuy', 'ftyftft', '', 'gujarat', 8388607),
(33, 'huyg', 'fff', 'ytftyt', 'ytdtyddtyyt', 'surat', 'gujarat', 8388607),
(34, 'hkfuy', 'fyuf', 'yvyuf', 'yvyf', 'surat', 'gujarat', 0),
(35, 'hgyuhb', 'bhbj', 'jbjhv', 'hvhv', 'surat', 'gujarat', 321651),
(36, 'ftg', 'ghfgf', 'ghfhgfhg', 'ffgfhf', 'surat', 'gujarat', 123456),
(37, 'hjkhuhj', 'ghvhgvg', 'v hghg', 'vhvhg', 'surat', 'gujarat', 123461),
(38, 'ghj', 'ghj', 'ghj', 'ghj', 'surat', 'gujarat', 123462),
(39, 'katargam', 'sudama chowk', 'sudama chowk', 'mota varachha', 'surat', 'gujarat', 123456),
(40, 'jk', 'hhh', 'h', 'hkhhjh', 'surat', 'gujarat', 123456),
(41, 'ygyh', '', 'jh', 'jhjhj', 'surat', 'gujarat', 123456),
(42, 'jk', '', 'jkl', 'jkl', 'surat', 'gujarat', 123456),
(43, 'uubjh', 'gbuygj', 'yjuy', 'g', '', '', 123186),
(44, 'A2 - 307 sai shradhha', '', 'south zone ', 'katargam', 'surat', 'gujarat', 391420),
(45, 'jaybhai', 'km che ', 'saruchee', 'o bhai', 'surat', 'gujarat', 123456),
(46, 'sudama chowk', '', 'south zone ', 'katargam', 'surat', 'gujarat', 123464),
(47, 'surat', 'surat', 'surat', 'surat', 'surat', 'gujarat', 394210);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
  `cid` int(9) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `cmail` varchar(50) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `cpass` varchar(15) NOT NULL,
  `contact` int(10) NOT NULL,
  `contact2` int(10) NOT NULL,
  `gender` varchar(8) NOT NULL COMMENT '1=male 0=female',
  `cimg` varchar(1000) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `blocked` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1=blocked 0=unblocked'
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`cid`, `fname`, `lname`, `cmail`, `cname`, `cpass`, `contact`, `contact2`, `gender`, `cimg`, `birthdate`, `blocked`) VALUES
(14, 'jaydip', 'hirapara', 'jaydipphp@gmail.com', 'jaydip', 'jay', 2147483647, 0, 'male', 'Helo world', '1998-04-21', 0),
(16, 'jaydip', 'hirapara', 'abs@gmail.com', 'vftfyytf', '123', 82642783, 0, 'male', 'Helo world', '2009-04-21', 1),
(17, 'Vaibhav', 'Chotaliya', 'vrc29797@gmail.com', 'vrc29797', 'abcd', 2147483647, 2147483647, 'male', 'Helo world', '0055-05-05', 0),
(18, 'ht', 'shdg', 'jhgjhgjg@j.com', 'hgkjgjk', 'redstar', 0, 1111111111, 'male', 'Helo world', '1997-08-15', 0),
(19, 'jenith', 'davda', 'jenith@gmil.om', 'kiogugug', '123', 82642783, 0, 'female', 'Helo world', '7995-05-04', 0),
(21, 'jenith', 'davda', 'jenithdavda12345@gmail.com', 'jenith davda', 'jkdm.m@d', 2147483647, 0, 'male', 'Helo world', '2015-10-06', 0),
(22, 'sdgbkj', 'jhjkgkjs', 'abdc@gmail.com', 'sdkfgasg', 'red', 787898989, 2147483647, 'male', 'Helo world', '1997-08-15', 0),
(23, 'gaurav', 'lathiya', 'gaurav@gmail.com', 'gaurav', 'ga', 1234567981, 0, 'male', 'Helo world', '0002-02-02', 0),
(24, 'bhupat', 'chippa', 'bhupta@gmail.com', 'bhupat', 'bhupat', 1234567891, 0, 'male', 'Helo world', '0000-00-00', 0),
(25, 'roshni', 'patel', 'roshni@gmail.co', 'roshni', '123', 1234657892, 0, 'male', 'Helo world', '0000-00-00', 0),
(26, 'adity', 'kansara', 'adity@bigub.guyg', 'adity', '123', 1234567891, 1326478968, 'female', 'Helo world', '0646-03-21', 0),
(27, 'ad', 'ad', 'ad@ad.ad', 'ad', 'ad', 1231681561, 0, 'male', 'Helo world', '6532-03-12', 0),
(28, 'wer', 'wer', 'wer@d.l', 'wer', 'wer', 1234657890, 0, 'male', 'Helo world', '3165-04-12', 0),
(29, 'hira', 'hirapara', 'hiral@huy.vv', 'hiral', '123', 2147483647, 0, 'male', 'Helo world', '5612-01-12', 0),
(30, 'jgu', 'gyug', 'yh@bjbhb.ju', 'ytfyy', 'gh', 2147483647, 0, 'male', 'User29.jpeg', '5156-01-21', 0),
(31, 'lkjoi', 'ljij', 'kjl@io.l', 'lk', 'lk', 2147483647, 0, 'male', 'User30.jpeg', '0198-04-21', 0),
(32, 'ugiuuuhu`ug', 'uggju', 'guygygy@tyfy.oiji', 'hguygygyug', '123', 1326461834, 0, 'male', 'User31.jpeg', '5456-04-21', 0),
(34, 'jayb', 'hait', 'jaybhai@gmail.ljm', 'jaybhai', '123', 2147483647, 0, 'male', 'User33.jpeg', '1998-04-21', 0),
(35, 'admin', 'admin', 'admin@gmail.com', 'admin', 'adminjdv', 2147483647, 0, 'male', 'User34.jpeg', '1997-07-21', 0),
(36, 'jdvphp', 'jdvphp', 'abc1@gmail.com', 'jdvphp', 'jdvphp', 1012346587, 2147483647, 'male', 'User35.jpeg', '1997-08-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

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

CREATE TABLE IF NOT EXISTS `category` (
  `catid` varchar(15) NOT NULL DEFAULT '0',
  `catname` varchar(50) NOT NULL,
  `catdesc` varchar(500) NOT NULL,
  `veg` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `currentorder`
--

CREATE TABLE IF NOT EXISTS `currentorder` (
  `oid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `gtotal` int(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finishedorder`
--

CREATE TABLE IF NOT EXISTS `finishedorder` (
  `oid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `gtotal` int(10) NOT NULL,
  `status` int(2) NOT NULL,
  `bill` varbinary(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

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

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL,
  `catid` varchar(15) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `weight` int(10) NOT NULL,
  `mrp` int(10) NOT NULL,
  `sprice` int(10) NOT NULL,
  `instock` int(10) NOT NULL,
  `pdescription` varchar(500) NOT NULL,
  `pimg` varchar(1000) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=visible'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `catid`, `pname`, `weight`, `mrp`, `sprice`, `instock`, `pdescription`, `pimg`, `visible`) VALUES
(1, '0', 'meggi', 1, 10, 8, 150, 'djfg,ahsgdhag', '0', 0),
(2, '0', 'baby', 3, 500, 450, 20, 'Just Hurry up', '0', 1),
(3, '0', 'kurkure', 2, 10, 5, 200, 'like', '0', 0),
(4, '0', 'lock', 3, 1310, 1000, 300, 'hiiiii', 'Product3.jpeg', 0),
(5, '0', 'hello', 1, 15, 12, 100, 'khik', 'Product4.jpeg', 0),
(6, '0', 'balaji', 2, 15, 12, 500, 'hjvjvh', 'Product5.jpeg', 0),
(7, '0', 'shanti', 2, 15, 20, 2500, 'it is a very', 'Product6.jpeg', 0),
(8, '0', 'tang', 1, 25, 20, 100, 'mgfkfk', 'Product7.jpeg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`cid`), ADD KEY `street` (`add1`), ADD KEY `street_2` (`add1`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`cid`), ADD UNIQUE KEY `cname` (`cname`), ADD UNIQUE KEY `cmail` (`cmail`), ADD KEY `cid` (`cid`);

--
-- Indexes for table `currentorder`
--
ALTER TABLE `currentorder`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `finishedorder`
--
ALTER TABLE `finishedorder`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `cid` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `currentorder`
--
ALTER TABLE `currentorder`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
