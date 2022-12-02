-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 09:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_lte`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_05_10_015649_create_sessions_table', 1),
(7, '2021_05_19_015833_create_permission_tables', 1),
(8, '2022_11_26_151153_create_posko_tables', 2),
(9, '2022_11_26_155643_add_nama_posko_to_posko_table', 3),
(10, '2022_11_26_160407_add_nama_posko_to_posko_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(15, 'App\\Models\\User', 6),
(15, 'App\\Models\\User', 7),
(15, 'App\\Models\\User', 8),
(15, 'App\\Models\\User', 9),
(15, 'App\\Models\\User', 10),
(15, 'App\\Models\\User', 11),
(15, 'App\\Models\\User', 12),
(15, 'App\\Models\\User', 13),
(15, 'App\\Models\\User', 14),
(15, 'App\\Models\\User', 15),
(15, 'App\\Models\\User', 16),
(15, 'App\\Models\\User', 17),
(15, 'App\\Models\\User', 18),
(15, 'App\\Models\\User', 19),
(15, 'App\\Models\\User', 20),
(15, 'App\\Models\\User', 21),
(15, 'App\\Models\\User', 22),
(15, 'App\\Models\\User', 23),
(15, 'App\\Models\\User', 24),
(15, 'App\\Models\\User', 25),
(15, 'App\\Models\\User', 26),
(15, 'App\\Models\\User', 27),
(15, 'App\\Models\\User', 28),
(15, 'App\\Models\\User', 29),
(15, 'App\\Models\\User', 30),
(15, 'App\\Models\\User', 31),
(15, 'App\\Models\\User', 32),
(15, 'App\\Models\\User', 33),
(15, 'App\\Models\\User', 34),
(15, 'App\\Models\\User', 35),
(15, 'App\\Models\\User', 36),
(15, 'App\\Models\\User', 37),
(15, 'App\\Models\\User', 38),
(15, 'App\\Models\\User', 39),
(15, 'App\\Models\\User', 40),
(15, 'App\\Models\\User', 41),
(15, 'App\\Models\\User', 42),
(15, 'App\\Models\\User', 43),
(15, 'App\\Models\\User', 44),
(15, 'App\\Models\\User', 45),
(15, 'App\\Models\\User', 46),
(15, 'App\\Models\\User', 47),
(15, 'App\\Models\\User', 48),
(15, 'App\\Models\\User', 49),
(15, 'App\\Models\\User', 50),
(15, 'App\\Models\\User', 51),
(15, 'App\\Models\\User', 52),
(15, 'App\\Models\\User', 53),
(15, 'App\\Models\\User', 54);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(6, 'App\\Models\\User', 23),
(6, 'App\\Models\\User', 58),
(6, 'App\\Models\\User', 59),
(6, 'App\\Models\\User', 60),
(6, 'App\\Models\\User', 62),
(6, 'App\\Models\\User', 63),
(6, 'App\\Models\\User', 66),
(7, 'App\\Models\\User', 2),
(7, 'App\\Models\\User', 57);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create:user', 'create user', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(2, 'read: user', 'read user', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(3, 'update: user', 'update user', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(4, 'delete: user', 'delete User', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(5, 'create: role', 'create role', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(6, 'read: role', 'read role', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(7, 'update: role', 'update role', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(8, 'delete: role', 'delete role', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(9, 'create: permission', 'create permission', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(10, 'read: permission', 'read permission', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(11, 'update: permission', 'update permission', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(12, 'delete: permission', 'delete permission', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(13, 'read: admin', 'read admin', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(14, 'update: admin', 'update admin', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15'),
(15, 'N/A', 'N/A', 'web', '2022-11-24 23:39:15', '2022-11-24 23:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posko`
--

