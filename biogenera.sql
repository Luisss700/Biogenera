-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 11:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biogenera`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminitrador`
--

CREATE TABLE `adminitrador` (
  `IDadministrador` int(11) NOT NULL,
  `Correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contrasena` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminitrador`
--

INSERT INTO `adminitrador` (`IDadministrador`, `Correo`, `Contrasena`, `Nombre`) VALUES
(1, 'lu1z3nr1k3@gmail.com', 'lollol', 'Luis');

-- --------------------------------------------------------

--
-- Table structure for table `equipo`
--

CREATE TABLE `equipo` (
  `IDequipo` int(11) NOT NULL,
  `IDescuela` int(11) NOT NULL,
  `IDPeriodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipohorario`
--

CREATE TABLE `equipohorario` (
  `IDhorario` int(11) NOT NULL,
  `IDequipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipovoluntario`
--

CREATE TABLE `equipovoluntario` (
  `IDequipo` int(11) NOT NULL,
  `IDvoluntario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `escuela`
--

CREATE TABLE `escuela` (
  `IDescuela` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Turno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FechaVisita` date NOT NULL,
  `Colaborador` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cupo` int(11) NOT NULL,
  `DiaConfirmado` date NOT NULL,
  `NombreContacto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contacto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDperiodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `IDEstudiante` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Edad` int(11) NOT NULL,
  `Grado` int(11) NOT NULL,
  `NombreP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelefonoP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDescuela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
  `IDhorario` int(11) NOT NULL,
  `HorarioInicio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HorarioFin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `horarioescuela`
--

CREATE TABLE `horarioescuela` (
  `IDhorario` int(11) NOT NULL,
  `IDescuela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `horariovoluntario`
--

CREATE TABLE `horariovoluntario` (
  `IDhorario` int(11) NOT NULL,
  `IDvoluntario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `periodo`
--

CREATE TABLE `periodo` (
  `IDperiodo` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contrasena` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periodo`
--

INSERT INTO `periodo` (`IDperiodo`, `Nombre`, `Contrasena`) VALUES
(43, 'OT15', '15'),
(45, 'OT16', '4');

-- --------------------------------------------------------

--
-- Table structure for table `voluntario`
--

CREATE TABLE `voluntario` (
  `IDvoluntario` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDperiodo` int(11) NOT NULL,
  `Matricula` int(11) NOT NULL,
  `Activado` tinyint(1) NOT NULL,
  `Semestre` int(11) NOT NULL,
  `FechaN` date NOT NULL,
  `Celular` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Automovil` tinyint(1) NOT NULL,
  `Correo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contrasena` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sexo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Universidad` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `voluntario`
--

INSERT INTO `voluntario` (`IDvoluntario`, `Nombre`, `Apellidos`, `IDperiodo`, `Matricula`, `Activado`, `Semestre`, `FechaN`, `Celular`, `Automovil`, `Correo`, `Contrasena`, `Sexo`, `Universidad`) VALUES
(9, 'Luis', 'Sánchez', 0, 364210, 0, 8, '1998-08-03', '8182102111', 1, 'luisss700@hotmail.com', '$2y$10$SRUupi7j9xjIiymJJO034ebmKZCZ65WQolpPlDCJNRTNK1unpEBo2', 'hombre', ''),
(10, 'wew', 'wefwef', 0, 3, 0, 3, '1998-08-03', '818210211', 1, 'luwied@hotmail.com', '$2y$10$Wwb0Fzp5ut/b0RpuSh16mOrfpAAwqh5YGZ7LSLrl47Mlihz1ercwW', 'hombre', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminitrador`
--
ALTER TABLE `adminitrador`
  ADD PRIMARY KEY (`IDadministrador`);

--
-- Indexes for table `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`IDequipo`);

--
-- Indexes for table `escuela`
--
ALTER TABLE `escuela`
  ADD PRIMARY KEY (`IDescuela`);

--
-- Indexes for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`IDEstudiante`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`IDhorario`);

--
-- Indexes for table `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`IDperiodo`);

--
-- Indexes for table `voluntario`
--
ALTER TABLE `voluntario`
  ADD PRIMARY KEY (`IDvoluntario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminitrador`
--
ALTER TABLE `adminitrador`
  MODIFY `IDadministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equipo`
--
ALTER TABLE `equipo`
  MODIFY `IDequipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `escuela`
--
ALTER TABLE `escuela`
  MODIFY `IDescuela` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `IDEstudiante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `IDhorario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `periodo`
--
ALTER TABLE `periodo`
  MODIFY `IDperiodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `voluntario`
--
ALTER TABLE `voluntario`
  MODIFY `IDvoluntario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
