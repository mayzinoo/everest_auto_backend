-- MariaDB dump 10.19  Distrib 10.5.10-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: everest_db
-- ------------------------------------------------------
-- Server version	10.5.10-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `body_type`
--

DROP TABLE IF EXISTS `body_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `body_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body_type` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `body_type`
--

LOCK TABLES `body_type` WRITE;
/*!40000 ALTER TABLE `body_type` DISABLE KEYS */;
INSERT INTO `body_type` VALUES (1,'Hatchback','2022-08-29'),(2,'Sedan','2022-08-29'),(3,'Lorry','2022-09-06');
/*!40000 ALTER TABLE `body_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `booking_no` varchar(255) NOT NULL,
  `delivery_address1` text NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_remark` varchar(255) NOT NULL,
  `delivery_postcode` varchar(255) NOT NULL,
  `delivery_address2` varchar(255) NOT NULL,
  `deli_phone` varchar(255) NOT NULL,
  `delivery_time` varchar(255) NOT NULL,
  `driving_license_front` varchar(255) NOT NULL,
  `driving_license_back` varchar(255) NOT NULL,
  `national_id_front` varchar(255) NOT NULL,
  `national_id_back` varchar(255) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `billing_address1` text NOT NULL,
  `billing_address2` text NOT NULL,
  `billing_phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `billing_postcode` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `check_status` int(11) NOT NULL,
  `available_date` date NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `reference_date` datetime NOT NULL,
  `confirm_date` date NOT NULL,
  `subscription_price` varchar(255) NOT NULL,
  `total_amt` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,5,7,'220831021730','160 paya lebar','2022-09-01','','409022','orion','97696155','Morning','House_Rules.png','House_Rules1.png','House_Rules2.png','House_Rules3.png','','6','#00a4ff','160 paya lebar','orion','97696155','Singapore','Singapore','409022',1,3,'2023-03-01','cash','','0000-00-00 00:00:00','2022-08-31','3100','18600','2022-08-31'),(2,7,2,'220831073133','Eunos','2022-08-31','','400011','','83039736','Morning','image_(3)4.png','image_(3)5.png','image_(3)6.png','image_(3)7.png','','3','#ffffff','Eunos','','83039736','','','399979',0,3,'2022-12-01','cash','','0000-00-00 00:00:00','0000-00-00','4500','13500','2022-08-31');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  `brand_photo` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Mercedes-Benz','b1.png','2022-08-30'),(2,'Honda','b2.png','2022-08-30');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `business`
--

DROP TABLE IF EXISTS `business`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `business` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `business`
--

