-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 06:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bighotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `PhoneNumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `pass`, `email`, `PhoneNumber`) VALUES
(1, 'admin', '123', 'admin@gmail.com', '0'),
(6, 'baothai123', 'thaingu', 'danghieu1407011@gmail.com', '0947072684'),
(7, 'baothai1231', '12312312312', 'danghieu14070211@gmail.com', '0947072684');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `CMND` varchar(10) NOT NULL,
  `Wallet` int(11) NOT NULL DEFAULT 0,
  `Age` tinyint(4) NOT NULL,
  `Work` text NOT NULL,
  `Address` text NOT NULL,
  `NumberPhone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`, `email`, `pass`, `CMND`, `Wallet`, `Age`, `Work`, `Address`, `NumberPhone`) VALUES
(4, 'Cao Bảo Thái', 'cbt270801@gmail.com', '123456', '352583490', 0, 20, 'Lập Trình Viên', 'An Giang', '0972707663'),
(7, 'NGuyen Dang Hieu', 'danghieu140701@gmail.com', 'nguyendanghieu', '285746214', 0, 19, 'Sinh Vien', '441/21 Le Van Luong', '+849470726');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `roomID` int(11) NOT NULL,
  `nameCus` text NOT NULL,
  `Cost` text NOT NULL,
  `Details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`roomID`, `nameCus`, `Cost`, `Details`) VALUES
(101, 'NGuyen Dang Hieu', '100000', ''),
(102, 'NGuyen Dang Hieu', '100000', 'co them chai sting');

-- --------------------------------------------------------

--
-- Table structure for table `ord`
--

CREATE TABLE `ord` (
  `nameOrd` text NOT NULL,
  `cmndOrd` int(9) NOT NULL,
  `dateOrd` text NOT NULL,
  `sdtOrd` int(10) NOT NULL,
  `roomOrd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ord`
--

INSERT INTO `ord` (`nameOrd`, `cmndOrd`, `dateOrd`, `sdtOrd`, `roomOrd`) VALUES
('Bumbap ngu', 285746214, '14/7/2001', 947072684, '13'),
('Nguyen Dang Hieu', 23, '123123', 12312, '13'),
('Nguyen Dang Hieu', 123456, '123', 123, '13');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ID` int(11) NOT NULL,
  `NumRoom` varchar(50) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Type` int(11) NOT NULL,
  `Details` text NOT NULL,
  `Cost` int(11) NOT NULL,
  `Image` text NOT NULL,
  `FloorRoom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ID`, `NumRoom`, `Status`, `Type`, `Details`, `Cost`, `Image`, `FloorRoom`) VALUES
(2, 'Room 104', 1, 1, 'Vip', 300000, '../images/img5.jpg', 1),
(3, 'Room 103', 1, 2, 'Vip', 300000, '../images/img3.png', 1),
(4, 'Room 203', 1, 1, 'Vip', 300, '../images/img5.jpg', 2),
(11, 'Room 202', 1, 1, 'sas', 600000, '../images/img5.jpg', 2),
(12, 'Room 204', 1, 4, 'SSSS', 600000, '../images/img6.jpg', 2),
(13, 'Room 101', 1, 1, 'Phòng 101 \r\nDịch Vụ:.....\r\nbla \r\nbla\r\nbla', 600000, '../images/received_431670541453342.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `phonenumber` text NOT NULL,
  `salary` int(11) NOT NULL,
  `regency` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `phonenumber`, `salary`, `regency`) VALUES
(7, 'huy ngu', '09876', 1, 'ma ngta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
