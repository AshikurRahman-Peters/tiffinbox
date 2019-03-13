/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.25a : Database - tiffinbox
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`tiffinbox` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `tiffinbox`;

/*Table structure for table `attendance` */

DROP TABLE IF EXISTS `attendance`;

CREATE TABLE `attendance` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `classId` int(11) DEFAULT NULL,
  `sectionId` int(11) DEFAULT NULL,
  `rollNo` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `attendance` */

insert  into `attendance`(`Id`,`date`,`classId`,`sectionId`,`rollNo`,`status`) values (1,'2016-01-31',1,NULL,76,1);

/*Table structure for table `batch` */

DROP TABLE IF EXISTS `batch`;

CREATE TABLE `batch` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `batch` */

/*Table structure for table `book` */

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `description` text,
  `price` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL COMMENT '0=issued;1=avilable;',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `book` */

insert  into `book`(`Id`,`name`,`author`,`description`,`price`,`status`) values (2,'Raktolalosha (রক্তলালসা) [Masud Rana-310]','Qazi Anwar Hussain','Page - 85\r\nSize - 6.19 mb\r\nPublished - 2001\r\nPublisher - Sheba Prokashoni ','125 BDT',1);

/*Table structure for table `book_issue` */

DROP TABLE IF EXISTS `book_issue`;

CREATE TABLE `book_issue` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `bookId` int(11) DEFAULT NULL,
  `issueFor` varchar(255) DEFAULT NULL,
  `userType` tinyint(4) DEFAULT NULL COMMENT '1=student,2=others',
  `issuedate` date DEFAULT NULL,
  `issueTill` date DEFAULT NULL,
  `note` text,
  `status` tinyint(2) DEFAULT NULL COMMENT '0=issued,1=available',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `book_issue` */

/*Table structure for table `branches` */

DROP TABLE IF EXISTS `branches`;

CREATE TABLE `branches` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `branches` */

/*Table structure for table `classes` */

DROP TABLE IF EXISTS `classes`;

CREATE TABLE `classes` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ClassName` varchar(255) DEFAULT NULL,
  `ClassNumaricName` int(2) unsigned zerofill DEFAULT NULL,
  `ClassTeacherId` int(11) DEFAULT NULL,
  `ClassStatus` tinyint(2) DEFAULT NULL,
  `is_section` tinyint(2) DEFAULT NULL COMMENT '0=no section; 1=have section;',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `classes` */

insert  into `classes`(`Id`,`ClassName`,`ClassNumaricName`,`ClassTeacherId`,`ClassStatus`,`is_section`) values (1,'two',02,1,1,NULL),(4,'five',05,0,1,1);

/*Table structure for table `classroutin` */

DROP TABLE IF EXISTS `classroutin`;

CREATE TABLE `classroutin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `SectionId` int(11) DEFAULT NULL,
  `DayOftheWeekId` int(11) DEFAULT NULL,
  `StartTime` time DEFAULT NULL,
  `EndTime` time DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `classroutin` */

insert  into `classroutin`(`Id`,`ClassId`,`SubjectId`,`SectionId`,`DayOftheWeekId`,`StartTime`,`EndTime`) values (1,4,30,17,1,'17:27:45','17:27:45'),(2,1,35,NULL,1,'08:30:00','09:30:00'),(3,1,36,NULL,1,'09:30:00','10:30:00'),(4,1,37,NULL,1,'11:30:00','12:30:00'),(5,4,31,18,1,'08:30:00','09:30:00'),(6,4,34,18,1,'09:30:00','10:30:00'),(7,4,32,18,1,'10:30:00','11:30:00'),(8,4,33,18,1,'12:30:00','13:30:00'),(9,4,33,18,2,'08:30:00','09:30:00'),(10,4,34,18,2,'10:30:00','11:30:00'),(11,4,32,18,2,'11:30:00','12:30:00'),(12,4,31,18,2,'12:30:00','13:30:00'),(13,4,34,18,5,'08:30:00','09:30:00');

/*Table structure for table `dayoftheweek` */

DROP TABLE IF EXISTS `dayoftheweek`;

