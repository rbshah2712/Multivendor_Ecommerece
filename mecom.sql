-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 04:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `banner_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `banner_image`, `banner_url`, `created_at`, `updated_at`) VALUES
(1, 'Everyday Fresh & Clean with Our Products', 'upload/banner/1755770348119339.png', 'https://www.facebook.com/', NULL, '2023-01-23 05:18:06'),
(2, 'Make your Breakfast Healthy and Easy', 'upload/banner/1755770353703662.png', 'https://www.yahoo.com/?guccounter=1', NULL, '2023-01-23 05:18:11'),
(3, 'The best Organic Products Online', 'upload/banner/1755770382560566.png', 'https://www.regmovies.com/', NULL, '2023-01-23 05:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_short_description` varchar(255) NOT NULL,
  `post_long_description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `post_title`, `post_slug`, `post_image`, `post_short_description`, `post_long_description`, `created_at`, `updated_at`) VALUES
(2, '1', 'How I Prep a Week of Absolutely Simple Summer Meals in Just 1 Hour5566', 'how-i-prep-a-week-of-absolutely-simple-summer-meals-in-just-1-hour5566', 'upload/blog/1757747127881095.jpeg', 'How I Prep a Week of Absolutely Simple Summer Meals in Just 1 HourHow I Prep a Week of Absolutely Simple Summer Meals in Just 1 HourHow I Prep a Week of Absolutely Simple Summer Meals in Just 1 Hour1', '<p><span style=\"color: #7e7e7e; font-family: Lato, sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span></p>', '2023-02-14 00:38:42', '2023-02-14 00:58:38'),
(4, '1', '9 Tasty Ideas That Will Inspire You to Grow a Home Herb Garden Today', '9-tasty-ideas-that-will-inspire-you-to-grow-a-home-herb-garden-today', 'upload/blog/1757747622601590.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, .', '<p><span style=\"color: #7e7e7e; font-family: Lato, sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span><span style=\"background-color: #ffffff; color: #7e7e7e; font-family: Lato, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span><span style=\"background-color: #ffffff; color: #7e7e7e; font-family: Lato, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span></p>', '2023-02-14 01:05:51', '2023-02-14 01:06:02'),
(5, '8', 'The Easy Italian Chicken Dinner I Make Over and Over Again', 'the-easy-italian-chicken-dinner-i-make-over-and-over-again', 'upload/blog/1757747893710209.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim', '<p><span style=\"color: #7e7e7e; font-family: Lato, sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span><span style=\"background-color: #ffffff; color: #7e7e7e; font-family: Lato, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span><span style=\"background-color: #ffffff; color: #7e7e7e; font-family: Lato, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span><span style=\"background-color: #ffffff; color: #7e7e7e; font-family: Lato, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span></p>', '2023-02-14 01:10:21', NULL),
(6, '9', 'I Tried 38 Different Bottles of Mustard — These Are the Ones I’ll Buy Again', 'i-tried-38-different-bottles-of-mustard-—-these-are-the-ones-i’ll-buy-again', 'upload/blog/1757747915932278.png', 'I Tried 38 Different Bottles of Mustard — These Are the Ones I’ll Buy AgainI Tried 38 Different Bottles of Mustard — These Are the Ones I’ll Buy Again', '<h3 class=\"post-title mb-20\" style=\"box-sizing: border-box; line-height: 1.2; font-size: 32px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; vertical-align: baseline; color: #253d4e; background-color: #ffffff; margin: 0px 0px 20px !important 0px;\"><a style=\"box-sizing: border-box; background-color: transparent; color: #253d4e; text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; cursor: pointer;\" href=\"file:///C:/xampp/htdocs/Multivendor/Nest_Frontend/nest-frontend/blog-post-right.html\">I Tried 38 Different Bottles of Mustard &mdash; These Are the Ones I&rsquo;ll Buy Again</a><a style=\"font: inherit; box-sizing: border-box; background-color: transparent; color: #253d4e; text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; transition: all 0.3s ease 0s; cursor: pointer;\" href=\"file:///C:/xampp/htdocs/Multivendor/Nest_Frontend/nest-frontend/blog-post-right.html\">I Tried 38 Different Bottles of Mustard &mdash; These Are the Ones I&rsquo;ll Buy Again</a><a style=\"font: inherit; box-sizing: border-box; background-color: transparent; color: #253d4e; text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; transition: all 0.3s ease 0s; cursor: pointer;\" href=\"file:///C:/xampp/htdocs/Multivendor/Nest_Frontend/nest-frontend/blog-post-right.html\">I Tried 38 Different Bottles of Mustard &mdash; These Are the Ones I&rsquo;ll Buy Again</a><a style=\"font: inherit; box-sizing: border-box; background-color: transparent; color: #253d4e; text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; transition: all 0.3s ease 0s; cursor: pointer;\" href=\"file:///C:/xampp/htdocs/Multivendor/Nest_Frontend/nest-frontend/blog-post-right.html\">I Tried 38 Different Bottles of Mustard &mdash; These Are the Ones I&rsquo;ll Buy Again</a><a style=\"font: inherit; box-sizing: border-box; background-color: transparent; color: #253d4e; text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; transition: all 0.3s ease 0s; cursor: pointer;\" href=\"file:///C:/xampp/htdocs/Multivendor/Nest_Frontend/nest-frontend/blog-post-right.html\">I Tried 38 Different Bottles of Mustard &mdash; These Are the Ones I&rsquo;ll Buy Again</a></h3>', '2023-02-14 01:10:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_name` varchar(255) NOT NULL,
  `blog_category_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `blog_category_name`, `blog_category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Milk', 'milk', '2023-02-13 21:23:58', NULL),
(7, 'Clothing', 'clothing', '2023-02-14 01:09:37', NULL),
(8, 'Food', 'food', '2023-02-14 01:09:42', NULL),
(9, 'Diet', 'diet', '2023-02-14 01:09:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_slug` varchar(255) NOT NULL,
  `brand_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_slug`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'Bata', 'bata', 'upload/brand/1755768784383135.png', NULL, NULL),
