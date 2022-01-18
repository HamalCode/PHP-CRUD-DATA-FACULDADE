-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 10:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_fakuldade`
--

CREATE TABLE `t_fakuldade` (
  `id_fakuldade` char(1) NOT NULL,
  `nrn_fakuldade` char(250) NOT NULL,
  `inc_fakuldade` char(25) NOT NULL,
  `obs_fakuldade` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_fakuldade`
--

INSERT INTO `t_fakuldade` (`id_fakuldade`, `nrn_fakuldade`, `inc_fakuldade`, `obs_fakuldade`) VALUES
('1', 'Ecomonia & Negosio', 'FEN', 'Fakuldade Ekonomia & Negosio'),
('2', 'Information & Communication Technology', 'ICT', 'Fakuldade Information & Communication Technology'),
('3', 'Hotelaria & TUrismo', 'FHT', 'Fakuldade Hotelaria & TUrismo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_fakuldade`
--
ALTER TABLE `t_fakuldade`
  ADD PRIMARY KEY (`id_fakuldade`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
