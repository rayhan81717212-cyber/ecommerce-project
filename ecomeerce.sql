-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2025 at 06:44 PM
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
  `description` text NOT NULL,
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
(101, 'Amazon', 'brands/eEEsEg9DESoFXGDRclOyvfv27rvH6cmNMh07PHYO.png', '🛒 General Amazon Brand Description\r\n\r\nAmazon is a globally recognized brand known for offering high-quality products at affordable prices. With a focus on innovation, reliability, and customer satisfaction, Amazon’s own brands deliver exceptional value across a wide range of categories including electronics, home essentials, fashion, and more.\r\n\r\n💻 Amazon Electronics\r\n\r\nAmazon electronics combine smart design with cutting-edge technology. From Alexa-enabled devices to high-performance accessories, each product is crafted to make everyday life easier, more connected, and more enjoyable.\r\n\r\n🏠 Amazon Home Essentials\r\n\r\nAmazon Home products are designed to bring comfort, quality, and modern style into every household. From kitchen tools to bedding and décor, these items blend functionality with sleek design at an affordable price.\r\n\r\n👕 Amazon Fashion\r\n\r\nAmazon Fashion offers a collection of modern, comfortable, and stylish apparel for everyday wear. Designed with premium fabrics and contemporary designs, the brand ensures a perfect balance of quality and value.\r\n\r\n🔋 Amazon Basics\r\n\r\nAmazon Basics provides everyday essentials that are reliable, affordable, and built to last. Whether it’s tech accessories, office supplies, or household products, Amazon Basics stands for simplicity and smart value.', '2025-11-05 11:02:25', '2025-11-05 11:02:25');

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
(1, 'Electronics', 'Active', '2025-11-04 17:10:01', '2025-11-05 07:53:31'),
(2, 'Mobile Phone', 'Active', '2025-11-04 17:10:01', '2025-11-05 07:54:12'),
(3, 'Laptops', 'Active', '2025-11-04 17:10:01', '2025-11-05 07:54:01'),
(4, 'Tablets', 'Active', '2025-11-04 17:10:01', '2025-11-05 08:03:35'),
(5, 'Cameras', 'Inactive', '2025-11-04 17:10:01', '2025-11-05 07:52:47'),
(6, 'Home Appliances', 'Active', '2025-11-04 17:10:01', '2025-11-05 07:53:51'),
(7, 'Televisions', 'Active', '2025-11-04 17:10:01', '2025-11-05 08:03:46'),
(8, 'Gaming Consoles', 'Active', '2025-11-04 17:10:01', '2025-11-05 07:53:46'),
(9, 'Headphones', 'Active', '2025-11-04 17:10:01', '2025-11-05 07:53:56'),
(10, 'Smart Watches', 'Active', '2025-11-04 17:10:01', '2025-11-05 08:03:21'),
(11, 'Fashion', 'Active', '2025-11-04 17:10:01', '2025-11-05 07:53:36'),
(12, 'Men’s Clothing', 'Active', '2025-11-04 17:10:01', '2025-11-05 07:54:07'),
(13, 'Women’s Clothing', 'Active', '2025-11-04 17:10:01', '2025-11-05 08:03:53'),
(14, 'Shoes', 'Active', '2025-11-04 17:10:01', '2025-11-05 07:54:17'),
(15, 'Beauty & Health', 'Active', '2025-11-04 17:10:01', '2025-11-05 07:51:14'),
(16, 'Furniture', 'Active', '2025-11-04 17:10:01', '2025-11-05 07:53:41'),
(17, 'Sports & Fitness', 'Active', '2025-11-04 17:10:01', '2025-11-05 08:03:28'),
(19, 'Toys & Baby Products', 'Active', '2025-11-04 17:10:01', '2025-11-04 17:10:01'),
(20, 'Automotive Accessories', 'Active', '2025-11-04 17:10:01', '2025-11-04 17:10:01'),
(21, 'Computer', 'Active', '2025-11-04 11:11:47', '2025-11-04 11:11:47'),
(22, 'A4 Tech', 'Active', '2025-11-04 11:20:38', '2025-11-04 11:20:38');

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
(4, '2025_10_27_132201_create_brand_table', 2),
(5, '2025_11_04_170438_create_categories_table', 3),
(6, '2025_10_27_144257_create_product_table', 4),
(7, '2025_11_08_163437_create_role_table', 5),
(8, '2025_11_08_163437_create_roles_table', 6);

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
  `discount_price` int(10) DEFAULT NULL,
  `stock_quantity` int(10) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `brand_id`, `description`, `price`, `discount_price`, `stock_quantity`, `status`, `photo`, `created_at`, `updated_at`) VALUES