(2, 'Oppo', 'oppo', 'upload/brand/1755768911807985.png', NULL, NULL),
(3, 'Samsung', 'samsung', 'upload/brand/1755768920944100.webp', NULL, NULL),
(4, 'LG', 'lg', 'upload/brand/1755784247798434.jpg', NULL, NULL),
(5, 'GE', 'ge', 'upload/brand/1755784421279550.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'Fashion', 'fashion', 'upload/category/1755768558223413.jpg', NULL, NULL),
(2, 'Bags', 'bags', 'upload/category/1755768616826405.jpg', NULL, NULL),
(3, 'Vegetable', 'vegetable', 'upload/category/1755768626931942.jpg', NULL, NULL),
(4, 'Appliances', 'appliances', 'upload/category/1755768637494604.jpg', NULL, NULL),
(5, 'Electronics', 'electronics', 'upload/category/1755785505707007.jpg', NULL, NULL),
(6, 'Cake and Milk', 'cake-and-milk', 'upload/category/1755785571198915.webp', NULL, NULL),
(7, 'Mobile', 'mobile', 'upload/category/1755785654140889.jpg', NULL, NULL),
(8, 'Tea & coffee', 'tea-&-coffee', 'upload/category/1755785675576083.jpg', NULL, NULL),
(9, 'Furniture', 'furniture', 'upload/category/1755785822671731.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `compares`
--

CREATE TABLE `compares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HAPPYLEARNING', 20, '2023-02-15', '1', '2023-02-02 02:26:19', '2023-02-02 02:37:02'),
(2, 'EASYLEARNING', 10, '2023-03-15', '1', '2023-02-02 02:27:00', '2023-02-02 02:38:02');

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
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2023_01_18_210843_create_brands_table', 1),
(17, '2023_01_19_142434_create_categories_table', 1),
(18, '2023_01_19_151419_create_sub_categories_table', 1),
(19, '2023_01_19_195037_create_products_table', 1),
(20, '2023_01_19_200105_create_product_multi_images_table', 1),
(21, '2023_01_22_225526_create_sliders_table', 1),
(22, '2023_01_22_233206_create_banners_table', 1),
(23, '2023_01_31_164011_create_wishlists_table', 2),
(24, '2023_01_31_205543_create_compares_table', 3),
(25, '2023_02_01_210401_create_coupons_table', 4),
(26, '2023_02_01_214701_create_ship_divisions_table', 5),
(27, '2023_02_01_214803_create_ship_districts_table', 5),
(28, '2023_02_01_214904_create_ship_states_table', 5),
(29, '2023_02_06_202722_create_orders_table', 6),
(30, '2023_02_06_203620_create_order_items_table', 6),
(31, '2023_02_13_160502_create_blog_categories_table', 7),
(32, '2023_02_13_160805_create_blogs_table', 8),
(33, '2023_02_14_155027_create_reviews_table', 9),
(34, '2023_02_15_142150_create_site_settings_table', 10),
(35, '2023_02_15_152801_create_seos_table', 11),
(36, '2023_02_15_220636_create_permission_tables', 12),
(37, '2023_02_17_195545_create_notifications_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 17),
(4, 'App\\Models\\User', 16),
(8, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0f65c35c-8a45-4e03-a994-5a896d70e638', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 17, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-02-18 01:13:43', '2023-02-18 01:13:43'),
('163636bd-a00d-4e17-a53d-33d6f570994c', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 15, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-02-18 01:13:43', '2023-02-18 01:13:43'),
('2756a622-99a3-4043-b362-f3ec18ca716f', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 17, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-02-18 01:58:43', '2023-02-18 01:58:43'),
('29e79648-891e-43a2-a9ad-21e2f3816e8f', 'App\\Notifications\\VendorRegisterNotification', 'App\\Models\\User', 17, '{\"message\":\"New Vendor Request\"}', NULL, '2023-02-18 02:25:50', '2023-02-18 02:25:50'),
('2a51d302-f3ee-415c-b310-b8645002177f', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 16, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-02-18 01:13:43', '2023-02-18 01:13:43'),
('484143c7-569f-40ca-a0cb-c8d6d6522c0a', 'App\\Notifications\\RegisterUserNotification', 'App\\Models\\User', 1, '{\"message\":\"New User Register in Shop\"}', NULL, '2023-02-18 02:36:28', '2023-02-18 02:36:28'),
('4debe854-b862-45f9-89a1-051cdcac74d2', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 15, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-02-18 01:58:43', '2023-02-18 01:58:43'),
('66ba0063-d29a-4623-a271-a738b1b8d8d8', 'App\\Notifications\\VendorRegisterNotification', 'App\\Models\\User', 15, '{\"message\":\"New Vendor Request\"}', NULL, '2023-02-18 02:25:50', '2023-02-18 02:25:50'),
('7fe306cb-1f5e-4d6f-966d-41d128de10c1', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 1, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-02-18 01:58:43', '2023-02-18 01:58:43'),
('8446ad6c-e993-4a64-a1e5-b2a7960073ce', 'App\\Notifications\\VendorRegisterNotification', 'App\\Models\\User', 1, '{\"message\":\"New Vendor Request\"}', NULL, '2023-02-18 02:25:50', '2023-02-18 02:25:50'),
('942f5191-9145-440d-bfea-5465185f9be5', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 16, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-02-18 01:58:43', '2023-02-18 01:58:43'),
('9e9fdd02-5971-4f28-91b1-a815cc111bec', 'App\\Notifications\\VendorApproveNotification', 'App\\Models\\User', 22, ' {\"message\":\"You Request Approved Successfully!!\"}', NULL, '2023-02-18 02:47:37', '2023-02-18 02:47:37'),
('ac70aaa9-7c91-473a-90b5-d20bd2366545', 'App\\Notifications\\RegisterUserNotification', 'App\\Models\\User', 16, '{\"message\":\"New User Register in Shop\"}', NULL, '2023-02-18 02:36:28', '2023-02-18 02:36:28'),
('ae28205a-9823-414f-ac89-a4e35b37c786', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 1, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-02-18 01:13:43', '2023-02-18 01:13:43'),
('b0c20d76-7341-4900-b18a-9023561e4b3f', 'App\\Notifications\\VendorApproveNotification', 'App\\Models\\User', 12, ' {\"message\":\"You Request Approved Successfully!!\"}', NULL, '2023-02-18 02:47:37', '2023-02-18 02:47:37'),
('b6644cf5-a074-4679-a0a2-f0831c3d2bef', 'App\\Notifications\\VendorApproveNotification', 'App\\Models\\User', 2, ' {\"message\":\"You Request Approved Successfully!!\"}', NULL, '2023-02-18 02:47:37', '2023-02-18 02:47:37'),
('b7fb71ab-6afe-4076-a82c-46182c140809', 'App\\Notifications\\RegisterUserNotification', 'App\\Models\\User', 15, '{\"message\":\"New User Register in Shop\"}', NULL, '2023-02-18 02:36:28', '2023-02-18 02:36:28'),
('c323afb0-7618-4229-bbb7-015a461daef8', 'App\\Notifications\\VendorApproveNotification', 'App\\Models\\User', 8, ' {\"message\":\"You Request Approved Successfully!!\"}', NULL, '2023-02-18 02:47:37', '2023-02-18 02:47:37'),
('da4fa73c-5063-49f4-80e5-a1c858e8dd10', 'App\\Notifications\\RegisterUserNotification', 'App\\Models\\User', 17, '{\"message\":\"New User Register in Shop\"}', NULL, '2023-02-18 02:36:28', '2023-02-18 02:36:28'),
('e11ceb49-9eed-4928-bfaf-c2fbc1b2e754', 'App\\Notifications\\VendorApproveNotification', 'App\\Models\\User', 10, ' {\"message\":\"You Request Approved Successfully!!\"}', NULL, '2023-02-18 02:47:37', '2023-02-18 02:47:37'),
('e90789a0-6a11-4cc1-8441-84bd2ee88e48', 'App\\Notifications\\VendorRegisterNotification', 'App\\Models\\User', 16, '{\"message\":\"New Vendor Request\"}', NULL, '2023-02-18 02:25:50', '2023-02-18 02:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `currency` varchar(255) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `order_number` varchar(255) DEFAULT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_month` varchar(255) NOT NULL,
  `order_year` varchar(255) NOT NULL,
  `confirm_date` varchar(255) DEFAULT NULL,
  `processing_date` varchar(255) DEFAULT NULL,
  `pick_date` varchar(255) DEFAULT NULL,
  `shipped_date` varchar(255) DEFAULT NULL,
  `delivered_date` varchar(255) DEFAULT NULL,
  `cancel_date` varchar(255) DEFAULT NULL,
  `return_date` varchar(255) DEFAULT NULL,
  `return_reason` varchar(255) DEFAULT NULL,
  `return_order` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `division_id`, `district_id`, `state_id`, `name`, `email`, `phone`, `address`, `post_code`, `notes`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `invoice_number`, `order_date`, `order_month`, `order_year`, `confirm_date`, `processing_date`, `pick_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `return_reason`, `return_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 4, 2, 'User', 'user@gmail.com', 'user', '4245,rosement bridge ct', '30024', 'test stripe', 'card_1MYc2NIYBGycCHELT166psby', 'Stripe', 'txn_3MYc2OIYBGycCHEL0NZ4Nlqg', 'usd', 400.00, '63e16dfee14c1', 'EOS15184247', '15 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'deliverd', '2023-02-07 02:15:44', NULL),
(3, 3, 5, 4, 2, 'User', 'user@gmail.com', 'Ruchi S', 'Morris Road', '30024', NULL, 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 400.00, NULL, 'EOS49221490', '06 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'confirmed', '2023-02-07 02:31:56', NULL),
(4, 3, 5, 4, 2, 'User', 'user@gmail.com', '4567890909', 'Morris road', '30005', 'First test mail', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 1600.00, NULL, 'EOS32082678', '06 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'pending', '2023-02-07 02:39:37', NULL),
(5, 3, 5, 4, 2, 'User', 'user@gmail.com', '4567890909', 'Morris road', '30005', 'First test mail', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 1600.00, NULL, 'EOS30341115', '06 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'pending', '2023-02-07 02:41:36', NULL),
(6, 3, 5, 4, 2, 'User', 'user@gmail.com', '4567890909', 'Morris road', '30005', 'First test mail', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 1600.00, NULL, 'EOS56752379', '06 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'processing', '2023-02-07 02:48:53', NULL),
(7, 3, 5, 4, 2, 'User', 'user@gmail.com', '4567890909', 'Morris road', '30005', 'First test mail', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 1600.00, NULL, 'EOS97310208', '06 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'pending', '2023-02-07 02:49:10', NULL),
(8, 3, 5, 4, 2, 'User', 'user@gmail.com', '4567890909', 'Morris road', '30005', 'First test mail', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 1600.00, NULL, 'EOS15765297', '06 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'confirmed', '2023-02-07 02:52:18', '2023-02-10 02:02:10'),
(9, 3, 5, 4, 2, 'User', 'user@gmail.com', '4567890909', 'Morris road', '30005', 'First test mail', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 1600.00, NULL, 'EOS56720510', '06 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'confirmed', '2023-02-07 02:54:16', '2023-02-10 02:15:56'),
(10, 3, 5, 4, 2, 'User', 'user@gmail.com', '4567890909', 'Morris road', '30005', 'First test mail', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 1600.00, NULL, 'EOS80359886', '06 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'deliverd', '2023-02-07 02:54:24', '2023-02-10 02:02:18'),
(11, 3, 5, 4, 2, 'User', 'user@gmail.com', '4567890909', 'Morris road', '30005', 'First test mail', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 1600.00, NULL, 'EOS84870399', '06 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'deliverd', '2023-02-07 02:58:02', '2023-02-10 02:02:02'),
(12, 3, 5, 4, 2, 'User', 'user@gmail.com', 'User Test', 'Morris Road', '30005', 'TESt TESt', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 4520.00, NULL, 'EOS12857628', '07 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'deliverd', '2023-02-08 02:37:35', '2023-02-10 01:59:27'),
(13, 3, 5, 4, 2, 'User', 'user@gmail.com', 'user', 'Morriad Road', '30005', 'adadasddsd', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 135.00, NULL, 'EOS49917069', '07 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, '09 February 2023', 'broken product', 1, 'deliverd', '2023-02-08 02:39:23', '2023-02-10 02:47:18'),
(14, 3, 5, 4, 2, 'User', 'user@gmail.com', 'user222', 'Walmart road', '30005', 'test stripe', 'card_1MYywCIYBGycCHELmmuNLrC8', 'Stripe', 'txn_3MYywDIYBGycCHEL11gCQQcH', 'usd', 50.00, '63e2c5dc55243', 'EOS16165054', '07 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, '09 February 2023', 'wrong product', 2, 'deliverd', '2023-02-08 02:42:53', '2023-02-10 19:26:20'),
(15, 3, 5, 4, 2, 'Ruchi Sanghvi', 'user@gmail.com', '4694347643', '4245 Cedar Bridge Walk', '30024', 'Test User', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 2400.00, NULL, 'EOS19724470', '10 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, '10 February 2023', 'not working well', 2, 'deliverd', '2023-02-10 19:47:04', '2023-02-10 20:39:06'),
(16, 3, 5, 4, 2, 'Ruchi Sanghvi', 'user@gmail.com', '4694347643', '4245 Cedar Bridge Walk', '30024', 'testtesttesttesttest', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 120.00, NULL, 'EOS83520894', '10 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'deliverd', '2023-02-10 19:59:44', '2023-02-15 22:02:07'),
(17, 3, 5, 4, 2, 'Ruchi Sanghvi', 'user@gmail.com', '4694347643', '4245 Cedar Bridge Walk', '30024', 'cash on delivery', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 135.00, NULL, 'EOS81231912', '17 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'pending', '2023-02-18 01:13:42', NULL),
(18, 3, 5, 4, 2, 'Ruchi Sanghvi', 'user@gmail.com', '4694347643', '4245 Cedar Bridge Walk', '30004', 'test test tets', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 3240.00, NULL, 'EOS60688060', '17 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'pending', '2023-02-18 01:58:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `qty` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `vendor_id`, `color`, `size`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '12', 'Red', 'Small', '1', 100.00, '2023-02-07 02:15:44', NULL),
(2, 1, 1, '12', 'Red', 'Small', '1', 150.00, '2023-02-07 02:15:44', NULL),
(3, 9, 10, '2', 'Blue', 'Midium', '2', 50.00, '2023-02-07 02:15:44', NULL),
(4, 1, 10, '12', '--Choose Color--', '--Choose Size--', '1', 50.00, '2023-02-07 02:15:44', NULL),
(6, 3, 7, '2', 'Red', 'Small', '2', 250.00, '2023-02-07 02:31:56', NULL),
(7, 11, 3, '12', 'Red', 'Small', '1', 2000.00, '2023-02-07 02:58:03', NULL),
(8, 12, 6, NULL, 'Red', 'Small', '3', 1800.00, '2023-02-08 02:37:36', NULL),
(9, 12, 7, NULL, 'Red', 'Small', '1', 250.00, '2023-02-08 02:37:36', NULL),
(10, 13, 1, '12', 'Red', 'Small', '1', 150.00, '2023-02-08 02:39:24', NULL),
(11, 14, 10, '12', 'Red', 'Small', '1', 50.00, '2023-02-08 02:42:54', NULL),
(12, 15, 5, '12', 'Red', 'Small', '2', 1500.00, '2023-02-10 19:47:05', NULL),
(13, 16, 1, '12', 'Red', 'Small', '1', 150.00, '2023-02-10 19:59:46', NULL),
(14, 17, 1, '12', 'Red', 'Small', '1', 150.00, '2023-02-18 01:13:43', NULL),
(15, 18, 6, NULL, 'Red', 'Small', '2', 1800.00, '2023-02-18 01:58:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'brand.menu', 'web', 'brand', '2023-02-16 21:17:24', '2023-02-16 21:17:24'),
(2, 'brand.list', 'web', 'brand', '2023-02-16 21:18:09', '2023-02-16 21:18:09'),
(3, 'brand.add', 'web', 'brand', '2023-02-16 21:18:24', '2023-02-16 21:18:24'),
(4, 'brand.edit', 'web', 'brand', '2023-02-16 21:18:36', '2023-02-16 21:18:36'),
(5, 'brand.delete', 'web', 'brand', '2023-02-16 21:18:45', '2023-02-16 21:18:45'),
(6, 'category.menu', 'web', 'category', '2023-02-16 21:19:06', '2023-02-16 21:19:06'),
(7, 'category.list', 'web', 'category', '2023-02-16 21:19:18', '2023-02-16 21:19:18'),
(8, 'category.add', 'web', 'category', '2023-02-16 21:19:25', '2023-02-16 21:19:25'),
(9, 'category.edit', 'web', 'category', '2023-02-16 21:19:32', '2023-02-16 21:19:32'),
(10, 'category.delete', 'web', 'category', '2023-02-16 21:19:41', '2023-02-16 21:19:41'),
(11, 'subcategory.menu', 'web', 'subcategory', '2023-02-16 21:19:56', '2023-02-16 21:19:56'),
(12, 'subcategory.list', 'web', 'subcategory', '2023-02-16 21:20:08', '2023-02-16 21:20:08'),
(13, 'subcategory.add', 'web', 'subcategory', '2023-02-16 21:20:15', '2023-02-16 21:20:15'),
(14, 'subcategory.edit', 'web', 'subcategory', '2023-02-16 21:20:22', '2023-02-16 21:20:22'),
(15, 'subcategory.delete', 'web', 'subcategory', '2023-02-16 21:20:28', '2023-02-16 21:20:28'),
(16, 'product.list', 'web', 'product', '2023-02-16 21:20:55', '2023-02-16 21:20:55'),
(17, 'product.menu', 'web', 'product', '2023-02-16 21:21:07', '2023-02-16 21:21:07'),
(18, 'product.add', 'web', 'product', '2023-02-16 21:21:15', '2023-02-16 21:21:15'),
(19, 'product.edit', 'web', 'product', '2023-02-16 21:21:23', '2023-02-16 21:21:23'),
(20, 'product.delete', 'web', 'product', '2023-02-16 21:21:28', '2023-02-16 21:21:28'),
(21, 'slider.menu', 'web', 'slider', '2023-02-16 21:21:37', '2023-02-16 21:21:37'),
(22, 'slider.list', 'web', 'slider', '2023-02-16 21:21:45', '2023-02-16 21:21:45'),
(23, 'slider.add', 'web', 'slider', '2023-02-16 21:21:50', '2023-02-16 21:21:50'),
(24, 'slider.edit', 'web', 'slider', '2023-02-16 21:21:57', '2023-02-16 21:21:57'),
(25, 'slider.delete', 'web', 'slider', '2023-02-16 21:22:03', '2023-02-16 21:22:03'),
(26, 'ads.menu', 'web', 'ads', '2023-02-16 21:28:35', '2023-02-16 21:28:35'),
(27, 'ads.list', 'web', 'ads', '2023-02-16 21:28:42', '2023-02-16 21:28:42'),
(28, 'ads.add', 'web', 'ads', '2023-02-16 21:28:48', '2023-02-16 21:28:48'),
(29, 'ads.edit', 'web', 'ads', '2023-02-16 21:28:54', '2023-02-16 21:28:54'),
(30, 'ads.delete', 'web', 'ads', '2023-02-16 21:29:02', '2023-02-16 21:29:02'),
(31, 'coupon.list', 'web', 'coupon', '2023-02-16 21:29:16', '2023-02-16 21:29:16'),
(32, 'coupon.menu', 'web', 'coupon', '2023-02-16 21:29:23', '2023-02-16 21:29:23'),
(33, 'coupon.add', 'web', 'coupon', '2023-02-16 21:29:30', '2023-02-16 21:29:30'),
(34, 'coupon.edit', 'web', 'coupon', '2023-02-16 21:29:36', '2023-02-16 21:29:36'),
(35, 'coupon.delete', 'web', 'coupon', '2023-02-16 21:29:44', '2023-02-16 21:29:44'),
(37, 'vendor.menu', 'web', 'vendor', '2023-02-16 21:30:04', '2023-02-16 21:30:04'),
(41, 'area.menu', 'web', 'area', '2023-02-16 21:32:14', '2023-02-16 21:32:14'),
(46, 'order.menu', 'web', 'order', '2023-02-16 21:32:59', '2023-02-16 21:32:59'),
(47, 'order.list', 'web', 'order', '2023-02-16 21:33:06', '2023-02-16 21:33:06'),
(51, 'return.order.menu', 'web', 'returns', '2023-02-16 21:33:52', '2023-02-17 00:02:19'),
(56, 'report.menu', 'web', 'report', '2023-02-16 21:44:30', '2023-02-16 21:44:30'),
(61, 'user.menu', 'web', 'user', '2023-02-16 21:44:30', '2023-02-16 21:44:30'),
(66, 'review.menu', 'web', 'review', '2023-02-16 21:44:30', '2023-02-16 21:44:30'),
(71, 'setting.menu', 'web', 'setting', '2023-02-16 21:44:30', '2023-02-16 21:44:30'),
(81, 'role.permission.menu', 'web', 'role', '2023-02-16 21:55:10', '2023-02-17 00:53:41'),
(86, 'admin.menu', 'web', 'admin', '2023-02-16 22:00:52', '2023-02-16 22:00:52'),
(88, 'stock.menu', 'web', 'stock', '2023-02-16 22:03:48', '2023-02-16 22:03:48'),
(93, 'blog.menu', 'web', 'blog', '2023-02-17 00:39:57', '2023-02-17 00:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_qty` varchar(255) NOT NULL,
  `product_tags` varchar(255) DEFAULT NULL,
  `product_color` varchar(255) DEFAULT NULL,
  `product_size` varchar(255) DEFAULT NULL,
  `selling_price` varchar(255) NOT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `short_descp` text NOT NULL,
  `long_descp` text NOT NULL,
  `product_thumbnail` varchar(255) NOT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `product_name`, `product_slug`, `product_code`, `product_qty`, `product_tags`, `product_color`, `product_size`, `selling_price`, `discount_price`, `short_descp`, `long_descp`, `product_thumbnail`, `vendor_id`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 3, 'Shoes', 'shoes', 'C34567', '24', 'new product,top product', 'Red,Blue,Black', 'Small,Midium,Large', '250', '150', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin wor', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin worContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin wor', 'upload/products/thumbnail/1755768828563554.jpg', '12', 1, 1, NULL, 1, 1, '2023-01-27 23:28:41', '2023-02-15 22:02:07'),
(2, 1, 2, 3, 'Woman Accessories', 'woman-accessories', 'C45333', '25', 'new product,top product', 'Red,Blue,Black', 'Small,Midium,Large', '200', '100', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin wor', 'Hello, World!Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin worContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin wor', 'upload/products/thumbnail/1755768885449513.jpg', '12', 1, NULL, NULL, NULL, 1, '2023-01-23 04:54:51', NULL),
(3, 4, 4, 1, 'LG Refrigerator', 'lg-refrigerator', '347900', '25', 'new product,top product', 'Red,Blue,Black', 'Small,Midium,Large', '2000', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cen', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cenLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cen', 'upload/products/thumbnail/1755784269725602.webp', '12', NULL, 1, NULL, 1, 1, '2023-01-27 23:28:36', '2023-01-27 23:28:36'),
(4, 5, 4, 2, 'Dryer', 'dryer', '143655', '25', 'new product,top product', 'Red,Blue,Black', 'Small,Midium,Large', '600', '500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cen', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cenLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cen', 'upload/products/thumbnail/1755784432093644.jpg', '2', 1, NULL, 1, NULL, 1, '2023-01-24 08:03:11', '2023-01-24 08:03:11'),
(5, 5, 4, 8, 'Washer', 'washer', '25633', '10', 'new product,top product', 'Red,Blue,Black', 'Small,Midium,Large', '2000', '1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cen', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cenLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cenv', 'upload/products/thumbnail/1755784528414045.png', '12', 1, NULL, 1, NULL, 1, '2023-01-24 08:02:55', '2023-01-24 08:02:55'),
(6, 5, 4, 9, 'Dishwasher', 'dishwasher', '63998', '5', 'new product,top product', 'Red,Blue,Black', 'Small,Midium,Large', '2000', '1800', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cen', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cenLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cen', 'upload/products/thumbnail/1755784600112445.jpg', NULL, 1, 1, 1, NULL, 1, '2023-01-27 23:28:26', '2023-01-27 23:28:26'),
(7, 3, 9, 14, 'Table', 'table', '23655', '10', 'new product,top product', 'Red,Blue,Black', 'Small,Midium,Large', '250', NULL, 'catwiseproductcatwiseproductcatwiseproductcatwiseproductcatwiseproductcatwiseproductcatwiseproduct', 'catwiseproductcatwiseproductcatwiseproductcatwiseproductcatwiseproduct', 'upload/products/thumbnail/1755872869782955.jpg', NULL, 1, NULL, NULL, NULL, 1, '2023-01-24 08:27:39', NULL),
(8, 3, 7, 18, 'Samsung Galaxy 5G', 'samsung-galaxy-5g', '236556', '10', 'new product,top product', NULL, NULL, '900', NULL, 'product_sizeproduct_sizeproduct_sizeproduct_sizeproduct_sizeproduct_sizeproduct_size', '<div class=\"\">\r\n                                    <p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>\r\n                                    <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p>\r\n                                    <ul class=\"product-more-infor mt-30\">\r\n                                        <li><span>Type Of Packing</span> Bottle</li>\r\n                                        <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>\r\n                                        <li><span>Quantity Per Case</span> 100ml</li>\r\n                                        <li><span>Ethyl Alcohol</span> 70%</li>\r\n                                        <li><span>Piece In One</span> Carton</li>\r\n                                    </ul>\r\n                                    <hr class=\"wp-block-separator is-style-dots\" />\r\n                                    <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>\r\n                                    <h4 class=\"mt-30\">Packaging & Delivery</h4>\r\n                                    <hr class=\"wp-block-separator is-style-wide\" />\r\n                                    <p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p>\r\n                                    <p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p>\r\n                                    <h4 class=\"mt-30\">Suggested Use</h4>\r\n                                    <ul class=\"product-more-infor mt-30\">\r\n                                        <li>Refrigeration not necessary.</li>\r\n                                        <li>Stir before serving</li>\r\n                                    </ul>\r\n                                    <h4 class=\"mt-30\">Other Ingredients</h4>\r\n                                    <ul class=\"product-more-infor mt-30\">\r\n                                        <li>Organic raw pecans, organic raw cashews.</li>\r\n                                        <li>This butter was produced using a LTG (Low Temperature Grinding) process</li>\r\n                                        <li>Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</li>\r\n                                    </ul>\r\n                                    <h4 class=\"mt-30\">Warnings</h4>\r\n                                    <ul class=\"product-more-infor mt-30\">\r\n                                        <li>Oil separation occurs naturally. May contain pieces of shell.</li>\r\n                                    </ul>\r\n                                </div>', 'upload/products/thumbnail/1756189323732566.jpg', '12', NULL, 1, 1, NULL, 1, '2023-01-27 23:28:32', '2023-01-27 23:28:32'),
(9, 2, 7, 18, 'Iphone S3', 'iphone-s3', '230255', '2', 'new product,top product', 'Red,Blue,Black', 'Small,Midium,Large', '300', '200', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at H', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at HContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at HContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at H', 'upload/products/thumbnail/1756202901279686.jpg', '12', NULL, 1, NULL, NULL, 1, '2023-01-27 23:53:21', NULL),
(10, 2, 5, 19, 'Samsung Bluetooth Speakers', 'samsung-bluetooth-speakers', '565', '20', 'new product,top product', 'Red,Blue,Black', 'Small,Midium,Large', '60', '50', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled  Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled  Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled  Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled  Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled', 'upload/products/thumbnail/1756203149144211.webp', '12', NULL, 1, NULL, NULL, 1, '2023-01-27 23:57:17', NULL),
(11, 3, 1, 6, 'Men\'s Black T-Shirt', 'men\'s-black-t-shirt', '336522', '52', 'new product,top product', 'Red,Blue,Black', 'Small,Midium,Large', '80', '70', 'rvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more rece', 'rvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recervived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recervived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more rece', 'upload/products/thumbnail/1756204418860182.jpeg', '12', NULL, 1, NULL, NULL, 1, '2023-01-28 00:17:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_multi_images`
--

CREATE TABLE `product_multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_multi_images`
--

INSERT INTO `product_multi_images` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'upload/products/multi-image/1755768828648000.jpg', '2023-01-23 04:53:57', NULL),
(2, 1, 'upload/products/multi-image/1755768828720846.jpg', '2023-01-23 04:53:57', NULL),
(3, 1, 'upload/products/multi-image/1755768828795737.jpg', '2023-01-23 04:53:57', NULL),
(4, 2, 'upload/products/multi-image/1755768885530191.jpg', '2023-01-23 04:54:51', NULL),
(5, 2, 'upload/products/multi-image/1755768885596995.jpg', '2023-01-23 04:54:51', NULL),
(6, 3, 'upload/products/multi-image/1755784269893210.png', '2023-01-23 08:59:23', NULL),
(7, 3, 'upload/products/multi-image/1755784270062145.webp', '2023-01-23 08:59:23', NULL),
(8, 4, 'upload/products/multi-image/1755784432192870.jpg', '2023-01-23 09:01:58', NULL),
(9, 5, 'upload/products/multi-image/1755784528589878.jpg', '2023-01-23 09:03:30', NULL),
(10, 5, 'upload/products/multi-image/1755784528664016.jpg', '2023-01-23 09:03:30', NULL),
(11, 5, 'upload/products/multi-image/1755784528768433.png', '2023-01-23 09:03:30', NULL),
(12, 6, 'upload/products/multi-image/1755784600228369.jpg', '2023-01-23 09:04:38', NULL),
(13, 6, 'upload/products/multi-image/1755784600302327.jpg', '2023-01-23 09:04:38', NULL),
(14, 7, 'upload/products/multi-image/1755872870243052.jpg', '2023-01-24 08:27:39', NULL),
(15, 7, 'upload/products/multi-image/1755872870553462.jpg', '2023-01-24 08:27:39', NULL),
(16, 7, 'upload/products/multi-image/1755872870677337.jpg', '2023-01-24 08:27:40', NULL),
(17, 7, 'upload/products/multi-image/1755872871072809.png', '2023-01-24 08:27:40', NULL),
(18, 8, 'upload/products/multi-image/1756189323839475.jpg', '2023-01-27 20:17:33', NULL),
(19, 8, 'upload/products/multi-image/1756189323982231.jpg', '2023-01-27 20:17:33', NULL),
(20, 9, 'upload/products/multi-image/1756202901353196.png', '2023-01-27 23:53:21', NULL),
(21, 9, 'upload/products/multi-image/1756202901637651.jpg', '2023-01-27 23:53:21', NULL),
(22, 9, 'upload/products/multi-image/1756202901697184.jpg', '2023-01-27 23:53:21', NULL),
(23, 9, 'upload/products/multi-image/1756202901754577.jpg', '2023-01-27 23:53:21', NULL),
(24, 10, 'upload/products/multi-image/1756203149368328.webp', '2023-01-27 23:57:18', NULL),
(25, 10, 'upload/products/multi-image/1756203149589512.webp', '2023-01-27 23:57:18', NULL),
(26, 10, 'upload/products/multi-image/1756203149733763.webp', '2023-01-27 23:57:18', NULL),
(27, 10, 'upload/products/multi-image/1756203150100951.webp', '2023-01-27 23:57:18', NULL),
(28, 10, 'upload/products/multi-image/1756203150424600.webp', '2023-01-27 23:57:19', NULL),
(29, 11, 'upload/products/multi-image/1756204419160941.jpeg', '2023-01-28 00:17:29', NULL),
(30, 11, 'upload/products/multi-image/1756204419500767.jpeg', '2023-01-28 00:17:29', NULL),
(31, 11, 'upload/products/multi-image/1756204419592723.jpeg', '2023-01-28 00:17:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `vendor_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `comment`, `rating`, `status`, `vendor_id`, `created_at`, `updated_at`) VALUES
(2, 3, 4, 'Good PRoduct', '5', '1', 2, '2023-02-14 21:53:46', NULL),
(3, 3, 4, 'Very good appearance', '4', '1', 2, '2023-02-14 22:03:24', NULL),
(6, 3, 10, 'The Google Nest Audio is great for voice assistants. With built-in Google Assistant support, you can control it using only your voice. Whether you\'re on the couch or further away from the device, it doesn\'t have any trouble hearing your commands.', '4', '1', 12, '2023-02-15 01:57:20', '2023-02-15 01:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'web', '2023-02-16 22:15:46', '2023-02-16 22:15:46'),
(3, 'CEO', 'web', '2023-02-16 22:16:04', '2023-02-16 22:16:04'),
(4, 'Account', 'web', '2023-02-16 22:16:17', '2023-02-16 22:16:17'),
(8, 'SuperAdmin', 'web', '2023-02-17 02:18:48', '2023-02-17 02:18:48');

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
(1, 3),
(1, 4),
(1, 8),
(2, 3),
(2, 4),
(2, 8),
(3, 3),
(3, 8),
(4, 3),
(4, 8),
(5, 3),
(5, 8),
(6, 3),
(6, 4),
(6, 8),
(7, 3),
(7, 8),
(8, 3),
(8, 8),
(9, 3),
(9, 8),
(10, 3),
(10, 8),
(11, 8),
(12, 8),
(13, 8),
(14, 8),
(15, 8),
(16, 3),
(16, 4),
(16, 8),
(17, 3),
(17, 4),
(17, 8),
(18, 3),
(18, 8),
(19, 3),
(19, 8),
(20, 3),
(20, 8),
(21, 8),
(22, 8),
(23, 8),
(24, 8),
(25, 8),
(26, 8),
(27, 8),
(28, 8),
(29, 8),
(30, 8),
(31, 3),
(31, 8),
(32, 3),
(32, 8),
(33, 3),
(33, 8),
(34, 3),
(34, 8),
(35, 3),
(35, 8),
(37, 8),
(41, 4),
(41, 8),
(46, 3),
(46, 8),
(47, 3),
(47, 8),
(51, 8),
(56, 2),
(56, 8),
(61, 2),
(61, 8),
(66, 8),
(71, 8),
(81, 8),
(86, 2),
(86, 8),
(88, 8),
(93, 4),
(93, 8);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_author` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'MultiVendor Ecommerece System', 'Ruchi Sanghvi', 'best online shop,best t-shirt,best multivendor system', 'Everyday Fresh & Clean with Our Products', '2023-02-15 15:33:21', '2023-02-15 20:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `ship_districts`
--

CREATE TABLE `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`) VALUES
(3, 6, 'Atlanta', '2023-02-02 19:29:44', NULL),
(4, 5, 'Newjersey', '2023-02-02 19:30:02', NULL),
(5, 8, 'Manhatton1111', '2023-02-02 19:30:10', '2023-02-02 19:30:17'),
(8, 2, 'pihoria', '2023-02-02 20:15:22', NULL),
(9, 7, 'DC', '2023-02-02 20:16:45', NULL),
(10, 5, 'Lilo', '2023-02-02 19:30:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_divisions`
--

CREATE TABLE `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(2, 'Chicago', '2023-02-02 18:52:01', NULL),
(5, 'NewYork', '2023-02-02 18:58:56', NULL),
(6, 'Georgia', '2023-02-02 18:59:00', NULL),
(7, 'Washington', '2023-02-02 18:59:04', NULL),
(8, 'Arizona', '2023-02-02 18:59:09', '2023-02-02 19:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `ship_states`
--

CREATE TABLE `ship_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_states`
--

INSERT INTO `ship_states` (`id`, `division_id`, `district_id`, `state_name`, `created_at`, `updated_at`) VALUES
(2, 5, 4, 'Manhatton', '2023-02-02 19:55:57', '2023-02-02 20:18:10'),
(8, 6, 3, 'Alpharetta', '2023-02-02 20:17:17', '2023-02-02 20:17:58'),
(9, 2, 8, 'dsffdsff', '2023-02-02 20:24:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `support_phone` varchar(255) DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company_address` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `logo`, `support_phone`, `phone1`, `email`, `company_address`, `facebook`, `twitter`, `youtube`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1757910172581718.png', '1900-882', '4697690390', 'rsanghvi2712@gmail.com', '4245,cedar bridge walk,suwanee', 'facebook.com', 'twitter.com', 'youtube.com', 'Copyright 2022 All Right Reserved By Ruchi S', '2023-02-15 14:34:22', '2023-02-15 20:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `short_title` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `short_title`, `slider_image`, `created_at`, `updated_at`) VALUES
(1, 'Fresh Vegetables Big Discount', 'Save upto 50% on your first order', 'upload/slider/1755786851823994.png', NULL, '2023-01-23 09:40:25'),
(2, 'Don\'t miss amazing Gorcery Sales', 'Sign up for daily newsletter', 'upload/slider/1755786858040216.png', NULL, '2023-01-23 09:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(1, 4, 'Refrigerator', 'refrigerator', NULL, NULL),
(2, 4, 'Dryer', 'dryer', NULL, NULL),
(3, 2, 'Purse', 'purse', NULL, NULL),
(4, 2, 'School Bags', 'school-bags', NULL, NULL),
(5, 1, 'Mens Bottom Ware', 'mens-bottom-ware', NULL, NULL),
(6, 1, 'Mens top Ware', 'mens-top-ware', NULL, '2023-01-23 04:51:59'),
(7, 1, 'Women\' Top ware', 'women\'-top-ware', NULL, NULL),
(8, 4, 'Washer', 'washer', NULL, NULL),
(9, 4, 'Dishwasher', 'dishwasher', NULL, NULL),
(10, 6, 'Amul milk', 'amul-milk', NULL, NULL),
(11, 6, 'Amul Cake', 'amul-cake', NULL, '2023-01-23 09:29:22'),
(12, 5, 'TV', 'tv', NULL, NULL),
(13, 5, 'Headphone', 'headphone', NULL, NULL),
(14, 9, 'Table', 'table', NULL, NULL),
(15, 9, 'Chair', 'chair', NULL, NULL),
(16, 9, 'Sofaset', 'sofaset', NULL, NULL),
(17, 9, 'LoveSeat', 'loveseat', NULL, NULL),
(18, 7, 'Smartphones', 'smartphones', NULL, NULL),
(19, 5, 'Bluetooth Speakers', 'bluetooth-speakers', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `vendor_join` varchar(255) DEFAULT NULL,
  `vendor_short_info` varchar(255) DEFAULT NULL,
  `role` enum('admin','vendor','user') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `last_seen` datetime DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `photo`, `phone`, `address`, `vendor_join`, `vendor_short_info`, `role`, `status`, `last_seen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$Ohwwu6/DqbnIIrMpBT84nelajcDrkGoU0VVGI8diEHRfkXpm6rUl6', '20230207214520200809_190646.jpg', '4694347643', '4245 Cedar Bridge Walk', '', '', 'admin', 'active', '2023-02-17 21:57:36', NULL, NULL, '2023-02-18 02:57:36'),
(2, 'Ariyan Vendor', 'vendor', 'vendor@gmail.com', NULL, '$2y$10$Ohwwu6/DqbnIIrMpBT84nelajcDrkGoU0VVGI8diEHRfkXpm6rUl6', '20230207234020200809_183734.jpg', '469-456-8965', NULL, '2022', 'test', 'vendor', 'active', '2023-02-14 20:55:49', NULL, NULL, '2023-02-15 01:55:49'),
(3, 'Ruchi Sanghvi', 'user', 'user@gmail.com', NULL, '$2y$10$5W/B5g0MvYYQjfQ9V27MFOeW/105x3VEXi5jSqbjOfU3FcgZdFkmW', '202302081423IMG-20210802-WA0059.jpg', '4694347643', '4245 Cedar Bridge Walk', '', '', 'user', 'active', '2023-02-21 18:34:59', NULL, NULL, '2023-02-21 23:34:59'),
(4, 'Zetta Boyle', NULL, 'gene.predovic@example.com', '2023-01-23 04:44:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '1-205-581-4890', '79031 Xzavier Mills\nLake Sydniberg, DC 21942-1574', '', '', 'user', 'inactive', NULL, 'Zg1PO3WhXy', '2023-01-23 04:44:36', '2023-01-23 04:44:36'),
(5, 'Fritz Schulist', NULL, 'brigitte54@example.net', '2023-01-23 04:44:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '+17626140354', '77103 Haag Square Apt. 026\nHarrisbury, UT 23445', '', '', 'user', 'active', NULL, '7fARJjaQDV', '2023-01-23 04:44:36', '2023-01-23 04:44:36'),
(8, 'Ms. Alba Eichmann DDS', NULL, 'una.streich@example.net', '2023-01-23 04:44:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '202301222348logo.png', '(714) 848-6743', '5349 Schamberger Isle\nFaheyville, RI 63593', '2023', '', 'vendor', 'active', NULL, '5AUYGGG5Ze', '2023-01-23 04:44:36', '2023-01-28 02:16:23'),
(10, 'Maximillia Littel', NULL, 'strosin.ashlynn@example.com', '2023-01-23 04:44:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '+1 (470) 886-7180', '67798 Abshire Branch Apt. 049\nNew Jovanny, VT 46944', '', '', 'vendor', 'inactive', NULL, '1h0kkB0jEn', '2023-01-23 04:44:36', '2023-01-23 04:44:36'),
(11, 'Mr. London Spencer', NULL, 'giovanni63@example.com', '2023-01-23 04:44:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '762-304-2710', '897 Ardith Branch Suite 466\nPort Imamouth, IL 30669', '', '', 'user', 'inactive', NULL, '6NoBIV0pwB', '2023-01-23 04:44:36', '2023-01-23 04:44:36'),
(12, 'Nest Food Ltd', 'nestfood', 'nestfood@gmail.com', NULL, '$2y$10$Ohwwu6/DqbnIIrMpBT84nelajcDrkGoU0VVGI8diEHRfkXpm6rUl6', '202301222348logo.png', '4569852447', '897 Ardith Branch Suite 466\nPort Imamouth, IL 30669', '2023', 'good good', 'vendor', 'active', '2023-02-14 21:04:11', NULL, '2023-01-23 04:47:09', '2023-02-15 02:04:11'),
(15, 'Bhavin Shah', 'bhavin', 'bhavin@gmail.com', NULL, '$2y$10$HyQ8UTEUfFxKcNEYWDYYUexXtW5XbjGz.UkTkBcQUXlH3pjPSMQ7S', NULL, '4694347643', '4245 Cedar Bridge Walk', NULL, NULL, 'admin', 'active', NULL, NULL, '2023-02-17 22:06:45', '2023-02-17 22:10:53'),
(16, 'multivendor', 'Multivendor', 'multivendor@gmail.com', NULL, '$2y$10$M95rMgzba26h8cZpCknZNeWHwoD/A0GCxH.XEEe.R4kcc6Aqd8Pmu', NULL, '11212322', 'morris road', NULL, NULL, 'admin', 'active', '2023-02-17 19:48:11', NULL, '2023-02-17 22:10:17', '2023-02-18 00:48:11'),
(17, 'manek', 'manek', 'manek@gmail.com', NULL, '$2y$10$aawL.wS4wipoItC1ZgeUUuslmLchklwOd5x0Sgic6t8klAiv5RRVq', NULL, 'admin@123', 'morriad road', NULL, NULL, 'admin', 'active', NULL, NULL, '2023-02-17 22:10:46', '2023-02-17 22:10:46'),
(22, 'Jwellery shop', 'jwellery', 'jshop@gmail.com', NULL, '$2y$10$6QhdeogcEo5YQliM4H3Br.jj1cZGyXZMEGKtnu4njebE51dPxsKAO', NULL, '1231123', NULL, '2024', NULL, 'vendor', 'active', '2023-02-17 22:31:47', NULL, NULL, '2023-02-18 03:31:47'),
(23, 'amish', NULL, 'amish@gmail.com', NULL, '$2y$10$L2Jj/t0vp2tpo2wZ6I7skeSxR9LckRi6EZYgaVI5mHv0eU6BOu5Xe', NULL, NULL, NULL, NULL, NULL, 'user', 'active', '2023-02-17 22:29:49', NULL, '2023-02-18 02:36:28', '2023-02-18 03:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `compares`
--
ALTER TABLE `compares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_multi_images`
--
ALTER TABLE `product_multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

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
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_districts`
--
ALTER TABLE `ship_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_states`
--
ALTER TABLE `ship_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `compares`
--
ALTER TABLE `compares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_multi_images`
--
ALTER TABLE `product_multi_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ship_districts`
--
ALTER TABLE `ship_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ship_states`
--
ALTER TABLE `ship_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
