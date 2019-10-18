-- MySQL dump 10.13  Distrib 5.7.27, for macos10.14 (x86_64)
--
-- Host: localhost    Database: rtg
-- ------------------------------------------------------
-- Server version	5.7.27

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (2,'Donald','Munengiwa','292929292929299','munengiwa@gmail.com','0771407147','1450 Woodlands Park','123456','2019-10-08 02:16:41','2019-10-08 02:16:41');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `average_lunches`
--

DROP TABLE IF EXISTS `average_lunches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `average_lunches` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `average_lunches`
--

LOCK TABLES `average_lunches` WRITE;
/*!40000 ALTER TABLE `average_lunches` DISABLE KEYS */;
INSERT INTO `average_lunches` VALUES (2,'5','2019-10-17 20:57:52','2019-10-17 20:57:52');
/*!40000 ALTER TABLE `average_lunches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branches`
--

DROP TABLE IF EXISTS `branches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `branches` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branches`
--

LOCK TABLES `branches` WRITE;
/*!40000 ALTER TABLE `branches` DISABLE KEYS */;
INSERT INTO `branches` VALUES (1,'Chitekete','Mutare','Active','2019-10-07 16:02:05','2019-10-07 16:02:05'),(2,'Mutoko','Chirundu','Active','2019-10-15 11:33:08','2019-10-15 11:33:08'),(3,'Mutare Branch','Mutare','Active','2019-10-18 01:01:54','2019-10-18 01:01:54');
/*!40000 ALTER TABLE `branches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `distances`
--

DROP TABLE IF EXISTS `distances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `distances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `distances`
--

