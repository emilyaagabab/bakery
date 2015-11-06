-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2015 at 02:01 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `mob`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `tblid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `code` varchar(255) NOT NULL,
  `softwareid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `factor` float NOT NULL,
  `coreunit` varchar(5) NOT NULL,
  `commissionrate` decimal(6,2) NOT NULL DEFAULT '0.00',
  `kitchen` varchar(30) NOT NULL,
  PRIMARY KEY (`tblid`),
  KEY `softwareid` (`softwareid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5271 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`tblid`, `userid`, `code`, `softwareid`, `name`, `factor`, `coreunit`, `commissionrate`, `kitchen`) VALUES
(1426, 1, 'UNIT', '23#LB', '23 Pound Bag', 23, 'LB', 0.00, ''),
(1407, 1, 'UNIT', '50#BG', '50 LB Bag', 50, 'LB', 0.00, ''),
(1422, 1, 'UNIT', '75#BG', '75 LB Bag', 75, 'LB', 0.00, ''),
(1250, 1, 'UNIT', '100#B', '100  LB Bag', 100, 'LB', 0.00, ''),
(1470, 1, 'UNIT', 'CASE', 'Case Of 36 EA', 36, 'EA', 0.00, ''),
(5118, 1, 'UNIT', '00001', '111111111111111', 11, 'GAL', 0.00, ''),
(2074, 1, 'UNIT', 'CS200', 'Case Of 200', 200, 'EA', 0.00, ''),
(2183, 1, 'UNIT', 'CS300', 'Case Of 300', 300, 'EA', 0.00, ''),
(2484, 1, 'UNIT', 'CS100', 'Case Of 100', 100, 'EA', 0.00, ''),
(3232, 1, 'UNIT', 'CUP16', 'Cup', 0.0625, 'GAL', 0.00, ''),
(3911, 1, 'UNIT', 'BG1', 'Bag of 100 LB', 100, 'LB', 0.00, ''),
(4642, 1, 'UNIT', 'tst1', 'Garni test u/m', 0, '', 0.00, ''),
(4783, 1, 'UNIT', '40#BG', '40 LB Bag', 40, 'LB', 0.00, ''),
(5000, 1, 'UNIT', 'SL', 'Slice', 0, '', 0.00, '');
