-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2014 at 10:32 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `courier`
--
CREATE DATABASE `courier` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `courier`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `username` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`username`, `password`, `name`, `emailid`, `mobile`, `address`, `city`, `country`) VALUES
('ameet', 'ameet', 'Ameet Pradhan', 'jimmy.4244@gmail.com', '9542033378', 'Chandrasekharpur', 'Bhubaneswa', 'India'),
('ritu', 'ritu', 'Ritu Panda', 'ritu.panda94@gmail.com', '8658443936', 'B - 230, CVR Hall of Residence, NIT Rourkela', 'Rourkela', 'India'),
('sushovan', 'sushovan', 'Sushovan Das', 'das.susho1@gmail.com', '9658734984', 'B-257, Homi Bhabha Hall of Residence, NIT Rourkela', 'Rourkela', 'India'),
('om', 'om', 'Om Prakash Acharya', 'omtennislover@gmail.com', '9777889833', 'B-256, Homi Bhabha Hall of Residence, NIT Rourkela', 'Rourkela', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `courier_table`
--

CREATE TABLE IF NOT EXISTS `courier_table` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `orig` varchar(20) NOT NULL,
  `dest` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `rname` varchar(20) NOT NULL,
  `radd` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rate` float NOT NULL,
  `mode` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Loaded',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `courier_table`
--

INSERT INTO `courier_table` (`cid`, `orig`, `dest`, `sname`, `rname`, `radd`, `date`, `rate`, `mode`, `status`) VALUES
(19, 'Rourkela', 'Bhubaneswar', 'Anmol', 'Sudhanshu', 'Infocity', '2013-04-14 22:37:01', 100, 'surface', 'In Transit'),
(18, 'Lucknow', 'Berhampur', 'Manu', 'Swetaswini', 'Hill Patna', '2013-04-14 22:36:00', 2500, 'surface', 'In Transit'),
(17, 'Rourkela', 'Lucknow', 'Rohit', 'Ritu', 'Gomti Nagar', '2013-04-14 22:34:55', 1600, 'surface', 'Loaded'),
(16, 'Rourkela', 'Rourkela', 'Rasesh', 'Khirod', 'NIT Rourkela', '2013-04-14 22:33:28', 100, 'surface', 'Delivered'),
(15, 'Rourkela', 'Bangalore', 'Shivanee', 'Rohan', 'Indiranagar', '2013-04-14 22:32:36', 420, 'air', 'Delivered'),
(20, 'Rourkela', 'Rourkela', 'Swati', 'Ravi', 'NIT Rourkela', '2013-04-14 22:37:26', 400, 'surface', 'In Transit'),
(21, 'Rourkela', 'Bangalore', 'Ganesh', 'Sambit', 'Indira Nagar', '2013-04-14 22:37:55', 280, 'air', 'Loaded'),
(22, 'Rourkela', 'Kandy', 'Sushovan', 'Aditi', 'Kandy, Sri Lanka', '2013-04-14 23:13:30', 400, 'water', 'In Transit'),
(23, 'Bangalore', 'Bhubaneswar', 'Aditya', 'Chetan', 'Infocity', '2013-04-14 23:36:28', 70, 'air', 'Loaded'),
(26, 'New Delhi', 'Kolkata', 'Navin', 'Sneha', 'Sealdah', '2013-04-15 14:53:41', 400, 'water', 'Loaded'),
(28, 'Bangalore', 'Rourkela', 'Manu', 'Sourav', 'Udit Nagar', '2013-04-19 20:51:09', 40, 'air', 'In Transit'),
(29, 'Lucknow', 'Mumbai', 'Om', 'Uday', 'Dadar', '2014-03-14 15:30:03', 500, 'air', 'Loaded'),
(30, 'Sky', 'New York', 'Nick Fury', 'Tony Stark', 'Top Floor, Stark Tower', '2014-04-05 15:15:16', 21000, 'air', 'Loaded');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`username`, `password`, `name`, `emailid`, `mobile`, `address`, `city`, `country`) VALUES
('rasesh', 'rasesh', 'Rasesh Rout', 'raseshrout@gmail.com', '9439344276', 'B-3, M.V. Hall of Residence, NIT Rourkela', 'Rourkela', 'India'),
('rohit', 'rohit', 'Rohit Rajat Mohanty', 'rohit.r.mohanty@gmail.com', '8598000238', 'C-1, M.V. Hall of Residence, NIT Rourkela', 'Rourkela', 'India'),
('manu', 'manu', 'Siddharth Manu', 'siddharthmanu94@gmail.com', '7894428180', 'B-256, Homi Bhabha Hall of Residence, NIT Rourkela', 'Rourkela', 'India');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