CREATE TABLE `dayoftheweek` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Day` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `dayoftheweek` */

/*Table structure for table `departments` */

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `departments` */

insert  into `departments`(`Id`,`departmentName`,`departmentStatus`,`createdBy`,`createDatetime`,`createIp`,`updateBy`,`updateDatetime`,`updateIp`) values (1,'teacher',1,NULL,NULL,NULL,NULL,NULL,NULL),(2,'office administration',1,1,'2016-03-09 10:31:49','127.0.0.1',NULL,NULL,NULL),(3,'staff',1,1,'2016-03-09 10:32:02','127.0.0.1',NULL,NULL,NULL);

/*Table structure for table `designations` */

DROP TABLE IF EXISTS `designations`;

CREATE TABLE `designations` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `designationName` varchar(250) DEFAULT NULL,
  `employeeDepartmentId` tinyint(2) DEFAULT NULL,
  `designationStatus` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `designations` */

insert  into `designations`(`Id`,`designationName`,`employeeDepartmentId`,`designationStatus`) values (1,'Teacher',1,1),(2,'Assistant Teacher',1,1),(3,'Head Master',1,1),(4,'Assistant Headmaster',1,1),(5,'Assistant Teacher',1,1),(6,'Head office admin',2,1),(7,'Joniour office administretor',2,1),(8,'Office Clark',3,1),(9,'Driver',3,1);

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `employee` */

insert  into `employee`(`Id`,`EmployeeName`,`EmployeeDeptId`,`EmployeeDesignationId`,`EmployeeBrithDate`,`EmployeeGender`,`EmployeeAddress`,`EmployeeMobile`,`EmployeeEmail`,`EmployeeUserName`,`EmployeePassword`,`EmployeePhoto`,`EmployeeBloodGroup`,`EmployeeStatus`,`IsCommittee`,`CommitteePost`) values (1,'ashikur rahman',1,4,'1986-04-30',1,'as it is																											','01675645158','aheadmaster@tiffinbox.com.bd','admin','21232f297a57a5a743894a0e4a801fc3','photo-_1_01675645158-codekman_thumb.jpg','B+',1,1,NULL),(3,'Shahariar Parvage',1,3,'1970-01-01',1,'Quisque velit nisi, pretium ut lacinia in, elementum id enim.																																					','01232312434','headmaster@tiffinbox.com.bd',NULL,'d41d8cd98f00b204e9800998ecf8427e','photo-_3_-_thumb.jpg','AB+',1,0,NULL),(4,'Hasibuzzaman Prodhan',1,1,'1975-01-01',1,'Quisque velit nisi, pretium ut lacinia in, elementum id enim.','09234023409','teacher@tiffinbox.com.bd',NULL,'d41d8cd98f00b204e9800998ecf8427e','photo-_4_09234023409-_thumb.jpg','O-',1,0,NULL),(5,'Pavel hassan',2,6,'1990-03-04',1,'Quisque velit nisi, pretium ut lacinia in, elementum id enim.','52345243524','headoffice@tiffinbox.com.bd',NULL,'d41d8cd98f00b204e9800998ecf8427e','photo-_5_52345243524-_thumb.jpg','O-',1,0,NULL),(6,'Monoara Begom',3,8,'1986-01-12',2,'Quisque velit nisi, pretium ut lacinia in, elementum id enim.','23452445243','clark@tiffinbox.com.bd',NULL,'d41d8cd98f00b204e9800998ecf8427e','photo-_6_23452445243-_thumb.jpg','B-',1,0,NULL);

/*Table structure for table `examgrades` */

DROP TABLE IF EXISTS `examgrades`;

CREATE TABLE `examgrades` (
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `examgrades` */

insert  into `examgrades`(`Id`,`gradeName`,`gradePoint`,`markFrom`,`markUpto`,`comments`,`createdBy`,`createdDate`,`examGradeStatus`) values (1,'A+',5.00,80,100,'',1,'2016-03-09 10:56:59',1),(2,'A',4.00,70,79,'',1,'2016-03-09 11:28:00',1),(3,'A-',3.50,60,69,'',1,'2016-03-09 11:40:05',1),(4,'B',3.00,50,59,'',1,'2016-03-09 11:14:06',1),(5,'C',2.00,40,49,'',1,'2016-03-09 11:56:06',1),(6,'D',1.00,33,39,'',1,'2016-03-09 11:31:07',1),(7,'F',0.00,0,32,'',1,'2016-03-09 11:52:07',1);

/*Table structure for table `examresult` */

DROP TABLE IF EXISTS `examresult`;

CREATE TABLE `examresult` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `examId` int(11) DEFAULT NULL,
  `subjectId` int(11) DEFAULT NULL,
  `classId` int(11) DEFAULT NULL,
  `studentId` int(11) DEFAULT NULL,
  `marksObtained` varchar(50) DEFAULT NULL,
  `attendance` varchar(50) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `examresult` */

insert  into `examresult`(`Id`,`examId`,`subjectId`,`classId`,`studentId`,`marksObtained`,`attendance`,`comment`) values (1,1,1,1,1,'33','5',''),(2,1,4,1,1,'45','51','as a the best'),(3,1,2,1,1,'80','5','as it is'),(4,1,31,4,3,'40','10',''),(5,1,31,4,5,'95','9',''),(6,1,31,4,4,'85','10',''),(7,1,31,4,6,'34','07','');

/*Table structure for table `exams` */

DROP TABLE IF EXISTS `exams`;

CREATE TABLE `exams` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `examName` varchar(255) DEFAULT NULL,
  `examDate` date DEFAULT NULL,
  `comments` text,
  `examStatus` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `exams` */

insert  into `exams`(`Id`,`examName`,`examDate`,`comments`,`examStatus`) values (1,'Final Exam For Class Five','2000-10-12','Best of Luck',1),(2,'1st Quater Exam for class Five','2000-04-04','all the wishes',1),(3,'2nd quater Exam for class five','2000-06-06','',1);

/*Table structure for table `expense_category` */

DROP TABLE IF EXISTS `expense_category`;

CREATE TABLE `expense_category` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `expense_category` */

insert  into `expense_category`(`Id`,`categoryName`,`status`) values (1,'classroom utility',1);

/*Table structure for table `expenses` */

DROP TABLE IF EXISTS `expenses`;

CREATE TABLE `expenses` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` text,
  `expenceCategoryId` int(11) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `mediam` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `expenses` */

