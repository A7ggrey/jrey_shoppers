-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 01:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jrey_shoppers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(20) NOT NULL,
  `adminfname` varchar(50) NOT NULL,
  `adminlname` varchar(50) NOT NULL,
  `adminoname` varchar(50) NOT NULL,
  `admingender` enum('Male','Female') NOT NULL,
  `admindob` varchar(20) NOT NULL,
  `adminemail` varchar(100) NOT NULL,
  `adminphone` varchar(20) NOT NULL,
  `adminidno` int(20) NOT NULL,
  `adminoffice` int(100) NOT NULL,
  `adminstatus` int(20) NOT NULL,
  `adminterms` varchar(30) NOT NULL,
  `adminpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cartegory`
--

CREATE TABLE `cartegory` (
  `cartid` int(20) NOT NULL,
  `cartname` varchar(200) NOT NULL,
  `cartimg` varchar(50) NOT NULL,
  `cartdate` datetime NOT NULL,
  `adminid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commid` int(20) NOT NULL,
  `commdetails` varchar(200) NOT NULL,
  `commdate` datetime NOT NULL,
  `itemid` int(20) NOT NULL,
  `userid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE `coordinators` (
  `coid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `school` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coordinators`
--

INSERT INTO `coordinators` (`coid`, `fname`, `lname`, `oname`, `gender`, `school`, `email`, `pnumber`, `password`) VALUES
(11, 'test', '123', '', 'Female', 2, 'test123@developer.com', '', '$2y$10$I18kJWbVn5d.xrk1vTSFAu2/eTKMuaIwZvA2JI7vOUdICzb6lq79e'),
(12, 'test', '456', '', 'Male', 1, 'test456@developer.com', '', '$2y$10$YIGT5Yuv0PzzwhVCQVfcWOucyqrV8GStuaJtTmwOfOr7MHv9UkNGW'),
(13, 'Aggrey', 'Kiprop', '', 'Male', 1, 'aggreykiprop60@gmail.com', '', '$2y$10$Yryht9h7G49Ue02M56FIX.42/73dqQb1jnPhj7XbAa6UPm3Y201bu'),
(14, 'jenny', 'White', '', 'Female', 2, 'jennywhite@gmail.com', '', '$2y$10$6Y0.dS5aK5/nd7647dwhJ.XlDqimTzh3SoGXgPfTCe.E/X8azf1lC');

-- --------------------------------------------------------

--
-- Table structure for table `county`
--

CREATE TABLE `county` (
  `countyid` int(11) NOT NULL,
  `countyname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dean`
--

CREATE TABLE `dean` (
  `myschid` int(11) NOT NULL,
  `school` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dean`
--

INSERT INTO `dean` (`myschid`, `school`, `email`, `pnumber`, `password`) VALUES
(3, 1, 'sci@maseno.ac.ke', '+254795882390', '$2y$10$xN4VjryjmeghhF4SZqepieS.pfSCZ6b9Fac9YhlqrLTzrxcouVjJu'),
(4, 2, 'med@maseno.ac.ke', '+254795882389', '$2y$10$/nD8OWVBwCsEFUYTxDt4sOd8uvq/fFiU3kK7/OvhShbs2Wi9325Ga');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delid` int(20) NOT NULL,
  `delfname` varchar(50) NOT NULL,
  `dellname` varchar(50) NOT NULL,
  `deloname` varchar(50) NOT NULL,
  `delgender` enum('Male','Female') NOT NULL,
  `deldob` varchar(20) NOT NULL,
  `delemail` varchar(100) NOT NULL,
  `delphone` varchar(20) NOT NULL,
  `delidno` int(20) NOT NULL,
  `deloffice` int(100) NOT NULL,
  `delstatus` int(20) NOT NULL,
  `delterms` varchar(30) NOT NULL,
  `delpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forwarded`
--

CREATE TABLE `forwarded` (
  `fwdid` int(11) NOT NULL,
  `yearofexam` int(11) NOT NULL,
  `unitname` int(11) NOT NULL,
  `lecid` int(11) NOT NULL,
  `stmrkid` int(11) NOT NULL,
  `stdschid` int(11) NOT NULL,
  `cats` varchar(255) NOT NULL,
  `exams` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forwarded`
--

INSERT INTO `forwarded` (`fwdid`, `yearofexam`, `unitname`, `lecid`, `stmrkid`, `stdschid`, `cats`, `exams`, `total`, `grade`) VALUES
(17, 1, 1, 1, 1, 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemid` int(20) NOT NULL,
  `itemname` varchar(200) NOT NULL,
  `itemimg` varchar(50) NOT NULL,
  `itemquantity` int(10) NOT NULL,
  `itemprice` int(10) NOT NULL,
  `itemdiscount` int(3) NOT NULL,
  `itemdate` datetime NOT NULL,
  `itemdescription` varchar(700) NOT NULL,
  `itemcookiecode` varchar(100) NOT NULL,
  `cartid` int(20) NOT NULL,
  `subcartid` int(20) NOT NULL,
  `adminid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `school` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecid`, `fname`, `lname`, `oname`, `gender`, `school`, `email`, `pnumber`, `password`) VALUES
(1, 'Aggrey', 'Kiprop', 'James', 'Male', '1', 'aggreykiprop60@gmail.com', '', '$2y$10$a6CcLpeGg4bdhiRvUNriK.FipLI.iGATyPfhllOWH75oUmfIqZyEu'),
(2, 'Kevin', 'Otieno', '', 'Male', '2', 'kevino@gmail.com', '', '$2y$10$9uUlv8aOXn0sYzj8rxs7EOcEYu9ybLVZt2ukIBzIFbODqYukxYeTu'),
(3, 'test', '123', '', 'Female', '2', 'test123@developer.com', '', '$2y$10$sRamx2Tz9tyuEVnziX77wO.ObJ1neudKmjWrPZIzMRY9T7qn4uB.a'),
(4, 'Jenny', 'White', '', 'Female', '1', 'jennywhite@gmail.com', '', '$2y$10$h11K/3uUxxj9zdgQG3yHHO7m8f4aGch2ggRQ5GJGRTdKlejjQm3ey');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `mrkid` int(11) NOT NULL,
  `yearofexam` int(11) NOT NULL,
  `unitname` int(11) NOT NULL,
  `lecid` int(11) NOT NULL,
  `stmrkid` int(11) NOT NULL,
  `stdschid` int(11) NOT NULL,
  `cats` varchar(255) NOT NULL,
  `exams` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`mrkid`, `yearofexam`, `unitname`, `lecid`, `stmrkid`, `stdschid`, `cats`, `exams`, `total`, `grade`, `comment`) VALUES
(19, 2, 6, 1, 1, 1, '28', '54', '82', 'A', 'Marks Submitted by lecturer. Please be checking your transcript for updates.'),
(20, 1, 1, 1, 1, 1, '13', '44', '57', 'C', 'Marks Submitted by lecturer. Please be checking your transcript for updates.'),
(21, 2, 8, 2, 4, 2, '28', '48', '76', 'A', 'Marks Submitted by lecturer. Please be checking your transcript for updates.'),
(22, 2, 1, 4, 5, 1, '28', '28', '56', 'C', 'Marks Submitted by lecturer. Please be checking your transcript for updates.');

-- --------------------------------------------------------

--
-- Table structure for table `moreimgs`
--

CREATE TABLE `moreimgs` (
  `moreimgsid` int(50) NOT NULL,
  `moreimgs` varchar(50) NOT NULL,
  `itemid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `blogid` int(11) NOT NULL,
  `blogheading` varchar(100) NOT NULL,
  `blogbody` varchar(2000) NOT NULL,
  `blogphoto` varchar(100) NOT NULL,
  `bloger` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rateid` int(20) NOT NULL,
  `rating` int(3) NOT NULL,
  `itemid` int(20) NOT NULL,
  `ratedate` datetime NOT NULL,
  `userid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `repid` int(11) NOT NULL,
  `selecteduser` int(11) NOT NULL,
  `repschool` int(11) NOT NULL,
  `repstudent` int(11) NOT NULL,
  `problem` varchar(500) NOT NULL,
  `reply` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`repid`, `selecteduser`, `repschool`, `repstudent`, `problem`, `reply`) VALUES
(1, 1, 1, 1, 'I am unable to submit missing marks. everytime i try, i get an error and i am told to try again later. please help.\r\nthanks.', ''),
(2, 1, 2, 4, 'I am unable to submit missing marks. everytime i try, i get an error and i am told to try again later. please help.\r\nthanks.', '');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `schlid` int(11) NOT NULL,
  `schname` varchar(255) NOT NULL,
  `schcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`schlid`, `schname`, `schcode`) VALUES
(1, 'School of Computing and Informatics', 'SCI'),
(2, 'School of Medicine', 'MED'),
(3, 'School of Education', 'SoE'),
(4, 'School of Business', 'SoB');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `stationid` int(11) NOT NULL,
  `stationname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `regnumber` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stid`, `fname`, `lname`, `oname`, `gender`, `regnumber`, `year`, `school`, `email`, `pnumber`, `password`) VALUES
(1, 'Aggrey', 'Kiprop', 'James', 'Male', 'CIM/00035/019', '1', '1', 'aggreykiprop60@gmail.com', '', '$2y$10$a6CcLpeGg4bdhiRvUNriK.FipLI.iGATyPfhllOWH75oUmfIqZyEu'),
(2, 'Jane', 'Nafula', 'Nekesa', 'Female', 'MED/00034/020', '1', '2', 'nafulaj@yahoo.com', '', '$2y$10$sv.O.8pBIEGRVdVRdvuB1.1UI433/mW4pbaZTl5RbyWUbElNo9S4O'),
(3, 'Collins', 'Nyabuto', 'Otoyo', 'Male', 'MED/01010/020', '1', '2', 'cnyabuto@gmail.com', '', '$2y$10$mf.4PRJCATZS8YolycMVRO0UIFv5MdkMuahHPVbfLLdbtP2RHLMX.'),
(4, 'Kevin', 'Nafula', 'Wekesa', 'Male', 'MED/01220/019', '1', '2', 'knafula@gmai.com', '', '$2y$10$RX8PJJB2sn3j9DI1fvvRhOzKmZ13pfXj4c29AybDYRADuViUNtmEa'),
(5, 'Jane', 'White', 'Nekesa', 'Female', 'CIM/00111/019', '1', '1', 'janewn@yahoo.com', '', '$2y$10$/P9VBz4z4nx37H2wHlY8i.wCzAFvVhzVLHXHegEYnUAUjbhevUAme');

-- --------------------------------------------------------

--
-- Table structure for table `subcartegory`
--

CREATE TABLE `subcartegory` (
  `subcartid` int(20) NOT NULL,
  `subcartname` int(200) NOT NULL,
  `subcartdate` datetime NOT NULL,
  `cartid` int(20) NOT NULL,
  `adminid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `superadminid` int(20) NOT NULL,
  `superadminfname` varchar(50) NOT NULL,
  `superadminlname` varchar(50) NOT NULL,
  `superadminoname` varchar(50) NOT NULL,
  `superadmingender` enum('Male','Female') NOT NULL,
  `superadmindob` varchar(20) NOT NULL,
  `superadminemail` varchar(100) NOT NULL,
  `superadminphone` varchar(20) NOT NULL,
  `superadminidno` int(20) NOT NULL,
  `superadminoffice` int(100) NOT NULL,
  `superadminstatus` int(20) NOT NULL,
  `superadminterms` varchar(30) NOT NULL,
  `superadminpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`superadminid`, `superadminfname`, `superadminlname`, `superadminoname`, `superadmingender`, `superadmindob`, `superadminemail`, `superadminphone`, `superadminidno`, `superadminoffice`, `superadminstatus`, `superadminterms`, `superadminpassword`) VALUES
(1, 'Aggrey', 'Kiprop', 'James', 'Male', '1998-01-07', 'aggreykiprop60@gmail.com', '0', 0, 0, 0, '0', '$2y$10$f0y2oiViCjqn0X/HlGE1ReYr1WUjc9hl0z7hDb68srOdHciJ9BuFi'),
(3, 'Aggrey', 'Kiprop', 'James', 'Male', '1998-01-07', 'aggreyjames92@gmail.com', '0', 0, 0, 0, '0', '$2y$10$3RUA7eyb451qME21HAqaKeN3H62I1jouQCFtrRgYWZiHvGQqJDygm');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `termsid` int(11) NOT NULL,
  `termsheading` varchar(100) NOT NULL,
  `termsbody` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unitid` int(11) NOT NULL,
  `unitname` varchar(255) NOT NULL,
  `unitcode` varchar(255) NOT NULL,
  `yroffered` int(11) NOT NULL,
  `schooloff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unitid`, `unitname`, `unitcode`, `yroffered`, `schooloff`) VALUES
