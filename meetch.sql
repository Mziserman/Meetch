-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Avril 2015 à 16:51
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `meetch`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sex` varchar(7) NOT NULL,
  `name` varchar(80) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `birth_date` date NOT NULL,
  `city` varchar(150) NOT NULL,
  `smale` varchar(2) NOT NULL,
  `sfemale` varchar(2) NOT NULL,
  `sasoeur` varchar(2) NOT NULL,
  `snight` varchar(2) NOT NULL,
  `sfriend` varchar(2) NOT NULL,
  `age` int(1) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `sex`, `name`, `first_name`, `birth_date`, `city`, `smale`, `sfemale`, `sasoeur`, `snight`, `sfriend`, `age`, `mail`, `password`) VALUES
(1, 'imale', 'gezthhtr', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(2, 'ifemale', 'yoloman', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(3, 'imale', 'Blop', '', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(4, 'ifemale', 'Dior', 'Rachel', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(5, 'imale', 'ojrio', 'bgfs', '0000-00-00', '', '', '', '', '', '', 0, '', ''),
(6, 'imale', 'bfgse', 'bgryzegetr', '1987-02-14', '', '', '', '', '', '', 0, '', ''),
(7, 'imale', 'svfbg', 'hbyte', '0000-00-00', 'Paris', '', '', '', '', '', 0, '', ''),
(8, 'imale', 'srgt', 'hjte', '1967-10-22', 'Paris', 'on', '', '', '', '', 0, '', ''),
(9, 'imale', 'fvea', 'holiy', '1954-05-17', 'Paris', 'on', 'no', 'on', 'on', 'no', 1, 'piou@gmail.com', '83ff23f7b5d175f3959edc659'),
(10, 'imale', 'Pipou', 'Lol', '1989-09-14', 'Paris', 'no', 'on', 'on', 'on', 'on', 0, 'pipou@gmail.com', 'f1af10c8ebda6affc94800c76'),
(11, 'ifemale', 'Test', 'Test', '1984-04-15', 'Test', 'on', 'no', 'on', 'no', 'on', 1, 'test@gmail.com', '32fd4620849b6b354e0aa1f91e39a92c9ba2f8d73564097fdd1d3a3f30f7694e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
