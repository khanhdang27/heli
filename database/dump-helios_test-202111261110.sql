-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: 178.128.213.86    Database: helios_test
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

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
-- Table structure for table `answer_items`
--

DROP TABLE IF EXISTS `answer_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `answerItemable_id` bigint NOT NULL,
  `answerItemable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer_items`
--

LOCK TABLES `answer_items` WRITE;
/*!40000 ALTER TABLE `answer_items` DISABLE KEYS */;
INSERT INTO `answer_items` VALUES (1,1,'App\\Models\\ReadingQuestion','1',0,NULL,'2021-11-22 23:48:42','2021-11-22 23:48:50'),(2,1,'App\\Models\\ReadingQuestion','2',1,NULL,'2021-11-22 23:48:45','2021-11-22 23:48:50'),(3,1,'App\\Models\\ReadingQuestion','3',0,NULL,'2021-11-22 23:48:48','2021-11-22 23:48:50'),(4,2,'App\\Models\\ReadingQuestion','1',0,NULL,'2021-11-22 23:48:57','2021-11-22 23:49:05'),(5,2,'App\\Models\\ReadingQuestion','2',0,NULL,'2021-11-22 23:49:00','2021-11-22 23:49:05'),(6,2,'App\\Models\\ReadingQuestion','3',1,NULL,'2021-11-22 23:49:03','2021-11-22 23:49:05'),(7,1,'App\\Models\\WritingAssessmentQuestion','4',1,NULL,'2021-11-22 23:49:48','2021-11-22 23:49:59'),(8,1,'App\\Models\\WritingAssessmentQuestion','5',0,NULL,'2021-11-22 23:49:53','2021-11-22 23:49:59'),(9,1,'App\\Models\\WritingAssessmentQuestion','6',0,NULL,'2021-11-22 23:49:56','2021-11-22 23:49:59'),(10,2,'App\\Models\\WritingAssessmentQuestion','4',0,NULL,'2021-11-22 23:50:10','2021-11-22 23:50:19'),(11,2,'App\\Models\\WritingAssessmentQuestion','5',1,NULL,'2021-11-22 23:50:13','2021-11-22 23:50:19'),(12,2,'App\\Models\\WritingAssessmentQuestion','6',0,NULL,'2021-11-22 23:50:17','2021-11-22 23:50:19'),(13,3,'App\\Models\\ListenAssessmentQuestion','3 + 5 = ?',0,'2021-11-22 23:52:01','2021-11-22 23:51:46','2021-11-22 23:52:01'),(14,1,'App\\Models\\ListenAssessmentQuestion','4',0,NULL,'2021-11-22 23:52:34','2021-11-22 23:52:45'),(15,1,'App\\Models\\ListenAssessmentQuestion','5',1,NULL,'2021-11-22 23:52:37','2021-11-22 23:52:45'),(16,1,'App\\Models\\ListenAssessmentQuestion','6',0,NULL,'2021-11-22 23:52:40','2021-11-22 23:52:45'),(17,2,'App\\Models\\ListenAssessmentQuestion','4',0,NULL,'2021-11-22 23:52:53','2021-11-22 23:53:05'),(18,2,'App\\Models\\ListenAssessmentQuestion','5',0,NULL,'2021-11-22 23:52:57','2021-11-22 23:53:05'),(19,2,'App\\Models\\ListenAssessmentQuestion','6',1,NULL,'2021-11-22 23:53:00','2021-11-22 23:53:05'),(20,3,'App\\Models\\ListenAssessmentQuestion','7',1,NULL,'2021-11-22 23:53:14','2021-11-22 23:53:24'),(21,3,'App\\Models\\ListenAssessmentQuestion','8',0,NULL,'2021-11-22 23:53:18','2021-11-22 23:53:24'),(22,3,'App\\Models\\ListenAssessmentQuestion','9',0,NULL,'2021-11-22 23:53:21','2021-11-22 23:53:24'),(23,4,'App\\Models\\ListenAssessmentQuestion','7',0,NULL,'2021-11-22 23:53:33','2021-11-22 23:53:49'),(24,4,'App\\Models\\ListenAssessmentQuestion','8',1,NULL,'2021-11-22 23:53:41','2021-11-22 23:53:49'),(25,4,'App\\Models\\ListenAssessmentQuestion','9',0,NULL,'2021-11-22 23:53:44','2021-11-22 23:53:49'),(26,1,'App\\Models\\SpeakAssessmentQuestion','2',0,NULL,'2021-11-22 23:55:11','2021-11-22 23:55:25'),(27,1,'App\\Models\\SpeakAssessmentQuestion','4',1,NULL,'2021-11-22 23:55:17','2021-11-22 23:55:25'),(28,1,'App\\Models\\SpeakAssessmentQuestion','6',0,NULL,'2021-11-22 23:55:22','2021-11-22 23:55:25'),(29,2,'App\\Models\\SpeakAssessmentQuestion','3',0,NULL,'2021-11-22 23:55:37','2021-11-22 23:55:48'),(30,2,'App\\Models\\SpeakAssessmentQuestion','5',1,NULL,'2021-11-22 23:55:40','2021-11-22 23:55:48'),(31,2,'App\\Models\\SpeakAssessmentQuestion','7',0,NULL,'2021-11-22 23:55:45','2021-11-22 23:55:48'),(32,3,'App\\Models\\ReadingQuestion','Sam likes warm weather',1,NULL,'2021-11-23 07:40:58','2021-11-23 07:42:48'),(33,3,'App\\Models\\ReadingQuestion','Sam doesn\'t like warm weather at all',0,NULL,'2021-11-23 07:41:08','2021-11-23 07:42:48'),(34,3,'App\\Models\\ReadingQuestion','Sam hates warm water',0,NULL,'2021-11-23 07:41:19','2021-11-23 07:42:48'),(35,4,'App\\Models\\ReadingQuestion','His Spanish is very good',0,NULL,'2021-11-23 07:44:31','2021-11-23 07:44:55'),(36,4,'App\\Models\\ReadingQuestion','He speaks Spanish very well',0,NULL,'2021-11-23 07:44:44','2021-11-23 07:44:55'),(37,4,'App\\Models\\ReadingQuestion','He doesn\'t speak Spanish very well',1,NULL,'2021-11-23 07:44:53','2021-11-23 07:44:55'),(38,5,'App\\Models\\ReadingQuestion','it was cheaper than going to the mountains',0,NULL,'2021-11-23 07:49:32','2021-11-23 07:50:07'),(39,5,'App\\Models\\ReadingQuestion','the travel agent said that it was the cheapest',0,NULL,'2021-11-23 07:49:41','2021-11-23 07:50:07'),(40,5,'App\\Models\\ReadingQuestion','of the hot weather in the mountains',1,NULL,'2021-11-23 07:50:04','2021-11-23 07:50:07'),(41,6,'App\\Models\\ReadingQuestion','best',0,NULL,'2021-11-23 07:50:19','2021-11-23 07:50:45'),(42,6,'App\\Models\\ReadingQuestion','cheapest',1,NULL,'2021-11-23 07:50:31','2021-11-23 07:50:45'),(43,6,'App\\Models\\ReadingQuestion','easiest',0,NULL,'2021-11-23 07:50:41','2021-11-23 07:50:45'),(44,7,'App\\Models\\ReadingQuestion','more fun',0,NULL,'2021-11-23 07:52:44','2021-11-23 07:53:01'),(45,7,'App\\Models\\ReadingQuestion','expensive',0,NULL,'2021-11-23 07:52:51','2021-11-23 07:53:01'),(46,7,'App\\Models\\ReadingQuestion','faster',1,NULL,'2021-11-23 07:52:58','2021-11-23 07:53:01'),(47,8,'App\\Models\\ReadingQuestion','didn\'t like',0,NULL,'2021-11-23 07:53:41','2021-11-23 07:54:03'),(48,8,'App\\Models\\ReadingQuestion','enjoyed',1,NULL,'2021-11-23 07:53:47','2021-11-23 07:54:03'),(49,8,'App\\Models\\ReadingQuestion','regretted',0,NULL,'2021-11-23 07:54:01','2021-11-23 07:54:03'),(50,5,'App\\Models\\ListenAssessmentQuestion','1',1,NULL,'2021-11-23 09:57:14','2021-11-23 09:57:47'),(51,5,'App\\Models\\ListenAssessmentQuestion','2',0,NULL,'2021-11-23 09:57:19','2021-11-23 09:57:47'),(52,5,'App\\Models\\ListenAssessmentQuestion','don\'t know',0,NULL,'2021-11-23 09:57:42','2021-11-23 09:57:47'),(53,6,'App\\Models\\ListenAssessmentQuestion','no',0,NULL,'2021-11-23 09:57:59','2021-11-23 09:58:07'),(54,6,'App\\Models\\ListenAssessmentQuestion','yes',1,NULL,'2021-11-23 09:58:04','2021-11-23 09:58:07'),(55,7,'App\\Models\\ListenAssessmentQuestion','2',1,NULL,'2021-11-23 09:58:42','2021-11-23 09:58:52'),(56,7,'App\\Models\\ListenAssessmentQuestion','1',0,NULL,'2021-11-23 09:58:46','2021-11-23 09:58:52'),(57,8,'App\\Models\\ListenAssessmentQuestion','4',0,NULL,'2021-11-23 10:05:23','2021-11-23 10:05:42'),(58,8,'App\\Models\\ListenAssessmentQuestion','3',1,NULL,'2021-11-23 10:05:29','2021-11-23 10:05:42'),(59,8,'App\\Models\\ListenAssessmentQuestion','12',0,NULL,'2021-11-23 10:05:34','2021-11-23 10:05:42'),(60,9,'App\\Models\\ListenAssessmentQuestion','4',1,NULL,'2021-11-23 10:06:24','2021-11-23 10:39:29'),(61,3,'App\\Models\\WritingAssessmentQuestion','yes',1,NULL,'2021-11-23 10:21:32','2021-11-23 10:22:01'),(62,3,'App\\Models\\WritingAssessmentQuestion','no',0,NULL,'2021-11-23 10:21:38','2021-11-23 10:22:01'),(63,3,'App\\Models\\WritingAssessmentQuestion','error',0,NULL,'2021-11-23 10:21:47','2021-11-23 10:22:01'),(64,4,'App\\Models\\WritingAssessmentQuestion','Right',1,NULL,'2021-11-23 10:23:03','2021-11-23 10:23:14'),(65,4,'App\\Models\\WritingAssessmentQuestion','Wrong',0,NULL,'2021-11-23 10:23:11','2021-11-23 10:23:14'),(66,5,'App\\Models\\WritingAssessmentQuestion','you',1,NULL,'2021-11-23 10:25:29','2021-11-23 10:25:48'),(67,5,'App\\Models\\WritingAssessmentQuestion','me',0,NULL,'2021-11-23 10:25:37','2021-11-23 10:25:48'),(68,5,'App\\Models\\WritingAssessmentQuestion','your',0,NULL,'2021-11-23 10:25:43','2021-11-23 10:25:48'),(69,10,'App\\Models\\ListenAssessmentQuestion','2',1,NULL,'2021-11-23 10:30:37','2021-11-23 10:30:45'),(70,10,'App\\Models\\ListenAssessmentQuestion','11',0,NULL,'2021-11-23 10:30:41','2021-11-23 10:30:45'),(71,11,'App\\Models\\ListenAssessmentQuestion','3',1,NULL,'2021-11-23 10:32:49','2021-11-23 10:32:56'),(72,11,'App\\Models\\ListenAssessmentQuestion','12',0,NULL,'2021-11-23 10:32:54','2021-11-23 10:32:56'),(73,12,'App\\Models\\ListenAssessmentQuestion','5',1,NULL,'2021-11-23 10:33:45','2021-11-23 10:34:00'),(74,12,'App\\Models\\ListenAssessmentQuestion','14',0,NULL,'2021-11-23 10:33:56','2021-11-23 10:34:00'),(75,13,'App\\Models\\ListenAssessmentQuestion','8',1,NULL,'2021-11-23 10:35:43','2021-11-23 10:35:56'),(76,13,'App\\Models\\ListenAssessmentQuestion','9',0,NULL,'2021-11-23 10:35:49','2021-11-23 10:35:56'),(77,13,'App\\Models\\ListenAssessmentQuestion','10',0,NULL,'2021-11-23 10:35:54','2021-11-23 10:35:56'),(78,14,'App\\Models\\ListenAssessmentQuestion','9',1,NULL,'2021-11-23 10:36:39','2021-11-23 10:36:55'),(79,14,'App\\Models\\ListenAssessmentQuestion','10',0,NULL,'2021-11-23 10:36:44','2021-11-23 10:36:55'),(80,14,'App\\Models\\ListenAssessmentQuestion','11',0,NULL,'2021-11-23 10:36:52','2021-11-23 10:36:55'),(81,15,'App\\Models\\ListenAssessmentQuestion','21',0,'2021-11-23 10:38:43','2021-11-23 10:38:22','2021-11-23 10:38:43'),(82,15,'App\\Models\\ListenAssessmentQuestion','22',0,NULL,'2021-11-23 10:38:59','2021-11-23 10:39:14'),(83,15,'App\\Models\\ListenAssessmentQuestion','23',0,NULL,'2021-11-23 10:39:04','2021-11-23 10:39:14'),(84,15,'App\\Models\\ListenAssessmentQuestion','21',1,NULL,'2021-11-23 10:39:10','2021-11-23 10:39:14'),(85,9,'App\\Models\\ListenAssessmentQuestion','5',0,NULL,'2021-11-23 10:39:27','2021-11-23 10:39:29'),(86,6,'App\\Models\\WritingAssessmentQuestion','ready',1,NULL,'2021-11-23 10:42:57','2021-11-23 10:43:06'),(87,6,'App\\Models\\WritingAssessmentQuestion','you',0,NULL,'2021-11-23 10:43:03','2021-11-23 10:43:06'),(88,7,'App\\Models\\WritingAssessmentQuestion','12',1,NULL,'2021-11-23 10:44:15','2021-11-23 10:44:25'),(89,7,'App\\Models\\WritingAssessmentQuestion','13',0,NULL,'2021-11-23 10:44:22','2021-11-23 10:44:25'),(90,10,'App\\Models\\ListenAssessmentQuestion','10',0,NULL,'2021-11-23 14:48:43','2021-11-23 14:48:43'),(91,11,'App\\Models\\ListenAssessmentQuestion','11',0,NULL,'2021-11-23 14:48:54','2021-11-23 14:48:54'),(92,9,'App\\Models\\ReadingQuestion','yes',1,NULL,'2021-11-25 12:43:34','2021-11-25 12:50:02'),(93,9,'App\\Models\\ReadingQuestion','no',0,NULL,'2021-11-25 12:43:41','2021-11-25 12:50:02'),(94,10,'App\\Models\\ReadingQuestion','2',1,NULL,'2021-11-25 13:00:05','2021-11-25 13:00:22'),(95,10,'App\\Models\\ReadingQuestion','3',0,NULL,'2021-11-25 13:00:11','2021-11-25 13:00:22'),(96,10,'App\\Models\\ReadingQuestion','4',0,NULL,'2021-11-25 13:00:15','2021-11-25 13:00:22'),(97,11,'App\\Models\\ReadingQuestion','4',1,NULL,'2021-11-25 13:00:55','2021-11-25 13:01:13'),(98,11,'App\\Models\\ReadingQuestion','5',0,NULL,'2021-11-25 13:01:05','2021-11-25 13:01:13'),(99,11,'App\\Models\\ReadingQuestion','6',0,NULL,'2021-11-25 13:01:10','2021-11-25 13:01:13'),(100,12,'App\\Models\\ReadingQuestion','3',1,NULL,'2021-11-25 13:02:56','2021-11-25 13:03:12'),(101,12,'App\\Models\\ReadingQuestion','4',0,NULL,'2021-11-25 13:03:01','2021-11-25 13:03:12'),(102,12,'App\\Models\\ReadingQuestion','5',0,NULL,'2021-11-25 13:03:07','2021-11-25 13:03:12'),(103,13,'App\\Models\\ReadingQuestion','Boston',0,NULL,'2021-11-26 03:36:54','2021-11-26 03:37:19'),(104,13,'App\\Models\\ReadingQuestion','New York',1,NULL,'2021-11-26 03:37:05','2021-11-26 03:37:19'),(105,13,'App\\Models\\ReadingQuestion','Berlin',0,NULL,'2021-11-26 03:37:17','2021-11-26 03:37:19'),(106,14,'App\\Models\\ReadingQuestion','Art',0,NULL,'2021-11-26 03:37:34','2021-11-26 03:38:04'),(107,14,'App\\Models\\ReadingQuestion','French',0,NULL,'2021-11-26 03:37:42','2021-11-26 03:38:04'),(108,14,'App\\Models\\ReadingQuestion','English',1,NULL,'2021-11-26 03:38:03','2021-11-26 03:38:04'),(109,15,'App\\Models\\ReadingQuestion','Bill, John, Tom',0,NULL,'2021-11-26 03:39:46','2021-11-26 03:40:44'),(110,15,'App\\Models\\ReadingQuestion','Bill, Tony, Paul',1,NULL,'2021-11-26 03:40:12','2021-11-26 03:40:44'),(111,15,'App\\Models\\ReadingQuestion','Anna, Margaret, Tanya',0,NULL,'2021-11-26 03:40:42','2021-11-26 03:40:44'),(112,16,'App\\Models\\ReadingQuestion','thirteen',0,NULL,'2021-11-26 03:41:29','2021-11-26 03:41:57'),(113,16,'App\\Models\\ReadingQuestion','eleven',0,NULL,'2021-11-26 03:41:45','2021-11-26 03:41:57'),(114,16,'App\\Models\\ReadingQuestion','fourteen',1,NULL,'2021-11-26 03:41:55','2021-11-26 03:41:57'),(115,17,'App\\Models\\ReadingQuestion','Wake up',1,NULL,'2021-11-26 03:43:23','2021-11-26 03:44:02'),(116,17,'App\\Models\\ReadingQuestion','Walk to school',0,NULL,'2021-11-26 03:43:43','2021-11-26 03:44:02'),(117,17,'App\\Models\\ReadingQuestion','get dressed',0,NULL,'2021-11-26 03:44:00','2021-11-26 03:44:02'),(118,18,'App\\Models\\ReadingQuestion','Rain',0,NULL,'2021-11-26 03:44:49','2021-11-26 03:45:15'),(119,18,'App\\Models\\ReadingQuestion','Go to bed',0,NULL,'2021-11-26 03:45:06','2021-11-26 03:45:15'),(120,18,'App\\Models\\ReadingQuestion','Books',1,NULL,'2021-11-26 03:45:13','2021-11-26 03:45:15'),(121,19,'App\\Models\\ReadingQuestion','Drive a car',0,NULL,'2021-11-26 03:46:25','2021-11-26 03:48:52'),(122,19,'App\\Models\\ReadingQuestion','Walk',1,NULL,'2021-11-26 03:48:33','2021-11-26 03:48:52'),(123,19,'App\\Models\\ReadingQuestion','ride the bus',0,NULL,'2021-11-26 03:48:48','2021-11-26 03:48:52'),(124,20,'App\\Models\\ReadingQuestion','Sandwich',0,NULL,'2021-11-26 03:49:28','2021-11-26 03:50:12'),(125,20,'App\\Models\\ReadingQuestion','Pie',0,NULL,'2021-11-26 03:49:36','2021-11-26 03:50:12'),(126,20,'App\\Models\\ReadingQuestion','Apple',0,NULL,'2021-11-26 03:49:47','2021-11-26 03:50:12'),(127,20,'App\\Models\\ReadingQuestion','Soup',1,NULL,'2021-11-26 03:50:10','2021-11-26 03:50:12');
/*!40000 ALTER TABLE `answer_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audio_files`
--

DROP TABLE IF EXISTS `audio_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audio_files` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `audio_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audio_files`
--

LOCK TABLES `audio_files` WRITE;
/*!40000 ALTER TABLE `audio_files` DISABLE KEYS */;
INSERT INTO `audio_files` VALUES (1,'ee4f39aa96e','audio/1lyOuoD2TskTmbFbZ5CAkisUWkBSUXGOyv37Phbd.mp3','file_example_MP3_700KB.mp3','0.764176',NULL,'2021-11-22 23:50:33','2021-11-22 23:50:33'),(2,'ee4f39bf600','audio/ExgkpqSjq9JtR9e0SDQulyL6VxLwNzQUbU6DbIgL.mp3','file_example_MP3_700KB.mp3','0.764176',NULL,'2021-11-22 23:50:41','2021-11-22 23:50:41'),(3,'ee4f3c03b12','audio/lqWkAqTwmLa4McsxVYU6JWJJe5Ojc1g4jfYXVhnn.mp3','file_example_MP3_700KB.mp3','0.764176',NULL,'2021-11-22 23:54:39','2021-11-22 23:54:39'),(4,'ee4f3c382de','audio/dlHVJ7hBwIKHDxQqQmDWAHz1Ol457CSv2IKgcm7d.mp3','file_example_MP3_700KB.mp3','0.764176',NULL,'2021-11-22 23:55:00','2021-11-22 23:55:00'),(5,'ee4fa3a2292','audio/nOFhHpE2F4WSNsLj7RtMbqsc9SlUa4wCckGkHSWl.mp3','file_example_MP3_5MG.mp3','5.289384',NULL,'2021-11-23 09:55:44','2021-11-23 09:55:44'),(6,'ee4fa3d635d','audio/h7VSr8NaRW4JphgtZI42sAorRtFUhQx9201sqznM.mp3','file_example_MP3_5MG (1).mp3','5.289384',NULL,'2021-11-23 09:56:05','2021-11-23 09:56:05'),(7,'ee4fa7db06a','audio/S0gSNUckfOnCZTY4Yvy4GToko9yxOzYQRoxEcg0g.mp3','file_example_MP3_5MG.mp3','5.289384',NULL,'2021-11-23 10:03:07','2021-11-23 10:03:07'),(8,'ee4fa80ac1d','audio/Q4OA4ug1U2Nt2o3geOIXItXwLTDDVdD3Zg7Czaov.mp3','file_example_MP3_5MG (1).mp3','5.289384',NULL,'2021-11-23 10:03:26','2021-11-23 10:03:26'),(9,'ee4fb684ff7','audio/FmrDHNgJAS6o8TXpCc00vPeHvkW2qJU5sxPe6ls3.mp3','file_example_MP3_5MG.mp3','5.289384',NULL,'2021-11-23 10:28:44','2021-11-23 10:28:44'),(10,'ee4fb6f9a11','audio/AGr0dg2iwPhMDSSgzg2lpR5vbalMYSdJcdZkzhMN.mp3','file_example_MP3_5MG (1).mp3','5.289384',NULL,'2021-11-23 10:29:32','2021-11-23 10:29:32'),(11,'ee4fb8750a0','audio/z07kn4vh2Ul1ChcmOmjdCNs7elAjzi2lmGxMIkU2.mp3','file_example_MP3_5MG.mp3','5.289384',NULL,'2021-11-23 10:32:08','2021-11-23 10:32:08'),(12,'ee4fb89a58b','audio/ZQaQQm0sf0GJhcUvKtFujNIiUW9yTIsFUY6xSP2j.mp3','file_example_MP3_5MG (1).mp3','5.289384',NULL,'2021-11-23 10:32:23','2021-11-23 10:32:23'),(13,'ee4fba4b25b','audio/scp0zp2zO7HSCCtqCMkv2YKBreym7XhBaGwheh0N.mp3','file_example_MP3_5MG.mp3','5.289384',NULL,'2021-11-23 10:35:20','2021-11-23 10:35:20'),(14,'ee4fba6d84d','audio/yjWm6FGSruBtydyQUxiXzUGGKOPraJu9gy9w0Dm9.mp3','file_example_MP3_5MG (1).mp3','5.289384',NULL,'2021-11-23 10:35:34','2021-11-23 10:35:34');
/*!40000 ALTER TABLE `audio_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audio_listens`
--

DROP TABLE IF EXISTS `audio_listens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audio_listens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `exam_id` bigint unsigned NOT NULL,
  `quiz_id` bigint unsigned NOT NULL,
  `part` int NOT NULL,
  `audio_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `audio_listens_course_id_foreign` (`course_id`),
  KEY `audio_listens_exam_id_foreign` (`exam_id`),
  KEY `audio_listens_quiz_id_foreign` (`quiz_id`),
  CONSTRAINT `audio_listens_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `audio_listens_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  CONSTRAINT `audio_listens_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audio_listens`
--

LOCK TABLES `audio_listens` WRITE;
/*!40000 ALTER TABLE `audio_listens` DISABLE KEYS */;
INSERT INTO `audio_listens` VALUES (1,1,1,1,2,'ee4f39aa96e',NULL,'2021-11-22 23:50:33','2021-11-22 23:50:33'),(2,1,1,1,1,'ee4f39bf600',NULL,'2021-11-22 23:50:41','2021-11-22 23:50:41'),(3,5,6,18,1,'ee4fa3a2292',NULL,'2021-11-23 09:55:44','2021-11-23 09:55:44'),(4,5,6,18,2,'ee4fa3d635d',NULL,'2021-11-23 09:56:05','2021-11-23 09:56:05'),(5,5,7,22,1,'ee4fa7db06a',NULL,'2021-11-23 10:03:07','2021-11-23 10:03:07'),(6,5,7,22,2,'ee4fa80ac1d',NULL,'2021-11-23 10:03:26','2021-11-23 10:03:26'),(7,5,7,23,1,'ee4fb684ff7',NULL,'2021-11-23 10:28:44','2021-11-23 10:28:44'),(8,5,7,23,2,'ee4fb6f9a11',NULL,'2021-11-23 10:29:32','2021-11-23 10:29:32'),(9,5,7,24,1,'ee4fb8750a0',NULL,'2021-11-23 10:32:08','2021-11-23 10:32:08'),(10,5,7,24,2,'ee4fb89a58b',NULL,'2021-11-23 10:32:23','2021-11-23 10:32:23'),(11,5,7,25,1,'ee4fba4b25b',NULL,'2021-11-23 10:35:20','2021-11-23 10:35:20'),(12,5,7,25,2,'ee4fba6d84d',NULL,'2021-11-23 10:35:34','2021-11-23 10:35:34');
/*!40000 ALTER TABLE `audio_listens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `banner_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'太陽神教育網上課程 全面協助你的升學計畫',NULL,'2021-11-23 07:46:10','2021-11-23 07:46:10');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_tag`
--

