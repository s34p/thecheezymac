-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2014 at 04:09 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thecheezymac`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `body` text NOT NULL,
  `col_num` int(11) NOT NULL,
  `edited_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `title`, `image`, `body`, `col_num`, `edited_by`, `created_at`, `updated_at`) VALUES
(1, 'story', 'Our Story', 'http://thecheezymac.studio34productions.com/uploads/Pages/storypic.jpg', '<h3>Our Belief</h3>\r\n<p>What is the ultimate comfort food? It&rsquo;s food that evokes those warm, nostalgic and sentimental feelings that positively peeks the emotions from the greatest moments of our lives. It&rsquo;s &ldquo;positive&rdquo; food that creates &ldquo;positive&rdquo; feelings. Here, at The Cheezy Mac, we are enthusiasts, specializing in the creation of what we believe is the ultimate comfort food, the best macaroni and cheese around!</p>\r\n<h3>The Cheezy Mac Difference</h3>\r\n<p>What makes Cheezy Mac so special? It is our commitment to using only the finest ingredients in all of our recipes. This means using only the freshest cheeses, grated daily &ndash; from Sharp Cheddar, Swiss, Provolone, Colby and Pepper Jack to unique Artisan cheeses. Using only ribbed, corkscrew shaped macaroni, which in our opinion is the ultimate shape for holding all of our cheesy goodness. And of course our sauces - simply put, they are to-die-for! After all, we have to back up our name with out-of-this-world recipes that please even the most sophisticated palates.</p>\r\n<h3>The Cheezy Mac Choice</h3>\r\n<p>The Cheezy Mac is not about just coming in and picking from a menu. It&rsquo;s about choice. Choose from one of our many Chef&rsquo;s Specialties like our &ldquo;Pulled Pork Macaroni Grilled Cheese Sandwich with Grippo&rsquo;s Potato Chips&rdquo; mmmmmmmmm, sorry, got distracted there for a second. Or Create Your Own Dish! One of our Sous-Chefs will assist you as you choose from an array of fresh topping and proteins to assemble the perfect, custom Cheezy Mac dish for your particular taste.</p>\r\n<h3>Wait, I&rsquo;m not finished</h3>\r\n<p>We believe in generous portions so if you can&rsquo;t finish your meal in one sitting, no worries. Everything is served in an ecofriendly dish that you can just put a lid on and take with you.</p>\r\n<h3>Are you Cheezy?</h3>\r\n<p>We assume you are because you''re here, reading this. We hope you enjoy your Cheezy Mac dish today and look forward to seeing you again. Be sure to tell your friends and family so they can be Cheezy too!</p>', 2, '', '2014-12-22 00:00:00', '2014-12-23 03:04:54'),
(2, 'giftcard', 'Gift Card', 'http://thecheezymac.studio34productions.com/uploads/Pages/giftcard.png', '<h3>GIFT CARDS!</h3>\r\n\r\n                           <p>\r\nMac & Cheese ... The ultimate comfort food! Just saying it makes you smile. We hope you love our twist on the old classic so much that you want to share it with others. Now you can! Buy a Gift Card and treat someone special to a dinner to remember at The Cheezy Mac!                           </p>\r\n', 2, '', '2014-12-22 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
