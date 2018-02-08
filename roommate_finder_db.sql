-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: roommate_finder_db
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `dorms`
--

DROP TABLE IF EXISTS `dorms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dorms` (
  `residence_id` int(11) NOT NULL,
  `studyrooms` enum('Yes','No') DEFAULT NULL,
  `price_per_semester` int(20) DEFAULT NULL,
  `numResidents` tinyint(4) DEFAULT NULL,
  `bathroom` varchar(30) DEFAULT NULL,
  `kitchen` varchar(30) DEFAULT NULL,
  `laundry` varchar(30) DEFAULT NULL,
  `entranceHours` varchar(20) DEFAULT NULL,
  `desk` enum('Yes','No') DEFAULT NULL,
  `bed_seperate` enum('Yes','No') DEFAULT NULL,
  PRIMARY KEY (`residence_id`),
  CONSTRAINT `dorms_ibfk_1` FOREIGN KEY (`residence_id`) REFERENCES `residences` (`residence_id`),
  CONSTRAINT `dorms_ibfk_2` FOREIGN KEY (`residence_id`) REFERENCES `residences` (`residence_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dorms`
--

LOCK TABLES `dorms` WRITE;
/*!40000 ALTER TABLE `dorms` DISABLE KEYS */;
INSERT INTO `dorms` VALUES (5,'Yes',6000,3,'Yes','No','No','None','Yes','Yes'),(6,'Yes',1250,4,'Yes','No','Yes','01.00 am','Yes','No'),(7,'No',800,4,'Yes','No','No','11.00 pm','Yes','No'),(8,'Yes',4500,4,'Yes','Yes','Yes','None','Yes','Yes');
/*!40000 ALTER TABLE `dorms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `houses`
--

DROP TABLE IF EXISTS `houses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `houses` (
  `residence_id` int(11) NOT NULL,
  `monthly_price` int(6) DEFAULT NULL,
  `whiteApp` enum('Yes','No') DEFAULT NULL,
  `furniture` enum('Yes','No') DEFAULT NULL,
  `res_type` varchar(20) DEFAULT NULL,
  `numRooms` tinyint(4) DEFAULT NULL,
  `parking_lot` enum('Yes','No') DEFAULT NULL,
  `rental_period` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`residence_id`),
  CONSTRAINT `houses_ibfk_1` FOREIGN KEY (`residence_id`) REFERENCES `residences` (`residence_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `houses`
--

LOCK TABLES `houses` WRITE;
/*!40000 ALTER TABLE `houses` DISABLE KEYS */;
INSERT INTO `houses` VALUES (1,1500,'Yes','No','Residence',2,'Yes',1),(2,2000,'Yes','No','Housing Estate',2,'Yes',1),(3,750,'No','No','Apartment',3,'No',1),(4,2700,'Yes','Yes','Housing Estate',3,'Yes',2);
/*!40000 ALTER TABLE `houses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `levels`
--

DROP TABLE IF EXISTS `levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `levels` (
  `school_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `level` varchar(30) DEFAULT NULL,
  `level_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`level_id`),
  KEY `school_id` (`school_id`),
  CONSTRAINT `levels_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `schools` (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `levels`
--

LOCK TABLES `levels` WRITE;
/*!40000 ALTER TABLE `levels` DISABLE KEYS */;
/*!40000 ALTER TABLE `levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `neighborhoods`
--

DROP TABLE IF EXISTS `neighborhoods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `neighborhoods` (
  `neighborhood_id` int(11) NOT NULL,
  `neighborhood_name` varchar(50) DEFAULT NULL,
  `proximity` int(11) DEFAULT NULL,
  `transportation` varchar(100) DEFAULT NULL,
  `mall_nearby` enum('Yes','No') DEFAULT NULL,
  PRIMARY KEY (`neighborhood_id`),
  UNIQUE KEY `neighborhood_name` (`neighborhood_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `neighborhoods`
--

LOCK TABLES `neighborhoods` WRITE;
/*!40000 ALTER TABLE `neighborhoods` DISABLE KEYS */;
INSERT INTO `neighborhoods` VALUES (1,'Kadikoy',5,'High','Yes'),(2,'Besiktas',5,'High','No'),(3,'Taksim',9,'High','Yes'),(4,'Tuzla',36,'Low','Yes'),(5,'Sariyer',23,'Low','No'),(6,'Sisli',18,'Medium','Yes'),(7,'Kartal',14,'Medium','Yes'),(8,'Bostanci',10,'Medium','Yes'),(9,'Zekeriyakoy',32,'Very Low','No');
/*!40000 ALTER TABLE `neighborhoods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `neighborshort`
--

DROP TABLE IF EXISTS `neighborshort`;
/*!50001 DROP VIEW IF EXISTS `neighborshort`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `neighborshort` AS SELECT 
 1 AS `neighborhood_name`,
 1 AS `neighborhood_id`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `privatedorms`
--

DROP TABLE IF EXISTS `privatedorms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privatedorms` (
  `residence_id` int(11) NOT NULL,
  `dinerstat` enum('Yes','No') DEFAULT NULL,
  PRIMARY KEY (`residence_id`),
  CONSTRAINT `privatedorms_ibfk_1` FOREIGN KEY (`residence_id`) REFERENCES `residences` (`residence_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privatedorms`
--

LOCK TABLES `privatedorms` WRITE;
/*!40000 ALTER TABLE `privatedorms` DISABLE KEYS */;
INSERT INTO `privatedorms` VALUES (6,'Yes'),(7,'No');
/*!40000 ALTER TABLE `privatedorms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `residences`
--

DROP TABLE IF EXISTS `residences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `residences` (
  `residence_id` int(11) NOT NULL,
  `neighborhood_id` int(11) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `squaremeter` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`residence_id`),
  KEY `neighborhood_id` (`neighborhood_id`),
  CONSTRAINT `residences_ibfk_1` FOREIGN KEY (`neighborhood_id`) REFERENCES `neighborhoods` (`neighborhood_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `residences`
--

LOCK TABLES `residences` WRITE;
/*!40000 ALTER TABLE `residences` DISABLE KEYS */;
INSERT INTO `residences` VALUES (1,4,'Yenisehir Mh. Pendik / Istanbul',96),(2,4,'Yenisehir Mh. Pendik / Istanbul',90),(3,7,'Tavsancik Mh. Kartal / Istanbul',90),(4,5,'Tepe Mh. Sariyer / Istanbul',125),(5,6,'Koc University',40),(6,1,'Yuvali Mh. Kadikoy / Istanbul',45),(7,4,'Orta Mh. Tuzla / Istanbul',40),(8,4,'Sabanci University',40);
/*!40000 ALTER TABLE `residences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schooldorms`
--

DROP TABLE IF EXISTS `schooldorms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schooldorms` (
  `residence_id` int(11) NOT NULL,
  `school_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`residence_id`),
  CONSTRAINT `schooldorms_ibfk_1` FOREIGN KEY (`residence_id`) REFERENCES `residences` (`residence_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schooldorms`
--

LOCK TABLES `schooldorms` WRITE;
/*!40000 ALTER TABLE `schooldorms` DISABLE KEYS */;
INSERT INTO `schooldorms` VALUES (4,'Sabanci University'),(5,'Koc University'),(8,'Sabanci University');
/*!40000 ALTER TABLE `schooldorms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schools`
--

DROP TABLE IF EXISTS `schools`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schools` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(50) DEFAULT NULL,
  `school_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schools`
--

LOCK TABLES `schools` WRITE;
/*!40000 ALTER TABLE `schools` DISABLE KEYS */;
INSERT INTO `schools` VALUES (1,'Sabanci University','Orhanli Mh. Tuzla / Istanbul'),(2,'Cerrahpasa University School of Medicine','Bas Mh. Acibadem / Istanbul'),(3,'Koc University','Dogan Mh. Sariyer / Istanbul');
/*!40000 ALTER TABLE `schools` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `username` varchar(50) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `stu_name` varchar(30) DEFAULT NULL,
  `stu_age` tinyint(4) DEFAULT NULL,
  `sex` enum('Male','Female') DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  `school_id` mediumint(9) DEFAULT NULL,
  `does_smoke` enum('Yes','No') DEFAULT NULL,
  `use_alcohol` enum('Yes','No') DEFAULT NULL,
  `edu_dur` tinyint(4) DEFAULT NULL,
  `freeze_stat` varchar(50) DEFAULT NULL,
  `allergies` varchar(100) DEFAULT NULL,
  `has_pet` enum('Yes','No') DEFAULT NULL,
  `stay_duration` tinyint(4) DEFAULT NULL,
  `pref_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`username`),
  KEY `pref_id` (`pref_id`),
  CONSTRAINT `students_ibfk_1` FOREIGN KEY (`pref_id`) REFERENCES `neighborhoods` (`neighborhood_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES ('aky','123456789','Ege Akyildiz',21,'Male','Freshman',2,'Yes','Yes',6,'No','None','Yes',5,3),('aledi','Doktorum Ben','Dide Arslan',23,'Female','Senior',3,'No','Yes',5,'No','None','Yes',1,5),('bbunal','456789','Betul Unal',20,'Female','Junior',3,'Yes','Yes',4,'Two Semesters - Next Year','None','No',1,6),('burkizyo','GS1905','Burak Venedik',20,'Male','Sophomore',1,'No','Yes',4,'One Semester -Next Year','None','No',2,6),('giraykaya','123456789','Giray Kamil Kaya',21,'Male','Sophomore',1,'No','Yes',4,'No','None','No',1,9),('gizemayydin','gizem','Gizem Aydin',20,'Female','Sophomore',1,'Yes','Yes',4,'No','None','No',2,8),('karacam_96','karacam_123!','Poyraz Kivanc Karacam',21,'Male','Sophomore',1,'Yes','No',4,'No','None','No',2,8),('yagizyilmaz','yagiz_123!','Yagiz Yilmaz',24,'Male','Sophomore',1,'Yes','Yes',4,'No','Dust','No',2,5);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `studentview`
--

DROP TABLE IF EXISTS `studentview`;
/*!50001 DROP VIEW IF EXISTS `studentview`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `studentview` AS SELECT 
 1 AS `username`,
 1 AS `stu_name`,
 1 AS `school_id`,
 1 AS `stu_age`,
 1 AS `sex`,
 1 AS `class`,
 1 AS `does_smoke`,
 1 AS `use_alcohol`,
 1 AS `edu_dur`,
 1 AS `freeze_stat`,
 1 AS `allergies`,
 1 AS `has_pet`,
 1 AS `stay_duration`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'roommate_finder_db'
--

--
-- Dumping routines for database 'roommate_finder_db'
--
/*!50003 DROP PROCEDURE IF EXISTS `SearchBySchool` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SearchBySchool`(scid INT)
BEGIN
	SELECT username, stu_name, stu_age, sex, class, school_id FROM students
   	WHERE scid = school_id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SearchStudent` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SearchStudent`(sname varchar(20),
                               sage INT(10),
                               sx ENUM('Male','Female'),
                               clss varchar(20),
                               dosmoke ENUM('Yes','No'),
                               alcohol ENUM('Yes','No'),
                               edudur tinyint(4),
                               freeze varchar(50),
                               alrg varchar(100),
                               pet ENUM('Yes','No'),
                               stay tinyint(4))
BEGIN
  SELECT * FROM StudentView
  WHERE (stu_name = sname or sname IS NULL) and
        (stu_age = sage or sage IS NULL) and
        (sex = sx or sx IS NULL) and
        (class = clss or clss IS NULL) and
        (does_smoke = dosmoke or dosmoke IS NULL) and
        (use_alcohol = alcohol or alcohol IS NULL) and
        (edu_dur = edudur or edudur IS NULL) and
        (freeze_stat = freeze or freeze IS NULL) and
        (allergies = alrg or alrg IS NULL) and
        (has_pet = pet or pet IS NULL) and
        (stay_duration = stay or stay IS NULL);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `neighborshort`
--

/*!50001 DROP VIEW IF EXISTS `neighborshort`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `neighborshort` AS select `neighborhoods`.`neighborhood_name` AS `neighborhood_name`,`neighborhoods`.`neighborhood_id` AS `neighborhood_id` from `neighborhoods` order by `neighborhoods`.`neighborhood_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `studentview`
--

/*!50001 DROP VIEW IF EXISTS `studentview`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `studentview` AS select `students`.`username` AS `username`,`students`.`stu_name` AS `stu_name`,`students`.`school_id` AS `school_id`,`students`.`stu_age` AS `stu_age`,`students`.`sex` AS `sex`,`students`.`class` AS `class`,`students`.`does_smoke` AS `does_smoke`,`students`.`use_alcohol` AS `use_alcohol`,`students`.`edu_dur` AS `edu_dur`,`students`.`freeze_stat` AS `freeze_stat`,`students`.`allergies` AS `allergies`,`students`.`has_pet` AS `has_pet`,`students`.`stay_duration` AS `stay_duration` from `students` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-21 23:42:11
