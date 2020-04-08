-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 10:53 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keymanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkin`
--

CREATE TABLE `checkin` (
  `StudID` varchar(20) NOT NULL,
  `StudName` text NOT NULL,
  `ContactNo` int(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `DateBorrow` date NOT NULL,
  `RoomKey` varchar(10) NOT NULL,
  `Level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkin`
--

INSERT INTO `checkin` (`StudID`, `StudName`, `ContactNo`, `Address`, `DateBorrow`, `RoomKey`, `Level`) VALUES
('ptm160703964', 'Darina', 173926625, 'No 2, Jalan Mutiara Emas, Sri kembangan , Johor', '2018-11-27', '123', 'Level G'),
('ptm178008976', 'arina sofea', 195672452, 'LOT 1730,\r\nJALAN PERMATANG UTAMA, KEMPAS BARU', '2019-04-24', '231', 'Level 2'),
('ptm178008978', 'lina sofea', 175643211, 'LOT 1730,\r\nJALAN PERMATANG UTAMA, KEMPAS ', '2019-05-31', '124', 'Level 2');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `StudID` varchar(20) NOT NULL,
  `StudName` text NOT NULL,
  `ContactNo` int(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `DateBorrow` date NOT NULL,
  `DateReturn` date NOT NULL,
  `RoomKey` varchar(10) NOT NULL,
  `Level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`StudID`, `StudName`, `ContactNo`, `Address`, `DateBorrow`, `DateReturn`, `RoomKey`, `Level`) VALUES
('52213220086', 'hasyahaziqa', 1978181818, 'LOT 1730, 6161JALAN PERMATANG UTAMA, KEMPAS BARU', '2020-02-24', '2020-02-24', '302', 'Level'),
('ptm160702331', 'azzahari', 174223456, 'Lot7, Taman Dahlia Kenanga, Seri Kota, Johor.', '2018-11-28', '2018-11-29', '122', 'Level'),
('ptm160703964', '', 0, '', '2018-11-27', '2019-01-01', '', ''),
('ptm1679985', 'luo', 1987552, 'no1, jalan sri kembanga', '2018-11-29', '2019-04-24', '123', 'Level');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` varchar(20) NOT NULL,
  `StaffName` text NOT NULL,
  `PhoneNo` int(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `PhoneNo`, `Address`, `Position`) VALUES
('bp17032', 'rina', 1326754321, 'no1 jalan melawati Taman Rinting ', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`username`, `password`) VALUES
('hasya', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tblroom`
--

CREATE TABLE `tblroom` (
  `roomid` int(10) NOT NULL,
  `level` varchar(10) NOT NULL,
  `roomkey` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`StudID`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`StudID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tblroom`
--
ALTER TABLE `tblroom`
  ADD PRIMARY KEY (`roomid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
