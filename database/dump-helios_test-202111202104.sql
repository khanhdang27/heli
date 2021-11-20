-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: helios_test
-- ------------------------------------------------------
-- Server version	8.0.21

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
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer_items`
--

LOCK TABLES `answer_items` WRITE;
/*!40000 ALTER TABLE `answer_items` DISABLE KEYS */;
INSERT INTO `answer_items` VALUES (1,1,'App\\Models\\ReadingQuestion','ha',1,NULL,'2021-11-20 02:01:27','2021-11-20 02:54:07'),(2,1,'App\\Models\\ReadingQuestion','hai',0,NULL,'2021-11-20 02:01:47','2021-11-20 02:54:07');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audio_files`
--

LOCK TABLES `audio_files` WRITE;
/*!40000 ALTER TABLE `audio_files` DISABLE KEYS */;
INSERT INTO `audio_files` VALUES (1,'ee26a633a89','audio/qOAL6czMvcf7lq2QA8QA1aD0V8OyIAmtqGk2tmCS.mp3','file_example_MP3_700KB.mp3','0.764176',NULL,'2021-11-10 09:17:08','2021-11-10 09:17:08'),(2,'ee26a8b180b','audio/6B5R9qlZeTptTYkc5YI80bltEug9K8b6TZyXHNjP.mp3','file_example_MP3_700KB.mp3','0.764176',NULL,'2021-11-10 09:21:29','2021-11-10 09:21:29'),(3,'ee26aa0c96a','audio/O3af06BMoj5v07WpMepm4kogIDqTlApnSbGZWy4N.mp3','file_example_MP3_700KB.mp3','0.764176',NULL,'2021-11-10 09:23:51','2021-11-10 09:23:51'),(4,'ee26aa5e17e','audio/w5USY7smZDiXukrRfP12Es2sxwllJxGjAw3vHqun.mp3','file_example_MP3_700KB.mp3','0.764176',NULL,'2021-11-10 09:24:25','2021-11-10 09:24:25'),(5,'ee3580917b0','audio/JIM9pEuifcuoUgzVFTUHMFsmMeprfbt7VrvhHz5m.mp3','file_example_MP3_700KB.mp3','0.764176',NULL,'2021-11-15 07:02:15','2021-11-15 07:02:15');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audio_listens`
--

LOCK TABLES `audio_listens` WRITE;
/*!40000 ALTER TABLE `audio_listens` DISABLE KEYS */;
INSERT INTO `audio_listens` VALUES (1,1,1,1,1,'ee26a633a89',NULL,'2021-11-10 09:17:08','2021-11-10 09:17:08'),(2,1,1,1,2,'ee26a8b180b',NULL,'2021-11-10 09:21:29','2021-11-10 09:21:29'),(3,3,4,13,1,'ee3580917b0',NULL,'2021-11-15 07:02:15','2021-11-15 07:02:15');
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
INSERT INTO `banners` VALUES (1,'太陽神教育網上課程 全面協助你的升學計畫',NULL,'2021-11-15 02:19:11','2021-11-15 02:19:11');
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
INSERT INTO `blog_tag` VALUES (1,1,1,'2021-11-15 02:18:25','2021-11-15 02:18:25');
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
INSERT INTO `blogs` VALUES (1,'From its medieval origins to the digital era, learn everything there is to know about the ubiquitous lorem ipsum passage.','<p><em>Lorem ipsum</em>, or&nbsp;<em>lipsum</em>&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero&#39;s&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;for use in a type specimen book. It usually begins with:</p>\r\n\r\n<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</blockquote>\r\n\r\n<p>The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn&#39;t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it&#39;s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;generator&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lorem ipsum</em>.</p>',0,'2021-11-15 02:18:25','2021-11-15 02:18:25',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificates`
--

LOCK TABLES `certificates` WRITE;
/*!40000 ALTER TABLE `certificates` DISABLE KEYS */;
INSERT INTO `certificates` VALUES (1,'IGCSE','International General Certificate of Secondary Education','2021-11-10 08:55:48','2021-11-10 08:55:48',NULL),(2,'UKISET','UKISET','2021-11-10 08:55:48','2021-11-10 08:55:48',NULL),(3,'IELTS','International English Language Testing System','2021-11-10 08:55:48','2021-11-10 08:55:48',NULL),(4,'IAL','International Advanced Level','2021-11-10 08:55:48','2021-11-10 08:55:48',NULL),(5,'IGCSE','IGCSE','2021-11-15 02:22:36','2021-11-15 02:23:25','2021-11-15 02:23:25');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,7,1,'App\\Models\\Course',NULL,'u la troi',0,'2021-11-15 01:30:47','2021-11-15 01:30:47',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_membership_discounts`
--

LOCK TABLES `course_membership_discounts` WRITE;
/*!40000 ALTER TABLE `course_membership_discounts` DISABLE KEYS */;
INSERT INTO `course_membership_discounts` VALUES (1,NULL,1,1,1,1,1,'test','2021-11-10 09:27:24','2021-11-10 09:31:08',NULL),(2,NULL,2,0,1,0,1,NULL,'2021-11-10 09:42:37','2021-11-15 02:42:32',NULL),(3,NULL,3,0,0,0,0,NULL,'2021-11-15 02:28:37','2021-11-15 02:28:37',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_translations`
--

LOCK TABLES `course_translations` WRITE;
/*!40000 ALTER TABLE `course_translations` DISABLE KEYS */;
INSERT INTO `course_translations` VALUES (1,1,'Basic English 1','At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum','en','2021-11-10 09:08:53','2021-11-10 09:08:53',NULL),(2,1,'基礎英語 1','deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident','cn','2021-11-10 09:08:53','2021-11-10 09:08:53',NULL),(3,1,'基础英语 1','similique sunt in culpa qui officia deserunt mollitia animi','sc','2021-11-10 09:08:53','2021-11-10 09:08:53',NULL),(7,3,'Basic English 2','Lorem ipsum dolor sit amet, consectetuer adipiscing elit.','en','2021-11-10 09:42:37','2021-11-10 09:42:37',NULL),(8,3,'基础数学 2','deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident','cn','2021-11-10 09:42:37','2021-11-10 09:42:37',NULL),(9,3,'基础英语2','similique sunt in culpa qui officia deserunt mollitia animi','sc','2021-11-10 09:42:37','2021-11-10 09:42:37',NULL),(10,4,'Live course basic','Live course basic part 1','en','2021-11-15 02:28:37','2021-11-15 02:28:37',NULL),(11,4,'直播課程基礎','直播課程基礎','cn','2021-11-15 02:28:37','2021-11-15 02:28:37',NULL),(12,4,'直播课程基础','直播课程基础','sc','2021-11-15 02:28:37','2021-11-15 02:28:37',NULL);
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
  `level` bigint NOT NULL,
  `type_part` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_subject_id_foreign` (`subject_id`),
  KEY `courses_tutor_id_foreign` (`tutor_id`),
  CONSTRAINT `courses_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  CONSTRAINT `courses_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,1,1,2,'<p>Curabitur porttitor suscipit tortor, sed condimentum metus gravida molestie. Donec eu ullamcorper justo. Mauris posuere accumsan velit. Sed ultrices dui leo, sit amet volutpat metus iaculis sit amet. Maecenas ut pretium velit. Fusce quis elit nec mi pharetra ornare. Quisque nec metus cursus, blandit risus eu, finibus odio.</p>',30,0,1,1,1,3,'3',NULL,'2021-11-10 09:08:53','2021-11-15 01:30:47',0,0),(3,1,1,2,'<p>deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>',32,0,1,0,0,0,NULL,NULL,'2021-11-10 09:42:37','2021-11-18 20:42:16',0,0),(4,1,1,1,'<p><em>Lorem ipsum</em>, or&nbsp;<em>lipsum</em>&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero&#39;s&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;for use in a type specimen book. It usually begins with:</p>\r\n\r\n<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</blockquote>\r\n\r\n<p>The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn&#39;t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it&#39;s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;generator&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lorem ipsum</em>.</p>',80,0,0,0,0,0,NULL,NULL,'2021-11-15 02:28:37','2021-11-15 02:28:37',0,0);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discounts`
