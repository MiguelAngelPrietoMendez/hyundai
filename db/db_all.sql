-- --------------------------------------------------------
-- Host:                         hyundaiCMS.db.10637500.hostedresource.com
-- Versión del servidor:         5.5.43-37.2-log - Percona Server (GPL), Release rel30.2, Revision 38.2
-- SO del servidor:              Linux
-- HeidiSQL Versión:             9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para hyundaiCMS
DROP DATABASE IF EXISTS `hyundaiCMS`;
CREATE DATABASE IF NOT EXISTS `hyundaiCMS` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hyundaiCMS`;


-- Volcando estructura para tabla hyundaiCMS.tbl_body
DROP TABLE IF EXISTS `tbl_body`;
CREATE TABLE IF NOT EXISTS `tbl_body` (
  `id_body` int(11) NOT NULL AUTO_INCREMENT,
  `color_fondo_body` varchar(50) NOT NULL,
  `id_plantilla` int(11) NOT NULL,
  PRIMARY KEY (`id_body`),
  KEY `FK1_plantilla_body` (`id_plantilla`),
  CONSTRAINT `FK1_plantilla_body` FOREIGN KEY (`id_plantilla`) REFERENCES `tbl_plantillas` (`id_plantillas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hyundaiCMS.tbl_body: ~0 rows (aproximadamente)
DELETE FROM `tbl_body`;
/*!40000 ALTER TABLE `tbl_body` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_body` ENABLE KEYS */;


