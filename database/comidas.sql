-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2018 a las 16:56:43
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `comidas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`message_id` int(12) NOT NULL,
  `names` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `message` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletters`
--

CREATE TABLE IF NOT EXISTS `newsletters` (
`newsletter_id` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`order_id` int(12) NOT NULL,
  `names` varchar(15) NOT NULL,
  `lastnames` varchar(15) NOT NULL,
  `address` varchar(120) NOT NULL,
  `city` varchar(30) NOT NULL,
  `tax` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders_products`
--

CREATE TABLE IF NOT EXISTS `orders_products` (
`orders_products_id` int(12) NOT NULL,
  `orders_id` int(12) NOT NULL,
  `products_id` varchar(30) NOT NULL,
  `quantity` int(12) NOT NULL,
  `price` float NOT NULL,
  `tax` float NOT NULL,
  `total` float NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
`permission_id` int(12) NOT NULL,
  `permission` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` varchar(30) NOT NULL,
  `user_id` int(12) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(60) NOT NULL,
  `price` double NOT NULL,
  `outstanding` varchar(30) NOT NULL,
  `views` varchar(120) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products_images`
--

CREATE TABLE IF NOT EXISTS `products_images` (
`product_image_id` int(12) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `user_id` int(12) NOT NULL,
  `image` varchar(60) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
`setting_id` int(12) NOT NULL,
  `mission` varchar(60) NOT NULL,
  `currency` varchar(30) NOT NULL,
  `language` varchar(30) NOT NULL,
  `vision` varchar(30) NOT NULL,
  `tax` varchar(30) NOT NULL,
  `tax_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
`shop_id` int(12) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
`slider_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `image` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(12) NOT NULL,
  `user_type_id` int(12) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_types`
--

CREATE TABLE IF NOT EXISTS `user_types` (
`user_type_id` int(12) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_types_permissions`
--

CREATE TABLE IF NOT EXISTS `user_types_permissions` (
  `user_type_permission_id` int(12) NOT NULL,
  `user_type_id` int(12) NOT NULL,
  `permission_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`message_id`) USING HASH;

--
-- Indices de la tabla `newsletters`
--
ALTER TABLE `newsletters`
 ADD PRIMARY KEY (`newsletter_id`) USING HASH;

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_id`) USING HASH;

--
-- Indices de la tabla `orders_products`
--
ALTER TABLE `orders_products`
 ADD PRIMARY KEY (`orders_products_id`) USING HASH, ADD KEY `orders_id` (`orders_id`), ADD KEY `orders_id_2` (`orders_id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
 ADD PRIMARY KEY (`permission_id`) USING HASH;

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`product_id`) USING HASH, ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `products_images`
--
ALTER TABLE `products_images`
 ADD PRIMARY KEY (`product_image_id`) USING HASH, ADD KEY `product_id` (`product_id`), ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`setting_id`) USING HASH;

--
-- Indices de la tabla `shops`
--
ALTER TABLE `shops`
 ADD PRIMARY KEY (`shop_id`) USING HASH;

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
 ADD PRIMARY KEY (`slider_id`) USING HASH;

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`) USING BTREE, ADD KEY `user_type_id` (`user_type_id`);

--
-- Indices de la tabla `user_types`
--
ALTER TABLE `user_types`
 ADD PRIMARY KEY (`user_type_id`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
MODIFY `message_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `newsletters`
--
ALTER TABLE `newsletters`
MODIFY `newsletter_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
MODIFY `order_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `orders_products`
--
ALTER TABLE `orders_products`
MODIFY `orders_products_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
MODIFY `permission_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `products_images`
--
ALTER TABLE `products_images`
MODIFY `product_image_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
MODIFY `setting_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `shops`
--
ALTER TABLE `shops`
MODIFY `shop_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
MODIFY `slider_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user_types`
--
ALTER TABLE `user_types`
MODIFY `user_type_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user_types`
--
ALTER TABLE `user_types`
ADD CONSTRAINT `user_types_ibfk_1` FOREIGN KEY (`user_type_id`) REFERENCES `users` (`user_type_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
