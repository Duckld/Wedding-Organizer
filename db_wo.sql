-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2024 at 01:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bridalstyles`
--

CREATE TABLE `bridalstyles` (
  `id_bridalstyle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_paket_bridalstyle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_paket` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_paket` bigint NOT NULL,
  `foto_bridalstyle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dekorasis`
--

CREATE TABLE `dekorasis` (
  `id_dekorasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dekorasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_dekorasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_dekorasi` bigint NOT NULL,
  `foto_dekorasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id_dishes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_paket_dishes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_makanan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_paket` bigint NOT NULL,
  `foto_menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id_dishes`, `nama_paket_dishes`, `deskripsi_makanan`, `harga_paket`, `foto_menu`, `created_at`, `updated_at`) VALUES
('DS0001', 'paket kuyang', 'asd\r\nasd\r\nasd\r\nasd', 15000, NULL, '2024-09-10 21:37:04', '2024-09-10 21:37:04'),
('DS0002', 'paket kuyang', 'asd\r\nasd\r\nasd', 10000, NULL, '2024-09-10 21:37:50', '2024-09-10 21:37:50'),
('DS0003', 'paket kuyang', 'asd\r\nasd\r\nasd', 10000, NULL, '2024-09-10 21:38:25', '2024-09-10 21:38:25');

-- --------------------------------------------------------

--
-- Table structure for table `dishes_images`
--

CREATE TABLE `dishes_images` (
  `id` bigint UNSIGNED NOT NULL,
  `dishes_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes_images`
--

INSERT INTO `dishes_images` (`id`, `dishes_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'DS0003', 'foto_menuD/swCrLsQDCgowClzWiOlY46oE0kyE7QYhssbaR6pa.jpg', '2024-09-10 21:38:25', '2024-09-10 21:38:25'),
(2, 'DS0003', 'foto_menuD/5KyIvzmcB9YkFuQgrNty6fMvHvKRj9zlJ0YMR1lI.jpg', '2024-09-10 21:38:25', '2024-09-10 21:38:25'),
(3, 'DS0003', 'foto_menuD/GUA1YA9l9bcbAnYkRc09P23X7GlH8LG6sKQvSQzC.jpg', '2024-09-10 21:38:25', '2024-09-10 21:38:25');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasis`
--

CREATE TABLE `dokumentasis` (
  `id_dokumentasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_paket_dokumentasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_dokumentasi` enum('Foto','Foto & Video') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_dokumentasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_dokumentasi` bigint NOT NULL,
  `foto_dokumentasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gedungs`
--

CREATE TABLE `gedungs` (
  `id_gedung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_gedung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_gedung` enum('Indoor','Outdoor','indoor & Outdoor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_gedung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas_gedung` bigint NOT NULL,
  `harga_sewa_gedung` bigint NOT NULL,
  `status_gedung` enum('Tersedia','Tidak Tersedia') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_gedung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_gedung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hiburans`
--

CREATE TABLE `hiburans` (
  `id_hiburan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_paket_hiburan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_hiburan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_sewa_hiburan` bigint NOT NULL,
  `foto_hiburan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maincourses`
--

CREATE TABLE `maincourses` (
  `id_maincourse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_paket_maincourse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_makanan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_paket` bigint NOT NULL,
  `foto_menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maincourses`
--

INSERT INTO `maincourses` (`id_maincourse`, `nama_paket_maincourse`, `deskripsi_makanan`, `harga_paket`, `foto_menu`, `created_at`, `updated_at`) VALUES
('MC0001', 'Paket Tenyom', 'asd\r\nadw\r\neqw\r\neqw\r\ne', 20000, NULL, '2024-09-10 21:38:52', '2024-09-10 21:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `maincourse_images`
--

CREATE TABLE `maincourse_images` (
  `id` bigint UNSIGNED NOT NULL,
  `maincourse_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2024_07_27_020137_create_kategori_table', 1),
(31, '2024_08_07_040624_create_items_table', 2),
(38, '2024_08_07_013223_create_vendors_table', 3),
(39, '2024_08_12_041419_create_gedungs_table', 3),
(40, '2024_08_13_022539_create_katerings_table', 3),
(260, '2014_10_12_000000_create_users_table', 4),
(261, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(262, '2019_08_19_000000_create_failed_jobs_table', 4),
(263, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(264, '2024_08_27_033636_create_maincourses_table', 4),
(265, '2024_08_27_033649_create_dishes_table', 4),
(266, '2024_09_03_004221_create_gedungs_table', 4),
(267, '2024_09_03_041607_create_dekorasis_table', 4),
(268, '2024_09_03_070950_create_dokumentasis_table', 4),
(269, '2024_09_04_004356_create_hiburans_table', 4),
(270, '2024_09_04_012036_create_bridalstyles_table', 4),
(271, '2024_09_04_014347_create_souvenirs_table', 4),
(272, '2024_09_04_020538_create_undangans_table', 4),
(274, '2024_09_11_042219_create_dishes_images_table', 4),
(275, '2024_09_17_012814_create_bookings_table', 5),
(279, '2024_09_11_012419_create_maincourse_images_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `souvenirs`
--

CREATE TABLE `souvenirs` (
  `id_souvenir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_paket_souvenir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_paket_souvenir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_paket_souvenir` bigint NOT NULL,
  `foto_souvenir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `undangans`
--

CREATE TABLE `undangans` (
  `id_undangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan_undangan` enum('Kertas Jasmine','Matt Paper','Art Paper','Aster','Art Carton','Concorde','Samson Kraft','Ivory','Linen','Akasia') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_undangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_undangan` bigint NOT NULL,
  `foto_undangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_customer`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('CS0001', 'user', 'user@gmail.com', 'user', '09999999', 'london', NULL, '$2y$12$XD1B7S3wFqJlLcMuQb6QaOmQ7JCKcaAjCYmths9i/D/kgBOosGLmC', NULL, '2024-09-11 00:32:50', '2024-09-11 00:32:50'),
('CS0002', 'admin', 'admin@gmail.com', 'admin', '87654321', 'london123', NULL, '$2y$12$/9iVfuK02pBntiNWbUvxFuMEv9ZCzs6qjNo4uDXMG0yMKM7gJbAdO', NULL, '2024-09-11 00:35:04', '2024-09-11 00:35:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bridalstyles`
--
ALTER TABLE `bridalstyles`
  ADD PRIMARY KEY (`id_bridalstyle`);

--
-- Indexes for table `dekorasis`
--
ALTER TABLE `dekorasis`
  ADD PRIMARY KEY (`id_dekorasi`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id_dishes`);

--
-- Indexes for table `dishes_images`
--
ALTER TABLE `dishes_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumentasis`
--
ALTER TABLE `dokumentasis`
  ADD PRIMARY KEY (`id_dokumentasi`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gedungs`
--
ALTER TABLE `gedungs`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indexes for table `hiburans`
--
ALTER TABLE `hiburans`
  ADD PRIMARY KEY (`id_hiburan`);

--
-- Indexes for table `maincourses`
--
ALTER TABLE `maincourses`
  ADD PRIMARY KEY (`id_maincourse`);

--
-- Indexes for table `maincourse_images`
--
ALTER TABLE `maincourse_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `souvenirs`
--
ALTER TABLE `souvenirs`
  ADD PRIMARY KEY (`id_souvenir`);

--
-- Indexes for table `undangans`
--
ALTER TABLE `undangans`
  ADD PRIMARY KEY (`id_undangan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dishes_images`
--
ALTER TABLE `dishes_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maincourse_images`
--
ALTER TABLE `maincourse_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
