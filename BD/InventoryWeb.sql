-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-04-2024 a las 21:57:19
-- Versión del servidor: 8.0.36-0ubuntu0.22.04.1
-- Versión de PHP: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `InventoryWeb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activos`
--

CREATE TABLE `activos` (
  `idActivo` int NOT NULL,
  `Nserial` varchar(250) NOT NULL,
  `Sede_idSede` int NOT NULL,
  `Proveedor_idProveedor` int NOT NULL,
  `Categoria_idcategoria` int NOT NULL,
  `Estado_idEstado` int NOT NULL,
  `NombreActivo` varchar(250) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Cantidad` int DEFAULT NULL,
  `Imagen` text,
  `Fecha_registro` date NOT NULL,
  `Ambiente` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `activos`
--

INSERT INTO `activos` (`idActivo`, `Nserial`, `Sede_idSede`, `Proveedor_idProveedor`, `Categoria_idcategoria`, `Estado_idEstado`, `NombreActivo`, `Precio`, `Cantidad`, `Imagen`, `Fecha_registro`, `Ambiente`) VALUES
(5, '2-87-u', 1, 6, 1, 1, 'Monitor Lg', 73000, 2, 'LG.jpg', '2020-05-13', 115),
(6, '123-klÃ±-45', 1, 3, 6, 1, 'portatil toshiba', 12300, 3, 'audio.jpeg', '2020-05-05', 0),
(15, 'MOUSE-3', 1, 5, 3, 1, 'MOU dell', 50000, 5, 'mou2.jpg', '2020-06-03', 0),
(16, 'TEC-2', 1, 1, 4, 1, 'TECLADO HP', 60000, 1, 'tec2.jpg', '2020-06-03', 0),
(17, 'TEC-3', 1, 6, 4, 1, 'TECLADO LG', 34567, 3, 'tec3.jpg', '2020-06-03', 0),
(18, 'Clable-1', 1, 5, 5, 1, 'UTP cable', 45000, 1, 'utp.jpg', '2020-06-03', 0),
(19, 'Cable Energi', 1, 2, 5, 1, 'cable3.jpg', 23456, 3, 'cable3.jpg', '2020-06-03', 0),
(20, 'Mem-78', 2, 3, 6, 1, 'MEMORIA ', 45600, 1, 'memoria.jpg', '2020-06-03', 0),
(21, 'MEM-2', 2, 5, 6, 1, 'MEMO', 56999, 1, 'memoria2.jpg', '2020-06-03', 0),
(31, 'mem-4', 2, 3, 6, 1, 'memoria 3', 12000, 3, 'memoria2.jpg', '2020-06-04', 0),
(41, 'CDF-MN', 1, 1, 5, 1, 'Cable de Audio ', 3400, 5, 'audio.jpg', '2020-06-05', 0),
(71, 'pruebaima', 1, 1, 1, 1, 'toshiba.jpg', 340000, 2, 'toshiba.jpg', '2020-06-07', 0),
(81, 'prueba2', 1, 1, 1, 1, 'monitor hp', 34000, 23, 'lgg.jpeg', '2020-06-07', 0),
(91, 'MNUI-89', 1, 1, 1, 3, 'Monitor LG', 200000, 22, 'LG.jpg', '2020-06-07', 0),
(101, 'RETYU-k', 1, 3, 4, 1, 'Teclado SSD', 230000, 23, 'teclado.jpg', '2020-06-07', 0),
(111, 'TERK-M', 1, 1, 2, 3, 'Teclado M', 34000, 1, '', '2020-06-07', 0),
(121, 'TWRRE', 1, 1, 2, 1, 'Torre hp', 120000, 2, 'torre3.jpg', '2020-06-07', 0),
(131, 'TRROW-34', 1, 1, 2, 1, 'Torre LG', 340000, 4, 'torre2.jpg', '2020-06-07', 0),
(141, 'MIUG-56', 1, 1, 3, 1, 'Mouse RX5000', 34000, 3, 'mou3.jpg', '2020-06-08', 0),
(151, 'MOUIT-yu', 1, 1, 3, 1, 'Mouse vx67', 34000, 4, 'mouse.jpg', '2020-06-08', 0),
(161, 'hgty-34', 1, 1, 5, 1, 'cable utp2', 12000, 3, 'audio.jpeg', '2020-06-08', 0),
(171, 'ghjkl-l', 1, 1, 1, 1, 'prueba', 1000, 1, 'acer.jpeg', '2020-06-08', 0),
(181, 'FGHTY-78', 1, 1, 1, 1, 'Monitor HD', 230000, 2, 'monitor20.jpg', '2020-06-08', 0),
(191, '3456789', 1, 1, 1, 1, 'pantalla lcd', 120000, 4, 'descarga.jpg', '2020-06-08', 0),
(201, 'CFGHN-90', 1, 1, 1, 1, 'Cable imagen', 30000, 2, 'cable de imagen.jpg', '2020-06-08', 0),
(211, '45678', 1, 1, 1, 1, 'jhkjhajashd', 345000, 23, 'audio.jpeg', '2020-06-08', 0),
(221, 'MN44567890', 1, 1, 1, 1, 'audio', 3000, 1, 'audio.jpeg', '2020-06-08', 0),
(231, 'n34578', 1, 1, 1, 1, 'acer.jpeg', 120000, 1, 'acer.jpeg', '2020-06-16', 0),
(241, 'nbvCe-rt', 1, 1, 1, 1, 'pantalla lg', 120000, 1, 'LG.jpg', '2020-06-16', 0),
(251, 'retyuio', 1, 1, 1, 1, 'prueba 2 pantalla', 120000, 2, 'acer.jpeg', '2020-06-16', 0),
(261, 'dfghjklyui', 1, 1, 1, 1, 'pantalla', 123000, 2, 'cable3.jpg', '2020-06-16', 0),
(271, '34567890', 1, 1, 1, 1, 'fdghjk', 345678, 3, 'audio.jpeg', '2020-06-16', 0),
(281, 'TECRF-KL', 1, 1, 4, 1, 'Teclado gamer', 120000, 3, 'teclado.jpg', '2020-06-16', 0),
(291, '1234', 1, 1, 5, 1, 'imagen prueba', 12000, 2, 'datos.jpg', '2020-06-16', 0),
(301, 'RECDFT', 1, 1, 4, 1, 'Teclado tactil', 230000, 2, 'teclado.jpg', '2020-06-21', 0),
(311, 'MNBF-56', 1, 6, 3, 1, 'Mouse New', 230000, 2, 'descarga.jpg', '2020-06-22', 0),
(321, 'CDFju78', 1, 3, 5, 1, 'audio.jpeg', 12000, 2, 'audio.jpeg', '2020-06-23', 0),
(331, 'TOPH-67', 1, 2, 1, 1, 'toshiba.jpg', 120000, 1, 'toshiba.jpg', '2020-06-23', 100),
(341, 'NUBN', 1, 1, 1, 1, 'monitor20.jpg', 20000, 2, 'monitor20.jpg', '2020-06-23', 100),
(351, 'MUIY-89', 1, 4, 3, 1, 'mouse.jpg', 50000, 1, 'mouse.jpg', '2020-06-23', 300),
(361, '123-jkl', 1, 1, 1, 1, 'teclado master', 120000, 1, 'teclado.jpg', '2020-06-23', 102),
(371, 'Monituy', 1, 1, 1, 1, 'Monitor', 120000, 1, 'monitor20.jpg', '2020-06-23', 100),
(391, 'MONYUT', 1, 1, 1, 1, 'Pantalla 4k', 120000, 1, 'descarga (1).jpg', '2020-06-24', 100),
(401, 'AAAprueba', 2, 1, 1, 1, 'Monitor prueba 2024', 650, 1, '1156488.png', '2024-04-08', 301),
(403, 'MONITORPRUEBA', 1, 1, 1, 1, 'activop', 12, 1, '1156488.png', '2024-04-11', 301);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int NOT NULL,
  `Nombrecategoria` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `Nombrecategoria`) VALUES
(1, 'Monitores'),
(2, 'Torres'),
(3, 'Mouses'),
(4, 'Teclados'),
(5, 'Cableado'),
(6, 'Accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int NOT NULL,
  `NombreEstado` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `NombreEstado`) VALUES
(1, 'Disponible'),
(2, 'Reparacion'),
(3, 'De baja'),
(4, 'Prestado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `idPrestamo` int NOT NULL,
  `Activos_idActivo` int NOT NULL,
  `Usuarios_idUsuario` int NOT NULL,
  `Fecha_Entrega` date DEFAULT NULL,
  `Fecha_Devolucion` date DEFAULT NULL,
  `Estado` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`idPrestamo`, `Activos_idActivo`, `Usuarios_idUsuario`, `Fecha_Entrega`, `Fecha_Devolucion`, `Estado`) VALUES
(11, 181, 3, '2020-06-24', '2020-06-27', 1),
(23, 5, 1, '2024-04-11', '2024-04-11', 0),
(24, 6, 1, '2024-04-10', '2024-04-10', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int NOT NULL,
  `NombreProveedor` varchar(250) DEFAULT NULL,
  `Telefono` varchar(250) DEFAULT NULL,
  `Dirección` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `NombreProveedor`, `Telefono`, `Dirección`) VALUES
(1, 'HP', '2147483647', 'Centro'),
(2, 'TOSHIBA', '2147483647', 'Unilago'),
(3, 'Sandiks', '45678923', 'Centro'),
(4, 'Sandiks', '45678923', 'Centro'),
(5, 'Dell', '345678', 'Paloquemao'),
(6, 'Lg', '567893', 'Centro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `id` int NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id`, `nombre`) VALUES
(1, 'johan'),
(11, 'william'),
(21, 'fredy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int NOT NULL,
  `NombreRol` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `NombreRol`) VALUES
