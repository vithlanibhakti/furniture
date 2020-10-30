-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2014 at 01:13 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cafeindiana fastfood cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE IF NOT EXISTS `admin_reg` (
  `A_id` int(11) NOT NULL AUTO_INCREMENT,
  `A_name` varchar(50) NOT NULL,
  `A_password` varchar(50) NOT NULL,
  `A_email` varchar(100) NOT NULL,
  PRIMARY KEY (`A_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `admin_reg`
--


-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `contect` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `booking`
--


-- --------------------------------------------------------

--
-- Table structure for table `branch_de`
--

CREATE TABLE IF NOT EXISTS `branch_de` (
  `br_id` int(11) NOT NULL AUTO_INCREMENT,
  `br_name` varchar(50) NOT NULL,
  `br_address` varchar(100) NOT NULL,
  `br_incharge` varchar(50) NOT NULL,
  `br_mobile` varchar(15) NOT NULL,
  `br_phone` varchar(10) NOT NULL,
  `br_email` varchar(100) NOT NULL,
  `br_fax` varchar(100) NOT NULL,
  `br_city` int(11) NOT NULL,
  PRIMARY KEY (`br_id`),
  KEY `br_city` (`br_city`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `branch_de`
--

INSERT INTO `branch_de` (`br_id`, `br_name`, `br_address`, `br_incharge`, `br_mobile`, `br_phone`, `br_email`, `br_fax`, `br_city`) VALUES
(1, 'nita', 'mckdvdfkivimgf', 'namsw', '122454546', '23554', 'aaaa@gmil.com', 'cmsdkfvmfdk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_detail`
--

CREATE TABLE IF NOT EXISTS `category_detail` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category_detail`
--

INSERT INTO `category_detail` (`category_id`, `category_name`) VALUES
(1, 'coffee'),
(2, 'pizza'),
(3, 'burger'),
(4, 'sandwiches'),
(5, 'pani puri');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`) VALUES
(1, 1, 'rajkot'),
(3, 1, 'keshod');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'india'),
(2, 'china');

-- --------------------------------------------------------

--
-- Table structure for table ` product_detail`
--

CREATE TABLE IF NOT EXISTS ` product_detail` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcat_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `product_img` varchar(50) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_desc` varchar(50) NOT NULL,
  `min_quantity` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `subcat_id` (`subcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table ` product_detail`
--

INSERT INTO ` product_detail` (`product_id`, `subcat_id`, `product_name`, `product_code`, `product_img`, `product_price`, `product_desc`, `min_quantity`) VALUES
(1, 1, 'irish coffee', 'i1', 'i coffee', '200', 'Fill footed mug or a mug with hot water to preheat', '5'),
(2, 1, 'cappuccino coffee', 'c1', 'c coffee', '150', 'Combine hot milk, hot coffee, sugar and cinnamon i', '7'),
(3, 1, 'Americano coffee', 'A1', ' A coffee', '200', 'Make a shot of espresso coffee and pour it into a ', '8'),
(4, 1, 'caramel coffee', 'cr1', 'cr coffee', '180', 'PLACE coffee, caramel sundae syrup, vanilla syrup ', '10');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  PRIMARY KEY (`state_id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state_name`) VALUES
(1, 1, 'gujrat'),
(5, 1, 'kerala');

-- --------------------------------------------------------

--
-- Table structure for table `subcat_detail`
--

CREATE TABLE IF NOT EXISTS `subcat_detail` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`subcat_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `subcat_detail`
--

INSERT INTO `subcat_detail` (`subcat_id`, `category_id`, `subcat_name`) VALUES
(1, 1, 'irish coffee'),
(2, 1, 'cappuccino coffee'),
(3, 1, 'americano coffee'),
(4, 1, 'caramel coffee'),
(5, 2, 'vegetable pizza'),
(6, 2, 'italian pizza'),
(7, 2, 'spicy triple tengo pizza'),
(8, 2, 'mexican green wave pizza'),
(9, 3, 'classic burger'),
(10, 3, 'greek burger'),
(11, 3, 'mexican burger'),
(12, 3, 'mashroom burger'),
(13, 4, 'veg sandwich'),
(14, 4, 'grilled sandwich'),
(15, 4, 'roasted sandwich'),
(16, 4, 'crispy sandwich'),
(17, 5, 'subhash');

-- --------------------------------------------------------

--
-- Table structure for table `types of delivery`
--

CREATE TABLE IF NOT EXISTS `types of delivery` (
  `delivery_id` int(11) NOT NULL AUTO_INCREMENT,
  `home_delivery` varchar(50) NOT NULL,
  `carry_out` varchar(50) NOT NULL,
  PRIMARY KEY (`delivery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `types of delivery`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE IF NOT EXISTS `user_feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `f_email` varchar(100) NOT NULL,
  `f_mobile_no` varchar(15) NOT NULL,
  `product_id` int(11) NOT NULL,
  `f_address` varchar(100) NOT NULL,
  `f_message` varchar(50) NOT NULL,
  PRIMARY KEY (`feed_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE IF NOT EXISTS `user_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_name` varchar(50) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `category` int(11) NOT NULL,
  `subcat` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `scountry` int(11) NOT NULL,
  `sstate` int(11) NOT NULL,
  `scity` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `order_date` varchar(20) NOT NULL,
  `total` varchar(15) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `category` (`category`),
  KEY `subcat` (`subcat`),
  KEY `product` (`product`),
  KEY `scountry` (`scountry`),
  KEY `sstate` (`sstate`),
  KEY `scity` (`scity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_order`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `u_address` varchar(200) NOT NULL,
  `u_country` int(11) NOT NULL,
  `u_state` int(11) NOT NULL,
  `u_city` int(11) NOT NULL,
  PRIMARY KEY (`u_id`),
  KEY `u_city` (`u_city`),
  KEY `u_country` (`u_country`),
  KEY `u_state` (`u_state`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_reg`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES ` product_detail` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branch_de`
--
ALTER TABLE `branch_de`
  ADD CONSTRAINT `branch_de_ibfk_1` FOREIGN KEY (`br_city`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table ` product_detail`
--
ALTER TABLE ` product_detail`
  ADD CONSTRAINT `@0020product_detail_ibfk_1` FOREIGN KEY (`subcat_id`) REFERENCES `subcat_detail` (`subcat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcat_detail`
--
ALTER TABLE `subcat_detail`
  ADD CONSTRAINT `subcat_detail_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_detail` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD CONSTRAINT `user_feedback_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES ` product_detail` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_order`
--
ALTER TABLE `user_order`
  ADD CONSTRAINT `user_order_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category_detail` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_order_ibfk_2` FOREIGN KEY (`subcat`) REFERENCES `subcat_detail` (`subcat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_order_ibfk_3` FOREIGN KEY (`product`) REFERENCES ` product_detail` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_order_ibfk_4` FOREIGN KEY (`scountry`) REFERENCES `country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_order_ibfk_5` FOREIGN KEY (`sstate`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_order_ibfk_6` FOREIGN KEY (`scity`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD CONSTRAINT `user_reg_ibfk_1` FOREIGN KEY (`u_city`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_reg_ibfk_2` FOREIGN KEY (`u_country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_reg_ibfk_3` FOREIGN KEY (`u_state`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;
