-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2011 at 11:24 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_mahasiswa` (
  `nim` int(20) NOT NULL AUTO_INCREMENT,
  `nama_mhs` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `angkatan` int(5) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `nama_mhs`, `jurusan`, `angkatan`) VALUES
(70, 'Meris Kurniawan', 'Teknik Informatika', 2010),
(69, 'Dino Fajar', 'Teknik Informatika', 2010),
(67, 'Pingky Budiarti', 'Teknik Informatika', 2009),
(68, 'Sugeng Wijayadi', 'Teknik Informatika', 2009),
(66, 'Lina Hurin', 'Teknik Informatika', 2009),
(64, 'Untung Jasuli', 'Teknik Informatika', 2009),
(59, 'I Wayan Gede Suma Wijaya', 'Teknik Informatika', 2009),
(60, 'Willy Witanto', 'Teknik Informatika', 2009),
(61, 'Moh. Yusron Aminullah', 'Teknik Informatika', 2009),
(62, 'Okky Hadi Wibawa', 'Teknik Informatika', 2009),
(63, 'Puji Agustian AW', 'Teknik Informatika', 2009),
(73, 'M. Ulir Rifky', 'Teknik Informatika', 2010);
