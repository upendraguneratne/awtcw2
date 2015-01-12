-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2015 at 08:19 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `awtweb`
--
CREATE DATABASE IF NOT EXISTS `awtweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `awtweb`;

-- --------------------------------------------------------

--
-- Table structure for table `activitylog`
--

CREATE TABLE IF NOT EXISTS `activitylog` (
  `activityid` int(10) NOT NULL,
  `activityname` varchar(100) NOT NULL,
  `userid` int(10) NOT NULL,
  PRIMARY KEY (`activityid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answerid` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `questionid` int(10) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `posteddate` datetime NOT NULL,
  `upvotes` int(10) DEFAULT '0',
  `downvotes` int(10) DEFAULT '0',
  PRIMARY KEY (`answerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answerid`, `userid`, `questionid`, `answer`, `posteddate`, `upvotes`, `downvotes`) VALUES
(16, 5, 19, 'mmm', '2015-01-11 17:21:18', 0, 0),
(17, 5, 19, 'mmm', '2015-01-11 17:22:06', 0, 0),
(18, 5, 19, 'mmm', '2015-01-11 17:22:31', 0, 0),
(19, 5, 19, 'mmm', '2015-01-11 17:22:37', 0, 0),
(20, 5, 18, 'lllllllloppkmpo[''', '2015-01-11 17:23:18', 0, 0),
(21, 5, 18, 'lllllllloppkmpo[''', '2015-01-11 17:23:22', 0, 0),
(22, 5, 18, 'lllllllloppkmpo[''', '2015-01-11 17:23:35', 0, 0),
(23, 5, 12, 'mmmmmm', '2015-01-11 17:24:07', 0, 0),
(24, 5, 14, 'mmmmm', '2015-01-11 17:25:53', 0, 0),
(25, 5, 14, 'mmmmm', '2015-01-11 17:25:58', 0, 0),
(26, 5, 18, 'wfsdfdsgfdgwer', '2015-01-11 17:29:33', 0, 0),
(27, 5, 18, 'wfsdfdsgfdgwer', '2015-01-11 17:29:41', 0, 0),
(28, 5, 19, 'mnknkn', '2015-01-11 18:12:38', 0, 0),
(29, 5, 19, 'mnknkn', '2015-01-11 18:12:42', 0, 0),
(30, 5, 19, 'aaaaaaaaaaa', '2015-01-11 18:12:54', 0, 0),
(31, 5, 19, 'aaaaaaaaaaa', '2015-01-11 18:12:59', 0, 0),
(32, 5, 19, 'aaaaaaaaaaa', '2015-01-11 18:13:02', 0, 0),
(33, 5, 19, 'aaaaaaaaaaa', '2015-01-11 18:13:06', 0, 0),
(34, 5, 11, 'Hello\r\n', '2015-01-11 22:50:50', 0, 0),
(35, 11, 20, 'The Arrow', '2015-01-12 00:13:57', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryid` int(10) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(50) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`) VALUES
(1, 'ab'),
(2, 'cc'),
(3, 'cc'),
(4, 'ccfcgf'),
(5, 'Diabetes');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) NOT NULL,
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('b46073c966929e239c812d15eba8780a', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421030504, 'a:5:{s:9:"user_data";s:0:"";s:6:"userid";i:0;s:8:"username";s:5:"Guest";s:8:"lastname";s:6:"Perera";s:3:"qid";s:2:"19";}');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `login_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `session_id` varchar(40) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `remember_me` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`login_id`, `user_id`, `session_id`, `email`, `password`, `remember_me`) VALUES
(1, 1, '98d60fcfa847b357b14a97d1466647c2', 'upendra@hotmail.com', '123456', '0'),
(2, 2, 'cdf69f352c678c331cab510320b04ca0', 'harin@yahooo.com', '123456', '0'),
(3, 3, 'eefd3c1b174c4dad3f7010d88e70f677', 'upe_92@live.com', 'simba922', '0'),
(4, 4, '7b908b7be846c0c46841ba8839bc4f18', 'vichitra@sd', '123', '0'),
(5, 5, '1178c8a9f068e87269e993e2e2059cc2', 'nalin@yahoo.com', '123', '0'),
(6, 6, 'ecbea60b14aa29c0741fd9a76a97ef69', 'sumal@gmail.com', '123', '0'),
(7, 7, '001b3264a48a1a688f5479e89bcb0d64', 'alan@yahoo.com', '12345', '0'),
(8, 8, 'b3724dfaa14c5c168add9f5784a0d4a7', 'zain@yahoo.com', '123', '0'),
(9, 9, '77e57d3a395eaf4d9c98f72a216e0a29', 'samantha@gmail.com', '123456', '0'),
(10, 10, '061b4fa00d42e1a52b1a2da9df615d48', 'buddhika@gmail.com', '1234', '0'),
(11, 11, 'f56efa65a53b7b064fcbeed5ea7dc11f', 'arrow@yahoo.com', '123', '0'),
(12, 12, 'f56efa65a53b7b064fcbeed5ea7dc11f', 'batman@gmail.com', '123', '0'),
(13, 13, '405b3d00dec6e22af4fe913001c3a9aa', 'superman@gmail.com', '123', '0');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `questionid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `posteddate` datetime NOT NULL,
  `userid` int(10) NOT NULL,
  `categoryid` int(10) NOT NULL,
  `views` int(10) DEFAULT '0',
  `noofanswers` int(10) DEFAULT '0',
  PRIMARY KEY (`questionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionid`, `title`, `description`, `posteddate`, `userid`, `categoryid`, `views`, `noofanswers`) VALUES
(1, 'what are the symptoms of gastritis?', 'dfdfsfhr', '2014-12-28 10:49:49', 1, 1, 0, 0),
(2, 'What is the ideal BMI?', 'rdegwwewr', '2014-12-28 11:02:17', 1, 4, 0, 0),
(3, 'gdgtdfg', 'dstudrudetrdg', '2014-12-28 11:04:07', 1, 4, 0, 0),
(4, 'What is best food?', 'ewrfqrqgtqet', '2014-12-28 11:05:03', 1, 1, 0, 0),
(5, 'what are the symptoms of gastritis?', 'retwjusgst', '2014-12-28 11:13:28', 1, 2, 0, 0),
(6, '1111what are the symptoms of gastritis?', 'retwjusgst', '2014-12-28 11:14:16', 1, 2, 0, 0),
(7, '1111what are the symptoms of gastritis?', 'retwjusgst', '2014-12-28 11:18:47', 4, 2, 0, 0),
(8, 'What is best food?', 'sfdasfsfsd', '2014-12-28 11:19:31', 2, 1, 0, 0),
(9, 'What is best food?', 'dsfgsfdgfd', '2014-12-28 11:21:30', 1, 1, 10, 0),
(10, 'abc', 'efghijk', '2015-01-04 10:29:54', 5, 1, 1, 0),
(11, 'How to compare [32]byte with []byte in golang?', 'want to compare output of sha256.Sum256() which is [32]byte with a []byte. I am getting an error "mismatched types [32]byte and []byte". I am not able to convert []byte to [32]byte. Is there a ..', '2015-01-04 10:31:49', 5, 2, 6, 1),
(12, 'ssssssssssss', 'ddddddddddd', '2015-01-04 10:32:58', 5, 1, 3, 1),
(13, '555', '585', '2015-01-04 10:34:31', 5, 1, 1, 0),
(14, 'Python: Using oswalk in first function to find files, pass name, then trying to open in second funct', 'wqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqdsfsdf', '2015-01-04 10:35:48', 6, 2, 6, 2),
(15, 'Basic laravel auth cannot login', 'I have id and password, in table account. I''ll login with id and password. And the results is bad auth.php ''driver'' => ''database'', ''model'' => ''Pass'', ''table'' => ''account'', models/Pass.php ...', '2015-01-04 10:48:16', 7, 1, 1, 0),
(16, 'Continuous Write to a Text File', 'ould it be possible to create a program in c++ that would write to a textfile and then infinitely write to that textfile until the disk drive that it is on runs out of space? I would really like to ..', '2015-01-04 16:27:26', 8, 1, 2, 0),
(17, 'Is michael buble a DJ?? ', 'Is he really a DJ?? LEt me know please :) ', '2015-01-04 17:23:06', 8, 2, 2, 0),
(18, 'How to get Google cloud pricing details programmatically?', 'Can anybody please tell me how can I programmatically get Google Cloud pricing details (pricing for Google Compute Engine, Google Cloud Storage , Google Cloud SQL etc) from Google Cloud website?\r\n\r\nDo', '2015-01-11 08:36:16', 9, 2, 54, 5),
(19, 'CSV text downloading all in one line instead of new lines', 'sdsafasgaasgasdsd', '2015-01-11 14:52:30', 5, 1, 31, 11),
(20, 'Who am I?', 'asdasfadgadg', '2015-01-12 00:13:48', 11, 1, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tagdetail`
--

