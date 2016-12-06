-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2016 at 08:55 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbp3m`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'hartono', 'hartono');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(10) NOT NULL,
  `jberita` varchar(255) NOT NULL,
  `upby` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `upgam` varchar(255) NOT NULL,
  `cberita` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `jberita`, `upby`, `tgl`, `upgam`, `cberita`) VALUES
(9, 'judul judul judulku', 'administrator', '2016-11-13', 'evaluasi-buku-520x245.jpg', 'buku buku buku buku buku buku buku buku buku'),
(11, 'Lomba Photo', 'administrator', '2016-11-23', '14361306_1295490890469839_340012658214448495_o.jpg', 'ayo ramehkan lomba photo berhadiah buku buku buku buku buku buku buku buku buku buku buku buku buku buku buku'),
(12, 'eco eco', 'administrator', '2016-11-25', '93.jpg', 'blink blink blink blink blink blink blink blink blink blink blink blink blink blink blink blink blink blink  blink blink blink blink blink blink blink blink blink blink blink blink blink blink blink'),
(13, 'eco maning', 'administrator', '2016-11-26', '9cp7Bkqoi.gif', 'buku buku buku buku buku buku buku buku buku buku buku buku buku buku buku buku buku buku buku buku buku buku buku buku'),
(15, 'coba baru', 'administrator', '2016-11-26', '3419c9e17df481454f55c83e974945d0.jpg', 'coba baru coba baru coba baru coba baru coba baru coba baru coba baru coba baru coba baru coba baru coba baru coba baru coba baru'),
(16, 'baru lagi', 'administrator', '2016-11-26', '1086992_201606181034520714.jpg', 'HUT Indonesia ke-71 HUT Indonesia ke-71 HUT Indonesia ke-71 HUT Indonesia ke-71 HUT Indonesia ke-71 HUT Indonesia ke-71'),
(17, 'judul judul', 'administrator', '2016-11-28', '3141810_1429875787.082_updates.jpg', 'olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga'),
(18, 'judul', 'administrator', '2016-11-28', '165931798.jpg', 'senam pagi olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga olahraga'),
(19, 'judul judul', 'administrator', '2016-11-29', 'M_MattBellamyMuseSolo.jpg', 'muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse'),
(21, 'coba tinymce', 'administrator', '2016-11-29', 'Book-360x360.jpg', '<p>tinymce tinymce tinymce tinymce tinymce tinymce tinymce tinymce tinymce tinymce</p>'),
(22, 'tinymce coba', 'administrator', '2016-11-29', '7.jpg', '<p>cobaaaaaaa cobaaaaa cobaaaaaaa cobaaaaa cobaaaaaaa cobaaaaa cobaaaaaaa cobaaaaa cobaaaaaaa cobaaaaa <em>tinymce</em></p>'),
(23, 'tinymce bold', 'administrator', '2016-11-29', '344ddf4f0b36ebd98d14f3c001c23493.jpg', '<p>cobaaa cobaaaaaaa cobaaaaa cobaaaaaaa cobaaaaa cobaaaaaaa cobaaaaa cobaaaaaaa cobaaaaa cobaaaaaaa cobaaaaa <strong>tinymce</strong></p>'),
(24, 'tinymce all', 'administrator', '2016-11-29', '20151014_561e2d21d1f55.png', '<p>cobaaaaaaa cobaaaaa cobaaaaaaa cobaaaaa cobaaaaaaa cobaaaaa cobaaaaaaa cobaaaaa cobaaaaaaa cobaaaaa cobaaaaaaa cobaaaaa <strong>tinymce <em>tinymce <span style="text-decoration: underline;">tinymce</span></em></strong></p>'),
(25, 'jare eco', 'administrator', '2016-11-30', '344ddf4f0b36ebd98d14f3c001c23493.jpg', '<p>jare eco jare eco jare eco jare eco jare eco jare eco jare eco jare eco jare eco jare eco</p>'),
(26, 'judul baru', 'administrator', '2016-12-01', 'M_MattBellamyMuseSolo.jpg', '<p>muse baru muse baru muse baru muse baru muse baru muse baru muse baru muse baru muse baru muse baru muse baru muse baru muse baru muse baru muse baru muse baru</p>'),
(27, 'new judul', 'administrator', '2016-12-01', '746891596cbb5288dd1d96a428607d2188a117e4.jpg', '<p>new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul ne'),
(28, 'new judul judul', 'administrator', '2016-12-01', '71fc393f13ba04e6d0517a4c3a729080.jpg', '<p>new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul new judul ne'),
(29, 'judul new', 'administrator', '2016-12-01', 'M_MattBellamyMuseSolo.jpg', '<p>judulllllll new judul new judulllllll new judul new judulllllll new judul new judulllllll new judul new judulllllll new judul new judulllllll new judul new judulllllll new judul new judulllllll new judul new judulllllll new judul new judulllllll new ju'),
(30, 'new berita', 'administrator', '2016-12-01', 'nebulaFest-muse_01.jpg', '<p>new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita new berita');

-- --------------------------------------------------------

--
-- Table structure for table `docreins`
--

CREATE TABLE IF NOT EXISTS `docreins` (
`id` int(10) NOT NULL,
  `namedoc` varchar(255) NOT NULL,
  `reins` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `docreins`
--

INSERT INTO `docreins` (`id`, `namedoc`, `reins`) VALUES
(4, 'document reinstra', 'magnet 1.pdf'),
(5, 'document reinstra', 'MAKE A DIFFERENCE - RURAL TRANSFORM EVENT.pdf'),
(6, 'document reinstra', 'PANDUAN LOMBA POSTER (2).pdf'),
(7, 'document reinstra', 'ezycraft valentines card rose pop up template 1.pdf'),
(8, 'document reinstra', 'kalakad1516.pdf'),
(9, 'document reinstra', 'kalakad1617.pdf'),
(10, 'document reinstra', 'Penerimaan-Proposal-PKM-Tahun-2016-pendanaan-Tahun-2017_01.pdf'),
(11, 'document reinstra', 'Peraturan Ormawa POLINDRA.pdf'),
(12, 'document reinstra', 'alur_skkm.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `docrip`
--

CREATE TABLE IF NOT EXISTS `docrip` (
`id` int(10) NOT NULL,
  `namedoc` varchar(255) NOT NULL,
  `rip` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `docrip`
--

INSERT INTO `docrip` (`id`, `namedoc`, `rip`) VALUES
(1, 'document rip', 'alur_skkm.pdf'),
(2, 'document rip', 'alur_skkm.pdf'),
(3, 'document rip', 'BUKU_PANDUAN_PENULISAN_LAPORAN_KERJA_PRA.pdf'),
(6, 'document rip', 'IPK-HARTONO-Teknik Informatika.pdf'),
(7, 'document rip', 'kalakad1516.pdf'),
(8, 'document rip', 'kalakad1617.pdf'),
(9, 'document rip', 'ezycraft valentines card rose pop up template 1.pdf'),
(10, 'document rip', 'ezycraft valentines card rose pop up template 2.pdf'),
(11, 'document rip', 'kalakad1516.pdf'),
(12, 'document rip', 'kalakad1516.pdf'),
(13, 'document rip', 'alur_skkm.pdf'),
(14, 'document rip', 'ezycraft valentines card rose pop up template 1.pdf'),
(15, 'document rip', 'ezycraft valentines card rose pop up template 2.pdf'),
(16, 'document rip', 'kalakad1516.pdf'),
(17, 'document rip', 'kalakad1617.pdf'),
(18, 'document rip', 'magnet 1.pdf'),
(19, 'document rip', 'MAKE A DIFFERENCE - RURAL TRANSFORM EVENT.pdf'),
(20, 'document rip', 'PANDUAN LOMBA POSTER (2).pdf'),
(21, 'document rip', 'Pedoman-PKM-2016-belmawa.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `docsop`
--

CREATE TABLE IF NOT EXISTS `docsop` (
`id` int(10) NOT NULL,
  `namedoc` varchar(255) NOT NULL,
  `sop` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `docsop`
--

INSERT INTO `docsop` (`id`, `namedoc`, `sop`) VALUES
(1, 'document sop', 'surat-undangan-tingkat-III.pdf'),
(2, 'document sop', 'surat_undangan_alumni.pdf'),
(3, 'document sop', 'Peraturan Ormawa POLINDRA.pdf'),
(4, 'document sop', 'Penerimaan-Proposal-PKM-Tahun-2016-pendanaan-Tahun-2017_01.pdf'),
(5, 'document sop', 'alur_skkm.pdf'),
(6, 'document sop', 'ezycraft valentines card rose pop up template 1.pdf'),
(7, 'document sop', 'kalakad1516.pdf'),
(8, 'document sop', 'kalakad1617.pdf'),
(9, 'document sop', 'ezycraft valentines card rose pop up template 2.pdf'),
(10, 'document sop', 'alur_skkm.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE IF NOT EXISTS `galery` (
`id` int(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `nameph` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `photo`, `nameph`, `des`, `tgl`) VALUES
(6, '19b8df41eab278b690cfc87a0d3ff81c.jpg', 'muse', 'muse muse muse muse muse muse', '2016-11-26'),
(7, '71fc393f13ba04e6d0517a4c3a729080.jpg', 'muse', 'muse muse muse muse muse muse', '2016-11-26'),
(8, 'Images-3.jpg', 'muse', 'muse muse muse muse muse muse', '2016-11-26'),
(9, 'M_MattBellamyMuseSolo.jpg', 'muse', 'muse muse muse muse muse muse', '2016-11-26'),
(10, 'nebulaFest-muse_01.jpg', 'muse', 'muse muse muse muse muse muse', '2016-11-26'),
(12, 'tumblr_mb2877VQ7h1qfzwmwo1_250.jpg', 'muse', 'muse muse muse muse muse muse', '2016-11-26'),
(15, '746891596cbb5288dd1d96a428607d2188a117e4.jpg', 'muse', '<p>muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse muse</p>', '2016-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE IF NOT EXISTS `penelitian` (
`id` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `namepen` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pesan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`id`, `tgl`, `namepen`, `file`, `judul`, `pesan`) VALUES
(5, '2016-12-01', 'hartono', 'alur_skkm.pdf', 'tes', 'tes'),
(6, '2016-12-01', 'hartono', 'IPK-HARTONO-Teknik Informatika.pdf', 'tes tes', 'tes tes'),
(7, '2016-12-01', 'hartono', 'kalakad1617.pdf', 'tes tes tes', 'tes tes tes');

-- --------------------------------------------------------

--
-- Table structure for table `pengabdian`
--

CREATE TABLE IF NOT EXISTS `pengabdian` (
`id` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `namepeng` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pesan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pengabdian`
--

INSERT INTO `pengabdian` (`id`, `tgl`, `namepeng`, `file`, `judul`, `pesan`) VALUES
(1, '2016-12-01', 'hartono', 'alur_skkm.pdf', 'tes', 'tes'),
(2, '2016-12-01', 'hartono', 'IPK-HARTONO-Teknik Informatika.pdf', 'tes tes', 'tes tes'),
(3, '2016-12-01', 'hartono', 'kalakad1516.pdf', 'tes tes tes', 'tes tes tes');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
`id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nameslid` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `img`, `nameslid`) VALUES
(2, 'slide1.png', 'slides1'),
(3, 'slide2.png', 'slides2'),
(4, 'slide3.png', 'slides3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'hartono', 'hartono'),
(4, 'mbaicha', 'mbaicha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docreins`
--
ALTER TABLE `docreins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docrip`
--
ALTER TABLE `docrip`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docsop`
--
ALTER TABLE `docsop`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengabdian`
--
ALTER TABLE `pengabdian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `docreins`
--
ALTER TABLE `docreins`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `docrip`
--
ALTER TABLE `docrip`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `docsop`
--
ALTER TABLE `docsop`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pengabdian`
--
ALTER TABLE `pengabdian`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