insert  into `expenses`(`Id`,`title`,`details`,`expenceCategoryId`,`amount`,`mediam`,`date`,`status`) values (1,'banch repair','',1,'100','cash','2016-01-09',1);

/*Table structure for table `fee_type` */

DROP TABLE IF EXISTS `fee_type`;

CREATE TABLE `fee_type` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `fee_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `fee_type` */

/*Table structure for table `link` */

DROP TABLE IF EXISTS `link`;

CREATE TABLE `link` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `link` */

insert  into `link`(`Id`,`name`,`title`,`url`) values (1,'Sample','Link title','http://example.com');

/*Table structure for table `noticeboard` */

DROP TABLE IF EXISTS `noticeboard`;

CREATE TABLE `noticeboard` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `noticeTitle` text,
  `noticeDescription` text,
  `noticeDate` datetime DEFAULT NULL,
  `noticeCreatedBy` int(11) DEFAULT NULL,
  `noticeCreatedDate` datetime DEFAULT NULL,
  `noticeStatus` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `noticeboard` */

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `payment` */

/*Table structure for table `payment_history` */

DROP TABLE IF EXISTS `payment_history`;

CREATE TABLE `payment_history` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `paymentId` int(11) DEFAULT NULL,
  `paidAmount` varchar(255) DEFAULT NULL,
  `paymentDate` date DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `payment_history` */

/*Table structure for table `schools` */

DROP TABLE IF EXISTS `schools`;

CREATE TABLE `schools` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `schools` */

/*Table structure for table `sections` */

DROP TABLE IF EXISTS `sections`;

CREATE TABLE `sections` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ClassId` int(255) DEFAULT NULL,
  `SectionName` varchar(255) DEFAULT NULL,
  `SectionClassTeacherId` int(11) DEFAULT NULL,
  `SectionNumericName` int(2) unsigned zerofill DEFAULT NULL,
  `SectionStatus` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `sections` */

insert  into `sections`(`Id`,`ClassId`,`SectionName`,`SectionClassTeacherId`,`SectionNumericName`,`SectionStatus`) values (18,4,'ka',NULL,NULL,1);

/*Table structure for table `setting` */

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
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
  `facebook` text,
  `twitter` text,
  `gplus` text,
  `linkedin` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `setting` */

insert  into `setting`(`Id`,`institute_name`,`institute_logo`,`address`,`contact_no`,`email`,`contact_us_email`,`about_us`,`principal_word`,`sliders`,`facebook`,`twitter`,`gplus`,`linkedin`) values (1,'Hello Institute','','Sample address','01752832600','email@example.com','email@example.com','Sample about us','Sample word','a:0:{}','https://trello.com/1','https://trello.com/3','https://trello.com/as','https://trello.com/we');

/*Table structure for table `studentdetails` */

DROP TABLE IF EXISTS `studentdetails`;

