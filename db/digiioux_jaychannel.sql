-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2021 at 02:14 PM
-- Server version: 10.3.27-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digiioux_jaychannel`
--

-- --------------------------------------------------------

--
-- Table structure for table `credits`
--

CREATE TABLE `credits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Fixed','Variable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Fixed',
  `cost_amount` float(10,2) NOT NULL DEFAULT 0.00,
  `points` int(5) UNSIGNED NOT NULL DEFAULT 0,
  `is_for_sale` tinyint(1) NOT NULL DEFAULT 1,
  `is_auto_renewal` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `credits`
--

INSERT INTO `credits` (`id`, `title`, `content`, `type`, `cost_amount`, `points`, `is_for_sale`, `is_auto_renewal`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(2, '200 Credits', 'Buy 200 credit to use any time.', 'Fixed', 200.00, 500, 1, 1, 1, NULL, 1, '2021-01-21 11:18:20', '2021-01-21 11:18:20'),
(3, '500 Credits', 'Buy 500 Credits now.', 'Fixed', 500.00, 1000, 1, 1, 1, NULL, 1, '2021-01-21 11:19:07', '2021-01-21 11:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE `email_template` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`id`, `created_at`, `updated_at`, `content`, `name`, `subject`) VALUES
(1, NULL, NULL, '<!DOCTYPE html>\r\n                <html lang=\"en\">\r\n                <head>\r\n                    <meta charset=\"utf-8\">\r\n                    <meta name=\"viewport\" content=\"width=device-width\">\r\n                    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> \r\n                    <meta name=\"x-apple-disable-message-reformatting\">\r\n                    <title>Example</title>\r\n                    <style>\r\n                        body {\r\n                            background-color:#fff;\r\n                            color:#222222;\r\n                            margin: 0px auto;\r\n                            padding: 0px;\r\n                            height: 100%;\r\n                            width: 100%;\r\n                            font-weight: 400;\r\n                            font-size: 15px;\r\n                            line-height: 1.8;\r\n                        }\r\n                        .continer{\r\n                            width:400px;\r\n                            margin-left:auto;\r\n                            margin-right:auto;\r\n                            background-color:#efefef;\r\n                            padding:30px;\r\n                        }\r\n                        .btn{\r\n                            padding: 5px 15px;\r\n                            display: inline-block;\r\n                        }\r\n                        .btn-primary{\r\n                            border-radius: 3px;\r\n                            background: #0b3c7c;\r\n                            color: #fff;\r\n                            text-decoration: none;\r\n                        }\r\n                        .btn-primary:hover{\r\n                            border-radius: 3px;\r\n                            background: #4673ad;\r\n                            color: #fff;\r\n                            text-decoration: none;\r\n                        }\r\n                    </style>\r\n                </head>\r\n                <body>\r\n                    <div class=\"continer\">\r\n                        <h1>Lorem ipsum dolor</h1>\r\n                        <h4>Ipsum dolor cet emit amet</h4>\r\n                        <p>\r\n                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <strong>commodo consequat</strong>. \r\n                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \r\n                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                        </p>\r\n                        <h4>Ipsum dolor cet emit amet</h4>\r\n                        <p>\r\n                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <a href=\"#\">tempor incididunt ut labore</a> et dolore magna aliqua.\r\n                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\n                        </p>\r\n                        <h4>Ipsum dolor cet emit amet</h4>\r\n                        <p>\r\n                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\n                        </p>\r\n                        <a href=\"#\" class=\"btn btn-primary\">Lorem ipsum dolor</a>\r\n                        <h4>Ipsum dolor cet emit amet</h4>\r\n                        <p>\r\n                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n                            Ut enim ad minim veniam, quis nostrud exercitation <a href=\"#\">ullamco</a> laboris nisi ut aliquip ex ea commodo consequat. \r\n                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \r\n                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                        </p>\r\n                    </div>\r\n                </body>\r\n                </html>', 'Example E-mail', 'Example E-mail');

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`id`, `created_at`, `updated_at`, `name`, `description`, `status_id`) VALUES
(1, NULL, NULL, 'Sequi totam qui et et eum.', 'Eum deserunt excepturi natus nulla.', 3),
(2, NULL, NULL, 'Sunt harum recusandae temporibus.', 'Sit nihil deserunt voluptas omnis. Reprehenderit illum voluptatem iusto impedit.', 2),
(3, NULL, NULL, 'Eum nulla commodi odio.', 'Consequatur earum consequatur odio voluptatem et numquam.', 2),
(4, NULL, NULL, 'Dignissimos nulla provident id quaerat.', 'Est esse laudantium beatae. Est mollitia voluptatum molestiae qui enim voluptatem consequatur.', 1),
(5, NULL, NULL, 'Voluptas voluptatem et in.', 'Ut in et cupiditate.', 4),
(6, NULL, NULL, 'Recusandae eius dolores.', 'Sed deleniti culpa non tempore saepe.', 1),
(7, NULL, NULL, 'Id illum nostrum aut.', 'Id ut tempora quasi quia reprehenderit aut. Dolorem minus fugit recusandae saepe dolorem dolores et.', 4),
(8, NULL, NULL, 'Aut voluptatem a qui doloribus.', 'Neque impedit doloremque labore distinctio quos. Molestiae expedita quia omnis molestias quod autem enim.', 1),
(9, NULL, NULL, 'Quos autem delectus recusandae non.', 'Ducimus necessitatibus tenetur sit ea. Voluptatum voluptates omnis cupiditate porro magni quibusdam sed.', 4),
(10, NULL, NULL, 'Et autem sed vero rem ea.', 'Veritatis voluptatibus voluptatem voluptatibus eum debitis non doloribus.', 1),
(11, NULL, NULL, 'Optio sunt neque perferendis alias.', 'Unde quod doloribus quis enim eveniet.', 4),
(12, NULL, NULL, 'Similique ut explicabo molestiae.', 'Ut iusto eos perspiciatis qui. Qui aut modi rerum ex hic.', 3),
(13, NULL, NULL, 'Voluptas dolorem aperiam culpa quia officiis.', 'Nostrum ab eos beatae eum possimus eum.', 1),
(14, NULL, NULL, 'Nostrum sed dolorum exercitationem mollitia.', 'Enim ut facilis quisquam commodi ratione quod. Debitis sit consectetur laborum magni placeat qui.', 2),
(15, NULL, NULL, 'Et voluptate consequatur quis.', 'Neque illum id sunt optio qui.', 4),
(16, NULL, NULL, 'Ut hic omnis.', 'Occaecati qui veritatis voluptatum harum.', 1),
(17, NULL, NULL, 'Saepe omnis omnis animi.', 'Sequi ut nemo architecto est.', 1),
(18, NULL, NULL, 'Sapiente ut fuga culpa qui.', 'Facilis rem id tenetur eius a. Veritatis natus sit aperiam asperiores.', 2),
(19, NULL, NULL, 'Quos rerum nulla necessitatibus quia.', 'Dolorem eos consectetur dolore eos a et molestiae.', 3),
(20, NULL, NULL, 'Illo excepturi ut qui.', 'Laudantium sint tenetur in a minima dolor. Dolores blanditiis suscipit quas repellat qui quam quo.', 3),
(21, NULL, NULL, 'Inventore vero quisquam veniam et natus.', 'Eum quibusdam ipsam cumque sit iste quia. Laboriosam eligendi adipisci ut est nesciunt.', 1),
(22, NULL, NULL, 'Veniam amet ipsum quos.', 'Iste voluptatibus omnis dicta eos et.', 3),
(23, NULL, NULL, 'Est tenetur adipisci vero fuga.', 'Rerum sit expedita quisquam aut ab.', 2),
(24, NULL, NULL, 'Consequatur nulla commodi ratione iure quia.', 'Voluptatem sapiente et exercitationem.', 4),
(25, NULL, NULL, 'Perspiciatis harum ipsam optio ut consequatur.', 'Fuga voluptas non sapiente aut labore. Esse est alias perspiciatis consequatur iure.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE `folder` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder_id` int(10) UNSIGNED DEFAULT NULL,
  `resource` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`id`, `created_at`, `updated_at`, `name`, `folder_id`, `resource`) VALUES
(1, NULL, NULL, 'root', NULL, NULL),
(2, NULL, NULL, 'resource', 1, 1),
(3, NULL, NULL, 'documents', 1, NULL),
(4, NULL, NULL, 'graphics', 1, NULL),
(5, NULL, NULL, 'other', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` tinyint(1) NOT NULL,
  `edit` tinyint(1) NOT NULL,
  `add` tinyint(1) NOT NULL,
  `delete` tinyint(1) NOT NULL,
  `pagination` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `created_at`, `updated_at`, `name`, `table_name`, `read`, `edit`, `add`, `delete`, `pagination`) VALUES
(1, NULL, NULL, 'Example', 'example', 1, 1, 1, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `form_field`
--

CREATE TABLE `form_field` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browse` tinyint(1) NOT NULL,
  `read` tinyint(1) NOT NULL,
  `edit` tinyint(1) NOT NULL,
  `add` tinyint(1) NOT NULL,
  `relation_table` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_column` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_id` int(10) UNSIGNED NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_field`
--

INSERT INTO `form_field` (`id`, `created_at`, `updated_at`, `name`, `type`, `browse`, `read`, `edit`, `add`, `relation_table`, `relation_column`, `form_id`, `column_name`) VALUES
(1, NULL, NULL, 'Title', 'text', 1, 1, 1, 1, NULL, NULL, 1, 'name'),
(2, NULL, NULL, 'Description', 'text_area', 1, 1, 1, 1, NULL, NULL, 1, 'description'),
(3, NULL, NULL, 'Status', 'relation_select', 1, 1, 1, 1, 'status', 'name', 1, 'status_id');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `uuid` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menulist`
--

CREATE TABLE `menulist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menulist`
--

INSERT INTO `menulist` (`id`, `name`) VALUES
(1, 'sidebar menu'),
(2, 'top menu');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `href`, `icon`, `slug`, `parent_id`, `menu_id`, `sequence`) VALUES
(1, 'Dashboard', '/admin/', 'cil-speedometer', 'link', NULL, 1, 1),
(2, 'Settings', NULL, 'cil-calculator', 'dropdown', NULL, 1, 2),
(4, 'Users', '/admin/users', NULL, 'link', 2, 1, 4),
(7, 'Edit roles', '/admin/roles', NULL, 'link', 2, 1, 7),
(10, 'Email', '/admin/mail', NULL, 'link', 2, 1, 10),
(11, 'Login', '/login', 'cil-account-logout', 'link', NULL, 1, 11),
(12, 'Register', '/register', 'cil-account-logout', 'link', NULL, 1, 12),
(17, 'Breadcrumb', '/admin/base/breadcrumb', NULL, 'link', 16, 1, 17),
(18, 'Cards', '/admin/base/cards', NULL, 'link', 16, 1, 18),
(19, 'Carousel', '/admin/base/carousel', NULL, 'link', 16, 1, 19),
(20, 'Collapse', '/admin/base/collapse', NULL, 'link', 16, 1, 20),
(21, 'Forms', '/admin/base/forms', NULL, 'link', 16, 1, 21),
(22, 'Jumbotron', '/admin/base/jumbotron', NULL, 'link', 16, 1, 22),
(23, 'List group', '/admin/base/list-group', NULL, 'link', 16, 1, 23),
(24, 'Navs', '/admin/base/navs', NULL, 'link', 16, 1, 24),
(25, 'Pagination', '/admin/base/pagination', NULL, 'link', 16, 1, 25),
(26, 'Popovers', '/admin/base/popovers', NULL, 'link', 16, 1, 26),
(27, 'Progress', '/admin/base/progress', NULL, 'link', 16, 1, 27),
(28, 'Scrollspy', '/admin/base/scrollspy', NULL, 'link', 16, 1, 28),
(29, 'Switches', '/admin/base/switches', NULL, 'link', 16, 1, 29),
(30, 'Tables', '/admin/base/tables', NULL, 'link', 16, 1, 30),
(31, 'Tabs', '/admin/base/tabs', NULL, 'link', 16, 1, 31),
(32, 'Tooltips', '/admin/base/tooltips', NULL, 'link', 16, 1, 32),
(34, 'Buttons', '/admin/buttons/buttons', NULL, 'link', 33, 1, 34),
(35, 'Buttons Group', '/admin/buttons/button-group', NULL, 'link', 33, 1, 35),
(36, 'Dropdowns', '/admin/buttons/dropdowns', NULL, 'link', 33, 1, 36),
(37, 'Brand Buttons', '/admin/buttons/brand-buttons', NULL, 'link', 33, 1, 37),
(40, 'CoreUI Icons', '/admin/icon/coreui-icons', NULL, 'link', 39, 1, 40),
(41, 'Flags', '/admin/icon/flags', NULL, 'link', 39, 1, 41),
(42, 'Brands', '/admin/icon/brands', NULL, 'link', 39, 1, 42),
(44, 'Alerts', '/admin/notifications/alerts', NULL, 'link', 43, 1, 44),
(45, 'Badge', '/admin/notifications/badge', NULL, 'link', 43, 1, 45),
(46, 'Modals', '/admin/notifications/modals', NULL, 'link', 43, 1, 46),
(48, 'Extras', NULL, NULL, 'title', NULL, 1, 48),
(49, 'Pages', NULL, 'cil-star', 'dropdown', NULL, 1, 49),
(50, 'Login', '/login', NULL, 'link', 49, 1, 50),
(51, 'Register', '/show_user_register_form', NULL, 'link', NULL, 1, 51),
(56, 'Pages', NULL, '', 'dropdown', NULL, 2, 56),
(57, 'Dashboard', '/admin/', NULL, 'link', 56, 2, 57),
(59, 'Users', '/admin/users', NULL, 'link', 56, 2, 59),
(60, 'Settings', NULL, '', 'dropdown', NULL, 2, 60),
(63, 'Edit roles', '/admin/roles', NULL, 'link', 60, 2, 63),
(68, 'Credits', '/admin/credits', NULL, 'link', NULL, 1, 52),
(69, 'Subscribers', '/admin/subscribers', NULL, 'link', NULL, 1, 53);

-- --------------------------------------------------------

--
-- Table structure for table `menu_role`
--

CREATE TABLE `menu_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menus_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_role`
--

INSERT INTO `menu_role` (`id`, `role_name`, `menus_id`) VALUES
(4, 'admin', 2),
(6, 'admin', 4),
(9, 'admin', 7),
(12, 'admin', 10),
(13, 'guest', 11),
(14, 'guest', 12),
(23, 'user', 17),
(24, 'admin', 17),
(25, 'user', 18),
(26, 'admin', 18),
(27, 'user', 19),
(28, 'admin', 19),
(29, 'user', 20),
(30, 'admin', 20),
(31, 'user', 21),
(32, 'admin', 21),
(33, 'user', 22),
(34, 'admin', 22),
(35, 'user', 23),
(36, 'admin', 23),
(37, 'user', 24),
(38, 'admin', 24),
(39, 'user', 25),
(40, 'admin', 25),
(41, 'user', 26),
(42, 'admin', 26),
(43, 'user', 27),
(44, 'admin', 27),
(45, 'user', 28),
(46, 'admin', 28),
(47, 'user', 29),
(48, 'admin', 29),
(49, 'user', 30),
(50, 'admin', 30),
(51, 'user', 31),
(52, 'admin', 31),
(53, 'user', 32),
(54, 'admin', 32),
(57, 'user', 34),
(58, 'admin', 34),
(59, 'user', 35),
(60, 'admin', 35),
(61, 'user', 36),
(62, 'admin', 36),
(63, 'user', 37),
(64, 'admin', 37),
(69, 'user', 40),
(70, 'admin', 40),
(71, 'user', 41),
(72, 'admin', 41),
(73, 'user', 42),
(74, 'admin', 42),
(77, 'user', 44),
(78, 'admin', 44),
(79, 'user', 45),
(80, 'admin', 45),
(81, 'user', 46),
(82, 'admin', 46),
(85, 'user', 48),
(86, 'admin', 48),
(87, 'user', 49),
(88, 'admin', 49),
(89, 'user', 50),
(90, 'admin', 50),
(97, 'guest', 54),
(98, 'user', 54),
(99, 'admin', 54),
(100, 'guest', 55),
(101, 'user', 55),
(102, 'admin', 55),
(103, 'guest', 56),
(104, 'user', 56),
(105, 'admin', 56),
(106, 'guest', 57),
(107, 'user', 57),
(108, 'admin', 57),
(111, 'admin', 59),
(112, 'admin', 60),
(115, 'admin', 63),
(118, 'admin', 1),
(119, 'admin', 51),
(120, 'user', 51),
(121, 'admin', 68),
(122, 'admin', 69);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_11_085455_create_notes_table', 1),
(5, '2019_10_12_115248_create_status_table', 1),
(6, '2019_11_08_102827_create_menus_table', 1),
(7, '2019_11_13_092213_create_menurole_table', 1),
(8, '2019_12_10_092113_create_permission_tables', 1),
(9, '2019_12_11_091036_create_menulist_table', 1),
(10, '2019_12_18_092518_create_role_hierarchy_table', 1),
(11, '2020_01_07_093259_create_folder_table', 1),
(12, '2020_01_08_184500_create_media_table', 1),
(13, '2020_01_21_161241_create_form_field_table', 1),
(14, '2020_01_21_161242_create_form_table', 1),
(15, '2020_01_21_161243_create_example_table', 1),
(16, '2020_03_12_111400_create_email_template_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 11),
(2, 'App\\Models\\User', 12);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applies_to_date` date NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `content`, `note_type`, `applies_to_date`, `users_id`, `status_id`, `created_at`, `updated_at`) VALUES
(2, 'Ratione officia laudantium.', 'Ut temporibus quibusdam optio labore commodi reiciendis. Non et omnis eum id quos qui.', 'consequatur porro', '1985-07-19', 2, 3, NULL, '2021-01-17 07:24:51'),
(5, 'Quia qui aspernatur.', 'Ipsum suscipit rerum pariatur laborum placeat. Deserunt culpa iusto quae. Voluptatum amet facere magnam occaecati consequatur pariatur.', 'voluptate', '1990-12-23', 10, 4, NULL, NULL),
(6, 'Adipisci qui et et.', 'Sit et et sit voluptates eum nostrum. Beatae nisi iure molestiae distinctio quod unde. Voluptas voluptate quibusdam esse.', 'vero sapiente', '2004-03-20', 10, 2, NULL, NULL),
(7, 'Distinctio eius et.', 'Aperiam sint sint eos perspiciatis eligendi. Dicta dolor ut nostrum repellendus impedit non sapiente.', 'ducimus', '2006-03-14', 6, 2, NULL, NULL),
(8, 'Aut odio sit minima nihil dolor.', 'Magnam rerum porro mollitia eum dolores sed aliquid aut. Expedita quo ullam fugiat provident. Blanditiis eum est veniam distinctio magnam magni. Amet excepturi odio odit aspernatur voluptate et quia.', 'accusantium illo', '2008-11-19', 8, 2, NULL, NULL),
(9, 'Quibusdam laudantium quidem commodi.', 'Fugiat voluptatem aut inventore dolores vitae cum praesentium. Inventore occaecati et dignissimos dignissimos. Temporibus iste voluptatem ea ratione libero qui.', 'asperiores adipisci', '1983-12-16', 6, 2, NULL, NULL),
(10, 'Corrupti sequi omnis pariatur dolor.', 'Aperiam error nobis asperiores consequatur quod. Quia aperiam qui sit et. At numquam sint facilis ut hic consequuntur. Explicabo accusamus minus consequatur voluptate sed.', 'sequi', '1988-03-18', 8, 1, NULL, NULL),
(11, 'Ut et sed et rerum.', 'Omnis nemo iusto non vitae. Recusandae ut accusantium optio minus praesentium eos sed explicabo. Aut velit fuga voluptate est sint in sint. Repellendus excepturi ex nisi in aliquam id. Eos ullam quam natus praesentium aut suscipit corporis.', 'quidem', '2016-11-03', 10, 1, NULL, NULL),
(12, 'Sit aut eos itaque delectus.', 'Tempore iste quae autem porro expedita est. Rerum minima dicta incidunt delectus cum sit eos et.', 'in nam', '1987-04-02', 6, 3, NULL, NULL),
(13, 'Adipisci sint aliquam laboriosam.', 'Laborum ducimus voluptas accusamus alias aut. Qui voluptas non eos fugit maxime consequuntur. Voluptas cupiditate officia fugiat consequatur et sit.', 'unde ut', '2004-11-25', 5, 4, NULL, NULL),
(14, 'Accusantium maiores deserunt iusto.', 'Quaerat id aspernatur rerum ratione soluta. Dolores dolorem veritatis aperiam quia enim. Iure dolores repudiandae doloremque quam molestias ullam.', 'est voluptas', '1988-12-24', 4, 3, NULL, NULL),
(15, 'Sit beatae optio consequatur quidem.', 'Voluptates enim nobis labore odit totam. Eius ex id accusantium est. Est et consequatur fuga eum non dolor rerum quod.', 'a', '1980-02-09', 7, 1, NULL, NULL),
(16, 'Nihil sit maxime.', 'Unde et minima cum consequuntur eos voluptatem quod aut. Consequuntur perferendis ut ut rem cumque itaque unde commodi.', 'rem', '2014-05-11', 11, 2, NULL, NULL),
(17, 'Ut officiis voluptas nesciunt consectetur.', 'Voluptatibus unde aut natus earum. Consequuntur repudiandae non doloremque et aspernatur id facere. Sed illo saepe est qui totam autem fuga. Saepe modi esse molestiae eveniet veniam aspernatur dolorum. Aliquam ab ipsam nihil mollitia.', 'consequuntur', '2012-10-02', 2, 3, NULL, NULL),
(18, 'Dolores dolorem molestiae cupiditate accusamus ut.', 'Sint eos et et dolorem voluptatum. Aliquid maxime quam dolor officiis quaerat. Ducimus ut soluta pariatur deleniti ut necessitatibus aut labore. Dicta alias sed officia cupiditate a tempora nostrum dolores.', 'est atque', '1995-11-07', 10, 3, NULL, NULL),
(19, 'Quod molestiae nemo.', 'Qui quia non consequuntur unde nobis corporis delectus. Deserunt quo velit illo quia facilis delectus deserunt. Placeat et dolorum omnis saepe non accusamus eveniet officiis. Aut ipsam rerum occaecati aut.', 'suscipit', '1983-02-08', 6, 2, NULL, NULL),
(20, 'Ut sed expedita dicta illum labore.', 'Eos sequi alias architecto quam. Iste odit molestiae assumenda natus. Repellendus beatae quia voluptate debitis aut.', 'autem dolorem', '1995-12-13', 11, 3, NULL, NULL),
(21, 'Esse sed doloribus commodi occaecati.', 'Quae veniam nulla unde minus. Nisi recusandae est laudantium consequuntur eum quas. Facere blanditiis aut enim dolore similique vel itaque.', 'nesciunt nesciunt', '1980-03-10', 6, 4, NULL, NULL),
(22, 'Aut natus non.', 'Ut reiciendis ipsum aut et quia. Dolor porro quis totam aliquam.', 'soluta ullam', '1986-12-25', 10, 4, NULL, NULL),
(23, 'Id quo sunt dolores minus.', 'Ab aut aliquam soluta molestiae. Delectus sit aut neque suscipit. Consequuntur aut illo est vel a architecto consequatur.', 'expedita sunt', '1993-06-19', 7, 4, NULL, NULL),
(24, 'Eligendi aliquam ipsa enim.', 'Omnis molestiae dignissimos facilis eaque occaecati. Voluptas quae ipsa quia. Autem doloribus sunt sed est repellat. Tempore et temporibus eum temporibus et sit voluptas.', 'aut', '1973-01-11', 11, 2, NULL, NULL),
(25, 'Reiciendis labore aut molestias ratione.', 'Expedita magnam quasi velit. Ipsam labore consequatur asperiores illo. Vel in rem eos deleniti eos voluptatem.', 'praesentium dolorem', '2008-05-29', 9, 1, NULL, NULL),
(26, 'Illum dolores occaecati occaecati ab in.', 'Iure porro quia nobis voluptatem. Non quo consectetur dolor cumque nam id. Qui sed sed voluptas architecto est aut.', 'occaecati provident', '1994-01-04', 10, 4, NULL, NULL),
(27, 'Praesentium minus error est vel.', 'Repellendus sunt animi blanditiis aspernatur minus aut. Impedit natus qui quis quia. Natus et quis quis in doloremque fugit odio.', 'minus cumque', '1999-10-02', 2, 3, NULL, NULL),
(28, 'Sed dignissimos accusamus aut.', 'Unde porro est eaque et. Rerum sed iure eius fugiat. Ullam laboriosam sint non est vel consequatur quaerat. Tempore nostrum et culpa assumenda.', 'et', '2014-05-30', 4, 2, NULL, NULL),
(29, 'Ullam aut in repellendus.', 'Aut est incidunt sed maxime. Velit provident sunt quisquam qui sit. Quia ea ad iure ut velit.', 'qui', '2006-04-23', 6, 4, NULL, NULL),
(30, 'Aut officia corrupti at est.', 'Et voluptatem praesentium aut nam nobis repellendus. Dicta voluptate ut sequi nobis. Veniam beatae sunt ab qui nostrum voluptatum. Delectus deleniti in voluptatum laborum.', 'adipisci natus', '2005-03-23', 5, 4, NULL, NULL),
(31, 'Rem nobis perferendis.', 'Dolores quae qui optio. Esse consequatur incidunt ut ad ad. Ullam eaque sapiente expedita quae.', 'quod', '2014-07-10', 10, 3, NULL, NULL),
(32, 'Corrupti similique ut eos sed.', 'Aspernatur unde laborum eum ut maiores nobis nostrum. Ut amet eos ad qui est esse quia est. Impedit est explicabo qui. Eos labore autem aut blanditiis explicabo voluptatem.', 'saepe', '2012-09-16', 3, 1, NULL, NULL),
(33, 'Expedita veritatis in est.', 'In nostrum occaecati aut fugiat est beatae. Reprehenderit nulla voluptatem officiis nam possimus fuga. Ullam voluptatum sed quidem quibusdam rerum.', 'facilis quaerat', '2009-03-02', 5, 4, NULL, NULL),
(34, 'Illum numquam numquam hic sit maxime.', 'Ipsam at maiores nesciunt. Ut eaque dolorem at dolorem molestiae distinctio.', 'eos', '1991-06-04', 2, 4, NULL, NULL),
(35, 'Inventore quae magnam maxime eos nam.', 'Voluptates rem et odio a enim cum beatae dolor. Aut est sequi qui rerum ratione eos. Aut quos facilis impedit voluptatem aut.', 'dolore', '1974-02-21', 7, 2, NULL, NULL),
(36, 'Libero tempore consequatur et.', 'Accusantium aliquam quas minima distinctio fugiat consequatur. Consequuntur quam a dolorem distinctio pariatur. Adipisci eum itaque dolor aut. Laboriosam nemo iure architecto dicta pariatur quo vel.', 'qui', '1997-08-01', 8, 4, NULL, NULL),
(37, 'Sed ullam excepturi quo.', 'Dolor repellat voluptas voluptas sunt sed exercitationem laborum aut. Autem aut possimus earum tempore. Dolorem id iure rerum voluptatem qui tempora laboriosam.', 'eum', '1972-02-15', 6, 3, NULL, NULL),
(38, 'Ut odit cupiditate sed nisi.', 'Nihil aut dolore vel occaecati ut. Possimus expedita distinctio itaque ut facilis. Sit earum reiciendis ut rerum ut. Rerum sit doloribus ex ullam. Aut qui iure labore sed illo perspiciatis.', 'et', '1997-11-18', 4, 4, NULL, NULL),
(39, 'Itaque earum error molestiae delectus.', 'Perferendis blanditiis perferendis modi mollitia voluptatem vel. Corporis quod qui quo voluptates qui autem. Eum eos magni voluptatem dolorem sapiente consequuntur nobis. Soluta unde maiores maiores. Et sit doloribus ullam ut consequatur.', 'quis', '2019-02-23', 7, 2, NULL, NULL),
(40, 'Voluptatem iusto vel dolorum.', 'Non cupiditate sapiente non asperiores accusantium. Commodi nam vero repellat in ut corporis qui nostrum. Cumque sapiente animi totam maiores dolorem. Est voluptatibus voluptate enim rerum minus vero sunt. Et nesciunt beatae sint quisquam dignissimos dolores quia deserunt.', 'accusantium atque', '1975-10-26', 5, 1, NULL, NULL),
(41, 'Enim consequatur eum ipsam assumenda est.', 'Ullam reprehenderit sed rerum molestiae non. Odit corporis temporibus velit corporis. Enim at libero doloremque nihil unde. Alias corrupti quasi repellat.', 'voluptatum', '2014-04-01', 6, 4, NULL, NULL),
(42, 'Inventore eaque eveniet labore officiis.', 'Tempore porro ratione ut minima deserunt. Enim dolorum laudantium aliquam rerum debitis ut rerum quod. Voluptatum reprehenderit voluptatem ipsum. Sint quas ut qui aut.', 'quaerat ab', '2002-06-14', 6, 1, NULL, NULL),
(43, 'Occaecati ullam est maxime.', 'Qui deserunt assumenda alias in. Explicabo voluptates ut rem facilis suscipit. Eaque aut aspernatur aliquam ipsam dicta quis voluptatibus consectetur.', 'quia', '2007-11-14', 7, 1, NULL, NULL),
(44, 'Nulla quis est.', 'Sed quia rerum quia illo. Aut qui atque sapiente harum dolorem dolores suscipit. Ratione voluptate non ducimus.', 'aut qui', '1987-05-29', 10, 2, NULL, NULL),
(45, 'Odio nemo quo libero sit.', 'Provident soluta ipsa eos error assumenda aut. Consequatur dolores ut eos minima soluta ut qui.', 'facilis', '2010-10-13', 9, 2, NULL, NULL),
(46, 'Vel in soluta.', 'Consequatur voluptas nisi aut aut. Ipsum excepturi iure at facilis dolorem.', 'laudantium omnis', '2008-04-19', 10, 2, NULL, NULL),
(47, 'Repellendus quos nostrum.', 'Ut id doloribus illo impedit vitae qui. Explicabo asperiores sunt ipsam sapiente quo dolore dolorem. Velit ducimus qui dolor nemo ratione autem veritatis. Nihil nobis ullam iste eveniet consequatur.', 'ut', '1994-11-13', 4, 3, NULL, NULL),
(48, 'Excepturi nemo ipsa blanditiis accusamus.', 'A ipsam aliquam maxime eos. Fuga consequatur sit aut totam laudantium. Nam quibusdam debitis repellat autem eligendi eligendi ut quisquam. At et hic magnam beatae omnis expedita quidem.', 'molestiae laudantium', '1986-03-19', 3, 2, NULL, NULL),
(49, 'Ex dolor commodi expedita culpa.', 'Architecto ut nobis libero qui error quam esse. Eos recusandae natus ut necessitatibus enim consequatur velit. Ducimus aliquid facere voluptatibus minus at in.', 'ut nisi', '2006-11-10', 10, 2, NULL, NULL),
(50, 'Ut est labore a.', 'Doloremque neque dolores maxime quibusdam eligendi. Qui sunt ipsum tempore tempora tempora vel dolorem repellat. Autem laudantium qui quo aperiam.', 'accusamus exercitationem', '1986-06-21', 6, 2, NULL, NULL),
(51, 'Ut repellat natus cum.', 'Aut accusamus amet amet repudiandae. Ex fugit porro vel consequuntur et nisi esse. Deserunt unde et autem est eos est.', 'architecto', '2009-12-02', 2, 3, NULL, NULL),
(52, 'A harum eos nesciunt non officiis.', 'Consequuntur est voluptatibus aut. Voluptatem incidunt perferendis maiores consequuntur sed dignissimos suscipit. Ut itaque et in illo illo natus. Dolor ut est nostrum qui. Provident et ex odio recusandae officiis.', 'ullam', '2008-03-29', 9, 1, NULL, NULL),
(53, 'Quis id dolorum.', 'Ut maiores et doloribus autem sit non excepturi. Voluptatem quibusdam aut aut dolor. Qui dolor sed aliquid sint nostrum. Est qui ullam rerum. Corrupti neque itaque aut officia commodi sit sed distinctio.', 'molestias', '1975-10-05', 9, 1, NULL, NULL),
(54, 'Distinctio ea placeat voluptas adipisci aperiam.', 'Omnis delectus ut magnam quidem. Dolores dolores at minima. At aspernatur qui autem ab iste pariatur. Distinctio at non odio voluptatem quia nisi aut error.', 'veniam vitae', '1986-10-31', 9, 2, NULL, NULL),
(55, 'Totam exercitationem nostrum facere.', 'Est blanditiis illum quo quia. Rerum reiciendis cum sapiente perferendis corporis. Esse accusamus nostrum eum amet autem odio. Sint tenetur molestias saepe nihil.', 'nihil quos', '2020-06-17', 5, 1, NULL, NULL),
(56, 'Eligendi eius doloribus eaque hic.', 'At fugit dolore quam consequatur perspiciatis nihil dolorem. Eos eum et minus doloremque quisquam debitis pariatur rem. Possimus autem et voluptatibus laborum omnis vel iusto.', 'voluptates', '2020-04-06', 7, 2, NULL, NULL),
(57, 'Enim dicta beatae ab ad nobis.', 'Dolore at totam dolorem et sit nisi laudantium nostrum. Nisi dignissimos omnis officiis tenetur blanditiis hic.', 'exercitationem rerum', '1985-10-24', 5, 3, NULL, NULL),
(58, 'Assumenda doloribus ut nemo et et.', 'Amet cumque consequuntur qui harum rem eos quia. Eaque dignissimos quas voluptates quibusdam illo. Deleniti molestiae neque repellat quis.', 'itaque', '1976-05-01', 4, 1, NULL, NULL),
(59, 'Voluptatem et rem ducimus.', 'Dolor blanditiis architecto quia non vel quia minima. Aperiam velit a rerum est tempore.', 'esse', '1980-01-08', 8, 1, NULL, NULL),
(60, 'Et animi nihil expedita qui quos.', 'Nobis architecto provident quo quo voluptates repellat. Voluptate totam veniam voluptatum est. Recusandae fugiat reiciendis occaecati iste. Ut dolores dolor sed unde et voluptas odit ut.', 'est', '1990-12-27', 9, 2, NULL, NULL),
(61, 'Unde eum aut aspernatur recusandae accusantium.', 'Tenetur aut natus voluptas est totam debitis ad. Inventore sequi ab impedit deleniti repellendus. Dicta cumque quae reprehenderit. Dicta aut maiores occaecati accusamus ullam.', 'omnis aspernatur', '1975-01-19', 10, 1, NULL, NULL),
(62, 'Non earum dolores.', 'Qui saepe et tempora rerum. Magni necessitatibus facilis incidunt tempora autem. Qui nulla commodi ea at.', 'officia', '2015-12-30', 10, 3, NULL, NULL),
(63, 'Dolores quas et.', 'Et incidunt iste totam autem sunt. Et qui ratione nihil ab consequuntur. Quis dolor at eos.', 'eos nulla', '1997-09-22', 9, 2, NULL, NULL),
(64, 'Tempora et dolor.', 'Adipisci culpa sunt ex commodi pariatur officia molestiae. Vel corrupti aspernatur commodi. Asperiores aut porro consequatur ut sunt et. Quas culpa at sequi velit optio ipsum.', 'sint', '1997-11-20', 4, 1, NULL, NULL),
(65, 'Reiciendis consequatur quod et consequatur.', 'Debitis non atque molestiae at maiores voluptatum sit. Aut ipsum quibusdam nobis. Occaecati aliquam eligendi quibusdam assumenda aliquam. Laborum id quasi expedita possimus.', 'nam sint', '1991-12-05', 7, 3, NULL, NULL),
(66, 'Eum dolorem et.', 'Ut velit voluptatum quis iste ab dolorum. Voluptates id nobis deleniti similique sit reiciendis ut. Velit quia excepturi sunt esse quia maiores est. Autem quia illo porro.', 'porro non', '2005-07-04', 4, 3, NULL, NULL),
(67, 'Ea fugiat dolorum.', 'Sed voluptas dolorem nihil nulla. Minima autem eum laudantium quaerat eius. Sed dolor saepe ut doloremque necessitatibus rem eum officiis. Id ut aut atque perferendis natus nisi.', 'voluptatem doloribus', '1974-06-13', 3, 2, NULL, NULL),
(68, 'Ducimus est itaque mollitia.', 'Natus ducimus eligendi officia at laboriosam. Tenetur ratione nesciunt aspernatur ut velit fugit. Consectetur nobis voluptatum autem optio. Vero voluptates aut et architecto voluptates vero autem.', 'aliquam', '1992-08-29', 8, 2, NULL, NULL),
(69, 'Qui adipisci odio.', 'Illo vitae similique id et et. Ipsa ut non nemo eius. Saepe aspernatur dolore adipisci omnis itaque ut deserunt. Ut aliquam impedit nulla facilis similique sunt explicabo quo.', 'et doloribus', '1988-08-11', 7, 4, NULL, NULL),
(70, 'Sunt aut dolore aut consequatur.', 'Optio dolor ipsa ipsam ut enim nostrum ut. Voluptatem expedita reiciendis hic aliquam unde. Harum omnis facilis similique magni corporis.', 'est', '1977-12-17', 2, 1, NULL, NULL),
(71, 'Natus similique ut labore.', 'Atque ducimus possimus dignissimos velit expedita non placeat et. Ad aut quaerat maxime corrupti iste possimus ut. Et laboriosam quod qui nisi.', 'animi totam', '2002-08-30', 8, 4, NULL, NULL),
(72, 'Facere qui et nam autem omnis.', 'Eum iure quod quas. Provident sit distinctio corporis voluptatum. Sapiente et pariatur excepturi ea voluptas nisi. Omnis qui nesciunt rerum quae nostrum voluptatibus ullam.', 'rem quae', '1995-11-02', 6, 4, NULL, NULL),
(73, 'Placeat esse quia sed eligendi.', 'Aut rerum quia ea odit voluptatem. Qui voluptas sint ut tenetur nemo. Officiis dolor mollitia consequatur asperiores sed incidunt.', 'sint', '2002-07-24', 5, 2, NULL, NULL),
(74, 'Omnis reiciendis deleniti mollitia.', 'Et aut minima consequuntur assumenda delectus doloremque. Excepturi deleniti earum debitis sapiente maxime. Omnis assumenda aliquid sint unde accusamus incidunt. Facere blanditiis labore sint fugit nihil dignissimos.', 'et', '1973-08-16', 9, 1, NULL, NULL),
(75, 'Aut consequatur eius ea.', 'Nihil consequuntur eum facere atque et voluptatibus vel. Ut qui velit ipsa.', 'qui', '1992-05-16', 2, 3, NULL, NULL),
(76, 'Rerum aliquam excepturi nisi.', 'Nihil laboriosam et aut quibusdam necessitatibus vel asperiores. Maiores illum occaecati sunt dolores quaerat quidem odit. Quis illo eaque alias aut voluptas ullam quia eveniet. Aut porro quis iure rem.', 'nam velit', '2002-10-29', 5, 1, NULL, NULL),
(77, 'Ipsam eum expedita molestiae vel.', 'Consequuntur et dolorum ipsam id. Sit doloribus officia praesentium aut omnis quaerat. Itaque possimus voluptatem repellat quod expedita perferendis error. Est enim voluptatem id et. Quia et omnis natus rerum dolorum ut.', 'est veniam', '1998-08-17', 8, 2, NULL, NULL),
(78, 'Quisquam iste eaque laboriosam.', 'Esse earum nostrum facilis modi sint deserunt. Nesciunt sapiente dolores sed qui tempora ut. Hic adipisci asperiores saepe blanditiis libero consequatur. Quia et nesciunt dolor ea modi est ducimus rerum.', 'placeat', '2011-03-09', 11, 2, NULL, NULL),
(79, 'Et soluta voluptatibus illum sed.', 'Autem mollitia molestiae qui laudantium. Ipsa fugit consequatur porro veritatis assumenda nemo. Quam accusantium ut autem sequi. Non voluptatem tempora minima commodi.', 'sint libero', '2014-05-24', 5, 3, NULL, NULL),
(80, 'Ut earum incidunt alias qui porro.', 'Est fuga ex optio. Quae impedit velit placeat iste beatae provident. Quia soluta in commodi alias nulla harum et.', 'esse ut', '1998-10-22', 2, 1, NULL, NULL),
(81, 'Atque et illo.', 'Qui eos nulla non et dolore repellat. Iste praesentium saepe quia tempora ducimus recusandae architecto expedita. Et dolores qui possimus suscipit fugit aut maiores facere. Consequuntur qui omnis pariatur sint iure corporis tempora.', 'laboriosam', '1993-08-17', 11, 2, NULL, NULL),
(82, 'Natus natus harum odit veniam earum.', 'Voluptatibus alias ea nihil est aspernatur cupiditate veritatis sapiente. Consequuntur magni quod expedita excepturi incidunt. Architecto animi dolorum consequatur explicabo eaque enim ipsa.', 'sed', '1996-07-22', 8, 3, NULL, NULL),
(83, 'Est assumenda vero.', 'Maxime recusandae repellat velit dolores minima. Sit veritatis quos voluptas labore saepe ut. Autem vero ut corrupti. Cum ipsum vel quibusdam ut. Ut et aut id nisi nulla officiis dolorem.', 'quas', '1970-08-19', 7, 2, NULL, NULL),
(84, 'Libero est recusandae at et ratione.', 'Voluptatibus quas recusandae magni. Totam nisi soluta esse perspiciatis consequatur. Error non temporibus consectetur. Vel eligendi sint vel et ducimus deleniti.', 'aut', '1994-05-08', 4, 3, NULL, NULL),
(85, 'Quae velit blanditiis aspernatur.', 'Nihil sint nesciunt quos dolor illo. Nihil adipisci repellat eligendi nisi magni corrupti. Voluptas possimus omnis iusto corrupti ab.', 'quod sit', '2020-02-03', 3, 2, NULL, NULL),
(86, 'Omnis voluptates dolorem.', 'Neque mollitia deserunt velit blanditiis voluptatum eos maiores. Expedita ut autem qui fugiat neque voluptas nobis. Est voluptatibus adipisci aut iure odio aperiam deleniti rem. Et neque omnis ut in incidunt.', 'est', '1977-02-12', 3, 4, NULL, NULL),
(87, 'Et occaecati fuga quia.', 'Eos aut neque harum autem vel placeat. Voluptas nihil mollitia quia.', 'consequatur', '1983-06-23', 11, 2, NULL, NULL),
(88, 'Sequi magni qui.', 'Qui qui provident assumenda omnis temporibus maxime. Nulla quia quasi et ipsa deleniti hic. Aliquam quia sit omnis sit. Et non possimus vero rerum. Qui aliquam voluptate quisquam.', 'a ex', '1971-07-07', 6, 4, NULL, NULL),
(89, 'Dolore accusantium nesciunt qui.', 'Reiciendis aut dolor aspernatur quo. Nihil esse sit nesciunt aut repellat animi. Et veritatis deserunt quis voluptatum accusamus. Repudiandae amet sequi officia. Voluptatem dolorum laboriosam recusandae officiis autem vero sint sit.', 'laborum quos', '1999-07-02', 3, 3, NULL, NULL),
(90, 'Enim iste a aperiam autem.', 'Pariatur ipsam id ut sequi. Delectus repellendus laboriosam eum rem tenetur doloribus sed ab. Et quisquam aut molestiae laudantium illo eum nihil. Numquam quia aliquam dolorem et ut iure.', 'itaque occaecati', '1995-12-28', 2, 1, NULL, NULL),
(91, 'Iusto exercitationem ut molestiae itaque.', 'Consequatur adipisci non dolorem repellendus. Eum corrupti laboriosam distinctio deleniti distinctio facilis sint et. Non aliquid eum excepturi nisi delectus doloremque ipsa.', 'voluptatem facere', '2015-11-16', 4, 1, NULL, NULL),
(92, 'Enim culpa aut.', 'Quasi exercitationem quis culpa aut alias. Sequi repudiandae sit tempore est sunt voluptatem sequi.', 'esse quasi', '1992-02-01', 5, 1, NULL, NULL),
(93, 'Ratione iste et architecto enim ipsum.', 'Natus sint dolore inventore et. Explicabo modi neque quibusdam ratione eos perferendis delectus praesentium. Doloribus non ea qui porro. Aut quisquam iste perspiciatis iusto beatae. Tenetur reprehenderit velit est delectus vel.', 'et', '1972-01-31', 8, 2, NULL, NULL),
(94, 'Sit dicta reprehenderit qui cum.', 'Qui vero totam quasi culpa qui error et. Est blanditiis maxime ad est libero dolor architecto. Dolor esse sint hic sit quibusdam id magnam ut. Non iure commodi at sint sed. Et assumenda et dignissimos sequi explicabo omnis.', 'dolore minima', '2014-12-25', 7, 4, NULL, NULL),
(95, 'Earum nisi autem cupiditate.', 'Exercitationem aperiam ipsum sit maxime aut eveniet autem. Sunt nisi ipsam id ut libero. Hic omnis iure aperiam autem eaque. Cum est enim magnam necessitatibus optio eaque labore. Doloremque ab porro debitis tempore debitis atque cum.', 'ipsa repudiandae', '1976-03-08', 2, 1, NULL, NULL),
(96, 'Aut voluptatem nam fuga voluptas ea.', 'Ut cupiditate sed maiores nulla eos. Asperiores quisquam sit architecto illo deserunt. Sapiente quia totam autem voluptas quia ratione et. Et aut perferendis dolorum earum beatae soluta molestiae. Culpa non quo ratione animi.', 'eaque aut', '2006-06-26', 9, 3, NULL, NULL),
(97, 'Dolor sit repellat necessitatibus maxime et.', 'Et atque ut omnis quia dicta quo. Quia voluptates pariatur eum adipisci voluptas totam. Eos atque sed ea quia consequuntur dolore.', 'rerum repellat', '1999-02-12', 4, 2, NULL, NULL),
(98, 'Qui cumque error minus voluptatem in.', 'Doloribus commodi eveniet quia qui temporibus. Autem qui mollitia sunt sunt soluta. Commodi aut quis commodi voluptatem nihil nobis.', 'rerum', '1982-07-12', 11, 2, NULL, NULL),
(99, 'Dolore nihil harum consequatur soluta.', 'Et modi sunt quasi eligendi et. Adipisci dicta totam perferendis rerum repellendus. Deserunt voluptas consequatur est aperiam. Voluptatem rerum impedit qui consequuntur adipisci autem eum quibusdam.', 'voluptatem tempora', '2015-08-21', 9, 2, NULL, NULL),
(100, 'Ut voluptatem aspernatur.', 'Dolore qui esse omnis ullam. Dolor voluptatum eum et sit et facere minus. Incidunt facilis ipsum expedita aut eligendi.', 'dicta', '1976-03-24', 5, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'browse bread 1', 'web', '2021-01-12 11:36:37', '2021-01-12 11:36:37'),
(2, 'read bread 1', 'web', '2021-01-12 11:36:37', '2021-01-12 11:36:37'),
(3, 'edit bread 1', 'web', '2021-01-12 11:36:37', '2021-01-12 11:36:37'),
(4, 'add bread 1', 'web', '2021-01-12 11:36:37', '2021-01-12 11:36:37'),
(5, 'delete bread 1', 'web', '2021-01-12 11:36:37', '2021-01-12 11:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-01-12 11:36:35', '2021-01-12 11:36:35'),
(2, 'user', 'web', '2021-01-12 11:36:35', '2021-01-12 11:36:35'),
(3, 'guest', 'web', '2021-01-12 11:36:35', '2021-01-12 11:36:35'),
(4, 'Enterprise', 'web', '2021-01-18 18:10:25', '2021-01-18 18:11:05');

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
(2, 3),
(3, 3),
(4, 3),
(5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `role_hierarchy`
--

CREATE TABLE `role_hierarchy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `hierarchy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_hierarchy`
--

INSERT INTO `role_hierarchy` (`id`, `role_id`, `hierarchy`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `class`) VALUES
(1, 'ongoing', 'badge badge-pill badge-primary'),
(2, 'stopped', 'badge badge-pill badge-secondary'),
(3, 'completed', 'badge badge-pill badge-success'),
(4, 'expired', 'badge badge-pill badge-warning');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `firstname`, `lastname`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Debashish', 'Ghosh', 'dev.test.debashish@gmail.com', '2021-01-21 06:32:34', NULL),
(2, 'Muhammad', 'Kashif', 'email2mkashif@gmail.com', '2021-01-21 08:32:17', '2021-01-21 08:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menuroles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `address`, `tel`, `user_type`, `password`, `menuroles`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin@admin.com', '2021-01-12 11:36:35', NULL, NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user,admin', 'nDiBV18uOPIZFsMTlxaY0wquKWrv4d9VmJVIWhSr04iG5O9TonM7MKaVauED', '2021-01-12 11:36:35', '2021-01-12 11:36:35', NULL),
(12, 'Kashif', 'email2mkashif@gmail.com', NULL, 'KL, Malaysia', '0909090909', 'Vendor', '$2y$10$wdhroMI2Bd3qjFd6dKxp1uCb8mulyyMPk7XB634.j1yN4NMtropZu', 'user', NULL, '2021-01-21 11:13:45', '2021-01-21 11:13:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credits`
--
ALTER TABLE `credits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folder`
--
ALTER TABLE `folder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_field`
--
ALTER TABLE `form_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `menulist`
--
ALTER TABLE `menulist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_role`
--
ALTER TABLE `menu_role`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `role_hierarchy`
--
ALTER TABLE `role_hierarchy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `credits`
--
ALTER TABLE `credits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `example`
--
ALTER TABLE `example`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_field`
--
ALTER TABLE `form_field`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menulist`
--
ALTER TABLE `menulist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `menu_role`
--
ALTER TABLE `menu_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_hierarchy`
--
ALTER TABLE `role_hierarchy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
