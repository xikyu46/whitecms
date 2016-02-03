-- phpMyAdmin SQL Dump
-- version 4.4.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2016 at 03:18 AM
-- Server version: 5.5.43
-- PHP Version: 5.4.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sura123_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `type`, `name`) VALUES
(2, 'blog', 'news');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE IF NOT EXISTS `configurations` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `name`, `value`) VALUES
(1, 'websitename', 'Pemerintah Surakarta');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE IF NOT EXISTS `menu_item` (
  `id` int(11) NOT NULL,
  `title` varchar(75) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `post_id` int(11) DEFAULT '0',
  `link` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `position` int(11) DEFAULT '0',
  `hide` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`id`, `title`, `title_en`, `post_id`, `link`, `parent_id`, `position`, `hide`) VALUES
(9, 'Pemerintahan', 'Government of Surakarta', 4, '0', 0, 2, NULL),
(10, 'Pelayanan', 'Service', 4, NULL, 0, 3, NULL),
(11, 'Jelajah Surakarta', 'Tourism', 4, NULL, 0, 4, NULL),
(12, 'Kontak', 'Contact', 4, NULL, 0, 5, NULL),
(13, 'Sejarah Pemerintahan Kota Surakarta', 'Histori of Surakarta City Government', 43, '0', 9, 1, NULL),
(14, 'Visi & Misi', 'Vision & Mision', 44, '0', 9, 2, NULL),
(17, 'Hotel', 'Hotels', 4, NULL, 11, 0, NULL),
(22, 'Kota Surakarta', 'About the City of Surakarta', 4, '0', 0, 1, NULL),
(24, 'Letak Geografis', 'Geographical Location', 39, '0', 22, 1, NULL),
(25, 'Beranda', 'Home', 4, NULL, 0, 0, NULL),
(26, 'Toponimi', 'Toponymy', 41, '0', 22, 4, NULL),
(27, 'Wilayah & Kependudukan', 'Regions & Population', 42, '0', 22, 3, NULL),
(28, 'Pendidikan', 'Education', 4, NULL, 10, NULL, NULL),
(29, 'Kesehatan', 'Health', 4, NULL, 10, NULL, NULL),
(30, 'Kependudukan', 'Population', 4, NULL, 10, NULL, NULL),
(31, 'Perijinan', 'Licensing', 4, NULL, 10, NULL, NULL),
(32, 'Perpajakan', 'Taxation', 4, NULL, 10, NULL, NULL),
(33, 'Wisata & Budaya', 'Tourism & Culture', 4, NULL, 11, NULL, NULL),
(34, 'Kuliner', 'Culinary', 4, NULL, 11, NULL, NULL),
(37, 'Sejarah Kota Surakarta', 'History Surakarta', 40, '0', 22, 2, NULL),
(38, 'SOTK', 'SOTK', 0, '3', 9, 0, NULL),
(39, 'Profil Walikota', 'Mayor Profile', 0, '', 9, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mod_asset`
--

CREATE TABLE IF NOT EXISTS `mod_asset` (
  `id` int(11) NOT NULL,
  `dirid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_asset`
--

INSERT INTO `mod_asset` (`id`, `dirid`, `name`, `file`) VALUES
(6, 1, '', 'slidebanner1-1450032395.png'),
(7, 1, '', 'slidebanner2-1450032406.png'),
(8, 1, '', 'slidebanner3-1450032411.png'),
(11, 5, '', 'logosolothespiritofjava-1450474036.png'),
(12, 5, '', 'kontak-1450474523.jpg'),
(13, 5, '', 'ICCC2015Solo-1450474731.jpg'),
(14, 5, '', 'berita-1450476224.jpg'),
(16, 5, '', 'tentang-1450476330.jpg'),
(24, 4, '', '06-1451230095.jpg'),
(25, 4, '', 'jurugtest-1451230281.jpg'),
(26, 4, '', 'jurug-1451230292.jpg'),
(27, 4, '', 'nasiliwet-1451230353.jpg'),
(28, 4, '', '22032013PanduTamanBalekambang1-1451230413.jpg'),
(29, 4, '', '33173T00771javapicturecomwpcontentuploads201210PasarGedeSolo01-1451230563.jpg'),
(30, 8, '', 'mobilpelayanankependudukan1-1452525595.jpg'),
(44, 9, '', 'keroncong-1453128333.jpg'),
(45, 9, '', 'SITTEX-1453128427.jpg'),
(46, 9, '', 'imlek-1453129045.jpg'),
(48, 9, '', 'maulid-1453166473.jpg'),
(49, 9, '', 'haulhabibsyech-1453166533.jpg'),
(50, 9, '', 'greatsale-1453166825.jpg'),
(51, 9, '', 'grebegsudiro-1453166879.jpg'),
(52, 9, '', 'festivaljenang-1453171263.jpg'),
(53, 9, '', 'gamelan-1453171472.jpg'),
(54, 9, '', 'javaexpo-1453171543.jpg'),
(55, 9, '', 'festivalkuliner-1453171567.jpg'),
(56, 9, '', 'solomenari-1453171602.jpg'),
(57, 4, '', 'defaultimage-1453171744.png'),
(58, 9, '', 'lovebird-1453173603.jpg'),
(59, 1, '', 'slidebannerdefault-1453176948.png'),
(60, 1, '', 'terminalslide1-1453177841.jpg'),
(61, 1, '', 'terminalslide2-1453178067.jpg'),
(62, 1, '', 'terminaltirtonadi5-1453178088.jpg'),
(63, 1, '', 'terminalslide66-1453178105.jpg'),
(64, 1, '', 'sologreatsale-1453179837.jpg'),
(65, 9, '', 'waisaka-1453512574.jpg'),
(66, 9, '', 'malemselikur-1453512737.jpg'),
(67, 9, '', 'dolananbocahjpg-1453512832.jpg'),
(68, 4, '', 'sampleImage-1453533120.png');

-- --------------------------------------------------------

--
-- Table structure for table `mod_asset_dir`
--

CREATE TABLE IF NOT EXISTS `mod_asset_dir` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_asset_dir`
--

INSERT INTO `mod_asset_dir` (`id`, `name`) VALUES
(1, 'slidebanner'),
(2, 'banner front'),
(3, 'banner side'),
(4, 'img'),
(5, 'microsite'),
(8, 'NEWS'),
(9, 'KALENDER EVENT 2016');

-- --------------------------------------------------------

--
-- Table structure for table `mod_banner`
--

CREATE TABLE IF NOT EXISTS `mod_banner` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_banner`
--

INSERT INTO `mod_banner` (`id`, `type`, `text`, `url`, `status`) VALUES
(1, 'front', '', 'http://surakarta.tratapp.com/assets/slidebanner1-1450032395.png', 1),
(2, 'front', '', 'http://surakarta.tratapp.com/assets/slidebanner1-1450032395.png', 1),
(3, 'front', '', 'http://surakarta.tratapp.com/assets/wtn-1451150383.jpg', 1),
(4, 'front', '', '', 0),
(5, 'front', '', '', 0),
(6, 'side', '', 'http://pandi.id/blacklist.txt', 1),
(7, 'side', '', 'http://surakarta.tratapp.com/assets/wtn-1451150383.jpg', 1),
(8, 'side', '', '', 0),
(9, 'side', '', '', 0),
(10, 'side', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mod_footer`
--

CREATE TABLE IF NOT EXISTS `mod_footer` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_footer`
--

INSERT INTO `mod_footer` (`id`, `type`, `url`, `name`) VALUES
(4, 'middle', '#', 'Portal'),
(5, 'middle', '#', 'About Us'),
(6, 'middle', '#', 'Blog'),
(7, 'middle', '#', 'Contact & Support'),
(8, 'right', '#', 'Training'),
(9, 'right', '#', 'Students & teachers');

-- --------------------------------------------------------

--
-- Table structure for table `mod_microsite`
--

CREATE TABLE IF NOT EXISTS `mod_microsite` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `template` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_microsite`
--

INSERT INTO `mod_microsite` (`id`, `menu`, `title`, `content`, `image`, `template`, `url`, `status`) VALUES
(1, 'sample microste', 'sample microste', '', '', '', 'samplemicroste', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mod_microsite_contact`
--

CREATE TABLE IF NOT EXISTS `mod_microsite_contact` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_microsite_contact`
--

INSERT INTO `mod_microsite_contact` (`id`, `mid`, `facebook`, `twitter`, `instagram`, `googleplus`, `contact`, `phone`, `email`, `address`) VALUES
(1, 1, 'facebook', 'twitter', 'instagram', 'google plus', 'http://surakarta.tratapp.com/assets/kontak-1450474523.jpg', '0271.xxxxxxxx', 'admin@webmail.com', 'Jl. Alamat Detail');

-- --------------------------------------------------------

--
-- Table structure for table `mod_microsite_content`
--

CREATE TABLE IF NOT EXISTS `mod_microsite_content` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `anchor` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_microsite_content`
--

INSERT INTO `mod_microsite_content` (`id`, `mid`, `menu`, `title`, `background`, `anchor`, `content`, `status`) VALUES
(1, 1, 'First Content', '', 'http://surakarta.tratapp.com/assets/ICCC2015Solo-1450474731.jpg', 'FirstContent', '', NULL),
(2, 1, 'tentang', '', 'http://surakarta.tratapp.com/assets/tentang-1450476330.jpg', 'tentang', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci neque, vel commodo mi blandit nec. Cras condimentum pretium turpis at ullamcorper. Ut et nunc ut mauris consequat rhoncus. Cras porttitor lorem ac magna dictum, et elementum mauris sagittis. Maecenas malesuada arcu erat, vel pulvinar lectus laoreet id. Sed dictum dolor lorem, at accumsan sapien pharetra sit amet. Cras porta euismod ultricies. Suspendisse pulvinar tempus orci, quis cursus nunc interdum quis. Morbi convallis auctor euismod. Maecenas tristique, velit vel gravida semper, ex quam dapibus nisl, vehicula hendrerit arcu nulla id leo. Vivamus bibendum blandit rhoncus. Phasellus consequat ut purus ac varius. Donec at tempor ligula, et viverra justo.\n\nDonec vehicula ex iaculis, commodo magna eu, rutrum arcu. Ut elementum dui ut ipsum fermentum tincidunt. Mauris placerat, velit eu consectetur pellentesque, ipsum nisi ullamcorper justo, vitae consectetur ante diam in enim. Donec ornare et eros sit amet pharetra. Donec vitae odio imperdiet, convallis tellus eu, dictum lorem. Morbi eget felis finibus, blandit mi sit amet, eleifend lacus. Suspendisse congue pretium ipsum ac tristique.', NULL),
(3, 1, 'berita', '', 'http://surakarta.tratapp.com/assets/berita-1450476224.jpg', 'berita', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mod_microsite_template`
--

CREATE TABLE IF NOT EXISTS `mod_microsite_template` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `navbar` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `header_border` varchar(255) NOT NULL,
  `footer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_microsite_template`
--

INSERT INTO `mod_microsite_template` (`id`, `mid`, `title`, `logo`, `judul`, `slogan`, `navbar`, `header`, `header_border`, `footer`) VALUES
(1, 1, 'sample microste', 'http://surakarta.tratapp.com/assets/logosolothespiritofjava-1450474036.png', 'JUDUL WEBSITE', 'slogan website', '#fefefe', '#e57816', '#e57816', '#e57816');

-- --------------------------------------------------------

--
-- Table structure for table `mod_newsticker`
--

CREATE TABLE IF NOT EXISTS `mod_newsticker` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_newsticker`
--

INSERT INTO `mod_newsticker` (`id`, `text`, `url`, `status`) VALUES
(1, 'Selamat Hari Raya Natal 2015 dan Tahun Baru 2016', 'html://domain.url', 1),
(2, 'ipsum', '', 1),
(3, '', '', 0),
(4, '', '', 0),
(5, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mod_share`
--

CREATE TABLE IF NOT EXISTS `mod_share` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_share`
--

INSERT INTO `mod_share` (`id`, `name`, `status`) VALUES
(1, 'twitter', 1),
(2, 'facebook', 1),
(3, 'googleplus', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mod_share_detail`
--

CREATE TABLE IF NOT EXISTS `mod_share_detail` (
  `id` int(11) NOT NULL,
  `relid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_share_detail`
--

INSERT INTO `mod_share_detail` (`id`, `relid`, `name`, `value`) VALUES
(2, 1, 'tweettext', 'tweet kami dong'),
(3, 1, 'username', 'loremtweet'),
(4, 1, 'hashtag', 'loremipsumder');

-- --------------------------------------------------------

--
-- Table structure for table `mod_slidebanner`
--

CREATE TABLE IF NOT EXISTS `mod_slidebanner` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `title` text NOT NULL,
  `title_en` text NOT NULL,
  `text` text NOT NULL,
  `text_en` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `imgurl` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_slidebanner`
--

INSERT INTO `mod_slidebanner` (`id`, `date`, `title`, `title_en`, `text`, `text_en`, `url`, `imgurl`, `status`) VALUES
(1, 1453161600, 'Terminal Bus Tirtonadi Solo', 'Welcome to Solo', 'Selamat datang di Kota Solo. Nikmati perjalanan anda dengan bus melalui terminal bernuansa bandara.', 'Selamat datang di Kota Solo. Nikmati perjalanan anda dengan bus melalui terminal bernuansa bandara.', 'http://www.surakarta.go.id/konten/sejarah-kota', 'http://surakarta.tratapp.com/assets/terminalslide1-1453177841.jpg', 0),
(2, 1420070400, 'PELAYANAN TERMINAL TIRTONADI', 'PELAYANAN TERMINAL TIRTONADI', 'Kualitas kenyamanan calon penumpang adalah tujuan pengelola Terminal Bus Tirtonadi Solo. ', 'Kualitas kenyamanan calon penumpang adalah tujuan pengelola Terminal Bus Tirtonadi Solo. ', 'http://surakarta.tratapp.com/assets/slidebanner2-1450032406.png', 'http://surakarta.tratapp.com/assets/terminalslide2-1453178067.jpg', 0),
(3, 0, 'Terminal Rasa Bandara', 'Terminal Rasa Bandara', 'Terminal Tirtonadi Solo, ruang tunggunya bersih, ber-AC tanpa gangguan pedagang asongan dan pengamen', 'Terminal Tirtonadi Solo, ruang tunggunya bersih, ber-AC tanpa gangguan pedagang asongan dan pengamen', 'http://surakarta.tratapp.com/assets/slidebanner3-1450032411.png', 'http://surakarta.tratapp.com/assets/terminaltirtonadi5-1453178088.jpg', 0),
(4, 0, 'Terminal Terbaik se Indonesia', 'Terminal Terbaik se Indonesia', 'Fasilitas untuk mendukung kenyamanan calon penumpang dari masjid, wifi dan sebagainya', 'Fasilitas untuk mendukung kenyamanan calon penumpang dari masjid, wifi dan sebagainya', 'http://surakarta.tratapp.com/assets/01-1451229693.jpg', 'http://surakarta.tratapp.com/assets/terminalslide66-1453178105.jpg', 0),
(5, 1452988800, 'SOLO GREAT SALE', 'Solo Great Sale', 'Bulan belanja di Kota Solo', 'Discount month to celebrate the 271th anniversary of Solo City.', 'http://sologreatsale.com', 'http://surakarta.tratapp.com/assets/sampleImage-1453533120.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mod_sosmed`
--

CREATE TABLE IF NOT EXISTS `mod_sosmed` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_sosmed`
--

INSERT INTO `mod_sosmed` (`id`, `name`, `url`, `icon`, `status`) VALUES
(1, 'facebook', '', 'fa-facebook', 1),
(2, 'twitter', '@PEMKOT_SOLO', 'fa-twitter', 1),
(3, 'linkedin', '', 'fa-linkedin', 1),
(4, 'googleplus', '', 'fa-google-plus', 1),
(5, 'youtube', '', 'fa-youtube', 1),
(6, 'custom', '            <a class="twitter-timeline"  href="https://twitter.com/hashtag/kotasolo" data-widget-id="689388533790867457">#kotasolo Tweets</a>\n            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>\n          ', 'fa-youtube', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mod_video`
--

CREATE TABLE IF NOT EXISTS `mod_video` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `text_en` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_video`
--

INSERT INTO `mod_video` (`id`, `date`, `name`, `name_en`, `text`, `text_en`, `url`, `content`, `status`) VALUES
(1, 1450069968, 'title', '', 'Kirab ', '', 'https://www.youtube.com/embed/1H5hbYFuTLs', 'kirab.......', 1),
(2, 1450069968, 'title', '', 'Keselamatan Berkendaraan', '', 'https://www.youtube.com/embed/bEPNXQIigtU', 'Tertib Berlalu Lintas Cermin Budaya Wong Solo', 1),
(3, 1450069968, 'title', '', 'Solo Kota Batik', '', 'https://www.youtube.com/embed/zqRbo0uEzfo"', 'Solo adalah Ibu Kota Batik. ', 1),
(4, 1450069968, 'title', '', 'Bus Wisata Werkudara', '', 'https://www.youtube.com/embed/xLn5mMWxvHk"', 'Menikmati Kota Solo dengan naik bus tingkat', 1),
(5, 1450069968, 'title', '', 'testing', '', 'https://www.youtube.com/embed/syZX-nTWGto', 'Integer id lacinia mauris. Suspendisse potenti. Etiam ultrices sed nunc nec finibus. Phasellus magna purus, placerat ac aliquam ut, lacinia in eros. Quisque lobortis quam ex, id porta urna porta ut. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eu ultrices magna, ac blandit nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris id blandit nunc, nec consectetur eros. Morbi vulputate facilisis elit, ac pulvinar metus accumsan vel. Proin ac finibus leo, volutpat cursus arcu. Duis arcu sapien, tempor tincidunt augue at, gravida tempor lacus. Aenean pellentesque viverra blandit. Nulla facilisi. Sed ullamcorper elit ut ultricies feugiat. Integer laoreet quam eget ex gravida, vitae vulputate nisl congue.', 1),
(6, 0, '', '', 'SELAMAT DATANG DI TERMINAL TIRTONADI', '', '"https://www.youtube.com/embed/YgS1k6jJCNI" ', 'Wajah baru Terminal Bus Tirtonadi Solo yang lebih nyaman dan tertib', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `catid` int(11) DEFAULT NULL,
  `author` text NOT NULL,
  `date` int(11) NOT NULL,
  `update` int(11) NOT NULL,
  `title` text NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `content_en` text NOT NULL,
  `excerpt` text,
  `excerpt_en` text,
  `type` varchar(255) NOT NULL,
  `meta_key` text,
  `meta_key_en` text,
  `meta_desc` text,
  `meta_desc_en` text,
  `image` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `template` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `main` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `url`, `catid`, `author`, `date`, `update`, `title`, `title_en`, `content`, `content_en`, `excerpt`, `excerpt_en`, `type`, `meta_key`, `meta_key_en`, `meta_desc`, `meta_desc_en`, `image`, `image2`, `template`, `tag`, `main`, `status`) VALUES
(4, 'semarang', 0, '0', 1450017506, 1450017959, 'Home', 'Home English', '<p>lorem apsilum</p>\n', '<p>lorem ipsum english</p>\n', '', '', 'page', 'home', 'meta key english', 'home', 'meta desc english', '', '', 'home', '', 1, 1),
(5, 'simple.html', 0, '0', 1449845093, 1453770042, 'Simple Post', 'kkk', '<p>simple</p>\n', '', NULL, NULL, 'page', '', '', '', '', '', '', 'home', '', 0, 0),
(7, '34berita.html', 2, '0', 1450062838, 1449969254, 'berita 1', 'news 1', '<p>berita 1 content</p>\n', '<p>exceript 2</p>\n', NULL, NULL, 'blog', 'meta key', 'meta key', 'meta descriptionssss', 'meta description', '', '', 'post', '', 0, 0),
(10, 'Polsek_Jebres_Bersama_Pengelola_Stasiun_Jebres_Lakukan_Cek_Rel', 9, '0', 1451132276, 1452404189, 'Polsek Jebres Bersama Pengelola Stasiun Jebres Lakukan Cek Rel', 'Jebres Police Station Joint business Jebres Do check the Rails', '<p>Mengantisipasi hal tak diinginkan saat libur panjang perayaan Natal dan Tahun Baru, Polsek Jebres bersama pengelola Stasiun Jebres melakukan pengecekan rutin rel maupun wesel dari ulah orang tidak bertanggung jawab. Upaya ini, selain sebagai bukti wujud tanggung jawab juga untuk melakukan pengamanan terhadap jalur kereta yang melaju dari kemungkinan sabotase.</p>\n\n<p>Belajar dari pengalaman sebelumnya, kata Kapolsek, banyak kendala yang dihadapi dalam mengamankan rel kereta api. Termasuk dari ulah tangan orang tidak bertanggung jawab. Selama ini, gangguan yang ditemui adalah mengganjal wesel atau mekanisme pemindah jalur kereta api dengan menggunakan batu. Disamping itu juga, pernah ditemukan adanya tumpukan batu hingga 30 sentimeter di tengah-tengah rel. Diharapkan, masyarakat yang mengetahui aksi orang tak bertanggung jawab tersebut langsung memberikan informasi baik kepada pihak penanggung jawab stasiun maupun kepolisian.</p>\n\n<p>Sementara itu, Kepala Stasiun Jebres, Wagimin mengatakan, pihaknya meminta bantuan kepolisian maupun Koramil Jebres untuk melakukan pengamnan jalur kereta api saat liburan panjang kali ini. Selain melakukan pengamnan di rel maupun wesel kereta api, pihaknya juga melakukan pengamanan di sekitar kawasan stasiun. Upaya ini dilakukan supaya penumpang kereta api yang memasuki kawasan Stasiun Jebres merasa aman dan nyaman.</p>\n', '<p>Anticipating untoward when long holidays of Christmas and New Year, Police Station manager Jebres together Jebres perform routine checks or money orders rails of the irresponsible act. These efforts, as well as evidence of a form of responsibility for security in railway lines that go from the possibility of sabotage.<br />\nLearning from previous experience, the police chief said, many obstacles encountered in securing the railway. Including the work of the hands of irresponsible people. During this time, interference encountered is jammed notes or railroad transfer mechanism by using stones. Besides, also, never found a pile of rocks up to 30 centimeters in the middle of the rails. Hopefully, people who know the action of irresponsible people directly provide good information to the responsible party and the police station.</p>\n\n<p>Meanwhile, Chief of Station Jebres, Wagimin said it asked for the help of police and Koramil Jebres to pengamnan railway line during the long vacation this time. In addition to performing pengamnan on rails and railway bills, it also provide security in the area around the station. This work is done so that the train passengers who entered Jebres Station neighborhood felt safe and comfortable.</p>\n', NULL, NULL, 'news', NULL, NULL, NULL, NULL, 'http://surakarta.go.id/sites/default/files/field/image/Stasiun-Solo-Jebres_0.jpg', NULL, 'post', 'berita', 0, 1),
(14, 'festifal-jenang', NULL, '0', 1455408000, 1450045682, 'Festival Jenang Solo Ragam Nusantara', 'The Festival of Jenang Solo', '<p>Waktu Pelaksanaan: 14 -17 Februari 2016</p>\n\n<p>Tempat : Kawasan Koridor Budaya Ngarsopuro</p>\n\n<p>Festival Jenang Solo digelar dalam rangka memperingati hari jadi Kota Solo yang ke-271. Dalam acara tersebut menampilkan : Bazar dan demo pembuatan jenang dan pagelaran seni tradisi. Pada tanggal 17 Februari 2016 akan dibagikan lebih dari 20 ribu&nbsp; takir jenang secara gratis kepada masyarakat.</p>\n', '<p>Sunday &ndash; Wednesday, February 14th -17th, 2016</p>\n\n<p>The Festival of Jenang Solo is held to celebrate the 271 th anniversary of Solo City, more than 17 thousands plates of jenang (porridge) are shared to peole free.</p>\n', NULL, NULL, 'event', 'event cultural solo 2016, festival jenang solo, kalender event solo 2016, agenda wisata solo', 'event cultural solo 2016, festival jenang solo, solo destination', '', '', 'http://surakarta.tratapp.com/assets/keroncong-1453128333.jpg', '', 'post', '', 0, 1),
(16, 'event1', NULL, '0', 1454198400, 1450045682, 'Grebeg Sudiro ', 'Sudiro Carnival', '<p>Waktu&nbsp; : 31 Januari - 8 Februari 2016</p>\n\n<p>Lokasi : Kawasan Pasar Gede</p>\n\n<p>Grebeg Sudiro dengan berbagai pertunjukan kreasi seni etnis Tiong Hoa</p>\n', '<p>Grebeg Sudiro with many kinds of Tiong Hoa art creation performances.</p>\n', NULL, NULL, 'event', 'Grebegsudiro, Kampung Sewu, Event Solo, Kalender Event, Wisata Solo', '', '', '', 'http://surakarta.tratapp.com/assets/grebegsudiro-1453166879.jpg', '', 'home', '', 0, 1),
(21, 'piala-wtn-ke-9-kado-spesialis-akhir-tahun', 9, '0', 1451234862, 1452404203, 'Piala WTN Ke-9 Kado Spesiali  Akhir Tahun', '9th WTN Awarrd, Year End Special Gifts', '<p>Di penghujung tahun, Kota Surakarta mendapatkan kado spesial dari Presiden Joko Widodo berupa Piala Wahana Tata Nugraha (WTN) tahun 2015. &ldquo;Kado&rdquo; tersebut diberikan lantaran Kota Surakarta dinilai Kementerian Perhubungan memiliki sistem transportasi perkotaan yang baik. Presiden Jokowi sendiri yang menyerahkan penghargaan tersebut kepada Penjabat Walikota Surakarta Budi Suharto, di Istana Merdeka Rabu (23/12/2015).</p>\n\n<p>Piala WTN tersebut merupakan yang kesembilan kalinya diterima Kota Surakarta sejak Kementerian Perhubungan menyelenggarakan lomba di bidang penataan transportasi tersebut. Piala WTN yang kesembilan tersebut terasa spesial karena baru pertama kalinya diserahkan langsung oleh presiden. Kota Surakarta meraih Piala WTN pertama kali semasa Walikota Jokowi yang kini menjadi presiden. (***)</p>\n', '<p>At the end of the year, Surakarta get a special gift from President Joko Widodo form Wahana Tata Nugraha Cup (WTN) in 2015. &quot;Gift&quot; was given because Surakarta assessed Ministry of Transportation has a good urban transport system. Jokowi president himself who handed over the award to the Acting Mayor of Surakarta Budi Suharto, at the Presidential Palace on Wednesday (23/12/2015).<br />\n<br />\nThe WTN Cup was the ninth time received Surakarta since the Ministry of Transportation held a competition in the field of the transport arrangement. WTN ninth Cup is special because it was the first time submitted directly by the president. Surakarta city WTN first Cup victory during Mayor Jokowi who is now president. (***)</p>\n', NULL, NULL, 'news', NULL, NULL, NULL, NULL, 'http://surakarta.tratapp.com/assets/wtn-1451150383.jpg', NULL, 'post', 'news ', 0, 1),
(22, 'tstj-gelar-event-preinan-neng-jurug', NULL, '0', 1451215060, 1451513802, 'TSTJ Gelar Event Preinan Neng Jurug', 'TSTJ Preinan Neng Jurug', '<p>Menyambut libur Natal, Tahun Baru dan liburan sekolah, Taman Satwa Taru Jurug (TSTJ) menggelar event Preinan Neng Jurug. Event tersebut digelar mulai 24 Desember hingga 1 Januari 2016.</p>\n\n<p>Direktur TSTJ, Bimo mengatakan, ini merupakan kegiatan rutin tahunan untuk menyambut libur Natal dan Tahun Baru. Terdapat beberapa wahana rekreasi di dalam TSTJ saat momentum Preinan Neng Jurug. Di antaranya memberi pakan satwa, foto dengan satwa, naik gajah, naik unta, naik bendi, kemudian ada juga wahana permainan seperti bebek air, istana balon, schutter, kereta listrik dan lain-lain. Lalu juga ada stand produk dan bazar. Preinan Neng Jurug ini buka mulai pukul 07.30 WIB hingga 17.00 WIB. Sedangkan untuk harga tiket masuk pada event Preinan Neng Jurug bervariasi.</p>\n\n<p><img alt="" src="http://surakarta.tratapp.com/assets/jurugtest-1451214910.jpg" style="height:225px; width:300px" /></p>\n\n<p>Pada 24 Desember yaitu sebesar Rp15.000 per orang. Lalu di tanggal 25 Desember sebesar Rp12.000 per orang, lalu 26 Desember tiketnya sebesar Rp10.000 per orang, 27 Desember harga tiketnya sebesar Rp12.000 per orang, lalu 26 hingga 31 Desember harga tiketnya sebesar Rp10.000 per orang dan tanggal 1 Januari 2016 harga tiketnya Rp15.000 per orang. Tak hanya itu, dengan semakin banyak pengunjung yang datang ke TSTJ, diharapkan mampu mengatrol perolehan pendapatan di TSTJ.</p>\n\n<p>edited</p>\n', '<p>Welcoming the Christmas holidays, New Year and school holidays, Taman Satwa Taru Jurug (TSTJ) held Preinan Neng Jurug event. The event is held from December 24 to January 1, 2016.</p>\n\n<p>TSTJ director, Ben said, this is an annual event to welcome the Christmas and New Year&#39;s holidays. There are several recreational vehicle at the time of the momentum Preinan TSTJ Neng Jurug. In between feeding animals, photos with animals, elephant ride, camel ride, buggy, then there are also games like duck water rides, balloon castles, Schutter, electric trains and others. Then there is also a stand and bazaar products. Preinan Jurug Neng is open from 07.30 am until 17.00 pm. As for the price of admission to the event Preinan Neng Jurug vary.</p>\n\n<p>On 24 December in the amount of Rp15,000 per person. Then on December 25 amounted to Rp12,000 per person, and December 26 tickets are Rp 10,000 per person, December 27, the ticket price of Rp12,000 per person, and 26 until December 31, the ticket price of Rp 10,000 per person and 1 January 2016 15,000 per person ticket price. Not only that, with a growing number of visitors who come to TSTJ, expected to mengatrol revenue in TSTJ.</p>\n', NULL, NULL, 'news', NULL, NULL, NULL, NULL, 'http://surakarta.tratapp.com/assets/jurug-1451195427.jpg', NULL, 'post', 'berita', 0, 1),
(23, '', NULL, 'admin', 1452297600, 1452523838, 'Peringatan Maulud Nabi Muhammad SAW', 'The Celebration of Birthday of Muhammad SAW', '<p>Waktu : 9 Januari 2016</p>\n\n<p>Lokasi : Masjid Agung Surakarta</p>\n\n<p>Peringatan Maulud Nabi Muhammad SWA. Yang diperingati bersama Ahbaabul Musthofa yang dipimpin oleh Habib Syeh Abdul QadirAssegaf. - See more at: http://www.eventsolo.com/Events/Peringatan-Maulud-Nabi-Muhammad-SAW.html#sthash.jThlwKEn.dpuf</p>\n', '<p>The Celebration of Birthday of Muhammad SAW Prophet with Ahbaabul Musthofa group that leaded by Syeh Abdul QadirAssegaf. - See more at: http://www.eventsolo.com/Events/Peringatan-Maulud-Nabi-Muhammad-SAW.html#sthash.jThlwKEn.dpuf</p>\n', NULL, NULL, 'event', 'wisata solo, event solo, kalender event, agama, kerukunan, kebhinekaan', '', '', '', 'http://surakarta.tratapp.com/assets/maulid-1453166473.jpg', NULL, 'home', '', 0, 1),
(24, '', NULL, 'admin', 1454112000, 1452525089, 'Haul Habib Ali Bin Muhammad al Habsyi ', 'The Annual Celebration of Habib Ali Bin Muhammad Al Habsyi ', '<p>Waktu&nbsp; : 30 - 31 Januari 2016</p>\n\n<p>Lokasi&nbsp; : Pasar Kliwon (alun-alun selatan)</p>\n\n<p>Peringatan Haul habib Ali Bin Muhammad al Habsyi yang rutin digelar setiap tahun, bertempat di Pasar Kliwon.</p>\n', '<p>The annual celebration of Habib Ali Bin Muhammad Al Habsyi in Pasar Kliwon subdistrict.</p>\n', NULL, NULL, 'event', 'wisata solo, kalender event solo, event solo, kebhinekaan, kerukunan antar agama', '', '', '', 'http://surakarta.tratapp.com/assets/haulhabibsyech-1453166533.jpg', NULL, 'home', '', 0, 1),
(25, 'jadwal-operasional-mobil-keliling-pelayanan-administrasi-kependudukan', 9, '0', 1452525860, 1452526761, 'Jadwal Operasional Mobil Keliling Pelayanan Administrasi Kependudukan', 'Operating Schedule Car Roving Population Administration Services', '<p>Jadwal Operasional Mobil Keliling Pelayanan Administrasi Kependudukan Kota Surakarta Bulan Januari 2016</p>\n\n<p>1. CAR FREE DAY SRIWEDARI</p>\n\n<p>&nbsp;&nbsp;&nbsp; SIMPANG TIGA PENGADILAN NEGERI SURAKARTA</p>\n\n<p>&nbsp;&nbsp;&nbsp; Minggu, 3 Januari 2016, Jam 06.00 &ndash; 09.00 WIB</p>\n\n<p>2. KANTOR KELURAHAN SUMBER</p>\n\n<p>&nbsp;&nbsp;&nbsp; Rabu, 6 Januari 2016, Jam 16.00 - 20.00 WIB</p>\n\n<p>3. CAR FREE DAY SRIWEDARI</p>\n\n<p>&nbsp;&nbsp;&nbsp; SIMPANG TIGA PENGADILAN NEGERI SURAKARTA</p>\n\n<p>&nbsp;&nbsp;&nbsp; Minggu, 10 Januari 2016, Jam 06.00 &ndash; 09.00 WIB</p>\n\n<p>4. KANTOR KELURAHAN JOYOSURAN</p>\n\n<p>&nbsp;&nbsp;&nbsp; Rabu, 13 Januari 2016, Jam 16.00 - 20.00 WIB</p>\n\n<p>5. CAR FREE DAY SRIWEDARI</p>\n\n<p>&nbsp;&nbsp;&nbsp; SIMPANG TIGA PENGADILAN NEGERI SURAKARTA</p>\n\n<p>&nbsp;&nbsp;&nbsp; Minggu, 17 Januari 2016, Jam 06.00 &ndash; 09.00 WIB</p>\n\n<p>6. KANTOR KELURAHAN KERTEN</p>\n\n<p>&nbsp;&nbsp;&nbsp; Rabu, 20 Januari 2016, Jam 16.00 - 20.00 WIB</p>\n\n<p>7. CAR FREE DAY SRIWEDARI</p>\n\n<p>&nbsp;&nbsp;&nbsp; SIMPANG TIGA PENGADILAN NEGERI SURAKARTA</p>\n\n<p>&nbsp;&nbsp;&nbsp; Minggu, 24 Januari 2016, Jam 06.00 &ndash; 09.00 WIB</p>\n\n<p>8. KANTOR KELURAHAN SEWU</p>\n\n<p>&nbsp;&nbsp;&nbsp; Rabu, 27 Januari 2016, Jam 16.00 - 20.00 WIB</p>\n\n<p>9. CAR FREE DAY SRIWEDARI</p>\n\n<p>&nbsp;&nbsp;&nbsp; SIMPANG TIGA PENGADILAN NEGERI SURAKARTA</p>\n\n<p>&nbsp;&nbsp;&nbsp; Minggu, 31 Januari 2016, Jam 06.00 &ndash; 09.00 WIB</p>\n\n<p><br />\nAdministrasi kependudukan yang dilayani pada pelayanan mobil keliling, meliputi:</p>\n\n<p>- Pelayanan Kartu Keluarga untuk tambah jiwa karena kelahiran dan pengurangan jiwa karena kematian.</p>\n\n<p>- Pelayanan Kartu tanda Penduduk Elektronik.</p>\n\n<p>- Rekam KTP Elektronik.</p>\n\n<p>- Pelayanan Akta Kelahiran.</p>\n', '<p>Operating schedule Car Roving Population Administration Services Surakarta Month January 2016<br />\n<br />\n1. CAR FREE DAY Sriwedari<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;SIMPANG THREE COURT SURAKARTA<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;Sunday, January 3, 2016, hours 6:00 to 09:00 pm<br />\n<br />\n2. VILLAGE OFFICE SOURCE<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;Wednesday, January 6th, 2016, Jam 4:00 p.m. to 20:00 pm<br />\n<br />\n3. CAR FREE DAY Sriwedari<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;SIMPANG THREE COURT SURAKARTA<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;Sunday, January 10, 2016, Jam 6:00 a.m. to 9:00 pm<br />\n<br />\n4. OFFICE OF VILLAGE JOYOSURAN<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;Wednesday, January 13, 2016, Jam 4:00 p.m. to 20:00 pm<br />\n<br />\n5. CAR FREE DAY Sriwedari<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;SIMPANG THREE COURT SURAKARTA<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;Sunday, January 17, 2016, Jam 6:00 a.m. to 9:00 pm<br />\n<br />\n6. OFFICE Village Kerten<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;Wednesday, January 20, 2016, Jam 4:00 p.m. to 20:00 pm<br />\n<br />\n7. CAR FREE DAY Sriwedari<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;SIMPANG THREE COURT SURAKARTA<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;Sunday, January 24, 2016, Jam 6:00 a.m. to 9:00 pm<br />\n<br />\n8. VILLAGE OFFICE SEWU<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;Wednesday, January 27, 2016, Jam 4:00 p.m. to 20:00 pm<br />\n<br />\n9. CAR FREE DAY Sriwedari<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;SIMPANG THREE COURT SURAKARTA<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;Sunday, January 31, 2016, Jam 6:00 a.m. to 9:00 pm<br />\n<br />\n<br />\nPopulation administration served to service the car around, include:<br />\n<br />\n- Family Card Services to add the soul because the soul since birth and reduction in mortality.<br />\n<br />\n- Population sign cards Electronic Services.<br />\n<br />\n- Record Electronic Identity Card.<br />\n<br />\n- Birth Certificate Services.</p>\n', NULL, NULL, 'news', NULL, NULL, NULL, NULL, 'http://surakarta.tratapp.com/assets/mobilpelayanankependudukan1-1452525595.jpg', NULL, 'post', 'pelayanan publik, kota solo, surakarta, KTP, Kartu Keluarga, KT/KK, Akta, Akte, Akte Kelahiran, Akte Kematian', 0, 1),
(29, 'solo-great-sale', NULL, 'admin', 1454284800, 1453099004, 'Solo Great Sale', 'Solo Great Sale', '<p>Waktu : Dari tanggal 1 Februari sampai dengan 28 Februari 2016</p>\n\n<p>Tempat : Pusat-pusat Perbelanjaan</p>\n\n<p>Bulan diskon dalam rangka Hari Jdi Kota Surakarta</p>\n', '<p>Location : Most of shops in Solo</p>\n\n<p>Discount month to celebrate the 271th anniversary of Solo City.</p>\n', NULL, NULL, 'event', 'wisata solo, kalender event solo, event solo, belanja di solo, ', '', '', '', 'http://surakarta.tratapp.com/assets/greatsale-1453166825.jpg', NULL, 'post', '', 0, 1),
(30, 'imlek-festival', NULL, 'admin', 1454889600, 1453128599, 'Imlek Festival', 'IMLEK FESTIVAL', '<p>Waktu Pelaksanaan&nbsp;&nbsp; : 8 Februari 2015</p>\n\n<p>Tempat Pelaksanaan : Kawasan Pasar Gede</p>\n\n<p>Perayaan dalam rangka menyambut tahun baru penanggalan Tiong Hoa &ldquo;Imlek&rdquo; dengan berbagai pertunjukan kreasi seni budaya etnis Tiong Hoa.</p>\n', '<p>The celebration of Chinese New Year that present a various kinds of Tiong Hoa Art and Culture</p>\n', NULL, NULL, 'event', '', '', '', '', 'http://surakarta.tratapp.com/assets/imlek-1453129045.jpg', NULL, 'home', '', 0, 1),
(31, 'solo-indonesia-culinary-festival', NULL, 'admin', 1459987200, 1453128866, 'Solo Indonesia Culinary Festival', 'Solo Indonesia Culinary Festival', '<p>Waktu Pelaksanaan&nbsp; : 7 - 10 April</p>\n\n<p>Lokasi Pelaksanaan : Benteng Vasternburg</p>\n\n<p>Festival masakan tradisional Jawa yang sudah terkenal kelezatannya serta makanan hasil kreasi dari hasil resep masakan jawa oleh chef caliber nasional maupun international.</p>\n', '<p>April 7th -10th, 2016</p>\n\n<p>Vastenburg Fort</p>\n\n<p>Javanese Tradisional Foods Fair of National and International Chef.</p>\n', NULL, NULL, 'event', '', '', '', '', 'http://surakarta.tratapp.com/assets/festivalkuliner-1453171567.jpg', NULL, 'home', '', 0, 1),
(32, 'solo-24-jam-menari', NULL, 'admin', 1461888000, 1453129296, 'Solo 24 Jam Menari', 'Solo 24 Jam Menari', '<p>Waktu Pelaksanaan&nbsp; : 29 April 2015;</p>\n\n<p>Lokasi Pelaksanaan : ISI dan Jalan Slamet Riyadi;</p>\n\n<p>Tarian sehari penuh (24 jam) di sepanjang Jalan utama Kota Solo dalam rangka memperingati &rdquo;Hari Tari Sedunia&rdquo;.&nbsp; Di segala sudut kota banyak digelar tari.</p>\n', '<p>April 29th, 2016</p>\n\n<p>ISI and Slamet Riyadi Street</p>\n\n<p>A full day (24 hours) dances along the main street of Solo and in every corner of city to celebrate &ldquo;World Dance Day&rdquo;.</p>\n', NULL, NULL, 'event', '', '', '', '', 'http://surakarta.tratapp.com/assets/solomenari-1453171602.jpg', NULL, 'home', '', 0, 1),
(33, 'solo-keroncong--festival', NULL, 'admin', 1463184000, 1453173019, 'Solo Keroncong  Festival', 'Solo Keroncong Festival', '<p>Waktu Pelaksanaan&nbsp; : 14 Mei - 15 Mei 2016</p>\n\n<p>Tempat Pelaksanaan : Benteng Vastenburg</p>\n\n<p>Menampilkan para seniman keroncong local, nasional, maupun International dalam upaya melestarikan musik tradisi dan memupuk rasa nasionalisme.</p>\n', '<p>Friday &ndash; Saturday, May 14 th &ndash; 15th, 2016&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n\n<p>Vastenburg Fort</p>\n\n<p>A performance of local, national and international keroncong artists to preserve the traditional music and promote the nationalism.</p>\n', NULL, NULL, 'event', NULL, NULL, NULL, NULL, 'http://surakarta.tratapp.com/assets/keroncong-1453128333.jpg', NULL, 'home', '', 0, 1),
(34, 'solo-investment-trade--and-tourism-expo-(sittex)', NULL, 'admin', 1464220800, 1453173179, 'Solo Investment Trade  and Tourism Expo (SITTEX)', 'Solo Investment Trade  and Tourism Expo (SITTEX)', '<p>Waktu Pelaksanaan&nbsp; : 26 Mei - 29 Mei 2016</p>\n\n<p>Tempat Pelaksanan : Solo Square</p>\n\n<p>Solo Investment Trade and Tourism Expo, Pameran Investasi, Perdagangan dan Pariwisata untuk memperkenalkan potensi investasi dan pariwisata Kota Surakarta</p>\n', '<p>26th &ndash; 29th, 2016</p>\n\n<p>Solo Square</p>\n\n<p>Solo Investment Trade and Tourism Expo to promote the investment and tourism potency of Surakarta.</p>\n\n<p>&nbsp;</p>\n', NULL, NULL, 'event', '', '', '', '', 'http://surakarta.tratapp.com/assets/SITTEX-1453128427.jpg', NULL, 'home', '', 0, 1),
(35, 'java-expo-', NULL, 'admin', 1462320000, 1453173343, 'Java Expo ', 'Java Expo', '<p>Waktu Pelaksanaan&nbsp;&nbsp; : 4 Mei - 8 Mei 2016</p>\n\n<p>Tempat Pelaksanaan : Benteng Vastenburg</p>\n\n<p>&nbsp;</p>\n\n<p>Sebuah Pameran Nasional yang mengkolaborasikan sektor pariwisata, perdagangan, dan investasi. Diikuti peserta dari berbagai wilayah di Indonesia.</p>\n', '<p>May 4th &ndash; 8th, 2016</p>\n\n<p>Vanstenburg Fort</p>\n\n<p>&nbsp;</p>\n\n<p>Tourism, Trade and Investment National exhibiton.</p>\n', NULL, NULL, 'event', NULL, NULL, NULL, NULL, 'http://surakarta.tratapp.com/assets/javaexpo-1453171543.jpg', NULL, 'home', '', 0, 1),
(36, 'festival-gamelan-akbar', NULL, 'admin', 1464998400, 1453173581, 'Festival Gamelan Akbar', 'Festival Gamelan Akbar', '<p>Waktu Pelaksanaan&nbsp;&nbsp;&nbsp; : 4 Juni 2016</p>\n\n<p>Tempat Pelaksanaan&nbsp;&nbsp; : Benteng Vastenburg</p>\n\n<p>&nbsp;</p>\n\n<p>Pagelaran Konser Gamelan Akbar 2016 akan menyajikan garap musik konservasi tradisi dengan alat gamelan yang akan menampilkan kelompok - kelompok gamelan.</p>\n', '<p>June 4th, 2016</p>\n\n<p>Vastenburg Fort</p>\n\n<p>&nbsp;</p>\n\n<p>Presenting the conservation of tradition by The performance of the masterpiece of Surakarta Gamelan Composers.</p>\n', NULL, NULL, 'event', NULL, NULL, NULL, NULL, 'http://surakarta.tratapp.com/assets/gamelan-1453171472.jpg', NULL, 'home', '', 0, 1),
(37, 'kontes-lovebird-indonesia', NULL, 'admin', 1462665600, 1453173870, 'Kontes Lovebird Indonesia', 'Lovebird Indonesia Contest', '<p>Waktu Pelaksanaan&nbsp; : 8 Mei 2016</p>\n\n<p>Tempat Pelaksanaan : Taman Balekambang</p>\n\n<p>Lomba burung kicauan yang menjadi ajang perlombaan bagi para pecinta burung kicauan.</p>\n', '<p>May 8th, 2016</p>\n\n<p>Balekambang Park</p>\n\n<p>Lovebird contest among the singing birds lovers.</p>\n', NULL, NULL, 'event', NULL, NULL, NULL, NULL, 'http://surakarta.tratapp.com/assets/lovebird-1453173603.jpg', NULL, 'home', '', 0, 1),
(38, 'festival-dolanan-bocah', NULL, 'admin', 1465516800, 1453174132, 'Festival Dolanan Bocah', 'Children Javanese Theatrical Festival  ', '<p>Waktu Pelaksanaan&nbsp; : 10 Juni - 12 Juni 2016</p>\n\n<p>Tempat Pelaksanaan : Taman Sriwedari</p>\n\n<p>&nbsp;</p>\n\n<p>Pertunjukan Wayang Orang yang diikuti oleh 10 Kelompok sanggar seni yang dimainkan oleh pelajar SD, SMP.</p>\n', '<p>10th-12th, 2016</p>\n\n<p>Sriwedari Park</p>\n\n<p>Javanese Theatrical Performance by 10 art and culture groups of students.</p>\n', NULL, NULL, 'event', '', '', '', '', 'http://surakarta.tratapp.com/assets/dolananbocahjpg-1453512832.jpg', NULL, 'home', '', 0, 1),
(39, 'selayang-pandang-kota-surakarta', 0, 'admin', 1453709157, 1454125485, 'Letak Geografis', 'Geographical Location', '<p>Surakarta atau yang lebih dikenal dengan sebutan&nbsp; Solo (Sala) merupakan salah satu kota di Provinsi Jawa Tengah. Secara geografis berada 110&deg;45&rsquo;15&rsquo;-110&deg;45&rsquo;35&rdquo; garis bujur timur dan 111&deg; bujur barat serta 7&deg;36&rsquo;00&rdquo;-7&deg;56&rdquo;00&rdquo; lintang selatan. Daerah ini berada di dataran berupa cekungan antara Gunung Merapi dan Gunung Lawu. Kota Solo juga dilewati sungai besar bernamaBengawan Solo, yang sekaligus menjadi pembatas dengan daerah kabupaten lain.</p>\n\n<p>Kota Surakarta memiliki luas wilayah mencapai 44 kilometer persegi. Bila ditarik garis lurus, antara titik terluar di bagian selatan dengan titik terluar di bagian utara memiliki panjang 10,3 kilometer. Sedangkan dari titik terluar di bagian barat hingga titik terluar bagian timur memiliki panjang 7,5 kilometer.</p>\n\n<p>Daerah-daerah terluarnya berbatasan dengan tiga kabupaten. Di sebelah utara berbatasan dengan Kabupaten Karanganyar dan Boyolali, di sebelah selatan berbatasan dengan Kabupaten Sukoharjo dan Karanganyar. Sedangkan di sebelah barat berbatasan dengan wilayah Kabupaten Karanganyar dan Sukoharjo. Sementara di sebelah timur berbatasan dengan Sungai Bengawan Solo.</p>\n\n<p>Letaknya yang berada di tengah-tengah Pulau Jawa dan menjadi perlintasan bagi kota-kota penting di pulau tersebut. Posisinya berada pada jalur strategis sebagai pertemuan lalu lintas kota Semarang dengan Jogjakarta dan Surabaya dengan Jogjakarta. Kota Surakarta juga menjadi pusat perdagangan bagi tujuh kabupaten yang berada di sekitarnya. Selain yang berbatasan langsung, Kabupaten Sragen, Klaten dan Wonogiri merupakan daerah <em>hinterland</em> kota ini.</p>\n', '<p>Surakarta or better known as Solo (Sala) is a city in Central Java province. Geographically located 110 &deg; 45&#39;15&#39;-110 &deg; 45&#39;35 &quot;longitude east and 111 &deg; west longitude and 7 &deg; 36&#39;00&quot; -7 &deg; 56 &#39;00 &quot;south latitude. This area is in the form of hollow plateau between Mount Merapi and Mount Lawu. Solo city also passed a big river, Bengawan Solo, the slicing side of the south and east.</p>\n\n<p>Surakarta city has a total area reaches 44 square kilometers. When the straight line drawn between the outermost point on the south to the outermost point in the northern part has a length of 10.3 kilometers. While the outermost point in the west to the outermost point of the eastern part has a length of 7.5 kilometers.</p>\n\n<p>Outermost regions bordering the three districts. In the north bordering the Karanganyar and Boyolali, on the south by Sukoharjo and Karanganyar. While in the west bordering Karanganyar and Sukoharjo. While in the east by the Solo River.</p>\n\n<p>It lies in the middle of the island of Java and be crossing the important cities on the island. Its position is at a strategic point as traffic meeting with Jogjakarta Semarang and Surabaya to Yogyakarta. Surakarta city is also a center of commerce for the seven districts in the surrounding areas. In addition to directly adjacent, Sragen, Wonogiri Klaten and the hinterland area of ​​the city.</p>\n', NULL, NULL, 'page', 'sejarah kota surakarta, sejarah solo, sejarah surakarta, kota surakarta, kota solo, solo, pertumbuhan kota, pertumbuhan kota surakarta, Letak Kota Surakarta, geografis Solo, ', 'Solo City, geographical, location, surakarta city', '', '', NULL, NULL, 'post', '', 0, 1),
(40, 'sejarah-kota-surakarta', 0, 'admin', 1453975921, 1453979680, 'Sejarah Kota Surakarta', 'History', '<p>Kota Solo tumbuh seiring dengan perpindahan ibukota kerajaan Mataram Islam di Kartasura. Semula Solo merupakan sebuah desa yang menjadi bagian dari kekuasaan Mataram Islam. Berada di tepi Sungai Bengawan Solo, Desa Sala sudah sejak abad ke-14 telah dikenal sebagai perlintasan perdagangan.&nbsp; Piagam Trowulan I (Ferry Charter) pada tahun 1358 menyebut Bengawan Solo atau Bengawan Semanggi mempunyai 44 bandar yang salah satunya bernama Wulayu atau Wuluyu atau sama dengan desa Semanggi sebagai bandar ke-44.</p>\n\n<p>Pada masa kerajaan Pajang, Desa Sala sudah memiliki &ldquo;pemerintahan&rdquo; sendiri yang dipimpin oleh seorang bekel bernama Ki Gede Sala. Nama yang sama, Ki Gede Sala, yang menjadi penguasa desa itu saat Raja Mataram Islam di tahun 1742, Paku Buwana II menghendaki pemindahan ibukota kerajaan dari Kartasura.</p>\n\n<p>Ada beberapa versi mengenai penamaan Sala. Versi pertama seperti tercantum dalam Babad Sala yang ditulis RM. Sajid menyebutkan nama Ki Sala merupakan pelafalan dari sebuah jabatan abdi dalam kerajaan&nbsp; yang mengurusi masalah pengerahan tenaga kerja, yakni Ki Soroh Bahu. Dari Ki Soro Bahu menjadi Ki Solo atau Ki Sala. Versi lain menyebutkan sebelum menjadi pemukiman, Desa Sala merupakan hutan dengan pepohonan paling dominan adalah pohon Sala atau yang dalam bahasa laitinya Vatica Robusta.</p>\n\n<p>Dipilihnya Desa Sala sebagai ibukota kerajaan Mataram Islam bukan tanpa sebab, baik karena pertimbangan rasional seperti letak geografis, topografis dan sebagainya maupun alasan magis relius.&nbsp; Ketika Sunan Paku Buwono II yang memerintah Mataram 1726&ndash;1749 kembali dari tempat pengungsiannya di Ponorogo seusai pemberontakan Sunan Kuning dilihatnya istananya yang luluh lantak.</p>\n\n<p>Paku Buwana memerintahkan pencarian lokasi untuk membangun sebuah istana yang baru. Ada tiga tiga tempat yang dianggap cocok untuk dibangun istana, yaitu Desa Talawangi atau Desa Kadipala, Desa Sala, dan Desa Sanasewu yang terletak di sebelah timur Bengawan Solo. Desa Sala yang kala itu merupakan kedung (rawa-rawa) dengan memiliki banyak pertemun sungai, seperti Sungai Batangan, Sungai Nglawiyan atau Sungai, Sungai Wingko Sungai Pepe dan Sungai Braja.</p>\n\n<p>Meski harus menimbun rawa yang konon memiliki mata air Tirta Amerta Kamandanu&nbsp; yang melimpah ruah, Desa Sala dipilih menjadi lokasi berdirinya istana yang baru. Secara geografis seperti disebut sebelumnya letaknya dekat dengan Bengawan Sala, yang kala itu merupakan sarana penghubung berbagai daerah di Jawa Tengah dan Jawa Timur baik untuk kepentingan ekonomi maupuun militer. Sejak zaman Kerajaan Pajang, Mataram Kartasura, Bengawan Solo merupakan penghubung negaragung, kuthanagara dan mancanagari.</p>\n\n<p>Ketersediaan tenaga kerja yang cukup&nbsp; untuk membangun Keraton juga menjadi pertimbangan lain. Desa Sala dekat dengan desa-desa yang dimukimi abdi dalem Kerajaan Kartasura seperti Desa Baturana dan Gabudan. Sala yang sudah menjadi desa tentunya tak perlu lagi harus babat alas tetapi cukup menimbun rawa.</p>\n\n<p>Pertimbangan magis-religius pemilihan Desa Sala antara lain desa ini dekat dengan tempuran atau tempat bertemunya dua atau lebih sungai yang menurut kepercayaan merupaan tempat yang sakral atau keramat. Selain itu, dari hasil nujum para waskita kerajaan menyebutkan kerajaan akan tetap menajdi kerajaan yang besar dan kekal walau kekuasaan raja tinggal samegaring payung atau seluas payung terbuka dibandingkan dua lokasi lain.</p>\n\n<p>Setelah rawa-rawa ditimbun, yang sebagian tanah untuk menimbun diambilkan dari Desa Talawangi yang konon berbau harum, pembangunan keraton pun dimulai. Kayu jati dari Alas Kethu di Wonogiri didatangkan melalui aliran Sungai Bengawan Solo. Nama Surakarta disematkan bagi Desa Sala (ada yang menyebut Salakarta) yang kini menjadi pusat pemerintahan yang baru ini. Pada hari Rabu Pahing 14 Sura 670 Penanggalan Jawa, Wuku Landep, Windu Sancaya ayau bertepatan dengan tanggal 17 Februari 1745, secara resmi ibukota kerajaan dari Kartasura dipindah dan kemudian setiap tahunnya diperingati sebagai Hari Jadi Kota Solo.</p>\n\n<p>Boyong kedhaton atau perpindahan ibukota ditandai dengan proses kirab. Iring-iringan prajurit baik prajurit kraton maupun tentara Kompeni, mengawal Sunan Paku Buwana II. Dentuman meriam dan senapan menandai perjalanan panjang dari Kartasura. Sepanjang perjalanan bunyi terompet, tambur, canang dan gamelan ditabuh. Di sepanjang jalan, yang membujur dari Kartasura (Jalan Dr Radjiman) warga menyambutnya. Di Jungke, rombongan istirahat sejenak sebelum melanjutkan lagi hingga tiba Sasana Sumewa.&nbsp;</p>\n\n<p>Desa Sala pun berganti nama menjadi Surakarta Hadiningrat. Namun penyebutan nama Sala atau dengan pelafalan Solo tetap berlanjut hingga saat ini. Bahkan Sala tak hanya sekadar desa yang menjadi lokasi istana, tetapi meluas dan menjadi &ldquo;induk&rdquo; bagi daerah-daerah lain. &nbsp;Apalagi sejarah kemudian mencatat, kerajaan Mataram kemudian berdiaspora menjadi empat wilayah yang dua di antaranya berada di wilayah Solo, yakni Kasunanan Surakarta dan Kadipaten Mangkunegaran.</p>\n', '<p>History<br />\nSolo city is growing along with the transfer of the capital of Islamic Mataram kingdom in Kartasura. Originally Solo is a village that is part of the power of Islamic Mataram. Located on the banks of the Solo River, the village of Sala has been since the 14th century has been known as a trade crossings. Charter Trowulan I (Ferry Charter) in 1358 called the Bengawan Solo or clover has 44 airports, one of which is named Wulayu or Wuluyu or equal to Semanggi village as a bookie 44th.</p>\n\n<p>At the time of royal Pajang, Sala village already had a &quot;government&quot; itself led by a named Ki Gede Sala jacks. The same name, Ki Gede Sala, who became ruler of the village as the King of Mataram Islam in 1742, Pakubuwana II requires the removal of the royal capital of Kartasura.</p>\n\n<p>There are several versions about the naming Sala. The first version as noted in the Chronicle Sala written RM. Sajid name Ki Sala is the pronunciation of a position in the royal servants who deal with the problem of labor mobilization, namely Ki Soroh shoulders. Shoulder of Ki Soro became Ki Ki Solo or Sala. Another version states before it becomes settlement, the village of Sala is the most dominant forest trees are trees Sala or in the language of laitinya Vatica Robusta.</p>\n\n<p>Sala village chosen as the capital of Islamic Mataram kingdom is not without reason, either because rational considerations such as geographic, topographic and so on as well as the magical reason RELIUS. When Sunan Pakubowono II, who reigned 1726-1749 Mataram back from places of refuge in Ponorogo after the uprising Sunan Kuning saw his palace which was destroyed.</p>\n\n<p>Pakubuwana ordered a search location to build a new palace.<br />\nThere are three three places that are considered suitable for built castles, the Village Talawangi or Kadipala Village, Sala village, and the village Sanasewu which lies east of Solo. Sala village which was then a center of information (swamp) with pertemun has many rivers, such as river bars, or Nglawiyan River, Rivers Wingko Pepe Rivers and River Braja.</p>\n\n<p>Although the need to hoard bog that supposedly has a spring Tirta Amrita Kamandanu abundant, Sala village was chosen to be the location of the establishment of a new palace. As mentioned earlier geographically located close to the Bengawan Sala, who was then a means of connecting various regions in Central Java and East Java, both for military maupuun economic interests. Since the days of the Kingdom Pajang, Mataram Kartasura, Solo is the liaison negaragung, kuthanagara and mancanagari.</p>\n\n<p>The availability of sufficient labor to build the palace also be another consideration. Sala village close to the villages dimukimi courtiers Kartasura kingdom as village Baturana and Gabudan. Sala who had become the village would no longer need to hoard enough tripe base but swamp.</p>\n\n<p>Magical-religious considerations Sala village elections among other things the village is close to the fighting or where two or more streams which according to the belief merupaan sacred place or shrine. In addition, the results of the clairvoyant astrologer mention royal kingdom will remain an everlasting kingdom great and although the king&#39;s power to stay samegaring umbrella or parasol wide open compared to two other locations.</p>\n\n<p>After swamps stockpiled, which is part of the land to hoard taken from the village of Talawangi that supposedly smells good, the construction of the palace began. Teak from Alas Kethu in Wonogiri imported through the flow of the Solo River. Surakarta name pinned to the village of Sala (no mention Salakarta) which has become the center of the new government. On Wednesday Pahing 14 Sura 670 Javanese calendar, wuku Landep, Windu Sancaya ayau coincide with the date of February 17th 1745, formally transferred the capital of the kingdom of Kartasura and then commemorated as the anniversary of the city of Solo.</p>\n\n<p>Boyong Kedhaton or transfer of capital was marked by the procession. A convoy of either soldier or soldiers palace Company&#39;s troops, escorting Sunan Paku Buwana II. Shotgun blast and mark the long journey from Kartasura. Throughout the trip trumpet, drums, cymbals and gamelan sounded. Along the way, stretching from Kartasura (Jalan Dr Radjiman) greet residents. In Jungke, the group a short break before resuming again until it Sasana Sumewa. (</p>\n\n<p>Sala village was renamed Surakarta Sultanate. But the mention of the name Sala continues to this day. Even Sala is not just village where the castle, but expanded and become a &quot;parent&quot; for other regions. Moreover, the history of the then record, then diasporic Mataram kingdom into four areas that two of which are located in Solo, the Surakarta and Mangkunegaran Duchy.</p>\n', NULL, NULL, 'page', 'Sejarah Kota Solo, Sejarah Kota Surakarta, Lahirnya Kota Solo, ', '', '', '', NULL, NULL, 'post', '', 0, 1),
(41, 'toponimi', 0, 'admin', 1453977304, 1454125520, 'Toponimi', 'Toponymy', '<p>Pertumbuhan Kota Solo cukup unik karena merupakan perpaduan antara penataan ruangnya dirancang berdasarkan konsep tradisional dan kota kolonial. Wajah kota memunculkan unsur yang unik dari kedua unsur tersebut.&nbsp; Di dalam konsep tata ruang tradisional, lingkungan kewilayahannya mengikuti hirarki derajat kebangsawanan dan kepangkatan seseorang.</p>\n\n<p>Sebagai ibu kota kerajaan, keraton yang menjadi tempat tinggal raja merupakan pusat yang dikelilingi benteng sebagai &ldquo;negara&rdquo; atau negari. Di luar benteng lingkungannya disebut Negaragung, Mancanegara dan Pesisiran. Penempatan tempat tinggal sentana dalem atau abdi dalem didasarkan pada hirarki derajat kepangkatan dan kebangsawanan.</p>\n\n<p>Dengan pola tersebut, maka muncul lah perkampungan yang terbentuk berdasarkan nama bangsawan terutama berpangkat sentana dalem. Tidak semua bangsawan namanya diabadikan sebagai nama kampung, tetapi hanya mereka yang dianggap berjasa dan disegani. Nama kampung yang berdasarkan pada nama orang dari kalangan bangsawan itu di antaranya adalah Pangeran Hadiwijaya menjadi kampung Hadiwijayan atau Pangeran Danukusumo menjadi Kampung Danukusuman. Selain itu ada juga kampung Sudiraprajan, Yasadipuran, Natadiningratan, Secayudan, Purbayan dan sebagainya.</p>\n\n<p>Penamaan kampung juga berdasarkan jabatan seorang bangsawan. Raja sebagai penguasa wilayah berwenang menentukan seseorang untuk bermukim di sebuah tempat yang tentu saja dilengkapi dengan tempat tinggal beserta tenaga kerjanya. Dalam bahasa sekarang, bangsawan tersebut mendapatkan rumah dinas karena&nbsp; jabatannya. Kampung tersebut di antaranya adalah Mangkubumen untuk jabatan Mangkubumi atau Buminatan untuk bangsawan yang menajdi Bupati Bumi Nata atau kepatihan y ang merupakan tempat tinggal patih.</p>\n\n<p>Selain itu,ada pula nama kampung yang berasal dari tempat pemukiman abdi dalem untuk jenis pekerjaan tertentu seperti Kampung Saragenen untuk kampung yang menjadi pemukiman prajurit Sarageni (prajurit bersenjata panah api), kemudian ada pula Kemasan, yang merupakan tempat tinggal perajin emas, Jayengan yang merupakan pemukiman pembuat minuman, dan sebagainya.</p>\n\n<p>Keadaan suatu kawasan sebelum ditempati atau menjadi perkampungan juga kerap menjadi dasar penamaan kampung.&nbsp; Kandang Sapi dulunya merupakan lokasi peternakan lembu milik kraton. Demikian pula dengan nama kampung Panggung yang dulunya ada panggung tempat mengawasi kegiatan berburu yang dilakukan anak-anak raja. Balapan yang merupakan arena pacuan kuda sebelum dibangun stasiun kereta api.</p>\n\n<p>Kehadiran kolonial yang turut campur dalam pemerintahan termasuk di dalamnya ikut mengatur tata ruang kota memunculkan corak tersendiri wajah Kota Solo. Pemerintahan Hindia Belanda, untuk kepentingan kekuasaan ekonomi, politik dan militernya menciptakan banyak simbol-simbol kota sebagai penanda Solo sebagai kota modern seperti bangunan perkantoran atau rumah yang berbentuk loji (gedung tinggi dan besar), benteng, bank, gereja dan sebagainya. Selain itu, Pemerintahan Kolonial menempatkan pemukiman penduduk berdasarkan ras agar mudah diawasi memunculkan kampung-kampung yang berdasarkan golongan. Golongan Eropa di Loji Wetan, Pacinan di Balong serta Arab dan India di Pasar Kliwon merupakan hasil dari penataan ruang kolonial yang berdasarkan pada ras atau golongan.</p>\n\n<p>Kehadiran <em>toewan koelit poetih</em> yang mendapat privilage tertentu dari penguasa juga melahirkan tata ruang tersendiri. Beberapa kampung di Solo, berasal dari nama orang kulit putih yang tentu saja dalam pelafalan lokal. Jebres misalnya berasal dari nama seorang pengusaha kaleng Susu bernama J. Pressen atau Sekarpace yang berasal dari nama Capentier atau Karpencer, Petoran dari pabrik pemerahan susu Victory milik Tuan Petor (Victor J. Vrijs).</p>\n\n<p>Pembentukan nama-nama kampung itu menjadi ciri khas dan keunikan kampung di Kota Solo yang tetap dipertahankan hingga kini karena mengandung kearifan lokal. Bahkan beberapa kampung berinisiatif menghidupkan tradisi yang pernah ada sebagai bagian dari pembentukan karakter dan identitas kampungnya.</p>\n', '<p>Solo growth is quite unique because it is the combination of spatial arrangement is designed based on the concept of traditional and colonial city. City faces bring a unique element of the two elements. In the traditional concept of spatial, environmental kewilayahannya follow the hierarchy of degrees of nobility and rank someone.</p>\n\n<p>As the capital of the kingdom, the palace of the king&#39;s residence is the center of the fortified as a &quot;state&quot; or negari. Outside the fort called Negaragung environment, and coastal Abroad. Placement residence royal cemetery or courtiers are based on the hierarchy of degrees of rank and nobility.</p>\n\n<p>With this pattern, it appears the village was formed by the name of nobility, especially the rank of royal cemetery. Not all nobles be immortalized as the name of the village, but only those considered meritorious and respected. Name of the village which is based on the name of the person from whom the nobility it was Prince Hadiwijaya into the village Hadiwijayan or Prince Danukusumo into Kampung Danukusuman. There was also the hometown Sudiraprajan, Yasadipuran, Natadiningratan, Secayudan, Purbayan and so on.</p>\n\n<p>Naming the village is also based on a noble position. King as ruler of the authority to determine a person to live in a place that is of course equipped with a place to stay along with its workforce. In the language of today, the nobles get the home office because of his position. Among the village is Mangkubumen for the post Mangkubumi or Buminatan for nobility is an advanced Regents Earth Nata or kepatihan y ang is home patih.</p>\n\n<p>In addition, there is also the name of the village derived from the settlements courtiers for certain types of work such as Kampung Saragenen to villages into residential soldier Sarageni (armed soldiers fire arrow), then there is also packaging, which is home to artisans gold, Jayengan which is settlement beverage maker, and so on.</p>\n\n<p>The state of an area before it is occupied or into the township are also often the basis for the naming of the village. Cattle cage was once the location of the farm ox royal property. Similarly, the stage name of the village that was once there is a stage where hunting activities carried oversee the king&#39;s sons. Racing is a racetrack before built railway station.</p>\n\n<p>The presence of colonial interfering in government includes also regulates the spatial city raises its own style face Solo. Dutch East Indies government, for the sake of economic power, political and military created many symbols as a marker of Solo city as a modern city such as an office building or a house shaped lodges (tall buildings and large), the castle, bank, church and so on. In addition, the Colonial Government puts settlements based on race to be easily monitored bring villages based group. European groups in Loji Wetan, Pacinan in Balong as well as the Arab and Indian Market POND is the result of colonial spatial arrangement that is based on race or class.</p>\n\n<p>Toewan presence koelit poetih receiving certain privilage of rulers also spawned its own layout. Some villages in Solo, derived from the name of the white course in the local pronunciation. Jebres for example, comes from the name of an entrepreneur named J. PRESSEN Milk cans or Sekarpace derived from the name Capentier or Karpencer, Petoran of a dairy factory Victory belongs to Mr. Pethor (Victor J. Vrijs).</p>\n', NULL, NULL, 'page', 'Toponimi Solo, Toponimi Surakarta, Sejarah Kampung Solo, nama kampung solo, cerita rakyat solo', 'Toponymy Solo, Toponymy Surakarta', '', '', NULL, NULL, 'post', '', 0, 1),
(42, 'wilayah-dan-kependudukan-', 0, 'admin', 1454125755, 1454126008, 'Wilayah dan Kependudukan ', 'Regions & Population', '<p>Wilayah Kota Surakarta terdiri dari lima kecamatan yang memiliki 51 kelurahan dan terbagi menjadi 595 Rukun Warga (RW) dan 2.669 Rukun Tetangga (RT). Kelima kecamatan itu adalah Kecamatan Pasar Kliwon (9 kelurahan), Serengan (7 kelurahan), Laweyan (11 kelurahan), Jebres (11 kelurahan) dan Banjarsari (13 kelurahan).</p>\n\n<p>Dari luas wilayah yang mencapai 4.404 hektar, sebagian besar dipergunakan sebagai pemukiman yakni 62,01 persen dan sisanya digunakan untuk kegiatan ekonomi yakni di sektor jasa sebanyak 9,7 persen, sektor industri dan perusahaan 8,8 persen, lahan pertanian 5 persen dan lain-lain 9,07 persen.</p>\n\n<p>Berdasarkan Sisten Informasi Administrasi Kependudukan (SIAK), jumlah penduduk Kota Solo pada tahun 2010 mencapai 5.32.439 persen dengan pertumbuhan rata-rata dalam lima tahun terakhir ini adalah 1,47 persen. Komposisi penduduk didominasi oleh usia produktif yang mencapai 74,16 persen dan hanya 7.72 persen penduduk yang tergolong tidak produkif serta 3,2 persen selebihnya adalah usia anak-anak.</p>\n\n<p>Kualitas penduduk Kota Solo berdasarkan Indeks Pembangunan Manusia (IPM) atau Human Development Index (HDI) adalah sebesar 77,49 yang merupakan IPM/HDI tertinggi se Provinsi Jawa Tengah atau peringkat ke-17 secara nasional. IPM merupakan penghitungan kualitas hidup masyarakat yang dihitung berdasarkan pada empat indikator utama yakni angkar harapan hidup 72,07 (nilai maksimum standar UNDP adalah 85), angka melek huruf 96.67, rata-rata lama sekolah 10,32 dan kemampuan daya beli 648.230</p>\n', '<p>Surakarta region consists of five districts that have 51 villages and is divided into 595 Pillars of Citizens (RW) and 2,669 Neighborhood (RT). These five districts it is Pasar Kliwon (9 villages), Serengan (7 villages), Laweyan (11 villages), Jebres (11 villages) and Banjarsari (13 villages).<br />\nOf the area which reached 4,404 hectares, mostly used as a settlement which is 62.01 percent and the rest is used for the economic activity in the service sector as much as 9.7 percent, the industrial sector and enterprise 8.8 percent, 5 percent of agricultural land and so on Another 9.07 percent.<br />\nBased on the information systems of Administration (SIAK), the population of the city of Solo in 2010 reached 5.32.439 percent with average growth in the past five years is 1.47 percent. The composition of the population is dominated by productive age, which reached 74.16 percent and only 7.72 per cent of the population were classified as not productive and the remaining 3.2 percent is the age of the children.<br />\nSolo population quality based on the Human Development Index (HDI) or Human Development Index (HDI) is at 77.49 which is HDI / HDI highest se Central Java or ranked 17th nationally. HDI is a calculation of the quality of life calculated based on four main indicators that Angkar life expectancy of 72.07 (standard UNDP maximum value is 85), the literacy rate of 96.67, the average length of school and affordability 10.32 648 230</p>\n', NULL, NULL, 'page', 'Penduduk Kota Surakarta, Wilayah Kota Surakarta', '', '', '', NULL, NULL, 'post', '', 0, 1);
INSERT INTO `page` (`id`, `url`, `catid`, `author`, `date`, `update`, `title`, `title_en`, `content`, `content_en`, `excerpt`, `excerpt_en`, `type`, `meta_key`, `meta_key_en`, `meta_desc`, `meta_desc_en`, `image`, `image2`, `template`, `tag`, `main`, `status`) VALUES
(43, 'sejarah', 0, 'admin', 1454126864, 0, 'Sejarah Pemerintahan Kota Surakarta', 'Histori of Surakarta City Government', '<p>Pemerintahan Kota Surakarta pertama kalinya terbentuk berdasarkan Penetapan Pemerintah Nomor 16/SD tahun 1946 yang dikeluarkan pada tanggal 15 Juli 1946. Namun Pemerintah Kota Surakarta menetapkan tanggal 16 Juni sebagai hari jadi berdasarkan pertimbangan karena sejak tanggal tersebut secara de facto Pemerintah Daerah Kota Surakarta sudah memiliki kewenangan untuk mengatur dan mengurus rumah tangganya sendiri.</p>\n\n<p>Terbentuknya Pemerintahan Kota Surakarta melalui perjalanan panjang. Setelah proklamasi kemerdekaan RI, dua kerajaan di Surakarta menyatakan bergabung menjadi bagian negara RI dan mendapat status sebagai Daerah Istimewa Surakarta. Wilayah&nbsp; yang pada masa kolonial merupakan wilayah <em>vorstenlanden</em> itu ditetapkan sebagai daerah istimewa yang kedudukannya setingkat provinsi. Seorang pejabat pemerintah pusat dengan jabatan Komisirasi Tinggi.&nbsp;</p>\n\n<p>Ketegangan politik muncul akibat Gerakan Anti Swapraja yang mengkampanyekan gagasan anti monarki dan anti feodalisme. Mereka menghendaki penghapusan Daerah Istimewwa Surakarta, pembubaran Keraton Kasunanan Surakarta dan Pura Mangkunegaran serta landreform berupa pembagian tanah milik dua keraton tersebut.</p>\n\n<p>Serangkaian kerusuhan, kekacauan dan kekerasan di Surakarta, di mana bupati-bupati di Daerah Istimewa Surakarta yang masih kerabat keraton diturunkan massa. Patih Keraton Kasunanan KRMH Sosrodiningrat diculik dan dibunuh, demikian pula dengan penggantinya KRMT Yudonagoro juga diculik dan dibunuh. Puncaknya, Perdana Menteri Sjahrir yang tengah berkunjung ke Solo juga diculik</p>\n\n<p>Untuk mengatasi ketegangan politik yang telah menjadi kerusuhan disertai penculikan dan pembunuhan tersebut, pada tanggal tanggal 16 Juni 1946 pemerintah RI membubarkan DIS dan menghilangkan kekuasaan politik Mangkunegaran dan Kasunanan. Pembubaran DIS tersebut ditindaklanjuti dengan dikeluarkannya Penetapan Pemerintah No 16/SD tahun 1946 pada tanggal 15 Juli 1946, menjadikan wilayah vorstenlanden sebagai menjadi daerah karesidenan. Kota Solo ditetapkan sebagai menjadi tempat kedudukan residen yang membawahi Karesidenan Surakarta (<em>Residentie Soerakarta</em>) dengan membawahi Kabupaten Karanganyar, Sukowati (Sragen), Wonogiri, Sukoharjo, Klaten dan Boyolali.</p>\n\n<p>Saat ini, wilayah administrasi Kota Solo terdiri dari 5 kecamatan dan 51 kelurahan dengan dibantu oleh masyarakat dalam bentuk organisasi Rukun Warga (RW) dan Rukun Tetangga (RT). Kota Solo memiliki 601 RW dan 2.705 RT. Kecamatan Laweyan memiliki 11 kelurahan, 105 RW dan 456 RT. Kecamatan Serengan memiliki 7 kelurahan, 72 RW dan 312 RT. Kecamatan Pasar Kliwon memiliki 9 kelurahan, 100 RW dan 424 RT. Kecamatan Jebres 11 kelurahan, 149 RW dan 637 RT serta Kecamatan Banjarsari 13 kelurahan, 175 RW dan 874 RT.</p>\n', '<p>Surakarta City Government first established by Government Decision No. 16 / SD 1946 issued on July 15, 1946. However, the Government of Surakarta set June 16 as the anniversary under consideration as of the date of the de facto Surakarta City Government already has the authority to organize and manage his own household.<br />\nSurakarta City Government through the formation of a long journey. After the proclamation of independence of Indonesia, the two kingdoms in Surakarta join part of RI state and status as a Special District Surakarta. Region during the colonial era is Vorstenlanden region was designated as a special area of ​​the province equal level. A government official with the central office of High Komisirasi.<br />\nPolitical tensions arising from the Anti Autonomous Movement which campaigns for anti-monarchy ideas and anti-feudalism. They want to abolish the Regional Istimewwa Surakarta, dissolution Keraton Surakarta and Mangkunegaran and reform in the form of distribution of land belonging to the two palaces.<br />\nA series of riots, chaos and violence in Surakarta, where governors of the Special Region of Surakarta palace relatives who still derived masses. Patih Kasunanan Palace KRMH Sosrodiningrat kidnapped and killed, as well as its successor KRMT Yudonagoro also kidnapped and killed. Peak, Prime Minister Sjahrir who was visiting Solo also kidnapped<br />\nTo overcome the political tensions that have become riots accompanied the abduction and murder, on the date of June 16, 1946 the Indonesian government to dissolve DIS and eliminate the political power Mangkunegaran and Kasunanan. The DIS dissolution followed by the issuance of Government Decision No 16 / SD 1946 on July 15, 1946, making the region Vorstenlanden as into the area of ​​residency. Solo city be designated as the seat of the resident in charge Surakarta (Residentie Soerakarta) to supervise Karanganyar, Sragen (Sragen), Wonogiri, Sukoharjo, Klaten and Boyolali.<br />\nCurrently, the administrative area of ​​the city of Solo consists of 5 sub-districts and 51 villages with the assistance of the public in the form of organization Pillars of Citizens (RW) and the Neighborhood (RT). Solo has 601 neighborhoods and 2,705 RT. Laweyan sub-district has 11 villages, 105 and 456 RW RT. Subdistrict Serengan has 7 villages, and 312 RT 72 RW. Pasar Kliwon had nine villages, 100 and 424 RW RT. District of Jebres 11 villages, 149 and 637 RT RW Banjarsari 13 villages and sub-districts, 175 and 874 RW RT.</p>\n', NULL, NULL, 'page', 'Sejarah Pemerintahan, Sejarah Birokrasi Solo, Birokrasi Kota Surakarta, Pemerintah Kota Surakarta', '', '', '', NULL, NULL, 'post', '', 0, 0),
(44, 'visi-misi', 0, 'admin', 1454136837, 0, 'Visi Misi', 'Vision & Mision', '<p>Berdasarkan Peraturan Daerah (Perda) <a href="http://jdih.surakarta.go.id/download.php?dt_produk_hukum_id=4708">No 10 Tahun 2001</a> tentang Visi dan Misi Kota Surakarta adalah sebagai berikut;</p>\n\n<p><strong>VISI</strong></p>\n\n<p>Visi Kota adalah &ldquo;Terwujudnya Kota Sala sebagai Kota Budaya yang bertumpu pada potensi Perdagangan, Jasa , Pendidikan, Pariwisata dan Olah Raga&rdquo;</p>\n\n<p>Adapun yang dimaksud Sala sebagai Kota Budaya yaitu kota yang pengembangannya berwawasan budaya dalam arti luas, yang seluruh komponen masyarakatnya dalam setiap kegiatannya menjunjung tinggi nilai-nilai luhur, berkepribadian demokratis-rasional, berkeadilan sosial, menjunjung tinggi Hak Asasi Manusia dan menegakkan supremasi hukum dalam tatanan masyarakat yang ber Ketuhanan Yang Maha Esa.</p>\n\n<p><strong>MISI</strong></p>\n\n<p>Untuk mewujudkan Visi Kota Surakarta di masa depan, ditetapkan misi sebagai berikut:</p>\n\n<ol>\n	<li>\n	<p>Revitalisasi kemitraan dan partisipasi seluruh komponen masyarakat dalam semua bidang pembangunan , serta perekatan kehidupan bermasyarakat dengan komitmen cinta kota yang berlandaskan pada nilai-nilai &ldquo;Sala Kota Budaya&rdquo;.</p>\n	</li>\n	<li>\n	<p>Meningkatkan kualitas sumber daya manusia yang memiliki kemampuan dalam pengusahaan dan pendaya gunaan ilmu pengetahuan, teknologi dan seni, guna mewujudkan inovasi dan integrasi masyarakat madani yan g berlandas kan ke-Tuhanan Yang Maha Esa.</p>\n	</li>\n	<li>\n	<p>Mengembangkan seluruh kekuatan ekonomi Daerah, sebagai pemacu tumbuhan dan berkembangnya ekonomi rakyat yang berdaya saing tinggi, serta mendaya gunakan potensi pariwisata dan teknologi terapan yang akrab lingkungan.</p>\n	</li>\n	<li>\n	<p>Membudayakan peran dan fungsi hukum, pelaksanaan Hak Asasi Manusia dan demokratisasi bagi seluruh elemen masyarakat, utamanya para penyelenggara pemerintahan.</p>\n	</li>\n</ol>\n\n<p>&nbsp;</p>\n\n<p>Sedangkan Visi Kota Surakarta berdaasarkan Peraturan Daerah Kota Surakarta <a href="http://www.surakarta.go.id/sites/default/files/Perda%20RPJM%20SKA%202010-2015.pdf">Nomor 2 Tahun 2010</a> tentang Rencana Pembangunan Jangka Panjang Daerah Kota Surakarta Tahun 2005 &ndash; 2025 adalah: <strong>SURAKARTA KOTA BUDAYA, MANDIRI, MAJU, DAN SEJAHTERA. </strong>Penjelasan terhadap penjabaran visi tersebut adalah sebagai berikut:</p>\n\n<ol>\n	<li>\n	<p>Surakarta sebagai <strong><em>Kota Budaya</em></strong> mengandung maksud bahwa pengembangan Kota Surakarta memiliki wawasan budaya dalam arti luas, dimana seluruh komponen masyarakat dalam setiap kegiatannya menjunjung tinggi nilai-nilai luhur, berkepribadian, demokratis-rasional, berkeadilan sosial, menjamin Hak Asasi Manusia (HAM) dan menegakkan supremasi hukum dalam tatanan masyarakat yang berke-Tuhanan Yang Maha Esa. Masyarakat Kota Surakarta secara individu memiliki moral dan perilaku terpuji, serta budi pekerti luhur, dan secara sosial memiliki budaya komunikasi yang baik, kekerabatan yang akrab dan wawasan budaya yang luas. Selain itu diupayakan pelestarian budaya dalam arti melestarikan, mempertahankan dan mengembangkan seni dan&nbsp; budaya&nbsp; yang telah ada serta melindungi cagar-cagar budaya.</p>\n	</li>\n	<li>\n	<p>Kota Surakarta sebagai kota yang <strong><em>Mandiri</em></strong>, diartikan sebagai daerah yang mampu mengatasi berbagai tantangan yang dihadapi dengan mengandalkan kemampuan dan kekuatan sendiri, dengan mengoptimalkan berbagai potensi sumber daya yang dimiliki. Kemandirian dapat terwujud melalui pembangunan yang mengarah kepada kemajuan ekonomi yang bertumpu kepada potensi yang dimiliki dengan didukung oleh Sumber Daya Manusia (SDM) yang berkualitas dan mampu memenuhi tuntutan kebutuhan dan kemajuan pembangunannya. Kemandirian dalam visi di atas bukan berarti bebas dari segala ketergantungan kepada pihak manapun, akan tetapi kemandirian yang dimaksud adalah upaya proaktif dalam mensikapi berbagai perubahan situasi dan kondisi saling ketergantungan yang terjadi baik antara satu daerah dengan daerah lain dalam satu wilayah atau bahkan dalam cakupan global antar daerah di seluruh dunia. Lebih mendasar lagi, kemandirian pada hakekatnya mencerminkan sikap seseorang atau kelompok masyarakat mengenai dirinya dalam menghadapi berbagai tantangan, yang dapat dibangun menjadi sebuah budaya kemandirian yang tercermin melalui berbagai aspek kehidupan baik hukum, ekonomi, politik, sosial budaya maupun pertahanan keamanan.</p>\n	</li>\n	<li>\n	<p>Kota Surakarta sebagai kota yang <strong><em>Maju</em></strong>, ditinjau dari berbagai indikator. Dari sisi indikator sosial misalnya, tingkat kemajuan suatu daerah dapat diukur dari kualitas Sumber Daya Manusia (SDM) yang memiliki kepribadian dan aklaq mulia, berkualitas dengan tingkat pendidikan yang tinggi yang memiliki kemampuan untuk mengembangkan daya cipta rasa dan karsanya dalam mensikapi berbagai tantangan kehidupan. Kualitas SDM secara universal diukur dengan Indeks Pembangunan Manusia (IPM) / <em>Human Development Index (HDI), </em>yaitu pengukuran indeks komposit dari <a href="http://id.wikipedia.org/wiki/Harapan_hidup">harapan hidup</a>, <a href="http://id.wikipedia.org/wiki/Melek_huruf">melek huruf</a>, lama <a href="http://id.wikipedia.org/wiki/Pendidikan">pendidikan</a> dan <a href="http://id.wikipedia.org/wiki/Standar_hidup">standar hidup</a>. HDI ini dipakai oleh Negara-negara di seluruh dunia dan digunakan untuk mengklasifikasikan apakah sebuah negara adalah <a href="http://id.wikipedia.org/wiki/Negara_maju">negara maju</a>, <a href="http://id.wikipedia.org/wiki/Negara_berkembang">negara berkembang</a> atau <a href="http://id.wikipedia.org/w/index.php?title=Negara_terbelakang&amp;action=edit&amp;redlink=1">negara terbelakang</a> dan juga untuk mengukur pengaruh dari kebijaksanaan ekonomi terhadap kualitas hidup. Ditinjau dari aspek kependudukan, indikator kemajuan antara lain ditandai dengan pertumbuhan penduduk yang lebih kecil dan dengan derajat kesehatan penduduk yang lebih tinggi, yang tercermin dari semakin tingginya angka harapan hidup serta tingginya kualitas pelayanan sosial. Ditinjau dari aspek ekonomi, kemajuan antara lain ditandai dengan semakin tingginya tingkat kemakmuran dan pemerataannya. Keterpaduan berbagai unsur ekonomi yang mampu menghasilkan <em>multiplier</em> dalam mendorong semakin majunya perekonomian daerah, disamping semakin tertata dan berfungsinya dengan baik berbagai lembaga dan pranata ekonomi dalam mendukung kemajuan dan stabilitas perekonomian. Selain memiliki berbagai indikator sosial ekonomi yang baik, kemajuan juga ditandai dengan semakin mantapnya sistem dan kelembagaan politik termasuk hukum. Selain itu semua kemajuan juga ditandai dengan tingginya tingkat partisipasi masyarakat termasuk pengarusutamaan gender dalam berbagai aspek kehidupan bermasyarakat, berbangsa dan bernegara; tingginya kualitas infrastruktur; mantapnya keamanan dan ketertiban masyarakat serta menurunnya tingkat pelanggaran hak asasi manusia;</p>\n	</li>\n	<li>\n	<p>Kota Surakarta sebagai kota yang <strong><em>Sejahtera</em></strong>, artinya memiliki dimensi lahir maupun batin, dimana sejahtera lahir diartikan terpenuhi segala kebutuhan sandang, pangan dan papan, terpenuhinya kebutuhan dasar di bidang pendidikan, kesehatan, dan tersedianya lapangan kerja sehingga dapat&nbsp; meningkatan pendapatan perkapita serta kemampuan daya beli. &nbsp;Sedangkan untuk sejahtera batin diartikan sebagai terpenuhinya kebutuhan rohaniah dan kehidupan keagamaan sesuai dengan keyakinan masyarakat masing-masing dengan tingkat toleransi yang tinggi;</p>\n	</li>\n</ol>\n\n<p>&nbsp;</p>\n\n<p>Sedangkan Misi Kota Surakarta sebagaimana yang tercantum dalam&nbsp; Peraturan Daerah Kota Surakarta Nomor: 2 Tahun 2010 tentang Rencana Pembangunan Jangka Panjang Daerah Kota Surakarta Tahun 2005 &ndash; 2025 adalah sebagai berikut:</p>\n\n<p><strong>1.</strong>&nbsp;&nbsp; <strong>Mewujudkan Sumber Daya Manusia yang berkualitas</strong></p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;daya manusia yang berkualitas ditandai antara lain dengan semakin tingginya rata-rata tingkat pendidikan dan derajat kesehatan masyarakat, semakin tingginya kemampuan dan penguasaan ilmu pengetahuan dan teknologi, serta berdaya saing tinggi yang dilandasi oleh semakin tingginya nilai-nilai moralitas masyarakat sebagai cermin masyarakat berbudaya dan berakhlaq mulia sesuai nilai-nilai falsafah Pancasila yang berlandaskan kepada keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa.</p>\n\n<p><strong>2.</strong>&nbsp;&nbsp; <strong>Mewujudkan Peningkatan Kualitas Pelayanan Umum</strong></p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Peran dan fungsi pemerintahan daerah adalah meningkatkan mutu pelayanan umum di berbagai aspek kehidupan bermasyarakat, berbangsa dan bernegara. Tingginya kualitas pelayanan umum dapat dinilai berdasarkan indikator-indikator kinerja antara lain seperti akuntabilitas, responsibilitas, transparansi, efisiensi dan efektivitas pelayanan dan lain sebagainya, yang kesemuanya berorientasi kepada kebutuhan masyarakat yang dilayani.</p>\n\n<p><strong>3.</strong>&nbsp;&nbsp; <strong>Mewujudkan Keamanan dan Ketertiban&nbsp; </strong></p>\n\n<p>Keamanan dan ketertiban sangat menentukan keberhasilan pembangunan di segala bidang. Indikator semakin mantapnya tingkat keamanan dan ketertiban antara lain ditandai dengan semakin menurun dan terkendalinya tingkat gangguan keamanan dan ketertiban masyarakat; meningkatkan kesiapsiagaan, kewaspadaan masyarakat maupun aparat keamanan dan ketertiban masyarakat di dalam mengantisipasi berbagai kemungkinan tindak kejahatan dan kriminalitas; semakin meningkatnya kesadaran dan kepatuhan hukum, kehidupan berpolitik masyarakat dalam rangka mendukung terciptanya keamanan dan ketertiban dan meningkatnya ketahanan masyarakat terhadap berbagai ancaman kejahatan dan kriminalitas.</p>\n\n<p><strong>4.&nbsp; Mewujudkan Perekonomian Daerah yang Mantap</strong></p>\n\n<p>Perekonomian daerah yang mantap sangat menentukan keberhasilan pembangunan daerah. Perekonomian daerah yang mantap ditandai dengan semakin meningkatnya pertumbuhan ekonomi dan pendapatan perkapita serta membaiknya struktur perekonomian masyarakat. Semakin maju dan berkembangnya Usaha Mikro Kecil dan Menengah (UMKM) dan Koperasi sebagai soko guru perekonomian daerah; serta semakin berkembangnya berbagai lembaga penunjang perekonomian daerah.</p>\n\n<p><strong>5. Mewujudkan Lingkungan Hidup yang Baik dan Sehat </strong></p>\n\n<p>Lingkungan hidup yang baik dan sehat ditandai dengan semakin meningkatnya ruang-ruang publik yang dipergunakan sesuai dengan fungsinya atau peruntukannya; semakin tertatanya infrastruktur kota yang berkarakter Surakarta (<em>city branded</em>); semakin terkendalinya pemanfaatan ruang sesuai dengan Peraturan Daerah tentang Rencana Umum Tata Ruang Kota (RUTRK); semakin meningkatnya pola pengembangan dan pengelolaan persampahan kota; semakin meningkatnya pola pengendalian terhadap pencemaran dan perusakan lingkungan; semakin optimalnya program-program pengelolaan Ruang Terbuka Hijau (RTH); meningkatnya kualitas lingkungan hidup yang baik dan sehat; semakin optimalnya program pengembangan sistem informasi dan sistem pendaftaran tanah; semakin menurunnya kasus-kasus sengketa atau konflik-konflik masalah pertanahan.</p>\n\n<p><strong>6. Mewujudkan Perlindungan Sosial</strong></p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pembangunan daerah selain telah berhasil meningkatkan kesejahteraan masyarakat harus senantiasa waspada terhadap timbulnya ekses sosial semakin maraknya penyandang tuna sosial. Untuk itu proses pembangunan harus dapat menjamin terciptanya perlindungan sosial bagi seluruh warga masyarakat dengan melibatkan secara aktif pemberdayaan masyarakat. Hal itu dilakukan dengan harapan dapat meningkatkan ketahanan sosial masyarakat dalam menghadapi tantangan global dan pengaruh perdagangan bebas yang sewaktu-waktu dapat mengintervensi kepentingan dalam negeri.&nbsp;</p>\n\n<p><strong>7. Mewujudkan ketersediaan sarana dan prasarana perkotaan yang cukup dan berkualitas</strong></p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kebutuhan sarana dan prasarana serta fasilitas pelayanan publik semakin meningkat seiring dengan perkembangan penduduk dan kemajuan aktivitas sosial budaya dan ekonomi masyarakat. Untuk itu diperlukan ketersediaan sarana prasarana perkotaan yang cukup yang meliputi pemenuhan kebutuhan perumahan layak dan dapat terjangkau, sarana prasarana lingkungan seperti sanitasi, ruang hijau, air bersih dan persampahan, sarana telekomunikasi, sarana perhubungan dan transportasi, sarana prasarana berkaitan dengan energi alternatif dan tenaga listrik yang dibutuhkan masyarakat luas.</p>\n\n<p>&nbsp;</p>\n', '<p>Regional Regulation (Perda) No. 10 of 2001 on the Vision and Mission of Surakarta is as follows;<br />\n<strong>A. VISION</strong><br />\nVision City is &quot;The City of Sala as a city of culture, which is based on the potential of Trade, Services, Education, Tourism and Sports&quot;<br />\nAs is the Sala as the City of Culture is the city whose development vision of culture in a broad sense, that all components of society in every activity upholds noble values, personality democratic-rational, social justice, upholding human rights and uphold the rule of law in order ber of society on God.<br />\n<br />\n<strong>B. MISSION</strong><br />\nTo realize the vision of Surakarta in the future, set the mission as follows:<br />\n1. Revitalization of partnership and participation of the entire community in all areas of development, as well as gluing social life with the commitment the city of love that is based on the values ​​of &quot;Sala City of Culture&quot;.<br />\n2. Improve the quality of human resources that have the capability utilization and performance is use of science, technology and art, in order to realize the innovation and integration of civil society yan g grounded the deity Almighty.<br />\n3. Develop entire Regional economic power, as a driver of economic growth and development of people with high competitiveness, as well as the utilization of the potential of tourism and environmentally friendly applied technologies.<br />\n4. Cultivate the role and function of the law, the implementation of human rights and democratization for all elements of society, particularly the government administrators.</p>\n\n<p>Vision of the city of Surakarta as specified in Rule Surakarta Urban No. 2 of 2010 on Long-Term Regional Development Plan for the city of Surakarta Year 2005 to 2025 are: <strong>SURAKARTA CITY OF CULTURE, SELF, FORWARD, AND PROSPER.</strong>Explanation of the elaboration of the vision are as follows:</p>\n\n<ol>\n	<li>Surakarta as the <strong><em>City of Culture</em></strong> contain mean that the development of Surakarta has the insight into the culture in a broad sense, where all components of society in all its activities upholding the noble values, personality, democratic, rational, social justice, ensuring Human Rights (HAM) and uphold the rule law within a society sustainably Belief in God Almighty.Community Surakarta individually have morals and good behavior, and noble character, and socially to have a good communication culture, kinship and intimate insight into the culture at large.Also sought in the sense of cultural preservation preserve, maintain and develop the arts and culture and protect existing wildlife sanctuaries of culture.</li>\n	<li>&nbsp;Surakarta as the city&#39;s <strong><em>Independent,</em></strong> is defined as an area that is able to overcome the various challenges faced by relying on their own ability and strength, by optimizing a variety of potential resources.Independence can be realized through development that leads to economic progress, which is based on its potential, supported by the Human Resources (HR) is qualified and able to meet the demanding needs of development and progress.Independence in the vision at the top does not mean free of any dependence on any party, but the independence in question is a proactive effort in mensikapi various changing situations and conditions of interdependence that occurs between one region to another within one region or even global in coverage between regions around the world. More fundamentally, independence is essentially reflects the attitude of a person or group of people about him in the face of various challenges, which can be built into a culture of independence that is reflected through the various aspects of life whether legal, economic, political, social, cultural and defense security.</li>\n	<li>Surakarta as the city <strong><em>forward,</em></strong> in terms of various indicators.In terms of social indicators, for example, the rate of progress of a region can be measured by the quality of Human Resources (HR) that has a personality and aklaq noble, good quality with a high level of education that has the ability to develop a sense of creativity and karsanya mensikapi various challenges in life.Quality human resources are universally measured by Human Development Index (HDI) / <em>Human Development Index (HDI),</em> namely the measurement of the composite index of <a href="http://www.google.com/url?q=http%3A%2F%2Fid.wikipedia.org%2Fwiki%2FHarapan_hidup&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNFTuiykCzhSKV6D8B5-6G3ei6je9Q">life expectancy</a> , <a href="http://www.google.com/url?q=http%3A%2F%2Fid.wikipedia.org%2Fwiki%2FMelek_huruf&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNEbOUC_qU2rfx2KHBydFAKEyqNoyg">literacy</a> , length of <a href="http://www.google.com/url?q=http%3A%2F%2Fid.wikipedia.org%2Fwiki%2FPendidikan&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNFGaeuGg4-zofFVxLsUjhPZgoGC4g">education</a> and <a href="http://www.google.com/url?q=http%3A%2F%2Fid.wikipedia.org%2Fwiki%2FStandar_hidup&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNGmcVK_aZh5wIpJxH2K0xlcuH_KsA">standard of living</a> .HDI is used by countries around the world and is used to classify whether a country is a <a href="http://www.google.com/url?q=http%3A%2F%2Fid.wikipedia.org%2Fwiki%2FNegara_maju&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNGVcbqbUpdib2mmcg4eq9FUYbH_CA">developed country</a> , <a href="http://www.google.com/url?q=http%3A%2F%2Fid.wikipedia.org%2Fwiki%2FNegara_berkembang&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNHhKyUxszYDKRGQOOspdSKZOFe_XA">developing</a> or <a href="http://www.google.com/url?q=http%3A%2F%2Fid.wikipedia.org%2Fw%2Findex.php%3Ftitle%3DNegara_terbelakang%26action%3Dedit%26redlink%3D1&amp;sa=D&amp;sntz=1&amp;usg=AFQjCNEryhKGA28ow0qhar1JMsJ3f21aQA">underdeveloped country</a> and also to measure the impact of economic policies on quality of life.Judging from the aspect of population, progress indicator, among others, characterized by a smaller population growth and the degree of population health is higher, as reflected in the increasing life expectancy and the high quality of social services. Judging from the economic aspect, among others, progress is marked by increasing levels of prosperity and pemerataannya.The integration of various elements of the economy capable of generating <em>a multiplier</em> in encouraging the more advanced regional economy, in addition to the more orderly and well-functioning institutions and economic institutions in supporting economic progress and stability.Besides having a variety of socio-economic indicators are good, progress is also marked by the consolidation of political systems and institutions, including law. Besides all the progress is also characterized by high levels of community participation including gender mainstreaming in all aspects of society, nation and state; the high quality of infrastructure; consolidation of security and public order as well as reduced levels of human rights violations;</li>\n	<li>Surakarta as a <strong><em>prosperous</em></strong> city, it means having inner dimensions of birth and, where welfare is defined met all the needs of food, clothing and shelter, the fulfillment of basic needs in education, health, and the availability of employment so as to increase per capita income and purchasing power.As for inner peace is defined as the fulfillment of spiritual and religious life in accordance with their respective faith communities with a high tolerance level.</li>\n</ol>\n\n<p>&nbsp;</p>\n\n<p>Mission according to Law Number 25 Year 2004 on National mbangunan Pe Planning System, in particular Article 1 number 13 is a general statement concerning measures to be implemented to realize the vision.In other words, the mission is the formulation of what is believed to be carried out in order to realize the vision.</p>\n\n<p>Mission Surakarta as specified in Rule Surakarta Urban No. 2 of 2010 on Long-Term Regional Development Plan Surakarta Year 2005 to 2025 are as follows:</p>\n\n<p><strong>1. Achieve a quality Human Resources</strong></p>\n\n<p>Qualified human resources is characterized among others by increasing the average level of education and community health status, increasing skills and mastery of science and technology, and highly competitive which is based on the higher values ​​of public morality as a mirror of society and culture berakhlaq noble corresponding values ​​of Pancasila philosophy that is based on faith and devotion to God Almighty.</p>\n\n<p><strong>2. Realising Quality Improvement of Public Service</strong></p>\n\n<p>The role and functions of local government is to improve the quality of public services in various aspects of social life, state and nation.The high quality of public services can be assessed based on performance indicators such as accountability, responsibility, transparency, efficiency and effectiveness of service and so forth, all of which are oriented to the needs of the community served.</p>\n\n<p><strong>3. Brought Order and Safety&nbsp; </strong></p>\n\n<p>Security and order determine the success of development in all fields. The more solid indicator of the level of security and order, among others, characterized by declining and controllable level of threat to security and public order, improve preparedness, public awareness as well as security and public order in anticipation of the possibilities of crime and criminality; increasing awareness of and compliance with laws, political life of the community in order to support the creation of security and order and increasing community resilience to threats of crime and criminality.</p>\n\n<p><strong>4. Settled Realizing the Regional Economy</strong></p>\n\n<p>Pere konomian stable area largely determines the success of regional development.Regional economy characterized by steady economic growth and increasing per capita incomes and the improving economic structure of society. The more advanced and the development of Micro, Small and Medium Enterprises (SMEs) and cooperatives as the cornerstone of the regional economy; and the development of various institutions supporting the regional economy.</p>\n\n<p><strong>5. Achieve Environmental Good and Healthy </strong></p>\n\n<p>A good environment and healthy life is marked by increasing public spaces that are used in accordance with its function or its designation; increasingly well-organized infrastructure of the city characterized by Surakarta <em>(city branded);</em> more controlled use of space in accordance with the Regulation on the General Spatial Plan of the City (RUTRK ); the increasing pattern of urban development and waste management; increasing pattern of control of pollution and environmental destruction; the optimal management programs to Green Open Space (RTH), an increase in environmental quality is good and healthy; the optimal development programs and information systems land registration system; the decline in cases of disputes or conflicts of land issues.</p>\n\n<p><strong>6. Realising Social Protection</strong></p>\n\n<p>Regional development than has succeeded in improving the welfare of society must be constantly alert to the emergence of increasingly widespread social excesses of persons with social tuna.For the development process must be able to guarantee the creation of social protection for all citizens to actively involve community empowerment. This was done in hopes of increasing social resilience in the face of global challenges and the impact that free trade can intervene at any time in the interests of the country.&nbsp;</p>\n\n<p><strong>7. Realising the availability of facilities and infrastructure are adequate and quality urban</strong></p>\n\n<p>Needs of facilities, infrastructure and public service facilities increased along with population growth and socio-cultural advancement and economic activities of society.It required the availability of adequate urban infrastructure facilities that include meeting the needs of decent and affordable housing, environmental infrastructure such as sanitation facilities, green spaces, clean water and garbage disposal, telecommunications facilities, transportation facilities and transportation, infrastructure related to alternative energy and electric power required by the community at large.</p>\n\n<p>&nbsp;</p>\n', NULL, NULL, 'page', 'visi misi kota surakarta, visi kota surakarta, misi kota surakarta', '', '', '', NULL, NULL, 'post', '', 0, 0),
(45, 'sotk', 0, 'admin', 1454279821, 0, 'SOTK', 'SOTK', '<p>Susunan Organisasi dan&nbsp; Tata Kerja Perangkat Dareah Kota Surakarta, berdasarkan<strong> </strong><a href="http://jdih.surakarta.go.id/download.php?dt_produk_hukum_id=4820"><strong>Perda No 05 Tahun 2013</strong> </a>tentang Perubahan Kedua atas <strong><a href="http://Microsoft Word - PERDA_NO_6_TAHUN_2008.doc - KOTA_SURAKARTA_6_2008.pdf">Perda No&nbsp; 6 Tahun 2008</a></strong> tentang Organisasi dan Perangkat Kerja Daerah Kota Surakarta.</p>\n', '<p>Structure and Work Surakarta City, based on <strong><a href="http://jdih.surakarta.go.id/download.php?dt_produk_hukum_id=4820">Regulation No. 05 Year 2013 </a></strong>concerning the Second Amendment to Regulation No. 6 of 2008 on the Organization and Work Tools Surakarta City</p>\n', NULL, NULL, 'page', '', '', '', '', NULL, NULL, 'post', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `id` int(11) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `theme`, `name`) VALUES
(4, 'surakarta', 'home'),
(5, 'surakarta', 'home2'),
(6, 'surakarta', 'post'),
(7, 'surakarta', 'post-list');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_config`
--
ALTER TABLE `admin_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_asset`
--
ALTER TABLE `mod_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_asset_dir`
--
ALTER TABLE `mod_asset_dir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_banner`
--
ALTER TABLE `mod_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_footer`
--
ALTER TABLE `mod_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_microsite`
--
ALTER TABLE `mod_microsite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_microsite_contact`
--
ALTER TABLE `mod_microsite_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_microsite_content`
--
ALTER TABLE `mod_microsite_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_microsite_template`
--
ALTER TABLE `mod_microsite_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_newsticker`
--
ALTER TABLE `mod_newsticker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_share`
--
ALTER TABLE `mod_share`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_share_detail`
--
ALTER TABLE `mod_share_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relid` (`relid`);

--
-- Indexes for table `mod_slidebanner`
--
ALTER TABLE `mod_slidebanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_sosmed`
--
ALTER TABLE `mod_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_video`
--
ALTER TABLE `mod_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_config`
--
ALTER TABLE `admin_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `mod_asset`
--
ALTER TABLE `mod_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `mod_asset_dir`
--
ALTER TABLE `mod_asset_dir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mod_banner`
--
ALTER TABLE `mod_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mod_footer`
--
ALTER TABLE `mod_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mod_microsite`
--
ALTER TABLE `mod_microsite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mod_microsite_contact`
--
ALTER TABLE `mod_microsite_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mod_microsite_content`
--
ALTER TABLE `mod_microsite_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mod_microsite_template`
--
ALTER TABLE `mod_microsite_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mod_newsticker`
--
ALTER TABLE `mod_newsticker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mod_share`
--
ALTER TABLE `mod_share`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mod_share_detail`
--
ALTER TABLE `mod_share_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mod_slidebanner`
--
ALTER TABLE `mod_slidebanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mod_sosmed`
--
ALTER TABLE `mod_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mod_video`
--
ALTER TABLE `mod_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
