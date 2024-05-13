-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2018 at 06:13 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `additem`
--

CREATE TABLE IF NOT EXISTS `additem` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `rs` int(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `additem`
--

INSERT INTO `additem` (`id`, `name`, `rs`, `description`, `pic`) VALUES
(32, 'coffee mug', 300, 'for drinking purpose', 'images (6).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'jatinjain@gmail.com', 'jatinjain16');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `itmid` varchar(50) NOT NULL,
  `itname` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE IF NOT EXISTS `checkout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `city` varchar(25) NOT NULL,
  `address` varchar(30) NOT NULL,
  `landmark` varchar(20) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `pid` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `name`, `mobile`, `pincode`, `city`, `address`, `landmark`, `userid`, `pid`, `status`) VALUES
(1, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '31', 'unpaid'),
(2, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '533', 'unpaid'),
(3, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '52', 'unpaid'),
(4, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '696', 'unpaid'),
(5, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '204', 'unpaid'),
(6, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '789', 'unpaid'),
(7, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '997', 'unpaid'),
(8, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '151', 'unpaid'),
(9, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '117', 'unpaid'),
(10, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '249', 'unpaid'),
(11, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '205', 'unpaid'),
(12, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '754', 'unpaid'),
(13, 'Nitin', '8889821200', '474002', 'Kolkatta', '16 new chandra nagar', 'phoolbagh', 'hsharma@gm', '148', 'unpaid'),
(14, 'Nitin', '8889821200', '474002', 'Kolkatta', '16 new chandra nagar', 'phoolbagh', 'hsharma@gm', '393', 'unpaid'),
(15, 'Nitin', '8889821200', '474002', 'Kolkatta', '16 new chandra nagar', 'phoolbagh', 'hsharma@gm', '786', 'unpaid'),
(16, 'Nitin', '8889821200', '474002', 'Kolkatta', '16 new chandra nagar', 'phoolbagh', 'hsharma@gm', '827', 'unpaid'),
(17, 'Nitin', '8889821200', '474002', 'Kolkatta', '16 new chandra nagar', 'phoolbagh', 'hsharma@gm', '329', 'unpaid'),
(18, 'himanshu', '9131447573', '474002', 'Kolkatta', '16 basant bihar ', 'birla nagar', 'hsharma@gm', '372', 'unpaid'),
(19, 'himanshu', '9131447573', '474002', 'Kolkatta', '16 basant bihar', 'birla nagar', 'hsharma@gm', '88', 'unpaid'),
(20, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '887', 'unpaid'),
(21, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '343', 'unpaid'),
(22, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '604', 'unpaid'),
(23, 'Nitin', '8889821200', '474002', '', '16 new chandra nagar', 'phoolbagh', '', '571', 'unpaid'),
(24, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '176', 'unpaid'),
(25, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '207', 'unpaid'),
(26, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '111', 'unpaid'),
(27, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '544', 'unpaid'),
(28, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '673', 'unpaid'),
(29, 'Nitin', '8889821200', '474002', 'Gwalior', '16 new chandra nagar', 'phoolbagh', 'nitinjain@', '590', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `onlinepayment`
--

CREATE TABLE IF NOT EXISTS `onlinepayment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `cardno` int(16) NOT NULL,
  `cvv` int(3) NOT NULL,
  `expiry` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `onlinepayment`
--

INSERT INTO `onlinepayment` (`id`, `fname`, `cardno`, `cvv`, `expiry`, `type`) VALUES
(1, 'jatin jain', 2147483647, 454, '2018-12-31', 'Credit'),
(2, 'jatin jain', 2147483647, 454, '2018-07-27', 'Visa'),
(3, 'deepak', 2147483647, 232, '7787-07-08', 'Visa'),
(4, 'deepak', 2147483647, 454, '2020-12-31', 'Credit');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE IF NOT EXISTS `order1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(25) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `total` int(6) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `transid` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`id`, `item`, `price`, `quantity`, `total`, `userid`, `transid`, `status`, `date`) VALUES
(14, 'coffee mug', '300', '1', 0, 'hsharma@gmail.com', '88', 'cod', '20/07/18'),
(15, 'coffee mug', '300', '1', 0, 'hsharma@gmail.com', '88', 'cod', '20/07/18'),
(16, 'coffee mug', '300', '1', 0, 'nitinjain@gmail.com', '887', 'op', '20/07/18'),
(17, 'coffee mug', '300', '1', 0, 'nitinjain@gmail.com', '887', 'op', '20/07/18'),
(18, 'coffee mug', '300', '1', 0, 'nitinjain@gmail.com', '343', 'op', '20/07/18'),
(19, 'coffee mug', '300', '1', 0, 'nitinjain@gmail.com', '604', 'op', '20/07/18'),
(20, 'coffee mug', '300', '1', 0, 'nitinjain@gmail.com', '176', 'cod', '21/07/18'),
(21, 'coffee mug', '300', '1', 0, 'nitinjain@gmail.com', '207', 'cod', '21/07/18'),
(22, 'coffee mug', '300', '1', 0, 'nitinjain@gmail.com', '111', 'cod', '21/07/18'),
(23, 'coffee mug', '300', '1', 6, 'nitinjain@gmail.com', '544', 'cod', '21/07/18'),
(24, 'coffee mug', '300', '1', 0, 'nitinjain@gmail.com', '544', 'cod', '21/07/18'),
(25, 'coffee mug', '300', '1', 9, 'nitinjain@gmail.com', '673', 'cod', '21/07/18'),
(26, 'coffee mug', '300', '1', 0, 'nitinjain@gmail.com', '673', 'cod', '21/07/18'),
(27, 'coffee mug', '300', '1', 0, 'nitinjain@gmail.com', '673', 'cod', '21/07/18');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `query` varchar(50) NOT NULL,
  `Date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `email`, `mobile`, `query`, `Date`) VALUES
(5, 'nitin jain', 'nitinjain@gmail.com', '8889821200', 'there is some problem while ordering product', ''),
(6, 'nitin jain', 'nitinjain@gmail.com', '8889821200', 'there is some problem while ordering product', 'd/m/y'),
(7, 'nitin jain', 'nitinjain@gmail.com', '8889821200', 'there is some problem while ordering product', '16/07/18');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(150) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `date` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `pic`, `fname`, `lname`, `email`, `password`, `contact`, `pincode`, `gender`, `address`, `city`, `date`) VALUES
(15, 'h.jpg', 'Nitin', 'jain', 'nitinjain@gmail.com', 'jatinjain', '', '474002', 'male', '16 new chandra nagar', 'Gwalior', ''),
(16, 'IMG-20180602-WA0086.jpg', 'himanshu', 'sharma', 'hsharma@gmail.com', 'himanshu', '', '474002', 'male', '16 basant bihar ', 'Kolkatta', '14/07/18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
