-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2013 at 09:34 AM
-- Server version: 5.5.31
-- PHP Version: 5.3.26

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adminPanelDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Function`
--

CREATE TABLE IF NOT EXISTS `Function` (
  `Id_Function` int(11) NOT NULL AUTO_INCREMENT,
  `Function_Name` varchar(15) NOT NULL,
  PRIMARY KEY (`Id_Function`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Function`
--

INSERT INTO `Function` (`Id_Function`, `Function_Name`) VALUES
(1, 'Create_Domain'),
(2, 'List_Domain'),
(3, 'Delete_Domain'),
(4, 'Create_Class'),
(5, 'Edit_Class'),
(6, 'Create_Device'),
(7, 'List_device'),
(8, 'Create_File'),
(9, 'Delete_File'),
(10, 'Rename_Key'),
(11, 'Create_Host'),
(12, 'List_Host'),
(13, 'Edit_Host'),
(14, 'Delete_Host');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `Id_User` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(20) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(6) NOT NULL,
  PRIMARY KEY (`Id_User`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `User_Function`
--

CREATE TABLE IF NOT EXISTS `User_Function` (
  `Id_User` int(11) NOT NULL DEFAULT '0',
  `Id_Function` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_User`,`Id_Function`),
  KEY `fk_functionID` (`Id_Function`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `User_Function`
--
ALTER TABLE `User_Function`
  ADD CONSTRAINT `fk_functionID` FOREIGN KEY (`Id_Function`) REFERENCES `Function` (`Id_function`),
  ADD CONSTRAINT `fk_UserID` FOREIGN KEY (`Id_User`) REFERENCES `User` (`Id_User`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
