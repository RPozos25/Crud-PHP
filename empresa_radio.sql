-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2023 a las 02:08:54
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa_radio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asocia`
--

CREATE TABLE `asocia` (
  `id_emis` int(50) DEFAULT NULL,
  `id_cad` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cadena`
--

CREATE TABLE `cadena` (
  `id_cad` int(50) NOT NULL,
  `sede` varchar(50) DEFAULT NULL,
  `id_dire` int(50) DEFAULT NULL,
  `nombreC` varchar(50) DEFAULT NULL,
  `id_empr` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `id_dire` int(50) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `ap_pat` varchar(50) DEFAULT NULL,
  `ap_mat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emisora`
--

CREATE TABLE `emisora` (
  `id_emis` int(50) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `CP` int(5) DEFAULT NULL,
  `Banda_Hz` varchar(50) DEFAULT NULL,
  `id_dire` int(50) DEFAULT NULL,
  `NIF` varchar(9) DEFAULT NULL,
  `Provincia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emite`
--

CREATE TABLE `emite` (
  `id_progr` int(50) DEFAULT NULL,
  `id_publicidad` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empr` int(50) NOT NULL,
  `nombreE` varchar(50) DEFAULT NULL,
  `id_patr` int(50) DEFAULT NULL,
  `id_dire` int(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `CP` int(5) DEFAULT NULL,
  `NIF` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `franja_h`
--

CREATE TABLE `franja_h` (
  `id_franja` int(50) NOT NULL,
  `hora_inicio` varchar(50) DEFAULT NULL,
  `dia_semana` varchar(50) DEFAULT NULL,
  `duracion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patrocinador`
--

CREATE TABLE `patrocinador` (
  `id_patr` int(50) NOT NULL,
  `a_pat` varchar(50) DEFAULT NULL,
  `a_mat` varchar(50) DEFAULT NULL,
  `nombresP` varchar(50) DEFAULT NULL,
  `No_contrato` int(50) DEFAULT NULL,
  `duracion` varchar(50) DEFAULT NULL,
  `importe_contrato` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id_progr` int(50) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `ap_patRes` varchar(50) DEFAULT NULL,
  `ap_matRes` varchar(50) DEFAULT NULL,
  `Nombres_Resp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociona`
--

CREATE TABLE `promociona` (
  `id_publicidad` int(50) DEFAULT NULL,
  `id_patr` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE `publicidad` (
  `id_publicidad` int(50) NOT NULL,
  `duracion` varchar(50) DEFAULT NULL,
  `coste` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transmite`
--

CREATE TABLE `transmite` (
  `id_emis` int(50) DEFAULT NULL,
  `id_progr` int(50) DEFAULT NULL,
  `id_franja` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asocia`
--
ALTER TABLE `asocia`
  ADD KEY `id_emis` (`id_emis`),
  ADD KEY `id_cad` (`id_cad`);

--
-- Indices de la tabla `cadena`
--
ALTER TABLE `cadena`
  ADD PRIMARY KEY (`id_cad`),
  ADD UNIQUE KEY `nombre` (`nombreC`),
  ADD KEY `id_dire` (`id_dire`),
  ADD KEY `id_empr` (`id_empr`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id_dire`);

--
-- Indices de la tabla `emisora`
--
ALTER TABLE `emisora`
  ADD PRIMARY KEY (`id_emis`),
  ADD UNIQUE KEY `nombre` (`nombre`,`NIF`),
  ADD KEY `id_dire` (`id_dire`);

--
-- Indices de la tabla `emite`
--
ALTER TABLE `emite`
  ADD KEY `id_progr` (`id_progr`),
  ADD KEY `id_publicidad` (`id_publicidad`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empr`),
  ADD UNIQUE KEY `nombre` (`nombreE`,`NIF`),
  ADD KEY `id_patr` (`id_patr`),
  ADD KEY `id_dire` (`id_dire`);

--
-- Indices de la tabla `franja_h`
--
ALTER TABLE `franja_h`
  ADD PRIMARY KEY (`id_franja`);

--
-- Indices de la tabla `patrocinador`
--
ALTER TABLE `patrocinador`
  ADD PRIMARY KEY (`id_patr`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id_progr`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `promociona`
--
ALTER TABLE `promociona`
  ADD KEY `id_publicidad` (`id_publicidad`),
  ADD KEY `id_patr` (`id_patr`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`id_publicidad`);

--
-- Indices de la tabla `transmite`
--
ALTER TABLE `transmite`
  ADD KEY `id_emis` (`id_emis`),
  ADD KEY `id_progr` (`id_progr`),
  ADD KEY `id_franja` (`id_franja`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cadena`
--
ALTER TABLE `cadena`
  MODIFY `id_cad` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `id_dire` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `emisora`
--
ALTER TABLE `emisora`
  MODIFY `id_emis` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empr` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `franja_h`
--
ALTER TABLE `franja_h`
  MODIFY `id_franja` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `patrocinador`
--
ALTER TABLE `patrocinador`
  MODIFY `id_patr` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id_progr` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  MODIFY `id_publicidad` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asocia`
--
ALTER TABLE `asocia`
  ADD CONSTRAINT `asocia_ibfk_1` FOREIGN KEY (`id_emis`) REFERENCES `emisora` (`id_emis`),
  ADD CONSTRAINT `asocia_ibfk_2` FOREIGN KEY (`id_cad`) REFERENCES `cadena` (`id_cad`);

--
-- Filtros para la tabla `cadena`
--
ALTER TABLE `cadena`
  ADD CONSTRAINT `cadena_ibfk_1` FOREIGN KEY (`id_dire`) REFERENCES `director` (`id_dire`),
  ADD CONSTRAINT `cadena_ibfk_2` FOREIGN KEY (`id_empr`) REFERENCES `empresa` (`id_empr`);

--
-- Filtros para la tabla `emisora`
--
ALTER TABLE `emisora`
  ADD CONSTRAINT `emisora_ibfk_1` FOREIGN KEY (`id_dire`) REFERENCES `director` (`id_dire`);

--
-- Filtros para la tabla `emite`
--
ALTER TABLE `emite`
  ADD CONSTRAINT `emite_ibfk_1` FOREIGN KEY (`id_progr`) REFERENCES `programa` (`id_progr`),
  ADD CONSTRAINT `emite_ibfk_2` FOREIGN KEY (`id_publicidad`) REFERENCES `publicidad` (`id_publicidad`);

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`id_patr`) REFERENCES `patrocinador` (`id_patr`),
  ADD CONSTRAINT `empresa_ibfk_2` FOREIGN KEY (`id_dire`) REFERENCES `director` (`id_dire`);

--
-- Filtros para la tabla `promociona`
--
ALTER TABLE `promociona`
  ADD CONSTRAINT `promociona_ibfk_1` FOREIGN KEY (`id_publicidad`) REFERENCES `publicidad` (`id_publicidad`),
  ADD CONSTRAINT `promociona_ibfk_2` FOREIGN KEY (`id_patr`) REFERENCES `patrocinador` (`id_patr`);

--
-- Filtros para la tabla `transmite`
--
ALTER TABLE `transmite`
  ADD CONSTRAINT `transmite_ibfk_1` FOREIGN KEY (`id_emis`) REFERENCES `emisora` (`id_emis`),
  ADD CONSTRAINT `transmite_ibfk_2` FOREIGN KEY (`id_progr`) REFERENCES `programa` (`id_progr`),
  ADD CONSTRAINT `transmite_ibfk_3` FOREIGN KEY (`id_franja`) REFERENCES `franja_h` (`id_franja`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
