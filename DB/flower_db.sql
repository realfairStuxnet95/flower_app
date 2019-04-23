-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2019 at 01:17 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

CREATE TABLE `flowers` (
  `id` int(11) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `price` varchar(200) NOT NULL,
  `items` int(100) NOT NULL,
  `poster` varchar(1024) NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(1024) NOT NULL,
  `status` varchar(50) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`id`, `name`, `price`, `items`, `poster`, `description`, `tags`, `status`, `regDate`) VALUES
(4, 'Elyse Love', '3000', 100, '843876025.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'beautiful flower', 'ACTIVE', '2019-04-04 18:16:42'),
(5, 'ariane', '5000', 12, '1962223286.jpg', 'ninziz', 'beautiful flower', 'ACTIVE', '2019-04-05 12:53:24'),
(6, 'Master Flower', '2500', 20, '1051699619.jpg', 'Uru rurabo ni bien', 'beautiful flower', 'ACTIVE', '2019-04-11 16:30:02'),
(10, 'BirthDay Flower', '5000', 12, '164912596.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'beautiful flower', 'ACTIVE', '2019-04-22 08:14:22'),
(11, 'St Valentin Flower', '3000', 325, '18798300.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'beautiful flower', 'ACTIVE', '2019-04-22 08:15:40'),
(12, 'Wedding Flowers', '6000', 12, '1128398241.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'beautiful flower', 'ACTIVE', '2019-04-22 08:16:54'),
(13, 'Elyse Love', '4000', 12, '94726619.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'beautiful flower', 'ACTIVE', '2019-04-22 08:18:02'),
(14, 'New Flower', '2500', 12, '997820704.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'beautiful flower', 'ACTIVE', '2019-04-22 08:19:11'),
(15, 'Ceremony Flowers', '10000', 12, '1648277745.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'beautiful flower', 'ACTIVE', '2019-04-22 08:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `flowers_images`
--

CREATE TABLE `flowers_images` (
  `id` int(11) NOT NULL,
  `flower_id` int(100) NOT NULL,
  `image_path` varchar(1024) NOT NULL,
  `status` varchar(200) NOT NULL,
  `uploadDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flowers_images`
--

INSERT INTO `flowers_images` (`id`, `flower_id`, `image_path`, `status`, `uploadDate`) VALUES
(1, 3, '1024487127.jpg', 'ACTIVE', '2019-04-04 13:55:35'),
(2, 3, '2126094955.jpg', 'ACTIVE', '2019-04-04 13:55:35'),
(3, 2, '621331863.jpg', 'ACTIVE', '2019-04-04 14:20:57'),
(4, 2, '469982356.jpg', 'ACTIVE', '2019-04-04 14:20:57'),
(5, 2, '256044887.jpg', 'ACTIVE', '2019-04-04 14:20:57'),
(6, 4, '1563351484.jpg', 'ACTIVE', '2019-04-04 18:17:33'),
(7, 4, '710744235.jpg', 'ACTIVE', '2019-04-04 18:17:33'),
(8, 4, '729600791.jpg', 'ACTIVE', '2019-04-04 18:17:33'),
(9, 4, '329545926.jpg', 'ACTIVE', '2019-04-04 18:17:34'),
(10, 5, '1682079935.jpg', 'ACTIVE', '2019-04-05 13:29:41'),
(11, 5, '1302841814.jpg', 'ACTIVE', '2019-04-05 13:29:41'),
(12, 5, '1017337150.jpg', 'ACTIVE', '2019-04-05 13:29:41'),
(13, 6, '819294971.jpg', 'ACTIVE', '2019-04-11 16:30:22'),
(14, 6, '1545580236.jpg', 'ACTIVE', '2019-04-11 16:30:22'),
(15, 6, '1274827314.jpg', 'ACTIVE', '2019-04-11 16:30:22'),
(16, 6, '160192155.jpg', 'ACTIVE', '2019-04-11 16:30:22'),
(17, 7, '1888181396.jpg', 'ACTIVE', '2019-04-11 16:55:40'),
(18, 9, '2142659678.jpg', 'ACTIVE', '2019-04-11 17:31:25'),
(19, 15, '1617603718.jpg', 'ACTIVE', '2019-04-22 08:23:47'),
(20, 15, '804940668.jpg', 'ACTIVE', '2019-04-22 08:23:47'),
(21, 15, '1524901391.jpg', 'ACTIVE', '2019-04-22 08:23:47'),
(22, 15, '1622702076.jpg', 'ACTIVE', '2019-04-22 08:23:47'),
(23, 14, '1856551037.jpg', 'ACTIVE', '2019-04-22 08:24:10'),
(24, 14, '741821812.jpg', 'ACTIVE', '2019-04-22 08:24:10'),
(25, 14, '479362332.jpg', 'ACTIVE', '2019-04-22 08:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `flower_id` int(100) NOT NULL,
  `comment` text NOT NULL,
  `names` varchar(1024) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `status` varchar(50) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `flower_id`, `comment`, `names`, `email`, `status`, `regDate`) VALUES
(1, 0, 'sssssssssssss', 'manikiza samuel', 'realfair95@gmail.com', 'PENDING', '2019-04-04 19:31:07'),
(2, 0, 'Uru rurabo ni fake sana', 'manikiza samuel', 'realfair95@gmail.com', 'PENDING', '2019-04-04 19:50:21'),
(3, 4, 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'manikiza samuel', 'realfair95@gmail.com', 'PENDING', '2019-04-04 19:58:13'),
(4, 2, 'gh,gguglk', 'fhh', 'yjgjgj', 'PENDING', '2019-04-22 13:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE `system_users` (
  `user_id` int(100) NOT NULL,
  `username` varchar(1024) NOT NULL,
  `names` varchar(1024) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `user_type` int(5) NOT NULL,
  `user_branch` int(100) NOT NULL,
  `status` int(5) NOT NULL,
  `last_login` varchar(200) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`user_id`, `username`, `names`, `email`, `password`, `phone`, `user_type`, `user_branch`, `status`, `last_login`, `regDate`) VALUES
(1, 'admin', '', 'admin@flower.rw', '123456', '+250789998734', 1, 0, 1, '', '2019-02-28 07:20:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flowers_images`
--
ALTER TABLE `flowers_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flowers`
--
ALTER TABLE `flowers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `flowers_images`
--
ALTER TABLE `flowers_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
