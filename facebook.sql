-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 авг 2018 в 21:38
-- Версия на сървъра: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook`
--

-- --------------------------------------------------------

--
-- Структура на таблица `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_date` date NOT NULL,
  `user_id` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `comment_date`, `user_id`) VALUES
(1, 'Yes it is!\r\n', '2018-03-22', '1'),
(2, 'Regards!\r\n', '2018-05-14', '2'),
(3, 'Thank you very much!\r\n', '2018-06-01', '3'),
(4, 'You are welcome!\r\n', '2018-06-01', '1'),
(69, ' To comment or not to comment', '2018-08-18', '1'),
(70, ' Shalalalala', '2018-08-18', '1'),
(71, ' Comment this post', '2018-08-18', '1'),
(72, ' New comment', '2018-08-18', '1'),
(73, ' Comment', '2018-08-18', '1'),
(74, ' Adding a new comment', '2018-08-18', '2'),
(75, 'new comment', '2018-08-18', '2'),
(76, ' Comment 13', '2018-08-18', '2'),
(77, ' this is a new comment', '2018-08-18', '2'),
(78, ' Comment 4567', '2018-08-18', '1'),
(79, ' This is the newest comment!..', '2018-08-18', '1'),
(80, ' This is a comment!', '2018-08-18', '2'),
(81, ' This is a comment', '2018-08-18', '2'),
(82, ' Comment', '2018-08-18', '2'),
(83, 'Hurricane Bret was the first of five Category 4 hurricanes in the 1999 ', '2018-08-18', '3');

-- --------------------------------------------------------

--
-- Структура на таблица `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` date NOT NULL,
  `user_id` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `posts`
--

INSERT INTO `posts` (`post_id`, `post_content`, `post_date`, `user_id`) VALUES
(1, 'It\'s a very beautiful day, here in Vratsa!\r\n', '2018-03-22', '2'),
(2, 'It\'s a beautiful day!\r\n', '2018-05-14', '3'),
(3, 'Happy birthday to my best friend, Gosho!\r\n', '2018-01-06', '1'),
(10, ' This is a new post', '2018-08-18', '1'),
(11, 'We are the champions!', '2018-08-18', '1'),
(12, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget maximus risus. Nulla molestie nunc et nibh tincidunt ultricies. Etiam nec est quis mauris viverra sodales. Nam vestibulum lorem lorem, nec facilisis mi mollis quis. Proin pellentesque aliquam ligula, nec fringilla eros mollis sagittis. Mauris fermentum augue eu nunc elementum auctor eget id nisi. Aenean tempor vestibulum consectetur. Fusce feugiat venenatis urna, eleifend fermentum ex vehicula id. Praesent ultrices urna eget iaculis hendrerit. Etiam venenatis magna erat. Praesent non sem a tortor dignissim vehicula. Pellentesque commodo diam id purus eleifend, et vestibulum nisi elementum. Praesent laoreet lacus vitae eros efficitur, eget cursus elit varius. Nulla vestibulum faucibus eros id maximus. Aliquam tempus dictum pellentesque.', '2018-08-18', '1'),
(13, 'Sed non elit ligula. Suspendisse dui leo, dignissim quis iaculis vitae, aliquam quis ipsum. Duis non felis neque. In mi nibh, egestas id porttitor ac, vehicula ut neque. Proin tincidunt, augue ac aliquam viverra, dolor mi egestas lectus, eget molestie leo massa id lorem. Duis ornare nisl finibus tellus bibendum, et ultrices quam condimentum. Aliquam et posuere urna. In aliquet id lectus bibendum euismod. Sed euismod a arcu nec aliquet. Morbi feugiat dignissim consequat. Nam at metus ligula.', '2018-08-18', '2'),
(14, ' Cras commodo, eros et ullamcorper efficitur, neque mauris tincidunt nisl, vitae luctus arcu erat a ante. Nunc vitae urna quam. Vestibulum leo lacus, tincidunt vitae enim eu, cursus vulputate mauris. Aliquam a quam a ipsum pellentesque convallis. Nulla facilisi. Mauris a fringilla ex. Aenean interdum convallis leo, at venenatis nibh feugiat ut. Sed id dui dictum, euismod turpis a, interdum mauris.', '2018-08-18', '2'),
(15, ' Hurricane Bret was the first of five Category 4 hurricanes in the 1999 Atlantic hurricane season and the first tropical cyclone since Hurricane Jerry in 1989 to make landfall in Texas at hurricane intensity. After forming from a tropical wave on August 18, Bret began to track northward, and on August 21 it underwent rapid intensification. It attained its peak intensity with winds of 145 mph (230 km/h) and a barometric pressure of 944 mbar (hPa; 27.88 inHg). ', '2018-08-18', '3');

-- --------------------------------------------------------

--
-- Структура на таблица `posts_comments`
--

CREATE TABLE `posts_comments` (
  `post_comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `posts_comments`
--

