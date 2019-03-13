-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2016 at 04:10 অপরাহ্ণ
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `classId` int(11) DEFAULT NULL,
  `sectionId` int(11) DEFAULT NULL,
  `rollNo` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `batchName` varchar(255) DEFAULT NULL,
  `batchYear` year(4) DEFAULT NULL,
  `batchStatus` tinyint(2) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createIp` varchar(255) DEFAULT NULL,
  `createdDatetime` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updateIp` varchar(255) DEFAULT NULL,
  `updatedDatetime` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `description` text,
  `price` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL COMMENT '0=issued;1=avilable;',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Id`, `name`, `author`, `description`, `price`, `status`) VALUES
(1, 'abc', 'ashik', 'description', '250', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_issue`
--

CREATE TABLE IF NOT EXISTS `book_issue` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `bookId` int(11) DEFAULT NULL,
  `issueFor` varchar(255) DEFAULT NULL,
  `userType` tinyint(4) DEFAULT NULL COMMENT '1=student,2=others',
  `issuedate` date DEFAULT NULL,
  `issueTill` date DEFAULT NULL,
  `note` text,
  `status` tinyint(2) DEFAULT NULL COMMENT '0=issued,1=available',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `branchName` varchar(255) DEFAULT NULL,
  `branchCode` varchar(255) DEFAULT NULL,
  `branchAddress` text,
  `branchStatus` tinyint(2) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDatetime` datetime DEFAULT NULL,
  `createIp` varchar(255) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updateIp` varchar(255) DEFAULT NULL,
  `updatedDatetime` datetime DEFAULT NULL,
  `schoolId` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ClassName` varchar(255) DEFAULT NULL,
  `ClassNumaricName` int(2) unsigned zerofill DEFAULT NULL,
  `ClassTeacherId` int(11) DEFAULT NULL,
  `ClassStatus` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `classroutin`
--

CREATE TABLE IF NOT EXISTS `classroutin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `SectionId` int(11) DEFAULT NULL,
  `DayOftheWeekId` int(11) DEFAULT NULL,
  `StartTime` time DEFAULT NULL,
  `EndTime` time DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dayoftheweek`
--

CREATE TABLE IF NOT EXISTS `dayoftheweek` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Day` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `departmentName` varchar(255) DEFAULT NULL,
  `departmentStatus` tinyint(2) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createDatetime` datetime DEFAULT NULL,
  `createIp` varchar(255) DEFAULT NULL,
  `updateBy` int(11) DEFAULT NULL,
  `updateDatetime` datetime DEFAULT NULL,
  `updateIp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`Id`, `departmentName`, `departmentStatus`, `createdBy`, `createDatetime`, `createIp`, `updateBy`, `updateDatetime`, `updateIp`) VALUES
(1, 'teacher', 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE IF NOT EXISTS `designations` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `designationName` varchar(250) DEFAULT NULL,
  `employeeDepartmentId` tinyint(2) DEFAULT NULL,
  `designationStatus` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `EmployeeName` varchar(150) DEFAULT NULL,
  `EmployeeDeptId` int(11) DEFAULT NULL,
  `EmployeeDesignationId` int(11) DEFAULT NULL,
  `EmployeeBrithDate` date DEFAULT NULL,
  `EmployeeGender` tinyint(2) DEFAULT NULL,
  `EmployeeAddress` text,
  `EmployeeMobile` varchar(60) DEFAULT NULL,
  `EmployeeEmail` varchar(150) DEFAULT NULL,
  `EmployeeUserName` varchar(60) DEFAULT NULL,
  `EmployeePassword` varchar(255) DEFAULT NULL,
  `EmployeePhoto` varchar(255) DEFAULT NULL,
  `EmployeeBloodGroup` varchar(5) DEFAULT NULL,
  `EmployeeStatus` tinyint(2) DEFAULT '1',
  `IsCommittee` tinyint(2) DEFAULT '0' COMMENT '0=not committee member;1=yes committee member',
  `CommitteePost` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `EmployeeName`, `EmployeeDeptId`, `EmployeeDesignationId`, `EmployeeBrithDate`, `EmployeeGender`, `EmployeeAddress`, `EmployeeMobile`, `EmployeeEmail`, `EmployeeUserName`, `EmployeePassword`, `EmployeePhoto`, `EmployeeBloodGroup`, `EmployeeStatus`, `IsCommittee`, `CommitteePost`) VALUES
