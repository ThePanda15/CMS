-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2019 a las 23:37:37
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms_solvetic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `direccion` tinytext NOT NULL,
  `geolocalizacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `titulo`, `direccion`, `geolocalizacion`) VALUES
(2, 'Facultad de Telematica', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `contenido` longtext NOT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo` varchar(20) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `alias` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `titulo`, `contenido`, `fecha_publicacion`, `tipo`, `categoria`, `alias`) VALUES
(9, 'Inicio', '%3Cdiv%20class=%22container%22%3E%0A%3Cdiv%20class=%22portafolio-container%22%3E%3Cimg%20alt=%22%22%20class=%22portafolio-img%22%20src=%22imagenes/Inicio/img_1765.jpg%22%20style=%22height:50%25;%20width:92%25%22%20/%3E%3Cimg%20alt=%22%22%20src=%22https://portal.ucol.mx/content//content/noticias/161/image/edificio1.png%22%20style=%22float:right;%20height:213px;%20width:320px%22%20/%3E%0A%3Ch2%3EMision%3C/h2%3E%0A%0A%3Cp%3EFormamos%20recursos%20humanos%20de%20Licenciatura%20y%20Posgrado%20eficientes%20y%20competitivos,%20socialmente%20comprometidos,%20capaces%20de%20innovar%20y%20adaptarse%20en%20el%20&aacute;rea%20de%20las%20Tecnolog&iacute;as%20de%20la%20Informaci&oacute;n%20y%20Comunicaci&oacute;n%20(TIC)%20en%20los%20entornos%20nacional%20e%20internacional.%3C/p%3E%0A%0A%3Cp%3E&nbsp;%3C/p%3E%0A%0A%3Cp%3E&nbsp;%3C/p%3E%0A%3C/div%3E%0A%3C/div%3E%0A%0A%3Chr%20/%3E%0A%0A%3Ch2%20class=%22text-center%22%3EVIDEO%20DE%20PROMOCION%3C/h2%3E%0A%0A%3Chr%20/%3E%0A%3Cdiv%20class=%22container%22%3E%0A%3Cdiv%20class=%22row%22%3E%0A%3Cdiv%20class=%22col-12%20col-md-6%22%3E%3Ciframe%20frameborder=%220%22%20height=%22360%22%20src=%22https://www.youtube.com/embed/23d_z0WsC6c%22%20width=%2299%25%22%3E%3C/iframe%3E%3C/div%3E%0A%0A%3Cdiv%20class=%22col-12%20col-md-6%22%3E%3Ciframe%20frameborder=%220%22%20height=%22360%22%20src=%22https://www.youtube.com/embed/A8s-ambdPqw%22%20width=%2299%25%22%3E%3C/iframe%3E%3C/div%3E%0A%3C/div%3E%0A%3C/div%3E%0A%0A%3Chr%20/%3E%0A%3Cdiv%20class=%22container%20well%22%3E%0A%3Cdiv%20class=%22row%22%3E%0A%3Cdiv%20class=%22col-xs-6%20col-sm-6%20col-md-6%20col-lg-5%22%3E%0A%3Caddress%3E%3Cstrong%3ETelefono%3C/strong%3E%3Cbr%20/%3E%0A52%20(312)%203161075%3C/address%3E%0A%0A%3Caddress%3E%3Cstrong%3EHorarios%3C/strong%3E%3Cbr%20/%3E%0ALu-Vi%2007:00-20:00%3C/address%3E%0A%0A%3Caddress%3E%3Cstrong%3ECorreo%3C/strong%3E%3Cbr%20/%3E%0A%3Ca%20href=%22mailto:telematica@ucol.mx%22%3Etelematica@ucol.mx%3C/a%3E%3C/address%3E%0A%3C/div%3E%0A%0A%3Cdiv%20class=%22col-xs-6%20col-sm-6%20col-md-6%20col-lg-5%22%3E&nbsp;%3C/div%3E%0A%0A%3Cdiv%20class=%22container%22%3E%0A%3Ctable%20border=%220%22%3E%0A%09%3Ctbody%3E%0A%09%09%3Ctr%3E%0A%09%09%09%3Ctd%3E%3Ca%20href=%22https://www.facebook.com/FacultadDeTelematica/%22%20target=%22_blank%22%3E%3Cimg%20alt=%22%22%20src=%22imagenes/Iconos/facebook-icon-preview-200x200.png%22%20style=%22width:20px%22%20/%3E%3C/a%3E%3C/td%3E%0A%09%09%09%3Ctd%3E%3Ca%20href=%22https://www.facebook.com/FacultadDeTelematica/%22%20target=%22_blank%22%3EFacultad%20de%20Telematica%3C/a%3E%3C/td%3E%0A%09%09%3C/tr%3E%0A%09%09%3Ctr%3E%0A%09%09%09%3Ctd%3E%3Ca%20href=%22https://www.youtube.com/channel/UC_YjTm-wX8Cj7E_QXuvcL8w%22%20target=%22_blank%22%3E%3Cimg%20alt=%22%22%20class=%22img-responsive%22%20src=%22imagenes/Iconos/youtube_circle-256.png%22%20style=%22width:20px%22%20/%3E%3C/a%3E%3C/td%3E%0A%09%09%09%3Ctd%3E%3Ca%20href=%22https://www.youtube.com/channel/UC_YjTm-wX8Cj7E_QXuvcL8w%22%20target=%22_blank%22%3EFacultad%20de%20Telem&aacute;tica%20%3C/a%3E%3C/td%3E%0A%09%09%3C/tr%3E%0A%09%09%3Ctr%3E%0A%09%09%09%3Ctd%3E%3Ca%20href=%22https://www.flickr.com/photos/144086586@N07/%22%20target=%22_blank%22%3E%3Cimg%20alt=%22%22%20class=%22img-responsive%22%20src=%22imagenes/Iconos/photos.png%22%20style=%22width:20px%22%20/%3E%3C/a%3E%3C/td%3E%0A%09%09%09%3Ctd%3E%3Ca%20href=%22https://www.flickr.com/photos/144086586@N07/%22%20target=%22_blank%22%3EFacultad%20de%20Telem&aacute;tica%20%3C/a%3E%3C/td%3E%0A%09%09%3C/tr%3E%0A%09%3C/tbody%3E%0A%3C/table%3E%0A%3C/div%3E%0A%3C/div%3E%0A%0A%3Cdiv%20class=%22container%22%3E%0A%3Cdiv%20class=%22row%22%3E%0A%3Cdiv%20class=%22col-xs-12%22%3E%0A%3Ch4%20style=%22text-align:center%22%3E&copy;%202018%20Facultad%20de%20Telem&aacute;tica.%20All%20Rights%20Res%20erved.%3C/h4%3E%0A%3C/div%3E%0A%3C/div%3E%0A%3C/div%3E%0A%3C!--%20Include%20all%20compiled%20plugins%20(below),%20or%20include%20individual%20files%20as%20needed%20--%3E%3C/div%3E%0A', '2019-06-14 16:32:27', 'PAGE', '', 'index.php'),
(11, 'Galeria', '%3Cdiv%20class=%22container%22%3E%0A%3Ch2%3EEdificios%3C/h2%3E%0A%0A%3Chr%20/%3E%0A%3Chr%20/%3E%0A%3Cdiv%20class=%22row%22%3E%0A%3Cdiv%20class=%22col-12%20col-md-4%22%3E%3Cimg%20alt=%22edificio1%22%20class=%22img-responsive%22%20src=%22imagenes/Infraestructura/Edificios/edificio1.png%22%20/%3E%0A%3Cp%3EEdificio%20principal%3C/p%3E%0A%3C/div%3E%0A%0A%3Cdiv%20class=%22col-12%20col-md-4%22%3E%3Cimg%20alt=%22edificio2%22%20class=%22img-responsive%22%20src=%22imagenes/Infraestructura/Edificios/edificio2.png%22%20/%3E%0A%3Cp%3EEdificio%20de%20Posgrado%3C/p%3E%0A%3C/div%3E%0A%0A%3Cdiv%20class=%22col-12%20col-md-4%22%3E%3Cimg%20alt=%22edificio3%22%20class=%22img-responsive%22%20src=%22imagenes/Infraestructura/Edificios/edificio3.png%22%20/%3E%0A%3Cp%3ECubiculos%20para%20PTC%3C/p%3E%0A%3C/div%3E%0A%3C/div%3E%0A%0A%3Cdiv%20class=%22container%22%3E%0A%3Ch2%3EAulas%20y%20Laboratorios%3C/h2%3E%0A%0A%3Chr%20/%3E%0A%3Chr%20/%3E%0A%3Cdiv%20class=%22row%22%3E%0A%3Cdiv%20class=%22col-12%20col-md-4%22%3E%3Cimg%20alt=%22aula1%22%20class=%22img-responsive%22%20src=%22imagenes/Infraestructura/Aulas-y-laboratorios/aula1.png%22%20/%3E%3C/div%3E%0A%0A%3Cdiv%20class=%22col-12%20col-md-4%22%3E%3Cimg%20alt=%22aula2%22%20class=%22img-responsive%22%20src=%22imagenes/Infraestructura/Aulas-y-laboratorios/aula2.png%22%20/%3E%3C/div%3E%0A%0A%3Cdiv%20class=%22col-12%20col-md-4%22%3E%3Cimg%20alt=%22aula3%22%20class=%22img-responsive%22%20src=%22imagenes/Infraestructura/Aulas-y-laboratorios/aula3.png%22%20/%3E%3C/div%3E%0A%0A%3Cdiv%20class=%22col-12%20col-md-4%22%3E%3Cimg%20alt=%22aula1%22%20class=%22img-responsive%22%20src=%22imagenes/Infraestructura/Aulas-y-laboratorios/aula4.png%22%20/%3E%3C/div%3E%0A%0A%3Cdiv%20class=%22col-12%20col-md-4%22%3E%3Cimg%20alt=%22aula1%22%20class=%22img-responsive%22%20src=%22imagenes/Infraestructura/Aulas-y-laboratorios/aula5.png%22%20/%3E%3C/div%3E%0A%3C/div%3E%0A%3C/div%3E%0A%0A%3Cdiv%20class=%22container%22%3E%0A%3Cdiv%20class=%22row%22%3E%0A%3Ch2%3ECentros%20de%20Computo%3C/h2%3E%0A%0A%3Chr%20/%3E%0A%3Chr%20/%3E%0A%3Cdiv%20class=%22col-12%20col-md-4%22%3E%3Cimg%20alt=%22cc1%22%20class=%22img-responsive%22%20src=%22imagenes/Infraestructura/Centro-de-computo/cc1.png%22%20/%3E%3Cimg%20alt=%22cc2%22%20class=%22img-responsive%22%20src=%22imagenes/Infraestructura/Centro-de-computo/cc2.png%22%20/%3E%3C/div%3E%0A%3C/div%3E%0A%3C/div%3E%0A%0A%3Chr%20/%3E%0A%3Chr%20/%3E%0A%3Chr%20/%3E%0A%3Cdiv%20class=%22container%20well%22%3E%0A%3Cdiv%20class=%22row%22%3E%0A%3Cdiv%20class=%22col-xs-6%20col-sm-6%20col-md-6%20col-lg-5%22%3E%0A%3Caddress%3E%3Cstrong%3ETelefono%3C/strong%3E%3Cbr%20/%3E%0A52%20(312)%203161075%3C/address%3E%0A%0A%3Caddress%3E%3Cstrong%3EHorarios%3C/strong%3E%3Cbr%20/%3E%0ALu-Vi%2007:00-20:00%3C/address%3E%0A%0A%3Caddress%3E%3Cstrong%3ECorreo%3C/strong%3E%3Cbr%20/%3E%0A%3Ca%20href=%22mailto:telematica@ucol.mx%22%3Etelematica@ucol.mx%3C/a%3E%3C/address%3E%0A%3C/div%3E%0A%0A%3Cdiv%20class=%22col-xs-6%20col-sm-6%20col-md-6%20col-lg-5%22%3E&nbsp;%3C/div%3E%0A%0A%3Cdiv%20class=%22container%22%3E%0A%3Ctable%20border=%220%22%3E%0A%09%3Ctbody%3E%0A%09%09%3Ctr%3E%0A%09%09%09%3Ctd%3E%3Ca%20href=%22https://www.facebook.com/FacultadDeTelematica/%22%20target=%22_blank%22%3E%3Cimg%20alt=%22%22%20src=%22imagenes/Iconos/facebook-icon-preview-200x200.png%22%20style=%22width:20px%22%20/%3E%3C/a%3E%3C/td%3E%0A%09%09%09%3Ctd%3E%3Ca%20href=%22https://www.facebook.com/FacultadDeTelematica/%22%20target=%22_blank%22%3EFacultad%20de%20Telematica%3C/a%3E%3C/td%3E%0A%09%09%3C/tr%3E%0A%09%09%3Ctr%3E%0A%09%09%09%3Ctd%3E%3Ca%20href=%22https://www.youtube.com/channel/UC_YjTm-wX8Cj7E_QXuvcL8w%22%20target=%22_blank%22%3E%3Cimg%20alt=%22%22%20class=%22img-responsive%22%20src=%22imagenes/Iconos/youtube_circle-256.png%22%20style=%22width:20px%22%20/%3E%3C/a%3E%3C/td%3E%0A%09%09%09%3Ctd%3E%3Ca%20href=%22https://www.youtube.com/channel/UC_YjTm-wX8Cj7E_QXuvcL8w%22%20target=%22_blank%22%3EFacultad%20de%20Telem&aacute;tica%20%3C/a%3E%3C/td%3E%0A%09%09%3C/tr%3E%0A%09%09%3Ctr%3E%0A%09%09%09%3Ctd%3E%3Ca%20href=%22https://www.flickr.com/photos/144086586@N07/%22%20target=%22_blank%22%3E%3Cimg%20alt=%22%22%20class=%22img-responsive%22%20src=%22imagenes/Iconos/photos.png%22%20style=%22width:20px%22%20/%3E%3C/a%3E%3C/td%3E%0A%09%09%09%3Ctd%3E%3Ca%20href=%22https://www.flickr.com/photos/144086586@N07/%22%20target=%22_blank%22%3EFacultad%20de%20Telem&aacute;tica%20%3C/a%3E%3C/td%3E%0A%09%09%3C/tr%3E%0A%09%3C/tbody%3E%0A%3C/table%3E%0A%3C/div%3E%0A%3C/div%3E%0A%3C/div%3E%0A%0A%3Cdiv%20class=%22container%22%3E%0A%3Cdiv%20class=%22row%22%3E%0A%3Cdiv%20class=%22col-xs-12%22%3E%0A%3Ch4%3E&copy;%202018%20Facultad%20de%20Telem&aacute;tica.%20All%20Rights%20Res%20erved.%3C/h4%3E%0A%3C/div%3E%0A%3C/div%3E%0A%3C/div%3E%0A%3C/div%3E%0A', '2019-06-13 23:09:39', 'PAGE', '', 'galeria.php'),
(19, 'Historia', '%3Cdiv%20class=%22container%22%3E%0A%20%20%20%20%3Cdiv%20class=%22row%22%3E%0A%20%20%20%20%20%20%3Cdiv%20class=%22%20col-sm-12%20col-md-12%20col-lg-12%22%3E%0A%20%20%20%20%20%20%20%20%3Cdiv%20id=%22carousel1%22%20class=%22carousel%20slide%22%3E%0A%20%20%20%20%20%20%20%20%20%20%3Col%20class=%22carousel-indicators%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%20data-target=%22#carousel1%22%20data-slide-to=%220%22%20class=%22active%22%3E%20%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%20data-target=%22#carousel1%22%20data-slide-to=%221%22%20class=%22%22%3E%20%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cli%20data-target=%22#carousel1%22%20data-slide-to=%222%22%20class=%22%22%3E%20%3C/li%3E%0A%09%09%09%20%20%3Cli%20data-target=%22#carousel1%22%20data-slide-to=%223%22%20class=%22%22%3E%20%3C/li%3E%0A%20%20%20%20%20%20%20%20%20%20%3C/ol%3E%0A%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class=%22carousel-inner%22%20align=%22center%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class=%22item%22%20align=%22center%22%3E%20%3Cimg%20class=%22img-responsive%22%20src=%22imagenes/Historia/mini1.jpg%22%20alt=%22thumb%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class=%22carousel-caption%22%3E%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class=%22item%20active%22%3E%20%3Cimg%20class=%22img-responsive%22%20src=%22imagenes/Historia/mini2.jpg%22%20alt=%22thumb%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class=%22carousel-caption%22%3E%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class=%22item%22%3E%20%3Cimg%20class=%22img-responsive%22%20src=%22imagenes/Historia/mini3.jpg%22%20alt=%22thumb%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class=%22carousel-caption%22%3E%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%09%09%09%20%20%3Cdiv%20class=%22item%22%3E%20%3Cimg%20class=%22img-responsive%22%20src=%22imagenes/Historia/telematica%20frente.jpg%22%20alt=%22thumb%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class=%22carousel-caption%22%3E%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%3Ca%20class=%22left%20carousel-control%22%20href=%22#carousel1%22%20data-slide=%22prev%22%3E%3Cspan%20class=%22icon-prev%22%3E%3C/span%3E%3C/a%3E%20%3Ca%20class=%22right%20carousel-control%22%20href=%22#carousel1%22%20data-slide=%22next%22%3E%3Cspan%20class=%22icon-next%22%3E%3C/span%3E%3C/a%3E%3C/div%3E%0A%20%20%20%20%20%20%3C/div%3E%0A%3C/div%3E%0A%20%20%20%20%3Chr%3E%0A%20%20%3C/div%3E%0A%0A%3Chr%3E%0A%3Ch2%20class=%22text-center%22%3EHistoria%3C/h2%3E%0A%3Chr%3E%0A%09%3Cdiv%20class=%22container%22%3E%0A%09%3Cp%3E%20%3C/p%3E%0A%3Cp%20style=%22text-align:%20justify;%22%3EEl%20inicio%20al%20impulso%20de%20las%20carreras%20de%20Inform%C3%A1tica-Computaci%C3%B3n%20en%20la%20Universidad%20de%20Colima,%20se%20dio%20en%20la%20facultad%20de%20Ingenier%C3%ADa%20Mec%C3%A1nica%20y%20El%C3%A9ctrica,%20en%20el%20campus%20Coquimatl%C3%A1n%20con%20la%20carrera%20de%20Ingeniero%20en%20Sistemas%20Computacionales,%20y%20en%20las%20escuelas%20y%20facultades%20de%20Contabilidad%20y%20Administraci%C3%B3n%20del%20Estado,%20con%20la%20carrera%20de%20Licenciado%20en%20Inform%C3%A1tica.%3C/p%3E%0A%3Cp%20style=%22text-align:%20justify;%22%3EUno%20de%20los%20antecedentes%20de%20la%20actual%20Facultad%20de%20Telem%C3%A1tica,%20que%20se%20encuentra%20ubicada%20en%20el%20campus%20Colima,%20fue%20la%20carrera%20de%20Licenciado%20en%20Inform%C3%A1tica%20que%20inici%C3%B3%20en%20Agosto%20de%201990%20como%20respuesta%20a%20la%20necesidad%20detectada%20en%20el%20Estado%20de%20satisfacer%20la%20demanda%20de%20profesionistas%20que%20implementaran%20sistemas%20de%20informaci%C3%B3n,%20utilizando%20nuevas%20tecnolog%C3%ADas%20computacionales.%3C/p%3E%0A%3Cp%20style=%22text-align:%20justify;%22%3ELa%20Facultad%20de%20Telem%C3%A1tica%20fue%20creada%20el%202%20de%20agosto%20de%201996%20para%20ofrecer%20a%20la%20comunidad%20estudiantil%20las%20carreras%20de%20Licenciado%20en%20Inform%C3%A1tica,%20Ingenier%C3%ADa%20y%20Maestr%C3%ADa%20en%20Telem%C3%A1tica,%20como%20estrategia%20Institucional%20para%20consolidar%20acad%C3%A9micamente%20el%20desarrollo%20de%20la%20aplicaci%C3%B3n%20de%20las%20nuevas%20tecnolog%C3%ADas%20de%20Informaci%C3%B3n,%20Inform%C3%A1tica%20y%20Telecomunicaciones,%20en%20el%20campus%20Colima.%3C/p%3E%0A%3Cp%20style=%22text-align:%20justify;%22%3ELa%20Facultad%20de%20Telem%C3%A1tica%20surgi%C3%B3%20tambi%C3%A9n%20en%20el%20campus%20Colima%20para%20aprovechar%20la%20experiencia%20de%20la%20Universidad%20en%20la%20aplicaci%C3%B3n%20y%20uso%20de%20recursos%20inform%C3%A1ticos%20del%20Centro%20Nacional%20de%20Edici%C3%B3n%20Digital%20y%20Desarrollo%20de%20Tecnolog%C3%ADas%20de%20Informaci%C3%B3n%20(CENEDIC),%20de%20la%20Biblioteca%20de%20las%20Ciencias%20y%20del%20Centro%20Universitario%20Productor%20de%20Medios%20Did%C3%A1cticos%20(CEUPROMED)%20e%20impulsar%20la%20carrera%20de%20Licenciado%20en%20Inform%C3%A1tica%20que%20ofrec%C3%ADa%20anteriormente%20la%20Facultad%20de%20Contabilidad%20y%20Administraci%C3%B3n.%3C/p%3E%0A%3Cp%20style=%22text-align:%20justify;%22%3EEl%20campus%20Colima%20fue%20una%20de%20las%20primeras%20%C3%A1reas%20en%20contar%20con%20su%20propia%20red%20de%20comunicaciones%20intra%20e%20intercampus,%20adem%C3%A1s%20de%20comunicaci%C3%B3n%20internacional,%20caracterizada%20por%20emplear%20tecnolog%C3%ADa%20de%20frontera,%20tanto%20a%20nivel%20de%20redes%20locales%20de%20datos%20(redes%20tipo%20Ehternet%20a%20100%20mbps),%20dorsal%20basada%20en%20fibra%20%C3%B3ptica%20(FDDI),%20dispositivos%20de%20interconexi%C3%B3n%20(enrutadores%20inteligentes),%20y%20diversos%20medios%20f%C3%ADsicos%20de%20comunicaciones.%3C/p%3E%0A%3Cp%20style=%22text-align:%20justify;%22%3EEl%20aprovechamiento%20de%20la%20infraestructura%20de%20redes%20y%20facilitar%20una%20administraci%C3%B3n%20centralizada,%20fueron%20otras%20de%20las%20razones%20para%20establecer%20la%20Facultad%20de%20Telem%C3%A1tica%20en%20el%20campus%20Colima%20y%20aprovechar%20as%C3%AD%20el%20CENEDIC,%20la%20Biblioteca%20de%20las%20Ciencias,%20el%20departamento%20de%20redes%20y%20el%20CEUPROMED,%20como%20laboratorios%20naturales%20para%20sus%20estudiantes.%3C/p%3E%0A%3Cp%20style=%22text-align:%20justify;%22%3EDesde%20sus%20inicios%20la%20Facultad%20de%20Telem%C3%A1tica%20ha%20buscado%20la%20proyecci%C3%B3n%20internacional,%20ya%20que%20aspira%20a%20contar%20con%20estudiantes%20con%20preparaci%C3%B3n%20de%20nivel%20mundial%20en%20tecnolog%C3%ADas%20computacionales,%20por%20ello%20se%20han%20realizado%20intercambios%20de%20estudiantes%20y%20profesores%20con%20instituciones%20de%20Estados%20Unidos,%20Canad%C3%A1,%20Inglaterra%20y%20Espa%C3%B1a,%20entre%20otros.%20Para%20reforzar%20la%20preparaci%C3%B3n%20en%20ingl%C3%A9s%20se%20cuenta%20con%20un%20Centro%20de%20Autoacceso%20a%20Lenguas%20en%20el%20campus%20principal%20de%20la%20Universidad%20de%20Colima.%3C/p%3E%0A%3Cp%20style=%22text-align:%20justify;%22%3EEl%20hecho%20de%20contar%20con%20un%20sistema%20moderno%20de%20comunicaciones%20e%20infraestructura%20en%20inform%C3%A1tica,%20telem%C3%A1tica%20e%20ingl%C3%A9s,%20es%20una%20base%20y%20un%20aliciente%20para%20mejorar%20los%20planes%20de%20estudios%20de%20la%20Facultad%20y%20as%C3%AD%20fomentar%20la%20investigaci%C3%B3n%20y%20la%20docencia%20en%20esta%20disciplina,%20que%20est%C3%A1%20teniendo%20un%20gran%20desarrollo%20por%20la%20extensiva%20utilizaci%C3%B3n%20de%20Internet%20y%20por%20las%20necesidades%20de%20modernizaci%C3%B3n%20que%20enfrentan%20las%20empresas%20e%20instituciones%20de%20la%20regi%C3%B3n.%3C/p%3E%0A%3Cp%3E%20%3C/p%3E%0A%09%3C/div%3E%0A%0A%3Chr%3E%0A%0A%3Chr%3E%0A%0A%3Chr%3E%0A%3Cdiv%20class=%22container%20well%22%3E%0A%20%20%3Cdiv%20class=%22row%22%3E%0A%3Cdiv%20class=%22col-xs-6%20col-sm-6%20col-md-6%20col-lg-5%22%3E%0A%20%20%20%20%20%20%20%20%3Caddress%3E%0A%20%20%20%20%20%20%20%20%3Cstrong%3ETelefono%3C/strong%3E%3Cbr%3E%0A+52%20(312)%203161075%3Cbr%3E%0A%0A%0A%20%20%20%20%20%20%3C/address%3E%0A%09%20%20%20%20%20%20%20%20%20%20%3Caddress%3E%0A%20%20%20%20%20%20%20%20%3Cstrong%3EHorarios%3C/strong%3E%3Cbr%3E%0A%20%20%20%20%20%20%20%20Lu-Vi%2007:00-20:00%3Cbr%3E%0A%20%20%20%20%20%20%20%20%3C/address%3E%0A%20%20%20%20%20%20%20%20%3Caddress%3E%0A%20%20%20%20%20%20%20%20%3Cstrong%3ECorreo%3C/strong%3E%3Cbr%3E%0A%20%20%20%20%20%20%20%20%3Ca%20href=%22mailto:telematica@ucol.mx%22%3Etelematica@ucol.mx%3C/a%3E%0A%20%20%20%20%20%20%20%20%3C/address%3E%0A%20%20%20%20%3C/div%3E%0A%3Cdiv%20class=%22col-xs-6%20col-sm-6%20col-md-6%20col-lg-5%22%3E&nbsp;%3C/div%3E%0A%3Cdiv%20class=%22container%22%3E%0A%3Ctable%20width=%22%22%20border=%220%22%3E%0A%20%20%3Ctbody%3E%0A%20%20%20%20%3Ctr%3E%0A%20%20%20%20%20%20%3Ctd%20width=%2222%25%22%3E%3Ca%20href=%22https://www.facebook.com/FacultadDeTelematica/%22%20target=%22_blank%22%3E%3Cimg%20class=%22img-responsive%22%20%20src=%22imagenes/Iconos/facebook-icon-preview-200x200.png%22%20width=%2220px%22%20alt=%22%22/%3E%3C/td%3E%3C/a%3E%0A%20%20%20%20%20%20%3Ctd%3E%3Ca%20href=%22https://www.facebook.com/FacultadDeTelematica/%22%20target=%22_blank%22%3EFacultad%20de%20Telematica%3C/td%3E%3C/a%3E%0A%3C/tr%3E%0A%20%20%20%20%3Ctr%3E%0A%20%20%20%20%20%20%3Ctd%20width=%2210%25%22%3E%3Ca%20href=%22https://www.youtube.com/channel/UC_YjTm-wX8Cj7E_QXuvcL8w%22%20target=%22_blank%22%3E%3Cimg%20class=%22img-responsive%22%20src=%22imagenes/Iconos/youtube_circle-256.png%22%20width=%2220px%22%20%20alt=%22%22/%3E%3C/td%3E%3C/a%3E%0A%20%20%20%20%20%20%3Ctd%3E%3Ca%20href=%22https://www.youtube.com/channel/UC_YjTm-wX8Cj7E_QXuvcL8w%22%20target=%22_blank%22%3EFacultad%20de%20Telem%C3%A1tica%20%3C/td%3E%3C/a%3E%0A%20%20%20%20%3C/tr%3E%0A%20%20%20%20%3Ctr%3E%0A%20%20%20%20%20%20%3Ctd%20width=%2210%25%22%3E%3Ca%20href=%22https://www.flickr.com/photos/144086586@N07/%22%20target=%22_blank%22%3E%3Cimg%20class=%22img-responsive%22%20src=%22imagenes/Iconos/photos.png%22%20width=%2220px%22%20alt=%22%22/%3E%3C/td%3E%3C/a%3E%0A%20%20%20%20%20%20%3Ctd%3E%3Ca%20href=%22https://www.flickr.com/photos/144086586@N07/%22%20target=%22_blank%22%3EFacultad%20de%20Telem%C3%A1tica%20%3C/td%3E%3C/a%3E%09%09%0A%09%0A%09%3C/tr%3E%0A%20%20%3C/tbody%3E%0A%3C/table%3E%0A%3C/div%3E%0A%20%20%3C/div%3E%0A%3Cstrong%3E%3C/strong%3E%3C/div%3E%0A%3Cfooter%20class=%22text-center%22%3E%0A%20%20%3Cdiv%20class=%22container%22%3E%0A%20%20%20%20%3Cdiv%20class=%22row%22%3E%0A%20%20%20%20%3Cdiv%20class=%22col-xs-12%22%3E%0A%20%20%20%20%20%20%20%20%3Ch4%20class=%22hola%22%3E%C2%A9%202018%20Facultad%20de%20Telem%C3%A1tica.%20All%20Rights%20Res%20erved.%20%3C/h4%3E%0A%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%3C/div%3E%0A%20%20%3C/div%3E%0A%3C/footer%3E%0A', '2019-06-14 06:38:09', 'PAGE', '', 'historia.php'),
(22, 'Docentes', '%3Cp%3Eadsfadfadfadfaf%3C/p%3E%0A', '2019-06-14 21:32:31', 'PAGE', '', 'docentes.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `idmenu` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `url` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `orden` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`idmenu`, `nombre`, `url`, `orden`) VALUES
(1, 'Inicio', 'index.php', 1),
(2, 'Galeria', 'galeria.php', 2),
(3, 'Historia', 'historia.php', 3),
(7, 'Docentes', 'docentes.php', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idU` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario` varchar(16) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idU`, `nombre`, `usuario`, `pass`, `correo`) VALUES
(1, 'Eduardo Deniz', 'areli', 'perez', 'eduardoalberto_deniz@ucol.mx'),
(6, 'Belen', 'hueneja', 'monsta2', 'areli23@ucol.mx');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idU`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idU` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
