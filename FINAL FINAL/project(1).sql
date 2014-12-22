-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2014 at 05:55 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nim` varchar(9) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `nim`, `nama`, `email`, `komentar`) VALUES
(3, '32130107', 'Stevanus', 'oracle_0610@yahoo.com', 'Wow !!'),
(4, '32130107', 'Stevanus', 'oracle_0610@yahoo.com', 'Nice !!!'),
(5, '32130107', 'Stevanus Marcellius', 'oracle_0610@yahoo.com', 'Good !!!');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `body` text NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `body`, `file`) VALUES
(7, 'Churreria', 'My Cafe', 'gambar/slider-3.jpg'),
(9, 'Churreria', 'My Menu', 'gambar/icon3.jpg'),
(10, 'Churreria', 'My Menu', 'gambar/logo.png'),
(11, 'Churreria', 'My Menu', 'gambar/Royal-Chocolate-small-210x150.jpg'),
(12, 'Churreria', 'My Map', 'gambar/map.png'),
(13, 'Churreria', 'My Menu', 'gambar/img_6295.jpg'),
(14, 'Churreria', 'My Menu', 'gambar/IMG_6806-210x150.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `user_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL,
  `Access` varchar(12) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`user_id`, `username`, `password`, `Access`) VALUES
(1, 'Steva0610', 'b754b9fec0047e635dc0d520c005447b', 'Admin'),
(2, 'daisy', 'ea76b14de538fb4c6811d480180e42b7', 'Admin'),
(3, 'shendy', '71946d6f6c5fd7e031f49b5191910e8b', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `menu_makanan`
--

CREATE TABLE IF NOT EXISTS `menu_makanan` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `menu_makanan` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `Keterangan` text NOT NULL,
  `Status` varchar(15) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `menu_makanan`
--

INSERT INTO `menu_makanan` (`code`, `menu_makanan`, `price`, `Keterangan`, `Status`) VALUES
(1, 'Churros', 35000, 'Best Seller', 'Done'),
(2, 'Apple Pie', 70000, 'Best Seller', 'Done'),
(3, 'Chocolate Lava', 120000, 'Best Seller', 'On Progress');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
