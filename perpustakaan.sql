-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2024 at 07:26 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `no` varchar(10) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`no`, `nama`) VALUES
('A0001', 'Budi'),
('A0002', 'Hani');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `pengarang` varchar(30) DEFAULT NULL,
  `penerbit` varchar(30) DEFAULT NULL,
  `dipinjam` varchar(1) DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `dipinjam`, `tgl_kembali`) VALUES
(1, 'The Chronicles of Audy: 4R', 'Orizuka', 'Gramedia Pustaka Utama', NULL, NULL),
(2, 'Aroma Karsa', 'Dee Lestari', 'Bentang Pustaka', '', NULL),
(3, 'Heartbreak Motel', 'Putu Fajar Arcana', 'Grasindo', 'Y', '2024-01-15'),
(4, 'Ada Laut Bercerita', 'Leila S. Chudori', 'Kepustakaan Populer Gramedia', NULL, NULL),
(5, 'Home Sweet Loan', 'Tere Liye', 'Gramedia Pustaka Utama', NULL, NULL),
(6, 'Supernova: Petir', 'Dee Lestari', 'Bentang Pustaka', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` date DEFAULT NULL,
  `anggota` varchar(10) DEFAULT NULL,
  `buku` int(11) DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `tgl`, `anggota`, `buku`, `tgl_kembali`, `status`) VALUES
(1, '2024-01-08', 'A0001', 3, '2024-01-15', '0'),
(2, '2024-01-08', 'A0002', 2, '2024-01-15', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
