-- Adminer 4.7.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Super Admin' COMMENT 'Super Admin|Admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `admins` (`id`, `email`, `password`, `name`, `phone_no`, `avatar`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'swapon.ahamed@gmail.com',	'$2y$10$DZqSg8wdpYgDRJyAIsCRAO3PxBtVmkXn8PcvSDJWQtqHo2hcm.cdC',	'Swapon Ahamed',	'01726919674',	NULL,	'Super Admin',	'XrWBcOvVQEwyX2tjI5IRE6qfnsoZVcbF5TCT5ZXTfzBNRKybIpENEQjhspMn',	'2020-02-09 10:42:15',	'2020-02-10 01:38:44');

DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `questionoption_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempt` tinyint(3) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `answers` (`id`, `user_id`, `question_id`, `questionoption_id`, `ip_address`, `attempt`, `created_at`, `updated_at`) VALUES
(42,	NULL,	3,	11,	'127.0.0.1',	NULL,	'2020-03-20 11:50:44',	'2020-03-20 11:50:44'),
(43,	NULL,	2,	6,	'127.0.0.1',	NULL,	'2020-03-20 11:50:47',	'2020-03-20 11:50:47'),
(44,	NULL,	1,	1,	'127.0.0.1',	NULL,	'2020-03-20 11:50:51',	'2020-03-20 11:50:51'),
(45,	NULL,	2,	5,	'127.0.0.1',	NULL,	'2020-03-20 11:51:02',	'2020-03-20 11:51:02'),
(46,	NULL,	1,	1,	'127.0.0.1',	NULL,	'2020-03-20 11:51:05',	'2020-03-20 11:51:05'),
(47,	NULL,	3,	10,	'127.0.0.1',	NULL,	'2020-03-20 11:51:09',	'2020-03-20 11:51:09'),
(48,	NULL,	2,	5,	'127.0.0.1',	NULL,	'2020-03-20 11:51:59',	'2020-03-20 11:51:59'),
(49,	NULL,	1,	1,	'127.0.0.1',	NULL,	'2020-03-20 11:52:06',	'2020-03-20 11:52:06'),
(50,	NULL,	3,	11,	'127.0.0.1',	NULL,	'2020-03-20 11:52:09',	'2020-03-20 11:52:09'),
(51,	NULL,	2,	6,	'127.0.0.1',	NULL,	'2020-03-20 11:52:47',	'2020-03-20 11:52:47'),
(52,	NULL,	1,	2,	'127.0.0.1',	NULL,	'2020-03-20 11:53:01',	'2020-03-20 11:53:01'),
(53,	NULL,	3,	11,	'127.0.0.1',	NULL,	'2020-03-20 11:53:08',	'2020-03-20 11:53:08'),
(54,	NULL,	1,	2,	'127.0.0.1',	NULL,	'2020-03-20 11:53:35',	'2020-03-20 11:53:35'),
(55,	NULL,	3,	11,	'127.0.0.1',	NULL,	'2020-03-20 11:53:47',	'2020-03-20 11:53:47'),
(56,	NULL,	2,	6,	'127.0.0.1',	NULL,	'2020-03-20 11:53:56',	'2020-03-20 11:53:56'),
(57,	NULL,	2,	7,	'127.0.0.1',	NULL,	'2020-03-20 11:54:20',	'2020-03-20 11:54:20'),
(58,	NULL,	3,	10,	'127.0.0.1',	NULL,	'2020-03-20 11:54:33',	'2020-03-20 11:54:33'),
(59,	NULL,	1,	1,	'127.0.0.1',	NULL,	'2020-03-20 11:54:41',	'2020-03-20 11:54:41'),
(60,	NULL,	3,	11,	'127.0.0.1',	NULL,	'2020-03-20 11:55:02',	'2020-03-20 11:55:02'),
(61,	NULL,	1,	1,	'127.0.0.1',	NULL,	'2020-03-20 11:55:37',	'2020-03-20 11:55:37'),
(62,	NULL,	2,	6,	'127.0.0.1',	NULL,	'2020-03-20 11:55:42',	'2020-03-20 11:55:42'),
(63,	NULL,	2,	6,	'127.0.0.1',	NULL,	'2020-03-20 11:56:32',	'2020-03-20 11:56:32'),
(64,	NULL,	1,	1,	'127.0.0.1',	NULL,	'2020-03-20 11:56:39',	'2020-03-20 11:56:39'),
(65,	NULL,	3,	11,	'127.0.0.1',	NULL,	'2020-03-20 11:56:45',	'2020-03-20 11:56:45'),
(66,	NULL,	1,	1,	'127.0.0.1',	NULL,	'2020-03-20 11:57:31',	'2020-03-20 11:57:31'),
(67,	NULL,	3,	12,	'127.0.0.1',	NULL,	'2020-03-20 11:57:37',	'2020-03-20 11:57:37'),
(68,	NULL,	2,	7,	'127.0.0.1',	NULL,	'2020-03-20 11:57:43',	'2020-03-20 11:57:43'),
(69,	NULL,	1,	1,	'127.0.0.1',	NULL,	'2020-03-20 11:58:06',	'2020-03-20 11:58:06'),
(70,	NULL,	3,	11,	'127.0.0.1',	NULL,	'2020-03-20 11:58:10',	'2020-03-20 11:58:10'),
(71,	NULL,	2,	6,	'127.0.0.1',	NULL,	'2020-03-20 11:58:18',	'2020-03-20 11:58:18'),
(72,	NULL,	2,	6,	'127.0.0.1',	NULL,	'2020-03-20 23:15:34',	'2020-03-20 23:15:34'),
(73,	NULL,	3,	11,	'127.0.0.1',	NULL,	'2020-03-20 23:15:37',	'2020-03-20 23:15:37'),
(74,	NULL,	1,	2,	'127.0.0.1',	NULL,	'2020-03-20 23:15:41',	'2020-03-20 23:15:41'),
(75,	NULL,	3,	10,	'127.0.0.1',	NULL,	'2020-03-20 23:59:11',	'2020-03-20 23:59:11'),
(76,	NULL,	1,	1,	'127.0.0.1',	NULL,	'2020-03-20 23:59:42',	'2020-03-20 23:59:42'),
(77,	NULL,	2,	7,	'127.0.0.1',	NULL,	'2020-03-20 23:59:50',	'2020-03-20 23:59:50'),
(78,	NULL,	1,	1,	'127.0.0.1',	NULL,	'2020-03-21 00:03:40',	'2020-03-21 00:03:40'),
(79,	NULL,	3,	9,	'127.0.0.1',	NULL,	'2020-03-21 00:03:45',	'2020-03-21 00:03:45'),
(80,	NULL,	2,	6,	'127.0.0.1',	NULL,	'2020-03-21 00:03:52',	'2020-03-21 00:03:52'),
(81,	NULL,	2,	6,	'127.0.0.1',	NULL,	'2020-03-21 00:05:32',	'2020-03-21 00:05:32'),
(82,	NULL,	3,	11,	'127.0.0.1',	NULL,	'2020-03-21 00:05:57',	'2020-03-21 00:05:57'),
(83,	NULL,	1,	1,	'127.0.0.1',	NULL,	'2020-03-21 00:06:00',	'2020-03-21 00:06:00'),
(84,	NULL,	2,	6,	'127.0.0.1',	NULL,	'2020-03-21 00:07:19',	'2020-03-21 00:07:19'),
(85,	NULL,	3,	11,	'127.0.0.1',	NULL,	'2020-03-21 00:07:23',	'2020-03-21 00:07:23'),
(86,	NULL,	1,	1,	'127.0.0.1',	NULL,	'2020-03-21 00:07:27',	'2020-03-21 00:07:27'),
(87,	NULL,	4,	13,	'127.0.0.1',	NULL,	'2020-03-21 07:37:53',	'2020-03-21 07:37:53'),
(88,	NULL,	3,	11,	'127.0.0.1',	NULL,	'2020-03-21 07:38:00',	'2020-03-21 07:38:00'),
(89,	NULL,	2,	6,	'127.0.0.1',	NULL,	'2020-03-21 07:38:05',	'2020-03-21 07:38:05'),
(90,	NULL,	1,	2,	'127.0.0.1',	NULL,	'2020-03-21 07:38:08',	'2020-03-21 07:38:08'),
(91,	NULL,	4,	14,	'127.0.0.1',	NULL,	'2020-03-21 08:06:20',	'2020-03-21 08:06:20'),
(92,	NULL,	3,	11,	'127.0.0.1',	NULL,	'2020-03-21 08:06:24',	'2020-03-21 08:06:24'),
(93,	NULL,	2,	6,	'127.0.0.1',	NULL,	'2020-03-21 08:06:29',	'2020-03-21 08:06:29'),
(94,	NULL,	1,	1,	'127.0.0.1',	NULL,	'2020-03-21 08:06:33',	'2020-03-21 08:06:33');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(11,	'2014_10_12_000000_create_users_table',	2),
(20,	'2019_12_16_074526_create_admins_table',	9),
(21,	'2019_08_19_000000_create_failed_jobs_table',	10),
(22,	'2020_03_20_041820_questionsets',	10),
(23,	'2020_03_20_042351_questions',	10),
(24,	'2020_03_20_042412_questionoptions',	10),
(29,	'2020_03_20_065125_temps',	12),
(30,	'2020_03_20_042435_answers',	13),
(37,	'2020_03_21_054801_sections',	17),
(38,	'2020_03_21_064420_sclasses',	17),
(39,	'2020_03_21_061642_sectionquestionsets',	18);

