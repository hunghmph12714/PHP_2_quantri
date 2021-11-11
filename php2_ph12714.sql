-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 08:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php2_ph12714`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_menu` int(1) DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `slug`, `show_menu`, `desc`, `created_at`, `updated_at`, `created_by`) VALUES
(8, 'Áo Thun', '', NULL, '', NULL, '2021-06-17 08:28:45', -1),
(22, 'Hoodie', '', 0, '', NULL, '2020-10-15 19:57:44', -1),
(23, 'danh mục', NULL, 0, 'Welcome! This site allows you to generate text fonts that you can copy and paste into your Instagram bio. It\'s useful for generating Instagram bio symbols to make your profile stand out and have a little bit of individuality. After typing some text into the input box, you can keep clicking the \"show more fonts\" button and it\'ll keep generating an infinite number of different Instagram font variations, or you can use one of the \"tried and true\" fonts like the cursive text, or the other stylish text fonts - i.e. the ones that are a bit \"neater\" than the others because they use a set of symbols that are closer to the normal alphabet, and are more consistent in their style.', NULL, '2020-10-15 19:57:26', -1),
(26, 'Sản phẩm mới', '', 0, '', '2020-10-15 19:56:04', '2020-10-15 19:57:54', -1),
(28, 'Đỗ Thành Trung 123123123', NULL, 1, 'sdfsdf', '2021-02-23 20:58:09', '2021-02-23 20:58:09', -1),
(29, 'trung', NULL, 1, 'sdf', '2021-03-04 20:53:19', '2021-03-04 20:53:19', -1),
(32, 'trung 234234234', '1', 1, '234234234234', NULL, NULL, -1),
(33, 'QFW', NULL, 1, 'sss', '2021-06-10 23:00:23', '2021-06-10 23:00:23', -1),
(53, 'hùng', NULL, 1, 'hung', '2021-06-17 08:18:42', '2021-06-17 08:18:42', -1),
(55, 'a', NULL, NULL, 'a', '2021-06-18 00:22:18', '2021-06-18 00:22:18', -1);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL DEFAULT 0,
  `payment_method` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `customer_name`, `customer_phone_number`, `customer_email`, `customer_address`, `total_price`, `payment_method`, `created_at`, `updated_at`) VALUES
(5, 'tieu cuong', '089987789', 'cuongtieu@gmail.com', '15 dong quan', 42410, 2, NULL, NULL),
(6, 'trần hữu thiện', '0987654321', 'thiendepzai@gmail.com', 'hàm nghi, nam từ liêm, hà nội', 177063, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_detail`
--

CREATE TABLE `invoice_detail` (
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_detail`
--

INSERT INTO `invoice_detail` (`invoice_id`, `product_id`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(5, 96, 1, 39837, NULL, NULL),
(5, 97, 1, 2573, NULL, NULL),
(6, 89, 2, 68613, NULL, NULL),
(6, 96, 1, 39837, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_05_070735_create_categories_table', 2),
(5, '2019_01_05_072544_alter_table_categories_update_column', 3),
(6, '2019_01_05_074643_create_products_table', 3),
(7, '2019_01_05_075227_create_invoices_table', 4),
(8, '2019_01_05_075449_create_invoice_detail_table', 4),
(9, '2019_01_12_014833_alter_table_products_add_views_column', 5),
(10, '2019_01_12_021523_create_table_product_galleries', 6);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL DEFAULT 0,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `cate_id`, `price`, `short_desc`, `detail`, `star`, `created_at`, `updated_at`, `views`) VALUES
(377, 'Hương', 'public/uploads/60cf6a67b7e73-avt.jpg', 23, 40000, NULL, 'ưqf', 0.00, '2021-06-20 11:18:47', '2021-06-20 11:18:47', 1),
(378, 'trung ddax s', 'public/uploads/60d0287777b30-2 con.jpg', 22, 40000, NULL, '21rq3w', 0.00, '2021-06-21 00:19:13', '2021-06-21 00:50:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(410, 377, 'public/uploads/60d01fa4d93c3-2 con.jpg', '2021-06-21 00:12:05', '2021-06-21 00:12:05'),
(411, 377, 'public/uploads/60d01fc57e648-2 con - Sao chép.jpg', '2021-06-21 00:12:37', '2021-06-21 00:12:37'),
(412, 377, 'public/uploads/60d02027b7be2-2 con - Sao chép.jpg', '2021-06-21 00:14:15', '2021-06-21 00:14:15'),
(413, 377, 'public/uploads/60d020f59789e-1 vợ.jpg.jpg', '2021-06-21 00:17:41', '2021-06-21 00:17:41'),
(414, 377, 'public/uploads/60d020f5b60ef-2 con - Sao chép.jpg', '2021-06-21 00:17:41', '2021-06-21 00:17:41'),
(415, 377, 'public/uploads/60d020f5b6f20-2 con.jpg', '2021-06-21 00:17:41', '2021-06-21 00:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hùng dz', '', 'admin@gmail.com', NULL, 200, '$2y$10$5Qhty1k38/H0dVnsjn0a/eDuMVGQh8al2kfYA7.2lx.UBpZY/5B9a', 'itISWu9O0Y0DxIiYU7t9W4ARsgpkrqrJ2FTGtDEVPMZuW9ChLciMtohAHNXQ', NULL, NULL),
(2, 'chungcc', '', 'moderator@gmail.com', NULL, 700, '$2y$10$nqckGqzjiEP7BP59WM5oJO6R16EanVVG561vJqxOb6X8WiMo4PJ7K', 'pASVtJ9LtlAX6f6uFgRL9AEgI3p7KkiqVv6eWJekpRKMlULsUkAgG93E1zuQ', NULL, NULL),
(3, 'member', '', 'member@gmail.com', NULL, 1, '$2y$10$AqHYuy8slmhcmulYq4adj.WMMYZFNO63kSqp7pFZKvRLjnoPJzYZ', NULL, NULL, NULL),
(6, 'thienth', 'public/images/5d8dc5aebcd06-8ad2f5971cd04cbe2bd5d3849aa7c005.jpeg', 'thienth32@gmail.com', NULL, 0, '$2y$10$QivAI.SR1VuNX0cGuvApoe2GPwKizSP1QNu2cX33AFsDHIGSd.R0G', NULL, NULL, NULL),
(10, 'Đỗ Thành Trung', 'public/uploads/avatar/60419e4950cc9-me-thien-nhien-da-day-chung-ta-bai-hoc-gi-1-1109.jpg', 'dothanhtrung207@gmail.com', NULL, 1, '123541', '', NULL, NULL),
(11, 'Đỗ Thành Trung 32423423423', 'public/uploads/avatar/6041a45b99ff3-DMMSPY.695753.MOCKUP.png', 'dothanhtrungngt@gmail.com', NULL, 2, '123541', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`cate_name`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD PRIMARY KEY (`invoice_id`,`product_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=379;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=416;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD CONSTRAINT `product_galleries_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
