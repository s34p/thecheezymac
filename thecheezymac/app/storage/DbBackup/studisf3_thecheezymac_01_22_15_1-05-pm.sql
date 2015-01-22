-- MySQL dump 10.13  Distrib 5.5.40-36.1, for Linux (x86_64)
--
-- Host: localhost    Database: studisf3_thecheezymac
-- ------------------------------------------------------
-- Server version	5.5.40-36.1-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (4,'Mac and Cheese Lovers Rejoice','','<p><em><strong>Mac and Cheese lovers rejoice</strong></em></p>\r\n<p>A new restaurant offering gourmet macaroni and cheese is coming to Lexington in January.</p>\r\n<p>The Cheezy Mac will open in front of the Kroger store on Richmond Road. Reports indicate that the owner hopes to open six to eight more restaurants of the same kind in the area over the next two years.</p>','Donna Elder','2014-12-01 07:00:00','2014-12-21 12:02:08'),(5,'Cheezy Mac to Open in Lexington, KY','','<p>We seem to attract the newest and trendiest restaurants from fast casual chains to more upscale venues. It&rsquo;s apparent that young franchises and brand new ones see Lexington as a great place to test the market before expanding nationwide. For example Coba Cocina and Shakespeare and Co. opened their very first stores here with plans to expand the concept to other locales. Shakespeare already had a chain of restaurants overseas before choosing Lexington for their first U.S. store (a second one has since opened across town). The latest entry into our market is Cheesy Mac which will be serving gourmet macaroni and cheese starting in January.</p>\r\n<p>Winter is the perfect time of year to test a menu that will no doubt be full of comfort food options. Diners visiting this fast casual restaurant will get to choose the type of noodles, cheese, sauce, and even add meat to their dish. Their entree is then topped with bread crumbs, more cheese and broiled. Meanwhile, the customer pays for the order and sits down to await quick delivery of the meal to the table.</p>\r\n<p>Cheesy Mac will open in the Kroger plaza on Richmond Road. This shopping center is near some great neighborhoods, especially if you are a first time homebuyer. Residents enjoy a full range of shops in the immediate area including a Walmart, Baskin Robbins, Porter Paints, and much more. This area of Richmond Road is near Man-o-War and the many office and medical buildings off Blazer Road. It is also convenient to downtown and Hamburg.</p>','Donna Elder','2014-11-20 07:00:00','2014-12-21 14:26:43');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'rachid','Test',0,'2015-01-01 10:25:19','2015-01-01 10:25:19'),(2,'test','Testing',0,'2015-01-02 07:35:44','2015-01-02 07:35:44'),(3,'Jerry Adamany','test',0,'2015-01-02 12:08:53','2015-01-02 12:08:53'),(4,'Jerry Adamany','franchise test',0,'2015-01-02 12:09:27','2015-01-02 12:09:27'),(5,'Jerry Adamany','Catering Test',0,'2015-01-02 12:10:12','2015-01-02 12:10:12'),(6,'Rachid','testing',0,'2015-01-03 00:07:25','2015-01-03 00:07:25'),(7,'Jerry Adamany','Test Contact Us',0,'2015-01-03 02:26:42','2015-01-03 02:26:42'),(8,'Jerry Adamany','Test catering',0,'2015-01-03 02:27:11','2015-01-03 02:27:11'),(9,'Jerry Adamany','Test General',0,'2015-01-03 02:27:48','2015-01-03 02:27:48'),(10,'Jerry Adamany','Test Franchise',0,'2015-01-03 02:28:14','2015-01-03 02:28:14'),(11,'Jerry','Test',0,'2015-01-03 06:11:47','2015-01-03 06:11:47'),(12,'Sharon Galanis','Is MSG in any of your meals in seasonings, sauces or dressings?  I am highly reactive to MSG and would need to know this information.  Thank you.',0,'2015-01-04 08:00:39','2015-01-04 08:00:39'),(13,'test','test',0,'2015-01-06 21:46:38','2015-01-06 21:46:38'),(14,'tetst','Test General',0,'2015-01-06 21:47:08','2015-01-06 21:47:08'),(15,'geyet','Test Catering',0,'2015-01-06 21:47:34','2015-01-06 21:47:34'),(16,'hsjkhdoehdo','Test voice',0,'2015-01-06 21:48:09','2015-01-06 21:48:09'),(17,'John Noran','When\'re you going to be open?  I\'m excited to try this place out!!!!',0,'2015-01-17 22:52:47','2015-01-17 22:52:47'),(18,'Karen Breier','Are you open yet ?!?!',0,'2015-01-22 00:22:19','2015-01-22 00:22:19');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (5,'Tables and Chairs arrived!','http://thecheezymac.com/uploads/Gallery/IMG_4238.JPG','','2015-01-13 11:39:05','2015-01-13 11:39:05'),(6,'Who else is getting hungry?','http://thecheezymac.com/uploads/Gallery/IMG_4236.JPG','','2015-01-13 11:39:38','2015-01-13 11:39:38'),(8,'Check out the making of our Macaroni Mural (VIDEO)','http://thecheezymac.com/uploads/Gallery/IMG_4242(1).jpg','http://youtu.be/zJK7_G7MgXQ','2015-01-13 11:48:32','2015-01-15 08:27:12'),(10,'Counting the days till our Grand Opening!','http://thecheezymac.com/uploads/Gallery/IMG_4241(1).jpg','','2015-01-13 11:50:41','2015-01-13 11:50:41');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admins',NULL,'2014-12-12 05:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `weekly_special` tinyint(1) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (6,'6.99',0,5,'Childrens Choice','<p style=\"text-align: left;\">Mac n Cheeze, Fried Macaroni Fritters, or MacGrilled Cheeze, Chocolate Chip Cookie, choice of Milk, Juice box, or Fountain Drink</p>','','2014-12-15 21:46:25','2015-01-20 13:07:48',0),(7,'8.99',0,6,'Buffalo Wings','<p style=\"text-align: left;\">Fried Buffalo Style Chicken drenched in our Special Blue Cheeze Sauce and topped with more cheeze and breadcrumbs.</p>\r\n<p style=\"text-align: left;\"><strong>(Buffalo, New York)</strong></p>','http://thecheezymac.studio34productions.com/uploads/Menu%20Items/buffalo.jpg','2014-12-15 21:50:02','2015-01-20 12:53:31',1),(8,'8.99',0,6,'Southwestern Taco','<p style=\"text-align: left;\">Inspired by our owners childhood in the Southwest, this is his version of comfort food. Your Choice of Chicken, Ground Beef or Chilli.</p>\r\n<p style=\"text-align: left;\"><strong>(Scottsdale, Arizona)</strong></p>','http://thecheezymac.studio34productions.com/uploads/Menu%20Items/taco.jpg','2014-12-15 21:51:12','2015-01-02 23:00:39',2),(9,'8.99',0,6,'Chicago Mac Dog','<p style=\"text-align: left;\">The Cheezy Mac hits it out of the park with 100% Kosher Ball Park Hotdogs and all the good fixings just like in Chicago.</p>\r\n<p style=\"text-align: left;\"><strong>(Chicago, Illinois)</strong></p>','http://thecheezymac.studio34productions.com/uploads/Menu%20Items/chicagodog.jpg','2014-12-15 21:52:18','2015-01-20 12:54:30',3),(10,'8.99',0,6,'Chicken Pot Pie','<p style=\"text-align: left;\">One of our most popular dishes! We took Grandma\'s Recipe, and Mac\'d it up!</p>\r\n<p style=\"text-align: left;\"><strong>(Rome, Italy)</strong></p>','http://thecheezymac.studio34productions.com/uploads/Menu%20Items/potpie.jpg','2014-12-15 21:52:59','2015-01-02 23:01:00',4),(11,'8.99',0,6,'Noodles Orlean','<p style=\"text-align: left;\">Our Salute to the Saints and the people of the Bayou. Cajun Good!</p>\r\n<p style=\"text-align: left;\"><strong>(New Orleans, Louisiana)</strong></p>','http://thecheezymac.studio34productions.com/uploads/Menu%20Items/cajun.jpg','2014-12-15 21:53:28','2015-01-02 23:01:11',5),(12,'8.99',0,6,'Chicken Pesto Mac','<p style=\"text-align: left;\">Fresh homemade Pesto Sauce mixed with an Aged White Cheddar and topped with Grilled Chicken.</p>\r\n<p style=\"text-align: left;\"><strong>(Genoa, Northern Italy)</strong></p>','http://thecheezymac.studio34productions.com/uploads/Menu%20Items/pesto.jpg','2014-12-15 21:54:20','2015-01-02 23:01:25',6),(13,'8.99',0,6,'Pulled Pork','<p style=\"text-align: left;\">A salute to the South. Original Mac w/ Pulled Pork piled on top &amp; Blanket of Grippo\'s BBQ Potato Chips.</p>\r\n<p style=\"text-align: left;\"><strong>(South Carolina)</strong></p>','http://thecheezymac.studio34productions.com/uploads/Menu%20Items/porksand.jpg','2014-12-15 21:55:40','2015-01-02 23:01:39',7),(14,'8.99',0,6,'Cheezeburger Deluxe','<p style=\"text-align: left;\">This is definitely not like any other Cheezeburger you have ever had!</p>\r\n<p style=\"text-align: left;\"><strong>(Pasadena, California)</strong></p>','http://thecheezymac.studio34productions.com/uploads/Menu%20Items/cheeseburger.jpg','2014-12-15 21:56:37','2015-01-20 12:55:13',9),(15,'8.99',0,6,'New World Lasagna','<p style=\"text-align: left;\">Where the city of Naples meets the city of Cheezy Mac, with our New World Version.</p>\r\n<p style=\"text-align: left;\"><strong>(Naples, Italy)</strong></p>','http://thecheezymac.studio34productions.com/uploads/Menu%20Items/lasagna.jpg','2014-12-15 21:57:40','2015-01-02 23:02:55',10),(16,'4.99',0,5,'Mini Mac N\' Cheeze','<p style=\"text-align: left;\">Smaller portion of or original Mac N\' Cheeze. Your choice of cheeze and noodle.</p>','','2014-12-15 21:59:00','2015-01-20 13:07:30',0),(17,'4.99',0,5,'MacGrilled Cheeze','<p style=\"text-align: left;\">A kid friendly size sandwich. Mac &amp; Cheeze inside grilled cheeze bread. Your choice of cheeze &amp; noodle.</p>','','2014-12-15 21:59:41','2015-01-20 13:08:14',0),(18,'8.99',0,9,'The Best of Both Worlds','<h4 style=\"text-align: left;\"><span style=\"color: #ffff00;\">Pick 2</span></h4>\r\n<p style=\"text-align: left;\">Mini Mac N\' Cheeze</p>\r\n<p style=\"text-align: left;\">Half Salad</p>\r\n<p style=\"text-align: left;\">Cup of Soup</p>','','2014-12-15 22:00:39','2015-01-20 13:08:53',0),(20,'1.99',0,8,'Heavenly Hash Bar','<p style=\"text-align: left;\">So goey and delicious</p>','','2014-12-15 22:02:36','2015-01-02 12:00:37',0),(21,'2.49',0,8,'Mac N\' Cheese Cake','<p style=\"text-align: left;\">Cheese Cake</p>','','2014-12-15 22:03:03','2015-01-02 12:02:10',0),(22,'2.49',0,8,'Big Crisp','<p style=\"text-align: left;\">A Fresh Rice Crispy Treat</p>','','2014-12-15 22:03:23','2015-01-02 12:01:19',0),(23,'3.99',0,11,'Fried Macaroni Fritter (3)','','','2014-12-15 22:06:10','2014-12-16 03:36:53',0),(24,'2.25',0,11,'Southern Sweet Coleslaw','','','2014-12-15 22:08:48','2014-12-16 03:37:06',0),(25,'2.50',0,11,'Roasted Corn','','','2014-12-15 22:09:39','2014-12-16 03:37:29',0),(26,'2.99',0,11,'Fruit Cup','','','2014-12-15 22:09:51','2014-12-16 03:37:55',0),(27,'3.99',0,11,'Sicilian Cold Pasta','','','2014-12-15 22:10:11','2014-12-21 11:36:42',0),(29,'1.49',0,11,'Cheezy Mac Rolls (3)','','','2014-12-15 22:10:52','2014-12-16 03:38:29',0),(30,'8.99',0,7,'Step 1: Choose Your Noodle or Salad Greens','<p>Original Cavatappi Noodle<br />Cavatappi Wheat Noodle<br /><strong><span style=\"color: #ff00ff;\">Penne Gluten-Free Noodle <span style=\"color: #ffff00;\">(Add $1.00)</span></span></strong><br /><span style=\"color: #008000;\">Salad Greens (Mixed Greens, Romaine, Spinach)</span></p>','http://thecheezymac.studio34productions.com/uploads/Menu%20Items/cavatappi%202.jpg','2014-12-15 22:13:13','2015-01-20 12:39:20',0),(31,'',0,7,'Step 2: Choose up to 2 Free Cheeses or Sauces','<p>White Aged Sharp Cheddar<br />Yellow Cheddar<br />Blue Cheeze<br /><strong><span style=\"color: #ff00ff;\">Gluten-Free Cheeze</span><br /></strong>Harvarti<br />Provolone<br />Ghost Pepper Jack<br />Ricotta<br />Parmesan<br />Tomato Cream<br />Homemade Italian Red Sauce</p>\r\n<p>Featured&nbsp;Artesian Cheezes rotated daily ($.75 upcharge)</p>\r\n<p><span style=\"color: #ffff00;\">(Additional Cheeses/Sauces $.75 each)</span></p>','http://thecheezymac.studio34productions.com/uploads/Menu%20Items/artisan%20cheeses.png','2014-12-15 22:15:17','2015-01-20 12:43:19',0),(32,'',0,7,'Step 3: Choose up to 4 Free Ingredients','<p>Black Olives &nbsp;~ &nbsp;Shredded Carrots &nbsp;~ &nbsp;Chopped Celery &nbsp;~ &nbsp;Broccoli Florets &nbsp;~ &nbsp;Red Cabbage &nbsp;~ &nbsp;Peas<br />Fresh Sliced Mushrooms &nbsp;~ &nbsp;Roasted Corn &nbsp;~ &nbsp;Sweet Onions ~ Green Onions &nbsp;~ &nbsp;Red Onions &nbsp;~ &nbsp;Bell Peppers<br />Jalapeno Peppers &nbsp;~ &nbsp;Poblano Peppers &nbsp;~ &nbsp;Roasted Red Peppers &nbsp;~ &nbsp;Sun Dried Tomatoes &nbsp;~ &nbsp;Diced Tomatoes<br />Pico De Gallo &nbsp;~ &nbsp;Fried Crispy Onions &nbsp;~ &nbsp;Crumbled Pie Crust &nbsp;~ &nbsp;Fritos Corn Chips &nbsp;~ &nbsp;Grippo\'s BBQ Potato Chips ~&nbsp;Chopped Walnuts &nbsp;~ &nbsp;Black Beans</p>\r\n<p><span style=\"color: #ffff00;\">(Additional Ingredients $.75 each)</span></p>','http://thecheezymac.studio34productions.com/uploads/Menu%20Items/toppings.jpg','2014-12-15 22:17:19','2015-01-20 12:46:28',0),(33,'',0,7,'Step 4: Choose 1 Free Protein','<p>Ham<br />Chopped Steak<br />Pulled Pork<br />Andouille Sausage<br />100% Kosher Hotdogs<br />Bacon<br />Hamburger<br />Grilled Chicken<br />Fried Chicken<br />Chili<br />Seasonal Chef\'s Choice</p>\r\n<p><span style=\"color: #ffff00;\">(Additional proteins $2 each)</span></p>\r\n<p>&nbsp;</p>','http://thecheezymac.studio34productions.com/uploads/Menu%20Items/meats.jpg','2014-12-15 22:19:59','2015-01-20 12:47:15',0),(34,'',0,10,'Fountain Drinks','<h3><img src=\"http://www.thecheezymac.studio34productions.com/uploads/Menu%20Items/77182.jpg\" alt=\"\" width=\"300\" height=\"68\" /></h3>\r\n<p style=\"text-align: left;\"><strong>Adult Size Fountain Drink $2.19</strong></p>\r\n<p style=\"text-align: left;\"><strong>Kids Size Fountain Drink $1.79</strong></p>\r\n<p style=\"text-align: left;\"><strong>Apple Juice $2.49</strong></p>\r\n<p style=\"text-align: left;\"><strong>Iced Tea $2.49</strong></p>\r\n<p style=\"text-align: left;\"><strong>1% Milk or Chocolate Milk&nbsp;$2.49</strong></p>','','2014-12-15 22:21:33','2015-01-02 12:02:59',0),(35,'0',0,4,'Friday Special','<h3><span style=\"color: #ff0000;\">Maine Lobster <br />Mac N\' Cheese</span></h3>\r\n<p style=\"text-align: left;\">Fresh Lobster with hints of&nbsp;Sherry &amp; Tarragon, Havarti&nbsp;and Parmesan Cheeze, with&nbsp;Breadcrumbs.</p>\r\n<p style=\"text-align: left;\"><strong><span style=\"color: #ff0000;\">(Limited Availability &amp; Market Price)</span></strong></p>','','2014-12-16 00:04:17','2015-01-20 12:58:45',0),(36,'2.00',0,11,'Texas Cheezy Toast','','','2014-12-16 03:39:17','2014-12-16 03:39:17',0),(37,'1.99',0,8,'Chocolate Chip Cookie','<p style=\"text-align: left;\">Three delicious, melt-in-your-mouth chocolate chip cookies!</p>','','2014-12-21 11:45:53','2015-01-02 12:02:32',0),(38,'',0,4,'Daily Special','<h3><span style=\"color: #ffff00;\">Check your location&nbsp;for current specials</span></h3>','','2014-12-22 22:07:35','2014-12-22 22:08:36',0),(39,'',0,7,'Make It 2 Ways','<p>(Ask about our Mac Grilled Cheese)</p>\r\n<p><span style=\"color: #ffff00;\">$2 Upcharge</span></p>','','2014-12-30 06:13:33','2014-12-30 06:13:33',0),(40,'',0,7,'Salad Dressings','<p><span style=\"color: #339966;\">Ranch</span><br /><span style=\"color: #339966;\">Fat-Free Ranch</span><br /><span style=\"color: #339966;\">Italian</span><br /><span style=\"color: #339966;\">French</span><br /><span style=\"color: #339966;\">Blue Cheeze</span><br /><span style=\"color: #339966;\">Thousand Island</span><br /><span style=\"color: #339966;\">Poppy Seed</span><br /><span style=\"color: #339966;\">Cilantro Lime</span><br /><span style=\"color: #339966;\">Aged&nbsp;Balsamic Vinegar</span><br /><span style=\"color: #339966;\">Oil &amp; Vinegar</span></p>','','2014-12-30 06:14:16','2015-01-20 12:48:35',0),(41,'8.99',0,6,'Philly Cheezesteak','<p style=\"text-align: left;\">We took the iconic steak sandwich and put a Cheezy Mac twist to it!</p>\r\n<p style=\"text-align: left;\"><strong>(Philadelphia, PA)</strong></p>','','2015-01-02 11:52:13','2015-01-20 12:56:08',8),(43,'',0,11,'Soups','<p style=\"text-align: left;\">Hearty Chili w/ Beans (try with Blue Cheeze!) <br />Vegan Gluten-Free Vegetable Soup <br />2 other Daily soups available</p>\r\n<h4 style=\"text-align: left;\"><span style=\"color: #ff0000;\">Cup- $3.99 or Bowl- $4.99</span></h4>','','2015-01-02 23:17:18','2015-01-20 13:03:24',12),(44,'6.99',0,4,'Classic Mac n Cheeze','<p style=\"text-align: left;\">Nothing fancy here... just plain delicious!</p>','','2015-01-20 13:01:20','2015-01-20 13:01:57',2),(45,'2.49',0,8,'Daily Assorted Cakes and Pies','','','2015-01-20 13:06:03','2015-01-20 13:06:03',5);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_categories`
--

DROP TABLE IF EXISTS `menu_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_categories`
--

LOCK TABLES `menu_categories` WRITE;
/*!40000 ALTER TABLE `menu_categories` DISABLE KEYS */;
INSERT INTO `menu_categories` VALUES (4,'Specials','Specials',8,'2014-12-13 13:04:57','2014-12-13 13:04:57'),(5,'KidsMeals','Kids Meals',3,'2014-12-13 13:06:45','2014-12-15 21:46:44'),(6,'FoodForThought','Food For Thought',2,'2014-12-15 21:46:57','2015-01-20 12:52:40'),(7,'BuildYourOwn','Build Your Own',1,'2014-12-15 21:47:07','2014-12-21 14:02:51'),(8,'Treats','Treats',6,'2014-12-15 21:47:39','2014-12-16 04:47:43'),(9,'Combos','Combos',4,'2014-12-15 21:47:48','2014-12-15 21:47:48'),(10,'Drinks','Drinks',7,'2014-12-15 21:47:56','2014-12-15 21:47:56'),(11,'Sides','Sides',5,'2014-12-15 22:05:35','2014-12-15 22:05:35');
/*!40000 ALTER TABLE `menu_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_download`
--

DROP TABLE IF EXISTS `menu_download`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_path` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_download`
--

LOCK TABLES `menu_download` WRITE;
/*!40000 ALTER TABLE `menu_download` DISABLE KEYS */;
INSERT INTO `menu_download` VALUES (1,'http://thecheezymac.com/uploads/Printable Menu_Cheezy Mac_012015.pdf','0000-00-00 00:00:00','2015-01-20 05:35:26');
/*!40000 ALTER TABLE `menu_download` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merchandise`
--

