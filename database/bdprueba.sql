drop database if exists bdprueba;

create database bdprueba;

use bdprueba;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2022 a las 01:26:16
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdprueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(11) NOT NULL,
  `nombrec` varchar(30) NOT NULL,
  `apellidoc` varchar(50) NOT NULL,
  `dni` char(8) NOT NULL,
  `celular` char(9) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `sexo` char(1) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nombrec`, `apellidoc`, `dni`, `celular`, `direccion`, `sexo`, `estado`) VALUES
(1, 'Juan Roberto', 'Fernandez Castillo', '75124436', '987456321', 'Av. La Merced, 329', 'M', 1),
(2, 'Luis', 'Gonzales', '17524368', '945213654', 'Av. Mirandas Nº 2', 'M', 1),
(3, 'Maria', 'Cipriano', '75856932', '985621452', 'Av. San Ignacio Nº 645', 'F', 1),
(4, 'Marcos Javier', 'Diaz Castro', '58663214', '978552111', 'Av. San Luis Nº 234', 'M', 1),
(5, 'Francisco', 'Castillo Cortegana', '18456933', '945221314', 'Av. La Merced Nº 444', 'M', 1),
(6, 'Pedro Miguel', 'Paniagua Castillo', '25741139', '951487832', 'Av.  Lucecitas Nº 342', 'M', 1),
(7, 'Georgina', 'Aliaga', '14752698', '951336474', 'Av. Los Fernandez Nº 1255', 'F', 1),
(8, 'Cintia', 'Ruiz', '78077410', '915422311', 'Av. San Felipe Nº 1239', 'F', 1),
(9, 'Susana Luisa', 'Sanchez Peres', '74581235', '952136841', 'Av. Flores  Nº 281', 'F', 1),
(10, 'Ramón', 'Sanchez', '85124765', '951487223', 'Av.  Muner Nº 2', 'M', 1),
(11, 'Javier', 'Nureña H', '14758623', '985214741', 'Bonetillo Nº 234', 'M', 1),
(12, 'Ana', 'Garcia', '12345678', '987456123', 'Av. Ejemplo Nº 23', 'F', 1),
(13, 'Luii', 'Gallardo', '85632144', '965888411', 'Av. Ejemplo Nº 344', 'M', 1),
(14, 'Alberto', 'Rodriguez', '45852233', '985236471', 'Av. Ejemplo Nº 2222', 'M', 1),
(15, 'Jose Luis', 'Garcia', '18122605', '963258444', 'Av. Ejemplo Nº 222', 'M', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operaciones`
--

