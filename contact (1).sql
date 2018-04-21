-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 09:23 AM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `form_id` int(1) NOT NULL,
  `news_title` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_cat` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `press_release` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logo_press` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sender_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sender_email` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sender_phone` int(10) NOT NULL,
  `organization_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `conference_orgname` varchar(20) NOT NULL,
  `conf_location` varchar(20) NOT NULL,
  `address_venue` varchar(20) NOT NULL,
  `date_conf` date NOT NULL,
  `time_conf` int(10) NOT NULL,
  `objective` varchar(10) NOT NULL,
  `host_name` varchar(20) NOT NULL,
  `conf_email` varchar(20) NOT NULL,
  `conf_phone` int(10) NOT NULL,
  `sname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `semail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sphone` int(10) NOT NULL,
  `purpose` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `organ_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `form_id`, `news_title`, `news_cat`, `section`, `press_release`, `logo_press`, `sender_name`, `sender_email`, `sender_phone`, `organization_name`, `conference_orgname`, `conf_location`, `address_venue`, `date_conf`, `time_conf`, `objective`, `host_name`, `conf_email`, `conf_phone`, `sname`, `semail`, `sphone`, `purpose`, `organ_name`) VALUES
(5, 2, 'arti', 'Achievement', 'City', 'gm,m,', '', 'abcd', 'http://newsport3002.', 568999, 'dfrtg', '', '', '', '0000-00-00', 0, '', '', '', 0, '', '', 0, '', ''),
(9, 1, '', '', '', '', '', '', '', 0, '', 'abhi', 'Kerala', 'dssfbd', '2018-03-22', 21, 'Social', 'host_name', 'http://newsport3002.', 54768, '', '', 0, '', ''),
(14, 3, '', '', '', '', '', '', '', 0, '', '', '', '', '0000-00-00', 0, '', '', '', 0, 'good', 'mishra.arti1010@gamil.com', 46374584, 'Social', 'gdzbzb'),
(22, 2, 'fvbnk', 'Business', 'Sports', 'vhvm,', '', 'dertygg', 'http://newsport3002.', 67855, 'gthi', '', '', '', '0000-00-00', 0, '', '', '', 0, '', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
