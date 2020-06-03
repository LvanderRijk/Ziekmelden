-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                10.4.6-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Versie:              11.0.0.5975
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van llnsysteem wordt geschreven
CREATE DATABASE IF NOT EXISTS `llnsysteem` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `llnsysteem`;

-- Structuur van  tabel llnsysteem.inloggen wordt geschreven
CREATE TABLE IF NOT EXISTS `inloggen` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel llnsysteem.inloggen: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `inloggen` DISABLE KEYS */;
/*!40000 ALTER TABLE `inloggen` ENABLE KEYS */;

-- Structuur van  tabel llnsysteem.leerling wordt geschreven
CREATE TABLE IF NOT EXISTS `leerling` (
  `llnId` int(11) NOT NULL AUTO_INCREMENT,
  `llnVoornaam` varchar(50) NOT NULL DEFAULT '0',
  `llnAchternaam` varchar(50) NOT NULL DEFAULT '0',
  `geboortedatum` date DEFAULT NULL,
  `gezondheid` varchar(50) NOT NULL DEFAULT '0',
  `ziekVan` date DEFAULT NULL,
  `ziekTot` date DEFAULT NULL,
  PRIMARY KEY (`llnId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel llnsysteem.leerling: ~2 rows (ongeveer)
/*!40000 ALTER TABLE `leerling` DISABLE KEYS */;
INSERT IGNORE INTO `leerling` (`llnId`, `llnVoornaam`, `llnAchternaam`, `geboortedatum`, `gezondheid`, `ziekVan`, `ziekTot`) VALUES
	(1, 'Laura', 'van der Rijk', '1995-11-16', 'Gezond', '2020-06-03', '0000-00-00'),
	(2, 'Ilona', 'van der Rijk', '1994-08-15', 'Geoorloofd Afwezig', '2020-03-31', '2020-04-02');
/*!40000 ALTER TABLE `leerling` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
