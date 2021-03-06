-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 14, 2018 at 02:04 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ahora3`
--

-- --------------------------------------------------------

--
-- Table structure for table `carritos`
--

CREATE TABLE `carritos` (
  `Id` int(11) NOT NULL,
  `Fecha` int(11) NOT NULL,
  `Usuarios-Id` int(11) NOT NULL,
  `Descuento` int(11) NOT NULL,
  `TotalPagar` int(11) NOT NULL,
  `Envio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripción` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `detalles`
--

CREATE TABLE `detalles` (
  `Id` int(11) NOT NULL,
  `Productos-Id` int(11) NOT NULL,
  `CantidadProductos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `NombreProd` text NOT NULL,
  `Categorias-Id` int(11) NOT NULL,
  `Precio` decimal(30,0) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Stpck` int(11) NOT NULL,
  `Imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(200) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `edad` int(11) UNSIGNED NOT NULL,
  `pais` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`Id`, `email`, `password`, `edad`, `pais`, `username`) VALUES
(16, 'safari@safari.com', '$2y$10$5ewGzoh5zTLTw6x8R9QuquwLg4BfHM87tkXxqBFdllBrJRIBDRzaq', 23, 'Ar', 'safari'),
(17, 'sol@sol.com', '$2y$10$8tnVOZ2fQPgx2.R7xNkpVe6BcNu8P3yaH3own5AjD8RUBPa1V9EBm', 23, 'Ar', 'sola'),
(18, 'luna@luna.com', '$2y$10$8Caw/fsgXEVIoONgSGCzcOAsh0cQSkLHvv57JdGNWvsYQRRettPWy', 21, 'Ar', 'luna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Usuarios-Id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Productos-Id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Categorias-Id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `detalles_ibfk_1` FOREIGN KEY (`Productos-Id`) REFERENCES `productos` (`Id`);

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Categorias-Id`) REFERENCES `categorias` (`Id`);
