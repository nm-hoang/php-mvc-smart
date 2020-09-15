-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2020 at 08:31 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamelist`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `title`, `author`, `description`, `image`) VALUES
(1, 'PUGB Gaming', 'Bredan Greene', 'Players can choose to enter the match solo, duo, or with a small team of up to four people.', 'https://images-na.ssl-images-amazon.com/images/I/71cTCvSFJTL._SL1200_.jpg'),
(7, 'Metro Exodus', 'Andy Kelly', 'The player must cope with the new hazards and engage in combat against mutated creatures as well as hostile humans.', 'https://upload.wikimedia.org/wikipedia/en/a/af/Cover_Art_of_Metro_Exodus.png'),
(3, 'Arena of Valor', 'Garena', 'Arena of Valor is a 3D, third-person, multiplayer online battle arena (MOBA) game for mobile.', 'https://static-cdn.jtvnw.net/ttv-boxart/Arena%20of%20Valor.jpg'),
(4, 'Sayonara Wild Hearts', 'Jacob Ridley', 'Sayonara Wild Hearts follows the story of a heartbroken young woman through a surrealistic landscape.', 'https://i.etsystatic.com/6804182/r/il/deb3a9/2186788999/il_570xN.2186788999_tqbf.jpg'),
(6, 'SuperHot VR', 'Graeme Meredith', 'Blurring the lines between cautious strategy and unbridled mayhem, SUPERHOT VR is the definitive VR FPS in which time moves only when you move', 'https://s1.gaming-cdn.com/images/products/3642/orig/superhot-vr-cover.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
