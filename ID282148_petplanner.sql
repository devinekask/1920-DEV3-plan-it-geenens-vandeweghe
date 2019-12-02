-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: ID282148_petplanner.db.webhosting.be
-- Generation Time: Dec 02, 2019 at 07:29 AM
-- Server version: 5.7.28-31
-- PHP Version: 7.1.25-1+0~20181207224605.11+jessie~1.gbpf65b84

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ID282148_petplanner`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventtypes`
--

CREATE TABLE `eventtypes` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventtypes`
--

INSERT INTO `eventtypes` (`id`, `type`) VALUES
(1, 'Vet'),
(2, 'Medication/Pills'),
(3, 'Vaccination');

-- --------------------------------------------------------

--
-- Table structure for table `petevents`
--

CREATE TABLE `petevents` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `petid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `type` int(11) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petevents`
--

INSERT INTO `petevents` (`id`, `name`, `description`, `petid`, `date`, `type`, `location`) VALUES
(1, 'Meet the vet', 'Take Pushkin', 2, '2019-11-29 10:27:00', 1, 'Roeselare'),
(2, 'test', 'test', 1, '2019-11-06 09:00:00', 1, ''),
(3, 'Give pill ', 'Pill 12', 2, '2020-01-09 12:35:00', 3, ''),
(15, 'Pill 12', 'Give pills to cat', 81, '2019-12-20 00:00:00', 2, 'Roeselare'),
(16, '', '', 8, '0000-00-00 00:00:00', 1, 'Here');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `owner` varchar(255) NOT NULL,
  `chipid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `name`, `gender`, `type`, `birthday`, `owner`, `chipid`) VALUES
(2, 'Basiel', 1, 2, '2019-11-13', 'Christine', 363973),
(4, 'Oskaar', 1, 3, '2019-11-05', 'Miet', 833),
(6, 'Hairy Dogball', 1, 2, '2019-01-09', 'Test', 1),
(8, 'Hondman', 0, 4, '2019-11-30', 'Maxime', 17),
(80, 'BLUB', 0, 5, '2019-12-11', 'WOEF', 12),
(81, 'Nohr', 1, 3, '2019-12-19', 'Maxime', 2147483647),
(87, 'tweet', 0, 1, '2019-12-13', 'Nathan', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pettypes`
--

CREATE TABLE `pettypes` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pettypes`
--

INSERT INTO `pettypes` (`id`, `type`) VALUES
(1, 'Bird'),
(2, 'Dog'),
(3, 'Cat'),
(4, 'Horse'),
(5, 'Fish'),
(6, 'Other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventtypes`
--
ALTER TABLE `eventtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petevents`
--
ALTER TABLE `petevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pettypes`
--
ALTER TABLE `pettypes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventtypes`
--
ALTER TABLE `eventtypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petevents`
--
ALTER TABLE `petevents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `pettypes`
--
ALTER TABLE `pettypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
