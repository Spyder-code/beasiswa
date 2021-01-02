-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 02, 2021 at 05:00 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswas`
--

CREATE TABLE `beasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenggat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beasiswas`
--

INSERT INTO `beasiswas` (`id`, `title`, `tenggat`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Form Djarum', 'Besok', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'public/images/Screen Shot 2020-11-26 at 21.59.16.png', NULL, '2020-12-13 06:42:46', '2020-12-13 06:42:46'),
(2, 'Beasiswa UINSA', 'Maret, 2021', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'public/images/Screen Shot 2020-11-26 at 21.59.16.png', NULL, '2020-12-13 20:25:32', '2020-12-13 20:25:32'),
(3, 'Beasiswa Ibu Bapak', 'April 2021', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'public/images/Screen Shot 2020-11-26 at 21.59.16.png', NULL, '2020-12-13 20:25:54', '2020-12-13 20:25:54'),
(4, 'Beasiswa Bank BRI', '12 Desember 2021', 'blablabla', 'public/images/Screen Shot 2020-12-21 at 21.18.43.png', NULL, '2020-12-27 20:24:41', '2020-12-27 20:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `universitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenpen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon` int(11) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `berkas1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berkas2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berkas3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `nama`, `email`, `universitas`, `prodi`, `jenpen`, `telpon`, `alamat`, `berkas1`, `berkas2`, `berkas3`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'aa', 'aa@aa.com', 'aa', 'aa', 's1', 21938, 'aa', '/storage/berkas1/berkas1.pdf', '/storage/berkas2/berkas2.pdf', '/storage/berkas3/berkas3.pdf', NULL, '2020-12-13 07:10:50', '2020-12-13 07:10:50'),
(2, 'aa', 'aa@aa.com', 'aa', 'aa', 's1', 21938, 'aa', '/storage/berkas1/berkas1.pdf', '/storage/berkas2/berkas2.pdf', '/storage/berkas3/berkas3.pdf', NULL, '2020-12-13 07:12:26', '2020-12-13 07:12:26'),
(3, 'hgkh', 'khgkhgkhk@fd.fd', 'ghkhgkh', 'khkhgk', 'hkhgkhgkh', 11513206, 'hgkhk', '/storage/berkas1/berkas1.pdf', '/storage/berkas2/berkas2.pdf', '/storage/berkas3/berkas3.pdf', NULL, '2020-12-13 07:18:07', '2020-12-13 07:18:07'),
(4, 'aa', 'ab@ab.com', 'admi', 'ndi', 's1', 9831, 'aa', '/storage/berkas1/berkas1.pdf', '/storage/berkas2/berkas2.pdf', '/storage/berkas3/berkas3.pdf', NULL, '2020-12-13 07:21:36', '2020-12-13 07:21:36'),
(5, 'Heidie Akbar', 'Heidie@gmail.com', 'Universitas Indonesia', 'Kedokteran', 'S1', 90230901, 'fjsanf', '/storage/berkas1/berkas1.pdf', '/storage/berkas2/berkas2.pdf', '/storage/berkas3/berkas3.pdf', NULL, '2020-12-13 20:23:40', '2020-12-13 20:23:40'),
(6, 'Heidie Akbar Febrian', 'heidie@gmail.com', 'Universitas Indonesia', 'Sistem Informasi', 'S1', 31214, 'Surabaya', '/storage/berkas1/berkas1.pdf', '/storage/berkas2/berkas2.pdf', '/storage/berkas3/berkas3.pdf', NULL, '2020-12-27 20:03:43', '2020-12-27 20:03:43'),
(7, 'Anton', 'Anton@anton.com', 'Universitas Gajah Mada', 'Kedokteran', 'S2', 384814, 'jogja', '/storage/berkas1/berkas1.pdf', '/storage/berkas2/berkas2.pdf', '/storage/berkas3/berkas3.pdf', NULL, '2020-12-27 20:04:46', '2020-12-27 20:04:46'),
(8, 'Budi', 'Budi@gmail.com', 'Universitas Negri Sunan Ampel', 'Ilmu Komunikasi', 'S1', 81329894, 'surabaya', '/storage/berkas1/berkas1.pdf', '/storage/berkas2/berkas2.pdf', '/storage/berkas3/berkas3.pdf', NULL, '2020-12-27 20:23:48', '2020-12-27 20:23:48');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_12_05_120251_create_beasiswas_table', 1),
(4, '2020_12_13_081116_add_roles_field_to_users_table', 1),
(5, '2020_12_13_122532_create_forms_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2020_12_27_025043_create_pengumumen_table', 3);

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
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `universitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `created_at`, `updated_at`, `nama`, `universitas`) VALUES
(3, '2020-12-27 20:21:06', '2020-12-27 20:21:06', 'Heidie Akbar Febrian', 'Universitas Indonesia'),
(4, '2020-12-27 20:21:28', '2020-12-27 20:21:28', 'Anton', 'UGM'),
(5, '2021-01-01 21:51:41', '2021-01-01 21:51:41', 'Varo', 'UMM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$fdr379uEeA.O5jfJjDYegOYZrt91ywERJSHlS5LWGYYQiY/XLzrF2', NULL, '2020-12-20 06:36:10', '2020-12-20 06:36:10', 'USER'),
(2, 'heidie', 'heidie@gmail.com', NULL, '$2y$10$ihNRnvjpu85ubOeCY81r2O/uQK2xlPC/anRTSmc.BVxhjVdvKC6Cy', NULL, '2020-12-26 18:56:24', '2020-12-26 18:56:24', 'USER'),
(3, 'almi', 'admin@yahoo.com', NULL, '$2y$10$g/AVXM5laM2w50ABIL7Ba.NgYyJs2sT9/h2wojKxSLjyvzkEITpRG', NULL, '2020-12-26 20:12:47', '2020-12-26 20:12:47', 'USER'),
(4, 'admin', 'admin@gmail.com', NULL, '$2y$10$qJ6g38yEysSYS.aRO2yhueitcbGsUqIEuUtA67gVZJaYp4O1tZ1hC', NULL, '2020-12-27 19:35:30', '2020-12-27 19:35:30', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswas`
--
ALTER TABLE `beasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `beasiswas`
--
ALTER TABLE `beasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
