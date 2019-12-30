-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 30, 2019 at 06:36 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `p14`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti_tb`
--

CREATE TABLE `cuti_tb` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuti_tb`
--

INSERT INTO `cuti_tb` (`id`, `nama`, `tgl_mulai`, `tgl_akhir`, `status`) VALUES
(2, 'Falevi Reja', '2019-12-01', '2019-12-16', 'Y'),
(9, 'Falevi Reja', '2019-12-01', '2019-12-18', 'Y'),
(10, 'Reja Falefi', '2019-12-08', '2019-12-09', 'Y'),
(11, 'Ninun Mak', '2019-12-24', '2019-12-21', 'N'),
(12, 'Last Data', '2019-12-16', '2019-12-28', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti_tb`
--
ALTER TABLE `cuti_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti_tb`
--
ALTER TABLE `cuti_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
