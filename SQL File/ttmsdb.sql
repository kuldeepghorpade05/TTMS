-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 01:53 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacthome`
--

CREATE TABLE `contacthome` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacthome`
--

INSERT INTO `contacthome` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(2, 'rajat', 'admin@gmail.com', 'enquiry ', 'Hello sir, How can i get Monthly Pass.', '2021-08-18 10:47:06'),
(3, 'rajat', 'admin@gmail.com', 'enquiry ', 'hello sir,', '2021-08-18 11:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(50) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'test', 'admin', 7889898987, 'tester1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2019-08-21 11:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(10) NOT NULL,
  `VehicleCat` varchar(120) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `VehicleCat`, `CreationDate`) VALUES
(1, 'Car/Jeep/Van', '2021-08-17 12:27:37'),
(2, 'Light Commercial Vehicle (LCV)', '2021-08-17 12:28:04'),
(3, 'Bus/Truck', '2021-08-17 12:28:14'),
(4, 'Upto 3 Axle Vehicle', '2021-08-17 12:28:25'),
(5, '4 to 6 Axle', '2021-08-17 12:28:34'),
(6, 'HCM/EME ', '2021-08-17 12:29:24'),
(7, '7 or more Axle', '2021-08-17 12:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblpass`
--

CREATE TABLE `tblpass` (
  `ID` int(10) NOT NULL,
  `Passid` varchar(120) NOT NULL,
  `VehicleCat` varchar(120) DEFAULT NULL,
  `VehicleName` varchar(120) DEFAULT NULL,
  `RegNumber` char(50) DEFAULT NULL,
  `Validityfrom` varchar(120) DEFAULT NULL,
  `ValidityTo` varchar(120) DEFAULT NULL,
  `AppName` varchar(120) DEFAULT NULL,
  `AppGender` varchar(50) DEFAULT NULL,
  `AppAge` int(20) NOT NULL,
  `AppAdd` mediumtext,
  `PassCost` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpass`
--

INSERT INTO `tblpass` (`ID`, `Passid`, `VehicleCat`, `VehicleName`, `RegNumber`, `Validityfrom`, `ValidityTo`, `AppName`, `AppGender`, `AppAge`, `AppAdd`, `PassCost`, `CreationDate`) VALUES
(1, '109368156', 'Car/Jeep/Van', 'Swift Desire', 'KA04P3489', '2021-08-19', '2021-09-18', 'Rajat Kumar', 'Male', 25, 'Bangalore India', '2915', '2021-08-18 09:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `tblreceipt`
--

CREATE TABLE `tblreceipt` (
  `ID` int(10) NOT NULL,
  `Staffid` int(10) DEFAULT NULL,
  `LaneNumber` varchar(120) NOT NULL,
  `Receiptid` varchar(50) DEFAULT NULL,
  `VehicleCat` varchar(120) DEFAULT NULL,
  `VehicleName` varchar(150) DEFAULT NULL,
  `OwnerName` varchar(120) DEFAULT NULL,
  `VehicleNumber` varchar(120) DEFAULT NULL,
  `EnterVehiclecity` varchar(120) DEFAULT NULL,
  `Trip` varchar(120) DEFAULT NULL,
  `Cost` varchar(120) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreceipt`
--

INSERT INTO `tblreceipt` (`ID`, `Staffid`, `LaneNumber`, `Receiptid`, `VehicleCat`, `VehicleName`, `OwnerName`, `VehicleNumber`, `EnterVehiclecity`, `Trip`, `Cost`, `CreationDate`) VALUES
(1, 5, 'return', '283854480', 'Upto 3 Axle Vehicle', 'Bajaj Pulsar', 'Rajat Kumar', 'KA07P3456', 'Bangalore', '', '695', '2021-08-18 09:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `ID` int(10) NOT NULL,
  `StaffID` varchar(50) DEFAULT NULL,
  `StaffName` varchar(120) DEFAULT NULL,
  `StaffMobilenumber` bigint(10) DEFAULT NULL,
  `StaffEmail` varchar(120) DEFAULT NULL,
  `StaffGender` varchar(20) DEFAULT NULL,
  `StaffAddress` varchar(200) DEFAULT NULL,
  `StaffDOB` varchar(200) DEFAULT NULL,
  `StaffPassword` varchar(120) DEFAULT NULL,
  `JoiningDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`ID`, `StaffID`, `StaffName`, `StaffMobilenumber`, `StaffEmail`, `StaffGender`, `StaffAddress`, `StaffDOB`, `StaffPassword`, `JoiningDate`) VALUES
(4, '567654130', 'test staff', 1234567890, 'test@gmail.com', 'Male', 'New Delhi', '2019-04-02', 'f925916e2754e5e03f75dd58a5733251', '2019-09-08 17:11:25'),
(5, '892645508', 'Rajat', 9876054321, 'rajat@gmail.com', 'Male', 'MS Palya Bangalore', '1994-06-04', 'e10adc3949ba59abbe56e057f20f883e', '2021-08-17 07:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbltollfare`
--

CREATE TABLE `tbltollfare` (
  `ID` int(10) NOT NULL,
  `VehicleCat` varchar(120) DEFAULT NULL,
  `SingleJourney` varchar(120) DEFAULT NULL,
  `ReturnJourney` varchar(120) DEFAULT NULL,
  `MonthlyPass` varchar(120) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltollfare`
--

INSERT INTO `tbltollfare` (`ID`, `VehicleCat`, `SingleJourney`, `ReturnJourney`, `MonthlyPass`, `CreationDate`) VALUES
(1, 'Car/Jeep/Van', '85', '130', '2915', '2021-08-17 12:33:00'),
(2, 'Light Commercial Vehicle (LCV)', '140', '210', '4700', '2021-08-17 12:33:20'),
(3, 'Bus/Truck', '295', '445', '9850', '2021-08-17 12:33:43'),
(4, 'Upto 3 Axle Vehicle', '465', '695', '15450', '2021-08-17 12:34:17'),
(5, '4 to 6 Axle', '485', '710', '15985', '2021-08-17 12:35:01'),
(6, 'HCM/EME ', '495', '730', '16085', '2021-08-17 12:36:52'),
(7, '7 or more Axle', '565', '850', '18810', '2021-08-17 12:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbltollgate`
--

CREATE TABLE `tbltollgate` (
  `ID` int(10) NOT NULL,
  `TollGateName` varchar(120) DEFAULT NULL,
  `Address` varchar(120) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltollgate`
--

INSERT INTO `tbltollgate` (`ID`, `TollGateName`, `Address`, `CreationDate`) VALUES
(1, 'Dhaneshwar Toll Plaza', 'Bangalore, India', '2021-08-17 09:58:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacthome`
--
ALTER TABLE `contacthome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpass`
--
ALTER TABLE `tblpass`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblreceipt`
--
ALTER TABLE `tblreceipt`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbltollfare`
--
ALTER TABLE `tbltollfare`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbltollgate`
--
ALTER TABLE `tbltollgate`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacthome`
--
ALTER TABLE `contacthome`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblpass`
--
ALTER TABLE `tblpass`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblreceipt`
--
ALTER TABLE `tblreceipt`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbltollfare`
--
ALTER TABLE `tbltollfare`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbltollgate`
--
ALTER TABLE `tbltollgate`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
