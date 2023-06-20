-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 12:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitytbl`
--

CREATE TABLE `activitytbl` (
  `AID` int(11) NOT NULL,
  `Activityname` varchar(255) NOT NULL,
  `aDate` varchar(255) NOT NULL,
  `aTime` varchar(255) NOT NULL,
  `aGrade` varchar(255) NOT NULL,
  `aFile` varbinary(1024) NOT NULL,
  `aSubFile` varbinary(1024) NOT NULL,
  `aStudent` varchar(255) NOT NULL,
  `aTutor` varchar(255) NOT NULL,
  `Status` tinytext NOT NULL,
  `pAct` tinyint(4) NOT NULL,
  `fAct` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `classroomtbl`
--

CREATE TABLE `classroomtbl` (
  `CID` int(11) NOT NULL,
  `Classname` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `cDate` varchar(255) NOT NULL,
  `cTime` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `cTutor` varchar(255) NOT NULL,
  `cStudent` varchar(255) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Paid` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lecturetbl`
--

CREATE TABLE `lecturetbl` (
  `LID` int(11) NOT NULL,
  `Lecturename` varchar(255) NOT NULL,
  `lDate` varchar(255) NOT NULL,
  `lTime` varchar(255) NOT NULL,
  `lFile` varbinary(1024) NOT NULL,
  `lStudent` varchar(255) NOT NULL,
  `lTutor` varchar(255) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratingtbl`
--

CREATE TABLE `ratingtbl` (
  `RateID` int(11) NOT NULL,
  `TutorID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `Tutorname` varchar(255) NOT NULL,
  `Studentname` varchar(255) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservationtbl`
--

CREATE TABLE `reservationtbl` (
  `RID` int(11) NOT NULL,
  `Classname` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `rDate` varchar(255) NOT NULL,
  `rTime` varchar(255) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `rTutor` varchar(255) NOT NULL,
  `rStudent` varchar(255) NOT NULL,
  `Paid` tinyint(4) NOT NULL,
  `Payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studenttbl`
--

CREATE TABLE `studenttbl` (
  `SID` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `VerificationCode` varchar(255) NOT NULL,
  `Email_Ver` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Verified` tinyint(4) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tutortbl`
--

CREATE TABLE `tutortbl` (
  `TID` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `CV` varbinary(1024) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Available` tinyint(4) NOT NULL,
  `Approve` tinyint(4) NOT NULL,
  `VerificationCode` varchar(255) NOT NULL,
  `Email_Ver` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Verified` tinyint(4) NOT NULL,
  `RecoveryCode` varchar(255) NOT NULL,
  `Certification1` varbinary(1024) NOT NULL,
  `Certification2` varbinary(1024) NOT NULL,
  `Certification3` varbinary(1024) NOT NULL,
  `Hourly` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitytbl`
--
ALTER TABLE `activitytbl`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `classroomtbl`
--
ALTER TABLE `classroomtbl`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `lecturetbl`
--
ALTER TABLE `lecturetbl`
  ADD PRIMARY KEY (`LID`);

--
-- Indexes for table `ratingtbl`
--
ALTER TABLE `ratingtbl`
  ADD PRIMARY KEY (`RateID`);

--
-- Indexes for table `reservationtbl`
--
ALTER TABLE `reservationtbl`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `studenttbl`
--
ALTER TABLE `studenttbl`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `tutortbl`
--
ALTER TABLE `tutortbl`
  ADD PRIMARY KEY (`TID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitytbl`
--
ALTER TABLE `activitytbl`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classroomtbl`
--
ALTER TABLE `classroomtbl`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturetbl`
--
ALTER TABLE `lecturetbl`
  MODIFY `LID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratingtbl`
--
ALTER TABLE `ratingtbl`
  MODIFY `RateID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservationtbl`
--
ALTER TABLE `reservationtbl`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studenttbl`
--
ALTER TABLE `studenttbl`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutortbl`
--
ALTER TABLE `tutortbl`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
