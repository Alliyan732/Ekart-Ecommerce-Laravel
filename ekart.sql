-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2023 at 09:45 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'alliyan732@gmail.com', 'ali223376', '2022-06-20 07:01:35', '2022-06-20 07:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `product_qty` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_qty`, `created_at`, `updated_at`) VALUES
(33, 27, 1, '2022-07-08 12:02:16', '2022-07-08 12:02:16'),
(28, 45, 1, '2022-07-08 11:47:33', '2022-07-08 11:47:33'),
(29, 25, 1, '2022-07-08 11:47:38', '2022-07-08 11:47:38'),
(30, 26, 1, '2022-07-08 11:47:42', '2022-07-08 11:47:42'),
(35, 42, 1, '2023-03-15 00:52:47', '2023-03-15 00:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `new_collection` varchar(255) NOT NULL,
  `trending` varchar(255) NOT NULL,
  `sale` varchar(255) NOT NULL,
  `special_offer` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 2),
(9, '2019_08_19_000000_create_failed_jobs_table', 2),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(11, '2022_06_05_095231_create_users_table', 2),
(12, '2022_06_18_044526_create_admins_table', 2),
(13, '2022_06_18_104423_create_products_table', 2),
(14, '2022_06_23_174707_create_cart_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `category`, `short_desc`, `desc`, `keywords`, `price`, `created_at`, `updated_at`) VALUES
(43, 'black long shirt with white frill trouser', '1677910153.png', 'new_collection', 'asdas fgkjwewe asdasnf sdnf', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'asdfe ewrf sdfqw', '8500', '2022-06-23 06:55:47', '2023-03-04 01:09:13'),
(55, 'product 1', '1685007765.png', 'special_offers', 'asdasdfawsfweaf', 'sadfawefwsadc', 'asdferg erfs wef', '56000', '2023-05-25 04:42:45', '2023-05-25 04:42:45'),
(56, 'black shirt', '1685007803.png', 'special_offers', 'dsafwe werqw', 'vcxqweqwfrgdvxvwef', 'dfa tgher aw', '5500', '2023-05-25 04:43:23', '2023-05-25 04:43:23'),
(57, 'jacket', '1685007847.png', 'special_offers', 'asdasf asdsad we', 'adgerghetbgvcq', 'sadas', '9000', '2023-05-25 04:44:07', '2023-05-25 04:44:07'),
(42, 'Blue jeans shirt and baggy pant', '1677910179.png', 'new_collection', 'Blue jeans shirt new style summer offer', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'baggy blue shirt women', '9000', '2022-06-23 06:53:06', '2023-03-04 01:09:39'),
(51, 'sad', '1677909977.png', 'new_collection', 'sad', 'asd', 'asd', 'asd', '2023-03-04 00:25:28', '2023-03-04 01:06:17'),
(54, 'aaa', '1685003840.png', 'special_offers', 'asd', 'asd', 'asd', 'asd', '2023-05-25 03:37:20', '2023-05-25 03:37:20'),
(45, 'girl pant blue', '1677910003.png', 'new_collection', 'girl pant blue girl pant blue', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted', 'pant blue jeans', '5050', '2022-07-08 06:36:59', '2023-03-04 01:06:43'),
(25, 'polo shirt pink colour', '1655997029.png', 'new_collection', 'summer shirt baby design new arrival', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'pink color baby shirt', '952', '2022-06-23 05:10:29', '2022-06-23 05:10:29'),
(26, 'grey top', '1655997144.png', 'new_collection', 'front knot summer style formal wear', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'grey top girls new design front knot top', '656', '2022-06-23 05:12:24', '2022-06-23 05:12:24'),
(27, 'men black shirt', '1655997867.png', 'trending', 'open style men\'s shirt casual wear', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'black shirt boys collection', '253', '2022-06-23 05:24:27', '2022-06-23 05:24:27'),
(28, 'women fril shirt blue color', '1655998189.png', 'trending', 'frill design multi layers navy blue', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'party wear girls\' frill top', '555', '2022-06-23 05:29:49', '2022-06-23 05:29:49'),
(29, 'black western shirt', '1655998309.png', 'trending', 'new style western top hot selling', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'girs wear new black top most trending western style', '625', '2022-06-23 05:31:49', '2022-06-23 05:31:49'),
(30, 'black shirt half sleves', '1655998501.png', 'trending', 'casual wear light stuff summer collection', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'black shirt half sleeves girls collection', '255', '2022-06-23 05:35:01', '2022-06-23 05:35:01'),
(31, 'zebra lines women shirt fur seelves', '1655998942.png', 'sale', 'Women\'s shirt black and white lines', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'fur sleeves women\'s shirt sale', '999', '2022-06-23 05:42:22', '2022-06-23 06:25:53'),
(44, 'Formal grey shirt', '1657298262.png', 'new_collection', 'Formal grey shirt Formal grey shirtFormal', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'shirt formal grey', '5000', '2022-07-08 05:53:20', '2022-07-08 06:37:42'),
(33, 'baby yellow frock', '1655999366.jpg', 'sale', 'net stuff yellow color summer collection', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'yellow color frock full-length baby girl new style', '1005', '2022-06-23 05:49:26', '2022-06-23 05:49:26'),
(34, 'baby dress white shirt blue pent', '1655999635.jpg', 'sale', 'baby dress shirt with jeans summer', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'baby boy collection kids dress pent shirt jeans blue and white shirt', '1200', '2022-06-23 05:53:55', '2022-06-23 06:28:04'),
(47, 'grey top', '1657298513.png', 'new_collection', 'en you need a woven shirt for a for', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'front knot top, wear, Man, Woman', '999', '2022-07-08 06:40:36', '2022-07-08 06:41:53'),
(36, 'women white shirt', '1656000255.jpg', 'trending', 'casual white shirt', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'summer girls collection', '955', '2022-06-23 06:04:15', '2022-06-23 06:04:15'),
(37, 'mens black shirt', '1656000389.jpg', 'sale', 'black shirt summer collection', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'black shirt men\'s collection', '1330', '2022-06-23 06:06:29', '2022-06-23 06:06:29'),
(38, 'kids romper', '1657298625.png', 'new_collection', 'yellow color romper', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'kids romper yellow color', '1400', '2022-06-23 06:08:37', '2022-07-08 06:43:45'),
(39, 'kids pent', '1657298647.png', 'new_collection', 'foji style kids\' pants', 'When you need a woven shirt for a formal occasion, go with the Devon & Jones Men\'s Crown Woven Collection® Solid Broadcloth! It\'s made of 3.4 oz., 55% cotton, 45% polyester broadcloth with true non-iron performance straight from the dryer and a stain release finish. Features include pearlized buttons, patented pucker-free taped seams, specially fused collar, cuffs and placket, split back seam with bias cut back yoke, classic fit for a professional appearance, rolled button-down collar, left chest pocket and an adjustable comfort collar that gives up to an inch stretch at the neck. This exclusive product is offered in a variety of colors and sizes ranging from XS-6XL. This top is sold unimprinted.', 'kids pants foji style khaki color', '1200', '2022-06-23 06:10:32', '2022-07-08 06:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `conferm_password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `conferm_password`, `country`, `age`, `created_at`, `updated_at`) VALUES
(1, 'Alliyan Waheed', 'alliyan732@gmail.com', '$2y$10$c4/JsEK07FdtAtZq7JtVS.RugOfvlMZ.0QKw0JRqs5jI01xVhiOP6', '$2y$10$lBrvW.N9oQ319z/F2OBvQOnfoICaweEiNif1.7dYB2ANhIYkFLmEi', 'Pakistan', 21, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
