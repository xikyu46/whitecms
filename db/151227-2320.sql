-- phpMyAdmin SQL Dump
-- version 4.4.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2015 at 04:20 PM
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
-- Table structure for table `menu_item`
--

CREATE TABLE IF NOT EXISTS `menu_item` (
  `id` int(11) NOT NULL,
  `title` varchar(75) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `post_id` int(11) DEFAULT '0',
  `link` varchar(100) NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `position` int(11) DEFAULT '0',
  `hide` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`id`, `title`, `title_en`, `post_id`, `link`, `parent_id`, `position`, `hide`) VALUES
(8, 'Home', 'Home en', 4, 'simplepost', 0, 0, NULL),
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
-- Table structure for table `mod_asset`
--

CREATE TABLE IF NOT EXISTS `mod_asset` (
  `id` int(11) NOT NULL,
  `dirid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_asset`
--

INSERT INTO `mod_asset` (`id`, `dirid`, `name`, `file`) VALUES
(5, 2, '', 'AdminPemerintahKotaSurakarta-1450029709.png'),
(6, 1, '', 'slidebanner1-1450032395.png'),
(7, 1, '', 'slidebanner2-1450032406.png'),
(8, 1, '', 'slidebanner3-1450032411.png'),
(11, 5, '', 'logosolothespiritofjava-1450474036.png'),
(12, 5, '', 'kontak-1450474523.jpg'),
(13, 5, '', 'ICCC2015Solo-1450474731.jpg'),
(14, 5, '', 'berita-1450476224.jpg'),
(16, 5, '', 'tentang-1450476330.jpg'),
(19, 3, '', 'wtn-1451150383.jpg'),
(20, 2, '', 'jurug-1451195427.jpg'),
(21, 2, '', 'jurugtest-1451214910.jpg'),
(22, 1, '', 'wtn-1451229369.jpg'),
(23, 1, '', '01-1451229693.jpg'),
(24, 4, '', '06-1451230095.jpg'),
(25, 4, '', 'jurugtest-1451230281.jpg'),
(26, 4, '', 'jurug-1451230292.jpg'),
(27, 4, '', 'nasiliwet-1451230353.jpg'),
(28, 4, '', '22032013PanduTamanBalekambang1-1451230413.jpg'),
(29, 4, '', '33173T00771javapicturecomwpcontentuploads201210PasarGedeSolo01-1451230563.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mod_asset_dir`
--

CREATE TABLE IF NOT EXISTS `mod_asset_dir` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_asset_dir`
--

INSERT INTO `mod_asset_dir` (`id`, `name`) VALUES
(1, 'slidebanner'),
(2, 'banner front'),
(3, 'banner side'),
(4, 'img'),
(5, 'microsite');

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
-- Table structure for table `mod_slidebanner`
--

CREATE TABLE IF NOT EXISTS `mod_slidebanner` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_slidebanner`
--

INSERT INTO `mod_slidebanner` (`id`, `text`, `url`, `status`) VALUES
(1, 'Polsek Jebres Bersama Pengelola Stasiun Jebres Lakukan Cek Rel', '	http://surakarta.tratapp.com/assets/slidebanner2-1450032406.png', 1),
(2, 'dolor lorem ipsum matet sitet', 'http://surakarta.tratapp.com/assets/slidebanner2-1450032406.png', 1),
(3, 'lorem ipsum dolor sitet matet', 'http://surakarta.tratapp.com/assets/slidebanner3-1450032411.png', 1),
(4, 'Maulid Nabi Bersama Habib Syeh', 'http://surakarta.tratapp.com/assets/01-1451229693.jpg', 1),
(5, 'Kado Spesial', 'http://surakarta.tratapp.com/assets/wtn-1451146605.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mod_sosmed`
--

CREATE TABLE IF NOT EXISTS `mod_sosmed` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_sosmed`
--

INSERT INTO `mod_sosmed` (`id`, `name`, `url`, `icon`, `status`) VALUES
(1, 'facebook', '', 'fa-facebook', 1),
(2, 'twitter', '', 'fa-twitter', 1),
(3, 'linkedin', '', 'fa-linkedin', 1),
(4, 'googleplus', '', 'fa-google-plus', 1),
(5, 'youtube', '', 'fa-youtube', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mod_video`
--

CREATE TABLE IF NOT EXISTS `mod_video` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mod_video`
--

INSERT INTO `mod_video` (`id`, `date`, `name`, `text`, `url`, `content`, `status`) VALUES
(1, 1450069968, 'title', 'Kirab ', 'https://www.youtube.com/embed/1H5hbYFuTLs', 'kirab.......', 1),
(2, 1450069968, 'title', 'test', 'https://www.youtube.com/embed/bEPNXQIigtU', 'Integer id lacinia mauris. Suspendisse potenti. Etiam ultrices sed nunc nec finibus. Phasellus magna purus, placerat ac aliquam ut, lacinia in eros. Quisque lobortis quam ex, id porta urna porta ut. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eu ultrices magna, ac blandit nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris id blandit nunc, nec consectetur eros. Morbi vulputate facilisis elit, ac pulvinar metus accumsan vel. Proin ac finibus leo, volutpat cursus arcu. Duis arcu sapien, tempor tincidunt augue at, gravida tempor lacus. Aenean pellentesque viverra blandit. Nulla facilisi. Sed ullamcorper elit ut ultricies feugiat. Integer laoreet quam eget ex gravida, vitae vulputate nisl congue.', 1),
(3, 1450069968, 'title', 'Video Keselamatan', 'https://youtu.be/bEPNXQIigtU', 'Integer id lacinia mauris. Suspendisse potenti. Etiam ultrices sed nunc nec finibus. Phasellus magna purus, placerat ac aliquam ut, lacinia in eros. Quisque lobortis quam ex, id porta urna porta ut. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eu ultrices magna, ac blandit nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris id blandit nunc, nec consectetur eros. Morbi vulputate facilisis elit, ac pulvinar metus accumsan vel. Proin ac finibus leo, volutpat cursus arcu. Duis arcu sapien, tempor tincidunt augue at, gravida tempor lacus. Aenean pellentesque viverra blandit. Nulla facilisi. Sed ullamcorper elit ut ultricies feugiat. Integer laoreet quam eget ex gravida, vitae vulputate nisl congue.', 1),
(4, 1450069968, 'title', 'lorem ipsum dolor sitet matet', 'https://www.youtube.com/embed/8zPohxqf9uU', 'Integer id lacinia mauris. Suspendisse potenti. Etiam ultrices sed nunc nec finibus. Phasellus magna purus, placerat ac aliquam ut, lacinia in eros. Quisque lobortis quam ex, id porta urna porta ut. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eu ultrices magna, ac blandit nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris id blandit nunc, nec consectetur eros. Morbi vulputate facilisis elit, ac pulvinar metus accumsan vel. Proin ac finibus leo, volutpat cursus arcu. Duis arcu sapien, tempor tincidunt augue at, gravida tempor lacus. Aenean pellentesque viverra blandit. Nulla facilisi. Sed ullamcorper elit ut ultricies feugiat. Integer laoreet quam eget ex gravida, vitae vulputate nisl congue.', 1),
(5, 1450069968, 'title', 'testing', 'https://www.youtube.com/embed/syZX-nTWGto', 'Integer id lacinia mauris. Suspendisse potenti. Etiam ultrices sed nunc nec finibus. Phasellus magna purus, placerat ac aliquam ut, lacinia in eros. Quisque lobortis quam ex, id porta urna porta ut. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eu ultrices magna, ac blandit nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris id blandit nunc, nec consectetur eros. Morbi vulputate facilisis elit, ac pulvinar metus accumsan vel. Proin ac finibus leo, volutpat cursus arcu. Duis arcu sapien, tempor tincidunt augue at, gravida tempor lacus. Aenean pellentesque viverra blandit. Nulla facilisi. Sed ullamcorper elit ut ultricies feugiat. Integer laoreet quam eget ex gravida, vitae vulputate nisl congue.', 1);

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
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `url`, `catid`, `author`, `date`, `update`, `title`, `title_en`, `content`, `content_en`, `excerpt`, `excerpt_en`, `type`, `meta_key`, `meta_key_en`, `meta_desc`, `meta_desc_en`, `image`, `image2`, `template`, `tag`, `status`) VALUES
(4, 'semarang', 0, '0', 1450017506, 1450017959, 'Home', 'Home English', '<p>lorem apsilum</p>\n', '<p>lorem ipsum english</p>\n', '', '', 'page', 'home', 'meta key english', 'home', 'meta desc english', '', '', 'home', '', 1),
(5, 'simple.html', 0, '0', 1449845093, 0, 'Simple Post', '', 'simple', '', 'simple', '', 'page', '', '', '', '', '', '', 'home', '', 0),
(7, '34berita.html', 2, '0', 1450062838, 1449969254, 'berita 1', 'news 1', '<p>berita 1 content</p>\n', '<p>exceript 2</p>\n', NULL, NULL, 'blog', 'meta key', 'meta key', 'meta descriptionssss', 'meta description', '', '', 'post', '', 0),
(10, 'Polsek_Jebres_Bersama_Pengelola_Stasiun_Jebres_Lakukan_Cek_Rel', NULL, '0', 1451132276, 1450034086, 'Polsek Jebres Bersama Pengelola Stasiun Jebres Lakukan Cek Rel', 'Jebres Police Station Joint business Jebres Do check the Rails', '<p>Mengantisipasi hal tak diinginkan saat libur panjang perayaan Natal dan Tahun Baru, Polsek Jebres bersama pengelola Stasiun Jebres melakukan pengecekan rutin rel maupun wesel dari ulah orang tidak bertanggung jawab. Upaya ini, selain sebagai bukti wujud tanggung jawab juga untuk melakukan pengamanan terhadap jalur kereta yang melaju dari kemungkinan sabotase.</p>\n\n<p>Belajar dari pengalaman sebelumnya, kata Kapolsek, banyak kendala yang dihadapi dalam mengamankan rel kereta api. Termasuk dari ulah tangan orang tidak bertanggung jawab. Selama ini, gangguan yang ditemui adalah mengganjal wesel atau mekanisme pemindah jalur kereta api dengan menggunakan batu. Disamping itu juga, pernah ditemukan adanya tumpukan batu hingga 30 sentimeter di tengah-tengah rel. Diharapkan, masyarakat yang mengetahui aksi orang tak bertanggung jawab tersebut langsung memberikan informasi baik kepada pihak penanggung jawab stasiun maupun kepolisian.</p>\n\n<p>Sementara itu, Kepala Stasiun Jebres, Wagimin mengatakan, pihaknya meminta bantuan kepolisian maupun Koramil Jebres untuk melakukan pengamnan jalur kereta api saat liburan panjang kali ini. Selain melakukan pengamnan di rel maupun wesel kereta api, pihaknya juga melakukan pengamanan di sekitar kawasan stasiun. Upaya ini dilakukan supaya penumpang kereta api yang memasuki kawasan Stasiun Jebres merasa aman dan nyaman.</p>\n', '<p>Anticipating untoward when long holidays of Christmas and New Year, Police Station manager Jebres together Jebres perform routine checks or money orders rails of the irresponsible act. These efforts, as well as evidence of a form of responsibility for security in railway lines that go from the possibility of sabotage.<br />\nLearning from previous experience, the police chief said, many obstacles encountered in securing the railway. Including the work of the hands of irresponsible people. During this time, interference encountered is jammed notes or railroad transfer mechanism by using stones. Besides, also, never found a pile of rocks up to 30 centimeters in the middle of the rails. Hopefully, people who know the action of irresponsible people directly provide good information to the responsible party and the police station.</p>\n\n<p>Meanwhile, Chief of Station Jebres, Wagimin said it asked for the help of police and Koramil Jebres to pengamnan railway line during the long vacation this time. In addition to performing pengamnan on rails and railway bills, it also provide security in the area around the station. This work is done so that the train passengers who entered Jebres Station neighborhood felt safe and comfortable.</p>\n', NULL, NULL, 'news', NULL, NULL, NULL, NULL, 'http://surakarta.go.id/sites/default/files/field/image/Stasiun-Solo-Jebres_0.jpg', '', 'post', 'berita', 1),
(14, 'festifal-jenang', NULL, '0', 1451232035, 1450045682, 'Festival Jenang Solo Ragam Nusantara', 'The Festival of Jenang Solo', '<p>Waktu Pelaksanaan: 14 -17 Februari 2016</p>\n\n<p>Tempat : Kawasan Koridor Budaya Ngarsopuro</p>\n\n<p>Festival Jenang Solo digelar dalam rangka memperingati hari jadi Kota Solo yang ke-271. Dalam acara tersebut menampilkan : Bazar dan demo pembuatan jenang dan pagelaran seni tradisi. Pada tanggal 17 Februari 2016 akan dibagikan lebih dari 20 ribu&nbsp; takir jenang secara gratis kepada masyarakat.</p>\n', '<p>Sunday &ndash; Wednesday, February 14th -17th, 2016</p>\n\n<p>The Festival of Jenang Solo is held to celebrate the 271 th anniversary of Solo City, more than 17 thousands plates of jenang (porridge) are shared to peole free.</p>\n', NULL, NULL, 'event', 'event cultural solo 2016, festival jenang solo, kalender event solo 2016, agenda wisata solo', 'event cultural solo 2016, festival jenang solo, solo destination', '', '', NULL, '', 'post', '', 1),
(15, 'event1', NULL, '0', 1450045729, 1450045682, 'event2', 'event 1 english', '<p>ini adalah event 1</p>\n', '<p>event english</p>\n', NULL, NULL, 'event', '', '', '', '', NULL, '', 'home', '', 1),
(16, 'event1', NULL, '0', 1450045743, 1450045682, 'event3', 'event 1 english', '<p>ini adalah event 1</p>\n', '<p>event english</p>\n', NULL, NULL, 'event', '', '', '', '', NULL, '', 'home', '', 1),
(17, 'event1', NULL, '0', 1450045751, 1450045682, 'event4', 'event 1 english', '<p>ini adalah event 1</p>\n', '<p>event english</p>\n', NULL, NULL, 'event', '', '', '', '', NULL, '', 'home', '', 1),
(21, 'piala-wtn-ke-9-kado-spesialis-akhir-tahun', NULL, '0', 1451231826, 1451150565, 'Piala WTN Ke-9 Kado Spesialis Akhir Tahun', '9th WTN Awarrd, Year End Special Gifts', '<p>Di penghujung tahun, Kota Surakarta mendapatkan kado spesial dari Presiden Joko Widodo berupa Piala Wahana Tata Nugraha (WTN) tahun 2015. &ldquo;Kado&rdquo; tersebut diberikan lantaran Kota Surakarta dinilai Kementerian Perhubungan memiliki sistem transportasi perkotaan yang baik. Presiden Jokowi sendiri yang menyerahkan penghargaan tersebut kepada Penjabat Walikota Surakarta Budi Suharto, di Istana Merdeka Rabu (23/12/2015).</p>\n\n<p>Piala WTN tersebut merupakan yang kesembilan kalinya diterima Kota Surakarta sejak Kementerian Perhubungan menyelenggarakan lomba di bidang penataan transportasi tersebut. Piala WTN yang kesembilan tersebut terasa spesial karena baru pertama kalinya diserahkan langsung oleh presiden. Kota Surakarta meraih Piala WTN pertama kali semasa Walikota Jokowi yang kini menjadi presiden. (***)</p>\n', '<p>At the end of the year, Surakarta get a special gift from President Joko Widodo form Wahana Tata Nugraha Cup (WTN) in 2015. &quot;Gift&quot; was given because Surakarta assessed Ministry of Transportation has a good urban transport system. Jokowi president himself who handed over the award to the Acting Mayor of Surakarta Budi Suharto, at the Presidential Palace on Wednesday (23/12/2015).<br />\n<br />\nThe WTN Cup was the ninth time received Surakarta since the Ministry of Transportation held a competition in the field of the transport arrangement. WTN ninth Cup is special because it was the first time submitted directly by the president. Surakarta city WTN first Cup victory during Mayor Jokowi who is now president. (***)</p>\n', NULL, NULL, 'news', NULL, NULL, NULL, NULL, 'http://surakarta.tratapp.com/assets/wtn-1451150383.jpg', NULL, 'home', 'news ', 1),
(22, 'tstj-gelar-event-preinan-neng-jurug', NULL, '0', 1451215060, 1451195721, 'TSTJ Gelar Event Preinan Neng Jurug', 'TSTJ Preinan Neng Jurug', '<p>Menyambut libur Natal, Tahun Baru dan liburan sekolah, Taman Satwa Taru Jurug (TSTJ) menggelar event Preinan Neng Jurug. Event tersebut digelar mulai 24 Desember hingga 1 Januari 2016.</p>\n\n<p>Direktur TSTJ, Bimo mengatakan, ini merupakan kegiatan rutin tahunan untuk menyambut libur Natal dan Tahun Baru. Terdapat beberapa wahana rekreasi di dalam TSTJ saat momentum Preinan Neng Jurug. Di antaranya memberi pakan satwa, foto dengan satwa, naik gajah, naik unta, naik bendi, kemudian ada juga wahana permainan seperti bebek air, istana balon, schutter, kereta listrik dan lain-lain. Lalu juga ada stand produk dan bazar. Preinan Neng Jurug ini buka mulai pukul 07.30 WIB hingga 17.00 WIB. Sedangkan untuk harga tiket masuk pada event Preinan Neng Jurug bervariasi.</p>\n\n<p><img alt="" src="http://surakarta.tratapp.com/assets/jurugtest-1451214910.jpg" style="height:225px; width:300px" /></p>\n\n<p>Pada 24 Desember yaitu sebesar Rp15.000 per orang. Lalu di tanggal 25 Desember sebesar Rp12.000 per orang, lalu 26 Desember tiketnya sebesar Rp10.000 per orang, 27 Desember harga tiketnya sebesar Rp12.000 per orang, lalu 26 hingga 31 Desember harga tiketnya sebesar Rp10.000 per orang dan tanggal 1 Januari 2016 harga tiketnya Rp15.000 per orang. Tak hanya itu, dengan semakin banyak pengunjung yang datang ke TSTJ, diharapkan mampu mengatrol perolehan pendapatan di TSTJ.</p>\n', '<p>Welcoming the Christmas holidays, New Year and school holidays, Taman Satwa Taru Jurug (TSTJ) held Preinan Neng Jurug event. The event is held from December 24 to January 1, 2016.</p>\n\n<p>TSTJ director, Ben said, this is an annual event to welcome the Christmas and New Year&#39;s holidays. There are several recreational vehicle at the time of the momentum Preinan TSTJ Neng Jurug. In between feeding animals, photos with animals, elephant ride, camel ride, buggy, then there are also games like duck water rides, balloon castles, Schutter, electric trains and others. Then there is also a stand and bazaar products. Preinan Jurug Neng is open from 07.30 am until 17.00 pm. As for the price of admission to the event Preinan Neng Jurug vary.</p>\n\n<p>On 24 December in the amount of Rp15,000 per person. Then on December 25 amounted to Rp12,000 per person, and December 26 tickets are Rp 10,000 per person, December 27, the ticket price of Rp12,000 per person, and 26 until December 31, the ticket price of Rp 10,000 per person and 1 January 2016 15,000 per person ticket price. Not only that, with a growing number of visitors who come to TSTJ, expected to mengatrol revenue in TSTJ.</p>\n', NULL, NULL, 'news', NULL, NULL, NULL, NULL, 'http://surakarta.tratapp.com/assets/jurug-1451195427.jpg', NULL, 'post', 'berita', 1);

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
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `mod_asset`
--
ALTER TABLE `mod_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `mod_asset_dir`
--
ALTER TABLE `mod_asset_dir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mod_banner`
--
ALTER TABLE `mod_banner`
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
-- AUTO_INCREMENT for table `mod_slidebanner`
--
ALTER TABLE `mod_slidebanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mod_sosmed`
--
ALTER TABLE `mod_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mod_video`
--
ALTER TABLE `mod_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
