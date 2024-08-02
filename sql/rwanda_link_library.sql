-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 09:16 PM
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
-- Database: `rwanda_link_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `ac_id` int(11) NOT NULL,
  `ac_name` varchar(255) NOT NULL,
  `ac_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`ac_id`, `ac_name`, `ac_status`) VALUES
(1, '2022-2023', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_first_name` varchar(255) NOT NULL,
  `a_last_name` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_telphone` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_gender` varchar(255) NOT NULL,
  `a_function` varchar(255) NOT NULL,
  `a_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_first_name`, `a_last_name`, `a_email`, `a_telphone`, `a_password`, `a_gender`, `a_function`, `a_profile`) VALUES
(1, 'gentille  ', 'umutoni', 'g.umutoni@alustudent.com', '+250780662547', '12345', 'female', 'admin', 'Male.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `b_id` int(11) NOT NULL,
  `b_SN` int(11) NOT NULL,
  `b_Author` longtext NOT NULL,
  `b_title` longtext NOT NULL,
  `b_Year_Publisher` varchar(255) NOT NULL,
  `b_Publisher` varchar(255) NOT NULL,
  `b_Edition` varchar(255) NOT NULL,
  `b_ISBN_ISSN` longtext NOT NULL,
  `b_Call_no` varchar(255) NOT NULL,
  `d_id` int(11) NOT NULL,
  `book_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `b_SN`, `b_Author`, `b_title`, `b_Year_Publisher`, `b_Publisher`, `b_Edition`, `b_ISBN_ISSN`, `b_Call_no`, `d_id`, `book_type_id`) VALUES
