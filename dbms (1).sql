-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2018 at 05:47 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `dept`, `id`) VALUES
('computer@djsce.com', '12fH.DuHowWHk', 'Computer', 7),
('chemical@djsce.com', '12caNGmeSAnzs', 'Chemical', 8),
('extc@djsce.com', '12UFVExxCBiZQ', 'EXTC', 9),
('mechanical@djsce.com', '12Tm4EsIVkNZo', 'Mechanical', 10),
('it@djsce.com', '12.s1443X0ivA', 'IT', 11);

-- --------------------------------------------------------

--
-- Table structure for table `applied_comp`
--

CREATE TABLE `applied_comp` (
  `c_id` int(255) NOT NULL,
  `sapid` bigint(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied_comp`
--

INSERT INTO `applied_comp` (`c_id`, `sapid`, `id`) VALUES
(19, 600061, 41),
(19, 600028, 42),
(19, 700028, 43),
(19, 900063, 44),
(19, 700033, 45),
(18, 600020, 49),
(19, 600020, 50),
(22, 600020, 51),
(21, 600020, 52),
(19, 700032, 53),
(21, 700032, 54),
(23, 700032, 55),
(26, 700032, 56),
(19, 800011, 57),
(19, 800063, 58),
(19, 700096, 59),
(19, 74859, 60),
(23, 600060, 62),
(24, 600060, 63),
(18, 600061, 64);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `contact` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `intake` int(25) NOT NULL,
  `c_id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`contact`, `name`, `intake`, `c_id`, `email`, `password`, `type`) VALUES
(85236, 'Google India', 7, 19, 'google@gmail.com', '12JrYNCcVUHEo', 'Web developer'),
(12345, 'Smokescreen', 17, 20, 'smokescreen@yahoo.in', '12vwwWHP9G2Hc', 'Networking'),
(23458, 'CAVS', 1, 21, 'cavs@gmail.com', '12QU6ODZZQXqw', 'Big Data Analyst'),
(12780, 'Microsoft', 16, 22, 'microsoft@outlook.com', '12zK8p3wxzV72', 'Server Management'),
(76896, 'Tesla', 9, 23, 'contact@tesla.us', '12vyZAVvBEcv6', 'Chassis Expert'),
(12098, 'Cisco', 13, 24, 'contact@cisco.us', '12ZmlIogyZ6vc', 'Router programming'),
(16578, 'Studysid', 9, 25, 'studysid@yahoo.in', '12Z7S/crAKLw2', 'Php developer'),
(76804, 'Chemz', 6, 26, 'help@chemz.com', '12OmGD097ECBY', 'Cartonator Expert');

-- --------------------------------------------------------

--
-- Table structure for table `selected_stud`
--

CREATE TABLE `selected_stud` (
  `sapid` int(255) NOT NULL,
  `c_id` int(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selected_stud`
--

INSERT INTO `selected_stud` (`sapid`, `c_id`, `id`) VALUES
(600060, 19, 36),
(600061, 19, 37),
(700033, 19, 39),
(600061, 18, 41),
(900063, 19, 42);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `email` varchar(25) NOT NULL,
  `s_id` int(25) NOT NULL,
  `cgpa` float DEFAULT NULL,
  `dept` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` int(15) DEFAULT NULL,
  `name` varchar(25) NOT NULL,
  `sapid` bigint(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`email`, `s_id`, `cgpa`, `dept`, `password`, `contact`, `name`, `sapid`) VALUES
('parthm@gmail.com', 70, 8.9, 'Mechanical', '12rxtfbHZSO6w', 14526, 'Parth Mehta', 600060),
('pujanm@ymail.com', 71, 8.89, 'EXTC', '125956kRHNmN6', 15498, 'Pujan Mehta ', 600061),
('ayush@hotmail.com', 72, 6.9, 'Chemical', '12Txmv.wKwQjQ', 16582, 'Ayush Kothari', 600051),
('fenil@gmail.com', 73, 10, 'Computer', '12yYeiFjsBPYs', 62539, 'Fenil Doshi', 600020),
('palak@gmail.com', 74, 5.6, 'Computer', '125mH5.MRVCQA', 14289, 'Palak Chauhan', 600011),
('jimit@outlook.com', 75, 6.3, 'Chemical', '12eCdhhNbNwFI', 15986, 'Jimit Gandhi', 600028),
('purviljain@gmail.com', 77, 10, 'Computer', '12pqW/TCwhREI', 32569, 'Purvil Jain', 600039),
('mahima@yahoo.com', 78, 6.5, 'IT', '12kJMfvBYkMoI', 74125, 'Mahima Gupta', 700033),
('apurva@ymail.com', 79, 8.6, 'Computer', '12V4SsAbvZYIA', 12563, 'Apurva Chaubal', 700032),
('aashi@gmail.com', 80, 5.6, 'IT', '12cbLRsKzzWPU', 85236, 'Aashi Dani', 700028),
('raj@gmail.com', 81, 5.6, 'IT', '121QLbZwEa14I', 63258, 'Raj Kothari', 800011),
('navkar@gmail.com', 82, 7.3, 'IT', '125WQYPtLTbew', 32569, 'Navkar Shah', 800063),
('manali@gmail.com', 83, 6.5, 'IT', '12d9pV8/swG3k', 12536, 'Manali Vichare', 700096),
('kinjal@gmail.com', 84, 6.3, 'Mechanical', '12lqElmc1Ra72', 63528, 'Kinjal Lapasiya', 900063),
('riken@hotmail.com', 85, 5.6, 'Mechanical', '12BfSVejt3xeg', 25149, 'Riken Gala', 900636),
('parth@gmail.com', 86, 9.6, 'Computer', '12rxtfbHZSO6w', 36897, 'Parth Shah', 78569),
('aakash@ymail.com', 87, 6.3, 'Chemical', '12VXinmN0Gegc', 36259, 'Aakash Dhruva', 63985),
('sumit@ymail.com', 88, 6.3, 'Chemical', '12n9Kou2Fp7Cc', 85265, 'Sumit Goradia', 96327),
('vishwa@icloud.com', 89, 6.35, 'EXTC', '12iGCnuBwHLe2', 41529, 'Vishwa Shah', 74859),
('rachit@gmail.com', 90, 5.6, 'EXTC', '12E0WJIs8fLts', 632194, 'Rachit Doshi', 693581),
('riya@outlook.com', 91, 6.9, 'EXTC', '12i3pdHhtS10A', 74853, 'Riya Seth', 74125);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_comp`
--
ALTER TABLE `applied_comp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `selected_stud`
--
ALTER TABLE `selected_stud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `applied_comp`
--
ALTER TABLE `applied_comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `selected_stud`
--
ALTER TABLE `selected_stud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
