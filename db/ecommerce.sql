-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2022 at 06:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

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
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `returnorder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alluser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminuserrole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(25) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `brand`, `category`, `product`, `slider`, `coupons`, `shipping`, `blog`, `setting`, `returnorder`, `review`, `orders`, `stock`, `reports`, `alluser`, `adminuserrole`, `type`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'superadmin@gmail.com', '2022-01-14 13:21:50', '$2y$10$JS1wNYTb74HpEmwr4f/F.OGp4NlVERV6fRPTtO/BkvC57avloyWfi', '0687067002', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 'CHI7sMyE4pxdPjv5MkAGJXdU7aSfP4m3HoDoLAskFoLdntChpRfM8RRdve1H', NULL, '202201220756user3.jpeg', '2022-01-14 13:21:51', '2022-01-22 06:09:19'),
(3, 'Bernard', 'ben@gmail.com', NULL, '$2y$10$duUK4Vk.1ulnxpzCwq2zm.iH7IjMvO8XD/97a6yQzuVvkjF6SU2Jm', '0782887387', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 2, NULL, NULL, 'upload/admin_images/1727720644586508.png', '2022-03-19 16:31:18', '2022-03-19 16:31:18'),
(4, 'Chuwa', 'chuwa@gmail.com', NULL, '$2y$10$sMFgZPkSHCdazOMeQMeHf.ZaLBefvZlVD4TYWMbZ9cF0HnXxBiJIS', '0754556674', NULL, NULL, NULL, '1', NULL, '1', '1', NULL, '1', NULL, '1', '1', NULL, NULL, NULL, 2, NULL, NULL, 'upload/admin_images/1727755621008300.png', '2022-03-19 15:56:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE IF NOT EXISTS `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `post_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_detail_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_detail_sw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `category_id`, `post_title_en`, `post_title_sw`, `post_slug_en`, `post_slug_sw`, `post_image`, `post_detail_en`, `post_detail_sw`, `created_at`, `updated_at`) VALUES
(1, 7, 'Vegan Quesadillas with Smoky Black Beans', 'Quesadilla za Vegan pamoja na Maharage Meusi ya Moshi', 'vegan quesadillas with smoky black beans', 'Quesadilla za Vegan pamoja na Maharage Meusi ya Moshi', 'upload/post/1727294826217265.jpeg', '<p>Sometimes after a long day, the only thing that will do is a&nbsp;<strong>quick</strong>&nbsp;and&nbsp;<strong>comforting</strong>&nbsp;dinner. Think&nbsp;<a href=\"https://minimalistbaker.com/the-best-vegan-grilled-cheese-sandwich/\" rel=\"noreferrer noopener\" target=\"_blank\">grilled cheese</a>,&nbsp;<a href=\"https://minimalistbaker.com/creamy-vegan-pink-pasta-30-minutes/\" rel=\"noreferrer noopener\" target=\"_blank\">pasta</a>, and our new favorite: the Vegan Quesadilla. It comes together incredibly&nbsp;<strong>fast</strong>&nbsp;for a&nbsp;<strong>delicious</strong>&nbsp;dinner, or you can make the filling ahead of time for&nbsp;<strong>quick lunches</strong>&nbsp;throughout the week!&nbsp;</p>\r\n\r\n<p>This quesadilla is&nbsp;<strong>packed with flavor</strong>&nbsp;thanks to smoky spices and our&nbsp;<a href=\"https://minimalistbaker.com/easy-vegan-cheddar-cheese-spread--sauce/\" rel=\"noreferrer noopener\" target=\"_blank\">easy vegan cheddar cheese</a>&nbsp;and filled with&nbsp;<strong>fiber</strong>&nbsp;and&nbsp;<strong>protein</strong>&nbsp;(hello,&nbsp;<a href=\"https://minimalistbaker.com/instant-pot-black-beans-perfect-beans-every-time/\" rel=\"noreferrer noopener\" target=\"_blank\">black beans</a>!) to keep you full. Did we mention there&rsquo;s just&nbsp;<strong>30 minutes</strong>&nbsp;and&nbsp;<strong>9 ingredients&nbsp;</strong>required? So enough talk &mdash; let us show you how it&rsquo;s done!</p>', '<p>Wakati mwingine baada ya siku ndefu, jambo pekee litakalofanya ni chakula cha jioni cha haraka na cha faraja. Fikiria jibini iliyochomwa, pasta, na favorite yetu mpya: Quesadilla Vegan. Huja pamoja haraka sana kwa chakula cha jioni kitamu, au unaweza kufanya kujaza mapema kwa milo ya mchana ya haraka kwa wiki nzima!</p>\r\n\r\n<p>Quesadilla hii imejaa ladha kutokana na viungo vinavyovuta moshi na jibini letu la vegan cheddar na imejaa nyuzi na protini (hujambo, maharagwe meusi!) ili kukuwezesha kushiba. Je, tulitaja kuwa kuna dakika 30 tu na viungo 9 vinavyohitajika? Mazungumzo ya kutosha - hebu tuonyeshe jinsi inafanywa!</p>', '2022-03-14 13:51:53', NULL),
(2, 7, 'What is a Quesadilla?', 'Quesadilla ni nini?', 'what is a quesadilla?', 'Quesadilla ni nini?', 'upload/post/1727296002125231.jpeg', '<p>Quesadillas originated in Mexico and consist of a tortilla filled with anything from meat to vegetables to beans to spices &mdash; but always include cheese. Traditionally, quesadillas are made with corn tortillas, but flour tortillas are used in some regions!</p>\r\n\r\n<p>Our plant-based spin on the classic quesadilla has all our favorite Mexican-inspired veggies and spices and uses our vegan cheddar cheese to supply all the ooey-gooey &ldquo;cheesy&rdquo; goodness you know and love!</p>\r\n\r\n<p>How to Make a Vegan Quesadilla<br />\r\nFirst, we start our vegan quesadilla by building flavor! Onions and bell pepper saut&eacute; in the pan to soften and caramelize, then we add salt, cumin, and chili powder for savory smokiness.</p>', '<p>Quesadillas asili ya Meksiko na inajumuisha tortilla iliyojaa chochote kutoka kwa nyama, mboga, maharagwe hadi viungo - lakini kila wakati hujumuisha jibini. Kijadi, quesadillas hutengenezwa na tortilla za mahindi, lakini tortilla za unga hutumiwa katika baadhi ya mikoa!</p>\r\n\r\n<p>Spishi yetu inayotokana na mmea kwenye quesadilla ya kawaida ina mboga na viungo vyetu vyote tuvipendavyo vilivyoongozwa na Meksiko na hutumia jibini letu la vegan la cheddar kusambaza wema wote wa ooey-gooey &quot;cheesy&quot; unaojua na kupenda!</p>\r\n\r\n<p>Jinsi ya kutengeneza Quesadilla ya Vegan<br />\r\nKwanza, tunaanza quesadilla yetu ya vegan kwa kujenga ladha! Vitunguu na pilipili hoho vikaue kwenye sufuria ili vilainike na kulainisha, kisha tunaongeza chumvi, cumin, na poda ya pilipili kwa moshi wa kitamu.</p>', '2022-03-14 14:10:34', NULL),
(3, 6, 'New Studies: Impact of Produce Consumption on Heart and Brain Health', 'Masomo Mapya: Athari za Utumiaji wa Bidhaa kwenye Afya ya Moyo na Ubongo', 'new studies: impact of produce consumption on heart and brain health', 'Masomo Mapya: Athari za Utumiaji wa Bidhaa kwenye Afya ya Moyo na Ubongo', 'upload/post/1727296401078904.jpeg', '<p>As we approach National Fruit and Veggies Month in September,&nbsp;<a href=\"https://fruitsandveggies.org/stories/nfvm/\">which focuses on the importance of increasing consumption,</a>&nbsp;two new studies focusing on brain and heart health continue to reinforce the importance of eating more produce each day.</p>\r\n\r\n<p><a href=\"https://www.nytimes.com/2021/08/09/well/brain-health-fruits-vegetables.html\">From the New York Times</a>:&nbsp;<em>A new study, one of the largest such analyses to date, has found that flavonoids, the chemicals that give plant foods their bright colors, may help curb the frustrating forgetfulness and mild confusion that older people often complain about with advancing age, and that sometimes can precede a diagnosis of dementia. The study was observational so cannot prove cause and effect, though its large size and long duration add to growing evidence that what we eat can affect brain health.</em></p>\r\n\r\n<p><em>According to the senior author, Dr. Deborah Blacker, a professor of epidemiology at the Harvard T.H. Chan School of Public Health, these long-term findings suggest that starting early in life with a flavonoid-rich diet may be important for brain health.</em></p>\r\n\r\n<p><em>&ldquo;The message is that these things are good for you in general, and not just for cognition. Finding ways that you enjoy incorporating these things into your life is important. Think about: How do I find fresh produce and cook it in a way that&rsquo;s appetizing? &mdash; that&rsquo;s part of the message here,&rdquo; Dr. Blacker says.</em></p>', '<p>Tunapokaribia Mwezi wa Kitaifa wa Matunda na Mboga mnamo Septemba, ambao unazingatia umuhimu wa kuongeza matumizi, tafiti mbili mpya zinazozingatia afya ya ubongo na moyo zinaendelea kusisitiza umuhimu wa kula mazao mengi kila siku.</p>\r\n\r\n<p>Kutoka kwa New York Times: Utafiti mpya, mojawapo ya uchanganuzi mkubwa zaidi kufikia sasa, umegundua kwamba flavonoids, kemikali ambazo hupa vyakula vya mimea rangi yao angavu, inaweza kusaidia kuzuia usahaulifu unaokatisha tamaa na kuchanganyikiwa kidogo ambayo mara nyingi wazee hulalamikia. uzee, na kwamba wakati mwingine unaweza kutangulia utambuzi wa shida ya akili. Utafiti huo ulikuwa wa uchunguzi kwa hivyo hauwezi kuthibitisha sababu na athari, ingawa ukubwa wake mkubwa na muda mrefu huongeza ushahidi unaoongezeka kwamba kile tunachokula kinaweza kuathiri afya ya ubongo.</p>\r\n\r\n<p>Kulingana na mwandishi mkuu, Dk. Deborah Blacker, profesa wa epidemiolojia katika Chuo Kikuu cha Harvard T.H. Chan Shule ya Afya ya Umma, matokeo haya ya muda mrefu yanaonyesha kuwa kuanza mapema maishani na lishe iliyo na flavonoid inaweza kuwa muhimu kwa afya ya ubongo.</p>\r\n\r\n<p>&quot;Ujumbe ni kwamba mambo haya ni mazuri kwako kwa ujumla, na sio tu kwa utambuzi. Kutafuta njia ambazo unafurahia kujumuisha mambo haya katika maisha yako ni muhimu. Fikiria: Je, ninawezaje kupata mazao mapya na kuyapika kwa njia inayopendeza? - hiyo ni sehemu ya ujumbe hapa,&quot; Dk. Blacker anasema.</p>', '2022-03-14 14:16:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_categories`
--

