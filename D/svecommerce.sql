-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Jan 22, 2020 at 07:26 PM
=======
<<<<<<< HEAD
-- Generation Time: Jan 14, 2020 at 05:56 PM
=======
-- Generation Time: Jan 20, 2020 at 10:00 AM
>>>>>>> 7927f0fc597f9e353f384bc5db3b51c404806393
>>>>>>> master
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
(6, 1, 'NOBIN BANGLADESH', '<p>Keep up to date with Nobin Bangladesh brand\'s official electronic products and one-stop reliable online store for all Nabin products.</p>', '1579602334.jpg', 'Active', NULL, '2020-01-21 04:25:34', '2020-01-21 04:26:53');

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
<<<<<<< HEAD
(7, '2020_01_18_155809_create_brands_table', 5),
(9, '2020_01_18_092922_create_products_table', 6);
=======
(5, '2020_01_18_092922_create_products_table', 4),
(7, '2020_01_18_155809_create_brands_table', 5);
>>>>>>> 7927f0fc597f9e353f384bc5db3b51c404806393
>>>>>>> master

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
<<<<<<< HEAD
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `stock` int(11) DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `price` double(8,2) DEFAULT NULL,
  `offer_price` double(8,2) DEFAULT NULL,
  `offer_percentage` int(11) DEFAULT NULL,
  `size_capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `vendor_id`, `name`, `specification`, `description`, `stock`, `image`, `price`, `offer_price`, `offer_percentage`, `size_capacity`, `model`, `color`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(8, 10, 6, 1, '(JZ-OF28) Executive to Manager Level chair', '<h2 class=\"pdp-mod-section-title \">Specifications of (JZ-OF28) Executive to Manager Level chair with Headrest (v-mesh)</h2>\r\n<div class=\"pdp-general-features\">\r\n<ul class=\"specification-keys\">\r\n<li class=\"key-li\"><span class=\"key-title\">Brand</span>\r\n<div class=\"html-content key-value\">J &amp; Z enterprise</div>\r\n</li>\r\n<li class=\"key-li\"><span class=\"key-title\">SKU</span>\r\n<div class=\"html-content key-value\">100081024_BD-1043288776</div>\r\n</li>\r\n<li class=\"key-li\"><span class=\"key-title\">Chair Arms</span>\r\n<div class=\"html-content key-value\">Arms Included</div>\r\n</li>\r\n<li class=\"key-li\"><span class=\"key-title\">Chair Back Height</span>\r\n<div class=\"html-content key-value\">Mid-Back</div>\r\n</li>\r\n<li class=\"key-li\"><span class=\"key-title\">Desk Chair Type</span>\r\n<div class=\"html-content key-value\">Ergonomic Chair</div>\r\n</li>\r\n<li class=\"key-li\"><span class=\"key-title\">Material</span>\r\n<div class=\"html-content key-value\">Fabric and Plastic</div>\r\n</li>\r\n<li class=\"key-li\"><span class=\"key-title\">Style</span>\r\n<div class=\"html-content key-value\">Modern</div>\r\n</li>\r\n<li class=\"key-li\"><span class=\"key-title\">Model</span>\r\n<div class=\"html-content key-value\">JZ-OF28</div>\r\n</li>\r\n</ul>\r\n</div>', '<h2 class=\"pdp-mod-section-title outer-title\" data-spm-anchor-id=\"a2a0e.pdp.0.i5.378c4d41ljacPI\">Product details of (JZ-OF28) Executive to Manager Level chair with Headrest (v-mesh)</h2>\r\n<div class=\"pdp-product-detail\" data-spm=\"product_detail\">\r\n<div class=\"pdp-product-desc \" data-spm-anchor-id=\"a2a0e.pdp.product_detail.i0.378c4d41ljacPI\">\r\n<div class=\"html-content pdp-product-highlights\">\r\n<ul class=\"\">\r\n<li class=\"\">High quality gas lift , low back nylon pp made with good quality mesh fabric,</li>\r\n<li class=\"\">Adjustable Headrest</li>\r\n<li class=\"\">Tilt and Locked mechanism,</li>\r\n<li class=\"\">chrome base,dust cover</li>\r\n<li class=\"\">Nylon caster, nylon mixed armrest ,seat also adjustable.</li>\r\n</ul>\r\n</div>\r\n<div class=\"html-content detail-content\">\r\n<p>The office chair is upholstered with mesh fabric/rexine that is comfortable yet durable, making it a smart and stylish solution to any application.With no traditional seat or back board used, this chair provides long lasting support and comfort like no other. It features chrome accents and a slim profile which provide a contemporary look and maximum durability. It also offers simple and intuitive controls such as pneumatic seat height adjustment, 360 degree swivel, tilt tension and tilt lock for added customizability and comfort.<br />The fixed loop arms add to the unique appeal. The comfort, stylish look, and price point of this chair make it a perfect addition to the office, whether at work or at home. This chair meets or exceeds industry standards for safety and durability</p>\r\n</div>\r\n</div>\r\n</div>', 20, '[{\"image\":\"5e26d2ad35c6d.jpg\"},{\"image\":\"5e26d2ad38741.jpg\"}]', 5250.00, 6500.00, 19, '100 kg', 'JZ-OF28', 'Black , Green', 'Disable', NULL, '2020-01-21 04:29:24', '2020-01-22 09:06:07'),
(9, 2, 6, 1, 'Chest Freezer-116 Ltr-SINGER', '<h3>Product Specification:</h3>\r\n<ul>\r\n<li>116 Ltr chest Freezer</li>\r\n<li>Antibacterial Gasket Door</li>\r\n<li>Internal Light</li>\r\n<li>Quiet Energy Saving Design</li>\r\n<li>Top Open Balanced Hinge</li>\r\n<li>Long lasting Wired Basket</li>\r\n<li>Quick Freezing Capacity</li>\r\n<li>Fresh &amp; Cool Technology</li>\r\n<li>Lock &amp; Key for Safety Lock</li>\r\n<li>Grey Color Out Look</li>\r\n<li>Adjustable Thermostat for Temperature Control</li>\r\n<li>Refrigerant Gas: R600a (42g)</li>\r\n<li>Rated Voltage: 220v</li>\r\n<li>Rated Frequency: 50Hz</li>\r\n<li>Rated Current: 1.4A</li>\r\n<li>Net Weight: 29kg</li>\r\n</ul>', '<table id=\"product-attribute-specs-table\" class=\"data table additional-attributes\"><caption class=\"table-caption\">More Information</caption>\r\n<tbody>\r\n<tr>\r\n<th class=\"col label\" scope=\"row\">Brand</th>\r\n<td class=\"col data\" data-th=\"Brand\">Singer</td>\r\n</tr>\r\n<tr>\r\n<th class=\"col label\" scope=\"row\">Warranty</th>\r\n<td class=\"col data\" data-th=\"Warranty\">8 Years Compressor + 2 Year Service Warranty</td>\r\n</tr>\r\n<tr>\r\n<th class=\"col label\" scope=\"row\">Delivery</th>\r\n<td class=\"col data\" data-th=\"Delivery\">\r\n<ul>\r\n<li><strong>Delivery within 7 Working Days. (Conditions Apply) See Order Info.</strong></li>\r\n<li><strong>Free Delivery To Your Doorstep (For On-Line Purchases)</strong></li>\r\n</ul>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 20, '[{\"image\":\"5e282ad5ce0c8.jpg\"}]', 16490.00, 16160.00, 2, '116 Ltr', NULL, NULL, 'Available', NULL, '2020-01-22 04:58:29', '2020-01-22 06:28:35'),
(10, 3, 6, 1, 'Refrigerator-175 Ltr-SINGER-Red', '<p><strong>Product Category:</strong></p>\r\n<ul>\r\n<li>Type of Appliance: Refrigerator</li>\r\n<li>Description of Appliance: Double door</li>\r\n<li>Function of Appliance: Top mounted</li>\r\n<li>Defrosting (fridge/freezer): Defrost</li>\r\n<li>Door Material: Colorful glass</li>\r\n</ul>\r\n<p><strong>Product Capacity:</strong></p>\r\n<ul>\r\n<li>Capacity: 175L</li>\r\n<li>&nbsp; - Freezer compartment: 58L</li>\r\n<li>&nbsp; - Fridge compartment: 117L</li>\r\n<li>&nbsp; - Percentage of Freezer &amp; Fridge Size: 40% : 60%</li>\r\n</ul>\r\n<p><strong>Key Features:</strong></p>\r\n<ul>\r\n<li>Control system: Mechanical</li>\r\n<li>Condenser: inside</li>\r\n<li>Evaporator: inside</li>\r\n</ul>\r\n<p><strong>General Features:</strong></p>\r\n<ul>\r\n<li>Voltage / Frequency: 220~240 / 50Hz</li>\r\n<li>Climate class: N/ST</li>\r\n<li>Energy Efficiency: Eco +</li>\r\n<li>Freezing Compartment Star: 4 star</li>\r\n<li>Refrigerant Gas: R600a</li>\r\n<li>Certifications: CB</li>\r\n<li>Compressor Brand: GMCC</li>\r\n<li>Adjustable Thermostat: Yes</li>\r\n</ul>\r\n<p><strong>Fridge Compartment:</strong></p>\r\n<ul>\r\n<li>Door Balcony: PS / 3 / transparent</li>\r\n<li>Inner Light: Yes</li>\r\n<li>Chill Crisper: No</li>\r\n<li>Vegetable Crisper: Plastic/1/Transparent</li>\r\n<li>Vegetable Crisper: Cover Glass/1</li>\r\n<li>Eggs Tray: 1 nos</li>\r\n</ul>\r\n<p><strong>Freezer Compartment:</strong></p>\r\n<ul>\r\n<li>Ice Tray(s): 1</li>\r\n</ul>\r\n<p><strong>Accessories:</strong></p>\r\n<ul>\r\n<li>Adjustable Feet (Front): 2nos</li>\r\n<li>Castors (Rear): 2nos</li>\r\n<li>Length of Cable/incl. plug: 180 cm</li>\r\n<li>Lock and Key: Yes</li>\r\n<li>Reversible Door: Yes</li>\r\n<li>Handle: Recess able</li>\r\n</ul>\r\n<p><strong>Packing dimensions &amp; loadability:</strong></p>\r\n<ul>\r\n<li>Product (W*D*H) (mm): 525*583*1285</li>\r\n<li>Packaging (W*D*H) (mm): 565*595*1350</li>\r\n<li>Weight (Net/Gross kg): 39 / 43</li>\r\n<li>Loading (40hq/20ft): 147</li>\r\n<li>Stack Height: 3</li>\r\n</ul>', '<p>175 Ltr Capacity | Frost Refrigerator | Top Mounted | R600a Environment Friendly Gas | Antibacterial Gasket Door |Available in Red Romance and Black Color | Longer Fresh Technology</p>', NULL, '[{\"image\":\"5e2842ab6bf8c.jpg\"}]', 29720.00, 24964.00, 16, '175 Ltr', NULL, NULL, 'Available', NULL, '2020-01-22 06:40:11', '2020-01-22 09:06:23'),
(11, 8, 6, 1, 'Air Conditioner-2.0 Ton-SINGER-WIFI Inverter', '<h3>Product Specification:</h3>\r\n<ul>\r\n<li>Capacity: 24000BTU</li>\r\n<li>Rated power Input: 2190W</li>\r\n<li>Voltage: 230V/50Hz</li>\r\n<li>EER (W/W): 3.05</li>\r\n<li>Elite Platform</li>\r\n<li>Auto restart</li>\r\n<li>5 Fan Speed</li>\r\n<li>Sleep mode</li>\r\n<li>Auto-protection</li>\r\n<li>Dual-direction drainage design</li>\r\n<li>Independent Dehumidification</li>\r\n<li>Intelligent defrost</li>\r\n<li>Simplified PCB &amp; PCB box</li>\r\n<li>No Connection Between Condensate Water &amp; Electricity</li>\r\n<li>Twin Rotator Compressor</li>\r\n<li>Gold Fin</li>\r\n<li>Double Swing function</li>\r\n<li>Fast &amp; Strong Cooling</li>\r\n<li>Comfortable Cooling,</li>\r\n<li>Keep humidity</li>\r\n<li>Wi-Fi control</li>\r\n<li>Refrigerant Gas: Elite - R410a Heating</li>\r\n</ul>', '<table id=\"product-attribute-specs-table\" class=\"data table additional-attributes\">\r\n<tbody>\r\n<tr>\r\n<th class=\"col label\" scope=\"row\">Brand</th>\r\n<td class=\"col data\" data-th=\"Brand\">Singer</td>\r\n</tr>\r\n<tr>\r\n<th class=\"col label\" scope=\"row\">Capacity (in ton)</th>\r\n<td class=\"col data\" data-th=\"Capacity (in ton)\">2 Ton</td>\r\n</tr>\r\n<tr>\r\n<th class=\"col label\" scope=\"row\">Capacity (Btu/hr)</th>\r\n<td class=\"col data\" data-th=\"Capacity (Btu/hr)\">24000 Btu/hr</td>\r\n</tr>\r\n<tr>\r\n<th class=\"col label\" scope=\"row\">Color</th>\r\n<td class=\"col data\" data-th=\"Color\">Black</td>\r\n</tr>\r\n<tr>\r\n<th class=\"col label\" scope=\"row\">Blue Fin</th>\r\n<td class=\"col data\" data-th=\"Blue Fin\">Yes</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, '[{\"image\":\"5e28435887537.jpg\"}]', 92990.00, 90200.00, 3, NULL, NULL, NULL, 'Available', NULL, '2020-01-22 06:43:04', '2020-01-22 09:15:26'),
(12, 5, 6, 1, 'Android Voice Control Smart TV 4K HDR SINGER (S49)', NULL, '<p>des&nbsp;</p>', NULL, '[{\"image\":\"5e2843a250518.jpg\"}]', 61990.00, 57030.00, 8, NULL, NULL, NULL, 'Available', NULL, '2020-01-22 06:44:18', '2020-01-22 06:44:18'),
(13, 10, 6, 1, 'Washing Machine-Singer-11 KG-Top Loading', NULL, '<p>11 Kg washing Capacity | Affordable double tub | Semi Auto | Floral Glass Door | User Friendly and Energy Efficient</p>', NULL, '[{\"image\":\"5e284474897dc.jpg\"}]', 13990.00, NULL, NULL, NULL, NULL, NULL, 'Available', NULL, '2020-01-22 06:47:48', '2020-01-22 06:47:48'),
(14, 2, 6, 1, 'Microwave Oven-20 Ltr-SINGER', NULL, '<p>des</p>', NULL, '[{\"image\":\"5e2844c77647a.jpg\"}]', 7300.00, 5986.00, 18, NULL, NULL, NULL, 'Available', NULL, '2020-01-22 06:49:11', '2020-01-22 06:49:11'),
(15, 2, 6, 1, 'BEKO Blender', NULL, '<p>des</p>', NULL, '[{\"image\":\"5e28452ac9c60.jpg\"}]', 3990.00, NULL, NULL, NULL, NULL, NULL, 'Out of Stock', NULL, '2020-01-22 06:50:50', '2020-01-22 07:05:25');

-- --------------------------------------------------------

--
=======
>>>>>>> master
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
=======
<<<<<<< HEAD
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
=======
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
>>>>>>> master

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
<<<<<<< HEAD
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
=======
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
>>>>>>> 7927f0fc597f9e353f384bc5db3b51c404806393
>>>>>>> master

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
