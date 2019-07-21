# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.5-10.3.9-MariaDB)
# Base de datos: aguitadecoco
# Tiempo de Generación: 2019-07-21 00:13:58 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla product_promotion
# ------------------------------------------------------------

LOCK TABLES `product_promotion` WRITE;
/*!40000 ALTER TABLE `product_promotion` DISABLE KEYS */;

INSERT INTO `product_promotion` (`product_id`, `promotion_id`)
VALUES
	(4,1),
	(7,1),
	(6,1),
	(1,2),
	(5,2),
	(2,3),
	(8,3),
	(9,3),
	(10,3);

/*!40000 ALTER TABLE `product_promotion` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla products
# ------------------------------------------------------------

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `title`, `description`, `price`)
VALUES
	(1,'Crema de coco','Una exelente crema humectante a base de coco',40.00),
	(2,'Supercoco','Deliciosos caramelo hecho de coco',5.00),
	(4,'Cocada','Dulce de coco hecho artesanalmente',100.00),
	(5,'Agua de coco','A de Coco es agua de coco pura, sin diluir, 100% natural, sin azúcar añadido, sin conservantes ni sabor artificial, proveniente de cultivos de coco orgánicos en el pacífico mexicano, donde cuidamos todo el proceso desde la siembra hasta su envasado para ofrecer un producto totalmente natural. A de Coco es lo mas parecido a abrir un coco y tomar su agua directamente.',100.00),
	(6,'Aceite de coco virgen','Nuestros aceites A de Coco se denominan VIRGEN porque que han sido extraídos mediante prensado en FRIO sin ningún aditivo químico. El prensado en frío permite garantizar su pureza, un delicioso sabor y mantener intactas sus propiedades y nutrientes. En A de Coco cuidamos cada uno de los procesos para ofrecerte un producto totalmente natural!.',70.00),
	(7,'Bebida de coco','Nuestra bebida de coco A DE COCO es una alternativa rica, natural, sin azucar añadido, sin lactosa y sin gluten! proveniente de los mejores cocos seleccionados para extraer de su pulpa el alimento líquido rico en ácidos grasos de cadena media (AGCM) calcio, vitaminas D y A.',20.00),
	(8,'Harina de coco','Nuestra harina de coco A DE COCO es obtenida de la fina molienda de la pulpa de cocos ORGANICOS, una sana alternativa para cocinar sin gluten! Es 100% natural, tiene alto contenido de fibra, proteína y grasas buenas! es baja en carbohidratos y tiene un bajo índice glicémico.',30.00),
	(9,'Coco Chips','Los COCO CHIPS son finas hojuelas de coco horneadas lentamente para que disfrutes el delicioso sabor del coco en cualquier momento! tienen un alto contenido de fibra y son libres de conservantes. Son un snack ideal!',10.00),
	(10,'Coquitos','Deliciosa bola de azucar con coco de color peculiar.',2.00);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla promotions
# ------------------------------------------------------------

LOCK TABLES `promotions` WRITE;
/*!40000 ALTER TABLE `promotions` DISABLE KEYS */;

INSERT INTO `promotions` (`id`, `description`, `discount`, `started_at`, `ended_at`)
VALUES
	(1,'Día del padre',15,'2019-07-20','2019-07-24'),
	(2,'Día de la madre',45,'2019-07-22','2019-07-31'),
	(3,'Viernes negro',65,'2019-08-01','2019-08-09');

/*!40000 ALTER TABLE `promotions` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
