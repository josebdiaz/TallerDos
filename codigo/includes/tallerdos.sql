-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2014 a las 23:44:33
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tallerdos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `usuario`, `pass`) VALUES
(1, 'Jose', 'josebdiaz', 'josebdiaz'),
(2, 'Hector', 'thimael', 'thimael');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineapedido`
--

CREATE TABLE IF NOT EXISTS `lineapedido` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idPedido` int(100) DEFAULT NULL,
  `idProducto` int(100) DEFAULT NULL,
  `unidades` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `lineapedido`
--

INSERT INTO `lineapedido` (`id`, `idPedido`, `idProducto`, `unidades`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 5, 1),
(4, 2, 4, 1),
(5, 3, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idCliente` varchar(100) DEFAULT NULL,
  `fechaPedido` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `idCliente`, `fechaPedido`) VALUES
(1, '1', 1395267736),
(2, '1', 1395268532),
(3, '2', 1395268695);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `precio` int(100) NOT NULL,
  `existencias` int(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `existencias`, `imagen`, `destacado`) VALUES
(1, 'Pulp Fiction\r\n', 'The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother''s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.\r\n', 10000, 7, 'pulp.png', 1),
(2, 'A Clockwork Orange\r\n', 'Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that''s what you see at a toy store. And you must think you''re in a toy store, because you''re here shopping for an infant named Jeb.\r\n', 8000, 3, 'naranja.png', 1),
(3, 'Full Metal Jacket\r\n', 'Well, the way they make shows is, they make one show. That show''s called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they''re going to make more shows. Some pilots get picked and become television programs. Some don''t, become nothing. She starred in one of the ones that became nothing.\r\n', 8000, 6, 'full.png', 1),
(4, 'The Dark Knight\r\n', 'Your bones don''t break, mine do. That''s clear. Your cells react to bacteria and viruses differently than mine. You don''t get sick, I do. That''s also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We''re on the same curve, just on opposite ends.\r\n', 10000, 6, 'batman.png', 0),
(5, 'The Shining\r\n', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don''t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I''m breaking now. We said we''d say it was the snow that killed the other two, but it wasn''t. Nature is lethal but it doesn''t hold a candle to man.\r\n', 9000, 9, 'shining.png', 0),
(6, 'Sin City\r\n', 'Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they''re actually proud of that shit. \r\n', 9000, 9, 'sincity.png', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
