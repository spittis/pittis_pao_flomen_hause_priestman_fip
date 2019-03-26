-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 26, 2019 at 02:22 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_occ`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms01_site_content`
--

CREATE TABLE `cms01_site_content` (
  `uid` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `data` longtext NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dateDeleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `user_id` int(15) NOT NULL,
  `user_name` varchar(75) NOT NULL,
  `user_email` varchar(75) NOT NULL,
  `user_message` tinytext NOT NULL,
  `user_submission` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `us01_users`
--

CREATE TABLE `us01_users` (
  `ID` int(11) NOT NULL,
  `user` varchar(45) NOT NULL,
  `fname` varchar(90) NOT NULL,
  `lname` varchar(90) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userLevel` int(11) NOT NULL,
  `suspended` int(1) NOT NULL DEFAULT '0',
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateDeleted` datetime DEFAULT NULL,
  `pass` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `us01_users`
--

INSERT INTO `us01_users` (`ID`, `user`, `fname`, `lname`, `email`, `userLevel`, `suspended`, `dateAdded`, `dateDeleted`, `pass`) VALUES
(1, 'admin', 'admin', 'admin', 'blake.hause@hotmail.com', 5, 0, '2019-03-25 11:08:51', NULL, '$2y$10$U.vZx.S/2QzthsrCq0GPUu16knUXiHRj/3fHlqRGdFdqklJ8.0TvS');

-- --------------------------------------------------------

--
-- Table structure for table `us02_sessions`
--

CREATE TABLE `us02_sessions` (
  `uid` int(11) NOT NULL,
  `accessToken` varchar(45) NOT NULL,
  `payload` longtext NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateDeleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms01_site_content`
--
ALTER TABLE `cms01_site_content`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `us01_users`
--
ALTER TABLE `us01_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `us02_sessions`
--
ALTER TABLE `us02_sessions`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms01_site_content`
--
ALTER TABLE `cms01_site_content`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `us01_users`
--
ALTER TABLE `us01_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `us02_sessions`
--
ALTER TABLE `us02_sessions`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
