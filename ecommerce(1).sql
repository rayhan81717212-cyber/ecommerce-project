-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2025 at 07:10 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'banner/UJHzzysLiS80rFNJXLGV9jDyIdfPbVZyD8Dn6buF.jpg', '2025-11-17 09:02:07', '2025-11-17 09:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `logo`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'brand/R2TJPdhkeYBQze2wFRj1R24VtPURbXVFOSdUXYXu.png', 'Leading electronics brand from South Korea', '2025-11-09 15:35:41', '2025-11-09 10:00:44'),
(2, 'Apple', 'brand/gcls3s0HH9AIoULGTw5e00Sy8Fi4pCCLesQUBACR.png', 'Famous for iPhone, MacBook and other electronics', '2025-11-09 15:35:41', '2025-11-09 09:58:40'),
(3, 'Sony', 'brand/VvJoulsQ6perXOoPkvND9e5sJRbNe0uualSsIsns.png', 'Global brand known for electronics and entertainment', '2025-11-09 15:35:41', '2025-11-09 10:01:14'),
(4, 'LG', 'brand/sX5ZjwtyIcaEL1IhlI7fajwjsVtAinFNK2vDCmO4.png', 'Innovative home appliances and electronics', '2025-11-09 15:35:41', '2025-11-09 10:00:17'),
(5, 'Dell', 'brand/B9JYrAcujCuRZWwcFx0v8JXl8NCphWOiMWnlbtGI.png', 'Trusted brand for laptops and computers', '2025-11-09 15:35:41', '2025-11-09 09:59:54'),
(6, 'HP', 'brand/0FL9rS4MZWCftwwgNFyW5vQqajeg5J00I5wngl6Y.png', 'Renowned brand for computers, printers, and accessories', '2025-11-09 15:35:41', '2025-11-09 09:57:20'),
(7, 'Lenovo', 'brand/xsd8TAhPy4AnoptFsoNYA8eUxrOujkSWydWVleO6.png', 'Popular for laptops, tablets and smart devices', '2025-11-09 15:35:41', '2025-11-09 09:56:56'),
(8, 'Nike', 'brand/nfxhZ9c116kwMwWzPbscZolMe5SfNSg2T5GxhCs4.png', 'Leading brand in sportswear and shoes', '2025-11-09 15:35:41', '2025-11-09 09:56:28'),
(9, 'Adidas', 'brand/tc8cTuqH1etpymxEDTT4EzoeEjjh4GxlVeRtX6nk.png', 'Famous for sportswear, shoes and accessories', '2025-11-09 15:35:41', '2025-11-09 09:55:58'),
(11, 'Canon', 'brand/RukpqxBjJkjS5howr9T9e5WIhSdVR2JzyE9NGnyw.png', 'Leader in cameras, printers and imaging solutions', '2025-11-09 15:35:41', '2025-11-09 09:55:26'),
(12, 'Microsoft', 'brand/t342Z9cbClKD24LrKFb4bcubjezvYck0EdbuqnZf.png', 'Famous for software, laptops, and electronics', '2025-11-09 15:35:41', '2025-11-09 09:55:02'),
(13, 'Asus', 'brand/HxYMr6smdVbEb0NfdyhwqlMmlWmUPpnlaWLVirPb.png', 'Trusted brand for laptops, motherboards and gaming', '2025-11-09 15:35:41', '2025-11-09 09:54:32'),
(14, 'Acer', 'brand/5pppUHDbKRdEB1hRKHM6zXrqFEdKrstP6Pm9PTVa.png', 'Acer is a leading global brand in computers and electronics, renowned for producing high-quality laptops, desktops, monitors, and accessories. With a focus on innovation, performance, and reliability, Acer caters to both professionals and consumers, offering devices that enhance productivity, gaming, and everyday computing experiences. The brand combines cutting-edge technology with sleek designs, making it a trusted choice worldwide', '2025-11-09 15:35:41', '2025-11-09 09:53:59'),
(15, 'OnePlus', 'brand/TSmtNX8Pfd2PpWWbHA3ovSGrwozoq3HmqxMAx8ng.jpg', '“OnePlus is a premium technology brand known for designing and manufacturing high-performance smartphones and innovative smart devices. Focusing on cutting-edge technology, sleek design, and seamless user experience, OnePlus products deliver speed, reliability, and style. The brand has earned a global reputation for combining top-tier hardware with intuitive software, catering to tech enthusiasts who value both performance and aesthetics.”', '2025-11-09 15:35:41', '2025-11-09 09:53:07'),
(16, 'Puma', 'brands/HvA7St5Mw8j3DX426wpWlbnSU4UrstWIpxDcPnqe.png', '“Puma is a globally renowned sportswear and lifestyle brand, celebrated for its innovative and high-quality athletic footwear, apparel, and accessories. With a perfect blend of performance, comfort, and style, Puma caters to athletes, fitness enthusiasts, and fashion-conscious individuals alike. The brand continually pushes the boundaries of sports technology while maintaining a strong presence in streetwear and lifestyle fashion, making it a favorite choice worldwide.”', '2025-11-09 09:49:03', '2025-11-09 09:49:03'),
(17, 'Xiaomi', 'brands/Xv3I7iBeZ2JFzZiwgiJKHvFbl0X7AMONqCGHabTm.png', 'Xiaomi is a globally recognized technology brand, celebrated for offering innovative smartphones, smart devices, and consumer electronics at competitive prices. Combining cutting-edge technology, sleek design, and user-friendly features, Xiaomi products deliver high performance and reliability for everyday use. The brand continually expands its ecosystem with smart home devices, wearables, and IoT products, making it a favorite choice for tech enthusiasts worldwide', '2025-11-09 10:09:16', '2025-11-09 10:09:16'),
(18, 'Realme', 'brands/Lx4Bg7Kp835TgXCM16OE0jisCjuY7KD0bCEgNDBN.png', 'Brand Overview\r\n\r\n• realme is a Chinese consumer electronics brand founded on May 4, 2018 in Shenzhen, Guangdong. \r\nWikipedia\r\n+2\r\nMoglix\r\n+2\r\n\r\n• It began as a sub‑brand of OPPO (which itself is part of the BBK Electronics group) and quickly moved to launch its own identity. \r\nWikipedia\r\n+1\r\n\r\n• The brand is known for delivering powerful performance and trendy design at budget‑friendly price points. \r\nMoglix\r\n+1\r\n\r\nMission & Vision\r\n\r\n• realme aims to provide young users around the world with tech experiences “beyond expectations” — combining advanced features, bold design and affordability. \r\nRealme\r\n+1\r\n\r\n• The official brand site states: “A tech brand that better understands young users” and emphasizes design, performance, and value. \r\nRealme\r\n\r\nWhat Sets realme Apart\r\n\r\nYouth‑centric branding — Stylish devices with colours, trendy finishes, and marketing aimed at Gen Z and young millennials.\r\n\r\nFeatures that punch above the price — High refresh‑rate displays, strong performance chips, large batteries and fast‑charging technology even in lower and mid‑price segments. \r\nMoglix\r\n+1\r\n\r\nGlobal expansion speed — From inception in 2018 to being among the fastest‑growing smartphone brands globally within a few years. \r\nWikipedia\r\n+1\r\n\r\nKey Facts\r\n\r\nFounded: May 4, 2018. \r\nWikipedia\r\n\r\nHeadquarters: Shenzhen, Guangdong, China. \r\nWikipedia\r\n\r\nCore products: Smartphones, smart devices (TVs, watches, earphones), AIoT ecosystem. \r\nMoglix\r\n\r\nSlogan/Tagline: “Dare to Leap” — reflecting the ambition to push boundaries. \r\nMoglix\r\n\r\nWhy Consider realme?\r\n\r\nFor users who want modern features (5G, high refresh rate, strong cameras) without spending premium prices.\r\n\r\nFor youth and trend‑aware consumers who value design and style alongside performance.\r\n\r\nFor growing global markets where value is a strong differentiator.', '2025-11-11 10:53:22', '2025-11-11 10:53:22'),
(19, 'Tecno', 'brands/K6uCdyntoCAwREGLV4Dk7HSrJ8lftfE4TbmvO6aa.png', 'Tecno Brand Description:\r\nTecno Mobile is a global smartphone brand committed to providing innovative, high-quality mobile devices at affordable prices. Established in 2006, Tecno is a subsidiary of Transsion Holdings, headquartered in Shenzhen, China. The brand focuses on emerging markets, particularly in Africa, South Asia, and Southeast Asia, where it has built a strong reputation for delivering feature-rich smartphones that blend modern design, powerful performance, and excellent camera technology.\r\n\r\nTecno’s philosophy, “Stop at Nothing,” reflects its dedication to continuous innovation and empowering users through technology. From AI-powered cameras and long-lasting batteries to stylish designs and user-friendly interfaces, Tecno aims to make cutting-edge mobile technology accessible to everyone.', '2025-11-11 11:45:45', '2025-11-11 11:45:45'),
(20, 'Infinix', 'brands/7uKuDc9QPjjEa4qmQ5T7AvOPbnRg1TFZZ0qZt1Gr.jpg', '📱 Infinix Smartphone Overview\r\n\r\nThe Infinix smartphone lineup combines style, performance, and innovation at an affordable price. Designed with modern users in mind, Infinix phones feature sleek aesthetics, powerful processors, and long-lasting batteries, making them ideal for both work and play.\r\n\r\nWith vibrant displays for immersive viewing, high-resolution AI cameras for stunning photography, and fast-charging technology, Infinix ensures you stay connected and productive all day long. Powered by Android OS with XOS interface, it delivers a smooth and customizable experience.\r\n\r\nWhether you choose the Infinix Hot series for budget-friendly performance, the Note series for multitasking and creativity, or the Zero series for flagship-level power — Infinix offers something for everyone.', '2025-11-12 00:45:58', '2025-11-12 00:45:58'),
(22, 'Gigasonic', 'brands/oIkkm6TxiQNgF5Q3I0AP4DYmQZTQqp3rrBHxNRUA.jpg', 'Gigasonic  logo', '2025-11-17 09:50:10', '2025-11-17 09:50:10');

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
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(20, 'Mobile Phone', 'Active', '2025-11-09 15:33:26', '2025-11-09 15:33:26'),
(21, 'Laptops', 'Active', '2025-11-09 09:38:56', '2025-11-09 09:38:56'),
(22, 'Tablets', 'Active', '2025-11-11 12:02:40', '2025-11-11 12:02:40'),
(23, 'Monitor', 'Active', '2025-11-17 09:52:44', '2025-11-17 09:52:44'),
(24, 'Watch', 'Active', '2025-11-17 11:44:22', '2025-11-17 11:44:22');

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
(4, '2025_10_27_132201_create_brand_table', 1),
(5, '2025_10_27_144257_create_product_table', 1),
(6, '2025_11_04_170438_create_categories_table', 1),
(7, '2025_11_08_163437_create_roles_table', 1),
(8, '2025_11_11_043040_create_productgalleries_table', 2),
(9, '2025_11_12_145101_create_carts_table', 3),
(12, '2025_11_14_171842_create-order-table', 4),
(13, '2025_11_17_062626_create-payment-table', 5),
(14, '2025_11_17_143453_create-banner-table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_number` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `shipping_fee` double NOT NULL,
  `grand_total` double NOT NULL,
  `status` varchar(20) NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'pending',
  `stripe_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_number`, `amount`, `shipping_fee`, `grand_total`, `status`, `payment_method`, `payment_status`, `stripe_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'ORD-6919743B43AE5', 66996, 0, 66996, 'pending', 'cod', 'pending', NULL, '2025-11-16 00:50:35', '2025-11-16 00:50:35'),
(2, NULL, 'ORD-691975AD52C74', 20998, 100, 21098, 'pending', 'cod', 'pending', NULL, '2025-11-16 00:56:45', '2025-11-16 00:56:45'),
(3, NULL, 'ORD-691976F372175', 20998, 200, 21198, 'pending', 'cod', 'pending', NULL, '2025-11-16 01:02:11', '2025-11-16 01:02:11'),
(4, NULL, 'ORD-6919773C2B74C', 34999, 100, 35099, 'pending', 'cod', 'pending', NULL, '2025-11-16 01:03:24', '2025-11-16 01:03:24'),
(5, NULL, 'ORD-69197773AB9C8', 34999, 100, 35099, 'pending', 'cod', 'pending', NULL, '2025-11-16 01:04:19', '2025-11-16 01:04:19'),
(6, NULL, 'ORD-6919D2427A7FB', 20998, 100, 21098, 'pending', 'cod', 'pending', NULL, '2025-11-16 07:31:46', '2025-11-16 07:31:46'),
(7, NULL, 'ORD-6919DD919B3AE', 20998, 100, 21098, 'pending', 'cod', 'pending', NULL, '2025-11-16 08:20:01', '2025-11-16 08:20:01'),
(8, NULL, 'ORD-6919DE45E27DF', 111994, 500, 112494, 'pending', 'cod', 'pending', NULL, '2025-11-16 08:23:01', '2025-11-16 08:23:01'),
(9, NULL, 'ORD-691A98A9589D5', 224000, 200, 224200, 'pending', 'cod', 'pending', NULL, '2025-11-16 21:38:17', '2025-11-16 21:38:17'),
(10, 4, 'ORD-691AAF6A55547', 10499, 100, 10599, 'pending', 'cod', 'pending', NULL, '2025-11-16 23:15:22', '2025-11-16 23:15:22'),
(11, 4, 'ORD-691AB195E647C', 20998, 500, 21498, 'pending', 'cod', 'pending', NULL, '2025-11-16 23:24:37', '2025-11-16 23:24:37'),
(12, 4, 'ORD-691AB61B17B24', 43000, 200, 43200, 'pending', 'cod', 'pending', NULL, '2025-11-16 23:43:55', '2025-11-16 23:43:55'),
(13, 4, 'ORD-691AC55332126', 89900, 200, 90100, 'pending', 'cod', 'pending', NULL, '2025-11-17 00:48:51', '2025-11-17 00:48:51'),
(14, 4, 'ORD-691AC5C49131D', 89900, 200, 90100, 'pending', 'cod', 'pending', NULL, '2025-11-17 00:50:44', '2025-11-17 00:50:44'),
(15, NULL, 'ORD-691B20DE7B098', 64996, 200, 65196, 'pending', 'cod', 'pending', NULL, '2025-11-17 07:19:26', '2025-11-17 07:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `order_addresses`
--

CREATE TABLE `order_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_addresses`
--

INSERT INTO `order_addresses` (`id`, `order_id`, `first_name`, `last_name`, `email`, `phone`, `country`, `city`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'Md', 'Rayhan', 'rayhan8171@gmail.com', '01705675623', 'Bangladesh', 'Narayanganj', '161. MN Goshal Road, Madanganj', '2025-11-16 00:50:35', '2025-11-16 00:50:35'),
(2, 2, 'Md', 'Rayhan', 'rayhan8171@gmail.com', '01705675623', 'Bangladesh', 'Narayanganj', '161. MN Goshal Road, Madanganj', '2025-11-16 00:56:45', '2025-11-16 00:56:45'),
(3, 3, 'Md', 'Harvey', 'rayhan8171@gmail.com', '01705675623', 'Bangladesh', 'Dhaka', '161. MN Goshal Road, Madanganj', '2025-11-16 01:02:11', '2025-11-16 01:02:11'),
(4, 4, 'Md', 'Rayhan', 'rayhan8171@gmail.com', '01705675623', 'Bangladesh', 'Narayanganj', '161. MN Goshal Road, Madanganj', '2025-11-16 01:03:24', '2025-11-16 01:03:24'),
(5, 5, 'Md', 'Rayhan', 'rayhan8171@gmail.com', '01705675623', 'Bangladesh', 'Narayanganj', '161. MN Goshal Road, Madanganj', '2025-11-16 01:04:19', '2025-11-16 01:04:19'),
(6, 6, 'Md', 'Mehedi', 'rayhan8171@gmail.com', '01705675623', 'Bangladesh', 'Narayanganj', '161. MN Goshal Road, Madanganj', '2025-11-16 07:31:46', '2025-11-16 07:31:46'),
(7, 7, 'Md', 'Harvey', 'rayhan8171@gmail.com', '01705675623', 'Bangladesh', 'Narayanganj', '161. MN Goshal Road, Madanganj', '2025-11-16 08:20:01', '2025-11-16 08:20:01'),
(8, 8, 'Rahman', 'Harvey', 'rayhan8171@gmail.com', '01705675623', 'Bangladesh', 'comilla', '161. MN Goshal Road, Madanganj', '2025-11-16 08:23:02', '2025-11-16 08:23:02'),
(9, 9, 'Md', 'Mehedi', 'rayhan8171@gmail.com', '0150000000', 'Bandladesh', 'Dhaka', '161. MN Goshal Road, Madanganj', '2025-11-16 21:38:17', '2025-11-16 21:38:17'),
(10, 10, 'Sumaiya', 'Akter', 'sumaiya@gmail.com', '01581717212', 'Bangladesh', 'Narayanganj', '161. MN Goshal Road, Madanganj', '2025-11-16 23:15:22', '2025-11-16 23:15:22'),
(11, 11, 'Md', 'Mehedi', 'mehedi@gmail.com', '0150000000', 'Bangladesh', 'comilla', 'Daudkandi', '2025-11-16 23:24:37', '2025-11-16 23:24:37'),
(12, 12, 'Sofiq', 'Rahman', 'sariq@gmail.com', '01701514525', 'Bangladesh', 'Dhaka', 'Shantibag, Dhaka', '2025-11-16 23:43:55', '2025-11-16 23:43:55'),
(13, 13, 'Md', 'Mehedi', 'rayhan8171@gmail.com', '0150000000', 'Bangladesh', 'Dhaka', '161. MN Goshal Road, Madanganj', '2025-11-17 00:48:51', '2025-11-17 00:48:51'),
(14, 14, 'Md', 'Mehedi', 'rayhan8171@gmail.com', '0150000000', 'Bangladesh', 'Dhaka', '161. MN Goshal Road, Madanganj', '2025-11-17 00:50:44', '2025-11-17 00:50:44'),
(15, 15, 'Md', 'Mehedi', 'rayhan8171@gmail.com', '0150000000', 'Bangladesh', 'Dhaka', '161. MN Goshal Road, Madanganj', '2025-11-17 07:19:26', '2025-11-17 07:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 2, 10499, '2025-11-16 00:50:35', '2025-11-16 00:50:35'),
(2, 1, 5, 2, 22999, '2025-11-16 00:50:35', '2025-11-16 00:50:35'),
(3, 2, 11, 2, 10499, '2025-11-16 00:56:45', '2025-11-16 00:56:45'),
(4, 3, 11, 2, 10499, '2025-11-16 01:02:11', '2025-11-16 01:02:11'),
(5, 4, 10, 1, 34999, '2025-11-16 01:03:24', '2025-11-16 01:03:24'),
(6, 5, 10, 1, 34999, '2025-11-16 01:04:19', '2025-11-16 01:04:19'),
(7, 6, 11, 2, 10499, '2025-11-16 07:31:46', '2025-11-16 07:31:46'),
(8, 7, 11, 2, 10499, '2025-11-16 08:20:01', '2025-11-16 08:20:01'),
(9, 8, 11, 4, 10499, '2025-11-16 08:23:02', '2025-11-16 08:23:02'),
(10, 8, 10, 2, 34999, '2025-11-16 08:23:02', '2025-11-16 08:23:02'),
(11, 9, 3, 2, 112000, '2025-11-16 21:38:17', '2025-11-16 21:38:17'),
(12, 10, 11, 1, 10499, '2025-11-16 23:15:22', '2025-11-16 23:15:22'),
(13, 11, 11, 2, 10499, '2025-11-16 23:24:37', '2025-11-16 23:24:37'),
(14, 12, 9, 1, 43000, '2025-11-16 23:43:55', '2025-11-16 23:43:55'),
(15, 14, 1, 1, 89900, '2025-11-17 00:50:44', '2025-11-17 00:50:44'),
(16, 15, 11, 2, 10499, '2025-11-17 07:19:26', '2025-11-17 07:19:26'),
(17, 15, 8, 2, 21999, '2025-11-17 07:19:26', '2025-11-17 07:19:26');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `shipping_fee` decimal(10,2) NOT NULL,
  `grand_total` decimal(10,2) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_method`, `amount`, `shipping_fee`, `grand_total`, `status`, `created_at`, `updated_at`) VALUES
