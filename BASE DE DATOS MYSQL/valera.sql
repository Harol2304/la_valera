-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2020 a las 16:44:49
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `valera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` int(15) NOT NULL,
  `direccion` varchar(35) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo_electronico` varchar(30) NOT NULL,
  `identificacion` int(15) NOT NULL,
  `contrasena` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `telefono`, `direccion`, `fecha_nacimiento`, `correo_electronico`, `identificacion`, `contrasena`) VALUES
(12345, 'cliente', 'perez', 23243214, 'mi casa', '2020-10-02', 'ejemplo_cliente@gmail.com', 123456, '\r\n\r\nNWZjOTA5YjUyMjNkMg=='),
(56879, 'pepito', 'perez', 938457, 'mi casa', '2020-10-01', 'sofiafrancofg68@gmail.com', 6562341, '\r\nMTIzNA=='),
(56880, 'maria', 'avila', 13423523, 'crr 6 b 60-20', '2004-03-12', 'mariaavila@gmail.com', 52786554, '\r\n\r\nMTIzNA=='),
(56881, 'juan pablo', 'garzon avila', 2147483647, 'crr 6 b 60-20', '2000-04-12', 'sfranco044@misena.edu.co', 108362860, 'NWZjMjg2M2IwNDQ1NA=='),
(56882, ' david', 'garzon', 2147483647, 'crr 6 b 60-20', '1998-03-20', 'david@gmail.com', 7391642, 'NWZjOTA5YjUyMjNkMg=='),
(56883, 'eduardo', 'diaz', 2147483647, 'crr6F#90-76', '1892-04-12', 'eduardo8765@gmail.com', 2087463, 'NWZjOTBhNWIyY2U3OQ=='),
(56884, 'elkin', 'rios', 2147483647, 'crr 6 b 60-20', '2000-03-12', 'elkinrios@gmail.com', 20986492, 'NWZjOTBhYjI1NGRkNw=='),
(56885, 'juan', 'perez', 2147483647, 'crr 6 b 60-20', '2000-12-12', 'breiner@gmial.com', 100986328, 'NWZjYTUxNTFiODZlMQ==');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `fecha_compra` date DEFAULT NULL,
  `hora_compra` date NOT NULL,
  `valor_vale` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `id_valera` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id_compra`, `fecha_compra`, `hora_compra`, `valor_vale`, `estado`, `id_valera`, `id_empleado`) VALUES