--

LOCK TABLES `discounts` WRITE;
/*!40000 ALTER TABLE `discounts` DISABLE KEYS */;
INSERT INTO `discounts` VALUES (1,'Sale','2021-11-16','2021-11-19','Sale','2021-11-15 02:21:01','2021-11-15 02:21:01',NULL);
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
  `level` double DEFAULT NULL,
  `type` int NOT NULL,
  `course_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exams_course_id_foreign` (`course_id`),
  CONSTRAINT `exams_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exams`
--

LOCK TABLES `exams` WRITE;
/*!40000 ALTER TABLE `exams` DISABLE KEYS */;
INSERT INTO `exams` VALUES (1,'test 1',0,5,1,1,'2021-11-10 09:09:17','2021-11-10 09:09:17',NULL),(2,'Exercise test',5,5,2,3,'2021-11-15 01:33:13','2021-11-15 01:33:13',NULL),(3,'Quiz test',6,5,3,3,'2021-11-15 01:56:28','2021-11-15 01:56:28',NULL),(4,'test 1',0,5,1,3,'2021-11-15 06:55:15','2021-11-15 06:55:15',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` VALUES (1,2,'App\\Models\\User','files/8kbbjHi6LfoSm5rqxDbqdXb7JGSIDoqY5PtSrxIA.png','hia-sq.png',0.017257,1,'2021-11-10 09:07:54','2021-11-10 09:07:54',NULL),(2,1,'App\\Models\\Lecture','files/CmlazVFMv3XW3RRTD0RxTEjGCeQNyjvGN2QIUHUM.pdf','Lumas System - Administration.pdf',0.037973,1,'2021-11-10 09:30:46','2021-11-10 09:30:46',NULL),(3,2,'App\\Models\\Lecture','files/mBhIEWJmvCHT70T05PcHQSco86GK71NB8RHx9PUK.pdf','Just_Enough_English_Grammar_Illustrated (learnenglishteam.com).pdf',4.171321,1,'2021-11-11 08:57:31','2021-11-11 08:57:31',NULL),(4,3,'App\\Models\\Lecture','files/MrF8Iwe1KSIdTamqQyyGj4Cee0Ot321C3LsNR5fz.pdf','BG.pdf',0.005799,1,'2021-11-11 08:58:40','2021-11-11 08:58:40',NULL),(5,4,'App\\Models\\Lecture','files/Wy7dVmb7JQS0uDRS3mGX8pbAFlNL9pFYwebkgtnl.pdf','BG.pdf',0.005799,1,'2021-11-11 09:03:09','2021-11-11 09:03:09',NULL),(6,5,'App\\Models\\Lecture','files/bDsT7p6P0dyVcZvg5JjizkKuaIQCBrCiCfkdygRm.pdf','BG.pdf',0.005799,1,'2021-11-11 09:04:08','2021-11-11 09:04:08',NULL),(7,6,'App\\Models\\Lecture','files/GuAcSBTtj2uixJUJMQWmKhtN6UWiEFtEN0tzneve.pdf','BG.pdf',0.005799,1,'2021-11-11 09:05:25','2021-11-11 09:05:25',NULL),(8,7,'App\\Models\\Lecture','files/srSO1a3ClKWDV8cUwEAMT47A25DrSJjH4Gow0W5U.pdf','BG.pdf',0.005799,1,'2021-11-11 09:15:35','2021-11-11 09:15:35',NULL),(9,8,'App\\Models\\Lecture','files/2vfDbt5KFSG5WE1mB5XM4Fbf5W3YOBUxESJhfL2u.pdf','BG.pdf',0.005799,1,'2021-11-11 09:16:56','2021-11-11 09:16:56',NULL),(10,9,'App\\Models\\Lecture','files/z127RpgHtdfNQqdHybXOqX4QfOwRTX2ax4GFl6En.pdf','BG.pdf',0.005799,1,'2021-11-11 09:17:50','2021-11-11 09:17:50',NULL),(11,10,'App\\Models\\Lecture','files/tiYcNBSGk3tpRJt8Ua0avjzgtELjPsrhJsmsN4nD.pdf','BG.pdf',0.005799,1,'2021-11-11 09:18:46','2021-11-11 09:18:46',NULL),(12,11,'App\\Models\\Lecture','files/JOCEGtxZskP4RcGUz6XNZwMwlFH3Ym9iRbo1FzTH.pdf','Just_Enough_English_Grammar_Illustrated (learnenglishteam.com).pdf',4.171321,1,'2021-11-11 09:19:58','2021-11-11 09:19:58',NULL),(13,12,'App\\Models\\Lecture','files/YeebT6V22MAmEDtWyQ9CZWBU4Jje1dpSupIHzhPQ.pdf','BG.pdf',0.005799,1,'2021-11-11 09:20:51','2021-11-11 09:20:51',NULL),(14,7,'App\\Models\\User','files/rZcyXDgkmahxUVCtcthAHxNbsWSjOoIeOiALEHWK.png','Screenshot 2021-09-14 114006.png',0.017409,7,'2021-11-15 01:33:59','2021-11-15 01:33:59',NULL),(15,1,'App\\Models\\WritingQuizQuestion','files/vzKLBeTtearWFoi2yl60E0VtI3ZthhhsoVjKvQeW.png','Capture.PNG',0.193275,1,'2021-11-15 02:02:58','2021-11-15 02:02:58',NULL),(16,8,'App\\Models\\User','files/ZHAEbYJ4Par3lh1dRaDVpJosXZ8gS96nvzrmarzo.jpg','Group 8.jpg',0.174085,1,'2021-11-15 02:10:59','2021-11-15 02:10:59',NULL),(17,1,'App\\Models\\News','files/2Mr4YHUW9iazhikDj7FIn3cI5tLAIbYOw9bUr2YJ.jpg','bg-subscribe.jpg',0.825928,1,'2021-11-15 02:14:54','2021-11-15 02:14:54',NULL),(18,1,'App\\Models\\Blog','files/EguIgUhRgtzPJzkf8OYMibb6OVmypnyp2gXXO8Fy.jpg','Group 5.jpg',0.358522,1,'2021-11-15 02:18:25','2021-11-15 02:18:25',NULL),(19,1,'App\\Models\\Banner','files/3XsfNoMN7vCIYOqfARLMxyjxdDhRVJWZNgtWboAS.jpg','banner.jpg',0.765252,1,'2021-11-15 02:19:11','2021-11-15 02:19:11',NULL);
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
  `level` double DEFAULT NULL,
  `type` int DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lectures`
--

LOCK TABLES `lectures` WRITE;
/*!40000 ALTER TABLE `lectures` DISABLE KEYS */;
INSERT INTO `lectures` VALUES (1,5,1,1,1,'test new','test new','644435760','2021-11-10 09:30:46','2021-11-10 09:30:46',NULL),(2,5,1,2,1,'Lecture basic english 1','Lecture basic english 1','644703466','2021-11-11 08:57:31','2021-11-11 08:57:31',NULL),(3,5,1,3,1,'Lecture basic english 2','Lecture basic english 2','644704559','2021-11-11 08:58:40','2021-11-11 08:58:40',NULL),(4,5,3,4,1,'Lecture listening 1','Lecture listening 1','644705858','2021-11-11 09:03:09','2021-11-11 09:03:09',NULL),(5,5,2,5,1,'Lecture writing 1','Lecture writing 1','644706096','2021-11-11 09:04:08','2021-11-11 09:04:08',NULL),(6,5,4,6,1,'Lecture speaking 1','Lecture speaking 1','644706455','2021-11-11 09:05:25','2021-11-11 09:05:25',NULL),(7,5,1,1,3,'Reading english','Reading english','644709208','2021-11-11 09:15:35','2021-11-11 09:15:59',NULL),(8,5,3,2,3,'Listening english','Listening english','644709765','2021-11-11 09:16:56','2021-11-11 09:16:56',NULL),(9,5,2,3,3,'Writing english','Writing english','644709992','2021-11-11 09:17:50','2021-11-11 09:17:50',NULL),(10,5,4,4,3,'Speaking english','Speaking english','644710276','2021-11-11 09:18:46','2021-11-11 09:18:46',NULL),(11,5.5,1,7,1,'Reading english 5.5','Reading english 5.5','644710551','2021-11-11 09:19:58','2021-11-11 09:19:58',NULL),(12,5.5,2,8,1,'Writing english 5.5','Writing english 5.5','644710807','2021-11-11 09:20:51','2021-11-11 09:20:51',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listen_assessment_answers`
--

LOCK TABLES `listen_assessment_answers` WRITE;
/*!40000 ALTER TABLE `listen_assessment_answers` DISABLE KEYS */;
INSERT INTO `listen_assessment_answers` VALUES (1,1,'7',0,'2021-11-10 09:22:46','2021-11-10 09:22:22','2021-11-10 09:22:46'),(2,1,'8',0,NULL,'2021-11-10 09:22:26','2021-11-10 09:23:00'),(3,1,'9',0,NULL,'2021-11-10 09:22:29','2021-11-10 09:23:00'),(4,1,'6',1,NULL,'2021-11-10 09:22:56','2021-11-10 09:23:00'),(5,2,'6',0,NULL,'2021-11-10 09:23:08','2021-11-10 09:23:24'),(6,2,'8',1,NULL,'2021-11-10 09:23:14','2021-11-10 09:23:24'),(7,2,'9',0,NULL,'2021-11-10 09:23:18','2021-11-10 09:23:24'),(8,4,'yes',0,NULL,'2021-11-15 01:54:56','2021-11-15 01:55:06'),(9,4,'no',1,NULL,'2021-11-15 01:55:03','2021-11-15 01:55:06'),(10,5,'yes',1,NULL,'2021-11-15 02:04:12','2021-11-15 02:04:22'),(11,5,'no',0,NULL,'2021-11-15 02:04:18','2021-11-15 02:04:22');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listen_assessment_questions`
--

LOCK TABLES `listen_assessment_questions` WRITE;
/*!40000 ALTER TABLE `listen_assessment_questions` DISABLE KEYS */;
INSERT INTO `listen_assessment_questions` VALUES (1,5,1,'3+3 = ?','9',0,NULL,'2021-11-10 09:21:51','2021-11-10 09:21:51'),(2,6,1,'4+4 = ?','8',1,NULL,'2021-11-10 09:22:13','2021-11-10 09:22:13'),(3,11,1,'It ok ?','wrong',1,NULL,'2021-11-15 01:50:57','2021-11-15 01:50:57'),(4,14,1,'It ok ?','wrong',2,NULL,'2021-11-15 01:54:48','2021-11-15 01:54:48'),(5,17,1,'Lorem ipsum, or lipsum as it is sometimes known ?','wrong',2,NULL,'2021-11-15 02:03:56','2021-11-15 02:03:56');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership_course`
--

LOCK TABLES `membership_course` WRITE;
/*!40000 ALTER TABLE `membership_course` DISABLE KEYS */;
INSERT INTO `membership_course` VALUES (1,1,1,30,NULL,'2021-11-10 09:27:24','2021-11-10 09:27:24'),(2,1,3,32,NULL,'2021-11-10 09:42:37','2021-11-10 09:42:37'),(3,1,4,80,NULL,'2021-11-15 02:28:37','2021-11-15 02:28:37');
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
INSERT INTO `memberships` VALUES (1,'basic',0,'2021-11-10 09:26:16','2021-11-15 02:22:00',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0000_00_00_000000_create_file_table',1),(2,'0001_00_00_000000_create_users_table',1),(3,'0002_00_00_000000_create_student_table',1),(4,'0003_00_00_000000_create_tutor_table',1),(5,'0003_00_00_000001_create_tutor_translations',1),(6,'0003_00_00_100000_create_certificates_table',1),(7,'0004_00_00_000000_create_subject_table',1),(8,'0004_00_00_000001_create_subject_translations_table',1),(9,'0004_00_00_000300_create_tutor_teach_subject_table',1),(10,'0005_00_00_000000_create_course_table',1),(11,'0005_00_00_000000_create_student_courses_table',1),(12,'0005_00_00_000001_create_course_translations_table',1),(13,'0005_00_00_000002_create_course_material_table',1),(14,'0005_00_00_000003_create_course_material_translations_table',1),(15,'0006_00_00_000000_create_lecture_table',1),(16,'0007_00_00_000000_create_banner_table',1),(17,'0008_00_00_000000_create_tags_table',1),(18,'0009_00_00_000000_create_blogs_table',1),(19,'0009_00_00_000001_create_posts_table',1),(20,'0009_00_00_100000_create_comments_table',1),(21,'0009_00_00_200000_create_user_likes_table',1),(22,'0010_00_00_000000_create_study_sessions_table',1),(23,'0010_00_00_000001_create_room_live_courses_table',1),(24,'0010_00_00_100000_create_course_schedules_table',1),(25,'0010_00_00_100002_create_student_schedules_table',1),(26,'0011_00_00_000000_create_news_table',1),(27,'2014_10_12_100000_create_password_resets_table',1),(28,'2018_11_06_222923_create_transactions_table',1),(29,'2018_11_07_192923_create_transfers_table',1),(30,'2018_11_07_202152_update_transfers_table',1),(31,'2018_11_15_124230_create_wallets_table',1),(32,'2018_11_19_164609_update_transactions_table',1),(33,'2018_11_20_133759_add_fee_transfers_table',1),(34,'2018_11_22_131953_add_status_transfers_table',1),(35,'2018_11_22_133438_drop_refund_transfers_table',1),(36,'2019_05_03_000001_create_customer_columns',1),(37,'2019_05_03_000002_create_subscriptions_table',1),(38,'2019_05_03_000003_create_subscription_items_table',1),(39,'2019_05_13_111553_update_status_transfers_table',1),(40,'2019_06_25_103755_add_exchange_status_transfers_table',1),(41,'2019_07_29_184926_decimal_places_wallets_table',1),(42,'2019_10_02_193759_add_discount_transfers_table',1),(43,'2020_10_30_193412_add_meta_wallets_table',1),(44,'2021_06_02_070717_create_blog_tags_table',1),(45,'2021_06_05_105255_create_permission_tables',1),(46,'2021_06_16_070732_create_discounts_table',1),(47,'2021_06_16_071553_create_course_discounts_table',1),(48,'2021_06_16_094905_create_memberships_table',1),(49,'2021_06_16_094955_create_membership_courses_table',1),(50,'2021_06_16_101630_create_course_membership_discounts_table',1),(51,'2021_06_17_082211_create_orders_table',1),(52,'2021_06_18_071425_create_ratings_table',1),(53,'2021_07_06_082346_create_social_accounts_table',1),(54,'2021_07_08_011523_create_moderators_table',1),(55,'2021_09_27_025026_create_exams_table',1),(56,'2021_09_27_025526_create_pass_grades_table',1),(57,'2021_09_27_025608_create_quizzes_table',1),(58,'2021_09_27_033154_create_questions_table',1),(59,'2021_09_28_014621_add_wallet_id_wallets_table',1),(60,'2021_10_05_113819_create_settings_table',1),(61,'2021_10_21_084647_create_passages_table',1),(62,'2021_10_21_085602_create_reading_questions_table',1),(63,'2021_10_21_085805_create_writing_assessment_questions_table',1),(64,'2021_10_21_092247_create_writing_quiz_questions_table',1),(65,'2021_10_21_092337_create_listen_assessment_questions_table',1),(66,'2021_10_21_094820_create_speak_assessment_questions_table',1),(67,'2021_10_21_094855_create_speak_quiz_questions_table',1),(68,'2021_10_21_094924_create_speak_exercises_questions_table',1),(69,'2021_10_21_095627_create_reading_answers_table',1),(70,'2021_10_21_095706_create_writing_assessment_answers_table',1),(71,'2021_10_21_095744_create_writing_quiz_answers_table',1),(72,'2021_10_21_095845_create_listen_assessment_answers_table',1),(73,'2021_10_21_100020_create_speak_assessment_answers_table',1),(74,'2021_10_21_100051_create_speak_quiz_answers_table',1),(75,'2021_10_21_100144_create_speak_exercises_answers_table',1),(76,'2021_10_21_100247_create_student_examinations_table',1),(77,'2021_11_04_020323_create_audio_files_table',1),(78,'2021_11_04_030027_create_audio_listens_table',1),(79,'2021_11_10_013023_create_skip_levels_table',1),(80,'2021_11_20_044407_update_students_table',2),(81,'2021_11_20_074820_create_m_c_answer_items_table',2);
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
INSERT INTO `model_has_roles` VALUES (4,'App\\Models\\User',1),(2,'App\\Models\\User',2),(3,'App\\Models\\User',3),(3,'App\\Models\\User',4),(3,'App\\Models\\User',5),(3,'App\\Models\\User',6),(3,'App\\Models\\User',7),(2,'App\\Models\\User',8),(3,'App\\Models\\User',9);
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
INSERT INTO `news` VALUES (1,'Lorem ipsum began as scrambled','<p>Until recently, the prevailing view assumed&nbsp;<em>lorem ipsum</em>&nbsp;was born as a nonsense text. &ldquo;It&#39;s not Latin, though it looks like it, and it actually says nothing,&rdquo;&nbsp;<em>Before &amp; After</em>&nbsp;magazine&nbsp;answered a curious reader, &ldquo;Its &lsquo;words&rsquo; loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.&rdquo;</p>\r\n\r\n<p>As Cicero would put it, &ldquo;Um, not so fast.&rdquo;</p>\r\n\r\n<p>The placeholder text, beginning with the line&nbsp;<em>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit&rdquo;</em>, looks like Latin because in its youth, centuries ago, it was Latin.</p>\r\n\r\n<p>Richard McClintock, a Latin scholar from Hampden-Sydney College, is&nbsp;credited&nbsp;with discovering the source behind the ubiquitous filler text. In seeing a sample of&nbsp;<em>lorem ipsum</em>, his interest was piqued by&nbsp;<em>consectetur</em>&mdash;a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;(&ldquo;On the Extremes of Good and Evil&rdquo;), a first-century B.C. text from the Roman philosopher Cicero.</p>','2021-11-16','2021-11-15 02:14:54','2021-11-15 02:14:54',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (2,4,'618c06747083c',1,1,30,0,30,0,30,10,NULL,NULL,'2021-11-10 17:50:44','2021-11-10 17:50:44',NULL),(3,7,'6191b831b8840',1,1,30,0,30,0,30,10,NULL,NULL,'2021-11-15 01:30:25','2021-11-15 01:30:25',NULL),(4,7,'6191c94a414e6',3,1,32,0,32,0,32,10,NULL,NULL,'2021-11-15 02:43:22','2021-11-15 02:43:22',NULL),(5,4,'619287de5a6d7',3,1,32,0,32,0,32,10,NULL,NULL,'2021-11-15 09:16:30','2021-11-15 09:16:30',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passages`
--

LOCK TABLES `passages` WRITE;
/*!40000 ALTER TABLE `passages` DISABLE KEYS */;
INSERT INTO `passages` VALUES (1,1,'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate nunc est, non feugiat erat bibendum et. Proin eleifend justo ligula, et molestie neque aliquam eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse auctor eros sit amet dui dignissim vestibulum. Cras tincidunt bibendum augue non vulputate. Phasellus faucibus hendrerit pulvinar. Morbi eu odio at nunc tempus mollis. Curabitur eu gravida diam, sit amet pharetra magna. Maecenas elit urna, interdum sit amet cursus vitae, efficitur a tortor.</p>\r\n\r\n<p>Curabitur porttitor suscipit tortor, sed condimentum metus gravida molestie. Donec eu ullamcorper justo. Mauris posuere accumsan velit. Sed ultrices dui leo, sit amet volutpat metus iaculis sit amet. Maecenas ut pretium velit. Fusce quis elit nec mi pharetra ornare. Quisque nec metus cursus, blandit risus eu, finibus odio.</p>','Lorem Ipsum',NULL,'2021-11-10 09:09:39','2021-11-10 09:09:39'),(2,5,'<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>','Passage exercise',NULL,'2021-11-15 01:36:30','2021-11-15 01:36:30'),(3,6,'<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','Passage exercise set 2',NULL,'2021-11-15 01:52:35','2021-11-15 01:52:35'),(4,10,'<p><em>Lorem ipsum</em>, or&nbsp;<em>lipsum</em>&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero&#39;s&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;for use in a type specimen book. It usually begins with:</p>\r\n\r\n<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</blockquote>\r\n\r\n<p>The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn&#39;t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it&#39;s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;generator&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lorem ipsum</em>.</p>','passage quiz',NULL,'2021-11-15 01:58:01','2021-11-15 01:58:01');
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
INSERT INTO `permissions` VALUES (1,'banner-list','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(2,'banner-create','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(3,'banner-edit','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(4,'banner-delete','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(5,'tutor-list','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(6,'tutor-create','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(7,'tutor-edit','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(8,'tutor-delete','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(9,'moderator-list','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(10,'moderator-create','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(11,'moderator-edit','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(12,'moderator-delete','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(13,'student-list','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(14,'student-create','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(15,'student-edit','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(16,'student-delete','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(17,'news-list','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(18,'news-create','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(19,'news-edit','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(20,'news-delete','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(21,'blog-list','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(22,'blog-create','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(23,'blog-edit','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(24,'blog-delete','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(25,'forum-list','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(26,'forum-create','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(27,'forum-edit','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(28,'forum-delete','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(29,'document-list','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(30,'document-create','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(31,'document-edit','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(32,'document-delete','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(33,'course-list','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(34,'course-create','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(35,'course-edit','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(36,'course-delete','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(37,'subject-list','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(38,'subject-create','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(39,'subject-edit','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(40,'subject-delete','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(41,'certificate-list','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(42,'certificate-create','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(43,'certificate-edit','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(44,'certificate-delete','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(45,'study_session-list','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(46,'study_session-create','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(47,'study_session-edit','web','2021-11-10 08:55:44','2021-11-10 08:55:44'),(48,'study_session-delete','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(49,'subscribe-list','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(50,'subscribe-create','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(51,'subscribe-edit','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(52,'subscribe-delete','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(53,'examination-list','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(54,'examination-create','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(55,'examination-edit','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(56,'examination-delete','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(57,'membership-list','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(58,'membership-create','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(59,'membership-edit','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(60,'membership-delete','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(61,'price-list','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(62,'price-create','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(63,'price-edit','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(64,'price-delete','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(65,'discount-list','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(66,'discount-create','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(67,'discount-edit','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(68,'discount-delete','web','2021-11-10 08:55:45','2021-11-10 08:55:45');
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
INSERT INTO `posts` VALUES (1,1,'Where can I get some?','dsfsdf',0,0,0,NULL,2,'2021-11-18 20:42:50','2021-11-18 20:42:50',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,1,1,1,'2021-11-10 09:09:56','2021-11-10 09:09:56',NULL),(2,1,1,2,'2021-11-10 09:10:10','2021-11-10 09:10:10',NULL),(3,1,2,3,'2021-11-10 09:11:26','2021-11-10 09:11:26',NULL),(4,1,2,4,'2021-11-10 09:11:44','2021-11-10 09:11:44',NULL),(5,1,3,5,'2021-11-10 09:21:51','2021-11-10 09:21:51',NULL),(6,1,3,6,'2021-11-10 09:22:13','2021-11-10 09:22:13',NULL),(7,1,4,7,'2021-11-10 09:23:51','2021-11-10 09:23:51',NULL),(8,1,4,8,'2021-11-10 09:24:25','2021-11-10 09:24:25',NULL),(9,5,1,1,'2021-11-15 01:38:04','2021-11-15 01:50:40',NULL),(10,5,4,1,'2021-11-15 01:49:56','2021-11-15 01:49:56',NULL),(11,5,3,1,'2021-11-15 01:50:57','2021-11-15 01:51:05','2021-11-15 01:51:05'),(12,6,1,1,'2021-11-15 01:53:14','2021-11-15 01:53:14',NULL),(13,5,2,1,'2021-11-15 01:54:17','2021-11-15 01:54:17',NULL),(14,5,3,1,'2021-11-15 01:54:48','2021-11-15 01:54:48',NULL),(15,10,1,1,'2021-11-15 01:58:51','2021-11-15 01:58:51',NULL),(16,10,2,1,'2021-11-15 02:02:58','2021-11-15 02:02:58',NULL),(17,10,3,1,'2021-11-15 02:03:56','2021-11-15 02:03:56',NULL),(18,10,4,1,'2021-11-15 02:04:46','2021-11-15 02:04:46',NULL),(19,9,4,1,'2021-11-16 00:23:27','2021-11-16 00:23:27',NULL),(20,9,4,2,'2021-11-16 00:24:03','2021-11-16 00:24:03',NULL),(21,9,4,3,'2021-11-16 00:24:20','2021-11-16 00:24:20',NULL),(22,9,4,4,'2021-11-16 00:26:16','2021-11-16 00:26:16',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quizzes`
--

LOCK TABLES `quizzes` WRITE;
/*!40000 ALTER TABLE `quizzes` DISABLE KEYS */;
INSERT INTO `quizzes` VALUES (1,1,1,'2021-11-10 09:09:17','2021-11-10 09:09:17',NULL),(2,1,2,'2021-11-10 09:09:17','2021-11-10 09:09:17',NULL),(3,1,3,'2021-11-10 09:09:17','2021-11-10 09:09:17',NULL),(4,1,4,'2021-11-10 09:09:17','2021-11-10 09:09:17',NULL),(5,2,1,'2021-11-15 01:33:13','2021-11-15 01:33:13',NULL),(6,2,2,'2021-11-15 01:33:13','2021-11-15 01:33:13',NULL),(7,2,3,'2021-11-15 01:33:13','2021-11-15 01:33:13',NULL),(8,2,4,'2021-11-15 01:33:13','2021-11-15 01:33:13',NULL),(9,3,1,'2021-11-15 01:56:28','2021-11-15 01:56:28',NULL),(10,3,2,'2021-11-15 01:56:28','2021-11-15 01:56:28',NULL),(11,3,3,'2021-11-15 01:56:28','2021-11-15 01:56:28',NULL),(12,3,4,'2021-11-15 01:56:28','2021-11-15 01:56:28',NULL),(13,4,1,'2021-11-15 06:55:15','2021-11-15 06:55:15',NULL),(14,4,2,'2021-11-15 06:55:15','2021-11-15 06:55:15',NULL),(15,4,3,'2021-11-15 06:55:15','2021-11-15 06:55:15',NULL),(16,4,4,'2021-11-15 06:55:15','2021-11-15 06:55:15',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratings`
--

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
INSERT INTO `ratings` VALUES (1,7,3,1,'App\\Http\\Controllers\\Cousre','2021-11-15 01:30:39','2021-11-15 01:30:39',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reading_answers`
--

LOCK TABLES `reading_answers` WRITE;
/*!40000 ALTER TABLE `reading_answers` DISABLE KEYS */;
INSERT INTO `reading_answers` VALUES (1,1,'1',0,'2021-11-10 09:10:22','2021-11-20 02:01:59',NULL),(2,1,'2',1,'2021-11-10 09:10:27','2021-11-20 02:01:59',NULL),(3,1,'3',0,'2021-11-10 09:10:31','2021-11-20 02:01:59',NULL),(4,2,'1',0,'2021-11-10 09:10:43','2021-11-10 09:10:54',NULL),(5,2,'2',0,'2021-11-10 09:10:47','2021-11-10 09:10:54',NULL),(6,2,'3',1,'2021-11-10 09:10:52','2021-11-10 09:10:54',NULL),(7,3,'yes',1,'2021-11-15 01:45:29','2021-11-15 01:45:38',NULL),(8,5,'Lorem ipsum',1,'2021-11-15 01:59:06','2021-11-15 01:59:18',NULL),(9,5,'lipsum',0,'2021-11-15 01:59:13','2021-11-15 01:59:18',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reading_questions`
--

LOCK TABLES `reading_questions` WRITE;
/*!40000 ALTER TABLE `reading_questions` DISABLE KEYS */;
INSERT INTO `reading_questions` VALUES (1,1,1,'1+1 = ?','2',1,'2021-11-10 09:09:56','2021-11-10 09:09:56',NULL),(2,2,1,'1+2 = ?','3',1,'2021-11-10 09:10:10','2021-11-10 09:10:10',NULL),(3,9,2,'It ok ??','wrong',1,'2021-11-15 01:38:04','2021-11-15 01:50:33',NULL),(4,12,3,'what is lorem ipsum','wrong',2,'2021-11-15 01:53:14','2021-11-15 01:53:14',NULL),(5,15,4,'Lorem ipsum, or lipsum ?','wrong',3,'2021-11-15 01:58:51','2021-11-15 01:58:51',NULL);
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
INSERT INTO `roles` VALUES (1,'moderator','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(2,'tutor','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(3,'student','web','2021-11-10 08:55:45','2021-11-10 08:55:45'),(4,'super-admin','web','2021-11-10 08:55:45','2021-11-10 08:55:45');
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
INSERT INTO `settings` VALUES (1,'token_exchange_rate','2','2021-11-10 08:55:48','2021-11-10 08:55:48',NULL),(2,'phone_footer','+852 2602 1668','2021-11-10 08:55:48','2021-11-10 08:55:48',NULL),(3,'whatapp_footer','+852 2602 1668','2021-11-10 08:55:48','2021-11-10 08:55:48',NULL),(4,'mail_admin_footer','adminssions@helios-edu.com','2021-11-10 08:55:48','2021-11-10 08:55:48',NULL),(5,'address_ho_footer','Helios Education (Head Office) Room 902, 9th Floor, Yongsheng Centre, 9 Star Street, Causeway Bay','2021-11-10 08:55:48','2021-11-10 08:55:48',NULL),(6,'address_cbs_footer','Helios Education (Causeway Bay Store) To Make An Appointment Room 2202, Causeway Bay Plaza 1, 489 Hennessy Road, Causeway Bay','2021-11-10 08:55:48','2021-11-10 08:55:48',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skip_levels`
--

LOCK TABLES `skip_levels` WRITE;
/*!40000 ALTER TABLE `skip_levels` DISABLE KEYS */;
INSERT INTO `skip_levels` VALUES (1,'level_50',100,NULL,'2021-11-10 08:55:48','2021-11-10 08:55:48'),(2,'level_55',200,NULL,'2021-11-10 08:55:48','2021-11-10 08:55:48'),(3,'level_60',300,NULL,'2021-11-10 08:55:48','2021-11-10 08:55:48');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_accounts`
--

LOCK TABLES `social_accounts` WRITE;
/*!40000 ALTER TABLE `social_accounts` DISABLE KEYS */;
INSERT INTO `social_accounts` VALUES (2,4,'114855126270711804443','google','2021-11-10 17:48:51','2021-11-10 17:48:51',NULL),(3,5,'109632905449475285737','google','2021-11-10 17:59:58','2021-11-10 17:59:58',NULL),(4,6,'108811853924189559706','google','2021-11-15 01:12:26','2021-11-15 01:12:26',NULL),(5,7,'101169135745616441055','google','2021-11-15 01:18:58','2021-11-15 01:18:58',NULL),(6,9,'107745423117572503267','google','2021-11-15 08:02:59','2021-11-15 08:02:59',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `speak_assessment_answers`
--

LOCK TABLES `speak_assessment_answers` WRITE;
/*!40000 ALTER TABLE `speak_assessment_answers` DISABLE KEYS */;
INSERT INTO `speak_assessment_answers` VALUES (1,1,'4','1',NULL,'2021-11-10 09:24:34','2021-11-10 09:24:46'),(2,1,'5','0',NULL,'2021-11-10 09:24:38','2021-11-10 09:24:46'),(3,1,'6','0',NULL,'2021-11-10 09:24:41','2021-11-10 09:24:46'),(4,2,'6','0',NULL,'2021-11-10 09:25:05','2021-11-10 09:25:19'),(5,2,'7','1',NULL,'2021-11-10 09:25:09','2021-11-10 09:25:19'),(6,2,'8','0',NULL,'2021-11-10 09:25:16','2021-11-10 09:25:19');
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
INSERT INTO `speak_assessment_questions` VALUES (1,7,'ee26aa0c96a','7-3 = ?','5',1,NULL,'2021-11-10 09:23:51','2021-11-10 09:23:51'),(2,8,'ee26aa5e17e','6+1','7',1,NULL,'2021-11-10 09:24:25','2021-11-10 09:24:25');
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
INSERT INTO `speak_exercises_questions` VALUES (1,10,'645866366','645866461','It ok ?','wrong',1,'2021-11-15 01:49:56','2021-11-15 01:49:56',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `speak_quiz_questions`
--

LOCK TABLES `speak_quiz_questions` WRITE;
/*!40000 ALTER TABLE `speak_quiz_questions` DISABLE KEYS */;
INSERT INTO `speak_quiz_questions` VALUES (1,18,'Lorem ipsum, or lipsum as it is sometimes known ?','wrong',2,NULL,'2021-11-15 02:04:46','2021-11-15 02:04:46'),(2,19,'Question 1','Question 1',1,NULL,'2021-11-16 00:23:27','2021-11-16 00:23:48'),(3,20,'Question 2','Question 1',1,NULL,'2021-11-16 00:24:03','2021-11-16 00:24:03'),(4,21,'Question 3','Question 1',1,NULL,'2021-11-16 00:24:20','2021-11-16 00:24:20'),(5,22,'Question 4','Question 4',1,NULL,'2021-11-16 00:26:16','2021-11-16 00:26:16');
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
  `level_read` double DEFAULT NULL,
  `level_write` double DEFAULT NULL,
  `level_speak` double DEFAULT NULL,
  `level_listen` double DEFAULT NULL,
  `exam_read` bigint DEFAULT NULL,
  `exam_write` bigint DEFAULT NULL,
  `exam_speak` bigint DEFAULT NULL,
  `exam_listen` bigint DEFAULT NULL,
  `set_exam_read` bigint DEFAULT NULL,
  `set_exam_write` bigint DEFAULT NULL,
  `set_exam_speak` bigint DEFAULT NULL,
  `set_exam_listen` bigint DEFAULT NULL,
  `exam_buy_read` double DEFAULT NULL,
  `exam_buy_write` double DEFAULT NULL,
  `exam_buy_speak` double DEFAULT NULL,
  `exam_buy_listen` double DEFAULT NULL,
  `passed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_courses_student_id_course_id_unique` (`student_id`,`course_id`),
  KEY `student_courses_course_id_foreign` (`course_id`),
  CONSTRAINT `student_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `student_courses_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_courses`
--

LOCK TABLES `student_courses` WRITE;
/*!40000 ALTER TABLE `student_courses` DISABLE KEYS */;
INSERT INTO `student_courses` VALUES (2,1,4,NULL,'2021-11-10 17:50:44',1,'0,1,2,3,6,',5,5,5,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2021-11-10 17:50:44','2021-11-12 15:19:20',NULL),(3,1,7,NULL,'2021-11-15 01:30:25',8,'8,',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2021-11-15 01:30:25','2021-11-15 01:30:30',NULL),(4,3,7,NULL,'2021-11-15 02:43:22',1,'1,',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2021-11-15 02:43:22','2021-11-15 02:43:27',NULL),(5,3,4,NULL,'2021-11-15 16:16:30',4,'0,16,4,6,',5,5,5,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2021-11-15 09:16:30','2021-11-18 20:46:11',NULL);
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
  `student_id` bigint unsigned NOT NULL,
  `course_id` bigint unsigned NOT NULL,
  `exam_id` bigint unsigned NOT NULL,
  `quiz_id` bigint unsigned NOT NULL,
  `question_id` bigint unsigned NOT NULL,
  `answer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_type` int NOT NULL,
  `time` double DEFAULT NULL,
  `comment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `score` double DEFAULT NULL,
  `reviewed` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `had_update` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `student_examinations_student_id_foreign` (`student_id`),
  KEY `student_examinations_course_id_foreign` (`course_id`),
  KEY `student_examinations_exam_id_foreign` (`exam_id`),
  KEY `student_examinations_quiz_id_foreign` (`quiz_id`),
  KEY `student_examinations_question_id_foreign` (`question_id`),
  CONSTRAINT `student_examinations_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `student_examinations_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  CONSTRAINT `student_examinations_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `student_examinations_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `student_examinations_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_examinations`
--

LOCK TABLES `student_examinations` WRITE;
/*!40000 ALTER TABLE `student_examinations` DISABLE KEYS */;
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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level_read` double DEFAULT NULL,
  `level_write` double DEFAULT NULL,
  `level_speak` double DEFAULT NULL,
  `level_listen` double DEFAULT NULL,
  `exam_buy_read` double DEFAULT NULL,
  `exam_buy_write` double DEFAULT NULL,
  `exam_buy_speak` double DEFAULT NULL,
  `exam_buy_listen` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `students_user_id_foreign` (`user_id`),
  CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (2,4,NULL,NULL,NULL,NULL,NULL,'2021-11-10 17:48:51','2021-11-10 17:48:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,5,NULL,NULL,NULL,NULL,NULL,'2021-11-10 17:59:58','2021-11-10 17:59:58',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,6,NULL,NULL,NULL,NULL,NULL,'2021-11-15 01:12:26','2021-11-15 01:12:26',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,7,'Banh Phuoc Trung','1999-05-13','+841279095508','12',NULL,'2021-11-15 01:18:58','2021-11-15 01:34:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,9,NULL,NULL,NULL,NULL,NULL,'2021-11-15 08:02:59','2021-11-15 08:02:59',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `study_sessions`
--

LOCK TABLES `study_sessions` WRITE;
/*!40000 ALTER TABLE `study_sessions` DISABLE KEYS */;
INSERT INTO `study_sessions` VALUES (1,'Morning','2021-11-15 08:00:00','2021-11-15 10:30:00',NULL,'2021-11-15 02:29:31','2021-11-15 02:29:31');
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
INSERT INTO `subject_translations` VALUES (1,'Basic English',1,'en','2021-11-10 09:00:38','2021-11-10 09:02:45',NULL),(2,'基礎英語',1,'cn','2021-11-10 09:00:38','2021-11-10 09:02:45',NULL),(3,'基础英语',1,'sc','2021-11-10 09:00:38','2021-11-10 09:02:45',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (1,1,'#6c2d2d','#ffffff',1,'2021-11-10 09:00:38','2021-11-15 02:26:18',NULL);
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
INSERT INTO `tags` VALUES (1,'#中文',2,'2021-11-15 02:15:24','2021-11-15 02:15:24',NULL),(2,'#數學',1,'2021-11-15 02:18:40','2021-11-15 02:18:40',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,'App\\Models\\User',3,1,'deposit',2000,1,'{\"card\": \"4242\"}','208dd127-4b8a-43ee-a57b-c0ebfb4fd7f5','2021-11-10 09:38:05','2021-11-10 09:38:05'),(2,'App\\Models\\User',3,1,'withdraw',-30,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','c3fe46e6-a092-4286-b873-7ed2ed552826','2021-11-10 09:38:45','2021-11-10 09:38:45'),(3,'App\\Models\\CourseMembershipDiscount',1,2,'deposit',30,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','73e7be3f-1ce2-46a8-906a-1ccee159bfa2','2021-11-10 09:38:45','2021-11-10 09:38:45'),(4,'App\\Models\\User',4,3,'deposit',2000,1,'{\"card\": \"4242\"}','71261329-ed5a-4f76-a5d9-99e3727326ec','2021-11-10 17:50:27','2021-11-10 17:50:27'),(5,'App\\Models\\User',4,3,'withdraw',-30,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','db88f6e2-d059-4691-bf58-ebebe39955c4','2021-11-10 17:50:44','2021-11-10 17:50:44'),(6,'App\\Models\\CourseMembershipDiscount',1,2,'deposit',30,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','2736c83b-f463-494d-902d-72eaa5d086b2','2021-11-10 17:50:44','2021-11-10 17:50:44'),(7,'App\\Models\\User',7,5,'deposit',2000,1,'{\"card\": \"4242\"}','4533d865-3026-427a-bdbb-6489265a03b3','2021-11-15 01:20:39','2021-11-15 01:20:39'),(8,'App\\Models\\User',7,5,'withdraw',-30,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','b36cade9-a9b6-42d4-a51a-eb9c43786b2d','2021-11-15 01:30:25','2021-11-15 01:30:25'),(9,'App\\Models\\CourseMembershipDiscount',1,2,'deposit',30,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','bdcece38-bbdb-4f69-ba05-18e11975cc02','2021-11-15 01:30:25','2021-11-15 01:30:25'),(10,'App\\Models\\User',7,5,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','b43ae749-d4be-457d-8d20-f6bd4f9abf50','2021-11-15 02:43:22','2021-11-15 02:43:22'),(11,'App\\Models\\CourseMembershipDiscount',2,6,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','adb4b86d-21b9-4020-a468-7d37b454d5d4','2021-11-15 02:43:22','2021-11-15 02:43:22'),(12,'App\\Models\\User',4,3,'withdraw',-32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','5548d15c-c3f8-4bb0-8163-14a32cdcb482','2021-11-15 09:16:30','2021-11-15 09:16:30'),(13,'App\\Models\\CourseMembershipDiscount',2,6,'deposit',32,1,'{\"title\": \"course\", \"description\": \"Purchase of Product course\"}','6da6bdbc-54b3-40b2-abd6-a3b1ca5e7c56','2021-11-15 09:16:30','2021-11-15 09:16:30');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transfers`
--

LOCK TABLES `transfers` WRITE;
/*!40000 ALTER TABLE `transfers` DISABLE KEYS */;
INSERT INTO `transfers` VALUES (1,'Bavix\\Wallet\\Models\\Wallet',1,'App\\Models\\CourseMembershipDiscount',1,'paid',NULL,3,2,0,0,'489a05f8-427b-4df3-a697-cc213068cd8b','2021-11-10 09:38:45','2021-11-10 09:38:45'),(2,'Bavix\\Wallet\\Models\\Wallet',3,'App\\Models\\CourseMembershipDiscount',1,'paid',NULL,6,5,0,0,'019a69d8-b444-4ba8-a8ac-a68254105bb4','2021-11-10 17:50:44','2021-11-10 17:50:44'),(3,'Bavix\\Wallet\\Models\\Wallet',5,'App\\Models\\CourseMembershipDiscount',1,'paid',NULL,9,8,0,0,'4f737c1a-a868-4068-80a3-c80d891a4f15','2021-11-15 01:30:25','2021-11-15 01:30:25'),(4,'Bavix\\Wallet\\Models\\Wallet',5,'App\\Models\\CourseMembershipDiscount',2,'paid',NULL,11,10,0,0,'29ce6b21-a2a7-4f44-a491-f9a068b4bd08','2021-11-15 02:43:22','2021-11-15 02:43:22'),(5,'Bavix\\Wallet\\Models\\Wallet',3,'App\\Models\\CourseMembershipDiscount',2,'paid',NULL,13,12,0,0,'c55c28e7-5b48-4734-aeab-9a6fb4c17d70','2021-11-15 09:16:30','2021-11-15 09:16:30');
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
INSERT INTO `tutor_teach_subject` VALUES (1,1,1,'2021-11-10 09:07:54','2021-11-10 09:07:54',NULL),(2,2,1,'2021-11-15 02:10:59','2021-11-15 02:10:59',NULL);
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
INSERT INTO `tutor_translations` VALUES (1,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','Lorem Ipsum is simply dummy text of the printing and typesetting industry','Nam libero tempore, cum soluta nobis est eligendi optio','ut aut reiciendis voluptatibus maiores alias consequatur','en',NULL,NULL,NULL),(2,1,'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates','aut perferendis doloribus asperiores repellat.','cn',NULL,NULL,NULL),(3,1,'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','Itaque earum rerum hic tenetur a sapiente delectus','Quis autem vel eum iure reprehenderit qui in ea voluptate velit','sc',NULL,NULL,NULL),(4,2,'MSc Applied Linguistics and Second Language Acquisition, University of Oxford','Bachelor of Education in Language Education, The University of Hong Kong','Specialised in Language/IELTS teaching/Personal Statement/Interview','More than 10 years of experiences','en',NULL,NULL,NULL),(5,2,'MSc Applied Linguistics and Second Language Acquisition, University of Oxford','Bachelor of Education in Language Education, The University of Hong Kong','Specialised in Language/IELTS teaching/Personal Statement/Interview','More than 10 years of experiences','cn',NULL,NULL,NULL),(6,2,'MSc Applied Linguistics and Second Language Acquisition, University of Oxford','Bachelor of Education in Language Education, The University of Hong Kong','Specialised in Language/IELTS teaching/Personal Statement/Interview','More than 10 years of experiences','sc',NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutors`
--

LOCK TABLES `tutors` WRITE;
/*!40000 ALTER TABLE `tutors` DISABLE KEYS */;
INSERT INTO `tutors` VALUES (1,2,'Chow Ting',NULL,NULL,NULL,'2021-11-10 09:07:54','2021-11-10 09:07:54'),(2,8,'Mr.Kenny Or',NULL,NULL,NULL,'2021-11-15 02:10:59','2021-11-15 02:10:59');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_likes`
--

LOCK TABLES `user_likes` WRITE;
/*!40000 ALTER TABLE `user_likes` DISABLE KEYS */;
INSERT INTO `user_likes` VALUES (1,7,1,1,'App\\Models\\Course','2021-11-15 01:28:34','2021-11-15 01:28:34',NULL),(2,1,1,3,'App\\Models\\Course','2021-11-18 20:42:16','2021-11-18 20:42:16',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Super admin','admin@gmail.com',NULL,1,'$2y$10$hmIRWuMoNP1G3cUDzO3yuONsuhHWEq8XavC2n6kVq38nKg.ExiH9y',1,'abS8NEwwNhWR6AWLFNWh1TkLfva9F2Mmz4zlnkqDQDZLrWECyBNMIpvZUJ4B','2021-11-10 08:55:48','2021-11-10 08:55:48',NULL,NULL,NULL,NULL,NULL),(2,'Chow','stephen@gmail.com',NULL,1,'$2y$10$8qQqln7xxZffH.5hgkN8..jptdKlzcmUbobO..N/SzrTsMH1zU03u',1,NULL,'2021-11-10 09:07:54','2021-11-10 09:07:54',NULL,NULL,NULL,NULL,NULL),(4,'Phước Trung Bành','phuoctrungbanh.mkd@gmail.com',NULL,1,'$2y$10$6RvbHLAg4otiMPNzDPNdOuxTn9YyWGcimrCReQvJzzjJst8AAAHPS',1,NULL,'2021-11-10 17:48:51','2021-11-10 17:49:38',NULL,'cus_KZTswR4aatmD2Y','visa','4242',NULL),(5,'Kevin Yuen','kevintik289@gmail.com',NULL,1,'$2y$10$6Zx012LkHd4l1r5h7dKpUOVgXfNDWbyyvNGqsNHPg.Jikl/D1Kndi',1,NULL,'2021-11-10 17:59:58','2021-11-10 18:01:13',NULL,'cus_KZU3oFPO6iYTZl','visa','4242',NULL),(6,'Khánh Đăng Trần','trankhanhdang1904@gmail.com',NULL,1,'$2y$10$JgT1/Q2C8oH1KdI7ruyCo.4zkLAhrxsEJojMJSetXLAU2c8qEk1JS',1,NULL,'2021-11-15 01:12:26','2021-11-15 01:12:27',NULL,'cus_Kb5w3tQMTkU3Je',NULL,NULL,NULL),(7,'Banh Phuoc Trung','trungbanh97@gmail.com',NULL,1,'$2y$10$XFGCuSmWm5qqqtc9bD050.RBSNSBGA6cIGyb0bPpJbZt9LtrC8DUm',1,NULL,'2021-11-15 01:18:58','2021-11-15 01:34:52',NULL,'cus_Kb6226J6ofniM9','visa','4242',NULL),(8,'Mr.Kenny Or','kenny@gmail.com',NULL,1,'$2y$10$dgGugRQawC1WgEH8barkceVqOzFC.3jjJej533pfKg/zB3DmbQREm',1,NULL,'2021-11-15 02:10:59','2021-11-15 02:10:59',NULL,NULL,NULL,NULL,NULL),(9,'Phung Le','phungle.mkd@gmail.com',NULL,1,'$2y$10$vvcu4PlWIn4voZ8CovilguFyEmB7a7UOcI3xtwXai3xne69/cn02i',1,NULL,'2021-11-15 08:02:59','2021-11-15 08:03:00',NULL,'cus_KbCYa5DpWz83Gp',NULL,NULL,NULL);
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
  `wallet_str_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wallet618beb7bc48044.74556969',
  PRIMARY KEY (`id`),
  UNIQUE KEY `wallets_holder_type_holder_id_slug_unique` (`holder_type`,`holder_id`,`slug`),
  KEY `wallets_holder_type_holder_id_index` (`holder_type`,`holder_id`),
  KEY `wallets_slug_index` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wallets`
--

LOCK TABLES `wallets` WRITE;
/*!40000 ALTER TABLE `wallets` DISABLE KEYS */;
INSERT INTO `wallets` VALUES (1,'App\\Models\\User',3,'Default Wallet','default',NULL,'[]',1970,2,'2021-11-10 09:36:27','2021-11-10 09:38:45','wallet618beb7bc48044.74556969'),(2,'App\\Models\\CourseMembershipDiscount',1,'Default Wallet','default',NULL,'[]',90,2,'2021-11-10 09:38:45','2021-11-15 01:30:25','wallet618beb7bc48044.74556969'),(3,'App\\Models\\User',4,'Default Wallet','default',NULL,'[]',1938,2,'2021-11-10 17:49:06','2021-11-15 09:16:30','wallet618beb7bc48044.74556969'),(4,'App\\Models\\User',5,'Default Wallet','default',NULL,'[]',0,2,'2021-11-10 18:00:18','2021-11-10 18:00:18','wallet618beb7bc48044.74556969'),(5,'App\\Models\\User',7,'Default Wallet','default',NULL,'[]',1938,2,'2021-11-15 01:19:12','2021-11-15 02:43:22','wallet618beb7bc48044.74556969'),(6,'App\\Models\\CourseMembershipDiscount',2,'Default Wallet','default',NULL,'[]',64,2,'2021-11-15 02:43:22','2021-11-15 09:16:30','wallet618beb7bc48044.74556969');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `writing_assessment_answers`
--

LOCK TABLES `writing_assessment_answers` WRITE;
/*!40000 ALTER TABLE `writing_assessment_answers` DISABLE KEYS */;
INSERT INTO `writing_assessment_answers` VALUES (1,1,'4',1,'2021-11-10 09:11:56','2021-11-10 09:12:09',NULL),(2,1,'5',0,'2021-11-10 09:12:01','2021-11-10 09:12:09',NULL),(3,1,'6',0,'2021-11-10 09:12:05','2021-11-10 09:12:09',NULL),(4,2,'4',0,'2021-11-10 09:12:18','2021-11-10 09:12:31',NULL),(5,2,'5',1,'2021-11-10 09:12:22','2021-11-10 09:12:31',NULL),(6,2,'6',0,'2021-11-10 09:12:25','2021-11-10 09:12:31',NULL),(7,3,'yes',1,'2021-11-15 01:54:28','2021-11-15 01:54:32',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `writing_assessment_questions`
--

LOCK TABLES `writing_assessment_questions` WRITE;
/*!40000 ALTER TABLE `writing_assessment_questions` DISABLE KEYS */;
INSERT INTO `writing_assessment_questions` VALUES (1,3,'2+2 = ?','4',1,NULL,'2021-11-10 09:11:26','2021-11-10 09:11:26'),(2,4,'3+2 = ?','5',1,NULL,'2021-11-10 09:11:44','2021-11-10 09:11:44'),(3,13,'It ok ?','wrong',2,NULL,'2021-11-15 01:54:17','2021-11-15 01:54:17');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `writing_quiz_questions`
--

LOCK TABLES `writing_quiz_questions` WRITE;
/*!40000 ALTER TABLE `writing_quiz_questions` DISABLE KEYS */;
INSERT INTO `writing_quiz_questions` VALUES (1,16,1,'What is Lorem ipsum ?','wrong',3,NULL,'2021-11-15 02:02:58','2021-11-15 02:02:58');
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

-- Dump completed on 2021-11-20 21:04:50
