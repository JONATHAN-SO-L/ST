-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-09-2020 a las 00:55:46
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `st`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abril`
--

CREATE TABLE `abril` (
  `id_mes` int(11) NOT NULL,
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoracion_familia`
--

CREATE TABLE `adoracion_familia` (
  `hora` varchar(10) NOT NULL,
  `am_pm` varchar(10) NOT NULL,
  `dia` varchar(10) NOT NULL,
  `titulo1` varchar(100) NOT NULL,
  `titulo2` varchar(100) NOT NULL,
  `titulo3` varchar(100) NOT NULL,
  `titulo4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agosto`
--

CREATE TABLE `agosto` (
  `id_mes` int(11) NOT NULL,
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diciembre`
--

CREATE TABLE `diciembre` (
  `id_mes` int(11) NOT NULL,
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enero`
--

CREATE TABLE `enero` (
  `id_mes` int(11) NOT NULL,
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio_personal`
--

CREATE TABLE `estudio_personal` (
  `hora` varchar(10) NOT NULL,
  `am_pm` varchar(10) NOT NULL,
  `dia` varchar(10) NOT NULL,
  `titulo1` varchar(100) NOT NULL,
  `titulo2` varchar(100) NOT NULL,
  `titulo3` varchar(100) NOT NULL,
  `titulo4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `febrero`
--

CREATE TABLE `febrero` (
  `id_mes` int(11) NOT NULL,
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `julio`
--

CREATE TABLE `julio` (
  `id_mes` int(11) NOT NULL,
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `junio`
--

CREATE TABLE `junio` (
  `id_mes` int(11) NOT NULL,
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marzo`
--

CREATE TABLE `marzo` (
  `id_mes` int(11) NOT NULL,
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mayo`
--

CREATE TABLE `mayo` (
  `id_mes` int(11) NOT NULL,
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meta_libros`
--

CREATE TABLE `meta_libros` (
  `libro1` varchar(100) NOT NULL,
  `libro2` varchar(100) NOT NULL,
  `libro3` varchar(100) NOT NULL,
  `libro4` varchar(100) NOT NULL,
  `libro5` varchar(100) NOT NULL,
  `libro6` varchar(100) NOT NULL,
  `libro7` varchar(100) NOT NULL,
  `libro8` varchar(100) NOT NULL,
  `libro9` varchar(100) NOT NULL,
  `libro10` varchar(100) NOT NULL,
  `libro11` varchar(100) NOT NULL,
  `libro12` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noviembre`
--

CREATE TABLE `noviembre` (
  `id_mes` int(11) NOT NULL,
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `octubre`
--

CREATE TABLE `octubre` (
  `id_mes` int(11) NOT NULL,
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_n_s`
--

CREATE TABLE `q_n_s` (
  `id_qns` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `q_or_s` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `septiembre`
--

CREATE TABLE `septiembre` (
  `id_mes` int(11) NOT NULL,
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abril`
--
ALTER TABLE `abril`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `agosto`
--
ALTER TABLE `agosto`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `diciembre`
--
ALTER TABLE `diciembre`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `enero`
--
ALTER TABLE `enero`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `febrero`
--
ALTER TABLE `febrero`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `julio`
--
ALTER TABLE `julio`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `junio`
--
ALTER TABLE `junio`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `marzo`
--
ALTER TABLE `marzo`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `mayo`
--
ALTER TABLE `mayo`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `noviembre`
--
ALTER TABLE `noviembre`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `octubre`
--
ALTER TABLE `octubre`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `q_n_s`
--
ALTER TABLE `q_n_s`
  ADD PRIMARY KEY (`id_qns`);

--
-- Indices de la tabla `septiembre`
--
ALTER TABLE `septiembre`
  ADD PRIMARY KEY (`id_mes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abril`
--
ALTER TABLE `abril`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `agosto`
--
ALTER TABLE `agosto`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diciembre`
--
ALTER TABLE `diciembre`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `enero`
--
ALTER TABLE `enero`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `febrero`
--
ALTER TABLE `febrero`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `julio`
--
ALTER TABLE `julio`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `junio`
--
ALTER TABLE `junio`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marzo`
--
ALTER TABLE `marzo`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mayo`
--
ALTER TABLE `mayo`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noviembre`
--
ALTER TABLE `noviembre`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `octubre`
--
ALTER TABLE `octubre`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `q_n_s`
--
ALTER TABLE `q_n_s`
  MODIFY `id_qns` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `septiembre`
--
ALTER TABLE `septiembre`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