(10, '2020-10-01', '2020-10-12', 12000, 'activo', 1, 1),
(17, '2020-10-10', '0000-00-00', 12000, 'Disponible', 1, 1),
(18, '2020-12-12', '0000-00-00', 120000, 'Disponible', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_plato` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `cantidad_plato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id_plato`, `id_pedido`, `id`, `cantidad_plato`) VALUES
(0, 11, 1, 2),
(2, 11, 3, 6),
(5, 10, 4, 1),
(6, 7, 5, 2),
(2, 7, 6, 2),
(6, 12, 7, 1),
(2, 12, 8, 1),
(2, 13, 9, 1),
(5, 14, 10, 1),
(5, 16, 11, 3),
(5, 17, 12, 5),
(0, 17, 13, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(35) NOT NULL,
  `correo_electronico` varchar(30) NOT NULL,
  `identificacion` int(15) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `id_valera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre`, `apellido`, `telefono`, `direccion`, `correo_electronico`, `identificacion`, `contrasena`, `id_valera`) VALUES
(1, 'juan', 'perez', 31347652, 'crr 6 b 60-20', 'sofiafg68@gmail.com', 123456, 'NWZjMjU2OTQyMGYzMQ==', 1),
(2, 'jose', 'martinez ', 2147483647, 'crr 6 b 60-20', 'sofiafrancofg68@gmail.com', 100935289, 'NWZjMjU2OTQyMGYzMQ==', 1),
(3, 'julian', 'garzon', 2147483647, 'crr6este#90-76', 'juliangarzon@gmail.com', 966102, 'NWZjOTA3ZWQ2NjRlMw==', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerente`
--

CREATE TABLE `gerente` (
  `id_gerente` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` int(15) NOT NULL,
  `correo_electronico` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gerente`
--

INSERT INTO `gerente` (`id_gerente`, `nombre`, `apellido`, `telefono`, `correo_electronico`, `contrasena`) VALUES
(111, 'mario', 'jimenez', 68798, 'mario@gmail.com', 'MTIzNA==');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `id_gerente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id_menu`, `categoria`, `id_gerente`) VALUES
(1, 'sopas', 111),
(11, 'helados', 111),
(12, 'postres', 111),
(13, 'jugos naturales en leche ', 111),
(14, 'Ensaladas', 111),
(15, 'platos principales', 111),
(16, 'Desayunos', 111),
(17, 'ensaladas verdes', 111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_compra` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_compra`, `total`, `id_cliente`) VALUES
(7, 10, 12000, 12345),
(8, 10, 12500, 56881),
(10, 10, 8000, 56880),
(11, 10, 50000, 56881),
(12, 10, 7500, 56880),
(13, 10, 200000, 12345),
(14, 10, 0, 12345),
(15, 10, 0, 56881),
(16, 10, 0, 56880),
(17, 10, 0, 56881);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plato`
--

CREATE TABLE `plato` (
  `id_plato` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `ingredientes` varchar(65) NOT NULL,
  `descripcion` varchar(65) NOT NULL,
  `precio` int(11) NOT NULL,
  `img_plato` varchar(10000) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plato`
--

INSERT INTO `plato` (`id_plato`, `nombre`, `ingredientes`, `descripcion`, `precio`, `img_plato`, `id_menu`) VALUES
(0, 'papas', 'papas, aceite', 'papas fritas', 1350, 'data:image/jpeg;base64,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', 12),
(2, 'sopita', 'agua, pasta, papa, carne', 'sopa de pasta', 3500, 'data:image/jpeg;base64,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', 1),
(5, 'helado', 'crema de leche', 'helado de chocolate', 5500, 'https://upload.wikimedia.org/wikipedia/commons/3/31/Ice_Cream_dessert_02.jpg', 11),
(6, 'desayuno sencillo', 'huevos, pan, chocolate', 'desayuno sencillo ', 20000, 'https://i.pinimg.com/originals/ef/96/b7/ef96b7ca0f841d9ef0a0ac41a3a19374.jpg', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valera`
--

CREATE TABLE `valera` (
  `id_valera` int(11) NOT NULL,
  `cantidad_vales` int(25) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `valera`
--

INSERT INTO `valera` (`id_valera`, `cantidad_vales`, `id_cliente`) VALUES
(1, 12, 12345);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `Id_Valera` (`id_valera`),
  ADD KEY `Empleado_Id_Empleado` (`id_empleado`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Plato_Id_Plato` (`id_plato`),
  ADD KEY `Pedido_Id_Pedido` (`id_pedido`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `Valera_Id_Valera` (`id_valera`);

--
-- Indices de la tabla `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`id_gerente`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `Gerente_Id_Gerente` (`id_gerente`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `Id_vale` (`id_compra`),
  ADD KEY `Id_Cliente` (`id_cliente`);

--
-- Indices de la tabla `plato`
--
ALTER TABLE `plato`
  ADD PRIMARY KEY (`id_plato`),
  ADD KEY `Id_Menu` (`id_menu`);

--
-- Indices de la tabla `valera`
--
ALTER TABLE `valera`
  ADD PRIMARY KEY (`id_valera`),
  ADD KEY `Id_Cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56886;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `gerente`
--
ALTER TABLE `gerente`
  MODIFY `id_gerente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `plato`
--
ALTER TABLE `plato`
  MODIFY `id_plato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `valera`
--
ALTER TABLE `valera`
  MODIFY `id_valera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_valera`) REFERENCES `valera` (`id_valera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`id_plato`) REFERENCES `plato` (`id_plato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detalle_pedido_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_valera`) REFERENCES `valera` (`id_valera`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_gerente`) REFERENCES `gerente` (`id_gerente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plato`
--
ALTER TABLE `plato`
  ADD CONSTRAINT `plato_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `valera`
--
ALTER TABLE `valera`
  ADD CONSTRAINT `valera_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
