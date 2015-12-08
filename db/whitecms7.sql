-- phpMyAdmin SQL Dump
-- version 4.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2015 at 09:02 AM
-- Server version: 5.5.33-MariaDB
-- PHP Version: 5.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `whitecms7`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '5ac4aae453037e65ef8a2f9a0c1531c18a64e3d517f8c5e3175859ab5bf17298', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin_config`
--

CREATE TABLE IF NOT EXISTS `admin_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminid` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE IF NOT EXISTS `menu_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL DEFAULT '0',
  `link` varchar(100) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `position` int(11) NOT NULL DEFAULT '0',
  `hide` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`id`, `title`, `title_en`, `post_id`, `link`, `parent_id`, `position`, `hide`) VALUES
(1, 'Halaman 1 ', 'Halaman 1 English', 3, '1.html', 0, 2, 1),
(2, 'Halaman ketiga', 'Halaman ketiga englsih', 0, '2.html', 3, 2, 0),
(3, 'Halaman kedua', 'Second page', 0, '11.html', 0, 1, 0),
(4, 'halaman ketiga utama', 'halaman ketiga utama english', 0, '12.html', 0, 1, 0),
(5, 'Sub halaman ketiga', 'Sub Halaman ketiga english', 0, '21.html', 2, 1, 0),
(7, 'Halaman Pertama', 'Halaman Pertama English', 0, 'Judul1.html', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `author` text NOT NULL,
  `date` int(11) NOT NULL,
  `title` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `content_en` text NOT NULL,
  `excerpt` text NOT NULL,
  `excerpt_en` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `meta_key` text NOT NULL,
  `meta_key_en` text NOT NULL,
  `meta_desc` text NOT NULL,
  `meta_desc_en` text NOT NULL,
  `template` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `catid`, `author`, `date`, `title`, `title_en`, `content`, `content_en`, `excerpt`, `excerpt_en`, `type`, `meta_key`, `meta_key_en`, `meta_desc`, `meta_desc_en`, `template`) VALUES
(3, 0, '0', 1449504115, 'judul indo', 'judul english', 'content indoe', 'content english', 'excerpt indo', 'excerpt english', 'page', 'meta key indo', 'meta key english', 'meta desc indo', 'meta desc english', 'home');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
