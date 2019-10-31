-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 05:01 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininbox`
--

CREATE TABLE `admininbox` (
  `id` int(10) NOT NULL,
  `msgfrom` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `email` varchar(32) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininbox`
--

INSERT INTO `admininbox` (`id`, `msgfrom`, `role`, `email`, `message`, `date`) VALUES
(1, 'imo', 'user', 'imranesn125@gmail.com', 'hlw', '2018-04-26 14:27:36'),
(3, 'peasha', 'user', 'peasha@gmail.com', 'asdfhjki', '2018-04-26 14:31:57'),
(7, 'shariar', 'user', 'shariar@gmail.com', 'aaaaaa', '2018-04-26 02:51:00'),
(8, 'fahad', 'public', 'fahad@gmail.com', 'weghjkjhvcx', '2018-04-26 02:54:00'),
(9, 'sdfghj', 'user', 'aaaaa@gmail.com', 'oki8j7uhygtfred', '2018-04-26 03:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billingId` int(11) NOT NULL,
  `orderNo` int(22) NOT NULL,
  `customerId` int(11) NOT NULL,
  `accNo` varchar(15) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `billing method` varchar(20) DEFAULT NULL,
  `date` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfo`
--

CREATE TABLE `bookinginfo` (
  `bookId` int(255) NOT NULL,
  `bookerId` int(255) NOT NULL,
  `rentalType` varchar(30) NOT NULL,
  `packageType` varchar(30) NOT NULL,
  `vehicleType` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `StartDateTime` varchar(30) NOT NULL,
  `EndDateTime` varchar(30) NOT NULL,
  `StartLocation` varchar(100) NOT NULL,
  `ReturnLocation` varchar(100) NOT NULL,
  `packageId` int(255) NOT NULL,
  `bookingStatus` varchar(15) NOT NULL,
  `payingstatus` varchar(20) NOT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinginfo`
--

INSERT INTO `bookinginfo` (`bookId`, `bookerId`, `rentalType`, `packageType`, `vehicleType`, `price`, `StartDateTime`, `EndDateTime`, `StartLocation`, `ReturnLocation`, `packageId`, `bookingStatus`, `payingstatus`, `rating`, `comment`) VALUES
(6, 1, 'DAILY CAR RENTAL OUTSIDE DHAKA', '4', 'Toyota Superior Premio G', '4300', '08/05/2018 06:50 AM', '09/05/2018 06:50 AM', 'dhaka', 'chandpur', 24, 'cancelled', 'pending', NULL, NULL),
(7, 1, 'MONTHLY CAR RENTAL', '2', 'Toyota Axio', '55000', '01/05/2018 06:55 AM', '05/06/2018 06:56 AM', 'Dhanmondi', 'Badda', 28, 'cancelled', 'pending', NULL, NULL),
(8, 1, 'Airport Transfer', '1', 'AC Sedan car', '1400', '26/04/2018 05:24 PM', '30/04/2018 10:24 PM', 'fgrgrtgr', 'trgrtgtrgtg', 1, 'pending', 'pending', NULL, NULL),
(9, 1, 'Airport Transfer', '1', 'AC Sedan car', '1400', '27/04/2018 09:08 PM', '28/04/2018 03:08 AM', 'uttara', 'uttara', 1, 'cancelled', 'pending', NULL, NULL),
(10, 1, 'HOURLY CAR RENTAL', '1', 'Standard Sedan Car - 4 Hours', '1750', '03/05/2018 09:09 PM', '02/05/2018 09:09 PM', 'trrr', 'rrrrr', 8, 'pending', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empId` int(255) NOT NULL,
  `empName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `photoId` varchar(255) NOT NULL,
  `lastLogin` varchar(50) NOT NULL,
  `regDate` varchar(50) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empId`, `empName`, `password`, `firstName`, `lastName`, `email`, `sex`, `phone`, `address`, `city`, `photo`, `photoId`, `lastLogin`, `regDate`, `dob`, `role`, `status`) VALUES
(1, 'rajib', '12345', 'Rajib Kumar', 'paul', 'rajib@gmail.com', 'male', '01698765489', 'Kuratoli', 'dhaka', 'rajib', 'rajib', '22-04-2018', '22-04-2018', '1-1-1995', 'admin', 'active'),
(2, 'imran', '1234', 'imran', 'imo', 'imran@gmail.com', 'male', '01277333203', 'aaa', 'tttt', '13233110_1025255947557963_5195466342616113300_n.jpg', '13233110_1025255947557963_5195466342616113300_n.jpg', '2018-04-26 12:16:40', '2018-04-26 12:16:40', '1995-01-01', 'admin', 'active'),
(3, 'shamim', '1234', 'Enamul', 'Haque', 'shamim@gmail.com', 'male', '01698989898', 'ssss', 'faridpur', '11081418_1591440241073829_3147145479334232848_n.jpg', '11081418_1591440241073829_3147145479334232848_n.jpg', '2018-04-26 13:58:58', '2018-04-26 13:58:58', '1992-01-01', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `lid` int(255) NOT NULL,
  `userId` int(255) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `userId`, `userName`, `password`, `type`) VALUES
(2, 1, 'rajib', '12345', 'admin'),
(3, 2, 'adi', '1234', 'user'),
(4, 1, 'imo', '12345', 'user'),
(5, 3, 'peasha', '1234', 'user'),
(6, 3, 'shamim', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `packageId` int(11) NOT NULL,
  `rentalType` varchar(50) NOT NULL,
  `packageType` varchar(30) NOT NULL,
  `vehicleType` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `serviceCharge` int(11) NOT NULL,
  `driverCost` int(11) NOT NULL,
  `parkingCharge` int(11) NOT NULL,
  `fuelCost` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `totalcost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`packageId`, `rentalType`, `packageType`, `vehicleType`, `price`, `serviceCharge`, `driverCost`, `parkingCharge`, `fuelCost`, `location`, `totalcost`) VALUES
(1, 'Airport Transfer', '1', 'AC Sedan car', '1300', 0, 0, 200, 0, 'Uttara, khilkhet, Nikunja', 1400),
(2, 'Airport Transfer', '2', 'AC Sedan car', '1500', 0, 0, 100, 0, 'Banani, Gulshan, Niketon, Baridhara, All DOHS, Bashundhora, Dhaka Cantonment, Mirpur, Pallabi, Agarg', 1600),
(4, 'Airport Transfer', '3', 'AC Sedan car', '1700', 0, 0, 100, 0, ' Dhaka University, Shahbagh, New Market, Azimpur, Moghbazar, Mouchak, Malibagh, Shantinagar, Eskaton, Khilgaon, Motijheel, Kakrail, Komlapur, Basabo, Paltan, Wari, Jatrabari, Shonir Aakhra, Sadarghat, Old Town.', 1800),
(5, 'Airport Transfer', '4', 'HIACE or NOAH Micro Bus', '2000', 0, 0, 100, 0, 'Uttara, Khilkhet, Nikhunja.', 2100),
(6, 'Airport Transfer', '5', 'HIACE or NOAH Micro Bus', '2500', 0, 0, 100, 0, 'Banani, Gulshan, Niketon, Baridhara, All DOHS, Bashundhora, Dhaka Cantonment, Mirpur, Pallabi, Agargaon,Panthapath, Elephant Rd, Dhanmondi, Zigatola, Mohammadpur, Lalmatia, Farmgate, Badda.', 2600),
(7, 'Airport Transfer', '6', 'HIACE or NOAH Micro Bus', '2800', 0, 0, 100, 0, ' Dhaka University, Shahbagh, New Market, Azimpur, Moghbazar, Mouchak, Malibagh, Shantinagar, Eskaton, Khilgaon, Motijheel, Kakrail, Komlapur, Basabo, Paltan, Wari, Jatrabari, Shonir Aakhra, Sadarghat, Old Town.\r\n', 2900),
(8, 'HOURLY CAR RENTAL', '1', 'Standard Sedan Car - 4 Hours', '1750', 0, 0, 0, 0, 'Dhaka', 1750),
(9, 'HOURLY CAR RENTAL', '2', 'Standard Sedan Car - 10 Hours', '3000', 0, 0, 0, 0, 'Any', 3000),
(10, 'HOURLY CAR RENTAL', '3', 'Premium Sedan Car - 4 Hours', '2250', 0, 0, 0, 0, 'Dhaka', 2250),
(11, 'HOURLY CAR RENTAL', '4', 'Premium Sedan Car - 10 Hours', '4000', 0, 0, 0, 0, 'Any', 4000),
(12, 'HOURLY CAR RENTAL', '5', 'Hiace Micro Bus- 4 Hours', '3000', 0, 0, 0, 0, 'Dhaka', 3000),
(13, 'HOURLY CAR RENTAL', '6', 'Hiace/X Noah Micro Bus- 10 Hours', '5000', 0, 0, 0, 0, 'Any', 5000),
(15, 'DAILY CAR RENTAL', '1', 'Toyota Axio Axio', '2500', 0, 150, 0, 0, 'Any within Dhaka', 2650),
(16, 'DAILY CAR RENTAL', '2', 'Fielder ', '2500', 0, 150, 0, 0, 'Any within Dhaka', 1650),
(17, 'DAILY CAR RENTAL', '3', 'Superior Allion', '3500', 0, 150, 0, 0, 'Any within Dhaka', 3650),
(18, 'DAILY CAR RENTAL', '4', 'Superior Premio', '3500', 0, 150, 0, 0, 'Any within Dhaka', 3650),
(19, 'DAILY CAR RENTAL', '5', 'Hiace Super GL', '3500', 0, 150, 0, 0, 'Any within Dhaka', 3650),
(20, 'DAILY CAR RENTAL', '6', 'X Noah', '3500', 0, 150, 0, 0, 'Any within Dhaka', 3650),
(21, 'DAILY CAR RENTAL OUTSIDE DHAKA', '1', 'Toyota Axio ', '3000', 0, 300, 0, 0, 'Any', 3300),
(22, 'DAILY CAR RENTAL OUTSIDE DHAKA', '2', 'Fielder ', '3000', 0, 300, 0, 0, 'Any', 3300),
(23, 'DAILY CAR RENTAL OUTSIDE DHAKA', '3', 'Toyota Superior Allion ', '4000', 0, 300, 0, 0, 'Any', 4300),
(24, 'DAILY CAR RENTAL OUTSIDE DHAKA', '4', 'Toyota Superior Premio G', '4000', 0, 300, 0, 0, 'Any', 4300),
(25, 'DAILY CAR RENTAL OUTSIDE DHAKA', '5', 'HIACE Super GL', '4000', 0, 300, 0, 0, 'Any', 4300),
(26, 'DAILY CAR RENTAL OUTSIDE DHAKA', '6', 'X NOAH', '4000', 0, 300, 0, 0, 'Any', 4300),
(27, 'MONTHLY CAR RENTAL', '1', 'X Corola ', '45000', 0, 0, 0, 0, 'Any', 45000),
(28, 'MONTHLY CAR RENTAL', '2', 'Toyota Axio', '55000', 0, 0, 0, 0, 'Any', 55000),
(29, 'MONTHLY CAR RENTAL', '3', 'Toyota Superior Allion', '60000', 0, 0, 0, 0, 'Any', 60000),
(30, 'MONTHLY CAR RENTAL', '4', 'Toyota Superior Premio G', '65000', 0, 0, 0, 0, 'Any', 65000),
(31, 'MONTHLY CAR RENTAL', '5', 'HIACE Micro', '65000', 0, 0, 0, 0, 'Any', 65000),
(32, 'MONTHLY CAR RENTAL', '6', 'X NOAH ', '70000', 0, 0, 0, 0, 'Any', 70000),
(33, 'OFFICE PICKUP & DROP', '1', 'Standard Sedan Car', '7200', 0, 0, 0, 0, 'Dhaka', 7200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(255) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `division` varchar(15) NOT NULL,
  `city` varchar(30) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `photoId` varchar(50) NOT NULL,
  `lastLogin` varchar(30) NOT NULL,
  `regDate` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `userType` varchar(15) NOT NULL,
  `userStatus` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `password`, `firstName`, `lastName`, `email`, `sex`, `phone`, `address`, `division`, `city`, `photo`, `photoId`, `lastLogin`, `regDate`, `dob`, `userType`, `userStatus`, `role`) VALUES
(1, 'imo', '12345', 'Mohammad', 'Imran', 'imranesn125@gmail.com', 'male', '01677333203', '147/4,Pranthopath', 'dhaka', 'dhaka', 'imo', 'Imran', '2018-04-20', '2018-04-20', '1995-01-25', 'regular', 'active', 'user'),
(2, 'adi', '1234', 'Arafat', 'Hossain', 'adi@gmail.com', 'male', '01600000000', 'uttara', 'dhaka', 'dhaka', 'Cover.jpg', 'Cover.jpg', '2018-04-20 12:39:21', '2018-04-20 12:39:21', '1997-02-01', 'regular', 'active', 'user'),
(3, 'peasha', '1234', 'Rubaiyat', 'Susmita', 'peasha@gmail.com', 'female', '01698745632', 'wwww', 'dhaka', 'nababgang', '1524743391.jpg', '1524743391.jpg', '2018-04-26 11:49:51', '2018-04-26 11:49:51', '1995-01-01', 'regular', 'active', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininbox`
--
ALTER TABLE `admininbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billingId`);

--
-- Indexes for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`packageId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `UNIQUE` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininbox`
--
ALTER TABLE `admininbox`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  MODIFY `bookId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `lid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `packageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
