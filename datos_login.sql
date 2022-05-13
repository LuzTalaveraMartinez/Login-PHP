-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2022 a las 01:10:32
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datos_login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `apellidos` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`) VALUES
(1, 'Natalia', 'Martinez', 'luz_02@hotmail.com', '$2y$04$4m10DwTf5z66hgksmotfeeQSg/nKTH8XO4NSELXDWhkffFigJr3K6'),
(2, 'Carla', 'Arguello', 'Carla@hotmail.com', '$2y$04$39q1era9B1.2WsimXNpRkO8eNwEbLGjLR2kh1xwKFmpYP.PkoCaRy'),
(3, 'Carolina', 'Romero', 'carolina@hotmail.com', '$2y$04$Nbn.imRSBYdXlZsX7yopOupLuA9oQoIXqmXupl4e6Gj0T5FKhUyLS'),
(4, 'Ana', 'torres', 'sol@hotmail.com', '$2y$04$9R5zNYlTADGofsdsK8uybuPAYruJbljq1l2KIWnFIf3LFLlgNsBRO'),
(5, 'luz', 'Talavera', 'luz_02@hotmail.com', '$2y$04$CssWnp6HXiMVbfDu7K.r4.JGuetpJsmFvxn/BRyP7STiBvt20Z3nO'),
(6, 'Federico', 'Uriarte', 'fedeUriarte@hotmail.com', '$2y$04$mDCBhTN6ZnrCzeW2fiEypeqKk6fHmt7qpLXqbftpdCH4zbFzzYxfm'),
(7, 'Sebastian Román', 'Torres Aguilar', 'torres@hotmail.com', '$2y$04$x64WNKMZt2d.8rt929qsruClsqCCchOA953zO5IFXb8MxtC3GuVcO'),
(8, 'Fernanda', 'torres', 'ana@hotmail.com', '$2y$04$sqOHmJ8S2y3s1Ee1myyFBuvdD79zsUvSPfVmIy3jLlupikw0sWH6.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
