-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 18 Février 2014 à 02:38
-- Version du serveur: 5.5.33
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `coursphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cp` char(5) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `naissance` date NOT NULL,
  `inscription` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=24 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `prenom`, `nom`, `email`, `adresse`, `cp`, `ville`, `tel`, `naissance`, `inscription`) VALUES
(1, 'Gregory', 'House', 'greg.house@princeton-hospital.com', 'Princeton hospital', '48785', 'Princeton', '555-555-9658', '1961-06-07', '2008-10-06'),
(2, 'Jethro', 'Gibbs', 'gibbs@ncis.nav', 'en vadrouille', '96854', 'Trou paumé', '569-985-6325', '1957-11-01', '2008-10-09'),
(3, 'Barney', 'Stinson', 'barney@thebrocode.com', '12, 5e avenue', '92555', 'New-York', '223-555-8974', '1978-09-18', '2008-11-02'),
(4, 'Abbygail', 'Sciuto', 'abby@ncis.nav', 'labo du ncis', '96854', 'Trou paumé', '012-345-6789', '1983-01-11', '2008-11-12'),
(5, 'Kate', 'Todd', 'kate@ncis-dcd.com', '6 pieds sous terre', '96854', 'Trou paumé', '000-000-0000', '1974-03-21', '2008-12-07'),
(6, 'Ted', 'Mosby', 'ted.mosby@haveyoumetted.com', '7, 4e avenue', '92555', 'New-York', '226-555-9874', '1979-03-09', '2008-12-16'),
(7, 'Lisa', 'Cuddy', 'lisa.cuddy@princeton-hospital.com', 'Princeton hospital', '48785', 'Princeton', '555-555-9657', '1967-08-09', '2009-01-03'),
(8, 'Chuck', 'Bartowski', 'chuck.b@buy-more.com', 'St Geek Street', '95062', 'Burbank', '123-654-7894', '1977-10-07', '2009-02-24'),
(9, 'Walker', 'Sarah', 'swalker@cia.gov.us', 'St Geek Street', '95062', 'Burbank', '123-654-6589', '1977-08-08', '2009-02-26'),
(10, 'Lilly', 'Aldrin', 'lilly@marshall.com', '7, 4e avenue', '92555', 'New-York', '213-555-6589', '1979-01-02', '2009-03-10'),
(11, 'Robin', 'Scherbatsky', 'robins@abc-news.com', '7, 4e avenue', '92555', 'New-York', '213-555-6589', '1977-03-08', '2009-03-13'),
(12, 'Morgan', 'Grimes', 'morgan.grimes@buy-more.com', 'Dummy Street', '95062', 'Burbank', '265-958-9847', '1980-04-12', '2009-03-25'),
(13, 'John', 'Casey', 'jcasey@nsa.gov.us', 'Big Brother Street', '95062', 'Burbank', '265-985-9665', '1971-10-15', '2009-03-26'),
(14, 'Sheldon', 'Cooper', 'spock@physics-nerds.com', 'nerds building', '95668', 'Los-Angeles', '246-552-6597', '1985-09-05', '2009-04-02'),
(15, 'Leonard', 'Hofstadter', 'leonard@physics-nerds.com', 'nerds building', '95668', 'Los-Angeles', '246-552-6597', '1984-09-01', '2009-04-24'),
(16, 'Marshal', 'Eriksen', '', '', '92555', 'New-York', '', '1978-08-24', '2012-09-12'),
(17, 'Dexter', 'MORGAN', 'dmorgan@miamimetro.pd', '8420 Palm Terrace #108', '33142', 'Miami', '', '1971-02-01', '2012-11-09'),
(18, 'Harry', 'Potter', 'hp@hogwarts.com', '4 Privet Drive', '12345', 'Little Wingding', '', '1980-07-31', '2013-06-11'),
(19, 'Kim', 'BAUER', 'kbauer@ctu.gov', 'Woodland Hills, California', '12345', 'Los-Angeles', '', '1990-12-03', '2013-08-15'),
(20, 'Jack', 'BAUER', 'jbauer@ctu.gov', '19, CTU Street', '12345', 'Los-Angeles', '', '1966-02-18', '2013-11-26'),
(21, 'Walter', 'White', 'wwhite@jpwynne-highschool.edu', '308 Negra Arroyo Lane', '87104', 'Albuquerque', '', '1959-09-07', '2013-12-27'),
(22, 'Jesse', 'Pinkman', 'jesse.pinkman@methdealer.com', '9809 Margo Street', '87104', 'Albuquerque', '', '1984-09-23', '2014-01-09'),
(23, 'Saul', 'Goodman', 'saul@bettercallsaul.com', 'Saul Goodman & Associates, Strip Mall', '87104', 'Albuquerque', '505 503-4455', '1962-10-22', '2014-01-10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