DROP TABLE IF EXISTS `blog_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_tag` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` bigint unsigned NOT NULL,
  `tag_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_tag_blog_id_foreign` (`blog_id`),
  KEY `blog_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `blog_tag_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `blog_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_tag`
--

LOCK TABLES `blog_tag` WRITE;
/*!40000 ALTER TABLE `blog_tag` DISABLE KEYS */;
INSERT INTO `blog_tag` VALUES (1,1,2,'2021-11-23 08:40:46','2021-11-23 08:40:46');
/*!40000 ALTER TABLE `blog_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_no` bigint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Lorem Ipsum','<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>\r\n\r\n<p>&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will,&nbsp;</p>',1,'2021-11-23 08:40:46','2021-11-24 03:34:05',NULL);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificates`
--

DROP TABLE IF EXISTS `certificates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `certificate_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificates`
--

LOCK TABLES `certificates` WRITE;
/*!40000 ALTER TABLE `certificates` DISABLE KEYS */;
INSERT INTO `certificates` VALUES (1,'IGCSE','International General Certificate of Secondary Education','2021-11-22 21:50:07','2021-11-22 21:50:07',NULL),(2,'UKISET','UKISET','2021-11-22 21:50:07','2021-11-22 21:50:07',NULL),(3,'IELTS','International English Language Testing System','2021-11-22 21:50:07','2021-11-22 21:50:07',NULL),(4,'IAL','International Advanced Level','2021-11-22 21:50:07','2021-11-22 21:50:07',NULL);
/*!40000 ALTER TABLE `certificates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `commentable_id` bigint NOT NULL,
  `commentable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_user` bigint DEFAULT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `like_no` bigint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_discounts`
--

DROP TABLE IF EXISTS `course_discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_discounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `discount_id` bigint unsigned NOT NULL,
  `discount_value` double NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_discounts_course_id_discount_id_unique` (`course_id`,`discount_id`),
  KEY `course_discounts_discount_id_foreign` (`discount_id`),
  CONSTRAINT `course_discounts_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  CONSTRAINT `course_discounts_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_discounts`
--

