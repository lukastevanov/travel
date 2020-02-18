-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2020 at 09:53 AM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `activities` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `name`, `activities`, `destination`, `date`) VALUES
(1, '', 'Hiking', 'Australia', ''),
(2, '', 'Surfing', 'Hawai', ''),
(3, '', 'Swimming', 'Spain', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `email`, `text`, `date`) VALUES
(1, 'asd', 'SS', '2020-02-16 00:00:00'),
(2, 'assasa', 'assaas', '2020-02-17 00:00:00'),
(3, 'asd', 'asd', '2020-02-17 00:00:00'),
(4, 'asd', 'asd', '2020-02-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `destinacije`
--

DROP TABLE IF EXISTS `destinacije`;
CREATE TABLE IF NOT EXISTS `destinacije` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `lokacija` varchar(255) NOT NULL,
  `cena` int(11) NOT NULL,
  `opis` text NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinacije`
--

INSERT INTO `destinacije` (`did`, `lokacija`, `cena`, `opis`) VALUES
(1, 'Kambodza', 5000, 'Cambodia is a Southeast Asian nation whose landscape spans low-lying plains, the Mekong Delta, mountains and Gulf of Thailand coastline. Phnom Penh, its capital, is home to the art deco Central Market, glittering Royal Palace and the National Museum\'s historical and archaeological exhibits. In the country\'s northwest are the ruins of Angkor Wat, a massive stone temple complex built during the Khmer Empire.'),
(2, 'Argentina', 6000, 'Argentina, officially the Argentine Republic, is a country located mostly in the southern half of South America.'),
(3, 'Tanzanija', 5780, 'Tanzania is an East African country known for its vast wilderness areas. They include the plains of Serengeti National Park, a safari mecca populated by the “big five” game (elephant, lion, leopard, buffalo, rhino), and Kilimanjaro National Park, home to Africa’s highest mountain. Offshore lie the tropical islands of Zanzibar, with Arabic influences, and Mafia, with a marine park home to whale sharks and coral reefs.'),
(4, 'Libya', 3200, 'Libya, officially the State of Libya, is a country in the Maghreb region in North Africa, bordered by the Mediterranean Sea to the north, Egypt to the east, Sudan to the southeast, Chad to the south, Niger to the southwest, Algeria to the west, and Tunisia to the northwest.');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE IF NOT EXISTS `korisnik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isadmin` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `email`, `password`, `isadmin`) VALUES
(1, 'Marko', 'Petrovic', 'markop@gmail.com', 'f1dc735ee3581693489eaf286088b916', 0),
(2, 'Stefan', 'Peric', 'stefanp@gmail.com', 'f1dc735ee3581693489eaf286088b916', 1),
(3, 'as', '', 'pujan@pujanovic.com', 'SIfra123++', 0),
(15, 'asd', 'asd', 'pujan@pujanovic.comss', '5d5c7a020522394813e52660aa2f3619', 0),
(14, 'sdf', 'sdf', 'pujan@pujanovic.com', '5d5c7a020522394813e52660aa2f3619', 0),
(13, 'asd', 'asd', 'pujan@pujanovic.com', '5d5c7a020522394813e52660aa2f3619', 0),
(12, 'asd', 'asd', 'pujan@pujanovic.com', '5d5c7a020522394813e52660aa2f3619', 0),
(16, 'asd', 'asd', 'pujan@pujanovic.comss', '5d5c7a020522394813e52660aa2f3619', 0),
(17, 'asd', 'asd', 'pujan@pujasnovic.comss', '5d5c7a020522394813e52660aa2f3619', 0),
(18, 'asd', 'asd', 'a@a.com', '202cb962ac59075b964b07152d234b70', 0),
(19, 's', 's', 's@s.com', '03c7c0ace395d80182db07ae2c30f034', 0),
(20, 'asd', 'asd', 'pujan@pujanovic.com', '5d5c7a020522394813e52660aa2f3619', 0),
(21, 'asd', 'asd', 'pujan@pujanovic.coccm', '5d5c7a020522394813e52660aa2f3619', 0),
(23, 'Danijela', 'Nikitin', 'danijela@admin.com', 'bf73e85430590c54f4dd529d00a28474', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
