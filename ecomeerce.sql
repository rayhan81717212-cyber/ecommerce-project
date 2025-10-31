-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2025 at 05:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomeerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `logo`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'apple.png', 'Leading tech company known for iPhone, iPad and Mac.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(2, 'Samsung', 'samsung.png', 'South Korean electronics giant producing phones and TVs.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(3, 'Sony', 'sony.png', 'Japanese brand famous for PlayStation, TVs and audio devices.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(4, 'Xiaomi', 'xiaomi.png', 'Chinese electronics company with affordable smartphones.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(5, 'Oppo', 'oppo.png', 'Smartphone brand popular for camera phones.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(6, 'Vivo', 'vivo.png', 'Smartphone maker known for music and camera quality.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(7, 'OnePlus', 'oneplus.png', 'Premium Android smartphone brand.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(8, 'Huawei', 'huawei.png', 'Global tech company offering phones and network gear.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(9, 'Infinix', 'infinix.png', 'Affordable smartphone brand popular in Asia and Africa.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(10, 'Realme', 'realme.png', 'Budget-friendly smartphone brand by BBK Electronics.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(11, 'Dell', 'dell.png', 'Leading computer and laptop manufacturer.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(12, 'HP', 'hp.png', 'Computer brand known for laptops, printers and monitors.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(13, 'Lenovo', 'lenovo.png', 'Chinese multinational making PCs and tablets.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(14, 'Asus', 'asus.png', 'Tech brand specializing in laptops and gaming gear.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(15, 'Acer', 'acer.png', 'Taiwanese company producing laptops and accessories.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(16, 'Canon', 'canon.png', 'Japanese company known for cameras and printers.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(17, 'Nikon', 'nikon.png', 'Professional camera manufacturer from Japan.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(18, 'LG', 'lg.png', 'South Korean brand offering electronics and home appliances.', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(19, 'Microsoft', 'microsoft.png', 'US software and hardware giant (Windows, Surface).', '2025-10-28 14:42:18', '2025-10-28 14:42:18'),
(20, 'Google', 'google.png', 'Global tech leader known for Android and online services.', '2025-10-28 14:42:18', '2025-10-28 14:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `status`) VALUES
(41, 'Electronics', 'electronics.png', 'Active'),
(42, 'Mobile Phones', 'mobile.png', 'Active'),
(43, 'Laptops', 'laptops.png', 'Active'),
(44, 'Cameras', 'cameras.png', 'Active'),
(45, 'Televisions', 'tv.png', 'Active'),
(46, 'Home Appliances', 'appliances.png', 'Active'),
(47, 'Audio Devices', 'audio.png', 'Active'),
(48, 'Smart Watches', 'watch.png', 'Inactive'),
(49, 'Gaming', 'gaming.png', 'Active'),
(50, 'Accessories', 'accessories.png', 'Active'),
(51, 'Fashion', 'fashion.png', 'Active'),
(52, 'Men Clothing', 'men_clothing.png', 'Active'),
(53, 'Women Clothing', 'women_clothing.png', 'Active'),
(54, 'Footwear', 'footwear.png', 'Inactive'),
(55, 'Beauty & Health', 'beauty.png', 'Active'),
(56, 'Toys', 'toys.png', 'Active'),
(57, 'Books', 'books.png', 'Inactive'),
(58, 'Stationery', 'stationery.png', 'Active'),
(59, 'Sports', 'sports.png', 'Active'),
(60, 'Furniture', 'furniture.png', 'Active');

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
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `source_type` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_27_132201_create_brand_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `order_number` varchar(50) NOT NULL,
  `total_amount` int(20) NOT NULL,
  `discount_amount` int(10) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp(),
  `update_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `price` int(20) NOT NULL,
  `discount_price` int(10) NOT NULL,
  `stock_quantity` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `brand_id`, `description`, `price`, `discount_price`, `stock_quantity`, `status`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'iPhone 15', 41, 1, 'Latest Apple iPhone model', 1200, 1100, 50, 'Active', 'iphone15.png', '2025-10-28', '2025-10-28'),
(2, 'Samsung Galaxy S23', 42, 2, 'Flagship Samsung phone', 1000, 950, 40, 'Active', 'galaxy_s23.png', '2025-10-28', '2025-10-28'),
(3, 'Dell Inspiron 15', 43, 11, 'Reliable Dell laptop', 800, 750, 30, 'Active', 'dell_inspiron.png', '2025-10-28', '2025-10-28'),
(4, 'HP Pavilion', 44, 12, 'HP Pavilion series laptop', 700, 650, 20, 'Inactive', 'hp_pavilion.png', '2025-10-28', '2025-10-28'),
(5, 'Canon EOS 250D', 45, 16, 'Beginner-friendly DSLR camera', 500, 450, 25, 'Active', 'canon_250d.png', '2025-10-28', '2025-10-28'),
(6, 'Sony WH-1000XM5', 46, 3, 'Noise-cancelling headphones', 300, 280, 60, 'Active', 'sony_headphones.png', '2025-10-28', '2025-10-28'),
(7, 'LG OLED TV', 47, 18, '55 inch OLED television', 1500, 1400, 15, 'Active', 'lg_oled.png', '2025-10-28', '2025-10-28'),
(8, 'Xiaomi Redmi Note 13', 48, 4, 'Affordable Xiaomi smartphone', 250, 230, 80, 'Active', 'redmi_note13.png', '2025-10-28', '2025-10-28'),
(9, 'OnePlus Nord 3', 49, 7, 'Mid-range OnePlus smartphone', 400, 380, 35, 'Inactive', 'oneplus_nord3.png', '2025-10-28', '2025-10-28'),
(10, 'Asus ROG Laptop', 50, 14, 'Gaming laptop by Asus', 1200, 1150, 10, 'Active', 'asus_rog.png', '2025-10-28', '2025-10-28'),
(11, 'Realme GT Neo 3', 51, 10, 'Budget-friendly gaming smartphone', 350, 330, 45, 'Active', 'realme_gt.png', '2025-10-28', '2025-10-28'),
(12, 'Infinix Zero 6', 52, 9, 'Affordable Infinix phone', 200, 180, 70, 'Active', 'infinix_zero6.png', '2025-10-28', '2025-10-28'),
(13, 'Huawei P50', 53, 8, 'Huawei flagship smartphone', 900, 850, 20, 'Inactive', 'huawei_p50.png', '2025-10-28', '2025-10-28'),
(14, 'Canon PowerShot G7', 54, 16, 'Compact digital camera', 600, 550, 30, 'Active', 'canon_g7.png', '2025-10-28', '2025-10-28'),
(15, 'Nikon D5600', 55, 17, 'Entry-level DSLR camera', 650, 600, 15, 'Active', 'nikon_d5600.png', '2025-10-28', '2025-10-28'),
(16, 'Apple MacBook Air', 56, 1, 'Lightweight Apple laptop', 1300, 1250, 25, 'Active', 'macbook_air.png', '2025-10-28', '2025-10-28'),
(17, 'HP Omen 15', 57, 12, 'Gaming laptop', 1400, 1350, 12, 'Active', 'hp_omen.png', '2025-10-28', '2025-10-28'),
(18, 'Sony Alpha A7', 58, 3, 'Mirrorless camera', 1800, 1750, 8, 'Inactive', 'sony_a7.png', '2025-10-28', '2025-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `pyment_methods`
--

CREATE TABLE `pyment_methods` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `payment_getway` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp(),
  `update_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Vendor'),
(3, 'Editor'),
(4, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JNfmVmFMJnGxfY1OPrh43edJ4Un15NTxiXBel3t4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYzZ6NEJaTWptMURmN3Iwc1hPeFA3NVR0THhJTXc1TWhob283UFdtNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9fQ==', 1761673959),
('uYbZyqg7oxL2fUDKMny6z2QjGPHSAf8NkSaasUHM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUDAwb0FzbkpHYkY1Ym1adWtyWTYxM3R5TEU4ZEoxZGJSb1hlOGJGdCI7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1761582239);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role_id` int(10) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pyment_methods`
--
ALTER TABLE `pyment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pyment_methods`
--
ALTER TABLE `pyment_methods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
