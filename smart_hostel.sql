-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 01:16 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` varchar(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `absent` int(3) NOT NULL,
  `late` int(3) NOT NULL,
  `allowance` int(10) NOT NULL,
  `deduction` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `absent`, `late`, `allowance`, `deduction`) VALUES
('1', '0', 1, 10, 10000, 200),
('1', 'Nasif', 1, 2, 1000, 900),
('E-2022-3', 'cook_r', 1, 7, 1000, 200);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(15) NOT NULL,
  `name` varchar(80) NOT NULL,
  `fathername` varchar(80) NOT NULL,
  `mothername` varchar(80) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `fathername`, `mothername`, `dob`, `gender`, `designation`, `salary`) VALUES
('A-2022-1', 'AL SHAKIB E ELAHI', 'Rafiqul Islam', 'Israt Zahan', '2000-09-09', 'male', 'CEO', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` varchar(15) NOT NULL,
  `branchname` varchar(32) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(32) NOT NULL,
  `salary` int(10) NOT NULL,
  `branch` varchar(32) NOT NULL,
  `role` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `fathername`, `mothername`, `dob`, `gender`, `designation`, `salary`, `branch`, `role`) VALUES
('E-2022-1', 'ss', 'aa', 'aa', '2022-11-30', '', 'Manager', 80000, '01', ''),
('E-2022-2', 'HTC', 'zzz', 'zzz', '2022-11-09', '', 'General Employee', 9000, '01', ''),
('E-2022-3', 'Shakib', 'Rafiqul Islam', 'Israt Jahan', '2022-11-10', '', 'Manager', 90000, '02', ''),
('E-2022-4', 'AL SHAKIB E ELAHI', 'Rafiqul Islam', 'Israt Jahan', '2017-06-25', '', 'Manager', 90000, '01', ''),
('E-2022-5', 'NasifurRahman', 'HABIBUR RAHMAN', 'NURGES ARA LIPA', '2022-12-22', '', 'Service Man', 600000, '', ''),
('E-2022-6', 'Nafis', 'Zabbar', 'Nipa', '0200-06-19', 'male', 'Accounts', 30000, '01', 'account');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` int(15) NOT NULL,
  `name` varchar(32) NOT NULL,
  `price` int(8) NOT NULL,
  `availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `name`, `price`, `availability`) VALUES
(1, 'GYM', 800, 'No'),
(2, 'wifi', 900, 'Yes'),
(6, 'samsung', 200, 'No'),
(23, 'HTC', 6000, 'No'),
(25, 'GYM', 5000, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `id` varchar(15) NOT NULL,
  `type` varchar(32) NOT NULL,
  `roomno` varchar(15) NOT NULL,
  `uid` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(32) NOT NULL,
  `dashboard` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `phone`, `username`, `password`, `role`, `dashboard`) VALUES
('A-2022-1', 'alshakibeelahi@gmail.com', '01911306409', 'ase_elahi', '11111111@', 'admin', 'admin'),
('E-2022-1', 'nasif@gmail.com', '01798552909', 'nas_f', '22222222@', 'manager', 'manager'),
('E-2022-3', 'cooker@gmail.com', '01798110908', 'cook_r', '33333333@', 'cooker', 'cooker'),
('E-2022-4', 'acc@gmail.com', '01898888909', 'nsf_k', '44444444@', 'account', 'account');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomno` varchar(15) NOT NULL,
  `roomtype` varchar(32) NOT NULL,
  `branchname` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomno`, `roomtype`, `branchname`) VALUES
('b508', 'DELUX', 'Branch 01'),
('D558', 'DELUX', 'Branch 02'),
('DN05', 'AC', 'Branch 01'),
('l01', 'AC', 'Branch 01'),
('S001', 'AC', 'Branch 01'),
('s002', 'AC', 'Branch 01'),
('s003', 'AC', 'Branch 01'),
('s004', 'Non AC', 'Branch 02'),
('s005', 'AC', 'Branch 01'),
('s006', 'AC', 'Branch 01'),
('S101', 'AC', 'Branch 01');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `roomtype` varchar(20) NOT NULL,
  `roomprice` int(8) NOT NULL,
  `residentcapacity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usedfacility`
--

CREATE TABLE `usedfacility` (
  `id` varchar(15) NOT NULL,
  `uid` varchar(15) NOT NULL,
  `startdate` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `name` varchar(70) NOT NULL,
  `fathername` varchar(70) NOT NULL,
  `mothername` varchar(70) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `fathername`, `mothername`, `dob`, `gender`) VALUES
('', 'NABILUL HASAN', 'MD. ABDUR ROUF', 'NURGES ARA LIPA', '2022-12-12', 'male'),
('', 'Konka', 'xyzz', 'xyzzzz', '2022-12-29', 'female'),
('', ' NABovic', 'HABIBUR RAHMAN', 'NURGES ARA LIPA', '2022-12-15', 'male'),
('', 'zzz', 'vvyx', 'iio', '2022-12-21', 'female'),
('', 'll', 'xyzz', 'xyzzzz', '2022-12-21', 'male'),
('', 'ee', 'HABIBUR RAHMAN', 'xyzzzz', '2022-12-14', 'male'),
('', 'A-2022-1', 'HABIBUR RAHMAN', 'NURGES ARA LIPA', '2022-12-13', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomno`);

--
-- Indexes for table `usedfacility`
--
ALTER TABLE `usedfacility`
  ADD PRIMARY KEY (`id`,`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
