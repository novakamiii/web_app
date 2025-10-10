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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `cart` VALUES
(3,'WhisperBreeze Floor Unit',1,800);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `info` text DEFAULT NULL,
  `img` varchar(255) NOT NULL,
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
(1,'AeroSense Pro',1000,18,'An intelligent, wall-mounted unit that uses advanced AI to learn your preferences and optimize cooling, humidity, and airflow based on real-time environmental data and your daily schedule. It even predicts heatwaves!','aerosense'),
(2,'WhisperBreeze Floor Unit',800,67,'A sleek, minimalist floor-standing air conditioner designed for ultra-quiet operation. Perfect for bedrooms and offices, it delivers a gentle, consistent cool without any distracting noise, featuring a subtle, ambient light strip.','whisperbreeze'),
(3,'EcoChill Smart Vent',2300,22,'Individual smart vents that can be retrofitted into existing ductwork. Each vent has its own sensor and can be controlled independently via an app, allowing for zone-specific cooling and energy saving by only cooling occupied rooms.','ecochill'),
(4,'Solar-Powered SunCooler Portable AC',600,200,'A truly off-grid portable air conditioning unit powered entirely by integrated solar panels. Ideal for camping, outdoor events, or emergency cooling, it\'s rugged, lightweight, and completely wireless.','suncooler'),
(5,'HydroFlow Misting Fan and Cooler',300,75,'A hybrid device that combines a powerful fan with a fine-mist humidifier/cooler. It uses a small amount of water to create an evaporative cooling effect, perfect for semi-outdoor spaces like patios or garages.','hydroflow'),
(6,'BioFilter Air Purifying AC',1200,60,'An air conditioner with an integrated, self-cleaning bio-filtration system that actively neutralizes allergens, viruses, and bacteria, not just traps them. It even releases beneficial negative ions for improved air quality.','biofilter'),
(7,'Modular Climate Panel System',3400,90,'Instead of a single unit, this system uses multiple thin, interconnected panels that can be arranged on walls or ceilings to provide customizable, distributed cooling across a room, blending seamlessly with decor.','modular'),
(8,'Deep Sleep Smart AC Mattress Topper',900,35,'A mattress topper with embedded micro-cooling channels that circulate temperature-regulated air or liquid, providing personalized cooling directly to your bed, ensuring optimal sleep temperature without cooling the whole room.','matress'),
(9,'AuraSync Ambient Light and Air System',3200,50,' A ceiling-mounted system that integrates ambient lighting with discreet air conditioning. The light changes color to indicate temperature and air quality, and the cooling is delivered via imperceptible micro-perforations in the panel.','aurasync'),
(10,'Personal Pocket Breeze Device',120,40,'A wearable, miniature thermoelectric cooling device that provides a localized cool sensation to your pulse points or neck, ideal for personal comfort in warm environments without affecting others.','pocketbreeze'),
(11,'AirSculpt Directional Flow Unit',200,30,'An innovative AC unit that allows users to precisely \"sculpt\" and direct the airflow using a touch interface or gestures, creating specific cool zones within a larger space without impacting other areas.','airsculpt'),
(12,'GeoThermal Home Hub',5000,22,'A compact, residential-scale geothermal heat pump system designed for easy installation, offering hyper-efficient heating and cooling by leveraging the stable temperature of the earth. It\'s the ultimate sustainable climate control.','geothermal');
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

-- Dump completed on 2025-10-10 15:11:55
