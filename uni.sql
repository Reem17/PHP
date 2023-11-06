-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 03:30 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uni`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cno` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `fdno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cno`, `cname`, `fdno`) VALUES
(1, 'Public Sector Debt Statistics', 1),
(2, 'Financial Accounting Made Fun: Eliminating Your Fears', 1),
(3, 'Embedded Systems - Shape The World: Microcontroller Input/Output', 2),
(4, 'Embedded Systems - Shape The World: Multi-Threaded Interfacing', 2);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fno` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `fcoordinator` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fno`, `fname`, `fcoordinator`) VALUES
(1, 'Commerce', 'Gamal Metwaly'),
(2, 'Engineering', 'Manal Mostafa'),
(3, 'Law', 'Amgad Saeed');

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

CREATE TABLE `field` (
  `fdno` int(11) NOT NULL,
  `fdname` varchar(40) NOT NULL,
  `secno` int(11) NOT NULL,
  `fno` int(11) NOT NULL,
  `fddetails` text,
  `fdrequirements` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`fdno`, `fdname`, `secno`, `fno`, `fddetails`, `fdrequirements`) VALUES
(1, 'Financial Accounting', 11, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', ' 1- accounting 2- finance 3- business 4- economics 5- statistics '),
(2, 'Embedded Systems Development', 9, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '1- Assembly language\r\n2- C language\r\n3- Object oriented languages like C++, Java, etc.'),
(3, 'Web Development', 9, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '1- html 2-css 3- javascript 4- php 5- larvel'),
(4, 'Systems Development', 9, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '1- computer programming 2- network 3- operationg system'),
(5, 'Applications Development', 9, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '1- programming languages such as Java and ORACLE 2-  software design and programming principles '),
(6, 'Supply Chain Management.', 10, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL),
(7, 'Operations Management.', 10, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL),
(8, 'Marketing Management', 10, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL),
(9, 'Sales Management', 10, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL),
(10, 'Financial & Accounting Management', 10, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL),
(12, 'Public accounting', 11, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL),
(13, 'Tax accounting. ', 11, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL),
(14, 'Internal auditing', 11, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL),
(15, 'Management accounting', 11, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `field_courses`
-- (See below for the actual view)
--
CREATE TABLE `field_courses` (
`fdno` int(11)
,`fdname` varchar(40)
,`cname` varchar(100)
,`cno` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `field_jobs`
-- (See below for the actual view)
--
CREATE TABLE `field_jobs` (
`fdno` int(11)
,`fdname` varchar(40)
,`jobtitle` varchar(100)
,`jobno` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `followup`
--

CREATE TABLE `followup` (
  `fupno` int(11) NOT NULL,
  `fuptitle` varchar(30) NOT NULL,
  `fupdetail` text NOT NULL,
  `fupdate` date NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `graduationproject`
--

CREATE TABLE `graduationproject` (
  `gpno` varchar(7) NOT NULL,
  `gpname` varchar(100) NOT NULL,
  `gpdetail` text,
  `pemail` varchar(50) NOT NULL,
  `studentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `graduationproject`
--

INSERT INTO `graduationproject` (`gpno`, `gpname`, `gpdetail`, `pemail`, `studentid`) VALUES
('G1', 'THE IMPACT OF INTERNATIONAL FINANCIAL REPORTING STANDARD (IFRS)', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n', 'ahmed@gmail.com', 7),
('G5', 'Vehicle Tracking', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'canteennti@gmail.com', 16),
('G6', 'Auto Metro Train to Shuttle Between Stations', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'rere@yahoo.com', 15);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobno` int(11) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `fdno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobno`, `jobtitle`, `fdno`) VALUES
(1, 'Financial Analyst, Vodafone', 1),
(2, 'Internal Auditor, KPMG', 1),
(3, 'Staff Embedded Software Engineer, Orange', 2),
(4, 'Electronic Design Engineer - Embedded Systems, Valeo', 2);

-- --------------------------------------------------------

--
-- Table structure for table `prevprojects`
--

CREATE TABLE `prevprojects` (
  `projectno` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(55) NOT NULL,
  `pemail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prevprojects`
--

INSERT INTO `prevprojects` (`projectno`, `title`, `description`, `filename`, `pemail`) VALUES
(1, 'Propeller display of Time / Message', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.', '1.doc', 'canteennti@gmail.com'),
(2, 'Vehicle Tracking By GPS – GSM', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.', '2.doc', 'canteennti@gmail.com'),
(3, 'Auto Intensity Control of Street Lights', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.', '3.doc', 'canteennti@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `pemail` varchar(50) NOT NULL,
  `ppassword` varchar(100) NOT NULL,
  `pfname` varchar(30) NOT NULL,
  `plname` varchar(30) NOT NULL,
  `pphone` varchar(11) NOT NULL,
  `briefdata` text,
  `cvname` varchar(55) NOT NULL,
  `fdno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`pemail`, `ppassword`, `pfname`, `plname`, `pphone`, `briefdata`, `cvname`, `fdno`) VALUES
('ahmed@gmail.com', '7fb05b1f14783b36df4c400eff80ead5b5083ef0', 'ahmed', 'magdy', '0122622', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. ', '', 1),
('anwar@gmail.com', '35f7fe3d7bbba84bfba6ad4f04f4f41b42ad95c3', 'anwar', 'ahmed', '012262237', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. ', '', 1),
('canteennti@gmail.com', '17778071fb0f7e43905c8234216188183a021eb6', 'mahmoud', 'ahmed', '01226222310', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. ', 'canteennti@gmail.com.doc', 2),
('rere@yahoo.com', '9f126e1a3a2f7428c7bcd1217a5e14501a4afe4e', 'reem', 'mohamed', '013217909', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. ', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `secno` int(11) NOT NULL,
  `secname` varchar(40) NOT NULL,
  `fno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`secno`, `secname`, `fno`) VALUES
(9, 'Software Engineering', 2),
(10, 'Management', 1),
(11, 'Accounting', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `scode` int(11) NOT NULL,
  `sfname` varchar(20) NOT NULL,
  `smname` varchar(20) NOT NULL,
  `slname` varchar(20) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `sphone` varchar(11) NOT NULL,
  `collegelevel` int(1) NOT NULL,
  `gpno` varchar(7) DEFAULT NULL,
  `secno` int(11) NOT NULL,
  `fno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `scode`, `sfname`, `smname`, `slname`, `semail`, `sphone`, `collegelevel`, `gpno`, `secno`, `fno`) VALUES
(7, 1036, 'sahar', 'ahmed', 'mohsen', 'sahora@yahoo.com', '017847363', 4, 'G1', 11, 1),
(13, 4033, 'hossam', 'ahmed', 'hassan', 'hoss@yahoo.com', '0122622234', 5, 'G5', 9, 2),
(14, 2930, 'ahmed', 'mostafa', 'mohamed', 'medo@yahoo.com', '01226222313', 5, 'G5', 9, 2),
(15, 1077, 'marwa', 'magdy', 'samy', 'marwa@gmail.com', '0126543234', 4, 'G6', 9, 2),
(16, 4577, 'fady', 'gamel', 'metwally', 'fady@gmail.com', '0127654474', 4, 'G5', 11, 1),
(17, 9334, 'menna', 'kamal', 'ahmed', 'menna@gmail.com', '015345234', 4, 'G1', 11, 1),
(18, 9568, 'medo', 'ahmed', 'fahd', 'medo@gmail.com', '012343543', 4, 'G5', 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `tno` int(11) NOT NULL,
  `ttitle` varchar(30) NOT NULL,
  `tdetail` text NOT NULL,
  `tdate` date NOT NULL,
  `gpno` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewgpleader`
-- (See below for the actual view)
--
CREATE TABLE `viewgpleader` (
`gpno` varchar(7)
,`studentid` int(11)
,`sfname` varchar(20)
,`smname` varchar(20)
,`slname` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `field_courses`
--
DROP TABLE IF EXISTS `field_courses`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `field_courses`  AS  select `field`.`fdno` AS `fdno`,`field`.`fdname` AS `fdname`,`course`.`cname` AS `cname`,`course`.`cno` AS `cno` from (`course` join `field` on((`field`.`fdno` = `course`.`fdno`))) ;

-- --------------------------------------------------------

--
-- Structure for view `field_jobs`
--
DROP TABLE IF EXISTS `field_jobs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `field_jobs`  AS  select `field`.`fdno` AS `fdno`,`field`.`fdname` AS `fdname`,`jobs`.`jobtitle` AS `jobtitle`,`jobs`.`jobno` AS `jobno` from (`jobs` join `field` on((`field`.`fdno` = `jobs`.`fdno`))) ;

-- --------------------------------------------------------

--
-- Structure for view `viewgpleader`
--
DROP TABLE IF EXISTS `viewgpleader`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewgpleader`  AS  select `graduationproject`.`gpno` AS `gpno`,`graduationproject`.`studentid` AS `studentid`,`student`.`sfname` AS `sfname`,`student`.`smname` AS `smname`,`student`.`slname` AS `slname` from (`graduationproject` join `student` on((`graduationproject`.`studentid` = `student`.`sid`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cno`),
  ADD KEY `course_fd_fk` (`fdno`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `field`
--
ALTER TABLE `field`
  ADD PRIMARY KEY (`fdno`),
  ADD KEY `field_sec_fk` (`secno`),
  ADD KEY `field_faculty_fk` (`fno`);

--
-- Indexes for table `followup`
--
ALTER TABLE `followup`
  ADD PRIMARY KEY (`fupno`);

--
-- Indexes for table `graduationproject`
--
ALTER TABLE `graduationproject`
  ADD PRIMARY KEY (`gpno`),
  ADD UNIQUE KEY `studentid` (`studentid`),
  ADD KEY `gp_prof_fk` (`pemail`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobno`),
  ADD KEY `job_fd_fk` (`fdno`);

--
-- Indexes for table `prevprojects`
--
ALTER TABLE `prevprojects`
  ADD PRIMARY KEY (`projectno`),
  ADD KEY `prevprojects_prof_fk` (`pemail`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`pemail`),
  ADD UNIQUE KEY `UNIQUE` (`pphone`),
  ADD KEY `professor_field_fk` (`fdno`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`secno`),
  ADD KEY `sec_faculty_fk` (`fno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `UNIQUE2` (`semail`),
  ADD UNIQUE KEY `UNIQUE3` (`sphone`),
  ADD UNIQUE KEY `UNIQUE1` (`scode`),
  ADD KEY `s_sec_fk` (`secno`),
  ADD KEY `s_faculty_fk` (`fno`),
  ADD KEY `s_gp_fk` (`gpno`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`tno`),
  ADD KEY `task_gp_fk` (`gpno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `field`
--
ALTER TABLE `field`
  MODIFY `fdno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `followup`
--
ALTER TABLE `followup`
  MODIFY `fupno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prevprojects`
--
ALTER TABLE `prevprojects`
  MODIFY `projectno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `secno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `tno` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_fd_fk` FOREIGN KEY (`fdno`) REFERENCES `field` (`fdno`) ON DELETE NO ACTION;

--
-- Constraints for table `field`
--
ALTER TABLE `field`
  ADD CONSTRAINT `field_faculty_fk` FOREIGN KEY (`fno`) REFERENCES `faculty` (`fno`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `field_sec_fk` FOREIGN KEY (`secno`) REFERENCES `section` (`secno`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `graduationproject`
--
ALTER TABLE `graduationproject`
  ADD CONSTRAINT `gp_prof_fk` FOREIGN KEY (`pemail`) REFERENCES `professor` (`pemail`) ON UPDATE CASCADE,
  ADD CONSTRAINT `gp_student_fk` FOREIGN KEY (`studentid`) REFERENCES `student` (`sid`) ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `job_fd_fk` FOREIGN KEY (`fdno`) REFERENCES `field` (`fdno`) ON DELETE NO ACTION;

--
-- Constraints for table `prevprojects`
--
ALTER TABLE `prevprojects`
  ADD CONSTRAINT `prevprojects_prof_fk` FOREIGN KEY (`pemail`) REFERENCES `professor` (`pemail`) ON UPDATE CASCADE;

--
-- Constraints for table `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_field_fk` FOREIGN KEY (`fdno`) REFERENCES `field` (`fdno`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `sec_faculty_fk` FOREIGN KEY (`fno`) REFERENCES `faculty` (`fno`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `s_faculty_fk` FOREIGN KEY (`fno`) REFERENCES `faculty` (`fno`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `s_gp_fk` FOREIGN KEY (`gpno`) REFERENCES `graduationproject` (`gpno`) ON UPDATE CASCADE,
  ADD CONSTRAINT `s_sec_fk` FOREIGN KEY (`secno`) REFERENCES `section` (`secno`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_gp_fk` FOREIGN KEY (`gpno`) REFERENCES `graduationproject` (`gpno`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
