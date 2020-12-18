-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 06:48 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
  `name` varchar(20) NOT NULL,
  `attend` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendanceadd`
--

INSERT INTO `attendanceadd` (`date`, `Enroll`, `name`, `attend`) VALUES
('08-10-19', '12345', '', 'P'),
('08-10-19', '2924', '', 'P'),
('08-10-19', '3324', '', 'A'),
('08-10-19', '3453453', '', 'P'),
('08-10-19', '3724', '', 'A'),
('08-10-19', '767', '', 'P'),
('08-10-19', '98789', '', 'P'),
('08-10-19', '999', '', 'A');

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
('12345', 'abcde', 'BCA', '5'),
('2924', 'preeti gupta', 'BCA', '5'),
('3324', 'rishu', 'BCA', '5'),
('3453453', 'ankit', 'BCA', '5'),
('3724', 'shivam yadav', 'BCA', '5'),
('7568', 'heera', 'BCA', '5'),
('767', 'rupal', 'BCA', '5'),
('98789', 'babes', 'BCA', '5'),
('999', 'salman', 'BCA', '5');

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
('ram', '12345', 'ram kishan', 'HOD'),
('ram', '12345', 'ram kishan', 'HOD'),
('ramesh', '123', 'ramesh saahu', 'Lecturer'),
('', '', '', ''),
('', '', '', ''),
('sukhi', '1234', 'sukhdev', 'Lecturer'),
('akki', 'ankit', 'ankit raj', 'Lecturer'),
('jay', 'jayshree', 'jay shree pal', 'Lab Assistent');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
