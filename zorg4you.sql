-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 jun 2018 om 19:00
-- Serverversie: 5.7.21
-- PHP-versie: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zorg4you`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klanten`
--

CREATE TABLE `klanten` (
  `Klantnummer` int(11) NOT NULL,
  `Voornaam` varchar(255) DEFAULT NULL,
  `Tussenvoegsel` varchar(255) DEFAULT NULL,
  `Achternaam` varchar(255) DEFAULT NULL,
  `Straatnaam` varchar(255) DEFAULT NULL,
  `Huisnummer` varchar(255) DEFAULT NULL,
  `Toevoeging` varchar(255) DEFAULT NULL,
  `Postcode` varchar(255) DEFAULT NULL,
  `Plaats` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `klanten`
--

INSERT INTO `klanten` (`Klantnummer`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Straatnaam`, `Huisnummer`, `Toevoeging`, `Postcode`, `Plaats`) VALUES
(2, 'iopasd', 'iopasd', 'iopasd', 'iop', 'iop', 'iop', 'iop', 'iop'),
(4, 'iop', 'iop', 'iop', 'iop', 'iop', 'iopasd', 'iopasd', 'iopasd'),
(5, 'Raphael', 'van', 'Marion', 'Dorpstraat', '13', '', '1234AA', 'Horn'),
(6, 'lop', 'lop', 'lop', 'lop', 'lop', 'lop', '1234AA', 'Lop');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rollen`
--

CREATE TABLE `rollen` (
  `RolId` int(11) NOT NULL,
  `Rolnaam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `rollen`
--

INSERT INTO `rollen` (`RolId`, `Rolnaam`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `werknemers`
--

CREATE TABLE `werknemers` (
  `WerknemerID` int(11) NOT NULL,
  `Voornaam` varchar(255) DEFAULT NULL,
  `Tussenvoegsel` varchar(255) DEFAULT NULL,
  `Achternaam` varchar(255) DEFAULT NULL,
  `Straatnaam` varchar(255) DEFAULT NULL,
  `Huisnummer` varchar(255) DEFAULT NULL,
  `Toevoeging` varchar(255) DEFAULT NULL,
  `Postcode` varchar(255) DEFAULT NULL,
  `Plaats` varchar(255) DEFAULT NULL,
  `RolId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `werknemers`
--

INSERT INTO `werknemers` (`WerknemerID`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Straatnaam`, `Huisnummer`, `Toevoeging`, `Postcode`, `Plaats`, `RolId`) VALUES
(64, 'Damn', 'Van Den', 'Shit', 'phplaan', '6', 'A', '6666VE', 'PHP', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `werksoort`
--

CREATE TABLE `werksoort` (
  `WerksoortId` int(11) NOT NULL,
  `Werksoort` varchar(255) DEFAULT NULL,
  `Tarief` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `werksoort`
--

INSERT INTO `werksoort` (`WerksoortId`, `Werksoort`, `Tarief`) VALUES
(4, 'zuigen', 20),
(5, 'Jemoeder', 12);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`Klantnummer`);

--
-- Indexen voor tabel `rollen`
--
ALTER TABLE `rollen`
  ADD PRIMARY KEY (`RolId`);

--
-- Indexen voor tabel `werknemers`
--
ALTER TABLE `werknemers`
  ADD PRIMARY KEY (`WerknemerID`),
  ADD KEY `RolId` (`RolId`);

--
-- Indexen voor tabel `werksoort`
--
ALTER TABLE `werksoort`
  ADD PRIMARY KEY (`WerksoortId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klanten`
--
ALTER TABLE `klanten`
  MODIFY `Klantnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `werknemers`
--
ALTER TABLE `werknemers`
  MODIFY `WerknemerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT voor een tabel `werksoort`
--
ALTER TABLE `werksoort`
  MODIFY `WerksoortId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `werknemers`
--
ALTER TABLE `werknemers`
  ADD CONSTRAINT `werknemers_ibfk_1` FOREIGN KEY (`RolId`) REFERENCES `rollen` (`RolId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
