-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2025 at 07:17 PM
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
-- Database: `laravel_ffd`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `diabetes_medications` varchar(20) DEFAULT NULL,
  `weight_loss` varchar(20) DEFAULT NULL,
  `cholesterol_medications` varchar(20) DEFAULT NULL,
  `hypertension_medications` varchar(20) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `diabetes_medications`, `weight_loss`, `cholesterol_medications`, `hypertension_medications`, `status`, `created_by`, `updated_by`, `status_updated_by`, `created_by_ip`, `updated_by_ip`, `status_updated_by_ip`, `created_at`, `updated_at`) VALUES
(1, 'About the Program', 'Your employees are your most valuable asset. Our Corporate Wellness Program is built to help them thrive physically, mentally, and emotionally so your organization can perform at its best.', '/storage/uploads/about-us/45416271.png', '17000', '450000', '3000', '1300', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:41:15', '2025-07-31 19:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `module_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `browser` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `module_name`, `module_id`, `action`, `description`, `ip_address`, `user_agent`, `browser`, `url`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Contact', 1, 'Created', '{\"address\":\"Flat No. 05, Girikrupa, Erandawane, Pune \\u2013 411004\",\"phone\":\"8855955012\",\"email\":\"sujeet.bandamwar@freedomfromdiabetes.org\",\"map\":\"NA\",\"facebook\":null,\"twitter\":null,\"instagram\":null,\"linkedin\":null,\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-30T19:34:53.000000Z\",\"created_at\":\"2025-07-30T19:34:53.000000Z\",\"id\":1}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8000/admin/settings/contacts', 1, 1, NULL, '2025-07-30 19:34:53', '2025-07-30 19:34:53'),
(2, 'Client', 1, 'Created', '{\"link\":\"https:\\/\\/www.tatamotors.com\\/\",\"logo\":\"\\/storage\\/uploads\\/clients\\/1427698093.png\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:21:00.000000Z\",\"created_at\":\"2025-07-31T19:21:00.000000Z\",\"id\":1}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/clients', 1, 1, NULL, '2025-07-31 19:21:00', '2025-07-31 19:21:00'),
(3, 'Client', 2, 'Created', '{\"link\":\"https:\\/\\/www.hdfcbank.com\\/\",\"logo\":\"\\/storage\\/uploads\\/clients\\/276972867.png\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:21:16.000000Z\",\"created_at\":\"2025-07-31T19:21:16.000000Z\",\"id\":2}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/clients', 1, 1, NULL, '2025-07-31 19:21:16', '2025-07-31 19:21:16'),
(4, 'Client', 3, 'Created', '{\"link\":\"https:\\/\\/danubeholding.com\\/\",\"logo\":\"\\/storage\\/uploads\\/clients\\/600712944.jpeg\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:22:16.000000Z\",\"created_at\":\"2025-07-31T19:22:16.000000Z\",\"id\":3}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/clients', 1, 1, NULL, '2025-07-31 19:22:16', '2025-07-31 19:22:16'),
(5, 'Client', 4, 'Created', '{\"link\":\"https:\\/\\/www.persistent.com\\/\",\"logo\":\"\\/storage\\/uploads\\/clients\\/1031617113.svg\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:23:07.000000Z\",\"created_at\":\"2025-07-31T19:23:07.000000Z\",\"id\":4}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/clients', 1, 1, NULL, '2025-07-31 19:23:07', '2025-07-31 19:23:07'),
(6, 'Client', 5, 'Created', '{\"link\":\"https:\\/\\/www.larsentoubro.com\\/\",\"logo\":\"\\/storage\\/uploads\\/clients\\/1654666395.webp\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:24:30.000000Z\",\"created_at\":\"2025-07-31T19:24:30.000000Z\",\"id\":5}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/clients', 1, 1, NULL, '2025-07-31 19:24:30', '2025-07-31 19:24:30'),
(7, 'Client', 6, 'Created', '{\"link\":\"https:\\/\\/www.microsoft.com\\/en-in\\/\",\"logo\":\"\\/storage\\/uploads\\/clients\\/1712610007.png\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:26:01.000000Z\",\"created_at\":\"2025-07-31T19:26:01.000000Z\",\"id\":6}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/clients', 1, 1, NULL, '2025-07-31 19:26:01', '2025-07-31 19:26:01'),
(8, 'Slider', 1, 'Created', '{\"title\":\"Boost Employee Well-being & Productivity with Our Corporate Wellness Program\",\"description\":\"Custom wellness solutions designed to support physical, mental, and emotional health in today\\u2019s fast-paced work environment.\",\"image\":\"\\/storage\\/uploads\\/sliders\\/866299884.webp\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:31:46.000000Z\",\"created_at\":\"2025-07-31T19:31:46.000000Z\",\"id\":1}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/sliders', 1, 1, NULL, '2025-07-31 19:31:46', '2025-07-31 19:31:46'),
(9, 'About', 1, 'Created', '{\"title\":\"About the Program\",\"description\":\"Your employees are your most valuable asset. Our Corporate Wellness Program is built to help them thrive physically, mentally, and emotionally so your organization can perform at its best.\",\"diabetes_medications\":\"17000\",\"weight_loss\":\"450000\",\"cholesterol_medications\":\"3000\",\"hypertension_medications\":\"1300\",\"image\":\"\\/storage\\/uploads\\/about-us\\/45416271.png\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:41:15.000000Z\",\"created_at\":\"2025-07-31T19:41:15.000000Z\",\"id\":1}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/settings/about-us', 1, 1, NULL, '2025-07-31 19:41:15', '2025-07-31 19:41:15'),
(10, 'BlogCategory', 1, 'Created', '{\"name\":\"Test\",\"slug\":\"test\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:49:24.000000Z\",\"created_at\":\"2025-07-31T19:49:24.000000Z\",\"id\":1}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/manage-blogs/blog-categories', 1, 1, NULL, '2025-07-31 19:49:24', '2025-07-31 19:49:24'),
(11, 'Service', 1, 'Created', '{\"title\":\"On-Site & Virtual Fitness Sessions\",\"description\":\"Boost energy and engagement with guided workouts tailored for all fitness levels, available both in-person and online.\",\"icon\":null,\"slug\":\"\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:51:20.000000Z\",\"created_at\":\"2025-07-31T19:51:20.000000Z\",\"id\":1}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/services', 1, 1, NULL, '2025-07-31 19:51:20', '2025-07-31 19:51:20'),
(12, 'Service', 10, 'Created', '{\"title\":\"Mental Health Support & Counselling\",\"description\":\"Confidential access to licensed counsellors to reduce stress, improve resilience, and support emotional well-being.\",\"icon\":null,\"slug\":\"\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:56:37.000000Z\",\"created_at\":\"2025-07-31T19:56:37.000000Z\",\"id\":10}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/services', 1, 1, NULL, '2025-07-31 19:56:37', '2025-07-31 19:56:37'),
(13, 'Service', 11, 'Created', '{\"title\":\"Nutrition & Lifestyle Coaching\",\"description\":\"Personalized coaching to help employees make healthier food and lifestyle choices that stick.\",\"icon\":null,\"slug\":\"\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:56:58.000000Z\",\"created_at\":\"2025-07-31T19:56:58.000000Z\",\"id\":11}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/services', 1, 1, NULL, '2025-07-31 19:56:58', '2025-07-31 19:56:58'),
(14, 'Service', 12, 'Created', '{\"title\":\"Workplace Ergonomics & Posture Workshops\",\"description\":\"Reduce discomfort and prevent injury with expert-led training in desk setup and body alignment.\",\"icon\":null,\"slug\":\"\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:57:12.000000Z\",\"created_at\":\"2025-07-31T19:57:12.000000Z\",\"id\":12}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/services', 1, 1, NULL, '2025-07-31 19:57:12', '2025-07-31 19:57:12'),
(15, 'Service', 13, 'Created', '{\"title\":\"Mindfulness & Meditation Programs\",\"description\":\"Increase focus and reduce burnout through guided meditation and mindfulness practices.\",\"icon\":null,\"slug\":\"\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:57:26.000000Z\",\"created_at\":\"2025-07-31T19:57:26.000000Z\",\"id\":13}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/services', 1, 1, NULL, '2025-07-31 19:57:26', '2025-07-31 19:57:26'),
(16, 'Service', 14, 'Created', '{\"title\":\"Health Screenings & Wellness Challenges\",\"description\":\"Proactive health checks and team-based wellness challenges to encourage healthy habits and friendly competition.\",\"icon\":null,\"slug\":\"\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T19:57:41.000000Z\",\"created_at\":\"2025-07-31T19:57:41.000000Z\",\"id\":14}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/services', 1, 1, NULL, '2025-07-31 19:57:41', '2025-07-31 19:57:41'),
(17, 'Benefit', 1, 'Created', '{\"title\":\"Chronic Disease Prevention & Management\",\"description\":\"Early detection and follow-up prevent diabetes progression and complications.\",\"icon\":null,\"slug\":\"\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T20:03:30.000000Z\",\"created_at\":\"2025-07-31T20:03:30.000000Z\",\"id\":1}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/benefits', 1, 1, NULL, '2025-07-31 20:03:30', '2025-07-31 20:03:30'),
(18, 'Benefit', 2, 'Created', '{\"title\":\"Lower Healthcare Costs & Lost Productivity\",\"description\":\"By reducing absenteeism and chronic disease burden, the program improves ROI and employee morale.\",\"icon\":null,\"slug\":\"\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T20:03:45.000000Z\",\"created_at\":\"2025-07-31T20:03:45.000000Z\",\"id\":2}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/benefits', 1, 1, NULL, '2025-07-31 20:03:45', '2025-07-31 20:03:45'),
(19, 'Benefit', 3, 'Created', '{\"title\":\"Evidence-Based & Accredited\",\"description\":\"Our model follows CDC & Medicare-approved standards, with measurable outcomes like weight loss, HbA1c reduction, and medication discontinuation.\",\"icon\":null,\"slug\":\"\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T20:04:00.000000Z\",\"created_at\":\"2025-07-31T20:04:00.000000Z\",\"id\":3}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/benefits', 1, 1, NULL, '2025-07-31 20:04:00', '2025-07-31 20:04:00'),
(20, 'Benefit', 4, 'Created', '{\"title\":\"Hybrid & Seamless Delivery\",\"description\":\"Choose from virtual, on-site, or hybrid models to best support your workforce\\u2019s needs and preferences.\",\"icon\":null,\"slug\":\"\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T20:04:17.000000Z\",\"created_at\":\"2025-07-31T20:04:17.000000Z\",\"id\":4}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/benefits', 1, 1, NULL, '2025-07-31 20:04:17', '2025-07-31 20:04:17'),
(21, 'Feature', 1, 'Created', '{\"feature_name\":\"Biometric Screenings & Risk Assessments\",\"description\":\"On-site and virtual checks for blood sugar, blood pressure, cholesterol, and pre-diabetes with timely, actionable follow-up care.\",\"is_core_feature\":1,\"slug\":\"biometric-screenings-risk-assessments\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T20:12:37.000000Z\",\"created_at\":\"2025-07-31T20:12:37.000000Z\",\"id\":1}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/features', 1, 1, NULL, '2025-07-31 20:12:37', '2025-07-31 20:12:37'),
(22, 'Feature', 2, 'Created', '{\"feature_name\":\"Personalized Nutrition & Diabetes Coaching\",\"description\":\"One-on-one sessions with registered dieticians to create plant-based, glycaemic-friendly meal plans tailored to individual health goals.\",\"is_core_feature\":1,\"slug\":\"personalized-nutrition-diabetes-coaching\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T20:12:55.000000Z\",\"created_at\":\"2025-07-31T20:12:55.000000Z\",\"id\":2}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/features', 1, 1, NULL, '2025-07-31 20:12:55', '2025-07-31 20:12:55'),
(23, 'Feature', 3, 'Created', '{\"feature_name\":\"Lifestyle & Physical Activity Plans\",\"description\":\"Customized fitness routines and daily movement goals to improve insulin sensitivity and support weight and well-being outcomes.\",\"is_core_feature\":1,\"slug\":\"lifestyle-physical-activity-plans\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T20:13:14.000000Z\",\"created_at\":\"2025-07-31T20:13:14.000000Z\",\"id\":3}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/features', 1, 1, NULL, '2025-07-31 20:13:14', '2025-07-31 20:13:14'),
(24, 'Feature', 4, 'Created', '{\"feature_name\":\"Mindfulness & Stress Management\",\"description\":\"Guided meditation and cognitive techniques to reduce stress, enhance resilience, and curb emotional triggers for unhealthy behaviour.\",\"is_core_feature\":1,\"slug\":\"mindfulness-stress-management\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T20:13:34.000000Z\",\"created_at\":\"2025-07-31T20:13:34.000000Z\",\"id\":4}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/features', 1, 1, NULL, '2025-07-31 20:13:34', '2025-07-31 20:13:34'),
(25, 'Feature', 5, 'Created', '{\"feature_name\":\"Educational Workshops & Peer Support\",\"description\":\"Interactive sessions on diabetes prevention, reversal strategies, and healthy living, plus community chats for peer encouragement.\",\"is_core_feature\":1,\"slug\":\"educational-workshops-peer-support\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T20:13:49.000000Z\",\"created_at\":\"2025-07-31T20:13:49.000000Z\",\"id\":5}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/features', 1, 1, NULL, '2025-07-31 20:13:49', '2025-07-31 20:13:49'),
(26, 'Feature', 6, 'Created', '{\"feature_name\":\"Digital Health Tools & On-going Monitoring\",\"description\":\"Smartphone app integration, tele-counseling, weekly check-ins, and data tracking to ensure sustainable progress.\",\"is_core_feature\":0,\"slug\":\"digital-health-tools-on-going-monitoring\",\"created_by\":1,\"created_by_ip\":\"127.0.0.1\",\"updated_at\":\"2025-07-31T20:14:06.000000Z\",\"created_at\":\"2025-07-31T20:14:06.000000Z\",\"id\":6}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/features', 1, 1, NULL, '2025-07-31 20:14:06', '2025-07-31 20:14:06'),
(27, 'Feature', 6, 'Updated', '{\"id\":6,\"feature_name\":\"Digital Health Tools & On-going Monitoring\",\"description\":\"Smartphone app integration, tele-counseling, weekly check-ins, and data tracking to ensure sustainable progress.\",\"icon\":null,\"slug\":\"digital-health-tools-on-going-monitoring\",\"image\":null,\"is_core_feature\":1,\"status\":1,\"created_by\":1,\"updated_by\":1,\"status_updated_by\":null,\"created_by_ip\":\"127.0.0.1\",\"updated_by_ip\":\"127.0.0.1\",\"status_updated_by_ip\":null,\"created_at\":\"2025-07-31T20:14:06.000000Z\",\"updated_at\":\"2025-07-31T20:14:15.000000Z\"}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/features/6', 1, 1, NULL, '2025-07-31 20:14:15', '2025-07-31 20:14:15'),
(28, 'Feature', 6, 'Updated', '{\"id\":6,\"feature_name\":\"Digital Health Tools & On-going Monitoring\",\"description\":\"Smartphone app integration, tele-counseling, weekly check-ins, and data tracking to ensure sustainable progress.\",\"icon\":null,\"slug\":\"digital-health-tools-on-going-monitoring\",\"image\":null,\"is_core_feature\":0,\"status\":1,\"created_by\":1,\"updated_by\":1,\"status_updated_by\":null,\"created_by_ip\":\"127.0.0.1\",\"updated_by_ip\":\"127.0.0.1\",\"status_updated_by_ip\":null,\"created_at\":\"2025-07-31T20:14:06.000000Z\",\"updated_at\":\"2025-07-31T20:19:49.000000Z\"}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/features/6', 1, 1, NULL, '2025-07-31 20:19:49', '2025-07-31 20:19:49'),
(29, 'Feature', 5, 'Updated', '{\"id\":5,\"feature_name\":\"Educational Workshops & Peer Support\",\"description\":\"Interactive sessions on diabetes prevention, reversal strategies, and healthy living, plus community chats for peer encouragement.\",\"icon\":null,\"slug\":\"educational-workshops-peer-support\",\"image\":null,\"is_core_feature\":0,\"status\":1,\"created_by\":1,\"updated_by\":1,\"status_updated_by\":null,\"created_by_ip\":\"127.0.0.1\",\"updated_by_ip\":\"127.0.0.1\",\"status_updated_by_ip\":null,\"created_at\":\"2025-07-31T20:13:49.000000Z\",\"updated_at\":\"2025-07-31T20:19:57.000000Z\"}', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'Chrome', 'http://127.0.0.1:8001/admin/features/5', 1, 1, NULL, '2025-07-31 20:19:57', '2025-07-31 20:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `benefits`
--

CREATE TABLE `benefits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefits`
--

INSERT INTO `benefits` (`id`, `title`, `description`, `icon`, `slug`, `image`, `status`, `created_by`, `updated_by`, `status_updated_by`, `created_by_ip`, `updated_by_ip`, `status_updated_by_ip`, `created_at`, `updated_at`) VALUES
(1, 'Chronic Disease Prevention & Management', 'Early detection and follow-up prevent diabetes progression and complications.', NULL, '', NULL, 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 20:03:30', '2025-07-31 20:03:30'),
(2, 'Lower Healthcare Costs & Lost Productivity', 'By reducing absenteeism and chronic disease burden, the program improves ROI and employee morale.', NULL, '', NULL, 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 20:03:45', '2025-07-31 20:03:45'),
(3, 'Evidence-Based & Accredited', 'Our model follows CDC & Medicare-approved standards, with measurable outcomes like weight loss, HbA1c reduction, and medication discontinuation.', NULL, '', NULL, 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 20:04:00', '2025-07-31 20:04:00'),
(4, 'Hybrid & Seamless Delivery', 'Choose from virtual, on-site, or hybrid models to best support your workforce’s needs and preferences.', NULL, '', NULL, 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 20:04:17', '2025-07-31 20:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `icon`, `slug`, `status`, `created_by`, `updated_by`, `status_updated_by`, `created_by_ip`, `updated_by_ip`, `status_updated_by_ip`, `created_at`, `updated_at`) VALUES
(1, 'Test', NULL, 'test', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:49:24', '2025-07-31 19:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `case_studies`
--

CREATE TABLE `case_studies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(100) NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(100) DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `link`, `logo`, `status`, `created_by`, `updated_by`, `status_updated_by`, `created_by_ip`, `updated_by_ip`, `status_updated_by_ip`, `created_at`, `updated_at`) VALUES
(1, 'https://www.tatamotors.com/', '/storage/uploads/clients/1427698093.png', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:21:00', '2025-07-31 19:21:00'),
(2, 'https://www.hdfcbank.com/', '/storage/uploads/clients/276972867.png', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:21:16', '2025-07-31 19:21:16'),
(3, 'https://danubeholding.com/', '/storage/uploads/clients/600712944.jpeg', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:22:16', '2025-07-31 19:22:16'),
(4, 'https://www.persistent.com/', '/storage/uploads/clients/1031617113.svg', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:23:07', '2025-07-31 19:23:07'),
(5, 'https://www.larsentoubro.com/', '/storage/uploads/clients/1654666395.webp', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:24:30', '2025-07-31 19:24:30'),
(6, 'https://www.microsoft.com/en-in/', '/storage/uploads/clients/1712610007.png', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:26:01', '2025-07-31 19:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `map` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone`, `email`, `map`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_by`, `updated_by`, `status_updated_by`, `created_by_ip`, `updated_by_ip`, `status_updated_by_ip`, `created_at`, `updated_at`) VALUES
(1, 'Flat No. 05, Girikrupa, Erandawane, Pune – 411004', '8855955012', 'sujeet.bandamwar@freedomfromdiabetes.org', 'NA', NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-30 19:34:53', '2025-07-30 19:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(100) NOT NULL,
  `country_code` varchar(5) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `mobile`, `company_name`, `message`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 'Anil', 'aniL@gmail.com', '9898989898', 'Testing', 'Test', '127.0.0.1', '2025-08-03 15:39:07', '2025-08-03 15:39:07'),
(2, 'test', 'stseta@gmail.com', '9898989898', 'Indotd', 'tesfasf', '127.0.0.1', '2025-08-03 15:42:19', '2025-08-03 15:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_core_feature` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `feature_name`, `description`, `icon`, `slug`, `image`, `is_core_feature`, `status`, `created_by`, `updated_by`, `status_updated_by`, `created_by_ip`, `updated_by_ip`, `status_updated_by_ip`, `created_at`, `updated_at`) VALUES
(1, 'Biometric Screenings & Risk Assessments', 'On-site and virtual checks for blood sugar, blood pressure, cholesterol, and pre-diabetes with timely, actionable follow-up care.', NULL, 'biometric-screenings-risk-assessments', NULL, 1, 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 20:12:37', '2025-07-31 20:12:37'),
(2, 'Personalized Nutrition & Diabetes Coaching', 'One-on-one sessions with registered dieticians to create plant-based, glycaemic-friendly meal plans tailored to individual health goals.', NULL, 'personalized-nutrition-diabetes-coaching', NULL, 1, 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 20:12:55', '2025-07-31 20:12:55'),
(3, 'Lifestyle & Physical Activity Plans', 'Customized fitness routines and daily movement goals to improve insulin sensitivity and support weight and well-being outcomes.', NULL, 'lifestyle-physical-activity-plans', NULL, 1, 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 20:13:14', '2025-07-31 20:13:14'),
(4, 'Mindfulness & Stress Management', 'Guided meditation and cognitive techniques to reduce stress, enhance resilience, and curb emotional triggers for unhealthy behaviour.', NULL, 'mindfulness-stress-management', NULL, 1, 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 20:13:34', '2025-07-31 20:13:34'),
(5, 'Educational Workshops & Peer Support', 'Interactive sessions on diabetes prevention, reversal strategies, and healthy living, plus community chats for peer encouragement.', NULL, 'educational-workshops-peer-support', NULL, 0, 1, 1, 1, NULL, '127.0.0.1', '127.0.0.1', NULL, '2025-07-31 20:13:49', '2025-07-31 20:19:57'),
(6, 'Digital Health Tools & On-going Monitoring', 'Smartphone app integration, tele-counseling, weekly check-ins, and data tracking to ensure sustainable progress.', NULL, 'digital-health-tools-on-going-monitoring', NULL, 0, 1, 1, 1, NULL, '127.0.0.1', '127.0.0.1', NULL, '2025-07-31 20:14:06', '2025-07-31 20:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_menus`
--

CREATE TABLE `main_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_key` varchar(100) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_icon` varchar(100) DEFAULT NULL,
  `route_name` varchar(100) DEFAULT NULL,
  `table_name` varchar(100) DEFAULT NULL,
  `permissions` text DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by_ip` varchar(50) DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_menus`
--

INSERT INTO `main_menus` (`id`, `language_key`, `menu_name`, `menu_icon`, `route_name`, `table_name`, `permissions`, `order`, `status`, `deleted_by`, `created_by`, `updated_by`, `status_updated_by`, `deleted_by_ip`, `created_by_ip`, `updated_by_ip`, `status_updated_by_ip`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'Dashboard', 'bx bx-home-circle', 'root', NULL, '{\"name\":\"Dashboard\",\"permission\":\"view_dashboard\"}', 1, 1, NULL, 1, NULL, NULL, NULL, '127.0.0.1', NULL, NULL, NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(2, 'ManageSliders', 'Manage Sliders', 'bx bx-carousel', 'sliders.index', NULL, '[{\"name\":\"View Slider\",\"permission\":\"sliders.view\"},{\"name\":\"List\",\"permission\":\"sliders.list\"},{\"name\":\"Add\",\"permission\":\"sliders.add\"},{\"name\":\"Edit\",\"permission\":\"sliders.edit\"},{\"name\":\"Delete\",\"permission\":\"sliders.delete\"},{\"name\":\"Status\",\"permission\":\"sliders.status\"}]', 2, 1, NULL, 1, NULL, NULL, NULL, '127.0.0.1', NULL, NULL, NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(3, 'ManageFeatures', 'Manage Features', 'bx bx-bulb', 'features.index', 'features', '[{\"name\":\"View Features\",\"permission\":\"features.view\"},{\"name\":\"List\",\"permission\":\"features.list\"},{\"name\":\"Add\",\"permission\":\"features.add\"},{\"name\":\"Edit\",\"permission\":\"features.edit\"},{\"name\":\"Delete\",\"permission\":\"features.delete\"},{\"name\":\"Status\",\"permission\":\"features.status\"}]', 3, 1, NULL, 1, NULL, NULL, NULL, '127.0.0.1', NULL, NULL, NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(4, 'ManageServices', 'Manage Services', 'bx bx-cog', 'services.index', 'services', '[{\"name\":\"View Services\",\"permission\":\"services.view\"},{\"name\":\"List\",\"permission\":\"services.list\"},{\"name\":\"Add\",\"permission\":\"services.add\"},{\"name\":\"Edit\",\"permission\":\"services.edit\"},{\"name\":\"Delete\",\"permission\":\"services.delete\"},{\"name\":\"Status\",\"permission\":\"services.status\"}]', 4, 1, NULL, 1, NULL, NULL, NULL, '127.0.0.1', NULL, NULL, NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(5, 'ManageCaseStudies', 'Manage Case Studies', 'bx bx-briefcase', 'case-studies.index', 'case_studies', '[{\"name\":\"View Case Studies\",\"permission\":\"case-studies.view\"},{\"name\":\"List\",\"permission\":\"case-studies.list\"},{\"name\":\"Add\",\"permission\":\"case-studies.add\"},{\"name\":\"Edit\",\"permission\":\"case-studies.edit\"},{\"name\":\"Delete\",\"permission\":\"case-studies.delete\"},{\"name\":\"Status\",\"permission\":\"case-studies.status\"}]', 5, 1, NULL, 1, NULL, NULL, NULL, '127.0.0.1', NULL, NULL, NULL, '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(6, 'ManageBenefits', 'Manage Benefits', 'bx bx-star', 'benefits.index', 'benefits', '[{\"name\":\"View Benefits\",\"permission\":\"benefits.view\"},{\"name\":\"List\",\"permission\":\"benefits.list\"},{\"name\":\"Add\",\"permission\":\"benefits.add\"},{\"name\":\"Edit\",\"permission\":\"benefits.edit\"},{\"name\":\"Delete\",\"permission\":\"benefits.delete\"},{\"name\":\"Status\",\"permission\":\"benefits.status\"}]', 6, 1, NULL, 1, NULL, NULL, NULL, '127.0.0.1', NULL, NULL, NULL, '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(7, 'ManageBlogs', 'Manage Blogs', 'bx bx-news', 'javascript:void(0)', NULL, '{\"name\":\"View Blogs\",\"permission\":\"manage_blogs.view\"}', 7, 1, NULL, 1, NULL, NULL, NULL, '127.0.0.1', NULL, NULL, NULL, '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(8, 'ManageTestimonials', 'Manage Testimonials', 'bx bx-message-rounded-dots', 'testimonials.index', 'testimonials', '[{\"name\":\"View Testimonials\",\"permission\":\"testimonials.view\"},{\"name\":\"List\",\"permission\":\"testimonials.list\"},{\"name\":\"Add\",\"permission\":\"testimonials.add\"},{\"name\":\"Edit\",\"permission\":\"testimonials.edit\"},{\"name\":\"Delete\",\"permission\":\"testimonials.delete\"},{\"name\":\"Status\",\"permission\":\"testimonials.status\"}]', 8, 1, NULL, 1, NULL, NULL, NULL, '127.0.0.1', NULL, NULL, NULL, '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(9, 'ManageClients', 'Manage Clients', 'bx bx-user-check', 'clients.index', 'clients', '[{\"name\":\"View Clients\",\"permission\":\"clients.view\"},{\"name\":\"List\",\"permission\":\"clients.list\"},{\"name\":\"Add\",\"permission\":\"clients.add\"},{\"name\":\"Edit\",\"permission\":\"clients.edit\"},{\"name\":\"Delete\",\"permission\":\"clients.delete\"},{\"name\":\"Status\",\"permission\":\"clients.status\"}]', 9, 1, NULL, 1, NULL, NULL, NULL, '127.0.0.1', NULL, NULL, NULL, '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(10, 'ManageFaqs', 'Manage FAQs', 'bx bx-help-circle', 'faqs.index', 'faqs', '[{\"name\":\"View FAQs\",\"permission\":\"faqs.view\"},{\"name\":\"List\",\"permission\":\"faqs.list\"},{\"name\":\"Add\",\"permission\":\"faqs.add\"},{\"name\":\"Edit\",\"permission\":\"faqs.edit\"},{\"name\":\"Delete\",\"permission\":\"faqs.delete\"},{\"name\":\"Status\",\"permission\":\"faqs.status\"}]', 10, 1, NULL, 1, NULL, NULL, NULL, '127.0.0.1', NULL, NULL, NULL, '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(11, 'AccountSettings', 'Account Settings', 'bx bx-wrench', 'javascript:void(0)', NULL, '{\"name\":\"View Account Settings\",\"permission\":\"settings.manage-account-settings\"}', 11, 1, NULL, 1, NULL, NULL, NULL, '127.0.0.1', NULL, NULL, NULL, '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(12, 'NewsLetter', 'News Letter', 'bx bx-envelope', 'news-letters.index', 'news_letters', '[{\"name\":\"View News Letter\",\"permission\":\"news_letters.view\"},{\"name\":\"List\",\"permission\":\"news_letters.list\"},{\"name\":\"Delete\",\"permission\":\"news_letters.delete\"}]', 12, 1, NULL, 1, NULL, NULL, NULL, '127.0.0.1', NULL, NULL, NULL, '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(13, 'Enquiries', 'Enquiries', 'bx bx-phone-incoming', 'enquiries.index', 'enquiries', '[{\"name\":\"View Enquiries\",\"permission\":\"enquiries.view\"},{\"name\":\"List\",\"permission\":\"enquiries.list\"},{\"name\":\"Delete\",\"permission\":\"enquiries.delete\"}]', 11, 1, NULL, 1, NULL, NULL, NULL, '127.0.0.1', NULL, NULL, NULL, '2025-07-31 19:15:10', '2025-07-31 19:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_11_115151_create_countries_table', 1),
(2, '2014_10_11_115152_create_states_table', 1),
(3, '2014_10_11_115155_create_cities_table', 1),
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2024_12_26_091259_create_activity_logs_table', 1),
(10, '2025_01_03_070328_create_permission_tables', 1),
(11, '2025_01_18_064447_create_settings_table', 1),
(12, '2025_01_21_043554_create_main_menus_table', 1),
(13, '2025_01_21_043611_create_sub_menus_table', 1),
(14, '2025_03_18_113513_create_sliders_table', 1),
(15, '2025_03_18_114427_create_blog_categories_table', 1),
(16, '2025_03_18_114430_create_blogs_table', 1),
(17, '2025_03_18_114443_create_f_a_q_s_table', 1),
(18, '2025_03_18_114512_create_contacts_table', 1),
(19, '2025_03_18_114548_create_services_table', 1),
(20, '2025_03_18_114606_create_abouts_table', 1),
(21, '2025_03_18_114620_create_testimonials_table', 1),
(22, '2025_07_25_144853_create_enquiries_table', 1),
(23, '2025_07_26_115142_create_news_letters_table', 1),
(24, '2025_07_26_152648_create_teams_table', 1),
(25, '2025_07_26_153938_create_features_table', 1),
(26, '2025_07_30_124339_create_case_studies_table', 1),
(27, '2025_07_30_124457_create_benefits_table', 1),
(28, '2025_07_30_124545_create_clients_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_letters`
--

INSERT INTO `news_letters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'anil@gmail.com', '2025-08-03 15:49:39', '2025-08-03 15:49:39'),
(2, 'tsfda@bmail.com', '2025-08-03 15:50:10', '2025-08-03 15:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_dashboard', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(2, 'sliders.view', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(3, 'sliders.list', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(4, 'sliders.add', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(5, 'sliders.edit', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(6, 'sliders.delete', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(7, 'sliders.status', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(8, 'features.view', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(9, 'features.list', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(10, 'features.add', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(11, 'features.edit', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(12, 'features.delete', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(13, 'features.status', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(14, 'services.view', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(15, 'services.list', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(16, 'services.add', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(17, 'services.edit', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(18, 'services.delete', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(19, 'services.status', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(20, 'case-studies.view', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(21, 'case-studies.list', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(22, 'case-studies.add', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(23, 'case-studies.edit', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(24, 'case-studies.delete', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(25, 'case-studies.status', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(26, 'benefits.view', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(27, 'benefits.list', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(28, 'benefits.add', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(29, 'benefits.edit', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(30, 'benefits.delete', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(31, 'benefits.status', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(32, 'manage_blogs.view', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(33, 'manage_blogs.blog_categories.list', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(34, 'manage_blogs.blog_categories.add', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(35, 'manage_blogs.blog_categories.edit', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(36, 'manage_blogs.blog_categories.delete', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(37, 'manage_blogs.blog_categories.status', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(38, 'manage_blogs.blogs.list', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(39, 'manage_blogs.blogs.add', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(40, 'manage_blogs.blogs.edit', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(41, 'manage_blogs.blogs.delete', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(42, 'manage_blogs.blogs.status', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(43, 'testimonials.view', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(44, 'testimonials.list', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(45, 'testimonials.add', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(46, 'testimonials.edit', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(47, 'testimonials.delete', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(48, 'testimonials.status', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(49, 'clients.view', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(50, 'clients.list', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(51, 'clients.add', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(52, 'clients.edit', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(53, 'clients.delete', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(54, 'clients.status', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(55, 'faqs.view', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(56, 'faqs.list', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(57, 'faqs.add', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(58, 'faqs.edit', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(59, 'faqs.delete', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(60, 'faqs.status', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(61, 'settings.manage-account-settings', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(62, 'settings.about-us.view', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(63, 'settings.about-us.add', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(64, 'settings.about-us.edit', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(65, 'settings.about-us.status', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(66, 'settings.contacts.view', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(67, 'settings.contacts.add', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(68, 'settings.contacts.edit', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(69, 'settings.contacts.status', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(70, 'settings.app-setting', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(71, 'settings.email-setting', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(72, 'news_letters.view', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(73, 'news_letters.list', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(74, 'news_letters.delete', 'web', '2025-07-30 12:14:14', '2025-07-30 12:14:14'),
(75, 'enquiries.view', 'web', '2025-07-31 19:15:10', '2025-07-31 19:15:10'),
(76, 'enquiries.list', 'web', '2025-07-31 19:15:10', '2025-07-31 19:15:10'),
(77, 'enquiries.delete', 'web', '2025-07-31 19:15:10', '2025-07-31 19:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2025-07-30 12:14:13', '2025-07-30 12:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `icon`, `slug`, `status`, `created_by`, `updated_by`, `status_updated_by`, `created_by_ip`, `updated_by_ip`, `status_updated_by_ip`, `created_at`, `updated_at`) VALUES
(1, 'On-Site & Virtual Fitness Sessions', 'Boost energy and engagement with guided workouts tailored for all fitness levels, available both in-person and online.', NULL, NULL, '', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:51:20', '2025-07-31 19:51:20'),
(10, 'Mental Health Support & Counselling', 'Confidential access to licensed counsellors to reduce stress, improve resilience, and support emotional well-being.', NULL, NULL, '', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:56:37', '2025-07-31 19:56:37'),
(11, 'Nutrition & Lifestyle Coaching', 'Personalized coaching to help employees make healthier food and lifestyle choices that stick.', NULL, NULL, '', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:56:58', '2025-07-31 19:56:58'),
(12, 'Workplace Ergonomics & Posture Workshops', 'Reduce discomfort and prevent injury with expert-led training in desk setup and body alignment.', NULL, NULL, '', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:57:12', '2025-07-31 19:57:12'),
(13, 'Mindfulness & Meditation Programs', 'Increase focus and reduce burnout through guided meditation and mindfulness practices.', NULL, NULL, '', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:57:26', '2025-07-31 19:57:26'),
(14, 'Health Screenings & Wellness Challenges', 'Proactive health checks and team-based wellness challenges to encourage healthy habits and friendly competition.', NULL, NULL, '', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:57:41', '2025-07-31 19:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) NOT NULL,
  `value` text DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_by`, `updated_by`, `created_by_ip`, `updated_by_ip`, `created_at`, `updated_at`) VALUES
(1, 'app_name', 'Freedom From Diabetes', 1, 1, '127.0.0.1', '127.0.0.1', '2025-07-30 12:14:13', '2025-07-31 18:55:24'),
(2, 'app_logo', 'assets/img/logo.png', 1, NULL, '127.0.0.1', NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(3, 'app_dark_logo', 'assets/img/dark-logo.png', 1, NULL, '127.0.0.1', NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(4, 'favicon_logo', 'logo/app-favicon-logo.png', 1, 1, '127.0.0.1', '127.0.0.1', '2025-07-30 12:14:13', '2025-07-31 19:00:26'),
(5, 'default_language', 'en', 1, NULL, '127.0.0.1', NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(6, 'currency', 'USD', 1, NULL, '127.0.0.1', NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(7, 'currency_symbol', '$', 1, NULL, '127.0.0.1', NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(8, 'date_format', 'M j, Y', 1, NULL, '127.0.0.1', NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(9, 'time_format', 'g:i A', 1, NULL, '127.0.0.1', NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(10, 'color', 'theme-2', 1, NULL, '127.0.0.1', NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(11, 'storage_type', 'local', 1, NULL, '127.0.0.1', NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(12, 'dark_mode', 'off', 1, NULL, '127.0.0.1', NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(13, 'transparent_layout', '1', 1, NULL, '127.0.0.1', NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(14, 'landing_page_status', '1', 1, NULL, '127.0.0.1', NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13'),
(15, 'favicon_logo', 'assets/img/favicon.png', 1, NULL, '127.0.0.1', NULL, '2025-07-31 19:04:20', '2025-07-31 19:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `button_text`, `button_link`, `image`, `status`, `created_by`, `updated_by`, `status_updated_by`, `created_by_ip`, `updated_by_ip`, `status_updated_by_ip`, `created_at`, `updated_at`) VALUES
(1, 'Boost Employee Well-being & Productivity with Our Corporate Wellness Program', 'Custom wellness solutions designed to support physical, mental, and emotional health in today’s fast-paced work environment.', NULL, NULL, '/storage/uploads/sliders/866299884.webp', 1, 1, NULL, NULL, '127.0.0.1', NULL, NULL, '2025-07-31 19:31:46', '2025-07-31 19:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` varchar(100) NOT NULL,
  `state_code` varchar(5) NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_menu_id` bigint(20) UNSIGNED NOT NULL,
  `language_key` varchar(100) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_icon` varchar(100) DEFAULT NULL,
  `route_name` varchar(100) DEFAULT NULL,
  `table_name` varchar(100) DEFAULT NULL,
  `permissions` text DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by_ip` varchar(50) DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menus`
--

INSERT INTO `sub_menus` (`id`, `main_menu_id`, `language_key`, `menu_name`, `menu_icon`, `route_name`, `table_name`, `permissions`, `order`, `status`, `deleted_by`, `created_by`, `updated_by`, `status_updated_by`, `deleted_by_ip`, `created_by_ip`, `updated_by_ip`, `status_updated_by_ip`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 7, 'BlogCategoryList', 'Blog Category List', NULL, 'manage-blogs.blog-categories.index', 'blog_categories', '[{\"name\":\"List\",\"permission\":\"manage_blogs.blog_categories.list\"},{\"name\":\"Add\",\"permission\":\"manage_blogs.blog_categories.add\"},{\"name\":\"Edit\",\"permission\":\"manage_blogs.blog_categories.edit\"},{\"name\":\"Delete\",\"permission\":\"manage_blogs.blog_categories.delete\"},{\"name\":\"Status\",\"permission\":\"manage_blogs.blog_categories.status\"}]', 11, 1, NULL, 1, 1, NULL, NULL, '127.0.0.1', '127.0.0.1', NULL, NULL, '2025-07-30 12:14:14', '2025-07-31 19:15:10'),
(2, 7, 'BlogList', 'Blog List', NULL, 'manage-blogs.blogs.index', 'blogs', '[{\"name\":\"List\",\"permission\":\"manage_blogs.blogs.list\"},{\"name\":\"Add\",\"permission\":\"manage_blogs.blogs.add\"},{\"name\":\"Edit\",\"permission\":\"manage_blogs.blogs.edit\"},{\"name\":\"Delete\",\"permission\":\"manage_blogs.blogs.delete\"},{\"name\":\"Status\",\"permission\":\"manage_blogs.blogs.status\"}]', 12, 1, NULL, 1, 1, NULL, NULL, '127.0.0.1', '127.0.0.1', NULL, NULL, '2025-07-30 12:14:14', '2025-07-31 19:15:10'),
(3, 11, 'AboutUs', 'About Us', NULL, 'settings.about-us.index', 'about_us', '[{\"name\":\"About Us\",\"permission\":\"settings.about-us.view\"},{\"name\":\"Add\",\"permission\":\"settings.about-us.add\"},{\"name\":\"Edit\",\"permission\":\"settings.about-us.edit\"},{\"name\":\"Status\",\"permission\":\"settings.about-us.status\"}]', 13, 1, NULL, 1, 1, NULL, NULL, '127.0.0.1', '127.0.0.1', NULL, NULL, '2025-07-30 12:14:14', '2025-07-31 19:15:10'),
(4, 11, 'ContactUs', 'Contact Us', NULL, 'settings.contacts.index', 'contacts', '[{\"name\":\"Contact Us\",\"permission\":\"settings.contacts.view\"},{\"name\":\"Add\",\"permission\":\"settings.contacts.add\"},{\"name\":\"Edit\",\"permission\":\"settings.contacts.edit\"},{\"name\":\"Status\",\"permission\":\"settings.contacts.status\"}]', 14, 1, NULL, 1, 1, NULL, NULL, '127.0.0.1', '127.0.0.1', NULL, NULL, '2025-07-30 12:14:14', '2025-07-31 19:15:10'),
(5, 11, 'Settings', 'Settings', NULL, 'settings.index', 'settings', '[{\"name\":\"Settings\",\"permission\":\"settings.app-setting\"},{\"name\":\"Email Settings\",\"permission\":\"settings.email-setting\"}]', 15, 1, NULL, 1, 1, NULL, NULL, '127.0.0.1', '127.0.0.1', NULL, NULL, '2025-07-30 12:14:14', '2025-07-31 19:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `employee_id` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `country_code` varchar(10) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rating` tinyint(4) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `full_name` varchar(191) GENERATED ALWAYS AS (concat(`first_name`,' ',`last_name`)) VIRTUAL,
  `unique_code` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `company_website` varchar(100) DEFAULT NULL,
  `country_code` varchar(5) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `is_password_updated` tinyint(4) NOT NULL DEFAULT 0,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `address` varchar(100) DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by_ip` varchar(50) DEFAULT NULL,
  `created_by_ip` varchar(50) DEFAULT NULL,
  `updated_by_ip` varchar(50) DEFAULT NULL,
  `status_updated_by_ip` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `unique_code`, `username`, `email`, `email_verified_at`, `company_name`, `company_website`, `country_code`, `mobile`, `password`, `image`, `is_password_updated`, `role`, `address`, `city_id`, `state_id`, `country_id`, `designation`, `remember_token`, `status`, `deleted_by`, `created_by`, `updated_by`, `status_updated_by`, `deleted_by_ip`, `created_by_ip`, `updated_by_ip`, `status_updated_by_ip`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'User', NULL, NULL, 'admin@gmail.com', '2025-07-30 12:14:13', NULL, NULL, NULL, NULL, '$2y$10$9KRuzMdspLQ/aMTu33bi4ecczqAPaop5NG5idQgD9xyggSbTMZ0Z2', NULL, 0, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-30 12:14:13', '2025-07-30 12:14:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `abouts_title_unique` (`title`),
  ADD KEY `abouts_created_by_foreign` (`created_by`),
  ADD KEY `abouts_updated_by_foreign` (`updated_by`),
  ADD KEY `abouts_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_logs_created_by_foreign` (`created_by`),
  ADD KEY `activity_logs_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `benefits_title_unique` (`title`),
  ADD KEY `benefits_created_by_foreign` (`created_by`),
  ADD KEY `benefits_updated_by_foreign` (`updated_by`),
  ADD KEY `benefits_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_blog_category_id_foreign` (`blog_category_id`),
  ADD KEY `blogs_created_by_foreign` (`created_by`),
  ADD KEY `blogs_updated_by_foreign` (`updated_by`),
  ADD KEY `blogs_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_name_unique` (`name`),
  ADD UNIQUE KEY `blog_categories_slug_unique` (`slug`),
  ADD KEY `blog_categories_created_by_foreign` (`created_by`),
  ADD KEY `blog_categories_updated_by_foreign` (`updated_by`),
  ADD KEY `blog_categories_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `case_studies`
--
ALTER TABLE `case_studies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `case_studies_title_unique` (`title`),
  ADD KEY `case_studies_created_by_foreign` (`created_by`),
  ADD KEY `case_studies_updated_by_foreign` (`updated_by`),
  ADD KEY `case_studies_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_created_by_foreign` (`created_by`),
  ADD KEY `clients_updated_by_foreign` (`updated_by`),
  ADD KEY `clients_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_created_by_foreign` (`created_by`),
  ADD KEY `contacts_updated_by_foreign` (`updated_by`),
  ADD KEY `contacts_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_country_unique` (`country`),
  ADD UNIQUE KEY `countries_country_code_unique` (`country_code`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `features_feature_name_unique` (`feature_name`),
  ADD KEY `features_created_by_foreign` (`created_by`),
  ADD KEY `features_updated_by_foreign` (`updated_by`),
  ADD KEY `features_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `f_a_q_s_question_unique` (`question`),
  ADD KEY `f_a_q_s_created_by_foreign` (`created_by`),
  ADD KEY `f_a_q_s_updated_by_foreign` (`updated_by`),
  ADD KEY `f_a_q_s_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `main_menus`
--
ALTER TABLE `main_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_menus_deleted_by_foreign` (`deleted_by`),
  ADD KEY `main_menus_created_by_foreign` (`created_by`),
  ADD KEY `main_menus_updated_by_foreign` (`updated_by`),
  ADD KEY `main_menus_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_letters_email_unique` (`email`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_title_unique` (`title`),
  ADD KEY `services_created_by_foreign` (`created_by`),
  ADD KEY `services_updated_by_foreign` (`updated_by`),
  ADD KEY `services_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_created_by_foreign` (`created_by`),
  ADD KEY `settings_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sliders_title_unique` (`title`),
  ADD KEY `sliders_created_by_foreign` (`created_by`),
  ADD KEY `sliders_updated_by_foreign` (`updated_by`),
  ADD KEY `sliders_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `states_state_unique` (`state`),
  ADD UNIQUE KEY `states_state_code_unique` (`state_code`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_menus_main_menu_id_foreign` (`main_menu_id`),
  ADD KEY `sub_menus_deleted_by_foreign` (`deleted_by`),
  ADD KEY `sub_menus_created_by_foreign` (`created_by`),
  ADD KEY `sub_menus_updated_by_foreign` (`updated_by`),
  ADD KEY `sub_menus_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_email_unique` (`email`),
  ADD UNIQUE KEY `unique_email_deleted_at` (`email`,`deleted_at`),
  ADD UNIQUE KEY `teams_employee_id_unique` (`employee_id`),
  ADD KEY `teams_created_by_foreign` (`created_by`),
  ADD KEY `teams_updated_by_foreign` (`updated_by`),
  ADD KEY `teams_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonials_name_unique` (`name`),
  ADD KEY `testimonials_created_by_foreign` (`created_by`),
  ADD KEY `testimonials_updated_by_foreign` (`updated_by`),
  ADD KEY `testimonials_status_updated_by_foreign` (`status_updated_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_email_deleted_at_unique` (`email`,`deleted_at`),
  ADD KEY `users_city_id_foreign` (`city_id`),
  ADD KEY `users_state_id_foreign` (`state_id`),
  ADD KEY `users_country_id_foreign` (`country_id`),
  ADD KEY `users_deleted_by_foreign` (`deleted_by`),
  ADD KEY `users_created_by_foreign` (`created_by`),
  ADD KEY `users_updated_by_foreign` (`updated_by`),
  ADD KEY `users_status_updated_by_foreign` (`status_updated_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `benefits`
--
ALTER TABLE `benefits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `case_studies`
--
ALTER TABLE `case_studies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_menus`
--
ALTER TABLE `main_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abouts`
--
ALTER TABLE `abouts`
  ADD CONSTRAINT `abouts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `abouts_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `abouts_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `activity_logs_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `benefits`
--
ALTER TABLE `benefits`
  ADD CONSTRAINT `benefits_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `benefits_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `benefits_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blogs_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `blogs_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `blogs_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD CONSTRAINT `blog_categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `blog_categories_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `blog_categories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `case_studies`
--
ALTER TABLE `case_studies`
  ADD CONSTRAINT `case_studies_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `case_studies_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `case_studies_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `clients_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `clients_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `contacts_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `contacts_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `features_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `features_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `features_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD CONSTRAINT `f_a_q_s_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `f_a_q_s_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `f_a_q_s_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `main_menus`
--
ALTER TABLE `main_menus`
  ADD CONSTRAINT `main_menus_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `main_menus_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `main_menus_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `main_menus_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `services_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `services_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `settings_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sliders_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sliders_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD CONSTRAINT `sub_menus_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sub_menus_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sub_menus_main_menu_id_foreign` FOREIGN KEY (`main_menu_id`) REFERENCES `main_menus` (`id`),
  ADD CONSTRAINT `sub_menus_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sub_menus_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `teams_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `teams_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `testimonials_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `testimonials_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_status_updated_by_foreign` FOREIGN KEY (`status_updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
