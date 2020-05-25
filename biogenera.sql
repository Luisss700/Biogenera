-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 06:19 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

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
(1, 'Admin', 'Cisco', 'Administrador'),
(2, 'eduardo.cantut@udem.edu', 'localhost', 'Eduardo Rafael Cantu Treviño'),
(3, 'luis.enrique700@udem.edu', 'lollol', 'Luis Enrique ');

-- --------------------------------------------------------

--
-- Table structure for table `equipo`
--

CREATE TABLE `equipo` (
  `IDequipo` int(11) NOT NULL,
  `IDescuela` int(11) NOT NULL,
  `IDPeriodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipo`
--

INSERT INTO `equipo` (`IDequipo`, `IDescuela`, `IDPeriodo`) VALUES
(1, 1, 3),
(2, 1, 3),
(4, 2, 4),
(5, 3, 0),
(6, 3, 0),
(7, 3, 0);

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

--
-- Dumping data for table `escuela`
--

INSERT INTO `escuela` (`IDescuela`, `Nombre`, `Turno`, `FechaVisita`, `Colaborador`, `Cupo`, `DiaConfirmado`, `NombreContacto`, `Contacto`, `IDperiodo`) VALUES
(3, 'Primara la saye', '1', '2020-06-01', 'Pedro Sanchez', 23, '0000-00-00', 'Marta Juarez', '81828384', 0),
(4, 'Primaria Nuevo Amanecer', '1', '0000-00-00', 'Pedro Sanchez', 10, '0000-00-00', ' Sofia Alvarez', '81925746', 0),
(5, 'Primaria la Saye', '1', '2020-07-06', 'Pedro Sanchez', 23, '0000-00-00', 'Marta Juarez', '81828384 ', 0);

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

--
-- Dumping data for table `horario`
--

INSERT INTO `horario` (`IDhorario`, `HorarioInicio`, `HorarioFin`) VALUES
(1, '07:00', '07:30'),
(2, '07:00', '07:30'),
(3, '07:00', '07:30'),
(4, '07:00', '07:30'),
(5, '07:00', '07:30'),
(6, '07:30', '08:00'),
(7, '07:30', '08:00'),
(8, '07:30', '08:00'),
(9, '07:30', '08:00'),
(10, '07:30', '08:00'),
(11, '08:00', '08:30'),
(12, '08:00', '08:30'),
(13, '08:00', '08:30'),
(14, '08:00', '08:30'),
(15, '08:00', '08:30'),
(16, '08:30', '09:00'),
(17, '08:30', '09:00'),
(18, '08:30', '09:00'),
(19, '08:30', '09:00'),
(20, '08:30', '09:00'),
(21, '09:00', '09:30'),
(22, '09:00', '09:30'),
(23, '09:00', '09:30'),
(24, '09:00', '09:30'),
(25, '09:00', '09:30'),
(26, '09:30', '10:00'),
(27, '09:30', '10:00'),
(28, '09:30', '10:00'),
(29, '09:30', '10:00'),
(30, '09:30', '10:00'),
(31, '10:00', '10:30'),
(32, '10:00', '10:30'),
(33, '10:00', '10:30'),
(34, '10:00', '10:30'),
(35, '10:00', '10:30'),
(36, '10:30', '11:00'),
(37, '10:30', '11:00'),
(38, '10:30', '11:00'),
(39, '10:30', '11:00'),
(40, '10:30', '11:00'),
(41, '11:00', '11:30'),
(42, '11:00', '11:30'),
(43, '11:00', '11:30'),
(44, '11:00', '11:30'),
(45, '11:00', '11:30'),
(46, '11:30', '12:00'),
(47, '11:30', '12:00'),
(48, '11:30', '12:00'),
(49, '11:30', '12:00'),
(50, '11:30', '12:00'),
(51, '12:00', '12:30'),
(52, '12:00', '12:30'),
(53, '12:00', '12:30'),
(54, '12:00', '12:30'),
(55, '12:00', '12:30'),
(56, '12:30', '01:00'),
(57, '12:30', '01:00'),
(58, '12:30', '01:00'),
(59, '12:30', '01:00'),
(60, '12:30', '01:00'),
(61, '01:00', '01:30'),
(62, '01:00', '01:30'),
(63, '01:00', '01:30'),
(64, '01:00', '01:30'),
(65, '01:00', '01:30'),
(66, '01:30', '02:00'),
(67, '01:30', '02:00'),
(68, '01:30', '02:00'),
(69, '01:30', '02:00'),
(70, '01:30', '02:00'),
(71, '02:00', '02:30'),
(72, '02:00', '02:30'),
(73, '02:00', '02:30'),
(74, '02:00', '02:30'),
(75, '02:00', '02:30'),
(76, '02:30', '03:00'),
(77, '02:30', '03:00'),
(78, '02:30', '03:00'),
(79, '02:30', '03:00'),
(80, '02:30', '03:00'),
(81, '03:00', '03:30'),
(82, '03:00', '03:30'),
(83, '03:00', '03:30'),
(84, '03:00', '03:30'),
(85, '03:00', '03:30'),
(86, '03:30', '04:00'),
(87, '03:30', '04:00'),
(88, '03:30', '04:00'),
(89, '03:30', '04:00'),
(90, '03:30', '04:00'),
(91, '04:00', '04:30'),
(92, '04:00', '04:30'),
(93, '04:00', '04:30'),
(94, '04:00', '04:30'),
(95, '04:00', '04:30'),
(96, '04:30', '05:00'),
(97, '04:30', '05:00'),
(98, '04:30', '05:00'),
(99, '04:30', '05:00'),
(100, '04:30', '05:00');

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

--
-- Dumping data for table `horariovoluntario`
--

INSERT INTO `horariovoluntario` (`IDhorario`, `IDvoluntario`) VALUES
(31, 7),
(32, 7),
(36, 7),
(37, 7),
(41, 7),
(42, 7),
(46, 7),
(47, 7),
(51, 7),
(52, 7),
(56, 7),
(57, 7),
(61, 7),
(62, 7);

-- --------------------------------------------------------

--
-- Table structure for table `periodo`
--

CREATE TABLE `periodo` (
  `IDperiodo` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contrasena` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, 'Lopez', 'Gatel', 0, 123231, 0, 9, '1979-05-09', '81293746', 0, 'Lopez@gmail.com', '$2y$10$Zbv.72brEGFivYqHZZ8bJu95TFg6UziJrBpf16Q9MkHQ8ceY3XtMe', 'hombre', '');

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
  MODIFY `IDadministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `equipo`
--
ALTER TABLE `equipo`
  MODIFY `IDequipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `escuela`
--
ALTER TABLE `escuela`
  MODIFY `IDescuela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `IDEstudiante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `IDhorario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `periodo`
--
ALTER TABLE `periodo`
  MODIFY `IDperiodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voluntario`
--
ALTER TABLE `voluntario`
  MODIFY `IDvoluntario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
