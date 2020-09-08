-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-09-2020 a las 19:41:25
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
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agosto`
--

CREATE TABLE `agosto` (
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
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `septiembre`
--

CREATE TABLE `septiembre` (
  `publicaciones` int(11) NOT NULL,
  `videos` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `revisitas` int(11) NOT NULL,
  `cursos` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
