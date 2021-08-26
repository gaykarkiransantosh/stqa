-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 08:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vailogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_internships`
--

CREATE TABLE `all_internships` (
  `id` int(255) NOT NULL,
  `email_id` text NOT NULL,
  `internship_title` text NOT NULL,
  `des` text NOT NULL,
  `branch` text NOT NULL,
  `apply_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_internships`
--

INSERT INTO `all_internships` (`id`, `email_id`, `internship_title`, `des`, `branch`, `apply_date`) VALUES
(1, 'asp@somaiya.com', 'Web Developer', 'Crerate a website', 'EXTc', '2020-11-10'),
(2, 'yash@gmail.com', 'Django developer', 'Help in Backend using Django Framework', 'Comps', '2020-11-17'),
(3, 'yash@gmail.com', 'Django developer', 'Help in Backend using Django Framework', 'Comps', '2020-11-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_internships`
--
ALTER TABLE `all_internships`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_internships`
--
ALTER TABLE `all_internships`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