INSERT INTO `posts_comments` (`post_comment_id`, `post_id`, `comment_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 3, 4),
(74, 3, 69),
(75, 2, 70),
(76, 2, 71),
(77, 3, 72),
(78, 3, 73),
(79, 0, 74),
(80, 0, 75),
(81, 1, 76),
(82, 10, 77),
(83, 3, 78),
(84, 10, 79),
(85, 12, 80),
(86, 1, 81),
(87, 13, 82),
(88, 15, 83);

-- --------------------------------------------------------

--
-- Структура на таблица `rating_info`
--

CREATE TABLE `rating_info` (
  `rating_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_action` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `rating_info`
--

INSERT INTO `rating_info` (`rating_id`, `post_id`, `user_id`, `rating_action`) VALUES
(22, 3, 1, 'like'),
(23, 3, 1, 'like'),
(24, 3, 1, 'like'),
(25, 3, 1, 'like'),
(26, 3, 1, 'like'),
(27, 3, 1, 'like'),
(28, 3, 1, 'like'),
(29, 3, 1, 'like'),
(30, 3, 1, 'like'),
(31, 3, 1, 'like'),
(32, 3, 1, 'like'),
(33, 3, 1, 'like'),
(34, 3, 1, 'like'),
(35, 3, 1, 'like'),
(36, 3, 1, 'like'),
(37, 1, 1, 'like'),
(38, 1, 1, 'like'),
(39, 1, 1, 'like'),
(40, 1, 1, 'like'),
(41, 1, 2, 'like'),
(42, 1, 2, 'like'),
(43, 1, 2, 'like'),
(44, 1, 2, 'like'),
(45, 10, 2, 'like'),
(46, 10, 2, 'like'),
(47, 10, 2, 'like'),
(48, 10, 2, 'like'),
(49, 3, 1, 'like'),
(50, 3, 1, 'like'),
(51, 3, 1, 'like'),
(52, 3, 1, 'like'),
(53, 3, 1, 'like'),
(54, 3, 1, 'like'),
(55, 3, 1, 'like'),
(56, 3, 1, 'like'),
(57, 3, 1, 'like'),
(58, 3, 1, 'like'),
(59, 3, 1, 'like'),
(60, 3, 1, 'like'),
(61, 3, 1, 'like'),
(62, 3, 1, 'like'),
(63, 3, 1, 'like'),
(64, 3, 1, 'like'),
(65, 3, 1, 'like'),
(66, 3, 1, 'like'),
(67, 3, 1, 'like'),
(68, 3, 1, 'like'),
(69, 3, 1, 'like'),
(70, 3, 1, 'like'),
(71, 3, 1, 'like'),
(72, 3, 1, 'like'),
(73, 3, 1, 'like'),
(74, 3, 1, 'like'),
(75, 3, 1, 'like'),
(76, 3, 1, 'like'),
(77, 3, 1, 'like'),
(78, 3, 1, 'like'),
(79, 3, 1, 'like'),
(80, 3, 1, 'like'),
(81, 3, 1, 'like'),
(82, 3, 1, 'like'),
(83, 3, 1, 'like'),
(84, 3, 1, 'like'),
(85, 3, 1, 'like'),
(86, 3, 1, 'like'),
(87, 3, 1, 'like'),
(88, 3, 1, 'like'),
(89, 3, 1, 'like'),
(90, 3, 1, 'like'),
(91, 3, 1, 'like'),
(92, 3, 1, 'like'),
(93, 3, 1, 'like'),
(94, 3, 1, 'like'),
(95, 12, 2, 'like'),
(96, 12, 2, 'like'),
(97, 10, 2, 'like'),
(98, 10, 2, 'like'),
(99, 10, 2, 'like'),
(100, 10, 2, 'like'),
(101, 10, 2, 'like'),
(102, 15, 3, 'like'),
(103, 15, 3, 'like'),
(104, 15, 3, 'like'),
(105, 15, 3, 'like');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'ivan', '123'),
(2, 'pesho', '456'),
(3, 'gosho', '789');

-- --------------------------------------------------------

--
-- Структура на таблица `users_info`
--

CREATE TABLE `users_info` (
  `info_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `surname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `info` text NOT NULL,
  `picture` varchar(256) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users_info`
--

INSERT INTO `users_info` (`info_id`, `name`, `surname`, `email`, `address`, `info`, `picture`, `user_id`) VALUES
(1, 'Ivan', 'Ivanov', 'ivan@fake.bg', 'Vratsa', 'Hi, I am from Vratsa!\r\n', 'img/ivan_pic.jpg', 1),
(2, 'Petar', 'Petrov', 'pesho@fake.bg', 'Lom', 'Hi, I am from Lom!', 'img/pesho_pic.jpg', 2),
(3, 'Georgi', 'Georgiev ', 'gosho@fake.bg', 'Ruse', 'Hi, I am from Ruse!', 'img/gosho_pic.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`(255));

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`(255));

--
-- Indexes for table `posts_comments`
--
ALTER TABLE `posts_comments`
  ADD PRIMARY KEY (`post_comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `post_id_2` (`post_id`);

--
-- Indexes for table `rating_info`
--
ALTER TABLE `rating_info`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts_comments`
--
ALTER TABLE `posts_comments`
  MODIFY `post_comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `rating_info`
--
ALTER TABLE `rating_info`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