(1, 14, 'cod', 89900.00, 200.00, 90100.00, 'pending', '2025-11-17 00:50:44', '2025-11-17 00:50:44'),
(2, 15, 'cod', 64996.00, 200.00, 65196.00, 'pending', '2025-11-17 07:19:26', '2025-11-17 07:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `productgalleries`
--

CREATE TABLE `productgalleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productgalleries`
--

INSERT INTO `productgalleries` (`id`, `product_id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 4, 'gallery/SO3RLdbJyUTh1z2gQH6P1isHs61IGCv94QP4YQn6.webp', '2025-11-11 06:39:43', '2025-11-11 06:39:43'),
(2, 4, 'gallery/Rsyp6z3HTHTENIuUlESDw1EgRbAjT9btVXEn2yVg.webp', '2025-11-11 06:39:43', '2025-11-11 06:39:43'),
(3, 4, 'gallery/lOj20GTBddXZ8SaI1jXGmikhcT7eYnE9wVzuoBs2.webp', '2025-11-11 06:39:43', '2025-11-11 06:39:43'),
(4, 6, 'gallery/VCQMPs66ctbcnx6F5wOLqskdcgls8Fx6cfal1Ks2.webp', '2025-11-11 10:49:33', '2025-11-11 10:49:33'),
(5, 6, 'gallery/WHR2yVonBmHDu3GmhBugIBkoVGL0xOqCrTilqU0j.webp', '2025-11-11 10:49:33', '2025-11-11 10:49:33'),
(6, 7, 'gallery/sxGCYrhUWfC6tprOI8auoYNDDCjLxEIzq29vkTbE.webp', '2025-11-11 10:54:49', '2025-11-11 10:54:49'),
(7, 7, 'gallery/rgiJTpwaOQ21ojGfkyG1wSihIO7FLy7KOYlHXHWx.webp', '2025-11-11 10:54:49', '2025-11-11 10:54:49'),
(8, 7, 'gallery/gmqJzxMHsxfDhq0d0mO73fQLvGD6BRGZ0K8b2H3J.webp', '2025-11-11 10:54:49', '2025-11-11 10:54:49'),
(9, 7, 'gallery/JBI93Bz7n4yh7C1DHHgd6upbeH8FfLkcWhv9gKUY.webp', '2025-11-11 10:54:49', '2025-11-11 10:54:49'),
(11, 8, 'gallery/g5oXlgFfzY67OvaRzeZRNNt8tGD7Pz2rr4sS2X4Y.webp', '2025-11-11 11:53:12', '2025-11-11 11:53:12'),
(12, 8, 'gallery/1CbgtsvRCvXUvzszMdJZJAC3g5lzk0pGLsiNQq3U.webp', '2025-11-11 11:53:12', '2025-11-11 11:53:12'),
(13, 8, 'gallery/Ezjr7Nk5yGonRsMJmuYRPh5YjqJM5fT5K3XHlFAp.webp', '2025-11-11 11:53:12', '2025-11-11 11:53:12'),
(14, 8, 'gallery/rcMBjt2dEWYHIrnCMpbHIWXXunhaqTYqm3mbqxfG.webp', '2025-11-11 11:53:12', '2025-11-11 11:53:12'),
(15, 10, 'gallery/2lypt4UU532zoHjAIinNDs4335FH7NIZPpjSlTwD.webp', '2025-11-11 12:04:53', '2025-11-11 12:04:53'),
(16, 10, 'gallery/2wahUTOTIzKPHgGRwtvl1biJ90wYGszYr08igsAL.webp', '2025-11-11 12:04:53', '2025-11-11 12:04:53'),
(17, 10, 'gallery/hf6cQTmsiUyy3drA0vNkp2kCaOCMSf01jAPBvXLx.webp', '2025-11-11 12:04:53', '2025-11-11 12:04:53'),
(18, 9, 'gallery/5lIjdkTAEMrAK0eV1UIaXIAZ9IAhcokg8N1lzWMl.webp', '2025-11-11 23:53:08', '2025-11-11 23:53:08'),
(19, 9, 'gallery/DcvSHmlLVBA6I7pjH8wkfAuPUXoW1jX1DIfPPbZl.webp', '2025-11-11 23:53:08', '2025-11-11 23:53:08'),
(20, 9, 'gallery/FxKRVizUl9L0HZcDopQZ1070pak9Vr83XWvq8zw4.webp', '2025-11-11 23:53:08', '2025-11-11 23:53:08'),
(21, 9, 'gallery/J2yMbfyxhC3sI6WjCRDxoJNzN9R2YJq2g3KgrAUH.webp', '2025-11-11 23:53:08', '2025-11-11 23:53:08'),
(22, 11, 'gallery/8dTju5fVJcuhFMSDZW4mkA2HbbGRv6L5S1Hesem1.webp', '2025-11-12 00:58:06', '2025-11-12 00:58:06'),
(23, 11, 'gallery/vQ7LELO0Gan4TWf2jjtNQeaWrTaynG9Djebujoss.webp', '2025-11-12 00:58:06', '2025-11-12 00:58:06'),
(24, 11, 'gallery/5wGbT7UxPfgjhSfjHjViYRJvVML5wL9qy9mFyRhm.webp', '2025-11-12 00:58:06', '2025-11-12 00:58:06'),
(25, 11, 'gallery/kK84NcnljMrLwcAWa7d7ISuiRQ35yWMzppiTabM5.webp', '2025-11-12 00:58:06', '2025-11-12 00:58:06'),
(26, 12, 'gallery/1ax3aRrEvYm89K0GdDZhrFO7o66OoN9twnq5cGFm.webp', '2025-11-17 08:32:30', '2025-11-17 08:32:30'),
(27, 12, 'gallery/cb18rqqPNWt7xpPWCazCWniOKNWemgqe3oXkrbPM.webp', '2025-11-17 08:32:30', '2025-11-17 08:32:30'),
(28, 12, 'gallery/i1epQzFVn20uUbq0pNzzIcwDDg19IDc9RGN6osEY.webp', '2025-11-17 08:32:30', '2025-11-17 08:32:30'),
(29, 12, 'gallery/3bHDk40B4zmPtdQqsUXV3VOwAumw5Dg6xrJTSgMh.webp', '2025-11-17 08:32:30', '2025-11-17 08:32:30'),
(30, 13, 'gallery/5fnUFHksISr77V20g6xSZWkDsG5S5UNgSKg0xtCY.webp', '2025-11-17 09:46:05', '2025-11-17 09:46:05'),
(31, 13, 'gallery/lAVmQ2tXXayn59m7HYK3JTrFn2FkPmYXUpqqRNkd.webp', '2025-11-17 09:46:05', '2025-11-17 09:46:05'),
(32, 14, 'gallery/tQPPhabVbHOLT6P5ItuOvTDqMhM1Ho5Kgf9dnHsE.webp', '2025-11-17 09:54:20', '2025-11-17 09:54:20'),
(33, 14, 'gallery/oTdm4y9bgYLW1cLyAgGGirM5G6HqBGL0dB5P9Eii.webp', '2025-11-17 09:54:20', '2025-11-17 09:54:20'),
(34, 15, 'gallery/dEwE0u7QXJmqmGFD4MbrKD6TBjk6jqeTOgUXwEt3.webp', '2025-11-17 11:46:19', '2025-11-17 11:46:19'),
(35, 15, 'gallery/sOL3ZDNXhSBt6tWcOcZ7R1jPkzbVaPYjOk0W9ws0.webp', '2025-11-17 11:46:19', '2025-11-17 11:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `discount_price` double DEFAULT NULL,
  `stock_quantity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `brand_id`, `short_description`, `description`, `price`, `discount_price`, `stock_quantity`, `status`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'OnePlus 15', 20, 15, '', 'OnePlus 15 Price in Bangladesh 2024 & Release Date\r\nName	OnePlus 15\r\nUnofficial Price	BDT. 89,900\r\nRelease Date	27-Oct-2025\r\nMarket Status	In Stock\r\nVariant	RAM: 12GB + ROM: 256GB', 89900, NULL, 10, 'Active', 'product/kBgM8PavGGOGpkXxHAEAbFXP8EG3PbdsNKLPK90D.webp', '2025-11-09 09:46:15', '2025-11-09 09:46:15'),
(2, 'Apple iPhone 15 Pro Max', 20, 2, '', 'Apple iPhone 15 Pro Max Overview\r\nThe Apple iPhone 15 Pro Max is a powerhouse of performance and capacity. Here we will share the price of the Apple iPhone 15 Pro Max price in Bangladesh. Also share it all specs.\r\n\r\nThis smartphone was released on 22 September 2023 in Bangladesh. It runs on iOS 17 and is upgradable to iOS 17.4. The device is powered by Apple A17 Pro chipset and a hexa-core CPU. Its 6.7-inch LTPO Super Retina XDR OLED display with a resolution of 1290x2796 pixels, and supported by a 120Hz refresh rate.\r\n\r\nFor photography is a triple camera setup, 48MP main camera sensor, 12MP periscope telephoto sensor, and 12MP ultrawide sensor. The selfie camera offers a 12MP sensor with depth/biometrics capabilities. The Apple iPhone 15 Pro Max features a titanium frame and Ceramic Shield glass for both the front and back. It’s IP68 rated for dust and water resistance. It has 4441 mAh battery with  PD2.0 version 15W wireless (MagSafe) fast charging.\r\n\r\nApple iPhone 15 Pro Max price in Bangladesh\r\nThe Apple iPhone 15 Pro Max price in Bangladesh is BDT 179,999 with 8GB of RAM and 256GB of phone storage. It is officially available in Bangladesh. Also it has an unofficial variant; its price is BDT 1,42,000. This phone has another 2 different storage variants 512GB, and 1TB. This phone comes in 4 different colors: Black Titanium, White Titanium, Blue Titanium, Natural Titanium. You can buy this model from Apple official brand shops, Apple authorized shops, and online platforms.', 239999, 179999, 5, 'Active', 'product/fxY5aZuGHkgKJ9M6fWqQQ79OGJNCfy9Joxexnzdk.webp', '2025-11-09 10:04:11', '2025-11-09 10:04:11'),
(3, 'Apple iPhone 14 Plus', 20, 2, '', 'Apple iPhone 14 Plus Overview\r\nApple iPhone 14 Plus emerges as a beacon of innovation in the smartphone market, offering a blend of style, performance, and cutting-edge technology. This model stands out as a testament to Apple’s commitment to pushing the boundaries of what’s possible in mobile technology. We will share the price here in Bangladesh and also share full details of iPhone 14 Plus.\r\n\r\nApple iPhone 14 Plus Price in Bangladesh\r\nIt comes in three storage options – 128GB, 256GB, or 512GB with 6GB of RAM each. The iPhone 14 Plus price in Bangladesh is 112,000 Taka in the Global variant.\r\n\r\nMost Highlighted Features of Apple iPhone 14 Plus\r\nDisplay: 6.7-inch 1200 nits (peak) brightness Super Retina XDR display offers 1284 x 2778 pixels.\r\nCamera System: Dual-camera setup with a 12MP main sensor boasts advanced features like Photonic Engine and sensor-shift optical image stabilization.\r\nPerformance: Powered by the A15  (2×3.23 GHz Avalanche + 4×1.82 GHz Blizzard) Bionic chipset and GPU 5-core graphics, the iPhone 14 Plus delivers exceptional performance and efficiency.\r\nSafety Features: Groundbreaking safety capabilities like Crash Detection and Emergency SOS via satellite set a new industry standard.\r\nBattery Life: Li-Ion 4323 mAh, non-removable battery. It boasts the best battery life ever in an iPhone, making it a reliable companion for all-day use.\r\nShort Overview of Apple iPhone 14 Plus \r\nThis phone is a remarkable blend of elegance and performance. Released on 7 October 2022, it boasts a 6.7-inch Super Retina XDR OLED display, offering vivid colors and sharp details. The device is powered by the Apple A15 Bionic chip, ensuring swift and efficient operation. It comes with a dual-camera system that includes a 12MP main camera with sensor-shift optical image stabilization and a 12MP ultra-wide camera, capable of capturing stunning photos and videos. \r\n\r\niPhone 14 Plus operates on iOS 16, upgradable to iOS 17.3.1, and is available in 128GB, 256GB, and 512GB storage options without a card slot. It supports 5G connectivity for rapid data transfer and internet browsing. The phone’s build quality is premium, with a Ceramic Shield glass front and back, and an aluminum frame. It also features an IP68 rating for dust and water resistance, ensuring durability.\r\n\r\nFinal Thought \r\nThe iPhone 14 Plus is more than just your average phone. It really makes a statement. It has top-notch features and a beautiful design that shows off luxury and tech know-how. If you want the full premium experience without sacrificing how it works or looks, the iPhone 14 Plus is the way to go. It’s one classy device.', 112000, NULL, 10, 'Active', 'product/91OjttWWu0fEioyolr1mJYPZk4uwlAZypZ0b0Jcy.webp', '2025-11-09 10:05:20', '2025-11-09 10:05:20'),
(4, 'Samsung Galaxy S23 Ultra', 20, 1, '', 'Samsung Galaxy S23 Ultra Overview\r\nSamsung Galaxy S23 Ultra represents the pinnacle of Samsung’s smartphone innovation. As the latest addition to the Galaxy S series, it boasts cutting-edge technology and premium features that cater to both tech enthusiasts and everyday users seeking a high-performance device. Here we will share all important features and reviews of Samsung Galaxy S23 Ultra.\r\n\r\nMost Highlighted Features of Samsung Galaxy S23 Ultra\r\n200MP Camera captures stunningly detailed shots with the groundbreaking.\r\nEnhance productivity and creativity with the built-in S Pen.\r\n6.8-inch screen Dynamic AMOLED 2X Display with 120Hz refresh rate.\r\nSnapdragon 8 Gen 2 Chipset experiences lightning-fast performance.\r\n5000mAh Battery with 45W Fast Charging. \r\nReview of Samsung Galaxy S23 Ultra\r\nThe Samsung Galaxy S23 Ultra stands tall as the pinnacle of smartphone innovation, a symphony of cutting-edge features, powerful performance, and remarkable camera capabilities. Whether you’re a tech enthusiast, content creator, or a professional seeking the ultimate smartphone experience, the S23 Ultra delivers in spades.\r\n\r\nDisplay & Design\r\nThe S23 Ultra’s design is a harmonious blend of elegance and functionality. Its sleek form factor features Gorilla Glass Victus 2 on both the front and back, ensuring durability against accidental drops and scratches. The aluminum frame adds a touch of sophistication while providing structural integrity. But it’s the 6.8-inch Dynamic AMOLED 2X display that steals the show. \r\n\r\nWith a 120Hz refresh rate, it’s buttery smooth, whether you’re swiping through apps or scrolling through social media. The HDR10+ support ensures vibrant colors and deep blacks, making it a treat for multimedia consumption. And with a peak brightness of 1750 nits, outdoor visibility remains excellent even under direct sunlight. The S Pen integration, a hallmark of the Galaxy Note series, adds versatility, allowing you to jot down notes, sketch, and annotate with precision.\r\n\r\nPerformance & Software\r\nUnder the hood, the S23 Ultra houses the formidable Snapdragon 8 Gen 2 chipset. Its octa-core CPU and Adreno 740 GPU work in perfect harmony, delivering lightning-fast performance. Multitasking becomes a breeze, whether you’re switching between apps, editing photos, or running resource-intensive games. \r\n\r\nThe One UI 6 interface provides a seamless user experience, with thoughtful optimizations and a clean design. Samsung’s commitment to software updates ensures that you’ll receive four years of Android OS updates, keeping your device relevant and secure.\r\n\r\nCamera Quality\r\nCamera setup is amazing. It has a 200MP main sensor that takes incredibly detailed photos, even when pixel binning. There is a 10x optical zoom telephoto lens for clear wildlife or neighbor photos from far away, going up to 100x digital zoom. \r\n\r\nA 3x optical zoom telephoto lens is perfect for mid-range shots. The ultrawide lens has a 120 degree field of view for big landscapes and groups with straight lines. Low light photos are great too with Nightography combining exposures and video is very stable, even in tough situations.\r\n\r\nBattery & Charging\r\nThe 5000mAh battery keeps you going all day. Whether you’re binge-watching your favorite series, attending virtual meetings, or gaming, the S23 Ultra won’t leave you hanging. And when it’s time to recharge, the 45W fast charging gets you from zero to hero swiftly. No more waiting around for hours.\r\n\r\nSamsung Galaxy S23 Ultra Price in Bangladesh\r\nSamsung Galaxy S23 Ultra price in Bangladesh is BDT 2,24,999 for 12GB RAM 256GB ROM and BDT 2,30,999 for 12GB RAM 512GB ROM. It is a high-end flagship device with a premium price tag Like previous flagship models, the S23 Ultra is priced at the high end of the market. For those looking for cutting-edge features and top-of-the-line specifications offered by the S23 Ultra, it will be an investment worth considering.', 224999, NULL, 15, 'Active', 'product/SQzcoCzKSfk4MeinCM2iaLMhoKYOwPxv20JalPsF.webp', '2025-11-09 10:06:26', '2025-11-09 10:06:26'),
(5, 'Xiaomi Redmi Note 13 4G', 20, 17, '', 'Xiaomi Redmi Note 13 4G Overview\r\nXiaomi Redmi Note 13 4G is a mid-range smartphone that offers a flagship-level experience. It was released in January 2024 and has a large 6.67-inch AMOLED display, a 108MP triple camera, a powerful Snapdragon 685 processor, and a 5000mAh battery with 33W fast charging. In this article, we’re  going to share Xiaomi Redmi Note 13 4G full details. So, keep reading this article.\r\n\r\nMost Highlighted Features of Xiaomi Redmi Note 13 4G\r\nSuper-Clear 108MP Triple Camera: The main camera of the Redmi Note 13 4G has a 108MP sensor that can capture stunning photos with high resolution and detail. It also has an 8MP ultra-wide camera and a 2MP macro camera for different scenarios.\r\n120Hz AMOLED Display: The Redmi Note 13 4G features a 6.67-inch AMOLED display with a 120Hz refresh rate and peak brightness of 1800 nits.\r\nPowerful Snapdragon 685 Processor: It is powered by the Snapdragon 685 chipset, which is a 6nm octa-core processor with 4 x 2.8 GHz Cortex-A73 and 4×1.9 GHz Cortex-A53 cores.\r\n5000mAh Battery with 33W Fast Charging: The Redmi Note 13 4G has a large 5000mAh battery that can last for a whole day of heavy use. It also supports 33W fast charging that can charge the phone from 0% to 50% in 29 minutes and 100% in 70 minutes.\r\nShort Overview of Xiaomi Redmi Note 13 4G\r\nThe Redmi Note 13 4G is a stylish and affordable smartphone that offers a lot of features for its price. It has a sleek design with a flat frame and a deco-less back. It comes in four colors: Midnight Black, Mint Green, Ice Blue, and Ocean Sunset. The phone has a 6.67-inch AMOLED display with a 120Hz refresh rate and a 108MP triple camera. It runs on Android 13 with MIUI 14 and has a Snapdragon 685 processor and a 5000mAh battery. The phone also has a fingerprint sensor under the display, a 16MP selfie camera, and a hybrid dual SIM slot.\r\n\r\nXiaomi Redmi Note 13 Price in Bangladesh\r\nXiaomi Redmi Note 13 4G is a mid-range smartphone with a 108MP triple camera, a 120Hz AMOLED display, a Snapdragon 685 processor, and a 5000mAh battery. It was launched in January 2024 and is available in four colors: Midnight Black, Mint Green, Ice Blue, and Ocean Sunset. The official price of the Xiaomi Redmi Note 13 in Bangladesh is BDT 20,999 for the 6GB/128GB variant and BDT 22,999 for the 8GB/256GB variant.\r\n\r\nFinal Thought\r\nThe Xiaomi Redmi Note 13 4G is a great choice for anyone looking for a mid-range smartphone that can deliver a flagship-level experience. It has a superb camera, a smooth display, a powerful processor, and a large battery. It also has a stylish design and a reasonable price. Thank you all for reading this article.', 22999, 20999, 10, 'Active', 'product/PNv8aT9RXy4gjol8CDtE6n73s2DVY2RFZkiYusqj.webp', '2025-11-09 10:10:04', '2025-11-09 10:10:04'),
(6, 'Apple iPhone 13', 20, 2, '', 'Apple iPhone 13 Overview\r\nApple iPhone 13 is the latest generation of the world’s best smartphone, launched in September 2021. It features a sleek and durable design, an advanced dual-camera system, a powerhouse chip, and an impressive leap in battery life. It also supports 5G, wireless charging, Face ID, and water resistance. It comes in five beautiful colors: pink, blue, midnight, starlight, and (PRODUCT)RED. In this article, we will try to share full details on Apple iPhone 13.\r\n\r\nMost Highlighted Features of Apple iPhone 13\r\n6.1-inch OLED screen:  The iPhone 13 has a 6.1-inch OLED screen with a resolution of 1170 x 2532 pixels and a pixel density of 460 ppi.\r\n12MP Camera: It has a dual-camera system at the back, consisting of a 12-megapixel wide-angle lens and a 12-megapixel ultra-wide-angle lens.\r\n3240 mAh non-removable battery: The iPhone 13 has a 3240 mAh non-removable battery that can provide up to 19 hours of talk time, 15 hours of internet use, 17 hours of video playback, or 75 hours of audio playback.\r\n64-bit hexa-core processor: It is powered by the A15 Bionic chip, which is a 64-bit hexa-core processor with two high-performance cores and four high-efficiency cores.\r\nShort Overview of Apple iPhone 13\r\nApple iPhone 13 is a powerful and versatile smartphone that offers a stunning display, a dual-camera system, a long-lasting battery, and a fast chip. It is ideal for users who want a high-quality and user-friendly device. It also has a sleek design, a sturdy build, and a water-resistant body. This device runs on iOS 15, which is the latest version of Apple’s operating system. It has a range of features and apps that enhance the user experience, such as Siri, Apple Pay, iCloud, iMessage, FaceTime, and more. It also has a high level of security and privacy, thanks to the Face ID and the encryption of the data.\r\n\r\nApple iPhone 13 Price in Bangladesh\r\nApple iPhone 13 is the latest generation of the world’s best smartphone, launched in September 2021. It features a sleek and durable design, an advanced dual-camera system, a powerhouse chip, and an impressive leap in battery life. It comes in five beautiful colors: pink, blue, midnight, starlight, and (PRODUCT)RED. The price of the iPhone 13 in Bangladesh is BDT 87,000.\r\n\r\nFinal Thought\r\nApple iPhone 13 is a remarkable smartphone that offers a lot of value and quality. It is a great choice for users who want a beautiful and durable display, a versatile and powerful camera, a reliable and long-lasting battery, and fast and smooth performance. It is also a secure and user-friendly device that runs on iOS 15, which is one of the most advanced and popular operating systems in the world.', 124999, 87000, 20, 'Active', 'product/LIS1p2ISWCS5gARGmpzM2xVPAViJKK5goOHWP8a2.webp', '2025-11-11 10:49:10', '2025-11-11 10:49:10'),
(7, 'Realme 12 Pro', 20, 18, '', 'Realme 12 Pro Overview\r\nThe Realme 12 Pro, with its 8GB+256GB variant, stands out as a powerful contender in the smartphone market. This model boasts a robust Qualcomm Snapdragon 6 Gen 1 processor, ensuring smooth performance across applications and gaming. The 8GB of RAM is complemented by a Dynamic RAM feature that can add up to 8GB of virtual RAM, effectively doubling the available memory when needed. The device’s 6.7-inch AMOLED display, with a 120Hz refresh rate and full-HD+ resolution, promises vibrant visuals and fluid scrolling, making it a delight for media consumption and daily tasks alike.\r\n\r\nPhotography enthusiasts will appreciate the triple rear camera setup, featuring a 50MP main sensor, a 32MP telephoto lens with 2x optical zoom, and an 8MP ultrawide lens, catering to a variety of shooting scenarios. Also 16MP front camera ensures high-quality selfies and video calls. With a 5000mAh battery and 67W fast charging, users can expect extended usage and quick recharge times. The Realme 12 Pro runs on Android 14, offering the latest software features and security updates.\r\n\r\nRealme 12 Pro Price in Bangladesh\r\nRealme 12 Pro unofficial price in Bangladesh is BDT. 37,499. The Phone is also available in 3 different unofficial variants (8GB+128GB), (12GB+256GB), and (12GB+512GB). Realme 12 Pro available in 2 different colors: Submarine Blue, and Navigator Beige. This phone has not officially arrived in Bangladesh yet. So if you want to buy it then you can buy from an unofficial shop and online platform.', 36500, NULL, 5, 'Active', 'product/8hyu2HKmFSjuLVHc5Q7ulc1741RQs5cDEAgNecCL.webp', '2025-11-11 10:54:22', '2025-11-11 10:54:22'),
(8, 'Tecno Spark 20 Pro', 20, 19, '', 'The Tecno Spark 20 Pro emerges as a noteworthy contender in the smartphone market, blending advanced features with affordability. Launched on December 15, 2023. It’s designed for tech-savvy users seeking performance without the premium price in Bangladesh.\r\n\r\nTecno Spark 20 Pro Price in Bangladesh\r\nTecno Spark 20 Pro 8GB RAM and 256GB ROM price in Bangladesh is BDT 19,999, striking a balance between cost and capabilities for budget-conscious consumers.\r\n\r\n5 Most Highlighted Features of Tecno Spark 20 Pro\r\nCamera: Boasting a 108MP main camera, the Tecno Spark 20 Pro captures stunningly detailed photos.\r\nDisplay:  6.78\" FHD+ IPS LCD with a 120Hz refresh rate offers a smooth visual experience.\r\nPerformance: Powered by the Mediatek Helio G99 chipset and 8GB RAM, it handles multitasking with ease.\r\nBattery: 5000mAh battery coupled with 33W fast charging ensures extended usage.\r\nDesign: IP53 dust and splash resistance, along with a sleek design available in multiple colors, adds to its appeal.\r\nShort Overview of Tecno Spark 20 Pro \r\nTecno Spark 20 Pro is a feature-packed smartphone that offers a blend of performance and style. It has a 6.78-inch with 120Hz refresh rate screen with really smooth scrolling. The screen looks sharp with 1080x2460 pixels. Under the hood, it’s powered by the Mediatek Helio G99 chipset, paired with 8GB of RAM and 256GB of internal storage. \r\n\r\nPhotography enthusiasts will appreciate the 108MP main camera, while selfies are handled by a 32 MP front camera. The device runs on Android 13 and is equipped with a 5000mAh battery supporting 33W fast charging. Additional features include IP53 dust and splash resistance, dual SIM capabilities, NFC, and a side-mounted fingerprint sensor for security.\r\n\r\nFinal Thought\r\n\r\nTecno Spark 20 Pro stands out in the mid-range segment, offering a compelling mix of features that are sure to attract those who want a high-quality smartphone experience without the high cost. Its combination of a high-resolution camera, smooth display, and durable battery makes it a smart choice for consumers in Bangladesh.', 21999, 19999, 10, 'Active', 'product/cv9OlqcasOGT0wzwt5NTzns99wESMt3U2MkMA3aT.webp', '2025-11-11 11:47:17', '2025-11-11 11:47:17'),
(9, 'OnePlus 11R', 20, 15, '', 'OnePlus 11R Overview\r\nOnePlus 11R is a flagship smartphone from OnePlus that was released in February 2023. It is powered by the Snapdragon 8+ Gen 1 chipset, which offers impressive performance and power efficiency. The OnePlus 11R also features a 6.74-inch Fluid AMOLED display with 120Hz refresh rate, a 50MP triple camera system, and a 5000mAh battery with 100W SUPERVOOC fast charging. Keep reading this article to know more details on this device.\r\n\r\nMost Highlighted Features of OnePlus 11R\r\n120 Hz Super Fluid Display: This phone has a stunning 6.74-inch Fluid AMOLED display with 1B colors, HDR10+, and 1450 nits peak brightness.\r\nSnapdragon 8+ Gen 1: The OnePlus 11R is one of the first smartphones to use the Snapdragon 8+ Gen 1 chipset, which is based on a 4nm process and has an octa-core CPU, an Adreno 730 GPU, and a Hexagon 8 AI engine.\r\n50 MP IMX890 Triple Camera System: It has a versatile camera system that consists of a 50MP main camera, an 8MP ultra-wide camera, and a 2MP macro camera.\r\n100W SUPERVOOC Fast Charging: The OnePlus 11R has a large 5000mAh battery that can last for a day of heavy use. But what makes it even more impressive is the 100W SUPERVOOC fast charging technology, which can charge the battery from 0 to 100% in just 20 minutes.\r\nShort Overview of OnePlus 11R\r\nThe OnePlus 11R is a premium smartphone that offers a lot of value for its price. It has a sleek and elegant design, with a glass front and back, and a plastic frame. It has a 6.74-inch Fluid AMOLED display with 1240 x 2772 pixels resolution, 20:9 aspect ratio, and 451 ppi density. It runs on Android 13, with OxygenOS 13 as the custom skin. It has three storage options: 128GB with 8GB RAM, 256GB with 16GB RAM, and 512GB with 18GB RAM. \r\n\r\nIt has a triple camera system on the back, with a 50MP main camera, an 8MP ultra-wide camera, and a 2MP macro camera. It has a 16MP selfie camera on the front. This phone has a 5000mAh battery with 100W SUPERVOOC fast charging. It has a fingerprint sensor under the display, and other sensors such as accelerometer, gyro, proximity, compass, and color spectrum. It has a dual SIM slot, NFC, infrared port, and USB Type-C 2.0 port. It comes in three colors: Galactic Silver, Sonic Black, and Solar Red.\r\n\r\nOnePlus 11R Price in Bangladesh\r\nOnePlus 11R is a flagship smartphone that offers a lot of features and performance for a reasonable price. It has a 6.74-inch Fluid AMOLED display, a Snapdragon 8+ Gen 1 chipset, a 50MP triple camera system, and a 5000mAh battery with 100W fast charging. It runs on Android 13 with OxygenOS 13 as the custom skin. The OnePlus 11R price in Bangladesh starts from BDT 43,000 for the 8GB/128GB variant, and goes up to BDT 50,000 for the 16GB/256GB variant.\r\n\r\nFinal Thought\r\nThe OnePlus 11R is a great smartphone that offers a lot of features and performance for a reasonable price. It is a worthy competitor to other flagship phones in the market, and it can satisfy the needs of most users. Whether you are looking for a fast and smooth display, a powerful and efficient chipset, a versatile and high-quality camera system, or a super fast and intelligent charging technology, the OnePlus 11R has it all. It is a phone that you can rely on for your daily tasks, entertainment, and gaming. The OnePlus 11R is a phone that you can be proud of owning.', 43000, NULL, 0, 'Active', 'product/bB2zuZieAdl0yViGYBZWZqEeKWFysyUNGHqATzUp.webp', '2025-11-11 11:57:06', '2025-11-12 00:13:58'),
(10, 'Samsung Galaxy Tab A9', 22, 1, 'Samsung Galaxy Tab A9 offers a sleek design, vibrant display, and powerful performance for everyday use. Powered by an octa-core processor with up to 8GB RAM, it ensures smooth multitasking and entertainment. With Dolby Atmos speakers, long battery life, and Android 13, it’s perfect for work, study, and play.', 'The Samsung Galaxy Tab A9, was released on October 5, 2023. It offers a compelling blend of entertainment and productivity. Available in two sizes, this Android 13 tablet caters to diverse needs. \r\n\r\nThis tab comes in two flavors: the 8.7-inch Wi-Fi model (SM-X110) and the 8.7-inch LTE version (SM-X115). Both variants share a sleek design, measuring 211 x 124.7 x 8 mm and weighing around 332 grams. The tablet’s slim profile ensures portability without compromising on functionality.\r\n\r\nThe 8.7-inch TFT LCD Display boasts a resolution of 800 x 1340 pixels, offering a comfortable viewing experience. Under the hood, the Mediatek Helio G99 chipset powers the device, featuring an octa-core CPU (2x2.2 GHz Cortex-A76 & 6x2.0 GHz Cortex-A55) and a Mali-G57 MC2 GPU. With 4GB or 8GB RAM options and 64GB or 128GB internal storage, the Galaxy Tab A9 handles multitasking and storage needs efficiently.\r\n\r\nIts 8 MP rear camera captures decent photos and videos at 1080p@30fps, while the 2 MP front camera serves for selfies and video calls. The 5100 mAh non-removable battery ensures extended usage, and the 15W wired charging keeps you powered up.\r\n\r\nWhether streaming videos, playing games, or reading e-books, the Galaxy Tab A9’s display and stereo speakers enhance your multimedia experience. With the One UI 5.1 interface, you can seamlessly switch between apps, manage tasks, and stay organized. With its budget-friendly price tag, it can surely be a good option for you.\r\n\r\nSamsung Galaxy Tab A9 Price in Bangladesh\r\nThe Samsung Galaxy Tab A9 Price in Bangladesh is BDT 33,499 (Official) for its 4GB RAM and 64GB storage variant. It comes in three different colors which are Graphite, Silver, and Navy. You can purchase this tablet from Samsung\'s official showroom, authorized shop, and online marketplace.', 34999, 33499, 10, 'Active', 'product/TRvotGypKtDl371ujNUpgRWjlrGOVb1RUo0fHtab.webp', '2025-11-11 12:04:27', '2025-11-12 00:55:51'),
(11, 'Infinix Smart 8', 20, 20, 'Infinix Smart 8 Price in Bangladesh 2024 & Release Date\r\nName	Infinix Smart 8\r\nOfficial Price	BDT. 10,499\r\nRelease Date	11-Nov-2023\r\nMarket Status	In Stock\r\nVariant	RAM: 4GB + ROM: 64GB', 'The Infinix Smart 8, with its 4GB+64GB variant, is a noteworthy entrant in the budget smartphone segment. Released in November 2023, it offers a blend of performance and features that cater to the needs of cost-conscious consumers. The device runs on Android 13 and is powered by the Unisoc T606 chipset, ensuring a smooth user experience.\r\n\r\nIt boasts a 6.6-inch IPS LCD display with a 90Hz refresh rate, providing a responsive and immersive visual experience. The camera setup includes a 13MP main sensor complemented by an auxiliary lens, capable of capturing decent photographs. A 5000mAh battery backs the hardware, offering a reliable day-long usage.\r\n\r\nOne of the reasons to consider the Infinix Smart 8 is its value proposition. It provides a side-mounted fingerprint sensor, dual-band Wi-Fi, and a dedicated microSD slot for storage expansion, features often found in higher-priced models.\r\n\r\nInfinix Smart 8 price in Bangladesh\r\nThe Infinix Smart 8 official price in Bangladesh is BDT 10,499 for the 4GB+64GB variant. Also has another official variant 4GB+128GB. The phone\'s design is modern, available in colors like Timber Black, Shiny Gold, Crystal Green, and Galaxy White, appealing to a range of personal tastes. It\'s available for purchase in Infinix brand shops, authoraid, and online marketplace.', 10499, NULL, 5, 'Active', 'product/9zmlyjQ6TUOA0Gy0fDUWNHEso0FDKhnOYGCvEeUH.webp', '2025-11-12 00:47:19', '2025-11-12 00:47:19'),
(12, 'Infinix Hot 12', 20, 20, 'Infinix Hot 12 Price in Bangladesh 2024 & Release Date\r\nName	Infinix Hot 12\r\nOfficial Price	BDT. 16,299\r\nRelease Date	26-Apr-2022\r\nMarket Status	In Stock\r\nVariant	RAM: 4GB + ROM: 128GB', 'Infinix Hot 12 Overview\r\nThe Infinix Hot 12 emerges as a compelling choice for smartphone enthusiasts, particularly those seeking a blend of performance and value. This model, equipped with 4GB of RAM and 128GB of internal storage, strikes a balance between multitasking efficiency and ample space for apps and media. Notably, the device is also available in a 6GB RAM variant, catering to users who demand even smoother performance.\r\n\r\nIn terms of features, the Infinix Hot 12 boasts a sizable 6.82-inch IPS LCD display, offering a comfortable viewing experience for media consumption and gaming. The MediaTek Helio G85 chipset at its core ensures reliable performance, while the 5000mAh battery capacity provides the endurance needed for extended use without frequent recharging. The phone’s camera setup, including a 13MP primary sensor, allows users to capture life’s moments with clarity. Also, the side-mounted fingerprint sensor enhances security and convenience.\r\n\r\nInfinix Hot 12 Price in Bangladesh\r\nThe official price in Bangladesh is BDT 16,299 for the base variant 4GB RAM and 128GB ROM. This phone has 6GB RAM and 128GB ROM variant. It comes in 4 different colors, including Racing Black, Legend White, Origin Blue, and Lucky Green. You can buy this phone from Infinix\'s official brand shop, authorized shop, and online platform.', 16299, NULL, 10, 'Active', 'product/pICrIhuTbFi52yns8X543jlGVIYqF8JBCXZFnz83.webp', '2025-11-17 08:32:09', '2025-11-17 08:32:09'),
(13, 'Microsoft Surface Laptop 7th Edition Snapdragon X Plus 12 Core Copilot+ & AI Optimized Laptop Black', 21, 12, 'Key Features\r\nMPN: ZGM-00037\r\nModel: Surface Laptop 7th Edition\r\nProcessor: Qualcomm Snapdragon X Plus 12 Core\r\nRAM: 16GB LPDDR5x, Storage: 512GB PCIe 4.0 SSD\r\nDisplay: 13.8\" (2304 x 1536p) HDR Touchscreen, 120hz\r\nFeatures: Copilot+ PC, Wi-Fi 7, Type-C, Backlit Keyboard', 'Microsoft Surface Laptop 7th Edition Snapdragon X Plus 12 Core Copilot+ & AI Optimized Laptop Black\r\nThe Microsoft Surface Laptop 7th Edition Snapdragon X Plus is a breakthrough ultraportable PC with AI performance, a luxurious design, and smooth operation. This gadget, powered by the advanced Microsoft Surface Snapdragon X Plus 10 Core Laptop CPU with 42MB L3 cache and a high-performance Qualcomm Hexagon NPU with 45 trillion operations per second, is intended for next-generation applications. It has 16GB LPDDR5X RAM and a high-speed 1TB PCIe 4.0 SSD for lightning-fast multitasking and storage performance. The 13.8-inch PixelSense Flow HDR touchscreen display has a resolution of 2304 x 1536, a 120Hz dynamic refresh rate, a 3:2 aspect ratio, a 1400:1 contrast ratio, and Dolby Vision IQ compatibility, making the Microsoft Surface 7th Edition Snapdragon X Plus ideal for both work and entertainment. It is also covered in Corning Gorilla Glass 5. This Microsoft Surface Laptop 7th Edition is a certified Copilot+ PC, which enables intelligent Windows 11 features that adapt to your workload. The built-in Qualcomm Adreno GPU, backlit chiclet keyboard, and precision touchpad improve the user experience, while the 1080p Full HD Surface Studio Camera, Dual Studio Mics, and Omnisonic speakers with Dolby Atmos make it ideal for virtual meetings and content creation. Wi-Fi 7, Bluetooth 5.4, 2x USB4 Type-C ports, 1x USB-A 3.0 connector, and a 3.5mm headphone jack enable quick data transfer, charging, and multi-device usage. The Microsoft Surface Laptop 7th Edition Snapdragon X Plus, which runs Windows 11 Home and is protected by TPM 2.0 firmware, is powered by a 54 Wh battery that can provide up to 20 hours of video playback or 13 hours of web browsing and is accompanied by a 39W USB-C converter.\r\nTurbocharged with Snapdragon X Series processor\r\nThe Microsoft Surface Laptop 7th Edition Snapdragon X Plus offers insanely rapid CPU performance, redefining what a thin and light notebook can do. At its heart lies the powerful Snapdragon X Series Platform CPU, which is designed to tackle demanding tasks with lightning speed and efficiency. This turbocharged NPU (Neural Processing Unit) elevates performance to new heights, allowing for lightning-fast AI-powered features that boost both creativity and productivity. Whether you are editing media, handling massive datasets, or using AI-powered apps, the Surface Laptop\'s Snapdragon X Plus 12-core CPU ensures smooth multitasking and responsiveness.\r\nBuy Microsoft Surface Laptop 7th Edition Snapdragon X Plus 12 Core Laptop from Star Tech\r\nIn Bangladesh, you can get original Microsoft Surface Laptop 7th Edition Snapdragon X Plus 12 Core Laptop From Star Tech. We have a large collection of latest Microsoft Laptop to purchase. Order Online Or Visit your Nearest Star Tech Shop to get yours at lowest price. The Microsoft Surface Laptop 7th Edition Snapdragon X Plus 12 Core Laptop comes with 1-year warranty.', 203500, 195000, 10, 'Active', 'product/XJn1oj2InT3YkiTYnZX73nicCiPEdWUcJgF4SQd3.webp', '2025-11-17 09:45:45', '2025-11-17 09:45:45'),
(14, 'Gigasonic RDA-1707W 17 Inch LED Square Monitor', 23, 22, 'Key Features\r\nModel: RDA-1707W\r\nMaximum Resolution: 1600 x 900p\r\nDisplay: LED, 60Hz, 5ms\r\nPorts: 1x HDMI, 1x VGA\r\nColor Support: 16.7 million colors with the use of FRC', 'Gigasonic RDA-1707W 17 Inch LED Square Monitor\r\nThe Gigasonic RDA-1707W 17 Inch LED Square Monitor is a reliable and high-quality display solution designed for both professional and personal use. This Gigasonic RDA-1707W Square Monitor features a 17-inch LED TFT panel with a 1600 x 900p HD resolution, offering sharp and clear visuals for office work, multimedia, and everyday tasks. With a 60Hz refresh rate and 5ms response time, the Gigasonic RDA-1707W Monitor ensures smooth motion and lag-free viewing for a seamless experience. It supports 16.7 million colors with FRC technology, delivering vibrant, true-to-life color accuracy, while the 200 nits brightness and 600:1 contrast ratio (dynamic contrast ratio of 10,000,000:1) enhance clarity and depth in every image. The 90° horizontal and 65° vertical viewing angles provide comfortable visibility from multiple directions. Connectivity is convenient with both HDMI and VGA ports, making the Gigasonic RDA-1707W compatible with a wide range of devices. Its flat screen design, sleek black finish, and VESA wall mount support add flexibility for any workspace. Weighing only around 3.26 kg (with packaging), the Gigasonic RDA-1707W 17 Inch LED Square Monitor is lightweight, durable, and ideal for users seeking a balance of performance, functionality, and affordability.\r\n\r\nBuy Gigasonic RDA-1707W 17 Inch LED Square Monitor from Star Tech\r\nIn Bangladesh, you can get original Gigasonic RDA-1707W 17\" LED Square Monitor From Star Tech. We have a large collection of latest Gigasonic Monitor to purchase. Order Online Or Visit your Nearest Star Tech Shop to get yours at lowest price. The Gigasonic RDA-1707W 17\" LED Square Monitor comes with 1 year warranty (No Warranty For Adapter).', 5500, 4800, 8, 'Active', 'product/h0PmkGrHsAXei8U3k3Br1sk8FA7BYu4imsBJNWNj.webp', '2025-11-17 09:54:03', '2025-11-17 09:54:03'),
(15, 'Apple Watch Series 7', 24, 2, 'Apple Watch Series 7 Price in Bangladesh 2024 & Release Date\r\nName	Apple Watch Series 7\r\nOfficial Price	BDT. 37,000\r\nRelease Date	15-Aug-2021\r\nMarket Status	In Stock\r\nVariant	RAM: 1GB + ROM: 32GB', 'Apple Watch Series 7 Overview\r\nThe Apple Watch Series 7, unveiled by Apple in September 2021, marked a significant advancement in the company’s wearable technology lineup. Here we will share the Apple Watch Series 7 price in Bangladesh and features.\r\n\r\nThis smartwatch features a 1.9-inch Retina LTPO OLED display with a resolution of 484 x 396 pixels. This display is 1000 nits peak brightness. It operates on watchOS 8.0, upgradable to watchOS 10.5. The 309 mAh battery supports with wireless charger. The Apple Watch Series 7 is powered by a Dual-core, Apple S7 chipset.\r\n\r\nIt measures 45 x 38 x 10.7 mm and weighs 32 grams only. Also, it has an Accelerometer, gyro, heart rate, barometer, always-on altimeter, compass, SpO2, and VO2max sensors. The watch comes with 1 GB of RAM and 32 GB of ROM.\r\n\r\nApple Watch Series 7 price in Bangladesh\r\nThe Apple Watch Series 7 price in Bangladesh is BDT 37,000 with 41mn. This smartwatch has a different size 45mn. It comes in Starlight, Midnight, Blue, Green, and Red colors. You can purchase this smartwatch from the Apple store and online shops.', 37000, NULL, 10, 'Active', 'product/S2FHoaqiFp1UaTj3vKQ8hiNU1BCy6o4VNycZhp81.webp', '2025-11-17 11:45:56', '2025-11-17 11:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2025-11-09 08:35:07', '2025-11-09 08:35:07'),
(2, 'Vendor', '2025-11-09 08:35:14', '2025-11-09 08:35:14'),
(3, 'Editor', '2025-11-09 08:35:20', '2025-11-09 08:35:20'),
(4, 'Customer', '2025-11-09 08:35:26', '2025-11-09 08:35:26');

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
('qi1Swp29lf8nFm0NanCCDWol2Cxojopdu17ioScM', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNkZ6Q29nZk56SmFuSFR3U3lSZENXc0N2YTdMdTRteENOeDQ5SGwwWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0LWRldGFpbHMvMSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9fQ==', 1762933941),
('v7z61yiMmkYyUUMbyDsUtZiXRehczpBybMv1Hskz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidUkxdFVjTllnSjU1cDdyTE9JRUJHTms5Y0k3M2NNUXNncThSSE5WVSI7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0LWRldGFpbHMvMTAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjQ6ImNhcnQiO2E6MTp7aToxMDthOjQ6e3M6NDoibmFtZSI7czoyMToiU2Ftc3VuZyBHYWxheHkgVGFiIEE5IjtzOjU6InByaWNlIjtkOjEzMzk5NjtzOjg6InF1YW50aXR5IjtzOjE6IjQiO3M6NToicGhvdG8iO3M6NTM6InByb2R1Y3QvVFJ2b3RHeXBLdERsMzcxdWpOVXBnUldqbHJHT1ZiMVJVbzBmSHRhYi53ZWJwIjt9fX0=', 1762961616);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `photo` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `role_id`, `status`, `photo`, `created_at`, `updated_at`) VALUES
(4, 'Md', 'Rayhan', 'rayhan8171@gmail.com', NULL, '$2y$12$rejRYZPtsg6RsXwp1y.0Y.SfXXouQyZ2yWZ1kit/TqGBh/0DEtTiO', NULL, '01705675623', 1, 'Active', 'user/Pd3H72ijTPZ2Hdupiy4lKTSDxcN1dBmAHIIHOR3s.png', '2025-11-09', '2025-11-10'),
(6, 'Sumaiya', 'Akter', 'sumaiya@hospital.com', NULL, '$2y$12$EC/nevdPXL1SDIu30yLpYu.JAIA5qV9ke4Bh2EaWjdSC0H/iueko2', NULL, '01710000010', 2, 'Active', 'user/0YfGo7k5Gjzezby4lCvaK4cxJ750voHIr4ZgSfIU.png', '2025-11-09', '2025-11-10'),
(7, 'Rahman', 'Mia', 'rahman@gmail.com', NULL, '$2y$12$IjAwMnZpmWlyTA4meYp4ren3EGX6HYhJF8Nsmd/YBAqwOeRmBKNa6', NULL, '01710000010', 4, 'Active', 'user/DLoBfzxj9gWW2TSkBWWkU5lVBW3tHgROvjuF77U6.jpg', '2025-11-09', '2025-11-10'),
(8, 'Rakib', 'Rayhan', 'rakib@mail.com', NULL, '$2y$12$M1La.EzB44BJateQRLjoju15Tx4TBxQnOgbmu.8xs953uumDw9Nj2', NULL, '01710000005', 3, 'Active', 'user/WNHsyTHoJBI2gEEWHkre00BgQveN9YA6kvKN8yZV.jpg', '2025-11-10', '2025-11-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`);

--
-- Indexes for table `order_addresses`
--
ALTER TABLE `order_addresses`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productgalleries`
--
ALTER TABLE `productgalleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_addresses`
--
ALTER TABLE `order_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productgalleries`
--
ALTER TABLE `productgalleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