CREATE TABLE IF NOT EXISTS `blog_post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_name_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_post_categories`
--

INSERT INTO `blog_post_categories` (`id`, `blog_category_name_en`, `blog_category_name_sw`, `blog_category_slug_en`, `blog_category_slug_sw`, `created_at`, `updated_at`) VALUES
(1, 'Spices', 'Viungo', 'spices', 'Viungo', '2022-03-14 06:26:39', '2022-03-14 06:26:39'),
(3, 'Veges', 'Mboga Mboga', 'veges', 'Mboga Mboga', '2022-03-14 06:24:57', '2022-03-14 06:24:57'),
(6, 'Fruits', 'Matunda', 'fruits', 'Matunda', '2022-03-14 06:33:05', NULL),
(7, 'Foods', 'Vyakula', 'foods', 'Vyakula', '2022-03-14 13:41:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name_en`, `brand_name_sw`, `brand_slug_en`, `brand_slug_sw`, `brand_image`, `created_at`, `updated_at`) VALUES
(5, 'FARM2022', 'SHAMBA2022', 'farm2022', 'SHAMBA2022', 'upload/brand/1722772385247571.jpeg', NULL, '2022-02-17 06:42:29'),
(9, 'FARM202201', 'SHAMBA202201', 'farm202201', 'SHAMBA202201', 'upload/brand/1728981431774817.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name_en`, `category_name_sw`, `category_slug_en`, `category_slug_sw`, `category_icon`, `created_at`, `updated_at`) VALUES
(8, 'Foods', 'Vyakula', 'foods', 'Vyakula', 'fa fa-apple', NULL, '2022-02-05 05:17:03'),
(9, 'Fruits', 'Matunda', 'fruits', 'Matunda', 'fa fa-apple', NULL, NULL),
(10, 'Spice & Veggies', 'Viungo & Mboga', 'spice & veggies', 'Viungo & Mboga', 'fa fa-apple', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE IF NOT EXISTS `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HAPPY NEW YEAR', 20, '2022-03-10', 1, '2022-03-04 08:56:03', NULL),
(3, 'ESTER', 10, '2022-05-18', 1, '2022-03-06 13:28:38', '2022-03-06 13:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_14_143229_create_sessions_table', 1),
(7, '2022_01_14_160048_create_admins_table', 2),
(8, '2022_01_23_102924_create_brands_table', 3),
(9, '2022_01_25_181957_create_categories_table', 4),
(10, '2022_01_26_062851_create_sub_categories_table', 5),
(11, '2022_01_26_090805_create_sub_sub_categories_table', 6),
(12, '2022_01_26_100704_create_sub_sub_categories_table', 7),
(13, '2022_01_27_052220_create_products_table', 8),
(14, '2022_01_27_055937_create_multi_imgs_table', 8),
(15, '2022_02_09_071837_create_sliders_table', 9),
(16, '2022_03_02_052750_create_wishlists_table', 10),
(17, '2022_03_04_104622_create_coupons_table', 11),
(18, '2022_03_05_054028_create_ship_divisions_table', 12),
(19, '2022_03_05_125937_create_ship_districts_table', 13),
(20, '2022_03_05_184936_create_ship_districts_table', 14),
(21, '2022_03_06_064549_create_ship_states_table', 15),
(22, '2022_03_08_174702_create_shippings_table', 16),
(23, '2022_03_10_100626_create_orders_table', 17),
(24, '2022_03_10_113803_create_orders_table', 18),
(25, '2022_03_10_113916_create_order_items_table', 18),
(26, '2022_03_14_070732_create_blog_post_categories_table', 19),
(27, '2022_03_14_094150_create_blog_posts_table', 20),
(28, '2022_03_15_122741_create_site_settings_table', 21),
(29, '2022_03_15_151105_create_seos_table', 22),
(30, '2022_03_17_070107_create_reviews_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE IF NOT EXISTS `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'upload/products/multi-image/1724094186590815.jpeg', '2022-02-07 05:59:05', NULL),
(2, 1, 'upload/products/multi-image/1724094186820221.jpeg', '2022-02-07 05:59:05', NULL),
(3, 1, 'upload/products/multi-image/1724094187314395.jpeg', '2022-02-07 05:59:05', NULL),
(4, 2, 'upload/products/multi-image/1724095839078619.jpeg', '2022-02-07 06:25:21', NULL),
(5, 2, 'upload/products/multi-image/1724095839541504.jpeg', '2022-02-07 06:25:21', NULL),
(6, 2, 'upload/products/multi-image/1724095839904685.jpeg', '2022-02-07 06:25:21', NULL),
(7, 1, 'upload/products/multi-image/1724096659642782.jpeg', '2022-02-07 06:38:23', NULL),
(8, 1, 'upload/products/multi-image/1724096660021938.jpeg', '2022-02-07 06:38:24', NULL),
(9, 1, 'upload/products/multi-image/1724096661016554.jpeg', '2022-02-07 06:38:24', NULL),
(10, 2, 'upload/products/multi-image/1724097202911137.jpeg', '2022-02-07 06:47:01', NULL),
(11, 2, 'upload/products/multi-image/1724097203553057.jpg', '2022-02-07 06:47:02', NULL),
(12, 2, 'upload/products/multi-image/1724097203938412.png', '2022-02-07 06:47:03', NULL),
(19, 5, 'upload/products/multi-image/1724644229071458.jpeg', '2022-02-13 07:41:46', NULL),
(20, 5, 'upload/products/multi-image/1724644229278556.jpeg', '2022-02-13 07:41:46', NULL),
(21, 5, 'upload/products/multi-image/1724644229437321.jpeg', '2022-02-13 07:41:46', NULL),
(22, 6, 'upload/products/multi-image/1724645128553075.jpeg', '2022-02-13 07:56:04', NULL),
(23, 6, 'upload/products/multi-image/1724645128900679.jpeg', '2022-02-13 07:56:04', NULL),
(24, 6, 'upload/products/multi-image/1724645129074418.jpeg', '2022-02-13 07:56:04', NULL),
(28, 8, 'upload/products/multi-image/1725003553490199.jpeg', '2022-02-17 06:53:04', NULL),
(29, 8, 'upload/products/multi-image/1725003553779071.jpeg', '2022-02-17 06:53:05', NULL),
(30, 8, 'upload/products/multi-image/1725003554667818.jpeg', '2022-02-17 06:53:05', NULL),
(31, 9, 'upload/products/multi-image/1725004299702847.jpeg', '2022-02-17 07:04:56', NULL),
(32, 9, 'upload/products/multi-image/1725004299909638.jpeg', '2022-02-17 07:04:56', NULL),
(33, 9, 'upload/products/multi-image/1725004300029766.jpeg', '2022-02-17 07:04:56', NULL),
(34, 10, 'upload/products/multi-image/1728096300880563.jpeg', '2022-03-23 10:10:58', NULL),
(35, 11, 'upload/products/multi-image/1728298665852757.jpeg', '2022-03-25 15:47:29', NULL),
(36, 12, 'upload/products/multi-image/1728299492115814.jpeg', '2022-03-25 16:00:36', NULL),
(37, 13, 'upload/products/multi-image/1728301538735574.jpeg', '2022-03-25 16:33:08', NULL),
(38, 14, 'upload/products/multi-image/1728982805826050.jpeg', '2022-04-02 05:01:35', NULL),
(39, 14, 'upload/products/multi-image/1728982806020229.jpeg', '2022-04-02 05:01:35', NULL),
(40, 14, 'upload/products/multi-image/1728982806151995.jpeg', '2022-04-02 05:01:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picked_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `return_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `division_id`, `district_id`, `state_id`, `name`, `email`, `phone`, `post_code`, `notes`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `invoice_no`, `order_date`, `order_month`, `order_year`, `confirmed_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `return_order`, `return_reason`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 4, 2, 'user', 'user@gmail.com', '0767298555', 13333, 'test payament', 'card_1KbmVGFQZIb7ym2LN7w4AZnf', 'Stripe', 'txn_3KbmVIFQZIb7ym2L0vwZoD28', 'usd', 1200.00, '622a03efbc743', 'FSO34463033', '10 March 2022', 'March', '2022', NULL, NULL, NULL, NULL, NULL, NULL, '16 March 2022', '2', 'I good is not in good condition', 'delivered', '2022-03-10 10:58:10', '2022-03-17 08:03:44'),
(16, 1, 5, 4, 2, 'user', 'user@gmail.com', '0767298555', 12312, 'add to cart test', 'Bank', 'Bank', NULL, 'Tshs', 2400.00, NULL, 'FSO75366601', '02 April 2022', 'April', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2022-04-02 05:52:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `color`, `size`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 6, NULL, 'gram', '1', 1200.00, '2022-03-10 10:58:10', NULL),
(16, 16, 9, 'Green', 'gram', '1', 600.00, '2022-04-02 05:52:34', NULL),
(17, 16, 8, 'Red', 'gram', '1', 1200.00, '2022-04-02 05:52:34', NULL),
(18, 16, 14, 'Red', 'Small', '1', 600.00, '2022-04-02 05:52:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user@gmail.com', '$2y$10$hh8..sp8qW2qOiu1cYWfuOuXImWeo4VZrA1hcj8vmfecKITYHBc/C', '2022-03-10 11:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `product_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_sw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_tags_sw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size_sw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color_sw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_descp_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_descp_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_sw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thambnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `product_name_en`, `product_name_sw`, `product_slug_en`, `product_slug_sw`, `product_code`, `product_qty`, `product_tags_en`, `product_tags_sw`, `product_size_en`, `product_size_sw`, `product_color_en`, `product_color_sw`, `selling_price`, `discount_price`, `short_descp_en`, `short_descp_sw`, `long_descp_en`, `long_descp_sw`, `product_thambnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 8, 8, 11, 'Sesame Seeds for Oil', 'Ufuta kwa ajili ya mafuta', 'sesame seeds for oil', 'Ufuta kwa ajili ya mafuta', '20221', '200', 'Sesame', 'Ufuta', 'grams,kilograms', 'gramu,kilogramu', 'White,Black', 'Nyeupe,Nyeusi', '1200', '100', 'Sesame is a flowering plant in the genus Sesamum, also called benne', 'Ufuta ni mmea unaotoa maua katika jenasi Sesamum, pia huitwa benne', '<p>Sesame is a flowering plant in the genus Sesamum, also called benne. Numerous wild relatives occur in Africa and a smaller number in India. It is widely naturalized in tropical regions around the world and is cultivated for its edible seeds, which grow in pods.</p>', '<p>Ufuta ni mmea unaotoa maua katika jenasi Sesamum, pia huitwa benne. Jamaa wengi wa porini wanatokea Afrika na idadi ndogo zaidi nchini India. Imekuzwa sana katika maeneo ya kitropiki duniani kote na inalimwa kwa ajili ya mbegu zake zinazoliwa, ambazo hukua kwenye maganda.</p>', 'upload/products/thambnail/1724096658666108.jpeg', NULL, NULL, NULL, NULL, 1, '2022-02-23 04:01:14', '2022-02-23 04:01:14'),
(2, 5, 8, 8, 12, 'Sunflower For Oil', 'Alizeti kwa ajili ya mafuta', 'sunflower for oil', 'Alizeti kwa ajili ya mafuta', '20222', '120', 'Oil', 'Mafuta', 'grams, kilograms', 'gramu,kiliogramu', 'Black', 'Nyeusi', '3200', '230', 'In Tanzania 6% of the land under production is used for the cultivation of sunflower.', 'Nchini Tanzania asilimia 6 ya ardhi inayozalishwa inatumika kwa kilimo cha alizeti', '<p>In Tanzania 6% of the land under production is used for the cultivation of sunflower. In areas like Mbeya (Southern Highlands) and Dodoma and Singida (Central Corridor), the area under sunflower varies from 1 - 10 acres per household. According to FAO, the average yield of sunflower is 979 kilogram per hectare</p>', '<p>Nchini Tanzania asilimia 6 ya ardhi inayozalishwa inatumika kwa kilimo cha alizeti. Katika maeneo kama vile Mbeya (Nyanda za Juu Kusini) na Dodoma na Singida (Ukanda wa Kati), eneo la alizeti hutofautiana kutoka ekari 1 - 10 kwa kaya. Kulingana na FAO, wastani wa mavuno ya alizeti ni kilo 979 kwa hekta</p>', 'upload/products/thambnail/1724097201909981.jpeg', NULL, NULL, 1, NULL, 1, '2022-02-23 03:56:43', '2022-02-23 03:56:43'),
(5, 5, 8, 22, 23, 'Chicken(Broiler)', 'Kuku(Kisasa)', 'chicken(broiler)', 'Kuku(Kisasa)', '202210', '0', 'Broiler', 'Kisasa', 'gram,kg,pics', 'gramu,kilogramu,kipande', 'White Meat', 'Nyama Nyeupe', '15000', '4000', 'Chicken is the most common type of poultry in the world.', 'Kuku ni aina ya denge wakufuga  wengi zaidi duniani.', '<p>Chicken is the most common type of poultry in the world. Owing to the relative ease and low cost of raising chickens&mdash;in comparison to mammals such as cattle or hogs&mdash;chicken meat and chicken eggs have become prevalent in numerous cuisines</p>', '<p>Kuku ni aina ya kuku wengi zaidi duniani. Kwa sababu ya urahisi na gharama ya chini ya ufugaji wa kuku - kwa kulinganisha na mamalia kama ng&#39;ombe au nguruwe - nyama ya kuku na mayai ya kuku yameenea katika vyakula vingi.</p>', 'upload/products/thambnail/1724644228804993.jpeg', 1, 1, NULL, 1, 1, '2022-02-24 09:16:53', '2022-02-24 09:16:53'),
(6, 5, 8, 23, 24, 'Cow Steak', 'Steki ya Ng\'ombe', 'cow steak', 'Steki ya Ng\'ombe', '202211', '18', 'Steak', 'Steki', 'gram,kilogram', 'gramu,kilogramu', NULL, NULL, '2000', '1200', 'Beef is the culinary name for meat from cattle.', 'Nyama ya ng\'ombe ni jina la upishi la nyama kutoka kwa ng\'ombe.', '<p>Beef is the culinary name for meat from cattle. In prehistoric times, humans hunted aurochs and later domesticated them. Since that time, numerous breeds of cattle have been bred specifically for the quality or quantity of their meat</p>', '<p>Nyama ya ng&#39;ombe ni jina la upishi la nyama kutoka kwa ng&#39;ombe. Katika nyakati za kabla ya historia, wanadamu waliwinda aurochs na baadaye wakawafuga. Tangu wakati huo, mifugo mingi ya ng&#39;ombe imekuzwa mahsusi kwa ubora au wingi wa nyama yao.</p>', 'upload/products/thambnail/1724645127885998.jpeg', NULL, 1, 1, 1, 1, '2022-02-28 10:02:02', '2022-03-20 08:23:38'),
(8, 5, 10, 21, 9, 'Red Pepper', 'Pilipili Kichaa', 'red pepper', 'Pilipili Kichaa', '12345', '43', 'Pepper.', 'Pilipili', 'gram,kilogram', 'gramu,kilogramu', 'Red', 'Nyekundu', '1200', NULL, 'The bell pepper is the fruit of plants in the Grossum cultivar group of the species Capsicum annuum', 'Pilipili hoho ni tunda la mimea katika kundi la Grossum la aina ya Capsicum annuum.', '<p>The bell pepper is the fruit of plants in the Grossum cultivar group of the species Capsicum annuum. Cultivars of the plant produce fruits in different colors, including red, yellow, orange, green, white, and purple. Bell peppers are sometimes grouped with less pungent chili varieties as &quot;sweet peppers&quot;.</p>', '<p>Pilipili hoho ni tunda la mimea katika kundi la Grossum la aina ya Capsicum annuum. Mimea ya mmea huo hutoa matunda ya rangi tofauti, kutia ndani nyekundu, njano, machungwa, kijani, nyeupe, na zambarau. Pilipili hoho wakati mwingine huwekwa pamoja na aina za pilipili zisizo na ukali kama &quot;pilipili tamu&quot;.</p>', 'upload/products/thambnail/1725003552186232.jpeg', NULL, 1, NULL, NULL, 1, '2022-02-23 08:22:50', '2022-03-20 09:10:23'),
(9, 5, 9, 12, 22, 'Avocado Fruit', 'Parachichi', 'avocado fruit', 'Parachichi', '12321', '50', 'Avocado', 'Parachichi', 'gram,kilogram,tone', 'gramu,kilogramu,tani', 'Green', 'Kijani', '600', NULL, 'In Tanzania, the prominent avocado producing areas are in the regions of Mbeya', 'Nchini Tanzania, maeneo maarufu kwa uzalishaji wa parachichi yako katika mikoa ya Mbeya,', '<p>In Tanzania, the prominent avocado producing areas are in the regions of&nbsp;<strong>Mbeya, Njombe, Songwe and Iringa in the southwest</strong>, as well as in Kilimanjaro, Arusha and Tanga in the northeast of the country. The other regions are Kigoma and Kagera in the northwest, and Morogoro in the east of Tanzania.</p>', '<p>Nchini Tanzania, maeneo maarufu kwa uzalishaji wa parachichi yako katika mikoa ya Mbeya, Njombe, Songwe na Iringa upande wa kusini-magharibi, pamoja na Kilimanjaro, Arusha na Tanga kaskazini-mashariki mwa nchi. Mikoa mingine ni Kigoma na Kagera upande wa kaskazini-magharibi, na Morogoro mashariki mwa Tanzania.</p>', 'upload/products/thambnail/1725004299125630.jpeg', 1, NULL, NULL, 1, 1, '2022-02-23 03:52:43', '2022-02-23 03:52:43'),
(10, 5, 8, 23, 24, 'digital file', 'faili la kidigitali', 'digital file', 'faili la kidigitali', '2121', '2', 'none', 'hakuna', 'Medium', 'Medium', 'white', 'njeupe', '5000', '4000', 'this is a digital file for cow keeping farmers', 'faili la kidigitali kwa ajili ya wafugaji wa ng\'ombe', '<p>this is a digital file for cow keeping farmers&nbsp;this is a digital file for cow keeping farmers&nbsp;this is a digital file for cow keeping farmers&nbsp;</p>', '<p>faili la kidigitali kwa ajili ya wafugaji wa ng&#39;ombefaili la kidigitali kwa ajili ya wafugaji wa ng&#39;ombefaili la kidigitali kwa ajili ya wafugaji wa ng&#39;ombe</p>', 'upload/products/thambnail/1728096299743661.jpeg', NULL, NULL, NULL, NULL, 0, '2022-03-23 10:14:04', '2022-04-02 05:46:58'),
(11, 5, 8, 23, 24, 'Cow Meat', 'Nyama ya ng\'ombe', 'cow meat', 'Nyama ya ng\'ombe', '33333', '50', 'meat', 'nyama', 'kilogram', 'kilogramu', 'Red', 'Nyekundu', '1200', '1100', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>', 'upload/products/thambnail/1728298664470506.jpeg', NULL, NULL, NULL, NULL, 0, '2022-03-25 15:47:27', '2022-04-02 05:46:49'),
(12, 5, 8, 23, 24, 'Cow Meat', 'Nyama ya ng\'ombe', 'cow meat', 'Nyama ya ng\'ombe', '12341', '50', 'cow', 'nyama', 'kilogram', 'kilogramu', 'Red', 'Nyekundu', '1200', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>', 'upload/products/thambnail/1728299491707225.jpeg', NULL, NULL, NULL, NULL, 0, '2022-03-25 16:00:36', '2022-04-02 05:46:43'),
(13, 5, 8, 23, 24, 'Cow Meat', 'Nyama ya ng\'ombe', 'cow meat', 'Nyama ya ng\'ombe', '2233', '34', 'meat', 'nyama', 'kilogram', 'kilogramu', 'Red', 'Nyekundu', '9000', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>', 'upload/products/thambnail/1728301538104088.jpeg', NULL, NULL, NULL, NULL, 0, '2022-03-25 16:33:08', '2022-04-02 05:45:56'),
(14, 9, 9, 12, 22, 'Avocado Fruit', 'Parachichi', 'avocado fruit', 'Parachichi', '202201', '10', NULL, NULL, 'Small,Medium,Large', 'Small,Medium,Large', 'Red,Yello,Black', 'Nyekundu,Njano,Nyeusi', '600', NULL, 'In Tanzania, the prominent avocado producing areas are in the regions of Mbeya,', 'In Tanzania, the prominent avocado producing areas are in the regions of Mbeya,', '<p>In Tanzania, the prominent avocado producing areas are in the regions of Mbeya, Njombe, Songwe and Iringa in the southwest, as well as in Kilimanjaro, Arusha and Tanga in the northeast of the country. The other regions are Kigoma and Kagera in the northwest, and Morogoro in the east of Tanzania</p>', '<p>In Tanzania, the prominent avocado producing areas are in the regions of Mbeya, Njombe, Songwe and Iringa in the southwest, as well as in Kilimanjaro, Arusha and Tanga in the northeast of the country. The other regions are Kigoma and Kagera in the northwest, and Morogoro in the east of Tanzania</p>', 'upload/products/thambnail/1728982805324068.jpeg', NULL, NULL, NULL, NULL, 1, '2022-04-02 05:51:05', '2022-04-02 05:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(255) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_product_id_foreign` (`product_id`),
  KEY `reviews_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `comment`, `summary`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(2, 6, 1, 'This meat was nice packed and has a good test ever', 'This is good product', NULL, '0', '2022-03-17 06:15:10', NULL),
(5, 8, 1, 'This is pepper is of quality', 'nice', 4, '1', '2022-03-23 06:40:44', '2022-03-23 06:42:17'),
(6, 8, 1, 'this product has no test at all', 'not test', 2, '1', '2022-03-23 07:12:07', '2022-03-23 07:12:57'),
(7, 6, 1, 'I think you have to find a best way for preservation for this kind of meat, I have seen that there is no test at all.', 'This meat has less test', 1, '1', '2022-03-23 08:00:26', '2022-03-23 08:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE IF NOT EXISTS `seos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_keyword`, `meta_description`, `google_analytics`, `created_at`, `updated_at`) VALUES
(1, 'Freshly Soko Online', 'Freshly Soko', 'best online shop,best organic product,best ecommerce site,best ecommerce product', 'Shop with freshly soko and eat a food that are natural planted with the best soil', 'window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'UA-84816806-1\');', '2022-03-15 15:22:32', '2022-03-15 13:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('OOGrScBJQkVIJe2rQmFQpHsjCjHuu2Jd5SQba6HE', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiVFhTQUkwR2F5N245ZzJyOUZDUGJ6STNLUnRDZ2NCTXNYeWszT3JnTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFhtYkE0NTFiYlp4ckRMRFM1dWRkYi5LMzJ5d2gwVFdSQVJWZVZCUU1WNENkUm0xdzdRV3RHIjt9', 1648901995);

-- --------------------------------------------------------

--
-- Table structure for table `ship_districts`
--

CREATE TABLE IF NOT EXISTS `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`) VALUES
(1, 8, 'MBOZI', '2022-03-06 03:23:37', NULL),
(2, 7, 'NJOMBE', '2022-03-06 03:23:56', NULL),
(3, 6, 'LINDI', '2022-03-06 03:26:34', NULL),
(4, 5, 'TEMEAKE', '2022-03-06 03:26:55', NULL),
(5, 4, 'BABATI', '2022-03-06 03:28:29', NULL),
(6, 3, 'HANDENI', '2022-03-06 03:28:48', NULL),
(7, 2, 'SAME', '2022-03-06 03:29:09', NULL),
(8, 1, 'ARUMERU', '2022-03-06 03:31:35', NULL),
(10, 1, 'ARUMERU MASHARIKI', '2022-03-09 11:38:13', NULL),
(11, 5, 'UBUNGO', '2022-03-09 11:39:00', NULL),
(12, 5, 'ILALA', '2022-03-09 11:40:05', NULL),
(13, 2, 'MWANGA', '2022-03-09 11:55:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_divisions`
--

CREATE TABLE IF NOT EXISTS `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(1, 'ARUSHA', '2022-03-06 03:22:00', NULL),
(2, 'KILIMANJARO', '2022-03-06 03:22:29', NULL),
(3, 'TANGA', '2022-03-06 03:22:37', NULL),
(4, 'MANYARA', '2022-03-06 03:22:43', NULL),
(5, 'DAR-ES-SALAAM', '2022-03-06 03:22:51', NULL),
(6, 'MTWARA', '2022-03-06 03:23:00', NULL),
(7, 'IRINGA', '2022-03-06 03:23:07', NULL),
(8, 'MBEYA', '2022-03-06 03:23:14', NULL),
(9, 'TEST', '2022-03-06 03:32:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_states`
--

CREATE TABLE IF NOT EXISTS `ship_states` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_states`
--

INSERT INTO `ship_states` (`id`, `division_id`, `district_id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 4, 5, 'KITETO', '2022-03-06 06:04:46', '2022-03-06 06:04:46'),
(2, 5, 4, 'MAKANGARAWE', '2022-03-06 04:54:33', NULL),
(3, 2, 7, 'VUDEE', '2022-03-06 04:55:12', NULL),
(5, 2, 13, 'KISANGARA', '2022-03-09 11:56:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comapany_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campany_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `logo`, `phone_one`, `phone_two`, `email`, `comapany_name`, `campany_address`, `facebook`, `youtube`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1728479233854485.png', '+(255) 767-298 555', '+(255) 687 067 002', 'sales@freshlysoko.com', 'Freshly Soko Online', 'Mnazi Mmoja, P.O.Box 22222<br> Dar Es Salaam, Tanzania<br>info@freshlysoko.com', 'www.facebook/freshlysoko', 'www.youtube/freshlysoko', 'www.instagram/freshlysoko', NULL, '2022-04-02 07:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_img`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'upload/slider/1724365133139208.jpeg', 'Grains', 'This is amount of the grains that can be obtain at the moment', 1, NULL, '2022-02-16 06:56:23'),
(3, 'upload/slider/1724365183971586.jpeg', 'Slider three', 'Slider three', 0, NULL, '2022-02-13 06:29:42'),
(4, 'upload/slider/1724365442045520.jpg', 'Fruits and Veges', 'A Variate of veges can be obtained  as per buyer need', 1, NULL, '2022-02-16 06:57:59'),
(8, 'upload/slider/1724374105515124.jpg', 'Fruits', 'Most of fruits are fresh and can be obtained as per demand', 1, NULL, '2022-02-16 06:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_name_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name_en`, `subcategory_name_sw`, `subcategory_slug_en`, `subcategory_slug_sw`, `created_at`, `updated_at`) VALUES
(8, 8, 'Oil Seed', 'mbegu za mafuta', 'oil seed', 'mbegu za mafuta', NULL, NULL),
(9, 8, 'Animal Feeds', 'Vyakula vya mifugo', 'animal feeds', 'Vyakula vya mifugo', NULL, NULL),
(10, 8, 'Grains', 'Nafaka', 'grains', 'Nafaka', NULL, NULL),
(11, 9, 'Apple', 'Tufaa kijani', 'apple', 'Tufaa kijani', NULL, '2022-02-07 02:42:09'),
(12, 9, 'Avocardo', 'Parachichi', 'avocardo', 'Parachichi', NULL, '2022-02-07 02:44:24'),
(20, 10, 'Onions', 'Vitunguu', 'onions', 'Vitunguu', NULL, NULL),
(21, 10, 'Chillies', 'Pilipili', 'chillies', 'Pilipili', NULL, NULL),
(22, 8, 'Chicken Meat', 'Nyama ya Kuku', 'chicken meat', 'Nyama ya Kuku', NULL, NULL),
(23, 8, 'Cow Meat', 'Nyama ya Ng\'ombe', 'cow meat', 'Nyama ya Ng\'ombe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_name_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `category_id`, `subcategory_id`, `subsubcategory_name_en`, `subsubcategory_name_sw`, `subsubcategory_slug_en`, `subsubcategory_slug_sw`, `created_at`, `updated_at`) VALUES
(5, 10, 20, 'White Onions', 'Vitunguu Maji', 'white onions', 'Vitunguu Maji', NULL, NULL),
(6, 10, 20, 'Garlic', 'Vitunguu saumu', 'garlic', 'Vitunguu saumu', NULL, NULL),
(7, 10, 20, 'Ginger', 'Tangavizi', 'ginger', 'Tangavizi', NULL, NULL),
(8, 10, 21, 'Habanero', 'Pilipili mbuzi', 'habanero', 'Pilipili mbuzi', NULL, NULL),
(9, 10, 21, 'Red Chillies', 'Pilipili kichaa', 'red chillies', 'Pilipili kichaa', NULL, NULL),
(10, 10, 21, 'Yellow Chillies', 'Pilipili njano', 'yellow chillies', 'Pilipili njano', NULL, NULL),
(11, 8, 8, 'Sesame seeds', 'Mbegu za ufuta', 'sesame seeds', 'Mbegu za ufuta', NULL, NULL),
(12, 8, 8, 'Sunflower seeds', 'Mbegu za alizeti', 'sunflower seeds', 'Mbegu za alizeti', NULL, NULL),
(14, 8, 9, 'Bone meals', 'Chakula cha mifupa', 'bone meals', 'Chakula cha mifupa', NULL, NULL),
(15, 8, 9, 'Maize bran', 'Pumba za mahindi', 'maize bran', 'Pumba za mahindi', NULL, NULL),
(16, 8, 9, 'Wheat bran', 'Pumba za ngano', 'wheat bran', 'Pumba za ngano', NULL, NULL),
(17, 8, 10, 'Maize', 'Mahindi', 'maize', 'Mahindi', NULL, NULL),
(18, 8, 10, 'Rice', 'Mchele', 'rice', 'Mchele', NULL, NULL),
(19, 9, 11, 'Green Apple', 'Tufaa Kijani', 'green apple', 'Tufaa Kijani', NULL, NULL),
(20, 9, 11, 'Red Apple', 'Tufaa Jekundu', 'red apple', 'Tufaa Jekundu', NULL, NULL),
(21, 9, 12, 'Green Avocardo', 'Parachichi Kijani', 'green avocardo', 'Parachichi Kijani', NULL, NULL),
(22, 9, 12, 'Black Avocardo', 'Parachichi Jeusi', 'black avocardo', 'Parachichi Jeusi', NULL, NULL),
(23, 8, 22, 'Whole Chicken', 'Kuku Mzima', 'whole chicken', 'Kuku Mzima', NULL, NULL),
(24, 8, 23, 'Steak', 'Steki', 'steak', 'Steki', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_seen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `last_seen`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '0767298555', '2022-04-02 12:19:54', NULL, '$2y$10$XmbA451bbZxrDLDS5uddb.K32ywh0TWRARVeVBQMV4CdRm1w7QWtG', NULL, NULL, NULL, NULL, NULL, '2022-02-14 13:08:47', '2022-04-02 09:19:54'),
(2, 'samwel mchomvu', 'samwelnm4@gmail.com', '+255767298555', '2022-03-13 20:16:29', NULL, '$2y$10$fAQHf657wKOl6PyQeW.r/uAConA0..tCl11Og.wVEcvlvjsoioyYK', NULL, NULL, NULL, NULL, NULL, '2022-03-13 17:02:14', '2022-03-13 17:16:29'),
(3, 'innocent', 'innocent@gmail.com', '0687067002', '2022-03-23 04:27:38', NULL, '$2y$10$YffjlbaDMjAVmLaury.HWusFeVvLfpYm8qCc433yx5/.MM6pm6O0S', NULL, NULL, NULL, NULL, NULL, '2022-03-23 01:27:19', '2022-03-23 01:27:38'),
(6, 'happiness peter', 'happinessmcharo@gmail.com', '0784393633', '2022-03-23 04:44:22', NULL, '$2y$10$KDI0Mp0D0TilwFzxan3sbeA/HrTfjryF0fDCUVrH80lMY3mZjNbFa', NULL, NULL, NULL, NULL, NULL, '2022-03-23 01:39:48', '2022-03-23 01:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(16, 1, 14, '2022-04-02 07:14:07', NULL);

--
-- Constraints for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