-- Volcando estructura para tabla hyundaiCMS.tbl_footer
DROP TABLE IF EXISTS `tbl_footer`;
CREATE TABLE IF NOT EXISTS `tbl_footer` (
  `id_footer` int(11) NOT NULL AUTO_INCREMENT,
  `texto_footer` varchar(200) NOT NULL,
  `color_texto_footer` varchar(50) NOT NULL,
  `icono_footer_facebook` varchar(50) NOT NULL,
  `icono_footer_twitter` varchar(50) NOT NULL,
  `icono_footer_instagram` varchar(50) NOT NULL,
  `icono_footer_youtube` varchar(50) NOT NULL,
  `id_plantilla` int(11) NOT NULL,
  PRIMARY KEY (`id_footer`),
  KEY `FK1_id_footer` (`id_plantilla`),
  CONSTRAINT `FK1_id_footer` FOREIGN KEY (`id_plantilla`) REFERENCES `tbl_plantillas` (`id_plantillas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hyundaiCMS.tbl_footer: ~0 rows (aproximadamente)
DELETE FROM `tbl_footer`;
/*!40000 ALTER TABLE `tbl_footer` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_footer` ENABLE KEYS */;


-- Volcando estructura para tabla hyundaiCMS.tbl_header
DROP TABLE IF EXISTS `tbl_header`;
CREATE TABLE IF NOT EXISTS `tbl_header` (
  `id_header` int(11) NOT NULL AUTO_INCREMENT,
  `texto_1_header` varchar(50) NOT NULL,
  `texto_2_header` varchar(50) NOT NULL,
  `texto_3_header` varchar(50) NOT NULL,
  `texto_4_header` varchar(50) NOT NULL,
  `texto_5_header` varchar(50) NOT NULL,
  `color_texto_header` varchar(50) NOT NULL,
  `color_fondo_header` varchar(50) NOT NULL,
  `color_borde_header` varchar(50) NOT NULL,
  `color_hover_header` varchar(50) NOT NULL,
  `color_linea_header` varchar(50) NOT NULL,
  `id_plantilla` int(11) NOT NULL,
  PRIMARY KEY (`id_header`),
  KEY `FK1_plantilla_header` (`id_plantilla`),
  CONSTRAINT `FK1_plantilla_header` FOREIGN KEY (`id_plantilla`) REFERENCES `tbl_plantillas` (`id_plantillas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hyundaiCMS.tbl_header: ~0 rows (aproximadamente)
DELETE FROM `tbl_header`;
/*!40000 ALTER TABLE `tbl_header` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_header` ENABLE KEYS */;


-- Volcando estructura para tabla hyundaiCMS.tbl_plantillas
DROP TABLE IF EXISTS `tbl_plantillas`;
CREATE TABLE IF NOT EXISTS `tbl_plantillas` (
  `id_plantillas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_plantillas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_plantillas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hyundaiCMS.tbl_plantillas: ~1 rows (aproximadamente)
DELETE FROM `tbl_plantillas`;
/*!40000 ALTER TABLE `tbl_plantillas` DISABLE KEYS */;
INSERT INTO `tbl_plantillas` (`id_plantillas`, `nombre_plantillas`) VALUES
	(1, 'eontech');
/*!40000 ALTER TABLE `tbl_plantillas` ENABLE KEYS */;


-- Volcando estructura para tabla hyundaiCMS.tbl_roles
DROP TABLE IF EXISTS `tbl_roles`;
CREATE TABLE IF NOT EXISTS `tbl_roles` (
  `id_roles` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_roles` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_roles`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hyundaiCMS.tbl_roles: ~1 rows (aproximadamente)
DELETE FROM `tbl_roles`;
/*!40000 ALTER TABLE `tbl_roles` DISABLE KEYS */;
INSERT INTO `tbl_roles` (`id_roles`, `nombre_roles`) VALUES
	(1, 'administrador');
/*!40000 ALTER TABLE `tbl_roles` ENABLE KEYS */;


-- Volcando estructura para tabla hyundaiCMS.tbl_seccion_1
DROP TABLE IF EXISTS `tbl_seccion_1`;
CREATE TABLE IF NOT EXISTS `tbl_seccion_1` (
  `id_seccion_1` int(11) NOT NULL AUTO_INCREMENT,
  `imagen_carro_seccion_1` varchar(50) NOT NULL,
  `imagen_animada_seccion_1` varchar(50) NOT NULL,
  `imagen_carro_mobile_seccion_1` varchar(50) NOT NULL,
  `boton_1_url_seccion_1` varchar(50) NOT NULL,
  `boton_2_url_seccion_1` varchar(50) NOT NULL,
  `boton_3_url_seccion_1` varchar(50) NOT NULL,
  `boton_1_color_texto_seccion_1` varchar(50) NOT NULL,
  `boton_2_color_texto_seccion_1` varchar(50) NOT NULL,
  `boton_3_color_texto_seccion_1` varchar(50) NOT NULL,
  `boton_1_color_fondo_seccion_1` varchar(50) NOT NULL,
  `boton_2_color_fondo_seccion_1` varchar(50) NOT NULL,
  `boton_3_color_fondo_seccion_1` varchar(50) NOT NULL,
  `boton_1_color_borde_seccion_1` varchar(50) NOT NULL,
  `boton_2_color_borde_seccion_1` varchar(50) NOT NULL,
  `boton_3_color_borde_seccion_1` varchar(50) NOT NULL,
  `imagen_productos_seccion_1` varchar(50) NOT NULL,
  `titulo_texto_seccion_1` varchar(50) NOT NULL,
  `titulo_color_texto_seccion_1` varchar(50) NOT NULL,
  `titulo_color_fonto_seccion_1` varchar(50) NOT NULL,
  `titulo_color_borde_seccion_1` varchar(50) NOT NULL,
  `titulo_linea_seccion_1` varchar(50) NOT NULL,
  `titulo_color_linea_seccion_1` varchar(50) NOT NULL,
  `video_url_seccion_1` varchar(50) NOT NULL,
  `texto_1_seccion_1` varchar(50) NOT NULL,
  `texto_1_color_seccion_1` varchar(50) NOT NULL,
  `linea_1_seccion_1` varchar(50) NOT NULL,
  `linea_1_color_seccion_1` varchar(50) NOT NULL,
  `texto_2_seccion_1` varchar(50) NOT NULL,
  `texto_2_color_seccion_1` varchar(50) NOT NULL,
  `boton_4_color_texto_seccion_1` varchar(50) NOT NULL,
  `boton_4_color_fondo_seccion_1` varchar(50) NOT NULL,
  `boton_4_color_borde_seccion_1` varchar(50) NOT NULL,
  `boton_4_url_seccion_1` varchar(50) NOT NULL,
  `id_plantilla` int(11) NOT NULL,
  PRIMARY KEY (`id_seccion_1`),
  KEY `FK1id_plantilla_seccion_1` (`id_plantilla`),
  CONSTRAINT `FK1id_plantilla_seccion_1` FOREIGN KEY (`id_plantilla`) REFERENCES `tbl_plantillas` (`id_plantillas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hyundaiCMS.tbl_seccion_1: ~0 rows (aproximadamente)
DELETE FROM `tbl_seccion_1`;
/*!40000 ALTER TABLE `tbl_seccion_1` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_seccion_1` ENABLE KEYS */;


-- Volcando estructura para tabla hyundaiCMS.tbl_seccion_2
DROP TABLE IF EXISTS `tbl_seccion_2`;
CREATE TABLE IF NOT EXISTS `tbl_seccion_2` (
  `id_seccion_2` int(11) NOT NULL AUTO_INCREMENT,
  `video_url_seccion_2` varchar(80) NOT NULL,
  `titulo_texto_seccion_2` varchar(80) NOT NULL,
  `titulo_color_texto_seccion_2` varchar(80) NOT NULL,
  `titulo_color_fonto_seccion_2` varchar(80) NOT NULL,
  `titulo_color_borde_seccion_2` varchar(80) NOT NULL,
  `titulo_linea_color_seccion_2` varchar(80) NOT NULL,
  `imagen_carro_1_seccion_2` varchar(80) NOT NULL,
  `div_descripcion_1_seccion_2` varchar(80) NOT NULL,
  `div_descripcion_2_seccion_2` varchar(80) NOT NULL,
  `div_descripcion_3_seccion_2` varchar(80) NOT NULL,
  `div_descripcion_4_seccion_2` varchar(80) NOT NULL,
  `div_descripcion_5_seccion_2` varchar(80) NOT NULL,
  `div_descripcion_6_seccion_2` varchar(80) NOT NULL,
  `descripcion_1_texto_seccion_2` varchar(80) NOT NULL,
  `descripcion_2_texto_seccion_2` varchar(80) NOT NULL,
  `descripcion_3_texto_seccion_2` varchar(80) NOT NULL,
  `descripcion_4_texto_seccion_2` varchar(80) NOT NULL,
  `descripcion_5_texto_seccion_2` varchar(80) NOT NULL,
  `descripcion_6_texto_seccion_2` varchar(80) NOT NULL,
  `descripcion_color_texto_seccion_2` varchar(80) NOT NULL,
  `descripcion_color_fondo_seccion_2` varchar(80) NOT NULL,
  `descripcion_color_borde_seccion_2` varchar(80) NOT NULL,
  `boton_1_color_texto_seccion_2` varchar(80) NOT NULL,
  `boton_2_color_texto_seccion_2` varchar(80) NOT NULL,
  `boton_1_color_fondo_seccion_2` varchar(80) NOT NULL,
  `boton_2_color_fondo_seccion_2` varchar(80) NOT NULL,
  `boton_1_color_borde_seccion_2` varchar(80) NOT NULL,
  `boton_2_color_borde_seccion_2` varchar(80) NOT NULL,
  `linea_1_color_seccion_2` varchar(80) NOT NULL,
  `imagen_productos_seccion_2` varchar(80) NOT NULL,
  `linea_2_color_seccion_2` varchar(80) NOT NULL,
  `tabla_titulo_color_texto_seccion_2` varchar(80) NOT NULL,
  `tabla_titulo_color_fondo_seccion_2` varchar(80) NOT NULL,
  `tabla_titulo_color_border_seccion_2` varchar(80) NOT NULL,
  `tabla_texto_1_seccion_2` varchar(80) NOT NULL,
  `tabla_texto_2_seccion_2` varchar(80) NOT NULL,
  `tabla_texto_3_seccion_2` varchar(80) NOT NULL,
  `tabla_texto_4_seccion_2` varchar(80) NOT NULL,
  `tabla_texto_5_seccion_2` varchar(80) NOT NULL,
  `tabla_color_texto_seccion_2` varchar(80) NOT NULL,
  `tabla_color_fondo_seccion_2` varchar(80) NOT NULL,
  `tabla_color_border_seccion_2` varchar(80) NOT NULL,
  `boton_3_color_texto_seccion_2` varchar(80) NOT NULL,
  `boton_3_color_fondo_seccion_2` varchar(80) NOT NULL,
  `boton_3_color_border_seccion_2` varchar(80) NOT NULL,
  `id_plantilla` int(11) NOT NULL,
  PRIMARY KEY (`id_seccion_2`),
  KEY `FK1_id_plantilla_seccion_2` (`id_plantilla`),
  CONSTRAINT `FK1_id_plantilla_seccion_2` FOREIGN KEY (`id_plantilla`) REFERENCES `tbl_plantillas` (`id_plantillas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hyundaiCMS.tbl_seccion_2: ~0 rows (aproximadamente)
DELETE FROM `tbl_seccion_2`;
/*!40000 ALTER TABLE `tbl_seccion_2` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_seccion_2` ENABLE KEYS */;


-- Volcando estructura para tabla hyundaiCMS.tbl_seccion_3
DROP TABLE IF EXISTS `tbl_seccion_3`;
CREATE TABLE IF NOT EXISTS `tbl_seccion_3` (
  `id_seccion_3` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_1_texto_seccion_3` varchar(50) NOT NULL,
  `titulo_1_color_texto_seccion_3` varchar(50) NOT NULL,
  `titulo_1_color_fondo_seccion_3` varchar(50) NOT NULL,
  `titulo_1_color_borde_seccion_3` varchar(50) NOT NULL,
  `titulo_1_linea_color_seccion_3` varchar(50) DEFAULT NULL,
  `imagen_1_seccion_3` varchar(50) DEFAULT NULL,
  `imagen_2_seccion_3` varchar(50) DEFAULT NULL,
  `imagen_3_seccion_3` varchar(50) DEFAULT NULL,
  `playlist` varchar(200) DEFAULT NULL,
  `titulo_2_color_texto_seccion_3` varchar(50) DEFAULT NULL,
  `titulo_2_color_fondo_seccion_3` varchar(50) DEFAULT NULL,
  `titulo_2_color_borde_seccion_3` varchar(50) DEFAULT NULL,
  `titulo_2_linea_color_seccion_3` varchar(50) DEFAULT NULL,
  `titulo_2_url_seccion_3` varchar(200) DEFAULT NULL,
  `boton_1_color_texto_seccion_3` varchar(50) DEFAULT NULL,
  `boton_1_color_fondo_seccion_3` varchar(50) DEFAULT NULL,
  `boton_1_color_borde_seccion_3` varchar(50) DEFAULT NULL,
  `galeria_imagen_1_seccion_3` varchar(50) DEFAULT NULL,
  `galeria_imagen_2_seccion_3` varchar(50) DEFAULT NULL,
  `imagen_productos_seccion_3` varchar(50) DEFAULT NULL,
  `id_plantilla` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_seccion_3`),
  KEY `FK1_id_plantilla_seccion_3` (`id_plantilla`),
  CONSTRAINT `FK1_id_plantilla_seccion_3` FOREIGN KEY (`id_plantilla`) REFERENCES `tbl_plantillas` (`id_plantillas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hyundaiCMS.tbl_seccion_3: ~0 rows (aproximadamente)
DELETE FROM `tbl_seccion_3`;
/*!40000 ALTER TABLE `tbl_seccion_3` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_seccion_3` ENABLE KEYS */;


-- Volcando estructura para tabla hyundaiCMS.tbl_seccion_4
DROP TABLE IF EXISTS `tbl_seccion_4`;
CREATE TABLE IF NOT EXISTS `tbl_seccion_4` (
  `id_seccion_4` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `titulo_color_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `titulo_color_fondo_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `titulo_color_borde_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `titulo_linea_color_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `imagen_1_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `imagen_2_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `lineas_contenidos_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenidos_lineas_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenidos_titulo_color_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenidos_descripcion_color_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenidos_boton_color_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenidos_boton_color_fondo_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenidos_boton_color_borde_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenidos_boton_color_hover_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `modal_boton_color_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `modal_boton_color_fondo_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `modal_boton_color_borde_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `modal_color_textosubrrayado_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_1_imagen_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_1_titulo_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_1_descripcion_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `modal_1_url_fuente_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_2_imagen_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_2_titulo_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_2_descripcion_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `modal_2_url_fuente_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_3_imagen_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_3_titulo_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_3_descripcion_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `modal_3_url_fuente_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_4_imagen_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_4_titulo_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_4_descripcion_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `modal_4_url_fuente_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_5_imagen_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_5_titulo_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_5_descripcion_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `modal_5_url_fuente_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_6_imagen_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_6_titulo_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `contenido_6_descripcion_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `modal_6_url_fuente_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `boton_1_color_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `boton_1_color_fondo_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `boton_1_color_borde_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `boton_flecha_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `boton_2_color_texto_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `boton_2_color_fondo_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `boton_2_color_borde_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `linea_color_seccion_4` varchar(50) NOT NULL DEFAULT '0',
  `id_plantilla` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_seccion_4`),
  KEY `FK1_id_plantilla_seccion_4` (`id_plantilla`),
  CONSTRAINT `FK1_id_plantilla_seccion_4` FOREIGN KEY (`id_plantilla`) REFERENCES `tbl_plantillas` (`id_plantillas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hyundaiCMS.tbl_seccion_4: ~0 rows (aproximadamente)
DELETE FROM `tbl_seccion_4`;
/*!40000 ALTER TABLE `tbl_seccion_4` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_seccion_4` ENABLE KEYS */;


-- Volcando estructura para tabla hyundaiCMS.tbl_seccion_5
DROP TABLE IF EXISTS `tbl_seccion_5`;
CREATE TABLE IF NOT EXISTS `tbl_seccion_5` (
  `id_seccion_5` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_texto_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `titulo_color_texto_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `titulo_color_fondo_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `titulo_color_borde_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `titulo_linea_color_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `imagen_1_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `imagen_2_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `modals_boton_color_texto_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `modals_boton_color_fondo_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `modals_boton_color_borde_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_1_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_1_movil_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_1_url_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_2_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_2_movil_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_2_url_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_3_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_3_movil_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_3_url_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_4_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_4_movil_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_4_url_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_5_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_5_movil_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_5_url_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_6_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_6_movil_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_6_url_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_7_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_7_movil_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_7_url_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_8_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_8_movil_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_8_url_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_9_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_9_movil_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_9_url_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_10_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_10_movil_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_10_url_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_11_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_11_movil_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_11_url_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_12_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_12_movil_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `galeria_img_12_url_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `boton_flecha_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `lina_color_seccion_5` varchar(50) NOT NULL DEFAULT '0',
  `id_plantilla` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_seccion_5`),
  KEY `FK1_id_plantilla_seccion_5` (`id_plantilla`),
  CONSTRAINT `FK1_id_plantilla_seccion_5` FOREIGN KEY (`id_plantilla`) REFERENCES `tbl_plantillas` (`id_plantillas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hyundaiCMS.tbl_seccion_5: ~0 rows (aproximadamente)
DELETE FROM `tbl_seccion_5`;
/*!40000 ALTER TABLE `tbl_seccion_5` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_seccion_5` ENABLE KEYS */;


-- Volcando estructura para tabla hyundaiCMS.tbl_usuarios
DROP TABLE IF EXISTS `tbl_usuarios`;
CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(80) NOT NULL,
  `apellidos_usuario` varchar(80) NOT NULL,
  `correo_usuario` varchar(90) NOT NULL,
  `rol_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `FK1_rol_usuario` (`rol_usuario`),
  CONSTRAINT `FK1_rol_usuario` FOREIGN KEY (`rol_usuario`) REFERENCES `tbl_roles` (`id_roles`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla hyundaiCMS.tbl_usuarios: ~1 rows (aproximadamente)
DELETE FROM `tbl_usuarios`;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` (`id_usuario`, `nombre_usuario`, `apellidos_usuario`, `correo_usuario`, `rol_usuario`) VALUES
	(1, 'Miguel Angel', 'Prieto Mendez', 'desarrollo@youoneagency.com', 1);
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
