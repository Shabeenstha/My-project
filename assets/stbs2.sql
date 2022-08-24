-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: stbs
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookings` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `Ticket_no` int(11) NOT NULL,
  `qty` varchar(1000) NOT NULL,
  `cost` varchar(1000) NOT NULL,
  `Username` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`b_id`),
  KEY `Ticket_no` (`Ticket_no`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`Ticket_no`) REFERENCES `ticket_issue` (`Ticket_no`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,3,'2','24','Suraj','paid'),(2,3,'2','24','Suraj','paid'),(3,3,'1','12','Suraj','paid'),(4,2,'3','93','Suraj','paid'),(5,3,'1','12','Suraj','paid'),(6,2,'5','155','Suraj','paid'),(7,4,'20','6000','Suraj','paid'),(8,4,'1','300','Suraj','paid'),(9,5,'2','400','Suraj','paid'),(26,6,'1','40','Suraj','paid'),(27,6,'1','40','Suraj','unpaid');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paymentdetail`
--

DROP TABLE IF EXISTS `paymentdetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paymentdetail` (
  `s.n` int(11) NOT NULL AUTO_INCREMENT,
  `bookingid` int(100) NOT NULL,
  `status` varchar(11) NOT NULL,
  `paydate` date NOT NULL,
  PRIMARY KEY (`s.n`),
  KEY `bookingid` (`bookingid`),
  CONSTRAINT `paymentdetail_ibfk_1` FOREIGN KEY (`bookingid`) REFERENCES `bookings` (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paymentdetail`
--

LOCK TABLES `paymentdetail` WRITE;
/*!40000 ALTER TABLE `paymentdetail` DISABLE KEYS */;
INSERT INTO `paymentdetail` VALUES (1,3,'0','2022-04-20'),(2,3,'0','2022-04-20'),(3,3,'0','2022-04-20'),(4,3,'0','2022-04-20'),(5,3,'0','2022-04-20'),(6,3,'0','2022-04-20'),(7,1,'0','2022-04-20'),(8,1,'0','2022-04-20'),(9,1,'0','2022-04-20'),(10,3,'0','2022-04-20'),(11,3,'0','2022-04-20'),(12,3,'1','2022-04-20'),(13,2,'0','2022-04-20'),(14,2,'0','2022-04-20'),(15,2,'0','2022-04-20'),(16,3,'0','2022-04-20'),(17,3,'0','2022-04-20'),(18,3,'0','2022-04-20'),(19,1,'0','2022-04-20'),(20,1,'0','2022-04-20'),(21,1,'0','2022-04-20'),(22,1,'0','2022-05-02'),(23,1,'0','2022-05-25'),(24,1,'0','2022-05-25'),(25,1,'0','2022-05-26'),(26,4,'0','2022-05-26'),(27,1,'1','2022-05-27'),(28,1,'s','2022-05-27'),(29,1,'s','2022-05-27'),(30,7,'s','2022-05-27'),(31,7,'s','2022-05-27'),(32,5,'s','2022-05-27'),(33,5,'s','2022-05-27');
/*!40000 ALTER TABLE `paymentdetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket_issue`
--

DROP TABLE IF EXISTS `ticket_issue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket_issue` (
  `Ticket_no` int(11) NOT NULL AUTO_INCREMENT,
  `Ticket_title` varchar(1000) NOT NULL,
  `Total_tickets` varchar(1000) NOT NULL,
  `venue` varchar(1000) NOT NULL,
  `tdate` text NOT NULL,
  `ttime` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `organizedby` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `uploader` varchar(1000) NOT NULL,
  PRIMARY KEY (`Ticket_no`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket_issue`
--

LOCK TABLES `ticket_issue` WRITE;
/*!40000 ALTER TABLE `ticket_issue` DISABLE KEYS */;
INSERT INTO `ticket_issue` VALUES (2,'dfsd','33','ds','2022-04-16','34','31','erw','s','Ramesh'),(3,'sas','4','5df','2022-04-16','6 am','12','fsd','s','Raman'),(4,'football match u-16','150','dashrath stadium','2022-05-30','4:30 pm','300','ANFA','s','dipesh'),(5,'futsal cup 2022','100','samakhushi','2022-06-12','10 am','200','samakhushi futsal','s','Ramesh'),(6,'open tennis ','5','handball ground','2022-06-07','10 am','40','Handball comunity','s','Raman');
/*!40000 ALTER TABLE `ticket_issue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userinfo` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(1000) NOT NULL,
  `FullName` varchar(1000) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Role` varchar(100) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userinfo`
--

LOCK TABLES `userinfo` WRITE;
/*!40000 ALTER TABLE `userinfo` DISABLE KEYS */;
INSERT INTO `userinfo` VALUES (1,'sabin','sabin shrestha','sabin@gmail.com','sabin','9898989898','Admin'),(2,'Ramesh','Ramesh Gairhe','ramesh@gmail.com','ramesh123','9840802019','ORG'),(3,'Suraj','Suraj Rimal','Suraj@gmail.com','suraj123','9810029384','User'),(4,'dipesh','Dipesh Shrestha','Dipeshstha@gmail.com','12345','9840802019','ORG'),(5,'','','','','',''),(6,'as','ssa','sabin@gmail.com','12345','1234',''),(7,'asas','','','','',''),(8,'asdasda','','','','',''),(9,'ram','ram','dfs','qrr','3434',''),(10,'Subin','Subin Shrestha','sabin@gmail.com','123','9840800020',''),(11,'Subins','Subin Shrestha','as','111','9840800020',''),(12,'aasdfsdfsdf','sdfsdf','sdfdf','asd','3243241212',''),(13,'Subina','Subina shrestha','subina@gmail.com','12345','9843810092',''),(14,'Milan','Milan Lama ','MilanLama@gmail.com','Milan123','9840802011',''),(15,'Milan1','Milan Lama','MilanLama@gmail.com','Milan123','9898989898',''),(16,'mala','mala lama','mala@gmail.com','Milan123','9810203040','User'),(17,'suman','Suman Shrestha','suman@gmail.com','sUMAN123','9841195386','User'),(18,'Raman','Raman Magar','magarraman@gmail.com','Raman123','9820361892','ORG');
/*!40000 ALTER TABLE `userinfo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-06  0:27:11