DROP TABLE IF EXISTS `questionoptions`;
CREATE TABLE `questionoptions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correct` tinyint(3) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `questionoptions` (`id`, `question_id`, `title`, `correct`, `created_at`, `updated_at`) VALUES
(1,	1,	'Dhaka',	1,	'2020-03-20 05:03:44',	'2020-03-20 05:03:44'),
(2,	1,	'Chattagram',	NULL,	'2020-03-20 05:04:29',	'2020-03-20 05:04:29'),
(3,	1,	'Rajshahi',	NULL,	'2020-03-20 05:04:57',	'2020-03-20 05:04:57'),
(4,	1,	'Khulna',	NULL,	'2020-03-20 05:05:21',	'2020-03-20 05:05:21'),
(5,	2,	'Calcatta',	NULL,	'2020-03-20 05:06:07',	'2020-03-20 05:06:07'),
(6,	2,	'Delhi',	1,	'2020-03-20 05:06:28',	'2020-03-20 05:06:28'),
(7,	2,	'Mumbai',	NULL,	'2020-03-20 05:06:50',	'2020-03-20 05:06:50'),
(8,	2,	'Chennai',	NULL,	'2020-03-20 05:07:52',	'2020-03-20 05:07:52'),
(9,	3,	'Osaka',	NULL,	'2020-03-20 05:08:54',	'2020-03-20 05:08:54'),
(10,	3,	'Kyoto',	NULL,	'2020-03-20 05:09:33',	'2020-03-20 05:09:33'),
(11,	3,	'Tokyo',	1,	'2020-03-20 05:10:07',	'2020-03-20 05:10:07'),
(12,	3,	'Hiroshima',	NULL,	'2020-03-20 05:10:37',	'2020-03-20 05:10:37'),
(13,	4,	'Kathmandu',	1,	'2020-03-21 07:37:29',	'2020-03-21 07:37:29'),
(14,	4,	'Pokhara',	NULL,	'2020-03-21 07:37:29',	'2020-03-21 07:37:29'),
(15,	4,	'Hetuada',	NULL,	'2020-03-21 07:37:29',	'2020-03-21 07:37:29'),
(16,	4,	'Janakpur',	NULL,	'2020-03-21 07:37:29',	'2020-03-21 07:37:29');

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `questionset_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `questions` (`id`, `questionset_id`, `title`, `created_at`, `updated_at`) VALUES
(1,	1,	'What is the capital of Bangladesh?',	'2020-03-20 05:01:35',	'2020-03-20 05:01:35'),
(2,	1,	'What is the capital of India',	'2020-03-20 05:02:09',	'2020-03-20 05:02:09'),
(3,	1,	'What is the capital of Japan',	'2020-03-20 05:02:37',	'2020-03-20 05:02:37'),
(4,	1,	'What is the Capital of Nepal?',	'2020-03-21 07:35:46',	'2020-03-21 07:35:46');

DROP TABLE IF EXISTS `questionsets`;
CREATE TABLE `questionsets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `questionsets` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1,	'Set A',	'2020-03-20 05:00:36',	'2020-03-20 12:39:52'),
(3,	'Set B',	'2020-03-20 12:49:47',	'2020-03-20 12:49:47'),
(4,	'Set C',	'2020-03-20 12:50:41',	'2020-03-20 12:50:41');

