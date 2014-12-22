-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2014 at 02:49 PM
-- Server version: 5.5.40-36.1-log
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studisf3_thecheezymac`
--

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

DROP TABLE IF EXISTS `winners`;
CREATE TABLE IF NOT EXISTS `winners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `recipeName` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `winningDate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `winners`
--

INSERT INTO `winners` (`id`, `fullName`, `image`, `recipeName`, `ingredients`, `winningDate`, `created_at`, `updated_at`) VALUES
(2, 'Jane Smith', 'http://thecheezymac.studio34productions.com/uploads/Winners/winnerphoto.jpg', 'Buffalo Chicken Mac N Cheese', '<ul>\r\n<li>Original Cavatapi Noodles</li>\r\n<li>White Aged Sharp Cheddar</li>\r\n<li>Blue Cheese</li>\r\n<li>Fresh Sliced Mushrooms</li>\r\n<li>Vidalia Onions</li>\r\n<li>Jalapeno Peppers</li>\r\n<li>Chopped Celery</li>\r\n<li>Buffalo Chicken</li>\r\n<li>Ranch Dressing</li>\r\n</ul>\r\n<p>This is my favorite dish. Great dish for a night of Basketball, friends, and fun! YUM!!!</p>', '2014-12-22', '2014-12-22 21:29:57', '2014-12-23 04:29:57');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
