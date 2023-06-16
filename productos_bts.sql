-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2023 a las 12:34:09
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos_bts`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `precio` int(40) NOT NULL,
  `descuento` tinyint(3) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `cantidad`, `nombre`, `descripcion`, `precio`, `descuento`, `id_categoria`, `activo`) VALUES
(1, 11, 'Smart TV Samsung Series 6 QN43Q65BAKXZL QLED Tizen 4K 43\" 100V/240V', '<p><b> Lo que tienes que saber del producto</b></p>\r\n  <br>\r\n\r\n  <li>-Su resolución es de 4K.</li>\r\n <br>\r\n  <li>-Tecnología HDR para una calidad de imagen mejorada.</li>\r\n <br>\r\n  <li>-Modo de sonido: OTS-Lite, Q-Symphony, Adaptive sound, Dolby Digital Plus.</li>\r\n <br>\r\n  <li>-Manéjalo por comando de voz.</li>\r\n <br>\r\n  <li>-Tiene función Screen Share.</li>\r\n <br>\r\n  <li>-Con Samsung TV Plus, Netflix, Prime Video, Disney+, Apple TV, Samsung Promotion, Web browser, Home Yoga, Music Player, SmartThings, Google Duo, YouTube.</li>\r\n <br>\r\n  <li>-Bixby incorporado.</li>\r\n <br>\r\n  <li>-Sistema operativo Tizen.</li>\r\n <br>\r\n  <li>-Conecta tus dispositivos mediante sus 3 puertos HDMI y sus 2 puertos USB.</li>\r\n <br>\r\n  <li>-Dimensiones: 965.5mm de ancho, 559.4mm de alto, 25.7mm de profundidad.</li>\r\n <br>\r\n  <li>-Entretenimiento y conectividad en un mismo lugar.</li>\r\n \r\n', 2400000, 41, 1, 1),
(2, 20, 'Silla Ejecutiva Ergonómica \r\n', '¡SILLA EJECUTIVA ERGONÓMICA!\r\n<br>\r\nDISPONIBLE EN COLOR NEGRO.\r\n<br>\r\nCUENTA CON:\r\n<br>\r\n• Espaldar en Malla\r\n<br>\r\n• Elevación neumática\r\n<br>\r\n• Base cromada de cinco puntas\r\n<br>\r\n• Brazos fijos en polipropileno\r\n<br>\r\n• Asiento tapizado en espuma y forrado en malla resistente\r\n<br>\r\n\r\nResistencia máx: 120 KG.\r\n<br>\r\nGarantía solo por defectos de fabricación, no cubre mala manipulación.\r\nEs responsabilidad de cada comprador armar y saber armar de forma correcta la silla.\r\n', 193000, 10, 1, 1),
(3, 10, 'Escalera Telescópica De 11 Pasos Más Escalera', '<p><b> Lo que tienes que saber del producto</b></p>\r\n  <br>\r\n<li>-Marca; Más escaleras</li>\r\n <br>\r\n<li>-Longitud de extensión: 3.2m</li>\r\n <br>\r\n<li>-Pasos totales: 11 pasos</li>\r\n <br>\r\n<li>-Peso Máximo: 150kg</li>\r\n <br>\r\n<li>-Ancho 48 cm</li>\r\n <br>\r\n<li>-cerrada: 79 cm</li>\r\n <br>\r\n<li>-distancia entre pasos 30 cm</li>\r\n <br>\r\n<li>-Peso escalera : 9 kg</li>\r\n <br>', 374925, 21, 1, 1),
(4, 5, 'Kit 4 Sillas Charles Eames Madera - Eiffel', '<p><b> Lo que tienes que saber del producto</b></p>\r\n  <br>\r\n\r\n <li>-Silla modelo: Eames DSW</li>\r\n <br>\r\n <li>-Material del asiento: Polipropileno</li>\r\n <br>\r\n <li>-Material de la base: Madera y acero</li>\r\n <br>\r\n <li>-Altura: 82 cm</li>\r\n <br>\r\n <li>-Altura del asiento: 42 cm</li>\r\n <br>\r\n <li>-Ancho: 46 cm</li>\r\n <br>\r\n <li>-Profundidad: 54 cm</li>\r\n <br>\r\n <li>-Peso soportado: 110 kg</li>\r\n <br>', 269900, 12, 1, 1),
(5, 40, 'Funda para cama grande', '<p><b> Lo que tienes que saber del producto</b></p>\r\n  <br>\r\n<li>-Talla 72 inch (Pack of 1)</li>\r\n <br>\r\n<li>-Material Silver</li>\r\n <br>\r\n<li>-Color SILVER</li>\r\n <br>\r\n<li>-Dimensiones del artículo LxWxH 72 x 56 x 0.15 pulgadas</li>\r\n <br>', 268900, 7, 1, 1),
(6, 60, 'Celular Samsung Galaxy A34 4G Negro', '<p><b> Lo que tienes que saber del producto</b></p>\r\n  <br>\r\n<li>-Dispositivo desbloqueado para que elijas la compañía telefónica que prefieras.</li>\r\n <br>\r\n<li>-Compatible con redes 5G.</li>\r\n <br>\r\n<li>-Pantalla de 6.6\".</li>\r\n <br>\r\n<li>-Batería de 5000mAh.</li>\r\n <br>\r\n<li>-Memoria interna de 128GB.</li>\r\n <br>', 1899919, 0, 3, 1),
(7, 100, 'Apple ¡Phone 13(128GB)-Azul medianoche', '<p><b>Lo que tienes que saber de este producto</b></p>\r\n  <br>\r\n\r\nPantalla Super Retina XDR de 6.1 pulgadas1\r\n<br>\r\nModo Cine con baja profundidad de campo y cambios de enfoque automáticos en tus videos\r\n<br>\r\nSistema avanzado de dos cámaras de 12 MP (gran angular y ultra gran angular) con Estilos Fotográficos, HDR Inteligente 4, modo Noche y grabación de video 4K HDR en Dolby Vision\r\n<br>\r\nCámara frontal TrueDepth de 12 MP con modo Noche y grabación de video 4K HDR en Dolby Vision\r\n<br>\r\nChip A15 Bionic para un rendimiento fuera de serie\r\n<br>\r\nHasta 19 horas de reproducción de video2\r\nDiseño resistente con Ceramic Shield\r\nResistencia al agua IP68, líder en la industria3\r\n<br>\r\niOS 15 con nuevas funcionalidades para aprovechar tu iPhone al máximo4\r\n<br>\r\nCompatibilidad con accesorios MagSafe, que se acoplan fácilmente a tu iPhone y permiten una carga inalámbrica más rápida5', 3719900, 0, 3, 1),
(8, 3, 'Samsung Galaxy S23 Ultra Dual SIM 512GB', '<p><b> Lo que tienes que saber del producto</b></p>\r\n  <br>\r\n<li>-Dispositivo desbloqueado para que elijas la compañía telefónica que prefieras.</li>\r\n  <br>\r\n<li>-Compatible con redes 5G.</li>\r\n  <br>\r\n<li>-Pantalla AMOLED de 6.78\".</li>\r\n  <br>\r\n<li>-Tiene 4 cámaras traseras de 200Mpx/12Mpx/10Mpx/10Mpx.</li>\r\n  <br>\r\n<li>-Cámaras delanteras de 12Mpx.</li>\r\n  <br>\r\n<li>-Procesador Snapdragon 8 Gen 2 Octa-Core de 3GHz con 12GB de RAM.</li>\r\n  <br>\r\n<li>-Batería de 5000mAh con carga inalámbrica.\r\nMemoria interna de 512GB.</li>\r\n  <br>\r\n<li>-A prueba de agua.</li>\r\n  <br>\r\n<li>-Con reconocimiento facial y sensor de huella dactilar.</li>\r\n  <br>\r\n<li>-Resistente al polvo y a las caídas.</li>', 6299900, 0, 3, 1),
(9, 17, 'Apple ¡Phone 14 PRO(128GB)Morado oscuro', '<p><b> Lo que tienes que saber del producto</b></p>\r\n  <br>\r\n<li>-Pantalla Super Retina XDR de 6.7 pulgadas(2), siempre activa con tecnología ProMotion.</li>\r\n <br>\r\n<li>-Dynamic Island, una forma nueva y mágica de interactuar con tu iPhone.</li>\r\n <br>\r\n<li>-Cámara gran angular de 48MP para una resolución hasta 4 veces mayor.</li>\r\n <br>\r\n<li>-Modo Cine ahora en 4K Dolby Vision de hasta 30cps.</li>\r\n <br>\r\n<li>-Modo Acción para lograr videos estables, aún con cámara en mano.</li>\r\n <br>\r\n<li>-Detección de Choques(1), una funcionalidad de seguridad que pide ayuda cuando tú no puedes.</li>\r\n <br>\r\n<li>-Batería para todo el día y hasta 29 horas de reproducción de video.(3)\r\n<li>-A16 Bionic, el chip de smartphone en su máxima expresión. Red 5G ultrarrápida.(4)</li>\r\n <br>\r\n<li>-Ceramic Shield y resistencia al agua, características de durabilidad líderes en la industria.(5)</li>\r\n <br>\r\n<li>-iOS 16 ofrece aún más opciones de personalización y más formas de comunicarse y compartir.(6)</li>\r\n <br>', 5369900, 0, 3, 1),
(10, 12, 'Apple ¡Phone 14 128GB 4RAM Esim', '<p><b> Lo que tienes que saber del producto</b></p>\r\n  <br>\r\n<li>-Almacenamiento interno: 128 GB</li>\r\n <br>\r\n<li>-RAM: 4 GB</li>\r\n <br>\r\n<li>-cámara dual: 12MP + 12MP</li>\r\n <br>\r\n<li>-Sistema operativo: iOS 16</li>\r\n <br>\r\n<li>-Redes: 5G</li>\r\n <br>\r\n<li>-La eSIM es un chip integrado en unos dispositivos móviles y que remplazará la SIM tradicional; significa que para contar con los servicios de telecomunicaciones móviles de un operador se requiere descargar vía internet el perfil que los habilite</li>\r\n <br>\r\n<li>-Solo disponible en Tigo, Movistar, Claro</li>\r\n <br>', 4329900, 0, 3, 1),
(11, 7, 'Silla de escritorio Urban Design BL-2001', '<p><b> Lo que tienes que saber del producto</b></p>\r\n  <br>\r\n\r\n<li>-Confortable y duradera.</li>\r\n <br>\r\n\r\n<li>-Posee altura ajustable.</li>\r\n <br>\r\n\r\n<li>-Cómodos apoyabrazos.</li>\r\n <br>\r\n\r\n<li>-Soporte lumbar fijo.</li>\r\n <br>\r\n\r\n<li>-Con ruedas.</li>\r\n <br>\r\n\r\n<li>-Giratoria.</li>\r\n <br>\r\n\r\n<li>-Medidas del respaldo: 44 cm de ancho y 69 cm de alto.</li>\r\n <br>\r\n\r\n<li>-La silla alcanza una altura mínima de 109 cm y máxima de 118 cm.</li>\r\n <br>\r\n', 319900, 0, 4, 1),
(12, 3, 'Escritorio RTA Muebles Astana madera', '<p><b> Lo que tienes que saber del producto</b></p>\r\n  <br>\r\n<li>-Compuesto de madera aglomerada.</li>\r\n <br>\r\n<li>-2 estantes.</li>\r\n <br>\r\n<li>-Posee estante para CPU.</li>\r\n <br>\r\n<li>-Requiere ensamblado.</li>\r\n <br>\r\n<li>-Ideal para leer, escribir o usar la PC.</li>\r\n <br>\r\n<li>-Imagen ilustrativa, no incluye dispositivos electrónicos ni elementos de decoración.</li>\r\n <br>', 200325, 0, 4, 1),
(13, 9, 'Silla de Oficina Jamundi Base Nylon', '<p><b> Lo que tienes que saber del producto</b></p>\r\n  <br>\r\n<li>-Confortable y duradera.</li>\r\n <br>\r\n<li>-Posee altura ajustable.</li>\r\n <br>\r\n<li>-Cómodos apoyabrazos.</li>\r\n <br>\r\n<li>-Soporte lumbar regulable.</li>\r\n <br>\r\n<li>-Tiene apoya cabeza.</li>\r\n <br>\r\n<li>-Con ruedas.</li>\r\n <br>\r\n<li>-Giratoria.</li>\r\n <br>\r\n<li>-Material del relleno: espuma.</li>\r\n <br>\r\n<li>-Peso máximo soportado: 100kg.</li>\r\n <br>\r\n<li>-Medidas del respaldo: 46 cm de ancho y 46 cm de alto.</li>\r\n <br>', 413900, 0, 4, 1),
(14, 2, 'Silla de escritorio Erganomus Niza', '<p><b> Lo que tienes que saber del producto</b></p>\r\n  <br>\r\n<li>-Confortable y duradera.</li>\r\n <br>\r\n<li>-Posee altura ajustable.</li>\r\n <br>\r\n<li>-Cómodos apoyabrazos.</li>\r\n <br>\r\n<li>-Soporte lumbar regulable.</li>\r\n <br>\r\n<li>-Tiene apoya cabeza.</li>\r\n <br>\r\n<li>-Con ruedas.</li>\r\n <br>\r\n<li>-Giratoria.</li>\r\n <br>\r\n<li>-Material del relleno: espuma.</li>\r\n <br>\r\n<li>-Peso máximo soportado: 100kg.</li>\r\n <br>\r\n<li>-Medidas del respaldo: 46 cm de ancho y 46 cm de alto.</li>\r\n <br>', 408900, 0, 4, 1),
(15, 13, 'Silla de escritorio Erganomus Sally Negra', '<p><b> Lo que tienes que saber del producto</b></p>\r\n  <br>\r\n<li>-Confortable y duradera.</li>\r\n <br>\r\n<li>-Posee altura ajustable.</li>\r\n <br>\r\n<li>-Cómodos apoyabrazos.</li>\r\n <br>\r\n<li>-Soporte lumbar fijo.</li>\r\n <br>\r\n<li>-Con ruedas.</li>\r\n <br>\r\n<li>-Giratoria.</li>\r\n <br>\r\n<li>-Material del relleno: espuma.</li>\r\n <br>\r\n<li>-Peso máximo soportado: 100kg.</li>\r\n <br>\r\n<li>-Medidas del respaldo: 47 cm de ancho y 74 cm de alto.</li>\r\n <br>', 399900, 0, 4, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
