-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2015 at 09:12 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `optikalara`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datumivrijeme` timestamp NOT NULL,
  `autor` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `novost` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `novost` (`novost`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `datumivrijeme`, `autor`, `email`, `tekst`, `novost`) VALUES
(1, '2015-05-27 10:26:20', 'Lara', 'lbesic1@etf.unsa.ba', 'Porukaaaaaaa', 1),
(2, '2015-05-27 10:49:35', 'Emina', '', 'Druga poruka', 1),
(3, '2015-05-27 10:55:12', 'Sabina', 'sgrosic1@etf.unsa.ba', 'Binka je ostavila poruku', 2);

-- --------------------------------------------------------

--
-- Table structure for table `novost`
--

CREATE TABLE IF NOT EXISTS `novost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(150) COLLATE utf8_slovenian_ci NOT NULL,
  `autor` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `datumivrijeme` timestamp NOT NULL,
  `slika` varchar(300) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `novost`
--

INSERT INTO `novost` (`id`, `naslov`, `autor`, `tekst`, `datumivrijeme`, `slika`) VALUES
(1, '"1+1 GRATIS!"', 'Larisa B.', 'Za sve naše kupce u periodu 27.03.2015-31.05.2015. organizovali smo veliku akciju pod nazivom "1+1 GRATIS!". Za svake kupljene sunčane, dobijate dioptrijske naočale GRATIS!', '2015-05-26 14:01:54', 'http://www.optikastepinac.hr/slike_upload/20110606/velicina1/optika_stepinac201106060134090.jpg'),
(2, 'Promocija nove kolekcije Ray Ban', 'Larisa B.', 'Prisustvovali smo promociji, koja je održana u hotelu "Radon Plaza" u Sarajevu, nove kolekcije Ray Ban dioptrijskih i sunčanih naočala. Od ove sedmice se nalaze u ponudi u optici Lara po najpovoljnijim cijenama.', '2015-05-26 20:41:49', 'http://www.eyeexcellence.co.uk/wp-content/uploads/2014/12/RayBan_Logo.gif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
