-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Jan 14, 2020 at 05:56 PM
=======
-- Generation Time: Jan 20, 2020 at 10:00 AM
>>>>>>> 7927f0fc597f9e353f384bc5db3b51c404806393
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `vendor_id`, `name`, `description`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(4, 1, 'NOBIN BANGLADESH', '<p>Keep up to date with Nobin Bangladesh brand\'s official electronic products and one stop reliable online store for all Nabin products.</p>', '1579457074.jpg', 'Active', NULL, '2020-01-19 12:04:34', '2020-01-19 12:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `slug` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `parent_id`, `slug`, `created_at`, `updated_at`) VALUES
<<<<<<< HEAD
(1, 'Men', 'origin Men', NULL, 'Active ', NULL, NULL, NULL, NULL);
=======
(1, 'Refrigerators', 'Origin', '1579506730.jpg', 'Active', NULL, NULL, '2020-01-20 01:52:10', '2020-01-20 01:52:10'),
(2, 'Deep Freezer', 'Deep Freezer', '1579507262.jpg', 'Active', 1, NULL, '2020-01-20 02:01:02', '2020-01-20 02:01:02'),
(3, 'Inverter Refrigerator', 'Inverter Refrigerator', '1579507418.jpg', 'Active', 1, NULL, '2020-01-20 02:03:38', '2020-01-20 02:03:38'),
(4, 'Television', 'Origin', '1579508188.jpg', 'Active', NULL, NULL, '2020-01-20 02:16:28', '2020-01-20 02:16:28'),
(5, 'Smart Tv', 'Smart Tv', '1579508405.jpg', 'Active', 4, NULL, '2020-01-20 02:20:05', '2020-01-20 02:20:05'),
(6, 'Full Hd Tv', 'Full Hd Tv', '1579508480.jpg', 'Active', 4, NULL, '2020-01-20 02:21:20', '2020-01-20 02:21:20'),
(7, 'Air Conditioner', 'Origin', '1579508805.jpg', 'Active', NULL, NULL, '2020-01-20 02:26:45', '2020-01-20 02:26:45'),
(8, 'Inverter Series', 'Inverter Series', '1579508948.jpg', 'Active', 7, NULL, '2020-01-20 02:29:08', '2020-01-20 02:29:08'),
(9, 'Washing Machine', 'Origin', '1579509408.jpg', 'Active', NULL, NULL, '2020-01-20 02:36:48', '2020-01-20 02:36:48'),
(10, 'Full Auto', 'Full Auto', '1579509435.jpg', 'Active', 9, NULL, '2020-01-20 02:37:15', '2020-01-20 02:37:15'),
(11, 'Microwave Oven', 'Origin', '1579510360.png', 'Active', NULL, NULL, '2020-01-20 02:41:15', '2020-01-20 02:52:40'),
(12, 'Combi Grill', 'Combi Grill', '1579510385.jpg', 'Active', 11, NULL, '2020-01-20 02:44:04', '2020-01-20 02:53:05'),
(13, 'Blender & Grinder', 'origin', '1579510500.jpg', 'Active', NULL, NULL, '2020-01-20 02:55:00', '2020-01-20 02:55:00'),
(14, 'Blender', 'Blender', '1579510532.jpg', 'Active', 13, NULL, '2020-01-20 02:55:32', '2020-01-20 02:55:32'),
(15, 'More', 'Origin', '1579510788.jpg', 'Active', NULL, NULL, '2020-01-20 02:57:28', '2020-01-20 02:59:48');
>>>>>>> 7927f0fc597f9e353f384bc5db3b51c404806393

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_01_11_082929_create_vendors_table', 2),
<<<<<<< HEAD
(4, '2020_01_13_132010_create_categories_table', 3);
=======
(4, '2020_01_13_132010_create_categories_table', 3),
(5, '2020_01_18_092922_create_products_table', 4),
(7, '2020_01_18_155809_create_brands_table', 5);
>>>>>>> 7927f0fc597f9e353f384bc5db3b51c404806393

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `email`, `password`, `type`, `status`, `image`, `slug`, `gender`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rifat Chowdhury', 'rifatron999@gmail.com', '$2y$10$a/TxJifPbxwTWu1RWDky6eW8K0NvR01KntSIlsoAFIDV/TX8L0icy', 'Normal', 'Active', NULL, NULL, 'Male', NULL, '2020-01-11 11:58:10', '2020-01-11 11:58:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendors_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
<<<<<<< HEAD
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
>>>>>>> 7927f0fc597f9e353f384bc5db3b51c404806393

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
<<<<<<< HEAD
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
=======
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
>>>>>>> 7927f0fc597f9e353f384bc5db3b51c404806393

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
