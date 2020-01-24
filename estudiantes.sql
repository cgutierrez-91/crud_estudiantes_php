-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2020 at 09:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estudiantes`
--

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombreEst` varchar(50) NOT NULL,
  `apeEst` varchar(50) NOT NULL,
  `edadEst` int(11) NOT NULL,
  `sexo` varchar(25) NOT NULL,
  `codigo` varchar(12) NOT NULL,
  `fIngreso` date NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `campus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombreEst`, `apeEst`, `edadEst`, `sexo`, `codigo`, `fIngreso`, `carrera`, `campus`) VALUES
(3, 'Milena', 'Ramirez', 27, 'Femenino', 'SMLC050231', '2020-01-15', 'Docencia Universitaria', 'Usulutan'),
(12, 'Fernando', 'Sol', 30, 'Indefinido', 'SMLC010203', '2018-01-08', 'Inglés', 'Sonsonate'),
(20, 'Wendy', 'Hernandez', 30, 'Femenino', 'SMCL152419', '2020-01-02', 'Docente', 'Usulutan'),
(21, 'César ', 'Gutiérrez', 29, 'Masculino', 'SMIS113211', '2020-01-07', 'Docencia Virtual', 'San Miguel'),
(22, ' ', ' ', 0, 'Masculino', ' ', '2019-12-31', ' ', ' '),
(23, 'Wendy Rebeca', 'Hernandez', 30, 'Femenino', 'SMCL152420', '2020-01-22', 'Docente', 'Sonsonate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
