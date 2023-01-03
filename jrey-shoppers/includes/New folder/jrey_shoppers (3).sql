-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 07:39 PM
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
-- Table structure for table `county`
--

CREATE TABLE `county` (
  `countyid` int(11) NOT NULL,
  `countyname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `stationid` int(11) NOT NULL,
  `stationname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `userlogs`
--

CREATE TABLE `userlogs` (
  `logid` int(20) NOT NULL,
  `logname` varchar(50) NOT NULL,
  `logstatus` varchar(50) NOT NULL,
  `logdate` varchar(20) NOT NULL,
  `logtime` varchar(20) NOT NULL,
  `userid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogs`
--

INSERT INTO `userlogs` (`logid`, `logname`, `logstatus`, `logdate`, `logtime`, `userid`) VALUES
(6, 'User Login', 'Unsuccessful', '27/11/2022', '08:48:24pm', 2),
(7, 'User Login', 'Unsuccessful', '27/11/2022', '08:49:51pm', 2),
(8, 'User Login', 'Successful', '27/11/2022', '08:50:03pm', 2),
(10, 'User Login', 'Successful', '27/11/2022', '08:57:29pm', 2),
(11, 'User Login', 'Successful', '27/11/2022', '09:06:28pm', 2),
(12, 'User Login', 'Successful', '27/11/2022', '09:18:39pm', 2),
(13, 'User Login', 'Successful', '27/11/2022', '09:22:20pm', 2),
(14, 'User Login', 'Successful', '27/11/2022', '09:23:55pm', 2),
(15, 'User Login', 'Successful', '27/11/2022', '09:26:07pm', 2),
(16, 'User Login', 'Successful', '27/11/2022', '09:28:00pm', 2),
(17, 'User Login', 'Successful', '27/11/2022', '09:29:47pm', 2),
(18, 'User Login', 'Unsuccessful', '27/11/2022', '09:30:36pm', 2),
(19, 'User Login', 'Successful', '27/11/2022', '09:30:50pm', 2),
(20, 'User Logout', 'Logout Successful', '27/11/2022', '09:34:56pm', 2),
(21, 'User Login', 'Successful', '27/11/2022', '09:35:45pm', 2),
(22, 'User Logout', 'Logout Successful', '27/11/2022', '09:36:09pm', 2);

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `userfname`, `userlname`, `useroname`, `usergender`, `userdob`, `useremail`, `userphone`, `usercounty`, `usertown`, `userstatus`, `userterms`, `userpassword`) VALUES
(2, 'Aggrey', 'Kiprop', 'James', 'Male', '1998-01-07', 'aggreyjames92@gmail.com', '0717433155', 'NO', 0, 1, 'I agree', '$2y$10$8mRAWQJtiT.eNk2zrSKjTeRA9mto95gq6u59wMme1oqnNpZu4VrxG');

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
-- Indexes for table `county`
--
ALTER TABLE `county`
  ADD PRIMARY KEY (`countyid`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`);

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
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`stationid`);

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
-- AUTO_INCREMENT for table `county`
--
ALTER TABLE `county`
  MODIFY `countyid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemid` int(20) NOT NULL AUTO_INCREMENT;

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
  MODIFY `logid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
