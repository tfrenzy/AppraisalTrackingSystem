-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2012 at 03:27 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employeedb`
--
CREATE DATABASE `employeedb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `employeedb`;

-- --------------------------------------------------------

--
-- Table structure for table `annualappraisal`
--

CREATE TABLE `annualappraisal` (
  `DateOfInterview` varchar(15) default NULL,
  `DateOfPrevInterview` varchar(15) default NULL,
  `LastName` varchar(15) default NULL,
  `FirstName` varchar(15) default NULL,
  `EmployeeNo` varchar(15) default NULL,
  `Grade` varchar(15) default NULL,
  `JobTitle` varchar(15) default NULL,
  `Department` varchar(15) default NULL,
  `Division` varchar(15) default NULL,
  `YrsOnJob` varchar(10) default NULL,
  `Objective1` varchar(100) default NULL,
  `Objective2` varchar(100) default NULL,
  `ComplDate1` varchar(15) default NULL,
  `ComplDate2` varchar(15) default NULL,
  `AttainmentLevel1` varchar(15) default NULL,
  `AttainmentLevel2` varchar(15) default NULL,
  `Comment1` varchar(100) default NULL,
  `Comment2` varchar(100) default NULL,
  `Qualification` varchar(100) default NULL,
  `StartYear` varchar(20) default NULL,
  `CompletionYear` varchar(20) default NULL,
  `Course1` varchar(50) default NULL,
  `Course2` varchar(50) default NULL,
  `ApplicationLevel1` varchar(20) default NULL,
  `ApplicationLevel2` varchar(20) default NULL,
  `Comment3` varchar(100) default NULL,
  `Comment4` varchar(100) default NULL,
  `Competency1` varchar(15) default NULL,
  `Competency2` varchar(15) default NULL,
  `Competency3` varchar(15) default NULL,
  `Competency4` varchar(15) default NULL,
  `Comment5` varchar(100) default NULL,
  `Comment6` varchar(100) default NULL,
  `Comment7` varchar(100) default NULL,
  `Comment8` varchar(100) default NULL,
  `QuarterAverage` varchar(20) default NULL,
  `Quarter4Average` varchar(30) default NULL,
  `OverallPerform` varchar(20) default NULL,
  `Comment9` varchar(100) default NULL,
  `Comment10` varchar(100) default NULL,
  `Comment11` varchar(100) default NULL,
  `Name1` varchar(20) default NULL,
  `Name2` varchar(20) default NULL,
  `Name3` varchar(20) default NULL,
  `SubmitType` varchar(15) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annualappraisal`
--

INSERT INTO `annualappraisal` (`DateOfInterview`, `DateOfPrevInterview`, `LastName`, `FirstName`, `EmployeeNo`, `Grade`, `JobTitle`, `Department`, `Division`, `YrsOnJob`, `Objective1`, `Objective2`, `ComplDate1`, `ComplDate2`, `AttainmentLevel1`, `AttainmentLevel2`, `Comment1`, `Comment2`, `Qualification`, `StartYear`, `CompletionYear`, `Course1`, `Course2`, `ApplicationLevel1`, `ApplicationLevel2`, `Comment3`, `Comment4`, `Competency1`, `Competency2`, `Competency3`, `Competency4`, `Comment5`, `Comment6`, `Comment7`, `Comment8`, `QuarterAverage`, `Quarter4Average`, `OverallPerform`, `Comment9`, `Comment10`, `Comment11`, `Name1`, `Name2`, `Name3`, `SubmitType`) VALUES
('27/02/2012', '', 'Ikechukwu', 'Daniel', '100', '8', 'Safety Supt', 'Safety', 'HSE', '6', 'Prepare Database for all PPEs', 'Prepare database for all extinguishers', '01/02/2013', '01/02/2013', 'Exceeded', 'Exceeded', 'Deserves reward', 'Deserves reward', '', '', '', 'Excel Level1', 'Excel Level2', 'Very Substantial', 'Substantial', 'completed', 'completed', 'Strong', 'Strong', 'Strong', 'Strong', 'ok', 'ok', 'ok', 'ok', '', 'Exceeds most Expectations', 'Exceptional', '             ok', 'ok', 'ok', 'Samuel', 'Tina', 'Daniel', 'not submitted'),
('25/02/2012', '', 'Ikechukwu', 'Daniel', '100', '8', 'Safety Supt', 'Safety', 'HSE', '6', 'Prepare Database for all PPEs', 'Prepare database for all extinguishers', '01/02/2013', '01/02/2013', 'Exceeded', 'Met', 'Deserves reward', 'Deserves reward', 'MSc', '2010', '2012', 'Excel Level1', 'Excel Level2', 'Very Substantial', 'Substantial', 'completed', 'completed', 'Strong', 'Strong', 'Strong', 'Strong', 'ok', 'ok', 'ok', 'ok', '', 'Exceeds most Expectations', 'Very Good', '              ok', 'ok', 'ok', 'Samuel', 'Tina', 'Daniel', 'not submitted'),
('24/02/2012', '25/02/2012', 'Ikechukwu', 'Daniel', '100', '8', 'Safety Supt', 'Safety', 'HSE', '6', 'Prepare Database for all PPEs', 'Prepare database for all extinguishers', '01/02/2013', '01/02/2013', 'Exceeded', 'Exceeded', 'Deserves reward', 'Deserves reward', 'MSc', '2010', '2012', 'Excel Level1', 'Excel Level2', 'Very Substantial', 'Substantial', 'completed', 'completed', 'Strong', 'Strong', 'Strong', 'Strong', 'ok', 'ok', 'ok', 'ok', '', 'Exceeds most Expectations', 'Exceptional', '               ok', 'ok', 'ok', 'Samuel', 'Tina', 'Daniel', 'not submitted'),
('21/02/2012', '', 'Ikechukwu', 'Daniel', '100', '8', 'Safety Supt', 'Safety', 'HSE', '6', 'Prepare Database for all PPEs', 'Prepare database for all extinguishers', '01/02/2013', '01/02/2013', 'Exceeded', 'Met', 'Deserves reward', 'Deserves reward', '', '', '', 'Excel Level1', 'Excel Level2', 'Very Substantial', 'Substantial', 'completed', 'completed', 'Strong', 'Strong', 'Strong', 'Strong', 'ok', 'ok', 'ok', 'ok', '', 'Exceeds some Expectations', 'Very Good', '              ok', 'ok', 'ok', 'Samuel', 'Tina', 'Daniel', 'not submitted');

-- --------------------------------------------------------

--
-- Table structure for table `newobjectives`
--

CREATE TABLE `newobjectives` (
  `Date` varchar(10) default NULL,
  `FirstName` varchar(15) default NULL,
  `LastName` varchar(15) default NULL,
  `ObjectiveNew1` varchar(80) default NULL,
  `CompldateNew1` varchar(20) default NULL,
  `IndicatorNew1` varchar(30) default NULL,
  `CommentNew1` varchar(80) default NULL,
  `ObjectiveNew2` varchar(80) default NULL,
  `CompldateNew2` varchar(20) default NULL,
  `IndicatorNew2` varchar(30) default NULL,
  `CommentNew2` varchar(80) default NULL,
  `CourseNew1` varchar(80) default NULL,
  `CommentNew3` varchar(80) default NULL,
  `CourseNew2` varchar(80) default NULL,
  `CommentNew4` varchar(80) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newobjectives`
--

INSERT INTO `newobjectives` (`Date`, `FirstName`, `LastName`, `ObjectiveNew1`, `CompldateNew1`, `IndicatorNew1`, `CommentNew1`, `ObjectiveNew2`, `CompldateNew2`, `IndicatorNew2`, `CommentNew2`, `CourseNew1`, `CommentNew3`, `CourseNew2`, `CommentNew4`) VALUES
('22/02/2012', '', '', 'Prepare Database for', '01/02/2013', 'Check supply since January', 'Agreed as SMART', 'Prepare database for', '01/02/2013', 'Check supply since January', 'Agreed as SMART', 'Excel Level1', 'To attend ', 'Excel Level2', 'To attend '),
('20/02/2012', '', '', 'Compile a database for all chemicals', '9/01/2013', 'Use MS Access', 'Complete in good time', 'Compile a database for all customers', '9/01/2013', 'Use MS Access', 'Complete in good time', 'MS Access Level 1', 'To be attended', 'MS Access Level 2', 'To be attended'),
('20/02/2012', '', '', 'Compile a database for all chemicals', '9/01/2013', 'Use MS Access', 'Complete in good time', 'Compile a database for all customers', '9/01/2013', 'Use MS Access', 'Complete in good time', 'MS Access Level 1', 'To be attended', 'MS Access Level 2', 'To be attended'),
('21/02/2012', '', '', 'Compile a database for all chemicals', '9/01/2013', 'Use MS Access', 'Complete in good time', 'Compile a database for all customers', '9/01/2013', 'Use MS Access', 'Complete in good time', 'MS Access Level 1', 'To be attended', 'MS Access Level 2', 'To be attended'),
('24/02/2012', '', '', 'Compile a database for all chemicals', '9/01/2013', 'Use MS Access', 'Complete in good time', 'Compile a database for all customers', '9/01/2013', 'Use MS Access', 'Complete in good time', 'MS Access Level 1', 'To be attended', 'MS Access Level 2', 'To be attended');

-- --------------------------------------------------------

--
-- Table structure for table `semireview`
--

CREATE TABLE `semireview` (
  `DateOfReview` varchar(15) default NULL,
  `DateOfLastInterview` varchar(15) default NULL,
  `LastName` varchar(25) default NULL,
  `FirstName` varchar(25) default NULL,
  `EmployeeNo` varchar(15) default NULL,
  `Grade` varchar(10) default NULL,
  `JobTitle` varchar(20) default NULL,
  `Department` varchar(20) default NULL,
  `Division` varchar(20) default NULL,
  `YearsOnJob` varchar(10) default NULL,
  `Objective1` varchar(50) default NULL,
  `Rating1` varchar(10) default NULL,
  `Comment1` varchar(80) default NULL,
  `Objective2` varchar(50) default NULL,
  `Rating2` varchar(10) default NULL,
  `Comment2` varchar(80) default NULL,
  `OverallPerformance` varchar(10) default NULL,
  `Comment3` varchar(80) default NULL,
  `Comment4` varchar(80) default NULL,
  `Name1` varchar(18) default NULL,
  `Name2` varchar(18) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semireview`
--

INSERT INTO `semireview` (`DateOfReview`, `DateOfLastInterview`, `LastName`, `FirstName`, `EmployeeNo`, `Grade`, `JobTitle`, `Department`, `Division`, `YearsOnJob`, `Objective1`, `Rating1`, `Comment1`, `Objective2`, `Rating2`, `Comment2`, `OverallPerformance`, `Comment3`, `Comment4`, `Name1`, `Name2`) VALUES
('', '01/01/2012', 'Ikechukwu', 'Daniel', '100', '8', 'Safety Supt', 'Safety', 'HSE', '6', 'aaaaaa', '50', 'wwwwwwwwwww', 'wwwwwwwwwwwwwwwwwwwwwwwwww', '60', 'wwwwwwwwwwwwwwwwwwwwwwwwww', '55', 'dfagdfg', 'dfsgbdfs', 'fgdsgdfs', 'gdfsgsd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(15) default NULL,
  `Password` varchar(15) default NULL,
  `Category` varchar(15) default NULL,
  `EmployeeNo` varchar(10) default NULL,
  `LevelGrade` varchar(15) default NULL,
  `JobTitle` varchar(20) default NULL,
  `Department` varchar(15) default NULL,
  `Division` varchar(20) default NULL,
  `YrsOnJob` varchar(5) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Category`, `EmployeeNo`, `LevelGrade`, `JobTitle`, `Department`, `Division`, `YrsOnJob`) VALUES
('Ikechukwu', 'Joseph', 'Administrator', '', '', '', '', '', ''),
('Ikechukwu', 'Tina', 'Senior Manager', '', '', '', '', '', ''),
('Ikechukwu ', 'Samuel', 'Appraiser', '', '', '', '', '', ''),
('Ikechukwu', 'Daniel', 'Appraisee', '100', '8', 'Safety Supt', 'Safety', 'HSE', '6'),
('Ikechukwu', 'Precious', 'Appraisee', '101', '9', 'Engr', 'HR', 'HID', '5'),
('Azunda ', 'Vitalis', 'Appraisee', '102', '7', 'Technician', 'IT', 'Helpdesk', '2'),
('David', 'Welona', 'Appraisee', '104', '06', 'Engr', 'Safety', 'HID', '17'),
('Andrew', 'Justina', 'Appraisee', '106', '7', 'Tech.', 'Help Desk', 'IT', '2'),
('Ekpella', 'Austin', 'Appraisee', '107', '05', 'Marketing Executive', 'Marketing', 'Commercial', '4'),
('Alamina', 'Stella', 'Appraisee', '108', '8', 'Marketing Cordinator', 'Marketing', 'Commercial', '8');