(9, 9, 'MARK LASSOFF ', 'JAVA Programming For Biginners', '2017', 'Packt', '1st', '978-1-78829-629-8', '005.133(1)LA2017JA', 1, 1),
(11, 11, 'MARK LASSOFF ', 'JAVA Programming For Biginners', '2017', 'Packt', '1st', '978-1-78829-629-8', '005.133(1)LA2017JA', 1, 1),
(14, 14, 'MARK LASSOFF', 'JAVA Programming For Biginners', '2017', 'Packt', '1st', '978-1-78829-629-8', '005.133(7)LA2017JA', 1, 1),
(15, 15, 'BRIAN WOOD', 'AI Adobe Illustrator CC 2018 Release', '2018', 'Pearson  ', '-', '13:978-0-13-485249-2', '006-686(1)WO2018AD', 1, 1),
(16, 16, 'BRIAN WOOD', 'AI Adobe Illustrator CC 2018 Release', '2018', 'Pearson  ', '-', '13:978-0-13-485249-2', '006-686(1)WO2018AD', 1, 1),
(17, 17, 'BRIAN WOOD', 'AI Adobe Illustrator CC 2018 Release', '2018', 'Pearson  ', '-', '13:978-0-13-485249-2', '006-686(1)WO2018AD', 1, 1),
(18, 18, 'BRIAN WOOD', 'AI Adobe Illustrator CC 2018 Release', '2018', 'Pearson  ', '-', '13:978-0-13-485249-2', '006-686(1)WO2018AD', 1, 1),
(19, 19, 'BRIAN WOOD', 'AI Adobe Illustrator CC 2018 Release', '2018', 'Pearson  ', '-', '13:978-0-13-485249-2', '006-686(1)WO2018AD', 1, 1),
(20, 20, 'BRIAN WOOD', 'AI Adobe Illustrator CC 2018 Release', '2018', 'Pearson  ', '-', '13:978-0-13-485249-2', '006-686(1)WO2018AD', 1, 1),
(21, 21, 'THOMAS A.LIMONCELLI. CHRISTINAJ.HOGAN STRATA R.CHALUP', 'The Practice Of System And Network Administration Vol 1', '2017', 'Addison Wesley', '3rd', '13:978-0-91916-8', '004.6068(1)LI2017PR', 1, 1),
(22, 22, 'THOMAS A.LIMONCELLI. CHRISTINAJ.HOGAN STRATA R.CHALUP', 'The Practice Of System And Network Administration Vol 1', '2017', 'Addison Wesley', '3rd', '13:978-0-91916-8', '004.6068(1)LI2017PR', 1, 1),
(23, 23, 'THOMAS A.LIMONCELLI. CHRISTINAJ.HOGAN STRATA R.CHALUP', 'The Practice Of System And Network Administration Vol 1', '2017', 'Addison Wesley', '3rd', '13:978-0-91916-8', '004.6068(1)LI2017PR', 1, 1),
(24, 24, 'THOMAS A.LIMONCELLI. CHRISTINAJ.HOGAN STRATA R.CHALUP', 'The Practice Of System And Network Administration Vol 1', '2017', 'Addison Wesley', '3rd', '13:978-0-91916-8', '004.6068(1)LI2017PR', 1, 1),
(25, 25, 'THOMAS A.LIMONCELLI. CHRISTINAJ.HOGAN STRATA R.CHALUP', 'The Practice Of System And Network Administration Vol 1', '2017', 'Addison Wesley', '3rd', '13:978-0-91916-8', '004.6068(1)LI2017PR', 1, 1),
(26, 26, 'THOMAS A.LIMONCELLI. CHRISTINAJ.HOGAN STRATA R.CHALUP', 'The Practice Of System And Network Administration Vol 1', '2017', 'Addison Wesley', '3rd', '13:978-0-91916-8', '004.6068(1)LI2017PR', 1, 1),
(27, 27, 'THOMAS A.LIMONCELLI. CHRISTINAJ.HOGAN STRATA R.CHALUP', 'The Practice Of System And Network Administration Vol 1', '2017', 'Addison Wesley', '3rd', '13:978-0-91916-8', '004.6068(1)LI2017PR', 1, 1),
(28, 28, 'THOMAS A.LIMONCELLI. CHRISTINAJ.HOGAN STRATA R.CHALUP', 'The Practice Of System And Network Administration Vol 1', '2017', 'Addison Wesley', '3rd', '13:978-0-91916-8', '004.6068(1)LI2017PR', 1, 1),
(29, 29, 'BARRY B.BREY', 'Intel Microprocessors', '2014', 'Pearson', '8th', '978-1-29202-737-1', '-', 1, 1),
(30, 30, 'BARRY B.BREY', 'Intel Microprocessors', '2014', 'Pearson', '8th', '978-1-29202-737-1', '-', 1, 1),
(31, 31, 'BARRY BURD,PHD', 'Beginning Programming With Java For Dummies', '2017', 'John Weley', '5th', '978-1-119-23553-8', '005.133(1)BU2017BE', 1, 1),
(32, 32, 'BARRY BURD,PHD', 'Beginning Programming With Java For Dummies', '2017', 'John Weley', '5th', '978-1-119-23553-8', '005.133(1)BU2017BE', 1, 1),
(33, 33, 'BARRY BURD,PHD', 'Beginning Programming With Java For Dummies', '2017', 'John Weley', '5th', '978-1-119-23553-8', '005.133(1)BU2017BE', 1, 1),
(34, 34, 'BARRY BURD,PHD', 'Beginning Programming With Java For Dummies', '2017', 'John Weley', '5th', '978-1-119-23553-8', '005.133(1)BU2017BE', 1, 1),
(35, 35, 'BARRY BURD,PHD', 'Beginning Programming With Java For Dummies', '2017', 'John Weley', '5th', '978-1-119-23553-8', '005.133(1)BU2017BE', 1, 1),
(36, 36, 'BARRY BURD,PHD', 'Beginning Programming With Java For Dummies', '2017', 'John Weley', '5th', '978-1-119-23553-8', '005.133(1)BU2017BE', 1, 1),
(37, 37, 'BARRY BURD,PHD', 'Beginning Programming With Java For Dummies', '2017', 'John Weley', '5th', '978-1-119-23553-8', '005.133(1)BU2017BE', 1, 1),
(38, 38, 'BARRY BURD,PHD', 'Beginning Programming With Java For Dummies', '2017', 'John Weley', '5th', '978-1-119-23553-8', '005.133(1)BU2017BE', 1, 1),
(39, 39, 'BARRY BURD,PHD', 'Beginning Programming With Java For Dummies', '2017', 'John Weley', '5th', '978-1-119-23553-8', '005.133(1)BU2017BE', 1, 1),
(40, 40, 'BARRY BURD,PHD', 'Beginning Programming With Java For Dummies', '2017', 'John Weley', '5th', '978-1-119-23553-8', '005.133(1)BU2017BE', 1, 1),
(41, 41, 'BARRY BURD,PHD', 'Beginning Programming With Java For Dummies', '2017', 'John Weley', '5th', '978-1-119-23553-8', '005.133(1)BU2017BE', 1, 1),
(42, 42, 'BARRY BURD,PHD', 'Beginning Programming With Java For Dummies', '2017', 'John Weley', '5th', '978-1-119-23553-8', '005.133(1)BU2017BE', 1, 1),
(43, 43, 'BARRY BURD,PHD', 'Beginning Programming With Java For Dummies', '2017', 'John Weley', '5th', '978-1-119-23553-8', '005.133(1)BU2017BE', 1, 1),
(44, 44, 'STEPHEN PRATA', 'C Primer Plus', '2014', 'Addison Wesley', '6th', '13:978-0-321-92842-9', '005.13(1)PR2014CP', 1, 1),
(45, 45, 'STEPHEN PRATA', 'C Primer Plus', '2014', 'Addison Wesley', '6th', '13:978-0-321-92842-9', '005.13(1)PR2014CP', 1, 1),
(46, 46, 'JENNIFER DUFFY', 'Microsoft Word 2010 Introductory', '2011 ', 'Cengage Learning', 'International Ed', '13:978-1-111-53158-4', '-', 1, 1),
(47, 47, 'ELSABETH AISNER REDING. LYNN WERMERS', 'Microsoft Excel 2010 Introductory', '2011', 'Cengage Learning', 'International Ed', '13:978-1-111-52832-4', '-', 1, 1),
(48, 48, 'LISA FRIEDRICHSEN', 'Microsoft Excel 2010 Introductory', '2011', 'Cengage Learning', 'International Ed', '13:978-1-111-52832-4', '-', 1, 1),
(49, 49, 'JENNIFER DUFFY', 'Microsoft Access 2010 Introductory', '2011', 'Cengage Learning', 'International Ed', '13:978-1-111-52832-4', '-', 1, 1),
(50, 50, 'JENNIFER DUFFY', 'Microsoft Access 2010 Introductory', '2011', 'Cengage Learning', 'International Ed', '13:978-1-111-52832-4', '-', 1, 1),
(51, 51, 'PETER NORTON\'S', 'Introduction To Computers', '2006', 'Mc Graw Hill', '6th', '0-07-297890-2', '-', 1, 1),
(52, 52, 'PETER NORTON\'S', 'Introduction To Computers', '2006', 'Mc Graw Hill', '6th', '0-07-297890-2', '-', 1, 1),
(53, 53, 'AMAR K.GANGULY', 'Architecture Progamming And Applications Of Advanced Microprocessors ', '2009', 'Alpha Science', '-', '978-1-84265-481-1', '004(1)GA2009AR', 1, 1),
(54, 54, 'AMAR K.GANGULY', 'Architecture Progamming And Applications Of Advanced Microprocessors ', '2009', 'Alpha Science', '-', '978-1-84265-481-1', '004(1)GA2009AR', 1, 1),
(55, 55, 'STEPHEN J.CHAPMAN', 'Essentials Of MATLAB Programming', '2009', 'Cengage Learning', '2nd', '13:978-0-495-29570-9', '-', 1, 1),
(56, 56, 'STEPHEN J.CHAPMAN', 'Essentials Of MATLAB Programming', '2009', 'Cengage Learning', '2nd', '13:978-0-495-29570-9', '-', 1, 1),
(57, 57, 'JOY FREEDMAN', 'Microsoft Word 2013', '2013', 'Plain &simple', '-', '978-0-7356-6938-3', '005.52FR2013MI', 1, 1),
(58, 58, 'JERRY JOYCE MARIANNE MOON ', 'Plain Simple Windows', '2015 ', 'Redmond', '4th', '978-0-7356-2666-9', '005.446JO2010WI', 1, 1),
(59, 59, 'JOSEPH J.DISTEFANO II.PHD ALLEN R.STUBBERUD, PHD. IVAN J.WILLIAMS, PHD', 'Feedback And Control System', '1995', 'Mc Graw Hill', '2nd', '978-0-07-182948-9', '629.83(1)DI1995FE', 1, 1),
(60, 60, 'JOSEPH J.DISTEFANO II.PHD ALLEN R.STUBBERUD, PHD. IVAN J.WILLIAMS, PHD', 'Feedback And Control System', '1995', 'Mc Graw Hill', '2nd', '978-0-07-182948-9', '629.83(1)DI1995FE', 1, 1),
(61, 61, 'GAY S.HORSTMANN', 'CORE Java Vollime II Advanced Features', '2017', 'Prentice Hall', '10th', '13:978-0-13-417729-8', '005.133HO2017CO', 1, 1),
(62, 62, 'BRIAN W.KERNIGHAN.  DENNIS M.RITCHIE', 'The C Programming Language ', '1988', 'Prentice Hall', '2nd', '0-13-110362-8', '005.133(1)KE1988', 1, 1),
(63, 63, 'BRIAN W.KERNIGHAN.  DENNIS M.RITCHIE', 'The C Programming Language ', '1988', 'Prentice Hall', '2nd', '0-13-110362-8', '005.133(1)KE1988', 1, 1),
(64, 64, 'PAUL DEITEL HARVEY DEITEL', 'C How To Program With AN Introduction To C++ ', '2016', 'Pearson', '8th', '10-1-292-119097-X', '005.133(1)DE2016C++', 1, 1),
(65, 65, 'PAUL DEITEL HARVEY DEITEL', 'C How To Program With AN Introduction To C++ ', '2016', 'Pearson', '8th', '10-1-292-119097-X', '005.133(1)DE2016C++', 1, 1),
(66, 66, 'ELAINE MARMEL', 'Office 2016 Simplified', '2016', 'John Weley', '-', '978-1-119-07474-8', '005.5MA2015OF', 1, 1),
(67, 67, 'SHELLY FREUND VERMAAT', 'Introduction To Computers ', '2011', 'Cengage Learning', '8th', '13:978-1-4390-8131-0', '004SH2011IN', 1, 1),
(68, 68, 'SHELLY FREUND VERMAAT', 'Introduction To Computers ', '2011', 'Cengage Learning', '8th', '13:978-1-4390-8131-0', '004SH2011IN', 1, 1),
(69, 69, 'EVI NEMETH. GARTH SNYDER. TRENT R.HEIN BEN WHALEY. DAN MACKIN', 'Unix AND Lunix System Administration Handbook', '2018', 'Addison Wesley ', '5th', '13:978-0-13-427755-4 ', '005.432(1)NE2018UN', 1, 1),
(70, 70, 'EVI NEMETH. GARTH SNYDER. TRENT R.HEIN BEN WHALEY. DAN MACKIN', 'Unix AND Lunix System Administration Handbook', '2018', 'Addison Wesley ', '5th', '13:978-0-13-427755-4 ', '005.432(1)NE2018UN', 1, 1),
(71, 71, 'EVI NEMETH. GARTH SNYDER. TRENT R.HEIN BEN WHALEY. DAN MACKIN', 'Unix AND Lunix System Administration Handbook', '2018', 'Addison Wesley ', '5th', '13:978-0-13-427755-4 ', '005.432(1)NE2018UN', 1, 1),
(72, 72, 'EVI NEMETH. GARTH SNYDER. TRENT R.HEIN BEN WHALEY. DAN MACKIN', 'Unix AND Lunix System Administration Handbook', '2018', 'Addison Wesley ', '5th', '13:978-0-13-427755-4 ', '005.432(1)NE2018UN', 1, 1),
(73, 73, 'EVI NEMETH. GARTH SNYDER. TRENT R.HEIN BEN WHALEY. DAN MACKIN', 'Unix AND Lunix System Administration Handbook', '2018', 'Addison Wesley ', '5th', '13:978-0-13-427755-4 ', '005.432(1)NE2018UN', 1, 1),
(74, 74, 'EVI NEMETH. GARTH SNYDER. TRENT R.HEIN BEN WHALEY. DAN MACKIN', 'Unix AND Lunix System Administration Handbook', '2018', 'Addison Wesley ', '5th', '13:978-0-13-427755-4 ', '005.432(1)NE2018UN', 1, 1),
(75, 75, 'EVI NEMETH. GARTH SNYDER. TRENT R.HEIN BEN WHALEY. DAN MACKIN', 'Unix AND Lunix System Administration Handbook', '2018', 'Addison Wesley ', '5th', '13:978-0-13-427755-4 ', '005.432(1)NE2018UN', 1, 1),
(76, 76, 'EVI NEMETH. GARTH SNYDER. TRENT R.HEIN BEN WHALEY. DAN MACKIN', 'Unix AND Lunix System Administration Handbook', '2018', 'Addison Wesley ', '5th', '13:978-0-13-427755-4 ', '005.432(1)NE2018UN', 1, 1),
(77, 77, 'PAUL DEITEL HARVEY DEITEL', 'Java TM How To Program Early Objects', '2015', 'Pearson', '10th', '10-1-292-01819-4', '005.133.DE2015JA', 1, 1),
(78, 78, 'JAY LEE BEN WANG', 'Computer-Aided Maintenance Methodologies And Practices', '1999', 'Springer Science', '-', '978-1-4613-7421-3', '658.2020285LE1999CO', 1, 1),
(79, 79, 'ANDREW S.TENENBAUN DAVID J.WETHERALL', 'Computer Networks ', '2014', 'Pearson', '5th', '978-1-29202-422-6', '004.6(1)TA2014CO', 1, 1),
(80, 80, 'ANDREW S.TENENBAUN DAVID J.WETHERALL', 'Computer Networks ', '2014', 'Pearson', '5th', '978-1-29202-422-6', '004.6(1)TA2014CO', 1, 1),
(81, 81, 'ANDREW S.TENENBAUN DAVID J.WETHERALL', 'Computer Networks ', '2014', 'Pearson', '5th', '978-1-29202-422-6', '004.6(1)TA2014CO', 1, 1),
(82, 82, 'ANDREW S.TENENBAUN DAVID J.WETHERALL', 'Computer Networks ', '2014', 'Pearson', '5th', '978-1-29202-422-6', '004.6(1)TA2014CO', 1, 1),
(83, 83, 'ANDREW S.TENENBAUN DAVID J.WETHERALL', 'Computer Networks ', '2014', 'Pearson', '5th', '978-1-29202-422-6', '004.6(1)TA2014CO', 1, 1),
(84, 84, 'ANDREW S.TENENBAUN DAVID J.WETHERALL', 'Computer Networks ', '2014', 'Pearson', '5th', '978-1-29202-422-6', '004.6(1)TA2014CO', 1, 1),
(85, 85, 'ANDREW S.TENENBAUN DAVID J.WETHERALL', 'Computer Networks ', '2014', 'Pearson', '5th', '978-1-29202-422-6', '004.6(1)TA2014CO', 1, 1),
(86, 86, 'CRAIG HUNT', 'TCP/IP Network Administration', '2002', '-', '3rd', '978-0-596-00297-8', '-', 1, 1),
(87, 87, 'CRAIG HUNT', 'TCP/IP Network Administration', '2002', '-', '3rd', '978-0-596-00297-8', '-', 1, 1),
(88, 88, 'CRAIG HUNT', 'TCP/IP Network Administration', '2002', '-', '3rd', '978-0-596-00297-8', '-', 1, 1),
(89, 89, 'CRAIG HUNT', 'TCP/IP Network Administration', '2002', '-', '3rd', '978-0-596-00297-8', '-', 1, 1),
(90, 90, 'CRAIG HUNT', 'TCP/IP Network Administration', '2002', '-', '3rd', '978-0-596-00297-8', '-', 1, 1),
(91, 91, 'CRAIG HUNT', 'TCP/IP Network Administration', '2002', '-', '3rd', '978-0-596-00297-8', '-', 1, 1),
(92, 92, 'CRAIG HUNT', 'TCP/IP Network Administration', '2002', '-', '3rd', '978-0-596-00297-8', '-', 1, 1),
(93, 93, 'CRAIG HUNT', 'TCP/IP Network Administration', '2002', '-', '3rd', '978-0-596-00297-8', '-', 1, 1),
(94, 94, 'BEHROUZ A. FOROUZAN', 'Data Communications And Networking ', '2013 ', 'Mc Graw Hill', '5th', '978-0-07-337622-6', '004.6(1)FO2013DA', 1, 1),
(95, 95, 'BEHROUZ A. FOROUZAN', 'Data Communications And Networking ', '2013 ', 'Mc Graw Hill', '5th', '978-0-07-337622-6', '004.6(1)FO2013DA', 1, 1),
(96, 96, 'BEHROUZ A. FOROUZAN', 'Data Communications And Networking ', '2013 ', 'Mc Graw Hill', '5th', '978-0-07-337622-6', '004.6(1)FO2013DA', 1, 1),
(97, 97, 'BEHROUZ A. FOROUZAN', 'Data Communications And Networking ', '2013 ', 'Mc Graw Hill', '5th', '978-0-07-337622-6', '004.6(1)FO2013DA', 1, 1),
(98, 98, 'BEHROUZ A. FOROUZAN', 'Data Communications And Networking ', '2013 ', 'Mc Graw Hill', '5th', '978-0-07-337622-6', '004.6(1)FO2013DA', 1, 1),
(99, 99, 'BEHROUZ A. FOROUZAN', 'Data Communications And Networking ', '2013 ', 'Mc Graw Hill', '5th', '978-0-07-337622-6', '004.6(1)FO2013DA', 1, 1),
(100, 100, 'BEHROUZ A. FOROUZAN', 'Data Communications And Networking ', '2013 ', 'Mc Graw Hill', '5th', '978-0-07-337622-6', '004.6(1)FO2013DA', 1, 1),
(101, 101, 'RAMON NASTASE', 'Computer Networking Beginner\'s Guide For Mastering Computer Neyworking Ans The OSI Model', '2018', 'Amazon', '-', '978-1-97337341-4', '004.6(1)NA2018CO', 1, 1),
(102, 102, 'RAMON NASTASE', 'Computer Networking Beginner\'s Guide For Mastering Computer Neyworking Ans The OSI Model', '2018', 'Amazon', '-', '978-1-97337341-4', '004.6(1)NA2018CO', 1, 1),
(103, 103, 'RAMON NASTASE', 'Computer Networking Beginner\'s Guide For Mastering Computer Neyworking Ans The OSI Model', '2018', 'Amazon', '-', '978-1-97337341-4', '004.6(1)NA2018CO', 1, 1),
(104, 104, 'RAMON NASTASE', 'Computer Networking Beginner\'s Guide For Mastering Computer Neyworking Ans The OSI Model', '2018', 'Amazon', '-', '978-1-97337341-4', '004.6(1)NA2018CO', 1, 1),
(105, 105, 'RAMON NASTASE', 'Computer Networking Beginner\'s Guide For Mastering Computer Neyworking Ans The OSI Model', '2018', 'Amazon', '-', '978-1-97337341-4', '004.6(1)NA2018CO', 1, 1),
(106, 106, 'RAMON NASTASE', 'Computer Networking Beginner\'s Guide For Mastering Computer Neyworking Ans The OSI Model', '2018', 'Amazon', '-', '978-1-97337341-4', '004.6(1)NA2018CO', 1, 1),
(107, 107, 'FR. HEATHCOTE, P.M. HEATHCOTE, O.H.U.HEATHCOTE, R.P.RICHARDS', 'Pass ECDL5 Modules 1-7', '2009', 'Payne Gallway', '1st', '978-1-905292-38-2', '005HE2009PA', 1, 1),
(108, 108, 'DAVID A.PATTERSON JOHN L.HEINNESSY', 'Computer Organization And Design The  Hardware/Software Interface', '2014', 'Morgan Kaufmann', '5th', '978-0-12-407726-3', '004.21PA2013CO', 1, 1),
(109, 109, 'BERND S. PALM ALF YARWOOD', 'Introduction To AutoCard @2017 2D And 3d Design', '2017', 'Routledge', '1st', '978-1-138-19198-3', '620.0042028553(1)PA2017IN', 1, 1),
(110, 110, 'BERND S. PALM ALF YARWOOD', 'Introduction To AutoCard @2017 2D And 3d Design', '2017', 'Routledge', '1st', '978-1-138-19198-3', '620.0042028553(1)PA2017IN', 1, 1),
(111, 111, 'BERND S. PALM ALF YARWOOD', 'Introduction To AutoCard @2017 2D And 3d Design', '2017', 'Routledge', '1st', '978-1-138-19198-3', '620.0042028553(1)PA2017IN', 1, 1),
(112, 112, 'BERND S. PALM ALF YARWOOD', 'Introduction To AutoCard @2017 2D And 3d Design', '2017', 'Routledge', '1st', '978-1-138-19198-3', '620.0042028553(1)PA2017IN', 1, 1),
(113, 113, 'BERND S. PALM ALF YARWOOD', 'Introduction To AutoCard @2017 2D And 3d Design', '2017', 'Routledge', '1st', '978-1-138-19198-3', '620.0042028553(1)PA2017IN', 1, 1),
(114, 114, 'BERND S. PALM ALF YARWOOD', 'Introduction To AutoCard @2017 2D And 3d Design', '2017', 'Routledge', '1st', '978-1-138-19198-3', '620.0042028553(1)PA2017IN', 1, 1),
(115, 115, 'BERND S. PALM ALF YARWOOD', 'Introduction To AutoCard @2017 2D And 3d Design', '2017', 'Routledge', '1st', '978-1-138-19198-3', '620.0042028553(1)PA2017IN', 1, 1),
(116, 116, 'BERND S. PALM ALF YARWOOD', 'Introduction To AutoCard @2017 2D And 3d Design', '2017', 'Routledge', '1st', '978-1-138-19198-3', '620.0042028553(1)PA2017IN', 1, 1),
(117, 117, 'BERND S. PALM ALF YARWOOD', 'Introduction To AutoCard @2017 2D And 3d Design', '2017', 'Routledge', '1st', '978-1-138-19198-3', '620.0042028553(1)PA2017IN', 1, 1),
(118, 118, 'BERND S. PALM ALF YARWOOD', 'Introduction To AutoCard @2017 2D And 3d Design', '2017', 'Routledge', '1st', '978-1-138-19198-3', '620.0042028553(1)PA2017IN', 1, 1),
(119, 119, 'MIKE MEYERS\'', 'Managing And Troubleshooting PCs', '2016', 'Mc Graw Hill', '5th', '978-1-25-958954-6', '621.39160288(1)ME2016MA', 1, 1),
(120, 120, 'MIKE MEYERS\'', 'Managing And Troubleshooting PCs', '2016', 'Mc Graw Hill', '5th', '978-1-25-958954-6', '621.39160288(1)ME2016MA', 1, 1),
(121, 121, 'MIKE MEYERS\'', 'Managing And Troubleshooting PCs', '2016', 'Mc Graw Hill', '5th', '978-1-25-958954-6', '621.39160288(1)ME2016MA', 1, 1),
(122, 122, 'MIKE MEYERS\'', 'Managing And Troubleshooting PCs', '2016', 'Mc Graw Hill', '5th', '978-1-25-958954-6', '621.39160288(1)ME2016MA', 1, 1),
(123, 123, 'MIKE MEYERS\'', 'Managing And Troubleshooting PCs', '2016', 'Mc Graw Hill', '5th', '978-1-25-958954-6', '621.39160288(1)ME2016MA', 1, 1),
(124, 124, 'MIKE MEYERS\'', 'Managing And Troubleshooting PCs', '2016', 'Mc Graw Hill', '5th', '978-1-25-958954-6', '621.39160288(1)ME2016MA', 1, 1),
(125, 125, 'KELLY KORDES ANTON TINA DEJARLD', 'IS Adobe In Design CC 2018 Release', '2018', 'Adobe ', '-', '13:978-0-13-485250-8', '686.22544536(1)KO2018AD', 1, 1),
(126, 126, 'KELLY KORDES ANTON TINA DEJARLD', 'IS Adobe In Design CC 2018 Release', '2018', 'Adobe ', '-', '13:978-0-13-485250-8', '686.22544536(1)KO2018AD', 1, 1),
(127, 127, 'KELLY KORDES ANTON TINA DEJARLD', 'IS Adobe In Design CC 2018 Release', '2018', 'Adobe ', '-', '13:978-0-13-485250-8', '686.22544536(1)KO2018AD', 1, 1),
(128, 128, 'KELLY KORDES ANTON TINA DEJARLD', 'IS Adobe In Design CC 2018 Release', '2018', 'Adobe ', '-', '13:978-0-13-485250-8', '686.22544536(1)KO2018AD', 1, 1),
(129, 129, 'KELLY KORDES ANTON TINA DEJARLD', 'IS Adobe In Design CC 2018 Release', '2018', 'Adobe ', '-', '13:978-0-13-485250-8', '686.22544536(1)KO2018AD', 1, 1),
(130, 130, 'ALAN CLEMENTD ', 'Principles Of Computer Hardware', '2006', 'Oxford', '4th', '978-0-19-927313-3', '621.39(1)CL2006PR', 1, 1),
(131, 131, 'ALAN CLEMENTD ', 'Principles Of Computer Hardware', '2006', 'Oxford', '4th', '978-0-19-927313-3', '621.39(1)CL2006PR', 1, 1),
(132, 132, 'ALAN CLEMENTD ', 'Principles Of Computer Hardware', '2006', 'Oxford', '4th', '978-0-19-927313-3', '621.39(1)CL2006PR', 1, 1),
(133, 133, 'ALAN CLEMENTD ', 'Principles Of Computer Hardware', '2006', 'Oxford', '4th', '978-0-19-927313-3', '621.39(1)CL2006PR', 1, 1),
(134, 134, 'ALAN CLEMENTD ', 'Principles Of Computer Hardware', '2006', 'Oxford', '4th', '978-0-19-927313-3', '621.39(1)CL2006PR', 1, 1),
(135, 135, 'ALAN CLEMENTD ', 'Principles Of Computer Hardware', '2006', 'Oxford', '4th', '978-0-19-927313-3', '621.39(1)CL2006PR', 1, 1),
(136, 136, 'ALAN CLEMENTD ', 'Principles Of Computer Hardware', '2006', 'Oxford', '4th', '978-0-19-927313-3', '621.39(1)CL2006PR', 1, 1),
(137, 137, '13:978-0-7897-4984-0+G140', 'How Computers Work The Evolution Technology', '2015', '-', '10th', '13:978-0-7897-4984-0', '-', 1, 1),
(138, 138, '13:978-0-7897-4984-0+G140', 'How Computers Work The Evolution Technology', '2015', '-', '10th', '13:978-0-7897-4984-0', '-', 1, 1),
(139, 139, 'CISCO NETWORKING ACADEMY', 'Switched Networks  Lab Manual', '2014', 'Cisco Press', '-', '13:978-1-58713-327-5', '004.68(1)CN2014SW', 1, 1),
(140, 140, 'CISCO NETWORKING ACADEMY', 'Switched Networks  Lab Manual', '2014', 'Cisco Press', '-', '13:978-1-58713-327-5', '004.68(1)CN2014SW', 1, 1),
(141, 141, 'CISCO NETWORKING ACADEMY', 'Switched Networks  Lab Manual', '2014', 'Cisco Press', '-', '13:978-1-58713-327-5', '004.68(1)CN2014SW', 1, 1),
(142, 142, 'CISCO NETWORKING ACADEMY', 'Switched Networks  Lab Manual', '2014', 'Cisco Press', '-', '13:978-1-58713-327-5', '004.68(1)CN2014SW', 1, 1),
(143, 143, 'CISCO NETWORKING ACADEMY', 'Switched Networks  Lab Manual', '2014', 'Cisco Press', '-', '13:978-1-58713-327-5', '004.68(1)CN2014SW', 1, 1),
(144, 144, 'CISCO NETWORKING ACADEMY', 'Switched Networks  Lab Manual', '2014', 'Cisco Press', '-', '13:978-1-58713-327-5', '004.68(1)CN2014SW', 1, 1),
(145, 145, 'CISCO NETWORKING ACADEMY', 'Switched Networks  Lab Manual', '2014', 'Cisco Press', '-', '13:978-1-58713-327-5', '004.68(1)CN2014SW', 1, 1),
(146, 146, 'CISCO NETWORKING ACADEMY', 'Switched Networks  Lab Manual', '2014', 'Cisco Press', '-', '13:978-1-58713-327-5', '004.68(1)CN2014SW', 1, 1),
(147, 147, 'CISCO NETWORKING ACADEMY', 'Switched Networks  Lab Manual', '2014', 'Cisco Press', '-', '13:978-1-58713-327-5', '004.68(1)CN2014SW', 1, 1),
(148, 148, 'MOHAMED BOUCADAIR, ISABEL BORGES, PEDRO MIGUEL NEVES, OLAFUR PALL EINARSSON', 'IP Telephony Interconnection Reference Challenges, Models And Engineering', '2012', 'CRC Press', '-', '978-1-4398-5178-4', '621.385(1)BO2014IP', 1, 1),
(149, 149, 'MOHAMED BOUCADAIR, ISABEL BORGES, PEDRO MIGUEL NEVES, OLAFUR PALL EINARSSON', 'IP Telephony Interconnection Reference Challenges, Models And Engineering', '2012', 'CRC Press', '-', '978-1-4398-5178-4', '621.385(1)BO2014IP', 1, 1),
(150, 150, 'MOHAMED BOUCADAIR, ISABEL BORGES, PEDRO MIGUEL NEVES, OLAFUR PALL EINARSSON', 'IP Telephony Interconnection Reference Challenges, Models And Engineering', '2012', 'CRC Press', '-', '978-1-4398-5178-4', '621.385(1)BO2014IP', 1, 1),
(151, 151, 'MOHAMED BOUCADAIR, ISABEL BORGES, PEDRO MIGUEL NEVES, OLAFUR PALL EINARSSON', 'IP Telephony Interconnection Reference Challenges, Models And Engineering', '2012', 'CRC Press', '-', '978-1-4398-5178-4', '621.385(1)BO2014IP', 1, 1),
(152, 152, 'MOHAMED BOUCADAIR, ISABEL BORGES, PEDRO MIGUEL NEVES, OLAFUR PALL EINARSSON', 'IP Telephony Interconnection Reference Challenges, Models And Engineering', '2012', 'CRC Press', '-', '978-1-4398-5178-4', '621.385(1)BO2014IP', 1, 1),
(153, 153, 'MOHAMED BOUCADAIR, ISABEL BORGES, PEDRO MIGUEL NEVES, OLAFUR PALL EINARSSON', 'IP Telephony Interconnection Reference Challenges, Models And Engineering', '2012', 'CRC Press', '-', '978-1-4398-5178-4', '621.385(1)BO2014IP', 1, 1),
(154, 154, 'MOHAMED BOUCADAIR, ISABEL BORGES, PEDRO MIGUEL NEVES, OLAFUR PALL EINARSSON', 'IP Telephony Interconnection Reference Challenges, Models And Engineering', '2012', 'CRC Press', '-', '978-1-4398-5178-4', '621.385(1)BO2014IP', 1, 1),
(155, 155, 'MOHAMED BOUCADAIR, ISABEL BORGES, PEDRO MIGUEL NEVES, OLAFUR PALL EINARSSON', 'IP Telephony Interconnection Reference Challenges, Models And Engineering', '2012', 'CRC Press', '-', '978-1-4398-5178-4', '621.385(1)BO2014IP', 1, 1),
(156, 156, 'MOHAMED BOUCADAIR, ISABEL BORGES, PEDRO MIGUEL NEVES, OLAFUR PALL EINARSSON', 'IP Telephony Interconnection Reference Challenges, Models And Engineering', '2012', 'CRC Press', '-', '978-1-4398-5178-4', '621.385(1)BO2014IP', 1, 1),
(157, 157, 'MOHAMED BOUCADAIR, ISABEL BORGES, PEDRO MIGUEL NEVES, OLAFUR PALL EINARSSON', 'IP Telephony Interconnection Reference Challenges, Models And Engineering', '2012', 'CRC Press', '-', '978-1-4398-5178-4', '621.385(1)BO2014IP', 1, 1),
(158, 158, 'ALICE OSHIMA ANN HOGUE', 'Writing Academic English ', '2006', 'Pearson Longman', '4th ', '13:978-0-13-152359-3', '-', 1, 1),
(159, 159, 'ALICE OSHIMA ANN HOGUE', 'Writing Academic English ', '2006', 'Pearson Longman', '4th ', '13:978-0-13-152359-3', '-', 1, 1),
(160, 160, 'ALICE OSHIMA ANN HOGUE', 'Writing Academic English ', '2006', 'Pearson Longman', '4th ', '13:978-0-13-152359-3', '-', 1, 1),
(161, 161, 'SILBERSCHATZ KORTH SUDARSHAN', 'Database System Concepts', '2006', 'Mc Graw Hill', '6th', '978-1-259-25298-3', '005.74(1)SI2006DA', 1, 1),
(162, 162, 'SILBERSCHATZ KORTH SUDARSHAN', 'Database System Concepts', '2006', 'Mc Graw Hill', '6th', '978-1-259-25298-3', '005.74(1)SI2006DA', 1, 1),
(163, 163, 'SILBERSCHATZ KORTH SUDARSHAN', 'Database System Concepts', '2006', 'Mc Graw Hill', '6th', '978-1-259-25298-3', '005.74(1)SI2006DA', 1, 1),
(164, 164, 'SILBERSCHATZ KORTH SUDARSHAN', 'Database System Concepts', '2006', 'Mc Graw Hill', '6th', '978-1-259-25298-3', '005.74(1)SI2006DA', 1, 1),
(165, 165, 'SILBERSCHATZ KORTH SUDARSHAN', 'Database System Concepts', '2006', 'Mc Graw Hill', '6th', '978-1-259-25298-3', '005.74(1)SI2006DA', 1, 1),
(166, 166, 'SILBERSCHATZ KORTH SUDARSHAN', 'Database System Concepts', '2006', 'Mc Graw Hill', '6th', '978-1-259-25298-3', '005.74(1)SI2006DA', 1, 1),
(167, 167, 'SILBERSCHATZ KORTH SUDARSHAN', 'Database System Concepts', '2006', 'Mc Graw Hill', '6th', '978-1-259-25298-3', '005.74(1)SI2006DA', 1, 1),
(168, 168, 'SILBERSCHATZ KORTH SUDARSHAN', 'Database System Concepts', '2006', 'Mc Graw Hill', '6th', '978-1-259-25298-3', '005.74(1)SI2006DA', 1, 1),
(169, 169, 'SILBERSCHATZ KORTH SUDARSHAN', 'Database System Concepts', '2006', 'Mc Graw Hill', '6th', '978-1-259-25298-3', '005.74(1)SI2006DA', 1, 1),
(170, 170, 'SILBERSCHATZ KORTH SUDARSHAN', 'Database System Concepts', '2006', 'Mc Graw Hill', '6th', '978-1-259-25298-3', '005.74(1)SI2006DA', 1, 1),
(171, 171, 'HERBERT SCHILDT', 'JAVA The Complete Reference ', '2018', 'Oracle Press', '10th', '978-1-259-58933-1', '005.2762(1)SC2018JA', 1, 1),
(172, 172, 'HERBERT SCHILDT', 'JAVA The Complete Reference ', '2018', 'Oracle Press', '10th', '978-1-259-58933-1', '005.2762(1)SC2018JA', 1, 1),
(173, 173, 'HERBERT SCHILDT', 'JAVA The Complete Reference ', '2018', 'Oracle Press', '10th', '978-1-259-58933-1', '005.2762(1)SC2018JA', 1, 1),
(174, 174, 'HERBERT SCHILDT', 'JAVA The Complete Reference ', '2018', 'Oracle Press', '10th', '978-1-259-58933-1', '005.2762(1)SC2018JA', 1, 1),
(175, 175, 'HERBERT SCHILDT', 'JAVA The Complete Reference ', '2018', 'Oracle Press', '10th', '978-1-259-58933-1', '005.2762(1)SC2018JA', 1, 1),
(176, 176, 'HERBERT SCHILDT', 'JAVA The Complete Reference ', '2018', 'Oracle Press', '10th', '978-1-259-58933-1', '005.2762(1)SC2018JA', 1, 1),
(177, 177, 'HERBERT SCHILDT', 'JAVA The Complete Reference ', '2018', 'Oracle Press', '10th', '978-1-259-58933-1', '005.2762(1)SC2018JA', 1, 1),
(178, 178, 'ELLEN F.MONK, JOSEPH A.BRADY, GERARD S.COOK', 'Problem-Solving Cases In Microsoft Access And Excel', '2013', 'Course Technology', '10th', '13:978-1-133-62980-1', '005.7565MO2013PR', 1, 1),
(179, 179, 'ELLEN F.MONK, JOSEPH A.BRADY, GERARD S.COOK', 'Problem-Solving Cases In Microsoft Access And Excel', '2013', 'Course Technology', '10th', '13:978-1-133-62980-1', '005.7565MO2013PR', 1, 1),
(180, 180, 'ANANY LEVITIN', 'Introduction To The Design & Analysis Of Algorithms', '2003', 'Pearson Education', '-', '81-7808-984-x', '005.1LE2003IN', 1, 1),
(181, 181, 'STEPHEN C.ROOD ', 'Computer Hardware Maintenance An IS/IT Manager\'s Guide', '1996', 'Butterworth Heinemann ', '-', '0-7506-9494-7', '621.390682RO1996CO', 1, 1),
(182, 182, 'PETER FOX PENNER', 'Smart Power', '2014', 'ISLAND Press', '-', '13:978-161091-589-2', '333.7932(1)FO2014SM', 3, 3),
(183, 183, 'PETER FOX PENNER', 'Smart Power', '2014', 'ISLAND Press', '-', '13:978-161091-589-2', '333.7932(1)FO2014SM', 3, 3),
(184, 184, 'BHATTACHARYYA MRITTUNJAY', 'Electrical Machines Modeling And Analysis', '2016', 'PHI', '-', '978-81-203-5177-6', '621.31041(1)BH2016EL', 3, 3),
(185, 185, 'BHATTACHARYYA MRITTUNJAY', 'Electrical Machines Modeling And Analysis', '2016', 'PHI', '-', '978-81-203-5177-6', '621.31041(1)BH2016EL', 3, 3),
(186, 186, 'GEORGE HASSAN', 'Building Services', '1996', 'Macmillan', '4th', '0-333-53704-1', '696(1)HA1996BU', 3, 3),
(187, 187, 'GEORGE HASSAN', 'Building Services', '1996', 'Macmillan', '4th', '0-333-53704-1', '696(1)HA1996BU', 3, 3),
(188, 188, 'D.V.S.MURTY', 'Transducers And Instrumentation', '2008', 'PHI', '2nd', '978-81-203-3569-1', '681.1(1)MU2008TR', 3, 3),
(189, 189, 'D.V.S.MURTY', 'Transducers And Instrumentation', '2008', 'PHI', '2nd', '978-81-203-3569-1', '681.1(1)MU2008TR', 3, 3),
(190, 190, 'DR R.K.DHAWAN', 'A Textbook Of Machine Drawing', '1996', 'S.CHAND', '1st', '978-81-219-0824-5', '621-815(1)BH1996TE', 3, 3),
(191, 191, 'DR R.K.DHAWAN', 'A Textbook Of Machine Drawing', '1996', 'S.CHAND', '1st', '978-81-219-0824-5', '621-815(1)BH1996TE', 3, 3),
(192, 192, 'MUHAMMAD H.RASHID', 'Power Electgronics Devices, Circuits And Applications', '2014', 'Pearson', '4th', '10-0-273-76908-1', '621.317(1)RA2014PO', 3, 3),
(193, 193, 'MUHAMMAD H.RASHID', 'Power Electgronics Devices, Circuits And Applications', '2014', 'Pearson', '4th', '10-0-273-76908-1', '621.317(1)RA2014PO', 3, 3),
(194, 194, 'RICHARD C.DORF JAMES A.SVOBODA', 'Introduction To Electrical Circuits', '2013', 'Wiley', '9th', '978-1-118-32182-9', '621.3192(1)DO2013IN', 3, 3),
(195, 195, 'RICHARD C.DORF JAMES A.SVOBODA', 'Introduction To Electrical Circuits', '2013', 'Wiley', '9th', '978-1-118-32182-9', '621.3192(1)DO2013IN', 3, 3),
(196, 196, 'DANIEL W.HART', 'Power Electronics', '2011', 'Mc Graw Hill', '-', '978-007-128930-6', '621-317(1)HA2011PO ', 3, 3),
(197, 197, 'DANIEL W.HART', 'Power Electronics', '2011', 'Mc Graw Hill', '-', '978-007-128930-6', '621-317(1)HA2011PO ', 3, 3),
(198, 198, 'WILLIAM H.HAYT, JR JOHN A.BUCK', 'Engineering Electromagnetics', '2012', 'Mc Graw Hill', '8th', '978-007-108901-2', '530.141(1)HA2012EN', 3, 3),
(199, 199, 'WILLIAM H.HAYT, JR JOHN A.BUCK', 'Engineering Electromagnetics', '2012', 'Mc Graw Hill', '8th', '978-007-108901-2', '530.141(1)HA2012EN', 3, 3),
(200, 200, 'V.K MEHTA ROHIT MEHTA ', 'Principles Of Power System', '2005', 'S.CHAND', '1st', '978-81-219-2496-2', '621-3191(1)ME2005PR', 3, 3),
(201, 201, 'V.K MEHTA ROHIT MEHTA ', 'Principles Of Power System', '2005', 'S.CHAND', '1st', '978-81-219-2496-2', '621-3191(1)ME2005PR', 3, 3),
(202, 202, 'PHILLIP A.LAPLANTE', 'Electrical Engineering', '2005', 'CRC Taylor Francis', '2nd', '0-8493-3086-6', '-', 3, 3),
(203, 203, 'PHILLIP A.LAPLANTE', 'Electrical Engineering', '2005', 'CRC Taylor Francis', '2nd', '0-8493-3086-6', '-', 3, 3),
(204, 204, 'PHILLIP A.LAPLANTE', 'Electrical Engineering', '2005', 'CRC Taylor Francis', '2nd', '0-8493-3086-6', '-', 3, 3),
(205, 205, 'S RAMA REDDY', 'Electronic Devices And Circuits', '2004', 'Alpha Science', '-', '1-84265-124-2', '621.3815(1)RE2004EL', 3, 3),
(206, 206, 'S RAMA REDDY', 'Electronic Devices And Circuits', '2004', 'Alpha Science', '-', '1-84265-124-2', '621.3815(1)RE2004EL', 3, 3),
(207, 207, 'GEORGE MC PHERSON ROBERT D.LARAMORE', 'An Introduction To Electrical Machines And Transformers', '1981', 'John Weley', '2nd', '0-471-63529-4', '621.31042(1)MC1981EL', 3, 3),
(208, 208, 'GEORGE MC PHERSON ROBERT D.LARAMORE', 'An Introduction To Electrical Machines And Transformers', '1981', 'John Weley', '2nd', '0-471-63529-4', '621.31042(1)MC1981EL', 3, 3),
(209, 209, 'ALEXANDER CRAY', 'Electrical Machine The Design And Specification Of Diect And Alterinatibg Current Machinery ', '2015', 'Mc Graw Hill', '1st', '-', '621.313(1) GR2015EL', 3, 3),
(210, 210, 'ALEXANDER CRAY', 'Electrical Machine The Design And Specification Of Diect And Alterinatibg Current Machinery ', '2015', 'Mc Graw Hill', '1st', '-', '621.313(1) GR2015EL', 3, 3),
(211, 211, 'E ACHA. V.G AGELIDIS O ANAYA. T J E MILLER', 'Power Electronic Control In Electrical Systems', '2002', 'Newnes', '-', '0-7506-5126-1', '621.317(1)AC2002PO', 3, 3),
(212, 212, 'E ACHA. V.G AGELIDIS O ANAYA. T J E MILLER', 'Power Electronic Control In Electrical Systems', '2002', 'Newnes', '-', '0-7506-5126-1', '621.317(1)AC2002PO', 3, 3),
(213, 213, 'PAUL KRAUSE OLEG WASYNCZUK SCOTT SUDHOFF STEVEN PEKAREK ', 'Analysis Of Electrical Machinery And Drive Systems', '2013', 'Wiley', '3rd', '978-1-118-02429-4', '621.31042(1)KR2013AN', 3, 3),
(214, 214, 'PAUL KRAUSE OLEG WASYNCZUK SCOTT SUDHOFF STEVEN PEKAREK ', 'Analysis Of Electrical Machinery And Drive Systems', '2013', 'Wiley', '3rd', '978-1-118-02429-4', '621.31042(1)KR2013AN', 3, 3),
(215, 215, 'WILLIAM BOLTON', 'Mechatronics', '2015', 'Pearson', '6th', '978-1-292-07668-3', '629.89(1)BO2015ME', 3, 3),
(216, 216, 'WILLIAM BOLTON', 'Mechatronics', '2015', 'Pearson', '6th', '978-1-292-07668-3', '629.89(1)BO2015ME', 3, 3),
(217, 217, 'V.N.MITTLE ARVIND MITTAL', 'Design Of Electrical Machines', '1996', 'Standard Publisher', '5th', '81-8014-126-8', '621.462(1)MI1996DE', 3, 3),
(218, 218, 'V.N.MITTLE ARVIND MITTAL', 'Design Of Electrical Machines', '1996', 'Standard Publisher', '5th', '81-8014-126-8', '621.462(1)MI1996DE', 3, 3),
(219, 219, 'KATSUHIKO OGATA', 'Modern Control Engineering ', '2010', 'Pearson', '5th', '13:978-0-13-713337-6', '629.8(1)OG2010MO', 3, 3),
(220, 220, 'KATSUHIKO OGATA', 'Modern Control Engineering ', '2010', 'Pearson', '5th', '13:978-0-13-713337-6', '629.8(1)OG2010MO', 3, 3),
(221, 221, 'ROBERT L.BOYLESTAD', 'Introductory Circuit Analysis', '2016', 'Pearson', '3rd', '10:1-292-09895-3', '621.3192(1)BO2016IN', 3, 3),
(222, 222, 'ROBERT L.BOYLESTAD', 'Introductory Circuit Analysis', '2016', 'Pearson', '3rd', '10:1-292-09895-3', '621.3192(1)BO2016IN', 3, 3),
(223, 223, 'THEODOR WILDI', 'Electrical Machines, Drives And Power Systems', '2014', 'Pearson', '6th', '10:1-1292-02458-5', '621.31042(1)WI2014EL', 3, 3),
(224, 224, 'THEODOR WILDI', 'Electrical Machines, Drives And Power Systems', '2014', 'Pearson', '6th', '10:1-1292-02458-5', '621.31042(1)WI2014EL', 3, 3),
(225, 225, 'ER R.K RAJPUT', 'A Textbook Of Power Plant Engineering', '2007', 'LAXMI P', '4th', '978-81-318-0255-7', '621.3121(1)RA2007TE', 3, 3),
(226, 226, 'ER R.K RAJPUT', 'A Textbook Of Power Plant Engineering', '2007', 'LAXMI P', '4th', '978-81-318-0255-7', '621.3121(1)RA2007TE', 3, 3),
(227, 227, 'THOMAS L.FLOYD', 'Digital Fundemental ', '2013', 'Pearson', '11th', '10:1-292-07598-8', '621.38159(1)FI2013DI', 3, 3),
(228, 228, 'THOMAS L.FLOYD', 'Digital Fundemental ', '2013', 'Pearson', '11th', '10:1-292-07598-8', '621.38159(1)FI2013DI', 3, 3),
(229, 229, 'I.J.NAGRATH M.GOPAL', 'Control Systems Engineering', '2008', 'Anshan', '5th', '978-1848290-037', '629.8(1)NA2008CO', 3, 3),
(230, 230, 'I.J.NAGRATH M.GOPAL', 'Control Systems Engineering', '2008', 'Anshan', '5th', '978-1848290-037', '629.8(1)NA2008CO', 3, 3),
(231, 231, 'KENNEH J.AYALA', 'The 8086 Microprocessor Programming & Interfacing The Pc', '1995', 'Cengage Learning', '-', '978-81-315-0180-1', '004.165(1)AY1995MI', 3, 3),
(232, 232, 'KENNEH J.AYALA', 'The 8086 Microprocessor Programming & Interfacing The Pc', '1995', 'Cengage Learning', '-', '978-81-315-0180-1', '004.165(1)AY1995MI', 3, 3),
(233, 233, 'CHRISTOPHER K.ALEXANDER MATTHEW N.O.SADIKU', 'Fundamentals Of Electric Circuits', '2017', 'Mc Graw Hill', '6th', '978-1-259-25132-0', '621.31924(1)AL2017FU', 3, 3),
(234, 234, 'CHRISTOPHER K.ALEXANDER MATTHEW N.O.SADIKU', 'Fundamentals Of Electric Circuits', '2017', 'Mc Graw Hill', '6th', '978-1-259-25132-0', '621.31924(1)AL2017FU', 3, 3),
(235, 235, 'CHRISTOPHER K.ALEXANDER MATTHEW N.O.SADIKU', 'Fundamentals Of Electric Circuits', '2017', 'Mc Graw Hill', '6th', '978-1-259-25132-0', '621.31924(1)AL2017FU', 3, 3),
(236, 236, 'B.L.THERAJA', 'Fundamentals Of Electrival Engineering And Electronics', '2006', 'S.CHAND', '1st', '978-81-219-2660-7', '621.3(1)TH2006FU', 3, 3),
(237, 237, 'B.L.THERAJA', 'Fundamentals Of Electrival Engineering And Electronics', '2006', 'S.CHAND', '1st', '978-81-219-2660-7', '621.3(1)TH2006FU', 3, 3),
(238, 238, 'RUDOLF F.GRAF WILLIAM SHEETS', 'Electrinic Circuits', '2008', 'BPB ', '1st', '13:978-81-8333-292-7', '-', 3, 3),
(239, 239, 'RUDOLF F.GRAF WILLIAM SHEETS', 'Electrinic Circuits', '2008', 'BPB ', '1st', '13:978-81-8333-292-7', '-', 3, 3),
(240, 240, 'B.M.WEEDY B.J CORY N. JENKINS J.B. EKANAYAKE G.STRBAC', 'Electrical Power Systems', '2012', 'John Weley ', '5th', '978-0-470-68268-5', '621.3191(1)WE2012EL', 3, 3),
(241, 241, 'B.M.WEEDY B.J CORY N. JENKINS J.B. EKANAYAKE G.STRBAC', 'Electrical Power Systems', '2012', 'John Weley ', '5th', '978-0-470-68268-5', '621.3191(1)WE2012EL', 3, 3),
(242, 242, 'DENIS FEWSON', 'Introduction To Power Electronics', '1998', 'Arnold', '1st', '0-340-69143-3', '621.381044(1)FE1998IN', 3, 3),
(243, 243, 'DENIS FEWSON', 'Introduction To Power Electronics', '1998', 'Arnold', '1st', '0-340-69143-3', '621.381044(1)FE1998IN', 3, 3),
(244, 244, 'UMRAN S.INAN AZIZ INAN RYAN SAID', 'Engineering Electromagnetics And Waves', '2016', 'Pearson', '2nd', '10:0-273-79323-3', '530.141(1)IN2016EN', 3, 3),
(245, 245, 'UMRAN S.INAN AZIZ INAN RYAN SAID', 'Engineering Electromagnetics And Waves', '2016', 'Pearson', '2nd', '10:0-273-79323-3', '530.141(1)IN2016EN', 3, 3),
(246, 246, 'ROBERT L.BOYLESTAD LOUIS NASHELSKY', 'Electronic Devices And Circuits Theory', '2013', 'Pearson', '11th', '978-1-29202-563-6', '621.3815(1)BO2013EL', 3, 3),
(247, 247, 'ROBERT L.BOYLESTAD LOUIS NASHELSKY', 'Electronic Devices And Circuits Theory', '2013', 'Pearson', '11th', '978-1-29202-563-6', '621.3815(1)BO2013EL', 3, 3),
(248, 248, 'DAVID J.GRIFFITHS', 'Introduction To Electrodynamics', '2014', 'Pearson', '4th', '978-1-29202-142-3', '537.6(1)GR2014IN', 3, 3),
(249, 249, 'DAVID J.GRIFFITHS', 'Introduction To Electrodynamics', '2014', 'Pearson', '4th', '978-1-29202-142-3', '537.6(1)GR2014IN', 3, 3),
(250, 250, 'JOHN J.GRAINGER WILLIAM D.STEVENSON GARY W.CHANG', 'Power System Analysis', '2016', 'Mc Graw Hill', '-', '978-1-259-00835-1', '621.319(1)DR2016PO', 3, 3),
(251, 251, 'JOHN J.GRAINGER WILLIAM D.STEVENSON GARY W.CHANG', 'Power System Analysis', '2016', 'Mc Graw Hill', '-', '978-1-259-00835-1', '621.319(1)DR2016PO', 3, 3),
(252, 252, 'BEN G STREETMAN SANJAY KUMAR BANERJEE', 'Solid State Electronic Devices ', '2016', 'Pearson', '7th', '10:1-106055-7', '621.38152(1)ST2016SO', 3, 3),
(253, 253, 'BEN G STREETMAN SANJAY KUMAR BANERJEE', 'Solid State Electronic Devices ', '2016', 'Pearson', '7th', '10:1-106055-7', '621.38152(1)ST2016SO', 3, 3),
(254, 254, 'M.A.SALAM', 'Fundamentals Of Electrical Machines ', '2012', 'Alpha Science', '2nd', '978-1-84265-704-1', '621.31042(1)SA2012FU', 3, 3),
(255, 255, 'M.A.SALAM', 'Fundamentals Of Electrical Machines ', '2012', 'Alpha Science', '2nd', '978-1-84265-704-1', '621.31042(1)SA2012FU', 3, 3),
(256, 256, 'H SKALSI', 'Electronic Istrumentation', '2010', 'Mc Graw Hill', '3rd', '13:978-0-07-070206-6', '621.381(1)KA2010EL', 3, 3),
(257, 257, 'H SKALSI', 'Electronic Istrumentation', '2010', 'Mc Graw Hill', '3rd', '13:978-0-07-070206-6', '621.381(1)KA2010EL', 3, 3),
(258, 258, 'FEREIDOON P.SIOSHANSI', 'Smart Grid Integrating Renewable, Distributed & Efficient Energy ', '2011', 'AP', '-', '978-0-12-386452-9', '621.319(1)SI2011SM', 3, 3),
(259, 259, 'FEREIDOON P.SIOSHANSI', 'Smart Grid Integrating Renewable, Distributed & Efficient Energy ', '2011', 'AP', '-', '978-0-12-386452-9', '621.319(1)SI2011SM', 3, 3),
(260, 260, 'NORMAN S.NISE', 'Control Systems Engineering ', '2011', 'John Weley', '6th', '978-0-470-64612-0', '629.8(1)NI2011CO', 3, 3),
(261, 261, 'NORMAN S.NISE', 'Control Systems Engineering ', '2011', 'John Weley', '6th', '978-0-470-64612-0', '629.8(1)NI2011CO', 3, 3),
(262, 262, 'NORMAN S.NISE', 'Control Systems Engineering ', '2011', 'John Weley', '6th', '978-0-470-64612-0', '629.8(1)NI2011CO', 3, 3),
(263, 263, 'NORMAN S.NISE', 'Control Systems Engineering ', '2011', 'John Weley', '6th', '978-0-470-64612-0', '629.8(1)NI2011CO', 3, 3),
(264, 264, 'N SUBRAHMANYAM BRIJ LAL', 'Waves And Oscillations', '1994', '-', '2nd', '07-069-8543-5', '-', 3, 3),
(265, 265, 'N SUBRAHMANYAM BRIJ LAL', 'Waves And Oscillations', '1994', '-', '2nd', '07-069-8543-5', '-', 3, 3),
(266, 266, 'JIMMIE J.CATHEY', 'Electronic Devices And Circuits', '2002', 'Schaum\'s Outline Series', '2nd', '13:978-0-07-136270-2', '621.38153(1)CA2002EL', 3, 3),
(267, 267, 'JIMMIE J.CATHEY', 'Electronic Devices And Circuits', '2002', 'Schaum\'s Outline Series', '2nd', '13:978-0-07-136270-2', '621.38153(1)CA2002EL', 3, 3),
(268, 268, 'JIMMIE J.CATHEY', 'Electronic Devices And Circuits', '2002', 'Schaum\'s Outline Series', '2nd', '13:978-0-07-136270-2', '621.38153(1)CA2002EL', 3, 3),
(269, 269, 'JIMMIE J.CATHEY', 'Electronic Devices And Circuits', '2002', 'Schaum\'s Outline Series', '2nd', '13:978-0-07-136270-2', '621.38153(1)CA2002EL', 3, 3),
(270, 270, 'ROGER TOKHEIN', 'Digital Electronics', '2014', 'Mc Graw Hill', '8th', '978-1-259-06092-2', '621.3815(1)TO2014DI', 3, 3),
(271, 271, 'ROGER TOKHEIN', 'Digital Electronics', '2014', 'Mc Graw Hill', '8th', '978-1-259-06092-2', '621.3815(1)TO2014DI', 3, 3),
(272, 272, 'JOHN D.RYDER', 'Electronic Fundamentals And Applications', '1976', 'PHI', '5th', '978-81-203-0082-8', '621.381(1)RY1976EL', 3, 3),
(273, 273, 'JOHN D.RYDER', 'Electronic Fundamentals And Applications', '1976', 'PHI', '5th', '978-81-203-0082-8', '621.381(1)RY1976EL', 3, 3),
(274, 274, 'AYALA KENNETH', 'The 8051Microcontroller', '2005', 'Dermar Cengage Learning', '3rd ', '13:978-1-4018-6158-2', '004.165(1)AY2005MI', 3, 3),
(275, 275, 'AYALA KENNETH', 'The 8051Microcontroller', '2005', 'Dermar Cengage Learning', '3rd ', '13:978-1-4018-6158-2', '004.165(1)AY2005MI', 3, 3),
(276, 276, 'D.C.AGARWAL', 'Fibre Optic Communication ', '1993', 'SCHAND', '2nd', '81-219-2317-4', '621.3827AG1993FI', 3, 3),
(277, 277, 'CHARLES L.ALLEY  KENNETH W.ATWOOD', 'Semiconductor Devices And Circuits ', '1971', 'John Weley', '-', '0-471-02330-2', '621.38152AL1971SE', 3, 3),
(278, 278, 'INTELLIN ORGANIZATION', 'Electronic Circuits ', '2006', '-', '1st', '1-4196-4622-2', '621.3815IN2006EL', 3, 3),
(279, 279, 'ALAN S.MORRIS REZA LANGARI', 'Measurement And Instrumentation Theory And Application ', '2016', 'AP', '2nd', '978-0-12-800884-3', '682()MO2016ME', 3, 3),
(280, 280, 'CHARLES B.FLEDDERMAN', 'Engineering Ethics', '2014', 'Pearson', '4th', '10:1-292-01252-8', '174.962()FI2014EN', 3, 3),
(281, 281, 'B.L.THERAJA', 'Basic Electronics Solid State', '2003', '-', '-', '81-219-0094-8', '621.381TH1997BA', 3, 3),
(282, 282, 'S.K BHATTACHARYA', 'Electrical Machines', '2014', 'Mc Graw Hill', '4th', '13:978-93-329-0285-5', '621.31041(1)BH2014EL', 3, 3),
(283, 283, 'ROGER FOUQUET', 'Heat, Power And Light', '-', 'EE', '-', '-', '-', 3, 3),
(284, 284, 'ALBERT MALVINO, DAVID BATES', 'Electronic Principles', '2016', 'Mc Graw Hill', '-', '978-1-25-925266-2', '621.381() MA2016EL', 3, 3),
(285, 285, 'B.L.THERAJA, A.K.THERAJA', 'A Textbook Of Electrical Technology ', '2004', 'S.CHAND', '-', '81-219-1141-9', '621.3TH2004TE', 3, 3),
(286, 286, '-', 'How ToPlan And Install Electric Wiring', '-', '-', '-', '-', '-', 3, 3),
(287, 287, 'JEFF MARKELL', 'Residential Wiring', '1987', 'CRAFTSMAN', '-', '0-9334041-19-9', '621.31924MA1987RE', 3, 3),
(288, 288, 'RP JAIN', 'Modern Digital Electronics', '2010', 'Mc Graw Hill', '4th', '13:978-0-07-066911-6', '621.381(1)JA2010MO', 3, 3),
(289, 289, 'RP JAIN', 'Modern Digital Electronics', '2010', 'Mc Graw Hill', '4th', '13:978-0-07-066911-6', '621.381(1)JA2010MO', 3, 3),
(290, 290, 'JANAKA EKANAYAKE KITHSIRI LIYANAGE JIANZHONG WU AKIHIKO YOKOYAMA NICK JENKINS', 'Smart Grid Technology And Applications', '2012', 'John Weley', '-', '978-0-470-97409-4', '621.31(1)EK2012SM', 3, 3),
(291, 291, 'JANAKA EKANAYAKE KITHSIRI LIYANAGE JIANZHONG WU AKIHIKO YOKOYAMA NICK JENKINS', 'Smart Grid Technology And Applications', '2012', 'John Weley', '-', '978-0-470-97409-4', '621.31(1)EK2012SM', 3, 3),
(292, 292, 'B.L.THERAJA, A.K.THERAJA', 'A Textbook Of Electrical Technology ', '2005', 'S.CHAND', '-', '81-219-2441-3', '621.3TH2005TE', 3, 3),
(293, 293, 'K.HAMEYER R.BELMANS', 'Numerical Modelling And Design Of Electrical Machines And Devices', '1999', 'WIT Press', '-', '1-85312-626-8', '621.31042(1)PA1999NU', 3, 3),
(294, 294, 'K.HAMEYER R.BELMANS', 'Numerical Modelling And Design Of Electrical Machines And Devices', '1999', 'WIT Press', '-', '1-85312-626-8', '621.31042(1)PA1999NU', 3, 3),
(295, 295, 'DIOFANTOS G.HADJIMITSIS', 'Remote Sensing Of Environment ', '2013', 'INTECH', '-', '978-953-51-1152-8', '630.20(1)HA2013RE', 3, 3),
(296, 296, 'DIOFANTOS G.HADJIMITSIS', 'Remote Sensing Of Environment ', '2013', 'INTECH', '-', '978-953-51-1152-8', '630.20(1)HA2013RE', 3, 3),
(297, 297, 'ROBERSON CASSIDY CHAUDHRY', 'Hydraulic Engineering ', '2005', 'JAICO P', '1st', '10:81-7224-663-3', '627(1)RO2005HY', 3, 3),
(298, 298, 'ROBERSON CASSIDY CHAUDHRY', 'Hydraulic Engineering ', '2005', 'JAICO P', '1st', '10:81-7224-663-3', '627(1)RO2005HY', 3, 3),
(299, 299, 'BRIJ LAL N.SUBRAHMANYAM JIVAN SESHAN', 'Mechanics And Electrodynamics', '1980', 'S.CHAND', '-', '978-81-219-2591-4', '531(1)LA1980ME', 3, 3),
(300, 300, 'BRIJ LAL N.SUBRAHMANYAM JIVAN SESHAN', 'Mechanics And Electrodynamics', '1980', 'S.CHAND', '-', '978-81-219-2591-4', '531(1)LA1980ME', 3, 3),
(301, 301, 'ROSARIO BARTIROMO MARIO DE VINCENZI', 'Electrical Measurements In The Laboratory Practice', '2016', 'Springer Science', 'Series Ed', '978-3-319-31100-5', '530.8(1)BA2016EL', 3, 3),
(302, 302, 'ROSARIO BARTIROMO MARIO DE VINCENZI', 'Electrical Measurements In The Laboratory Practice', '2016', 'Springer Science', 'Series Ed', '978-3-319-31100-5', '530.8(1)BA2016EL', 3, 3),
(303, 303, 'J.B.GUPTA', 'A Course In Electrical Power', '2013', 'KATSON BOOKS', '-', '13:978-93-5014-374-2', '621.31(1)GU2013CO', 3, 3),
(304, 304, 'J.B.GUPTA', 'A Course In Electrical Power', '2013', 'KATSON BOOKS', '-', '13:978-93-5014-374-2', '621.31(1)GU2013CO', 3, 3),
(305, 305, 'A.CHAKRABARTI M.L.SONI U.S BHATNAGAR', 'A Text Book On Power System Engeneering', '2010', 'DHANPAT RAI&CO', '1st', '-', '621.31(1)CH2010TE', 3, 3),
(306, 306, 'A.CHAKRABARTI M.L.SONI U.S BHATNAGAR', 'A Text Book On Power System Engeneering', '2010', 'DHANPAT RAI&CO', '1st', '-', '621.31(1)CH2010TE', 3, 3),
(307, 307, 'ANANT AGARWAL JEFFREY H.LANG', 'Foundations Of Analog And Digital Electronic Circuit', '2005', 'Morgan Kaufmann', '-', '13:978-1-55860-735-4', '621.3815(1)AG2005FO', 3, 3),
(308, 308, 'ANANT AGARWAL JEFFREY H.LANG', 'Foundations Of Analog And Digital Electronic Circuit', '2005', 'Morgan Kaufmann', '-', '13:978-1-55860-735-4', '621.3815(1)AG2005FO', 3, 3),
(309, 309, 'THOMAS L.FLOYD DAVID L.BUCHLA ', 'Electronics Fundamentals Circuits,  Devices And Applications', '2014 ', 'Pearson', '8th', '978-1-29202-568-1', '621.381(1)FI2014EL', 3, 3),
(310, 310, 'THOMAS L.FLOYD DAVID L.BUCHLA ', 'Electronics Fundamentals Circuits,  Devices And Applications', '2014 ', 'Pearson', '8th', '978-1-29202-568-1', '621.381(1)FI2014EL', 3, 3),
(311, 311, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(312, 312, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(313, 313, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(314, 314, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(315, 315, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(316, 316, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(317, 317, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(318, 318, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(319, 319, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(320, 320, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(321, 321, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(322, 322, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(323, 323, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(324, 324, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(325, 325, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(326, 326, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38);
INSERT INTO `books` (`b_id`, `b_SN`, `b_Author`, `b_title`, `b_Year_Publisher`, `b_Publisher`, `b_Edition`, `b_ISBN_ISSN`, `b_Call_no`, `d_id`, `book_type_id`) VALUES
(327, 327, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(328, 328, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(329, 329, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(330, 330, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(331, 331, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(332, 332, 'MARSHA E.ACKERMANN MICHAEL J.SCHROEDER JANICE J.TERRY JUI-HWA LO UPSHUT MARK F.WRITTERS', 'Encyclopedia Of World History ', '2008', 'Facts On  File', 'Vol VII', '978-0-8160-6386-4', '-', 6, 38),
(333, 333, 'BRIAN L.CULTER', 'Encyclopedia Of Psychology &Law', '2008', 'SAGE', 'Vol 2', '978-1-4129-5189-0', '-', 6, 38),
(334, 334, 'BRIAN L.CULTER', 'Encyclopedia Of Psychology &Law', '2008', 'SAGE', 'Vol 2', '978-1-4129-5189-0', '-', 6, 38),
(335, 335, 'BRIAN L.CULTER', 'Encyclopedia Of Psychology &Law', '2008', 'SAGE', 'Vol 2', '978-1-4129-5189-0', '-', 6, 38),
(336, 336, 'BRIAN L.CULTER', 'Encyclopedia Of Psychology &Law', '2008', 'SAGE', 'Vol 2', '978-1-4129-5189-0', '-', 6, 38),
(337, 337, 'DOMONIC A.BEARFIELD MELVIN J.DUBNICK', 'Encyclopedia Of Public Administration And Public Policy', '2016', 'CRC Press', '3rd', '13:978-1-4822-1428-4', '-', 6, 38),
(338, 338, 'DOMONIC A.BEARFIELD MELVIN J.DUBNICK', 'Encyclopedia Of Public Administration And Public Policy', '2016', 'CRC Press', '3rd', '13:978-1-4822-1428-4', '-', 6, 38),
(339, 339, 'DOMONIC A.BEARFIELD MELVIN J.DUBNICK', 'Encyclopedia Of Public Administration And Public Policy', '2016', 'CRC Press', '3rd', '13:978-1-4822-1428-4', '-', 6, 38),
(340, 340, 'DOMONIC A.BEARFIELD MELVIN J.DUBNICK', 'Encyclopedia Of Public Administration And Public Policy', '2016', 'CRC Press', '3rd', '13:978-1-4822-1428-4', '-', 6, 38),
(341, 341, 'DOMONIC A.BEARFIELD MELVIN J.DUBNICK', 'Encyclopedia Of Public Administration And Public Policy', '2016', 'CRC Press', '3rd', '13:978-1-4822-1428-4', '-', 6, 38),
(342, 342, 'DOMONIC A.BEARFIELD MELVIN J.DUBNICK', 'Encyclopedia Of Public Administration And Public Policy', '2016', 'CRC Press', '3rd', '13:978-1-4822-1428-4', '-', 6, 38),
(343, 343, 'DOMONIC A.BEARFIELD MELVIN J.DUBNICK', 'Encyclopedia Of Public Administration And Public Policy', '2016', 'CRC Press', '3rd', '13:978-1-4822-1428-4', '-', 6, 38),
(344, 344, 'DOMONIC A.BEARFIELD MELVIN J.DUBNICK', 'Encyclopedia Of Public Administration And Public Policy', '2016', 'CRC Press', '3rd', '13:978-1-4822-1428-4', '-', 6, 38),
(345, 345, 'DOMONIC A.BEARFIELD MELVIN J.DUBNICK', 'Encyclopedia Of Public Administration And Public Policy', '2016', 'CRC Press', '3rd', '13:978-1-4822-1428-4', '-', 6, 38),
(346, 346, 'DOMONIC A.BEARFIELD MELVIN J.DUBNICK', 'Encyclopedia Of Public Administration And Public Policy', '2016', 'CRC Press', '3rd', '13:978-1-4822-1428-4', '-', 6, 38),
(347, 347, 'JOANNA TURNBULL DIANA LEA DILYS PARKINSON PATRICK PHILLIPS BEN FRANCIS SUZANNE WEBB VICTORIA BULL MICAHEL ASHBY', 'Oxford Advanced Learner\'s Dictionary', '2010', '-', '8th', '978-0-19-479900-3', '-', 6, 38),
(348, 348, 'JOANNA TURNBULL DIANA LEA DILYS PARKINSON PATRICK PHILLIPS BEN FRANCIS SUZANNE WEBB VICTORIA BULL MICAHEL ASHBY', 'Oxford Advanced Learner\'s Dictionary', '2010', '-', '8th', '978-0-19-479900-3', '-', 6, 38),
(349, 349, 'JOANNA TURNBULL DIANA LEA DILYS PARKINSON PATRICK PHILLIPS BEN FRANCIS SUZANNE WEBB VICTORIA BULL MICAHEL ASHBY', 'Oxford Advanced Learner\'s Dictionary', '2010', '-', '8th', '978-0-19-479900-3', '-', 6, 38),
(350, 350, 'JOANNA TURNBULL DIANA LEA DILYS PARKINSON PATRICK PHILLIPS BEN FRANCIS SUZANNE WEBB VICTORIA BULL MICAHEL ASHBY', 'Oxford Advanced Learner\'s Dictionary', '2010', '-', '8th', '978-0-19-479900-3', '-', 6, 38),
(351, 351, 'MITCHEL P.ROTH', 'Prisons And Prison Systems', '2006', 'Greenwood Press', '-', '0-313-32856-0', '-', 6, 38),
(352, 352, 'MITCHEL P.ROTH', 'Prisons And Prison Systems', '2006', 'Greenwood Press', '-', '0-313-32856-0', '-', 6, 38),
(353, 353, 'CLAYS LTD ST IVES OLC', 'Oxford  Dictionary Of Chemistry', '2016', 'Quick Reference', '7th', '978-0-19-872282-3', '-', 6, 38),
(354, 354, 'CLAYS LTD ST IVES OLC', 'Oxford  Dictionary Of Chemistry', '2016', 'Quick Reference', '7th', '978-0-19-872282-3', '-', 6, 38),
(355, 355, 'MARIAN QUIGLEY', 'Encyclopedia Of Information Ethics And Security', '2008', 'Hershey', '-', '978-1-59140-987-8', '-', 6, 38),
(356, 356, 'MARIAN QUIGLEY', 'Encyclopedia Of Information Ethics And Security', '2008', 'Hershey', '-', '978-1-59140-987-8', '-', 6, 38),
(357, 357, 'YO JACKSON', 'Encyclopedia Of Multicultural Psychology', '2006', 'SAGE', '-', '1-4129-0948-1', '-', 6, 38),
(358, 358, 'YO JACKSON', 'Encyclopedia Of Multicultural Psychology', '2006', 'SAGE', '-', '1-4129-0948-1', '-', 6, 38),
(359, 359, 'VICKI L.RUIZ VIRGINIA SANCHEZ KORROL', 'Latinas In The United State', '2006', 'India University Press', '-', '0-253-34683-5', '-', 6, 38),
(360, 360, 'VICKI L.RUIZ VIRGINIA SANCHEZ KORROL', 'Latinas In The United State', '2006', 'India University Press', '-', '0-253-34683-5', '-', 6, 38),
(361, 361, 'VICKI L.RUIZ VIRGINIA SANCHEZ KORROL', 'Latinas In The United State', '2006', 'India University Press', '-', '0-253-34683-5', '-', 6, 38),
(362, 362, 'VICKI L.RUIZ VIRGINIA SANCHEZ KORROL', 'Latinas In The United State', '2006', 'India University Press', '-', '0-253-34683-5', '-', 6, 38),
(363, 363, 'VICKI L.RUIZ VIRGINIA SANCHEZ KORROL', 'Latinas In The United State', '2006', 'India University Press', '-', '0-253-34683-5', '-', 6, 38),
(364, 364, 'VICKI L.RUIZ VIRGINIA SANCHEZ KORROL', 'Latinas In The United State', '2006', 'India University Press', '-', '0-253-34683-5', '-', 6, 38),
(365, 365, 'PETER COLLIN', 'Dictionary Of Leisure, Travel And Tourism', '2005', 'A&C Black', '3rd', '978-0-7136-8545-9', '-', 6, 38),
(366, 366, 'PETER COLLIN', 'Dictionary Of Leisure, Travel And Tourism', '2005', 'A&C Black', '3rd', '978-0-7136-8545-9', '-', 6, 38),
(367, 367, 'PETER COLLIN', 'Dictionary Of Leisure, Travel And Tourism', '2005', 'A&C Black', '3rd', '978-0-7136-8545-9', '-', 6, 38),
(368, 368, 'PETER COLLIN', 'Dictionary Of Leisure, Travel And Tourism', '2005', 'A&C Black', '3rd', '978-0-7136-8545-9', '-', 6, 38),
(369, 369, 'JORDI INDURAIN PONS M JOSE SIMON ARAGON ANDREW HASTING', 'Pocket English Spanish', '2009', 'VOX', '-', '978-84-7153-758-4', '-', 6, 38),
(370, 370, 'DAVID A GERSTNER+HB374:G375', 'Internation Encyclopedia Of Queer Culture', '2011', 'Routledge', '-', '978-0-415-56966-8', '-', 6, 38),
(371, 371, 'DAVID A GERSTNER+HB374:G375', 'Internation Encyclopedia Of Queer Culture', '2011', 'Routledge', '-', '978-0-415-56966-8', '-', 6, 38),
(372, 372, 'GEOFFREY HUGHEWS', 'An Encyclopedia  Of Swearing', '2006', 'Routledge', '1st', '978-0-7656-1231-1', '-', 6, 38),
(373, 373, 'GEOFFREY HUGHEWS', 'An Encyclopedia  Of Swearing', '2006', 'Routledge', '1st', '978-0-7656-1231-1', '-', 6, 38),
(374, 374, 'BLOOMS BURY', 'Dictionary Of Agriculture ', '2006', 'A&C Black', '3rd', '978-0-7136-7778-2', '-', 6, 38),
(375, 375, 'BLOOMS BURY', 'Dictionary Of Agriculture ', '2006', 'A&C Black', '3rd', '978-0-7136-7778-2', '-', 6, 38),
(376, 376, 'BLOOMS BURY', 'Dictionary Of Agriculture ', '2006', 'A&C Black', '3rd', '978-0-7136-7778-2', '-', 6, 38),
(377, 377, 'ABRAHAM PIZAM. JUDY HOLICOM', 'International Dictionary Of Hospitality Management', '2008', 'BH', '1st', '978-0-7506-8385-2', '-', 6, 38),
(378, 378, 'ABRAHAM PIZAM. JUDY HOLICOM', 'International Dictionary Of Hospitality Management', '2008', 'BH', '1st', '978-0-7506-8385-2', '-', 6, 38),
(379, 379, 'CHRISTOPHER GORSE DAVID JOHNSON MARTINPRINTCHARD', 'Dictionary Of Construction, Surveying & Civil Engineering', '2012', 'Quick Reference', '-', '978-0-19-953446-3', '-', 6, 38),
(380, 380, 'CHRISTOPHER GORSE DAVID JOHNSON MARTINPRINTCHARD', 'Dictionary Of Construction, Surveying & Civil Engineering', '2012', 'Quick Reference', '-', '978-0-19-953446-3', '-', 6, 38),
(381, 381, 'CHRISTOPHER GORSE DAVID JOHNSON MARTINPRINTCHARD', 'Dictionary Of Construction, Surveying & Civil Engineering', '2012', 'Quick Reference', '-', '978-0-19-953446-3', '-', 6, 38),
(382, 382, 'COLLIN MCINTOSH', 'Cambridge Advanced Learner\'s Dictionary', '2013', 'Cambridge', '4th', '978-1-107-61650-0', '-', 6, 38),
(383, 383, 'COLLIN MCINTOSH', 'Cambridge Advanced Learner\'s Dictionary', '2013', 'Cambridge', '4th', '978-1-107-61650-0', '-', 6, 38),
(384, 384, 'COLLIN MCINTOSH', 'Cambridge Advanced Learner\'s Dictionary', '2013', 'Cambridge', '4th', '978-1-107-61650-0', '-', 6, 38),
(385, 385, 'INOSENTI NIZEYIMANA', 'Ubumwe Bw\'Abanyarwanda Mu Mateka Yabo', '2015', '-', 'Igice 1', '978-99977-0-002-5', '-', 6, 38),
(386, 386, 'INOSENTI NIZEYIMANA', 'Ubumwe Bw\'Abanyarwanda Mu Mateka Yabo', '2015', '-', 'Igice 1', '978-99977-0-002-5', '-', 6, 38),
(387, 387, 'INOSENTI NIZEYIMANA', 'Ubumwe Bw\'Abanyarwanda Mu Mateka Yabo', '2015', '-', 'Igice 1', '978-99977-0-002-5', '-', 6, 38),
(388, 388, 'MALCOLM MANN Steve TAYLORE KNOWLES', 'Use Of English ', '2003', 'Macmillan', '1st', '978-1-4050-1751-0', '-', 6, 38),
(389, 389, 'MARJORIE FUCHS, MARGAT BINNER', 'FOCUS Grammar An Integrated Skills Approach', '2006', 'Pearson Longman', '3rd', '0-13-191241-0', '-', 6, 38),
(390, 390, 'RAYMOND MURPHY', 'Essential Grammar In Use', '2015', 'Cambridge University Press', '4th', '978-1-107-48055-1', '-', 6, 38),
(391, 391, 'RAYMOND MURPHY', 'Essential Grammar In Use', '2015', 'Cambridge University Press', '4th', '978-1-107-48055-1', '-', 6, 38),
(392, 392, 'STEWART R.CLEGG, JAMES R.BAILEY', 'International Encyclopedia Of Organization Studies 1 A-D', '2008', 'SAGE', '-', '978-1-4129-1515-1', '-', 6, 38),
(393, 393, 'STEWART R.CLEGG, JAMES R.BAILEY', 'International Encyclopedia Of Organization Studies 1 A-D', '2008', 'SAGE', '-', '978-1-4129-1515-1', '-', 6, 38),
(394, 394, 'STEWART R.CLEGG, JAMES R.BAILEY', 'International Encyclopedia Of Organization Studies 1 A-D', '2008', 'SAGE', '-', '978-1-4129-1515-1', '-', 6, 38),
(395, 395, 'STEWART R.CLEGG, JAMES R.BAILEY', 'International Encyclopedia Of Organization Studies 1 A-D', '2008', 'SAGE', '-', '978-1-4129-1515-1', '-', 6, 38),
(396, 396, 'STEWART R.CLEGG, JAMES R.BAILEY', 'International Encyclopedia Of Organization Studies 1 A-D', '2008', 'SAGE', '-', '978-1-4129-1515-1', '-', 6, 38),
(397, 397, 'STEWART R.CLEGG, JAMES R.BAILEY', 'International Encyclopedia Of Organization Studies 1 A-D', '2008', 'SAGE', '-', '978-1-4129-1515-1', '-', 6, 38),
(398, 398, 'STEWART R.CLEGG, JAMES R.BAILEY', 'International Encyclopedia Of Organization Studies 1 A-D', '2008', 'SAGE', '-', '978-1-4129-1515-1', '-', 6, 38),
(399, 399, 'STEWART R.CLEGG, JAMES R.BAILEY', 'International Encyclopedia Of Organization Studies 1 A-D', '2008', 'SAGE', '-', '978-1-4129-1515-1', '-', 6, 38),
(405, 400, 'R.BRUCE HOADLEY', 'UNDERSTANDING WOOD', '2000', 'Taunton Press', '-', '978-1-56158-358-4', '978-1-56158-358-4', 2, 2),
(406, 401, 'R.BRUCE HOADLEY', 'UNDERSTANDING WOOD', '2000', 'Taunton Press', '-', '978-1-56158-358-4', '978-1-56158-358-4', 2, 2),
(407, 402, 'R.BRUCE HOADLEY', 'UNDERSTANDING WOOD', '2000', 'Taunton Press', '-', '978-1-56158-358-4', '978-1-56158-358-4', 2, 2),
(408, 403, 'R.BRUCE HOADLEY', 'UNDERSTANDING WOOD', '2000', 'Taunton Press', '-', '978-1-56158-358-4', '978-1-56158-358-4', 2, 2),
(409, 404, 'R.BRUCE HOADLEY', 'UNDERSTANDING WOOD', '2000', 'Taunton Press', '-', '978-1-56158-358-4', '978-1-56158-358-4', 2, 2),
(410, 405, 'LEE SMITH, MICHAEL A.JOYCE', 'Plumbing Technology', '2008', 'Dermar Cengage Learning', '4th', '13:978-1-4180-5091-7', '696.1(1)SM2008PL', 2, 2),
(411, 406, 'LEE SMITH, MICHAEL A.JOYCE', 'Plumbing Technology', '2008', 'Dermar Cengage Learning', '4th', '13:978-1-4180-5091-7', '696.1(1)SM2008PL', 2, 2),
(412, 407, 'LEE SMITH, MICHAEL A.JOYCE', 'Plumbing Technology', '2008', 'Dermar Cengage Learning', '4th', '13:978-1-4180-5091-7', '696.1(1)SM2008PL', 2, 2),
(413, 408, 'LEE SMITH, MICHAEL A.JOYCE', 'Plumbing Technology', '2008', 'Dermar Cengage Learning', '4th', '13:978-1-4180-5091-7', '696.1(1)SM2008PL', 2, 2),
(414, 409, 'LEE SMITH, MICHAEL A.JOYCE', 'Plumbing Technology', '2008', 'Dermar Cengage Learning', '4th', '13:978-1-4180-5091-7', '696.1(1)SM2008PL', 2, 2),
(415, 410, 'LEE SMITH, MICHAEL A.JOYCE', 'Plumbing Technology', '2008', 'Dermar Cengage Learning', '4th', '13:978-1-4180-5091-7', '696.1(1)SM2008PL', 2, 2),
(416, 411, 'LEE SMITH, MICHAEL A.JOYCE', 'Plumbing Technology', '2008', 'Dermar Cengage Learning', '4th', '13:978-1-4180-5091-7', '696.1(1)SM2008PL', 2, 2),
(417, 412, 'LEE SMITH, MICHAEL A.JOYCE', 'Plumbing Technology', '2008', 'Dermar Cengage Learning', '4th', '13:978-1-4180-5091-7', '696.1(1)SM2008PL', 2, 2),
(418, 413, 'LEE SMITH, MICHAEL A.JOYCE', 'Plumbing Technology', '2008', 'Dermar Cengage Learning', '4th', '13:978-1-4180-5091-7', '696.1(1)SM2008PL', 2, 2),
(419, 414, 'LEE SMITH, MICHAEL A.JOYCE', 'Plumbing Technology', '2008', 'Dermar Cengage Learning', '4th', '13:978-1-4180-5091-7', '696.1(1)SM2008PL', 2, 2),
(420, 415, 'LEE SMITH, MICHAEL A.JOYCE', 'Plumbing Technology', '2008', 'Dermar Cengage Learning', '4th', '13:978-1-4180-5091-7', '696.1(1)SM2008PL', 2, 2),
(421, 416, 'LEE SMITH, MICHAEL A.JOYCE', 'Plumbing Technology', '2008', 'Dermar Cengage Learning', '4th', '13:978-1-4180-5091-7', '696.1(1)SM2008PL', 2, 2),
(422, 417, 'LEE SMITH, MICHAEL A.JOYCE', 'Plumbing Technology', '2008', 'Dermar Cengage Learning', '4th', '13:978-1-4180-5091-7', '696.1(1)SM2008PL', 2, 2),
(423, 418, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(424, 419, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(425, 420, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(426, 421, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(427, 422, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(428, 423, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(429, 424, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(430, 425, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(431, 426, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(432, 427, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(433, 428, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(434, 429, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(435, 430, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(436, 431, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(437, 432, 'DAVID JAMES', 'UPHOLSTERY A Complete Course', '2016', 'GMC', '2nd', '978-178494-125-3', '-', 2, 2),
(438, 433, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(439, 434, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(440, 435, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(441, 436, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(442, 437, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(443, 438, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(444, 439, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(445, 440, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(446, 441, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(447, 442, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(448, 443, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(449, 444, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(450, 445, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(451, 446, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(452, 447, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(453, 448, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(454, 449, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(455, 450, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(456, 451, 'LES GORING', 'Manual Of First And Second Fixing Carpentry', '2010', 'Routledge', '3rd', '978-1-8561-7768-9', '694(1)GO2010MA', 2, 2),
(457, 452, 'BRIAN PORTER', 'Carpentry And Joinery 1', '2001', 'Routledge', '3rd', '0-7506-5135-0', '694(1)PO2001CA', 2, 2),
(458, 453, 'BRIAN PORTER', 'Carpentry And Joinery 1', '2001', 'Routledge', '3rd', '0-7506-5135-0', '694(1)PO2001CA', 2, 2),
(459, 454, 'BRIAN PORTER', 'Carpentry And Joinery 1', '2001', 'Routledge', '3rd', '0-7506-5135-0', '694(1)PO2001CA', 2, 2),
(460, 455, 'BRIAN PORTER', 'Carpentry And Joinery 1', '2001', 'Routledge', '3rd', '0-7506-5135-0', '694(1)PO2001CA', 2, 2),
(461, 456, 'BRIAN PORTER', 'Carpentry And Joinery 1', '2001', 'Routledge', '3rd', '0-7506-5135-0', '694(1)PO2001CA', 2, 2),
(462, 457, 'BRIAN PORTER& CHRISTOPHER TOOKE', 'Carpentry And Joinery2', '2005', 'Routledge', '3rd', '0-7506-6504-1', '694(1)PO2005CA', 2, 2),
(463, 458, 'BRIAN PORTER& CHRISTOPHER TOOKE', 'Carpentry And Joinery2', '2005', 'Routledge', '3rd', '0-7506-6504-1', '694(1)PO2005CA', 2, 2),
(464, 459, 'BRIAN PORTER& CHRISTOPHER TOOKE', 'Carpentry And Joinery2', '2005', 'Routledge', '3rd', '0-7506-6504-1', '694(1)PO2005CA', 2, 2),
(465, 460, 'BRIAN PORTER& CHRISTOPHER TOOKE', 'Carpentry And Joinery2', '2005', 'Routledge', '3rd', '0-7506-6504-1', '694(1)PO2005CA', 2, 2),
(466, 461, 'BRIAN PORTER& CHRISTOPHER TOOKE', 'Carpentry And Joinery2', '2005', 'Routledge', '3rd', '0-7506-6504-1', '694(1)PO2005CA', 2, 2),
(467, 462, 'BRIAN PORTER& CHRISTOPHER TOOKE', 'Carpentry And Joinery2', '2005', 'Routledge', '3rd', '0-7506-6504-1', '694(1)PO2005CA', 2, 2),
(468, 463, 'BRIAN PORTER& CHRISTOPHER TOOKE', 'Carpentry And Joinery2', '2005', 'Routledge', '3rd', '0-7506-6504-1', '694(1)PO2005CA', 2, 2),
(469, 464, 'BRIAN PORTER& CHRISTOPHER TOOKE', 'Carpentry And Joinery2', '2005', 'Routledge', '3rd', '0-7506-6504-1', '694(1)PO2005CA', 2, 2),
(470, 465, 'BRIAN PORTER& CHRISTOPHER TOOKE', 'Carpentry And Joinery2', '2005', 'Routledge', '3rd', '0-7506-6504-1', '694(1)PO2005CA', 2, 2),
(471, 466, 'BRIAN PORTER& CHRISTOPHER TOOKE', 'Carpentry And Joinery2', '2005', 'Routledge', '3rd', '0-7506-6504-1', '694(1)PO2005CA', 2, 2),
(472, 467, 'BOB FLEXNER', 'Understanding Wood Finishind', '2005', 'FOX Chapel', '-', '978-1-56523-566-3', '684.084(1)FL2005UN', 2, 2),
(473, 468, 'BOB FLEXNER', 'Understanding Wood Finishind', '2005', 'FOX Chapel', '-', '978-1-56523-566-3', '684.084(1)FL2005UN', 2, 2),
(474, 469, 'BOB FLEXNER', 'Understanding Wood Finishind', '2005', 'FOX Chapel', '-', '978-1-56523-566-3', '684.084(1)FL2005UN', 2, 2),
(475, 470, 'BOB FLEXNER', 'Understanding Wood Finishind', '2005', 'FOX Chapel', '-', '978-1-56523-566-3', '684.084(1)FL2005UN', 2, 2),
(476, 471, 'BOB FLEXNER', 'Understanding Wood Finishind', '2005', 'FOX Chapel', '-', '978-1-56523-566-3', '684.084(1)FL2005UN', 2, 2),
(477, 472, 'BOB FLEXNER', 'Understanding Wood Finishind', '2005', 'FOX Chapel', '-', '978-1-56523-566-3', '684.084(1)FL2005UN', 2, 2),
(478, 473, 'BOB FLEXNER', 'Understanding Wood Finishind', '2005', 'FOX Chapel', '-', '978-1-56523-566-3', '684.084(1)FL2005UN', 2, 2),
(479, 474, 'BOB FLEXNER', 'Understanding Wood Finishind', '2005', 'FOX Chapel', '-', '978-1-56523-566-3', '684.084(1)FL2005UN', 2, 2),
(480, 475, 'BOB FLEXNER', 'Understanding Wood Finishind', '2005', 'FOX Chapel', '-', '978-1-56523-566-3', '684.084(1)FL2005UN', 2, 2),
(481, 476, 'BOB FLEXNER', 'Understanding Wood Finishind', '2005', 'FOX Chapel', '-', '978-1-56523-566-3', '684.084(1)FL2005UN', 2, 2),
(482, 477, 'A.HASLINGER CHRISTOPHER', 'Backflow Prevention Reference Manual', '2016', 'IAPMO', '3rd', '978-1-938936-89-0', '691.1(1)AL2016BA', 2, 2),
(483, 478, 'WDA', 'Hand-Out For TOT Training In Carpentry', '2016', '-', '-', '-', '-', 2, 2),
(484, 479, 'WDA', 'Hand-Out For TOT Training In Carpentry', '2016', '-', '-', '-', '-', 2, 2),
(485, 480, 'WDA', 'Hand-Out For TOT Training In Carpentry', '2016', '-', '-', '-', '-', 2, 2),
(486, 481, 'ROB THALLON', 'Graphic Guide To Frame Construction', '2016', '-', '4th', '978-1-63186-372-1', '694.2(1)TH2016GR', 2, 2),
(487, 482, 'ROB THALLON', 'Graphic Guide To Frame Construction', '2016', '-', '4th', '978-1-63186-372-1', '694.2(1)TH2016GR', 2, 2),
(488, 483, 'ROB THALLON', 'Graphic Guide To Frame Construction', '2016', '-', '4th', '978-1-63186-372-1', '694.2(1)TH2016GR', 2, 2),
(489, 484, 'ROB THALLON', 'Graphic Guide To Frame Construction', '2016', '-', '4th', '978-1-63186-372-1', '694.2(1)TH2016GR', 2, 2),
(490, 485, 'ROB THALLON', 'Graphic Guide To Frame Construction', '2016', '-', '4th', '978-1-63186-372-1', '694.2(1)TH2016GR', 2, 2),
(491, 486, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(492, 487, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(493, 488, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(494, 489, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(495, 490, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(496, 491, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(497, 492, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(498, 493, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(499, 494, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(500, 495, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(501, 496, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(502, 497, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(503, 498, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(504, 499, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(505, 500, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(506, 501, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(507, 502, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(508, 503, 'R.D TRELOAR', 'Pumbing ', '2012', 'Wiley-Blackwell', '4th', '978-1-4051-8959-0', '691.1(1)TH2012PU', 2, 2),
(509, 504, 'JONATHAN HETREED ANN ROSS CHARLOTTE BADEN POWELL', 'Architect\'s Pocket Book', '2017', 'Routledge', '5th', '978-1-138-64399-4', '-', 2, 2),
(510, 505, 'JONATHAN HETREED ANN ROSS CHARLOTTE BADEN POWELL', 'Architect\'s Pocket Book', '2017', 'Routledge', '5th', '978-1-138-64399-4', '-', 2, 2),
(511, 506, 'JONATHAN HETREED ANN ROSS CHARLOTTE BADEN POWELL', 'Architect\'s Pocket Book', '2017', 'Routledge', '5th', '978-1-138-64399-4', '-', 2, 2),
(512, 507, 'JONATHAN HETREED ANN ROSS CHARLOTTE BADEN POWELL', 'Architect\'s Pocket Book', '2017', 'Routledge', '5th', '978-1-138-64399-4', '-', 2, 2),
(513, 508, 'JONATHAN HETREED ANN ROSS CHARLOTTE BADEN POWELL', 'Architect\'s Pocket Book', '2017', 'Routledge', '5th', '978-1-138-64399-4', '-', 2, 2),
(514, 509, 'JONATHAN HETREED ANN ROSS CHARLOTTE BADEN POWELL', 'Architect\'s Pocket Book', '2017', 'Routledge', '5th', '978-1-138-64399-4', '-', 2, 2),
(515, 510, 'JONATHAN HETREED ANN ROSS CHARLOTTE BADEN POWELL', 'Architect\'s Pocket Book', '2017', 'Routledge', '5th', '978-1-138-64399-4', '-', 2, 2),
(516, 511, 'JONATHAN HETREED ANN ROSS CHARLOTTE BADEN POWELL', 'Architect\'s Pocket Book', '2017', 'Routledge', '5th', '978-1-138-64399-4', '-', 2, 2),
(517, 512, 'JONATHAN HETREED ANN ROSS CHARLOTTE BADEN POWELL', 'Architect\'s Pocket Book', '2017', 'Routledge', '5th', '978-1-138-64399-4', '-', 2, 2),
(518, 513, 'JONATHAN HETREED ANN ROSS CHARLOTTE BADEN POWELL', 'Architect\'s Pocket Book', '2017', 'Routledge', '5th', '978-1-138-64399-4', '-', 2, 2),
(519, 514, 'JONATHAN HETREED ANN ROSS CHARLOTTE BADEN POWELL', 'Architect\'s Pocket Book', '2017', 'Routledge', '5th', '978-1-138-64399-4', '-', 2, 2),
(520, 515, 'JACK C.MC CORMAC, RUSSELL H.BROWN', 'Design Of Reinforced Concrete', '2014', 'Wiley', '9th', '978-1-118-12984-5', '624.18431(1)MC2014DE', 2, 2),
(521, 516, 'JACK C.MC CORMAC, RUSSELL H.BROWN', 'Design Of Reinforced Concrete', '2014', 'Wiley', '9th', '978-1-118-12984-5', '624.18431(1)MC2014DE', 2, 2),
(522, 517, 'YODER WITCZAK', 'Principles Of Pavement Design', '1975', 'John Weley', '2nd', '978-0-471-97780-3', '625.8(1)YO1975PR', 2, 2),
(523, 518, 'YODER WITCZAK', 'Principles Of Pavement Design', '1975', 'John Weley', '2nd', '978-0-471-97780-3', '625.8(1)YO1975PR', 2, 2),
(524, 519, 'S PONNUSWAMY', 'Bridge Engineering', '2009', 'Mc Graw Hill', '2nd', '13:978-0-07-065695-6', '624.2(1)PO2009BR', 2, 2),
(525, 520, 'S PONNUSWAMY', 'Bridge Engineering', '2009', 'Mc Graw Hill', '2nd', '13:978-0-07-065695-6', '624.2(1)PO2009BR', 2, 2),
(526, 521, 'PARBIN SINGH', 'Engineering And General Geology', '2008', 'KATSON BOOKS', '8th', '13:978-93-5014-267-7', '551(1)SI2008EN', 2, 2),
(527, 522, 'PARBIN SINGH', 'Engineering And General Geology', '2008', 'KATSON BOOKS', '8th', '13:978-93-5014-267-7', '551(1)SI2008EN', 2, 2),
(528, 523, 'DAVID SAUTER', 'Landscape Construction', '2011 ', 'Dermar Cengage Learning', '3rd', '13:978-1-4354-9718-4', '624.1(1)SA2011LA', 2, 2),
(529, 524, 'DAVID SAUTER', 'Landscape Construction', '2011 ', 'Dermar Cengage Learning', '3rd', '13:978-1-4354-9718-4', '624.1(1)SA2011LA', 2, 2),
(530, 525, 'SIDNEY M.LEVY', 'Construction Process Planning And Management ', '2010', 'BH', '-', '978-1-85617-548-7', '690(1)LE2010CO', 2, 2),
(531, 526, 'SIDNEY M.LEVY', 'Construction Process Planning And Management ', '2010', 'BH', '-', '978-1-85617-548-7', '690(1)LE2010CO', 2, 2),
(532, 527, 'BRAJA M.DAS KHALED SOBHAN', 'Principles Of Geotechnical Engineering', '2014', 'Cengage Learning', '8th', '13:978-1-133-10867-2', '620.11(1)DA2014PR', 2, 2),
(533, 528, 'BRAJA M.DAS KHALED SOBHAN', 'Principles Of Geotechnical Engineering', '2014', 'Cengage Learning', '8th', '13:978-1-133-10867-2', '620.11(1)DA2014PR', 2, 2),
(534, 529, 'BRAJA M.DAS ', 'Principles Of FoundationEngineering', '2016', 'Cengage Learning', '8th', '13:978-1-305-08156-7', '624.15(1)DA2016PR', 2, 2),
(535, 530, 'BRAJA M.DAS ', 'Principles Of FoundationEngineering', '2016', 'Cengage Learning', '8th', '13:978-1-305-08156-7', '624.15(1)DA2016PR', 2, 2),
(536, 531, 'BRAJA M.DAS NAGARATNAM SIVAKUGAN', 'Fundamentals Of Geotechnical Engineering', '2017', 'Cengage Learning', '5th', '13:978-1-305-63862-4', '624.15(1)DA2017FU', 2, 2),
(537, 532, 'BRAJA M.DAS NAGARATNAM SIVAKUGAN', 'Fundamentals Of Geotechnical Engineering', '2017', 'Cengage Learning', '5th', '13:978-1-305-63862-4', '624.15(1)DA2017FU', 2, 2),
(538, 533, 'JACK E.INGELS', 'Landscaping Principles &Practices', '2009', 'Dermar Cengage Learning', '7th', '13:978-1-4283-7641-0', '712(1)IN2009LA', 2, 2),
(539, 534, 'JACK E.INGELS', 'Landscaping Principles &Practices', '2009', 'Dermar Cengage Learning', '7th', '13:978-1-4283-7641-0', '712(1)IN2009LA', 2, 2),
(540, 535, 'MUNI BUDHU', 'Foundations And Erth Retaining Structures  ', '2008', 'John Weley', '-', '978-0-471-47012-0', '624.15(1)BU2008FO', 2, 2),
(541, 536, 'MUNI BUDHU', 'Foundations And Erth Retaining Structures  ', '2008', 'John Weley', '-', '978-0-471-47012-0', '624.15(1)BU2008FO', 2, 2),
(542, 537, 'CHENG LIU JACK B.EVETT', 'Soils And Foundations', '2013', 'Pearson', '8th', '13:978-0-13-511390-5', '624.15136(1)LI2013SO', 2, 2),
(543, 538, 'CHENG LIU JACK B.EVETT', 'Soils And Foundations', '2013', 'Pearson', '8th', '13:978-0-13-511390-5', '624.15136(1)LI2013SO', 2, 2),
(544, 539, 'M S WILLIAMS&J D TODD', 'Structures Theory And Analysis', '2000', 'Palgrave Macmillan', '-', '0-333-67760-9', '624.17(1)WI2000ST', 2, 2),
(545, 540, 'M S WILLIAMS&J D TODD', 'Structures Theory And Analysis', '2000', 'Palgrave Macmillan', '-', '0-333-67760-9', '624.17(1)WI2000ST', 2, 2),
(546, 541, 'S.RAMAMRUTHAM', 'Design Of Steel Structures', '1994', 'DHANPAT RAI&CO', '-', '978-93-5216-133-1', '624.1821(1)NA1994DE', 2, 2),
(547, 542, 'S.RAMAMRUTHAM', 'Design Of Steel Structures', '1994', 'DHANPAT RAI&CO', '-', '978-93-5216-133-1', '624.1821(1)NA1994DE', 2, 2),
(548, 543, 'DONALD P.CODUTO, WILLIAM A.KITCH, MAN-CHU RONALD YEUNG', 'Foundation Design Principles And Practices', '2016', 'Pearson', '3rd', '13:978-0-13-341189-8', '624.15(1)CO2016FO', 2, 2),
(549, 544, 'DONALD P.CODUTO, WILLIAM A.KITCH, MAN-CHU RONALD YEUNG', 'Foundation Design Principles And Practices', '2016', 'Pearson', '3rd', '13:978-0-13-341189-8', '624.15(1)CO2016FO', 2, 2),
(550, 545, 'N.KRISHNA RAJU', 'Prestressed Concrete', '2012', 'Mc Graw Hill', '5th', '13:978-1-25-900336-3', '620.137(1)RA2012PR', 2, 2),
(551, 546, 'N.KRISHNA RAJU', 'Prestressed Concrete', '2012', 'Mc Graw Hill', '5th', '13:978-1-25-900336-3', '620.137(1)RA2012PR', 2, 2),
(552, 547, 'A.C.MCLEAN, C.D.GRIBBLE', 'Geology For Civil Engineers', '1985', 'Taylor& Francis', '2nd', '0-419-16000-0', '550.024624(1)GR1985GE', 2, 2),
(553, 548, 'A.C.MCLEAN, C.D.GRIBBLE', 'Geology For Civil Engineers', '1985', 'Taylor& Francis', '2nd', '0-419-16000-0', '550.024624(1)GR1985GE', 2, 2),
(554, 549, 'A.C.MCLEAN, C.D.GRIBBLE', 'Geology For Civil Engineers', '1985', 'Taylor& Francis', '2nd', '0-419-16000-0', '550.024624(1)GR1985GE', 2, 2),
(555, 550, 'IAPMO', 'Uniform Plumbing Code', '2017', '-', '-', '978-1-938-93667-8', '694.1IA2017UN', 2, 2),
(556, 551, 'G.B MAHAPATRA', 'A Text Book Of Geology', '2017', 'CBS P', '-', '81-239-0013-9', '551(1)MA2017TE', 2, 2),
(557, 552, 'G.B MAHAPATRA', 'A Text Book Of Geology', '2017', 'CBS P', '-', '81-239-0013-9', '551(1)MA2017TE', 2, 2),
(558, 553, 'ROBERT W.DAY', 'Forensic Geotechnical And Foundation Engineering', '2011', 'Mc Graw Hill', '2nd', '978-0-07-176133-8', '621.1(1)DA2011FO', 2, 2),
(559, 554, 'ROBERT W.DAY', 'Forensic Geotechnical And Foundation Engineering', '2011', 'Mc Graw Hill', '2nd', '978-0-07-176133-8', '621.1(1)DA2011FO', 2, 2),
(560, 555, 'CHRISTIAN U.GROSSE', 'Advances In Construction Materials 2007', '2007', 'Springer Science', '2nd', '978-3-540-72447-6', '624.18(1)GR2007AD', 2, 2),
(561, 556, 'CHRISTIAN U.GROSSE', 'Advances In Construction Materials 2007', '2007', 'Springer Science', '2nd', '978-3-540-72447-6', '624.18(1)GR2007AD', 2, 2),
(562, 557, 'P.T.SAWANT', 'Engineering And General Geology', '2011', 'New India Publishing Agency', '-', '978-8-235-1-8', '551(1)SA2011EN', 2, 2),
(563, 558, 'P.T.SAWANT', 'Engineering And General Geology', '2011', 'New India Publishing Agency', '-', '978-8-235-1-8', '551(1)SA2011EN', 2, 2),
(564, 559, 'PAUL H,WRIGHT NORMAN J.ASHFORD', 'Transportation Engineering Planning And Design ', '1998', 'John Weley', '4th', '0-471-17396-7', '629.04(1)WR1998TR', 2, 2),
(565, 560, 'PAUL H,WRIGHT NORMAN J.ASHFORD', 'Transportation Engineering Planning And Design ', '1998', 'John Weley', '4th', '0-471-17396-7', '629.04(1)WR1998TR', 2, 2),
(566, 561, 'WARREN J.LUZADDER.JON M.DUFF', 'Fundamentals Of Engineering Drawing ', '1992', 'Prentice Hall', '11th', '0-13-335050-9', '604-24(1)LU1992FU', 2, 2),
(567, 562, 'WARREN J.LUZADDER.JON M.DUFF', 'Fundamentals Of Engineering Drawing ', '1992', 'Prentice Hall', '11th', '0-13-335050-9', '604-24(1)LU1992FU', 2, 2),
(568, 563, 'ROY CHUDLEY. ROGER GREENO. MIKE HURST. SIMON TOPLISS', 'Construction Technology', '2011', 'Pearson', '5th', '978-0-435-04682-8', '690(1)CH2011CO', 2, 2),
(569, 564, 'ROY CHUDLEY. ROGER GREENO. MIKE HURST. SIMON TOPLISS', 'Construction Technology', '2011', 'Pearson', '5th', '978-0-435-04682-8', '690(1)CH2011CO', 2, 2),
(570, 565, 'N KRISHNA RAJU', 'Design Of Reinforced Concrete Structures IS 457-2000', '2016', 'CBS P', '4th', '978-93-85915-36-9', '624.18341(1)KR2016DE', 2, 2),
(571, 566, 'N KRISHNA RAJU', 'Design Of Reinforced Concrete Structures IS 457-2000', '2016', 'CBS P', '4th', '978-93-85915-36-9', '624.18341(1)KR2016DE', 2, 2),
(572, 567, 'M.S.SHETTY', 'Concrete Technology Theory And Practice', '1982', 'S.CHAND', 'Revised Ed', '978-81-219-0003-4', '620.136(1)SH1982CO', 2, 2),
(573, 568, 'M.S.SHETTY', 'Concrete Technology Theory And Practice', '1982', 'S.CHAND', 'Revised Ed', '978-81-219-0003-4', '620.136(1)SH1982CO', 2, 2),
(574, 569, 'KENNY NOLAN', 'Masonry & Concrete Construction', '1998', 'Craftsman', 'Revised Ed', '13:978-1-51218-044-4', '693.1(1)NO1998MA', 2, 2),
(575, 570, 'KENNY NOLAN', 'Masonry & Concrete Construction', '1998', 'Craftsman', 'Revised Ed', '13:978-1-51218-044-4', '693.1(1)NO1998MA', 2, 2),
(576, 571, 'HEGGER AUCH-SCHWELK FUCHS, ROSENKRANZ', 'Construction Materials Manual', '2006 ', '-', '-', '978-37643-7570-6', '691(1)HE2006CO', 2, 2),
(577, 572, 'HEGGER AUCH-SCHWELK FUCHS, ROSENKRANZ', 'Construction Materials Manual', '2006 ', '-', '-', '978-37643-7570-6', '691(1)HE2006CO', 2, 2),
(578, 573, 'MARTIN BROOK', 'Estimating And Tendering For Construction Work', '2017', 'Routledge', '5th', '978-1-138-83806-2', '692.5(1)BR2017ES', 2, 2),
(579, 574, 'MARTIN BROOK', 'Estimating And Tendering For Construction Work', '2017', 'Routledge', '5th', '978-1-138-83806-2', '692.5(1)BR2017ES', 2, 2),
(580, 575, 'P.DAYARATNAM', 'Design Of Reinfoced Concrete Structures', '2000', 'Oxford&IBH Publishing', '4th', '978-81-204-119-8', '624.18341(1)SA200DE', 2, 2),
(581, 576, 'P.DAYARATNAM', 'Design Of Reinfoced Concrete Structures', '2000', 'Oxford&IBH Publishing', '4th', '978-81-204-119-8', '624.18341(1)SA200DE', 2, 2),
(582, 577, 'FRED L.MANNERING, SCOTT S.WASHBURN ', 'Principles Of Highway Engineering And Traffic Analysis', '2013', 'SI Version', '5th', '978-1-118-47139-5', '625.7(1)MA2013PR', 2, 2),
(583, 578, 'FRED L.MANNERING, SCOTT S.WASHBURN ', 'Principles Of Highway Engineering And Traffic Analysis', '2013', 'SI Version', '5th', '978-1-118-47139-5', '625.7(1)MA2013PR', 2, 2),
(584, 579, 'RICHARD ROBINSON UNO DANIELSON MARTIN SNAAITH', 'Road Mainenance Management Concepts And Systems', '1998', 'Palgrave Macmillan', '-', '978-0-333-72155-1', '625.76068RO1998RO', 2, 2),
(585, 580, 'DAVID A.FANELLA', 'Reinforced Concrete Structures Analysis And Design', '2016', 'Mc Graw Hill', '2nd', '978-0-07-184784-1', '624.18341(1)FA2016RE', 2, 2),
(586, 581, 'DAVID A.FANELLA', 'Reinforced Concrete Structures Analysis And Design', '2016', 'Mc Graw Hill', '2nd', '978-0-07-184784-1', '624.18341(1)FA2016RE', 2, 2),
(589, 582, 'YANG H.HUANG', 'Pavement Analysis And Design', '2012', 'Pearson', '2nd', '13:978-0-13-272610-8', '625.8(1)HU2012PA', 2, 2),
(590, 583, 'YANG H.HUANG', 'Pavement Analysis And Design', '2012', 'Pearson', '2nd', '13:978-0-13-272610-8', '625.8(1)HU2012PA', 2, 2),
(591, 584, 'WILLIAM R.SPILLERS', 'Introduction To Structures', '2002', 'WP', '2nd', '978-1-898563-94-5', '624.17(2)SP2002IN', 2, 2),
(592, 585, 'WILLIAM R.SPILLERS', 'Introduction To Structures', '2002', 'WP', '2nd', '978-1-898563-94-5', '624.17(2)SP2002IN', 2, 2),
(593, 586, 'ABI O.AGHAYERE GEORGE F.LIMBRUNNER', 'Reinforced Concrete  Design', '2013', 'Pearson', '8th', '13:978-0-13-285929-5', '624.18341(1)AG2013RE', 2, 2),
(594, 587, 'ABI O.AGHAYERE GEORGE F.LIMBRUNNER', 'Reinforced Concrete  Design', '2013', 'Pearson', '8th', '13:978-0-13-285929-5', '624.18341(1)AG2013RE', 2, 2),
(595, 588, 'RAJIB B.MALLICK , TAHAR EL-KORCHI', 'Pavement Engineering Principles And Practices', '2013', 'CRC Press', '2nd', '978-1-4398-7035-8', '625.8(1)MA2013PA', 2, 2),
(596, 589, 'RAJIB B.MALLICK , TAHAR EL-KORCHI', 'Pavement Engineering Principles And Practices', '2013', 'CRC Press', '2nd', '978-1-4398-7035-8', '625.8(1)MA2013PA', 2, 2),
(597, 590, 'M.BHATTACHARYYA S.PAL', 'Fundamentals Of Engineering Drawing ', '1978', 'CBS P', '4th', '81-239-1177-7', '604.2(1)BH1978FU', 2, 2),
(598, 591, 'M.BHATTACHARYYA S.PAL', 'Fundamentals Of Engineering Drawing ', '1978', 'CBS P', '4th', '81-239-1177-7', '604.2(1)BH1978FU', 2, 2),
(599, 592, 'COLLIN H.SIMMONS NEIL PHELPS DENNIS E.MAGUIRE', 'Manual Of Engineering Drawing', '2012', 'BH', '4th', '978-0-08-096652-6', '604(1)SI2012MA', 2, 2),
(600, 593, 'COLLIN H.SIMMONS NEIL PHELPS DENNIS E.MAGUIRE', 'Manual Of Engineering Drawing', '2012', 'BH', '4th', '978-0-08-096652-6', '604(1)SI2012MA', 2, 2),
(601, 594, 'JAN A VAN DER WESTHUIZEN', 'Drawing For Civil Engineering', '2012', 'JUTA', '2nd', '978-0-70218-73-2', '604.2(1)VA2012DR', 2, 2),
(602, 595, 'JAN A VAN DER WESTHUIZEN', 'Drawing For Civil Engineering', '2012', 'JUTA', '2nd', '978-0-70218-73-2', '604.2(1)VA2012DR', 2, 2),
(603, 596, 'C.A.O\'FLAHERTY', 'HIGHWAY', '2002', 'CRC Press', '4th', '978-0-7506-5090-8', '625.7(1)OF2002HI', 2, 2),
(604, 597, 'C.A.O\'FLAHERTY', 'HIGHWAY', '2002', 'CRC Press', '4th', '978-0-7506-5090-8', '625.7(1)OF2002HI', 2, 2),
(605, 598, 'R.DODGE WOODSON', 'Concrete Structures Protection Repair And Rehabilitation', '2009', 'BH', '-', '978-93-80931-44-9', '624.1834(1)WO2009CO', 2, 2),
(606, 599, 'R.DODGE WOODSON', 'Concrete Structures Protection Repair And Rehabilitation', '2009', 'BH', '-', '978-93-80931-44-9', '624.1834(1)WO2009CO', 2, 2),
(607, 600, 'R.BARRY', ' The Construction Of Buildings 3', '1993', 'EWP', '4th', '81-7671-003-2', '690(1)BA1993CO', 2, 2),
(608, 601, 'R.BARRY', ' The Construction Of Buildings 3', '1993', 'EWP', '4th', '81-7671-003-2', '690(1)BA1993CO', 2, 2),
(609, 602, 'Justin ', 'HTML Basics', '1995', 'Mr Roman', 'Ggg', '4555', '98765432', 10, 39),
(610, 603, 'Elie', 'Knowledge', '1786', 'Mr Franco', 'Gandarume', '33333', '54667', 1, 6),
(611, 604, 'Gentill', 'CSS Basics', '2000', 'Fiston', '13th ', '1-33333-2111', '434242', 10, 39);

-- --------------------------------------------------------

--
-- Table structure for table `books_type`
--

CREATE TABLE `books_type` (
  `book_type_id` int(11) NOT NULL,
  `book_type_name` varchar(255) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_type`
--

INSERT INTO `books_type` (`book_type_id`, `book_type_name`, `d_id`) VALUES
(1, 'Normal Books', 1),
(2, 'Normal Books', 2),
(3, 'Normal Books', 3),
(4, 'Normal Books', 4),
(5, 'Normal Books', 5),
(6, 'E-Books', 1),
(7, 'E-Books', 3),
(8, 'E-Books', 2),
(9, 'E-Books', 4),
(10, 'E-Books', 5),
(11, 'Final Project for Student 2023', 1),
(12, 'Final Project for Student 2017', 2),
(13, 'Final Project for Student 2018', 2),
(14, 'Final Project for Student 2019', 2),
(15, 'Final Project for Student 2021', 2),
(16, 'Final Project for Student 2022', 2),
(17, 'Final Project for Student 2023', 2),
(18, 'Final Project for Student 2017', 3),
(19, 'Final Project for Student 2018', 3),
(20, 'Final Project for Student 2019', 3),
(21, 'Final Project for Student 2020', 3),
(22, 'Final Project for Student 2022', 3),
(23, 'Final Project for Student 2023', 3),
(24, 'Final Project for Student 2017', 4),
(25, 'Final Project for Student 2018', 4),
(26, 'Final Project for Student 2019', 4),
(27, 'Final Project for Student 2021', 4),
(28, 'Final Project for Student 2022', 4),
(29, 'Final Project for Student 2023', 4),
(30, 'Final Project for Student 2017', 5),
(31, 'Final Project for Student 2018', 5),
(32, 'Final Project for Student 2019', 5),
(33, 'Final Project for Student 2023', 5),
(34, 'Final Project for Student 2021', 5),
(35, 'E-Books', 6),
(36, 'E-Books', 7),
(37, 'Normal Books', 7),
(38, 'Normal Books', 6),
(39, 'HTML basics', 10),
(40, 'foundation', 9),
(41, 'All basics', 9);

-- --------------------------------------------------------

--
-- Table structure for table `book_in_stock`
--

CREATE TABLE `book_in_stock` (
  `b_id` int(11) NOT NULL,
  `b_SN` int(11) NOT NULL,
  `b_status` varchar(255) NOT NULL,
  `b_appiarence` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_in_stock`
--

INSERT INTO `book_in_stock` (`b_id`, `b_SN`, `b_status`, `b_appiarence`) VALUES
(1, 1, 'BOOKED', 'non-damaged'),
(2, 2, 'BOOKED', 'non-damaged'),
(3, 3, 'BOOKED', 'non-damaged'),
(4, 4, 'available', 'non-damaged'),
(5, 5, 'available', 'non-damaged'),
(6, 6, 'available', 'non-damaged'),
(7, 7, 'available', 'non-damaged'),
(8, 8, 'available', 'non-damaged'),
(9, 9, 'available', 'non-damaged'),
(10, 10, 'available', 'non-damaged'),
(11, 11, 'available', 'non-damaged'),
(12, 12, 'available', 'non-damaged'),
(13, 13, 'available', 'non-damaged'),
(14, 14, 'available', 'non-damaged'),
(15, 15, 'available', 'non-damaged'),
(16, 16, 'available', 'non-damaged'),
(17, 17, 'available', 'non-damaged'),
(18, 18, 'available', 'non-damaged'),
(19, 19, 'available', 'non-damaged'),
(20, 20, 'available', 'non-damaged'),
(21, 21, 'available', 'non-damaged'),
(22, 22, 'available', 'non-damaged'),
(23, 23, 'available', 'non-damaged'),
(24, 24, 'available', 'non-damaged'),
(25, 25, 'available', 'non-damaged'),
(26, 26, 'available', 'non-damaged'),
(27, 27, 'available', 'non-damaged'),
(28, 28, 'available', 'non-damaged'),
(29, 29, 'available', 'non-damaged'),
(30, 30, 'available', 'non-damaged'),
(31, 31, 'available', 'non-damaged'),
(32, 32, 'available', 'non-damaged'),
(33, 33, 'available', 'non-damaged'),
(34, 34, 'available', 'non-damaged'),
(35, 35, 'available', 'non-damaged'),
(36, 36, 'available', 'non-damaged'),
(37, 37, 'available', 'non-damaged'),
(38, 38, 'available', 'non-damaged'),
(39, 39, 'available', 'non-damaged'),
(40, 40, 'available', 'non-damaged'),
(41, 41, 'available', 'non-damaged'),
(42, 42, 'available', 'non-damaged'),
(43, 43, 'available', 'non-damaged'),
(44, 44, 'available', 'non-damaged'),
(45, 45, 'available', 'non-damaged'),
(46, 46, 'available', 'non-damaged'),
(47, 47, 'available', 'non-damaged'),
(48, 48, 'available', 'non-damaged'),
(49, 49, 'available', 'non-damaged'),
(50, 50, 'available', 'non-damaged'),
(51, 51, 'available', 'non-damaged'),
(52, 52, 'available', 'non-damaged'),
(53, 53, 'available', 'non-damaged'),
(54, 54, 'available', 'non-damaged'),
(55, 55, 'available', 'non-damaged'),
(56, 56, 'available', 'non-damaged'),
(57, 57, 'available', 'non-damaged'),
(58, 58, 'available', 'non-damaged'),
(59, 59, 'available', 'non-damaged'),
(60, 60, 'available', 'non-damaged'),
(61, 61, 'available', 'non-damaged'),
(62, 62, 'available', 'non-damaged'),
(63, 63, 'available', 'non-damaged'),
(64, 64, 'available', 'non-damaged'),
(65, 65, 'available', 'non-damaged'),
(66, 66, 'available', 'non-damaged'),
(67, 67, 'available', 'non-damaged'),
(68, 68, 'available', 'non-damaged'),
(69, 69, 'available', 'non-damaged'),
(70, 70, 'available', 'non-damaged'),
(71, 71, 'available', 'non-damaged'),
(72, 72, 'available', 'non-damaged'),
(73, 73, 'available', 'non-damaged'),
(74, 74, 'available', 'non-damaged'),
(75, 75, 'available', 'non-damaged'),
(76, 76, 'available', 'non-damaged'),
(77, 77, 'available', 'non-damaged'),
(78, 78, 'available', 'non-damaged'),
(79, 79, 'available', 'non-damaged'),
(80, 80, 'available', 'non-damaged'),
(81, 81, 'available', 'non-damaged'),
(82, 82, 'available', 'non-damaged'),
(83, 83, 'available', 'non-damaged'),
(84, 84, 'available', 'non-damaged'),
(85, 85, 'available', 'non-damaged'),
(86, 86, 'available', 'non-damaged'),
(87, 87, 'available', 'non-damaged'),
(88, 88, 'available', 'non-damaged'),
(89, 89, 'available', 'non-damaged'),
(90, 90, 'available', 'non-damaged'),
(91, 91, 'available', 'non-damaged'),
(92, 92, 'available', 'non-damaged'),
(93, 93, 'available', 'non-damaged'),
(94, 94, 'available', 'non-damaged'),
(95, 95, 'available', 'non-damaged'),
(96, 96, 'available', 'non-damaged'),
(97, 97, 'available', 'non-damaged'),
(98, 98, 'available', 'non-damaged'),
(99, 99, 'available', 'non-damaged'),
(100, 100, 'available', 'non-damaged'),
(101, 101, 'available', 'non-damaged'),
(102, 102, 'available', 'non-damaged'),
(103, 103, 'available', 'non-damaged'),
(104, 104, 'available', 'non-damaged'),
(105, 105, 'available', 'non-damaged'),
(106, 106, 'available', 'non-damaged'),
(107, 107, 'available', 'non-damaged'),
(108, 108, 'available', 'non-damaged'),
(109, 109, 'available', 'non-damaged'),
(110, 110, 'available', 'non-damaged'),
(111, 111, 'available', 'non-damaged'),
(112, 112, 'available', 'non-damaged'),
(113, 113, 'available', 'non-damaged'),
(114, 114, 'available', 'non-damaged'),
(115, 115, 'available', 'non-damaged'),
(116, 116, 'available', 'non-damaged'),
(117, 117, 'available', 'non-damaged'),
(118, 118, 'available', 'non-damaged'),
(119, 119, 'available', 'non-damaged'),
(120, 120, 'available', 'non-damaged'),
(121, 121, 'available', 'non-damaged'),
(122, 122, 'available', 'non-damaged'),
(123, 123, 'available', 'non-damaged'),
(124, 124, 'available', 'non-damaged'),
(125, 125, 'available', 'non-damaged'),
(126, 126, 'available', 'non-damaged'),
(127, 127, 'available', 'non-damaged'),
(128, 128, 'available', 'non-damaged'),
(129, 129, 'available', 'non-damaged'),
(130, 130, 'available', 'non-damaged'),
(131, 131, 'available', 'non-damaged'),
(132, 132, 'available', 'non-damaged'),
(133, 133, 'available', 'non-damaged'),
(134, 134, 'available', 'non-damaged'),
(135, 135, 'available', 'non-damaged'),
(136, 136, 'available', 'non-damaged'),
(137, 137, 'available', 'non-damaged'),
(138, 138, 'available', 'non-damaged'),
(139, 139, 'available', 'non-damaged'),
(140, 140, 'available', 'non-damaged'),
(141, 141, 'available', 'non-damaged'),
(142, 142, 'available', 'non-damaged'),
(143, 143, 'available', 'non-damaged'),
(144, 144, 'available', 'non-damaged'),
(145, 145, 'available', 'non-damaged'),
(146, 146, 'available', 'non-damaged'),
(147, 147, 'available', 'non-damaged'),
(148, 148, 'available', 'non-damaged'),
(149, 149, 'available', 'non-damaged'),
(150, 150, 'available', 'non-damaged'),
(151, 151, 'available', 'non-damaged'),
(152, 152, 'available', 'non-damaged'),
(153, 153, 'available', 'non-damaged'),
(154, 154, 'available', 'non-damaged'),
(155, 155, 'available', 'non-damaged'),
(156, 156, 'available', 'non-damaged'),
(157, 157, 'available', 'non-damaged'),
(158, 158, 'available', 'non-damaged'),
(159, 159, 'available', 'non-damaged'),
(160, 160, 'available', 'non-damaged'),
(161, 161, 'available', 'non-damaged'),
(162, 162, 'available', 'non-damaged'),
(163, 163, 'available', 'non-damaged'),
(164, 164, 'available', 'non-damaged'),
(165, 165, 'available', 'non-damaged'),
(166, 166, 'available', 'non-damaged'),
(167, 167, 'available', 'non-damaged'),
(168, 168, 'available', 'non-damaged'),
(169, 169, 'available', 'non-damaged'),
(170, 170, 'available', 'non-damaged'),
(171, 171, 'available', 'non-damaged'),
(172, 172, 'available', 'non-damaged'),
(173, 173, 'available', 'non-damaged'),
(174, 174, 'available', 'non-damaged'),
(175, 175, 'available', 'non-damaged'),
(176, 176, 'available', 'non-damaged'),
(177, 177, 'available', 'non-damaged'),
(178, 178, 'available', 'non-damaged'),
(179, 179, 'available', 'non-damaged'),
(180, 180, 'available', 'non-damaged'),
(181, 181, 'available', 'non-damaged'),
(182, 182, 'available', 'non-damaged'),
(183, 183, 'available', 'non-damaged'),
(184, 184, 'available', 'non-damaged'),
(185, 185, 'available', 'non-damaged'),
(186, 186, 'available', 'non-damaged'),
(187, 187, 'available', 'non-damaged'),
(188, 188, 'available', 'non-damaged'),
(189, 189, 'available', 'non-damaged'),
(190, 190, 'available', 'non-damaged'),
(191, 191, 'available', 'non-damaged'),
(192, 192, 'available', 'non-damaged'),
(193, 193, 'available', 'non-damaged'),
(194, 194, 'available', 'non-damaged'),
(195, 195, 'available', 'non-damaged'),
(196, 196, 'available', 'non-damaged'),
(197, 197, 'available', 'non-damaged'),
(198, 198, 'available', 'non-damaged'),
(199, 199, 'available', 'non-damaged'),
(200, 200, 'available', 'non-damaged'),
(201, 201, 'available', 'non-damaged'),
(202, 202, 'available', 'non-damaged'),
(203, 203, 'available', 'non-damaged'),
(204, 204, 'available', 'non-damaged'),
(205, 205, 'available', 'non-damaged'),
(206, 206, 'available', 'non-damaged'),
(207, 207, 'available', 'non-damaged'),
(208, 208, 'available', 'non-damaged'),
(209, 209, 'available', 'non-damaged'),
(210, 210, 'available', 'non-damaged'),
(211, 211, 'available', 'non-damaged'),
(212, 212, 'available', 'non-damaged'),
(213, 213, 'available', 'non-damaged'),
(214, 214, 'available', 'non-damaged'),
(215, 215, 'available', 'non-damaged'),
(216, 216, 'available', 'non-damaged'),
(217, 217, 'available', 'non-damaged'),
(218, 218, 'available', 'non-damaged'),
(219, 219, 'available', 'non-damaged'),
(220, 220, 'available', 'non-damaged'),
(221, 221, 'available', 'non-damaged'),
(222, 222, 'available', 'non-damaged'),
(223, 223, 'available', 'non-damaged'),
(224, 224, 'available', 'non-damaged'),
(225, 225, 'available', 'non-damaged'),
(226, 226, 'available', 'non-damaged'),
(227, 227, 'available', 'non-damaged'),
(228, 228, 'available', 'non-damaged'),
(229, 229, 'available', 'non-damaged'),
(230, 230, 'available', 'non-damaged'),
(231, 231, 'available', 'non-damaged'),
(232, 232, 'available', 'non-damaged'),
(233, 233, 'available', 'non-damaged'),
(234, 234, 'available', 'non-damaged'),
(235, 235, 'available', 'non-damaged'),
(236, 236, 'available', 'non-damaged'),
(237, 237, 'available', 'non-damaged'),
(238, 238, 'available', 'non-damaged'),
(239, 239, 'available', 'non-damaged'),
(240, 240, 'available', 'non-damaged'),
(241, 241, 'available', 'non-damaged'),
(242, 242, 'available', 'non-damaged'),
(243, 243, 'available', 'non-damaged'),
(244, 244, 'available', 'non-damaged'),
(245, 245, 'available', 'non-damaged'),
(246, 246, 'available', 'non-damaged'),
(247, 247, 'available', 'non-damaged'),
(248, 248, 'available', 'non-damaged'),
(249, 249, 'available', 'non-damaged'),
(250, 250, 'available', 'non-damaged'),
(251, 251, 'available', 'non-damaged'),
(252, 252, 'available', 'non-damaged'),
(253, 253, 'available', 'non-damaged'),
(254, 254, 'available', 'non-damaged'),
(255, 255, 'available', 'non-damaged'),
(256, 256, 'available', 'non-damaged'),
(257, 257, 'available', 'non-damaged'),
(258, 258, 'available', 'non-damaged'),
(259, 259, 'available', 'non-damaged'),
(260, 260, 'available', 'non-damaged'),
(261, 261, 'available', 'non-damaged'),
(262, 262, 'available', 'non-damaged'),
(263, 263, 'available', 'non-damaged'),
(264, 264, 'available', 'non-damaged'),
(265, 265, 'available', 'non-damaged'),
(266, 266, 'available', 'non-damaged'),
(267, 267, 'available', 'non-damaged'),
(268, 268, 'available', 'non-damaged'),
(269, 269, 'available', 'non-damaged'),
(270, 270, 'available', 'non-damaged'),
(271, 271, 'available', 'non-damaged'),
(272, 272, 'available', 'non-damaged'),
(273, 273, 'available', 'non-damaged'),
(274, 274, 'available', 'non-damaged'),
(275, 275, 'available', 'non-damaged'),
(276, 276, 'available', 'non-damaged'),
(277, 277, 'available', 'non-damaged'),
(278, 278, 'available', 'non-damaged'),
(279, 279, 'available', 'non-damaged'),
(280, 280, 'available', 'non-damaged'),
(281, 281, 'available', 'non-damaged'),
(282, 282, 'available', 'non-damaged'),
(283, 283, 'available', 'non-damaged'),
(284, 284, 'available', 'non-damaged'),
(285, 285, 'available', 'non-damaged'),
(286, 286, 'available', 'non-damaged'),
(287, 287, 'available', 'non-damaged'),
(288, 288, 'available', 'non-damaged'),
(289, 289, 'available', 'non-damaged'),
(290, 290, 'available', 'non-damaged'),
(291, 291, 'available', 'non-damaged'),
(292, 292, 'available', 'non-damaged'),
(293, 293, 'available', 'non-damaged'),
(294, 294, 'available', 'non-damaged'),
(295, 295, 'available', 'non-damaged'),
(296, 296, 'available', 'non-damaged'),
(297, 297, 'available', 'non-damaged'),
(298, 298, 'available', 'non-damaged'),
(299, 299, 'available', 'non-damaged'),
(300, 300, 'available', 'non-damaged'),
(301, 301, 'available', 'non-damaged'),
(302, 302, 'available', 'non-damaged'),
(303, 303, 'available', 'non-damaged'),
(304, 304, 'available', 'non-damaged'),
(305, 305, 'available', 'non-damaged'),
(306, 306, 'available', 'non-damaged'),
(307, 307, 'available', 'non-damaged'),
(308, 308, 'available', 'non-damaged'),
(309, 309, 'available', 'non-damaged'),
(310, 310, 'available', 'non-damaged'),
(311, 311, 'available', 'non-damaged'),
(312, 312, 'available', 'non-damaged'),
(313, 313, 'available', 'non-damaged'),
(314, 314, 'available', 'non-damaged'),
(315, 315, 'available', 'non-damaged'),
(316, 316, 'available', 'non-damaged'),
(317, 317, 'available', 'non-damaged'),
(318, 318, 'available', 'non-damaged'),
(319, 319, 'available', 'non-damaged'),
(320, 320, 'available', 'non-damaged'),
(321, 321, 'available', 'non-damaged'),
(322, 322, 'available', 'non-damaged'),
(323, 323, 'available', 'non-damaged'),
(324, 324, 'available', 'non-damaged'),
(325, 325, 'available', 'non-damaged'),
(326, 326, 'available', 'non-damaged'),
(327, 327, 'available', 'non-damaged'),
(328, 328, 'available', 'non-damaged'),
(329, 329, 'available', 'non-damaged'),
(330, 330, 'available', 'non-damaged'),
(331, 331, 'available', 'non-damaged'),
(332, 332, 'available', 'non-damaged'),
(333, 333, 'available', 'non-damaged'),
(334, 334, 'available', 'non-damaged'),
(335, 335, 'available', 'non-damaged'),
(336, 336, 'available', 'non-damaged'),
(337, 337, 'available', 'non-damaged'),
(338, 338, 'available', 'non-damaged'),
(339, 339, 'available', 'non-damaged'),
(340, 340, 'available', 'non-damaged'),
(341, 341, 'available', 'non-damaged'),
(342, 342, 'available', 'non-damaged'),
(343, 343, 'available', 'non-damaged'),
(344, 344, 'available', 'non-damaged'),
(345, 345, 'available', 'non-damaged'),
(346, 346, 'available', 'non-damaged'),
(347, 347, 'available', 'non-damaged'),
(348, 348, 'available', 'non-damaged'),
(349, 349, 'available', 'non-damaged'),
(350, 350, 'available', 'non-damaged'),
(351, 351, 'available', 'non-damaged'),
(352, 352, 'available', 'non-damaged'),
(353, 353, 'available', 'non-damaged'),
(354, 354, 'available', 'non-damaged'),
(355, 355, 'available', 'non-damaged'),
(356, 356, 'available', 'non-damaged'),
(357, 357, 'available', 'non-damaged'),
(358, 358, 'available', 'non-damaged'),
(359, 359, 'available', 'non-damaged'),
(360, 360, 'available', 'non-damaged'),
(361, 361, 'available', 'non-damaged'),
(362, 362, 'available', 'non-damaged'),
(363, 363, 'available', 'non-damaged'),
(364, 364, 'available', 'non-damaged'),
(365, 365, 'available', 'non-damaged'),
(366, 366, 'available', 'non-damaged'),
(367, 367, 'available', 'non-damaged'),
(368, 368, 'available', 'non-damaged'),
(369, 369, 'available', 'non-damaged'),
(370, 370, 'available', 'non-damaged'),
(371, 371, 'available', 'non-damaged'),
(372, 372, 'available', 'non-damaged'),
(373, 373, 'available', 'non-damaged'),
(374, 374, 'available', 'non-damaged'),
(375, 375, 'available', 'non-damaged'),
(376, 376, 'available', 'non-damaged'),
(377, 377, 'available', 'non-damaged'),
(378, 378, 'available', 'non-damaged'),
(379, 379, 'available', 'non-damaged'),
(380, 380, 'available', 'non-damaged'),
(381, 381, 'available', 'non-damaged'),
(382, 382, 'available', 'non-damaged'),
(383, 383, 'available', 'non-damaged'),
(384, 384, 'available', 'non-damaged'),
(385, 385, 'available', 'non-damaged'),
(386, 386, 'available', 'non-damaged'),
(387, 387, 'available', 'non-damaged'),
(388, 388, 'available', 'non-damaged'),
(389, 389, 'available', 'non-damaged'),
(390, 390, 'available', 'non-damaged'),
(391, 391, 'available', 'non-damaged'),
(392, 392, 'available', 'non-damaged'),
(393, 393, 'available', 'non-damaged'),
(394, 394, 'available', 'non-damaged'),
(395, 395, 'available', 'non-damaged'),
(396, 396, 'available', 'non-damaged'),
(397, 397, 'available', 'non-damaged'),
(398, 398, 'available', 'non-damaged'),
(399, 399, 'available', 'non-damaged'),
(405, 400, 'available', 'non-damaged'),
(406, 401, 'available', 'non-damaged'),
(407, 402, 'available', 'non-damaged'),
(408, 403, 'available', 'non-damaged'),
(409, 404, 'available', 'non-damaged'),
(410, 405, 'available', 'non-damaged'),
(411, 406, 'available', 'non-damaged'),
(412, 407, 'available', 'non-damaged'),
(413, 408, 'available', 'non-damaged'),
(414, 409, 'available', 'non-damaged'),
(415, 410, 'available', 'non-damaged'),
(416, 411, 'available', 'non-damaged'),
(417, 412, 'available', 'non-damaged'),
(418, 413, 'available', 'non-damaged'),
(419, 414, 'available', 'non-damaged'),
(420, 415, 'available', 'non-damaged'),
(421, 416, 'available', 'non-damaged'),
(422, 417, 'available', 'non-damaged'),
(423, 418, 'available', 'non-damaged'),
(424, 419, 'available', 'non-damaged'),
(425, 420, 'available', 'non-damaged'),
(426, 421, 'available', 'non-damaged'),
(427, 422, 'available', 'non-damaged'),
(428, 423, 'available', 'non-damaged'),
(429, 424, 'available', 'non-damaged'),
(430, 425, 'available', 'non-damaged'),
(431, 426, 'available', 'non-damaged'),
(432, 427, 'available', 'non-damaged'),
(433, 428, 'available', 'non-damaged'),
(434, 429, 'available', 'non-damaged'),
(435, 430, 'available', 'non-damaged'),
(436, 431, 'available', 'non-damaged'),
(437, 432, 'available', 'non-damaged'),
(438, 433, 'available', 'non-damaged'),
(439, 434, 'available', 'non-damaged'),
(440, 435, 'available', 'non-damaged'),
(441, 436, 'available', 'non-damaged'),
(442, 437, 'available', 'non-damaged'),
(443, 438, 'available', 'non-damaged'),
(444, 439, 'available', 'non-damaged'),
(445, 440, 'available', 'non-damaged'),
(446, 441, 'available', 'non-damaged'),
(447, 442, 'available', 'non-damaged'),
(448, 443, 'available', 'non-damaged'),
(449, 444, 'available', 'non-damaged'),
(450, 445, 'available', 'non-damaged'),
(451, 446, 'available', 'non-damaged'),
(452, 447, 'available', 'non-damaged'),
(453, 448, 'available', 'non-damaged'),
(454, 449, 'available', 'non-damaged'),
(455, 450, 'available', 'non-damaged'),
(456, 451, 'available', 'non-damaged'),
(457, 452, 'available', 'non-damaged'),
(458, 453, 'available', 'non-damaged'),
(459, 454, 'available', 'non-damaged'),
(460, 455, 'available', 'non-damaged'),
(461, 456, 'available', 'non-damaged'),
(462, 457, 'available', 'non-damaged'),
(463, 458, 'available', 'non-damaged'),
(464, 459, 'available', 'non-damaged'),
(465, 460, 'available', 'non-damaged'),
(466, 461, 'available', 'non-damaged'),
(467, 462, 'available', 'non-damaged'),
(468, 463, 'available', 'non-damaged'),
(469, 464, 'available', 'non-damaged'),
(470, 465, 'available', 'non-damaged'),
(471, 466, 'available', 'non-damaged'),
(472, 467, 'available', 'non-damaged'),
(473, 468, 'available', 'non-damaged'),
(474, 469, 'available', 'non-damaged'),
(475, 470, 'available', 'non-damaged'),
(476, 471, 'available', 'non-damaged'),
(477, 472, 'available', 'non-damaged'),
(478, 473, 'available', 'non-damaged'),
(479, 474, 'available', 'non-damaged'),
(480, 475, 'available', 'non-damaged'),
(481, 476, 'available', 'non-damaged'),
(482, 477, 'available', 'non-damaged'),
(483, 478, 'available', 'non-damaged'),
(484, 479, 'available', 'non-damaged'),
(485, 480, 'available', 'non-damaged'),
(486, 481, 'available', 'non-damaged'),
(487, 482, 'available', 'non-damaged'),
(488, 483, 'available', 'non-damaged'),
(489, 484, 'available', 'non-damaged'),
(490, 485, 'available', 'non-damaged'),
(491, 486, 'available', 'non-damaged'),
(492, 487, 'available', 'non-damaged'),
(493, 488, 'available', 'non-damaged'),
(494, 489, 'available', 'non-damaged'),
(495, 490, 'available', 'non-damaged'),
(496, 491, 'available', 'non-damaged'),
(497, 492, 'available', 'non-damaged'),
(498, 493, 'available', 'non-damaged'),
(499, 494, 'available', 'non-damaged'),
(500, 495, 'available', 'non-damaged'),
(501, 496, 'available', 'non-damaged'),
(502, 497, 'available', 'non-damaged'),
(503, 498, 'available', 'non-damaged'),
(504, 499, 'available', 'non-damaged'),
(505, 500, 'available', 'non-damaged'),
(506, 501, 'available', 'non-damaged'),
(507, 502, 'available', 'non-damaged'),
(508, 503, 'available', 'non-damaged'),
(509, 504, 'available', 'non-damaged'),
(510, 505, 'available', 'non-damaged'),
(511, 506, 'available', 'non-damaged'),
(512, 507, 'available', 'non-damaged'),
(513, 508, 'available', 'non-damaged'),
(514, 509, 'available', 'non-damaged'),
(515, 510, 'available', 'non-damaged'),
(516, 511, 'available', 'non-damaged'),
(517, 512, 'available', 'non-damaged'),
(518, 513, 'available', 'non-damaged'),
(519, 514, 'available', 'non-damaged'),
(520, 515, 'available', 'non-damaged'),
(521, 516, 'available', 'non-damaged'),
(522, 517, 'available', 'non-damaged'),
(523, 518, 'available', 'non-damaged'),
(524, 519, 'available', 'non-damaged'),
(525, 520, 'available', 'non-damaged'),
(526, 521, 'available', 'non-damaged'),
(527, 522, 'available', 'non-damaged'),
(528, 523, 'available', 'non-damaged'),
(529, 524, 'available', 'non-damaged'),
(530, 525, 'available', 'non-damaged'),
(531, 526, 'available', 'non-damaged'),
(532, 527, 'available', 'non-damaged'),
(533, 528, 'available', 'non-damaged'),
(534, 529, 'available', 'non-damaged'),
(535, 530, 'available', 'non-damaged'),
(536, 531, 'available', 'non-damaged'),
(537, 532, 'available', 'non-damaged'),
(538, 533, 'available', 'non-damaged'),
(539, 534, 'available', 'non-damaged'),
(540, 535, 'available', 'non-damaged'),
(541, 536, 'available', 'non-damaged'),
(542, 537, 'available', 'non-damaged'),
(543, 538, 'available', 'non-damaged'),
(544, 539, 'available', 'non-damaged'),
(545, 540, 'available', 'non-damaged'),
(546, 541, 'available', 'non-damaged'),
(547, 542, 'available', 'non-damaged'),
(548, 543, 'available', 'non-damaged'),
(549, 544, 'available', 'non-damaged'),
(550, 545, 'available', 'non-damaged'),
(551, 546, 'available', 'non-damaged'),
(552, 547, 'available', 'non-damaged'),
(553, 548, 'available', 'non-damaged'),
(554, 549, 'available', 'non-damaged'),
(555, 550, 'available', 'non-damaged'),
(556, 551, 'available', 'non-damaged'),
(557, 552, 'available', 'non-damaged'),
(558, 553, 'available', 'non-damaged'),
(559, 554, 'available', 'non-damaged'),
(560, 555, 'available', 'non-damaged'),
(561, 556, 'available', 'non-damaged'),
(562, 557, 'available', 'non-damaged'),
(563, 558, 'available', 'non-damaged'),
(564, 559, 'available', 'non-damaged'),
(565, 560, 'available', 'non-damaged'),
(566, 561, 'available', 'non-damaged'),
(567, 562, 'available', 'non-damaged'),
(568, 563, 'available', 'non-damaged'),
(569, 564, 'available', 'non-damaged'),
(570, 565, 'available', 'non-damaged'),
(571, 566, 'available', 'non-damaged'),
(572, 567, 'available', 'non-damaged'),
(573, 568, 'available', 'non-damaged'),
(574, 569, 'available', 'non-damaged'),
(575, 570, 'available', 'non-damaged'),
(576, 571, 'available', 'non-damaged'),
(577, 572, 'available', 'non-damaged'),
(578, 573, 'available', 'non-damaged'),
(579, 574, 'available', 'non-damaged'),
(580, 575, 'available', 'non-damaged'),
(581, 576, 'available', 'non-damaged'),
(582, 577, 'available', 'non-damaged'),
(583, 578, 'available', 'non-damaged'),
(584, 579, 'available', 'non-damaged'),
(585, 580, 'available', 'non-damaged'),
(586, 581, 'available', 'non-damaged'),
(589, 582, 'available', 'non-damaged'),
(590, 583, 'available', 'non-damaged'),
(591, 584, 'available', 'non-damaged'),
(592, 585, 'available', 'non-damaged'),
(593, 586, 'available', 'non-damaged'),
(594, 587, 'available', 'non-damaged'),
(595, 588, 'available', 'non-damaged'),
(596, 589, 'available', 'non-damaged'),
(597, 590, 'available', 'non-damaged'),
(598, 591, 'available', 'non-damaged'),
(599, 592, 'available', 'non-damaged'),
(600, 593, 'available', 'non-damaged'),
(601, 594, 'available', 'non-damaged'),
(602, 595, 'available', 'non-damaged'),
(603, 596, 'available', 'non-damaged'),
(604, 597, 'available', 'non-damaged'),
(605, 598, 'available', 'non-damaged'),
(606, 599, 'available', 'non-damaged'),
(607, 600, 'available', 'non-damaged'),
(608, 601, 'available', 'non-damaged'),
(609, 602, 'BOOKED', 'non-damaged'),
(610, 603, 'available', 'non-damaged'),
(611, 604, 'BOOKED', 'non-damaged');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_books`
--

CREATE TABLE `borrowed_books` (
  `borrowed_id` int(11) NOT NULL,
  `u_order_no` varchar(255) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `br_now_date_time` varchar(255) NOT NULL,
  `br_return_date_time` varchar(255) NOT NULL,
  `br_book_status` varchar(255) NOT NULL,
  `br_ap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_book_student`
--

CREATE TABLE `borrowed_book_student` (
  `bbs_id` int(11) NOT NULL,
  `sr_id` int(111) NOT NULL,
  `bbs_return_date` varchar(255) NOT NULL,
  `bbs_date` varchar(255) NOT NULL,
  `bbs_month` varchar(255) NOT NULL,
  `bbs_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowed_book_student`
--

INSERT INTO `borrowed_book_student` (`bbs_id`, `sr_id`, `bbs_return_date`, `bbs_date`, `bbs_month`, `bbs_status`) VALUES
(1, 2, '2023-08-17', '2023-August-17', '2023-August', 'RETURNED'),
(2, 3, '2023-08-11', '2023-August-17', '2023-August', 'RETURNED'),
(3, 4, '2024-08-08', '2024-July-25', '2024-July', 'RETURNED'),
(4, 5, '2024-07-09', '2024-July-25', '2024-July', 'BORROWED'),
(5, 6, '2024-07-01', '2024-July-25', '2024-July', 'BORROWED'),
(6, 8, '2024-07-28', '2024-July-27', '2024-July', 'BORROWED');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `d_id` int(11) NOT NULL,
  `d_fullname` varchar(255) NOT NULL,
  `d_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_id`, `d_fullname`, `d_shortname`) VALUES
(1, 'Information And Communication Technology', 'ICT'),
(2, 'Civil Engineering', 'CE'),
(3, 'Electrical And Electronics Engineering', 'EEE'),
(4, 'Hospitality Management', 'HM'),
(5, 'Agricultural Engineering ', 'AE'),
(6, 'General Courses', 'GE'),
(7, 'Novel', 'NOV'),
(8, 'Final Project For Student', 'F.PROJ'),
(9, 'Entrepreneur Leadership ', 'BEL'),
(10, 'Software Development', 'BSE');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `functions`
--

CREATE TABLE `functions` (
  `f_id` int(11) NOT NULL,
  `function_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `functions`
--

INSERT INTO `functions` (`f_id`, `function_name`) VALUES
(10, 'Student'),
(11, 'Lecturer'),
(12, 'Librarian');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `g_id` int(11) NOT NULL,
  `g_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`g_id`, `g_name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `l_id` int(11) NOT NULL,
  `l_fname` varchar(255) NOT NULL,
  `l_lname` varchar(255) NOT NULL,
  `l_gender` varchar(255) NOT NULL,
  `d_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `l_status` int(11) NOT NULL,
  `l_email` varchar(255) NOT NULL,
  `l_phone` varchar(255) NOT NULL,
  `l_password` varchar(255) NOT NULL,
  `l_position` varchar(255) NOT NULL,
  `l_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `lb_id` int(11) NOT NULL,
  `lb_fname` varchar(255) NOT NULL,
  `lb_lname` varchar(255) NOT NULL,
  `lb_gender` varchar(255) NOT NULL,
  `lb_email` varchar(255) NOT NULL,
  `lb_phone` varchar(255) NOT NULL,
  `lb_password` varchar(255) NOT NULL,
  `lb_status` varchar(255) NOT NULL,
  `lb_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`lb_id`, `lb_fname`, `lb_lname`, `lb_gender`, `lb_email`, `lb_phone`, `lb_password`, `lb_status`, `lb_profile`) VALUES
(1, 'MUKABAZIGA', 'Clemence', 'Female', 'mukabazigaclemence@gmail.com', '078', 'test@123', 'active', 'Female.jpg'),
(2, 'Ndagano', 'Jack', 'Male', 'ndagano@gmail.com', '07899997654', '22222', 'active', 'Male.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `o_id` int(11) NOT NULL,
  `o_fullname` varchar(255) NOT NULL,
  `o_shortname` varchar(255) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`o_id`, `o_fullname`, `o_shortname`, `d_id`) VALUES
(1, 'Information Technology', 'IT', 1),
(2, 'E-commerce', 'ECO', 1),
(3, 'Highway Engineering', 'HWE', 2),
(4, 'Water And Sanitation Technology', 'WAS', 2),
(5, 'Construction Technology', 'COT', 2),
(6, 'Electrical Automation Technology', 'EAT', 3),
(7, 'Electrical Technology', 'ET', 3),
(8, 'Room Division', 'RDM', 4),
(9, 'Culinary Arts', 'CUA', 4),
(10, 'Food And Beverage Services', 'FBM', 4),
(11, 'Crop Production', 'CP', 5),
(12, 'Irrigation And Drainage Technology', 'IDT', 5),
(13, 'Food Processing', 'FP', 5),
(14, 'Machine Leaning', 'ML', 10),
(15, 'Full Stack', 'FS', 10);

-- --------------------------------------------------------

--
-- Table structure for table `payed_penarities`
--

CREATE TABLE `payed_penarities` (
  `py_id` int(11) NOT NULL,
  `borrowed_id` int(11) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `amount_payed` varchar(255) NOT NULL,
  `mode_pay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penarities`
--

CREATE TABLE `penarities` (
  `p_id` int(11) NOT NULL,
  `borrowed_id` int(11) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `date_penarities` varchar(255) NOT NULL,
  `br_penaritis` varchar(255) NOT NULL,
  `p_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `s_fname` varchar(255) NOT NULL,
  `s_lname` varchar(255) NOT NULL,
  `s_gender` varchar(255) NOT NULL,
  `s_regno` varchar(255) NOT NULL,
  `d_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `y_id` int(11) NOT NULL,
  `program` varchar(255) NOT NULL,
  `study_mode` varchar(255) NOT NULL,
  `academic_year` int(11) NOT NULL,
  `s_status` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_phone` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `s_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_fname`, `s_lname`, `s_gender`, `s_regno`, `d_id`, `o_id`, `y_id`, `program`, `study_mode`, `academic_year`, `s_status`, `s_email`, `s_phone`, `s_password`, `s_profile`) VALUES
(7, 'kalisa', 'kaliste', 'Male', '23ALU6543', 10, 14, 2, 'Advanced Diploma In Machine Leaning', 'Full Time', 1, 'Active', 'kalisa@gmail.com', '078964345', '11111', 'Male.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_payed_penarity`
--

CREATE TABLE `student_payed_penarity` (
  `spp_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `amount_payed` varchar(255) NOT NULL,
  `mode_pay` varchar(255) NOT NULL,
  `ssp_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_payed_penarity`
--

INSERT INTO `student_payed_penarity` (`spp_id`, `sp_id`, `s_id`, `amount_payed`, `mode_pay`, `ssp_date`) VALUES
(1, 1, 217, '200', '0787766679', '2024-July-25');

-- --------------------------------------------------------

--
-- Table structure for table `student_pernarity`
--

CREATE TABLE `student_pernarity` (
  `sp_id` int(11) NOT NULL,
  `bbs_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `date_penarities` varchar(255) NOT NULL,
  `sp_pernarity` varchar(255) NOT NULL,
  `sp_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_pernarity`
--

INSERT INTO `student_pernarity` (`sp_id`, `bbs_id`, `s_id`, `date_penarities`, `sp_pernarity`, `sp_status`) VALUES
(1, 4, 217, '2024-07-25', '200', 'PAYED'),
(2, 4, 217, '2024-07-25', '200', 'pending'),
(3, 5, 217, '2024-07-25', '200', 'pending'),
(4, 4, 217, '2024-07-27', '200', 'pending'),
(5, 5, 217, '2024-07-27', '200', 'pending'),
(6, 4, 217, '2024-07-29', '200', 'pending'),
(7, 5, 217, '2024-07-29', '200', 'pending'),
(8, 6, 23, '2024-07-29', '200', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `student_request`
--

CREATE TABLE `student_request` (
  `sr_id` int(11) NOT NULL,
  `b_SN` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `sr_order_no` varchar(255) NOT NULL,
  `sr_status` varchar(255) NOT NULL,
  `sr_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_request`
--

INSERT INTO `student_request` (`sr_id`, `b_SN`, `s_id`, `sr_order_no`, `sr_status`, `sr_date`) VALUES
(2, 178, 175, '100000', 'DONE', '2023-August-17'),
(3, 181, 175, '100001', 'DONE', '2023-August-17'),
(4, 1, 217, '100000', 'DONE', '2024-July-25'),
(5, 2, 217, '100001', 'ACCEPTED', '2024-July-25'),
(6, 1, 217, '100000', 'ACCEPTED', '2024-July-25'),
(7, 3, 217, '100001', 'SENT', '2024-July-25'),
(8, 602, 23, '100000', 'ACCEPTED', '2024-July-27'),
(9, 604, 7, '100000', 'SENT', '2024-July-30');

-- --------------------------------------------------------

--
-- Table structure for table `student_status`
--

CREATE TABLE `student_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_status`
--

INSERT INTO `student_status` (`id`, `name`) VALUES
(1, 'Active'),
(2, 'Not Active');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_class`
--

CREATE TABLE `uploaded_class` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaded_class`
--

INSERT INTO `uploaded_class` (`id`, `name`, `status`) VALUES
(1, 'IT Y1.csv', 'PENDING'),
(2, 'Y1 EC.csv', 'PENDING'),
(3, 'Y2 IT.csv', 'PENDING'),
(4, 'Y2 EC.csv', 'PENDING'),
(5, 'Y1 CE HW.csv', 'PENDING'),
(7, 'Y1 CE CT.csv', 'PENDING'),
(8, 'CE HW Y2.csv', 'PENDING'),
(9, 'Y2 CE WA.csv', 'PENDING'),
(10, 'Y1 EEE AU.xlsx', 'PENDING'),
(11, 'Y1 EE EE.csv', 'PENDING'),
(12, 'CE WAS Y1.csv', 'PENDING'),
(13, 'Y2 CE CAT.xlsx', 'PENDING'),
(14, 'Y2 CE CAT1.csv', 'PENDING'),
(15, 'Y1 EEE AU1.csv', 'PENDING'),
(16, 'Y2 EEE AUT.csv', 'PENDING'),
(17, 'Y2 EEE EE.csv', 'PENDING'),
(18, 'Y1 HM RM.csv', 'PENDING'),
(19, 'Y1 HM CU.csv', 'PENDING'),
(20, 'Y1 HM FB.csv', 'PENDING'),
(21, 'Y2 HM RM.csv', 'PENDING'),
(22, 'Y2 HM CAT.csv', 'PENDING'),
(23, 'Y2 HM FB.csv', 'PENDING'),
(24, 'Y1 AE CP.csv', 'PENDING'),
(25, 'Y1 AE IDT.csv', 'PENDING'),
(26, 'Y1 AE FB.xlsx', 'PENDING'),
(27, 'Y1 AE FB.csv', 'PENDING'),
(28, 'Y2 AE CP.csv', 'PENDING'),
(29, 'Y2 AE IDT.csv', 'PENDING'),
(30, 'Y2 AE FP.csv', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_lecturer`
--

CREATE TABLE `uploaded_lecturer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaded_lecturer`
--

INSERT INTO `uploaded_lecturer` (`id`, `name`, `status`) VALUES
(1, 'lit.csv', 'PENDING'),
(2, 'lecturer it.csv', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_first_name` varchar(255) NOT NULL,
  `u_last_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_telphone` varchar(255) NOT NULL,
  `u_card_no` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_function` varchar(255) NOT NULL,
  `u_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_first_name`, `u_last_name`, `u_email`, `u_telphone`, `u_card_no`, `u_password`, `u_function`, `u_status`) VALUES
(1, 'UWIMANA', 'Christian', 'uwimanachris4@gmail.com', '0784103864', '21RP04332', '6b34fe24ac2ff8103f6fce1f0da2ef57', 'Student', 'active'),
(4, 'chris', 'J Maurice', 'maurice@gmail.com', '0784999190', 'AD123', 'admin', 'admin', 'active'),
(27, 'MUTUYIMANA', 'Pacifique', 'mutuyimana@gmail.com', '0783093055', '21RP04432', 'py', 'Student', 'active'),
(28, 'Uwimana', 'Christian', 'uwimanachris4@gmail.com', '0783093055', '21RP04432', 'chris', 'Student', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `users_requist`
--

CREATE TABLE `users_requist` (
  `ur_id` int(11) NOT NULL,
  `b_SN` varchar(255) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `u_order_no` varchar(255) NOT NULL,
  `ur_status` varchar(255) NOT NULL,
  `r_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_requist`
--

INSERT INTO `users_requist` (`ur_id`, `b_SN`, `u_id`, `u_order_no`, `ur_status`, `r_date`) VALUES
(453, '1 ', '27', '1000000', 'Sent', '2023-July-18');

-- --------------------------------------------------------

--
-- Table structure for table `year_study`
--

CREATE TABLE `year_study` (
  `y_id` int(11) NOT NULL,
  `y_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `year_study`
--

INSERT INTO `year_study` (`y_id`, `y_name`) VALUES
(1, 'YEAR 1'),
(2, 'YEAR 2'),
(3, 'YEAR 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `books_type`
--
ALTER TABLE `books_type`
  ADD PRIMARY KEY (`book_type_id`);

--
-- Indexes for table `book_in_stock`
--
ALTER TABLE `book_in_stock`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  ADD PRIMARY KEY (`borrowed_id`);

--
-- Indexes for table `borrowed_book_student`
--
ALTER TABLE `borrowed_book_student`
  ADD PRIMARY KEY (`bbs_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `functions`
--
ALTER TABLE `functions`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`lb_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payed_penarities`
--
ALTER TABLE `payed_penarities`
  ADD PRIMARY KEY (`py_id`);

--
-- Indexes for table `penarities`
--
ALTER TABLE `penarities`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `student_payed_penarity`
--
ALTER TABLE `student_payed_penarity`
  ADD PRIMARY KEY (`spp_id`);

--
-- Indexes for table `student_pernarity`
--
ALTER TABLE `student_pernarity`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `student_request`
--
ALTER TABLE `student_request`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `student_status`
--
ALTER TABLE `student_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploaded_class`
--
ALTER TABLE `uploaded_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploaded_lecturer`
--
ALTER TABLE `uploaded_lecturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_requist`
--
ALTER TABLE `users_requist`
  ADD PRIMARY KEY (`ur_id`);

--
-- Indexes for table `year_study`
--
ALTER TABLE `year_study`
  ADD PRIMARY KEY (`y_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=612;

--
-- AUTO_INCREMENT for table `books_type`
--
ALTER TABLE `books_type`
  MODIFY `book_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `book_in_stock`
--
ALTER TABLE `book_in_stock`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=612;

--
-- AUTO_INCREMENT for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  MODIFY `borrowed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `borrowed_book_student`
--
ALTER TABLE `borrowed_book_student`
  MODIFY `bbs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `functions`
--
ALTER TABLE `functions`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `lb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payed_penarities`
--
ALTER TABLE `payed_penarities`
  MODIFY `py_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penarities`
--
ALTER TABLE `penarities`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_payed_penarity`
--
ALTER TABLE `student_payed_penarity`
  MODIFY `spp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_pernarity`
--
ALTER TABLE `student_pernarity`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_request`
--
ALTER TABLE `student_request`
  MODIFY `sr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_status`
--
ALTER TABLE `student_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uploaded_class`
--
ALTER TABLE `uploaded_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `uploaded_lecturer`
--
ALTER TABLE `uploaded_lecturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users_requist`
--
ALTER TABLE `users_requist`
  MODIFY `ur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=454;

--
-- AUTO_INCREMENT for table `year_study`
--
ALTER TABLE `year_study`
  MODIFY `y_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
