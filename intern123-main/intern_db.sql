-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 11:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_applicants`
--

CREATE TABLE `accepted_applicants` (
  `accept_id` int(11) NOT NULL,
  `int_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `applicant_email` text NOT NULL,
  `provider_email` text NOT NULL,
  `intern_details` text NOT NULL,
  `accept_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accepted_applicants`
--

INSERT INTO `accepted_applicants` (`accept_id`, `int_id`, `fname`, `lname`, `applicant_email`, `provider_email`, `intern_details`, `accept_date`) VALUES
(4, 1, 'Shreya', 'Kulkarni', 'kulkarni.sr@somaiya.edu', 'ram.patel@somaiya.edu', 'Crerate a website using php', '2020-11-22 18:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(20) NOT NULL,
  `admin_email` varchar(40) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `admin_email`, `admin_pass`) VALUES
('admin1', 'admin@somaiya.edu', 'admin@01');

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
(1, 'ram.patel@somaiya.edu', 'Web Developer', 'Crerate a website using php', 'ETRX', '2020-11-10'),
(2, 'madhura.gupta@somaiya.edu', 'Django developer', 'Help in Backend using Django Framework ', 'COMPS', '2020-11-17'),
(3, 'radhika.patil@somaiya.edu', 'Django developer', 'Help in Backend using Django Framework', 'COMPS', '2020-11-17'),
(4, 'tanvi.ahuja@somaiya.edu', 'App development', 'Create an app according to the instructions given', 'ETRX', '2020-12-02'),
(9, 'madhura.gupta@somaiya.edu', 'Web development', 'Crerate a website using php and mysql for college attendance', 'COMPS', '2020-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

CREATE TABLE `contact_enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `enquiry_from` text NOT NULL,
  `enquiry_email` text NOT NULL,
  `enquiry_subject` text NOT NULL,
  `enquiry_mssg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_enquiry`
--

INSERT INTO `contact_enquiry` (`enquiry_id`, `enquiry_from`, `enquiry_email`, `enquiry_subject`, `enquiry_mssg`) VALUES
(1, 'Shreya Kulkarni', 'kulkarni.sr@somaiya.edu', 'test mail message', 'Great Work!'),
(2, 'Vaibhavi Kundle', 'vaibhavi.kundle@somaiya.edu', 'Enquiry mssge test', 'Nice job!');

-- --------------------------------------------------------

--
-- Table structure for table `internship_apply`
--

CREATE TABLE `internship_apply` (
  `apply_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `sem` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `int_id` int(11) NOT NULL,
  `applicant_email` text NOT NULL,
  `date_applied` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('NA','Accept','Reject') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship_apply`
--

INSERT INTO `internship_apply` (`apply_id`, `fname`, `lname`, `sem`, `file`, `int_id`, `applicant_email`, `date_applied`, `status`) VALUES
(10, 'Shreya', 'Kulkarni', '5', 'trial_intern.docx', 1, 'kulkarni.sr@somaiya.edu', '2020-11-21 20:02:48', 'Accept'),
(15, 'Laxmi', 'Vidya', '3', 'trial_intern.docx', 4, 'laxmi.vidya@somaiya.edu', '2020-11-21 20:03:40', 'NA'),
(16, 'Vaibhavi', 'Kundle', '5', 'trial_intern.docx', 2, 'vaibhavi.kundle@somaiya.edu', '2020-11-22 00:28:49', 'NA'),
(17, 'Shreya', 'Kulkarni', '5', 'trial_intern.docx', 3, 'kulkarni.sr@somaiya.edu', '2020-11-22 22:02:03', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userpass` varchar(8) NOT NULL,
  `user_type` enum('student','teacher','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`user_id`, `username`, `userpass`, `user_type`) VALUES
(2, 'kklooo', 'lkErr345', 'student'),
(3, 'lppoll', 'kjhrr345', 'student'),
(4, 'polll', 'jaghty44', 'student'),
(8, 'Shreyak', 'Ploo1234', 'student'),
(9, 'kapadiaj', 'Jashk#01', 'student'),
(10, 'tanvi12', 'Tanvi@12', 'student'),
(12, 'VaibhaviK', 'Loop1234', 'student'),
(13, 'LaxmiV', 'Deep1234', 'student'),
(14, 'radhika.patil', 'Patil#22', 'teacher'),
(15, 'rampatel', 'Rampat#1', 'teacher'),
(16, 'tusharp', 'Oops1234', 'student'),
(17, 'madhurag', 'Tool1234', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `signin_data`
--

CREATE TABLE `signin_data` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userpass` varchar(8) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `rollnum` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `pno` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `num_of_internships` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin_data`
--

INSERT INTO `signin_data` (`fname`, `lname`, `username`, `userpass`, `branch`, `rollnum`, `dob`, `email`, `pno`, `gender`, `address`, `num_of_internships`) VALUES
('Vaibhavi', 'Kundle', 'VaibhaviK', 'Loop1234', 'IT', '1814127', '2000-09-19', 'vaibhavi.kundle@somaiya.edu', 1234567891, 'female', 'Sasffg', 1),
('Jash', 'Kapadia', 'kapadiaj', 'Jashk#01', 'EXTC', '1813022', '2000-07-02', 'jash.kapadia@somaiya.edu', 1234567891, 'male', '105,kloo,Mumbai(E)', 0),
('Shreya', 'Kulkarni', 'Shreyak', 'Ploo1234', 'IT', '1814129', '2001-03-11', 'kulkarni.sr@somaiya.edu', 1234567891, 'female', 'xyz,street,Mumbai', 2),
('Laxmi', 'Vidya', 'LaxmiV', 'Deep1234', 'COMPS', '1811022', '2000-10-03', 'laxmi.vidya@somaiya.edu', 2147483647, 'female', 'Lppeerr,street,mumbai', 1),
('Tushar', 'Patel', 'tusharp', 'Oops1234', 'MECH', '1815002', '2000-09-07', 'tushar.patel@somaiya.edu', 1234567891, 'male', 'A102,lake view society, xyz street, Mumbai(W)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teachers_signin`
--

CREATE TABLE `teachers_signin` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userpass` varchar(8) NOT NULL,
  `position` varchar(40) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `faculty_num` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `working_addr` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers_signin`
--

INSERT INTO `teachers_signin` (`fname`, `lname`, `username`, `userpass`, `position`, `branch`, `faculty_num`, `dob`, `email_id`, `pno`, `gender`, `working_addr`) VALUES
('Radhika', 'Patil', 'radhika.patil', 'Patil#22', 'assnprof', 'COMPS', '1190324', '1982-07-02', 'radhika.patil@somaiya.edu', '1234567891', 'female', 'K.J.Somaiya College of enginee'),
('Ram', 'Patel', 'rampatel', 'Rampat#1', 'prof', 'ETRX', '1200456', '1982-02-16', 'ram.patel@somaiya.edu', '1234567891', 'female', 'K.J.Somaiya College of enginee'),
('Tanvi', 'Ahuja', 'tanvi12', 'Tanvi@12', 'assocprof', 'ETRX', '1200043', '1975-05-26', 'tanvi.ahuja@somaiya.edu', '1234567891', 'female', 'Morning hills, M.J circle, Mum'),
('Madhura', 'Gupta', 'madhurag', 'Tool1234', 'assocprof', 'COMPS', '1763456', '1983-02-02', 'madhura.gupta@somaiya.edu', '1234567892', 'female', 'K.J.Somaiya College of enginee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted_applicants`
--
ALTER TABLE `accepted_applicants`
  ADD PRIMARY KEY (`accept_id`);

--
-- Indexes for table `all_internships`
--
ALTER TABLE `all_internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `internship_apply`
--
ALTER TABLE `internship_apply`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepted_applicants`
--
ALTER TABLE `accepted_applicants`
  MODIFY `accept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `all_internships`
--
ALTER TABLE `all_internships`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `internship_apply`
--
ALTER TABLE `internship_apply`
  MODIFY `apply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `login_data`
--
ALTER TABLE `login_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