CREATE TABLE IF NOT EXISTS `tagdetail` (
  `tagdetailid` int(10) NOT NULL AUTO_INCREMENT,
  `questionid` int(10) NOT NULL,
  `tagmasterid` int(10) NOT NULL,
  PRIMARY KEY (`tagdetailid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `tagdetail`
--

INSERT INTO `tagdetail` (`tagdetailid`, `questionid`, `tagmasterid`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 3, 4),
(5, 3, 5),
(6, 3, 6),
(7, 4, 7),
(8, 4, 8),
(9, 4, 9),
(10, 4, 10),
(11, 8, 14),
(12, 8, 15),
(13, 8, 16),
(14, 8, 17),
(15, 9, 4),
(16, 9, 5),
(17, 9, 6),
(18, 9, 18),
(19, 10, 19),
(20, 10, 20),
(21, 11, 21),
(22, 11, 22),
(23, 11, 23),
(24, 11, 24),
(25, 12, 25),
(26, 12, 26),
(27, 12, 27),
(28, 12, 27),
(29, 13, 28),
(30, 14, 29),
(31, 14, 30),
(32, 14, 31),
(33, 14, 32),
(34, 15, 33),
(35, 15, 23),
(36, 15, 34),
(37, 15, 35),
(38, 16, 36),
(39, 16, 34),
(40, 16, 37),
(41, 17, 38),
(42, 17, 39),
(43, 17, 40),
(44, 18, 41),
(45, 18, 42),
(46, 18, 43),
(47, 19, 44),
(48, 19, 45),
(49, 20, 46);

-- --------------------------------------------------------

--
-- Table structure for table `tagmaster`
--

CREATE TABLE IF NOT EXISTS `tagmaster` (
  `tagid` int(11) NOT NULL AUTO_INCREMENT,
  `tagname` varchar(200) NOT NULL,
  PRIMARY KEY (`tagid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `tagmaster`
--

INSERT INTO `tagmaster` (`tagid`, `tagname`) VALUES
(1, 'gastritis'),
(2, 'stomach'),
(3, 'ssss'),
(4, 'a'),
(5, 'b'),
(6, 'c'),
(7, 'a1'),
(8, 'b1'),
(9, 'c1'),
(10, 'a11'),
(14, 'a2'),
(15, 'b2'),
(16, 'c2'),
(17, 'd2'),
(18, 'd'),
(19, 'numbers'),
(20, ' letters '),
(21, 'java'),
(22, ' byte'),
(23, ' programming'),
(24, ' ict '),
(25, 'dd'),
(26, 'gg'),
(27, 'ee'),
(28, '58'),
(29, 'as'),
(30, 'df'),
(31, 'gh'),
(32, 'vb'),
(33, 'auth'),
(34, ' java '),
(35, ' it '),
(36, 'programming'),
(37, ' c++ '),
(38, 'music '),
(39, ' dj '),
(40, ' buble '),
(41, 'google'),
(42, ' price '),
(43, ' json'),
(44, 'yolo'),
(45, ' CSV'),
(46, 'arrow tyu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `userTypeId` int(10) NOT NULL,
  `ActivityId` int(10) DEFAULT NULL,
  `notificationId` int(19) DEFAULT NULL,
  `userBadges` int(10) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `aboutMe` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `userTypeId`, `ActivityId`, `notificationId`, `userBadges`, `age`, `aboutMe`) VALUES
(1, 'Upendra', 'Guneratne', 1, 1, 1, NULL, NULL, NULL),
(2, 'Harin ', 'Guneratne', 1, 1, 1, NULL, NULL, NULL),
(3, 'Upendra ', 'Guneratne', 1, 1, 1, NULL, NULL, NULL),
(4, 'Vichitra', 'Samarawickrama', 1, 1, 1, NULL, NULL, NULL),
(5, 'Nalin', 'Perera', 1, 1, 1, NULL, NULL, NULL),
(6, 'Sumal', 'De Silva', 1, 1, 1, NULL, NULL, NULL),
(7, 'Alan', 'De Silva', 1, 1, 1, NULL, NULL, NULL),
(8, 'Zain', 'Jhan', 1, 1, 1, NULL, NULL, NULL),
(9, 'Samantha ', 'Peris', 1, 1, 1, NULL, NULL, NULL),
(10, 'Budhdhika', 'Alwis', 1, 1, 1, NULL, NULL, NULL),
(11, 'Oliver', 'Queen', 1, 1, 1, NULL, NULL, NULL),
(12, 'Bruce', 'Wayne', 1, 1, 1, NULL, NULL, NULL),
(13, 'Clark', 'Kent', 1, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `usertypeid` int(10) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(50) NOT NULL,
  PRIMARY KEY (`usertypeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`usertypeid`, `usertype`) VALUES
(1, 'Doctor'),
(2, 'Patient');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
