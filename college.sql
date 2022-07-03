-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 09:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `pass`) VALUES
('', '', ''),
('2SD19CS001', 'ABHIJEET ANAND', 'abhijeet'),
('2SD19CS002', 'ABHISHEK PATIL', 'abhishek'),
('2SD19CS005', 'ADITI DUDALKAR', 'aditi'),
('2SD19CS006', 'AFZAL AHMED PINJAR', 'afzal'),
('2SD19CS007', 'AISHWARYA KITTUR', 'aishwarya'),
('2SD19CS010', 'AKASH MUGALI', 'akash'),
('2SD19CS011', 'AKASH SUNAGAR', 'akash'),
('2SD19CS014', 'AMAN KUMAR RANA', 'aman'),
('2SD19CS017', 'NAGA ROHAN AMUDELA', 'naga'),
('2SD19CS018', 'ANANYA GOUDAR', 'ananya'),
('2SD19CS020', 'ANUSHA JOSHI', 'anusha'),
('2SD19CS022', 'ANUSHKA', 'anushka'),
('2SD19CS024', 'ARATI HOTKAR', 'arati'),
('2SD19CS025', 'ARYAN TRIVEDI', 'aryan'),
('2SD19CS026', 'ASHITA', 'ashita'),
('2SD19CS029', 'BHIMSEN N K', 'bhimsen'),
('2SD19CS030', 'CHANNABASAV SAJJAN', 'channabasav'),
('2SD19CS036', 'G SHREYAS', 'shreyas'),
('2SD19CS040', 'HOLAGUNDI RASHMI', 'holagundi'),
('2SD19CS044', 'KARTHIK MAHALE', 'karthik'),
('2SD19CS046', 'KARTIK BHAT', 'kartik'),
('2SD19CS047', 'KAVYA D', 'kavya'),
('2SD19CS050', 'KIRAN POORNA VISHNU', 'kiran'),
('2SD19CS056', 'MAHIMA NAIK', 'mahima'),
('2SD19CS057', 'MANJUNATH CHAWAN', 'manjunath'),
('2SD19CS060', 'MOGILLAPALLI INDHU', 'MOGILLAPALLI'),
('2SD19CS079', 'Praveen Pragya', 'praveen');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
