-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 08:41 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `candi`
--

CREATE TABLE `candi` (
  `Name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `enr_no` varchar(12) NOT NULL,
  `event` varchar(25) NOT NULL,
  `branch` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candi`
--

INSERT INTO `candi` (`Name`, `email`, `enr_no`, `event`, `branch`) VALUES
('swa', 'wsp@gn.com', '12', '1', 'ec'),
('Swapnil Sahu', 'swapnilsahu4@gmail.com', '60', '3', 'cse'),
('', '', '', 'Choose Event', 'Selec'),
('test', 'test@gm', '0225', '1', 'cse'),
('test', 'test@gm', '0225', '1', 'cse'),
('test', 'test@gm', '0225', '1', 'cse'),
('test', 'test@gm', '0225', '1', 'cse'),
('test', 'test@gm', '0225', '1', 'cse');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
