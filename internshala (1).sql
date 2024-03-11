-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 08:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` int(50) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `stipend` int(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `employer`, `title`, `description`, `city`, `stipend`, `start_date`, `end_date`) VALUES
(15, 'dell', 'Technicion', 'Repairs mostly', 'Delhi', 1000, '2017-05-06', '2017-06-06'),
(16, 'maq', 'Systems Engineer', 'something something you know', 'Delhi', 6000, '2017-05-06', '2017-06-06'),
(17, 'amazon', 'Java Developer', 'Make Java applications', 'Mumbai', 40000, '2017-05-06', '2017-06-07'),
(18, 'amazon', 'Front-end Developer', 'Build the core functionality of the website', 'Surat', 0, '2017-03-06', '2017-03-20'),
(24, 'amazon', 'Back End Developer', 'Does the server things', 'Mumbai', 15000, '2017-05-15', '2017-06-10'),
(25, 'synergy', 'Junior AWS Developer', 'Developing Industry leading softwares', '', 52000, '2024-03-21', '2024-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `salary` int(50) NOT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `employer`, `title`, `description`, `city`, `salary`, `join_date`) VALUES
(1, 'Amazon', 'AWS Cloud Engineer', 'CLoud managment', 'Mumbai', 600000, '0000-00-00'),
(2, 'TCS', 'Software Developer', 'Software Developer', 'Mumbai', 800000, '2024-03-28'),
(3, 'Vipro', 'Software Tester', 'Testing Software', 'Delhi', 8000000, '2024-03-31'),
(4, 'TCS', 'HR Manager', 'Recruit Skillful LCandidates', 'Mumbai', 150000, '2024-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `email`, `password`, `type`) VALUES
(1, 'Hewlett Packard', 'HP', 'careers@hp.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, 'John Doe', 'John', 'johndoe@sql.com', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(3, 'Amazon Web Services', 'amazon', 'careers@aws.com', 'amazon', 1),
(5, 'Satyam', 'stym06', 'satyammast@gmail.com', '0f2cdafc6b1adf94892b17f355bd9110', 0),
(6, 'Maq', 'maq', 'careers@maq.com', 'b71a16a73d79968d2c5c2375995709bb', 1),
(7, 'Dell', 'dell', 'careers@dell.com', '51a32d722dd3b81772a68c7449d5e62d', 1),
(8, 'Microsoft', 'ms', 'careers@ms.com', '5f532a3fc4f1ea403f37070f59a7a53a', 1),
(9, 'Kraken', 'rage_warrior', 'kraken@underworld.com', '80cd46c824f8e86438816e6e562e969f', 0),
(10, 'Ashish', 'ashish', 'ashish@gmail.com', '7b69ad8a8999d4ca7c42b8a729fb0ffd', 0),
(11, 'Abhinav', 'krotos', 'abhinav@krotos.com', '8417bf3b2e5c0462e25b3d899804a800', 0),
(12, 'Tata Consultancy PVT LTD', 'TCS', 'tcs@gmail.com', 'b0b6fc80d101f0a12c9c78bb76ad1660', 1),
(13, 'Om', 'om', 'om@gmail.com', 'd58da82289939d8c4ec4f40689c2847e', 0),
(14, 'Parva', 'parva', 'parvavashi@gmail.com', '230cb01deae6a02aa6ed9b76e47d3479', 1),
(15, 'Synergy Pvt Ltd', 'synergy', 'synergy@amazon.com', '23cf8c9d8fe247247a4ef4fd17e5f3b1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_applications`
--

CREATE TABLE `student_applications` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_applications`
--

INSERT INTO `student_applications` (`id`, `name`, `email`, `employer`, `job_title`) VALUES
(1, 'John', 'john@mic.com', 'HP', 'HP Officer'),
(6, 'John', 'john@applu.cmo', 'amazon', 'C++ developer'),
(7, 'Satyam Raj', 'satyammast@gmail.com', 'dell', 'Technicion'),
(8, 'John', 'john@applu.cmo', 'maq', 'Systems Engineer'),
(12, 'satyam', 'satyammast@gmail.com', 'HP', 'HP Officer'),
(13, 'John', 'john@mic.com', 'dell', 'Technicion'),
(14, 'Kraken', 'kraken@underworld.com', 'HP', 'HP Officer'),
(15, 'Abhinav', 'abhinav@krotos.com', 'maq', 'Systems Engineer'),
(16, 'OM', 'omdesai1@gmail.com', 'dell', 'Technicion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_applications`
--
ALTER TABLE `student_applications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_applications`
--
ALTER TABLE `student_applications`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
