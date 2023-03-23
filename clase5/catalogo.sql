-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-10-2021 a las 20:09:23
-- Versión del servidor: 8.0.26
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo`
--
CREATE DATABASE catalogo;
USE catalogo;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
                              `idCategoria` tinyint unsigned NOT NULL auto_increment primary key,
                              `catNombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias`
            (`idCategoria`, `catNombre`)
        VALUES
          (1, 'PC'),
          (2, 'Smartphone'),
          (3, 'Tablets'),
          (4, 'Accesorios'),
          (5, 'Cargadores'),
          (6, 'Notebooks'),
          (7, 'Fundas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
                          `idMarca` tinyint unsigned NOT NULL auto_increment primary key ,
                          `mkNombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas`
            (`idMarca`, `mkNombre`)
        VALUES
             (1, 'Apple'),
             (2, 'Samsung'),
             (3, 'Huawei'),
             (4, 'LG'),
             (5, 'Motorola'),
             (6, 'Google'),
             (7, 'Asus'),
             (8, 'ZTE'),
             (9, 'Nokia'),
             (10, 'Lenovo'),
             (11, 'PlayStation'),
             (12, 'Ninendo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
                             `idProducto` int unsigned not null auto_increment primary key ,
                             `prdNombre` varchar(30) NOT NULL,
                             `prdPrecio` double( 9,2 ) NOT NULL,
                             `idMarca` tinyint unsigned NOT NULL,
                                constraint productos_marcas
                                    FOREIGN KEY ( idMarca )
                                        references marcas ( idMarca ),
                             `idCategoria` tinyint unsigned NOT NULL,
                                constraint productos_categorias
                                    FOREIGN KEY (idCategoria)
                                        references categorias (idCategoria),
                             `prdDescripcion` text NOT NULL,
                             `prdImagen` varchar(45)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos`
    (`idProducto`, `prdNombre`, `prdPrecio`, `idMarca`, `idCategoria`, `prdDescripcion`, `prdImagen`)
VALUES
   (1, 'iPhone 6', 499.99, 1, 2, '16GB', 'P001.jpg'),
   (2, 'iPad Pro', 599.99, 1, 3, '32GB', 'P002.jpg'),
   (3, 'Nexus 7', 299.99, 6, 3, '32GB', 'P003.jpg'),
   (4, 'Galaxy S7', 459.9, 2, 2, '64GB', 'P004.jpg'),
   (5, 'Moto G', 489.99, 5, 2, '8GB', 'P005.jpg'),
   (6, 'L40', 199.69, 4, 2, '24GB', 'P006.jpg');