LOCK TABLES `business` WRITE;
/*!40000 ALTER TABLE `business` DISABLE KEYS */;
/*!40000 ALTER TABLE `business` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_details`
--

DROP TABLE IF EXISTS `car_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rental_price` varchar(255) NOT NULL,
  `car_package` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `duration` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `engine_type` varchar(255) NOT NULL,
  `fuel_type` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `seat_qty` int(11) NOT NULL,
  `door` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `body_type` varchar(255) NOT NULL,
  `consumption` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `car_design` varchar(255) NOT NULL,
  `title_status` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `post_by` varchar(255) NOT NULL,
  `available_date` date NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_details`
--

LOCK TABLES `car_details` WRITE;
/*!40000 ALTER TABLE `car_details` DISABLE KEYS */;
INSERT INTO `car_details` VALUES (1,'4500','','<p>Testing</p>\r\n\r\n<p>Testing</p>\r\n','','Testing brand name','eg-car.png','Testing model name 2019','3.6','1','5.4','Features1,Features2',4,4,'#ffffff,#00a4ff','1','2.1','2019','','1',0,'admin','0000-00-00','2022-08-29'),(2,'5000','','<p>Testing</p>\r\n\r\n<p>Testing</p>\r\n','','Testing2 brand name','car1.png','Testing1 model name 2020','2.3','2','2.3','Electric windows,Airbags',4,4,'#ffffff,#00a4ff','2','20','2020','','2',1,'admin','2022-12-01','2022-08-29'),(3,'4800','','<p>Testing</p>\r\n\r\n<p>Testing</p>\r\n','','Testing 3 brand name','image_(3).png','Testing 3 model name 2021','2.5','1','33.5','Airbags',4,4,'#ffffff,#000000','1','3.6','2021','','3',0,'admin','0000-00-00','2022-08-29'),(4,'4500','','<p>Testing</p>\r\n\r\n<p>Testing</p>\r\n','','Testing 4 brand name','image_(2).png','Testing 4 model name 2022','6.6','2','5.5','Electric windows,Airbags',4,4,'#000000','2','3.6','2022','','2',0,'admin','0000-00-00','2022-08-29'),(5,'1700','','<p>The<strong>&nbsp;Toyota Aqua</strong>&nbsp;is a 4 door Hybrid designed to provide every car renter with a comfortable and refined drive while being environmentally friendly. With innovative features such as the ComfortPedal that allows you to generate regenerative break force with only your accelerator, and the world&#39;s first nickel-hydrogen battery that has twice the output, the Toyota Aqua is a great choice for those who need a&nbsp;<strong>car subscription</strong>&nbsp;in Singapore at great value and excellent fuel consumption.The<strong>&nbsp;Toyota Aqua</strong>&nbsp;is a 4 door Hybrid designed to provide every car renter with a comfortable and refined drive while being environmentally friendly. With innovative features such as the ComfortPedal that allows you to generate regenerative break force with only your accelerator, and the world&#39;s first nickel-hydrogen battery that has twice the output, the Toyota Aqua is a great choice for those who need a&nbsp;<strong>car subscription</strong>&nbsp;in Singapore at great value and excellent fuel consumption.The<strong>&nbsp;Toyota Aqua</strong>&nbsp;is a 4 door Hybrid designed to provide every car renter with a comfortable and refined drive while being environmentally friendly. With innovative features such as the ComfortPedal that allows you to generate regenerative break force with only your accelerator, and the world&#39;s first nickel-hydrogen battery that has twice the output, the Toyota Aqua is a great choice for those who need a&nbsp;<strong>car subscription</strong>&nbsp;in Singapore at great value and excellent fuel consumption.The<strong>&nbsp;Toyota Aqua</strong>&nbsp;is a 4 door Hybrid designed to provide every car renter with a comfortable and refined drive while being environmentally friendly. With innovative features such as the ComfortPedal that allows you to generate regenerative break force with only your accelerator, and the world&#39;s first nickel-hydrogen battery that has twice the output, the Toyota Aqua is a great choice for those who need a&nbsp;<strong>car subscription</strong>&nbsp;in Singapore at great value and excellent fuel consumption.</p>\r\n','','Toyota','image_(1).png','2016 Toyota Aqua 1.5','1.5','1','Automatic','Electric windows,Airbags',5,5,'#ffffff,#00a4ff','1','6.9','2016','','1',0,'admin','2024-09-02','2022-08-29'),(7,'3500','','','','Testing brand name 5','car11.png','Tesing model name 5 ','1.2','1','3.3','Electric windows,Air conditioning',4,4,'#00a4ff','1','2.3','2018','','2',1,'admin','2023-03-01','2022-08-29');
/*!40000 ALTER TABLE `car_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_package`
--

DROP TABLE IF EXISTS `car_package`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car_package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `best` varchar(255) NOT NULL,
  `best_status` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_package`
--

LOCK TABLES `car_package` WRITE;
/*!40000 ALTER TABLE `car_package` DISABLE KEYS */;
INSERT INTO `car_package` VALUES (1,1,'3','4350','false','','','2022-08-29'),(2,1,'12','4200','true','bestsaver','','2022-08-29'),(3,2,'3','4500','false','','','2022-08-29'),(4,2,'6','4300','true','bestsaver','','2022-08-29'),(5,3,'3','4500','false','','','2022-08-29'),(6,3,'6','4000','true','bestsaver','','2022-08-29'),(7,4,'3','4000','false','','','2022-08-29'),(8,4,'6','3500','true','bestsaver','','2022-08-29'),(9,5,'12','1600','false','','','2022-08-29'),(10,5,'24','1500','true','bestsaver','','2022-08-29'),(11,6,'3','7000','false','','','2022-08-29'),(12,6,'6','6500','true','bestsaver','','2022-08-29'),(13,7,'3','3400','false','','','2022-08-29'),(14,7,'6','3100','true','bestsaver','','2022-08-29');
/*!40000 ALTER TABLE `car_package` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` text NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `duration`
--

DROP TABLE IF EXISTS `duration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `duration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duration_id` int(11) NOT NULL,
  `duration` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `duration`
--

LOCK TABLES `duration` WRITE;
/*!40000 ALTER TABLE `duration` DISABLE KEYS */;
INSERT INTO `duration` VALUES (1,1,'1 Month'),(2,3,'3 Months'),(3,6,'6 Months'),(4,12,'12 Months'),(5,24,'24 Months'),(6,48,'48 Months');
/*!40000 ALTER TABLE `duration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (1,'Testing main title 1','Testing sub title 1','<p>Testing</p>\r\n\r\n<p>Testing</p>\r\n','2022-08-29'),(2,'Testing main title 1','Testing sub title 2','<p>Testing</p>\r\n\r\n<p>Testing</p>\r\n','2022-08-29');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `features`
--

LOCK TABLES `features` WRITE;
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
INSERT INTO `features` VALUES (1,'Electric windows','2022-08-29'),(2,'Air conditioning','2022-08-29'),(3,'Airbags','2022-08-29');
/*!40000 ALTER TABLE `features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fuel_type`
--

DROP TABLE IF EXISTS `fuel_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fuel_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fuel_type` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fuel_type`
--

LOCK TABLES `fuel_type` WRITE;
/*!40000 ALTER TABLE `fuel_type` DISABLE KEYS */;
INSERT INTO `fuel_type` VALUES (1,'Hybrid','2022-08-29'),(2,'Petrol','2022-08-29');
/*!40000 ALTER TABLE `fuel_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `how_works`
--

DROP TABLE IF EXISTS `how_works`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `how_works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `step` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `how_works`
--

LOCK TABLES `how_works` WRITE;
/*!40000 ALTER TABLE `how_works` DISABLE KEYS */;
/*!40000 ALTER TABLE `how_works` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `invoice_name` varchar(255) NOT NULL,
  `invoice_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `total_amt` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice`
--

LOCK TABLES `invoice` WRITE;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
INSERT INTO `invoice` VALUES (1,5,7,1,'EA2208031','2022-08-31','0000-00-00','','',1,'0000-00-00');
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `promotion_text` text NOT NULL,
  `description` text NOT NULL,
  `detail` text NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion`
--

LOCK TABLES `promotion` WRITE;
/*!40000 ALTER TABLE `promotion` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Insurance','2022-09-09'),(2,'Servicing','2022-09-09');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `cmy_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `interesting_option` varchar(255) NOT NULL,
  `qty_of_cars` int(100) NOT NULL,
  `business_register_no` varchar(255) NOT NULL,
  `office_no` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','1','','82349524','admin@gmail.com','$2y$10$KKgzKt3LolQld56qXJ4tdeG4a3RHG3V0BikS2p3zxvOVQiDhj7JVq','','',0,'','','','admin','','2022-08-29 00:00:00'),(3,'Steve','Vin','','45698555','steve@gmail.com','$2y$10$KKgzKt3LolQld56qXJ4tdeG4a3RHG3V0BikS2p3zxvOVQiDhj7JVq','','',0,'','','','dealer','','2022-08-30 00:00:00'),(4,'aye','thandar','','987654320','ayethandar@gmail.com','$2y$10$FIBPauJj6jwCcz.vnxWE1O7dqjZp21wsHsduYz2/N6fTYZrSzvoOS','','',0,'','','','customer','','2022-09-01 00:00:00'),(5,'Grid','Test','','97696155','victor@gridplus.com.sg','$2y$10$h0EnLDDSg2mdUqINUqkDYeu/jSnfAtNvLP2NA5UQEzlc.U86fs/wa','','',0,'','','','customer','','2022-09-01 00:00:00'),(6,'Nyi ','Nyi','','452302165','nyi@gmail.com','$2y$10$6XxRYzebNabEEEivWgsOfuwLR6NchgxUaz3Ro6gfyBW/CJwZSdgjq','','',0,'','','','customer','','2022-09-01 00:00:00'),(7,'Yu Yu','Zin','','83039736','yuyuzin@gridplus.com.sg','$2y$10$3ENtnagy636vY7wFYgz6WuL8W5C/ZYRuARLZPQj1990DZkbyu9KIS','','',0,'','','','customer','','2022-09-01 00:00:00'),(8,'aye','thandar','','09876912345','aye@gmail.com','$2y$10$bLrpCg3Mj/x/XPndWbuK3OxK13KAn7JDWN2NRbCUQQXb7VV1GkxgG','','',0,'','','','customer','','2022-09-01 00:00:00'),(9,'Collen ','Boach','','486985565','collen@gmail.com','$2y$10$ohtGYDZjPLP6Jfwg4zLGPux7CuK8FKs41vk8zP5A.ykXx02uEijXS','','',0,'','','','customer','','2022-09-01 00:00:00'),(10,'thae','thae','','0987654312','thae@gmail.com','$2y$10$MGyTTa2gNJwFoSkXC9jNYu.MYMDYYHl2R5hJcJHLDV0LdLN/SJmau','','',0,'','','','customer','','2022-09-01 00:00:00'),(11,'yyz','yyz','','83039736','yyz@gmail.com','$2y$10$PGp.iWkLVfgBL/MVBsnZ3erpm7ShQMwt2AyDrJl5UXR10aGXGVC1m','','',0,'','','','customer','','2022-09-02 16:32:40'),(12,'Test','Admin','','8323456','test@gmail.com','$2y$10$vgXqZK7a9DmHlKOfNkcsbOnb2dTjcvzzIvtNVOXKBfcWgn917k6S.','','',0,'','','','admin','','2022-09-02 00:00:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicle_photos`
--

DROP TABLE IF EXISTS `vehicle_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicle_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicle_photos`
--

LOCK TABLES `vehicle_photos` WRITE;
/*!40000 ALTER TABLE `vehicle_photos` DISABLE KEYS */;
INSERT INTO `vehicle_photos` VALUES (1,2,'eg-car1.png','2022-08-29'),(2,2,'10751.jpg','2022-08-29'),(3,1,'5064247.jpg','2022-08-29'),(4,1,'6383307.jpg','2022-08-29');
/*!40000 ALTER TABLE `vehicle_photos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-20 14:55:51
