-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2015 at 04:47 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `411jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `post_id`) VALUES
(1, 'Accounting', 1),
(2, 'Engineering', 2),
(3, 'IT', 3),
(4, 'Human Resources', 4),
(5, 'Law', 5),
(6, 'Pharmaceuticals', 6),
(7, 'Health care', 7),
(8, 'Media', 18),
(9, 'Drivers', 9),
(10, 'Domestic', 10),
(11, 'IT', 54),
(12, 'Engineering', 55);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_09_164944_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `company_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `closing` date NOT NULL,
  `job_description` text COLLATE utf8_unicode_ci NOT NULL,
  `job_experience` text COLLATE utf8_unicode_ci NOT NULL,
  `company_description` text COLLATE utf8_unicode_ci NOT NULL,
  `salary` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_published_at_index` (`published_at`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `slug`, `title`, `created_at`, `updated_at`, `published_at`, `active`, `company_name`, `closing`, `job_description`, `job_experience`, `company_description`, `salary`) VALUES
(1, 'molestias-nam-et-voluptatem-consectetur-nemo-nemo', 'Molestias nam et voluptatem consectetur nemo nemo.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-10-04 11:37:22', 1, 'Siemens', '0000-00-00', '', '', '', '0.00'),
(2, 'eveniet-facere-aut-et-doloribus-pariatur-velit-officia-dolorum-eum-nam-sit', 'Eveniet facere aut et doloribus pariatur velit officia dolorum eum nam sit.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-09-10 09:11:01', 1, 'Google', '0000-00-00', '', '', '', '0.00'),
(3, 'sit-sed-facilis-sit-dolor-asperiores-et', 'Sit sed facilis sit dolor asperiores et.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-10-10 17:49:13', 1, '', '0000-00-00', '', '', '', '0.00'),
(4, 'nostrum-officia-illum-repudiandae-veniam', 'Nostrum officia illum repudiandae veniam.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-09-29 21:56:19', 1, 'Sony', '0000-00-00', '', '', '', '0.00'),
(5, 'sed-exercitationem-fugiat-aut-cumque', 'Sed exercitationem fugiat aut cumque.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-09-22 20:35:25', 1, 'Airtel', '0000-00-00', '', '', '', '0.00'),
(6, 'saepe-et-quisquam-quia-fugiat-corrupti', 'Saepe et quisquam quia fugiat corrupti.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-09-13 00:20:18', 1, 'Alcatel', '0000-00-00', '', '', '', '0.00'),
(7, 'sapiente-laborum-laborum-itaque-inventore', 'Sapiente laborum laborum itaque inventore.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-09-21 07:09:43', 1, 'Fidelity Bank', '0000-00-00', '', '', '', '0.00'),
(8, 'asperiores-exercitationem-est-voluptatem', 'Asperiores exercitationem est voluptatem.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-10-11 22:54:58', 1, 'First Bank', '0000-00-00', '', '', '', '0.00'),
(9, 'aperiam-unde-soluta-rerum-blanditiis-doloribus-quo-vero-architecto-et-qui-in-ut', 'Aperiam unde soluta rerum blanditiis doloribus quo vero architecto et qui in ut.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-10-05 09:32:41', 1, 'MTN', '0000-00-00', '', '', '', '0.00'),
(10, 'est-vel-nulla-et', 'Est vel nulla et.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-10-05 09:33:22', 1, 'Zenith Bank', '0000-00-00', '', '', '', '0.00'),
(11, 'eligendi-blanditiis-non-et-atque-consectetur-ipsam', 'Eligendi blanditiis non et atque consectetur ipsam.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-09-30 04:56:12', 1, 'GLO', '0000-00-00', '', '', '', '0.00'),
(12, 'voluptatem-sed-vel-aperiam-unde-est-dicta-architecto', 'Voluptatem sed vel aperiam unde est dicta architecto.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-09-13 12:51:19', 1, '', '0000-00-00', '', '', '', '0.00'),
(13, 'quod-quis-et', 'Quod quis et.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-10-03 11:15:19', 1, '', '0000-00-00', '', '', '', '0.00'),
(14, 'ut-qui-beatae-est-quam-incidunt', 'Ut qui beatae est quam incidunt.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-10-01 08:59:25', 1, '', '0000-00-00', '', '', '', '0.00'),
(15, 'esse-repudiandae-officiis-at', 'Esse repudiandae officiis at.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-09-27 09:50:33', 1, '', '0000-00-00', '', '', '', '0.00'),
(16, 'voluptate-porro-aut-cupiditate-qui-ex-ut', 'Voluptate porro aut cupiditate qui ex ut.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-09-24 01:00:29', 1, '', '0000-00-00', '', '', '', '0.00'),
(17, 'minus-eos-nihil-repudiandae', 'Minus eos nihil repudiandae.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-10-01 18:50:29', 1, '', '0000-00-00', '', '', '', '0.00'),
(18, 'rerum-rem-placeat-accusamus-magni-ab', 'Rerum rem placeat accusamus magni ab.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-09-17 13:39:02', 1, '', '0000-00-00', '', '', '', '0.00'),
(19, 'facilis-quibusdam-nostrum-officia-in-sit-perspiciatis-error-fugiat', 'Facilis quibusdam nostrum officia in sit perspiciatis error fugiat.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-10-01 23:01:50', 1, 'Firefox', '0000-00-00', '', '', '', '0.00'),
(20, 'mollitia-sit-explicabo-ut-qui-velit-sint', 'Mollitia sit explicabo ut qui velit sint.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-09-20 14:18:36', 1, 'Shell', '0000-00-00', '', '', '', '0.00'),
(21, 'minus-ut-deleniti-placeat-autem-nobis-delectus-veritatis', 'Minus ut deleniti placeat autem nobis delectus veritatis.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-09-25 12:39:44', 0, 'Total', '0000-00-00', '', '', '', '0.00'),
(22, 'nemo-illo-laboriosam-perspiciatis', 'Nemo illo laboriosam perspiciatis.', '2015-10-09 18:58:10', '2015-10-09 18:58:10', '2015-10-10 10:34:34', 0, '', '0000-00-00', '', '', '', '0.00'),
(23, 'quia-enim-itaque-provident-recusandae-eaque-consequatur-rerum', 'Quia enim itaque provident recusandae eaque consequatur rerum.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-22 11:25:48', 1, '', '0000-00-00', '', '', '', '0.00'),
(24, 'soluta-sit-et-similique-magni-dolor-hic-id-consequatur-nam-nam', 'Soluta sit et similique magni dolor hic id consequatur nam nam.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-10-10 18:15:02', 1, '', '0000-00-00', '', '', '', '0.00'),
(25, 'quo-accusamus-facere-nostrum-dolore', 'Quo accusamus facere nostrum dolore.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-16 19:55:54', 1, '', '0000-00-00', '', '', '', '0.00'),
(26, 'voluptatem-asperiores-veritatis-quasi', 'Voluptatem asperiores veritatis quasi.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-17 19:07:38', 0, '', '0000-00-00', '', '', '', '0.00'),
(27, 'mollitia-eaque-commodi-facilis-nihil', 'Mollitia eaque commodi facilis nihil.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-20 08:46:22', 0, '', '0000-00-00', '', '', '', '0.00'),
(28, 'recusandae-voluptas-doloribus-in-illum-consequatur-error-quam-ducimus-doloribus-voluptatum', 'Recusandae voluptas doloribus in illum consequatur error quam ducimus doloribus voluptatum.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-28 02:25:46', 0, '', '0000-00-00', '', '', '', '0.00'),
(29, 'vel-labore-officiis-ex-dignissimos-ut', 'Vel labore officiis ex dignissimos ut.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-10-09 22:52:06', 0, '', '0000-00-00', '', '', '', '0.00'),
(30, 'quis-in-non-sapiente-commodi-numquam', 'Quis in non sapiente commodi numquam.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-10-11 12:44:13', 0, '', '0000-00-00', '', '', '', '0.00'),
(31, 'facere-qui-illo-doloremque-odit', 'Facere qui illo doloremque odit.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-10-09 05:32:21', 0, '', '0000-00-00', '', '', '', '0.00'),
(32, 'eum-iure-sunt-officiis-est-et-ut', 'Eum iure sunt officiis est et ut.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-15 08:48:26', 0, '', '0000-00-00', '', '', '', '0.00'),
(33, 'magnam-voluptas-blanditiis-fugit-dolorem-incidunt-dolores-praesentium-quod-dolor-magnam-vitae', 'Magnam voluptas blanditiis fugit dolorem incidunt dolores praesentium quod dolor magnam vitae.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-18 22:07:16', 0, '', '0000-00-00', '', '', '', '0.00'),
(34, 'corporis-molestiae-molestias-labore-sequi-explicabo-cum-qui', 'Corporis molestiae molestias labore sequi explicabo cum qui.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-17 09:48:16', 0, '', '0000-00-00', '', '', '', '0.00'),
(35, 'magnam-nobis-eum-eveniet-eum-dolor-est-aspernatur-quibusdam', 'Magnam nobis eum eveniet eum dolor est aspernatur quibusdam.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-23 01:58:50', 0, '', '0000-00-00', '', '', '', '0.00'),
(36, 'aut-est-sunt-id-possimus-sapiente-aut-incidunt-doloribus-occaecati', 'Aut est sunt id possimus sapiente aut incidunt doloribus occaecati.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-28 11:47:00', 0, '', '0000-00-00', '', '', '', '0.00'),
(37, 'libero-at-recusandae-autem-dolore-magnam-quo-iusto-voluptas', 'Libero at recusandae autem dolore magnam quo iusto voluptas.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-19 00:05:20', 0, '', '0000-00-00', '', '', '', '0.00'),
(38, 'nemo-nesciunt-harum-iste-facilis-laboriosam-alias', 'Nemo nesciunt harum iste facilis laboriosam alias.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-10-05 11:40:09', 0, '', '0000-00-00', '', '', '', '0.00'),
(39, 'eveniet-quia-suscipit-voluptatem-sapiente-ut', 'Eveniet quia suscipit voluptatem sapiente ut.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-10-01 23:17:41', 0, '', '0000-00-00', '', '', '', '0.00'),
(40, 'eius-aliquid-ratione-facilis-nostrum', 'Eius aliquid ratione facilis nostrum.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-10-12 07:26:36', 0, '', '0000-00-00', '', '', '', '0.00'),
(41, 'et-voluptas-nisi-nulla-est-vitae', 'Et voluptas nisi nulla est vitae.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-10-01 14:25:11', 0, '', '0000-00-00', '', '', '', '0.00'),
(42, 'minima-possimus-quod-ipsa-itaque-eum-dolorem-quo-animi-dolores-autem-et-deserunt', 'Minima possimus quod ipsa itaque eum dolorem quo animi dolores autem et deserunt.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-09 21:57:25', 0, '', '0000-00-00', '', '', '', '0.00'),
(43, 'est-quasi-dolores-commodi-optio-dicta-omnis-incidunt', 'Est quasi dolores commodi optio dicta omnis incidunt.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-27 15:02:27', 0, '', '0000-00-00', '', '', '', '0.00'),
(44, 'autem-sapiente-sit', 'Autem sapiente sit.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-23 12:45:44', 0, '', '0000-00-00', '', '', '', '0.00'),
(45, 'enim-sit-corporis-facere-quia-temporibus', 'Enim sit corporis facere quia temporibus.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-13 12:46:17', 0, '', '0000-00-00', '', '', '', '0.00'),
(46, 'aut-aut-enim-rerum-vitae-facilis', 'Aut aut enim rerum vitae facilis.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-30 00:47:47', 0, '', '0000-00-00', '', '', '', '0.00'),
(47, 'exercitationem-doloremque-aliquid-et-inventore-sed', 'Exercitationem doloremque aliquid et inventore sed.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-09-26 23:05:36', 0, '', '0000-00-00', '', '', '', '0.00'),
(48, 'accusantium-est-consequatur-dolorum-ratione-voluptas', 'Accusantium est consequatur dolorum ratione voluptas.', '2015-10-09 18:58:11', '2015-10-09 18:58:11', '2015-10-02 22:17:48', 0, '', '0000-00-00', '', '', '', '0.00'),
(49, 'voluptas-ipsa-esse-quibusdam-nobis-ab-aut-saepe-exercitationem-eum-et-eius-illo-veritatis-harum', 'Voluptas ipsa esse quibusdam nobis ab aut saepe exercitationem eum et eius illo veritatis harum.', '2015-10-09 18:58:12', '2015-10-09 18:58:12', '2015-09-27 20:34:28', 0, '', '0000-00-00', '', '', '', '0.00'),
(50, 'eligendi-aspernatur-officia-ex-culpa-quasi-voluptatibus-perspiciatis-est-laboriosam-asperiores', 'Eligendi aspernatur officia ex culpa quasi voluptatibus perspiciatis est laboriosam asperiores.', '2015-10-09 18:58:12', '2015-10-09 18:58:12', '2015-09-16 19:51:00', 0, '', '0000-00-00', '', '', '', '0.00'),
(51, 'new-job-added', 'New Job added', '2015-10-14 11:20:38', '2015-10-14 11:20:38', '0000-00-00 00:00:00', 1, 'Siemens', '2015-10-23', '<p>Great job here oh,,</p>', '', '', '0.00'),
(52, 'this-is-going-to-be-saved', 'This is going to be saved', '2015-10-14 12:48:40', '2015-10-14 12:48:40', '0000-00-00 00:00:00', 0, 'Airtel', '2015-10-08', '<p>To be saved</p>', '', '', '0.00'),
(54, 'new-job-by-samsung', 'New Job by Samsung', '2015-10-15 13:38:06', '2015-10-15 13:38:06', '0000-00-00 00:00:00', 1, 'Samsung', '2015-10-15', 'This is a great job', '', '', '9999.99'),
(55, 'erricksen-engineering-jobs', 'Erricksen Engineering jobs', '2015-10-15 13:46:46', '2015-10-15 13:46:46', '0000-00-00 00:00:00', 1, 'Erickssen', '2014-10-16', 'This is great job with good package', '', '', '9999.99');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag_pivot`
--