(1, 'Web Design and Development', 'CIM 210', 2, 1),
(4, 'Internet Based Programming (JavaScript)', 'CIM 322', 3, 1),
(5, 'Organizational Processes I', 'CIM 201', 2, 1),
(6, 'Operations Management', 'CIM 202', 2, 1),
(7, 'Computer Networks', 'CIM 203', 2, 1),
(8, 'Medical test', 'MED 102', 1, 2),
(9, 'Industrial Attachment', 'CIM 316', 3, 1),
(10, 'Data Structurers and Algorithms', 'CIM 212', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

CREATE TABLE `userlogs` (
  `logid` int(20) NOT NULL,
  `logname` varchar(50) NOT NULL,
  `logstatus` int(3) NOT NULL,
  `logdate` datetime NOT NULL,
  `userid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(20) NOT NULL,
  `userfname` varchar(50) NOT NULL,
  `userlname` varchar(50) NOT NULL,
  `useroname` varchar(50) NOT NULL,
  `usergender` enum('Male','Female') NOT NULL,
  `userdob` varchar(20) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userphone` varchar(20) NOT NULL,
  `usercounty` varchar(100) NOT NULL,
  `usertown` int(100) NOT NULL,
  `userstatus` int(20) NOT NULL,
  `userterms` varchar(30) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `yrofstudy`
--

CREATE TABLE `yrofstudy` (
  `yrid` int(11) NOT NULL,
  `yrname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yrofstudy`
--

INSERT INTO `yrofstudy` (`yrid`, `yrname`) VALUES
(1, 'Year 1'),
(2, 'Year 2'),
(3, 'Year 3'),
(4, 'Year 4'),
(5, 'Year 5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `cartegory`
--
ALTER TABLE `cartegory`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commid`);

--
-- Indexes for table `coordinators`
--
ALTER TABLE `coordinators`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `county`
--
ALTER TABLE `county`
  ADD PRIMARY KEY (`countyid`);

--
-- Indexes for table `dean`
--
ALTER TABLE `dean`
  ADD PRIMARY KEY (`myschid`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delid`);

--
-- Indexes for table `forwarded`
--
ALTER TABLE `forwarded`
  ADD PRIMARY KEY (`fwdid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecid`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`mrkid`);

--
-- Indexes for table `moreimgs`
--
ALTER TABLE `moreimgs`
  ADD PRIMARY KEY (`moreimgsid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`blogid`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rateid`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`repid`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`schlid`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`stationid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `subcartegory`
--
ALTER TABLE `subcartegory`
  ADD PRIMARY KEY (`subcartid`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`superadminid`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`termsid`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unitid`);

--
-- Indexes for table `userlogs`
--
ALTER TABLE `userlogs`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `yrofstudy`
--
ALTER TABLE `yrofstudy`
  ADD PRIMARY KEY (`yrid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cartegory`
--
ALTER TABLE `cartegory`
  MODIFY `cartid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `county`
--
ALTER TABLE `county`
  MODIFY `countyid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dean`
--
ALTER TABLE `dean`
  MODIFY `myschid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forwarded`
--
ALTER TABLE `forwarded`
  MODIFY `fwdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `mrkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `moreimgs`
--
ALTER TABLE `moreimgs`
  MODIFY `moreimgsid` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `blogid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rateid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `repid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `schlid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `stationid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcartegory`
--
ALTER TABLE `subcartegory`
  MODIFY `subcartid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `superadminid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `termsid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlogs`
--
ALTER TABLE `userlogs`
  MODIFY `logid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
