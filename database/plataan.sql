-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 12 apr 2024 om 11:05
-- Serverversie: 8.2.0
-- PHP-versie: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plataan`
--
CREATE DATABASE IF NOT EXISTS `plataan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `plataan`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klantengegevens`
--

DROP TABLE IF EXISTS `klantengegevens`;
CREATE TABLE IF NOT EXISTS `klantengegevens` (
  `postcode` text NOT NULL,
  `afhaaltijd` int NOT NULL,
  `voornaamklant` text NOT NULL,
  `achternaamklant` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `mainproduct`
--

DROP TABLE IF EXISTS `mainproduct`;
CREATE TABLE IF NOT EXISTS `mainproduct` (
  `product` varchar(255) NOT NULL,
  `id` int NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `mainproduct`
--

INSERT INTO `mainproduct` (`product`, `id`, `img`) VALUES
('Friet', 1, 'assets\\img\\friet.png'),
('Snacks', 2, 'assets\\img\\snacks.png'),
('Broodjes', 3, 'assets\\img\\broodjes.png'),
('Menu\'s', 4, 'assets\\img\\menu.png'),
('Salades', 5, 'assets\\img\\salades.png'),
('Ijs & shakes', 6, 'assets\\img\\ijs.png'),
('sauzen', 7, 'assets\\img\\sauzen.png'),
('Dranken', 8, 'assets\\img\\dranken.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order_klant`
--

DROP TABLE IF EXISTS `order_klant`;
CREATE TABLE IF NOT EXISTS `order_klant` (
  `product` int NOT NULL,
  `prijs` int NOT NULL,
  `aantal` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

DROP TABLE IF EXISTS `producten`;
CREATE TABLE IF NOT EXISTS `producten` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Productnaam` varchar(255) NOT NULL,
  `Omschrijving` text NOT NULL,
  `Prijs` double NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `categorie` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`Id`, `Productnaam`, `Omschrijving`, `Prijs`, `img`, `categorie`) VALUES
(1, 'Friet', 'alleen Friet', 2.95, 'assets\\img\\friet.png', 'Friet'),
(3, 'friet speciaal', 'Friet met curry, mayonaise en ui', 3.95, 'assets\\img\\friet_speciaal.png', 'Friet'),
(4, 'Friet saté', 'Friet met saté', 3.95, 'assets\\img\\friet_sate.png', 'Friet'),
(5, 'Friet curry', 'Friet met curry', 3.75, 'assets\\img\\friet_curry', 'Friet'),
(6, 'Friet oorlog', 'Friet met saté en mayonaise', 4.15, 'assets\\img\\friet_oorlog', 'Friet'),
(7, 'Friet waterfiets', 'Friet,2 frikandellen,majo en curry', 6.75, 'assets\\img\\friet_waterfiets.png', 'Friet'),
(8, 'Friet stoofvlees', 'Friet met stoofvlees', 5.95, 'assets\\img\\friet_stoofvlees.png', 'Friet'),
(9, 'Friet knoflook', 'Friet met knoflooksaus', 3.95, 'assets\\img\\friet_knoflook.png', 'Friet'),
(10, 'Friet joppie', 'Friet met joppiesaus', 3.95, 'assets\\img\\friet_joppie.png', 'Friet'),
(11, 'Friet ketchup', 'Friet met ketchup', 3.75, 'assets\\img\\friet_ketchup', 'Friet'),
(12, 'Friet super', 'Friet met frikandel, majo en curry', 5.95, 'assets\\img\\friet_super.png', 'Friet'),
(13, 'kroket', 'kroket', 3.25, 'assets\\img\\kroket', 'snacks'),
(14, 'golashkroket', 'golashkroket', 3.25, 'assets\\img\\kroket', 'snacks'),
(15, 'groentekroket', 'groentekroket', 3.25, 'assets\\img\\kroket', 'snacks'),
(16, 'satékroket', 'satékroket', 3.25, 'assets\\img\\kroket', 'snacks'),
(17, 'frikandel', 'frikandel', 2.8, 'assets\\img\\frikandel', 'snacks'),
(18, 'frikandel speciaal', 'frikandel speciaal', 3.4, 'assets\\img\\frikandel_speciaal', 'snacks'),
(19, 'bamibal', 'bamibal', 3.25, 'assets\\img\\bamibal', 'snacks'),
(20, 'nasibal ', 'nasibal ', 3.25, 'assets\\img\\nasibal', 'snacks'),
(21, 'lihanboutje', 'lihanboutje', 3.25, 'assets\\img\\lihanboutje', 'snacks'),
(22, 'mookse schijf', 'mookse schijf', 3.25, 'assets\\img\\mookseschijf', 'snacks');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Gebruikersnaam` varchar(255) NOT NULL,
  `Wachtwoord` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`Gebruikersnaam`, `Wachtwoord`, `rol`, `email`) VALUES
('baas', 'Baas1', 'admin', 'baas@gmail.com'),
('hoi', 'hoi', '', 'hoi'),
('Andy', 'JehHAWIUDHAIWDHuiww7128y7y**&T*&ET@7t73t2w3', '', 'wow.com'),
('Andy', 'niekisthebest', '', 'wow.com'),
('D', '', '', 'D');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
