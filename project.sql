-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 08:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `com_text` varchar(500) NOT NULL,
  `com_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `anw_com` varchar(200) NOT NULL,
  `com_status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `com_text`, `com_date`, `anw_com`, `com_status`) VALUES
(10, 17, 'zsddzg', '2019-11-12 20:32:03', 'ddddd', '1'),
(11, 17, 'sacasf', '2019-11-12 20:33:12', 'czcdv', '1'),
(12, 17, 'sssssssssssssssss', '2019-11-12 20:35:30', 'kjkk', '1'),
(13, 17, 'asdad', '2019-11-12 19:55:42', '', ''),
(14, 17, 'etaerg', '2019-11-12 19:56:05', '', ''),
(15, 17, 'sddazd', '2019-11-12 19:57:49', '', '0'),
(16, 30, 'ไม่มีเงินกินข้าว', '2019-11-20 04:33:05', 'จะให้ทำไงล่ะ', '1'),
(17, 17, 'dgrh', '2019-12-20 08:55:21', '', '0'),
(18, 17, 'มายัง รอนานแล้วนะจ๊ะ', '2019-12-20 08:55:37', '', '0'),
(19, 17, '', '2020-01-22 06:37:54', '', '0'),
(20, 17, 'dfgerge', '2020-01-22 06:37:59', '', '0'),
(21, 17, 'dfgerge', '2020-01-22 06:38:37', '', '0'),
(22, 17, 'wedgerger', '2020-01-22 06:41:19', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `donatetions`
--

CREATE TABLE `donatetions` (
  `do_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `do_namber` decimal(10,2) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `do_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `do_pic` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donatetions`
--

INSERT INTO `donatetions` (`do_id`, `project_id`, `user_id`, `do_namber`, `d_name`, `do_date`, `do_pic`) VALUES
(115, 68, 22, '200.00', 'นายภาคภูมิ มีแสน', '2020-01-20 16:28:19', 'hot.png');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `project_id` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `address_in` text NOT NULL,
  `checkbox` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kru`
--

CREATE TABLE `kru` (
  `kru_id` int(11) NOT NULL,
  `kru_name` text NOT NULL,
  `kru_lastname` text NOT NULL,
  `kru_address` text NOT NULL,
  `kru_email` text NOT NULL,
  `kru_phone` varchar(20) NOT NULL,
  `kru_img` varchar(200) NOT NULL,
  `kru_school` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kru`
--

INSERT INTO `kru` (`kru_id`, `kru_name`, `kru_lastname`, `kru_address`, `kru_email`, `kru_phone`, `kru_img`, `kru_school`) VALUES
(1, 'erg', 'ertgrt', '52832', 'qwdfertrh', '25356', '', 'wdfg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_topic` varchar(200) NOT NULL,
  `news_detail` text NOT NULL,
  `news_date` date NOT NULL,
  `news_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_topic`, `news_detail`, `news_date`, `news_img`) VALUES
(16, 'ลองข่าวมาโชว์', 'ลองดูว่าจะเข้าไหมละ', '2020-01-25', '75.jpg'),
(17, 'ทดลองรอบ 2', 'ลองมาด้วยใจ', '2020-01-22', 'cart.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `project_title` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project_detail` varchar(200) NOT NULL,
  `project_pic` varchar(100) NOT NULL,
  `project_date` date NOT NULL DEFAULT current_timestamp(),
  `project_manager` varchar(30) NOT NULL,
  `account_number` varchar(11) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_bank` varchar(50) NOT NULL,
  `project_money` int(50) NOT NULL,
  `project_process` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `user_id`, `project_title`, `project_detail`, `project_pic`, `project_date`, `project_manager`, `account_number`, `account_name`, `account_bank`, `project_money`, `project_process`) VALUES
(68, 17, 'หัวขอทดลองที่2', 'ทดสอบรายละเอียดโครงการ 2', '10.jpg.jfif', '2020-01-31', 'นาย วันชัย ก็มีอยู่', '112-116-482', 'ด.ช วันเกิด', 'กรุงไทย', 200, ''),
(69, 17, 'ทดสอบโครงการ 1', 'ทดสอบรายละเอียดโครงการ 1', '7.jpg', '2020-01-31', 'นาย คงศักดิ์ มังมี', '775-125-784', 'ด.ญ ชวี เกษา', 'กสิกรไทย', 1500, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `email` text DEFAULT NULL,
  `img` varchar(200) NOT NULL,
  `password` text DEFAULT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `phone`, `email`, `img`, `password`, `status`) VALUES
(17, 'dodo12123', 'hothhhq', '0123456789', 'dodo@hotmail.com', '', 'eb62f6b9306db575c2d596b1279627a4', '1'),
(22, 'admin', 'adminfa', '', 'admin@hotmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '0'),
(30, 'พินทุสร', 'จันทร์อ้วน', '', 'pinthusorn@gmail.com', '', 'b59c67bf196a4758191e42f76670ceba', '1'),
(31, 'pm2', 'server', '', 'pm2@gmail.com', '', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
(32, 'ดนุศร', 'สุขดี', '', 'pm3@gmail.com', '', '827ccb0eea8a706c4c34a16891f84e7b', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `donatetions`
--
ALTER TABLE `donatetions`
  ADD PRIMARY KEY (`do_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kru`
--
ALTER TABLE `kru`
  ADD PRIMARY KEY (`kru_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `donatetions`
--
ALTER TABLE `donatetions`
  MODIFY `do_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `kru`
--
ALTER TABLE `kru`
  MODIFY `kru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `donatetions`
--
ALTER TABLE `donatetions`
  ADD CONSTRAINT `donatetions_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `donatetions_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
