-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 09:49 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booktique`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'disha mhatre', 'dishamhatre22@gmail.com', 'drmtrmsrmram'),
(2, 'Surbhi', 'surbhimantri@gmail.com', 'surbhipass');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bisbn` int(11) NOT NULL,
  `bookname` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `bbranch` varchar(5) NOT NULL,
  `bsem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bisbn`, `bookname`, `author`, `bbranch`, `bsem`) VALUES
(13, 'nbcdj', 'jkffjrhg4rgu', 'it', 7),
(23, 'nnnn', 'mmmm', 'it', 7),
(103, 'ED', 'N. H. Dubey', 'extc', 1),
(111, 'SPA', 'Aryan Tipnis', 'it', 2),
(112, 'DLDA', 'Harish Narula', 'CMPN', 3),
(116, 'AM1', 'Kumbhojkar', 'it', 1),
(119, 'Electrical Networks', 'Rucha Naik', 'extc', 3),
(123, 'DCD', 'Rohan Shaikh', 'etrx', 3),
(125, 'Human Machine Intera', 'Rahul Bose', 'INST', 8),
(129, 'EDC', 'Drishti Israni', 'inst', 3),
(134, 'OSTL', 'Rupa Bhosale', 'cmpn', 4),
(144, 'AM4', 'Kumbhojkar', 'etrx', 4),
(149, 'hjhbchk', 'ncdkncbkd', 'cmpn', 1),
(172, 'DSIP', 'Ritika Suvarna', 'CMPN', 7),
(183, 'OOPM', 'Harshada Bhangle', 'cmpn', 3),
(192, 'AP2', 'Sahej Samtani', 'etrx', 2),
(202, 'AM2', 'Kumbhojkar', 'inst', 2),
(205, 'AISC', 'Pooja Vaidya', 'IT', 7),
(345, 'O.S.', 'Rahul Karte', 'it', 5),
(378, 'AC2', 'Harish Singh', 'cmpn', 2),
(413, 'DWM', 'Mahesh Mali', 'IT', 6),
(444, 'abc', 'xyz', 'cmpn', 1),
(571, 'Cloud Computing', 'Himesh Mejra', 'EXTC', 8),
(608, 'SE', 'Neha Naik', 'cmpn', 6),
(609, 'BEE', 'Aniket Sawant', 'extc', 1),
(645, 'TCS', 'Robert Huge', 'cmpn', 6),
(701, 'disha', 'disha', 'cmpn', 5),
(788, 'ML', 'Ashutosh Barve', 'CMPN', 7),
(845, 'AP1', 'Rahul Vaidya', 'inst', 1),
(912, 'CN', 'Mahesh Wagh', 'it', 5),
(964, 'COA', 'Prashant Gupta', 'cmpn', 4),
(990, 'CSS', 'Riya Singh', 'EXTC', 6);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `sem` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `phone`, `address`, `branch`, `sem`, `email`, `password`) VALUES
(1, 'disha mhatre', 7894561230, 'thane', 'cmpn', 5, 'dishamhatre22@gmail.com', 'drm'),
(2, 'sahil', 9855745612, 'mulund', 'cmpn', 4, 'sahilgangwani3@gmail.com', 'sahil'),
(3, 'rucha', 8888888888, 'vile parle', 'it', 1, 'ahgfd@gmail.com', '1234'),
(4, 'tejas', 9989558746, 'bhandup', 'etrx', 2, 'tejas@gmail.com', '090'),
(5, 'omkar narvade', 7738565705, 'thane', 'extc', 3, 'nomkar99@gmail.com', 'omi99'),
(6, 'saloni shedge', 9819784402, 'chembur', 'inst', 5, 'salom23@gmail.com', 'smartsal'),
(7, 'simran sahetia', 9869465716, 'bhiwandi', 'cmpn', 4, 'simoo@gmail.com', 'simdishsal'),
(8, 'shilpa mhatre', 9969739311, 'ghatkopar', 'etrx', 6, 'shilpa72@gmail.com', 'dishtej'),
(9, 'ratish mhatre', 9869465716, 'parel', 'it', 1, 'ratishmh@gmail.com', 'drmtrmsrm'),
(10, 'muskan asrani', 9855476203, 'mulund', 'extc', 3, 'muski@gmail.com', 'muskaaan23'),
(11, 'juilee', 9658965896, 'vile parle', 'inst', 7, 'juiii96@gmail.com', 'juya'),
(12, 'nitesh', 8745441203, 'alibag', 'inst', 6, 'nits@gmail', 'nits@123'),
(13, 'naina', 9854771200, 'vashi', 'cmpn', 3, 'abc@gmail.com', '0011'),
(15, 'pranali', 9999999999, 'mulund', 'it', 5, 'pran@gmail.com', 'yoyo'),
(20, 'rohini', 7451102300, 'khar', 'etrx', 4, 'rohini123@gmail.com', 'roh'),
(21, 'neha', 8877445511, 'dadar', 'it', 8, 'xyz@gmail.com', 'xyzz'),
(22, 'Nirupama', 9517531597, 'thane', 'cmpn', 1, 'niruu@gmail.com', '12345'),
(23, 'sanika', 8876565643, 'bhandup', 'cmpn', 5, 'san@gmail.com', 'san'),
(24, 'sunita', 7877878766, 'chembur', 'cmpn', 5, 'sunita@gmail.com', 'sunita'),
(56, 'arya', 9511475320, 'chembur', 'cmpn', 3, 'rttr@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `swap`
--

CREATE TABLE `swap` (
  `isbn` int(11) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `bauthor` varchar(20) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `sem` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swap`
--

INSERT INTO `swap` (`isbn`, `bname`, `bauthor`, `branch`, `sem`, `sid`) VALUES
(120, 'SPCC', 'Supriya Pathak', 'inst', 5, 6),
(323, 'C.G.', 'Mehak Koli', 'cmpn', 4, 2),
(512, 'AM4', 'Kumbhojkar', 'INST', 4, 8),
(565, 'Data Structures', 'Reema Thareja', 'extc', 3, 5),
(713, 'ECCF', 'Ravish Singhvi', 'extc', 3, 5),
(810, 'MCC', 'Diya Mirza', 'ETRX', 7, 24),
(888, 'evs', 'disha', 'cmpn', 1, 22);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v1`
-- (See below for the actual view)
--
CREATE TABLE `v1` (
`bisbn` int(11)
,`bookname` varchar(20)
,`author` varchar(20)
,`bbranch` varchar(5)
,`bsem` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v2`
-- (See below for the actual view)
--
CREATE TABLE `v2` (
`bisbn` int(11)
,`bookname` varchar(20)
,`author` varchar(20)
,`bbranch` varchar(5)
,`bsem` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v3`
-- (See below for the actual view)
--
CREATE TABLE `v3` (
`name` varchar(20)
,`branch` varchar(10)
,`sem` int(11)
,`email` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v4`
-- (See below for the actual view)
--
CREATE TABLE `v4` (
`id` int(11)
,`name` varchar(20)
,`phone` bigint(20)
,`address` varchar(20)
,`branch` varchar(10)
,`sem` int(11)
,`email` varchar(30)
,`password` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v5`
-- (See below for the actual view)
--
CREATE TABLE `v5` (
`id` int(11)
,`name` varchar(20)
,`phone` bigint(20)
,`address` varchar(20)
,`branch` varchar(10)
,`sem` int(11)
,`email` varchar(30)
,`password` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v6`
-- (See below for the actual view)
--
CREATE TABLE `v6` (
`name` varchar(20)
,`id` int(11)
,`isbn` int(11)
,`bname` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v7`
-- (See below for the actual view)
--
CREATE TABLE `v7` (
`id` int(11)
,`name` varchar(20)
,`phone` bigint(20)
,`address` varchar(20)
,`branch` varchar(10)
,`sem` int(11)
,`email` varchar(30)
,`password` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `v1`
--
DROP TABLE IF EXISTS `v1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v1`  AS  (select `books`.`bisbn` AS `bisbn`,`books`.`bookname` AS `bookname`,`books`.`author` AS `author`,`books`.`bbranch` AS `bbranch`,`books`.`bsem` AS `bsem` from `books` where (`books`.`bbranch` = 'cmpn')) ;

-- --------------------------------------------------------

--
-- Structure for view `v2`
--
DROP TABLE IF EXISTS `v2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v2`  AS  (select `books`.`bisbn` AS `bisbn`,`books`.`bookname` AS `bookname`,`books`.`author` AS `author`,`books`.`bbranch` AS `bbranch`,`books`.`bsem` AS `bsem` from `books` where (`books`.`bbranch` = 'ETRX')) ;

-- --------------------------------------------------------

--
-- Structure for view `v3`
--
DROP TABLE IF EXISTS `v3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v3`  AS  (select `students`.`name` AS `name`,`students`.`branch` AS `branch`,`students`.`sem` AS `sem`,`students`.`email` AS `email` from (`students` join `admin` on((`students`.`name` = `admin`.`name`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `v4`
--
DROP TABLE IF EXISTS `v4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v4`  AS  (select `students`.`id` AS `id`,`students`.`name` AS `name`,`students`.`phone` AS `phone`,`students`.`address` AS `address`,`students`.`branch` AS `branch`,`students`.`sem` AS `sem`,`students`.`email` AS `email`,`students`.`password` AS `password` from `students` group by `students`.`sem` having (`students`.`sem` = min(`students`.`sem`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v5`
--
DROP TABLE IF EXISTS `v5`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v5`  AS  (select `students`.`id` AS `id`,`students`.`name` AS `name`,`students`.`phone` AS `phone`,`students`.`address` AS `address`,`students`.`branch` AS `branch`,`students`.`sem` AS `sem`,`students`.`email` AS `email`,`students`.`password` AS `password` from `students` group by `students`.`sem` having (`students`.`sem` <= avg(`students`.`sem`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v6`
--
DROP TABLE IF EXISTS `v6`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v6`  AS  (select `students`.`name` AS `name`,`students`.`id` AS `id`,`swap`.`isbn` AS `isbn`,`swap`.`bname` AS `bname` from (`students` join `swap` on((`students`.`id` = `swap`.`sid`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `v7`
--
DROP TABLE IF EXISTS `v7`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v7`  AS  (select `students`.`id` AS `id`,`students`.`name` AS `name`,`students`.`phone` AS `phone`,`students`.`address` AS `address`,`students`.`branch` AS `branch`,`students`.`sem` AS `sem`,`students`.`email` AS `email`,`students`.`password` AS `password` from `students` where (`students`.`name` like '_i%')) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bisbn`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `swap`
--
ALTER TABLE `swap`
  ADD PRIMARY KEY (`isbn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