DROP TABLE IF EXISTS `sclasses`;
CREATE TABLE `sclasses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sclasses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'Six',	'2020-03-21 06:47:58',	'2020-03-21 06:47:58'),
(2,	'Seven',	'2020-03-21 06:48:12',	'2020-03-21 06:48:12');

DROP TABLE IF EXISTS `sectionquestionsets`;
CREATE TABLE `sectionquestionsets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sclass_id` int(10) unsigned DEFAULT NULL,
  `section_id` int(10) unsigned DEFAULT NULL,
  `questionset_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sectionquestionsets` (`id`, `sclass_id`, `section_id`, `questionset_id`, `created_at`, `updated_at`) VALUES
(17,	2,	3,	3,	'2020-03-21 06:03:35',	'2020-03-21 06:03:35'),
(18,	2,	4,	3,	'2020-03-21 06:03:35',	'2020-03-21 06:03:35'),
(23,	1,	1,	1,	'2020-03-21 07:32:48',	'2020-03-21 07:32:48'),
(24,	1,	2,	1,	'2020-03-21 07:32:48',	'2020-03-21 07:32:48'),
(25,	2,	3,	1,	'2020-03-21 07:33:03',	'2020-03-21 07:33:03'),
(26,	2,	4,	1,	'2020-03-21 07:33:03',	'2020-03-21 07:33:03');

DROP TABLE IF EXISTS `sections`;
CREATE TABLE `sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sclass_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sections` (`id`, `sclass_id`, `name`, `created_at`, `updated_at`) VALUES
(1,	1,	'Six A',	'2020-03-21 06:48:46',	'2020-03-21 06:48:46'),
(2,	1,	'Six B',	'2020-03-21 06:49:03',	'2020-03-21 06:49:03'),
(3,	2,	'Seven A',	'2020-03-21 06:49:28',	'2020-03-21 06:49:28'),
(4,	2,	'Seven B',	'2020-03-21 06:49:45',	'2020-03-21 06:49:45');

DROP TABLE IF EXISTS `temps`;
CREATE TABLE `temps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempt` tinyint(3) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) unsigned NOT NULL COMMENT 'Division table id',
  `district_id` int(10) unsigned NOT NULL COMMENT 'District table id',
  `ip_address` text COLLATE utf8mb4_unicode_ci,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shippint_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '0=inactive|1=active|2=banned',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_phone_no_unique` (`phone_no`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `phone_no`, `email`, `street_address`, `division_id`, `district_id`, `ip_address`, `avatar`, `shippint_address`, `email_verified_at`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(17,	'swapon',	'ahamed',	'swaponahamed',	'$2y$10$DZqSg8wdpYgDRJyAIsCRAO3PxBtVmkXn8PcvSDJWQtqHo2hcm.cdC',	'343242',	'manirujjamanakash@gmail.com',	'Nikinja',	2,	2,	NULL,	NULL,	NULL,	NULL,	1,	NULL,	'2020-02-01 09:57:30',	'2020-02-01 10:23:10'),
(20,	'swapon',	'ahamed',	'swaponahamed2',	'$2y$10$M6jmV4Z6274HxCxdvMoz9OR/4o/o67tRkO3JCrcD8wsOu1wy28d6G',	'01726919674',	'swapon.ahamed@gmail.com',	'Nikinja',	2,	2,	'127.0.0.1',	NULL,	'sdasdas',	NULL,	1,	NULL,	'2020-02-01 09:57:30',	'2020-02-02 08:49:11');

-- 2020-03-21 14:08:10