CREATE TABLE IF NOT EXISTS `post_tag_pivot` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `post_tag_pivot`
--

INSERT INTO `post_tag_pivot` (`id`, `post_id`, `tag_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 11),
(12, 12, 12),
(13, 54, 13),
(14, 54, 14),
(15, 54, 15),
(16, 55, 16),
(17, 55, 17);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `post_id`) VALUES
(1, 'Lagos', 50),
(2, 'Abuja', 55);

-- --------------------------------------------------------

--
-- Table structure for table `statess`
--

CREATE TABLE IF NOT EXISTS `statess` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `statess`
--

INSERT INTO `statess` (`id`, `name`) VALUES
(1, 'Abia'),
(2, 'Abuja'),
(3, 'Adamawa'),
(4, 'Akwa Ibom'),
(5, 'Anambra'),
(6, 'Bauchi'),
(7, 'Bayelsa'),
(8, 'Benue'),
(9, 'Borno'),
(10, 'Cross River'),
(11, 'Delta'),
(12, 'Ebonyi'),
(13, 'Edo'),
(14, 'Ekiti'),
(15, 'Enugu'),
(16, 'Gombe'),
(17, 'Imo'),
(18, 'Jigawa'),
(19, 'Kaduna'),
(20, 'Kano'),
(21, 'Katsina'),
(22, 'Kebbi'),
(23, 'Kogi'),
(24, 'Kwara'),
(25, 'Lagos'),
(26, 'Nasarawa'),
(27, 'Niger'),
(28, 'Ogun'),
(29, 'Ondo'),
(30, 'Osun'),
(31, 'Oyo'),
(32, 'Plateau'),
(33, 'Rivers'),
(34, 'Sokoto'),
(35, 'Taraba'),
(36, 'Yobe'),
(37, 'Zamfara'),
(39, 'newState2');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `meta_description` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `meta_description`) VALUES
(1, 'Accounting', 'Check Out All Jobs Listed Under Acounting'),
(2, 'Engineering', 'Check Out All Jobs Listed Under Engineering'),
(3, 'Automotive', 'Check Out All Jobs Listed Under Automotive'),
(4, 'Banking & Finance', 'Check Out All Jobs Listed Under Banking And Finance'),
(5, 'Customer service', 'Check Out All Jobs Listed Under customer Service'),
(6, 'Journalism', 'Check Out All Jobs Listed Under Journalism'),
(7, 'Hospitality', 'Check Out All Jobs Listed Under Hospitality'),
(8, 'Human Resource', 'Check Out All Jobs Listed Under Human Resource'),
(9, 'Information technology', 'Check Out All Jobs Listed Under Information Technology'),
(10, 'part time', 'Check Out All Jobs Listed Under Part time'),
(11, 'Sales & Marketing', 'Check Out All Jobs Listed Under Sales And Marketting'),
(12, 'Pharmaceutical', 'Check Out All Jobs Listed Under Pharmaceuticals'),
(13, 'samsung jobs', ''),
(14, 'IT jobs', ''),
(15, 'design jobs', ''),
(16, 'engineering jobs', ''),
(17, 'Ericksen jobs', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
