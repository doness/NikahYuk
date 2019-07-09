-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2019 at 11:56 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uid` int(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `uemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'gannes', '1234', 'Gannes can', 'gannescan@bk.ru'),
(3, 'virly', 'virly', 'Virly', 'virly@nikahyuk.com'),
(6, 'admin', '1234', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `paket_id` int(200) NOT NULL,
  `paket_cat` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `book` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`paket_id`, `paket_cat`, `checkin`, `checkout`, `name`, `phone`, `book`) VALUES
(16, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(17, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(18, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(19, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(20, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(21, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(22, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(23, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(24, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(25, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(26, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(27, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(28, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(29, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(30, 'Paket 2', '0000-00-00', '0000-00-00', '', '0', 'false'),
(31, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(32, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(33, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(34, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(35, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(36, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(37, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(38, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(39, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(40, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(41, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(42, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(43, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(44, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(45, 'Paket 3', '0000-00-00', '0000-00-00', '', '0', 'false'),
(616, 'Paket 1', '2019-07-13', '2019-07-14', 'Mox', '088233322', 'true'),
(617, 'Paket 1', '2019-07-11', '2019-07-12', 'Max', '08112333233', 'true'),
(618, 'Paket 1', '2019-07-11', '2019-07-12', 'Max', '08112333233', 'true'),
(619, 'Paket 1', '2019-07-18', '2019-07-20', 'Dom', '08887733', 'true'),
(620, 'Paket 1', '2019-07-18', '2019-07-20', 'Dom', '08887733', 'true'),
(621, 'Paket 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(622, 'Paket 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(623, 'Paket 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(624, 'Paket 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(625, 'Paket 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(626, 'Paket 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(627, 'Paket 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(628, 'Paket 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(629, 'Paket 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(630, 'Paket 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(691, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(692, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(693, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(694, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(695, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(696, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(697, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(698, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(699, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(700, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(701, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(702, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(703, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(704, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(705, 'Dekorasi 1', '0000-00-00', '0000-00-00', '', '', 'false'),
(764, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(765, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(766, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(767, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(768, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(769, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(770, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(771, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(772, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(773, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(774, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(775, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(776, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(777, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(778, 'Dekorasi 2', '0000-00-00', '0000-00-00', '', '', 'false'),
(779, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(780, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(781, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(782, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(783, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(784, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(785, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(786, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(787, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(788, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(789, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(790, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(791, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(792, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(793, 'Dekorasi 3', '0000-00-00', '0000-00-00', '', '', 'false'),
(794, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(795, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(796, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(797, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(798, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(799, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(800, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(801, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(802, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(803, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(804, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(805, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(806, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(807, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(808, 'Dekorasi 4', '0000-00-00', '0000-00-00', '', '', 'false'),
(824, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(825, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(826, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(827, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(828, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(829, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(830, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(831, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(832, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(833, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(834, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(835, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(836, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(837, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false'),
(838, 'Dekorasi 5', '0000-00-00', '0000-00-00', '', '', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `paket_category`
--

CREATE TABLE `paket_category` (
  `paket_nm` text NOT NULL,
  `paket_qty` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `booked` int(11) NOT NULL,
  `facility` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket_category`
--

INSERT INTO `paket_category` (`paket_nm`, `paket_qty`, `available`, `booked`, `facility`, `price`) VALUES
('Dekorasi 1', 15, 15, 0, '<p><img alt=\"1\" height=\"406\" src=\"https://i.ibb.co/cTB39jH/1.png\" /></p>\r\n\r\n<p><br />\r\n<img alt=\"1\" src=\"https://i.ibb.co/G35N8H2/1.png\" /></p>\r\n', 20000000),
('Dekorasi 2', 15, 15, 0, '<img src=\"https://i.ibb.co/BL3w1M2/2.jpg\" alt=\"2\" border=\"0\">', 25000000),
('Dekorasi 3', 15, 15, 0, '<img src=\"https://i.ibb.co/Y2x5JVk/3.jpg\" alt=\"3\" border=\"0\">', 25000000),
('Dekorasi 4', 15, 15, 0, '<img src=\"https://i.ibb.co/FVnWgBL/4.jpg\" alt=\"4\" border=\"0\">', 25000000),
('Dekorasi 5', 15, 15, 0, '<img src=\"https://i.ibb.co/x1Jw5b8/5.jpg\" alt=\"5\" border=\"0\">', 25000000),
('Paket 1', 15, 15, 0, '<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"https://www.dewiswedding.com/wp-content/uploads/2018/11/P_20160409_184511.jpg\" width=\"750\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<h5>Paket Gold &nbsp;Untuk 800 Orang | Harga: Rp.76 juta.</h5>\r\n\r\n<p><strong>A</strong>&nbsp;<strong>Gedung dan Sarana (Subsidi Rp. 1 jt.)</strong><strong>B</strong>&gt;&nbsp;<strong>Buffe Utama 700 Porsi Menu B:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Nasi Putih</li>\r\n	<li>Nasi Goreng Spesial</li>\r\n	<li>Aneka Soup (pilihan):\r\n	<p><em>Soup Kimlo/ Sop Ayam Bakso/ Sop Buntut/ Sop Daging Bakso/ Sop Daging Komplit/ Sop Jagung Manis/ Sop Kombinasi/ Sop Makaroni.</em></p>\r\n	</li>\r\n	<li>Daging (pilihan):\r\n	<p><em>Beef Steak Bola-bola/Teriyaki/ Daging Balado/ Daging Bumbu Kari/ Daging Bumbu Lapis/ Gulai Daging/ Krengseng Daging/ Rendang/ Rolade/ Sambal Goreng Daging Printil/ Sapi Lada Hitam/ Semur.</em></p>\r\n	</li>\r\n	<li>Ayam (pilihan):\r\n	<p><em>Ayam Bakar/ Ayam Bumbu Bali/ Ayam Cah Sosis/ Ayam Kari/ Ayam Kecap Mentega/ Ayam Masak Cabe Hijo/ Ayam Rica-rica/ Ayam Suwir/ Ayam Woku/ Chiken Cordon Blew/ Chiken Katsu/ Chiken Teriyaki/ Gulai Ayam/ Rollade Ayam/ Sate Ayam.</em></p>\r\n	</li>\r\n	<li>Ikan (pilihan):\r\n	<p><em>Kakap Asam Manis/ kakap Bumbu Acar/ Kakap Bumbu Pedas.</em></p>\r\n	</li>\r\n	<li>Masakan (pilihan):\r\n	<p><em>Asinan/ Slada Bangkok/ Gado-gado Betawi.</em></p>\r\n	</li>\r\n	<li>Aneka Pudding.</li>\r\n	<li>Aneka Buah Segar</li>\r\n	<li>Aneka Softdrink</li>\r\n	<li>Aneka Snack</li>\r\n	<li>Krupuk Udang/ Emping.</li>\r\n	<li>Air Mineral</li>\r\n</ol>\r\n\r\n<p><strong>C</strong>&nbsp;<strong>Menu Gubug:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Kambing Guling 2 Ekor</li>\r\n	<li>Soto Ayam + Lontong 150 porsi.</li>\r\n	<li>Dimsum 150 porsi.</li>\r\n	<li>Mie Bakso 150 Porsi.</li>\r\n	<li>Es Puter 2 Galon.</li>\r\n	<li>D&rsquo;Creps 200 porsi.</li>\r\n</ol>\r\n\r\n<p><strong>D</strong>&nbsp;<strong>Pelaminan:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Pelaminan Modern (Up to 12 Meters).</li>\r\n	<li>Kursi Pengantin 1 Set.</li>\r\n	<li>Mini Garden + Bunga Segar.</li>\r\n	<li>Standing Flower 5 bh di pelaminan.</li>\r\n	<li>Karpet Panggung..</li>\r\n	<li>Permadani.</li>\r\n	<li>Linghting Ke Pelaminan.</li>\r\n</ol>\r\n\r\n<p><strong>E</strong>&nbsp;<strong>Dekorasi:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Dekorasi Buffe Prasmanan 2 set.</li>\r\n	<li>Bunga di Buffe Prasmanan 3 bh.</li>\r\n	<li>Gazebo Kain di Buffe Kotak + Bunga Sakura.</li>\r\n	<li>Pagar / Pembatas Buffe VIP.</li>\r\n	<li>Pargola di Buffe VIP.</li>\r\n	<li>Dekorasi Buffe VIP</li>\r\n	<li>Bunga di Buffe VIP 1 bh.</li>\r\n	<li>Round Table di Buffe VIP 3 Set + Bunga Kecil.</li>\r\n	<li>Ice Carving 1 pasang / Inisial Bunga.</li>\r\n	<li>Ice Tray 1 bh (optional).</li>\r\n	<li>Dekorasi Meja Dissert.</li>\r\n	<li>Bunga di Meja Dissert.</li>\r\n	<li>Janur / Umbul-umbul 1 pasang + Nama.</li>\r\n	<li>Standing Flower di jalan.</li>\r\n	<li>Karpet Merah di Jalan.</li>\r\n	<li>Foto Gallery + Backdrop.</li>\r\n	<li>Rangkaian Bunga di Meja Terima Tamu 2 bh.</li>\r\n	<li>Backdrop Terima Tamu 2 bh.</li>\r\n	<li>Pargola Pintu Masuk.</li>\r\n	<li>Wellcome Gazebo + Bunga Jatuh di Pintu Masuk.</li>\r\n	<li>Kursi Tiffani Untuk Akad 6 bh.</li>\r\n</ol>\r\n\r\n<p><strong>F</strong>&nbsp;<strong>Tata Rias &amp; Busana:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Tata Rias &amp; Busana Pengantin (Akad dan Resepsi).</li>\r\n	<li>Tata Rias &amp; Busana Orang Tua 2 pasang.</li>\r\n	<li>Tata Rias &amp; Busana Penerima Tamu 4 Orang</li>\r\n	<li>Tata Rias &amp; Busana Pager Ayu 6 Orang</li>\r\n	<li>Tata Rias &amp; Busana Pager Bagus 6 Orang</li>\r\n</ol>\r\n\r\n<p><strong>G</strong>&nbsp;<strong>Dokumentasi:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Album Photo Kolase Exclusive 1 Album.</li>\r\n	<li>Master Foto Transfer DVD.</li>\r\n	<li>Video Shooting Transfer DVD Animasi.</li>\r\n	<li>Mini Studio.</li>\r\n</ol>\r\n\r\n<p><strong>H</strong>&nbsp;<strong>&nbsp;Lampah / Mang Lengser.</strong><strong>I</strong>&nbsp;<strong>MC Untuk Resepsi Pernikahan</strong><strong>J</strong>&nbsp;<strong>Organ Tunggal + Singer.</strong><strong>K</strong>&nbsp;<strong>Peralatan:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Tempat Souvenir 2 bh (dipinjamkan)</li>\r\n	<li>Tempat Angpaw 2 bh (dipinjamkan)</li>\r\n	<li>Buku Tamu 2 bh + Spidol</li>\r\n	<li>Standing Frame 2bh dipinjamkan.</li>\r\n</ol>\r\n\r\n<p><strong>L</strong>&nbsp;<strong>Bonus:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Buffe 50 porsi</li>\r\n	<li>Foto Ukuran 20 R + Bingkai Cantik 1 bh.</li>\r\n</ol>\r\n', 75000000),
('Paket 2', 15, 15, 0, 'Booth Foto. Preweed, Prasmanan, Video Weeding', 100000000),
('Paket 3', 15, 15, 0, 'Booth Foto. Preweed, Prasmanan, Video Weeding, Baju Pengantin, Undangan, Baju Keluarga', 150000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`paket_id`);

--
-- Indexes for table `paket_category`
--
ALTER TABLE `paket_category`
  ADD PRIMARY KEY (`paket_nm`(100));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `paket_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=839;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
