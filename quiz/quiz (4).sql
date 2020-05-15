-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 10:05 AM
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
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(100) NOT NULL,
  `qn_id` int(100) NOT NULL,
  `file_attachment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `qn_id`, `file_attachment`) VALUES
(1, 1, ''),
(2, 2, '301_norm_rev.ppt'),
(3, 2, '1559798279-166016.pdf'),
(4, 3, 'advert_degree_2019.pdf'),
(5, 4, '1575468820-1575453576716_1575449441825_1575449441013_1575449434714_1575449426782_0_New Doc 2019-12-0'),
(6, 5, ''),
(7, 6, ''),
(8, 7, '20190326_094916_UNIT26_Postgraduate applications for  2019-2020.pdf'),
(9, 7, '20191017_115236_UDSM_MAIN_EVENT_Merits Scholarships.pdf'),
(10, 8, 'alikiba_kadogo_official_music_video_mp3_51891.mp3'),
(11, 9, ''),
(12, 10, '301_norm_rev.ppt'),
(13, 10, 'advert_degree_2019.pdf'),
(14, 11, 'AEB101INTRODUCTIONTOCOMPUTERS.pdf'),
(15, 12, ''),
(16, 13, '301_norm_rev.ppt'),
(17, 13, '1559798279-166016.pdf'),
(18, 13, 'advert_degree_2019.pdf'),
(19, 14, ''),
(20, 15, 'advert_degree_2019.pdf'),
(21, 15, 'AJIRALEO.COM_KAZI_DART.pdf'),
(22, 16, '20190326_094916_UNIT26_Postgraduate applications for  2019-2020.pdf'),
(23, 16, '20191017_115236_UDSM_MAIN_EVENT_Merits Scholarships.pdf'),
(24, 16, '1559798279-166016.pdf'),
(25, 16, '1575468820-1575453576716_1575449441825_1575449441013_1575449434714_1575449426782_0_New Doc 2019-12-0'),
(26, 17, 'advert_degree_2019.pdf'),
(27, 17, 'AEB101INTRODUCTIONTOCOMPUTERS.pdf'),
(28, 17, 'AJIRALEO.COM_CRSG-KARATU-ADVERT-2020.pdf'),
(29, 18, '301_norm_rev.ppt'),
(30, 18, '1559798279-166016.pdf'),
(31, 18, 'advert_degree_2019.pdf'),
(32, 19, ''),
(33, 20, '301_norm_rev.ppt'),
(34, 20, '20190326_094916_UNIT26_Postgraduate applications for  2019-2020.pdf'),
(35, 20, 'advert_degree_2019.pdf'),
(36, 21, 'JOB-OPPORTUNITIES.pdf'),
(37, 21, 'JUMA MWANJA..APPE VS THE REPUB..RESPO CRIM APPE NO.309 OF 20.pdf'),
(38, 21, 'justin_bieber_this_is_love_official_video_new_song_2018_mp3_21662.mp3'),
(39, 22, 'abdulqader_qawza_ahmed_el-hajiri_ala_yalla_bi_nadra_dar_al_islam_mp3_36087.mp3'),
(40, 22, 'alikiba_kadogo_official_music_video_mp3_51891.mp3'),
(41, 23, ''),
(42, 24, '20190326_094916_UNIT26_Postgraduate applications for  2019-2020.pdf'),
(43, 24, '20191017_115236_UDSM_MAIN_EVENT_Merits Scholarships.pdf'),
(44, 24, '1559798279-166016.pdf'),
(45, 25, '1575468820-1575453576716_1575449441825_1575449441013_1575449434714_1575449426782_0_New Doc 2019-12-0'),
(46, 25, '1575468820-1575453576716_1575449441825_1575449441013_1575449434714_1575449426782_0_New Doc 2019-12-0'),
(47, 25, '1575468820-1575453576716_1575449441825_1575449441013_1575449434714_1575449426782_0_New Doc 2019-12-0'),
(48, 26, 'Dear_All.pdf'),
(49, 26, 'design.pdf'),
(50, 26, 'DistSys-08f-1.pdf'),
(51, 27, '1559798279-166016.pdf'),
(52, 27, '1575468820-1575453576716_1575449441825_1575449441013_1575449434714_1575449426782_0_New Doc 2019-12-0'),
(53, 27, '1575468820-1575453576716_1575449441825_1575449441013_1575449434714_1575449426782_0_New Doc 2019-12-0'),
(54, 28, '7nLqDY.htm'),
(55, 28, 'CERTIFICATE OF SECONDARY.pdf'),
(56, 28, 'CITIZEN-APPLICATION-FORM-NIDA.pdf'),
(57, 29, '_Getintopc.com_jdownloader.zip (1).crdownload'),
(58, 29, '7nLqDY.htm'),
(59, 29, 'ADVANCED CERTIFICATE.pdf'),
(60, 30, 'BIRTH CERTIFICATE.pdf'),
(61, 30, 'CERTIFICATE OF SECONDARY.pdf'),
(62, 30, 'CITIZEN-APPLICATION-FORM-NIDA.pdf'),
(63, 31, '_Getintopc.com_jdownloader.zip (1).crdownload'),
(64, 31, '7nLqDY.htm'),
(65, 31, 'curricullum vitae.pdf'),
(66, 32, 'ADVANCED CERTIFICATE.pdf'),
(67, 32, 'ARIS - Course Results -.htm'),
(68, 32, 'CITIZEN-APPLICATION-FORM-NIDA.pdf'),
(69, 33, '_Getintopc.com_jdownloader.zip (1).crdownload'),
(70, 33, '7nLqDY.htm'),
(71, 33, 'curricullum vitae.pdf'),
(72, 34, '_Getintopc.com_jdownloader.zip (1).crdownload'),
(73, 34, '7nLqDY.htm'),
(74, 34, 'ADVANCED CERTIFICATE.pdf'),
(75, 35, '_Getintopc.com_jdownloader.zip (1).crdownload'),
(76, 35, '7nLqDY.htm'),
(77, 36, '_Getintopc.com_jdownloader.zip (1).crdownload'),
(78, 36, '7nLqDY.htm'),
(79, 36, 'ADVANCED CERTIFICATE.pdf'),
(80, 41, '_Getintopc.com_jdownloader.zip (1).crdownload'),
(81, 41, '7nLqDY.htm'),
(82, 42, '_Getintopc.com_jdownloader.zip (1).crdownload'),
(83, 42, '7nLqDY.htm'),
(84, 43, 'payment.pdf'),
(85, 43, 'result.pdf.pdf'),
(86, 43, 'result.pdf_2.pdf'),
(87, 54, ''),
(88, 55, ''),
(89, 56, ''),
(90, 57, ''),
(91, 58, ''),
(92, 59, ''),
(93, 60, ''),
(94, 61, ''),
(95, 62, ''),
(96, 63, ''),
(97, 64, ''),
(98, 65, ''),
(99, 66, ''),
(100, 67, ''),
(101, 68, ''),
(102, 69, ''),
(103, 70, ''),
(104, 71, ''),
(105, 72, ''),
(106, 73, ''),
(107, 74, ''),
(108, 75, ''),
(109, 76, ''),
(110, 77, ''),
(111, 78, ''),
(112, 79, '');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qn_id` int(100) NOT NULL,
  `qn_number` int(100) NOT NULL,
  `qn_comment` text DEFAULT NULL,
  `qn_select1` varchar(100) NOT NULL,
  `qn_select2` varchar(100) NOT NULL,
  `qn_radio1` varchar(100) NOT NULL,
  `qn_radio2` varchar(100) NOT NULL,
  `qn_radio3` varchar(100) NOT NULL,
  `qn_radio4` varchar(100) NOT NULL,
  `qn_radio5` varchar(100) NOT NULL,
  `qn_radio6` varchar(100) NOT NULL,
  `qn_radio7` varchar(100) NOT NULL,
  `qn_radio8` varchar(100) NOT NULL,
  `qn_radio9` varchar(100) NOT NULL,
  `qn_radio10` varchar(100) NOT NULL,
  `qn_radio11` varchar(100) NOT NULL,
  `qn_radio12` varchar(100) NOT NULL,
  `qn_radio13` varchar(100) NOT NULL,
  `qn_radio14` varchar(100) NOT NULL,
  `qn_radio15` varchar(100) NOT NULL,
  `qn_radio16` varchar(100) NOT NULL,
  `qn_radio17` varchar(100) NOT NULL,
  `qn_radio18` varchar(100) NOT NULL,
  `qn_radio19` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qn_id`, `qn_number`, `qn_comment`, `qn_select1`, `qn_select2`, `qn_radio1`, `qn_radio2`, `qn_radio3`, `qn_radio4`, `qn_radio5`, `qn_radio6`, `qn_radio7`, `qn_radio8`, `qn_radio9`, `qn_radio10`, `qn_radio11`, `qn_radio12`, `qn_radio13`, `qn_radio14`, `qn_radio15`, `qn_radio16`, `qn_radio17`, `qn_radio18`, `qn_radio19`) VALUES
(1, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 1, 'hellow java script', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 'welcome question1', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 2, 'welcome question2', '', '', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 3, '', '', '', 'na', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 3, 'welcome question 3', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 4, '', '', '', '', 'yes', 'no', 'yes', 'yes', 'yes', 'na', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 4, 'welcome question4', '', '', '', 'yes', 'no', 'na', 'yes', 'no', 'na', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 5, 'welcome question5', '', '', 'yes', 'yes', 'na', 'na', 'na', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 6, 'welcome question6', '', '', '', 'yes', 'yes', 'na', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 7, '', '', '', '', 'no', 'yes', 'na', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 7, 'questionnumber7', '', '', '', 'na', 'yes', 'na', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 8, 'welcome question8', '', '', 'yes', 'na', 'no', 'na', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 9, 'welcome question9', '', '', 'na', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 10, 'welcome question 10', '', '', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 11, 'welcome question11', '', '', 'na', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 12, 'welcome question12', '', '', 'na', 'na', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 13, 'question13', '', '', 'no', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 14, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 14, 'welcome question14', '', '', '', 'yes', 'no', 'yes', 'na', 'no', 'na', 'no', 'yes', 'yes', 'no', 'na', '', '', '', '', '', '', ''),
(25, 15, 'welcome question15', '', '', '', 'na', 'na', 'na', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 16, 'welcome question16', '', '', 'yes', 'no', 'no', 'no', 'no', 'na', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'no', 'no', 'na', 'no', 'no', 'no'),
(27, 17, 'welcome question17', '', '', 'Potential investors/purchasers', 'no', 'na', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 18, 'welcome question18', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 19, 'welcome question19', '', '', 'na', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 20, 'welcome question20', '', '', 'na', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 21, 'welcome question21', '', '', 'na', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 22, 'welcome question22', '', '', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 23, 'welcome question23', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 24, 'welcome question24', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 25, 'welcome question25', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 26, 'welcome question26', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 27, 'i reach the conclusion and dare', 'partner1', 'partner3', 'accept', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 27, 'i reach the conclusion and dare', 'partner1', 'partner3', 'accept', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 27, 'congratulation you reach destination', 'partner3', 'Low risk', 'decline', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 27, 'congratulation you reach destination', 'partner3', 'Low risk', 'decline', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 1, 'test1', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 2, 'test2', '', '', 'yes', 'yes', 'na', 'yes', 'yes', 'yes', 'na', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 1, 'test question1', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 1, '', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 2, '', '', '', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 3, '', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, 4, '', '', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, 5, '', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 6, '', '', '', '', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 7, '', '', '', '', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 8, '', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 9, '', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, 10, '', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, 11, '', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, 12, '', '', '', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, 13, '', '', '', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(67, 14, '', '', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', ''),
(68, 15, '', '', '', '', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(69, 16, '', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(70, 17, '', '', '', 'Banks', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, 18, '', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, 19, '', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, 20, '', '', '', 'na', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, 21, '', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, 22, '', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, 23, '', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, 24, '', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 25, '', '', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(79, 26, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 27, '', 'partner1', 'Moderate risk', 'accept', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, 27, '', 'partner1', 'Moderate risk', 'accept', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `qn_id` int(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `qn_id`, `username`, `lastname`, `password`) VALUES
(1, NULL, 'rajabu', '', 'mama'),
(2, NULL, 'hamisi', '', 'mama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qn_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qn_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