(1, 'Administrador'),
(2, 'Logistica'),
(3, 'Instructor'),
(4, 'Aprendiz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `idSede` int NOT NULL,
  `NombreSede` varchar(250) DEFAULT NULL,
  `Dirección` varchar(250) DEFAULT NULL,
  `Ciudad` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`idSede`, `NombreSede`, `Dirección`, `Ciudad`) VALUES
(1, 'CEET', 'Calle 30', 'Bogotá'),
(2, 'Paloquemao', 'calle 30', 'Bogotá');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoidentificacion`
--

CREATE TABLE `tipoidentificacion` (
  `idTipoIdentificacion` int NOT NULL,
  `NombreIdentificacion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoidentificacion`
--

INSERT INTO `tipoidentificacion` (`idTipoIdentificacion`, `NombreIdentificacion`) VALUES
(1, 'Cedula'),
(2, 'Tarjeta identidad'),
(3, 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int NOT NULL COMMENT 'cambiotres',
  `Sede_idSede` int NOT NULL,
  `Rol_idRol` int NOT NULL,
  `TipoIdentificacion_idTipoIdentificacion` int NOT NULL,
  `Identificacion` int DEFAULT NULL,
  `Nombres` varchar(250) DEFAULT NULL,
  `Apellidos` varchar(250) DEFAULT NULL,
  `Direccion` varchar(250) DEFAULT NULL,
  `Telefono` varchar(250) DEFAULT NULL,
  `Correo` varchar(250) DEFAULT NULL,
  `Usuario` varchar(250) DEFAULT NULL,
  `Contrasena` varchar(250) DEFAULT NULL,
  `activacion` int DEFAULT '1',
  `token_password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password_request` int DEFAULT '0',
  `Ambiente` int DEFAULT NULL,
  `Estado` int NOT NULL DEFAULT '1',
  `Fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Sede_idSede`, `Rol_idRol`, `TipoIdentificacion_idTipoIdentificacion`, `Identificacion`, `Nombres`, `Apellidos`, `Direccion`, `Telefono`, `Correo`, `Usuario`, `Contrasena`, `activacion`, `token_password`, `password_request`, `Ambiente`, `Estado`, `Fecha_registro`) VALUES
(1, 1, 1, 1, 1000699052, 'Johan Steven', 'Rodriguez Bermudez', 'Suba calle 145', '3214844312', 'Johanrodriguezbermudez@gmail.com', 'johansteven18', '$2y$10$GL4QXa9jQvSocY91xpMhR.KhJLf9NROFqli8pvDouA20J4Zp5FMoa', 1, '42cbbc2c8a37aef9ad4769846c67926d', 1, 300, 1, '2020-05-29'),
(2, 1, 3, 1, 1000899076, 'Willian', 'Ramirez Roa', 'Soacha', '3112456789', 'ramirezw65@gmail.com', 'william56', '$2y$10$TVUssKIzZ4PTXlXaa0hj3eQWGNauTfsPDOylHrDfK0fojrCXAPIFW', 1, '', 0, 100, 0, '2020-05-29'),
(3, 1, 3, 1, 78500889, 'Chamel Daniel', 'Diaz Cardenas', 'Calle 80', '3245678910', 'Chamel10@gmail.com', 'chamel10', '$2y$10$LLSi0wYS14zYUpBaRwOQQufOwpgbAPO0eH/Rii7UEnG5dEpraM2cC', 1, '', 0, 100, 1, '2020-05-29'),
(4, 1, 2, 1, 1000899765, 'Maria Valentina', 'Ramirez Lopez', 'Villamaria', '3245671890', 'Maria@gmail.com', 'valentina18', '$2y$10$SSOrpeIgRjO6khRu1v12eeFj1S6A/nimpgX6OnsTQgSTcMkYgNbvO', 1, '', 0, 100, 1, '2020-05-29'),
(5, 1, 4, 1, 544009987, 'Angela Liliana', 'Bermudez Cardenas', 'Suba Caminos 2', '3112114567', 'Angela@gmail.com', 'Angela26', '$2y$10$/eyBYVZS97x0qxOcnDKiLOqMn1D/D2Zg3yGjPqcg5m92o5ihIx2g2', 1, '', 0, 201, 0, '2020-05-30'),
(6, 2, 3, 2, 78500886, 'Pedro Ivan', 'Rodriguez Herrera', 'Panama City', '57400889', 'Ivan@gmail.com', 'ivan18', '$2y$10$HAks4mZRiOy/hkmsijEeSO69zmNAY4iLml8g7UeH27eUlncrdGrO6', 1, '', 0, 200, 1, '2020-05-30'),
(7, 1, 1, 1, 199876543, 'Nicolle Andrea', 'Rodriguez Bermudez', 'Suba Caminos2', '6543218907', 'Nicolle@gmail.com', 'nicolle14', '$2y$10$NMMJO3ZCO7R/gHVkt7H1mO.Nt5F0tm7Sp4ISIhsilfGj2saynQy4m', 1, '', 0, 206, 1, '2020-05-30'),
(8, 2, 4, 1, 4562348, 'Danilo', 'Martinez', 'Calle 80', '3456789013', 'Danilu@gmail.com', 'danilu', '$2y$10$I40zS/Wg4Lb.CC6D7UQ3BuJ5LUnPKefKy3AzhQQ6QRmvANWFxdPhe', 1, '', 0, 100, 1, '2020-06-03'),
(9, 2, 4, 1, 2147483647, 'Danilo', 'Ricaurte', 'Calle 80', '4567890', 'Danilu@gmail.com', 'danilu12', '$2y$10$TWghjuAkm0a9YrVAcq4NkuMIcXsSQh48f92gl0GycTHziyZe96JWK', 1, '', 0, 100, 1, '2020-06-03'),
(10, 1, 4, 1, 4567890, 'jrwilli', 'ramirez', 'soacha', '456789', 'jrwilli@gmail.com', 'jrwilli', '$2y$10$/ojSu6YOGDB6MrI2sh6OQOhGd6ppnNao1AZVM7RhEJV/4Jo6O1GeC', 1, '', 0, 205, 1, '2020-06-03'),
(11, 1, 2, 1, 2147483647, 'Miguel Angel', 'Rodriguez Blanco', 'El muelle', '3456789012', 'miguel@gmail.com', 'migue34', '$2y$10$gC.WsZH7oqOwnHjG9VZKMuJn.ROeVxfzJTK/j9vMIPciZyHYg4z8q', 1, '', 0, 100, 1, '2020-06-03'),
(21, 1, 4, 1, 1120560095, 'Alex', 'Cano', 'soacha', '12345', 'willianintel@gmail.com', 'alexcano23', '$2y$10$p8B/e4wri2key82or6a3yOpXLZ9idJqgFKRPUVOUcl3/TEWhAlGGm', 1, '', 0, 304, 1, '2020-06-04'),
(31, 1, 2, 1, 1000456789, 'Armando ', 'Paredes', 'soacha', '3214567890', 'desarmandoparedes@gmail.com', 'armando23', '$2y$10$ec5CMAFMyiHxVW2jF1GXp.AVpxxg7qoiQwsYhlaOWqqpD2DQRGhiG', 1, '', 0, 105, 1, '2020-06-04'),
(41, 1, 4, 1, 345678, 'valentina', 'ramirez', 'suba', '456789', 'valentina@gmail.com', 'valentina21', '$2y$10$uQc2zIyEfJy1gLmN0KLoYOa6wJ4er5pZR84CzLnkVG4XeDO0WZnh6', 1, '', 0, 200, 1, '2020-06-06'),
(51, 2, 3, 1, 1000899754, 'Mauricio', 'Torres', 'Calle 80', '3214567892', 'MauricioDiaz@gmail.com', 'mauri22', '$2y$10$9n81rNy8mpBIN12Kr3UGAOr7e0RKTx6hKLr7c0j0dBG5gYDje.CEC', 1, '', 0, 100, 1, '2020-06-07'),
(61, 1, 3, 1, 1234567866, 'Diana ', 'Blanco', 'El muelle', '3214563214', 'diana@gmail.com', 'diana33', '$2y$10$mdZxhSXtjWUyFmo19a/GJOmOvdEK.IbLof4jnzr.VsZgQog30ID1.', 1, '', 0, 230, 1, '2020-06-07'),
(71, 1, 3, 2, 34567890, 'willi', 'roa', 'soacha', '345678', 'willi', 'willimaster', '$2y$10$x8LKxvAI.84jo1zICJbVsuzmTrxX4Gg657XQ0pzlsFA8nkvq7mPIq', 1, '', 0, 100, 1, '2020-06-08'),
(81, 1, 1, 1, 1239875423, 'marcos', 'dias', 'soacha', '3214567890', 'marcos@gmail.com', 'marcos10', '$2y$10$s6saqU/SXkKBOFITd6ByGughUi2leZLQ9lbN0PjcL5U7PSahURyky', 1, '', 0, 100, 1, '2020-06-08'),
(91, 2, 4, 1, 2147483647, 'alex', 'cano', 'soacha', '4321678', 'canoalex@gmail.com', 'alexcan33', '$2y$10$5J43zyBbJFtzKo7HFHVYhO95pdigwTHnrrjhT/ETPOH2kLuxHhqxO', 1, '', 0, 100, 1, '2020-06-10'),
(101, 1, 4, 1, 567831234, 'jorge', 'blanco', 'muelle', '3215670045', 'jorge@gmail.com', 'jorge44', '$2y$10$KxPc4M66cwJ6SxPbh8pDq.uOjeKJUPtQUun9ZHO2ujSTuzLQdk3hK', 1, '', 0, 100, 1, '2020-06-10'),
(111, 1, 4, 1, 2147483647, 'nicol', 'camaleon', 'caqueta', '3214567098', 'amdrea@gmail.com', 'nicol33', '$2y$10$1ESvxTEACAvhxiexl7LMx.p8NuSoGsF5EzjrsZdXPmpLPPx9wALD2', 1, '', 0, 300, 1, '2020-06-10'),
(121, 1, 1, 1, 19311874, 'Osman', 'Sanchez', 'calle 145', '3214844313', 'bermudez@gmail.com', 'osman18', '827ccb0eea8a706c4c34a16891f84e7b', 1, '', 0, 100, 1, '2020-06-10'),
(131, 1, 1, 1, 19313474, 'Jhon', 'Sanchez', 'calle 145', '3214898313', 'sanchez@gmail.com', 'jhon18', '8cb2237d0679ca88db6464eac60da96345513964', 1, '', 0, 100, 1, '2020-06-10'),
(141, 1, 4, 1, 552345678, 'NICOLAS', 'PRIETO', 'VILLACINDY', '3221345678', 'nicolas@gmail.com', 'nico.1414', '$2y$10$Ej0c.8OeDMlmH7pTflToI.XKoB2O1u5SAdKEh6ODvh3pMbE5a7sTC', 1, '', 0, 100, 1, '2020-06-11'),
(151, 1, 4, 1, 1015434957, 'CAMILO', 'ORTIZ', 'SUBA', '3107595375', 'camilo.ortiz.p@icloud.com', 'camilo23', '$2y$10$.vqPbTwIm.bfQW3nfFxWRO.UMaoKehKLkX531q6qKvJRcgVKM7SGq', 1, '', 0, 204, 1, '2020-06-14'),
(161, 1, 4, 1, 1456023, 'pepito', 'vargas', 'soacha', '123456', 'pepito@gmail.com', 'pepito10', '$2y$10$GVH10.Z99C.Q3QZ7QINSEuNMfCXsFy42TX3A3aEwyhtWn359jUXWm', 1, '', 0, 100, 1, '2020-06-19'),
(171, 1, 1, 1, 2147483647, 'johan p', 'rodriguez p', 'soacha', '321456789', 'fghjklslksj', 'johan', '$2y$10$8D8Rj4L37jSqPa06OIgZP.gW.hqUGXPKvpoUGapwKnegxw11dLe7u', 1, '', 0, 100, 1, '2020-06-21'),
(181, 1, 3, 1, 1230986435, 'miguel', 'rodriguez', 'muelle', '4567890', 'fghjkl', 'migue44', '$2y$10$YMPrm0CUvlC4n26oE6E0GOBIAdXuM7C8msf36JxDJEuSFi6ZLj1Xa', 1, '', 0, 123, 1, '2020-06-21'),
(191, 1, 3, 1, 234511789, 'juan ', 'bermudez', 'la 30', '345678911', 'jikosja', 'juan55', '$2y$10$G5kpq4AUT1xaXC5Ji48xnOBgMBiqhh/2QwsT78Qe5cdYH7TKOFAom', 1, '', 0, 100, 1, '2020-06-21'),
(201, 1, 4, 2, 156789324, 'ruben alfredo', 'rueda ', 'soacha', '3215678923', 'ruben@gmail.com', 'ruben12', '$2y$10$wO/nSs0SfJQQigP3d647c.tBY2qgheykaMm20vuFmrMAfuqL4Habq', 1, '', 0, 100, 1, '2020-06-21'),
(211, 1, 1, 1, 1000655231, 'Enrique Andres', 'Lozada Ramirez', 'Villamaria', '3156987452', 'enrique@gmail.com', 'enrique23', '$2y$10$LqCmFj3Diwpd2KEloGj6ce6SStZLEZtJxJ6PH5tQ0Nikl7B6HLrUC', 1, '', 0, 100, 1, '2020-06-22'),
(221, 1, 4, 1, 1118536845, 'Alex', 'Cano', 'Soacha', '3214412006', 'ramirezw6523@gmail.com', 'alexcano23', '$2y$10$evkXYqJqP4zvOtgvuqdGKOMJrm16RXVzW2EyUGw3f0akJjRlr1hTu', 1, '', 0, 304, 1, '2020-06-23'),
(231, 1, 1, 1, 5467890, 'hsjajhkdlsa', 'kslkaskld', 'kljslkjasdksa', '76890', 'kjshdaj@jhkskjah', 'jksajsa', '$2y$10$82u1JSrwJd62nF9AJCHysO9xwTO5OOz.tmRqZ0VNixZvKan6PUTGi', 1, '', 0, 100, 1, '2020-06-23'),
(241, 1, 1, 1, 12332456, 'Juanito Alejandro', 'bermudez Narvaes', 'Venecia', '3212115698', 'Juan@gmail.com', 'juan11', '$2y$10$qqhlw/CVDeBIj3D7lwiK1OthCFRkWUS66DLSPSRTcTpBldXtQwAsi', 1, '', 0, 100, 1, '2020-06-24'),
(251, 2, 4, 1, 147852, 'alexa', 'diaz', 'suba alpinos', '1232456', 'johan2@ohanh', 'jrodriguezb', '$2y$10$CG4Z7ju/9ttzWYEuIAdE9.ZHU2g3DC0JyM1o6sTvWmomL4/3u6i92', 1, NULL, 0, 201, 1, '2024-04-11'),
(252, 2, 4, 1, 159753, 'ricardo', 'diaz', 'SUBA', '321478', 'ricardo@ricardo', 'richi', '$2y$10$cQwX0AxfDEtKS4GSVPUOzOTvHAzDAP1ZJ/Qe8OVT6g2Fktwgnr0vS', 1, NULL, 0, 701, 0, '2024-04-11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activos`
--
ALTER TABLE `activos`
  ADD PRIMARY KEY (`idActivo`),
  ADD KEY `Activos_FKIndex2` (`Estado_idEstado`),
  ADD KEY `Activos_FKIndex3` (`Categoria_idcategoria`),
  ADD KEY `Activos_FKIndex4` (`Proveedor_idProveedor`),
  ADD KEY `Activos_FKIndex5` (`Sede_idSede`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`idPrestamo`),
  ADD KEY `Prestamo_FKIndex2` (`Usuarios_idUsuario`),
  ADD KEY `Prestamo_FKIndex3` (`Activos_idActivo`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`idSede`);

