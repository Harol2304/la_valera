CREATE TABLE `cliente` (
  `numero_id_cliente` bigint(20) NOT NULL,
  `nombre_cliente` varchar(25) NOT NULL,
  `telefono_cliente` bigint(20) NOT NULL,
  `direccion_cliente` varchar(30) NOT NULL,
  PRIMARY KEY (`numero_id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `compra` (
  `codigo_compra` bigint(20) NOT NULL,
  `valor_compra` decimal(10,5) NOT NULL,
  `tipo_comprobante` varchar(30) NOT NULL,
  `numero_id_empleado` bigint(20) NOT NULL,
  PRIMARY KEY (`codigo_compra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `detalle_codigo_producto` (
  `detalle_producto` bigint(30) NOT NULL,
  `cod_venta` bigint(10) NOT NULL,
  `codigo_producto` bigint(20) NOT NULL,
  PRIMARY KEY (`detalle_producto`),
  KEY `detalle_codigo_producto_ibfk_1` (`cod_venta`),
  KEY `detalle_codigo_producto_ibfk_2` (`codigo_producto`),
  CONSTRAINT `detalle_codigo_producto_ibfk_1` FOREIGN KEY (`cod_venta`) REFERENCES `venta` (`cod_venta`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detalle_codigo_producto_ibfk_2` FOREIGN KEY (`codigo_producto`) REFERENCES `producto` (`codigo_producto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `detalle_registro_compra` (
  `codigo_detalle_compra` varchar(30) NOT NULL,
  `codigo_compra` bigint(10) NOT NULL,
  `codigo_producto` bigint(10) NOT NULL,
  PRIMARY KEY (`codigo_detalle_compra`),
  KEY `codigo_compra` (`codigo_compra`),
  KEY `codigo_producto` (`codigo_producto`),
  CONSTRAINT `detalle_registro_compra_ibfk_1` FOREIGN KEY (`codigo_compra`) REFERENCES `compra` (`codigo_compra`),
  CONSTRAINT `detalle_registro_compra_ibfk_2` FOREIGN KEY (`codigo_compra`) REFERENCES `compra` (`codigo_compra`),
  CONSTRAINT `detalle_registro_compra_ibfk_3` FOREIGN KEY (`codigo_producto`) REFERENCES `producto` (`codigo_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `empleado` (
  `numero_id_empleado` bigint(20) NOT NULL,
  `nombre_empleado` varchar(25) NOT NULL,
  `telefono_empleado` bigint(20) NOT NULL,
  `direccion_empleado` varchar(30) NOT NULL,
  `cargo_empleado` varchar(20) NOT NULL,
  PRIMARY KEY (`numero_id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `producto` (
  `codigo_producto` bigint(10) NOT NULL,
  `categoria_producto` varchar(25) NOT NULL,
  `nombre_producto` varchar(30) NOT NULL,
  `precio_producto` decimal(10,5) NOT NULL,
  `presentacion_producto` varchar(30) NOT NULL,
  `tamaño_producto` bigint(10) NOT NULL,
  PRIMARY KEY (`codigo_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `proveedor` (
  `numero_id_proveedor` bigint(20) NOT NULL,
  `nombre_empleado` varchar(30) NOT NULL,
  `nombre_empresa_proveedor` varchar(30) NOT NULL,
  `email_proveedor` varchar(25) NOT NULL,
  `telefono_proveedor` bigint(20) NOT NULL,
  PRIMARY KEY (`numero_id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `surte` (
  `surte_producto` varchar(30) NOT NULL,
  `numero_id_proveedor` bigint(20) NOT NULL,
  `codigo_producto` bigint(20) NOT NULL,
  PRIMARY KEY (`surte_producto`),
  KEY `surte_ibfk_1` (`numero_id_proveedor`),
  KEY `surte_ibfk_2` (`codigo_producto`),
  CONSTRAINT `surte_ibfk_1` FOREIGN KEY (`numero_id_proveedor`) REFERENCES `proveedor` (`numero_id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `surte_ibfk_2` FOREIGN KEY (`codigo_producto`) REFERENCES `producto` (`codigo_producto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `usuario` (
  `cod_usuario` bigint(15) NOT NULL,
  `contraseña_usuario` varchar(20) NOT NULL,
  `rol_usuario` varchar(25) NOT NULL,
  `numero_id_empleado` bigint(20) NOT NULL,
  PRIMARY KEY (`cod_usuario`),
  KEY `usuario_ibfk_2` (`numero_id_empleado`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`numero_id_empleado`) REFERENCES `empleado` (`numero_id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`numero_id_empleado`) REFERENCES `empleado` (`numero_id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `venta` (
  `cod_venta` bigint(10) NOT NULL,
  `fecha_venta` date NOT NULL,
  `precio_venta` decimal(10,5) NOT NULL,
  `producto_venta` varchar(30) NOT NULL,
  `cantidad_venta` int(20) NOT NULL,
  `numero_id_cliente` bigint(20) DEFAULT NULL,
  `numero_id_empleado` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`cod_venta`),
  KEY `venta_ibfk_1` (`numero_id_cliente`),
  KEY `venta_ibfk_2` (`numero_id_empleado`),
  CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`numero_id_cliente`) REFERENCES `cliente` (`numero_id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`numero_id_empleado`) REFERENCES `empleado` (`numero_id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1