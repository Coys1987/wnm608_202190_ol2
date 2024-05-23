-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2024 at 03:43 AM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Coy608Art`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'high_performance_laptop ', 600.00, 'laptops_&_computer', '2024-05-05 13:12:57', '2024-05-05 13:12:57', 'Laptops designed for high-speed processing and multitasking, ideal for professionals and creatives.\r\n\r\n', 'laptop_thum.jpeg', 'laptop_1.jpeg,laptop_2.jpeg,laptop_3.jpeg'),
(2, 'smart_desk	', 1200.00, 'office_furniture', '2024-05-12 13:38:30', '2024-05-12 13:38:30', 'Adjustable standing desk with wireless charging and touch controls.		', 'smart_desk_thum.jpeg	', 'smart_desk_1.jpeg, smart_desk_2.jpeg, smart_desk_3.jpeg'),
(3, 'ergonomic_office_chair	', 350.00, 'office_furniture', '2024-05-05 13:45:27', '2024-05-05 13:45:27', 'Chair designed for comfort and support, adjustable for various postures.	', 'ergonomic_office_chair_thum.jpeg	', 'ergonomic_office_chair_1.jpeg, ergonomic_office_chair_2.jpeg, ergonomic_office_chair_3.jpeg'),
(4, 'wireless_multi_device_keyboard', 100.00, 'computer_accessories ', '2024-05-05 13:45:27', '2024-05-05 13:45:27', 'Keyboard capable of connecting with multiple devices for streamlined workflow.		', 'wireless_multi-device_keyboard_thum.jpeg	', 'wireless_multi-device_keyboard_1.jpeg, wireless_multi-device_keyboard_2.jpeg, wireless_multi-device_keyboard_3.jpeg'),
(5, 'advanced_monitor_setup ', 800.00, 'computer_accessories ', '2024-05-05 13:45:27', '2024-05-05 13:45:27', 'Ultra-wide, curved monitor for enhanced visual workspace ', 'advanced_monitor_setup_thum.jpeg', 'advanced_monitor_setup_1.jpeg, advanced_monitor_setup_2.jpeg, advanced_monitor_setup_3.jpeg'),
(6, 'noise_canceling_headphones ', 250.00, 'audio_equipment', '2024-05-05 13:45:27', '2024-05-05 13:45:27', 'Headphones designed to block out external noise and improve concentration. ', 'noise-canceling_headphones_thum.jpeg', 'noise-canceling_headphones_1.jpeg, noise-canceling_headphones_2.jpeg, noise-canceling_headphones_3.jpeg'),
(7, 'high_resolution_webcam ', 150.00, 'computer_accessories ', '2024-05-05 13:45:27', '2024-05-05 13:45:27', 'Webcam for clear, high-quality video in virtual meetings and collaborations. ', 'high-resolution_webcam_thum.jpeg', 'high-resolution_webcam_1.jpeg, high-resolution_webcam_2.jpeg, high-resolution_webcam_3.jpeg '),
(8, 'portable_ssd', 200.00, 'storage_solutions ', '2024-05-05 13:45:27', '2024-05-05 13:45:27', 'High-speed, large capacity external SSD for quick and reliable data transfer. ', 'portable_ssd_thum.jpeg ', 'portable_ssd_1.jpeg, portable_ssd_2.jpeg, portable_ssd_3.jpeg'),
(9, 'smartwatch_with_productivity_apps ', 300.00, 'wearable_technology', '2024-05-12 01:38:30', '2024-05-12 01:38:30', 'Smartwatch integrating health tracking with productivity applications. ', 'smartwatch_with_productivity_apps_thum.jpeg ', 'smartwatch_with_productivity_apps_1.jpeg, smartwatch_with_productivity_apps_2.jpeg, smartwatch_with_productivity_apps_3.jpeg '),
(10, 'wireless_charging_station ', 100.00, 'mobile_accessories', '2024-05-05 13:45:27', '2024-05-05 13:45:27', 'Charging station for multiple devices, reducing cable clutter. ', 'wireless_charging_station_thum.jpeg', 'wireless_charging_station_1.jpeg, wireless_charging_station_2.jpeg, wireless_charging_station_3.jpeg '),
(11, 'programmable_coffee_maker ', 250.00, 'kitchen_appliances ', '2024-05-05 13:45:27', '2024-05-05 13:45:27', 'Coffee maker that can be programmed to brew coffee at set times. ', 'programmable_coffee_maker_thum.jpeg', 'programmable_coffee_maker_1.jpeg, programmable_coffee_maker_2.jpeg, programmable_coffee_maker_3.jpeg'),
(12, 'smart_pen_&_notebook ', 180.00, 'office_supplies ', '2024-05-05 13:45:27', '2024-05-05 13:45:27', 'Digital pen that digitizes notes from a specialized notebook. ', 'smart_pen_and_notebook_thum.jpeg ', 'smart_pen_and_notebook_1.jpeg, smart_pen_and_notebook_2.jpeg, smart_pen_and_notebook_3.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
