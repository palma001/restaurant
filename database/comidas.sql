-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2018 a las 04:39:02
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comidas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alerts`
--

CREATE TABLE `alerts` (
  `alert_id` int(11) NOT NULL,
  `alert_type_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galleries`
--

CREATE TABLE `galleries` (
  `gallery_id` int(11) NOT NULL,
  `gallery` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galleries`
--

INSERT INTO `galleries` (`gallery_id`, `gallery`) VALUES
(2, 'Desert.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
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

CREATE TABLE `newsletters` (
  `newsletter_id` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `order_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
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

CREATE TABLE `orders_products` (
  `orders_products_id` int(12) NOT NULL,
  `orders_id` int(12) NOT NULL,
  `products_id` varchar(30) NOT NULL,
  `quantity` int(12) NOT NULL,
  `price` float NOT NULL,
  `tax` float NOT NULL,
  `total` float NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orders_products`
--

INSERT INTO `orders_products` (`orders_products_id`, `orders_id`, `products_id`, `quantity`, `price`, `tax`, `total`, `date`) VALUES
(1, 1, '1', 1, 10000, 1, 1000, '2018-10-12'),
(2, 3, '3', 3, 3, 3, 3, '2018-10-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` int(12) NOT NULL,
  `permission` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`permission_id`, `permission`) VALUES
(1, 'Add Products'),
(2, 'Edit Products'),
(3, 'Delete Products'),
(4, 'Read Products'),
(5, 'Add Clients'),
(6, 'Edit Clients'),
(7, 'Delete Clients'),
(8, 'Read Clients'),
(9, 'Delete Orders'),
(10, 'Read Orders'),
(11, 'Add Types of Users'),
(12, 'Edit Types of Users'),
(13, 'Delete Types of Users'),
(14, 'Read Types of Users'),
(15, 'Edit Settings'),
(16, 'Read Settings');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `product_id` int(30) NOT NULL,
  `user_id` int(12) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `outstanding` varchar(30) NOT NULL,
  `views` varchar(120) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`product_id`, `user_id`, `title`, `description`, `price`, `outstanding`, `views`, `date`, `image`) VALUES
(1, 3, 'Hola como estan 2', 'Hola como estan 2 Hola como estan 2 Hola como estan 2', 100000, '1', '', '2018-10-26', 'descarga_(1).jpg'),
(2, 3, 'Hola como estam', 'Hola como estamHola como estamHola como estamHola como estamHola como estam', 100, '1', '', '2018-10-26', 'Chrysanthemum.jpg'),
(3, 3, 'Hola como estan 2', 'Hola como estan 2Hola como estan 2Hola como estan 2Hola como estan 2', 100000, '1', '', '2018-10-26', 'Jellyfish.jpg'),
(4, 3, 'Hola como estan 2', 'Hola como estan 2Hola como estan 2 Hola como estan 2Hola como estan 2', 100000, '1', '', '2018-10-26', 'Desert.jpg'),
(5, 3, 'Confirm PasswordConfirm Passwo', 'Confirm PasswordConfirm PasswordConfirm PasswordConfirm Password', 100000, '1', '', '2018-10-26', 'Lighthouse.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products_images`
--

CREATE TABLE `products_images` (
  `product_image_id` int(12) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `user_id` int(12) NOT NULL,
  `image` varchar(60) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL,
  `people_quantity` varchar(30) NOT NULL,
  `entrance_date` date NOT NULL,
  `entrance_hour` varchar(8) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `people_quantity`, `entrance_date`, `entrance_hour`, `full_name`, `phone`, `date`) VALUES
(1, '5', '2018-10-02', '12:50', 'Luis Palma', '04249502755', '2018-10-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `setting_id` int(12) NOT NULL,
  `goals` varchar(60) NOT NULL,
  `mission` varchar(60) NOT NULL,
  `currency` varchar(30) NOT NULL,
  `language` varchar(30) NOT NULL,
  `vision` varchar(30) NOT NULL,
  `tax` varchar(30) NOT NULL,
  `tax_name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `pinterest` text NOT NULL,
  `logo` text NOT NULL,
  `active_reservations` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `favicon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`setting_id`, `goals`, `mission`, `currency`, `language`, `vision`, `tax`, `tax_name`, `address`, `phone`, `facebook`, `twitter`, `instagram`, `pinterest`, `logo`, `active_reservations`, `title`, `favicon`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', ''),
(2, '', '', '1', '', '', '', '', '', '', '', '', '', '', 'Chrysanthemum.jpg', 0, 'hola', 'Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shops`
--

CREATE TABLE `shops` (
  `shop_id` int(12) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(12) NOT NULL,
  `slider` varchar(40) NOT NULL,
  `user_id` int(12) NOT NULL,
  `image` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider`, `user_id`, `image`, `date`) VALUES
(5, '', 3, 'Desert2.jpg', '0000-00-00'),
(6, '', 3, 'Hydrangeas3.jpg', '0000-00-00'),
(9, '', 3, 'Tulips1.jpg', '0000-00-00'),
(10, '', 3, 'Desert3.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(12) NOT NULL,
  `user_type_id` int(12) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `user_type_id`, `full_name`, `email`, `password`, `date`) VALUES
(3, 5, 'Binfrix', 'admin@binfrix.com', '5ebe2294ecd0e0f08eab7690d2a6ee69', '2018-10-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_types`
--

CREATE TABLE `user_types` (
  `user_type_id` int(12) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_types_permissions`
--

CREATE TABLE `user_types_permissions` (
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
-- Indices de la tabla `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`alert_id`);

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`) USING HASH;

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indices de la tabla `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`gallery_id`);

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
  ADD PRIMARY KEY (`orders_products_id`) USING HASH,
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `orders_id_2` (`orders_id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permission_id`) USING HASH;

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`) USING HASH,
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`product_image_id`) USING HASH,
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

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
  ADD PRIMARY KEY (`user_id`) USING BTREE,
  ADD KEY `user_type_id` (`user_type_id`);

--
-- Indices de la tabla `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`user_type_id`) USING BTREE;

--
-- Indices de la tabla `user_types_permissions`
--
ALTER TABLE `user_types_permissions`
  ADD PRIMARY KEY (`user_type_permission_id`),
  ADD KEY `user_type_id` (`user_type_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alerts`
--
ALTER TABLE `alerts`
  MODIFY `alert_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galleries`
--
ALTER TABLE `galleries`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `orders_products_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `products_images`
--
ALTER TABLE `products_images`
  MODIFY `product_image_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_type_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_types_permissions`
--
ALTER TABLE `user_types_permissions`
  MODIFY `user_type_permission_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user_types_permissions`
--
ALTER TABLE `user_types_permissions`
  ADD CONSTRAINT `user_types_permissions_ibfk_3` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`permission_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
