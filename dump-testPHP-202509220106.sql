/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-12.0.2-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: testPHP
-- ------------------------------------------------------
-- Server version	12.0.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `products`
--
USE testphp;
DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `info` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `products` VALUES
(1,'Elegant Chair',18,'This sophisticated accent chair features a sleek, curved walnut wood frame upholstered in premium, soft-touch velvet. Its deep seat and tapered splayed legs offer both exceptional comfort and mid-century modern style, making it a perfect statement piece for any living room, office, or reading nook.'),
(2,'Smart Lamp',67,'Control your lighting environment effortlessly with this Wi-Fi enabled smart lamp. Adjust brightness and millions of color shades directly from your smartphone or via voice commands. Features include scheduling, timers, and ambient light modes to reduce eye strain, all housed in a minimalist, space-saving design.'),
(3,'Modern Desk',22,'This minimalist desk boasts a clean, Scandinavian-inspired design with a spacious rectangular desktop supported by sturdy, powder-coated steel hairpin legs. It includes a discreet built-in cable management system and offers ample workspace, making it an ideal and stylish centerpiece for any home office or studio.'),
(4,'Organic Cotton T-Shirt',200,'100% organic cotton t-shirt with comfortable fit and sustainable manufacturing process. Available in multiple colors and sizes.'),
(5,'Smart Fitness Tracker',75,'Water-resistant activity tracker with heart rate monitor, sleep tracking, and smartphone notifications. 7-day battery life.'),
(6,'Ceramic Coffee Mug Set',60,'Set of 4 handcrafted ceramic mugs with elegant design. Microwave and dishwasher safe. Perfect for morning coffee or tea.'),
(7,'Portable Power Bank',90,'10000mAh portable charger with fast charging technology and multiple USB ports. Compatible with all smartphones and devices.'),
(8,'Natural Bamboo Cutting Board',35,'Eco-friendly bamboo cutting board with juice groove and non-slip feet. Antibacterial properties and easy to clean.'),
(9,'Wireless Phone Charger',50,'Qi-certified wireless charging pad with LED indicator. Supports fast charging for compatible devices with safety features.'),
(10,'Yoga Mat Premium',40,'Non-slip yoga mat with extra cushioning and alignment markers. Made from eco-friendly TPE material. Includes carrying strap.'),
(11,'Xbox Controller',30,'Experience the modernized design of the Xbox Wireless Controller, featuring sculpted surfaces and refined geometry for enhanced comfort during gameplay with battery life up to 40 hours*. '),
(12,'Evoker',22,'Step into the dark hour and become a true member of the Specialized Extracurricular Execution Squad with the SEES Evoker prop replica, inspired by Persona 3. This full-scale handcrafted replica recreates the iconic Persona-summoning device in exacting detail—designed for cosplay, collection, and display. ');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `pass` char(255) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_name` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `users` VALUES
(5,'Zen','$2y$12$0vaOT/QrSuoCUV.36rtA8e7R/O6zepqu6vJ0Du1rx.K7pdhm4J4Dm','2025-09-19 10:06:15'),
(26,'joker1','$2y$12$XXqhVnDBT0leT11uu.7lNuXRVj20Vc2un.gXI7.j60DBj4PgunW/e','2025-09-19 10:09:21'),
(27,'user1','$2y$12$m8GkrK.vkKLxQUrX6OgLm.PuphecIhBP/yaGGwtA2e6TVo3sFTPii','2025-09-19 17:02:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Dumping routines for database 'testPHP'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-09-22  1:06:50
