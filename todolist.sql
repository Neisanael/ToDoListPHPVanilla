-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 02:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `todoaccount`
--

CREATE TABLE `todoaccount` (
  `IdAccount` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todoaccount`
--

INSERT INTO `todoaccount` (`IdAccount`, `username`, `password`) VALUES
(1, 'username]', 'password'),
(16, 'nael', 'qwerty12345');

-- --------------------------------------------------------

--
-- Table structure for table `todofunction`
--

CREATE TABLE `todofunction` (
  `IdTodo` int(5) NOT NULL,
  `IdAccount` int(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  `value` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todofunction`
--

INSERT INTO `todofunction` (`IdTodo`, `IdAccount`, `status`, `value`) VALUES
(1, 1, 'nonaktif', 'halo'),
(2, 16, 'aktif', 'whatsapp'),
(12, 1, 'nonaktif', 'hai'),
(14, 1, 'aktif', 'i'),
(15, 1, 'aktif', 'love'),
(16, 1, 'nonaktif', 'you'),
(17, 1, 'nonaktif', 'sayangku'),
(18, 16, 'aktif', 'data');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todoaccount`
--
ALTER TABLE `todoaccount`
  ADD PRIMARY KEY (`IdAccount`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `todofunction`
--
ALTER TABLE `todofunction`
  ADD PRIMARY KEY (`IdTodo`),
  ADD KEY `functiontodo` (`IdAccount`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todoaccount`
--
ALTER TABLE `todoaccount`
  MODIFY `IdAccount` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `todofunction`
--
ALTER TABLE `todofunction`
  MODIFY `IdTodo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `todofunction`
--
ALTER TABLE `todofunction`
  ADD CONSTRAINT `functiontodo` FOREIGN KEY (`IdAccount`) REFERENCES `todoaccount` (`IdAccount`),
  ADD CONSTRAINT `idAccountconstraint` FOREIGN KEY (`IdAccount`) REFERENCES `todoaccount` (`IdAccount`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
