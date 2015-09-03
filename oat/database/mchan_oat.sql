-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2015 at 04:48 PM
-- Server version: 5.5.40-36.1-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mchan_oat`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `primary_key` int(3) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `month` int(2) DEFAULT NULL,
  `date` int(2) DEFAULT NULL,
  `fulldate` varchar(10) DEFAULT NULL,
  `duration` varchar(1) DEFAULT NULL,
  `course` varchar(53) DEFAULT NULL,
  `instructor` varchar(34) DEFAULT NULL,
  `room` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`primary_key`, `year`, `month`, `date`, `fulldate`, `duration`, `course`, `instructor`, `room`) VALUES
(1, 2014, 11, 1, '11/1/2014', '', '', '', ''),
(2, 2014, 11, 2, '11/2/2014', '', '', '', ''),
(3, 2014, 11, 3, '11/3/2014', '1', 'Orientation & Team Building', 'Debra Williams & Marlene Delanghe', '310'),
(4, 2014, 11, 4, '11/4/2014', '1', 'Study Skills', 'Marlene Delanghe', '310'),
(5, 2014, 11, 5, '11/5/2014', '1', 'Introduction to Computing & MS Word 2013', 'Debra Williams & Marlene Delanghe', '310'),
(6, 2014, 11, 6, '11/6/2014', '1', 'MS Word 2013', 'Kim Huie', '310'),
(7, 2014, 11, 7, '11/7/2014', '1', 'MS Word 2013', 'Kim Huie', '310'),
(8, 2014, 11, 8, '11/8/2014', '', '', '', ''),
(9, 2014, 11, 9, '11/9/2014', '', '', '', ''),
(10, 2014, 11, 10, '11/10/2014', '1', 'Conflict Resolution', 'Marlene Delanghe', '300'),
(11, 2014, 11, 11, '11/11/2014', '1', 'Tuesday, November 11, 2014 Remembrance Day - Holiday ', ' ', ' '),
(12, 2014, 11, 12, '11/12/2014', '1', 'MS Word 2013', 'Lorraine Fentie', '310'),
(13, 2014, 11, 13, '11/13/2014', '1', 'MS Word 2013', 'Lorraine Fentie', '310'),
(14, 2014, 11, 14, '11/14/2014', '1', 'MS Word 2013', 'Lorraine Fentie', '481'),
(15, 2014, 11, 15, '11/15/2014', '', '', '', ''),
(16, 2014, 11, 16, '11/16/2014', '', '', '', ''),
(17, 2014, 11, 17, '11/17/2014', '1', 'Self Study Day', 'Debra Williams', '310'),
(18, 2014, 11, 18, '11/18/2014', '1', 'Presentation Skills', 'Debra Williams', '310'),
(19, 2014, 11, 19, '11/19/2014', '1', 'MS Powerpoint 2013', 'Kim Huie', '310'),
(20, 2014, 11, 20, '11/20/2014', '1', 'MS PowerPoint 2013', 'Kim Huie', '310'),
(21, 2014, 11, 21, '11/21/2014', '1', 'Self Study Day', 'Lorraine Fentie', '310'),
(22, 2014, 11, 22, '11/22/2014', '', '', '', ''),
(23, 2014, 11, 23, '11/23/2014', '', '', '', ''),
(24, 2014, 11, 24, '11/24/2014', '1', 'Word Exam', ' ', '310'),
(25, 2014, 11, 25, '11/25/2014', '1', 'MS Excel 2013', 'Kim Huie', '310'),
(26, 2014, 11, 26, '11/26/2014', '1', 'MS Publisher', 'Kim Huie', '310'),
(27, 2014, 11, 27, '11/27/2014', '1', 'MS Excel 2013', 'Lorraine Fentie', '310'),
(28, 2014, 11, 28, '11/28/2014', '1', 'MS Excel 2013', 'Lorraine Fentie', '310'),
(29, 2014, 11, 29, '11/29/2014', '', '', '', ''),
(30, 2014, 11, 30, '11/30/2014', '', '', '', ''),
(31, 2014, 12, 1, '12/1/2014', '1', 'MS Excel 2013', 'Lorraine Fentie', '310'),
(32, 2014, 12, 2, '12/2/2014', '1', 'MS Excel 2013', 'Lorraine Fentie', '310'),
(33, 2014, 12, 3, '12/3/2014', '1', 'Managing Meetings', 'Suzanna Huebsch', '310'),
(34, 2014, 12, 4, '12/4/2014', '1', 'MS Excel 2013', 'Lorraine Fentie', '310'),
(35, 2014, 12, 5, '12/5/2014', '1', 'Self Study Day', 'Suzanna Huebsch', '310'),
(36, 2014, 12, 6, '12/6/2014', '', '', '', ''),
(37, 2014, 12, 7, '12/7/2014', '', '', '', ''),
(38, 2014, 12, 8, '12/8/2014', '1', 'Self Study Day', 'Suzanna Huebsch', '382'),
(39, 2014, 12, 9, '12/9/2014', '1', 'Excel Exam', '', '310'),
(40, 2014, 12, 10, '12/10/2014', '1', 'MS Visio', 'Suzanna Huebsch', '310'),
(41, 2014, 12, 11, '12/11/2014', '1', 'Adobe Acrobat', 'Suzanna Huebsch', '310'),
(42, 2014, 12, 12, '12/12/2014', '1', 'Adobe Acrobat', 'Suzanna Huebsch', '310'),
(43, 2014, 12, 13, '12/13/2014', '', '', '', ''),
(44, 2014, 12, 14, '12/14/2014', '', '', '', ''),
(45, 2014, 12, 15, '12/15/2014', '1', 'Holiday Break no school ', '', ''),
(46, 2014, 12, 16, '12/16/2014', '1', 'Holiday Break no school ', '', ''),
(47, 2014, 12, 17, '12/17/2014', '1', 'Holiday Break no school ', '', ''),
(48, 2014, 12, 18, '12/18/2014', '1', 'Holiday Break no school ', '', ''),
(49, 2014, 12, 19, '12/19/2014', '1', 'Holiday Break no school ', '', ''),
(50, 2014, 12, 20, '12/20/2014', '', '', '', ''),
(51, 2014, 12, 21, '12/21/2014', '', '', '', ''),
(52, 2014, 12, 22, '12/22/2014', '1', 'Holiday Break no school ', '', ''),
(53, 2014, 12, 23, '12/23/2014', '1', 'Holiday Break no school ', '', ''),
(54, 2014, 12, 24, '12/24/2014', '1', 'Holiday Break no school ', '', ''),
(55, 2014, 12, 25, '12/25/2014', '1', 'Holiday Break no school ', '', ''),
(56, 2014, 12, 26, '12/26/2014', '1', 'Holiday Break no school ', '', ''),
(57, 2014, 12, 27, '12/27/2014', '', '', '', ''),
(58, 2014, 12, 28, '12/28/2014', '', '', '', ''),
(59, 2014, 12, 29, '12/29/2014', '1', 'Holiday Break no school ', '', ''),
(60, 2014, 12, 30, '12/30/2014', '1', 'Holiday Break no school ', '', ''),
(61, 2014, 12, 31, '12/31/2014', '1', 'Holiday Break no school ', '', ''),
(62, 2015, 1, 1, '1/1/2015', '', '', '', ''),
(63, 2015, 1, 2, '1/2/2015', '', '', '', ''),
(64, 2015, 1, 3, '1/3/2015', '', '', '', ''),
(65, 2015, 1, 4, '1/4/2015', '', '', '', ''),
(66, 2015, 1, 5, '1/5/2015', '1', 'Access / PP Presentations', 'Bruna Martinuzzi', '310'),
(67, 2015, 1, 6, '1/6/2015', '1', 'Access / PP Presentations', 'Bruna Martinuzzi', '481'),
(68, 2015, 1, 7, '1/7/2015', '1', 'Access / PP Presentations', 'Bruna Martinuzzi', '305'),
(69, 2015, 1, 8, '1/8/2015', '1', 'Access / PP Presentations', 'Bruna Martinuzzi', '310'),
(70, 2015, 1, 9, '1/9/2015', '1', 'Access / PP Presentations', 'Bruna Martinuzzi', '305'),
(71, 2015, 1, 10, '1/10/2015', '', '', '', ''),
(72, 2015, 1, 11, '1/11/2015', '', '', '', ''),
(73, 2015, 1, 12, '1/12/2015', '1', 'Access / PP Presentations', 'Kim Huie', '310'),
(74, 2015, 1, 13, '1/13/2015', '1', 'Access / PP Presentations', 'Kim Huie', '310'),
(75, 2015, 1, 14, '1/14/2015', '1', 'Access / PP Presentations', 'Kim Huie', '481'),
(76, 2015, 1, 15, '1/15/2015', '1', 'Outlook', 'Kim Huie', '305'),
(77, 2015, 1, 16, '1/16/2015', '1', 'Resume Skills', 'Marlene Delanghe', '310'),
(78, 2015, 1, 17, '1/17/2015', '', '', '', ''),
(79, 2015, 1, 18, '1/18/2015', '', '', '', ''),
(80, 2015, 1, 19, '1/19/2015', '1', 'Accounting', 'Kim Huie', '310'),
(81, 2015, 1, 20, '1/20/2015', '1', 'Accounting', 'Kim Huie', '305'),
(82, 2015, 1, 21, '1/21/2015', '1', 'Accounting', 'Kim Huie', '310'),
(83, 2015, 1, 22, '1/22/2015', '1', 'Self Study', 'Kim Huie', '305'),
(84, 2015, 1, 23, '1/23/2015', '1', 'Resume 1 - 1', 'Kim Huie', '481'),
(85, 2015, 1, 24, '1/24/2015', '', '', '', ''),
(86, 2015, 1, 25, '1/25/2015', '', '', '', ''),
(87, 2015, 1, 26, '1/26/2015', '1', 'Accounting', 'Suzanna Huebsch', '310'),
(88, 2015, 1, 27, '1/27/2015', '1', 'Accounting', 'Suzanna Huebsch', '305'),
(89, 2015, 1, 28, '1/28/2015', '1', 'Accounting', 'Kim Huie', '310'),
(90, 2015, 1, 29, '1/29/2015', '1', 'Resume 1 - 1', 'Suzanna Huebsch', '310'),
(91, 2015, 1, 30, '1/30/2015', '1', 'Accounting', 'Kim Huie', '310'),
(92, 2015, 1, 31, '1/31/2015', '', '', '', ''),
(93, 2015, 2, 1, '2/1/2015', '', '', '', ''),
(94, 2015, 2, 2, '2/2/2015', '1', 'Accounting', 'Suzanna Huebsch', '310'),
(95, 2015, 2, 3, '2/3/2015', '1', 'Accounting & Self Study Day / Photographs', 'Suzanna Huebsch & Marlene Delanghe', '481'),
(96, 2015, 2, 4, '2/4/2015', '1', 'Using Social Media', 'Marlene Delanghe', '481'),
(97, 2015, 2, 5, '2/5/2015', '1', 'Web Design', 'Andre Coetzee', '310'),
(98, 2015, 2, 6, '2/6/2015', '1', 'Web Design', 'Andre Coetzee', '310'),
(99, 2015, 2, 7, '2/7/2015', '', '', '', ''),
(100, 2015, 2, 8, '2/8/2015', '', '', '', ''),
(101, 2015, 2, 9, '2/9/2015', '1', 'Monday, Feb 9 - Family Day - Holiday', '', ''),
(102, 2015, 2, 10, '2/10/2015', '1', 'Web Design', 'Andre Coetzee', '310'),
(103, 2015, 2, 11, '2/11/2015', '1', 'Word Press', 'Andre Coetzee', '310'),
(104, 2015, 2, 12, '2/12/2015', '1', 'Web Design', 'Andre Coetzee', '305'),
(105, 2015, 2, 13, '2/13/2015', '1', 'Web Design', 'Andre Coetzee', '305'),
(106, 2015, 2, 14, '2/14/2015', '', '', '', ''),
(107, 2015, 2, 15, '2/15/2015', '', '', '', ''),
(108, 2015, 2, 16, '2/16/2015', '1', 'Web Design', 'Andre Coetzee', '305'),
(109, 2015, 2, 17, '2/17/2015', '1', 'Web Design', 'Andre Coetzee', '310'),
(110, 2015, 2, 18, '2/18/2015', '1', 'Interview Skills', 'Marlene Delanghe', '310'),
(111, 2015, 2, 19, '2/19/2015', '1', 'Web / Photoshop Presentations', 'Elaine Decker', '481'),
(112, 2015, 2, 20, '2/20/2015', '1', 'Job Search', 'Elaine Decker', '481'),
(113, 2015, 2, 21, '2/21/2015', '', '', '', ''),
(114, 2015, 2, 22, '2/22/2015', '', '', '', ''),
(115, 2015, 2, 23, '2/23/2015', '1', '', '', 'N/A'),
(116, 2015, 2, 24, '2/24/2015', '1', '', '', 'N/A'),
(117, 2015, 2, 25, '2/25/2015', '1', '', '', 'N/A'),
(118, 2015, 2, 26, '2/26/2015', '1', '', '', 'N/A'),
(119, 2015, 2, 27, '2/27/2015', '1', '', '', 'N/A'),
(120, 2015, 2, 28, '2/28/2015', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `primary_key` int(2) DEFAULT NULL,
  `firstname` varchar(13) DEFAULT NULL,
  `lastname` varchar(9) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`primary_key`, `firstname`, `lastname`) VALUES
(1, 'Maira ', 'Afzal '),
(2, 'Anna ', 'Apanasova'),
(3, 'Umme ', 'Aziz'),
(4, 'Sherri ', 'Baxter'),
(5, 'Beatriz ', 'Becerra '),
(6, 'Ifran ', 'Cameron'),
(7, 'Anika ', 'Cupid '),
(8, 'Shamini', 'Emmanuel'),
(9, 'Makda ', 'Gino '),
(10, 'Maya ', 'Kennedy'),
(11, 'Alanna ', 'MacLennan'),
(12, 'Jennifer ', 'McNeil'),
(13, 'Patricia ', 'Nand'),
(14, 'Beatrice Aiko', 'Park'),
(15, 'Regina ', 'Pena '),
(16, 'Neeta ', 'Randhawa'),
(17, 'Adelaida ', 'Roxas '),
(18, 'Catherine ', 'Sinclair'),
(19, 'Thushara ', 'Suresh'),
(20, 'Laura ', 'Valasquez'),
(21, 'Naomi', 'West'),
(22, 'Taeko ', 'Yasui');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