CREATE TABLE `operaciones` (
  `idoperacion` int(11) NOT NULL,
  `descripcion` varchar(80) DEFAULT NULL,
  `subtotal` varchar(20) DEFAULT NULL,
  `igv` varchar(20) DEFAULT NULL,
  `total` varchar(20) DEFAULT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `operaciones`
--

INSERT INTO `operaciones` (`idoperacion`, `descripcion`, `subtotal`, `igv`, `total`, `idcliente`, `estado`) VALUES
(1, 'AFC-M AFC-T', 'S/. 17.88', 'S/. 3.92', 'S/. 21.80', 2, 1),
(2, 'AFC-M  APR-G  ADA-T', 'S/. 92.41', 'S/. 20.29', 'S/. 112.70', 1, 1),
(3, 'APR-G  PFD-P  ACS-K', 'S/. 144.73', 'S/. 31.77', 'S/. 176.50', 3, 1),
(4, 'AMM-G  AMM-V  ADP-C', 'S/. 122.67', 'S/. 26.93', 'S/. 149.60', 3, 1),
(5, 'AMM-G', 'S/. 37.56', 'S/. 8.24', 'S/. 45.80', 2, 1),
(6, 'ADT-G', 'S/. 40.10', 'S/. 8.80', 'S/. 48.90', 1, 1),
(7, 'AMM-G  AMM-V  AFC-T', 'S/. 298.73', 'S/. 65.57', 'S/. 364.30', 3, 1),
(8, 'APR-G  ADT-G  PFD-P', 'S/. 147.27', 'S/. 32.33', 'S/. 179.60', 4, 1),
(9, 'PFD-P  JBF-R', 'S/. 49.82', 'S/. 10.94', 'S/. 60.76', 3, 1),
(10, 'APR-G  AMM-V  AFC-M  MGT-T  JBF-R', 'S/. 473.29', 'S/. 103.89', 'S/. 577.18', 11, 1),
(11, 'AFC-M  MGT-T  JBF-R  AMM-G', 'S/. 333.69', 'S/. 73.25', 'S/. 406.94', 10, 1),
(12, 'BAT-1', 'S/. 123.00', 'S/. 27.00', 'S/. 150.00', 12, 1),
(13, '	AC-43', 'S/. 131.04', 'S/. 28.76', 'S/. 159.80', 13, 1),
(14, 'AC-43', 'S/. 131.04', 'S/. 28.76', 'S/. 159.80', 2, 1),
(15, 'ADT-G  APR-G', 'S/. 90.04', 'S/. 19.76', 'S/. 109.80', 11, 1),
(16, 'BAT-1  AC-43', 'S/. 188.52', 'S/. 41.38', 'S/. 229.90', 14, 1),
(17, 'BAT-1  AC-43', 'S/. 188.52', 'S/. 41.38', 'S/. 229.90', 14, 1),
(18, 'AMM-G', 'S/. 18.78', 'S/. 4.12', 'S/. 22.90', 15, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `nombrep` varchar(80) DEFAULT NULL,
  `abreviatura` char(5) NOT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL,
  `ruta` varchar(70) NOT NULL,
  `estado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `nombrep`, `abreviatura`, `descripcion`, `cantidad`, `precio`, `ruta`, `estado`) VALUES
(1, 'ACEITE DE MOTOR MINERAL', 'AMM-G', 'ACEITES', 12, 22.9, 'producto1.jpg', 1),
(2, 'ACEITE DE MOTOR MULTIGRADO', 'AMM-V', 'ACEITES', 2, 25, 'producto2.jpg', 1),
(3, 'AGUJA FLOTA DOR DE CARBURADOR', 'AFC-T', 'MATERIAL', 1, 18.9, 'producto3.jpg', 1),
(4, 'AGUJA FLOTADOR  (M.V. x 10)', 'AFC-M', 'MATERIAL', 15, 4.9, 'producto4.jpg', 1),
(5, 'AMORTIGUADOR DELANTERO', 'ADA-T', 'MATERIAL', 17, 46.9, 'producto5.jpg', 1),
(6, 'AMORTIGUADOR PIAGGIO APE', 'ADP-C', 'MATERIAL', 19, 79.9, 'producto6.jpg', 1),
(7, 'AMORTIGUADOR TORITO ', 'ADT-G', 'MATERIAL', 20, 48.9, 'producto7.jpg', 1),
(8, 'AMORTIGUADOR POSTERIOR ', 'APR-G', 'MATERIAL', 12, 60.9, 'producto8.jpg', 1),
(9, 'ANILLOS DE ACEITE ', 'ACS-K', 'MATERIAL', 44, 12.9, 'producto9.jpg', 1),
(10, 'PASTILLAS DE FRENO DELANTERA ', 'PFD-P', 'MATERIAL', 5, 20.9, 'producto10.jpg', 1),
(11, 'COPA LADO MOTOR MEDIANA ', 'CMM-T', 'MATERIAL', 3, 37.9, 'producto11.jpg', 1),
(12, 'JEBES DE BOMBIN DE FRENO', 'JBF-R', 'CAUCHO', 12, 9.48, 'producto12.jpg', 1),
(13, 'MAGNETO TORITO 2T 5L', 'MGT-T', 'METAL', 15, 172.9, 'producto13.jpg', 1),
(14, 'Bateria XL', 'BAT-1', 'Bateria', 13, 150, 'producto15.jpg', 1),
(15, 'ACEITE', 'AC-43', 'ACEITES', 23, 79.9, 'producto16.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$uFuZJZUYmEzW1V8MwB6n2uWg3wc0zMEGLHAsU3f3oQuFXk45S.CH6', NULL, '2022-07-18 13:23:45', '2022-07-18 13:23:45'),
(2, 'Luis Miguel Monzon Paredes', 'lmiguel12@gmail.com', NULL, '$2y$10$f6fzHtZwxTk/i5LAbT4u7eRTOBGCMx3vW8uJvUcDo6QDAmzwPS2da', NULL, '2022-08-16 02:47:12', '2022-08-16 02:47:12'),
(3, 'Juan Lopez', 'jlopez12@gmail.com', NULL, '$2y$10$Cay9yLAvhaiTNz6mHl6/te0FZkFrRimbLptakk98zeQW.OHcxWI0C', NULL, '2022-08-16 08:13:28', '2022-08-16 08:13:28'),
(4, 'Manuel', 'manuel12@gmail.com', NULL, '$2y$10$OskNI4L6crTJQxGNxukcQ.eMm7dTr48vpCIh/S6EIj/Z.5k4t6hvm', NULL, '2022-08-16 21:28:23', '2022-08-16 21:28:23'),
(5, 'Enrique Portal', 'enriquep2022@gmail.com', NULL, '$2y$10$w9vNQfj5H/yc74Q5pI/7L.J0JWBTZFn8A7MrqiUQTnF3wuJcrvW/2', NULL, '2022-08-17 01:19:25', '2022-08-17 01:19:25'),
(6, 'Luis Enrique Mantilla', 'lmantilla203@gmail.com', NULL, '$2y$10$34IAZ6hQAj8BRhbMF3PGdOU4NU0fDf9ngxjEWoLFGNEMMhzwvxTXG', NULL, '2022-08-19 01:31:35', '2022-08-19 01:31:35'),
(7, 'Francisco Garcia', 'fgarcia@gmail.com', NULL, '$2y$10$XjV2.0xzTUFoePksqtlU5uSftyBMYyQFqJbsvYWKElY4/qXIpnNIG', NULL, '2022-08-19 03:04:04', '2022-08-19 03:04:04'),
(8, 'Guillermo Valderrama', 'gvalderrama@gmail.com', NULL, '$2y$10$XSXInhfXsEYJlEeoFD/KIeHGYTIf.znvbz75U7evlbsSpY6A.aHTq', NULL, '2022-08-27 03:27:46', '2022-08-27 03:27:46'),
(9, 'Jose Garcia', 'jgarcia@gmail.com', NULL, '$2y$10$Th9V29vZlSB..le2y7c7bezgaxQnoLc35Olp1rbxhNCbKu9tbQNhu', NULL, '2022-08-27 04:20:32', '2022-08-27 04:20:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operaciones`
--
ALTER TABLE `operaciones`
  ADD PRIMARY KEY (`idoperacion`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `operaciones`
--
ALTER TABLE `operaciones`
  MODIFY `idoperacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `operaciones`
--
ALTER TABLE `operaciones`
  ADD CONSTRAINT `operaciones_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;