-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 08:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `convex`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Cinema` varchar(50) NOT NULL,
  `Movie` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `SeatType` varchar(20) NOT NULL,
  `BookID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Name`, `Email`, `Cinema`, `Movie`, `Date`, `Time`, `SeatType`, `BookID`) VALUES
('ahmed', 'ahmed123@gmail.com', 'D-box', 'Spongebob ', '', '', '', 275789465),
('ahmed', 'ahmed123@gmail.com', 'VIP', 'Black widow', '', '', '', 909378389);

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `working hrs` varchar(50) NOT NULL,
  `phone num` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`name`, `address`, `working hrs`, `phone num`) VALUES
('cairo festival city', 'Nasr City, Cairo Governorate', 'from 9 am to 4 am', 226168241),
('city stars', 'Masaken Al Mohandesin, Nasr City, Cairo Governorat', 'from 9 am to 4 am', 224802014),
('point 90 ', 'Point90 mall Fifth Settlement In front of the Amer', 'from 9 am to 4 am', 1289300032),
('sun city', ' El-Nasr Rd, Sheraton Al Matar, El Nozha, Cairo Go', 'from 9 am to 4 am ', 1208113590);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone Number` int(11) NOT NULL,
  `Massage` longtext NOT NULL,
  `ContactID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `name` varchar(30) NOT NULL,
  `released date` date NOT NULL,
  `language` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`name`, `released date`, `language`) VALUES
('   I Still Believe', '2020-02-26', 'english '),
(' Sonic the Hedgehog', '2020-02-12', 'english '),
('1917', '2020-01-08', 'english '),
('bad boys', '2020-01-16', 'english '),
('black widow', '2020-05-01', 'english '),
('no time to die', '2020-04-20', 'english '),
('scoob', '2020-05-21', 'english '),
('the invisible man', '2020-02-20', 'english '),
('the spongebob movie', '2020-05-20', 'english '),
('Top Gun: Maverick', '2020-06-25', 'english ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Username`, `Email`, `password`) VALUES
('admin', 'admin', 'admin@convex.com', 'admin'),
('ahmed ', 'ahmedd', 'ahmed123@gmail.com', '12345678'),
('ayah', 'ayahmohamed', 'ayah123@gmail.com', '12345678'),
('gaber', 'gaberahmed', 'gaber123@gmail.com', '12345678'),
('karem', 'karemmohamed', 'kareem123@gmail.com', '12345678'),
('mahmoud', 'moudy', 'mahmoud123@gmail.com', '1230'),
('marwan', 'marwanmohamed', 'marwan123@gmail,com', '12345678'),
('mostafa', 'mostafamohamed', 'mostafa123@gmail.com', '12345678'),
('sara', 'saraahmed', 'sara123@gmail.com', '12345678'),
('youssef', 'youssef', 'youssef123@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