(22, 'Oppo Find X9 Pro', 2, 5, 'Name	Oppo Find X9 Pro\r\nUnofficial Price	BDT. 112,000\r\nRelease Date	16-Oct-2025\r\nMarket Status	In Stock\r\nVariant	RAM: 12GB + ROM: 256GB', 112000, 2000, 20, 'Active', 'product/63i7mWYrMWLIyOxSD3Fa0VoHiJVXSLmcmJtvcTnO.webp', '2025-11-03', '2025-11-08'),
(25, 'Apple iPhone 11 Pro', 2, 1, 'The Apple iPhone 11 Pro is one of the most popular and powerful smartphones in the market today. It was released in September 2019 as part of the iPhone 11 series, along with the iPhone 11 and the iPhone 11 Pro Max. The iPhone 11 Pro is designed to offer a premium and immersive experience for users who want the best of the best from their device. In this review, we will try to share full details on Apple iPhone 11 Pro.\r\n\r\nMost Highlighted Features of Apple iPhone 11 Pro\r\nTriple-Camera System: The iPhone 11 Pro boasts a triple-camera system that consists of a 12-megapixel wide-angle lens, a 12-megapixel telephoto lens, and a 12-megapixel ultra-wide-angle lens. \r\nSuper Retina XDR Display: This phone features a 5.8-inch OLED display that has a resolution of 2436 x 1125 pixels and a pixel density of 458 ppi.\r\nA13 Bionic Chip: It is powered by the A13 Bionic chip, which is the fastest and most advanced processor ever in a smartphone. \r\niOS 13: The iPhone 11 Pro runs on iOS 13, which is the latest and most refined version of Apple’s operating system. It offers a range of new and improved features, such as dark mode, swipe keyboard, Siri shortcuts, emoji stickers, and more.\r\nShort Overview of Apple iPhone 11 Pro\r\nThe iPhone 11 Pro is a smartphone that combines a sleek and durable design, a powerful and intelligent processor, a stunning and immersive display, and a versatile and impressive camera system. This phone is ideal for users who want a device that can handle any task, whether it is photography, gaming, productivity, or entertainment. \r\n\r\nIt also offers a long-lasting battery, a water-resistant body, and a wireless charging capability. The iPhone 11 Pro is available in four colors: space gray, silver, gold, and midnight green. The iPhone 11 Pro has a starting price of $999 for the 64GB model, $1149 for the 256GB model, and $1349 for the 512GB model.\r\n\r\nApple iPhone 11 Pro Price in Bangladesh\r\nThe Apple iPhone 11 Pro is a premium smartphone that offers a triple-camera system, a Super Retina XDR display, an A13 Bionic chip, and iOS 13. It is available in four colors and three storage options. The official price of the iPhone 11 Pro in Bangladesh is BDT 119,999 for the 64GB model, BDT 139,999 for the 256GB model, and BDT 159,999 for the 512GB model.\r\n\r\nFinal Thought\r\nThe iPhone 11 Pro is a smartphone that delivers on its promise of being a pro device. It has a premium and elegant design, a powerful and smart processor, a superb and dynamic display, and a remarkable and flexible camera system. The iPhone 11 Pro is a device that can satisfy the needs and wants of any user, as it offers a high-quality and seamless experience. Thank you all for reading this article.', 119999, 1000, 10, 'Active', 'product/bUgXdcLu1CYF1wgswA834m2subwQwR8eJqJQzUan.webp', '2025-11-03', '2025-11-06'),
(26, 'Samsung Galaxy S23', 2, 2, 'Product Name: Samsung Galaxy S23\r\nUnofficial Price: BDT 85,000\r\nRelease Date: 01-Jan-2025\r\nMarket Status: In Stock\r\nVariant: RAM 8GB + ROM 128GB\r\nDisplay: 6.1-inch Dynamic AMOLED\r\nProcessor: Exynos 2200\r\nBattery: 3900 mAh\r\nCamera: Triple rear 50MP+10MP+12MP, Front 12MP\r\nOS: Android 13\r\nColor Options: Phantom Black, Green, Cream', 85000, 80000, 50, 'Active', 'product/uZ5RmHXjto0KOP7udsaK9mc9kpx5EIScoy9uZfpY.jpg', '2025-11-03', '2025-11-06'),
(27, 'Samsung Galaxy S23+', 2, 2, 'Product Name: Samsung Galaxy S23+\r\nUnofficial Price: BDT 95,000\r\nRelease Date: 01-Jan-2025\r\nMarket Status: In Stock\r\nVariant: RAM 8GB + ROM 256GB\r\nDisplay: 6.6-inch Dynamic AMOLED\r\nProcessor: Exynos 2200\r\nBattery: 4500 mAh\r\nCamera: Triple rear 50MP+10MP+12MP, Front 12MP\r\nOS: Android 13\r\nColor Options: Phantom Black, Green, Cream', 95000, 90000, 40, 'Active', 'product/hJqA1mAsCNPNHllbzPn5oRELxirRtl2QaWqGII0Z.webp', '2025-11-03', '2025-11-06'),
(28, 'Samsung Galaxy S23 Ultra', 2, 2, 'Product Name: Samsung Galaxy S23 Ultra\r\nUnofficial Price: BDT 1,20,000\r\nRelease Date: 01-Jan-2025\r\nMarket Status: In Stock\r\nVariant: RAM 12GB + ROM 512GB\r\nDisplay: 6.8-inch Dynamic AMOLED\r\nProcessor: Exynos 2200\r\nBattery: 5000 mAh\r\nCamera: Quad rear 200MP+10MP+10MP+12MP, Front 12MP\r\nOS: Android 13\r\nColor Options: Phantom Black, Green, Cream', 120000, 115000, 30, 'Active', 'product/raSzJQvXIsofFP7wzYm38EVM1jILSpVhEOU4g6fm.webp', '2025-11-03', '2025-11-06'),
(29, 'Samsung Galaxy A54', 2, 2, 'Product Name: Samsung Galaxy A54\r\nUnofficial Price: BDT 45,000\r\nRelease Date: 01-Feb-2025\r\nMarket Status: In Stock\r\nVariant: RAM 6GB + ROM 128GB\r\nDisplay: 6.4-inch Super AMOLED\r\nProcessor: Exynos 1380\r\nBattery: 5000 mAh\r\nCamera: Triple rear 50MP+5MP+5MP, Front 32MP\r\nOS: Android 13\r\nColor Options: Prism Black, Prism Blue, Prism White', 45000, 43000, 60, 'Active', 'product/cGOuxOT39wovbKwOUD1k9XMrxL3FBFTEA2NLlPh7.jpg', '2025-11-03', '2025-11-06'),
(30, 'Samsung Galaxy A34', 2, 2, 'Product Name: Samsung Galaxy A34\r\nUnofficial Price: BDT 35,000\r\nRelease Date: 01-Feb-2025\r\nMarket Status: In Stock\r\nVariant: RAM 4GB + ROM 64GB\r\nDisplay: 6.5-inch Super AMOLED\r\nProcessor: MediaTek Dimensity 1080\r\nBattery: 5000 mAh\r\nCamera: Triple rear 48MP+5MP+2MP, Front 13MP\r\nOS: Android 13\r\nColor Options: Awesome Black, Awesome Blue, Awesome Violet', 35000, 32000, 70, 'Active', 'product/yrqSBzlKJ4ML4A6LTJd8KhgBi6HLALyiceUn9gZs.webp', '2025-11-03', '2025-11-06'),
(32, 'Apple iPhone 15 Pro', 2, 1, 'Product Name: Apple iPhone 15 Pro\r\nUnofficial Price: BDT 1,50,000\r\nRelease Date: 10-Mar-2025\r\nMarket Status: In Stock\r\nVariant: RAM 8GB + ROM 256GB\r\nDisplay: 6.1-inch Super Retina XDR\r\nProcessor: A17 Pro Bionic\r\nBattery: 3279 mAh\r\nCamera: Triple rear 48MP+12MP+12MP, Front 12MP\r\nOS: iOS 17\r\nColor Options: Natural Titanium, Blue Titanium, White Titanium, Black Titanium', 150000, 145000, 10, 'Active', 'product/p49ttiu5SKd07Lo8V19TYUmDZ1cqN7GKoEBrjVAN.webp', '2025-11-03', '2025-11-08'),
(33, 'Apple iPhone 15 Pro Max', 2, 1, 'Product Name: Apple iPhone 15 Pro Max\r\nUnofficial Price: BDT 1,80,000\r\nRelease Date: 10-Mar-2025\r\nMarket Status: In Stock\r\nVariant: RAM 12GB + ROM 512GB\r\nDisplay: 6.7-inch Super Retina XDR\r\nProcessor: A17 Pro Bionic\r\nBattery: 4323 mAh\r\nCamera: Triple rear 48MP+12MP+12MP, Front 12MP\r\nOS: iOS 17\r\nColor Options: Natural Titanium, Blue Titanium, White Titanium, Black Titanium', 180000, 175000, 30, 'Active', 'product/SxBaZqUS9ZvFfSjua6N2jDYixkyTN7DLh0OScbGj.webp', '2025-11-03', '2025-11-06'),
(34, 'Apple iPhone SE 2025', 2, 1, 'Product Name: Apple iPhone SE 2025\r\nUnofficial Price: BDT 45,000\r\nRelease Date: 01-Apr-2025\r\nMarket Status: In Stock\r\nVariant: RAM 4GB + ROM 64GB\r\nDisplay: 4.7-inch Retina HD\r\nProcessor: A16 Bionic\r\nBattery: 2018 mAh\r\nCamera: Single rear 12MP, Front 7MP\r\nOS: iOS 17\r\nColor Options: Midnight, Starlight, Red', 45000, 42000, 2, 'Active', 'product/V4wqkdZU6KWNMpBget7k0pL8gHONYSMcx33b471T.webp', '2025-11-03', '2025-11-08'),
(35, 'Apple iPhone 14', 2, 1, 'Product Name: Apple iPhone 14\r\nUnofficial Price: BDT 95,000\r\nRelease Date: 01-Jan-2025\r\nMarket Status: In Stock\r\nVariant: RAM 6GB + ROM 128GB\r\nDisplay: 6.1-inch Super Retina XDR\r\nProcessor: A15 Bionic\r\nBattery: 3279 mAh\r\nCamera: Dual rear 12MP+12MP, Front 12MP\r\nOS: iOS 16\r\nColor Options: Midnight, Starlight, Blue, Purple, Red', 95000, 90000, 5, 'Active', 'product/SczHckuC22G90jIACwGlEHBz03O1AMy1MEYiPx7D.webp', '2025-11-03', '2025-11-06'),
(36, 'Samsung Galaxy Book 3 Pro', 3, 2, 'Product Name: Samsung Galaxy Book 3 Pro\r\nUnofficial Price: BDT 150,000\r\nRelease Date: 15-Jan-2025\r\nMarket Status: In Stock\r\nVariant: RAM 16GB + ROM 512GB\r\nDisplay: 16-inch AMOLED\r\nProcessor: Intel Core i7 12th Gen\r\nBattery: 68Wh\r\nCamera: 1080p HD\r\nOS: Windows 11\r\nColor Options: Graphite, Silver', 150000, 145000, 20, 'Active', 'product/zHgjoc9zZmGCUqY3TbMIeUdRFOha2iKaiDXv7I1P.webp', '2025-11-03', '2025-11-06'),
(37, 'Apple MacBook Air M2', 3, 1, 'Product Name: Apple MacBook Air M2\r\nUnofficial Price: BDT 120,000\r\nRelease Date: 01-Feb-2025\r\nMarket Status: In Stock\r\nVariant: RAM 8GB + ROM 256GB\r\nDisplay: 13.6-inch Retina\r\nProcessor: Apple M2\r\nBattery: 52.6Wh\r\nCamera: 1080p HD\r\nOS: macOS Ventura\r\nColor Options: Space Gray, Silver, Midnight, Starlight', 120000, 115000, 25, 'Active', 'product/7uaZszHQbuufjcGppKFW71thlVPqdqnvWSGC6fa0.webp', '2025-11-03', '2025-11-08'),
(38, 'Apple MacBook Pro 14 M2', 3, 1, 'Product Name: Apple MacBook Pro 14 M2\r\nUnofficial Price: BDT 180,000\r\nRelease Date: 01-Mar-2025\r\nMarket Status: In Stock\r\nVariant: RAM 16GB + ROM 512GB\r\nDisplay: 14-inch Liquid Retina XDR\r\nProcessor: Apple M2 Pro\r\nBattery: 70Wh\r\nCamera: 1080p HD\r\nOS: macOS Ventura\r\nColor Options: Space Gray, Silver', 180000, 175000, 4, 'Inactive', 'product/r0ennAEKUbS9xLFry2bu4xe8r6sD8fcyQUiryySW.webp', '2025-11-03', '2025-11-06');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2025-11-08 10:51:56', '2025-11-08 11:43:11'),
(3, 'Vendor', '2025-11-08 10:56:40', '2025-11-08 10:56:40'),
(4, 'Editor', '2025-11-08 11:43:27', '2025-11-08 11:43:27'),
(5, 'Customer', '2025-11-08 11:43:39', '2025-11-08 11:43:39');

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
('3Drl5gkYVRZuR6dWm5RCcRSKL7F6Qp0GMYHMzy5F', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSUd4NmNVRFNaSXYwcXVyYnh3RTBTdUtxQ3lpQnQ4THdrOGE2dmNMVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yb2xlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762623819);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pyment_methods`
--
ALTER TABLE `pyment_methods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
