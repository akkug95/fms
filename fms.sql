-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2016 at 10:50 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `2014finalpoints`
--

CREATE TABLE `2014finalpoints` (
  `TEAM` varchar(40) NOT NULL,
  `PLAYED` int(11) NOT NULL,
  `WON` int(11) NOT NULL,
  `DRAW` int(11) NOT NULL,
  `LOST` int(11) NOT NULL,
  `GF` int(11) NOT NULL,
  `GA` int(11) NOT NULL,
  `GD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2014finalpoints`
--

INSERT INTO `2014finalpoints` (`TEAM`, `PLAYED`, `WON`, `DRAW`, `LOST`, `GF`, `GA`, `GD`) VALUES
('Arsenal', 18, 7, 7, 4, 27, 20, 7),
('Chelsea', 18, 10, 7, 1, 32, 16, 16),
('Everton', 18, 4, 6, 8, 21, 28, -7),
('Leicester City', 18, 3, 4, 11, 36, 25, 11),
('Liverpool', 18, 7, 5, 6, 28, 28, 0),
('Manchester City', 18, 10, 4, 4, 29, 17, 12),
('Manchester United', 18, 9, 4, 5, 29, 22, 7),
('Southampton', 18, 5, 4, 9, 17, 21, -4),
('Tottenham Hotspur', 18, 8, 4, 6, 26, 31, -5),
('West Ham United', 18, 3, 3, 12, 16, 29, -13);

-- --------------------------------------------------------

--
-- Table structure for table `2015finalpoints`
--

CREATE TABLE `2015finalpoints` (
  `TEAM` varchar(40) NOT NULL,
  `PLAYED` int(11) NOT NULL,
  `WON` int(11) NOT NULL,
  `DRAW` int(11) NOT NULL,
  `LOST` int(11) NOT NULL,
  `GF` int(11) NOT NULL,
  `GA` int(11) NOT NULL,
  `GD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2015finalpoints`
--

INSERT INTO `2015finalpoints` (`TEAM`, `PLAYED`, `WON`, `DRAW`, `LOST`, `GF`, `GA`, `GD`) VALUES
('Arsenal', 18, 6, 7, 5, 29, 28, 1),
('Chelsea', 18, 2, 7, 9, 20, 30, -10),
('Everton', 18, 2, 7, 9, 19, 31, -12),
('Leicester City', 18, 9, 6, 3, 28, 22, 6),
('Liverpool', 18, 5, 7, 6, 25, 23, 2),
('Manchester City', 18, 4, 5, 9, 23, 30, -7),
('Manchester United', 18, 8, 7, 3, 21, 18, 3),
('Southampton', 18, 7, 4, 7, 27, 26, 1),
('Tottenham Hotspur', 18, 5, 9, 4, 24, 16, 8),
('West Ham United', 18, 7, 7, 4, 32, 24, 8);

-- --------------------------------------------------------

--
-- Table structure for table `2016finalpoints`
--

CREATE TABLE `2016finalpoints` (
  `TEAM` varchar(40) NOT NULL,
  `PLAYED` int(11) NOT NULL,
  `WON` int(11) NOT NULL,
  `DRAW` int(11) NOT NULL,
  `LOST` int(11) NOT NULL,
  `GF` int(11) NOT NULL,
  `GA` int(11) NOT NULL,
  `GD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2016finalpoints`
--

INSERT INTO `2016finalpoints` (`TEAM`, `PLAYED`, `WON`, `DRAW`, `LOST`, `GF`, `GA`, `GD`) VALUES
('Arsenal', 5, 2, 2, 1, 9, 6, 3),
('Chelsea', 7, 5, 0, 2, 17, 6, 11),
('Everton', 4, 1, 1, 2, 4, 7, -3),
('Leicester City', 6, 0, 3, 3, 3, 12, -9),
('Liverpool', 5, 3, 2, 0, 11, 6, 5),
('Manchester City', 5, 2, 2, 1, 7, 6, 1),
('Manchester United', 5, 2, 1, 2, 7, 7, 0),
('Southampton', 6, 1, 2, 3, 6, 4, 2),
('Tottenham Hotspur', 5, 1, 4, 0, 6, 2, 2),
('West Ham United', 4, 0, 0, 4, 2, 10, -8);

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `PID` varchar(50) NOT NULL,
  `MGRID` varchar(50) NOT NULL,
  `AMOUNT` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `CMTID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `COMMENT` longtext NOT NULL,
  `TIMESTAMP` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`CMTID`, `NAME`, `COMMENT`, `TIMESTAMP`) VALUES
(1, 'Jose', 'This is the best I have seen from Liverpool in past 15 years', '2016-11-15 08:43:19'),
(2, 'Chandler', 'Well begun is half done', '2016-11-15 08:44:07'),
(3, 'Joe', 'Its now or never for Liverpool', '2016-11-15 08:44:31'),
(4, 'Monica', 'Gud going Liverpool. You can do it.', '2016-11-16 01:11:30'),
(5, 'Rachel', 'You can do it. Gotta win ''em all.', '2016-11-16 01:11:57'),
(6, 'Aman', 'Wow ', '2016-11-16 04:19:56');

--
-- Triggers `blog`
--
DELIMITER $$
CREATE TRIGGER `after_insert` AFTER INSERT ON `blog` FOR EACH ROW BEGIN
DECLARE msg varchar(200);
SET msg=CONCAT(cast(NEW.NAME as CHAR));
INSERT INTO log (NAME,TIMES,ACTION) values(msg,NOW(),'Comment');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `CLUBID` varchar(10) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `YEAR` int(4) NOT NULL,
  `GROUND` varchar(50) NOT NULL,
  `PLAYED` int(4) NOT NULL,
  `WIN` int(4) NOT NULL,
  `DRAW` int(4) NOT NULL,
  `LOSS` int(4) NOT NULL,
  `GOALS` int(4) NOT NULL,
  `CONCEEDED` int(4) NOT NULL,
  `CLEANSHEETS` int(4) NOT NULL,
  `TROPHIES` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`CLUBID`, `NAME`, `YEAR`, `GROUND`, `PLAYED`, `WIN`, `DRAW`, `LOSS`, `GOALS`, `CONCEEDED`, `CLEANSHEETS`, `TROPHIES`) VALUES
('ARS', 'Arsenal', 1886, 'Emirates Stadium', 931, 507, 242, 182, 1637, 874, 370, 43),
('CHE', 'Chelsea', 1905, 'Stamford Bridge', 931, 490, 239, 202, 1572, 901, 374, 28),
('EVE', 'Everton', 1878, 'Goodison Park', 931, 336, 269, 326, 1208, 1168, 286, 24),
('LEI', 'Leicester City', 1884, 'King Power Stadium', 391, 120, 112, 159, 476, 558, 105, 5),
('LIV', 'Liverpool', 1892, 'Anfield', 931, 461, 234, 236, 1541, 954, 344, 60),
('MCI', 'Manchester City', 1880, 'Etihad Stadium', 741, 310, 172, 250, 1111, 893, 228, 18),
('MUN', 'Manchester United', 1878, 'Old Trafford', 931, 590, 195, 146, 1815, 826, 403, 64),
('SOU', 'Southampton', 1885, 'St. Mary Stadium', 665, 212, 180, 273, 821, 924, 181, 1),
('TOT', 'Tottenham Hotspur', 1882, 'White Hart Lane', 931, 379, 241, 311, 1332, 1208, 252, 24),
('WHM', 'West Ham United', 1895, 'London Stadium', 775, 254, 201, 320, 925, 1099, 207, 6);

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE `fixtures` (
  `MATCHID` varchar(10) NOT NULL,
  `DATE` date NOT NULL,
  `HOMETEAM` varchar(20) NOT NULL,
  `HOMEGOAL` int(11) NOT NULL,
  `AWAYGOAL` int(11) NOT NULL,
  `AWAYTEAM` varchar(20) NOT NULL,
  `STADIUM` varchar(50) NOT NULL,
  `UPDATED` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`MATCHID`, `DATE`, `HOMETEAM`, `HOMEGOAL`, `AWAYGOAL`, `AWAYTEAM`, `STADIUM`, `UPDATED`) VALUES
('ARSCHE', '2016-09-24', 'ARS', 3, 0, 'CHE', 'Emirates Stadium', 1),
('ARSEVE', '2017-05-21', 'ARS', 0, 0, 'EVE', 'Emirates Stadium', 0),
('ARSLEI', '2017-03-11', 'ARS', 0, 0, 'LEI', 'Emirates Stadium', 0),
('ARSLIV', '2016-08-14', 'ARS', 3, 4, 'LIV', 'Emirates Stadium', 1),
('ARSMCI', '2017-04-01', 'ARS', 0, 0, 'MCI', 'Emirates Stadium', 0),
('ARSMUN', '2017-05-06', 'ARS', 0, 0, 'MUN', 'Emirates Stadium', 0),
('ARSSOU', '2016-09-10', 'ARS', 2, 1, 'SOU', 'Emirates Stadium', 1),
('ARSTOT', '2016-11-06', 'ARS', 0, 0, 'TOT', 'Emirates Stadium', 0),
('ARSWHM', '2017-04-05', 'ARS', 0, 0, 'WHM', 'Emirates Stadium', 0),
('CHEARS', '2017-02-04', 'CHE', 0, 0, 'ARS', 'Stamford Bridge', 0),
('CHEEVE', '2016-11-05', 'CHE', 5, 0, 'EVE', 'Stamford Bridge', 1),
('CHELEI', '2016-10-15', 'CHE', 3, 0, 'LEI', 'Stamford Bridge', 1),
('CHELIV', '2016-09-17', 'CHE', 1, 2, 'LIV', 'Stamford Bridge', 1),
('CHEMCI', '2017-04-06', 'CHE', 0, 0, 'MCI', 'Stamford Bridge', 0),
('CHEMUN', '2016-10-23', 'CHE', 4, 0, 'MUN', 'Stamford Bridge', 1),
('CHESOU', '2017-04-22', 'CHE', 0, 0, 'SOU', 'Stamford Bridge', 0),
('CHETOT', '2016-11-26', 'CHE', 0, 0, 'TOT', 'Stamford Bridge', 0),
('CHEWHM', '2016-08-16', 'CHE', 2, 1, 'WHM', 'Stamford Bridge', 1),
('EVEARS', '2016-12-15', 'EVE', 0, 0, 'ARS', 'Goodison Park', 0),
('EVECHE', '2017-04-29', 'EVE', 0, 0, 'CHE', 'Goodison Park', 0),
('EVELEI', '2017-04-08', 'EVE', 0, 0, 'LEI', 'Goodison Park', 0),
('EVELIV', '2016-12-17', 'EVE', 0, 0, 'LIV', 'Goodison Park', 0),
('EVEMCI', '2017-01-14', 'EVE', 0, 0, 'MCI', 'Goodison Park', 0),
('EVEMUN', '2016-12-03', 'EVE', 0, 0, 'MUN', 'Goodison Park', 0),
('EVESOU', '2017-01-02', 'EVE', 0, 0, 'SOU', 'Goodison Park', 0),
('EVETOT', '2016-08-13', 'EVE', 1, 1, 'TOT', 'Goodison Park', 1),
('EVEWHM', '2016-10-30', 'EVE', 2, 0, 'WHM', 'Goodison Park', 1),
('LEIARS', '2016-08-20', 'LEI', 0, 0, 'ARS', 'King Power Stadium', 1),
('LEICHE', '2017-01-14', 'LEI', 0, 0, 'CHE', 'King Power Stadium', 0),
('LEIEVE', '2016-12-26', 'LEI', 0, 0, 'EVE', 'King Power Stadium', 0),
('LEILIV', '2017-02-25', 'LEI', 0, 0, 'LIV', 'King Power Stadium', 0),
('LEIMCI', '2016-12-10', 'LEI', 0, 0, 'MCI', 'King Power Stadium', 0),
('LEIMUN', '2017-02-04', 'LEI', 0, 0, 'MUN', 'King Power Stadium', 0),
('LEISOU', '2016-10-02', 'LEI', 0, 0, 'SOU', 'King Power Stadium', 1),
('LEITOT', '2017-04-22', 'LEI', 0, 0, 'TOT', 'King Power Stadium', 0),
('LEIWHM', '2016-12-31', 'LEI', 0, 0, 'WHM', 'King Power Stadium', 0),
('LIVARS', '2017-03-04', 'LIV', 0, 0, 'ARS', 'Anfield', 0),
('LIVCHE', '2017-02-02', 'LIV', 0, 0, 'CHE', 'Anfield', 0),
('LIVEVE', '2017-04-01', 'LIV', 0, 0, 'EVE', 'Anfield', 0),
('LIVLEI', '2016-09-10', 'LIV', 4, 1, 'LEI', 'Anfield', 1),
('LIVMCI', '2016-12-31', 'LIV', 0, 0, 'MCI', 'Anfield', 0),
('LIVMUN', '2016-10-18', 'LIV', 0, 0, 'MUN', 'Anfield', 1),
('LIVSOU', '2017-05-06', 'LIV', 0, 0, 'SOU', 'Anfield', 0),
('LIVTOT', '2017-02-11', 'LIV', 0, 0, 'TOT', 'Anfield', 0),
('LIVWHM', '2016-12-10', 'LIV', 0, 0, 'WHM', 'Anfield', 0),
('MCIARS', '2016-12-17', 'MCI', 0, 0, 'ARS', 'Etihad Stadium', 0),
('MCICHE', '2016-12-03', 'MCI', 0, 0, 'CHE', 'Etihad Stadium', 0),
('MCIEVE', '2016-10-15', 'MCI', 1, 1, 'EVE', 'Etihad Stadium', 1),
('MCILEI', '2017-05-13', 'MCI', 0, 0, 'LEI', 'Etihad Stadium', 0),
('MCILIV', '2017-03-18', 'MCI', 0, 0, 'LIV', 'Etihad Stadium', 0),
('MCIMUN', '2017-02-25', 'MCI', 0, 0, 'MUN', 'Etihad Stadium', 0),
('MCISOU', '2016-10-23', 'MCI', 1, 1, 'SOU', 'Etihad Stadium', 1),
('MCITOT', '2017-01-21', 'MCI', 0, 0, 'TOT', 'Etihad Stadium', 0),
('MCIWHM', '2016-08-28', 'MCI', 3, 1, 'WHM', 'Etihad Stadium', 1),
('MUNARS', '2016-11-19', 'MUN', 0, 0, 'ARS', 'Old Trafford', 0),
('MUNCHE', '2017-04-15', 'MUN', 0, 0, 'CHE', 'Old Trafford', 0),
('MUNEVE', '2017-04-05', 'MUN', 0, 0, 'EVE', 'Old Trafford', 0),
('MUNLEI', '2016-09-24', 'MUN', 4, 1, 'LEI', 'Old Trafford', 1),
('MUNLIV', '2017-01-14', 'MUN', 0, 0, 'LIV', 'Old Trafford', 0),
('MUNMCI', '2016-09-10', 'MUN', 1, 2, 'MCI', 'Old Trafford', 1),
('MUNSOU', '2016-08-27', 'MUN', 2, 0, 'SOU', 'Old Trafford', 1),
('MUNTOT', '2016-12-11', 'MUN', 0, 0, 'TOT', 'Old Trafford', 0),
('MUNWHM', '2016-11-27', 'MUN', 0, 0, 'WHM', 'Old Trafford', 0),
('SOUARS', '2017-02-25', 'SOU', 0, 0, 'ARS', 'St. Mary Stadium', 0),
('SOUCHE', '2016-10-30', 'SOU', 0, 2, 'CHE', 'St. Mary Stadium', 1),
('SOUEVE', '2016-11-27', 'SOU', 0, 0, 'EVE', 'St. Mary Stadium', 0),
('SOULEI', '2017-01-21', 'SOU', 0, 0, 'LEI', 'St. Mary Stadium', 0),
('SOULIV', '2016-11-19', 'SOU', 0, 0, 'LIV', 'St. Mary Stadium', 0),
('SOUMCI', '2017-04-15', 'SOU', 0, 0, 'MCI', 'St. Mary Stadium', 0),
('SOUMUN', '2017-03-11', 'SOU', 0, 0, 'MUN', 'St. Mary Stadium', 0),
('SOUTOT', '2016-12-26', 'SOU', 0, 0, 'TOT', 'St. Mary Stadium', 0),
('SOUWHM', '2017-02-04', 'SOU', 0, 0, 'WHM', 'St. Mary Stadium', 0),
('TOTARS', '2017-04-29', 'TOT', 0, 0, 'ARS', 'White Hart Lane', 0),
('TOTCHE', '2017-01-02', 'TOT', 0, 0, 'CHE', 'White Hart Lane', 0),
('TOTEVE', '2017-03-04', 'TOT', 0, 0, 'EVE', 'White Hart Lane', 0),
('TOTLEI', '2016-10-29', 'TOT', 1, 1, 'LEI', 'White Hart Lane', 1),
('TOTLIV', '2016-08-27', 'TOT', 1, 1, 'LIV', 'White Hart Lane', 1),
('TOTMCI', '2016-10-02', 'TOT', 2, 0, 'MCI', 'White Hart Lane', 1),
('TOTMUN', '2017-05-13', 'TOT', 0, 0, 'MUN', 'White Hart Lane', 0),
('TOTSOU', '2017-03-18', 'TOT', 0, 0, 'SOU', 'White Hart Lane', 0),
('TOTWHM', '2016-11-19', 'TOT', 0, 0, 'WHM', 'White Hart Lane', 0),
('WHMARS', '2016-12-03', 'WHM', 0, 0, 'ARS', 'London Stadium', 0),
('WHMCHE', '2017-03-04', 'WHM', 0, 0, 'CHE', 'London Stadium', 0),
('WHMEVE', '2017-04-22', 'WHM', 0, 0, 'EVE', 'London Stadium', 0),
('WHMLEI', '2017-03-18', 'WHM', 0, 0, 'LEI', 'London Stadium', 0),
('WHMLIV', '2017-05-13', 'WHM', 0, 0, 'LIV', 'London Stadium', 0),
('WHMMCI', '2017-02-01', 'WHM', 0, 0, 'MCI', 'London Stadium', 0),
('WHMMUN', '2017-01-02', 'WHM', 0, 0, 'MUN', 'London Stadium', 0),
('WHMSOU', '2016-09-25', 'WHM', 0, 3, 'SOU', 'London Stadium', 1),
('WHMTOT', '2017-05-06', 'WHM', 0, 0, 'TOT', 'London Stadium', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `TIMES` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ACTION` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`ID`, `NAME`, `TIMES`, `ACTION`) VALUES
(26, 'ADMIN', '2016-11-15 21:50:45', 'logged in'),
(27, 'ADMIN', '2016-11-15 21:55:06', 'logged out'),
(28, 'Monica', '2016-11-16 01:11:30', 'Comment'),
(29, 'Rachel', '2016-11-16 01:11:57', 'Comment'),
(30, 'ADMIN', '2016-11-16 01:25:26', 'logged in'),
(31, 'ADMIN', '2016-11-16 01:31:25', 'logged out'),
(32, 'ARSMGR', '2016-11-16 01:31:36', 'logged in'),
(33, 'ARSMGR', '2016-11-16 01:39:46', 'logged out'),
(34, 'ADMIN', '2016-11-16 01:40:00', 'logged in'),
(35, 'ADMIN', '2016-11-16 01:43:50', 'logged out'),
(36, 'ARSMGR', '2016-11-16 01:45:18', 'logged in'),
(37, 'ARSMGR', '2016-11-16 01:55:28', 'logged out'),
(38, 'ADMIN', '2016-11-16 01:58:07', 'logged in'),
(39, 'ADMIN', '2016-11-16 02:03:28', 'logged out'),
(40, 'ARSMGR', '2016-11-16 02:03:39', 'logged in'),
(41, 'ARSMGR', '2016-11-16 02:10:35', 'logged out'),
(42, 'ADMIN', '2016-11-16 02:10:55', 'logged in'),
(43, 'ADMIN', '2016-11-16 11:19:34', 'logged out'),
(44, 'ARSMGR', '2016-11-16 11:19:57', 'logged in'),
(45, 'ARSMGR', '2016-11-16 11:22:42', 'logged out'),
(46, 'ADMIN', '2016-11-16 11:23:05', 'logged in'),
(47, 'ADMIN', '2016-11-16 11:26:03', 'logged out'),
(48, 'ADMIN', '2016-11-16 11:27:20', 'logged in'),
(49, 'ADMIN', '2016-11-16 11:28:59', 'logged out'),
(50, 'ADMIN', '2016-11-16 11:30:04', 'logged in'),
(51, 'ADMIN', '2016-11-16 11:30:10', 'logged out'),
(52, 'ADMIN', '2016-11-16 11:30:42', 'logged in'),
(53, 'ADMIN', '2016-11-16 11:30:54', 'logged out'),
(54, 'ARSMGR', '2016-11-16 11:31:06', 'logged in'),
(55, 'ARSMGR', '2016-11-16 11:33:57', 'logged out'),
(56, 'ADMIN', '2016-11-16 11:34:35', 'logged in'),
(57, 'ADMIN', '2016-11-16 11:49:23', 'logged out'),
(58, 'ARS001', '2016-11-16 15:10:02', 'logged out'),
(59, 'ARS001', '2016-11-16 15:10:11', 'logged in'),
(60, 'ARS001', '2016-11-16 15:10:30', 'logged out'),
(61, 'ARSMGR', '2016-11-16 15:15:32', 'logged in'),
(62, 'ARSMGR', '2016-11-16 15:16:24', 'logged out'),
(63, 'ARS001', '2016-11-16 15:16:50', 'logged in'),
(64, 'ARS001', '2016-11-16 15:17:17', 'logged out'),
(65, 'ADMIN', '2016-11-16 15:21:43', 'logged in'),
(66, 'ADMIN', '2016-11-16 15:25:28', 'logged out'),
(67, 'ADMIN', '2016-11-16 15:27:44', 'logged in'),
(68, 'ADMIN', '2016-11-16 15:28:06', 'logged out'),
(69, 'ARS001', '2016-11-16 15:28:19', 'logged in'),
(72, 'ADMIN', '2016-11-16 16:18:30', 'logged in'),
(73, 'Aman', '2016-11-16 16:19:56', 'Comment'),
(74, 'ADMIN', '2016-11-16 16:20:34', 'logged out'),
(75, 'ARSMGR', '2016-11-16 16:20:50', 'logged in'),
(76, 'ARSMGR', '2016-11-16 16:23:27', 'logged out'),
(77, 'ARS001', '2016-11-16 16:23:50', 'logged in');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `MGRID` varchar(10) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `NATIONALITY` varchar(50) NOT NULL,
  `CLUBID` varchar(50) NOT NULL,
  `YEARS` int(3) NOT NULL,
  `PLAYED` int(4) NOT NULL,
  `WON` int(4) NOT NULL,
  `DRAW` int(4) NOT NULL,
  `LOSS` int(4) NOT NULL,
  `TROPHIES` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`MGRID`, `NAME`, `DOB`, `NATIONALITY`, `CLUBID`, `YEARS`, `PLAYED`, `WON`, `DRAW`, `LOSS`, `TROPHIES`) VALUES
('ARSMGR', 'Arsene Wenger', '1949-10-22', 'FRANCE', 'ARS', 32, 1583, 858, 346, 380, 19),
('CHEMGR', 'Antonio Conte', '1969-07-31', 'ITALY', 'CHE', 10, 336, 188, 89, 59, 6),
('EVEMGR', 'Ronald Koeman', '1963-03-21', 'NETHERLANDS', 'EVE', 16, 614, 337, 128, 149, 8),
('LEIMGR', 'Claudio Ranieri', '1951-10-20', 'ITALY', 'LEI', 28, 974, 451, 268, 255, 11),
('LIVMGR', 'Jurgen Klopp', '1967-06-16', 'GERMANY', 'LIV', 15, 649, 318, 165, 166, 5),
('MCIMGR', 'Pep Guardiola', '1971-01-18', 'SPAIN', 'MCI', 9, 458, 335, 77, 46, 22),
('MUNMGR', 'Jose Mourinho', '1953-01-26', 'PORTUGAL', 'MUN', 16, 776, 512, 155, 109, 23),
('SOUMGR', 'Claude Puel', '1961-09-02', 'FRANCE', 'SOU', 17, 739, 318, 204, 217, 2),
('TOTMGR', 'Mauricio Pochettino', '1972-03-02', 'ARGENTINA', 'TOT', 7, 341, 138, 86, 117, 0),
('WHMMGR', 'Slaven Bilic', '1968-09-11', 'CROATIA', 'WHM', 15, 286, 146, 70, 70, 0);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `PID` varchar(10) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `HEIGHT` int(11) NOT NULL,
  `NATIONALITY` varchar(50) NOT NULL,
  `POS` varchar(10) NOT NULL,
  `TNO` int(2) NOT NULL,
  `CLUBID` varchar(50) NOT NULL,
  `PLAYED` int(4) NOT NULL,
  `GOALS` int(4) NOT NULL,
  `HONOURS` int(3) NOT NULL,
  `SALE` int(11) NOT NULL,
  `BID_AMOUNT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`PID`, `NAME`, `DOB`, `HEIGHT`, `NATIONALITY`, `POS`, `TNO`, `CLUBID`, `PLAYED`, `GOALS`, `HONOURS`, `SALE`, `BID_AMOUNT`) VALUES
('ARS001', 'Avtansh', '1995-12-28', 178, 'Indian', 'CF', 1, 'ARS', 100, 200, 10, 1, 80),
('ARS003', 'Kieran Gibbs', '1989-09-26', 178, 'ENGLAND', 'LB', 3, 'ARS', 254, 9, 5, 0, 0),
('ARS004', 'Per Mertesacker', '1984-09-29', 198, 'GERMANY', 'CB', 4, 'ARS', 609, 37, 6, 0, 0),
('ARS005', 'Gabriel Paulista', '1990-11-26', 187, 'BRAZIL', 'CB', 5, 'ARS', 230, 8, 0, 0, 0),
('ARS006', 'Laurent Koscielny', '1985-09-10', 186, 'FRANCE', 'CB', 6, 'ARS', 459, 35, 6, 0, 0),
('ARS007', 'Alexis Sanchez', '1988-12-19', 169, 'CHILE', 'LW', 7, 'ARS', 601, 179, 25, 0, 0),
('ARS008', 'Aaron Ramsey', '1990-12-26', 178, 'WALES', 'CM', 8, 'ARS', 375, 61, 11, 0, 0),
('ARS009', 'Lucas Perez', '1988-09-10', 181, 'SPAIN', 'ST', 9, 'ARS', 181, 55, 1, 0, 0),
('ARS011', 'Mesut Ozil', '1988-10-15', 183, 'GERMANY', 'CAM', 11, 'ARS', 536, 97, 31, 0, 0),
('ARS012', 'Olivier Giroud', '1986-09-30', 192, 'FRANCE', 'ST', 12, 'ARS', 459, 194, 15, 0, 0),
('ARS013', 'David Ospina', '1988-08-31', 183, 'COLUMBIA', 'GK', 13, 'ARS', 413, 0, 5, 0, 0),
('ARS014', 'Theo Walcott', '1989-03-16', 176, 'ENGLAND', 'LM', 14, 'ARS', 460, 115, 5, 0, 0),
('ARS015', 'Alex Oxlade-Chamberlain', '1993-08-15', 180, 'ENGLAND', 'RM', 15, 'ARS', 236, 35, 4, 0, 0),
('ARS017', 'Alex Iwobi', '1996-05-03', 180, 'NIGERIA', 'LM', 17, 'ARS', 46, 4, 0, 0, 0),
('ARS018', 'Nacho Monreal', '1986-02-26', 178, 'SPAIN', 'LB', 18, 'ARS', 404, 9, 5, 0, 0),
('ARS019', 'Santi Cazorla', '1984-12-13', 168, 'SPAIN', 'CAM', 19, 'ARS', 565, 90, 13, 0, 0),
('ARS020', 'Shkodran Mustafi', '1992-04-17', 184, 'GERMANY', 'CB', 20, 'ARS', 210, 19, 2, 0, 0),
('ARS023', 'Danny Welbeck', '1990-11-26', 185, 'ENGLAND', 'ST', 23, 'ARS', 296, 75, 8, 0, 0),
('ARS024', 'Hector Bellerin', '1995-03-19', 177, 'SPAIN', 'RB', 24, 'ARS', 122, 4, 5, 0, 0),
('ARS029', 'Granit Xhaka', '1992-09-27', 185, 'SWITZERLAND', 'CM', 29, 'ARS', 297, 22, 3, 0, 0),
('ARS033', 'Petr Cech', '1982-05-20', 196, 'CZECH REPUBLIC', 'GK', 33, 'ARS', 859, 0, 55, 0, 0),
('ARS034', 'Francis Coquelin', '1991-05-13', 178, 'FRANCE', 'CDM', 34, 'ARS', 211, 2, 5, 0, 0),
('ARS035', 'Mohamed Elneny', '1992-07-11', 180, 'EGYPT', 'CDM', 35, 'ARS', 250, 18, 8, 0, 0),
('CHE001', 'Asmir Begovic', '1987-06-20', 198, 'BOSNIA AND HERZEGOVINA', 'GK', 1, 'CHE', 314, 1, 8, 0, 0),
('CHE002', 'Branislav Ivanovic', '1984-02-22', 188, 'SERBIA', 'RB', 2, 'CHE', 644, 64, 21, 0, 0),
('CHE003', 'Marcos Alonso', '1990-12-20', 188, 'SPAIN', 'LM', 3, 'CHE', 198, 13, 2, 0, 0),
('CHE004', 'Cesc Fabregas', '1987-05-04', 175, 'SPAIN', 'CM', 4, 'CHE', 701, 142, 35, 0, 0),
('CHE005', 'Kurt Zouma', '1994-10-27', 190, 'FRANCE', 'CB', 5, 'CHE', 163, 10, 5, 0, 0),
('CHE007', 'N''Golo Kante', '1991-03-29', 169, 'FRANCE', 'CM', 7, 'CHE', 179, 12, 2, 0, 0),
('CHE008', 'Oscar dos Santos', '1991-09-09', 179, 'BRAZIL', 'CAM', 8, 'CHE', 360, 78, 15, 0, 0),
('CHE010', 'Eden Hazard', '1991-01-07', 173, 'BELGIUM', 'LM', 10, 'CHE', 516, 132, 30, 0, 0),
('CHE011', 'Pedro Rodriguez', '1987-07-28', 167, 'SPAIN', 'LM', 11, 'CHE', 425, 124, 25, 0, 0),
('CHE012', 'John Obi Mikel', '1987-04-22', 188, 'NIGERIA', 'CDM', 12, 'CHE', 462, 12, 18, 0, 0),
('CHE013', 'Thibaut Courtois', '1992-05-11', 199, 'BELGIUM', 'GK', 13, 'CHE', 321, 0, 17, 0, 0),
('CHE014', 'Ruben Loftus-Cheek', '1996-01-23', 191, 'ENGLAND', 'CAM', 14, 'CHE', 59, 16, 5, 0, 0),
('CHE015', 'Victor Moses', '1990-12-12', 178, 'NIGERIA', 'LM', 15, 'CHE', 323, 58, 2, 0, 0),
('CHE019', 'Diego Costa', '1988-10-07', 188, 'SPAIN', 'ST', 19, 'CHE', 378, 152, 15, 0, 0),
('CHE021', 'Nemanja Matic', '1988-08-01', 194, 'SERBIA', 'CDM', 21, 'CHE', 373, 23, 16, 0, 0),
('CHE022', 'Willian Borges', '1988-08-09', 175, 'BRAZIL', 'RM', 22, 'CHE', 477, 67, 19, 0, 0),
('CHE023', 'Michy Batshuayi', '1993-10-02', 182, 'BELGIUM', 'ST', 23, 'CHE', 224, 90, 1, 0, 0),
('CHE024', 'Gary Cahill', '1985-12-19', 193, 'ENGLAND', 'CB', 24, 'CHE', 486, 40, 6, 0, 0),
('CHE026', 'John Terry', '1980-12-07', 183, 'ENGLAND', 'CB', 26, 'CHE', 901, 73, 42, 0, 0),
('CHE028', 'Cesar Azpilicueta', '1989-08-28', 178, 'SPAIN', 'LB', 28, 'CHE', 472, 10, 14, 0, 0),
('CHE030', 'David Luiz', '1987-04-22', 189, 'BRAZIL', 'CB', 30, 'CHE', 481, 31, 25, 0, 0),
('CHE041', 'Dominic Solanke', '1997-09-14', 185, 'ENGLAND', 'ST', 41, 'CHE', 68, 25, 9, 0, 0),
('EVE001', 'Joel Robles', '1990-06-17', 195, 'SPAIN', 'GK', 1, 'EVE', 78, 0, 5, 0, 0),
('EVE003', 'Leighton Baines', '1984-12-11', 170, 'ENGLAND', 'LB', 3, 'EVE', 554, 39, 11, 0, 0),
('EVE004', 'Darron Gibson', '1987-10-25', 183, 'REPUBLIC OF IRELAND', 'CM', 4, 'EVE', 228, 16, 7, 0, 0),
('EVE005', 'Ashley Williams', '1984-08-23', 183, 'WALES', 'CB', 5, 'EVE', 660, 20, 3, 0, 0),
('EVE006', 'Phil Jagielka', '1982-08-17', 183, 'ENGLAND', 'CB', 6, 'EVE', 662, 42, 12, 0, 0),
('EVE007', 'Gerard Deulofeu', '1994-03-13', 177, 'SPAIN', 'RM', 7, 'EVE', 242, 68, 5, 0, 0),
('EVE008', 'Ross Barkley', '1993-12-05', 188, 'ENGLAND', 'CAM', 8, 'EVE', 223, 35, 2, 0, 0),
('EVE009', 'Arouna Kone', '1983-11-11', 181, 'IVORY COAST', 'ST', 9, 'EVE', 418, 131, 0, 0, 0),
('EVE010', 'Romelu Lukaku', '1993-05-13', 190, 'BELGIUM', 'ST', 10, 'EVE', 447, 145, 5, 0, 0),
('EVE011', 'Kevin Mirallas', '1987-10-05', 182, 'BELGIUM', 'LM', 11, 'EVE', 468, 116, 6, 0, 0),
('EVE012', 'Aaron Lennon', '1987-04-16', 165, 'ENGLAND', 'RM', 12, 'EVE', 499, 44, 1, 0, 0),
('EVE014', 'Yannick Bolasie', '1989-05-24', 185, 'DR CONGO', 'LM', 14, 'EVE', 339, 37, 0, 0, 0),
('EVE015', 'Tom Cleverley', '1989-08-12', 175, 'ENGLAND', 'CM', 15, 'EVE', 262, 29, 5, 0, 0),
('EVE016', 'James McCarthy', '1990-11-12', 180, 'REPUBLIC OF IRELAND', 'CDM', 16, 'EVE', 414, 32, 9, 0, 0),
('EVE017', 'Idrissa Gueye', '1989-09-26', 174, 'SENEGAL', 'CM', 17, 'EVE', 311, 9, 1, 0, 0),
('EVE018', 'Gareth Barry', '1985-02-23', 183, 'ENGLAND', 'CDM', 18, 'EVE', 796, 68, 3, 0, 0),
('EVE019', 'Enner Valencia', '1989-11-04', 174, 'ECUADOR', 'ST', 19, 'EVE', 296, 77, 4, 0, 0),
('EVE021', 'Muhamed Besic', '1992-09-10', 177, 'BOSNIA AND HERZEGOVINA', 'CDM', 21, 'EVE', 186, 3, 1, 0, 0),
('EVE022', 'Maarten Stekelenburg', '1982-09-22', 197, 'NETHERLANDS', 'GK', 22, 'EVE', 459, 0, 12, 0, 0),
('EVE023', 'Seamus Coleman', '1988-10-11', 177, 'REPUBLIC OF IRELAND', 'RB', 23, 'EVE', 345, 25, 8, 0, 0),
('EVE024', 'Oumar Niasse', '1990-04-18', 182, 'SENEGAL', 'ST', 24, 'EVE', 107, 41, 2, 0, 0),
('EVE025', 'Ramiro Funes Mori', '1991-03-05', 191, 'ARGENTINA', 'CB', 25, 'EVE', 164, 16, 6, 0, 0),
('LEI001', 'Kasper Schmeichel', '1986-12-05', 189, 'DENMARK', 'GK', 1, 'LEI', 447, 0, 15, 0, 0),
('LEI002', 'Lu?s Hern?ndez', '1989-04-14', 182, 'SPAIN', 'CB', 2, 'LEI', 229, 7, 0, 0, 0),
('LEI004', 'Danny Drinkwater', '1990-03-05', 178, 'ENGLAND', 'CM', 4, 'LEI', 283, 18, 6, 0, 0),
('LEI005', 'Wes Morgan', '1984-01-21', 185, 'JAMAICA', 'CB', 5, 'LEI', 642, 24, 11, 0, 0),
('LEI006', 'Robert Huth', '1984-08-18', 191, 'GERMANY', 'CB', 6, 'LEI', 393, 28, 10, 0, 0),
('LEI007', 'Ahmed Musa', '1992-10-14', 170, 'NIGERIA', 'ST', 7, 'LEI', 278, 79, 12, 0, 0),
('LEI009', 'Jamie Vardy', '1987-01-11', 178, 'ENGLAND', 'ST', 9, 'LEI', 250, 121, 14, 0, 0),
('LEI010', 'Andy King', '1988-10-29', 183, 'WALES', 'CM', 10, 'LEI', 393, 63, 7, 0, 0),
('LEI011', 'Marc Albrighton', '1989-11-18', 175, 'ENGLAND', 'LM', 11, 'LEI', 184, 15, 1, 0, 0),
('LEI013', 'Daniel Amartey', '1994-12-21', 183, 'GHANA', 'CM', 13, 'LEI', 126, 7, 5, 0, 0),
('LEI014', 'Bartosz Kapustka', '1996-12-23', 179, 'POLAND', 'LM', 14, 'LEI', 79, 11, 0, 0, 0),
('LEI015', 'Jeffrey Schlupp', '1992-12-23', 178, 'GHANA', 'LB', 15, 'LEI', 165, 22, 7, 0, 0),
('LEI017', 'Danny Simpson', '1987-01-04', 178, 'ENGLAND', 'RB', 17, 'LEI', 317, 4, 4, 0, 0),
('LEI019', 'Islam Slimani', '1988-06-18', 188, 'ALGERIA', 'ST', 19, 'LEI', 281, 127, 4, 0, 0),
('LEI020', 'Shinji Okazaki', '1986-04-16', 174, 'JAPAN', 'ST', 20, 'LEI', 471, 149, 2, 0, 0),
('LEI021', 'Ron-Robert Zieler', '1989-02-12', 188, 'GERMANY', 'GK', 21, 'LEI', 279, 0, 2, 0, 0),
('LEI022', 'Demarai Gray', '1996-06-28', 178, 'ENGLAND', 'LM', 22, 'LEI', 113, 12, 5, 0, 0),
('LEI023', 'Leonardo Ulloa', '1986-07-26', 185, 'ARGENTINA', 'ST', 23, 'LEI', 378, 134, 4, 0, 0),
('LEI024', 'Nampalys Mendy', '1992-06-23', 168, 'FRANCE', 'CDM', 24, 'LEI', 243, 1, 1, 0, 0),
('LEI026', 'Riyad Mahrez', '1991-02-21', 178, 'ALGERIA', 'RM', 26, 'LEI', 278, 69, 6, 0, 0),
('LEI028', 'Christian Fuchs', '1986-04-07', 186, 'AUSTRIA', 'LB', 28, 'LEI', 538, 36, 2, 0, 0),
('LEI029', 'Yohan Benalouane', '1987-03-24', 187, 'FRANCE', 'CB', 29, 'LEI', 150, 3, 0, 0, 0),
('LIV001', 'Loris Karius', '1993-06-22', 189, 'GERMANY', 'GK', 1, 'LIV', 134, 0, 0, 0, 0),
('LIV002', 'Nathaniel Clyne', '1991-04-05', 175, 'ENGLAND', 'RB', 2, 'LIV', 331, 8, 7, 0, 0),
('LIV003', 'Mamadou Sakho', '1990-02-13', 187, 'FRANCE', 'CB', 3, 'LIV', 342, 14, 6, 0, 0),
('LIV005', 'Georginio Wijnaldum', '1990-11-11', 175, 'NETHERLANDS', 'LM', 5, 'LIV', 420, 118, 5, 0, 0),
('LIV006', 'Dejan Lovren', '1989-07-05', 188, 'CROATIA', 'CB', 6, 'LIV', 434, 21, 5, 0, 0),
('LIV007', 'James Milner', '1986-01-04', 175, 'ENGLAND', 'CM', 7, 'LIV', 708, 96, 7, 0, 0),
('LIV010', 'Philippe Coutinho', '1992-06-12', 171, 'BRAZIL', 'CAM', 10, 'LIV', 291, 58, 14, 0, 0),
('LIV011', 'Roberto Firmino', '1991-10-02', 181, 'BRAZIL', 'CF', 11, 'LIV', 274, 80, 1, 0, 0),
('LIV014', 'Jordan Henderson', '1990-06-17', 182, 'ENGLAND', 'CM', 14, 'LIV', 371, 33, 4, 0, 0),
('LIV015', 'Daniel Sturridge', '1989-09-01', 188, 'ENGLAND', 'ST', 15, 'LIV', 301, 123, 9, 0, 0),
('LIV017', 'Ragnar Klavan', '1985-10-30', 187, 'ESTONIA', 'CB', 17, 'LIV', 553, 24, 6, 0, 0),
('LIV018', 'Alberto Moreno', '1992-07-05', 171, 'SPAIN', 'LB', 18, 'LIV', 220, 13, 3, 0, 0),
('LIV019', 'Sadio Mane', '1992-04-10', 175, 'SENEGAL', 'RM', 19, 'LIV', 232, 85, 2, 0, 0),
('LIV020', 'Adam Lallana', '1988-05-10', 172, 'ENGLAND', 'CAM', 20, 'LIV', 398, 78, 7, 0, 0),
('LIV021', 'Lucas Leiva', '1987-01-09', 179, 'BRAZIL', 'CDM', 21, 'LIV', 432, 18, 11, 0, 0),
('LIV022', 'Simon Mignolet', '1988-03-06', 193, 'BELGIUM', 'GK', 22, 'LIV', 392, 1, 4, 0, 0),
('LIV023', 'Emre Can', '1994-01-12', 186, 'GERMANY', 'CM', 23, 'LIV', 227, 17, 6, 0, 0),
('LIV026', 'Tiago Ilori', '1993-02-26', 190, 'POTUGAL', 'CB', 26, 'LIV', 80, 4, 0, 0, 0),
('LIV027', 'Divock Origi', '1995-04-18', 185, 'BELGIUM', 'ST', 27, 'LIV', 193, 44, 0, 0, 0),
('LIV028', 'Danny Ings', '1992-07-23', 178, 'ENGLAND', 'ST', 28, 'LIV', 196, 65, 4, 0, 0),
('LIV032', 'Joel Matip', '1991-08-08', 195, 'CAMEROON', 'CB', 32, 'LIV', 296, 25, 2, 0, 0),
('LIV035', 'Kevin Stewart', '1993-09-07', 183, 'ENGLAND', 'CDM', 35, 'LIV', 38, 3, 0, 0, 0),
('MCI001', 'Claudio Bravo', '1983-04-13', 183, 'CHILE', 'GK', 1, 'MCI', 565, 0, 19, 0, 0),
('MCI003', 'Bacary Sagna', '1983-02-14', 176, 'FRANCE', 'RB', 3, 'MCI', 549, 6, 7, 0, 0),
('MCI004', 'Vincent Kompany', '1986-04-10', 193, 'BELGIUM', 'CB', 4, 'MCI', 528, 28, 21, 0, 0),
('MCI005', 'Pablo Zabaleta', '1985-01-16', 178, 'ARGENTINA', 'RB', 5, 'MCI', 580, 24, 15, 0, 0),
('MCI006', 'Fernando', '1989-07-25', 183, 'BRAZIL', 'CDM', 6, 'MCI', 338, 10, 17, 0, 0),
('MCI007', 'Raheem Sterling', '1994-12-08', 170, 'ENGLAND', 'LM', 7, 'MCI', 243, 48, 6, 0, 0),
('MCI008', 'Ilkay Gundogan', '1990-10-24', 180, 'GERMANY', 'CM', 8, 'MCI', 256, 30, 5, 0, 0),
('MCI009', 'Nolito', '1986-10-15', 175, 'SPAIN', 'LW', 9, 'MCI', 390, 115, 4, 0, 0),
('MCI010', 'Sergio Aguero', '1988-06-02', 173, 'ARGENTINA', 'ST', 10, 'MCI', 598, 315, 31, 0, 0),
('MCI011', 'Aleksandar Kolarov', '1985-11-10', 187, 'SERBIA', 'LB', 11, 'MCI', 478, 47, 9, 0, 0),
('MCI013', 'Willy Caballero', '1981-09-28', 186, 'ARGENTINA', 'GK', 13, 'MCI', 388, 0, 6, 0, 0),
('MCI015', 'Jesus Navas', '1985-11-21', 170, 'SPAIN', 'RM', 15, 'MCI', 575, 45, 14, 0, 0),
('MCI017', 'Kevin De Bruyne', '1991-06-28', 181, 'BELGIUM', 'CM', 17, 'MCI', 345, 80, 17, 0, 0),
('MCI018', 'Fabian Delph', '1989-11-21', 174, 'ENGLAND', 'CM', 18, 'MCI', 238, 17, 10, 0, 0),
('MCI019', 'Leroy Sane', '1996-01-11', 184, 'GERMANY', 'RM', 19, 'MCI', 81, 22, 0, 0, 0),
('MCI021', 'David Silva', '1986-01-08', 170, 'SPAIN', 'CAM', 21, 'MCI', 666, 132, 30, 0, 0),
('MCI022', 'Gael Clichy', '1985-07-26', 176, 'FRANCE', 'LB', 22, 'MCI', 476, 3, 11, 0, 0),
('MCI024', 'John Stones', '1994-05-28', 188, 'ENGLAND', 'CB', 24, 'MCI', 164, 2, 1, 0, 0),
('MCI025', 'Fernandinho', '1985-05-04', 179, 'BRAZIL', 'CM', 25, 'MCI', 461, 70, 24, 0, 0),
('MCI030', 'Nicolas Otamendi', '1988-02-12', 183, 'ARGENTINA', 'CB', 30, 'MCI', 329, 22, 18, 0, 0),
('MCI042', 'Yaya Toure', '1983-05-13', 189, 'IVORY COAST', 'CM', 42, 'MCI', 657, 116, 28, 0, 0),
('MCI072', 'Kelechi Iheanacho', '1996-10-03', 187, 'NIGERIA', 'ST', 72, 'MCI', 57, 29, 6, 0, 0),
('MUN001', 'De Gea', '1990-11-07', 192, 'SPAIN', 'GK', 1, 'MUN', 444, 0, 22, 0, 0),
('MUN003', 'Eric Bailly', '1994-04-12', 187, 'IVORY COAST', 'CB', 3, 'MUN', 99, 1, 2, 0, 0),
('MUN006', 'Paul Pogba', '1993-03-15', 191, 'FRANCE', 'CM', 6, 'MUN', 292, 52, 21, 0, 0),
('MUN007', 'Memphis Depay', '1994-02-13', 176, 'NETHERLANDS', 'LM', 7, 'MUN', 239, 80, 7, 0, 0),
('MUN008', 'Juan Mata', '1988-04-28', 170, 'SPAIN', 'CAM', 8, 'MUN', 506, 140, 21, 0, 0),
('MUN009', 'Zlatan Ibrahimovic', '1981-10-03', 195, 'SWEDEN', 'ST', 9, 'MUN', 815, 467, 93, 0, 0),
('MUN010', 'Wayne Rooney', '1985-10-24', 176, 'ENGLAND', 'CAM', 10, 'MUN', 741, 325, 45, 0, 0),
('MUN011', 'Anthony Martial', '1995-12-05', 184, 'FRANCE', 'LM', 11, 'MUN', 197, 59, 10, 0, 0),
('MUN012', 'Chris Smalling', '1989-11-22', 193, 'ENGLAND', 'CB', 12, 'MUN', 283, 15, 9, 0, 0),
('MUN016', 'Michael Carrick', '1981-07-28', 188, 'ENGLAND', 'CDM', 16, 'MUN', 719, 36, 20, 0, 0),
('MUN017', 'Daley Blind', '1990-03-09', 180, 'NETHERLANDS', 'CB', 17, 'MUN', 341, 12, 11, 0, 0),
('MUN018', 'Ashley Young', '1985-07-09', 175, 'ENGLAND', 'LM', 18, 'MUN', 485, 82, 12, 0, 0),
('MUN020', 'Sergio Romero', '1987-02-22', 191, 'ARGENTINA', 'GK', 20, 'MUN', 317, 0, 9, 0, 0),
('MUN021', 'Ander Herrera', '1989-08-14', 182, 'SPAIN', 'CM', 21, 'MUN', 334, 40, 5, 0, 0),
('MUN022', 'Henrikh Mkhitaryan', '1989-01-21', 178, 'ARMENIA', 'RM', 22, 'MUN', 462, 167, 29, 0, 0),
('MUN023', 'Luke Shaw', '1995-07-12', 185, 'ENGLAND', 'LB', 23, 'MUN', 126, 1, 2, 0, 0),
('MUN025', 'Antonio Valencia', '1985-08-04', 180, 'ECUADOR', 'RB', 25, 'MUN', 532, 50, 12, 0, 0),
('MUN027', 'Marouane Fellaini', '1987-11-22', 194, 'BELGIUM', 'CM', 27, 'MUN', 443, 69, 6, 0, 0),
('MUN031', 'Bastian Schweinsteiger', '1984-08-01', 183, 'GERMANY', 'CM', 31, 'MUN', 713, 101, 38, 0, 0),
('MUN035', 'Jesse Lingard', '1992-12-15', 175, 'ENGLAND', 'RM', 35, 'MUN', 111, 21, 3, 0, 0),
('MUN036', 'Matteo Darmian', '1989-12-02', 182, 'ITALY', 'RB', 36, 'MUN', 291, 9, 4, 0, 0),
('MUN039', 'Marcus Rashford', '1997-10-31', 180, 'ENGLAND', 'ST', 39, 'MUN', 37, 16, 3, 0, 0),
('SOU001', 'Fraser Forster', '1988-03-17', 201, 'ENGLAND', 'GK', 1, 'SOU', 320, 0, 21, 0, 0),
('SOU002', 'Cedric Soares', '1991-08-31', 172, 'PORTUGAL', 'RB', 2, 'SOU', 238, 4, 3, 0, 0),
('SOU003', 'Maya Yoshida', '1988-08-24', 189, 'JAPAN', 'CB', 3, 'SOU', 342, 31, 0, 0, 0),
('SOU004', 'Jordy Clasie', '1991-06-27', 169, 'NETHERLANDS', 'CDM', 4, 'SOU', 259, 11, 0, 0, 0),
('SOU005', 'Florin Gardos', '1988-10-29', 193, 'ROMANIA', 'CB', 5, 'SOU', 211, 6, 4, 0, 0),
('SOU006', 'Jose Fonte', '1983-12-22', 187, 'PORTUGAL', 'CB', 6, 'SOU', 530, 24, 5, 0, 0),
('SOU007', 'Shane Long', '1987-01-22', 180, 'REPUBLIC OF IRELAND', 'ST', 7, 'SOU', 464, 117, 6, 0, 0),
('SOU008', 'Steven Davis', '1985-01-01', 173, 'NORTHERN IRELAND', 'CM', 8, 'SOU', 606, 52, 12, 0, 0),
('SOU009', 'Jay Rodriguez', '1989-07-29', 185, 'ENGLAND', 'LM', 9, 'SOU', 244, 76, 3, 0, 0),
('SOU010', 'Charlie Austin', '1989-05-05', 188, 'ENGLAND', 'ST', 10, 'SOU', 380, 232, 2, 0, 0),
('SOU011', 'Dusan Tadic', '1988-11-20', 181, 'SERBIA', 'LM', 11, 'SOU', 411, 102, 3, 0, 0),
('SOU013', 'Alex McCarthy', '1989-12-03', 193, 'ENGLAND', 'GK', 13, 'SOU', 164, 0, 1, 0, 0),
('SOU014', 'Oriol Romeu', '1991-09-24', 182, 'SPAIN', 'CDM', 14, 'SOU', 210, 5, 5, 0, 0),
('SOU015', 'Cuco Martina', '1989-09-25', 185, 'CUROCAO', 'RB', 15, 'SOU', 246, 5, 0, 0, 0),
('SOU016', 'James Ward Prowse', '1994-11-01', 173, 'ENGLAND', 'CM', 16, 'SOU', 179, 12, 0, 0, 0),
('SOU017', 'Virgil van Dijk', '1991-07-08', 193, 'NETHERLANDS', 'CB', 17, 'SOU', 238, 25, 4, 0, 0),
('SOU018', 'Harrison Reed', '1995-01-27', 176, 'ENGLAND', 'CDM', 18, 'SOU', 38, 0, 0, 0, 0),
('SOU019', 'Sofiane Boufal', '1993-09-17', 175, 'MOROCCO', 'LW', 19, 'SOU', 136, 24, 0, 0, 0),
('SOU021', 'Ryan Bertrand', '1989-07-05', 179, 'ENGLAND', 'LB', 21, 'SOU', 356, 6, 4, 0, 0),
('SOU022', 'Nathan Redmond', '1994-03-06', 173, 'ENGLAND', 'RM', 22, 'SOU', 282, 37, 4, 0, 0),
('SOU023', 'Pierre Emile Hojbjerg', '1995-08-05', 185, 'DENMARK', 'CM', 23, 'SOU', 172, 27, 9, 0, 0),
('SOU026', 'Jeremy Pied', '1989-02-23', 173, 'FRANCE', 'RB', 26, 'SOU', 232, 14, 1, 0, 0),
('TOT001', 'Hugo Lloris', '1986-12-26', 188, 'FRANCE', 'GK', 1, 'TOT', 574, 0, 11, 0, 0),
('TOT002', 'Kyle Walker', '1990-05-28', 176, 'ENGLAND', 'RB', 2, 'TOT', 306, 6, 3, 0, 0),
('TOT003', 'Danny Rose', '1990-07-02', 173, 'ENGLAND', 'LB', 3, 'TOT', 244, 16, 1, 0, 0),
('TOT004', 'Toby Alderweireld', '1989-03-02', 187, 'BELGIUM', 'CB', 4, 'TOT', 393, 30, 10, 0, 0),
('TOT005', 'Jan Vertonghen', '1987-04-24', 189, 'BELGIUM', 'CB', 5, 'TOT', 519, 46, 8, 0, 0),
('TOT007', 'Heung Min Son', '1992-07-08', 183, 'KOREA', 'LM', 7, 'TOT', 285, 88, 4, 0, 0),
('TOT009', 'Vincent Janssen', '1994-06-15', 180, 'NETHERLANDS', 'ST', 9, 'TOT', 155, 80, 2, 0, 0),
('TOT010', 'Harry Kane', '1993-07-28', 188, 'ENGLAND', 'ST', 10, 'TOT', 249, 104, 9, 0, 0),
('TOT011', 'Erik Lamela', '1992-03-04', 183, 'ARGENTINA', 'RM', 11, 'TOT', 244, 50, 0, 0, 0),
('TOT012', 'Victor Wanyama', '1991-06-25', 188, 'KENYA', 'CDM', 12, 'TOT', 283, 24, 5, 0, 0),
('TOT013', 'Michel Vorm', '1983-10-20', 184, 'NETHERLANDS', 'GK', 13, 'TOT', 319, 0, 0, 0, 0),
('TOT014', 'Georges Kevin Nkoudou', '1995-02-13', 172, 'FRANCE', 'LM', 14, 'TOT', 97, 15, 0, 0, 0),
('TOT015', 'Eric Dier', '1994-01-15', 188, 'ENGLAND', 'CDM', 15, 'TOT', 177, 11, 0, 0, 0),
('TOT016', 'Kieran Trippier', '1990-09-19', 178, 'ENGLAND', 'RB', 16, 'TOT', 264, 9, 3, 0, 0),
('TOT017', 'Moussa Sissoko', '1989-08-16', 187, 'FRANCE', 'RM', 17, 'TOT', 449, 40, 0, 0, 0),
('TOT019', 'Moussa Dembele', '1987-07-16', 185, 'BELGIUM', 'CM', 19, 'TOT', 515, 74, 2, 0, 0),
('TOT020', 'Dele Alli', '1996-04-11', 188, 'ENGLAND', 'CAM', 20, 'TOT', 174, 38, 6, 0, 0),
('TOT023', 'Christian Eriksen', '1992-12-14', 182, 'DENMARK', 'CAM', 23, 'TOT', 403, 76, 19, 0, 0),
('TOT025', 'Josh Onomah', '1997-04-22', 280, 'ENGLAND', 'CAM', 25, 'TOT', 64, 7, 1, 0, 0),
('TOT027', 'Kevin Wimmer', '1992-11-15', 187, 'AUSTRIA', 'CB', 27, 'TOT', 131, 5, 0, 0, 0),
('TOT028', 'Tom Carroll', '1992-05-28', 170, 'ENGLAND', 'CM', 28, 'TOT', 138, 7, 0, 0, 0),
('TOT033', 'Ben Davies', '1993-04-24', 180, 'WALES', 'LB', 33, 'TOT', 171, 3, 1, 0, 0),
('WHM001', 'Darren Randolph', '1987-05-12', 185, 'REPUBLIC OF IRELAND', 'GK', 1, 'WHM', 360, 0, 5, 0, 0),
('WHM002', 'Winston Reid', '1988-07-03', 191, 'NEW ZEALAND', 'CB', 2, 'WHM', 297, 12, 3, 0, 0),
('WHM003', 'Aaron Cresswell', '1989-12-15', 170, 'ENGLAND', 'LB', 3, 'WHM', 307, 17, 4, 0, 0),
('WHM004', 'Havard Nordtveit', '1990-06-21', 188, 'NORWAY', 'CB', 4, 'WHM', 317, 20, 0, 0, 0),
('WHM005', 'Alvaro Arbeloa', '1983-01-17', 184, 'SPAIN', 'RB', 5, 'WHM', 504, 8, 16, 0, 0),
('WHM007', 'Sofiane Feghouli', '1989-12-26', 177, 'ALGERIA', 'RW', 7, 'WHM', 326, 48, 3, 0, 0),
('WHM008', 'Cheikhou Kouyate', '1989-12-21', 192, 'SENEGAL', 'CDM', 8, 'WHM', 353, 23, 0, 0, 0),
('WHM009', 'Andy Carroll', '1989-01-06', 193, 'ENGLAND', 'ST', 9, 'WHM', 275, 76, 4, 0, 0),
('WHM010', 'Manuel Lanzini', '1993-02-15', 167, 'ARGENTINA', 'CAM', 10, 'WHM', 202, 34, 2, 0, 0),
('WHM011', 'Simone Zaza', '1991-06-25', 186, 'ITALY', 'ST', 11, 'WHM', 181, 59, 3, 0, 0),
('WHM013', 'Adrian', '1987-01-03', 190, 'SPAIN', 'GK', 13, 'WHM', 251, 0, 0, 0, 0),
('WHM014', 'Pedro Obiang', '1992-03-27', 185, 'SPAIN', 'CDM', 14, 'WHM', 183, 4, 0, 0, 0),
('WHM015', 'Diafra Sakho', '1989-12-24', 184, 'SENEGAL', 'ST', 15, 'WHM', 185, 67, 3, 0, 0),
('WHM016', 'Mark Noble', '1987-05-08', 180, 'ENGLAND', 'CM', 16, 'WHM', 442, 48, 5, 0, 0),
('WHM017', 'Gokhan Tore', '1992-01-20', 176, 'TURKEY', 'RM', 17, 'WHM', 213, 23, 1, 0, 0),
('WHM019', 'James Collins', '1983-08-23', 188, 'WALES', 'CB', 19, 'WHM', 440, 22, 2, 0, 0),
('WHM020', 'Andre Ayew', '1989-12-17', 176, 'GHANA', 'RM', 20, 'WHM', 373, 94, 12, 0, 0),
('WHM021', 'Angelo Ogbonna', '1988-05-23', 191, 'ITALY', 'CB', 21, 'WHM', 306, 2, 4, 0, 0),
('WHM026', 'Arthur Masuaku', '1993-11-07', 179, 'FRANCE', 'LB', 26, 'WHM', 114, 3, 4, 0, 0),
('WHM027', 'Dimitri Payet', '1987-03-29', 175, 'FRANCE', 'LM', 27, 'WHM', 488, 101, 10, 0, 0),
('WHM028', 'Jonathan Calleri', '1993-09-23', 179, 'ARGENTINA', 'ST', 28, 'WHM', 130, 46, 1, 0, 0),
('WHM030', 'Michail Antonio', '1990-03-28', 180, 'ENGLAND', 'RM', 30, 'WHM', 279, 63, 2, 0, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `playerview`
--
CREATE TABLE `playerview` (
`NAME` varchar(50)
,`DOB` date
,`NATIONALITY` varchar(50)
,`POS` varchar(10)
,`CLUBID` varchar(50)
,`RATING` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `PID` varchar(10) NOT NULL,
  `RATING` int(11) NOT NULL,
  `SKILL1` int(3) NOT NULL,
  `SKILL2` int(3) NOT NULL,
  `SKILL3` int(3) NOT NULL,
  `SKILL4` int(3) NOT NULL,
  `SKILL5` int(3) NOT NULL,
  `SKILL6` int(3) NOT NULL,
  `WEAKFOOT` int(1) NOT NULL,
  `SKILLSTAR` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`PID`, `RATING`, `SKILL1`, `SKILL2`, `SKILL3`, `SKILL4`, `SKILL5`, `SKILL6`, `WEAKFOOT`, `SKILLSTAR`) VALUES
('ARS001', 89, 90, 90, 90, 90, 90, 90, 5, 5),
('ARS003', 80, 81, 57, 72, 77, 80, 72, 2, 3),
('ARS004', 83, 27, 41, 56, 48, 88, 75, 3, 2),
('ARS005', 79, 70, 54, 65, 64, 80, 76, 2, 2),
('ARS006', 85, 78, 40, 62, 65, 85, 78, 3, 2),
('ARS007', 87, 86, 82, 79, 88, 39, 74, 3, 4),
('ARS008', 84, 69, 77, 80, 81, 68, 76, 3, 3),
('ARS009', 81, 76, 83, 76, 80, 31, 72, 3, 4),
('ARS011', 89, 72, 74, 86, 86, 24, 58, 2, 4),
('ARS012', 83, 64, 82, 69, 72, 38, 83, 3, 2),
('ARS013', 79, 83, 71, 78, 84, 34, 77, 3, 1),
('ARS014', 81, 93, 77, 73, 80, 38, 66, 3, 3),
('ARS015', 79, 89, 71, 73, 84, 42, 70, 4, 4),
('ARS017', 70, 77, 59, 60, 76, 28, 64, 3, 3),
('ARS018', 81, 77, 53, 72, 75, 81, 73, 3, 2),
('ARS019', 86, 71, 78, 85, 86, 57, 64, 5, 4),
('ARS020', 83, 70, 57, 63, 60, 83, 79, 3, 2),
('ARS023', 80, 86, 75, 71, 80, 34, 79, 3, 3),
('ARS024', 79, 95, 51, 68, 77, 74, 68, 3, 3),
('ARS029', 84, 51, 66, 81, 72, 72, 77, 4, 3),
('ARS033', 88, 83, 90, 77, 85, 45, 85, 3, 1),
('ARS034', 81, 70, 54, 70, 76, 79, 81, 3, 3),
('ARS035', 74, 63, 67, 72, 69, 70, 77, 3, 3),
('CHE001', 83, 83, 81, 74, 84, 52, 80, 2, 1),
('CHE002', 80, 65, 61, 64, 61, 86, 84, 3, 2),
('CHE003', 77, 79, 66, 72, 76, 73, 79, 3, 3),
('CHE004', 86, 63, 77, 89, 81, 61, 64, 3, 3),
('CHE005', 80, 73, 50, 58, 55, 80, 81, 3, 2),
('CHE007', 81, 80, 66, 74, 77, 80, 83, 3, 3),
('CHE008', 83, 77, 75, 79, 83, 43, 46, 3, 4),
('CHE010', 88, 90, 81, 82, 91, 32, 64, 4, 4),
('CHE011', 83, 82, 76, 77, 84, 37, 62, 5, 4),
('CHE012', 78, 55, 54, 68, 67, 78, 88, 3, 2),
('CHE013', 89, 84, 91, 69, 89, 46, 86, 3, 1),
('CHE014', 68, 70, 54, 60, 67, 64, 68, 4, 2),
('CHE015', 77, 82, 71, 69, 81, 38, 69, 4, 4),
('CHE019', 85, 75, 82, 63, 77, 40, 88, 4, 3),
('CHE021', 84, 67, 70, 76, 72, 81, 88, 3, 3),
('CHE022', 85, 89, 74, 80, 86, 50, 63, 4, 4),
('CHE023', 81, 83, 80, 59, 79, 27, 73, 4, 3),
('CHE024', 83, 67, 58, 52, 61, 84, 76, 3, 2),
('CHE026', 84, 34, 47, 57, 51, 86, 80, 4, 2),
('CHE028', 84, 79, 56, 75, 74, 84, 77, 3, 3),
('CHE030', 84, 73, 64, 73, 71, 82, 79, 3, 3),
('CHE041', 69, 76, 67, 62, 73, 24, 60, 3, 3),
('EVE001', 75, 76, 74, 75, 75, 49, 74, 2, 1),
('EVE003', 83, 75, 75, 81, 77, 80, 74, 3, 3),
('EVE004', 77, 59, 68, 78, 71, 74, 74, 4, 2),
('EVE005', 83, 70, 43, 56, 62, 82, 82, 4, 2),
('EVE006', 82, 67, 46, 58, 55, 83, 81, 3, 2),
('EVE007', 81, 91, 69, 73, 87, 26, 60, 4, 4),
('EVE008', 81, 78, 73, 76, 82, 56, 75, 5, 3),
('EVE009', 75, 77, 73, 62, 74, 35, 74, 4, 3),
('EVE010', 84, 82, 82, 66, 74, 34, 84, 4, 3),
('EVE011', 81, 88, 77, 77, 83, 47, 65, 4, 4),
('EVE012', 78, 89, 65, 71, 84, 38, 63, 3, 3),
('EVE014', 78, 89, 68, 68, 84, 31, 79, 4, 5),
('EVE015', 78, 70, 69, 77, 78, 54, 64, 3, 3),
('EVE016', 81, 72, 67, 76, 76, 78, 81, 4, 3),
('EVE017', 76, 74, 58, 68, 75, 78, 78, 3, 2),
('EVE018', 80, 33, 65, 80, 66, 80, 78, 3, 2),
('EVE019', 76, 85, 76, 66, 74, 43, 70, 3, 3),
('EVE021', 76, 72, 50, 64, 74, 76, 75, 3, 2),
('EVE022', 76, 78, 73, 81, 76, 35, 74, 4, 1),
('EVE023', 82, 79, 68, 72, 78, 81, 78, 3, 3),
('EVE024', 77, 83, 75, 57, 75, 30, 73, 3, 2),
('EVE025', 77, 72, 50, 61, 65, 76, 79, 3, 2),
('LEI001', 81, 82, 78, 85, 84, 62, 78, 3, 1),
('LEI002', 78, 73, 50, 66, 65, 79, 76, 4, 2),
('LEI004', 80, 68, 67, 76, 75, 73, 74, 4, 3),
('LEI005', 79, 51, 30, 41, 56, 81, 83, 3, 2),
('LEI006', 80, 44, 54, 49, 40, 81, 86, 3, 2),
('LEI007', 78, 93, 76, 65, 82, 28, 56, 3, 4),
('LEI009', 82, 93, 80, 63, 77, 54, 79, 3, 3),
('LEI010', 72, 67, 71, 68, 70, 65, 67, 3, 2),
('LEI011', 76, 78, 69, 75, 77, 46, 69, 3, 3),
('LEI013', 71, 78, 60, 62, 68, 71, 86, 4, 2),
('LEI014', 71, 80, 62, 68, 70, 48, 55, 2, 3),
('LEI015', 71, 88, 60, 61, 74, 66, 77, 2, 2),
('LEI017', 74, 74, 38, 60, 65, 75, 75, 3, 2),
('LEI019', 83, 73, 79, 66, 73, 47, 88, 3, 2),
('LEI020', 77, 76, 75, 65, 77, 43, 74, 4, 3),
('LEI021', 81, 78, 82, 66, 82, 46, 81, 2, 1),
('LEI022', 70, 89, 64, 58, 78, 23, 52, 2, 3),
('LEI023', 74, 54, 72, 60, 67, 42, 79, 4, 2),
('LEI024', 78, 75, 55, 72, 74, 76, 80, 3, 3),
('LEI026', 85, 82, 77, 80, 88, 30, 58, 4, 5),
('LEI028', 77, 67, 69, 78, 70, 76, 77, 2, 3),
('LEI029', 75, 67, 39, 57, 54, 75, 77, 3, 2),
('LIV001', 82, 84, 76, 80, 85, 48, 80, 3, 1),
('LIV002', 81, 86, 61, 71, 78, 79, 76, 3, 3),
('LIV003', 82, 62, 33, 62, 56, 81, 84, 2, 2),
('LIV005', 81, 82, 75, 74, 84, 56, 70, 2, 3),
('LIV006', 82, 58, 40, 60, 63, 82, 81, 4, 2),
('LIV007', 81, 67, 76, 83, 77, 69, 76, 4, 3),
('LIV010', 85, 82, 74, 82, 87, 33, 56, 4, 4),
('LIV011', 82, 79, 80, 78, 84, 40, 72, 4, 4),
('LIV014', 80, 74, 70, 81, 75, 71, 80, 3, 3),
('LIV015', 84, 89, 83, 69, 81, 25, 70, 2, 3),
('LIV017', 78, 66, 48, 63, 62, 79, 77, 3, 2),
('LIV018', 77, 89, 68, 68, 79, 70, 74, 3, 2),
('LIV019', 79, 92, 73, 70, 82, 35, 67, 3, 4),
('LIV020', 82, 73, 72, 79, 83, 47, 67, 5, 4),
('LIV021', 80, 54, 39, 70, 71, 80, 78, 3, 2),
('LIV022', 78, 79, 73, 65, 84, 55, 72, 2, 1),
('LIV023', 80, 76, 66, 78, 78, 78, 82, 4, 3),
('LIV026', 75, 69, 38, 49, 58, 78, 71, 3, 2),
('LIV027', 78, 85, 74, 68, 76, 31, 73, 3, 4),
('LIV028', 77, 86, 74, 63, 78, 35, 70, 3, 3),
('LIV032', 82, 72, 46, 68, 68, 84, 76, 2, 2),
('LIV035', 72, 74, 54, 65, 66, 71, 75, 3, 3),
('MCI001', 85, 83, 85, 87, 85, 58, 78, 3, 1),
('MCI003', 82, 75, 53, 66, 74, 82, 80, 4, 3),
('MCI004', 86, 69, 54, 62, 65, 86, 81, 3, 2),
('MCI005', 82, 68, 56, 70, 74, 84, 83, 3, 3),
('MCI006', 79, 67, 61, 68, 67, 79, 82, 2, 2),
('MCI007', 82, 93, 71, 72, 86, 46, 61, 2, 4),
('MCI008', 85, 75, 72, 84, 87, 63, 72, 4, 4),
('MCI009', 83, 77, 79, 79, 84, 39, 67, 3, 4),
('MCI010', 89, 89, 88, 75, 89, 23, 70, 4, 4),
('MCI011', 79, 67, 69, 78, 74, 79, 79, 3, 2),
('MCI013', 78, 79, 75, 69, 80, 49, 78, 3, 1),
('MCI015', 80, 88, 70, 75, 83, 28, 50, 3, 3),
('MCI017', 89, 78, 85, 87, 86, 42, 77, 4, 4),
('MCI018', 78, 78, 69, 74, 82, 68, 74, 3, 3),
('MCI019', 79, 91, 75, 70, 83, 34, 64, 3, 3),
('MCI021', 87, 68, 72, 87, 87, 32, 58, 2, 4),
('MCI022', 80, 83, 43, 65, 73, 79, 68, 4, 2),
('MCI024', 78, 75, 35, 65, 71, 78, 76, 3, 2),
('MCI025', 81, 77, 75, 76, 78, 76, 78, 4, 3),
('MCI030', 85, 72, 56, 56, 53, 85, 82, 3, 2),
('MCI042', 84, 74, 83, 81, 77, 69, 84, 4, 3),
('MCI072', 74, 87, 73, 61, 74, 22, 67, 3, 3),
('MUN001', 90, 88, 85, 87, 90, 56, 85, 3, 1),
('MUN003', 82, 81, 41, 53, 59, 82, 83, 3, 2),
('MUN006', 89, 78, 82, 86, 88, 75, 88, 4, 5),
('MUN007', 80, 90, 77, 72, 84, 30, 76, 2, 4),
('MUN008', 84, 68, 75, 84, 85, 32, 54, 3, 3),
('MUN009', 90, 72, 90, 81, 85, 31, 86, 4, 4),
('MUN010', 84, 71, 84, 81, 79, 53, 86, 4, 3),
('MUN011', 82, 91, 79, 70, 87, 42, 76, 4, 4),
('MUN012', 84, 77, 46, 56, 62, 84, 84, 3, 2),
('MUN016', 81, 52, 66, 80, 73, 76, 67, 3, 2),
('MUN017', 81, 61, 56, 77, 76, 81, 76, 4, 2),
('MUN018', 79, 81, 72, 76, 81, 52, 58, 3, 4),
('MUN020', 79, 76, 70, 81, 82, 44, 76, 3, 1),
('MUN021', 82, 72, 72, 81, 84, 64, 71, 4, 4),
('MUN022', 85, 83, 77, 81, 87, 55, 70, 5, 4),
('MUN023', 80, 82, 51, 70, 78, 79, 79, 2, 2),
('MUN025', 80, 84, 65, 73, 79, 76, 83, 1, 3),
('MUN027', 78, 55, 73, 69, 73, 78, 90, 3, 3),
('MUN031', 83, 51, 76, 83, 75, 75, 74, 3, 3),
('MUN035', 77, 83, 68, 71, 79, 49, 62, 3, 3),
('MUN036', 80, 80, 58, 69, 76, 80, 75, 5, 3),
('MUN039', 76, 90, 73, 66, 79, 31, 65, 3, 3),
('SOU001', 78, 75, 80, 74, 82, 32, 77, 5, 1),
('SOU002', 78, 78, 68, 72, 76, 75, 72, 4, 2),
('SOU003', 73, 66, 41, 48, 62, 74, 74, 4, 2),
('SOU004', 78, 66, 51, 80, 76, 66, 74, 4, 2),
('SOU005', 74, 55, 48, 56, 60, 75, 76, 3, 2),
('SOU006', 83, 54, 35, 52, 62, 84, 79, 3, 2),
('SOU007', 77, 84, 74, 60, 75, 37, 81, 3, 3),
('SOU008', 77, 67, 61, 77, 77, 66, 74, 3, 3),
('SOU009', 77, 82, 77, 69, 77, 32, 69, 4, 3),
('SOU010', 78, 70, 79, 56, 68, 40, 76, 2, 2),
('SOU011', 79, 71, 68, 80, 83, 37, 66, 2, 4),
('SOU013', 76, 78, 73, 61, 81, 58, 74, 2, 1),
('SOU014', 74, 60, 38, 64, 61, 72, 79, 3, 2),
('SOU015', 70, 73, 53, 57, 63, 73, 74, 3, 2),
('SOU016', 76, 68, 61, 83, 74, 61, 68, 3, 3),
('SOU017', 79, 67, 61, 65, 67, 79, 83, 3, 2),
('SOU018', 68, 68, 51, 66, 65, 62, 69, 3, 2),
('SOU019', 80, 85, 73, 72, 87, 36, 49, 4, 5),
('SOU021', 79, 78, 46, 70, 75, 78, 73, 3, 2),
('SOU022', 75, 86, 68, 69, 79, 24, 49, 3, 4),
('SOU023', 74, 68, 62, 72, 75, 68, 76, 4, 3),
('SOU026', 75, 78, 72, 75, 75, 72, 73, 3, 3),
('TOT001', 88, 87, 87, 68, 90, 65, 82, 1, 1),
('TOT002', 81, 90, 63, 72, 73, 78, 81, 2, 2),
('TOT003', 80, 82, 63, 71, 77, 78, 77, 3, 3),
('TOT004', 85, 66, 58, 70, 64, 86, 79, 3, 2),
('TOT005', 83, 67, 67, 70, 68, 83, 81, 3, 2),
('TOT007', 82, 88, 85, 75, 83, 27, 65, 5, 3),
('TOT009', 78, 74, 80, 52, 70, 24, 79, 4, 2),
('TOT010', 84, 73, 84, 71, 78, 42, 81, 3, 3),
('TOT011', 81, 79, 78, 79, 84, 43, 65, 2, 4),
('TOT012', 78, 66, 66, 67, 72, 78, 89, 3, 2),
('TOT013', 80, 79, 76, 76, 84, 57, 77, 3, 1),
('TOT014', 78, 92, 72, 70, 79, 35, 62, 3, 3),
('TOT015', 78, 61, 60, 71, 62, 79, 82, 3, 2),
('TOT016', 77, 78, 56, 73, 72, 74, 73, 4, 3),
('TOT017', 80, 81, 74, 75, 78, 72, 85, 2, 3),
('TOT019', 82, 77, 72, 75, 83, 73, 84, 2, 4),
('TOT020', 80, 75, 74, 74, 78, 61, 77, 3, 3),
('TOT023', 84, 76, 76, 84, 84, 44, 59, 5, 4),
('TOT025', 70, 81, 57, 65, 73, 35, 48, 3, 3),
('TOT027', 79, 67, 27, 61, 64, 79, 75, 3, 2),
('TOT028', 72, 68, 58, 74, 70, 52, 45, 2, 3),
('TOT033', 78, 78, 50, 70, 73, 77, 71, 3, 2),
('WHM001', 74, 76, 71, 74, 77, 41, 71, 3, 1),
('WHM002', 81, 73, 52, 49, 50, 82, 81, 3, 2),
('WHM003', 76, 78, 59, 71, 75, 73, 67, 3, 2),
('WHM004', 79, 66, 53, 71, 66, 79, 79, 3, 2),
('WHM005', 76, 68, 55, 67, 59, 80, 74, 3, 2),
('WHM007', 80, 88, 73, 72, 84, 32, 62, 3, 4),
('WHM008', 77, 77, 65, 61, 69, 77, 87, 3, 2),
('WHM009', 78, 67, 78, 62, 68, 49, 86, 3, 2),
('WHM010', 79, 82, 70, 76, 85, 26, 53, 3, 4),
('WHM011', 80, 80, 80, 59, 77, 38, 77, 3, 3),
('WHM013', 80, 80, 78, 71, 86, 46, 75, 2, 1),
('WHM014', 76, 68, 59, 74, 72, 74, 76, 3, 2),
('WHM015', 76, 79, 73, 58, 73, 31, 74, 3, 3),
('WHM016', 78, 55, 67, 77, 74, 71, 78, 3, 3),
('WHM017', 79, 86, 71, 76, 85, 36, 76, 4, 4),
('WHM019', 76, 40, 47, 53, 45, 76, 79, 3, 2),
('WHM020', 80, 78, 74, 76, 81, 63, 79, 3, 3),
('WHM021', 80, 72, 40, 58, 59, 83, 77, 3, 2),
('WHM026', 75, 84, 70, 70, 77, 71, 73, 2, 2),
('WHM027', 86, 77, 78, 87, 87, 42, 70, 4, 4),
('WHM028', 77, 76, 74, 61, 73, 39, 74, 2, 3),
('WHM030', 76, 87, 73, 67, 79, 52, 80, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `CLUB` varchar(50) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`CLUB`, `DATE`, `TIME`) VALUES
('Arsenal', '2016-11-17', '15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `CATEGORY` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `logged` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USERNAME`, `PASSWORD`, `CATEGORY`, `DOB`, `STATUS`, `logged`) VALUES
('ADMIN', '2c9341ca4cf3d87b9e4eb905d6a3ec45', 'Admin', '2016-01-01', 1, 0),
('ARS001', '2c9341ca4cf3d87b9e4eb905d6a3ec45', 'Player', '1995-12-28', 1, 1),
('ARS003', '', 'Player', '1989-09-26', 0, 0),
('ARS004', '', 'Player', '1984-09-29', 0, 0),
('ARS005', '', 'Player', '1990-11-26', 0, 0),
('ARS006', '', 'Player', '1985-09-10', 0, 0),
('ARS007', '', 'Player', '1988-12-19', 0, 0),
('ARS008', '', 'Player', '1990-12-26', 0, 0),
('ARS009', '', 'Player', '1988-09-10', 0, 0),
('ARS011', '', 'Player', '1988-10-15', 0, 0),
('ARS012', '', 'Player', '1986-09-30', 0, 0),
('ARS013', '', 'Player', '1988-08-31', 0, 0),
('ARS014', '', 'Player', '1989-03-16', 0, 0),
('ARS015', '', 'Player', '1993-08-15', 0, 0),
('ARS017', '', 'Player', '1996-05-03', 0, 0),
('ARS018', '', 'Player', '1986-02-26', 0, 0),
('ARS019', '', 'Player', '1984-12-13', 0, 0),
('ARS020', '', 'Player', '1992-04-17', 0, 0),
('ARS023', '', 'Player', '1990-11-26', 0, 0),
('ARS024', '', 'Player', '1995-03-19', 0, 0),
('ARS029', '', 'Player', '1992-09-27', 0, 0),
('ARS033', '', 'Player', '1982-05-20', 0, 0),
('ARS034', '', 'Player', '1991-05-13', 0, 0),
('ARS035', '', 'Player', '1992-07-11', 0, 0),
('ARSMGR', '2c9341ca4cf3d87b9e4eb905d6a3ec45', 'Manager', '1949-10-22', 1, 0),
('CHE001', '', 'Player', '1987-06-20', 0, 0),
('CHE002', '', 'Player', '1984-02-22', 0, 0),
('CHE003', '', 'Player', '1990-12-20', 0, 0),
('CHE004', '', 'Player', '1987-05-04', 0, 0),
('CHE005', '', 'Player', '1994-10-27', 0, 0),
('CHE007', '', 'Player', '1991-03-29', 0, 0),
('CHE008', '', 'Player', '1991-09-09', 0, 0),
('CHE010', '', 'Player', '1991-01-07', 0, 0),
('CHE011', '', 'Player', '1987-07-28', 0, 0),
('CHE012', '', 'Player', '1987-04-22', 0, 0),
('CHE013', '', 'Player', '1992-05-11', 0, 0),
('CHE014', '', 'Player', '1996-01-23', 0, 0),
('CHE015', '', 'Player', '1990-12-12', 0, 0),
('CHE019', '', 'Player', '1988-10-07', 0, 0),
('CHE021', '', 'Player', '1988-08-01', 0, 0),
('CHE022', '', 'Player', '1988-08-09', 0, 0),
('CHE023', '', 'Player', '1993-10-02', 0, 0),
('CHE024', '', 'Player', '1985-12-19', 0, 0),
('CHE026', '', 'Player', '1980-12-07', 0, 0),
('CHE028', '', 'Player', '1989-08-28', 0, 0),
('CHE030', '', 'Player', '1987-04-22', 0, 0),
('CHE041', '', 'Player', '1997-09-14', 0, 0),
('CHEMGR', '', 'Manager', '1969-07-31', 0, 0),
('EVE001', '', 'Player', '1990-06-17', 0, 0),
('EVE003', '', 'Player', '1984-12-11', 0, 0),
('EVE004', '', 'Player', '1987-10-25', 0, 0),
('EVE005', '', 'Player', '1984-08-23', 0, 0),
('EVE006', '', 'Player', '1982-08-17', 0, 0),
('EVE007', '', 'Player', '1994-03-13', 0, 0),
('EVE008', '', 'Player', '1993-12-05', 0, 0),
('EVE009', '', 'Player', '1983-11-11', 0, 0),
('EVE010', '', 'Player', '1993-05-13', 0, 0),
('EVE011', '', 'Player', '1987-10-05', 0, 0),
('EVE012', '', 'Player', '1987-04-16', 0, 0),
('EVE014', '', 'Player', '1989-05-24', 0, 0),
('EVE015', '', 'Player', '1989-08-12', 0, 0),
('EVE016', '', 'Player', '1990-11-12', 0, 0),
('EVE017', '', 'Player', '1989-09-26', 0, 0),
('EVE018', '', 'Player', '1985-02-23', 0, 0),
('EVE019', '', 'Player', '1989-11-04', 0, 0),
('EVE021', '', 'Player', '1992-09-10', 0, 0),
('EVE022', '', 'Player', '1982-09-22', 0, 0),
('EVE023', '', 'Player', '1988-10-11', 0, 0),
('EVE024', '', 'Player', '1990-04-18', 0, 0),
('EVE025', '', 'Player', '1991-03-05', 0, 0),
('EVEMGR', '', 'Manager', '1963-03-21', 0, 0),
('LEI001', '', 'Player', '1986-12-05', 0, 0),
('LEI002', '', 'Player', '1989-04-14', 0, 0),
('LEI004', '', 'Player', '1990-03-05', 0, 0),
('LEI005', '', 'Player', '1984-01-21', 0, 0),
('LEI006', '', 'Player', '1984-08-18', 0, 0),
('LEI007', '', 'Player', '1992-10-14', 0, 0),
('LEI009', '', 'Player', '1987-01-11', 0, 0),
('LEI010', '', 'Player', '1988-10-29', 0, 0),
('LEI011', '', 'Player', '1989-11-18', 0, 0),
('LEI013', '', 'Player', '1994-12-21', 0, 0),
('LEI014', '', 'Player', '1996-12-23', 0, 0),
('LEI015', '', 'Player', '1992-12-23', 0, 0),
('LEI017', '', 'Player', '1987-01-04', 0, 0),
('LEI019', '', 'Player', '1988-06-18', 0, 0),
('LEI020', '', 'Player', '1986-04-16', 0, 0),
('LEI021', '', 'Player', '1989-02-12', 0, 0),
('LEI022', '', 'Player', '1996-06-28', 0, 0),
('LEI023', '', 'Player', '1986-07-26', 0, 0),
('LEI024', '', 'Player', '1992-06-23', 0, 0),
('LEI026', '', 'Player', '1991-02-21', 0, 0),
('LEI028', '', 'Player', '1986-04-07', 0, 0),
('LEI029', '', 'Player', '1987-03-24', 0, 0),
('LEIMGR', '', 'Manager', '1951-10-20', 0, 0),
('LIV001', '', 'Player', '1993-06-22', 0, 0),
('LIV002', '', 'Player', '1991-04-05', 0, 0),
('LIV003', '', 'Player', '1990-02-13', 0, 0),
('LIV005', '', 'Player', '1990-11-11', 0, 0),
('LIV006', '', 'Player', '1989-07-05', 0, 0),
('LIV007', '', 'Player', '1986-01-04', 0, 0),
('LIV010', '', 'Player', '1992-06-12', 0, 0),
('LIV011', '', 'Player', '1991-10-02', 0, 0),
('LIV014', '', 'Player', '1990-06-17', 0, 0),
('LIV015', '', 'Player', '1989-09-01', 0, 0),
('LIV017', '', 'Player', '1985-10-30', 0, 0),
('LIV018', '', 'Player', '1992-07-05', 0, 0),
('LIV019', '', 'Player', '1992-04-10', 0, 0),
('LIV020', '', 'Player', '1988-05-10', 0, 0),
('LIV021', '', 'Player', '1987-01-09', 0, 0),
('LIV022', '', 'Player', '1988-03-06', 0, 0),
('LIV023', '', 'Player', '1994-01-12', 0, 0),
('LIV026', '', 'Player', '1993-02-26', 0, 0),
('LIV027', '', 'Player', '1995-04-18', 0, 0),
('LIV028', '', 'Player', '1992-07-23', 0, 0),
('LIV032', '', 'Player', '1991-08-08', 0, 0),
('LIV035', '', 'Player', '1993-09-07', 0, 0),
('LIVMGR', '', 'Manager', '1967-06-16', 0, 0),
('MCI001', '', 'Player', '1983-04-13', 0, 0),
('MCI003', '', 'Player', '1983-02-14', 0, 0),
('MCI004', '', 'Player', '1986-04-10', 0, 0),
('MCI005', '', 'Player', '1985-01-16', 0, 0),
('MCI006', '', 'Player', '1989-07-25', 0, 0),
('MCI007', '', 'Player', '1994-12-08', 0, 0),
('MCI008', '', 'Player', '1990-10-24', 0, 0),
('MCI009', '', 'Player', '1986-10-15', 0, 0),
('MCI010', '', 'Player', '1988-06-02', 0, 0),
('MCI011', '', 'Player', '1985-11-10', 0, 0),
('MCI013', '', 'Player', '1981-09-28', 0, 0),
('MCI015', '', 'Player', '1985-11-21', 0, 0),
('MCI017', '', 'Player', '1991-06-28', 0, 0),
('MCI018', '', 'Player', '1989-11-21', 0, 0),
('MCI019', '', 'Player', '1996-01-11', 0, 0),
('MCI021', '', 'Player', '1986-01-08', 0, 0),
('MCI022', '', 'Player', '1985-07-26', 0, 0),
('MCI024', '', 'Player', '1994-05-28', 0, 0),
('MCI025', '', 'Player', '1985-05-04', 0, 0),
('MCI030', '', 'Player', '1988-02-12', 0, 0),
('MCI042', '', 'Player', '1983-05-13', 0, 0),
('MCI072', '', 'Player', '1996-10-03', 0, 0),
('MCIMGR', '', 'Manager', '1971-01-18', 0, 0),
('MUN001', '', 'Player', '1990-11-07', 0, 0),
('MUN003', '', 'Player', '1994-04-12', 0, 0),
('MUN006', '', 'Player', '1993-03-15', 0, 0),
('MUN007', '', 'Player', '1994-02-13', 0, 0),
('MUN008', '', 'Player', '1988-04-28', 0, 0),
('MUN009', '', 'Player', '1981-10-03', 0, 0),
('MUN010', '', 'Player', '1985-10-24', 0, 0),
('MUN011', '', 'Player', '1995-12-05', 0, 0),
('MUN012', '', 'Player', '1989-11-22', 0, 0),
('MUN016', '', 'Player', '1981-07-28', 0, 0),
('MUN017', '', 'Player', '1990-03-09', 0, 0),
('MUN018', '', 'Player', '1985-07-09', 0, 0),
('MUN020', '', 'Player', '1987-02-22', 0, 0),
('MUN021', '', 'Player', '1989-08-14', 0, 0),
('MUN022', '', 'Player', '1989-01-21', 0, 0),
('MUN023', '', 'Player', '1995-07-12', 0, 0),
('MUN025', '', 'Player', '1985-08-04', 0, 0),
('MUN027', '', 'Player', '1987-11-22', 0, 0),
('MUN031', '', 'Player', '1984-08-01', 0, 0),
('MUN035', '', 'Player', '1992-12-15', 0, 0),
('MUN036', '', 'Player', '1989-12-02', 0, 0),
('MUN039', '', 'Player', '1997-10-31', 0, 0),
('MUNMGR', '', 'Manager', '1953-01-26', 0, 0),
('SOU001', '', 'Player', '1988-03-17', 0, 0),
('SOU002', '', 'Player', '1991-08-31', 0, 0),
('SOU003', '', 'Player', '1988-08-24', 0, 0),
('SOU004', '', 'Player', '1991-06-27', 0, 0),
('SOU005', '', 'Player', '1988-10-29', 0, 0),
('SOU006', '', 'Player', '1983-12-22', 0, 0),
('SOU007', '', 'Player', '1987-01-22', 0, 0),
('SOU008', '', 'Player', '1985-01-01', 0, 0),
('SOU009', '', 'Player', '1989-07-29', 0, 0),
('SOU010', '', 'Player', '1989-05-05', 0, 0),
('SOU011', '', 'Player', '1988-11-20', 0, 0),
('SOU013', '', 'Player', '1989-12-03', 0, 0),
('SOU014', '', 'Player', '1991-09-24', 0, 0),
('SOU015', '', 'Player', '1989-09-25', 0, 0),
('SOU016', '', 'Player', '1994-11-01', 0, 0),
('SOU017', '', 'Player', '1991-07-08', 0, 0),
('SOU018', '', 'Player', '1995-01-27', 0, 0),
('SOU019', '', 'Player', '1993-09-17', 0, 0),
('SOU021', '', 'Player', '1989-07-05', 0, 0),
('SOU022', '', 'Player', '1994-03-06', 0, 0),
('SOU023', '', 'Player', '1995-08-05', 0, 0),
('SOU026', '', 'Player', '1989-02-23', 0, 0),
('SOUMGR', '', 'Manager', '1961-09-02', 0, 0),
('TOT001', '', 'Player', '1986-12-26', 0, 0),
('TOT002', '', 'Player', '1990-05-28', 0, 0),
('TOT003', '', 'Player', '1990-07-02', 0, 0),
('TOT004', '', 'Player', '1989-03-02', 0, 0),
('TOT005', '', 'Player', '1987-04-24', 0, 0),
('TOT007', '', 'Player', '1992-07-08', 0, 0),
('TOT009', '', 'Player', '1994-06-15', 0, 0),
('TOT010', '', 'Player', '1993-07-28', 0, 0),
('TOT011', '', 'Player', '1992-03-04', 0, 0),
('TOT012', '', 'Player', '1991-06-25', 0, 0),
('TOT013', '', 'Player', '1983-10-20', 0, 0),
('TOT014', '', 'Player', '1995-02-13', 0, 0),
('TOT015', '', 'Player', '1994-01-15', 0, 0),
('TOT016', '', 'Player', '1990-09-19', 0, 0),
('TOT017', '', 'Player', '1989-08-16', 0, 0),
('TOT019', '', 'Player', '1987-07-16', 0, 0),
('TOT020', '', 'Player', '1996-04-11', 0, 0),
('TOT023', '', 'Player', '1992-12-14', 0, 0),
('TOT025', '', 'Player', '1997-04-22', 0, 0),
('TOT027', '', 'Player', '1992-11-15', 0, 0),
('TOT028', '', 'Player', '1992-05-28', 0, 0),
('TOT033', '', 'Player', '1993-04-24', 0, 0),
('TOTMGR', '', 'Manager', '1972-03-02', 0, 0),
('WHM001', '', 'Player', '1987-05-12', 0, 0),
('WHM002', '', 'Player', '1988-07-03', 0, 0),
('WHM003', '', 'Player', '1989-12-15', 0, 0),
('WHM004', '', 'Player', '1990-06-21', 0, 0),
('WHM005', '', 'Player', '1983-01-17', 0, 0),
('WHM007', '', 'Player', '1989-12-26', 0, 0),
('WHM008', '', 'Player', '1989-12-21', 0, 0),
('WHM009', '', 'Player', '1989-01-06', 0, 0),
('WHM010', '', 'Player', '1993-02-15', 0, 0),
('WHM011', '', 'Player', '1991-06-25', 0, 0),
('WHM013', '', 'Player', '1987-01-03', 0, 0),
('WHM014', '', 'Player', '1992-03-27', 0, 0),
('WHM015', '', 'Player', '1989-12-24', 0, 0),
('WHM016', '', 'Player', '1987-05-08', 0, 0),
('WHM017', '', 'Player', '1992-01-20', 0, 0),
('WHM019', '', 'Player', '1983-08-23', 0, 0),
('WHM020', '', 'Player', '1989-12-17', 0, 0),
('WHM021', '', 'Player', '1988-05-23', 0, 0),
('WHM026', '', 'Player', '1993-11-07', 0, 0),
('WHM027', '', 'Player', '1987-03-29', 0, 0),
('WHM028', '', 'Player', '1993-09-23', 0, 0),
('WHM030', '', 'Player', '1990-03-28', 0, 0),
('WHMMGR', '', 'Manager', '1968-09-11', 0, 0);

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `after_login` AFTER UPDATE ON `users` FOR EACH ROW BEGIN
DECLARE msg varchar(200);
IF NEW.logged=1
THEN SET msg=CONCAT(cast(NEW.USERNAME as CHAR));
INSERT INTO log (NAME,TIMES,ACTION) values(msg,NOW(),'logged in');
END IF;
IF NEW.logged=0
THEN SET msg=CONCAT(cast(NEW.USERNAME as CHAR));
INSERT INTO log (NAME,TIMES,ACTION) values(msg,NOW(),'logged out');
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure for view `playerview`
--
DROP TABLE IF EXISTS `playerview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `playerview`  AS  select `players`.`NAME` AS `NAME`,`players`.`DOB` AS `DOB`,`players`.`NATIONALITY` AS `NATIONALITY`,`players`.`POS` AS `POS`,`players`.`CLUBID` AS `CLUBID`,`skills`.`RATING` AS `RATING` from (`players` join `skills` on((`players`.`PID` = `skills`.`PID`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2014finalpoints`
--
ALTER TABLE `2014finalpoints`
  ADD UNIQUE KEY `TEAM` (`TEAM`);

--
-- Indexes for table `2015finalpoints`
--
ALTER TABLE `2015finalpoints`
  ADD UNIQUE KEY `TEAM` (`TEAM`);

--
-- Indexes for table `2016finalpoints`
--
ALTER TABLE `2016finalpoints`
  ADD UNIQUE KEY `TEAM` (`TEAM`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`PID`,`MGRID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`CMTID`),
  ADD KEY `CMTID` (`CMTID`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`CLUBID`);

--
-- Indexes for table `fixtures`
--
ALTER TABLE `fixtures`
  ADD PRIMARY KEY (`MATCHID`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`MGRID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`PID`),
  ADD UNIQUE KEY `PID` (`PID`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`CLUB`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USERNAME`),
  ADD UNIQUE KEY `username` (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `CMTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
