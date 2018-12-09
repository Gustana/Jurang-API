-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 12:29 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_warung`
--

-- --------------------------------------------------------

--
-- Table structure for table `satuan_`
--

CREATE TABLE `satuan_` (
  `_id` int(2) NOT NULL,
  `_nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan_`
--

INSERT INTO `satuan_` (`_id`, `_nama`) VALUES
(1, 'sdf'),
(2, 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `stok_`
--

CREATE TABLE `stok_` (
  `_id` int(5) NOT NULL,
  `_namaBarang` varchar(30) NOT NULL,
  `_kodeBarang` varchar(30) NOT NULL,
  `_hargaBarang` int(6) NOT NULL,
  `_jumlahBarang` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_`
--

INSERT INTO `stok_` (`_id`, `_namaBarang`, `_kodeBarang`, `_hargaBarang`, `_jumlahBarang`) VALUES
(3, 'jsjs', '9501101530003', 3000, 0),
(5, 'duud', '725272730706', 65000, 0),
(6, 'sdfdsf', '345435', 34545, 7),
(7, 'Indomilk', '5654765711', 5000, 75);

-- --------------------------------------------------------

--
-- Table structure for table `user_`
--

CREATE TABLE `user_` (
  `_id` int(5) NOT NULL,
  `_email` varchar(25) NOT NULL,
  `_password` varchar(255) NOT NULL,
  `_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_`
--

INSERT INTO `user_` (`_id`, `_email`, `_password`, `_image`) VALUES
(1, 'jsdlfk@gml.com', '$2y$10$f5eMnTMLevJ2LbkdEAIDg.KuNZTO1/Ucpjafin8MqyhbprIUGXcC2', 'http://192.168.0.101/jurang/imagesprofileImagesjlkj@gmai.com.jpg'),
(3, 'gustana.satiawan@gmail.co', '$2y$10$IgTpPpwmY6mfo1mnRzIRP.VPwRj/nmxbYThZ5QDPL5qh9ODF/0xIW', 'http://192.168.0.101/jurang/imagesprofileImagesjlkj@gmai.com.jpg'),
(4, 'gustana@gmail.com', '$2y$10$vpE6ob4xya.FvrznJuMTUuGyWQdnmPlouJMEnhJwIHL.P/vWoNFGe', 'http://192.168.0.101/jurang/images/profileImages/gustana@gmail.com.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `satuan_`
--
ALTER TABLE `satuan_`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `stok_`
--
ALTER TABLE `stok_`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `user_`
--
ALTER TABLE `user_`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `satuan_`
--
ALTER TABLE `satuan_`
  MODIFY `_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stok_`
--
ALTER TABLE `stok_`
  MODIFY `_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_`
--
ALTER TABLE `user_`
  MODIFY `_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