CREATE TABLE `studentdetails` (
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `studentdetails` */

insert  into `studentdetails`(`Id`,`StdName`,`StdFatherName`,`StdMotherName`,`StdDOB`,`StdGender`,`StdBloodGroup`,`StdProfilePhoto`,`StdGardianName`,`StdGardianPhoto`,`StdGardianSigneture`,`StdContactNo`,`StdPresentAddress`,`StdPermanentAddress`,`StdAdmissionYear`) values (00002,'Md. Arifuzzaman sarkar','Razaul karim sarkar','Anjuman Ara','1986-09-09',1,'O(+ve)','photo_2016_CSH-2016-00002_codekman_thumb.jpg','Razaul karim sarkar','0','0','01675645158','Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque','same as Present Address',2016),(00003,'Faizur Rahman','Farhad hossain','Fauzia aktar','1990-03-12',1,'A+','photo_2016_CSH-2016-00003_codekman_thumb.jpg','Fauzia Aktar','0','0','01912182332','Quisque velit nisi, pretium ut lacinia in, elementum id enim.',' same as Present Address',2016),(00004,'zara bin jahan','Ashikur Rahman','Arifin Jahan','1998-09-16',2,'A+','photo_2000_CSH-2000-00004_codekman_thumb.jpg','Fauzia Aktar','0','0','01234435678','Quisque velit nisi, pretium ut lacinia in, elementum id enim.','same as Present Address',2000),(00005,'Mohiuddin chowdury','hasibuzzaman chowdury','Maya chowdury','1995-03-21',1,'B-','photo_2016_CSH-2016-00005_codekman_thumb.jpg','as','0','0','43532453452','as it is','same as Present Address',2016),(00006,'Pulok deoyan','Hasan Morshed','momota akter','1998-02-23',1,'O-','photo_2016_CSH-2016-00006_codekman_thumb.jpg','Akas kusum sikder','0','0','23423423423','as it is','same as Present Address',2016);

/*Table structure for table `studentinfo` */

DROP TABLE IF EXISTS `studentinfo`;

CREATE TABLE `studentinfo` (
  `Id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `StdDetailsId` int(11) DEFAULT NULL,
  `StdCurrentId` varchar(255) DEFAULT NULL,
  `StdCashId` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `StdRollNo` int(3) unsigned zerofill DEFAULT NULL,
  `StdClassId` int(2) unsigned zerofill DEFAULT NULL,
  `StdSectionId` int(2) unsigned zerofill DEFAULT NULL,
  `StdStatus` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `studentinfo` */

insert  into `studentinfo`(`Id`,`StdDetailsId`,`StdCurrentId`,`StdCashId`,`StdRollNo`,`StdClassId`,`StdSectionId`,`StdStatus`) values (00000000002,2,'HHS-2016-01-17-012','CSH-2016-00002',012,01,17,1),(00000000003,3,'HHS-2016-04-00-004','CSH-2016-00003',004,04,00,1),(00000000004,4,'HHS-2000-04-00-001','CSH-2000-00004',001,04,00,1),(00000000005,5,'HHS-2016-04-18-002','CSH-2016-00005',002,04,18,1),(00000000006,6,'HHS-2016-04-18-003','CSH-2016-00006',003,04,18,1);

/*Table structure for table `subjects` */

DROP TABLE IF EXISTS `subjects`;

CREATE TABLE `subjects` (
  `Id` int(55) NOT NULL AUTO_INCREMENT,
  `SubjectName` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `SubjectCode` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `SubjectClassId` int(2) unsigned DEFAULT NULL,
  `SubjectTeacherId` int(11) DEFAULT NULL,
  `SubjectIsMust` tinyint(2) DEFAULT '1',
  `SubjectIsOptional` tinyint(2) DEFAULT '0',
  `SubjectStatus` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

/*Data for the table `subjects` */

insert  into `subjects`(`Id`,`SubjectName`,`SubjectCode`,`SubjectClassId`,`SubjectTeacherId`,`SubjectIsMust`,`SubjectIsOptional`,`SubjectStatus`) values (31,'Bangla','',4,0,1,0,1),(32,'English',NULL,4,NULL,1,0,1),(33,'Math',NULL,4,NULL,1,0,1),(34,'Dormo Shikha',NULL,4,NULL,1,0,1),(35,'Genarel Math','',1,1,1,0,1),(36,'Bangla Bornomala','',1,5,1,0,1),(37,'English',NULL,1,NULL,1,0,1);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`type_id`,`full_name`,`user_name`,`password`,`email`,`mobile`,`last_login_time`,`last_login_ip`,`status`) values (1,1,NULL,'admin','21232f297a57a5a743894a0e4a801fc3','codekman@gmail.com',NULL,'2016-03-09 10:10:04','127.0.0.1',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