LOCK TABLES `course_discounts` WRITE;
/*!40000 ALTER TABLE `course_discounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_discounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_material`
--

DROP TABLE IF EXISTS `course_material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_material` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_material_course_id_foreign` (`course_id`),
  CONSTRAINT `course_material_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_material`
--

LOCK TABLES `course_material` WRITE;
/*!40000 ALTER TABLE `course_material` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_material_translations`
--

DROP TABLE IF EXISTS `course_material_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_material_translations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_material_id` bigint unsigned NOT NULL,
  `course_material_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_material_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_material_origin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_material_translations_course_material_id_locale_unique` (`course_material_id`,`locale`),
  KEY `course_material_translations_locale_index` (`locale`),
  CONSTRAINT `course_material_translations_course_material_id_foreign` FOREIGN KEY (`course_material_id`) REFERENCES `course_material` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_material_translations`
--

LOCK TABLES `course_material_translations` WRITE;
/*!40000 ALTER TABLE `course_material_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_material_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_membership_discounts`
--

DROP TABLE IF EXISTS `course_membership_discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_membership_discounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_discount_id` bigint DEFAULT NULL,
  `membership_course_id` bigint NOT NULL,
  `recommended` tinyint(1) NOT NULL DEFAULT '0',
  `welcomes` tinyint(1) NOT NULL DEFAULT '0',
  `hot` tinyint(1) NOT NULL DEFAULT '0',
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_membership_discounts`
--

LOCK TABLES `course_membership_discounts` WRITE;
/*!40000 ALTER TABLE `course_membership_discounts` DISABLE KEYS */;
INSERT INTO `course_membership_discounts` VALUES (1,NULL,1,0,0,0,0,NULL,'2021-11-23 07:55:30','2021-11-23 07:55:30','2021-11-23 07:55:30'),(2,NULL,2,1,1,1,1,NULL,'2021-11-23 07:55:30','2021-11-23 08:27:48',NULL),(3,NULL,3,1,1,1,1,NULL,'2021-11-23 07:55:30','2021-11-23 08:28:00',NULL),(4,NULL,4,1,0,1,1,NULL,'2021-11-23 09:42:25','2021-11-23 15:10:11',NULL),(5,NULL,5,1,1,1,1,NULL,'2021-11-23 10:09:38','2021-11-23 15:09:55',NULL),(6,NULL,6,0,0,1,1,NULL,'2021-11-26 03:29:11','2021-11-26 03:52:12',NULL);
/*!40000 ALTER TABLE `course_membership_discounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_schedules`
--

DROP TABLE IF EXISTS `course_schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_schedules` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `room_live_course_id` bigint unsigned NOT NULL,
  `study_session_id` bigint unsigned NOT NULL,
  `tutor_id` bigint unsigned NOT NULL,
  `is_test` tinyint(1) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_schedules_unique` (`course_id`,`study_session_id`,`tutor_id`,`is_test`,`date`),
  KEY `course_schedules_room_live_course_id_foreign` (`room_live_course_id`),
  KEY `course_schedules_study_session_id_foreign` (`study_session_id`),
  KEY `course_schedules_tutor_id_foreign` (`tutor_id`),
  CONSTRAINT `course_schedules_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `course_schedules_room_live_course_id_foreign` FOREIGN KEY (`room_live_course_id`) REFERENCES `room_live_courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `course_schedules_study_session_id_foreign` FOREIGN KEY (`study_session_id`) REFERENCES `study_sessions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `course_schedules_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_schedules`
--

LOCK TABLES `course_schedules` WRITE;
/*!40000 ALTER TABLE `course_schedules` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_translations`
--

DROP TABLE IF EXISTS `course_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_translations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `course_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_translations_course_id_locale_unique` (`course_id`,`locale`),
  KEY `course_translations_locale_index` (`locale`),
  CONSTRAINT `course_translations_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_translations`
--

LOCK TABLES `course_translations` WRITE;
/*!40000 ALTER TABLE `course_translations` DISABLE KEYS */;
INSERT INTO `course_translations` VALUES (1,2,'Basic English Reading 5.0','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium','en','2021-11-23 07:12:47','2021-11-23 07:14:02',NULL),(2,2,'基礎英語閱讀5.0','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium','cn','2021-11-23 07:12:47','2021-11-23 07:12:47',NULL),(3,2,'基础英语阅读5.0','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium','sc','2021-11-23 07:12:47','2021-11-23 07:12:47',NULL),(4,3,'Basic English Speaking 5.0','de Finibus Bonorum et Malorum','en','2021-11-23 07:15:20','2021-11-23 07:15:20',NULL),(5,3,'基礎英語口語 5.0','de Finibus Bonorum et Malorum','cn','2021-11-23 07:15:20','2021-11-23 07:15:20',NULL),(6,3,'基础英语口语 5.0','de Finibus Bonorum et Malorum','sc','2021-11-23 07:15:20','2021-11-23 07:15:20',NULL),(7,4,'qwe','wqe','en','2021-11-23 07:55:30','2021-11-23 07:55:30',NULL),(8,4,'qwe','qwe','cn','2021-11-23 07:55:30','2021-11-23 07:55:30',NULL),(9,4,'qwe','qwe','sc','2021-11-23 07:55:30','2021-11-23 07:55:30',NULL),(10,5,'Basic English Listening 5.0','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','en','2021-11-23 09:42:25','2021-11-23 09:42:25',NULL),(11,5,'基礎英語聽力5.0','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','cn','2021-11-23 09:42:25','2021-11-23 09:42:25',NULL),(12,5,'基础英语听力5.0','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','sc','2021-11-23 09:42:25','2021-11-23 09:42:25',NULL),(13,6,'Basic English Writing 5.0','Amet mattis vulputate enim nulla aliquet porttitor lacus luctus.','en','2021-11-23 10:09:38','2021-11-23 10:09:38',NULL),(14,6,'基礎英語寫作 5.0','Amet mattis vulputate enim nulla aliquet porttitor lacus luctus.','cn','2021-11-23 10:09:38','2021-11-23 10:09:38',NULL),(15,6,'基础英语写作 5.0','Amet mattis vulputate enim nulla aliquet porttitor lacus luctus.','sc','2021-11-23 10:09:38','2021-11-23 10:09:38',NULL),(16,7,'Reading Level 5.5','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium','en','2021-11-26 03:29:11','2021-11-26 03:29:11',NULL),(17,7,'阅读 5.5 级','deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident','cn','2021-11-26 03:29:11','2021-11-26 03:29:11',NULL),(18,7,'阅读 5.5 级','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium','sc','2021-11-26 03:29:11','2021-11-26 03:29:11',NULL);
/*!40000 ALTER TABLE `course_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subject_id` bigint unsigned NOT NULL,
  `tutor_id` bigint unsigned NOT NULL,
  `type` int NOT NULL,
  `type_part` int NOT NULL,
  `level` double NOT NULL,
  `course_overview` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_price` double NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `like_no` bigint NOT NULL DEFAULT '0',
  `comment_no` bigint NOT NULL DEFAULT '0',
  `rating_no` bigint NOT NULL DEFAULT '0',
  `rating_average` bigint NOT NULL DEFAULT '0',
  `related` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_subject_id_foreign` (`subject_id`),
  KEY `courses_tutor_id_foreign` (`tutor_id`),
  CONSTRAINT `courses_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  CONSTRAINT `courses_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,1,1,1,1,5,'',0,0,0,0,0,0,NULL,NULL,'2021-11-22 21:50:07','2021-11-22 21:50:07'),(2,2,1,2,1,5,'<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>',30,0,1,0,0,0,'7',NULL,'2021-11-23 07:12:47','2021-11-26 03:29:40'),(3,2,1,2,4,5,'<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>',32,0,0,0,0,0,'2',NULL,'2021-11-23 07:15:20','2021-11-24 14:13:56'),(4,2,1,1,1,5,'<p>qwe</p>',4,0,0,0,0,0,NULL,'2021-11-23 07:55:30','2021-11-23 07:55:30','2021-11-23 07:55:30'),(5,2,3,2,3,5,'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lacinia quis vel eros donec ac. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Et malesuada fames ac turpis egestas sed tempus. Ut tortor pretium viverra suspendisse. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum tellus. A iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor. Quam vulputate dignissim suspendisse in est. Amet consectetur adipiscing elit duis tristique sollicitudin. Sit amet est placerat in egestas erat imperdiet sed. Sed egestas egestas fringilla phasellus faucibus scelerisque. Purus viverra accumsan in nisl nisi scelerisque. Tortor vitae purus faucibus ornare. Neque viverra justo nec ultrices dui sapien eget. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt.</p>',33,0,0,0,0,0,'3',NULL,'2021-11-23 09:42:25','2021-11-26 03:51:48'),(6,2,2,2,2,5,'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lacinia quis vel eros donec ac. Eget nulla facilisi etiam dignissim diam quis enim lobortis.</p>\r\n\r\n<p>Et malesuada fames ac turpis egestas sed tempus. Ut tortor pretium viverra suspendisse. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum tellus. A iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor. Quam vulputate dignissim suspendisse in est. Amet consectetur adipiscing elit duis tristique sollicitudin. Sit amet est placerat in egestas erat imperdiet sed. Sed egestas egestas fringilla phasellus faucibus scelerisque. Purus viverra accumsan in nisl nisi scelerisque.</p>\r\n\r\n<p>Tortor vitae purus faucibus ornare. Neque viverra justo nec ultrices dui sapien eget. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt.</p>',35,0,0,0,0,0,'3',NULL,'2021-11-23 10:09:38','2021-11-26 03:51:26'),(7,2,2,2,1,5.5,'<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>',35,0,0,0,0,0,'2',NULL,'2021-11-26 03:29:11','2021-11-26 03:29:28');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discounts`
--

DROP TABLE IF EXISTS `discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discounts`
--

LOCK TABLES `discounts` WRITE;
/*!40000 ALTER TABLE `discounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `discounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examinations`
--

DROP TABLE IF EXISTS `examinations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examinations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `deadline` date NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `examinations_course_id_foreign` (`course_id`),
  CONSTRAINT `examinations_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examinations`
--

LOCK TABLES `examinations` WRITE;
/*!40000 ALTER TABLE `examinations` DISABLE KEYS */;
INSERT INTO `examinations` VALUES (1,2,'2021-07-29','test','123123','2021-07-29 02:06:20','2021-07-29 02:06:20',NULL),(2,2,'2021-07-31','test 2','test thoi','2021-07-29 09:44:42','2021-07-29 09:44:42',NULL);
/*!40000 ALTER TABLE `examinations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exams`
--

DROP TABLE IF EXISTS `exams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` int NOT NULL,
  `type` int NOT NULL,
  `course_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exams_course_id_foreign` (`course_id`),
  CONSTRAINT `exams_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exams`
--

LOCK TABLES `exams` WRITE;
/*!40000 ALTER TABLE `exams` DISABLE KEYS */;
INSERT INTO `exams` VALUES (1,'',0,1,1,'2021-11-22 21:50:07','2021-11-22 21:50:07',NULL),(2,'Exercise reading',2,2,2,'2021-11-23 07:37:51','2021-11-23 08:27:09',NULL),(3,'Reading Quiz',3,3,2,'2021-11-23 07:47:27','2021-11-23 09:08:55',NULL),(4,'Exercise Speaking',2,2,3,'2021-11-23 08:07:56','2021-11-23 08:07:56',NULL),(5,'Quiz Speaking',3,3,3,'2021-11-23 08:10:46','2021-11-23 08:10:46',NULL),(6,'Listening Exercise',3,2,5,'2021-11-23 09:49:51','2021-11-23 09:49:51',NULL),(7,'Listening Last Quiz',4,3,5,'2021-11-23 10:02:36','2021-11-23 10:02:36',NULL),(8,'Writing Exercise',3,2,6,'2021-11-23 10:19:52','2021-11-23 10:19:52',NULL),(9,'Writing Quiz',4,3,6,'2021-11-23 10:45:38','2021-11-23 10:45:38',NULL),(10,'Exercise reading',1,2,7,'2021-11-26 03:31:18','2021-11-26 03:31:18',NULL),(11,'Reading Quiz',2,3,7,'2021-11-26 03:42:36','2021-11-26 03:42:36',NULL);
/*!40000 ALTER TABLE `exams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fileable_id` bigint NOT NULL,
  `fileable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` double NOT NULL,
  `uploaded_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` VALUES (1,1,'App\\Models\\Lecture','files/ZIqTuq2w5fXBUzQkbYloQklIqUvmPiMrL60c626V.pdf','Lumas System - Administration.pdf',0.037973,1,'2021-11-23 07:23:36','2021-11-23 07:23:36',NULL),(2,2,'App\\Models\\Lecture','files/chg8QbZxztoR8YIarcVfNf3u8kqXHgBtbxS4EYCZ.pdf','Lumas System - Administration.pdf',0.037973,1,'2021-11-23 07:27:02','2021-11-23 07:27:02',NULL),(3,1,'App\\Models\\Banner','files/rkPmEMpjV0AxXlhLrUg2pKeHHpq3KqJ1mHmf6q4o.jpg','banner.jpg',0.765252,1,'2021-11-23 07:46:10','2021-11-23 07:46:10',NULL),(4,3,'App\\Models\\Lecture','files/NSSS0aZ0rDSJuTdCvTdo2pkFOKzHR733mAMBvVai.pdf','Lumas System - Administration.pdf',0.037973,1,'2021-11-23 08:02:27','2021-11-23 08:02:27',NULL),(5,4,'App\\Models\\Lecture','files/1OqIb4XwnkHGNnWtfbgMmg3GEqMiJUKA9JYpZQYP.pdf','Lumas System - Administration.pdf',0.037973,1,'2021-11-23 08:07:24','2021-11-23 08:07:24',NULL),(6,3,'App\\Models\\User','files/X2icaD2BKnnCB12O2pDruuIdxuV858Ebei44Sm6N.png','myavatar.png',0.058553,1,'2021-11-23 08:34:46','2021-11-23 08:34:46',NULL),(7,4,'App\\Models\\User','files/wUN6h4gzzFwV5O7uaEMNA5tlJgk1RPLesfvOZZMJ.png','myavatar.png',0.058553,1,'2021-11-23 08:35:01','2021-11-23 08:35:01',NULL),(8,1,'App\\Models\\Blog','files/z5C1EepaJ62nqlzqNQqVBb3yONiEjxJ3buUjBIa7.jpg','banner.jpg',0.765252,1,'2021-11-23 08:40:46','2021-11-23 08:40:46',NULL),(9,1,'App\\Models\\News','files/m89mmklNmDLNeyFhKRR25veBCplt6PstJcWOCvok.jpg','banner.jpg',0.765252,1,'2021-11-23 08:41:36','2021-11-23 08:41:36',NULL),(10,5,'App\\Models\\Lecture','files/AWvdgYm08EwxkaHuOqqDL96W5On12us7rdHytB8c.pdf','Lumas System - Administration.pdf',0.037973,1,'2021-11-23 09:46:28','2021-11-23 09:46:28',NULL),(11,6,'App\\Models\\Lecture','files/WYuZ4NL45QEPlAEN70OSmF9CCth9inBTMSDIaHlj.pdf','Lumas System - Administration.pdf',0.037973,1,'2021-11-23 09:47:44','2021-11-23 09:47:44',NULL),(12,7,'App\\Models\\Lecture','files/NYkqwQiAF1noeYqrI3xksdYnmj19wJnXrgoPmzbs.pdf','Lumas System - Administration.pdf',0.037973,1,'2021-11-23 09:48:55','2021-11-23 09:48:55',NULL),(13,8,'App\\Models\\Lecture','files/BJ8xcmYz8xI8CVBgnxRWPUgqJscUdxEGQglf8ePG.pdf','Lumas System - Administration.pdf',0.037973,1,'2021-11-23 10:15:29','2021-11-23 10:15:29',NULL),(14,9,'App\\Models\\Lecture','files/Gx80BPgmIihDTb5WFvrohPBKYT1oVXUMX1EUkM8R.pdf','Lumas System - Administration.pdf',0.037973,1,'2021-11-23 10:16:14','2021-11-23 10:16:14',NULL),(15,10,'App\\Models\\Lecture','files/ym2yUVn20xTC5DuFTdN8dtl3SsDfGhcYyghe8fKP.pdf','Lumas System - Administration.pdf',0.037973,1,'2021-11-23 10:19:13','2021-11-23 10:19:13',NULL),(16,1,'App\\Models\\WritingQuizQuestion','files/X3Cz9dLLmPUlcwCP2MiS6JhV8rsPhYnaI0WTJemn.jpg','banner.jpg',0.765252,1,'2021-11-23 14:58:58','2021-11-23 14:58:58',NULL),(17,3,'App\\Models\\WritingQuizQuestion','files/bnuPW3leUvOu80LNe51wigwJlHJDbdPw8J5saBj7.jpg','banner.jpg',0.765252,1,'2021-11-23 15:03:49','2021-11-23 15:03:49',NULL),(18,1,'App\\Models\\Post','files/zyYByZLQ0VXmpbheThwh1wZOGu83I5c0wYJWASLz.jpg','maths-q-2.jpg',0.060177,5,'2021-11-24 03:32:04','2021-11-24 03:32:04',NULL),(19,1,'App\\Models\\WritingQuizQuestion','files/CwHf1KzwYeXOQK7O8ESiujWEfsMWcHnKBih6d6uf.jpg','banner.jpg',0.765252,1,'2021-11-25 08:37:20','2021-11-25 08:37:20',NULL),(20,11,'App\\Models\\Lecture','files/ny8xCwgA5nDYSREOAONoLN6N9W54gpP4jDmO756H.pdf','Lumas System - Administration.pdf',0.037973,1,'2021-11-26 03:30:59','2021-11-26 03:30:59',NULL);
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lectures`
--

DROP TABLE IF EXISTS `lectures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lectures` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `index` int NOT NULL DEFAULT '0',
  `course_id` bigint unsigned NOT NULL,
  `lectures_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lectures_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_resource` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lectures_course_id_foreign` (`course_id`),
  CONSTRAINT `lectures_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lectures`
--

LOCK TABLES `lectures` WRITE;
/*!40000 ALTER TABLE `lectures` DISABLE KEYS */;
INSERT INTO `lectures` VALUES (1,0,2,'Reading leacture 1','Reading leacture 1','648913492','2021-11-23 07:23:36','2021-11-23 08:26:53',NULL),(2,1,2,'Reading leacture 2','Reading leacture 2','648916013','2021-11-23 07:27:02','2021-11-23 08:27:02',NULL),(3,0,3,'Speaking leacture 1','Speaking leacture 1','648925139','2021-11-23 08:02:27','2021-11-23 08:02:27',NULL),(4,1,3,'Speaking leacture 2','Speaking leacture 2','648926062','2021-11-23 08:07:24','2021-11-23 08:07:24',NULL),(5,0,5,'Listening lecture 1','Listening lecture 1','648958390','2021-11-23 09:46:28','2021-11-23 09:46:28',NULL),(6,1,5,'Listening lecture 2','Listening lecture 2','648959472','2021-11-23 09:47:44','2021-11-23 09:47:44',NULL),(7,2,5,'Listening lecture 3','Listening lecture 3','648959811','2021-11-23 09:48:55','2021-11-23 09:48:55',NULL),(8,0,6,'Writing lecture 1','Writing lecture 1','648968942','2021-11-23 10:15:29','2021-11-23 10:15:29',NULL),(9,1,6,'Lecture writing 2','Lecture writing 2','648969817','2021-11-23 10:16:14','2021-11-23 10:16:14',NULL),(10,2,6,'Lecture writing 3','Lecture writing 3','648970131','2021-11-23 10:19:13','2021-11-23 10:19:13',NULL),(11,0,7,'Reading leacture 1','Reading leacture 1','650162643','2021-11-26 03:30:59','2021-11-26 03:31:30',NULL);
/*!40000 ALTER TABLE `lectures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listen_assessment_answers`
--

DROP TABLE IF EXISTS `listen_assessment_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listen_assessment_answers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `l_a_question_id` bigint unsigned NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `listen_assessment_answers_l_a_question_id_foreign` (`l_a_question_id`),
  CONSTRAINT `listen_assessment_answers_l_a_question_id_foreign` FOREIGN KEY (`l_a_question_id`) REFERENCES `listen_assessment_questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listen_assessment_answers`
--

LOCK TABLES `listen_assessment_answers` WRITE;
/*!40000 ALTER TABLE `listen_assessment_answers` DISABLE KEYS */;
INSERT INTO `listen_assessment_answers` VALUES (1,1,'7',0,'2021-11-10 09:22:46','2021-11-10 09:22:22','2021-11-10 09:22:46'),(2,1,'8',0,NULL,'2021-11-10 09:22:26','2021-11-10 09:23:00'),(3,1,'9',0,NULL,'2021-11-10 09:22:29','2021-11-10 09:23:00'),(4,1,'6',1,NULL,'2021-11-10 09:22:56','2021-11-10 09:23:00'),(5,2,'6',0,NULL,'2021-11-10 09:23:08','2021-11-10 09:23:24'),(6,2,'8',1,NULL,'2021-11-10 09:23:14','2021-11-10 09:23:24'),(7,2,'9',0,NULL,'2021-11-10 09:23:18','2021-11-10 09:23:24'),(8,4,'yes',1,NULL,'2021-11-15 01:54:56','2021-11-18 07:08:50'),(9,4,'no',0,NULL,'2021-11-15 01:55:03','2021-11-18 07:08:50'),(10,5,'yes',1,NULL,'2021-11-15 02:04:12','2021-11-15 02:04:22'),(11,5,'no',0,NULL,'2021-11-15 02:04:18','2021-11-15 02:04:22'),(12,6,'1',1,NULL,'2021-11-15 09:45:56','2021-11-15 09:46:21'),(13,6,'10',0,NULL,'2021-11-15 09:46:03','2021-11-15 09:46:21'),(14,6,'0',0,NULL,'2021-11-15 09:46:15','2021-11-15 09:46:21'),(15,7,'2',1,NULL,'2021-11-15 09:47:05','2021-11-15 09:47:25'),(16,7,'1',0,NULL,'2021-11-15 09:47:11','2021-11-15 09:47:25'),(17,7,'11',0,NULL,'2021-11-15 09:47:20','2021-11-15 09:47:25'),(18,8,'3',1,NULL,'2021-11-15 09:48:38','2021-11-15 09:49:01'),(19,8,'12',0,NULL,'2021-11-15 09:48:46','2021-11-15 09:49:01'),(20,9,'3',1,NULL,'2021-11-18 07:04:26','2021-11-18 07:04:36'),(21,9,'4',0,NULL,'2021-11-18 07:04:29','2021-11-18 07:04:36'),(22,9,'5',0,NULL,'2021-11-18 07:04:32','2021-11-18 07:04:36'),(23,10,'7',0,NULL,'2021-11-18 07:04:45','2021-11-18 07:04:56'),(24,10,'8',1,NULL,'2021-11-18 07:04:49','2021-11-18 07:04:56'),(25,10,'9',0,NULL,'2021-11-18 07:04:52','2021-11-18 07:04:56'),(26,4,'okey',0,NULL,'2021-11-18 07:08:45','2021-11-18 07:08:50'),(27,11,'yes',0,NULL,'2021-11-18 07:09:54','2021-11-18 07:10:22'),(28,11,'corrects',0,NULL,'2021-11-18 07:10:09','2021-11-18 07:10:22'),(29,11,'yes is it',1,NULL,'2021-11-18 07:10:19','2021-11-18 07:10:22'),(30,12,'1',0,NULL,'2021-11-18 07:26:10','2021-11-18 07:26:20'),(31,12,'2',1,NULL,'2021-11-18 07:26:14','2021-11-18 07:26:20'),(32,12,'3',0,NULL,'2021-11-18 07:26:17','2021-11-18 07:26:20'),(33,13,'no it so noise',1,NULL,'2021-11-18 07:26:40','2021-11-18 07:27:06'),(34,13,'yes i like it',0,NULL,'2021-11-18 07:26:54','2021-11-18 07:27:06'),(35,13,'so so ...',0,NULL,'2021-11-18 07:27:03','2021-11-18 07:27:06');
/*!40000 ALTER TABLE `listen_assessment_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listen_assessment_questions`
--

DROP TABLE IF EXISTS `listen_assessment_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listen_assessment_questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question_id` bigint unsigned NOT NULL,
  `part` int NOT NULL,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_wrong` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_index` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `listen_assessment_questions_question_id_foreign` (`question_id`),
  CONSTRAINT `listen_assessment_questions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listen_assessment_questions`
--

LOCK TABLES `listen_assessment_questions` WRITE;
/*!40000 ALTER TABLE `listen_assessment_questions` DISABLE KEYS */;
INSERT INTO `listen_assessment_questions` VALUES (1,5,1,'3+2 = ?','5',1,NULL,'2021-11-22 23:50:59','2021-11-22 23:50:59'),(2,6,1,'3+3 = ?','6',1,NULL,'2021-11-22 23:51:12','2021-11-22 23:51:12'),(3,7,2,'3+4 = ?','7',1,NULL,'2021-11-22 23:51:31','2021-11-22 23:51:31'),(4,8,2,'3+5 = ?','8',1,NULL,'2021-11-22 23:52:21','2021-11-22 23:52:21'),(5,26,1,'How many people ?','wrong',0,NULL,'2021-11-23 09:51:49','2021-11-23 09:51:49'),(6,27,1,'Are u ready ?','wrong',0,NULL,'2021-11-23 09:56:57','2021-11-23 09:56:57'),(7,28,2,'1+1','wrong',1,NULL,'2021-11-23 09:58:33','2021-11-23 09:58:33'),(8,29,1,'1+2 = ?','wrong',1,NULL,'2021-11-23 10:05:02','2021-11-23 10:05:02'),(9,30,1,'1+3 = ?','wrong',1,NULL,'2021-11-23 10:06:00','2021-11-23 10:06:09'),(10,35,1,'1+1','wrong',2,NULL,'2021-11-23 10:30:28','2021-11-23 10:30:28'),(11,36,1,'1+2','wrong',1,NULL,'2021-11-23 10:32:42','2021-11-23 10:33:35'),(12,37,2,'1+4','wrong',0,NULL,'2021-11-23 10:33:27','2021-11-23 10:33:27'),(13,38,1,'1+7 = ?','wrong',0,NULL,'2021-11-23 10:35:00','2021-11-23 10:35:00'),(14,39,2,'1+8 = ?','wrong',1,NULL,'2021-11-23 10:36:26','2021-11-23 10:36:26'),(15,40,1,'10 + 11','wrong',1,NULL,'2021-11-23 10:38:12','2021-11-23 10:38:12');
/*!40000 ALTER TABLE `listen_assessment_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membership_course`
--

DROP TABLE IF EXISTS `membership_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membership_course` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `membership_id` bigint unsigned NOT NULL,
  `course_id` bigint unsigned NOT NULL,
  `price_value` double NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `membership_course_membership_id_course_id_unique` (`membership_id`,`course_id`),
  KEY `membership_course_course_id_foreign` (`course_id`),
  CONSTRAINT `membership_course_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  CONSTRAINT `membership_course_membership_id_foreign` FOREIGN KEY (`membership_id`) REFERENCES `memberships` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership_course`
--

LOCK TABLES `membership_course` WRITE;
/*!40000 ALTER TABLE `membership_course` DISABLE KEYS */;
INSERT INTO `membership_course` VALUES (1,1,4,4,'2021-11-23 07:55:30','2021-11-23 07:55:30','2021-11-23 07:55:30'),(2,1,2,32,NULL,'2021-11-23 07:55:30','2021-11-23 07:55:30'),(3,1,3,32,NULL,'2021-11-23 07:55:30','2021-11-23 07:55:30'),(4,1,5,33,NULL,'2021-11-23 09:42:25','2021-11-23 09:42:25'),(5,1,6,35,NULL,'2021-11-23 10:09:38','2021-11-23 10:09:38'),(6,1,7,35,NULL,'2021-11-26 03:29:11','2021-11-26 03:29:11');
/*!40000 ALTER TABLE `membership_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `memberships`
--

DROP TABLE IF EXISTS `memberships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `memberships` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `base_point` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `memberships`
--

LOCK TABLES `memberships` WRITE;
/*!40000 ALTER TABLE `memberships` DISABLE KEYS */;
INSERT INTO `memberships` VALUES (1,'basic',0,'2021-11-23 07:54:56','2021-11-23 07:54:56',NULL);
/*!40000 ALTER TABLE `memberships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0000_00_00_000000_create_file_table',1),(2,'0001_00_00_000000_create_users_table',1),(3,'0002_00_00_000000_create_student_table',1),(4,'0003_00_00_000000_create_tutor_table',1),(5,'0003_00_00_000001_create_tutor_translations',1),(6,'0003_00_00_100000_create_certificates_table',1),(7,'0004_00_00_000000_create_subject_table',1),(8,'0004_00_00_000001_create_subject_translations_table',1),(9,'0004_00_00_000300_create_tutor_teach_subject_table',1),(10,'0005_00_00_000000_create_course_table',1),(11,'0005_00_00_000000_create_student_courses_table',1),(12,'0005_00_00_000001_create_course_translations_table',1),(13,'0005_00_00_000002_create_course_material_table',1),(14,'0005_00_00_000003_create_course_material_translations_table',1),(15,'0006_00_00_000000_create_lecture_table',1),(16,'0007_00_00_000000_create_banner_table',1),(17,'0008_00_00_000000_create_tags_table',1),(18,'0009_00_00_000000_create_blogs_table',1),(19,'0009_00_00_000001_create_posts_table',1),(20,'0009_00_00_100000_create_comments_table',1),(21,'0009_00_00_200000_create_user_likes_table',1),(22,'0010_00_00_000000_create_study_sessions_table',1),(23,'0010_00_00_000001_create_room_live_courses_table',1),(24,'0010_00_00_100000_create_course_schedules_table',1),(25,'0010_00_00_100002_create_student_schedules_table',1),(26,'0011_00_00_000000_create_news_table',1),(27,'2014_10_12_100000_create_password_resets_table',1),(28,'2018_11_06_222923_create_transactions_table',1),(29,'2018_11_07_192923_create_transfers_table',1),(30,'2018_11_07_202152_update_transfers_table',1),(31,'2018_11_15_124230_create_wallets_table',1),(32,'2018_11_19_164609_update_transactions_table',1),(33,'2018_11_20_133759_add_fee_transfers_table',1),(34,'2018_11_22_131953_add_status_transfers_table',1),(35,'2018_11_22_133438_drop_refund_transfers_table',1),(36,'2019_05_03_000001_create_customer_columns',1),(37,'2019_05_03_000002_create_subscriptions_table',1),(38,'2019_05_03_000003_create_subscription_items_table',1),(39,'2019_05_13_111553_update_status_transfers_table',1),(40,'2019_06_25_103755_add_exchange_status_transfers_table',1),(41,'2019_07_29_184926_decimal_places_wallets_table',1),(42,'2019_10_02_193759_add_discount_transfers_table',1),(43,'2020_10_30_193412_add_meta_wallets_table',1),(44,'2021_06_02_070717_create_blog_tags_table',1),(45,'2021_06_05_105255_create_permission_tables',1),(46,'2021_06_16_070732_create_discounts_table',1),(47,'2021_06_16_071553_create_course_discounts_table',1),(48,'2021_06_16_094905_create_memberships_table',1),(49,'2021_06_16_094955_create_membership_courses_table',1),(50,'2021_06_16_101630_create_course_membership_discounts_table',1),(51,'2021_06_17_082211_create_orders_table',1),(52,'2021_06_18_071425_create_ratings_table',1),(53,'2021_07_06_082346_create_social_accounts_table',1),(54,'2021_07_08_011523_create_moderators_table',1),(55,'2021_09_27_025026_create_exams_table',1),(56,'2021_09_27_025526_create_pass_grades_table',1),(57,'2021_09_27_025608_create_quizzes_table',1),(58,'2021_09_27_033154_create_questions_table',1),(59,'2021_09_28_014621_add_wallet_id_wallets_table',1),(60,'2021_10_05_113819_create_settings_table',1),(61,'2021_10_21_084647_create_passages_table',1),(62,'2021_10_21_085602_create_reading_questions_table',1),(63,'2021_10_21_085805_create_writing_assessment_questions_table',1),(64,'2021_10_21_092247_create_writing_quiz_questions_table',1),(65,'2021_10_21_092337_create_listen_assessment_questions_table',1),(66,'2021_10_21_094820_create_speak_assessment_questions_table',1),(67,'2021_10_21_094855_create_speak_quiz_questions_table',1),(68,'2021_10_21_094924_create_speak_exercises_questions_table',1),(69,'2021_10_21_100247_create_student_examinations_table',1),(70,'2021_11_04_020323_create_audio_files_table',1),(71,'2021_11_04_030027_create_audio_listens_table',1),(72,'2021_11_10_013023_create_skip_levels_table',1),(73,'2021_11_20_044407_update_students_table',1),(74,'2021_11_20_074820_create_m_c_answer_items_table',1),(75,'2021_11_20_143824_update_student_course_exam',1),(76,'2021_11_21_143352_update_lecture',1),(77,'2021_11_21_164757_update_student_course',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (4,'App\\Models\\User',1),(3,'App\\Models\\User',2),(2,'App\\Models\\User',3),(2,'App\\Models\\User',4),(3,'App\\Models\\User',5),(3,'App\\Models\\User',6),(3,'App\\Models\\User',7),(3,'App\\Models\\User',8),(3,'App\\Models\\User',9),(3,'App\\Models\\User',10),(3,'App\\Models\\User',11),(3,'App\\Models\\User',12);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moderators`
--

DROP TABLE IF EXISTS `moderators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moderators` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `full_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `moderators_user_id_foreign` (`user_id`),
  CONSTRAINT `moderators_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moderators`
--

LOCK TABLES `moderators` WRITE;
/*!40000 ALTER TABLE `moderators` DISABLE KEYS */;
/*!40000 ALTER TABLE `moderators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `announcement_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'New Release','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>','2021-11-23','2021-11-23 08:41:36','2021-11-23 08:41:36',NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `payment_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint unsigned NOT NULL,
  `membership` bigint NOT NULL,
  `membership_discount` double NOT NULL,
  `discount_info` bigint NOT NULL,
  `course_price` double NOT NULL,
  `course_discount` double NOT NULL,
  `final_price` double NOT NULL,
  `status` int NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_course_id_foreign` (`course_id`),
  CONSTRAINT `orders_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,5,'619caf2b205ba',2,1,32,0,32,0,32,10,NULL,NULL,'2021-11-23 09:06:51','2021-11-23 09:06:51',NULL),(2,5,'619cb0aa2426c',3,1,32,0,32,0,32,10,NULL,NULL,'2021-11-23 09:13:14','2021-11-23 09:13:14',NULL),(5,5,'619d9b719f776',5,1,33,0,33,0,33,10,NULL,NULL,'2021-11-24 01:54:57','2021-11-24 01:54:57',NULL),(6,5,'619d9dab6b103',6,1,35,0,35,0,35,10,NULL,NULL,'2021-11-24 02:04:27','2021-11-24 02:04:27',NULL),(13,8,'619f4463e084d',3,1,32,0,32,0,32,10,NULL,NULL,'2021-11-25 08:08:03','2021-11-25 08:08:03',NULL),(14,8,'619f48b84f3d1',2,1,32,0,32,0,32,10,NULL,NULL,'2021-11-25 08:26:32','2021-11-25 08:26:32',NULL),(15,8,'619f4b780a3d1',6,1,35,0,35,0,35,10,NULL,NULL,'2021-11-25 08:38:16','2021-11-25 08:38:16',NULL),(16,8,'619f4caa91a06',5,1,33,0,33,0,33,10,NULL,NULL,'2021-11-25 08:43:22','2021-11-25 08:43:22',NULL),(17,9,'619f52d13fb7a',2,1,32,0,32,0,32,10,NULL,NULL,'2021-11-25 09:09:37','2021-11-25 09:09:37',NULL),(18,9,'619f54e0aaf57',5,1,33,0,33,0,33,10,NULL,NULL,'2021-11-25 09:18:24','2021-11-25 09:18:24',NULL),(19,9,'619f5a5ecb146',6,1,35,0,35,0,35,10,NULL,NULL,'2021-11-25 09:41:50','2021-11-25 09:41:50',NULL),(20,9,'619f5ebf0e8c3',3,1,32,0,32,0,32,10,NULL,NULL,'2021-11-25 10:00:31','2021-11-25 10:00:31',NULL),(21,10,'619f621d9ca13',2,1,32,0,32,0,32,10,NULL,NULL,'2021-11-25 10:14:53','2021-11-25 10:14:53',NULL),(22,7,'619fa656532b6',2,1,32,0,32,0,32,10,NULL,NULL,'2021-11-25 15:05:58','2021-11-25 15:05:58',NULL),(23,7,'619fa68f0eb8e',3,1,32,0,32,0,32,10,NULL,NULL,'2021-11-25 15:06:55','2021-11-25 15:06:55',NULL),(24,7,'619fa6db58d3c',5,1,33,0,33,0,33,10,NULL,NULL,'2021-11-25 15:08:11','2021-11-25 15:08:11',NULL),(25,7,'619fa7152f002',6,1,35,0,35,0,35,10,NULL,NULL,'2021-11-25 15:09:09','2021-11-25 15:09:09',NULL),(26,11,'619fcda513a70',2,1,32,0,32,0,32,10,NULL,NULL,'2021-11-25 17:53:41','2021-11-25 17:53:41',NULL),(27,11,'619fce6b71193',6,1,35,0,35,0,35,10,NULL,NULL,'2021-11-25 17:56:59','2021-11-25 17:56:59',NULL),(28,11,'619fce9d4e8b6',5,1,33,0,33,0,33,10,NULL,NULL,'2021-11-25 17:57:49','2021-11-25 17:57:49',NULL),(29,11,'619fcecb2078d',3,1,32,0,32,0,32,10,NULL,NULL,'2021-11-25 17:58:35','2021-11-25 17:58:35',NULL),(30,12,'619fd173c8477',3,1,32,0,32,0,32,10,NULL,NULL,'2021-11-25 18:09:55','2021-11-25 18:09:55',NULL),(31,8,'61a036f8edff3',3,1,32,0,32,0,32,10,NULL,NULL,'2021-11-26 01:23:04','2021-11-26 01:23:04',NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pass_grades`
--

DROP TABLE IF EXISTS `pass_grades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pass_grades` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `exam_id` bigint unsigned NOT NULL,
  `score` double NOT NULL,
  `lecture_index` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pass_grades_exam_id_foreign` (`exam_id`),
  CONSTRAINT `pass_grades_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pass_grades`
--

LOCK TABLES `pass_grades` WRITE;
/*!40000 ALTER TABLE `pass_grades` DISABLE KEYS */;
/*!40000 ALTER TABLE `pass_grades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passages`
--

DROP TABLE IF EXISTS `passages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `passages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `quiz_id` bigint unsigned NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `passages_quiz_id_foreign` (`quiz_id`),
  CONSTRAINT `passages_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passages`
--

LOCK TABLES `passages` WRITE;
/*!40000 ALTER TABLE `passages` DISABLE KEYS */;
INSERT INTO `passages` VALUES (1,1,'<h3 style=\"color:#000000; font-style:normal\">Section 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.&quot;</p>\r\n\r\n<h3 style=\"color:#000000; font-style:normal\">1914 translation by H. Rackham</h3>\r\n\r\n<p>&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;</p>','Lorem Ipsum',NULL,'2021-11-22 23:47:24','2021-11-22 23:47:24'),(2,2,'<p>One of my favorite vacation places is Mexico. I really like the weather there because it never gets cold. The people are very nice too. They never laugh at my bad Spanish. The food is really good. Mexico City is a very interesting place to visit. It has some great museums and lots of fascinating old buildings. The hotels are too expensive to stay but there are more affordable options. For example, you can stay at one of the beach resorts like Acapulco. If you are planning to visit Mexico, you should definitely see the Mayan temples near Merida.</p>','Sam hobbies',NULL,'2021-11-23 07:38:59','2021-11-23 07:38:59'),(3,6,'<p>Last summer, we decided to spend our vacation at the beach because the weather was very hot in the mountains. The travel agent said that traveling by bus was the cheapest way, but we went by plane because it was faster. We wanted to have more time to spend at the beach. The weather was beautiful and we had a great time.</p>','Summer vacations',NULL,'2021-11-23 07:48:15','2021-11-23 07:48:15'),(4,7,'<p>Last summer, we decided to spend our vacation at the beach because the weather was very hot in the mountains. The travel agent said that traveling by bus was the cheapest way, but we went by plane because it was faster. We wanted to have more time to spend at the beach. The weather was beautiful and we had a great time.</p>','Summer vacations',NULL,'2021-11-23 07:51:41','2021-11-23 07:51:41'),(5,3,'<p>One of my favorite vacation places is Mexico. I really like the weather there because it never gets cold. The people are very nice too. They never laugh at my bad Spanish. The food is really good. Mexico City is a very interesting place to visit. It has some great museums and lots of fascinating old buildings. The hotels are too expensive to stay but there are more affordable options. For example, you can stay at one of the beach resorts like Acapulco. If you are planning to visit Mexico, you should definitely see the Mayan temples near Merida.One of my favorite vacation places is Mexico. I really like the weather there because it never gets cold. The people are very nice too. They never laugh at my bad Spanish. The food is really good. Mexico City is a very interesting place to visit. It has some great museums and lots of fascinating old buildings. The hotels are too expensive to stay but there are more affordable options. For example, you can stay at one of the beach resorts like Acapulco. If you are planning to visit Mexico, you should definitely see the Mayan temples near Merida.</p>','passage exercise set 2',NULL,'2021-11-25 12:43:11','2021-11-25 12:43:11'),(6,4,'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique senectus et netus et malesuada. Urna cursus eget nunc scelerisque viverra. Porttitor lacus luctus accumsan tortor posuere. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Eget egestas purus viverra accumsan in nisl nisi scelerisque eu. Venenatis urna cursus eget nunc scelerisque viverra mauris. Porta nibh venenatis cras sed felis eget. Sodales ut etiam sit amet nisl purus. Volutpat est velit egestas dui id. Egestas dui id ornare arcu. Ultrices neque ornare aenean euismod elementum. Amet mattis vulputate enim nulla aliquet porttitor. Tortor at auctor urna nunc id.</p>\r\n\r\n<p>Volutpat est velit egestas dui. Sed blandit libero volutpat sed cras. Ultrices neque ornare aenean euismod elementum nisi quis eleifend quam. Est lorem ipsum dolor sit amet consectetur adipiscing elit. Integer eget aliquet nibh praesent tristique magna sit amet. Fusce ut placerat orci nulla pellentesque dignissim enim sit. Purus gravida quis blandit turpis. Arcu ac tortor dignissim convallis aenean et. Diam maecenas sed enim ut sem viverra aliquet eget sit. At tempor commodo ullamcorper a. Mattis vulputate enim nulla aliquet. Vel eros donec ac odio tempor orci dapibus.</p>','Passage set 3',NULL,'2021-11-25 12:58:15','2021-11-25 12:58:15'),(7,5,'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique senectus et netus et malesuada. Urna cursus eget nunc scelerisque viverra. Porttitor lacus luctus accumsan tortor posuere. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Eget egestas purus viverra accumsan in nisl nisi scelerisque eu. Venenatis urna cursus eget nunc scelerisque viverra mauris.</p>\r\n\r\n<p>Porta nibh venenatis cras sed felis eget. Sodales ut etiam sit amet nisl purus. Volutpat est velit egestas dui id. Egestas dui id ornare arcu. Ultrices neque ornare aenean euismod elementum. Amet mattis vulputate enim nulla aliquet porttitor. Tortor at auctor urna nunc id.</p>\r\n\r\n<p>Volutpat est velit egestas dui. Sed blandit libero volutpat sed cras. Ultrices neque ornare aenean euismod elementum nisi quis eleifend quam.&nbsp;</p>','passage exercise set 4',NULL,'2021-11-25 13:02:04','2021-11-25 13:02:04'),(8,34,'<p>Hi! Nice to meet you! My name is John Smith. I am 19 and a student in college. I go to college in New York. My favorite courses are Geometry, French, and History. English is my hardest course. My professors are very friendly and smart. It&rsquo;s my second year in college now. I love it!</p>\r\n\r\n<p>I live in a big house on Ivy Street. It&rsquo;s near the college campus. I share the house with three other students. Their names are Bill, Tony, and Paul. We help each other with homework. On the weekend, we play football together.</p>\r\n\r\n<p>I have a younger brother. He just started high school. He is 14 and lives with my parents. They live on Mulberry Street in Boston. Sometimes they visit me in New York. I am happy when they visit. My Mom always brings me sweets and candy when they come. I really miss them, too!</p>','My name is John',NULL,'2021-11-26 03:35:53','2021-11-26 03:35:53'),(9,35,'<p>Hi! Nice to meet you! My name is John Smith. I am 19 and a student in college. I go to college in New York. My favorite courses are Geometry, French, and History. English is my hardest course. My professors are very friendly and smart. It&rsquo;s my second year in college now. I love it!</p>\r\n\r\n<p>I live in a big house on Ivy Street. It&rsquo;s near the college campus. I share the house with three other students. Their names are Bill, Tony, and Paul. We help each other with homework. On the weekend, we play football together.</p>\r\n\r\n<p>I have a younger brother. He just started high school. He is 14 and lives with my parents. They live on Mulberry Street in Boston. Sometimes they visit me in New York. I am happy when they visit. My Mom always brings me sweets and candy when they come. I really miss them, too!</p>\r\n\r\n<p>00:0002:26</p>\r\n\r\n<p>Press Enter or Space to show volume slider.</p>','My name is John',NULL,'2021-11-26 03:38:30','2021-11-26 03:38:30'),(10,39,'<p>First, I wake up. Then, I get dressed. I walk to school. I do not ride a bike. I do not ride the bus. I like to go to school. It rains. I do not like rain. I eat lunch. I eat a sandwich and an apple.</p>\r\n\r\n<p>I play outside. I like to play. I read a book. I like to read books. I walk home. I do not like walking home. My mother cooks soup for dinner. The soup is hot. Then, I go to bed. I do not like to go to bed.</p>','My day',NULL,'2021-11-26 03:42:52','2021-11-26 03:42:52'),(11,38,'<p>First, I wake up. Then, I get dressed. I walk to school. I do not ride a bike. I do not ride the bus. I like to go to school. It rains. I do not like rain. I eat lunch. I eat a sandwich and an apple.</p>\r\n\r\n<p>I play outside. I like to play. I read a book. I like to read books. I walk home. I do not like walking home. My mother cooks soup for dinner. The soup is hot. Then, I go to bed. I do not like to go to bed.</p>','My day',NULL,'2021-11-26 03:45:30','2021-11-26 03:45:30');
/*!40000 ALTER TABLE `passages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'banner-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(2,'banner-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(3,'banner-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(4,'banner-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(5,'tutor-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(6,'tutor-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(7,'tutor-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(8,'tutor-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(9,'moderator-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(10,'moderator-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(11,'moderator-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(12,'moderator-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(13,'student-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(14,'student-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(15,'student-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(16,'student-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(17,'news-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(18,'news-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(19,'news-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(20,'news-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(21,'blog-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(22,'blog-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(23,'blog-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(24,'blog-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(25,'forum-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(26,'forum-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(27,'forum-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(28,'forum-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(29,'document-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(30,'document-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(31,'document-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(32,'document-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(33,'course-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(34,'course-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(35,'course-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(36,'course-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(37,'subject-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(38,'subject-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(39,'subject-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(40,'subject-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(41,'certificate-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(42,'certificate-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(43,'certificate-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(44,'certificate-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(45,'study_session-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(46,'study_session-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(47,'study_session-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(48,'study_session-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(49,'subscribe-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(50,'subscribe-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(51,'subscribe-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(52,'subscribe-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(53,'examination-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(54,'examination-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(55,'examination-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(56,'examination-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(57,'membership-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(58,'membership-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(59,'membership-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(60,'membership-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(61,'price-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(62,'price-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(63,'price-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(64,'price-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(65,'discount-list','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(66,'discount-create','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(67,'discount-edit','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(68,'discount-delete','web','2021-11-22 21:50:00','2021-11-22 21:50:00');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `like_no` bigint NOT NULL DEFAULT '0',
  `comment_no` bigint NOT NULL DEFAULT '0',
  `close_post` tinyint(1) NOT NULL DEFAULT '0',
  `pin_comment` bigint DEFAULT NULL,
  `tag_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,5,'Help me answer','Help me answer',1,0,0,NULL,1,'2021-11-24 03:32:04','2021-11-24 03:32:10',NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `quiz_id` bigint unsigned NOT NULL,
  `type` int NOT NULL,
  `index` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_quiz_id_foreign` (`quiz_id`),
  CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,1,1,1,'2021-11-22 23:48:15','2021-11-22 23:48:15',NULL),(2,1,1,2,'2021-11-22 23:48:36','2021-11-22 23:48:36',NULL),(3,1,2,1,'2021-11-22 23:49:21','2021-11-22 23:49:21',NULL),(4,1,2,2,'2021-11-22 23:49:40','2021-11-22 23:49:40',NULL),(5,1,3,1,'2021-11-22 23:50:59','2021-11-22 23:50:59',NULL),(6,1,3,2,'2021-11-22 23:51:12','2021-11-22 23:51:12',NULL),(7,1,3,3,'2021-11-22 23:51:31','2021-11-22 23:51:31',NULL),(8,1,3,4,'2021-11-22 23:52:21','2021-11-22 23:52:21',NULL),(9,1,4,1,'2021-11-22 23:54:39','2021-11-22 23:54:39',NULL),(10,1,4,2,'2021-11-22 23:55:00','2021-11-22 23:55:00',NULL),(11,2,1,1,'2021-11-23 07:40:02','2021-11-23 07:40:02',NULL),(12,2,1,2,'2021-11-23 07:40:46','2021-11-23 07:40:46',NULL),(13,6,1,1,'2021-11-23 07:48:51','2021-11-23 07:48:51',NULL),(14,6,1,2,'2021-11-23 07:49:10','2021-11-23 07:49:19',NULL),(15,7,1,1,'2021-11-23 07:51:58','2021-11-23 07:51:58',NULL),(16,7,1,2,'2021-11-23 07:52:13','2021-11-23 07:52:13',NULL),(17,10,4,1,'2021-11-23 08:09:59','2021-11-23 08:09:59',NULL),(18,14,4,1,'2021-11-23 08:17:00','2021-11-23 08:17:00',NULL),(19,14,4,2,'2021-11-23 08:17:26','2021-11-23 08:17:26',NULL),(20,14,4,3,'2021-11-23 08:18:54','2021-11-23 08:18:54',NULL),(21,14,4,4,'2021-11-23 08:20:08','2021-11-23 08:20:08',NULL),(22,15,4,1,'2021-11-23 08:22:18','2021-11-23 08:22:18',NULL),(23,15,4,2,'2021-11-23 08:23:51','2021-11-23 08:23:51',NULL),(24,15,4,3,'2021-11-23 08:24:45','2021-11-23 08:24:45',NULL),(25,15,4,4,'2021-11-23 08:26:23','2021-11-23 08:26:23',NULL),(26,18,3,1,'2021-11-23 09:51:49','2021-11-23 09:51:49',NULL),(27,18,3,2,'2021-11-23 09:56:57','2021-11-23 09:56:57',NULL),(28,18,3,3,'2021-11-23 09:58:33','2021-11-23 09:58:33',NULL),(29,22,3,1,'2021-11-23 10:05:02','2021-11-23 10:05:02',NULL),(30,22,3,2,'2021-11-23 10:06:00','2021-11-23 10:06:00',NULL),(31,26,2,1,'2021-11-23 10:20:42','2021-11-23 10:20:42',NULL),(32,27,2,1,'2021-11-23 10:22:52','2021-11-23 10:22:52',NULL),(33,26,2,2,'2021-11-23 10:24:14','2021-11-23 10:24:14',NULL),(34,28,2,1,'2021-11-23 10:26:42','2021-11-23 10:26:42',NULL),(35,23,3,1,'2021-11-23 10:30:28','2021-11-23 10:30:28',NULL),(36,24,3,1,'2021-11-23 10:32:42','2021-11-23 10:32:42',NULL),(37,24,3,2,'2021-11-23 10:33:27','2021-11-23 10:33:27',NULL),(38,25,3,1,'2021-11-23 10:35:00','2021-11-23 10:35:00',NULL),(39,25,3,2,'2021-11-23 10:36:26','2021-11-23 10:36:26',NULL),(40,23,3,2,'2021-11-23 10:38:12','2021-11-23 10:38:12',NULL),(41,29,2,1,'2021-11-23 10:44:07','2021-11-23 10:44:07',NULL),(42,30,2,1,'2021-11-23 14:58:58','2021-11-23 14:58:58',NULL),(43,30,2,2,'2021-11-23 15:01:49','2021-11-23 15:01:49',NULL),(44,31,2,1,'2021-11-23 15:03:49','2021-11-23 15:03:49',NULL),(45,31,2,2,'2021-11-23 15:04:49','2021-11-23 15:04:49',NULL),(46,3,1,1,'2021-11-25 12:43:25','2021-11-25 12:43:25',NULL),(47,4,1,1,'2021-11-25 12:59:54','2021-11-25 12:59:54',NULL),(48,4,1,2,'2021-11-25 13:00:43','2021-11-25 13:00:43',NULL),(49,5,1,1,'2021-11-25 13:02:36','2021-11-25 13:02:36',NULL),(50,34,1,1,'2021-11-26 03:36:08','2021-11-26 03:36:08',NULL),(51,34,1,2,'2021-11-26 03:36:28','2021-11-26 03:36:28',NULL),(52,35,1,1,'2021-11-26 03:38:45','2021-11-26 03:38:45',NULL),(53,35,1,2,'2021-11-26 03:39:00','2021-11-26 03:39:00',NULL),(54,39,1,1,'2021-11-26 03:43:07','2021-11-26 03:43:07',NULL),(55,39,1,2,'2021-11-26 03:44:25','2021-11-26 03:44:25',NULL),(56,38,1,1,'2021-11-26 03:45:44','2021-11-26 03:45:44',NULL),(57,38,1,2,'2021-11-26 03:49:09','2021-11-26 03:49:09',NULL);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quizzes`
--

DROP TABLE IF EXISTS `quizzes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quizzes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `exam_id` bigint unsigned NOT NULL,
  `set` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `quizzes_exam_id_set_unique` (`exam_id`,`set`),
  CONSTRAINT `quizzes_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quizzes`
--

LOCK TABLES `quizzes` WRITE;
/*!40000 ALTER TABLE `quizzes` DISABLE KEYS */;
INSERT INTO `quizzes` VALUES (1,1,1,'2021-11-22 21:50:07','2021-11-22 21:50:07',NULL),(2,2,1,'2021-11-23 07:37:51','2021-11-23 07:37:51',NULL),(3,2,2,'2021-11-23 07:37:51','2021-11-23 07:37:51',NULL),(4,2,3,'2021-11-23 07:37:51','2021-11-23 07:37:51',NULL),(5,2,4,'2021-11-23 07:37:51','2021-11-23 07:37:51',NULL),(6,3,1,'2021-11-23 07:47:27','2021-11-23 07:47:27',NULL),(7,3,2,'2021-11-23 07:47:27','2021-11-23 07:47:27',NULL),(8,3,3,'2021-11-23 07:47:27','2021-11-23 07:47:27',NULL),(9,3,4,'2021-11-23 07:47:27','2021-11-23 07:47:27',NULL),(10,4,1,'2021-11-23 08:07:56','2021-11-23 08:07:56',NULL),(11,4,2,'2021-11-23 08:07:56','2021-11-23 08:07:56',NULL),(12,4,3,'2021-11-23 08:07:56','2021-11-23 08:07:56',NULL),(13,4,4,'2021-11-23 08:07:56','2021-11-23 08:07:56',NULL),(14,5,1,'2021-11-23 08:10:46','2021-11-23 08:10:46',NULL),(15,5,2,'2021-11-23 08:10:46','2021-11-23 08:10:46',NULL),(16,5,3,'2021-11-23 08:10:46','2021-11-23 08:10:46',NULL),(17,5,4,'2021-11-23 08:10:46','2021-11-23 08:10:46',NULL),(18,6,1,'2021-11-23 09:49:51','2021-11-23 09:49:51',NULL),(19,6,2,'2021-11-23 09:49:51','2021-11-23 09:49:51',NULL),(20,6,3,'2021-11-23 09:49:51','2021-11-23 09:49:51',NULL),(21,6,4,'2021-11-23 09:49:51','2021-11-23 09:49:51',NULL),(22,7,1,'2021-11-23 10:02:36','2021-11-23 10:02:36',NULL),(23,7,2,'2021-11-23 10:02:36','2021-11-23 10:02:36',NULL),(24,7,3,'2021-11-23 10:02:36','2021-11-23 10:02:36',NULL),(25,7,4,'2021-11-23 10:02:36','2021-11-23 10:02:36',NULL),(26,8,1,'2021-11-23 10:19:52','2021-11-23 10:19:52',NULL),(27,8,2,'2021-11-23 10:19:52','2021-11-23 10:19:52',NULL),(28,8,3,'2021-11-23 10:19:52','2021-11-23 10:19:52',NULL),(29,8,4,'2021-11-23 10:19:52','2021-11-23 10:19:52',NULL),(30,9,1,'2021-11-23 10:45:38','2021-11-23 10:45:38',NULL),(31,9,2,'2021-11-23 10:45:38','2021-11-23 10:45:38',NULL),(32,9,3,'2021-11-23 10:45:38','2021-11-23 10:45:38',NULL),(33,9,4,'2021-11-23 10:45:38','2021-11-23 10:45:38',NULL),(34,10,1,'2021-11-26 03:31:18','2021-11-26 03:31:18',NULL),(35,10,2,'2021-11-26 03:31:18','2021-11-26 03:31:18',NULL),(36,10,3,'2021-11-26 03:31:18','2021-11-26 03:31:18',NULL),(37,10,4,'2021-11-26 03:31:18','2021-11-26 03:31:18',NULL),(38,11,1,'2021-11-26 03:42:36','2021-11-26 03:42:36',NULL),(39,11,2,'2021-11-26 03:42:36','2021-11-26 03:42:36',NULL),(40,11,3,'2021-11-26 03:42:36','2021-11-26 03:42:36',NULL),(41,11,4,'2021-11-26 03:42:36','2021-11-26 03:42:36',NULL);
/*!40000 ALTER TABLE `quizzes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ratings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `rating` int NOT NULL DEFAULT '0',
  `ratingable_id` int NOT NULL,
  `ratingable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ratings_user_id_foreign` (`user_id`),
  CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratings`
--

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reading_answers`
--

DROP TABLE IF EXISTS `reading_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reading_answers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `reading_question_id` bigint unsigned NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reading_answers_reading_question_id_foreign` (`reading_question_id`),
  CONSTRAINT `reading_answers_reading_question_id_foreign` FOREIGN KEY (`reading_question_id`) REFERENCES `reading_questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reading_answers`
--

LOCK TABLES `reading_answers` WRITE;
/*!40000 ALTER TABLE `reading_answers` DISABLE KEYS */;
INSERT INTO `reading_answers` VALUES (1,1,'1',0,'2021-11-10 09:10:22','2021-11-10 09:10:35',NULL),(2,1,'2',1,'2021-11-10 09:10:27','2021-11-10 09:10:35',NULL),(3,1,'3',0,'2021-11-10 09:10:31','2021-11-10 09:10:35',NULL),(4,2,'1',0,'2021-11-10 09:10:43','2021-11-10 09:10:54',NULL),(5,2,'2',0,'2021-11-10 09:10:47','2021-11-10 09:10:54',NULL),(6,2,'3',1,'2021-11-10 09:10:52','2021-11-10 09:10:54',NULL),(7,3,'yes',0,'2021-11-15 01:45:29','2021-11-18 07:07:15',NULL),(8,5,'Lorem ipsum',1,'2021-11-15 01:59:06','2021-11-15 01:59:18',NULL),(9,5,'lipsum',0,'2021-11-15 01:59:13','2021-11-15 01:59:18',NULL),(10,6,'1',0,'2021-11-18 07:02:02','2021-11-18 07:02:09',NULL),(11,6,'2',1,'2021-11-18 07:02:04','2021-11-18 07:02:09',NULL),(12,6,'3',0,'2021-11-18 07:02:07','2021-11-18 07:02:09',NULL),(13,7,'1',0,'2021-11-18 07:02:16','2021-11-18 07:02:27',NULL),(14,7,'2',0,'2021-11-18 07:02:21','2021-11-18 07:02:27',NULL),(15,7,'3',1,'2021-11-18 07:02:24','2021-11-18 07:02:27',NULL),(16,3,'no',0,'2021-11-18 07:07:02','2021-11-18 07:07:15',NULL),(17,3,'it fine',1,'2021-11-18 07:07:11','2021-11-18 07:07:15',NULL),(18,8,'it still fine',1,'2021-11-18 07:14:00','2021-11-18 07:14:33',NULL),(19,8,'it missing some char',0,'2021-11-18 07:14:17','2021-11-18 07:14:33',NULL),(20,8,'need update',0,'2021-11-18 07:14:31','2021-11-18 07:14:33',NULL);
/*!40000 ALTER TABLE `reading_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reading_questions`
--

DROP TABLE IF EXISTS `reading_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reading_questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question_id` bigint unsigned NOT NULL,
  `passage_id` bigint unsigned NOT NULL,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_wrong` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_index` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reading_questions_question_id_foreign` (`question_id`),
  KEY `reading_questions_passage_id_foreign` (`passage_id`),
  CONSTRAINT `reading_questions_passage_id_foreign` FOREIGN KEY (`passage_id`) REFERENCES `passages` (`id`) ON DELETE CASCADE,
  CONSTRAINT `reading_questions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reading_questions`
--

LOCK TABLES `reading_questions` WRITE;
/*!40000 ALTER TABLE `reading_questions` DISABLE KEYS */;
INSERT INTO `reading_questions` VALUES (1,1,1,'1+1 = ?','2',1,'2021-11-22 23:48:15','2021-11-22 23:48:15',NULL),(2,2,1,'1+2 = ?','3',3,'2021-11-22 23:48:36','2021-11-22 23:48:36',NULL),(3,11,2,'What does The weather Sam like ?','1',1,'2021-11-23 07:40:02','2021-11-23 07:42:12',NULL),(4,12,2,'What he think about Spanish ?','1',1,'2021-11-23 07:40:46','2021-11-23 07:40:46',NULL),(5,13,3,'We decided to go to the beach because ----.','1',1,'2021-11-23 07:48:51','2021-11-23 07:48:51',NULL),(6,14,3,'The bus was the ---- way to travel.','1',1,'2021-11-23 07:49:10','2021-11-23 07:49:10',NULL),(7,15,4,'Traveling by plane was ---- than by bus.','1',1,'2021-11-23 07:51:58','2021-11-23 07:51:58',NULL),(8,16,4,'We ---- our vacation','1',1,'2021-11-23 07:52:13','2021-11-23 07:52:13',NULL),(9,46,5,'Have Mexico in passage?','wrong',0,'2021-11-25 12:43:25','2021-11-25 12:43:25',NULL),(10,47,6,'1 + 1 = ?','wrong',0,'2021-11-25 12:59:54','2021-11-25 12:59:54',NULL),(11,48,6,'1 + 3 = ?','wrong',0,'2021-11-25 13:00:43','2021-11-25 13:00:43',NULL),(12,49,7,'1 + 1 + 1 = ?','wrong',1,'2021-11-25 13:02:36','2021-11-25 13:02:36',NULL),(13,50,8,'Where does John Smith go to college?','1',1,'2021-11-26 03:36:08','2021-11-26 03:36:08',NULL),(14,51,8,'What is John Smith’s hardest course?','1',1,'2021-11-26 03:36:28','2021-11-26 03:36:28',NULL),(15,52,9,'Who shares a house with John Smith?','1',1,'2021-11-26 03:38:45','2021-11-26 03:38:45',NULL),(16,53,9,'How old is John Smith’s younger brother?','1',1,'2021-11-26 03:39:00','2021-11-26 03:39:00',NULL),(17,54,10,'What happens first?','1',1,'2021-11-26 03:43:07','2021-11-26 03:43:07',NULL),(18,55,10,'What do I like?','1',1,'2021-11-26 03:44:25','2021-11-26 03:44:25',NULL),(19,56,11,'How do I go to school?','1',1,'2021-11-26 03:45:44','2021-11-26 03:45:44',NULL),(20,57,11,'What do I eat for dinner?','1',1,'2021-11-26 03:49:09','2021-11-26 03:49:09',NULL);
/*!40000 ALTER TABLE `reading_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,4),(2,4),(3,4),(4,4),(5,4),(6,4),(7,4),(8,4),(9,4),(10,4),(11,4),(12,4),(13,4),(14,4),(15,4),(16,4),(17,4),(18,4),(19,4),(20,4),(21,4),(22,4),(23,4),(24,4),(25,4),(26,4),(27,4),(28,4),(29,4),(30,4),(31,4),(32,4),(33,4),(34,4),(35,4),(36,4),(37,4),(38,4),(39,4),(40,4),(41,4),(42,4),(43,4),(44,4),(45,4),(46,4),(47,4),(48,4),(49,4),(50,4),(51,4),(52,4),(53,4),(54,4),(55,4),(56,4),(57,4),(58,4),(59,4),(60,4),(61,4),(62,4),(63,4),(64,4),(65,4),(66,4),(67,4),(68,4);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'moderator','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(2,'tutor','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(3,'student','web','2021-11-22 21:50:00','2021-11-22 21:50:00'),(4,'super-admin','web','2021-11-22 21:50:00','2021-11-22 21:50:00');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_live_courses`
--

DROP TABLE IF EXISTS `room_live_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_live_courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `study_session_id` bigint unsigned NOT NULL,
  `room_live_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `number_session` int NOT NULL,
  `number_member` int NOT NULL,
  `number_member_maximum` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `room_live_courses_course_id_foreign` (`course_id`),
  KEY `room_live_courses_study_session_id_foreign` (`study_session_id`),
  CONSTRAINT `room_live_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `room_live_courses_study_session_id_foreign` FOREIGN KEY (`study_session_id`) REFERENCES `study_sessions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_live_courses`
--

LOCK TABLES `room_live_courses` WRITE;
/*!40000 ALTER TABLE `room_live_courses` DISABLE KEYS */;
/*!40000 ALTER TABLE `room_live_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'token_exchange_rate','2','2021-11-22 21:50:07','2021-11-22 21:50:07',NULL),(2,'phone_footer','+852 2602 1668','2021-11-22 21:50:07','2021-11-22 21:50:07',NULL),(3,'whatapp_footer','+852 2602 1668','2021-11-22 21:50:07','2021-11-22 21:50:07',NULL),(4,'mail_admin_footer','adminssions@helios-edu.com','2021-11-22 21:50:07','2021-11-22 21:50:07',NULL),(5,'address_ho_footer','Helios Education (Head Office) Room 902, 9th Floor, Yongsheng Centre, 9 Star Street, Causeway Bay','2021-11-22 21:50:07','2021-11-22 21:50:07',NULL),(6,'address_cbs_footer','Helios Education (Causeway Bay Store) To Make An Appointment Room 2202, Causeway Bay Plaza 1, 489 Hennessy Road, Causeway Bay','2021-11-22 21:50:07','2021-11-22 21:50:07',NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skip_levels`
--

DROP TABLE IF EXISTS `skip_levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skip_levels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokens` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skip_levels`
--

LOCK TABLES `skip_levels` WRITE;
/*!40000 ALTER TABLE `skip_levels` DISABLE KEYS */;
/*!40000 ALTER TABLE `skip_levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_accounts`
--

DROP TABLE IF EXISTS `social_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_accounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `social_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `social_accounts_user_id_foreign` (`user_id`),
  CONSTRAINT `social_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_accounts`
--

LOCK TABLES `social_accounts` WRITE;
/*!40000 ALTER TABLE `social_accounts` DISABLE KEYS */;
INSERT INTO `social_accounts` VALUES (2,5,'107745423117572503267','google','2021-11-23 09:02:28','2021-11-23 09:02:28',NULL),(4,7,'101169135745616441055','google','2021-11-25 07:01:52','2021-11-25 07:01:52',NULL),(5,8,'114855126270711804443','google','2021-11-25 07:56:19','2021-11-25 07:56:19',NULL),(6,9,'116734655030531579662','google','2021-11-25 09:04:08','2021-11-25 09:04:08',NULL),(7,10,'108811853924189559706','google','2021-11-25 10:13:09','2021-11-25 10:13:09',NULL),(8,11,'109632905449475285737','google','2021-11-25 17:49:55','2021-11-25 17:49:55',NULL),(9,12,'111716438876287245568','google','2021-11-25 18:06:00','2021-11-25 18:06:00',NULL);
/*!40000 ALTER TABLE `social_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `speak_assessment_answers`
--

DROP TABLE IF EXISTS `speak_assessment_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `speak_assessment_answers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `s_a_question_id` bigint unsigned NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `speak_assessment_answers_s_a_question_id_foreign` (`s_a_question_id`),
  CONSTRAINT `speak_assessment_answers_s_a_question_id_foreign` FOREIGN KEY (`s_a_question_id`) REFERENCES `speak_assessment_questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `speak_assessment_answers`
--

LOCK TABLES `speak_assessment_answers` WRITE;
/*!40000 ALTER TABLE `speak_assessment_answers` DISABLE KEYS */;
INSERT INTO `speak_assessment_answers` VALUES (1,1,'4','1',NULL,'2021-11-10 09:24:34','2021-11-10 09:24:46'),(2,1,'5','0',NULL,'2021-11-10 09:24:38','2021-11-10 09:24:46'),(3,1,'6','0',NULL,'2021-11-10 09:24:41','2021-11-10 09:24:46'),(4,2,'6','0',NULL,'2021-11-10 09:25:05','2021-11-10 09:25:19'),(5,2,'7','1',NULL,'2021-11-10 09:25:09','2021-11-10 09:25:19'),(6,2,'8','0',NULL,'2021-11-10 09:25:16','2021-11-10 09:25:19'),(7,3,'7','0',NULL,'2021-11-18 07:06:11','2021-11-18 07:06:20'),(8,3,'8','0',NULL,'2021-11-18 07:06:13','2021-11-18 07:06:20'),(9,3,'9','1',NULL,'2021-11-18 07:06:17','2021-11-18 07:06:20'),(10,4,'4','0',NULL,'2021-11-18 07:06:29','2021-11-18 07:06:38'),(11,4,'5','1',NULL,'2021-11-18 07:06:32','2021-11-18 07:06:38'),(12,4,'6','0',NULL,'2021-11-18 07:06:35','2021-11-18 07:06:38');
/*!40000 ALTER TABLE `speak_assessment_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `speak_assessment_questions`
--

DROP TABLE IF EXISTS `speak_assessment_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `speak_assessment_questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question_id` bigint unsigned NOT NULL,
  `audio_ref` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_wrong` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_index` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `speak_assessment_questions_question_id_foreign` (`question_id`),
  CONSTRAINT `speak_assessment_questions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `speak_assessment_questions`
--

LOCK TABLES `speak_assessment_questions` WRITE;
/*!40000 ALTER TABLE `speak_assessment_questions` DISABLE KEYS */;
INSERT INTO `speak_assessment_questions` VALUES (1,9,'ee4f3c03b12','7-3 = ?','4',1,NULL,'2021-11-22 23:54:39','2021-11-22 23:54:39'),(2,10,'ee4f3c382de','8-3 = ?','5',1,NULL,'2021-11-22 23:55:00','2021-11-22 23:55:00');
/*!40000 ALTER TABLE `speak_assessment_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `speak_exercises_answers`
--

DROP TABLE IF EXISTS `speak_exercises_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `speak_exercises_answers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `s_e_question_id` bigint unsigned NOT NULL,
  `audio_ref` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `speak_exercises_answers_s_e_question_id_foreign` (`s_e_question_id`),
  CONSTRAINT `speak_exercises_answers_s_e_question_id_foreign` FOREIGN KEY (`s_e_question_id`) REFERENCES `speak_exercises_questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `speak_exercises_answers`
--

LOCK TABLES `speak_exercises_answers` WRITE;
/*!40000 ALTER TABLE `speak_exercises_answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `speak_exercises_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `speak_exercises_questions`
--

DROP TABLE IF EXISTS `speak_exercises_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `speak_exercises_questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question_id` bigint unsigned NOT NULL,
  `video_code_practice` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_code_response` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_wrong` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_index` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `speak_exercises_questions_question_id_foreign` (`question_id`),
  CONSTRAINT `speak_exercises_questions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `speak_exercises_questions`
--

LOCK TABLES `speak_exercises_questions` WRITE;
/*!40000 ALTER TABLE `speak_exercises_questions` DISABLE KEYS */;
INSERT INTO `speak_exercises_questions` VALUES (1,17,'648927578','648927918','watch 2 video and practice your self','1',1,'2021-11-23 08:09:59','2021-11-23 08:09:59',NULL);
/*!40000 ALTER TABLE `speak_exercises_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `speak_quiz_answers`
--

DROP TABLE IF EXISTS `speak_quiz_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `speak_quiz_answers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `speak_quiz_question_id` bigint unsigned NOT NULL,
  `audio_ref` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `speak_quiz_answers_speak_quiz_question_id_foreign` (`speak_quiz_question_id`),
  CONSTRAINT `speak_quiz_answers_speak_quiz_question_id_foreign` FOREIGN KEY (`speak_quiz_question_id`) REFERENCES `speak_quiz_questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `speak_quiz_answers`
--

LOCK TABLES `speak_quiz_answers` WRITE;
/*!40000 ALTER TABLE `speak_quiz_answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `speak_quiz_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `speak_quiz_questions`
--

DROP TABLE IF EXISTS `speak_quiz_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `speak_quiz_questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question_id` bigint unsigned NOT NULL,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_wrong` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_index` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `speak_quiz_questions_question_id_foreign` (`question_id`),
  CONSTRAINT `speak_quiz_questions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `speak_quiz_questions`
--

LOCK TABLES `speak_quiz_questions` WRITE;
/*!40000 ALTER TABLE `speak_quiz_questions` DISABLE KEYS */;
INSERT INTO `speak_quiz_questions` VALUES (1,18,'first question: what is your name ?','1',1,NULL,'2021-11-23 08:17:00','2021-11-23 08:17:00'),(2,19,'how old are you ?','2',1,NULL,'2021-11-23 08:17:26','2021-11-23 08:17:26'),(3,20,'where are your living?','1',1,NULL,'2021-11-23 08:18:54','2021-11-23 08:18:54'),(4,21,'2 minutes: tell me about something you like','1',1,NULL,'2021-11-23 08:20:08','2021-11-23 08:20:08'),(5,22,'What is your first name?','1',1,NULL,'2021-11-23 08:22:18','2021-11-23 08:22:18'),(6,23,'do you have any sibling, who are they ?','1',1,NULL,'2021-11-23 08:23:51','2021-11-23 08:23:51'),(7,24,'what time do you have lunch ?','1',1,NULL,'2021-11-23 08:24:45','2021-11-23 08:24:45'),(8,25,'2 Minutes: tell me somethings about sport you like  ?','1',1,NULL,'2021-11-23 08:26:23','2021-11-23 08:26:23');
/*!40000 ALTER TABLE `speak_quiz_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_courses`
--

DROP TABLE IF EXISTS `student_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `student_id` bigint unsigned NOT NULL,
  `room_live_course_id` bigint DEFAULT NULL,
  `latest_study` datetime DEFAULT NULL,
  `lecture_study` bigint DEFAULT NULL,
  `watched_list` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `set_exam` bigint DEFAULT NULL,
  `passed` tinyint(1) NOT NULL DEFAULT '0',
  `failed` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_courses_student_id_course_id_failed_unique` (`student_id`,`course_id`,`failed`),
  KEY `student_courses_course_id_foreign` (`course_id`),
  CONSTRAINT `student_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `student_courses_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_courses`
--

LOCK TABLES `student_courses` WRITE;
/*!40000 ALTER TABLE `student_courses` DISABLE KEYS */;
INSERT INTO `student_courses` VALUES (2,1,5,NULL,'2021-11-23 09:02:31',1,'0,1,',NULL,0,NULL,'2021-11-23 09:02:31','2021-11-23 09:03:48',NULL),(3,2,5,NULL,'2021-11-23 09:06:51',2,'0,1,2,3,',1,0,NULL,'2021-11-23 09:06:51','2021-11-25 09:39:45',NULL),(4,3,5,NULL,'2021-11-23 09:13:14',2,'0,1,2,3,',NULL,0,'2021-11-23 09:02:31','2021-11-23 09:13:14','2021-11-25 08:30:08',NULL),(8,5,5,NULL,'2021-11-24 01:54:57',4,'0,3,2,4,',NULL,0,NULL,'2021-11-24 01:54:57','2021-11-25 08:58:07',NULL),(9,6,5,NULL,'2021-11-24 02:04:27',4,'0,1,2,3,4,',NULL,0,NULL,'2021-11-24 02:04:27','2021-11-25 08:39:02',NULL),(16,1,7,NULL,'2021-11-25 07:01:55',1,'0,1,',NULL,0,NULL,'2021-11-25 07:01:55','2021-11-25 15:04:45',NULL),(17,1,8,NULL,'2021-11-25 07:56:22',1,'0,1,',NULL,0,NULL,'2021-11-25 07:56:22','2021-11-25 08:00:20',NULL),(18,3,8,NULL,'2021-11-25 08:08:03',3,'0,2,1,3,',NULL,0,'2021-11-23 09:02:31','2021-11-25 08:08:03','2021-11-25 13:54:10',NULL),(19,2,8,NULL,'2021-11-25 08:26:32',2,'0,2,1,3,',NULL,0,NULL,'2021-11-25 08:26:32','2021-11-25 15:00:22',NULL),(20,6,8,NULL,'2021-11-25 08:38:16',4,'0,4,',NULL,0,NULL,'2021-11-25 08:38:16','2021-11-25 08:38:19',NULL),(21,5,8,NULL,'2021-11-25 08:43:22',2,'0,3,4,2,',NULL,1,NULL,'2021-11-25 08:43:22','2021-11-25 15:01:00',NULL),(22,1,9,NULL,'2021-11-25 09:04:11',1,'0,1,',NULL,0,NULL,'2021-11-25 09:04:11','2021-11-25 09:05:14',NULL),(23,2,9,NULL,'2021-11-25 09:09:37',2,'0,1,2,3,',2,0,NULL,'2021-11-25 09:09:37','2021-11-25 12:51:06',NULL),(24,5,9,NULL,'2021-11-25 09:18:24',2,'0,1,2,3,4,',NULL,0,NULL,'2021-11-25 09:18:24','2021-11-25 14:20:05',NULL),(25,6,9,NULL,'2021-11-25 09:41:50',3,'0,3,4,2,',NULL,0,NULL,'2021-11-25 09:41:50','2021-11-25 09:43:09',NULL),(26,3,9,NULL,'2021-11-25 10:00:31',3,'0,2,3,1,',NULL,0,NULL,'2021-11-25 10:00:31','2021-11-25 10:01:51',NULL),(27,1,10,NULL,'2021-11-25 10:13:12',1,'0,1,',NULL,0,NULL,'2021-11-25 10:13:12','2021-11-25 10:13:53',NULL),(28,2,10,NULL,'2021-11-25 10:14:53',2,'0,2,',NULL,0,NULL,'2021-11-25 10:14:53','2021-11-25 10:14:59',NULL),(29,2,7,NULL,'2021-11-25 15:05:58',3,'0,2,3,',NULL,1,NULL,'2021-11-25 15:05:58','2021-11-25 15:06:41',NULL),(30,3,7,NULL,'2021-11-25 15:06:55',1,'0,2,3,1,',NULL,0,NULL,'2021-11-25 15:06:55','2021-11-26 01:33:08',NULL),(31,5,7,NULL,'2021-11-25 15:08:11',4,'0,3,4,',NULL,1,NULL,'2021-11-25 15:08:11','2021-11-25 15:08:52',NULL),(32,6,7,NULL,'2021-11-25 15:09:09',4,'0,1,2,3,4,',NULL,0,NULL,'2021-11-25 15:09:09','2021-11-25 15:09:32',NULL),(33,1,11,NULL,'2021-11-25 17:49:59',1,'0,1,',NULL,0,NULL,'2021-11-25 17:49:59','2021-11-25 17:51:05',NULL),(34,2,11,NULL,'2021-11-25 17:53:41',1,'0,1,2,3,',2,0,NULL,'2021-11-25 17:53:41','2021-11-25 18:05:37',NULL),(35,6,11,NULL,'2021-11-25 17:56:59',4,'0,1,2,3,4,',NULL,0,NULL,'2021-11-25 17:56:59','2021-11-25 17:57:22',NULL),(36,5,11,NULL,'2021-11-25 17:57:49',4,'0,1,2,3,4,',2,0,NULL,'2021-11-25 17:57:49','2021-11-25 17:58:20',NULL),(37,3,11,NULL,'2021-11-25 17:58:35',3,'0,1,2,3,',NULL,0,NULL,'2021-11-25 17:58:35','2021-11-25 18:00:40',NULL),(38,1,12,NULL,'2021-11-25 18:06:04',1,'0,1,',NULL,0,NULL,'2021-11-25 18:06:04','2021-11-25 18:08:59',NULL),(39,3,12,NULL,'2021-11-25 18:09:55',3,'0,3,',NULL,0,NULL,'2021-11-25 18:09:55','2021-11-25 18:09:58',NULL),(40,3,8,NULL,'2021-11-26 01:23:04',1,'0,3,1,',NULL,0,NULL,'2021-11-26 01:23:04','2021-11-26 01:32:55',NULL);
/*!40000 ALTER TABLE `student_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_examinations`
--

DROP TABLE IF EXISTS `student_examinations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_examinations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_course_id` bigint unsigned NOT NULL,
  `exam_id` bigint unsigned NOT NULL,
  `quiz_id` bigint unsigned NOT NULL,
  `question_id` bigint unsigned NOT NULL,
  `answer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_type` int NOT NULL,
  `time` double DEFAULT NULL,
  `comment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `score` double DEFAULT NULL,
  `reviewed` tinyint(1) NOT NULL DEFAULT '0',
  `had_update` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_examinations_student_course_id_foreign` (`student_course_id`),
  KEY `student_examinations_exam_id_foreign` (`exam_id`),
  KEY `student_examinations_quiz_id_foreign` (`quiz_id`),
  KEY `student_examinations_question_id_foreign` (`question_id`),
  CONSTRAINT `student_examinations_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  CONSTRAINT `student_examinations_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `student_examinations_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `student_examinations_student_course_id_foreign` FOREIGN KEY (`student_course_id`) REFERENCES `student_courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_examinations`
--

LOCK TABLES `student_examinations` WRITE;
/*!40000 ALTER TABLE `student_examinations` DISABLE KEYS */;
INSERT INTO `student_examinations` VALUES (5,2,1,1,1,'2',1,10.08,NULL,1,1,1,NULL,'2021-11-23 09:03:10','2021-11-23 09:03:10'),(6,2,1,1,2,'6',1,3.695,NULL,1,1,1,NULL,'2021-11-23 09:03:10','2021-11-23 09:03:10'),(7,2,1,1,3,'7',1,2.945,NULL,1,1,1,NULL,'2021-11-23 09:03:19','2021-11-23 09:03:19'),(8,2,1,1,4,'11',1,2.679,NULL,1,1,1,NULL,'2021-11-23 09:03:19','2021-11-23 09:03:19'),(9,2,1,1,5,'15',1,0,NULL,1,1,1,NULL,'2021-11-23 09:03:36','2021-11-23 09:03:36'),(10,2,1,1,6,'19',1,0,NULL,1,1,1,NULL,'2021-11-23 09:03:36','2021-11-23 09:03:36'),(11,2,1,1,7,'20',1,0,NULL,1,1,1,NULL,'2021-11-23 09:03:36','2021-11-23 09:03:36'),(12,2,1,1,8,'24',1,0,NULL,1,1,1,NULL,'2021-11-23 09:03:36','2021-11-23 09:03:36'),(13,2,1,1,9,'27',1,4.763,NULL,1,1,1,NULL,'2021-11-23 09:03:48','2021-11-23 09:03:48'),(14,2,1,1,10,'30',1,4.884,NULL,1,1,1,NULL,'2021-11-23 09:03:48','2021-11-23 09:03:48'),(15,3,2,2,11,'32',1,6.455,NULL,1,1,0,NULL,'2021-11-23 09:07:28','2021-11-23 09:12:54'),(16,3,2,2,12,'35',1,3.855,NULL,0,1,1,NULL,'2021-11-23 09:07:28','2021-11-23 09:07:28'),(33,3,3,6,13,'38',1,4.124,NULL,0,1,1,NULL,'2021-11-23 09:23:12','2021-11-23 09:23:12'),(34,3,3,6,14,'41',1,3.428,NULL,0,1,1,NULL,'2021-11-23 09:23:12','2021-11-23 09:23:12'),(59,16,1,1,1,'2',1,4.258,NULL,1,1,1,NULL,'2021-11-25 07:02:14','2021-11-25 07:02:14'),(60,16,1,1,2,'6',1,7.776,NULL,1,1,1,NULL,'2021-11-25 07:02:14','2021-11-25 07:02:14'),(61,16,1,1,3,'7',1,5.958,NULL,1,1,1,NULL,'2021-11-25 07:02:25','2021-11-25 07:02:25'),(62,16,1,1,4,'11',1,2.426,NULL,1,1,1,NULL,'2021-11-25 07:02:25','2021-11-25 07:02:25'),(63,16,1,1,5,'15',1,0,NULL,1,1,1,NULL,'2021-11-25 07:02:45','2021-11-25 07:02:45'),(64,16,1,1,6,'19',1,0,NULL,1,1,1,NULL,'2021-11-25 07:02:45','2021-11-25 07:02:45'),(65,16,1,1,7,'20',1,0,NULL,1,1,1,NULL,'2021-11-25 07:02:45','2021-11-25 07:02:45'),(66,16,1,1,8,'24',1,0,NULL,1,1,1,NULL,'2021-11-25 07:02:45','2021-11-25 07:02:45'),(67,17,1,1,1,'2',1,3.12,NULL,1,1,1,NULL,'2021-11-25 07:59:02','2021-11-25 07:59:02'),(68,17,1,1,2,'6',1,2.729,NULL,1,1,1,NULL,'2021-11-25 07:59:02','2021-11-25 07:59:02'),(69,17,1,1,3,'7',1,3.088,NULL,1,1,1,NULL,'2021-11-25 07:59:10','2021-11-25 07:59:10'),(70,17,1,1,4,'11',1,2.311,NULL,1,1,1,NULL,'2021-11-25 07:59:10','2021-11-25 07:59:10'),(71,17,1,1,5,'15',1,0,NULL,1,1,1,NULL,'2021-11-25 07:59:22','2021-11-25 07:59:22'),(72,17,1,1,6,'19',1,0,NULL,1,1,1,NULL,'2021-11-25 07:59:22','2021-11-25 07:59:22'),(73,17,1,1,7,'20',1,0,NULL,1,1,1,NULL,'2021-11-25 07:59:22','2021-11-25 07:59:22'),(74,17,1,1,8,'24',1,0,NULL,1,1,1,NULL,'2021-11-25 07:59:22','2021-11-25 07:59:22'),(75,17,1,1,9,'27',1,1637827216.667,NULL,1,1,1,NULL,'2021-11-25 08:00:20','2021-11-25 08:00:20'),(76,17,1,1,10,'30',1,3.119,NULL,1,1,1,NULL,'2021-11-25 08:00:20','2021-11-25 08:00:20'),(77,8,6,18,26,'52',1,0,NULL,0,1,1,NULL,'2021-11-25 08:32:05','2021-11-25 08:32:05'),(78,8,6,18,27,'53',1,0,NULL,0,1,1,NULL,'2021-11-25 08:32:05','2021-11-25 08:32:05'),(79,8,6,18,28,'55',1,0,NULL,1,1,1,NULL,'2021-11-25 08:32:05','2021-11-25 08:32:05'),(80,9,9,30,42,'<p>There are two people in this picture.</p>',2,44.824,NULL,NULL,0,0,NULL,'2021-11-25 08:37:16','2021-11-25 08:37:16'),(81,9,9,30,43,'<p>hello, are you ok ?</p>',2,55.833,NULL,NULL,0,0,NULL,'2021-11-25 08:37:16','2021-11-25 08:37:16'),(82,21,6,18,26,'50',1,0,NULL,1,1,1,NULL,'2021-11-25 08:43:46','2021-11-25 08:43:46'),(83,21,6,18,27,'54',1,0,NULL,1,1,1,NULL,'2021-11-25 08:43:46','2021-11-25 08:43:46'),(84,21,6,18,28,'55',1,0,NULL,1,1,1,NULL,'2021-11-25 08:43:46','2021-11-25 08:43:46'),(85,21,7,22,29,'58',1,0,NULL,1,1,1,NULL,'2021-11-25 08:44:00','2021-11-25 08:44:00'),(86,21,7,22,30,'60',1,0,NULL,1,1,1,NULL,'2021-11-25 08:44:00','2021-11-25 08:44:00'),(87,22,1,1,1,'1',1,3.225,NULL,0,1,1,NULL,'2021-11-25 09:04:22','2021-11-25 09:04:22'),(88,22,1,1,2,'6',1,3.262,NULL,1,1,1,NULL,'2021-11-25 09:04:22','2021-11-25 09:04:22'),(89,22,1,1,3,'7',1,2.615,NULL,1,1,1,NULL,'2021-11-25 09:04:30','2021-11-25 09:04:30'),(90,22,1,1,4,'11',1,2.52,NULL,1,1,1,NULL,'2021-11-25 09:04:30','2021-11-25 09:04:30'),(91,22,1,1,5,'15',1,0,NULL,1,1,1,NULL,'2021-11-25 09:04:59','2021-11-25 09:04:59'),(92,22,1,1,6,'19',1,0,NULL,1,1,1,NULL,'2021-11-25 09:04:59','2021-11-25 09:04:59'),(93,22,1,1,7,'20',1,0,NULL,1,1,1,NULL,'2021-11-25 09:04:59','2021-11-25 09:04:59'),(94,22,1,1,8,'24',1,0,NULL,1,1,1,NULL,'2021-11-25 09:04:59','2021-11-25 09:04:59'),(95,22,1,1,9,'27',1,1637831108.99,NULL,1,1,1,NULL,'2021-11-25 09:05:14','2021-11-25 09:05:14'),(96,22,1,1,10,'30',1,5.012,NULL,1,1,1,NULL,'2021-11-25 09:05:14','2021-11-25 09:05:14'),(97,23,2,2,11,'32',1,28.685,NULL,1,1,1,NULL,'2021-11-25 09:15:39','2021-11-25 09:15:39'),(98,23,2,2,12,'36',1,11.112,NULL,0,1,1,NULL,'2021-11-25 09:15:39','2021-11-25 09:15:39'),(99,23,3,6,13,'38',1,30.218,NULL,0,1,1,NULL,'2021-11-25 09:17:50','2021-11-25 09:17:50'),(100,23,3,6,14,'42',1,6.615,NULL,1,1,1,NULL,'2021-11-25 09:17:50','2021-11-25 09:17:50'),(101,24,6,18,26,'50',1,0,NULL,1,1,1,NULL,'2021-11-25 09:26:38','2021-11-25 09:26:38'),(102,24,6,18,27,'54',1,0,NULL,1,1,1,NULL,'2021-11-25 09:26:38','2021-11-25 09:26:38'),(103,24,6,18,28,'55',1,0,NULL,1,1,1,NULL,'2021-11-25 09:26:38','2021-11-25 09:26:38'),(104,25,9,30,42,'<p>ok</p>',2,6.688,NULL,NULL,0,0,NULL,'2021-11-25 09:42:53','2021-11-25 09:42:53'),(105,25,9,30,43,'<p>hello</p>',2,6.209,NULL,NULL,0,0,NULL,'2021-11-25 09:42:53','2021-11-25 09:42:53'),(106,27,1,1,1,'2',1,2.447,NULL,1,1,1,NULL,'2021-11-25 10:13:21','2021-11-25 10:13:21'),(107,27,1,1,2,'6',1,2.48,NULL,1,1,1,NULL,'2021-11-25 10:13:21','2021-11-25 10:13:21'),(108,27,1,1,3,'7',1,2.349,NULL,1,1,1,NULL,'2021-11-25 10:13:28','2021-11-25 10:13:28'),(109,27,1,1,4,'11',1,2.705,NULL,1,1,1,NULL,'2021-11-25 10:13:28','2021-11-25 10:13:28'),(110,27,1,1,5,'15',1,0,NULL,1,1,1,NULL,'2021-11-25 10:13:43','2021-11-25 10:13:43'),(111,27,1,1,6,'19',1,0,NULL,1,1,1,NULL,'2021-11-25 10:13:43','2021-11-25 10:13:43'),(112,27,1,1,7,'20',1,0,NULL,1,1,1,NULL,'2021-11-25 10:13:43','2021-11-25 10:13:43'),(113,27,1,1,8,'24',1,0,NULL,1,1,1,NULL,'2021-11-25 10:13:43','2021-11-25 10:13:43'),(114,27,1,1,9,'27',1,1637835228.791,NULL,1,1,1,NULL,'2021-11-25 10:13:53','2021-11-25 10:13:53'),(115,27,1,1,10,'30',1,3.981,NULL,1,1,1,NULL,'2021-11-25 10:13:53','2021-11-25 10:13:53'),(116,16,1,1,9,'27',1,1637852673.651,NULL,1,1,1,NULL,'2021-11-25 15:04:45','2021-11-25 15:04:45'),(117,16,1,1,10,'30',1,11.977,NULL,1,1,1,NULL,'2021-11-25 15:04:45','2021-11-25 15:04:45'),(118,29,2,2,11,'32',1,8.113,NULL,1,1,1,NULL,'2021-11-25 15:06:22','2021-11-25 15:06:22'),(119,29,2,2,12,'35',1,11.073,NULL,0,1,1,NULL,'2021-11-25 15:06:22','2021-11-25 15:06:22'),(120,29,3,6,13,'40',1,8.255,NULL,1,1,1,NULL,'2021-11-25 15:06:41','2021-11-25 15:06:41'),(121,29,3,6,14,'42',1,4.142,NULL,1,1,1,NULL,'2021-11-25 15:06:41','2021-11-25 15:06:41'),(122,30,5,14,18,'649989711',3,5.743,NULL,NULL,0,0,NULL,'2021-11-25 15:07:50','2021-11-25 15:07:50'),(123,30,5,14,19,'649989711',3,1.945,NULL,NULL,0,0,NULL,'2021-11-25 15:07:50','2021-11-25 15:07:50'),(124,30,5,14,20,'649989711',3,2.656,NULL,NULL,0,0,NULL,'2021-11-25 15:07:50','2021-11-25 15:07:50'),(125,30,5,14,21,'649989711',3,16.816,NULL,NULL,0,0,NULL,'2021-11-25 15:07:50','2021-11-25 15:07:50'),(126,31,6,18,26,'50',1,0,NULL,1,1,1,NULL,'2021-11-25 15:08:40','2021-11-25 15:08:40'),(127,31,6,18,27,'54',1,0,NULL,1,1,1,NULL,'2021-11-25 15:08:40','2021-11-25 15:08:40'),(128,31,6,18,28,'55',1,0,NULL,1,1,1,NULL,'2021-11-25 15:08:40','2021-11-25 15:08:40'),(129,31,7,22,29,'58',1,0,NULL,1,1,1,NULL,'2021-11-25 15:08:52','2021-11-25 15:08:52'),(130,31,7,22,30,'60',1,0,NULL,1,1,1,NULL,'2021-11-25 15:08:52','2021-11-25 15:08:52'),(131,32,8,26,31,'61',1,3.196,NULL,1,1,1,NULL,'2021-11-25 15:09:29','2021-11-25 15:09:29'),(132,32,8,26,33,'66',1,4.665,NULL,1,1,1,NULL,'2021-11-25 15:09:29','2021-11-25 15:09:29'),(133,32,9,30,42,'<p>fsfdsf</p>',2,4.512,NULL,NULL,0,0,NULL,'2021-11-25 15:09:40','2021-11-25 15:09:40'),(134,32,9,30,43,'<p>sdfsdf</p>',2,2.881,NULL,NULL,0,0,NULL,'2021-11-25 15:09:40','2021-11-25 15:09:40'),(135,33,1,1,1,'1',1,5.656,NULL,0,1,1,NULL,'2021-11-25 17:50:18','2021-11-25 17:50:18'),(136,33,1,1,2,'6',1,3.999,NULL,1,1,1,NULL,'2021-11-25 17:50:18','2021-11-25 17:50:18'),(137,33,1,1,3,'7',1,2.167,NULL,1,1,1,NULL,'2021-11-25 17:50:48','2021-11-25 17:50:48'),(138,33,1,1,4,'11',1,17.071,NULL,1,1,1,NULL,'2021-11-25 17:50:48','2021-11-25 17:50:48'),(139,33,1,1,5,'14',1,0,NULL,0,1,1,NULL,'2021-11-25 17:50:59','2021-11-25 17:50:59'),(140,33,1,1,6,'18',1,0,NULL,0,1,1,NULL,'2021-11-25 17:50:59','2021-11-25 17:50:59'),(141,33,1,1,7,'22',1,0,NULL,0,1,1,NULL,'2021-11-25 17:50:59','2021-11-25 17:50:59'),(142,33,1,1,8,'24',1,0,NULL,1,1,1,NULL,'2021-11-25 17:50:59','2021-11-25 17:50:59'),(143,33,1,1,9,'27',1,1637862662.552,NULL,1,1,1,NULL,'2021-11-25 17:51:05','2021-11-25 17:51:05'),(144,33,1,1,10,'29',1,2.245,NULL,0,1,1,NULL,'2021-11-25 17:51:05','2021-11-25 17:51:05'),(145,34,2,2,11,'33',1,5.726,NULL,0,1,1,NULL,'2021-11-25 17:55:33','2021-11-25 17:55:33'),(146,34,2,2,12,'35',1,5.24,NULL,0,1,1,NULL,'2021-11-25 17:55:33','2021-11-25 17:55:33'),(147,34,3,6,13,'38',1,1.501,NULL,0,1,1,NULL,'2021-11-25 17:56:02','2021-11-25 17:56:02'),(148,34,3,6,14,'42',1,1.888,NULL,1,1,1,NULL,'2021-11-25 17:56:02','2021-11-25 17:56:02'),(149,35,8,26,31,'61',1,3.681,NULL,1,1,1,NULL,'2021-11-25 17:57:18','2021-11-25 17:57:18'),(150,35,8,26,33,'67',1,6.39,NULL,0,1,1,NULL,'2021-11-25 17:57:18','2021-11-25 17:57:18'),(151,35,9,30,42,'<p>das</p>',2,5.36,NULL,NULL,0,0,NULL,'2021-11-25 17:57:32','2021-11-25 17:57:32'),(152,35,9,30,43,'<p>sdsadasd</p>',2,2.835,NULL,NULL,0,0,NULL,'2021-11-25 17:57:32','2021-11-25 17:57:32'),(153,36,6,18,26,'51',1,0,NULL,0,1,1,NULL,'2021-11-25 17:58:15','2021-11-25 17:58:15'),(154,36,6,18,27,'53',1,0,NULL,0,1,1,NULL,'2021-11-25 17:58:15','2021-11-25 17:58:15'),(155,36,6,18,28,'55',1,0,NULL,1,1,1,NULL,'2021-11-25 17:58:15','2021-11-25 17:58:15'),(156,36,7,22,29,'57',1,0,NULL,0,1,1,NULL,'2021-11-25 17:58:20','2021-11-25 17:58:20'),(157,36,7,22,30,'85',1,0,NULL,0,1,1,NULL,'2021-11-25 17:58:20','2021-11-25 17:58:20'),(158,38,1,1,1,'2',1,7.009,NULL,1,1,1,NULL,'2021-11-25 18:08:02','2021-11-25 18:08:02'),(159,38,1,1,2,'4',1,3.977,NULL,0,1,1,NULL,'2021-11-25 18:08:02','2021-11-25 18:08:02'),(160,38,1,1,3,'7',1,1.443,NULL,1,1,1,NULL,'2021-11-25 18:08:36','2021-11-25 18:08:36'),(161,38,1,1,4,'12',1,1.336,NULL,0,1,1,NULL,'2021-11-25 18:08:36','2021-11-25 18:08:36'),(162,38,1,1,5,'15',1,0,NULL,1,1,1,NULL,'2021-11-25 18:08:55','2021-11-25 18:08:55'),(163,38,1,1,6,'18',1,0,NULL,0,1,1,NULL,'2021-11-25 18:08:55','2021-11-25 18:08:55'),(164,38,1,1,7,'21',1,0,NULL,0,1,1,NULL,'2021-11-25 18:08:55','2021-11-25 18:08:55'),(165,38,1,1,8,'24',1,0,NULL,1,1,1,NULL,'2021-11-25 18:08:55','2021-11-25 18:08:55'),(166,38,1,1,9,'26',1,1637863737.41,NULL,0,1,1,NULL,'2021-11-25 18:08:59','2021-11-25 18:08:59'),(167,38,1,1,10,'30',1,1.334,NULL,1,1,1,NULL,'2021-11-25 18:08:59','2021-11-25 18:08:59');
/*!40000 ALTER TABLE `student_examinations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_schedules`
--

DROP TABLE IF EXISTS `student_schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_schedules` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `room_live_course_id` bigint DEFAULT NULL,
  `study_session_id` bigint DEFAULT NULL,
  `tutor_id` bigint DEFAULT NULL,
  `student_id` bigint unsigned NOT NULL,
  `is_test` tinyint(1) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_schedules_unique` (`course_id`,`study_session_id`,`is_test`,`student_id`,`date`),
  KEY `student_schedules_student_id_foreign` (`student_id`),
  CONSTRAINT `student_schedules_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `student_schedules_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_schedules`
--

LOCK TABLES `student_schedules` WRITE;
/*!40000 ALTER TABLE `student_schedules` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `full_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_of_birth` date DEFAULT NULL,
  `phone_no` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_level` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_read` double DEFAULT NULL,
  `level_write` double DEFAULT NULL,
  `level_speak` double DEFAULT NULL,
  `level_listen` double DEFAULT NULL,
  `exam_buy_read` double DEFAULT NULL,
  `exam_buy_write` double DEFAULT NULL,
  `exam_buy_speak` double DEFAULT NULL,
  `exam_buy_listen` double DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `students_user_id_foreign` (`user_id`),
  CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (2,5,NULL,NULL,NULL,NULL,5,5,5,5,NULL,NULL,NULL,NULL,NULL,'2021-11-23 09:02:28','2021-11-23 09:03:48'),(4,7,NULL,NULL,NULL,NULL,5.5,5,5,5.5,NULL,NULL,NULL,NULL,NULL,'2021-11-25 07:01:52','2021-11-25 15:08:52'),(5,8,NULL,NULL,NULL,NULL,5,5,5,5.5,NULL,NULL,NULL,NULL,NULL,'2021-11-25 07:56:19','2021-11-25 08:44:00'),(6,9,NULL,NULL,NULL,NULL,5,5,5,5,NULL,NULL,NULL,NULL,NULL,'2021-11-25 09:04:08','2021-11-25 09:05:14'),(7,10,NULL,NULL,NULL,NULL,5,5,5,5,NULL,NULL,NULL,NULL,NULL,'2021-11-25 10:13:09','2021-11-25 10:13:53'),(8,11,NULL,NULL,NULL,NULL,5,5,5,5,NULL,NULL,NULL,NULL,NULL,'2021-11-25 17:49:55','2021-11-25 17:51:05'),(9,12,NULL,NULL,NULL,NULL,5,5,5,5,NULL,NULL,NULL,NULL,NULL,'2021-11-25 18:06:00','2021-11-25 18:08:59');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `study_sessions`
--

DROP TABLE IF EXISTS `study_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `study_sessions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `session_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_start` datetime NOT NULL,
  `session_end` datetime NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `study_sessions`
--

LOCK TABLES `study_sessions` WRITE;
/*!40000 ALTER TABLE `study_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `study_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject_translations`
--

DROP TABLE IF EXISTS `subject_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject_translations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint unsigned NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subject_translations_subject_id_locale_unique` (`subject_id`,`locale`),
  KEY `subject_translations_locale_index` (`locale`),
  CONSTRAINT `subject_translations_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject_translations`
--

LOCK TABLES `subject_translations` WRITE;
/*!40000 ALTER TABLE `subject_translations` DISABLE KEYS */;
INSERT INTO `subject_translations` VALUES (1,'basic english',2,'en','2021-11-23 07:11:04','2021-11-23 07:11:04',NULL),(2,'基础英语',2,'cn','2021-11-23 07:11:04','2021-11-23 07:11:04',NULL),(3,'基本的英语',2,'sc','2021-11-23 07:11:04','2021-11-23 07:11:04',NULL);
/*!40000 ALTER TABLE `subject_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `certificate_id` bigint unsigned NOT NULL,
  `subject_color_background` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_color_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subjects_certificate_id_foreign` (`certificate_id`),
  CONSTRAINT `subjects_certificate_id_foreign` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (1,1,'#fff','#fff',0,'2021-11-22 21:50:07','2021-11-22 21:50:07',NULL),(2,1,'#a41c1c','#f4f4f4',1,'2021-11-23 07:11:04','2021-11-23 07:11:04',NULL);
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submit_examinations`
--

DROP TABLE IF EXISTS `submit_examinations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `submit_examinations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint unsigned NOT NULL,
  `examination_id` bigint NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `submit_examinations_student_id_foreign` (`student_id`),
  CONSTRAINT `submit_examinations_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submit_examinations`
--

LOCK TABLES `submit_examinations` WRITE;
/*!40000 ALTER TABLE `submit_examinations` DISABLE KEYS */;
INSERT INTO `submit_examinations` VALUES (2,21,1,'Complete exam','Complete exam','2021-08-18 10:11:26','2021-08-18 10:11:26',NULL);
/*!40000 ALTER TABLE `submit_examinations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription_items`
--

DROP TABLE IF EXISTS `subscription_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscription_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint unsigned NOT NULL,
  `stripe_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscription_items_subscription_id_stripe_plan_unique` (`subscription_id`,`stripe_plan`),
  KEY `subscription_items_stripe_id_index` (`stripe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription_items`
--

LOCK TABLES `subscription_items` WRITE;
/*!40000 ALTER TABLE `subscription_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscription_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_type` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Reading',1,'2021-11-23 08:39:48','2021-11-23 08:39:48',NULL),(2,'Starter',2,'2021-11-23 08:40:00','2021-11-23 08:40:00',NULL);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `payable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payable_id` bigint unsigned NOT NULL,
  `wallet_id` bigint unsigned DEFAULT NULL,
  `type` enum('deposit','withdraw') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(64,0) NOT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `meta` json DEFAULT NULL,
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transactions_uuid_unique` (`uuid`),
  KEY `transactions_payable_type_payable_id_index` (`payable_type`,`payable_id`),
  KEY `payable_type_ind` (`payable_type`,`payable_id`,`type`),
  KEY `payable_confirmed_ind` (`payable_type`,`payable_id`,`confirmed`),
  KEY `payable_type_confirmed_ind` (`payable_type`,`payable_id`,`type`,`confirmed`),
  KEY `transactions_type_index` (`type`),
  KEY `transactions_wallet_id_foreign` (`wallet_id`),
  CONSTRAINT `transactions_wallet_id_foreign` FOREIGN KEY (`wallet_id`) REFERENCES `wallets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,'App\\Models\\User',5,1,'deposit',400,1,'{\"card\": \"paypal\"}','6ffe84cb-260f-487a-a061-9c67a656d818','2021-11-23 09:05:40','2021-11-23 09:05:40'),(2,'App\\Models\\User',5,1,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','a2e49ae3-9762-4324-9e74-cec792c44a52','2021-11-23 09:06:51','2021-11-23 09:06:51'),(3,'App\\Models\\CourseMembershipDiscount',2,2,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','1098ba92-ceaa-405b-b673-d70e1420f87e','2021-11-23 09:06:51','2021-11-23 09:06:51'),(4,'App\\Models\\User',5,1,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','5672fa57-8a2b-4a7a-ade3-90ead208e038','2021-11-23 09:13:14','2021-11-23 09:13:14'),(5,'App\\Models\\CourseMembershipDiscount',3,4,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','c79d6129-1ce4-4024-bc7a-f8f0b5e84dc5','2021-11-23 09:13:14','2021-11-23 09:13:14'),(6,'App\\Models\\User',2,3,'deposit',2000,1,'{\"card\": \"4242\"}','69d8bc22-bd78-41bb-9601-f3d3da8b6887','2021-11-23 09:55:31','2021-11-23 09:55:31'),(7,'App\\Models\\User',2,3,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','1d78af31-d790-40b4-afb1-549a144cff19','2021-11-23 09:56:14','2021-11-23 09:56:14'),(8,'App\\Models\\CourseMembershipDiscount',3,4,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','26b41719-f74e-48b0-8065-361b09c2478a','2021-11-23 09:56:14','2021-11-23 09:56:14'),(9,'App\\Models\\User',6,5,'deposit',2000,1,'{\"card\": \"4242\"}','c01faf6d-f65f-46ba-a902-b8a0c98220ee','2021-11-23 15:13:30','2021-11-23 15:13:30'),(10,'App\\Models\\User',6,5,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','427b8606-1259-4b2e-b1a3-9dbef44ecc18','2021-11-23 15:14:07','2021-11-23 15:14:07'),(11,'App\\Models\\CourseMembershipDiscount',3,4,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','2cce0b88-55c5-4fc1-a649-0a96613a79b7','2021-11-23 15:14:07','2021-11-23 15:14:07'),(12,'App\\Models\\User',5,1,'withdraw',-33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','66b40c9b-3bc1-4af4-a8f2-a69868b84109','2021-11-24 01:54:57','2021-11-24 01:54:57'),(13,'App\\Models\\CourseMembershipDiscount',4,6,'deposit',33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','84eb6feb-3e8f-4884-a244-984f86c9dbf7','2021-11-24 01:54:57','2021-11-24 01:54:57'),(14,'App\\Models\\User',5,1,'withdraw',-35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','d85129c8-2f6b-4341-ac72-9fd6bbcbe2c5','2021-11-24 02:04:27','2021-11-24 02:04:27'),(15,'App\\Models\\CourseMembershipDiscount',5,7,'deposit',35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','0908bbaf-0e29-4eff-9351-85ea523b2953','2021-11-24 02:04:27','2021-11-24 02:04:27'),(16,'App\\Models\\User',6,5,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','863f78c1-2789-4bb4-ac64-1ea84be88eb7','2021-11-24 03:57:47','2021-11-24 03:57:47'),(17,'App\\Models\\CourseMembershipDiscount',2,2,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','34d05c10-4e74-49c5-bdc4-32a5f8dd4753','2021-11-24 03:57:47','2021-11-24 03:57:47'),(18,'App\\Models\\User',6,5,'withdraw',-33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','27cc0b33-c815-4c65-81db-8c2095e7f178','2021-11-24 10:07:23','2021-11-24 10:07:23'),(19,'App\\Models\\CourseMembershipDiscount',4,6,'deposit',33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','30878aa2-ae37-480f-b8a4-f924d322dcc1','2021-11-24 10:07:23','2021-11-24 10:07:23'),(20,'App\\Models\\User',2,3,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','34295e2a-5363-402b-81c5-02fea7bef844','2021-11-24 13:48:57','2021-11-24 13:48:57'),(21,'App\\Models\\CourseMembershipDiscount',2,2,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','1735c810-98b7-4b74-b917-6657d71676a9','2021-11-24 13:48:57','2021-11-24 13:48:57'),(22,'App\\Models\\User',2,3,'withdraw',-35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','c26dcfbf-7aed-4183-a0ab-644ac6b0763a','2021-11-24 14:05:16','2021-11-24 14:05:16'),(23,'App\\Models\\CourseMembershipDiscount',5,7,'deposit',35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','3548d3be-db98-438c-b073-a7230347db5f','2021-11-24 14:05:16','2021-11-24 14:05:16'),(24,'App\\Models\\User',2,3,'withdraw',-33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','004c1cd1-24a5-4214-a13b-3a19a6607233','2021-11-24 14:15:50','2021-11-24 14:15:50'),(25,'App\\Models\\CourseMembershipDiscount',4,6,'deposit',33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','57380f58-2635-4a58-817f-f709c19c69e2','2021-11-24 14:15:50','2021-11-24 14:15:50'),(26,'App\\Models\\User',6,5,'withdraw',-35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','4ac91adc-4cbf-4670-9f8d-e57cdf252e0e','2021-11-25 03:36:18','2021-11-25 03:36:18'),(27,'App\\Models\\CourseMembershipDiscount',5,7,'deposit',35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','8e0a9160-f6f1-469a-ae82-a2c99d230c21','2021-11-25 03:36:18','2021-11-25 03:36:18'),(28,'App\\Models\\User',8,8,'deposit',2000,1,'{\"card\": \"4242\"}','962ebb1a-4674-4e18-a338-2de93420124d','2021-11-25 08:07:32','2021-11-25 08:07:32'),(29,'App\\Models\\User',8,8,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','79f759d3-22c2-4449-b909-6983072b0ff5','2021-11-25 08:08:03','2021-11-25 08:08:03'),(30,'App\\Models\\CourseMembershipDiscount',3,4,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','d522d7f4-5682-4e02-9abc-93d78acc1f82','2021-11-25 08:08:03','2021-11-25 08:08:03'),(31,'App\\Models\\User',8,8,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','323bbcf7-0829-48d4-971c-42ef51c71dce','2021-11-25 08:26:32','2021-11-25 08:26:32'),(32,'App\\Models\\CourseMembershipDiscount',2,2,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','7b1dfcb9-6856-4715-969d-c0b70a526aea','2021-11-25 08:26:32','2021-11-25 08:26:32'),(33,'App\\Models\\User',8,8,'withdraw',-35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','e456dec7-762e-4227-82c8-7d899cbd7729','2021-11-25 08:38:16','2021-11-25 08:38:16'),(34,'App\\Models\\CourseMembershipDiscount',5,7,'deposit',35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','4f9ad75a-e15e-455c-8827-414c59477c60','2021-11-25 08:38:16','2021-11-25 08:38:16'),(35,'App\\Models\\User',8,8,'withdraw',-33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','64c208d3-2953-4cc7-b1c6-2ffcae78f062','2021-11-25 08:43:22','2021-11-25 08:43:22'),(36,'App\\Models\\CourseMembershipDiscount',4,6,'deposit',33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','5617adf2-4ea6-496b-bfc2-a9e37a96781e','2021-11-25 08:43:22','2021-11-25 08:43:22'),(37,'App\\Models\\User',9,9,'deposit',200,1,'{\"card\": \"4242\"}','0189afca-1532-4f7c-b3eb-fbbbc5b4917a','2021-11-25 09:06:44','2021-11-25 09:06:44'),(38,'App\\Models\\User',9,9,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','e8bd7ae8-3f6a-4ada-b721-023228f4b3b9','2021-11-25 09:09:37','2021-11-25 09:09:37'),(39,'App\\Models\\CourseMembershipDiscount',2,2,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','57d400d7-9281-4ecb-8f9c-6d88bd7cfb65','2021-11-25 09:09:37','2021-11-25 09:09:37'),(40,'App\\Models\\User',9,9,'withdraw',-33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','6fab59b1-8940-41ad-823a-539f37f86a97','2021-11-25 09:18:24','2021-11-25 09:18:24'),(41,'App\\Models\\CourseMembershipDiscount',4,6,'deposit',33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','e6ec4d56-d980-4328-8996-2f18d2259efc','2021-11-25 09:18:24','2021-11-25 09:18:24'),(42,'App\\Models\\User',9,9,'withdraw',-35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','9d18829b-3fb4-4a7d-a66b-91305460ccc1','2021-11-25 09:41:50','2021-11-25 09:41:50'),(43,'App\\Models\\CourseMembershipDiscount',5,7,'deposit',35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','fd87bd81-9ef5-494d-a247-32e69ab0b462','2021-11-25 09:41:50','2021-11-25 09:41:50'),(44,'App\\Models\\User',9,9,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','a228b33e-ab62-4bdc-b108-a6a65d87ab3f','2021-11-25 10:00:31','2021-11-25 10:00:31'),(45,'App\\Models\\CourseMembershipDiscount',3,4,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','98870517-42c9-4eae-a4d2-028d3c973937','2021-11-25 10:00:31','2021-11-25 10:00:31'),(46,'App\\Models\\User',10,10,'deposit',200,1,'{\"card\": \"paypal\"}','277291bc-1b67-495a-a50c-0dc34f91a528','2021-11-25 10:14:32','2021-11-25 10:14:32'),(47,'App\\Models\\User',10,10,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','fdf7232a-aead-4a6a-8078-42adc4ebf4a7','2021-11-25 10:14:53','2021-11-25 10:14:53'),(48,'App\\Models\\CourseMembershipDiscount',2,2,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','407a06fb-8703-4276-8579-4c14c7f1b17c','2021-11-25 10:14:53','2021-11-25 10:14:53'),(49,'App\\Models\\User',7,11,'deposit',2000,1,'{\"card\": \"4242\"}','c81c319a-cafc-4677-88ad-c85d39a75c83','2021-11-25 15:05:37','2021-11-25 15:05:37'),(50,'App\\Models\\User',7,11,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','90ed010a-d029-4d20-867c-ad343efb3459','2021-11-25 15:05:58','2021-11-25 15:05:58'),(51,'App\\Models\\CourseMembershipDiscount',2,2,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','ca70780c-edf0-4d3c-9505-5a3e74dad54c','2021-11-25 15:05:58','2021-11-25 15:05:58'),(52,'App\\Models\\User',7,11,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','08ff3567-5137-41fd-abd9-d6e6a47dbe22','2021-11-25 15:06:55','2021-11-25 15:06:55'),(53,'App\\Models\\CourseMembershipDiscount',3,4,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','d53a134c-8d74-4169-87dd-812460c627d2','2021-11-25 15:06:55','2021-11-25 15:06:55'),(54,'App\\Models\\User',7,11,'withdraw',-33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','5240abcf-bc83-4732-898d-2b66430dc0aa','2021-11-25 15:08:11','2021-11-25 15:08:11'),(55,'App\\Models\\CourseMembershipDiscount',4,6,'deposit',33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','dedae773-b5d5-4b56-aa68-bc0fe1e81db3','2021-11-25 15:08:11','2021-11-25 15:08:11'),(56,'App\\Models\\User',7,11,'withdraw',-35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','848a9c6c-4092-45c5-a70d-10ffba57eb37','2021-11-25 15:09:09','2021-11-25 15:09:09'),(57,'App\\Models\\CourseMembershipDiscount',5,7,'deposit',35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','ecee7faa-3034-4fcd-b931-818ea5a98493','2021-11-25 15:09:09','2021-11-25 15:09:09'),(58,'App\\Models\\User',11,12,'deposit',2000,1,'{\"card\": \"4242\"}','385c9da9-2044-4197-a6ff-6c5c582dba1d','2021-11-25 17:53:03','2021-11-25 17:53:03'),(59,'App\\Models\\User',11,12,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','e399c405-8ea2-4313-91b3-a1f176b81b19','2021-11-25 17:53:41','2021-11-25 17:53:41'),(60,'App\\Models\\CourseMembershipDiscount',2,2,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','3f830c23-66de-4385-bbbf-3c40a16add5e','2021-11-25 17:53:41','2021-11-25 17:53:41'),(61,'App\\Models\\User',11,12,'withdraw',-35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','7ab48cb5-8680-4e44-a16f-e9515927d6b7','2021-11-25 17:56:59','2021-11-25 17:56:59'),(62,'App\\Models\\CourseMembershipDiscount',5,7,'deposit',35,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','d495e26e-2a8f-4a39-8710-8212ed28ea14','2021-11-25 17:56:59','2021-11-25 17:56:59'),(63,'App\\Models\\User',11,12,'withdraw',-33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','4d98fa82-f46b-4e63-a46e-ce5064cf5128','2021-11-25 17:57:49','2021-11-25 17:57:49'),(64,'App\\Models\\CourseMembershipDiscount',4,6,'deposit',33,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','09e7d0b0-2124-45f6-99ee-5ea420cbc441','2021-11-25 17:57:49','2021-11-25 17:57:49'),(65,'App\\Models\\User',11,12,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','74381f0b-47fe-4d27-9021-434ef6d00c27','2021-11-25 17:58:35','2021-11-25 17:58:35'),(66,'App\\Models\\CourseMembershipDiscount',3,4,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','7ac13fba-6e91-4697-872c-24de9c24d985','2021-11-25 17:58:35','2021-11-25 17:58:35'),(67,'App\\Models\\User',12,13,'deposit',1000,1,'{\"card\": \"4242\"}','f040274e-e10d-42f6-977b-22247441c278','2021-11-25 18:07:34','2021-11-25 18:07:34'),(68,'App\\Models\\User',12,13,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','f1c236c2-350b-45af-9cad-112a86b97028','2021-11-25 18:09:55','2021-11-25 18:09:55'),(69,'App\\Models\\CourseMembershipDiscount',3,4,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','8d74a3aa-45ac-4ecf-8daa-1ce9f3b1ecc7','2021-11-25 18:09:55','2021-11-25 18:09:55'),(70,'App\\Models\\User',8,8,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','50e1112a-f8d6-4fe1-b93b-a4665e0559d3','2021-11-26 01:23:04','2021-11-26 01:23:04'),(71,'App\\Models\\CourseMembershipDiscount',3,4,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','63e271c9-c789-41ee-bc7b-2542586f1579','2021-11-26 01:23:04','2021-11-26 01:23:04');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transfers`
--

DROP TABLE IF EXISTS `transfers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transfers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `from_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint unsigned NOT NULL,
  `to_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_id` bigint unsigned NOT NULL,
  `status` enum('exchange','transfer','paid','refund','gift') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'transfer',
  `status_last` enum('exchange','transfer','paid','refund','gift') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_id` bigint unsigned NOT NULL,
  `withdraw_id` bigint unsigned NOT NULL,
  `discount` decimal(64,0) NOT NULL DEFAULT '0',
  `fee` decimal(64,0) NOT NULL DEFAULT '0',
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transfers_uuid_unique` (`uuid`),
  KEY `transfers_from_type_from_id_index` (`from_type`,`from_id`),
  KEY `transfers_to_type_to_id_index` (`to_type`,`to_id`),
  KEY `transfers_deposit_id_foreign` (`deposit_id`),
  KEY `transfers_withdraw_id_foreign` (`withdraw_id`),
  CONSTRAINT `transfers_deposit_id_foreign` FOREIGN KEY (`deposit_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `transfers_withdraw_id_foreign` FOREIGN KEY (`withdraw_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transfers`
--

LOCK TABLES `transfers` WRITE;
/*!40000 ALTER TABLE `transfers` DISABLE KEYS */;
INSERT INTO `transfers` VALUES (1,'Bavix\\Wallet\\Models\\Wallet',1,'App\\Models\\CourseMembershipDiscount',2,'paid',NULL,3,2,0,0,'99cd3cd5-e9e3-45a3-87bc-92e2e8842ea4','2021-11-23 09:06:51','2021-11-23 09:06:51'),(2,'Bavix\\Wallet\\Models\\Wallet',1,'App\\Models\\CourseMembershipDiscount',3,'paid',NULL,5,4,0,0,'5b729cb1-d397-4aed-bfdc-06f74bac0470','2021-11-23 09:13:14','2021-11-23 09:13:14'),(3,'Bavix\\Wallet\\Models\\Wallet',3,'App\\Models\\CourseMembershipDiscount',3,'paid',NULL,8,7,0,0,'be94d009-d628-491a-8c77-68cec9750e20','2021-11-23 09:56:14','2021-11-23 09:56:14'),(4,'Bavix\\Wallet\\Models\\Wallet',5,'App\\Models\\CourseMembershipDiscount',3,'paid',NULL,11,10,0,0,'5c5cf2b6-33fc-4419-984d-a6de670ac04c','2021-11-23 15:14:07','2021-11-23 15:14:07'),(5,'Bavix\\Wallet\\Models\\Wallet',1,'App\\Models\\CourseMembershipDiscount',4,'paid',NULL,13,12,0,0,'f1d68ff9-144d-4709-9a96-7bb52397b897','2021-11-24 01:54:57','2021-11-24 01:54:57'),(6,'Bavix\\Wallet\\Models\\Wallet',1,'App\\Models\\CourseMembershipDiscount',5,'paid',NULL,15,14,0,0,'299564ec-7a28-4e25-919a-f4057feda0e2','2021-11-24 02:04:27','2021-11-24 02:04:27'),(7,'Bavix\\Wallet\\Models\\Wallet',5,'App\\Models\\CourseMembershipDiscount',2,'paid',NULL,17,16,0,0,'fa7e537c-09d5-4165-8a90-c55d9e5d13b8','2021-11-24 03:57:47','2021-11-24 03:57:47'),(8,'Bavix\\Wallet\\Models\\Wallet',5,'App\\Models\\CourseMembershipDiscount',4,'paid',NULL,19,18,0,0,'a8f52578-6d28-4353-b96e-7761809571f7','2021-11-24 10:07:23','2021-11-24 10:07:23'),(9,'Bavix\\Wallet\\Models\\Wallet',3,'App\\Models\\CourseMembershipDiscount',2,'paid',NULL,21,20,0,0,'66ebc634-e1d7-457a-9b84-5b080c1fd541','2021-11-24 13:48:57','2021-11-24 13:48:57'),(10,'Bavix\\Wallet\\Models\\Wallet',3,'App\\Models\\CourseMembershipDiscount',5,'paid',NULL,23,22,0,0,'e66ef173-0c45-4718-a7dc-717e49e7ffe3','2021-11-24 14:05:16','2021-11-24 14:05:16'),(11,'Bavix\\Wallet\\Models\\Wallet',3,'App\\Models\\CourseMembershipDiscount',4,'paid',NULL,25,24,0,0,'46ced79e-531e-4d4c-83ca-286b73bf84b4','2021-11-24 14:15:51','2021-11-24 14:15:51'),(12,'Bavix\\Wallet\\Models\\Wallet',5,'App\\Models\\CourseMembershipDiscount',5,'paid',NULL,27,26,0,0,'50a674f9-87c2-4b5a-bd6f-a0d3ac9076a5','2021-11-25 03:36:18','2021-11-25 03:36:18'),(13,'Bavix\\Wallet\\Models\\Wallet',8,'App\\Models\\CourseMembershipDiscount',3,'paid',NULL,30,29,0,0,'263f8cfd-c2ab-4266-8bbd-5dc47a9e3ab0','2021-11-25 08:08:03','2021-11-25 08:08:03'),(14,'Bavix\\Wallet\\Models\\Wallet',8,'App\\Models\\CourseMembershipDiscount',2,'paid',NULL,32,31,0,0,'1bdb6fdc-96bf-429d-ae5d-5f49164d41a4','2021-11-25 08:26:32','2021-11-25 08:26:32'),(15,'Bavix\\Wallet\\Models\\Wallet',8,'App\\Models\\CourseMembershipDiscount',5,'paid',NULL,34,33,0,0,'ee24a127-ae95-4045-80d4-0229b2341876','2021-11-25 08:38:16','2021-11-25 08:38:16'),(16,'Bavix\\Wallet\\Models\\Wallet',8,'App\\Models\\CourseMembershipDiscount',4,'paid',NULL,36,35,0,0,'a1456590-c32d-4d41-895e-657b5116c7df','2021-11-25 08:43:22','2021-11-25 08:43:22'),(17,'Bavix\\Wallet\\Models\\Wallet',9,'App\\Models\\CourseMembershipDiscount',2,'paid',NULL,39,38,0,0,'ceff2958-0de5-4f04-9978-338b73ba4216','2021-11-25 09:09:37','2021-11-25 09:09:37'),(18,'Bavix\\Wallet\\Models\\Wallet',9,'App\\Models\\CourseMembershipDiscount',4,'paid',NULL,41,40,0,0,'8efc9cf6-1599-423e-aa9e-8af554ae31be','2021-11-25 09:18:24','2021-11-25 09:18:24'),(19,'Bavix\\Wallet\\Models\\Wallet',9,'App\\Models\\CourseMembershipDiscount',5,'paid',NULL,43,42,0,0,'a3ec0252-c517-40bd-a39c-79dd5a9bece8','2021-11-25 09:41:50','2021-11-25 09:41:50'),(20,'Bavix\\Wallet\\Models\\Wallet',9,'App\\Models\\CourseMembershipDiscount',3,'paid',NULL,45,44,0,0,'69853593-d421-402c-9590-06034cfdf18e','2021-11-25 10:00:31','2021-11-25 10:00:31'),(21,'Bavix\\Wallet\\Models\\Wallet',10,'App\\Models\\CourseMembershipDiscount',2,'paid',NULL,48,47,0,0,'0cb6a853-80cf-4224-8f96-2ef2857a1836','2021-11-25 10:14:53','2021-11-25 10:14:53'),(22,'Bavix\\Wallet\\Models\\Wallet',11,'App\\Models\\CourseMembershipDiscount',2,'paid',NULL,51,50,0,0,'4562a755-73d7-4ff0-a2e0-61003f4cf334','2021-11-25 15:05:58','2021-11-25 15:05:58'),(23,'Bavix\\Wallet\\Models\\Wallet',11,'App\\Models\\CourseMembershipDiscount',3,'paid',NULL,53,52,0,0,'6bd3330b-004b-48c6-8c47-fbc9e517adc6','2021-11-25 15:06:55','2021-11-25 15:06:55'),(24,'Bavix\\Wallet\\Models\\Wallet',11,'App\\Models\\CourseMembershipDiscount',4,'paid',NULL,55,54,0,0,'3d6adeab-430c-4302-b51a-de2aa5adcd4e','2021-11-25 15:08:11','2021-11-25 15:08:11'),(25,'Bavix\\Wallet\\Models\\Wallet',11,'App\\Models\\CourseMembershipDiscount',5,'paid',NULL,57,56,0,0,'4b10e4ce-bfeb-4933-8231-fa2be54e2e1a','2021-11-25 15:09:09','2021-11-25 15:09:09'),(26,'Bavix\\Wallet\\Models\\Wallet',12,'App\\Models\\CourseMembershipDiscount',2,'paid',NULL,60,59,0,0,'c51f3ee1-6696-4b39-adb3-512ac967b492','2021-11-25 17:53:41','2021-11-25 17:53:41'),(27,'Bavix\\Wallet\\Models\\Wallet',12,'App\\Models\\CourseMembershipDiscount',5,'paid',NULL,62,61,0,0,'c312e7ec-8aec-4073-827b-9ea6c638373c','2021-11-25 17:56:59','2021-11-25 17:56:59'),(28,'Bavix\\Wallet\\Models\\Wallet',12,'App\\Models\\CourseMembershipDiscount',4,'paid',NULL,64,63,0,0,'33e2bf15-9e5f-44c8-b117-7f20d462e219','2021-11-25 17:57:49','2021-11-25 17:57:49'),(29,'Bavix\\Wallet\\Models\\Wallet',12,'App\\Models\\CourseMembershipDiscount',3,'paid',NULL,66,65,0,0,'1221298e-28b5-46f7-9ecd-d449c45fea10','2021-11-25 17:58:35','2021-11-25 17:58:35'),(30,'Bavix\\Wallet\\Models\\Wallet',13,'App\\Models\\CourseMembershipDiscount',3,'paid',NULL,69,68,0,0,'209b191a-a883-48de-b76e-5cd9ce2420fa','2021-11-25 18:09:55','2021-11-25 18:09:55'),(31,'Bavix\\Wallet\\Models\\Wallet',8,'App\\Models\\CourseMembershipDiscount',3,'paid',NULL,71,70,0,0,'76eed0ca-8817-420e-9f3a-8ccbbdb8d27a','2021-11-26 01:23:04','2021-11-26 01:23:04');
/*!40000 ALTER TABLE `transfers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor_teach_subject`
--

DROP TABLE IF EXISTS `tutor_teach_subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutor_teach_subject` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tutor_id` bigint unsigned NOT NULL,
  `subject_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tutor_teach_subject_tutor_id_subject_id_unique` (`tutor_id`,`subject_id`),
  KEY `tutor_teach_subject_subject_id_foreign` (`subject_id`),
  CONSTRAINT `tutor_teach_subject_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  CONSTRAINT `tutor_teach_subject_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor_teach_subject`
--

LOCK TABLES `tutor_teach_subject` WRITE;
/*!40000 ALTER TABLE `tutor_teach_subject` DISABLE KEYS */;
INSERT INTO `tutor_teach_subject` VALUES (1,2,2,'2021-11-23 08:32:55','2021-11-23 08:32:55',NULL),(2,3,2,'2021-11-23 08:34:16','2021-11-23 08:34:16',NULL);
/*!40000 ALTER TABLE `tutor_teach_subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor_translations`
--

DROP TABLE IF EXISTS `tutor_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutor_translations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tutor_id` bigint unsigned NOT NULL,
  `tutor_info` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor_level` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor_specialized` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor_experience` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tutor_translations_tutor_id_locale_unique` (`tutor_id`,`locale`),
  KEY `tutor_translations_locale_index` (`locale`),
  CONSTRAINT `tutor_translations_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor_translations`
--

LOCK TABLES `tutor_translations` WRITE;
/*!40000 ALTER TABLE `tutor_translations` DISABLE KEYS */;
INSERT INTO `tutor_translations` VALUES (1,2,'Lorem Ipsum is simply dummy text of the printing and typesetting industry','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','Nam libero tempore, cum soluta nobis est eligendi optio','ut aut reiciendis voluptatibus maiores alias consequatur','en',NULL,NULL,NULL),(2,2,'Lorem Ipsum is simply dummy text of the printing and typesetting industry','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','aut perferendis doloribus asperiores repellat.','cn',NULL,NULL,NULL),(3,2,'Lorem Ipsum is simply dummy text of the printing and typesetting industry','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Quis autem vel eum iure reprehenderit qui in ea voluptate velit','sc',NULL,NULL,NULL),(4,3,'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Lorem Ipsum is simply dummy text of the printing and typesetting industry','en',NULL,NULL,NULL),(5,3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Lorem Ipsum is simply dummy text of the printing and typesetting industry','aut perferendis doloribus asperiores repellat.','cn',NULL,NULL,NULL),(6,3,'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','Lorem Ipsum is simply dummy text of the printing and typesetting industry','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','sc',NULL,NULL,NULL);
/*!40000 ALTER TABLE `tutor_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutors`
--

DROP TABLE IF EXISTS `tutors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `full_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_of_birth` date DEFAULT NULL,
  `phone_no` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tutors_user_id_foreign` (`user_id`),
  CONSTRAINT `tutors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutors`
--

LOCK TABLES `tutors` WRITE;
/*!40000 ALTER TABLE `tutors` DISABLE KEYS */;
INSERT INTO `tutors` VALUES (1,1,'Administrator',NULL,NULL,NULL,'2021-11-22 21:50:07','2021-11-22 21:50:07'),(2,3,'Chow Tinh Tinh',NULL,NULL,NULL,'2021-11-23 08:32:55','2021-11-23 08:32:55'),(3,4,'Keny Or',NULL,NULL,NULL,'2021-11-23 08:34:16','2021-11-23 08:34:16');
/*!40000 ALTER TABLE `tutors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_likes`
--

DROP TABLE IF EXISTS `user_likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_likes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `like_style` int NOT NULL DEFAULT '1',
  `likeable_id` int NOT NULL,
  `likeable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_likes_user_id_foreign` (`user_id`),
  CONSTRAINT `user_likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_likes`
--

LOCK TABLES `user_likes` WRITE;
/*!40000 ALTER TABLE `user_likes` DISABLE KEYS */;
INSERT INTO `user_likes` VALUES (1,5,1,2,'App\\Models\\Course','2021-11-23 09:07:15','2021-11-23 09:07:15',NULL),(3,5,1,1,'App\\Models\\Post','2021-11-24 03:32:10','2021-11-24 03:32:10',NULL);
/*!40000 ALTER TABLE `user_likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `membership_group` int NOT NULL DEFAULT '1',
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_brand` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_stripe_id_index` (`stripe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Super admin','admin@gmail.com',NULL,1,'$2y$10$hKfGyHEDrN4/iWsu6Un9yesQ4gNptbt5tc6IX4f1zoiJKjgRpUcfu',1,'S8PHRB55ndYA3zuaex9FYn3xqdiDwp2ii6gyB13BTMDdolGsFZHN9taKDreB','2021-11-22 21:50:07','2021-11-22 21:50:07',NULL,NULL,NULL,NULL,NULL),(3,'Chou Steppen','test_admin@gmail.com',NULL,1,'$2y$10$ewwhzhsWrgws33ONO3fVJu4CVeBAxoXEOLqmO9wIQInpX/YSv1/Ra',1,NULL,'2021-11-23 08:32:55','2021-11-23 08:32:55',NULL,NULL,NULL,NULL,NULL),(4,'KenyOr','kenyor@gmail.com',NULL,1,'$2y$10$jvmWouqtHNYlG7GaOcVLYuwKsFgEfi6n.TzAlBRn//wtIReHVnhwu',1,NULL,'2021-11-23 08:34:16','2021-11-23 08:34:16',NULL,NULL,NULL,NULL,NULL),(5,'Phung Le','phungle.mkd@gmail.com',NULL,1,'$2y$10$S0Zx5g1LUZhlz.VtBiBb3.cPsjPCPWOa9K3ExXp/cyUE3Drd31JAi',1,NULL,'2021-11-23 09:02:28','2021-11-23 09:02:28',NULL,'cus_KeDKjVy2rcxlIZ',NULL,NULL,NULL),(7,'trung bành','trungbanh97@gmail.com',NULL,1,'$2y$10$9VFzG3gyIlhN2EpEco5IpOuKH4JCdHdm.vwQOxerH65vYesQfJD5i',1,NULL,'2021-11-25 07:01:52','2021-11-25 15:05:21',NULL,'cus_KevpTC3y7w8N9C','visa','4242',NULL),(8,'Phước Trung Bành','phuoctrungbanh.mkd@gmail.com',NULL,1,'$2y$10$LwYEdsBUPqeMR.Bal4WGXumSw4gH8W5rlnNng1i061JdM//aPuYd2',1,NULL,'2021-11-25 07:56:19','2021-11-25 08:07:16',NULL,'cus_KewhkuQNmfhVcS','visa','4242',NULL),(9,'Phụng Lê','phungb1605300@gmail.com',NULL,1,'$2y$10$Fjw8FpwQiC4.W.pbnKGswO6jdP9nap9470CAs9WbzcbKtYEPCAa6S',1,NULL,'2021-11-25 09:04:08','2021-11-25 09:06:28',NULL,'cus_KexnNDTt5b0fzF','visa','4242',NULL),(10,'Khánh Đăng Trần','trankhanhdang1904@gmail.com',NULL,1,'$2y$10$FtTRy33HlwHh5ogxvohU1.Q.Z/0WgscMsP.QUmprMgVk/etuWuAdm',1,NULL,'2021-11-25 10:13:09','2021-11-25 10:13:09',NULL,'cus_Keyu4tip5nVMGl',NULL,NULL,NULL),(11,'Kevin Yuen','kevintik289@gmail.com',NULL,1,'$2y$10$OljeuzByXB2vsAks7WPrQuSgnkmZU2adBPBV19a84M36InqNJlABO',1,NULL,'2021-11-25 17:49:55','2021-11-25 17:52:37',NULL,'cus_Kf6H9MFSNmiRyJ','visa','4242',NULL),(12,'Admissions Helios','admissions@helios-edu.com',NULL,1,'$2y$10$9ZsIZ6rLDq85zVma7l5zm.CuDpYs9j9OH66Y4nPfrH9/0n5RNTs3a',1,NULL,'2021-11-25 18:06:00','2021-11-25 18:07:16',NULL,'cus_Kf6XLFYR1FC2kh','visa','4242',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wallets`
--

DROP TABLE IF EXISTS `wallets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wallets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `holder_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `holder_id` bigint unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `balance` decimal(64,0) NOT NULL DEFAULT '0',
  `decimal_places` smallint NOT NULL DEFAULT '2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wallet_str_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wallet619c72e4436c18.17899401',
  PRIMARY KEY (`id`),
  UNIQUE KEY `wallets_holder_type_holder_id_slug_unique` (`holder_type`,`holder_id`,`slug`),
  KEY `wallets_holder_type_holder_id_index` (`holder_type`,`holder_id`),
  KEY `wallets_slug_index` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wallets`
--

LOCK TABLES `wallets` WRITE;
/*!40000 ALTER TABLE `wallets` DISABLE KEYS */;
INSERT INTO `wallets` VALUES (1,'App\\Models\\User',5,'Default Wallet','default',NULL,'[]',268,2,'2021-11-23 09:04:53','2021-11-24 02:04:27','wallet619c72e4436c18.17899401'),(2,'App\\Models\\CourseMembershipDiscount',2,'Default Wallet','default',NULL,'[]',256,2,'2021-11-23 09:06:51','2021-11-25 17:53:41','wallet619c72e4436c18.17899401'),(3,'App\\Models\\User',2,'Default Wallet','default',NULL,'[]',1868,2,'2021-11-23 09:10:52','2021-11-24 14:15:50','wallet619c72e4436c18.17899401'),(4,'App\\Models\\CourseMembershipDiscount',3,'Default Wallet','default',NULL,'[]',288,2,'2021-11-23 09:13:14','2021-11-26 01:23:04','wallet619c72e4436c18.17899401'),(5,'App\\Models\\User',6,'Default Wallet','default',NULL,'[]',1868,2,'2021-11-23 15:12:00','2021-11-25 03:36:18','wallet619c72e4436c18.17899401'),(6,'App\\Models\\CourseMembershipDiscount',4,'Default Wallet','default',NULL,'[]',231,2,'2021-11-24 01:54:57','2021-11-25 17:57:49','wallet619c72e4436c18.17899401'),(7,'App\\Models\\CourseMembershipDiscount',5,'Default Wallet','default',NULL,'[]',245,2,'2021-11-24 02:04:27','2021-11-25 17:56:59','wallet619c72e4436c18.17899401'),(8,'App\\Models\\User',8,'Default Wallet','default',NULL,'[]',1836,2,'2021-11-25 08:06:13','2021-11-26 01:23:04','wallet619c72e4436c18.17899401'),(9,'App\\Models\\User',9,'Default Wallet','default',NULL,'[]',68,2,'2021-11-25 09:05:33','2021-11-25 10:00:31','wallet619c72e4436c18.17899401'),(10,'App\\Models\\User',10,'Default Wallet','default',NULL,'[]',168,2,'2021-11-25 10:14:04','2021-11-25 10:14:53','wallet619c72e4436c18.17899401'),(11,'App\\Models\\User',7,'Default Wallet','default',NULL,'[]',1868,2,'2021-11-25 15:04:58','2021-11-25 15:09:09','wallet619c72e4436c18.17899401'),(12,'App\\Models\\User',11,'Default Wallet','default',NULL,'[]',1868,2,'2021-11-25 17:51:23','2021-11-25 17:58:35','wallet619c72e4436c18.17899401'),(13,'App\\Models\\User',12,'Default Wallet','default',NULL,'[]',968,2,'2021-11-25 18:06:49','2021-11-25 18:09:55','wallet619c72e4436c18.17899401');
/*!40000 ALTER TABLE `wallets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `writing_assessment_answers`
--

DROP TABLE IF EXISTS `writing_assessment_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `writing_assessment_answers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `w_a_question_id` bigint unsigned NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `writing_assessment_answers_w_a_question_id_foreign` (`w_a_question_id`),
  CONSTRAINT `writing_assessment_answers_w_a_question_id_foreign` FOREIGN KEY (`w_a_question_id`) REFERENCES `writing_assessment_questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `writing_assessment_answers`
--

LOCK TABLES `writing_assessment_answers` WRITE;
/*!40000 ALTER TABLE `writing_assessment_answers` DISABLE KEYS */;
INSERT INTO `writing_assessment_answers` VALUES (1,1,'4',1,'2021-11-10 09:11:56','2021-11-10 09:12:09',NULL),(2,1,'5',0,'2021-11-10 09:12:01','2021-11-10 09:12:09',NULL),(3,1,'6',0,'2021-11-10 09:12:05','2021-11-10 09:12:09',NULL),(4,2,'4',0,'2021-11-10 09:12:18','2021-11-10 09:12:31',NULL),(5,2,'5',1,'2021-11-10 09:12:22','2021-11-10 09:12:31',NULL),(6,2,'6',0,'2021-11-10 09:12:25','2021-11-10 09:12:31',NULL),(7,3,'yes',1,'2021-11-15 01:54:28','2021-11-15 01:54:32',NULL),(8,4,'9',0,'2021-11-18 07:03:01','2021-11-18 07:03:12',NULL),(9,4,'10',1,'2021-11-18 07:03:05','2021-11-18 07:03:12',NULL),(10,4,'12',0,'2021-11-18 07:03:10','2021-11-18 07:03:12',NULL),(11,5,'7',1,'2021-11-18 07:03:21','2021-11-18 07:03:29',NULL),(12,5,'8',0,'2021-11-18 07:03:24','2021-11-18 07:03:29',NULL),(13,5,'9',0,'2021-11-18 07:03:27','2021-11-18 07:03:29',NULL),(14,6,'php',0,'2021-11-18 07:07:55','2021-11-18 07:08:16',NULL),(15,6,'node js',0,'2021-11-18 07:08:03','2021-11-18 07:08:16',NULL),(16,6,'is da best',1,'2021-11-18 07:08:13','2021-11-18 07:08:16',NULL);
/*!40000 ALTER TABLE `writing_assessment_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `writing_assessment_questions`
--

DROP TABLE IF EXISTS `writing_assessment_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `writing_assessment_questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question_id` bigint unsigned NOT NULL,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_wrong` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_index` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `writing_assessment_questions_question_id_foreign` (`question_id`),
  CONSTRAINT `writing_assessment_questions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `writing_assessment_questions`
--

LOCK TABLES `writing_assessment_questions` WRITE;
/*!40000 ALTER TABLE `writing_assessment_questions` DISABLE KEYS */;
INSERT INTO `writing_assessment_questions` VALUES (1,3,'2+2 = ?','4',1,NULL,'2021-11-22 23:49:21','2021-11-22 23:49:21'),(2,4,'2+3 = ?','5',1,NULL,'2021-11-22 23:49:40','2021-11-22 23:49:40'),(3,31,'Get request done ?','wrong',0,NULL,'2021-11-23 10:20:42','2021-11-23 10:20:42'),(4,32,'Right or wrong ?','wrong',0,NULL,'2021-11-23 10:22:52','2021-11-23 10:22:52'),(5,33,'Are ... ready ?','wrong',1,NULL,'2021-11-23 10:24:14','2021-11-23 10:25:05'),(6,34,'Are you ...?','wrong',1,NULL,'2021-11-23 10:26:42','2021-11-23 10:26:42'),(7,41,'6 + 6 = ?','12',1,NULL,'2021-11-23 10:44:07','2021-11-23 10:44:07');
/*!40000 ALTER TABLE `writing_assessment_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `writing_quiz_answers`
--

DROP TABLE IF EXISTS `writing_quiz_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `writing_quiz_answers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `writing_quiz_question_id` bigint unsigned NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `writing_quiz_answers_writing_quiz_question_id_foreign` (`writing_quiz_question_id`),
  CONSTRAINT `writing_quiz_answers_writing_quiz_question_id_foreign` FOREIGN KEY (`writing_quiz_question_id`) REFERENCES `writing_quiz_questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `writing_quiz_answers`
--

LOCK TABLES `writing_quiz_answers` WRITE;
/*!40000 ALTER TABLE `writing_quiz_answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `writing_quiz_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `writing_quiz_questions`
--

DROP TABLE IF EXISTS `writing_quiz_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `writing_quiz_questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question_id` bigint unsigned NOT NULL,
  `part` int NOT NULL,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_wrong` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_index` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `writing_quiz_questions_question_id_foreign` (`question_id`),
  CONSTRAINT `writing_quiz_questions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `writing_quiz_questions`
--

LOCK TABLES `writing_quiz_questions` WRITE;
/*!40000 ALTER TABLE `writing_quiz_questions` DISABLE KEYS */;
INSERT INTO `writing_quiz_questions` VALUES (1,42,1,'give a comment for this photo ?','1',1,NULL,'2021-11-23 14:58:58','2021-11-23 14:58:58'),(2,43,2,'write some things to  say hello to your friends via email ?','1',1,NULL,'2021-11-23 15:01:49','2021-11-23 15:01:49'),(3,44,1,'hi ! write a letter to tell your friend abou the last vacations ?','1',1,NULL,'2021-11-23 15:03:49','2021-11-23 15:03:49'),(4,45,2,'tell us about the movie your like best','21',1,NULL,'2021-11-23 15:04:49','2021-11-23 15:04:49');
/*!40000 ALTER TABLE `writing_quiz_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'helios_test'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-26 11:11:16
