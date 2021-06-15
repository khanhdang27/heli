-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2021 at 10:42 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helios`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `banner_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_background` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `banners_banner_background_foreign` (`banner_background`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_no` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

DROP TABLE IF EXISTS `blog_tags`;
CREATE TABLE IF NOT EXISTS `blog_tags` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_tags_blog_id_foreign` (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

DROP TABLE IF EXISTS `certificates`;
CREATE TABLE IF NOT EXISTS `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `certificate_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `certificate_code`, `certificate_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'IGCSE', 'International General Certificate of Secondary Education', '2021-05-25 01:14:12', '2021-05-25 01:14:12', NULL),
(2, 'IAL', 'IAL', '2021-05-23 18:42:34', '2021-05-23 18:42:34', NULL),
(3, 'IELTS', 'International English Language Testing System', '2021-05-23 18:42:59', '2021-05-23 18:42:59', NULL),
(4, 'UKISET', 'UKISET', '2021-05-23 18:43:13', '2021-05-23 18:43:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `file_id` bigint(20) DEFAULT NULL,
  `tag_user` bigint(20) DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_post_id_foreign` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `file_id`, `tag_user`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 5, NULL, 'hahaha', '2021-05-31 23:54:18', '2021-05-31 23:54:18', NULL),
(2, 1, 2, 6, NULL, 'hahaha', '2021-05-31 23:59:08', '2021-05-31 23:59:08', NULL),
(3, 1, 2, 7, NULL, 'lele', '2021-05-31 23:59:56', '2021-05-31 23:59:56', NULL),
(4, 14, 2, 8, NULL, 'rtertre', '2021-06-01 01:53:55', '2021-06-01 01:53:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `course_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_subject_id_foreign` (`subject_id`),
  KEY `courses_tutor_id_foreign` (`tutor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_material`
--

DROP TABLE IF EXISTS `course_material`;
CREATE TABLE IF NOT EXISTS `course_material` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_material_course_id_foreign` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_material_translations`
--

DROP TABLE IF EXISTS `course_material_translations`;
CREATE TABLE IF NOT EXISTS `course_material_translations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_material_id` bigint(20) UNSIGNED NOT NULL,
  `course_material_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_material_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_material_origin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_material_translations_course_material_id_locale_unique` (`course_material_id`,`locale`),
  KEY `course_material_translations_locale_index` (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_schedules`
--

DROP TABLE IF EXISTS `course_schedules`;
CREATE TABLE IF NOT EXISTS `course_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lecture_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `study_session_id` bigint(20) UNSIGNED NOT NULL,
  `is_test` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_schedules_course_id_foreign` (`course_id`),
  KEY `course_schedules_study_session_id_foreign` (`study_session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_translations`
--

DROP TABLE IF EXISTS `course_translations`;
CREATE TABLE IF NOT EXISTS `course_translations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_translations_course_id_locale_unique` (`course_id`,`locale`),
  KEY `course_translations_locale_index` (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_videos`
--

DROP TABLE IF EXISTS `course_videos`;
CREATE TABLE IF NOT EXISTS `course_videos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `course_video_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_video_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_resource` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_live` int(11) NOT NULL,
  `course_schedule_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_videos_course_id_foreign` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_video_translations`
--

DROP TABLE IF EXISTS `course_video_translations`;
CREATE TABLE IF NOT EXISTS `course_video_translations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_video_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_video_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_video_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_video_translations_course_video_id_locale_unique` (`course_video_id`,`locale`),
  KEY `course_video_translations_locale_index` (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE IF NOT EXISTS `file` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `referer` bigint(20) NOT NULL,
  `file_type` bigint(20) NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` double NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `referer`, `file_type`, `source`, `raw_name`, `file_size`, `uploaded_by`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 0, 'post/GdIhKKjB7LdwCQ4w6EBkyu0T5ASYt39YhSxzjGMi.jpg', 'ava.jpg', 0.118525, 1, 1, '2021-05-31 02:57:58', '2021-05-31 02:57:58', NULL),
(2, 0, 0, 'post/EsnIzhAWoZyJYCbpBpeO0v3VOgFkykmMDCaORhOZ.jpg', 'ava.jpg', 0.118525, 1, 1, '2021-05-31 02:59:52', '2021-05-31 02:59:52', NULL),
(3, 0, 0, 'post/0jv8zsXMFFOVs55stYAl2TK6ZjUgg6MMVVuNtyc5.jpg', 'bg-article2.jpg', 0.037095, 1, 1, '2021-05-31 03:37:27', '2021-05-31 03:37:27', NULL),
(4, 0, 0, 'post/OpGhx1LYhEMeY4aKzPbPIGfSKo1QT0ee5vgoWVcj.jpg', 'question.jpg', 0.060177, 14, 1, '2021-05-31 19:11:41', '2021-05-31 19:11:41', NULL),
(5, 0, 0, 'post/NVOtcbPjj2xGBOkBTGIMAxbvouV0tmPppd8C5GEO.jpg', 'ava2.jpg', 0.023477, 1, 1, '2021-05-31 23:54:18', '2021-05-31 23:54:18', NULL),
(6, 0, 0, 'post/HIIEmTVCZdxtD4vyidjRsNb6Xy2OwbZJrKTTCYpH.jpg', 'ava2.jpg', 0.023477, 1, 1, '2021-05-31 23:59:08', '2021-05-31 23:59:08', NULL),
(7, 0, 0, 'post/H6oRnvLXjlGiCPc82nnHigOIaSV6Bc36VQey9Gvc.jpg', 'bg-article2.jpg', 0.037095, 1, 1, '2021-05-31 23:59:56', '2021-05-31 23:59:56', NULL),
(8, 0, 0, 'post/DYDBrUkCMgSdwC0F5oTq5xrPr0aHTJXV9vcTkUrG.jpg', 'question.jpg', 0.060177, 14, 1, '2021-06-01 01:53:55', '2021-06-01 01:53:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0000_00_00_000000_create_file_table', 1),
(2, '0001_00_00_000000_create_users_table', 1),
(3, '0002_00_00_000000_create_student_table', 1),
(4, '0003_00_00_000000_create_tutor_table', 1),
(5, '0003_00_00_000001_create_tutor_translations', 1),
(6, '0003_00_00_100000_create_certificates_table', 1),
(7, '0004_00_00_000000_create_subject_table', 1),
(8, '0004_00_00_000001_create_subject_translations_table', 1),
(9, '0004_00_00_000300_create_tutor_teach_subject_table', 1),
(10, '0005_00_00_000000_create_course_table', 1),
(11, '0005_00_00_000000_create_student_courses_table', 1),
(12, '0005_00_00_000001_create_course_translations_table', 1),
(13, '0005_00_00_000002_create_course_material_table', 1),
(14, '0005_00_00_000003_create_course_material_translations_table', 1),
(15, '0006_00_00_000000_create_course_video_table', 1),
(16, '0006_00_00_000000_create_video_manages_table', 1),
(17, '0006_00_00_000001_create_video_manage_translations_table', 1),
(18, '0007_00_00_000000_create_banner_table', 1),
(19, '2019_05_03_000001_create_customer_columns', 1),
(20, '2019_05_03_000002_create_subscriptions_table', 1),
(21, '2019_05_03_000003_create_subscription_items_table', 1),
(22, '2021_05_27_094206_create_tutor_teach_courses_table', 1),
(23, '2021_05_29_164022_create_post_tags_table', 1),
(24, '2021_05_29_164115_create_posts_table', 1),
(26, '2021_05_29_165526_create_user_likes_table', 1),
(27, '2021_05_30_140359_create_study_sessions_table', 1),
(28, '2021_05_30_140505_create_course_schedules_table', 1),
(29, '2021_05_30_140525_create_student_schedules_table', 1),
(30, '2021_05_30_153115_create_shopping_carts_table', 1),
(31, '9999_00_00_000001_create_roles_table', 1),
(32, '9999_00_00_000002_create_role_users_table', 1),
(33, '2021_05_29_164904_create_comments_table', 2),
(34, '2021_06_02_064810_create_blogs_table', 3),
(35, '2021_06_02_070717_create_blog_tags_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `file_id` bigint(20) DEFAULT NULL,
  `like_no` bigint(20) NOT NULL DEFAULT '0',
  `comment_no` bigint(20) NOT NULL DEFAULT '0',
  `block` tinyint(1) NOT NULL DEFAULT '0',
  `pin_comment` bigint(20) DEFAULT NULL,
  `tag_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `file_id`, `like_no`, `comment_no`, `block`, `pin_comment`, `tag_id`, `created_at`, `updated_at`) VALUES
(2, 1, '請問呢題點做?', 'ewrew', 2, 1, 4, 0, NULL, 2, '2021-05-31 02:59:52', '2021-06-01 03:41:27'),
(3, 1, 'what are u doing?', 'what are u doing?', 3, 0, 0, 0, NULL, 4, '2021-05-31 03:37:27', '2021-05-31 03:37:27'),
(4, 14, 'hi', 'hihi', 4, 0, 0, 0, NULL, 5, '2021-05-31 19:11:41', '2021-05-31 19:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

DROP TABLE IF EXISTS `post_tags`;
CREATE TABLE IF NOT EXISTS `post_tags` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `tag_name`, `created_at`, `updated_at`) VALUES
(2, '#IGCSE', '2021-05-30 22:01:08', '2021-05-30 22:01:08'),
(3, '#UKISET', '2021-05-30 22:01:15', '2021-05-30 22:01:15'),
(4, '#中文', '2021-05-30 22:01:22', '2021-05-30 22:01:22'),
(5, '#數學', '2021-05-30 22:01:30', '2021-05-30 22:01:30'),
(6, '#IALL', '2021-05-31 00:15:06', '2021-05-31 00:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin', 'Super Admin', '2021-05-30 19:08:27', '2021-05-30 19:08:27', NULL),
(2, 'Admin', 'Admin', '2021-05-30 19:08:27', '2021-05-30 19:08:27', NULL),
(3, 'Member', 'Customer', '2021-05-30 19:08:27', '2021-05-30 19:08:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role_user_user_id_role_id_unique` (`user_id`,`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2021-05-30 19:08:27', '2021-05-30 19:08:27', NULL),
(2, 3, 3, '2021-05-31 18:56:37', '2021-05-31 18:56:37', NULL),
(3, 8, 3, '2021-05-31 19:02:56', '2021-05-31 19:02:56', NULL),
(4, 9, 3, '2021-05-31 19:03:23', '2021-05-31 19:03:23', NULL),
(5, 11, 3, '2021-05-31 19:05:52', '2021-05-31 19:05:52', NULL),
(6, 12, 3, '2021-05-31 19:06:13', '2021-05-31 19:06:13', NULL),
(7, 13, 3, '2021-05-31 19:08:17', '2021-05-31 19:08:17', NULL),
(8, 14, 3, '2021-05-31 19:10:36', '2021-05-31 19:10:36', NULL),
(9, 15, 3, '2021-06-01 19:50:53', '2021-06-01 19:50:53', NULL),
(10, 21, 3, '2021-06-01 19:55:01', '2021-06-01 19:55:01', NULL),
(11, 25, 3, '2021-06-01 19:56:04', '2021-06-01 19:56:04', NULL),
(12, 26, 3, '2021-06-01 19:57:44', '2021-06-01 19:57:44', NULL),
(13, 28, 3, '2021-06-01 20:00:48', '2021-06-01 20:00:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_carts`
--

DROP TABLE IF EXISTS `shopping_carts`;
CREATE TABLE IF NOT EXISTS `shopping_carts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shopping_carts_course_id_foreign` (`course_id`),
  KEY `shopping_carts_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_of_birth` date DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `students_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `full_name`, `day_of_birth`, `phone_no`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 28, 'Mr.Kenny', '1994-06-12', '0987564321', NULL, '2021-06-01 20:56:24', '2021-06-01 21:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

DROP TABLE IF EXISTS `student_courses`;
CREATE TABLE IF NOT EXISTS `student_courses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_courses_student_id_course_id_unique` (`student_id`,`course_id`),
  KEY `student_courses_course_id_foreign` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_schedules`
--

DROP TABLE IF EXISTS `student_schedules`;
CREATE TABLE IF NOT EXISTS `student_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lecture_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `study_session_id` bigint(20) UNSIGNED NOT NULL,
  `is_test` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_schedules_course_id_foreign` (`course_id`),
  KEY `student_schedules_study_session_id_foreign` (`study_session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `study_sessions`
--

DROP TABLE IF EXISTS `study_sessions`;
CREATE TABLE IF NOT EXISTS `study_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `session_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_start` date NOT NULL,
  `session_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `certificate_id` bigint(20) UNSIGNED NOT NULL,
  `subject_color_background` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_color_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subjects_certificate_id_foreign` (`certificate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `certificate_id`, `subject_color_background`, `subject_color_text`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, '#7b3939', '#ffffff', 1, '2021-05-23 19:24:08', '2021-05-25 12:25:38', NULL),
(2, 1, '#b1b757', '#ffffff', 1, '2021-05-25 12:21:20', '2021-05-25 12:21:20', NULL),
(3, 1, '#8f804d', '#ffffff', 1, '2021-05-25 12:11:00', '2021-05-25 12:11:00', NULL),
(4, 1, '#4c2e67', '#ffffff', 1, '2021-05-25 12:05:24', '2021-05-25 12:05:24', NULL),
(5, 1, '#4d6a89', '#ffffff', 1, '2021-05-25 12:07:26', '2021-05-25 12:07:26', NULL),
(6, 1, '#465d45', '#ffffff', 1, '2021-05-25 12:02:42', '2021-05-25 12:02:42', NULL),
(7, 1, '#767676', '#ffffff', 1, '2021-05-25 12:00:19', '2021-05-25 12:00:19', NULL),
(8, 1, '#7b3939', '#ffffff', 1, '2021-05-25 11:59:05', '2021-05-25 11:59:05', NULL),
(9, 1, '#5a8c8b', '#ffffff', 1, '2021-05-25 12:22:48', '2021-05-25 12:22:48', NULL),
(10, 1, '#786877', '#ffffff', 1, '2021-05-25 12:24:47', '2021-05-25 12:24:47', NULL),
(11, 4, '#955050', '#ffffff', 1, '2021-05-25 16:02:26', '2021-05-25 16:02:26', NULL),
(12, 4, '#7b3939', '#ffffff', 1, '2021-05-25 16:03:24', '2021-05-25 16:03:24', NULL),
(13, 4, '#746363', '#ffffff', 1, '2021-05-25 16:04:21', '2021-05-25 16:04:21', NULL),
(14, 2, '#7b3939', '#ffffff', 1, '2021-05-25 16:05:03', '2021-05-25 16:05:03', NULL),
(15, 2, '#8c6b8e', '#ffffff', 1, '2021-05-25 16:06:44', '2021-05-25 16:06:44', NULL),
(16, 2, '#638375', '#ffffff', 1, '2021-05-25 16:16:43', '2021-05-25 16:16:43', NULL),
(17, 2, '#646c73', '#ffffff', 1, '2021-05-25 16:17:25', '2021-05-25 16:17:25', NULL),
(18, 2, '#8e8e6b', '#ffffff', 1, '2021-05-25 16:19:01', '2021-05-25 16:19:01', NULL),
(19, 2, '#9d5d4d', '#ffffff', 1, '2021-05-25 16:19:42', '2021-05-25 16:19:42', NULL),
(20, 2, '#5d628e', '#ffffff', 1, '2021-05-25 16:20:48', '2021-05-25 16:20:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject_translations`
--

DROP TABLE IF EXISTS `subject_translations`;
CREATE TABLE IF NOT EXISTS `subject_translations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subject_translations_subject_id_locale_unique` (`subject_id`,`locale`),
  KEY `subject_translations_locale_index` (`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_translations`
--

INSERT INTO `subject_translations` (`id`, `subject_name`, `subject_id`, `locale`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '企会财', 1, 'sc', '2021-05-24 13:34:37', '2021-05-24 13:34:37', NULL),
(2, '企會財', 1, 'cn', '2021-05-24 13:34:37', '2021-05-24 13:34:37', NULL),
(3, 'Enterprise Accounting', 1, 'en', '2021-05-24 13:34:37', '2021-05-24 13:34:37', NULL),
(4, '经济', 2, 'sc', '2021-05-24 13:24:20', '2021-05-24 13:24:20', NULL),
(5, '經濟', 2, 'cn', '2021-05-24 13:24:20', '2021-05-24 13:24:20', NULL),
(6, 'Economic', 2, 'en', '2021-05-24 13:24:20', '2021-05-24 13:24:20', NULL),
(7, '通识', 3, 'sc', '2021-05-24 13:20:26', '2021-05-24 13:20:26', NULL),
(8, '通識', 3, 'cn', '2021-05-24 13:20:26', '2021-05-24 13:20:26', NULL),
(9, 'General Education', 3, 'en', '2021-05-24 13:20:26', '2021-05-24 13:20:26', NULL),
(10, '英文', 4, 'sc', '2021-05-23 19:36:29', '2021-05-23 19:36:29', NULL),
(11, '英文', 4, 'cn', '2021-05-23 19:36:29', '2021-05-23 19:36:29', NULL),
(12, 'English', 4, 'en', '2021-05-23 19:36:29', '2021-05-23 19:36:29', NULL),
(13, '英文', 5, 'sc', '2021-05-23 19:36:14', '2021-05-23 19:36:14', NULL),
(14, '英文', 5, 'cn', '2021-05-23 19:36:14', '2021-05-23 19:36:14', NULL),
(15, 'English', 5, 'en', '2021-05-23 19:36:14', '2021-05-23 19:36:14', NULL),
(16, '英文', 6, 'sc', '2021-05-23 19:24:08', '2021-05-23 19:24:08', NULL),
(17, '英文', 6, 'cn', '2021-05-23 19:24:08', '2021-05-23 19:24:08', NULL),
(18, 'English', 6, 'en', '2021-05-23 19:24:08', '2021-05-23 19:24:08', NULL),
(19, '英文', 7, 'sc', '2021-05-23 19:23:16', '2021-05-23 19:23:16', NULL),
(20, '英文', 7, 'cn', '2021-05-23 19:23:16', '2021-05-23 19:23:16', NULL),
(21, 'English', 7, 'en', '2021-05-23 19:23:16', '2021-05-23 19:23:16', NULL),
(22, 'General Education', 8, 'en', '2021-05-25 16:02:26', '2021-05-25 16:02:26', NULL),
(23, '通識', 8, 'cn', '2021-05-25 16:02:26', '2021-05-25 16:02:26', NULL),
(24, '通识', 8, 'sc', '2021-05-25 16:02:26', '2021-05-25 16:02:26', NULL),
(25, 'English', 9, 'en', '2021-05-25 16:03:24', '2021-05-25 16:03:24', NULL),
(26, '英文', 9, 'cn', '2021-05-25 16:03:24', '2021-05-25 16:03:24', NULL),
(27, '英文', 9, 'sc', '2021-05-25 16:03:24', '2021-05-25 16:03:24', NULL),
(28, 'English', 10, 'en', '2021-05-24 13:56:16', '2021-05-24 13:56:16', NULL),
(29, '數學', 10, 'cn', '2021-05-24 13:56:16', '2021-05-24 13:56:16', NULL),
(30, '英文', 10, 'sc', '2021-05-24 13:56:16', '2021-05-24 13:56:16', NULL),
(31, 'General Education', 11, 'en', '2021-05-24 13:59:17', '2021-05-24 13:59:17', NULL),
(32, '英文', 11, 'cn', '2021-05-24 13:59:17', '2021-05-24 13:59:17', NULL),
(33, '数学', 11, 'sc', '2021-05-24 13:59:17', '2021-05-24 13:59:17', NULL),
(34, 'English', 12, 'en', '2021-05-25 11:59:05', '2021-05-25 11:59:05', NULL),
(35, '英文', 12, 'cn', '2021-05-25 11:59:05', '2021-05-25 11:59:05', NULL),
(36, '英文', 12, 'sc', '2021-05-25 11:59:05', '2021-05-25 11:59:05', NULL),
(37, 'Mathematics', 13, 'en', '2021-05-25 12:00:19', '2021-05-25 12:00:19', NULL),
(38, '數學', 13, 'cn', '2021-05-25 12:00:20', '2021-05-25 12:00:20', NULL),
(39, '数学', 13, 'sc', '2021-05-25 12:00:20', '2021-05-25 12:00:20', NULL),
(40, 'Economic', 14, 'en', '2021-05-25 12:02:42', '2021-05-25 12:02:42', NULL),
(41, '經濟', 14, 'cn', '2021-05-25 12:02:42', '2021-05-25 12:02:42', NULL),
(42, '经济', 14, 'sc', '2021-05-25 12:02:42', '2021-05-25 12:02:42', NULL),
(43, 'Physical', 15, 'en', '2021-05-25 12:05:24', '2021-05-25 12:05:24', NULL),
(44, '物理', 15, 'cn', '2021-05-25 12:05:24', '2021-05-25 12:05:24', NULL),
(45, '物理', 15, 'sc', '2021-05-25 12:05:24', '2021-05-25 12:05:24', NULL),
(46, 'Chinese', 16, 'en', '2021-05-25 12:07:26', '2021-05-25 12:07:26', NULL),
(47, '中文', 16, 'cn', '2021-05-25 12:07:26', '2021-05-25 12:07:26', NULL),
(48, '中文', 16, 'sc', '2021-05-25 12:07:26', '2021-05-25 12:07:26', NULL),
(49, 'General Education', 17, 'en', '2021-05-25 12:11:00', '2021-05-25 12:11:00', NULL),
(50, '通識', 17, 'cn', '2021-05-25 12:11:00', '2021-05-25 12:11:00', NULL),
(51, '通识', 17, 'sc', '2021-05-25 12:11:00', '2021-05-25 12:11:00', NULL),
(52, 'Biological', 18, 'en', '2021-05-25 12:21:20', '2021-05-25 12:21:20', NULL),
(53, '生物', 18, 'cn', '2021-05-25 12:21:20', '2021-05-25 12:21:20', NULL),
(54, '生物', 18, 'sc', '2021-05-25 12:21:20', '2021-05-25 12:21:20', NULL),
(55, 'Chemistry', 19, 'en', '2021-05-25 12:22:48', '2021-05-25 12:22:48', NULL),
(56, '化學', 19, 'cn', '2021-05-25 12:22:48', '2021-05-25 12:22:48', NULL),
(57, '化学', 19, 'sc', '2021-05-25 12:22:48', '2021-05-25 12:22:48', NULL),
(58, 'Enterprise Accounting', 20, 'en', '2021-05-25 12:24:47', '2021-05-25 12:24:47', NULL),
(59, '企會財', 20, 'cn', '2021-05-25 12:24:47', '2021-05-25 12:24:47', NULL),
(60, '企会财', 20, 'sc', '2021-05-25 12:24:47', '2021-05-25 12:24:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_items`
--

DROP TABLE IF EXISTS `subscription_items`;
CREATE TABLE IF NOT EXISTS `subscription_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscription_items_subscription_id_stripe_plan_unique` (`subscription_id`,`stripe_plan`),
  KEY `subscription_items_stripe_id_index` (`stripe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

DROP TABLE IF EXISTS `tutors`;
CREATE TABLE IF NOT EXISTS `tutors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day_of_birth` date NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tutors_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_teach_courses`
--

DROP TABLE IF EXISTS `tutor_teach_courses`;
CREATE TABLE IF NOT EXISTS `tutor_teach_courses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_teach_subject`
--

DROP TABLE IF EXISTS `tutor_teach_subject`;
CREATE TABLE IF NOT EXISTS `tutor_teach_subject` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tutor_teach_subject_tutor_id_subject_id_unique` (`tutor_id`,`subject_id`),
  KEY `tutor_teach_subject_subject_id_foreign` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_translations`
--

DROP TABLE IF EXISTS `tutor_translations`;
CREATE TABLE IF NOT EXISTS `tutor_translations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `tutor_info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor_level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor_specialized` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor_experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tutor_translations_tutor_id_locale_unique` (`tutor_id`,`locale`),
  KEY `tutor_translations_locale_index` (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_stripe_id_index` (`stripe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `stripe_id`, `card_brand`, `card_last_four`, `trial_ends_at`) VALUES
(1, 'Super admin', 'admin@gmail.com', '2021-05-30 18:30:56', '$2y$10$eFfE.OxLiOWGUyaltRil3u1VIhc4RTs.PkMIVj5XhchkuHm5xQcIK', 'YTg8mw4OQZWNQz8W793Y8POvA0seiptmtKpOivIvWp6c7SJXdFeOnlkCGiDj', '2021-05-30 18:30:56', '2021-05-30 18:30:56', NULL, NULL, NULL, NULL, NULL),
(2, 'aa', 'admin2@gmail.com', NULL, '$2y$10$4vsSgFB8w/hnzaDb2i1PpeGPZ9BQHXvjgs1daIBwai1wD6T3XmwQ6', NULL, '2021-05-31 02:45:40', '2021-05-31 02:45:40', NULL, NULL, NULL, NULL, NULL),
(13, 'h', 'h@gmail.com', NULL, '$2y$10$87DjeWSBQqqiZeUrQWjIXuMLxXDLPe2XR4Op.Eu1WIbmOEZSQXR2O', NULL, '2021-05-31 19:08:17', '2021-05-31 19:08:17', NULL, NULL, NULL, NULL, NULL),
(14, 'hi', 'hi@gmail.com', NULL, '$2y$10$y.abqt1IqCDjqXMbJVa9HuPWPyR5LQT3a1jJsZegDoiWNo6izWXCe', NULL, '2021-05-31 19:10:36', '2021-05-31 19:10:36', NULL, NULL, NULL, NULL, NULL),
(15, 'kennyOr', 'kennyOr@gmail.com', NULL, '$2y$10$r1Km3w71NSQ4Nrm4l5Bl0.IlCkLWHkkT5JvGDQPWrsEQnsO6GUGT.', NULL, '2021-06-01 19:50:53', '2021-06-01 19:50:53', NULL, NULL, NULL, NULL, NULL),
(21, 'dang', 'dang@asd', NULL, '$2y$10$xy2N5xEzfwe2fMbcSMQmzeMpt91Xd.bP3iIUj3Rn0v/udF9YPZ/gS', NULL, '2021-06-01 19:55:01', '2021-06-01 19:55:01', NULL, NULL, NULL, NULL, NULL),
(25, 'le', 'le@gmail.com', NULL, '$2y$10$ZHjKln6yIC846EM33TZuL.IicLimqTKvCKHT1W0hbDoVKcQj7NeE2', NULL, '2021-06-01 19:56:04', '2021-06-01 19:56:04', NULL, NULL, NULL, NULL, NULL),
(26, 'black', 'black@gmail.com', NULL, '$2y$10$4oua/TZ0rVazCSvGp2KoF.qODOclw6j3wzrAutXZRvvSKUSFTvcyW', NULL, '2021-06-01 19:57:44', '2021-06-01 19:57:44', NULL, NULL, NULL, NULL, NULL),
(28, 'Mr.Kenny', 'white@gmail.com', NULL, '$2y$10$nzC6Ppl/8CF7WbUZPzVYCeTmmEWdddHzxQ2vbQH7c7HfWghZhi16i', NULL, '2021-06-01 20:00:48', '2021-06-02 03:17:19', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_likes`
--

DROP TABLE IF EXISTS `user_likes`;
CREATE TABLE IF NOT EXISTS `user_likes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `like_style` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_likes_post_id_foreign` (`post_id`),
  KEY `user_likes_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_likes`
--

INSERT INTO `user_likes` (`id`, `post_id`, `user_id`, `like_style`, `created_at`, `updated_at`) VALUES
(3, 2, 1, 1, '2021-06-01 03:41:27', '2021-06-01 03:41:27');

-- --------------------------------------------------------

--
-- Table structure for table `video_manage`
--

DROP TABLE IF EXISTS `video_manage`;
CREATE TABLE IF NOT EXISTS `video_manage` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `video_resource` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `video_manage_course_id_foreign` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_banner_background_foreign` FOREIGN KEY (`banner_background`) REFERENCES `file` (`id`);

--
-- Constraints for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD CONSTRAINT `blog_tags_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_material`
--
ALTER TABLE `course_material`
  ADD CONSTRAINT `course_material_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_material_translations`
--
ALTER TABLE `course_material_translations`
  ADD CONSTRAINT `course_material_translations_course_material_id_foreign` FOREIGN KEY (`course_material_id`) REFERENCES `course_material` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_schedules`
--
ALTER TABLE `course_schedules`
  ADD CONSTRAINT `course_schedules_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_schedules_study_session_id_foreign` FOREIGN KEY (`study_session_id`) REFERENCES `study_sessions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_translations`
--
ALTER TABLE `course_translations`
  ADD CONSTRAINT `course_translations_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_videos`
--
ALTER TABLE `course_videos`
  ADD CONSTRAINT `course_videos_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_video_translations`
--
ALTER TABLE `course_video_translations`
  ADD CONSTRAINT `course_video_translations_course_video_id_foreign` FOREIGN KEY (`course_video_id`) REFERENCES `video_manage` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD CONSTRAINT `shopping_carts_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `shopping_carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD CONSTRAINT `student_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_courses_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_schedules`
--
ALTER TABLE `student_schedules`
  ADD CONSTRAINT `student_schedules_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_schedules_study_session_id_foreign` FOREIGN KEY (`study_session_id`) REFERENCES `study_sessions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_certificate_id_foreign` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subject_translations`
--
ALTER TABLE `subject_translations`
  ADD CONSTRAINT `subject_translations_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tutors`
--
ALTER TABLE `tutors`
  ADD CONSTRAINT `tutors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tutor_teach_subject`
--
ALTER TABLE `tutor_teach_subject`
  ADD CONSTRAINT `tutor_teach_subject_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `tutor_teach_subject_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`);

--
-- Constraints for table `tutor_translations`
--
ALTER TABLE `tutor_translations`
  ADD CONSTRAINT `tutor_translations_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_likes`
--
ALTER TABLE `user_likes`
  ADD CONSTRAINT `user_likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `video_manage`
--
ALTER TABLE `video_manage`
  ADD CONSTRAINT `video_manage_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