DROP TABLE IF EXISTS `merchandise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `merchandise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merchandise`
--

LOCK TABLES `merchandise` WRITE;
/*!40000 ALTER TABLE `merchandise` DISABLE KEYS */;
INSERT INTO `merchandise` VALUES (4,'Valucap Bio-Washed Embroidered Hat','$26.95','http://thecheezymac.com/uploads/Merchandise/CheezyMac-hats.jpg','<h4>Product Overview</h4>\r\n<ul>\r\n<li>100% bio-washed chino twill</li>\r\n<li>Low-profile, 6 panel hat with pre-curved visor</li>\r\n<li>Adjustable self-fabric back with buckle closure</li>\r\n<li>Available in black or white</li>\r\n</ul>','2014-12-29 23:38:28','2015-01-14 15:07:39'),(5,'Gildan 100% Cotton T-shirt','$16.95','http://thecheezymac.com/uploads/Merchandise/CheezyMac-shirts.jpg','<h4>Product Overview</h4>\r\n<ul>\r\n<li>5.3 oz. 100% pre-shrunk cotton</li>\r\n<li>Breathable, lightweight fabric</li>\r\n<li>Double-needle stitched for durability</li>\r\n<li>Available in red or white</li>\r\n</ul>','2014-12-29 23:39:49','2015-01-14 15:07:27');
/*!40000 ALTER TABLE `merchandise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2012_12_06_225921_migration_cartalyst_sentry_install_users',1),('2012_12_06_225929_migration_cartalyst_sentry_install_groups',1),('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot',1),('2012_12_06_225988_migration_cartalyst_sentry_install_throttle',1),('2014_12_11_224216_create_news_table',2),('2014_12_12_195834_create_menu_table',2),('2014_12_13_002803_create_menuCategory_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'What’s Up Cuisine: From country ham to two-story ice   cream lounge, food is on the move','<p><em><strong>Mac and Cheese lovers rejoice</strong></em></p>\r\n<p>A new restaurant offering gourmet macaroni and cheese is coming to Lexington in January.</p>\r\n<p>The Cheezy Mac will open in front of the Kroger store on Richmond Road. Reports indicate that the owner hopes to open six to eight more restaurants of the same kind in the area over the next two years.</p>','KYForward','2014-10-23 06:00:00','2014-12-15 20:40:44'),(2,'New Restaurant for Mac and Cheese Lovers Coming to Lexington','<p><strong>LEXINGTON, Ky. (WKYT) -</strong> There\'s a new restaurant coming to Lexington and it\'s perfect for mac&nbsp;and cheese lovers.&nbsp;The Cheezy Mac will offer gourmet macaroni and cheese.&nbsp;The restaurant will open in January in front of the Kroger on Richmond Road.&nbsp;Our partners at the the Lexington Herald-Leader report, the owner hopes to open six to eight more restaurants in the area over the next two years.</p>','WKYT','2014-09-18 06:00:00','2014-12-23 06:53:18'),(3,'The Cheezy Mac','<p>A new restaurant coming to Lexington seeks to hit you right in your comfort zone: The Cheezy Mac will offer gourmet macaroni and cheese in a fast-casual conceptthat lets you build your perfect mac.</p>\r\n<p>The first restaurant will open in January in front of Kroger on Richmond Road, owner Jerry Adamany said, and he hopes to have six to eight more in Central Kentucky in the next two years. The next location is likely to be near the University of Kentucky.</p>\r\n<p>Customers can pick noodles, the type of cheese or other sauce, and toppings for about $6.99; add meat for $2 more. It\'s all topped with bread crumbs and more cheese, broiled to melt, and is brought to your table piping hot, with a roll, in seven minutes, he said.</p>\r\n<p>Why macaroni and cheese? Because it\'s everywhere, he said, but it isn\'t usually very good. \"It\'s a comfort food, and it\'s popular,\" he said. \"Let\'s turn it into a hearty comfort food, with lots of options.\"</p>\r\n<p>Janet Patton: (859) 231-3264. Twitter: @janetpattonhl.</p>','Janet Patton - Kentucky.com','2014-09-18 06:00:00','2014-12-15 20:45:38'),(4,'Cheesy Mac to Open in Lexington, KY','<p>We seem to attract the newest and trendiest restaurants from fast casual chains to more upscale venues. It&rsquo;s apparent that young franchises and brand new ones see Lexington as a great place to test the market before expanding nationwide. For example Coba Cocina and Shakespeare and Co. opened their very first stores here with plans to expand the concept to other locales. Shakespeare already had a chain of restaurants overseas before choosing Lexington for their first U.S. store (a second one has since opened across town). The latest entry into our market is Cheesy Mac which will be serving gourmet macaroni and cheese starting in January.</p>\r\n<p>Winter is the perfect time of year to test a menu that will no doubt be full of comfort food options. Diners visiting this fast casual restaurant will get to choose the type of noodles, cheese, sauce, and even add meat to their dish. Their entree is then topped with bread crumbs, more cheese and broiled. Meanwhile, the customer pays for the order and sits down to await quick delivery of the meal to the table.</p>\r\n<p>Cheesy Mac will open in the Kroger plaza on Richmond Road. This shopping center is near some great neighborhoods, especially if you are a first time homebuyer. Residents enjoy a full range of shops in the immediate area including a Walmart, Baskin Robbins, Porter Paints, and much more. This area of Richmond Road is near Man-o-War and the many office and medical buildings off Blazer Road. It is also convenient to downtown and Hamburg.</p>','Donna Elder','2014-10-06 06:00:00','2014-12-21 12:14:38');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'story','Our Story','http://thecheezymac.com/uploads/Pages/storypic.jpg','<h3>Our Belief</h3>\r\n<p>What is the ultimate comfort food? It&rsquo;s food that evokes those warm, nostalgic and sentimental feelings that positively peaks the emotions from the greatest moments of our lives. It&rsquo;s &ldquo;positive&rdquo; food that creates &ldquo;positive&rdquo; feelings. Here, at The Cheezy Mac, we are enthusiasts, specializing in the creation of what we believe is the ultimate comfort food, the best macaroni and cheese around!</p>\r\n<h3>The Cheezy Mac Difference</h3>\r\n<p>What makes Cheezy Mac so special? It is our commitment to using only the finest ingredients in all of our recipes. This means using only the freshest cheeses, grated daily &ndash; from Sharp Cheddar, Swiss, Provolone, Colby and Pepper Jack to unique Artisan cheeses. Using only ribbed, corkscrew shaped macaroni, which in our opinion is the ultimate shape for holding all of our cheesy goodness. And of course our sauces - simply put, they are to-die-for! After all, we have to back up our name with out-of-this-world recipes that please even the most sophisticated palates.</p>\r\n<h3>The Cheezy Mac Choice</h3>\r\n<p>The Cheezy Mac is not about just coming in and picking from a menu. It&rsquo;s about choice. Choose from one of our many Chef&rsquo;s Specialties like our &ldquo;Pulled Pork Macaroni Grilled Cheese Sandwich with Grippo&rsquo;s Potato Chips&rdquo; mmmmmmmmm, sorry, got distracted there for a second. Or Create Your Own Dish! One of our Sous-Chefs will assist you as you choose from an array of fresh toppings and proteins to assemble the perfect, custom Cheezy Mac dish for your particular taste.</p>\r\n<h3>Wait, I&rsquo;m not finished</h3>\r\n<p>We believe in generous portions so if you can&rsquo;t finish your meal in one sitting, no worries. Everything is served in an ecofriendly dish that you can just put a lid on and take with you.</p>\r\n<h3>Are you Cheezy?</h3>\r\n<p>We assume you are because you\'re here, reading this. We hope you enjoy your Cheezy Mac dish today and look forward to seeing you again. Be sure to tell your friends and family so they can be Cheezy too!</p>',2,'','2014-12-22 00:00:00','2015-01-14 15:09:30'),(2,'giftcard','Gift Card','http://thecheezymac.com/uploads/Pages/Gift-Card-image.png','<h3>GIFT CARDS!</h3>\r\n<p>Mac &amp; Cheese ... The ultimate comfort food! Just saying it makes you smile. We hope you love our twist on the old classic so much that you want to share it with others. Now you can! Buy a Gift Card and treat someone special to a dinner to remember at The Cheezy Mac!</p>',2,'','2014-12-22 00:00:00','2015-01-10 21:00:09'),(3,'app','Download Our App','http://thecheezymac.com/uploads/Pages/storypic.jpg','<h3>Ordering Made Easy</h3>\r\n<p>Delicious Mac &amp; Cheese is just a tap away! Download The Cheezy Mac app on your iPhone or Android phone, then Build-Your-Own or choose one of our Chef&rsquo;s Specialities. We&rsquo;ll have it piping hot and ready to eat when you arrive! Ordering online has never been faster or easier!</p>\r\n<p><a href=\"https://mobileapp.vivonet.com/api/2.1/mobile/download?bundle=com.vivomobile.thecheezymac\" target=\"_blank\"><img src=\"http://thecheezymac.com/img/applogo.png\" alt=\"Download Our App\" /></a></p>',2,'','2014-12-23 00:00:00','2015-01-14 15:08:53'),(4,'press-media','Press / Media','http://thecheezymac.com/uploads/Pages/storypic.jpg','<h3>Press/Media!</h3>\r\n<p>We opened The Cheezy Mac to share our love for gourmet Macaroni &amp; Cheese. And we&rsquo;re thrilled to see that others love our unique twist on this old classic! Check out our press clippings and see what others are saying about us&hellip;</p>\r\n<p>Questions? We&rsquo;d love to talk. Media inquiries may be directed to press@thecheezymac.com</p>',2,'','2014-12-23 00:00:00','2015-01-14 15:09:47'),(5,'club','Loyalty club','http://thecheezymac.com/uploads/Pages/Rewards-Card-image.png','<h3>LOYALTY CLUB</h3>\r\n<p>Mac &amp; Cheese lovers unite! Sign-up to receive the latest news, upcoming events, weekly specials, and exclusive &ldquo;members only&rdquo; coupons offered throughout the year.&nbsp;Complete the form below to become a loyalty club member and start earning points today!</p>\r\n<p>&nbsp;</p>\r\n<h3>HOW IT WORKS</h3>\r\n<p dir=\"ltr\">Earn 1 point for every dollar you spend.<br /><strong>9</strong><strong>0 points = free entree&nbsp;</strong>($8.99 value)</p>\r\n<p dir=\"ltr\">Simply fill out the form below to &ldquo;Join the Club&rdquo; and instantly receive a&nbsp;claim voucher. Then, hand that voucher to your cashier to receive your Loyalty Club Card and also&nbsp;<strong>one free drink</strong>!</p>',2,'','2014-12-23 00:00:00','2015-01-10 21:17:36'),(6,'franchise','Franchise Info','http://thecheezymac.com/uploads/Pages/storypic.jpg','<h3>Franchise Info!</h3>\r\n<p>Help us spread the love of gourmet Mac &amp; Cheese! Our business plan is designed for profit and growth. If you&rsquo;d like to learn more about franchise opportunities, please fill out the Information Request form below, or contact our corporate office at 844-624-3399. We look forward to hearing from you!</p>',2,'','2014-12-23 00:00:00','2015-01-14 15:09:04'),(7,'catering','Catering','http://thecheezymac.com/uploads/Pages/storypic.jpg','<h3>CATERING</h3>\r\n<p>Tired of cold cuts and deli sandwiches? Try something different. Surprise your guest with a dish everyone loves&hellip; Mac &amp; Cheese! It&rsquo;s fast, fun, easy and delicious. Call today and let The Cheezy Mac cater your next party!</p>\r\n<p>&nbsp;</p>',2,'','2015-01-01 00:00:00','2015-01-14 15:08:23'),(8,'contact-us','Contact Us','','<div>3031 Richmond Road, Suite 120 <br /> Lexington, KY 40509<br /><br /> 859-2CHEEZY (859-224-3399) <br /> 844-624-3399 (Corporate)<br /><br /></div>',2,'','2015-01-01 00:00:00','2015-01-01 16:04:04'),(9,'employment','Submit Your Application','','',1,'','2015-01-01 00:00:00','2015-01-01 16:11:13');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `throttle` (
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `throttle`
--

LOCK TABLES `throttle` WRITE;
/*!40000 ALTER TABLE `throttle` DISABLE KEYS */;
INSERT INTO `throttle` VALUES (1,2,'76.177.242.110',0,0,0,NULL,NULL,NULL),(2,3,'173.190.124.106',0,0,0,NULL,NULL,NULL),(3,2,'173.190.124.106',0,0,0,NULL,NULL,NULL),(4,5,'173.190.124.106',0,0,0,NULL,NULL,NULL),(5,4,'74.139.201.143',0,0,0,'2015-01-02 12:18:48',NULL,NULL),(6,5,'74.143.199.90',0,0,0,NULL,NULL,NULL),(7,5,'74.139.201.143',0,0,0,NULL,NULL,NULL),(8,5,'184.43.42.197',0,0,0,NULL,NULL,NULL),(9,2,'67.141.62.223',0,0,0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `throttle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'rrafiatech@gmail.com','$2y$10$XBU1/Tfa4D7.zwYFMFvy.OItncEJGPGfZzl9JZWfq4CirE/guoDyq',NULL,1,NULL,NULL,'2015-01-22 20:02:47','$2y$10$f87P007eTQqcMJO2CeOiN.ykSczW2Dyx5M0yCTThddQ8mP4/0NGi6',NULL,'Rachid','Rafia','2014-12-13 05:24:59','2015-01-22 20:02:47'),(3,'rmork07@gmail.com','$2y$10$uToG2PwP1eRFZ45zi4aAHO68OQFOpwZLeTI6ZGjhRt9fu0sE7IjaK',NULL,1,NULL,NULL,'2015-01-13 19:52:54','$2y$10$L6QFITiStVta1PIgI5U4ReIwy9ScOj.os5nTciGBcHt.EYNfBRjly',NULL,'Ryan','Mork','2014-12-13 13:02:02','2015-01-13 19:52:54'),(4,'pmahan@studio34productions.com','$2y$10$P8hNtVT1jzTwjUKoSidkBuVf9BrBKrxiEox0f6WnzGbKo4eMdKdzq',NULL,1,NULL,NULL,'2015-01-20 12:27:32','$2y$10$GD88P0c/vHnVUZIrbVDle.EVwTivXqJjgwdeEo.Mpy48h/Ut7EVHq',NULL,'Patrick','Mahan','2014-12-13 13:02:44','2015-01-20 12:27:32'),(5,'jerry@thecheezymac.com','$2y$10$6pAgq9332DQowe5fvSzPPuKZZy.grmyUwlglCRIIcHdO4eZZ1OVSy',NULL,1,NULL,NULL,'2015-01-13 11:06:15','$2y$10$FP9kTPSsgI7AoWZwXRFPvuqL9OafPtJHQSOw6EuUINx7tZ/840N4a',NULL,'Jerry','Adamany','2014-12-16 05:03:52','2015-01-13 11:06:15');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (2,1),(3,1),(4,1),(5,1);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `winners`
--

DROP TABLE IF EXISTS `winners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `winners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `recipeName` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `winningDate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `winners`
--

LOCK TABLES `winners` WRITE;
/*!40000 ALTER TABLE `winners` DISABLE KEYS */;
INSERT INTO `winners` VALUES (2,'Jane Smith','http://thecheezymac.studio34productions.com/uploads/Winners/winnerphoto.jpg','Buffalo Chicken Mac N Cheese','<ul>\r\n<li>Original Cavatapi Noodles</li>\r\n<li>White Aged Sharp Cheddar</li>\r\n<li>Blue Cheese</li>\r\n<li>Fresh Sliced Mushrooms</li>\r\n<li>Vidalia Onions</li>\r\n<li>Jalapeno Peppers</li>\r\n<li>Chopped Celery</li>\r\n<li>Buffalo Chicken</li>\r\n<li>Ranch Dressing</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>This is my favorite dish. Great dish for a night of Basketball, friends, and fun! YUM!!!</p>','2014-12-22','2014-12-25 23:53:43','2014-12-26 06:53:43');
/*!40000 ALTER TABLE `winners` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-22  6:05:48
