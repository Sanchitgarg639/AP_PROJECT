-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2025 at 04:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobseek`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `id` int(255) NOT NULL,
  `user_num` varchar(255) NOT NULL,
  `job_id` int(255) NOT NULL,
  `DATETIME` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `discp` varchar(255) NOT NULL,
  `leastyr` varchar(255) NOT NULL,
  `DATETIME` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`id`, `title`, `company`, `location`, `salary`, `discp`, `leastyr`, `DATETIME`) VALUES
(1, 'Typescripting', 'typescriber', 'online', 'Rs.10k to Rs.35k', 'voice to text, typing job. ', '1', '2025-04-21 06:10:31'),
(2, 'Lead Software Engineer', 'Capital One', 'East London', '$108,177 - $108,177', 'Back End/Full Stack, Do you love building and pioneering in the technology space? At Capital One, you\'ll', '3', '2025-04-21 07:51:10'),
(4, 'Senior Software Engineer', 'Capital One', 'east london', 'Rs.100k to Rs.500k', 'software developer for our company', '3', '2025-04-21 16:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `userimg` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `skill1` varchar(255) NOT NULL,
  `skill2` varchar(255) NOT NULL,
  `skill3` varchar(255) NOT NULL,
  `skill4` varchar(255) NOT NULL,
  `softwear1` varchar(255) NOT NULL,
  `softwear2` varchar(255) NOT NULL,
  `softwear3` varchar(255) NOT NULL,
  `hobby1` varchar(255) NOT NULL,
  `hobby2` varchar(255) NOT NULL,
  `hobby3` varchar(255) NOT NULL,
  `main_skill` varchar(255) NOT NULL,
  `main_skill_discp` varchar(255) NOT NULL,
  `personal` varchar(255) NOT NULL,
  `deg1` varchar(255) NOT NULL,
  `uni1` varchar(255) NOT NULL,
  `deg2` varchar(255) NOT NULL,
  `uni2` varchar(255) NOT NULL,
  `deg3` varchar(255) NOT NULL,
  `uni3` varchar(255) NOT NULL,
  `topic1` varchar(255) NOT NULL,
  `work1` varchar(255) NOT NULL,
  `topic2` varchar(255) NOT NULL,
  `work2` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `DATETIME` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `fname`, `lname`, `userimg`, `mail`, `phone`, `address`, `website`, `skill1`, `skill2`, `skill3`, `skill4`, `softwear1`, `softwear2`, `softwear3`, `hobby1`, `hobby2`, `hobby3`, `main_skill`, `main_skill_discp`, `personal`, `deg1`, `uni1`, `deg2`, `uni2`, `deg3`, `uni3`, `topic1`, `work1`, `topic2`, `work2`, `pass`, `DATETIME`) VALUES
(3, 'Sanchit', 'Garg', 'person_img/carousel (1).jpg', 'sanchitgarg639@gmail.com', '8267852795', 'G-91 Nehru Colony Dehradun - 248001 Uttarakhand India', 'https://jobseek.com', 'Web Dev', 'Graphic Designer', 'Product Management', ' ', 'Git', 'Canva', 'Xampp', 'Art', 'Badminton', 'Stock Analysis', 'Web Dev', 'Web development has turned out to be one of the most dynamic and in-demand fields in today\'s technological world. Web development encompasses the entire process of building and maintaining websites, ranging from simple static pages to intricate e-commerce', 'Web development has turned out to be one of the most dynamic and in-demand fields in today\'s technological world. Web development encompasses the entire process of building and maintaining websites, ranging from simple static pages to intricate e-commerce', '2024-2028 : B.Tech CSE AI/ML', 'IIIT NGP', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '$2y$10$psJEbG3w1JFxMyHmHxhryuhW70PK7C5rMR95dWDMT5RP0u6yEJHQi', '2025-04-17 14:56:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