(1, 'ashikur rahman', 0, 0, '1970-01-01', 0, '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'photo-_1_-admin_thumb.jpg', '', 0, 1, NULL),
(2, 'SE', 1, 0, '2014-03-05', 1, 'sadf', '123', 'asdf@sad', 'asdfasdf', '6a204bd89f3c8348afd5c77c717a097a', NULL, NULL, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `examgrades`
--

CREATE TABLE IF NOT EXISTS `examgrades` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `gradeName` varchar(50) DEFAULT NULL,
  `gradePoint` double(10,2) DEFAULT NULL,
  `markFrom` int(11) DEFAULT NULL,
  `markUpto` int(11) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `examGradeStatus` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `examresult`
--

CREATE TABLE IF NOT EXISTS `examresult` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `examId` int(11) DEFAULT NULL,
  `subjectId` int(11) DEFAULT NULL,
  `classId` int(11) DEFAULT NULL,
  `studentId` int(11) DEFAULT NULL,
  `marksObtained` varchar(50) DEFAULT NULL,
  `attendance` varchar(50) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `examName` varchar(255) DEFAULT NULL,
  `examDate` date DEFAULT NULL,
  `comments` text,
  `examStatus` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` text,
  `expenceCategoryId` int(11) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `mediam` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`Id`, `title`, `details`, `expenceCategoryId`, `amount`, `mediam`, `date`, `status`) VALUES
(1, 'banch repair', '', 1, '100', 'cash', '2016-01-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE IF NOT EXISTS `expense_category` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `expense_category`
--

INSERT INTO `expense_category` (`Id`, `categoryName`, `status`) VALUES
(1, 'classroom utility', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fee_type`
--

CREATE TABLE IF NOT EXISTS `fee_type` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `fee_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`Id`, `name`, `title`, `url`) VALUES
(1, 'Sample', 'Link title', 'http://example.com');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE IF NOT EXISTS `noticeboard` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `noticeTitle` text,
  `noticeDescription` text,
  `noticeDate` datetime DEFAULT NULL,
  `noticeCreatedBy` int(11) DEFAULT NULL,
  `noticeCreatedDate` datetime DEFAULT NULL,
  `noticeStatus` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`Id`, `noticeTitle`, `noticeDescription`, `noticeDate`, `noticeCreatedBy`, `noticeCreatedDate`, `noticeStatus`) VALUES
(1, 'this is a simple notice', 'this is a description', '2016-01-07 17:15:51', 1, '2016-01-07 17:46:51', 1),
(2, 'this is a simple notice2', 'this is a description2', '2016-12-12 17:51:15', 1, '2016-01-07 17:00:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `paymentTitle` varchar(255) DEFAULT NULL,
  `paymentDetails` tinytext,
  `paymentType` tinyint(2) DEFAULT '1' COMMENT '1=student payment; 2=others;',
  `classId` int(11) DEFAULT NULL,
  `studentId` int(11) DEFAULT NULL,
  `totalAmount` varchar(255) DEFAULT NULL,
  `createdDate` date DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL COMMENT '1=paid;0=unpaid',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE IF NOT EXISTS `payment_history` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `paymentId` int(11) DEFAULT NULL,
  `paidAmount` varchar(255) DEFAULT NULL,
  `paymentDate` date DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `schoolName` varchar(500) DEFAULT NULL,
  `schoolLogo` varchar(500) DEFAULT NULL,
  `schoolAddress` text,
  `createdDatetime` datetime DEFAULT NULL,
  `cratedIp` varchar(255) DEFAULT NULL,
  `updateDatetime` datetime DEFAULT NULL,
  `updateIp` varchar(255) DEFAULT NULL,
  `schoolStatus` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ClassId` int(255) DEFAULT NULL,
  `SectionName` varchar(255) DEFAULT NULL,
  `SectionClassTeacherId` int(11) DEFAULT NULL,
  `SectionNumericName` int(2) unsigned zerofill DEFAULT NULL,
  `SectionStatus` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `institute_name` varchar(500) DEFAULT NULL,
  `institute_logo` varchar(500) DEFAULT NULL,
  `address` text,
  `contact_no` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `contact_us_email` varchar(255) DEFAULT NULL,
  `about_us` text,
  `principal_word` text,
  `sliders` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`Id`, `institute_name`, `institute_logo`, `address`, `contact_no`, `email`, `contact_us_email`, `about_us`, `principal_word`, `sliders`) VALUES
(1, 'Hello Institute', 'school_Hello Institute.png', 'Sample address', '01752832600', 'email@example.com', 'email@example.com', 'Sample about us', 'Sample word', 'a:2:{i:0;a:3:{s:5:"image";s:55:"http://localhost/tiffinbox//media/slider/slider_sdf.jpg";s:5:"title";s:3:"sdf";s:7:"content";s:6:"sdfsdf";}i:1;a:3:{s:5:"image";s:58:"http://localhost/tiffinbox//media/slider/slider_sdfsdf.jpg";s:5:"title";s:6:"sdfsdf";s:7:"content";s:9:"sdfsdfsdf";}}');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(255) DEFAULT NULL,
  `status_type_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE IF NOT EXISTS `studentdetails` (
  `Id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `StdName` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `StdFatherName` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `StdMotherName` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `StdDOB` date DEFAULT NULL,
  `StdGender` tinyint(2) DEFAULT '1',
  `StdBloodGroup` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `StdProfilePhoto` varchar(450) CHARACTER SET utf8 DEFAULT NULL,
  `StdGardianName` varchar(255) DEFAULT NULL,
  `StdGardianPhoto` varchar(450) CHARACTER SET utf8 DEFAULT NULL,
  `StdGardianSigneture` varchar(450) CHARACTER SET utf8 DEFAULT NULL,
  `StdContactNo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `StdPresentAddress` varchar(459) CHARACTER SET utf8 DEFAULT NULL,
  `StdPermanentAddress` varchar(450) CHARACTER SET utf8 DEFAULT NULL,
  `StdAdmissionYear` year(4) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE IF NOT EXISTS `studentinfo` (
  `Id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `StdDetailsId` int(11) DEFAULT NULL,
  `StdCurrentId` varchar(255) DEFAULT NULL,
  `StdCashId` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `StdRollNo` int(3) unsigned zerofill DEFAULT NULL,
  `StdClassId` int(2) unsigned zerofill DEFAULT NULL,
  `StdSectionId` int(2) unsigned zerofill DEFAULT NULL,
  `StdStatus` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `Id` int(55) NOT NULL AUTO_INCREMENT,
  `SubjectName` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `SubjectCode` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `SubjectClassId` int(2) unsigned DEFAULT NULL,
  `SubjectIsMust` tinyint(2) DEFAULT '1',
  `SubjectIsOptional` tinyint(2) DEFAULT '0',
  `SubjectStatus` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `type_id` int(100) DEFAULT NULL,
  `full_name` varchar(450) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(450) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `last_login_time` varchar(765) DEFAULT NULL,
  `last_login_ip` varchar(765) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `type_id`, `full_name`, `user_name`, `password`, `email`, `mobile`, `last_login_time`, `last_login_ip`, `status`) VALUES
(1, 1, NULL, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'codekman@gmail.com', NULL, '2016-01-20 20:48:37', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