LOCK TABLES `distances` WRITE;
/*!40000 ALTER TABLE `distances` DISABLE KEYS */;
INSERT INTO `distances` VALUES (3,'Chitekete','Mutoko','700','2019-10-15 11:40:03','2019-10-15 11:40:03'),(4,'Chitekete','Mutare Branch','500','2019-10-18 01:05:30','2019-10-18 01:05:30');
/*!40000 ALTER TABLE `distances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Victor','Chinyavada','29292929','chinyavada@gmail.com','0777777777','1234 Woodlands Park','209090','Chitekete','2019-10-08 03:51:30','2019-10-08 03:51:30'),(2,'Farai','Chagwenha','292929292929','chags@gmail.com','0771407147','1234 Senga','54000','Mutare Branch','2019-10-18 01:07:52','2019-10-18 01:07:52');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fuel_prices`
--

DROP TABLE IF EXISTS `fuel_prices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fuel_prices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fuel_prices`
--

LOCK TABLES `fuel_prices` WRITE;
/*!40000 ALTER TABLE `fuel_prices` DISABLE KEYS */;
INSERT INTO `fuel_prices` VALUES (2,'Diesel','60','2019-10-15 12:08:56','2019-10-15 12:08:56'),(3,'Petrol','5','2019-10-15 12:09:16','2019-10-15 12:09:16');
/*!40000 ALTER TABLE `fuel_prices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `managers`
--

DROP TABLE IF EXISTS `managers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `managers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `managers`
--

LOCK TABLES `managers` WRITE;
/*!40000 ALTER TABLE `managers` DISABLE KEYS */;
INSERT INTO `managers` VALUES (1,'Munashe','Chirara','29295480M07','chirara@gmail.com','0771407147','1234 Woodlands Park','202020','Chitekete','2019-10-08 04:17:34','2019-10-08 04:17:34'),(3,'Charleton','Taguta','29092909','tagu@gmail.com','0771407147','1234 Senga','303090','Mutare Branch','2019-10-18 01:04:47','2019-10-18 01:04:47');
/*!40000 ALTER TABLE `managers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_10_07_020256_create_admins_table',1),(5,'2019_10_07_020309_create_employees_table',1),(6,'2019_10_07_020327_create_branches_table',1),(7,'2019_10_07_020404_create_managers_table',1),(8,'2019_10_07_020419_create_travel_requests_table',1),(9,'2019_10_07_020445_create_travel_types_table',1),(10,'2019_10_08_061400_create_request_types_table',2),(11,'2019_10_15_113031_create_fuel_prices_table',3),(12,'2019_10_15_113052_create_distances_table',3),(13,'2019_10_15_113133_create_average_lunches_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request_types`
--

DROP TABLE IF EXISTS `request_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request_types`
--

LOCK TABLES `request_types` WRITE;
/*!40000 ALTER TABLE `request_types` DISABLE KEYS */;
INSERT INTO `request_types` VALUES (1,'Meeting','High','Active','2019-10-08 04:53:36','2019-10-08 04:53:36'),(2,'Vaccation','Low','Active','2019-10-08 05:02:03','2019-10-08 05:02:03'),(3,'Visit','Low','Active','2019-10-17 21:01:16','2019-10-17 21:01:16'),(4,'Games','Low','Active','2019-10-18 01:06:41','2019-10-18 01:06:41');
/*!40000 ALTER TABLE `request_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `travel_requests`
--

DROP TABLE IF EXISTS `travel_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `travel_requests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_to_branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_calculatable` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowance` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_of_transport` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_travel` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_travellers` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purpose_of_travel` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `reject_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `travel_requests`
--

LOCK TABLES `travel_requests` WRITE;
/*!40000 ALTER TABLE `travel_requests` DISABLE KEYS */;
INSERT INTO `travel_requests` VALUES (1,'1','Victor Chinyavada','1','Chitekete','To remove sunctions','yes','30',NULL,NULL,'Approved','2019-10-24','Town','Local','1','1','2019-10-17 22:30:16','2019-10-18 00:30:16','2019-10-18 01:54:54'),(2,'1','Victor Chinyavada','2','Chitekete','To remove sunctions','yes','30',NULL,'600','Approved','2019-10-24','Town','Local','1','1','2019-10-17 22:37:39','Tenga doro','2019-10-18 02:00:27'),(3,'1','Victor Chinyavada','Mutoko','Chitekete','34','yes','6',NULL,NULL,'Pending','2019-10-23','Town','Local','2','Vaccation','2019-10-18 00:44:54',NULL,'2019-10-18 02:44:54'),(4,'1','Victor Chinyavada','Harare Cicil','Chitekete','tyu','no','5',NULL,NULL,'Pending','2019-10-30','Road','Local','5','Meeting','2019-10-18 00:58:30',NULL,'2019-10-18 02:58:30'),(5,'2','Farai Chagwenha','Botswana','Mutare Branch','Soccer','no','5',NULL,NULL,'Approved','2019-10-30','Road','Local','6','Games','2019-10-18 01:09:54',NULL,'2019-10-18 03:14:29'),(6,'2','Farai Chagwenha','Chitekete','Mutare Branch','Kutsemura','yes','7','true','70000','Approved','2019-10-31','Road','Local','7','Meeting','2019-10-18 01:19:52',NULL,'2019-10-18 03:28:36'),(7,'2','Farai Chagwenha','Mutoko','Mutare Branch','kuseka','yes','5',NULL,'5000','Approved','2019-10-30','Road','Local','5','Meeting','2019-10-18 01:26:43',NULL,'2019-10-18 03:28:27'),(8,'2','Farai Chagwenha','Chitekete','Mutare Branch','Huyiyiyiyi','yes','4','true','20000','Rejected','2019-10-30','Road','Local','2','Meeting','2019-10-18 01:29:34','kuurya','2019-10-18 03:32:45');
/*!40000 ALTER TABLE `travel_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `travel_types`
--

DROP TABLE IF EXISTS `travel_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `travel_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `travel_types`
--

LOCK TABLES `travel_types` WRITE;
/*!40000 ALTER TABLE `travel_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `travel_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Webster ','webstermoswa11@gmail.com','admin',NULL,'$2y$10$reiH6BHIeQX1w4.tl3XUV.RDCXTAiFpBsx5QQ3Zg/t.2Gk8psAnAO',NULL,'2019-10-08 01:29:34','2019-10-08 19:34:58'),(2,'Webster Wegomo','kauyu@gmail.com','admin',NULL,'$2y$10$SnZNvmrI4xTk7OMk2jJoJ.OYgAD7KMVmFCdCKkBrF/0g0ZOnaLSJG',NULL,'2019-10-08 01:39:10','2019-10-08 01:39:10'),(3,'Donald Munengiwa','munengiwa@gmail.com','admin',NULL,'$2y$10$23G1jpvgCH61L0lmOYUpBOMykvyGGaH.wa5rhS/zKOM7cknv/.Kay',NULL,'2019-10-08 02:16:41','2019-10-08 02:16:41'),(4,'Charleton Taguta','taguta@gmail.com','admin',NULL,'$2y$10$s38mqpHKNOoNSk/JEXDlNeCOLUYDyWEKW0gMScgRR8vkM8yi9ZO6W',NULL,'2019-10-08 03:43:15','2019-10-08 03:43:15'),(5,'Victor Chinyavada','chinyavada@gmail.com','employee',NULL,'$2y$10$cEQc0dX2mbzQErYyVrhrSOLHsfyDwCA9cLV7sbXS9wOMSiS3w8b/G',NULL,'2019-10-08 03:51:30','2019-10-08 03:51:30'),(6,'Munashe Chirara','chirara@gmail.com','manager',NULL,'$2y$10$dcPf.c3gwwqt.GFlWxTDcugxMsMtjH8zuFcxYVD0NiBJNMZLFDbsy',NULL,'2019-10-08 04:17:34','2019-10-08 04:17:34'),(7,'Charleton Ngoro','chari@gmail.com','manager',NULL,'$2y$10$MqujBnM1eVUix6icx2kaqeUciWOf8l8Tffsi8PCSWN.dVf0SIfEiq',NULL,'2019-10-18 01:03:00','2019-10-18 01:03:00'),(8,'Charleton Taguta','tagu@gmail.com','manager',NULL,'$2y$10$mu5zU2AuLh0mO964GiIKE.XT1PxI4/Zk3gFXge3ktdE.pAupBF1K.',NULL,'2019-10-18 01:04:47','2019-10-18 01:04:47'),(9,'Farai Chagwenha','chags@gmail.com','employee',NULL,'$2y$10$SA6Yr0.WietICJ1lPsg1N./74ZSumdimGGnOpQ8nM/hCaetye9ffK',NULL,'2019-10-18 01:07:52','2019-10-18 01:07:52');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-18  5:54:42
