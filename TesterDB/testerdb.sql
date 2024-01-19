-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 13, 2024 at 07:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_of_preTest` datetime NOT NULL,
  `date_of_postTest` datetime NOT NULL,
  `trainer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `date_of_preTest`, `date_of_postTest`, `trainer_id`, `created_at`, `updated_at`) VALUES
(48, 'html', '2023-12-31 00:00:00', '2023-12-30 00:00:00', NULL, '2023-12-31 05:11:57', '2023-12-31 05:11:57'),
(49, 'css', '2023-12-26 00:00:00', '2023-12-29 00:00:00', NULL, '2023-12-31 07:39:55', '2023-12-31 07:39:55'),
(55, 'laravel', '2024-01-31 00:00:00', '2024-01-24 00:00:00', NULL, '2024-01-02 07:19:04', '2024-01-02 07:19:04'),
(65, 'laravel bootcamp', '2024-01-08 15:27:00', '2024-01-19 15:26:00', 6, '2024-01-02 07:37:02', '2024-01-13 12:24:12'),
(77, 'programming language', '2024-01-12 10:00:00', '2024-01-12 01:00:00', 6, '2024-01-08 07:20:55', '2024-01-08 07:20:55'),
(80, 'SQL', '2024-01-11 16:10:00', '2024-01-11 12:07:00', 6, '2024-01-10 13:13:06', '2024-01-10 13:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `trainee_id` bigint(20) UNSIGNED NOT NULL,
  `exam_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `exam_id`, `trainee_id`, `exam_status`, `created_at`, `updated_at`) VALUES
(40, 77, 12, 'pre', '2024-01-08 16:15:17', '2024-01-08 16:15:17'),
(41, 77, 12, 'post', '2024-01-09 08:35:28', '2024-01-09 08:35:28'),
(42, 80, 15, 'pre', '2024-01-10 13:21:11', '2024-01-10 13:21:11'),
(43, 80, 15, 'post', '2024-01-10 13:22:00', '2024-01-10 13:22:00'),
(44, 80, 12, 'pre', '2024-01-10 14:10:11', '2024-01-10 14:10:11'),
(45, 80, 12, 'post', '2024-01-10 14:10:44', '2024-01-10 14:10:44'),
(46, 80, 16, 'pre', '2024-01-11 11:38:10', '2024-01-11 11:38:10'),
(47, 80, 16, 'post', '2024-01-11 11:39:02', '2024-01-11 11:39:02'),
(48, 80, 19, 'pre', '2024-01-11 12:37:01', '2024-01-11 12:37:01'),
(49, 80, 19, 'post', '2024-01-11 12:37:54', '2024-01-11 12:37:54'),
(50, 80, 20, 'pre', '2024-01-13 13:19:37', '2024-01-13 13:19:37'),
(51, 80, 20, 'post', '2024-01-13 13:20:25', '2024-01-13 13:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `exam_result_details`
--

CREATE TABLE `exam_result_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_result_id` bigint(20) UNSIGNED NOT NULL,
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_result_details`
--

INSERT INTO `exam_result_details` (`id`, `exam_result_id`, `option_id`, `created_at`, `updated_at`) VALUES
(18, 40, 80, '2024-01-08 16:15:17', '2024-01-08 16:15:17'),
(19, 40, 84, '2024-01-08 16:15:17', '2024-01-08 16:15:17'),
(20, 40, 91, '2024-01-08 16:15:17', '2024-01-08 16:15:17'),
(21, 40, 95, '2024-01-08 16:15:17', '2024-01-08 16:15:17'),
(22, 41, 80, '2024-01-09 08:35:28', '2024-01-09 08:35:28'),
(23, 41, 84, '2024-01-09 08:35:28', '2024-01-09 08:35:28'),
(24, 41, 90, '2024-01-09 08:35:28', '2024-01-09 08:35:28'),
(25, 41, 92, '2024-01-09 08:35:28', '2024-01-09 08:35:28'),
(26, 42, 128, '2024-01-10 13:21:11', '2024-01-10 13:21:11'),
(27, 42, 132, '2024-01-10 13:21:11', '2024-01-10 13:21:11'),
(28, 42, 135, '2024-01-10 13:21:11', '2024-01-10 13:21:11'),
(29, 42, 136, '2024-01-10 13:21:11', '2024-01-10 13:21:11'),
(30, 43, 128, '2024-01-10 13:22:00', '2024-01-10 13:22:00'),
(31, 43, 131, '2024-01-10 13:22:00', '2024-01-10 13:22:00'),
(32, 43, 135, '2024-01-10 13:22:00', '2024-01-10 13:22:00'),
(33, 43, 136, '2024-01-10 13:22:00', '2024-01-10 13:22:00'),
(34, 44, 128, '2024-01-10 14:10:11', '2024-01-10 14:10:11'),
(35, 44, 133, '2024-01-10 14:10:11', '2024-01-10 14:10:11'),
(36, 44, 134, '2024-01-10 14:10:11', '2024-01-10 14:10:11'),
(37, 44, 136, '2024-01-10 14:10:11', '2024-01-10 14:10:11'),
(38, 45, 128, '2024-01-10 14:10:44', '2024-01-10 14:10:44'),
(39, 45, 131, '2024-01-10 14:10:44', '2024-01-10 14:10:44'),
(40, 45, 135, '2024-01-10 14:10:44', '2024-01-10 14:10:44'),
(41, 45, 136, '2024-01-10 14:10:44', '2024-01-10 14:10:44'),
(42, 46, 128, '2024-01-11 11:38:10', '2024-01-11 11:38:10'),
(43, 46, 132, '2024-01-11 11:38:10', '2024-01-11 11:38:10'),
(44, 46, 134, '2024-01-11 11:38:10', '2024-01-11 11:38:10'),
(45, 46, 136, '2024-01-11 11:38:10', '2024-01-11 11:38:10'),
(46, 47, 128, '2024-01-11 11:39:02', '2024-01-11 11:39:02'),
(47, 47, 131, '2024-01-11 11:39:02', '2024-01-11 11:39:02'),
(48, 47, 135, '2024-01-11 11:39:02', '2024-01-11 11:39:02'),
(49, 47, 136, '2024-01-11 11:39:02', '2024-01-11 11:39:02'),
(50, 48, 128, '2024-01-11 12:37:01', '2024-01-11 12:37:01'),
(51, 48, 132, '2024-01-11 12:37:01', '2024-01-11 12:37:01'),
(52, 48, 135, '2024-01-11 12:37:01', '2024-01-11 12:37:01'),
(53, 48, 136, '2024-01-11 12:37:01', '2024-01-11 12:37:01'),
(54, 49, 128, '2024-01-11 12:37:54', '2024-01-11 12:37:54'),
(55, 49, 131, '2024-01-11 12:37:54', '2024-01-11 12:37:54'),
(56, 49, 135, '2024-01-11 12:37:54', '2024-01-11 12:37:54'),
(57, 49, 136, '2024-01-11 12:37:54', '2024-01-11 12:37:54'),
(58, 50, 128, '2024-01-13 13:19:37', '2024-01-13 13:19:37'),
(59, 50, 131, '2024-01-13 13:19:37', '2024-01-13 13:19:37'),
(60, 50, 135, '2024-01-13 13:19:37', '2024-01-13 13:19:37'),
(61, 50, 136, '2024-01-13 13:19:37', '2024-01-13 13:19:37'),
(62, 51, 128, '2024-01-13 13:20:25', '2024-01-13 13:20:25'),
(63, 51, 132, '2024-01-13 13:20:25', '2024-01-13 13:20:25'),
(64, 51, 134, '2024-01-13 13:20:25', '2024-01-13 13:20:25'),
(65, 51, 136, '2024-01-13 13:20:25', '2024-01-13 13:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_28_061435_edit_user_table', 1),
(6, '2023_12_28_062843_add_columns_to_users_table', 2),
(7, '2023_12_28_083845_create-trainees-tables', 3),
(8, '2023_12_28_085828_create-trainer-tables', 4),
(9, '2023_12_28_093900_create-program-table', 5),
(10, '2023_12_28_095853_create-test-table', 6),
(12, '2023_12_28_102209_edit_test_table_name', 7),
(13, '2023_12_28_103756_create_exame_result_table', 8),
(14, '2023_12_28_104550_create_questions_table', 9),
(15, '2023_12_28_105104_create_options_table', 10),
(16, '2023_12_28_105714_create_exam_result_details_table', 11),
(17, '2023_12_29_170851_edit_trainers-table', 12),
(18, '2023_12_29_171040_edit_trainers-table', 13),
(19, '2023_12_29_171642_edit_trainers-table', 14),
(20, '2023_12_29_172625_edit_trainers-table', 15),
(21, '2023_12_29_214243_edit_trainee-table', 16),
(22, '2023_12_29_215113_delete_column_trainee-table', 17),
(23, '2023_12_29_215413_delete_column_trainee-table', 18),
(24, '2023_12_31_062043_edit_options-table', 19),
(25, '2014_10_12_100000_create_password_resets_table', 20),
(26, '2024_01_02_221134_rename_exam_reult_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `option` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `status`, `question_id`, `created_at`, `updated_at`, `option`) VALUES
(28, 1, 39, '2023-12-31 05:11:57', '2023-12-31 05:11:57', 'strucutre language'),
(29, 0, 39, '2023-12-31 05:11:57', '2023-12-31 05:11:57', 'sql language'),
(30, 0, 40, '2023-12-31 05:11:57', '2023-12-31 05:11:57', 'programming language'),
(31, 1, 40, '2023-12-31 05:11:57', '2023-12-31 05:11:57', 'style language'),
(32, 1, 41, '2023-12-31 05:11:57', '2023-12-31 05:11:57', 'programming language'),
(33, 0, 41, '2023-12-31 05:11:57', '2023-12-31 05:11:57', 'style language'),
(42, 0, 45, '2024-01-02 07:19:04', '2024-01-02 07:19:04', 'programming language'),
(43, 0, 45, '2024-01-02 07:19:04', '2024-01-02 07:19:04', 'styling language'),
(44, 0, 46, '2024-01-02 07:37:02', '2024-01-13 12:24:12', 'programming framwork'),
(45, 1, 46, '2024-01-02 07:37:02', '2024-01-13 12:24:12', 'styling language'),
(80, 1, 58, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'computer language'),
(81, 0, 58, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'human language'),
(82, 0, 58, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'machan language'),
(83, 0, 58, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'none '),
(84, 1, 59, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'python'),
(85, 0, 59, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'C#'),
(86, 0, 59, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'C++'),
(87, 0, 59, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'java'),
(88, 0, 60, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'python'),
(89, 0, 60, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'C#'),
(90, 1, 60, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'C++'),
(91, 0, 60, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'java'),
(92, 1, 61, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'python'),
(93, 0, 61, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'C++'),
(94, 0, 61, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'visual basic'),
(95, 0, 61, '2024-01-08 07:20:55', '2024-01-08 07:20:55', 'PHP'),
(128, 1, 70, '2024-01-10 13:13:06', '2024-01-10 13:13:06', 'structure query language '),
(129, 0, 70, '2024-01-10 13:13:06', '2024-01-10 13:13:06', 'query language'),
(130, 0, 70, '2024-01-10 13:13:06', '2024-01-10 13:13:06', 'structure language'),
(131, 1, 71, '2024-01-10 13:13:06', '2024-01-10 13:13:06', 'sql server'),
(132, 0, 71, '2024-01-10 13:13:06', '2024-01-10 13:13:06', 'my sql'),
(133, 0, 71, '2024-01-10 13:13:06', '2024-01-10 13:13:06', 'sql lite'),
(134, 0, 72, '2024-01-10 13:13:06', '2024-01-10 13:13:06', 'yes'),
(135, 1, 72, '2024-01-10 13:13:06', '2024-01-10 13:13:06', 'no'),
(136, 1, 73, '2024-01-10 13:13:06', '2024-01-10 13:13:06', 'condition'),
(137, 0, 73, '2024-01-10 13:13:06', '2024-01-10 13:13:06', 'if condition'),
(138, 0, 73, '2024-01-10 13:13:06', '2024-01-10 13:13:06', 'filtering');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `trainer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name`, `description`, `trainer_id`, `created_at`, `updated_at`) VALUES
(2, 'مخيم تطوير تطبيقات الويب', 'مخيم لتطوير قدرات الشباب', 5, '2023-12-30 14:53:00', '2023-12-30 14:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `exam_id`, `created_at`, `updated_at`) VALUES
(39, 'what is html language', 48, '2023-12-31 05:11:57', '2023-12-31 05:11:57'),
(40, 'what is css', 48, '2023-12-31 05:11:57', '2023-12-31 05:11:57'),
(41, 'what is c++', 48, '2023-12-31 05:11:57', '2023-12-31 05:11:57'),
(42, 'what css ', 49, '2023-12-31 07:39:55', '2023-12-31 07:39:55'),
(45, 'what is laravel framwork', 55, '2024-01-02 07:19:04', '2024-01-02 07:19:04'),
(46, 'what is laravel', 65, '2024-01-02 07:37:02', '2024-01-10 21:10:56'),
(58, 'what is programming language', 77, '2024-01-08 07:20:55', '2024-01-08 07:20:55'),
(59, 'what is the name of the latest programming language', 77, '2024-01-08 07:20:55', '2024-01-08 07:20:55'),
(60, 'what is the more secure language', 77, '2024-01-08 07:20:55', '2024-01-08 07:20:55'),
(61, 'what is the easiest language ', 77, '2024-01-08 07:20:55', '2024-01-08 07:20:55'),
(70, 'what is sql ', 80, '2024-01-10 13:13:06', '2024-01-10 13:13:06'),
(71, 'most poplar DBMS ', 80, '2024-01-10 13:13:06', '2024-01-10 13:13:06'),
(72, 'mongo is sql database', 80, '2024-01-10 13:13:06', '2024-01-10 13:13:06'),
(73, 'what is the function of where key word', 80, '2024-01-10 13:13:06', '2024-01-10 13:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `trainees`
--

CREATE TABLE `trainees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainees`
--

INSERT INTO `trainees` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 17, '2023-12-30 13:45:51', '2023-12-30 13:45:51'),
(14, 19, '2024-01-07 08:28:47', '2024-01-07 08:28:47'),
(15, 20, '2024-01-10 13:16:02', '2024-01-10 13:16:02'),
(16, 21, '2024-01-11 08:40:39', '2024-01-11 08:40:39'),
(19, 22, '2024-01-11 12:34:44', '2024-01-11 12:34:44'),
(20, 23, '2024-01-12 19:24:49', '2024-01-12 19:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 14, '2023-12-30 13:45:00', '2023-12-30 13:45:00'),
(6, 15, '2023-12-30 13:45:27', '2023-12-30 13:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_name` varchar(255) NOT NULL,
  `gender` char(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_name`, `gender`, `phone`, `type`) VALUES
(14, 'محمد مزهر عمر', 'muhmmed711300411@gmail.com', NULL, '$2y$12$Np1d5nQD/feNy9bAsiXCqOn/6DiSZFA0gLD4pmkVXOaD6.i45DLxq', NULL, '2023-12-30 13:44:23', '2023-12-30 13:45:00', '0776533887', 'Male', '0776533887', 'admin'),
(15, 'محمد خالد بن حازم', 'mk@outlook.sa', NULL, '$2y$12$cLDZhVsNJi5cwShZWMU3bu0IgJBy6jc/NPBAZ1u5zDrrEXFHT0cpS', NULL, '2023-12-30 13:45:27', '2023-12-30 13:45:27', '0770458277', 'Male', '0770458277', 'trainer'),
(17, 'حمود العطاس', 'hmood@gmail.com', NULL, '$2y$12$v/dmz9wloFwr5RYhx5OfZeATshT4A8MqfkGBb2e4soOYYxsuMphRa', NULL, '2023-12-30 13:45:51', '2023-12-30 13:45:51', '711300411', 'Male', '0772536247', 'trainee'),
(19, 'صادق علي طالب بافرج', 'sadeg@gmail.com', NULL, '$2y$12$KekU1R5EJwcra41qajemJO5ChZs0VVo2jKrcDMBwgEuCZk/yzyYTS', NULL, '2024-01-07 08:28:47', '2024-01-07 08:28:47', '777274477', 'Male', '777274477', 'trainee'),
(20, 'علي بن شعيب', 'ali@outlook.sa', NULL, '$2y$12$2P4VOsq6MEZyLNv9G.q1xuscYb6hIYd0vSciu56oCsS4gNCA9rSWa', NULL, '2024-01-10 13:16:02', '2024-01-10 13:16:02', '778899456', 'Male', '778899456', 'trainee'),
(21, 'تركي احمد القثمي', 'tr@gamil.com', NULL, '$2y$12$.HqRecU.E38Lau/JuY1uu.f51Zk0QW6sHO/Mw8gWmDNsQxV4Bcq/S', NULL, '2024-01-11 08:40:39', '2024-01-11 11:33:55', '711300411', 'Male', '123456789', 'trainee'),
(22, 'عبدالرحمن بهيان', 'abd@outlook.sa', NULL, '$2y$12$tCF.DeOPFZjfFDJ02I4MMOXtxzZRgeqz89JFSSFNnhdCvSwNwQ5u2', NULL, '2024-01-11 12:34:43', '2024-01-11 12:34:43', '147852369', 'Male', '147852369', 'trainee'),
(23, 'احمد علي الشاطري', 'ahmed@gmail.com', NULL, '$2y$12$Q6XnmiRiYkrDyegTodGIJeYcTwc.KnF3qF4dsFSlk1B5Iv4RaAaBS', NULL, '2024-01-12 19:24:49', '2024-01-12 19:24:49', '776533887', 'Male', '776533887', 'trainee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_trainer_id_foreign` (`trainer_id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_result_exam_id_foreign` (`exam_id`),
  ADD KEY `exam_result_trainee_id_foreign` (`trainee_id`);

--
-- Indexes for table `exam_result_details`
--
ALTER TABLE `exam_result_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_result_details_option_id_foreign` (`option_id`),
  ADD KEY `exam_result_id` (`exam_result_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_question_id_foreign` (`question_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programs_trainer_id_foreign` (`trainer_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `trainees`
--
ALTER TABLE `trainees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trainees_user_id_unique` (`user_id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trainer_user_id_unique` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `exam_result_details`
--
ALTER TABLE `exam_result_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `trainees`
--
ALTER TABLE `trainees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `test_trainer_id_foreign` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD CONSTRAINT `exam_result_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_result_trainee_id_foreign` FOREIGN KEY (`trainee_id`) REFERENCES `trainees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_result_details`
--
ALTER TABLE `exam_result_details`
  ADD CONSTRAINT `exam_result_details_ibfk_1` FOREIGN KEY (`exam_result_id`) REFERENCES `exam_results` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_result_details_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_trainer_id_foreign` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trainees`
--
ALTER TABLE `trainees`
  ADD CONSTRAINT `trainees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trainers`
--
ALTER TABLE `trainers`
  ADD CONSTRAINT `trainer_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
