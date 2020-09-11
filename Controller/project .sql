-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 12:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
  `user` varchar(100) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Did` int(11) NOT NULL,
  `Dname` varchar(100) NOT NULL,
  `Specialist` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Did`, `Dname`, `Specialist`) VALUES
(3, 'Julekha Akter', 'Medicine'),
(4, 'Rashid Khan', 'Medicine'),
(6, 'Jihad Hossain', 'Cardio'),
(10, 'Ghungru Dev', 'Medicine'),
(14, 'Kowshick Ahmed', 'cardio');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `NurseID` int(11) NOT NULL,
  `NurseName` varchar(100) NOT NULL,
  `NurseCon` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`NurseID`, `NurseName`, `NurseCon`) VALUES
(1, 'Moina Jahan', '01945454545'),
(2, 'Bubly Nur', '01711522395'),
(3, 'Sharifa Khandakar', '01328028069'),
(5, 'Dony Roy', '01942042053'),
(6, 'Apu Khan', '01683170921'),
(7, 'Rokeya Begum', '01924924530'),
(9, 'Porna', '017525662');

-- --------------------------------------------------------

--
-- Table structure for table `patientleave`
--

CREATE TABLE `patientleave` (
  `billno` int(11) NOT NULL,
  `Patientid` int(11) NOT NULL,
  `LeaveDate` date NOT NULL,
  `Tbill` int(11) NOT NULL,
  `Rbill` int(11) NOT NULL,
  `Medbill` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientleave`
--

INSERT INTO `patientleave` (`billno`, `Patientid`, `LeaveDate`, `Tbill`, `Rbill`, `Medbill`, `Total`, `Status`) VALUES
(4, 3, '2019-12-05', 900, 11000, 6000, 17900, 'Paid'),
(5, 4, '2019-12-02', 500, 200, 100, 800, 'Paid'),
(6, 5, '2019-12-05', 500, 600, 100, 1200, 'Paid'),
(7, 6, '2019-12-07', 500, 200, 100, 800, 'Unpaid'),
(9, 6, '2020-01-13', 200, 200, 100, 500, 'Unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `patientsinfo`
--

CREATE TABLE `patientsinfo` (
  `Patientid` int(11) NOT NULL,
  `Pname` varchar(100) NOT NULL,
  `Did` int(11) NOT NULL,
  `AddDate` date NOT NULL,
  `PhnNum` varchar(20) NOT NULL,
  `RoomNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientsinfo`
--

INSERT INTO `patientsinfo` (`Patientid`, `Pname`, `Did`, `AddDate`, `PhnNum`, `RoomNo`) VALUES
(3, 'Naima', 3, '2019-12-03', '01465465830', 30),
(4, 'Mainul Sharker', 4, '2019-12-01', '01877522395', 20),
(5, 'Sidran Sadia', 10, '2019-12-02', '01945454545', 21),
(6, 'Najrul Kabir', 14, '2019-12-05', '01625625530', 20);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `RoomNo` int(11) NOT NULL,
  `BedQnty` int(11) NOT NULL,
  `NurseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RoomNo`, `BedQnty`, `NurseID`) VALUES
(10, 3, 1),
(20, 6, 3),
(21, 2, 7),
(30, 2, 5),
(31, 2, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`NurseID`);

--
-- Indexes for table `patientleave`
--
ALTER TABLE `patientleave`
  ADD PRIMARY KEY (`billno`);

--
-- Indexes for table `patientsinfo`
--
ALTER TABLE `patientsinfo`
  ADD PRIMARY KEY (`Patientid`),
  ADD KEY `Did` (`Did`),
  ADD KEY `RoomNo` (`RoomNo`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomNo`),
  ADD KEY `NurseID` (`NurseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `NurseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patientleave`
--
ALTER TABLE `patientleave`
  MODIFY `billno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patientsinfo`
--
ALTER TABLE `patientsinfo`
  MODIFY `Patientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