--
-- Indices de la tabla `tipoidentificacion`
--
ALTER TABLE `tipoidentificacion`
  ADD PRIMARY KEY (`idTipoIdentificacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `Usuarios_FKIndex1` (`TipoIdentificacion_idTipoIdentificacion`),
  ADD KEY `Usuarios_FKIndex2` (`Rol_idRol`),
  ADD KEY `Usuarios_FKIndex3` (`Sede_idSede`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activos`
--
ALTER TABLE `activos`
  MODIFY `idActivo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=407;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `idPrestamo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `idSede` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipoidentificacion`
--
ALTER TABLE `tipoidentificacion`
  MODIFY `idTipoIdentificacion` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT COMMENT 'cambiotres', AUTO_INCREMENT=253;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `activos`
--
ALTER TABLE `activos`
  ADD CONSTRAINT `activos_ibfk_1` FOREIGN KEY (`Proveedor_idProveedor`) REFERENCES `proveedor` (`idProveedor`),
  ADD CONSTRAINT `activos_ibfk_2` FOREIGN KEY (`Categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`),
  ADD CONSTRAINT `activos_ibfk_3` FOREIGN KEY (`Estado_idEstado`) REFERENCES `estado` (`idEstado`);

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`Activos_idActivo`) REFERENCES `activos` (`idActivo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
