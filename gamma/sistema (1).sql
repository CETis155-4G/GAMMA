-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 10-03-2023 a las 23:53:37
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `apPaterno` varchar(50) NOT NULL,
  `apMaterno` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `estado` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`apPaterno`, `apMaterno`, `nombre`, `fecha_nac`, `estado`, `municipio`, `telefono`, `email`, `pswd`) VALUES
('Martinez', 'Gutierrez', 'David', '2006-07-28', 'Aguascalientes', 'Aguascalientes', '4493130243', 'holajajja@emal', 'cooestas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
