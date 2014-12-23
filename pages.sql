-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2014 at 09:15 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `title`, `image`, `body`, `col_num`, `edited_by`, `created_at`, `updated_at`) VALUES
(1, 'story', 'Our Story', 'http://thecheezymac.studio34productions.com/uploads/Pages/storypic.jpg', '<h3>Our Belief</h3>\r\n<p>What is the ultimate comfort food? It&rsquo;s food that evokes those warm, nostalgic and sentimental feelings that positively peeks the emotions from the greatest moments of our lives. It&rsquo;s &ldquo;positive&rdquo; food that creates &ldquo;positive&rdquo; feelings. Here, at The Cheezy Mac, we are enthusiasts, specializing in the creation of what we believe is the ultimate comfort food, the best macaroni and cheese around!</p>\r\n<h3>The Cheezy Mac Difference</h3>\r\n<p>What makes Cheezy Mac so special? It is our commitment to using only the finest ingredients in all of our recipes. This means using only the freshest cheeses, grated daily &ndash; from Sharp Cheddar, Swiss, Provolone, Colby and Pepper Jack to unique Artisan cheeses. Using only ribbed, corkscrew shaped macaroni, which in our opinion is the ultimate shape for holding all of our cheesy goodness. And of course our sauces - simply put, they are to-die-for! After all, we have to back up our name with out-of-this-world recipes that please even the most sophisticated palates.</p>\r\n<h3>The Cheezy Mac Choice</h3>\r\n<p>The Cheezy Mac is not about just coming in and picking from a menu. It&rsquo;s about choice. Choose from one of our many Chef&rsquo;s Specialties like our &ldquo;Pulled Pork Macaroni Grilled Cheese Sandwich with Grippo&rsquo;s Potato Chips&rdquo; mmmmmmmmm, sorry, got distracted there for a second. Or Create Your Own Dish! One of our Sous-Chefs will assist you as you choose from an array of fresh topping and proteins to assemble the perfect, custom Cheezy Mac dish for your particular taste.</p>\r\n<h3>Wait, I&rsquo;m not finished</h3>\r\n<p>We believe in generous portions so if you can&rsquo;t finish your meal in one sitting, no worries. Everything is served in an ecofriendly dish that you can just put a lid on and take with you.</p>\r\n<h3>Are you Cheezy?</h3>\r\n<p>We assume you are because you''re here, reading this. We hope you enjoy your Cheezy Mac dish today and look forward to seeing you again. Be sure to tell your friends and family so they can be Cheezy too!</p>', 2, '', '2014-12-22 00:00:00', '2014-12-23 03:04:54'),
(2, 'giftcard', 'Gift Card', 'http://thecheezymac.studio34productions.com/uploads/Pages/giftcard.png', '<h3>GIFT CARDS!</h3>\r\n\r\n                           <p>\r\nMac & Cheese ... The ultimate comfort food! Just saying it makes you smile. We hope you love our twist on the old classic so much that you want to share it with others. Now you can! Buy a Gift Card and treat someone special to a dinner to remember at The Cheezy Mac!                           </p>\r\n', 2, '', '2014-12-22 00:00:00', '0000-00-00 00:00:00'),
(3, 'app', 'Download Our App', 'http://thecheezymac.studio34productions.com/uploads/Pages/storypic.jpg', '<h3>Ordering Made Easy</h3>\r\n\r\n                                           <p>\r\nDelicious Mac & Cheese is just a tap away! Download The Cheezy Mac app on your iPhone or Android phone, then Build-Your-Own or choose one of our Chef’s Specialities. We’ll have it piping hot and ready to eat when you arrive! Ordering online has never been faster or easier!                                            </p>\r\n\r\n                                        <p>\r\n                                        <a href="https://mobileapp.vivonet.com/api/2.1/mobile/download?bundle=com.vivomobile.thecheezymac" target="_blank"><img  src="/img/applogo.png" alt="Download Our App"/></a>\r\n                                        </p>', 2, '', '2014-12-23 00:00:00', '0000-00-00 00:00:00'),
(4, 'press-media', 'Press / Media', 'http://thecheezymac.studio34productions.com/uploads/Pages/storypic.jpg', '<h3>Press/Media!</h3>\r\n\r\n                                           <p>\r\nWe opened The Cheezy Mac to share our love for gourmet Macaroni & Cheese. And we’re thrilled to see that others love our unique twist on this old classic! Check out our press clippings and see what others are saying about us…\r\n</p>\r\n<p>\r\nQuestions? We’d love to talk. Media inquiries may be directed to press@thecheezymac.com\r\n</p>\r\n', 2, '', '2014-12-23 00:00:00', '0000-00-00 00:00:00'),
(5, 'club', 'Loyalty club', 'http://thecheezymac.studio34productions.com/uploads/Pages/storypic.jpg', '<h3>LOYALTY CLUB</h3>\r\n<p>Mac &amp; Cheese lovers unite! Sign-up to receive the latest news, upcoming events, weekly specials, and exclusive &ldquo;members only&rdquo; coupons offered throughout the year.&nbsp;Complete the form below to become a loyalty club member and start earning points today!</p>\r\n<p>&nbsp;</p>\r\n<h3>HOW IT WORKS</h3>\r\n<p dir="ltr">Earn 1 point for every dollar you spend.<br /><strong>9</strong><strong>0 points = free entree&nbsp;</strong>($8.99 value)</p>\r\n<p dir="ltr">Simply fill out the form below to &ldquo;Join the Club&rdquo; and instantly receive a&nbsp;claim voucher. Then, hand that voucher to your cashier to receive your Loyalty Club Card and also&nbsp;<strong>one free drink</strong>!</p>', 2, '', '2014-12-23 00:00:00', '2014-12-23 16:19:22'),
(6, 'franchise', 'Franchise Info', 'http://thecheezymac.studio34productions.com/uploads/Pages/storypic.jpg', '<h3>Franchise Info!</h3>\r\n\r\n                                           <p>\r\nHelp us spread the love of gourmet Mac & Cheese! Our business plan is designed for profit and growth. If you’d like to learn more about franchise opportunities, please fill out the Information Request form below, or contact our corporate office at 844-624-3399. We look forward to hearing from you!                                            </p>\r\n', 2, '', '2014-12-23 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
