-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2024 at 08:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passion-driven`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`) VALUES
(1, 'admin', 'admin1'),
(2, 'admin', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `message1` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name1`, `email1`, `message1`) VALUES
(5, 'winslause busale shioso', 'wenbusale383@gmail.com', 'try again'),
(6, 'joseph', 'joseph3@gmail.com', 'testin if email is working well');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `description`, `image_path`) VALUES
(3, 'one', 'one', 'IMG-20200928-WA0006.jpg'),
(4, 'two', 'two', 'IMG-20240924-WA0049.jpg'),
(5, 'kibra feeding program', 'we have conducted ..jdddcycvdcdcvcvcxcc\r\n\r\ncdcdcdccdcdcddcddcd', 'IMG_3022.jpg'),
(6, 'kibra feeding program', 'hgvfcfcgxdxxgkknnnbbbcxdfxfxxxzz', 'IMG-20210601-WA0034.jpg'),
(7, 'thirsd', 'dueetfedtwfwygisdisdsiddgf ddgdsgsd  edhedeecuxxgxc', 'IMG-20240924-WA0048.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `phone1` varchar(100) NOT NULL,
  `role1` varchar(100) NOT NULL,
  `description1` varchar(500) NOT NULL,
  `image1` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email1`, `name1`, `phone1`, `role1`, `description1`, `image1`) VALUES
(7, 'brian236@gmail.com', 'john', '07667525570', 'worker', 'Adhering to legal and regulatory requirements: Ensuring that the charity complies with all relevant laws and regulations.', 'IMG_1007.JPG'),
(8, 'phillip@gmail.com', 'philip kinywa', '07634353637', 'Director', 'Overseeing the organization\'s overall direction: Ensuring that the charity\'s activities align with its mission and vision.\r\n', 'IMG_1040.JPG'),
(9, 'james@gmail.com', 'james', '0769525570', 'finance', 'it is working. The header location refresh', 'IMG_1007.JPG'),
(10, 'jacson@gmail.com', 'jackson jackson', '07666666', 'research manager', 'Adhering to ', 'IMG_1007.JPG'),
(11, 'andrew@gmail.com', 'andrew andreas', '098777654', 'Operations and Management', 'Overseeing the organization\'s overall direction: Ensuring that the charity\'s activities align with its mission and vision.\r\n', 'IMG_1007.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
