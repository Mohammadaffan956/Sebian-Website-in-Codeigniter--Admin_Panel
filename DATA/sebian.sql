-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 01:02 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sebian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'admin', 'admin'),
(2, 'mubashir', 'mubashir');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `status`) VALUES
(6, 'Levi\'s', 1),
(7, 'kookai', 1),
(8, 'Bench', 1),
(9, 'mavi\'s', 1),
(10, 'gucci', 1),
(11, 'iF', 0),
(12, 'I', 0),
(13, 'Star\'s', 0);

-- --------------------------------------------------------

--
-- Table structure for table `c1`
--

CREATE TABLE `c1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `ppid` int(11) DEFAULT NULL,
  `checkid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `ip_address`, `quantity`) VALUES
(17, 36, '::1', 3),
(18, 37, '::1', 3),
(19, 38, '::1', 2),
(20, 81, '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_title` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_title`, `status`, `banner`) VALUES
(20, 'Men\'s', 1, 'New'),
(21, 'Women\'s Fashion', 1, 'New'),
(22, 'children\'s', 1, 'Latest'),
(29, 'boy\'s', 1, 'New Fashion '),
(30, 'Mobile', 2, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `content_page`
--

CREATE TABLE `content_page` (
  `content_id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_content` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content_page`
--

INSERT INTO `content_page` (`content_id`, `page_title`, `page_content`, `status`) VALUES
(12, 'Exchange Policy', '<p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">Our customer service policies are simple, straightforward and transparent and are drafted keeping your best interest in mind. If by any reason, you wish to part with a product you bought from Jadeed or are unhappy with the quality of the product, you can always send it back to us for replacement with any other item. And we promise we will not quibble, argue or frame excuses. It is your right and we respect it. By doing this, we also ensure that our main motto of a memorable shopping experience remains intact; we wish to be in your good books.</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">Though we are always working hard to match your expectations and deliver you quality products, on time, but still, in case, you have decided that you want a replacement, we are ready to help you out. In case of the following scenarios you are liable to get a replacement without any deduction:</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">We have shipped a wrong product that is not matching with your order.</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">There is a manufacturing defect in the product ordered by you.</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">You have 24 hours (from the date you receive the parcel) to make up your mind and intimate us that you wish to exchange the product.</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">You can do so by dropping in an Email to customercare@justshop.pk or call at3 stating your order id&nbsp;</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">You have to send us the parcel within four days of its receipt through courier.</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">Courier for sending back the product will boe by customer.</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">Some Doâ€™s and Donâ€™ts</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">Items must be unused and undamaged and must be in their original purchase condition.</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">You need to send us the following: Original Product Packaging, Manufacturers Containers, Documentation, Warranty Cards, Manuals, and all accessories.</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">All packaging, including the original manufacturers containers, must be unmarked and not defaced in any manner.</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\"><br style=\"line-height: 24px;\"></p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\"><span style=\"line-height: 24px; font-weight: bold;\">For Customer Support:</span>&nbsp;</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\"><span style=\"line-height: 24px; font-weight: bold;\">Or Contact Us on:</span>&nbsp;</p>', 1),
(13, 'Privacy Statement', '<h1 class=\"entry-title\" style=\"margin-top: 0px; margin-bottom: 0px; font-size: 2.857em; font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; color: rgb(51, 62, 72); letter-spacing: -0.025em; text-align: center;\"><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; letter-spacing: -0.14px; text-align: start;\"><span style=\"font-size: 14px; line-height: 21px; color: rgb(63, 67, 77); font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px;\"><span style=\"font-size: 13px; line-height: 24px; background-color: rgb(242, 242, 242);\">justshop.pk</span>&nbsp;is always committed to ensuring your privacy is protected so we hope that you will take some time to read our privacy policy explaining what kind of information are collected from you and how in tu the information is used. By using&nbsp;<span style=\"font-size: 13px; line-height: 24px; background-color: rgb(242, 242, 242);\">justshop.pk</span>&nbsp;and all its sub-domains or buying from us, you lie under our privacy policy.</span><br style=\"font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\"><br style=\"font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\"><span style=\"font-size: 14px; line-height: 21px; color: rgb(63, 67, 77); font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px;\"><span style=\"font-size: 13px; line-height: 24px; background-color: rgb(242, 242, 242);\">justshop.pk</span>&nbsp;understands your privacy needs and will not sell, trade, or share personal information collected online from customers with third parties. All personal information collected by&nbsp;<span style=\"font-size: 13px; line-height: 24px; background-color: rgb(242, 242, 242);\">justshop.pk</span>&nbsp;will only be used inteally and exclusively within our corporate group. Our privacy policy states this, fully complying and representing best practice in the industry.</span><br style=\"font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\"><br style=\"font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\"><span style=\"font-size: 14px; line-height: 21px; color: rgb(63, 67, 77); font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px;\">In the event that your name and address are passed on to a third party, this will only happen in an effort to have your order delivered to you. When you place order at&nbsp;<span style=\"font-size: 13px; line-height: 24px; background-color: rgb(242, 242, 242);\">justshop.pk</span>, your personal information will also be automatically used for marketing and/or promotional purposes from time to time. However, you can choose to not receive marketing or promotional information from&nbsp;</span><span style=\"font-size: 14px; line-height: 24px; background-color: rgb(242, 242, 242); color: rgb(63, 67, 77); font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px;\">justshop.pk</span><span style=\"font-size: 14px; line-height: 24px; color: rgb(63, 67, 77); font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px;\">&nbsp;at anytime by simply utilizing the unsubscribe function in the electronic marketing material sent to you.</span></p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; letter-spacing: -0.14px; text-align: start;\"><br style=\"font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\"><span style=\"font-weight: 700; font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\">Disclosure of Personal Information</span><br style=\"font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\"><span style=\"font-size: 14px; line-height: 21px; color: rgb(63, 67, 77); font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px;\"><span style=\"font-size: 13px; line-height: 24px; background-color: rgb(242, 242, 242);\">justshop.pk</span>&nbsp;guarantees that your personal information will not be shared with other organizations, except for companies related to the&nbsp;<span style=\"font-size: 13px; line-height: 24px; background-color: rgb(242, 242, 242);\">justshop.pk</span>&nbsp;brand and third parties directly working with us to deliver your purchases.</span><br style=\"font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\"><br style=\"font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\"><span style=\"font-weight: 700; font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\">Security of Your Personal Information</span><br style=\"font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\"><span style=\"font-size: 14px; line-height: 21px; color: rgb(63, 67, 77); font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px;\"><span style=\"font-size: 13px; line-height: 24px; background-color: rgb(242, 242, 242);\">justshop.pk</span>&nbsp;ensures that all personal information collected from customers are securely and safely stored. We protect your privacy by restricting access to your personal information and keeping up with technology products that prevent unauthorized access to computers and securely destroy personal information when they are no longer needed for record retention purposes.</span><br style=\"font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\"><br style=\"font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\"><span style=\"font-weight: 700; font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\">Changes to the Privacy Policy</span><br style=\"font-size: 14px; line-height: 21px; margin: 0px auto; padding: 0px; overflow: hidden; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77);\"><span style=\"font-size: 14px; line-height: 21px; color: rgb(63, 67, 77); font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px;\">Please do frequently check back as&nbsp;<span style=\"font-size: 13px; line-height: 24px; background-color: rgb(242, 242, 242);\">justshop.pk</span>&nbsp;privacy policy may incorporate changes from time to time.&nbsp;<span style=\"font-size: 13px; line-height: 24px; background-color: rgb(242, 242, 242);\">justshop.pk</span>&nbsp;reserves the right though to change and modify its privacy policy at any time. All changes to the privacy policy will be published on&nbsp;</span><span style=\"font-size: 14px; line-height: 24px; background-color: rgb(242, 242, 242); color: rgb(63, 67, 77); font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; letter-spacing: 0.5px;\">justshop.pk.</span></p></h1>', 1),
(14, 'Warranty Policy', '<p><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">justshop.pk gives offers you 1 day replacement / Checking warranty on Every transaction from us, Weather its in manufacturerâ€™s warranty or not ! This replacement warranty offers you just to make you satisfied at the time of purchasing or just to put our customer on safe side, Customer can check the product in 1 day which starts from the day of delivery. During this period of warranty if something with the products goes wrong then you can replace your product under below mentioned warranty Terms and Conditions.</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"font-weight: 700; line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\">(For Fashion Categories)</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">1) justshop.pk&nbsp;doesnâ€™t offer exchange on the purchase of any merchandise (Men &amp; Women Clothing), whatsoever. Except footwear but with 30% deduction.</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">2) justshop.pk&nbsp;offers replacement on all the merchandises i.e. Size, Color (Men &amp; Women â€“ Clothing and Footwear).</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"font-weight: 700; line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\">Terms &amp; Conditions:</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">Exchange &amp; Replace: justshop.pk&nbsp;is not liable to replace and exchange a merchandise if found used or damaged. If receivable is found use or damage, the cost of re-shipping the item shall be paid by the customer.</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">Itâ€™s the liability of the customer to send the merchandise back in its original packing as was received. Shipping cost to be bear by the customer.</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"font-weight: 700; line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\">(For Other All Categories)</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">*1)* Please keep your purchase receipt safe with you which will be issued by justshop.pk. The purchase receipt must be presented together with the warranty when making a claim within 1 day of warranty. If the receipt of purchase is not presented, then no claim would be entertain.</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">*2)* Please make sure proper packing of product, to ensure that no damage occurs to product during transit, box of the product must be in the same condition as receive, and box must contain the following:</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">-Complete contents as received</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">-Detail note regarding the issue</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">-Invoice / Purchase receipt cop</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">*3) In the event that the goods requiring repair under warranty, the owner is responsible for the cost of transportation to and from justshop.pk&nbsp;Branch. Whilst in transit the goods are at the owners risk.</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">*4) In the event if no identical Product is available for replace, justshop.pk&nbsp;has the right to replace the product with a device of equal capacity, or offer the customer the choice of other products which can be upgraded also &amp; incur an extra cost.</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">*5) This warranty is limited to defects in workmanship or parts. All defective products will be replaced. This warranty does not extend to accessories. This warranty does not cover LCD and Batteries or any other consumable items.</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">*6) This warranty does not cover any defect caused by an accident, misuse, abuse, improper installation or operation, lack of reasonable care, loss of parts, tampering or attempted repair by a person not authorized by the distributor.</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">*7) The warranty will not apply if the factory-applied serial number or seals has been altered or removed from the Product.</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">*8)* The warranty will not apply if damage, malfunction or failure resulting from alterations, accident, misuse, abuse, fire, liquid spillage, miss-adjustment of customer controls, use on an incorrect voltage, power surges and dips, voltage supply problems, tampering or unauthorized repairs by any persons, use of defective or incompatible accessories, exposure to abnormally corrosive conditions or entry by any insect, vermin or foreign object in the Product.</span><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><br style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; float: none; padding: 0px; overflow: hidden; letter-spacing: 0.5px; transition: all 0.3s ease-out 0s; color: rgb(63, 67, 77); background-color: rgb(242, 242, 242);\"><span style=\"line-height: 21px; font-family: Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;, &quot;Trebuchet MS&quot;, Verdana, sans-serif; margin: 0px auto; padding: 0px; overflow: hidden; color: rgb(63, 67, 77); letter-spacing: 0.5px; background-color: rgb(242, 242, 242);\">*9)* In case if any customer doesnâ€™t want to take the same product which he has ordered or not satisfy with the product purchased then customer can replace the purchased product with any other product mentioned on the website. In this case, customer needs to afford only with the deduction of 20% replacement charges. These charges would be deducted on the invoice amount of same transaction. Hence, this policy will not apply if the products cost more than Rs.20000.</span><br></p>', 1),
(21, 'Payments', '<p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 14.8571px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">&nbsp; &nbsp;How can you pay for your purchase?</p><p style=\"margin-bottom: 1rem; font-size: 13px; line-height: 14.8571px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\">&nbsp; &nbsp;We support the following payment options:</p><ul style=\"margin-bottom: 1rem; font-size: 13px; line-height: 24px; color: rgb(51, 62, 72); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; letter-spacing: -0.14px;\"><li style=\"line-height: 14.8571px;\">COD (Cash On Delivery)</li><li style=\"line-height: 14.8571px;\">Bank Transfer</li><li style=\"line-height: 14.8571px;\">Easy Paisa</li></ul>', 1),
(22, 'Payment method', '<p>in process</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `customer_note` varchar(255) NOT NULL,
  `customer_phone` int(20) NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'New Order',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `track_NO` varchar(255) NOT NULL,
  `ship` int(11) NOT NULL,
  `total_bill` int(11) NOT NULL,
  `special_discount` int(11) NOT NULL,
  `after_discount_bill` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL DEFAULT '0',
  `dispatch_active` int(11) DEFAULT '0',
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `item_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_address`, `customer_city`, `customer_note`, `customer_phone`, `order_status`, `date`, `track_NO`, `ship`, `total_bill`, `special_discount`, `after_discount_bill`, `sub_total`, `dispatch_active`, `product_id`, `product_name`, `item_quantity`) VALUES
(18, 'Roshan', 'Roshan@mail.com', 'ramswami', 'karachi', 'dihaan se lana', 9876, 'New Order', '2018-12-10 12:34:02', 'HA_91134', 200, 100, 0, 100, 600, 0, 24, 'kurti', 1),
(19, 'zubair', 'zubair@mail.com', 'garden', 'nawabshah', 'sasta dedo', 1232141, 'New Order', '2018-12-10 12:39:15', 'HA_22117', 300, 3120, 0, 3120, 600, 0, 24, 'kurti', 6),
(20, 'zubair', 'zubair@mail.com', 'garden', 'nawabshah', 'sasta dedo', 1232141, 'New Order', '2018-12-10 12:40:46', 'HA_61807', 300, 3640, 0, 3640, 600, 0, 24, 'kurti', 7),
(21, 'saleem', 'saleem@mail.com', 'lyari naddi', 'hyderabad', 'sasta dede bhai', 1234567890, 'New Order', '2018-12-13 10:39:25', 'HA_76334', 300, 3240, 0, 3240, 600, 0, 19, 'long coat', 6),
(22, 'zubair', 'zubair@mail.com', 'garden', 'karachi', 'chal bai', 33678250, 'New Order', '2019-01-23 15:54:30', 'HA_49357', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(23, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-23 16:03:41', 'HA_24655', 200, 1280, 0, 1280, 350, 0, 37, 'T-shirt', 4),
(24, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-23 16:04:28', 'HA_91673', 200, 1280, 0, 1280, 350, 0, 37, 'T-shirt', 4),
(25, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:33:02', 'HA_32753', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(26, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:33:43', 'HA_39604', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(27, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:34:02', 'HA_62448', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(28, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:34:45', 'HA_87334', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(29, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:35:11', 'HA_79502', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(30, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:36:25', 'HA_45362', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(31, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:36:33', 'HA_40639', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(32, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:38:14', 'HA_94861', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(33, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:38:37', 'HA_14890', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(34, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:38:42', 'HA_12220', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(35, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:38:43', 'HA_89839', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(36, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:38:44', 'HA_66050', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(37, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:39:18', 'HA_47108', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(38, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:39:33', 'HA_87832', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(39, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:39:35', 'HA_35684', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(40, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:39:44', 'HA_28964', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(41, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:40:31', 'HA_38236', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(42, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:40:46', 'HA_12056', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(43, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:41:05', 'HA_34740', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(44, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:41:45', 'HA_18987', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(45, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:42:03', 'HA_51505', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(46, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:43:14', 'HA_60405', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(47, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:43:50', 'HA_69600', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(48, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'check kar k lana', 3939209, 'New Order', '2019-01-24 10:43:57', 'HA_93421', 200, 960, 0, 960, 350, 0, 37, 'T-shirt', 3),
(49, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'kuch nh', 332876567, 'New Order', '2019-01-24 10:45:02', 'HA_22773', 200, 2310, 0, 2310, 800, 0, 32, 'T-shirt', 3),
(50, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'kuch nh', 332876567, 'New Order', '2019-01-24 10:45:14', 'HA_45778', 200, 2310, 0, 2310, 800, 0, 32, 'T-shirt', 3),
(51, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'kuch nh', 332876567, 'New Order', '2019-01-24 10:45:58', 'HA_61459', 200, 2310, 0, 2310, 800, 0, 32, 'T-shirt', 3),
(52, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'kuch nh', 332876567, 'New Order', '2019-01-24 10:46:06', 'HA_42074', 200, 2310, 0, 2310, 800, 0, 32, 'T-shirt', 3),
(53, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'kuch nh', 332876567, 'New Order', '2019-01-24 10:46:51', 'HA_43469', 200, 2310, 0, 2310, 800, 0, 32, 'T-shirt', 3),
(54, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'kuch nh', 332876567, 'New Order', '2019-01-24 10:47:58', 'HA_61933', 200, 2310, 0, 2310, 800, 0, 32, 'T-shirt', 3),
(55, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'kuch nh', 332876567, 'New Order', '2019-01-24 10:49:01', 'HA_57527', 200, 2310, 0, 2310, 800, 0, 32, 'T-shirt', 3),
(56, 'zubair', 'zubair@gmail.com', 'garden', 'karachi', 'kuch nh', 332876567, 'New Order', '2019-01-24 10:49:53', 'HA_25831', 200, 2310, 0, 2310, 800, 0, 32, 'T-shirt', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customers_information`
--

CREATE TABLE `customers_information` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_city` varchar(150) NOT NULL,
  `customer_note` varchar(150) NOT NULL,
  `customer_phone` text NOT NULL,
  `order_status` varchar(150) NOT NULL DEFAULT 'New Order',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `track_NO` varchar(150) NOT NULL,
  `shipment` int(11) NOT NULL,
  `total_bill` int(11) NOT NULL DEFAULT '0',
  `special_discount` int(11) NOT NULL DEFAULT '0',
  `after_discount_bill` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_information`
--

INSERT INTO `customers_information` (`customer_id`, `customer_name`, `customer_email`, `customer_address`, `customer_city`, `customer_note`, `customer_phone`, `order_status`, `date`, `track_NO`, `shipment`, `total_bill`, `special_discount`, `after_discount_bill`) VALUES
(331, 'Mohammad', 'mohammad@mail.com', 'R-33 line area karachi', 'KARACHI', 'dihan se lana', '09876543', 'New Order', '2019-05-13 12:57:00', 'SB77626', 200, 9500, 9200, 500);

-- --------------------------------------------------------

--
-- Table structure for table `dispatch_order`
--

CREATE TABLE `dispatch_order` (
  `dispatch_id` int(11) NOT NULL,
  `dispatch_status` varchar(255) NOT NULL DEFAULT 'Deliver',
  `customer_id` int(11) NOT NULL,
  `dispatch_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_information`
--

CREATE TABLE `order_information` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `Image` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `per_item_total` int(11) NOT NULL,
  `track_NO` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_information`
--

INSERT INTO `order_information` (`order_id`, `customer_id`, `product_id`, `product_name`, `Image`, `product_price`, `item_quantity`, `per_item_total`, `track_NO`) VALUES
(1, 331, 3, 'Levis Shirt', 'img7.jpg', 1500, 2, 3000, 'SB77626');

-- --------------------------------------------------------

--
-- Table structure for table `p1`
--

CREATE TABLE `p1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `checkid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `product_img_id` int(11) NOT NULL,
  `product_img_name` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_cate` int(11) NOT NULL,
  `sub_cate` int(11) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_lg_img` text NOT NULL,
  `product_thumb` text NOT NULL,
  `product_img` text NOT NULL,
  `availability` varchar(222) NOT NULL DEFAULT 'new stock',
  `active` int(100) NOT NULL DEFAULT '1',
  `discounted_price` int(11) NOT NULL,
  `deal` int(11) NOT NULL DEFAULT '0',
  `cate_status` int(11) NOT NULL DEFAULT '1',
  `product_track_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`product_id`, `product_name`, `product_cate`, `sub_cate`, `product_brand`, `product_desc`, `product_price`, `product_lg_img`, `product_thumb`, `product_img`, `availability`, `active`, `discounted_price`, `deal`, `cate_status`, `product_track_id`) VALUES
(1, 'New Shirt', 20, 0, 8, 'lorem ipsum dolor ', 500, 'img2.jpg', 'http://[::1]/sebian/uploads/01.jpg', 'http://[::1]/sebian/uploads/01.jpg', 'new stock', 1, 450, 0, 1, ''),
(2, 'T-Shirt', 20, 0, 6, 'Lorem Ipsum Dolor', 1000, 'img1.jpg', 'http://[::1]/sebian/uploads/banner-01.jpg', 'http://[::1]/sebian/uploads/banner-01.jpg', 'new stock', 1, 850, 0, 1, ''),
(3, 'Levis Shirt', 20, 0, 6, 'lorem ipsum', 1500, 'img7.jpg', 'http://[::1]/sebian/uploads/02.jpg', 'http://[::1]/sebian/uploads/02.jpg', 'new stock', 1, 1400, 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `sub_name`) VALUES
(3, 't-shirt'),
(5, 'watches');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `c1`
--
ALTER TABLE `c1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `FK_c1` (`ppid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `content_page`
--
ALTER TABLE `content_page`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customers_information`
--
ALTER TABLE `customers_information`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `track_NO` (`track_NO`);

--
-- Indexes for table `dispatch_order`
--
ALTER TABLE `dispatch_order`
  ADD PRIMARY KEY (`dispatch_id`),
  ADD KEY `FK_dis_cus_id` (`customer_id`);

--
-- Indexes for table `order_information`
--
ALTER TABLE `order_information`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_mobile` (`customer_id`),
  ADD KEY `fk_productforeign` (`product_id`);

--
-- Indexes for table `p1`
--
ALTER TABLE `p1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_img_id`),
  ADD KEY `fk_proimages` (`product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_register` (`product_cate`),
  ADD KEY `FK_registerbr` (`product_brand`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `c1`
--
ALTER TABLE `c1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `content_page`
--
ALTER TABLE `content_page`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `customers_information`
--
ALTER TABLE `customers_information`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT for table `dispatch_order`
--
ALTER TABLE `dispatch_order`
  MODIFY `dispatch_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_information`
--
ALTER TABLE `order_information`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p1`
--
ALTER TABLE `p1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_img_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `c1`
--
ALTER TABLE `c1`
  ADD CONSTRAINT `FK_c1` FOREIGN KEY (`ppid`) REFERENCES `p1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c1_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `p1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dispatch_order`
--
ALTER TABLE `dispatch_order`
  ADD CONSTRAINT `FK_dis_cus_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_information`
--
ALTER TABLE `order_information`
  ADD CONSTRAINT `fk_mobile` FOREIGN KEY (`customer_id`) REFERENCES `customers_information` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_productforeign` FOREIGN KEY (`product_id`) REFERENCES `register` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `fk_proimages` FOREIGN KEY (`product_id`) REFERENCES `register` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `FK_register` FOREIGN KEY (`product_cate`) REFERENCES `category` (`cate_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_registerbr` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
