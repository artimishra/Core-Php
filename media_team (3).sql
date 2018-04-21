-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 09:21 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codev4jm_1assam`
--

-- --------------------------------------------------------

--
-- Table structure for table `media_team`
--

CREATE TABLE `media_team` (
  `id` int(2) UNSIGNED NOT NULL,
  `types` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `orgname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `site` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `media_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` int(10) NOT NULL,
  `media_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `expectations` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `profile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `media_team`
--

INSERT INTO `media_team` (`id`, `types`, `orgname`, `site`, `city`, `media_name`, `designation`, `email`, `mobile`, `media_type`, `expectations`, `logo`, `profile`, `status`) VALUES
(1, 'Editor', 'abcds', 'http://newspprt3002.com', 'mumbai', 'arhi', 'manager', 'mishra.ashok1010@gma', 2147483647, '', '', '852524185_', '852524185_160464.jpg', 0),
(12, 'Staff Writer', 'Big', 'http://newspprt3002.com', 'Bangalore', 'Arti', 'Worker', 'mishra.ashok1010@gma', 878999, '', '', '852524185_', '852524185_160464.jpg', 0),
(15, 'Reporter', 'abcds', 'http://newspprt3002.com', 'pune', 'dvds', 'manager', 'mishra.arti1010@gmai', 788999, 'net', '', '852524185_', '852524185_160464.jpg', 0),
(16, 'Reporter', 'abcds', 'http://newspprt3002.com', 'pune', 'dvds', 'manager', 'mishra.arti1010@gmai', 788999, 'net', '', '852524185_', '852524185_160464.jpg', 1),
(17, 'Company', 'dada', 'http://newspprt3002.com', 'mathura', 'saf', 'fdhsgjsag', 'mishra.ashok1010@gma', 65458, 'net', 'java', '', '852524185_160464.jpg', 1),
(18, 'Company', 'guru', 'http://newspprt3002.com', 'mumbai', 'arhi', 'manager', 'mishra.ashok1010@gma', 657687, 'net', 'c', '852524185_', '852524185_160464.jpg', 1),
(19, 'Company', 'niceppl', 'http://newspprt3002.com', 'raigad', 'Abhi', 'manager', 'mishra.ashok1010@gma', 2147483647, '', '', 'book.jpg', 'book.jpg', 0),
(23, 'Editor', 'abcd', 'http://newspprt3002.com', 'pune', 'Random', 'pO', 'mishra.ashok1010@gma', 2147483647, '', '', 'book1.jpg', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media_team`
--
ALTER TABLE `media_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media_team`
--
ALTER TABLE `media_team`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
