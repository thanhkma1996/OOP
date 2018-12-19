-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 05:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `giaovien`
--

CREATE TABLE `giaovien` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `luongcung` float NOT NULL,
  `luongthuong` float NOT NULL,
  `luongphat` float NOT NULL,
  `luongthuclinh` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giaovien`
--

INSERT INTO `giaovien` (`id`, `name`, `date`, `country`, `luongcung`, `luongthuong`, `luongphat`, `luongthuclinh`) VALUES
(19, 'Nguyen Dinh Thanh', '2018-12-28', 'thanh hoa', 10000, 10, 20, 9990),
(20, 'hOANG ANH TU', '2018-12-20', 'hA NOI', 20000, 1000, 200, 20800),
(21, 'Trung', '2018-12-13', 'Viet Nam', 10000, 12, 12, 10000),
(22, 'Trung', '2018-12-05', 'Thanh Hoas', 10000, 2000, 1000, 11000),
(23, 'Ha', '2018-12-06', 'Thai nguyen', 12, 50, 1000, -938);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `name`, `date`, `country`) VALUES
(13, 'Thanh trung 12', '1996-12-03', 'Viet nam22'),
(14, 'Minh', '2018-12-21', 'Ha noi'),
(15, 'Thanhkmadeptraivl', '2018-12-13', 'Thanh hoa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giaovien`
--
ALTER TABLE `giaovien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
