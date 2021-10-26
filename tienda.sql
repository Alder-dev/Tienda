-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2021 a las 01:29:28
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `usuario` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`usuario`, `contrasena`) VALUES
('Alder', 'Aa122015'),
('usuario', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `board`
--

CREATE TABLE `board` (
  `ID` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `board`
--

INSERT INTO `board` (`ID`, `imagen`, `nombre`, `precio`, `descripcion`) VALUES
(9, 'images/image109.jpg', 'Asus Maximus VIII Extreme', 2538000, 'Ranuras de memoria: 4-DDR4.\r\nTamaño maximo de memoria: 64Gb.\r\nConectores SATA 3: 4.\r\nConectores USB 3.0: 4.\r\nCanales de audio: 8.\r\nVelocidad maxima de RAM: 3866MHz.'),
(10, 'images/image111.jpg', 'MSI X299 XPower Gaming', 1954000, 'Ranuras de memoria: 8-DDR4.\r\nTamaño maximo de memoria: 128Gb.\r\nConectores SATA 3: 10.\r\nConectores USB 3.0: 2.\r\nCanales de audio: 7.1.\r\nVelocidad maxima de RAM: 4133MHz.'),
(11, 'images/image112.jpg', 'ASRock Fatal1ty Z170 i7', 1098000, 'Ranuras de memoria: 4-DDR4.\r\nTamaño maximo de memoria: 64Gb.\r\nConectores SATA 3: 10.\r\nConectores USB 3.0: 6.\r\nCanales de audio: 7.1.\r\nVelocidad maxima de RAM: 3866MHz.'),
(12, 'images/image113.jpg', 'Gigabyte X299X Designare 10G', 2618000, 'Ranuras de memoria: 8-DDR4.\r\nTamaño maximo de memoria: 256Gb.\r\nConectores SATA 3: 6.\r\nConectores USB 3.0: 4.\r\nCanales de audio: 7.1.\r\nVelocidad maxima de RAM: 4333MHz.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buzon_contacto`
--

CREATE TABLE `buzon_contacto` (
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celulares`
--

CREATE TABLE `celulares` (
  `ID` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `celulares`
--

INSERT INTO `celulares` (`ID`, `imagen`, `nombre`, `precio`, `descripcion`) VALUES
(25, 'images/image126.jpg', 'Oneplus 8 pro', 4995000, 'Almacenamiento: 256Gb/12GbRAM.\r\nProcesador: Snapdragon 865.\r\nResistencia al agua: iP68.\r\nTamaño de pantalla: 6.78 (1440x3160px)-513Dpi.\r\nCamara principal: 48MP & 48MP & 8MP & 5MP.\r\nCamara frontal: 16MP.\r\nBateria: 4510mAh.'),
(26, 'images/image127.jpeg', 'Xiaomi Mi 10 Pro 5G', 5995000, 'Almacenamiento: 512Gb/12GbRAM.\r\nProcesador: Snapdragon 865.\r\nGrabacion de video: 4320 x 30fps.\r\nTamaño de pantalla: 6.67 (1080x2340px)-386Dpi.\r\nCamara principal: 108MP & 12MP & 8MP & 20MP.\r\nCamara frontal: 20MP.\r\nBateria: 4500mAh.'),
(27, 'images/image128.jpg', 'Samsung Galaxy 20 Plus 5G', 4895000, 'Almacenamiento: 512Gb/12GbRAM.\r\nProcesador: Snapdragon 865.\r\nResistencia al agua iP68.\r\nTamaño de pantalla: 6.7 (1440x3200px)-525Dpi.\r\nCamara principal: 64MP & 12MP & 12MP & 0.3MP.\r\nCamara frontal: 10MP.\r\nBateria: 4500mAh.\r\n\r\n'),
(28, 'images/image129.jpeg', 'Huawei P40 Pro Plus 5G', 5015000, 'Almacenamiento: 256Gb/8Gb-RAM.\r\nProcesador: Kirin 990.\r\nResistencia al agua iP68.\r\nTamaño de pantalla: 6.58 (1200x2640px)-441Dpi.\r\nCamara principal: 50MP & 40MP & 8MP & 8MP.\r\nCamara frontal: 32MP.\r\nBateria: 4200mAh.'),
(29, 'images/image130.jpg', 'Apple iPhone 11 Pro Max', 6169000, 'Almacenamiento: 512Gb/4Gb-RAM.\r\nProcesador: Apple A13 Bionic.\r\nResistencia al agua iP68.\r\nTamaño de pantalla: 6.5 (1242x2688px)-458Dpi.\r\nCamara principal: 12MP & 12MP & 12MP.\r\nCamara frontal: 12MP.\r\nBateria: 3969mAh.'),
(30, 'images/image131.jpg', 'Xiaomi Redmi Note 9s', 859000, 'Almacenamiento: 128Gb/6Gb-RAM.\r\nProcesador: Snapdragon 720G.\r\nResistencia contra salpicaduras.\r\nTamaño de pantalla: 6.67 (1080x2400px)-395Dpi.\r\nCamara principal: 48MP & 8MP & 5MP & 2MP.\r\nCamara frontal: 16MP.\r\nBateria: 5020mAh.'),
(31, 'images/image133.jpg', 'Huawei P40 Lite', 985000, 'Almacenamiento: 128Gb/6Gb-RAM.\r\nProcesador: Kirin 810.\r\nResistencia contra salpicaduras.\r\nTamaño de pantalla: 6.4 (1080x2310px)-398Dpi.\r\nCamara principal: 48MP & 8MP & 2MP & 2MP.\r\nCamara frontal: 16MP.\r\nBateria: 4200mAh.'),
(32, 'images/image134.jpg', 'Realme 6 Pro', 1140000, 'Almacenamiento: 128Gb/8Gb-RAM.\r\nProcesador: Snapdragon 720G.\r\nResistencia contra salpicaduras.\r\nTamaño de pantalla: 6.6 (1080x2400px)-399Dpi.\r\nCamara principal: 48MP & 12MP & 8MP & 2MP.\r\nCamara frontal: 16MP & 8MP.\r\nBateria: 4300mAh.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chasis`
--

CREATE TABLE `chasis` (
  `ID` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `chasis`
--

INSERT INTO `chasis` (`ID`, `imagen`, `nombre`, `precio`, `descripcion`) VALUES
(13, 'images/image114.jpg', 'Nox Hummer Rainbow-RGB', 516900, '4 ventiladores RGB.\r\nPuertos USB 3.0: 2.\r\nCapacidad para instalar hasta 9 ventiladores.\r\nControl de secuencia de colores.\r\nControl de velocidad para ventiladores.\r\nPaneles frontal y lateral de cristal.'),
(14, 'images/image115.jpg', 'Aerocool Visor Box RGB', 470900, '2 ventiladores RGB.\r\nPuertos USB 3.0: 2.\r\nFiltros anti polvo extraíbles.\r\nPlacas base E-ATX, ATX, micro ATX, Mini ITX.\r\nSoporta refrigeración líquida delantera, superior y posterior.\r\nPanel lateral de cristal.'),
(15, 'images/image116.jpg', 'Aerocool Shard-RGB', 178900, '2 ventiladores RGB.\r\nPuertos USB 3.0/3.1: 2.\r\nPuertos USB 2.0: 2.\r\nPlacas base ATX, Micro-ATX, Mini-ITX.\r\nSoporta hasta 3 ventiladores.\r\nPanel lateral de cristal.'),
(16, 'images/image117.jpg', 'Mars Gaming MCK-RGB', 182900, '2 ventiladores RGB.\r\nPuertos USB 3.0/3.1: 1.\r\nPuertos USB 2.0: 1.\r\nPlacas base ATX, Micro-ATX, Mini-ITX.\r\nSoporta hasta 2 ventiladores.\r\nPanel lateral izquierdo de cristal.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_pago`
--

CREATE TABLE `datos_pago` (
  `numero` int(20) NOT NULL,
  `exp` varchar(5) NOT NULL,
  `cvv` int(4) NOT NULL,
  `postal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_pago`
--

INSERT INTO `datos_pago` (`numero`, `exp`, `cvv`, `postal`) VALUES
(243424323, '12/25', 123, 27001),
(5332, '11/25', 426, 27001),
(7763, '12/24', 142, 27001),
(2222, '11/22', 432, 27001),
(1111, '11/22', 765, 27001);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discos`
--

CREATE TABLE `discos` (
  `ID` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `discos`
--

INSERT INTO `discos` (`ID`, `imagen`, `nombre`, `precio`, `descripcion`) VALUES
(21, 'images/image118.jpg', 'Silicon Power P34A80 2TB (SSD)', 1890000, 'Almacenamiento: 2000Gb.\r\nTemperatura funcional: 70°C.\r\nVelocidad de lectura: 3400MB/s.\r\nVelocidad de escritura: 3000MB/s.'),
(22, 'images/image119.jpg', 'Samsung NVMe M2 1TB (SSD)', 1980000, 'Almacenamiento: 1000Gb.\r\nTemperatura funcional: 70°C.\r\nVelocidad de lectura: 3500MB/s.\r\nVelocidad de escritura: 2700MB/s.'),
(23, 'images/image120.webp', 'Seagate Barracuda 2tb (HDD)', 258900, 'Almacenamiento: 2000Gb.\r\nVelocidad de rotación: 7200rpm.\r\nVelocidad de lectura: 210MB/s.\r\nVelocidad de escritura: 75MB/s.'),
(24, 'images/image121.webp', 'Toshiba HGST1T 1tb (HDD)', 187900, 'Almacenamiento: 1000Gb.\r\nVelocidad de rotación: 5400rpm.\r\nVelocidad de lectura: 200MB/s.\r\nVelocidad de escritura: 65MB/s.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `ID` int(10) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `documento` varchar(150) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gpus`
--

CREATE TABLE `gpus` (
  `ID` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gpus`
--

INSERT INTO `gpus` (`ID`, `imagen`, `nombre`, `precio`, `descripcion`) VALUES
(5, 'images/image105.jpg', 'Zotac GeForce RTX 3090 Trinity', 5780000, 'Memoria de video: 24Gb GDDR6X.\r\nPantallas compatibles: 4.\r\nRecomendada fuente de poder 750W.\r\nConsumo de Energia 350W.\r\nPuertos: HDMI.\r\nVelocidad de GPU: 1395MHz.'),
(6, 'images/image106.jpg', 'Nvidia GeForce RTX 3090', 3260000, 'Memoria de video: 10Gb GDDR6X.\r\nPantallas compatibles: 4.\r\nRecomendada fuente de poder 750W.\r\nConsumo de Energia 350W.\r\nPuertos: HDMI.\r\nVelocidad de GPU: 1440MHz.'),
(7, 'images/image107.jpg', 'AMD Radeon VII', 2780000, 'Memoria de video: 16Gb GDDR6X.\r\nPantallas compatibles: 4.\r\nRecomendada fuente de poder 750W.\r\nConsumo de Energia 300W.\r\nPuertos: HDMI.\r\nVelocidad de GPU: 1450MHz.'),
(8, 'images/image108.jpg', 'Asus ROG Strix RTX 3090', 5780000, 'Memoria de video: 24Gb GDDR6X.\r\nPantallas compatibles: 4.\r\nRecomendada fuente de poder 750W.\r\nConsumo de Energia 350W.\r\nPuertos: HDMI 2.\r\nVelocidad de GPU: 1395MHz.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesador`
--

CREATE TABLE `procesador` (
  `ID` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `procesador`
--

INSERT INTO `procesador` (`ID`, `imagen`, `nombre`, `precio`, `descripcion`) VALUES
(1, 'images/image101.webp', 'AMD Ryzen 9-3950X', 3919900, 'Velocidad de CPU: 3.5GHz-4.7GHz Turbo.\r\nNucleos: 16 - 32 Hilos.\r\nMaximo de memoria RAM: 128Gb.\r\nTipos de la memoria RAM: DDR4-3200.\r\nCanales de memoria: 2.'),
(2, 'images/image100.jpg', 'Intel Core i9-10900K', 4860000, 'Velocidad de CPU: 3.7GHz-5.3GHz Turbo.\r\nNucleos: 10 - 20 Hilos.\r\nMaximo de memoria RAM: 128Gb.\r\nTipos de la memoria RAM: DDR4-2933.\r\nCanales de memoria: 2.'),
(3, 'images/image103.webp', 'AMD Ryzen 9-3900X', 2370000, 'Velocidad de CPU: 3.8GHz-4.6GHz Turbo.\r\nNucleos: 12 - 24 Hilos.\r\nMaximo de memoria RAM: 128Gb.\r\nTipos de la memoria RAM: DDR4-3200.\r\nCanales de memoria: 2.'),
(4, 'images/image104.jpg', 'Intel Core i9-10980XE', 4970000, 'Velocidad de CPU: 3GHz-4.6GHz Turbo.\r\nNucleos: 18 - 36 Hilos.\r\nMaximo de memoria RAM: 256Gb.\r\nTipos de la memoria RAM: DDR4-2933.\r\nCanales de memoria: 4.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ram`
--

CREATE TABLE `ram` (
  `ID` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ram`
--

INSERT INTO `ram` (`ID`, `imagen`, `nombre`, `precio`, `descripcion`) VALUES
(17, 'images/image122.jpg', 'Corsair Vengeance RGB Pro', 330000, 'Capacidad: 16Gb-DDR4.\r\nVelocidad de bus: 3200MHz.\r\nMarca: Corsair.\r\nModelo: CMW64GX4M8C3200C16.'),
(18, 'images/image123.png', 'Corsair Vengeance LPX', 446900, 'Capacidad: 32Gb-DDR4.\r\nVelocidad de bus: 2666MHz.\r\nMarca: Corsair.\r\nModelo: CMK32GX4M2Z5000C18.'),
(19, 'images/image124.webp', 'G.Skill TridentZ RGB', 435900, 'Capacidad: 16Gb-DDR4.\r\nVelocidad de bus: 3200MHz.\r\nMarca: G.SKILL TridentZ.\r\nModelo: F4-3200C16D-16GTZR.'),
(20, 'images/image125.jpg', 'Patriot Viper Elite', 125900, 'Capacidad: 8Gb-DDR4.\r\nVelocidad de bus: 2666MHz.\r\nMarca: Patriot Memory.\r\nModelo: PVE48G266C6GY.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `celulares`
--
ALTER TABLE `celulares`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `chasis`
--
ALTER TABLE `chasis`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `gpus`
--
ALTER TABLE `gpus`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `procesador`
--
ALTER TABLE `procesador`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `board`
--
ALTER TABLE `board`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `celulares`
--
ALTER TABLE `celulares`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `chasis`
--
ALTER TABLE `chasis`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `discos`
--
ALTER TABLE `discos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `gpus`
--
ALTER TABLE `gpus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `procesador`
--
ALTER TABLE `procesador`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ram`
--
ALTER TABLE `ram`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
