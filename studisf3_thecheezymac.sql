-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2014 at 08:33 AM
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
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admins', NULL, '2014-12-12 05:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category_id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(6, 5, 'Childrens Choice', '<p>Mac n Cheese, Fried Macaroni Fritters, or MacGrilled Cheese, Chocolate Chip Cookie, choice of Milk, Juice box, or Fountain Drink</p>', '', '2014-12-15 21:46:25', '2014-12-15 21:46:25'),
(7, 6, 'Buffalo Wings', '<p>Fried Buffalo Style Chicke drenched in our Special Blue Cheese Sauce and topped with more cheese and breadcrumbs. (Buffalo, New York)</p>', '', '2014-12-15 21:50:02', '2014-12-15 21:50:02'),
(8, 6, 'Southwestern Taco', '<p>Inspired by our owners childhood in the Southwest, this is his version of comfort food. Your Choice of Chicken, Ground Beef or Chilli. (Santa Fe, New Mexico)</p>', '', '2014-12-15 21:51:12', '2014-12-15 21:51:12'),
(9, 6, 'Chicago Mac Dog', '<p>The Cheezy Mac hits it out of the Part with 100% Kosher Ball Park Hotdogs and all the good Fixings just like in Chicago. (Chicago, Illinois)</p>', '', '2014-12-15 21:52:18', '2014-12-15 21:52:18'),
(10, 6, 'Chicken Pot Pie', '<p>One of our most popular dishes! We took Grandma''s Recipe, and Mac''d it up! (Rome, Italy)</p>', '', '2014-12-15 21:52:59', '2014-12-15 21:52:59'),
(11, 6, 'Noodles Orlean', '<p>Our Salute to the Saints and the people of the Bayou. Cajun Good!</p>', '', '2014-12-15 21:53:28', '2014-12-15 21:53:28'),
(12, 6, 'Chicken Pesto Mac', '<p>Fresh homemade Pesto Sauce mixed with an Aged White Cheddar and topped with Grilled Chicken. (Genoa,Northern Italy)</p>', '', '2014-12-15 21:54:20', '2014-12-15 21:54:20'),
(13, 6, 'Pulled Pork', '<p>A salute to the South. Original Mac w/ Pulled Pork piled on top &amp; Blanket of Grippo''s BBQ Potato Chips. (South Carolina)</p>', '', '2014-12-15 21:55:40', '2014-12-15 21:55:40'),
(14, 6, 'Cheeseburger Deluxe', '<p>This is definitely not like any other Cheeseburger you have ever had! (Pasadena, California)</p>', '', '2014-12-15 21:56:37', '2014-12-15 21:56:37'),
(15, 6, 'New World Lasagna', '<p>Where the city of Naples meets the city of Cheezy Mac, with our New World Version. (Naples, Italy)</p>', '', '2014-12-15 21:57:40', '2014-12-15 21:57:40'),
(16, 5, 'Mini Mac N'' Cheese', '<p>Smaller portion of or original Mac N'' Cheese.</p>', '', '2014-12-15 21:59:00', '2014-12-15 21:59:00'),
(17, 5, 'MacGrilled Cheese', '<p>A kid friendly size sandwich.</p>', '', '2014-12-15 21:59:41', '2014-12-15 21:59:41'),
(18, 9, 'Pic 2 ', '<p>Mini Mac N'' Cheese</p>\r\n<p>Half Salad</p>\r\n<p>Cup of Soup</p>', '', '2014-12-15 22:00:39', '2014-12-15 22:00:39'),
(19, 7, 'Chocolate Chip Cookies (3)', '<p>3 Delicious Chocolate Chip Cookies</p>', '', '2014-12-15 22:01:56', '2014-12-15 22:01:56'),
(20, 8, 'Heavenly Hash Bar', '<p>So goey and delicious</p>', '', '2014-12-15 22:02:36', '2014-12-15 22:02:36'),
(21, 8, 'Mac N'' Cheese Cake', '<p>Cheese Cake</p>', '', '2014-12-15 22:03:03', '2014-12-15 22:03:03'),
(22, 8, 'Big Crisp', '<p>...</p>', '', '2014-12-15 22:03:23', '2014-12-15 22:03:23'),
(23, 11, 'Fried Macaroni Fritter (3)', '<p>...</p>', '', '2014-12-15 22:06:10', '2014-12-15 22:06:10'),
(24, 11, 'Southern Sweet Coleslaw', '<p>...</p>', '', '2014-12-15 22:08:48', '2014-12-15 22:08:48'),
(25, 11, 'Roasted Corn', '<p>...</p>', '', '2014-12-15 22:09:39', '2014-12-15 22:09:39'),
(26, 11, 'Fruit Cup', '<p>...</p>', '', '2014-12-15 22:09:51', '2014-12-15 22:09:51'),
(27, 11, 'Southwestern Chipotle Pasta', '<p>...</p>', '', '2014-12-15 22:10:11', '2014-12-15 22:10:11'),
(28, 7, 'Texas Cheezy Toast', '<p>...</p>', '', '2014-12-15 22:10:34', '2014-12-15 22:10:34'),
(29, 11, 'Cheezy Mac Rolls (3)', '<p>...</p>', '', '2014-12-15 22:10:52', '2014-12-15 22:10:52'),
(30, 7, 'Step 1: Choose Your Noodle', '<p>Original Cavatappi Noodle</p>\r\n<p>Cavatappi Wheat Noodle</p>\r\n<p>Penne<strong> Gluten-Free</strong> Noodle</p>\r\n<p>Salad Greens</p>', '', '2014-12-15 22:13:13', '2014-12-15 22:13:13'),
(31, 7, 'Step 2: Choose up to 2 Cheeses or Sauces', '<p>White Aged Sharp Cheddar</p>\r\n<p>Yellow Cheddar</p>\r\n<p>Blue Cheese</p>\r\n<p><span style="color: #800080;"><strong>Gluten-Free</strong></span></p>\r\n<p>Chipotle</p>\r\n<p>Provolone</p>\r\n<p>Ghost Pepper Jack</p>\r\n<p>Ricotta</p>\r\n<p>Pink Sauce</p>\r\n<p><span style="color: #ff0000;">(Additional Cheeses/sauces $.75 each)</span></p>', '', '2014-12-15 22:15:17', '2014-12-15 22:15:17'),
(32, 7, 'Step 3: Choose up to 4 Ingredients', '<p>Black Olives</p>\r\n<p>Shredded Carrots</p>\r\n<p>Chopped Celery</p>\r\n<p>Broccoli Florets</p>\r\n<p>Red Cabbage</p>\r\n<p>Peas</p>\r\n<p>Fresh Sliced Mishrooms</p>\r\n<p>Roasted Corn</p>\r\n<p>Vidalia Onions</p>\r\n<p>Green Onions</p>\r\n<p>Red Onions</p>\r\n<p>Bell Peppers</p>\r\n<p>Jalapeno Peppers</p>\r\n<p>Pablano Peppers</p>\r\n<p>Roasted Red Peppers</p>\r\n<p>Sun Dried Tomatoes</p>\r\n<p>Diced Tomatoes</p>\r\n<p>Pico De Gallo</p>\r\n<p>Fried Crispy Onions</p>\r\n<p>Crumbled Pie Crust</p>\r\n<p>Fritos Corn Chips</p>\r\n<p>Grippo''s BBQ Potato Chips</p>\r\n<p>Chopped Walnuts</p>\r\n<p>Black Bean</p>', '', '2014-12-15 22:17:19', '2014-12-15 22:17:19'),
(33, 7, 'Step 4', '<h2><strong><span style="color: #ff0000;">Choose Your Protien</span></strong></h2>\r\n<p>Ham</p>\r\n<p>Chopped Steak</p>\r\n<p>Pulled Pork</p>\r\n<p>Andouille Sausage</p>\r\n<p>100% Kosher Hotdogs</p>\r\n<p>Bacon</p>\r\n<p>Hamburger</p>\r\n<p>Grilled Chicken</p>\r\n<p>Fried Chicken</p>\r\n<p>Chili</p>\r\n<p>Seasonal Chef''s Choices</p>\r\n<p>&nbsp;</p>\r\n<h2><strong>Make It 2 Ways</strong></h2>\r\n<h3><span style="color: #ff0000;">(Ask about our Mac Grilled Cheese)</span></h3>\r\n<p>$2 Upcharge</p>\r\n<p>&nbsp;</p>', '', '2014-12-15 22:19:59', '2014-12-15 22:19:59'),
(34, 10, 'Fountain Drinks', '<h3><strong>Coke Products</strong></h3>\r\n<h3><span style="color: #ff0000;">$1.79 Kids Size<br />$2.19 24 oz.</span></h3>\r\n<p><span style="color: #000000;">Apple Juice</span></p>\r\n<p><strong><span style="color: #ff0000;">Iced Tea 24 oz.</span></strong></p>\r\n<p><span style="color: #ff0000;"><span style="color: #000000;">1% Milk or Chocolate Milk</span><br /><strong>$2.49</strong></span></p>', '', '2014-12-15 22:21:33', '2014-12-15 22:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `menu_categories`
--

DROP TABLE IF EXISTS `menu_categories`;
CREATE TABLE IF NOT EXISTS `menu_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `menu_categories`
--

INSERT INTO `menu_categories` (`id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Specials', 'Specials', '2014-12-13 13:04:57', '2014-12-13 13:04:57'),
(5, 'KidsMeals', 'Kids Meals', '2014-12-13 13:06:45', '2014-12-15 21:46:44'),
(6, 'FoodForThought', 'Food For Thought', '2014-12-15 21:46:57', '2014-12-15 21:46:57'),
(7, 'BuildYourOwn', 'Build Your Own', '2014-12-15 21:47:07', '2014-12-15 21:47:07'),
(8, 'YummyTreats', 'Yummy Treats', '2014-12-15 21:47:39', '2014-12-15 21:47:39'),
(9, 'Combos', 'Combos', '2014-12-15 21:47:48', '2014-12-15 21:47:48'),
(10, 'Drinks', 'Drinks', '2014-12-15 21:47:56', '2014-12-15 21:47:56'),
(11, 'Sides', 'Sides', '2014-12-15 22:05:35', '2014-12-15 22:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2012_12_06_225921_migration_cartalyst_sentry_install_users', 1),
('2012_12_06_225929_migration_cartalyst_sentry_install_groups', 1),
('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot', 1),
('2012_12_06_225988_migration_cartalyst_sentry_install_throttle', 1),
('2014_12_11_224216_create_news_table', 2),
('2014_12_12_195834_create_menu_table', 2),
('2014_12_13_002803_create_menuCategory_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `author`, `created_at`, `updated_at`) VALUES
(1, 'What’s Up Cuisine: From country ham to two-story ice   cream lounge, food is on the move', '<p><em><strong>Mac and Cheese lovers rejoice</strong></em></p>\r\n<p>A new restaurant offering gourmet macaroni and cheese is coming to Lexington in January.</p>\r\n<p>The Cheezy Mac will open in front of the Kroger store on Richmond Road. Reports indicate that the owner hopes to open six to eight more restaurants of the same kind in the area over the next two years.</p>', 'KYForward', '2014-10-23 06:00:00', '2014-12-15 20:40:44'),
(2, 'New restaurant for mac and cheese lovers coming to Lexington', '<p><strong>LEXINGTON, Ky. (WKYT)-</strong> There''s a new restaurant coming to Lexington and it''s perfect for mac</p>\r\n<p>and cheese lovers.</p>\r\n<p>The Cheezy Mac will offer gourmet macaroni and cheese.</p>\r\n<p>The restaurant will open in January in front of the Kroger on Richmond Road.</p>\r\n<p>Our partners at the the Lexington Herald-Leader report, the owner hopes to open six to eight more restaurants in the area over the next two years.</p>', 'WKYT', '2014-09-18 06:00:00', '2014-12-15 20:42:57'),
(3, 'The Cheezy Mac', '<p>A new restaurant coming to Lexington seeks to hit you right in your comfort zone: The Cheezy Mac will offer gourmet macaroni and cheese in a fast-casual conceptthat lets you build your perfect mac.</p>\r\n<p>The first restaurant will open in January in front of Kroger on Richmond Road, owner Jerry Adamany said, and he hopes to have six to eight more in Central Kentucky in the next two years. The next location is likely to be near the University of Kentucky.</p>\r\n<p>Customers can pick noodles, the type of cheese or other sauce, and toppings for about $6.99; add meat for $2 more. It''s all topped with bread crumbs and more cheese, broiled to melt, and is brought to your table piping hot, with a roll, in seven minutes, he said.</p>\r\n<p>Why macaroni and cheese? Because it''s everywhere, he said, but it isn''t usually very good. "It''s a comfort food, and it''s popular," he said. "Let''s turn it into a hearty comfort food, with lots of options."</p>\r\n<p>Janet Patton: (859) 231-3264. Twitter: @janetpattonhl.</p>', 'Janet Patton - Kentucky.com', '2014-09-18 06:00:00', '2014-12-15 20:45:38'),
(4, 'Cheesy Mac to open in Lexington Ky', '<p>We seem to attract the newest and trendiest restaurants from fast casual chains to more upscale venues. It&rsquo;s apparent that young franchises and brand new ones see Lexington as a great place to test the market before expanding nationwide. For example Coba Cocina and Shakespeare and Co. opened their very first stores here with plans to expand the concept to other locales. Shakespeare already had a chain of restaurants overseas before choosing Lexington for their first U.S. store (a second one has since opened across town). The latest entry into our market is Cheesy Mac which will be serving gourmet macaroni and cheese starting in January.</p>\r\n<p>Winter is the perfect time of year to test a menu that will no doubt be full of comfort food options. Diners visiting this fast casual restaurant will get to choose the type of noodles, cheese, sauce, and even add meat to their dish. Their entree is then topped with bread crumbs, more cheese and broiled. Meanwhile, the customer pays for the order and sits down to await quick delivery of the meal to the table.</p>\r\n<p>Cheesy Mac will open in the Kroger plaza on Richmond Road. This shopping center is near some great neighborhoods, especially if you are a first time homebuyer. Residents enjoy a full range of shops in the immediate area including a Walmart, Baskin Robbins, Porter Paints, and much more. This area of Richmond Road is near Man-o-War and the many office and medical buildings off Blazer Road. It is also convenient to downtown and Hamburg.</p>', 'Donna Elder', '2014-10-06 06:00:00', '2014-12-15 20:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 2, '76.177.242.110', 0, 0, 0, NULL, NULL, NULL),
(2, 3, '173.190.124.106', 0, 0, 0, NULL, NULL, NULL),
(3, 2, '173.190.124.106', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(2, 'rrafiatech@gmail.com', '$2y$10$gme3WPCtrr.ofr9Z2SVJluIP1qFR9rjF0zCXHvtbj8KL2siIOHELG', NULL, 1, NULL, NULL, '2014-12-15 20:46:50', '$2y$10$jrGFZnKPct8H7YoiSWioheVZduzsOth5spovYYWPt8MrsF63tIXQG', NULL, 'Rachid', 'Rafia', '2014-12-13 05:24:59', '2014-12-15 20:46:50'),
(3, 'rmork07@gmail.com', '$2y$10$uToG2PwP1eRFZ45zi4aAHO68OQFOpwZLeTI6ZGjhRt9fu0sE7IjaK', NULL, 1, NULL, NULL, '2014-12-15 21:42:09', '$2y$10$KK650osglC7T9MKPFA2Vt.gwA70qyce/QjfAuD/2jKeiJBMCX1YVe', NULL, 'Ryan', 'Mork', '2014-12-13 13:02:02', '2014-12-15 21:42:09'),
(4, 'pmahan@studio34productions.com', '$2y$10$.YTZA7d9YCmaYDUoWH7bR.gB2uKjK7PSRGS9DCEuZ1yGN7PxGCGke', NULL, 1, NULL, NULL, NULL, NULL, NULL, 'Patrick', 'Mahan', '2014-12-13 13:02:44', '2014-12-13 13:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(2, 1),
(3, 1),
(4, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;