CREATE TABLE `posko` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaPosko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posko`
--

INSERT INTO `posko` (`id`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `detail`, `namaPosko`, `created_at`, `updated_at`) VALUES
(11, 'Tennessee', 'Lake Norma', 'burgh', 'West', 'Burgs', 'Baumbach Track', '2022-11-26 11:03:43', '2022-11-26 11:03:43'),
(12, 'Kentucky', 'Drewshire', 'stad', 'East', 'Inlet', 'Wiza Crossroad', '2022-11-26 11:03:43', '2022-11-26 11:03:43'),
(13, 'California', 'Russville', 'berg', 'New', 'Center', 'Tom Road', '2022-11-26 11:03:43', '2022-11-26 11:03:43'),
(14, 'New Mexico', 'East Aishabury', 'borough', 'New', 'Oval', 'Goldner Landing', '2022-11-26 11:03:43', '2022-11-26 11:03:43'),
(15, 'Wisconsin', 'Hayleyfurt', 'burgh', 'West', 'Ramp', 'Antonette Lakes', '2022-11-26 11:03:43', '2022-11-26 11:03:43'),
(16, 'Colorado', 'Ernastad', 'borough', 'New', 'Isle', 'Charity Keys', '2022-11-26 11:03:43', '2022-11-26 11:03:43'),
(17, 'Arizona', 'Javonshire', 'berg', 'Lake', 'Island', 'Ethyl Highway', '2022-11-26 11:03:43', '2022-11-26 11:03:43'),
(18, 'Hawaii', 'Judebury', 'ton', 'West', 'Garden', 'Okuneva Prairie', '2022-11-26 11:03:43', '2022-11-26 11:03:43'),
(19, 'Nevada', 'Judahmouth', 'stad', 'East', 'Mountains', 'Beer Ferry', '2022-11-26 11:03:43', '2022-11-26 11:03:43'),
(20, 'Virginia', 'Cummeratamouth', 'chester', 'West', 'Fords', 'Ervin Falls', '2022-11-26 11:03:43', '2022-11-26 11:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(6, 'pusdalop', 'web', '2022-11-25 18:17:03', '2022-11-25 18:17:03'),
(7, 'trc', 'web', '2022-11-25 19:08:47', '2022-11-25 19:08:47');

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
(1, 6),
(1, 7),
(2, 6),
(2, 7),
(3, 6),
(3, 7),
(4, 6),
(4, 7),
(5, 6),
(5, 7),
(6, 6),
(6, 7),
(7, 6),
(7, 7),
(8, 6),
(8, 7),
(9, 6),
(9, 7),
(10, 6),
(10, 7),
(11, 6),
(11, 7),
(12, 6),
(12, 7),
(13, 6),
(13, 7),
(14, 6);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4LcSvfsVlsUYVZqCKZzqLELFviV5zLJB6ZbuLNqr', 23, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiSFZHTk9ndkVZVjN1MWpJRWhZOTQwMGZEdnhBZ0QybWNKVkpxRXZ2NyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM3OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYWRtaW4vZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQ5MklYVU5wa2pPMHJPUTVieU1pLlllNG9Lb0VhM1JvOWxsQy8ub2cvYXQyLnVoZVdHL2lnaSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkOTJJWFVOcGtqTzByT1E1YnlNaS5ZZTRvS29FYTNSbzlsbEMvLm9nL2F0Mi51aGVXRy9pZ2kiO30=', 1669713436),
('Ad8Y2ClOAGSJsDPcnMmOIM03Uu4QvEmy6EnpQaNh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSTlIQ1gwMUxJN1N3ZVBLM0NoQWlUNlN5M1hSWGp4TjBqNXpob3YxSSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2FkbWluL3JvbGVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1669700115);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `posko_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `is_admin`, `email`, `email_verified_at`, `password`, `role_id`, `posko_id`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'admins', 1, 'admin@admin.com', '2022-11-24 23:39:16', '$2y$10$xz15jSsjkgfD8ob6VqHblukUlY7.JW2nV5Bry077xyUy/RmLsG33K', 0, '', NULL, NULL, 'uukM17EM1DgoIz9UoFIJE6ACTY3ZBfUlH1LLN3CLxhuNqf5Udc20WY1lnIFg', NULL, NULL, '2022-11-24 23:39:17', '2022-11-26 01:04:16'),
(23, 'Test 187', 1, 'test18@test.com', '2022-11-24 23:39:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 6, '12', NULL, NULL, '6HsoPzYtFhyuMkuVXK0QomR00sCaG3i4z1dAS9iOpTm5SjEwpuMK75eQVNHy', NULL, NULL, '2022-11-24 23:39:18', '2022-11-28 12:17:32'),
(62, 'dzamire', 1, 'dzm@com', NULL, '$2y$10$Pvw/WT0KWzd35dMBb3SBoOxC8m5ifsFbOEieDjR/zTEOyrBFVxyG2', 7, '12', NULL, NULL, NULL, NULL, NULL, '2022-11-27 20:02:54', '2022-11-28 11:50:15'),
(63, 'rizqi', 1, 'rizqi@gmail.com', NULL, '$2y$10$GZvj/0jl6DKZW9Yr8xLXzeQzUMnaL4VlgzRziPpN2Tk/ZhEBiocwy', 6, '14', NULL, NULL, NULL, NULL, NULL, '2022-11-28 09:49:07', '2022-11-28 09:49:07'),
(66, 'cdcdc', 1, 'cdcd@fmfm', NULL, '$2y$10$EiK0KwyPNlT6vjlLOK3hfOsPQ9mDrNQHQ7w3Wyde0xeKC..VU46eu', 6, '14', NULL, NULL, NULL, NULL, NULL, '2022-11-28 12:17:51', '2022-11-28 12:17:51');

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `posko`
--
ALTER TABLE `posko`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posko`
--
ALTER TABLE `posko`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
