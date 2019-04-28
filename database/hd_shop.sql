-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 05:39 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hd_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `total_cart` int(11) NOT NULL DEFAULT '0',
  `is_shipped` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `userid`, `created_date`, `total_cart`, `is_shipped`) VALUES
(1, 11, '2016-12-15', 1, 1),
(2, 11, '2016-12-15', 2, 1),
(3, 11, '2016-12-15', 3, 1),
(4, 11, '2016-12-18', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_product`
--

CREATE TABLE IF NOT EXISTS `tbl_cart_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_cart_product`
--

INSERT INTO `tbl_cart_product` (`id`, `product_cart_id`, `product_id`, `product_price`, `quantity`, `color_id`, `size_id`, `ip`) VALUES
(1, 1, 12, 500, 1, 5, 6, '127.0.0.1'),
(2, 2, 11, 200, 1, 5, 4, '127.0.0.1'),
(3, 2, 14, 100, 1, 5, 3, '127.0.0.1'),
(4, 3, 16, 100, 3, 3, 3, '127.0.0.1'),
(5, 4, 16, 100, 1, 3, 3, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `created_by`, `modified_by`, `modified_date`, `created_date`, `status`) VALUES
(1, 'men', 1, NULL, NULL, '2017-04-13 21:03:53', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE IF NOT EXISTS `tbl_checkout` (
  `checkout_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_option` varchar(20) NOT NULL,
  `order_date` datetime NOT NULL,
  `sale_id` int(11) NOT NULL,
  PRIMARY KEY (`checkout_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE IF NOT EXISTS `tbl_color` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(255) DEFAULT NULL,
  `colorcode` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `status_delete` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE IF NOT EXISTS `tbl_customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `billing_address1` varchar(255) NOT NULL,
  `billing_address2` varchar(255) NOT NULL,
  `billing_city` int(11) NOT NULL,
  `billing_state` int(11) NOT NULL,
  `billing_country` int(11) NOT NULL,
  `billing_zip` varchar(255) NOT NULL,
  `shipping_address1` varchar(255) NOT NULL,
  `shipping_address2` varchar(255) NOT NULL,
  `shipping_city` int(11) NOT NULL,
  `shipping_state` int(11) NOT NULL,
  `shipping_country` int(11) NOT NULL,
  `shipping_zip` varchar(255) NOT NULL,
  `customer_type` int(11) NOT NULL,
  `tax_id` varchar(255) NOT NULL,
  `year` varchar(5) NOT NULL,
  `credit_card_number` varchar(25) NOT NULL,
  `credit_card_cw` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `credit_card_type` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `social_networks` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkdin` varchar(255) NOT NULL,
  `googlePlus` varchar(255) NOT NULL,
  `uploadFile` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `modified_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` int(11) NOT NULL,
  `is_member` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(255) DEFAULT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_description` text,
  `product_price` double NOT NULL,
  `product_type` int(1) NOT NULL,
  `product_image` varchar(5000) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` varchar(500) NOT NULL,
  `color_id` varchar(500) NOT NULL,
  `size_id` varchar(500) NOT NULL,
  `related_product` varchar(200) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `gross_amount` varchar(255) NOT NULL,
  `net` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_code`, `product_name`, `product_description`, `product_price`, `product_type`, `product_image`, `category_id`, `sub_category_id`, `color_id`, `size_id`, `related_product`, `quantity`, `discount`, `gross_amount`, `net`, `created_date`, `created_by`, `modified_date`, `modified_by`, `status`) VALUES
(1, '647348024159444', 'Levi''s Men''s 505 Regular Fit Jean', 'Levi''s Men''s 505 Regular Fit Jean', 500, 1, '41e3n4r8cul__ac_ul260_sr200,260_.jpg', 1, '1', '', '', '', '10', '10', '5000.00', '4500.00', '2017-04-13 21:11:08', 1, NULL, NULL, '0'),
(2, '153033173415536', 'Levi''s Men''s 514 Straight Fit Jeans', 'Levi''s Men''s 514 Straight Fit Jeans', 299, 1, '41g2nti9lbl__ac_ul260_sr200,260_.jpg', 1, '1', '', '', '1', '10', '10', '2990.00', '2691.00', '2017-04-13 21:12:04', 1, NULL, NULL, '0'),
(3, '466613514863036', 'Levi''s Men''s 569 Loose Straight-Leg Jean', 'Levi''s Men''s 569 Loose Straight-Leg Jean', 399, 1, '41ha96qz96l__sy220_.jpg', 1, '1', '', '', '1,2', '10', '10', '3990.00', '3591.00', '2017-04-13 21:12:44', 1, NULL, NULL, '0'),
(4, '436846686601537', 'Wrangler Authentics Men''s Classic Regul', 'Wrangler Authentics Men''s Classic Regul', 699, 1, '41im7a59pzl__ac_ul260_sr200,260_.jpg', 1, '1', '', '', '1,2,3', '10', '10', '6990.00', '6291.00', '2017-04-13 21:13:19', 1, NULL, NULL, '0'),
(5, '181100608331317', 'Levi''s Men''s 513 Slim-Straight Jean', 'Levi''s Men''s 513 Slim-Straight Jean', 799, 1, '41iq3kdpzol__sy220_.jpg', 1, '1', '', '', '1,2,3,4', '2', '5', '1598.00', '1518.10', '2017-04-13 21:13:53', 1, NULL, NULL, '0'),
(6, '571198810056611', 'HUF Men''s 5 Pocket Bull Denim', 'HUF Men''s 5 Pocket Bull Denim', 299, 1, '91wdndnui1l__sp500,500,0_.jpg', 1, '1', '', '', '1,2,3,4,5', '10', '20', '2990.00', '2392.00', '2017-04-13 21:14:37', 1, NULL, NULL, '0'),
(7, '382531323544490', 'Levi''s Men''s 527 Slim Bootcut Jean', 'Levi''s Men''s 527 Slim Bootcut Jean', 725, 1, '91hvlqyzb3l__sp500,500,0_.jpg', 1, '1', '', '', '3,4,5,6', '10', '10', '7250.00', '6525.00', '2017-04-13 21:15:18', 1, NULL, NULL, '0'),
(8, '448451599018304', 'Haggar Men''s Work To Weekend Hidden Exp', 'Haggar Men''s Work To Weekend Hidden Exp', 200, 1, '91dpb2y+j8l__sp500,500,0_.jpg', 1, '1', '', '', '1,2,3', '3', '20', '600.00', '480.00', '2017-04-13 21:15:59', 1, NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE IF NOT EXISTS `tbl_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `buyer_name` varchar(100) NOT NULL,
  `cash_discount` int(11) NOT NULL,
  `grand_amount` double NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_by` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `due_date` date NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `shipped_status` int(11) NOT NULL COMMENT 'orderpace=0,',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_sales_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sale_id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `selling_rate` double NOT NULL,
  `discount` int(2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE IF NOT EXISTS `tbl_size` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `size` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `status_delete` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider_images`
--

CREATE TABLE IF NOT EXISTS `tbl_slider_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE IF NOT EXISTS `tbl_subcategory` (
  `subcat_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcat_id`, `parent_category_id`, `subcategory_name`, `image`, `created_by`, `modified_by`, `modified_date`, `created_date`, `status`) VALUES
(1, 1, 'Jeans', 'spring2_m_clothing_vd_set1_4__v534219377_.jpg', 1, 1, '2017-04-13 21:08:37', '2017-04-13 21:06:54', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE IF NOT EXISTS `tbl_wishlist` (
  `wish_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`wish_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`wish_id`, `user_id`, `product_id`, `product_price`, `created_date`) VALUES
(1, 1, 7, 725, '2017-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `building` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `secondary_address` text NOT NULL,
  `created_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `firstname`, `middlename`, `lastname`, `email`, `password`, `profile`, `mobile`, `whatsapp`, `room_no`, `floor`, `building`, `street`, `area`, `city`, `pincode`, `state`, `country`, `secondary_address`, `created_date`, `status`, `created_by`) VALUES
(1, 'hardik', '', 'dayani', 'hardik123@gmail.com', '123456', '', '9925252525', '', '', '', '', '', '', '', '', '', '', '', '2016-11-04 17:29:56', '0', '1'),
(3, 'tushal', '', 'dayani', 'user@gmail.com', '123456', '', '9925252525', '', '', '', '', '', '', '', '', '', '', '', '2016-11-04 17:45:23', '0', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
