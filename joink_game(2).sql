-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2017 at 02:15 AM
-- Server version: 5.6.28-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `joink_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE IF NOT EXISTS `buildings` (
`id` int(10) unsigned NOT NULL,
  `building_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `money_cost` int(11) DEFAULT NULL,
  `required_buildings` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `construction_resources_cost` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `building_name`, `description`, `money_cost`, `required_buildings`, `construction_resources_cost`) VALUES
(1, 'hospital', 'this is hospital, description goes here.', 25000, '{"police":"10"}', '{"wood":"50","plastic":"100"}'),
(2, 'police', 'police station helps you reduces crime rates.', 125000, '{}', '{"wood":"50","iron":"250","plastic":"500"}');

-- --------------------------------------------------------

--
-- Table structure for table `building_stats`
--

CREATE TABLE IF NOT EXISTS `building_stats` (
`id` int(10) unsigned NOT NULL,
  `building_id` int(11) unsigned DEFAULT NULL,
  `income_per_cycle` float NOT NULL DEFAULT '0',
  `happiness_effect` int(11) NOT NULL DEFAULT '0',
  `crime_rate_effect` int(11) NOT NULL DEFAULT '0',
  `population_income_per_cycle_effect` int(11) DEFAULT '0',
  `maintenance_cost` int(11) NOT NULL DEFAULT '0',
  `population_rate_effect` int(11) NOT NULL DEFAULT '0',
  `stone_income_per_cycle` int(11) NOT NULL DEFAULT '0',
  `wood_income_per_cycle` int(11) NOT NULL DEFAULT '0',
  `iron_income_per_cycle` int(11) NOT NULL DEFAULT '0',
  `population_coverage` int(11) NOT NULL DEFAULT '0',
  `military_unit_upkeep_cost_effect` int(11) NOT NULL DEFAULT '0',
  `military_unit_effectiveness_effect` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `building_stats`
--

INSERT INTO `building_stats` (`id`, `building_id`, `income_per_cycle`, `happiness_effect`, `crime_rate_effect`, `population_income_per_cycle_effect`, `maintenance_cost`, `population_rate_effect`, `stone_income_per_cycle`, `wood_income_per_cycle`, `iron_income_per_cycle`, `population_coverage`, `military_unit_upkeep_cost_effect`, `military_unit_effectiveness_effect`) VALUES
(1, 1, 15, 10, 10, 16, 150, 500, 120, 300, 400, 200, 450, 540),
(2, 2, 500, 510, 12200, 6257, 2626, 26262, 285, 7982, 852, 96, 808, 658);

-- --------------------------------------------------------

--
-- Table structure for table `grievances`
--

CREATE TABLE IF NOT EXISTS `grievances` (
`id` int(10) unsigned NOT NULL,
  `nation_id` int(10) unsigned DEFAULT NULL,
  `target_nation_id` int(10) unsigned DEFAULT NULL,
  `due_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `money_required` double(8,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grievances`
--

INSERT INTO `grievances` (`id`, `nation_id`, `target_nation_id`, `due_date`, `money_required`) VALUES
(1, 2, 8, '2016-12-31 00:00:00', 250000.00),
(2, 2, 8, '2017-01-11 00:00:00', 150000.00);

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE IF NOT EXISTS `lands` (
`id` int(10) unsigned NOT NULL,
  `land_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'default name',
  `land_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `land_religion` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no religion',
  `land_main_resources` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no resources',
  `land_size` float NOT NULL DEFAULT '0',
  `building_id` int(11) unsigned DEFAULT NULL,
  `is_constructed` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lands`
--

INSERT INTO `lands` (`id`, `land_name`, `land_position`, `land_religion`, `land_main_resources`, `land_size`, `building_id`, `is_constructed`) VALUES
(1, 'default name', 'bla bla bla', 'ploa', 'iron ', 125, NULL, 0);

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
('2016_11_22_222850_game_users_add_foreign', 2),
('2016_11_22_231513_game_users_add_can_access', 3),
('2016_11_26_220729_nation_table', 4),
('2016_11_26_222945_time_tracking_table', 4),
('2016_11_26_224211_population_table', 4),
('2016_11_26_225603_millitary_table', 4),
('2016_11_26_225842_financial_table', 4),
('2016_11_26_230330_resources_table', 4),
('2016_11_26_230521_constructions_table', 4),
('2016_11_26_231131_lands_table', 4),
('2016_11_26_231445_buildings_table', 5),
('2016_11_26_232009_stats_table', 5),
('2016_11_30_115602_nation', 6),
('2016_11_30_115649_foreigns', 7),
('2016_12_14_155114_add_soldiers_user_table_foreign', 8),
('2016_12_21_235123_add_trade_offers', 9),
('2016_12_29_235232_add_g_table', 10),
('2016_12_31_140603_add_technologies_table', 11),
('2016_12_31_142114_add_nation_tech_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `nations`
--

CREATE TABLE IF NOT EXISTS `nations` (
`id` int(10) unsigned NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `ruler_id` int(11) unsigned DEFAULT NULL,
  `state_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no name',
  `nation_religion` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no religion',
  `nation_summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no summary',
  `nation_slogan` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no slogan',
  `nation_flag` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no flag',
  `nation_colors` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#000000,#000000',
  `land_id` int(11) unsigned DEFAULT NULL,
  `tax_rate` int(11) NOT NULL DEFAULT '0',
  `war_prefrence` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `millitary_upkeep_effect` float NOT NULL DEFAULT '0',
  `additional_maintenance_per_cycle` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nations`
--

INSERT INTO `nations` (`id`, `created_at`, `updated_at`, `ruler_id`, `state_name`, `nation_religion`, `nation_summary`, `nation_slogan`, `nation_flag`, `nation_colors`, `land_id`, `tax_rate`, `war_prefrence`, `millitary_upkeep_effect`, `additional_maintenance_per_cycle`) VALUES
(2, '2016-12-23 00:00:00', '2016-12-16 00:00:00', 1, 'zenda', 'dorzi', 'kolo ya walid', 'kolo ya walid', '', '', NULL, 56, '', 0, 0),
(8, '2016-12-01 16:12:32', '2016-12-15 18:08:40', 1, 'ggg', 'religion option 1', 'we''re gamden eltenen and hanfsha5 den abokom', 'nation slogan may be inserted here', 'images/87215.png', '#ea1414,#000000', 1, 887, 'peace', 2, 25);

-- --------------------------------------------------------

--
-- Table structure for table `nation_constructions`
--

CREATE TABLE IF NOT EXISTS `nation_constructions` (
`id` int(10) unsigned NOT NULL,
  `nation_id` int(11) unsigned DEFAULT NULL,
  `building_id` int(11) unsigned DEFAULT NULL,
  `is_constructed` tinyint(4) NOT NULL DEFAULT '0',
  `maintenance_cost` float NOT NULL DEFAULT '0',
  `count` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nation_constructions`
--

INSERT INTO `nation_constructions` (`id`, `nation_id`, `building_id`, `is_constructed`, `maintenance_cost`, `count`) VALUES
(1, 8, 1, 1, 200000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nation_financial`
--

CREATE TABLE IF NOT EXISTS `nation_financial` (
`id` int(10) unsigned NOT NULL,
  `nation_id` int(11) unsigned DEFAULT NULL,
  `total_money_available` float NOT NULL DEFAULT '0',
  `total_money_spent_on_bills` float NOT NULL DEFAULT '0',
  `total_money_spent_on_constrction` float NOT NULL DEFAULT '0',
  `total_money_spent_on_millitary` float NOT NULL DEFAULT '0',
  `government_income_per_cycle` float NOT NULL DEFAULT '0',
  `resources_market_worth` float NOT NULL DEFAULT '0',
  `bills_due_per_cycle` float NOT NULL DEFAULT '0',
  `tax_due_per_cycle` float NOT NULL DEFAULT '0',
  `total_money_spent` float NOT NULL DEFAULT '0',
  `total_available_taxes` float NOT NULL DEFAULT '0',
  `total_bills_due` float NOT NULL DEFAULT '0',
  `tax_paying_citizien` float NOT NULL DEFAULT '0',
  `total_money_from_trade` float NOT NULL DEFAULT '0',
  `total_money_from_war_spoils` float NOT NULL DEFAULT '0',
  `total_money_from_government_income` float NOT NULL DEFAULT '0',
  `total_money_from_tax_collection` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nation_financial`
--

INSERT INTO `nation_financial` (`id`, `nation_id`, `total_money_available`, `total_money_spent_on_bills`, `total_money_spent_on_constrction`, `total_money_spent_on_millitary`, `government_income_per_cycle`, `resources_market_worth`, `bills_due_per_cycle`, `tax_due_per_cycle`, `total_money_spent`, `total_available_taxes`, `total_bills_due`, `tax_paying_citizien`, `total_money_from_trade`, `total_money_from_war_spoils`, `total_money_from_government_income`, `total_money_from_tax_collection`) VALUES
(1, 8, 178158, 1254, 468.25, 87956, 5478, 23414, 50, 5757, 98987, 887, 88888, 564545, 1551, 515158, 15184, 78979);

-- --------------------------------------------------------

--
-- Table structure for table `nation_millitary`
--

CREATE TABLE IF NOT EXISTS `nation_millitary` (
`id` int(10) unsigned NOT NULL,
  `nation_id` int(11) unsigned DEFAULT NULL,
  `total_soldiers` int(11) NOT NULL DEFAULT '0',
  `deployed_soldiers` int(11) NOT NULL DEFAULT '0',
  `strength` float NOT NULL DEFAULT '0',
  `casualty` int(11) NOT NULL DEFAULT '0',
  `war_status` int(11) NOT NULL DEFAULT '0',
  `defending_soldiers` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nation_millitary`
--

INSERT INTO `nation_millitary` (`id`, `nation_id`, `total_soldiers`, `deployed_soldiers`, `strength`, `casualty`, `war_status`, `defending_soldiers`) VALUES
(1, 8, 2566, 555, 5555, 232323, 0, 120);

-- --------------------------------------------------------

--
-- Table structure for table `nation_population`
--

CREATE TABLE IF NOT EXISTS `nation_population` (
`id` int(10) unsigned NOT NULL,
  `nation_id` int(11) unsigned DEFAULT NULL,
  `total_population` int(11) NOT NULL DEFAULT '0',
  `happiness` float NOT NULL DEFAULT '0',
  `crime_rate` float NOT NULL DEFAULT '0',
  `population_growth_per_cycle` float NOT NULL DEFAULT '0',
  `population_density` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nation_population`
--

INSERT INTO `nation_population` (`id`, `nation_id`, `total_population`, `happiness`, `crime_rate`, `population_growth_per_cycle`, `population_density`) VALUES
(1, 8, 150, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nation_resources`
--

CREATE TABLE IF NOT EXISTS `nation_resources` (
`id` int(10) unsigned NOT NULL,
  `nation_id` int(11) unsigned DEFAULT NULL,
  `resource_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no name',
  `resource_qunatity` int(11) NOT NULL DEFAULT '0',
  `resource_logo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nation_resources`
--

INSERT INTO `nation_resources` (`id`, `nation_id`, `resource_name`, `resource_qunatity`, `resource_logo`) VALUES
(1, 8, 'wood', 22, '/images/resource.png'),
(2, 8, 'mahshy', 30, '/images/resource.png'),
(3, 2, 'mahshy', 95, ''),
(4, 2, 'wood', 15, '');

-- --------------------------------------------------------

--
-- Table structure for table `nation_tech`
--

CREATE TABLE IF NOT EXISTS `nation_tech` (
`id` int(10) unsigned NOT NULL,
  `nation_id` int(10) unsigned DEFAULT NULL,
  `tech_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nation_tech`
--

INSERT INTO `nation_tech` (`id`, `nation_id`, `tech_id`) VALUES
(1, 8, 1),
(2, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nation_time_tracking`
--

CREATE TABLE IF NOT EXISTS `nation_time_tracking` (
`id` int(10) unsigned NOT NULL,
  `nation_id` int(11) unsigned DEFAULT NULL,
  `last_tax_collection` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_bill_payment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_stone_collected` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_government_income_collected` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_population_estimated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_religion_edit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_tax_rate_edit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nation_time_tracking`
--

INSERT INTO `nation_time_tracking` (`id`, `nation_id`, `last_tax_collection`, `last_bill_payment`, `last_stone_collected`, `last_government_income_collected`, `last_population_estimated`, `last_religion_edit`, `last_tax_rate_edit`, `created_at`, `updated_at`) VALUES
(1, 8, '2016-12-29 01:01:49', '2016-12-29 23:24:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-12-08 02:09:11', '2016-12-06 03:10:13', '2016-12-01 14:12:32', '2016-12-21 12:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `nation_trade`
--

CREATE TABLE IF NOT EXISTS `nation_trade` (
`id` int(10) unsigned NOT NULL,
  `nation_id` int(10) unsigned DEFAULT NULL,
  `targeted_nation_id` int(10) unsigned DEFAULT NULL,
  `offer` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `request` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `counter` tinyint(1) NOT NULL DEFAULT '0',
  `accepted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nation_trade`
--

INSERT INTO `nation_trade` (`id`, `nation_id`, `targeted_nation_id`, `offer`, `request`, `counter`, `accepted`) VALUES
(3, 8, 2, '{"mahshy":"50"}', '{"wood":"8"}', 1, 0),
(4, 2, 2, '{"mahshy":"50"}', '{"wood":"50"}', 0, 0),
(5, 8, 2, '{"mahshy":"50"}', '{"wood":"10"}', 0, 0),
(6, 8, 2, '{"wood":"100","mahshy":"250"}', '{"admin_item":"50","wood":"500","mahshy":"250"}', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE IF NOT EXISTS `technologies` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no name',
  `desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no description',
  `tech_resources_cost` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `required_tech` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `required_buildings` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `name`, `desc`, `tech_resources_cost`, `required_tech`, `required_buildings`) VALUES
(1, 'framing', 'bla bla bla bla bla ', '{"wood":"100","gold":"200"}', '[{"name":"farming","desc":"this is description"},{"name":"seeding","desc":"this is description"}]', '{"police station":"10","hospital":"20"}'),
(2, 'industry', 'saddddddddddasdasd ', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_forum_id` mediumint(8) unsigned DEFAULT NULL,
  `nation_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_allowed` tinyint(4) NOT NULL DEFAULT '0',
  `current_nation_id` smallint(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_forum_id`, `nation_id`, `remember_token`, `created_at`, `updated_at`, `is_allowed`, `current_nation_id`) VALUES
(1, 'dev', 115, NULL, 'uKHx8MkP1I2aEf2D3mpZsURY6S7sGXf9Z1DCMvxj4c4pvPsO5jCm2eUfheur', '2016-11-22 21:21:21', '2016-12-15 16:12:03', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users_soldiers`
--

CREATE TABLE IF NOT EXISTS `users_soldiers` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `nation_id` int(10) unsigned DEFAULT NULL,
  `soldier_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `soldier_type_count` int(11) NOT NULL DEFAULT '0',
  `upkeep_cost` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_soldiers`
--

INSERT INTO `users_soldiers` (`id`, `user_id`, `nation_id`, `soldier_type`, `soldier_type_count`, `upkeep_cost`) VALUES
(1, 1, 8, 'Archers', 25, 125),
(2, 1, 8, 'Knights', 50, 500),
(3, 1, 8, '7amada', 60, 987);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building_stats`
--
ALTER TABLE `building_stats`
 ADD PRIMARY KEY (`id`), ADD KEY `nation_stats_building_id_foreign` (`building_id`);

--
-- Indexes for table `grievances`
--
ALTER TABLE `grievances`
 ADD PRIMARY KEY (`id`), ADD KEY `grievances_nation_id_foreign` (`nation_id`), ADD KEY `grievances_target_nation_id_foreign` (`target_nation_id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
 ADD PRIMARY KEY (`id`), ADD KEY `lands_building_id_foreign` (`building_id`);

--
-- Indexes for table `nations`
--
ALTER TABLE `nations`
 ADD PRIMARY KEY (`id`), ADD KEY `nation_ruler_id_foreign` (`ruler_id`), ADD KEY `nation_land_id_foreign` (`land_id`);

--
-- Indexes for table `nation_constructions`
--
ALTER TABLE `nation_constructions`
 ADD PRIMARY KEY (`id`), ADD KEY `nation_constructions_building_id_foreign` (`building_id`), ADD KEY `nation_constructions_nation_id_foreign` (`nation_id`);

--
-- Indexes for table `nation_financial`
--
ALTER TABLE `nation_financial`
 ADD PRIMARY KEY (`id`), ADD KEY `nation_financial_nation_id_foreign` (`nation_id`);

--
-- Indexes for table `nation_millitary`
--
ALTER TABLE `nation_millitary`
 ADD PRIMARY KEY (`id`), ADD KEY `nation_millitary_nation_id_foreign` (`nation_id`);

--
-- Indexes for table `nation_population`
--
ALTER TABLE `nation_population`
 ADD PRIMARY KEY (`id`), ADD KEY `nation_population_nation_id_foreign` (`nation_id`);

--
-- Indexes for table `nation_resources`
--
ALTER TABLE `nation_resources`
 ADD PRIMARY KEY (`id`), ADD KEY `nation_resources_nation_id_foreign` (`nation_id`);

--
-- Indexes for table `nation_tech`
--
ALTER TABLE `nation_tech`
 ADD PRIMARY KEY (`id`), ADD KEY `nation_tech_nation_id_foreign` (`nation_id`), ADD KEY `nation_tech_tech_id_foreign` (`tech_id`);

--
-- Indexes for table `nation_time_tracking`
--
ALTER TABLE `nation_time_tracking`
 ADD PRIMARY KEY (`id`), ADD KEY `nation_time_tracking_nation_id_foreign` (`nation_id`);

--
-- Indexes for table `nation_trade`
--
ALTER TABLE `nation_trade`
 ADD PRIMARY KEY (`id`), ADD KEY `nation_trade_nation_id_foreign` (`nation_id`), ADD KEY `nation_trade_targeted_nation_id_foreign` (`targeted_nation_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `foreign_key` (`user_forum_id`);

--
-- Indexes for table `users_soldiers`
--
ALTER TABLE `users_soldiers`
 ADD PRIMARY KEY (`id`), ADD KEY `users_soldiers_user_id_foreign` (`user_id`), ADD KEY `nation_soldiers` (`nation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `building_stats`
--
ALTER TABLE `building_stats`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `grievances`
--
ALTER TABLE `grievances`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nations`
--
ALTER TABLE `nations`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `nation_constructions`
--
ALTER TABLE `nation_constructions`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nation_financial`
--
ALTER TABLE `nation_financial`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nation_millitary`
--
ALTER TABLE `nation_millitary`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nation_population`
--
ALTER TABLE `nation_population`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nation_resources`
--
ALTER TABLE `nation_resources`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nation_tech`
--
ALTER TABLE `nation_tech`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nation_time_tracking`
--
ALTER TABLE `nation_time_tracking`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nation_trade`
--
ALTER TABLE `nation_trade`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_soldiers`
--
ALTER TABLE `users_soldiers`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `building_stats`
--
ALTER TABLE `building_stats`
ADD CONSTRAINT `nation_stats_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `grievances`
--
ALTER TABLE `grievances`
ADD CONSTRAINT `grievances_nation_id_foreign` FOREIGN KEY (`nation_id`) REFERENCES `nations` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `grievances_target_nation_id_foreign` FOREIGN KEY (`target_nation_id`) REFERENCES `nations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lands`
--
ALTER TABLE `lands`
ADD CONSTRAINT `lands_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nations`
--
ALTER TABLE `nations`
ADD CONSTRAINT `nation_land_id_foreign` FOREIGN KEY (`land_id`) REFERENCES `lands` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `nation_ruler_id_foreign` FOREIGN KEY (`ruler_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nation_constructions`
--
ALTER TABLE `nation_constructions`
ADD CONSTRAINT `nation_constructions_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `nation_constructions_nation_id_foreign` FOREIGN KEY (`nation_id`) REFERENCES `nations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nation_financial`
--
ALTER TABLE `nation_financial`
ADD CONSTRAINT `nation_financial_nation_id_foreign` FOREIGN KEY (`nation_id`) REFERENCES `nations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nation_millitary`
--
ALTER TABLE `nation_millitary`
ADD CONSTRAINT `nation_millitary_nation_id_foreign` FOREIGN KEY (`nation_id`) REFERENCES `nations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nation_population`
--
ALTER TABLE `nation_population`
ADD CONSTRAINT `nation_population_nation_id_foreign` FOREIGN KEY (`nation_id`) REFERENCES `nations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nation_resources`
--
ALTER TABLE `nation_resources`
ADD CONSTRAINT `nation_resources_nation_id_foreign` FOREIGN KEY (`nation_id`) REFERENCES `nations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nation_tech`
--
ALTER TABLE `nation_tech`
ADD CONSTRAINT `nation_tech_nation_id_foreign` FOREIGN KEY (`nation_id`) REFERENCES `nations` (`id`),
ADD CONSTRAINT `nation_tech_tech_id_foreign` FOREIGN KEY (`tech_id`) REFERENCES `technologies` (`id`);

--
-- Constraints for table `nation_time_tracking`
--
ALTER TABLE `nation_time_tracking`
ADD CONSTRAINT `nation_time_tracking_nation_id_foreign` FOREIGN KEY (`nation_id`) REFERENCES `nations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nation_trade`
--
ALTER TABLE `nation_trade`
ADD CONSTRAINT `nation_trade_nation_id_foreign` FOREIGN KEY (`nation_id`) REFERENCES `nations` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `nation_trade_targeted_nation_id_foreign` FOREIGN KEY (`targeted_nation_id`) REFERENCES `nations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_user_forum_id_foreign` FOREIGN KEY (`user_forum_id`) REFERENCES `phpbb_database`.`phpbb_users` (`user_id`);

--
-- Constraints for table `users_soldiers`
--
ALTER TABLE `users_soldiers`
ADD CONSTRAINT `nation_soldiers` FOREIGN KEY (`nation_id`) REFERENCES `nations` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `users_soldiers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
