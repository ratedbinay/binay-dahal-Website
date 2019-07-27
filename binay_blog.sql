-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 07:42 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `binay_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblblog`
--

CREATE TABLE `tblblog` (
  `SN` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Image` blob NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Tags` varchar(100) NOT NULL,
  `Details` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblog`
--

INSERT INTO `tblblog` (`SN`, `Title`, `Date`, `Image`, `Category`, `Tags`, `Details`) VALUES
(1, 'This is test title', '2019-07-02', 0x41543141323931322e4a5047, 'Movie, Story', 'asg', 'dfhgjhgfsdgsfsdfgjh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblblog`
--
ALTER TABLE `tblblog`
  ADD PRIMARY KEY (`SN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
