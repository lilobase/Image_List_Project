-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2012 at 03:40 PM
-- Server version: 5.1.63
-- PHP Version: 5.3.2-1ubuntu4.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeIgniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_storage`
--

CREATE TABLE IF NOT EXISTS `image_storage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` text NOT NULL,
  `image_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=137 ;

--
-- Dumping data for table `image_storage`
--

INSERT INTO `image_storage` (`id`, `image_id`, `image_name`) VALUES
(134, '389e356181a96ba8a2d385b638611c3ca2ef8ab7|jpg', '09.jpg'),
(128, '93e4e90545999af7ceaa8d67f7c28e1cfd76c508|jpg', 'no_name'),
(125, '8243c98da596e9c77f2e72d9b3efa66d7ab3b38b|jpg', 'no_name'),
(126, 'f51238171f9a054159a87d10b4c34963cc009400|jpg', 'no_name'),
(135, '88e9f48894c4d4f7d2e84434d69c2d8dd1e9a493|jpg', '12.jpg'),
(136, '95e06d72c94be265462bae95ba943d51c453648f|jpg', '06-07.jpg');
