-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 12:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(70) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`name`, `city`, `area`, `contact`) VALUES
('amanush', 'Dhaka', 'Uganda', '01521202799'),
('Bangladesh Red Crescent Society', 'Dhaka', '7, 5 Aurangajeb Rd, Dhaka', '029139940'),
('Mukti Blood Bank', 'Dhaka,1205', 'Shafiullah Road', '028624249'),
('Alif Blood Bank And Transfusion Centre', 'Dhaka', 'West Panthapath', '01712392923'),
('Quantum Blood Bank', 'Dhaka', 'Shantinagar', '09341441'),
('Sandhani ', 'Dhaka', 'Dhaka Medical College', '029668690'),
('Thalassemia ', 'Rajshahi', 'Katakhali', '400668'),
('Sandhani', 'Barisal', ' Banaripara', '029668690'),
('Mukti Blood Bank', 'Cumilla', 'Barura', '028624249'),
('Thalassemia', 'Rangpur', 'Mithapukur', '0248316116');

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `cname` varchar(50) NOT NULL,
  `ccity` varchar(50) NOT NULL,
  `carea` varchar(50) NOT NULL,
  `org` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`cname`, `ccity`, `carea`, `org`, `date`) VALUES
('Badhan', 'Rajshahi', 'Durgapur ', 'Badhan', '5/10/2020-5/20/20'),
('Bangladesh Scout seminar hall', 'Dhaka', 'Dhaka 1205', 'Bangladesh Scout ', '09/09/2020-09/30/2020'),
('Bloodman', 'Rangpur', 'Rangpur Sadar.', 'Bloodman', '5/10/2020-5/20/20'),
('Give and Take blood', 'Dhaka', 'uganda', 'sondhani', '4/11/20-8/11/20'),
('Quantum Blood Bank', 'Dhaka', 'Shilpacharya Zainul Abedin Road, Shantinagar.', 'Quantum', '08/09/2020-12/08/2020'),
('Quantum Lab', 'Barisal', 'Babuganj', 'Quantum Lab', '08/09/2020-12/08/2020'),
('Sandhani', 'Dhaka', ' 33/2 Nilkhet', 'Sandhani', '5/10/2020-5/20/20'),
('Thalassemia Blood Bank', 'Rajshahi', '30 Chamelibag 1st Lane', 'Thalassemia Blood Bank', '12/11/2020-12/30/2020'),
('Uganda', 'Rajshahi', 'Chondra', 'BLC', '7/11/20 to 12/11/20'),
('জাতীয় স্মৃতিসৌধ', 'Dhaka', 'Dhaka - Aricha Hwy, Savar Union 1344', 'জাতীয় স্মৃতিসৌধ', '09/09/2020-09/30/2020');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `username` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL,
  `bloodgroup` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`username`, `name`, `email`, `phone`, `district`, `area`, `bloodgroup`, `password`, `image`, `status`) VALUES
('DiptoProdipto', 'Prodipto Roy Dipto', 'diptoprodipto@gmail.com', '01666666666', 'Dhaka', 'Dhanmondi', 'B+', '1234', 'PP.jpg', 'Available'),
('faruk', 'faruk', 'faruk@gmail.com', '01982736553', 'Dhaka', 'Dhanmondi', 'A+', '1234', 'faruk.jpg', 'Available'),
('kismet', 'kismet', 'kismet@gmail.com', '0197354738263', 'Nilphamari', 'Kishoreganj', 'AB+', '1234', 'kismet.jpg', 'Available'),
('pappu', 'pappu', 'pappu@gmail.com', '01812345678', 'Dhaka', 'Dhanmondi', 'O+', '1234', 'pappu.jpg', 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `bloodtype` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`bloodtype`, `location`, `contact`, `email`, `date`) VALUES
('A-', 'cumilla', 170, 'faruk@gmail.com', '2020-15-5'),
('AB+', 'rangpur', 12, 'choton@gmail.com', '2020-5-13'),
('AB-', 'kurigram', 187, 'devu@gmail.com', '2020-10-6'),
('O+', 'chittagong', 190, 'mofiz@gmail.com', '2020-5-6'),
('AB-', 'Dhaka', 198654321, 'hello@gmail.com', '2020-12-12'),
('A+', 'Dhaka', 1981, 'faruk@gmail.com', '2020-12-12'),
('A+', 'Dhaka', 1981, 'faruk@gmail.com', '2020-12-12'),
('A+', 'Dhaka', 1981, 'faruk@gmail.com', '2020-12-12'),
('A-', 'Dhaka', 2147483647, 'faruk15-9984@diu.edu.bd', '2020-12-12'),
('A-', 'Dhaka', 2147483647, 'faruk15-9984@diu.edu.bd', '2020-12-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`cname`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
