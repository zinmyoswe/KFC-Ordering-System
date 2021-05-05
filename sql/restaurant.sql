-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 08:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `attribute_id` int(11) NOT NULL,
  `attribute_name` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`attribute_id`, `attribute_name`, `created_by`, `created_date`, `modified_date`) VALUES
(1, 'big ', 'zinmyo', '2021-02-19 07:06:17', '2021-02-19 19:45:49'),
(2, 'small', 'zinmyo', '2021-02-19 07:06:26', '2021-02-19 19:45:42'),
(4, 'special', 'zinmyo', '2021-02-19 19:44:30', '2021-02-19 19:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `menu_id`, `created_date`, `modified_date`) VALUES
(1, 'Kyay-Oh & Sichet', 1, '2021-02-14 04:30:31', '2021-02-14 13:05:20'),
(2, 'Grills', 1, '2021-02-14 04:35:43', '2021-02-14 13:05:10'),
(3, 'Chinese Cuisine', 1, '2021-02-14 04:44:30', '2021-02-14 13:05:03'),
(4, 'Thai Cuisine', 1, '2021-02-14 05:32:22', '2021-02-14 13:04:50'),
(5, 'Fresh Juice', 2, '2021-02-14 13:08:52', '2021-02-14 13:14:06'),
(6, 'Coffee & Dessert', 2, '2021-02-14 13:09:40', '2021-02-14 13:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `main_ingredient_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `category_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `main_ingredient_id`, `price`, `category_id`, `menu_id`, `created_by`, `cover`, `created_date`, `modified_date`) VALUES
(1, 'Grilled Chicken', 1, 2000, 2, 1, 'zinmyo', 'Grill Chicken@2x.png', '2021-02-15 21:33:33', '2021-02-15 21:33:33'),
(2, 'Grilled Pork', 2, 2000, 2, 1, 'zinmyo', 'Grill Pork@2x.png', '2021-02-15 21:54:23', '2021-02-15 21:54:23'),
(3, 'Grilled Mushroom', 6, 1300, 2, 1, 'zinmyo', 'Grill Mushroom@2x.png', '2021-02-15 22:14:05', '2021-02-15 22:14:05'),
(4, 'Chicken Sartay', 1, 2200, 2, 1, 'zinmyo', 'Chicken Sartay@2x.png', '2021-02-15 22:24:12', '2021-02-15 22:24:12'),
(5, 'Grilled Pork Ball', 2, 1500, 2, 1, 'zinmyo', 'Grill Pork Ball@2x.png', '2021-02-15 22:25:08', '2021-02-15 22:25:08'),
(6, 'Grilled Fish Ball', 7, 1500, 2, 1, 'zinmyo', 'Grill fish ball@2x.png', '2021-02-15 22:25:48', '2021-02-15 22:25:48'),
(7, 'Grilled Potato', 6, 1000, 2, 1, 'zinmyo', 'Grill Potato@2x.png', '2021-02-15 22:27:03', '2021-02-15 22:27:03'),
(8, 'Grilled Lady Finger', 6, 1000, 2, 1, 'zinmyo', 'Lady Finger@2x.png', '2021-02-15 22:27:52', '2021-02-15 22:27:52'),
(9, 'Grilled Garlic', 6, 1000, 2, 1, 'zinmyo', 'Grill Garlic@2x.png', '2021-02-15 22:28:41', '2021-02-15 22:28:41'),
(10, 'Grilled Prawn', 4, 2500, 2, 1, 'zinmyo', 'Grill Prawn@2x.png', '2021-02-15 22:29:48', '2021-02-15 22:29:48'),
(11, 'Sautéed Mixed Vegetable', 6, 3000, 3, 1, 'zinmyo', 'Sauteed Prawn with Chestnuts@2x.png', '2021-02-15 23:15:57', '2021-02-15 23:15:57'),
(12, 'Sautéed Prawn with Chestnuts', 4, 4000, 3, 1, 'zinmyo', 'Sauteed-Mixed-Vegetable@2x.png', '2021-02-15 23:17:36', '2021-02-15 23:17:36'),
(13, 'Deep Fried Chicken Ball', 1, 4500, 3, 1, 'zinmyo', 'Deep Fried Chicken with Cashew Nut@2x.png', '2021-02-15 23:18:23', '2021-02-15 23:18:23'),
(14, 'Sweet & Sour Pork', 2, 4000, 3, 1, 'zinmyo', 'Sweet-n-Sour-Pork@2x.png', '2021-02-15 23:18:53', '2021-02-15 23:18:53'),
(15, 'Stir-Fried Assorted Meats & Vegetables', 8, 4000, 3, 1, 'zinmyo', 'Stir-Fried Assorted Meats & Vegetables@2x.png', '2021-02-15 23:19:44', '2021-02-15 23:19:44'),
(16, 'Sauteed Mushroom', 6, 3000, 3, 1, 'zinmyo', 'Sauteed-Mushroom@2x.png', '2021-02-15 23:20:14', '2021-02-15 23:20:14'),
(17, 'Steamed Rice with Pork Vegetable', 2, 3500, 3, 1, 'zinmyo', 'Steamed Rice with Vegetable@2x.png', '2021-02-15 23:22:31', '2021-02-15 23:22:31'),
(18, 'Chicken Salad', 1, 3500, 3, 1, 'zinmyo', 'Chicken-Salad@2x.png', '2021-02-15 23:23:25', '2021-02-15 23:23:25'),
(19, 'Century Egg Salad', 10, 2500, 3, 1, 'zinmyo', 'Century-Egg-Salad@2x.png', '2021-02-15 23:26:53', '2021-02-16 00:09:55'),
(21, 'Apple Juice', 11, 1500, 5, 2, 'zinmyo', 'Apple@2x.png', '2021-02-16 00:53:01', '2021-02-16 01:16:04'),
(22, 'Avocado Juice', 11, 1600, 5, 2, 'zinmyo', 'Avocado@2x.png', '2021-02-16 01:02:26', '2021-02-16 01:05:23'),
(23, 'Strawberry Smoothies Juice2', 11, 1600, 5, 2, 'zinmyo', 'Mixed Berry Smoothies@2x.png', '2021-02-16 01:15:40', '2021-02-17 16:46:33'),
(24, 'Thai Spicy and Sour Soup', 2, 4000, 4, 1, 'zinmyo', 'Thai-Vegetable-Soup@2x.png', '2021-02-16 11:25:06', '2021-02-16 11:25:06'),
(25, 'Tom Yam Soup', 2, 4000, 4, 1, 'zinmyo', 'Tom-Yam-Soup@2x.png', '2021-02-16 11:26:20', '2021-02-16 11:26:20'),
(27, 'Chicken Kyay-Oh Sichet', 1, 5000, 1, 1, 'zinmyo', 'Chicken Kyay-Oh Sichet@2x.png', '2021-02-16 11:32:34', '2021-02-16 11:32:34'),
(28, 'Chicken Kyay-Oh', 1, 5000, 1, 1, 'zinmyo', 'Chicken Kyay-Oh@2x.png', '2021-02-16 11:54:57', '2021-02-16 11:54:57'),
(29, 'Pork Kyay-Oh', 2, 4800, 1, 1, 'zinmyo', 'Pork Kyay-Oh@2x.png', '2021-02-16 11:55:52', '2021-02-16 11:55:52'),
(30, 'Fish Ball Kyay-Oh', 7, 4800, 1, 1, 'zinmyo', 'Fish Ball Kyay-Oh@2x.png', '2021-02-16 11:56:31', '2021-02-16 11:56:31'),
(31, 'Prawn Kyay-Oh', 4, 5500, 1, 1, 'zinmyo', 'Prawn-Kyay-Oh@2x.png', '2021-02-16 11:58:30', '2021-02-16 11:58:30'),
(32, 'Seafood Kyay-Oh', 3, 5500, 1, 1, 'zinmyo', 'Seafood-Kyay-Oh@2x.png', '2021-02-16 12:01:35', '2021-02-16 12:01:35'),
(33, 'Pork Rib Kyay-Oh', 2, 5500, 1, 1, 'zinmyo', 'Pork Rib Kyay-Oh@2x.png', '2021-02-16 12:03:12', '2021-02-16 12:03:12'),
(34, 'Sichet (Noodle)', 1, 1800, 1, 1, 'zinmyo', 'Sichet (Noodle)@2x.png', '2021-02-16 12:04:18', '2021-02-16 12:04:18'),
(35, 'Steamed Chicken Sichet', 1, 2200, 1, 1, 'zinmyo', 'Steamed Chicken Sichet@2x.png', '2021-02-16 12:04:56', '2021-02-16 12:04:56'),
(36, 'Steamed Pork Rib Sichet', 2, 2200, 1, 1, 'zinmyo', 'Steamed Pork Rib Sichet@2x.png', '2021-02-16 12:06:54', '2021-02-16 12:06:54'),
(37, 'Wanton Sichet', 1, 2200, 1, 1, 'zinmyo', 'Wanton Sichet@2x.png', '2021-02-16 12:07:54', '2021-02-16 12:07:54'),
(38, 'Fish Ball Kyay-Oh Sichet', 7, 4800, 1, 1, 'zinmyo', 'Fish Ball Kyay-Oh Sichet@2x.png', '2021-02-16 12:21:20', '2021-02-16 12:21:20'),
(39, 'Pork Kyay-Oh Sichet', 2, 5000, 1, 1, 'zinmyo', 'Pork Kyay-Oh Sichet@2x.png', '2021-02-16 12:22:12', '2021-02-16 12:22:12'),
(40, 'Pork Rib Kyay-Oh Sichet', 2, 5500, 1, 1, 'zinmyo', 'Pork Rib Kyay-Oh Sichet@2x.png', '2021-02-16 12:23:38', '2021-02-16 12:23:38'),
(41, 'Seafood Kyay-Oh Sichet', 3, 5500, 1, 1, 'zinmyo', 'Seafood Kyay-Oh Sichet@2x.png', '2021-02-16 12:24:42', '2021-02-16 12:24:42'),
(42, 'Prawn Kyay-Oh Sichet', 4, 5500, 1, 1, 'zinmyo', 'Prawn Kyay-Oh Sichet@2x.png', '2021-02-16 12:26:33', '2021-02-16 12:26:33'),
(43, 'Wanton Soup', 1, 2200, 1, 1, 'zinmyo', 'Wanton Soup@2x.png', '2021-02-16 12:27:27', '2021-02-16 12:27:27'),
(44, 'Back Jelly Juice', 11, 1500, 5, 2, 'zinmyo', 'Back Jelly@2x.png', '2021-02-17 16:51:33', '2021-02-17 16:51:33'),
(45, 'Sunkist Juice', 11, 1500, 5, 2, 'zinmyo', 'Sunkist@2x.png', '2021-02-17 19:58:01', '2021-02-17 19:58:01'),
(46, 'Soda Blueberry Juice', 11, 1500, 5, 2, 'zinmyo', 'Soda Blueberry@2x.png', '2021-02-17 19:58:52', '2021-02-17 19:58:52'),
(47, 'Fruit Cocktail Juice', 11, 1500, 5, 2, 'zinmyo', 'Fruit Cocktail@2x.png', '2021-02-17 20:00:01', '2021-02-17 20:00:01'),
(48, 'Pineapple Juice', 11, 1600, 5, 2, 'zinmyo', 'Pineapple@2x.png', '2021-02-17 20:00:43', '2021-02-17 20:00:43'),
(49, 'Prune Juice', 11, 1600, 5, 2, 'zinmyo', 'Prune@2x.png', '2021-02-17 20:01:21', '2021-02-17 20:01:21'),
(50, 'Lime Juice', 11, 1500, 5, 2, 'zinmyo', 'Lime@2x.png', '2021-02-17 20:01:48', '2021-02-17 20:01:48'),
(51, 'Orange Juice', 11, 1600, 5, 2, 'zinmyo', 'Orange@2x.png', '2021-02-17 20:02:31', '2021-02-17 20:02:31'),
(52, 'Strawberry Juice', 11, 1600, 5, 2, 'zinmyo', 'Strawberry Juce@2x.png', '2021-02-17 20:03:13', '2021-02-17 20:03:13'),
(53, 'Sweet lime Juice', 11, 1600, 5, 2, 'zinmyo', 'Sweet line@2x.png', '2021-02-17 20:03:46', '2021-02-17 20:03:46'),
(54, 'Tamarind Juice', 11, 1600, 5, 2, 'zinmyo', 'Tamarind@2x.png', '2021-02-17 20:04:18', '2021-02-17 20:04:18'),
(55, 'Watermelon Juice', 11, 1600, 5, 2, 'zinmyo', 'Watermelon@2x.png', '2021-02-17 20:05:00', '2021-02-17 20:05:00'),
(56, 'Papaya Juice', 11, 1600, 5, 2, 'zinmyo', 'Papaya@2x.png', '2021-02-17 20:05:55', '2021-02-17 20:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `main_ingredient`
--

CREATE TABLE `main_ingredient` (
  `main_ingredient_id` int(11) NOT NULL,
  `main_ingredient_name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_ingredient`
--

INSERT INTO `main_ingredient` (`main_ingredient_id`, `main_ingredient_name`, `created_date`, `modified_date`) VALUES
(1, 'Chicken', '2021-02-15 19:28:26', '2021-02-15 19:28:26'),
(2, 'Pork', '2021-02-15 19:28:26', '2021-02-15 19:28:26'),
(3, 'Seafood', '2021-02-15 19:28:26', '2021-02-15 19:28:26'),
(4, 'Prawn', '2021-02-15 19:28:26', '2021-02-15 19:28:26'),
(5, 'Mutton', '2021-02-15 21:57:56', '2021-02-15 21:57:56'),
(6, 'Vegetables', '2021-02-15 21:57:56', '2021-02-15 21:57:56'),
(7, 'Fish', '2021-02-15 22:02:26', '2021-02-15 22:02:26'),
(8, 'Meats & Vegetables', '2021-02-15 22:49:22', '2021-02-15 22:49:22'),
(9, 'Beef', '2021-02-15 23:26:03', '2021-02-15 23:26:03'),
(10, 'Egg', '2021-02-15 23:26:03', '2021-02-15 23:26:03'),
(11, 'Fruits', '2021-02-16 00:57:38', '2021-02-16 00:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `created_by`, `modified_by`, `created_date`, `modified_date`) VALUES
(1, 'Food', 'zinmyo', '', '2021-02-14 12:23:20', '2021-02-14 12:23:20'),
(2, 'Drink', 'zinmyo', '', '2021-02-14 12:23:20', '2021-02-14 12:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `created_by`, `created_date`, `modified_date`) VALUES
(1, 'Admin', 'zinmyo', '2021-02-19 06:40:32', '2021-02-19 06:40:32'),
(2, 'Manager', 'zinmyo', '2021-02-19 06:41:34', '2021-02-19 06:41:34'),
(3, 'Founder&CEO', 'zinmyo', '2021-02-19 06:42:07', '2021-02-19 06:42:07'),
(4, 'Caisher', 'zinmyo', '2021-02-19 06:42:23', '2021-02-19 06:42:23'),
(5, 'Waiter', 'zinmyo', '2021-02-19 06:42:32', '2021-02-19 06:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `firstname`, `lastname`, `email`, `phone`, `company`, `role_id`, `password`, `image`, `status`, `created_by`, `modified_by`, `created_date`, `modified_date`) VALUES
(3, 'zinmyo', 'swe', 'overmidnight12@gmail.com', '09959806456', 'Huawei Yangon Technologies', 1, 'Abc1234%', 'q1.jpg', 'onjob', 'zinmyo', 'zinmyo', '2021-02-19 23:52:39', '2021-02-19 23:52:39'),
(5, 'rose', '', 'rose@gmail.com', '09772919500', 'Huawei Yangon Technologies', 2, 'Abc1234%', 'rose.jpg', 'onjob', 'zinmyo', 'zinmyo', '2021-02-20 02:01:52', '2021-02-20 02:01:52'),
(6, 'lisa', '', 'lisa@gmail.com', '0991244223', 'Huawei Yangon Technologies', 5, 'Abc1234%', 'check-out-blackpink-lisas-hot-looks-6.jpg', 'onjob', 'zinmyo', 'zinmyo', '2021-02-20 13:53:10', '2021-02-20 13:53:10'),
(7, 'jennie', '', 'jennie@gmail.com', '09956847990', 'Huawei Yangon Technologies', 4, 'Abc1234%', 'fe3eb0a2fa9b9ee0c7f106382183cd57.jpg', 'onjob', 'zinmyo', 'zinmyo', '2021-02-20 17:03:43', '2021-02-20 17:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `staff_address`
--

CREATE TABLE `staff_address` (
  `staff_address_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `zip` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff_address`
--

INSERT INTO `staff_address` (`staff_address_id`, `staff_id`, `location`, `city`, `state`, `address1`, `address2`, `zip`, `created_by`, `modified_by`, `created_date`, `modified_date`) VALUES
(1, 3, 'MM', 'Yangon', 'Yangon', 'No.241 Aung Thiri Street', 'Dawbon Township, Myo Thit Quarter', 112, 'zinmyo', 'zinmyo', '2021-02-20 00:47:16', '2021-02-20 00:47:16'),
(3, 5, 'KR', 'Seoul', 'Seoul', 'YG Tower, Seoul', '', 112345, 'zinmyo', 'zinmyo', '2021-02-20 02:04:22', '2021-02-20 02:04:22'),
(4, 6, 'TH', 'Bangkok', 'Bangkok', 'no 1141,B Pattaya street', '', 117, 'zinmyo', 'zinmyo', '2021-02-20 13:53:34', '2021-02-20 13:53:34'),
(5, 7, 'KR', 'Seoul', 'Seoul', 'YG Tower, Seoul', '', 112345, 'zinmyo', 'zinmyo', '2021-02-20 17:04:11', '2021-02-20 17:04:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`attribute_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `main_ingredient`
--
ALTER TABLE `main_ingredient`
  ADD PRIMARY KEY (`main_ingredient_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staff_address`
--
ALTER TABLE `staff_address`
  ADD PRIMARY KEY (`staff_address_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `attribute_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `main_ingredient`
--
ALTER TABLE `main_ingredient`
  MODIFY `main_ingredient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff_address`
--
ALTER TABLE `staff_address`
  MODIFY `staff_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
