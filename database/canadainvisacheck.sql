-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 03:33 AM
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
-- Database: `canadainvisacheck`
--

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
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2023_11_21_055430_create_visa_checks_table', 2),
(7, '2023_11_21_163256_create_visa_check_documents_table', 3);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visa_checks`
--

CREATE TABLE `visa_checks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `d_o_b` date NOT NULL,
  `passport_no` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `national_id_no` varchar(255) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `job_category` varchar(255) NOT NULL,
  `date_of_issue` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visa_checks`
--

INSERT INTO `visa_checks` (`id`, `name`, `image`, `status`, `father_name`, `mother_name`, `d_o_b`, `passport_no`, `gmail`, `national_id_no`, `present_address`, `permanent_address`, `contact_no`, `job`, `job_category`, `date_of_issue`, `created_at`, `updated_at`) VALUES
(1, 'Freelancer Nishad', 'fgth', 'Paid', 'gdsf', 'dfg', '2023-11-21', '456', 'ghfgh@gmail.com', 'sdfs', 'Baneshorpara, Tepriganj, Debiganj, Panchagarh', 'Baneshorpara, Tepriganj, Debiganj, Panchagarh', '+8801909756552', 'sdfsdf', 'sddfsd', '2023-11-21', '2023-11-21 00:05:08', '2023-11-21 00:05:08'),
(2, 'Freelancer Nishad', 'fgth', 'Paid', 'gdsf', 'dfg', '2023-11-21', '456', 'ghfgh@gmail.com', 'sdfs', 'sdf', 'sdf', '+8801909756552', 'sdfsdf', 'sddfsd', '2023-11-21', '2023-11-21 10:39:24', '2023-11-21 10:39:24'),
(3, 'Freelancer Nishad', 'C:\\xampp\\tmp\\php21B6.tmp', 'Paid', 'gdsf', 'dfg', '2023-11-21', '456', 'ghfgh@gmail.com', 'sdfs', 'sfs', 'sdf', '+8801909756552', 'sdfsdf', 'sddfsd', '2023-11-21', '2023-11-21 10:44:17', '2023-11-21 10:44:17'),
(4, 'Freelancer Nishad', 'C:\\xampp\\tmp\\php6777.tmp', 'Paid', 'gdsf', 'dfg', '2023-11-21', '456', 'ghfgh@gmail.com', 'sdfs', 'sdf', 'sdf', '+8801909756552', 'sdfsdf', 'sddfsd', '2023-11-21', '2023-11-21 10:45:41', '2023-11-21 10:45:41'),
(5, 'Freelancer Nishad', '1700585174_1700500688857.jpg', 'Paid', 'gdsf', 'dfg', '2023-11-21', '4567', 'ghfgh@gmail.com', 'sdfs', 'dsfsdf', 'sdfsf', '+8801909756552', 'sdfsdf', 'sddfsd', '2023-11-21', '2023-11-21 10:46:14', '2023-11-21 10:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `visa_check_documents`
--

CREATE TABLE `visa_check_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visa_check_id` bigint(20) UNSIGNED NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visa_check_documents`
--

INSERT INTO `visa_check_documents` (`id`, `visa_check_id`, `document_name`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 2, '1700584764_download (1).jpeg', 'visa_documents/1700584764_download (1).jpeg', '2023-11-21 10:39:24', '2023-11-21 10:39:24'),
(2, 2, '1700584764_download (2).jpeg', 'visa_documents/1700584764_download (2).jpeg', '2023-11-21 10:39:24', '2023-11-21 10:39:24'),
(3, 2, '1700584764_download (3).jpeg', 'visa_documents/1700584764_download (3).jpeg', '2023-11-21 10:39:24', '2023-11-21 10:39:24'),
(4, 3, '1700585057_download (1).jpeg', 'visa_documents/1700585057_download (1).jpeg', '2023-11-21 10:44:17', '2023-11-21 10:44:17'),
(5, 4, '1700585141_Canada-immigration_378179980-sca.png', 'visa_documents/1700585141_Canada-immigration_378179980-sca.png', '2023-11-21 10:45:41', '2023-11-21 10:45:41'),
(6, 5, '1700585174_MexicansinCanada-1.png', 'visa_documents/1700585174_MexicansinCanada-1.png', '2023-11-21 10:46:14', '2023-11-21 10:46:14');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visa_checks`
--
ALTER TABLE `visa_checks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_check_documents`
--
ALTER TABLE `visa_check_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visa_check_documents_visa_check_id_foreign` (`visa_check_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visa_checks`
--
ALTER TABLE `visa_checks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visa_check_documents`
--
ALTER TABLE `visa_check_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `visa_check_documents`
--
ALTER TABLE `visa_check_documents`
  ADD CONSTRAINT `visa_check_documents_visa_check_id_foreign` FOREIGN KEY (`visa_check_id`) REFERENCES `visa_checks` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
