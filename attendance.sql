-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 08:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendanceadd`
--

CREATE TABLE `attendanceadd` (
  `date` varchar(30) NOT NULL,
  `Enroll` varchar(15) NOT NULL,
  `attend` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendanceadd`
--

INSERT INTO `attendanceadd` (`date`, `Enroll`, `attend`) VALUES
('02-12-20', '1', 'P'),
('02-12-20', '2', 'P'),
('02-12-20', '3', 'P'),
('02-12-20', '4', 'A'),
('02-12-20', '5', 'P'),
('02-12-20', '120', 'A'),
('02-12-20', '120', 'P'),
('02-12-20', '121', 'P'),
('03-12-20', '120', 'P'),
('03-12-20', '121', 'P'),
('03-12-20', '122', 'P'),
('17-12-20', '1', 'P'),
('17-12-20', '2', 'P'),
('17-12-20', '3', 'P'),
('17-12-20', '4', 'P'),
('17-12-20', '5', 'P'),
('17-12-20', '7', 'P'),
('17-12-20', '10', 'P'),
('17-12-20', '11', 'P'),
('17-12-20', '110', 'P'),
('17-12-20', '111', 'P'),
('17-12-20', '112', 'P'),
('17-12-20', '120', 'P'),
('17-12-20', '121', 'P'),
('17-12-20', '122', 'A'),
('18-12-20', '1', 'P'),
('18-12-20', '2', 'P'),
('18-12-20', '3', 'P'),
('18-12-20', '4', 'P'),
('18-12-20', '5', 'P'),
('18-12-20', '7', 'P'),
('18-12-20', '10', 'P'),
('18-12-20', '11', 'A'),
('18-12-20', '12', 'A'),
('18-12-20', '110', 'A'),
('18-12-20', '111', 'A'),
('18-12-20', '112', 'A'),
('18-12-20', '120', 'A'),
('18-12-20', '121', 'P'),
('18-12-20', '122', 'P'),
('18-12-20', '1', 'P'),
('18-12-20', '2', 'P'),
('18-12-20', '3', 'P'),
('18-12-20', '4', 'P'),
('18-12-20', '5', 'P'),
('18-12-20', '7', 'P'),
('18-12-20', '10', 'A'),
('18-12-20', '11', 'A'),
('18-12-20', '12', 'A'),
('18-12-20', '110', 'A'),
('18-12-20', '111', 'P'),
('18-12-20', '112', 'A'),
('18-12-20', '120', 'A'),
('18-12-20', '121', 'P'),
('18-12-20', '122', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `Enroll` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `Semester` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`Enroll`, `name`, `course`, `Semester`) VALUES
('', '', '', ''),
('001', 'Agrima Suri', 'MCA', '1'),
('002', 'Ashi', 'MCA', '1'),
('003', 'Pooja Phogat', 'MCA', '1'),
('004', 'Geetanshu', 'MCA', '1'),
('005', 'Radhika Gupta', 'MCA', '1'),
('007', 'shalini', 'MCA', '1'),
('010', 'gunjan sharma', 'MCA', '1'),
('011', 'Priya', 'MCA', '1'),
('012', 'Deeksha', 'BCA', '1'),
('110', 'piyush', 'MCA', '1'),
('111', 'Priypal', 'MCA', '1'),
('112', 'Ayushi mann', 'MCA', '1'),
('120', 'Depak', 'BCA', '1'),
('121', 'nisha', 'BCA', '1'),
('122', 'shivani', 'MCA', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teacherinfo`
--

CREATE TABLE `teacherinfo` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `faculty` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherinfo`
--

INSERT INTO `teacherinfo` (`username`, `password`, `fname`, `faculty`) VALUES
('', '', '', ''),
('Nisha', 'nisha34', 'Nisha Singh', 'Lab Assistent'),
('123astha', '123', 'Astha Pal', 'Lab Assistent'),
('Preeti435', 'preeti', 'Preeti Gupta', 'Lecturer'),
('', '', '', ''),
('', '', '', ''),
('rekha', 'rekha12', 'rekha sharma', 'Lecturer'),
('', '', '', ''),
('reetu', '12345', 'Reetu Singh', 'Lecturer'),
('', '', '', ''),
('Shii', '1234', 'shiii sharma', 'Lecturer'),
('', '', '', ''),
('Muskan ', '12345', 'Muskan Sharma ', 'Lecturer'),
('dua_vanshika', '123456789', 'vanshika priya', 'Lab Assistent'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('priyanshu', '123456', 'Priyanshu Singh', 'Lecturer'),
('', '', '', ''),
('priyah', '12345', 'Priya Singh', 'Lecturer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`Enroll`),
  ADD UNIQUE KEY `Enroll` (`Enroll`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD KEY `Enroll_2` (`Enroll`),
  ADD KEY `Semester` (`Semester`);
ALTER TABLE `information` ADD FULLTEXT KEY `name` (`name`);
ALTER TABLE `information` ADD FULLTEXT KEY `course` (`course`);
ALTER TABLE `information` ADD FULLTEXT KEY `course_2` (`course`);
ALTER TABLE `information` ADD FULLTEXT KEY `Semester_2` (`Semester`);

--
-- Indexes for table `teacherinfo`
--
ALTER TABLE `teacherinfo` ADD FULLTEXT KEY `username` (`username`);
ALTER TABLE `teacherinfo` ADD FULLTEXT KEY `fname` (`fname`);
ALTER TABLE `teacherinfo` ADD FULLTEXT KEY `faculty` (`faculty`);
ALTER TABLE `teacherinfo` ADD FULLTEXT KEY `password` (`password`);
ALTER TABLE `teacherinfo` ADD FULLTEXT KEY `username_2` (`username`);
ALTER TABLE `teacherinfo` ADD FULLTEXT KEY `fname_2` (`fname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
