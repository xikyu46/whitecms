-- phpMyAdmin SQL Dump
-- version 4.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2015 at 03:15 PM
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
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `type`, `name`) VALUES
(2, 'blog', 'news');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE IF NOT EXISTS `menu_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `post_id` int(11) DEFAULT '0',
  `link` varchar(100) NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `position` int(11) DEFAULT '0',
  `hide` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`id`, `title`, `title_en`, `post_id`, `link`, `parent_id`, `position`, `hide`) VALUES
(8, 'Home', 'Home', 4, 'simplepost', 0, 0, NULL),
(9, 'Single Post', 'Single Post', NULL, '#', 0, 0, NULL),
(10, 'Single Video', 'Single Video', NULL, '#', 0, 0, NULL),
(11, 'List Post', 'List Post', NULL, '#', 0, 0, NULL),
(12, 'Dropdown', 'Dropdown', NULL, '#', 0, 0, NULL),
(13, 'Default', 'Default', 5, '#', 9, 1, NULL),
(14, 'Alternative', 'Alternative', NULL, '#', 9, 2, NULL),
(15, 'Custom', 'Custom', NULL, '#', 9, 3, NULL),
(16, 'Sample', 'Sample', NULL, '#', 9, 4, NULL),
(17, 'Default', 'Custom', NULL, '#', 11, 0, NULL),
(18, 'Action', 'Action', NULL, '#', 12, 0, NULL),
(19, 'Another Action', 'Another Action', NULL, '#', 12, 0, NULL),
(20, 'Something Else Here', 'Something Else Here', NULL, '#', 12, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mod_newsticker`
--

CREATE TABLE IF NOT EXISTS `mod_newsticker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mod_newsticker`
--

INSERT INTO `mod_newsticker` (`id`, `text`, `url`, `status`) VALUES
(1, '', '', 0),
(2, '', '', 0),
(3, '', '', 0),
(4, '', '', 0),
(5, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mod_video`
--

CREATE TABLE IF NOT EXISTS `mod_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mod_video`
--

INSERT INTO `mod_video` (`id`, `date`, `name`, `description`, `link`) VALUES
(1, 0, 'title', 'descriprion', 'http://urlgitu.com');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `catid` int(11) NOT NULL,
  `author` text NOT NULL,
  `date` int(11) NOT NULL,
  `update` int(11) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `url`, `catid`, `author`, `date`, `update`, `title`, `title_en`, `content`, `content_en`, `excerpt`, `excerpt_en`, `type`, `meta_key`, `meta_key_en`, `meta_desc`, `meta_desc_en`, `template`) VALUES
(4, 'semarang', 0, '0', 1449891694, 0, 'Home', 'home', '<p>home lorem apslum</p>\n', '<p>home apslumdads asssm</p>\n', '', '', 'page', 'home', 'home', 'home', 'home', 'home'),
(5, 'simple.html', 0, '0', 1449845093, 0, 'Simple Post', '', 'simple', '', 'simple', '', 'page', '', '', '', '', 'home'),
(7, '34berita.html', 2, '0', 1449969291, 1449969254, 'berita 1', 'news 1', '<p>berita 1 content</p>\n', '<p>exceript 2</p>\n', '', '', 'blog', 'meta key', 'meta key', 'meta description', 'meta description', 'home'),
(8, 'berita2.html', 2, '0', 1449969396, 1449969396, 'berita 2', 'news 2', '<p>berita 2 bla bla bla</p>\n', '<p>content berita 2</p>\n', '<p>berita 2 bla bla bla</p>\n', '<p>exceript</p>\n', 'blog', 'meta key', 'meta key', 'meta description', 'meta description', 'home');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `theme`, `name`) VALUES
(2, 'default', 'home'),
(3, 'default', 'home2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
