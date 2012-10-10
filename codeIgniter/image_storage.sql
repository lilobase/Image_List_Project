-- phpMyAdmin SQL Dump
-- Generation Time: Oct 02, 2012 at 03:40 PM
--
-- Database: `codeIgniter`

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
