-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Apr 2024 um 16:24
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `dbprojekt`
--
CREATE DATABASE IF NOT EXISTS `dbprojekt` DEFAULT CHARACTER SET latin1 COLLATE latin1_german1_ci;
USE `dbprojekt`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bestellung`
--

CREATE TABLE `bestellung` (
  `Benutzername` varchar(25) COLLATE latin1_german1_ci NOT NULL,
  `Straße` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `OrtundPLZ` varchar(25) COLLATE latin1_german1_ci NOT NULL,
  `ProduktID` int(11) NOT NULL,
  `menge` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Daten für Tabelle `bestellung`
--

INSERT INTO `bestellung` (`Benutzername`, `Straße`, `OrtundPLZ`, `ProduktID`, `menge`) VALUES
('Mr', 'mrrrrrrr', 'mmmmmrrrrrrrr', 3, 1),
('Mr', 'mrrrrrrr', 'mmmmmrrrrrrrr', 3, 1),
('user', 'ggggggg', 'gggggggg', 2, 10),
('user', 'zzzzz', 'zzzzzz', 2, 10),
('user', 'ppppp', 'ppppppp', 1, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `dbnachrichten`
--

CREATE TABLE `dbnachrichten` (
  `Absender` varchar(40) COLLATE latin1_german1_ci NOT NULL,
  `Empfaeger` varchar(40) COLLATE latin1_german1_ci NOT NULL,
  `Nachricht` text COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Daten für Tabelle `dbnachrichten`
--

INSERT INTO `dbnachrichten` (`Absender`, `Empfaeger`, `Nachricht`) VALUES
('Test', 'Test', 'fsdf'),
('h', 'Test', 'hey'),
('h', 'Test', 'hey'),
('h', 'Test2', 'hey ohhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh ohhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
('h', 'test2', 'h|| \" hat Produkt \"||1||\"Bestellt\"'),
('h', 'SELECT Betreuer from produkt where Produ', 'h hat Produkt 2 bestellt'),
('h', '2', 'h hat Produkt 2 bestellt'),
('h', '2', 'h hat Produkt 2 bestellt'),
('h', 'test', 'h hat Produkt 2 bestellt'),
('h', 'test3', ' hat Produkt  bestellt'),
('h', 'h', ' hat Produkt  bestellt'),
('h', 'h', ' hat Produkt  bestellt'),
('h', 'h', 'h hat Produkt 1 bestellt'),
('h', 'test3', 'h hat Produkt 4 bestellt'),
('h', 'test2', 'h hat Produkt 3 bestellt'),
('h', 'test', 'h hat Produkt 2 bestellt'),
('test56', 'test3', 'test56 hat Produkt 4 bestellt'),
('test56', 'h', 'test56 hat Produkt 1 bestellt'),
('h', 'test', 'h hat Produkt 2 bestellt'),
('h', 'test', 'h hat Produkt 2 bestellt'),
('h', 'test3', 'h hat Produkt 4 bestellt'),
('Mr', 'test2', 'Mr hat Produkt 3 bestellt'),
('Mr', 'test2', 'Mr hat Produkt 3 bestellt'),
('Mr', 'test2', 'Mr hat Produkt 3 bestellt'),
('user', 'test', 'user hat Produkt 2 bestellt'),
('user', 'test', 'user hat Produkt 2 bestellt'),
('user', 'h', 'user hat Produkt 1 bestellt');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `logindaten`
--

CREATE TABLE `logindaten` (
  `Name` varchar(25) COLLATE latin1_german1_ci NOT NULL,
  `Passwort` varchar(25) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Daten für Tabelle `logindaten`
--

INSERT INTO `logindaten` (`Name`, `Passwort`) VALUES
('h', '1'),
('h2', '2'),
('h3', '3'),
('h4', '4'),
('Mr', '1'),
('test56', '56'),
('user', '1'),
('w', '1');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mitarbeiterlogin`
--

CREATE TABLE `mitarbeiterlogin` (
  `Name` varchar(25) COLLATE latin1_german1_ci NOT NULL,
  `Passwort` varchar(25) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Daten für Tabelle `mitarbeiterlogin`
--

INSERT INTO `mitarbeiterlogin` (`Name`, `Passwort`) VALUES
('h', '1'),
('test', '1'),
('test2', '2'),
('test3', '3');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkt`
--

CREATE TABLE `produkt` (
  `ProduktID` int(11) NOT NULL,
  `ProduktName` text COLLATE latin1_german1_ci NOT NULL,
  `Betreuer` varchar(25) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Daten für Tabelle `produkt`
--

INSERT INTO `produkt` (`ProduktID`, `ProduktName`, `Betreuer`) VALUES
(1, '24\" FullHD Komplett-Paket Mini PC 10-Watt Office, IntelPentium®4400T 2x2.9 GHz, 8GB, 256GB SSD, Windows 11 Pro, DP, VGA, Gigabit LAN, USB 3.0, MS Office 2010 Starter, 3 Jahre Garantie! - 7151', 'h'),
(2, 'BEASTCOM Q3 Essential Gaming, Komplett Set PC, AMD Ryzen 5 4X 3,90GHz 8 Threads, 4K Vega 11 Kern Grafik, 16GB RAM, 1TB SSD, Monitor LED 24\", Tastatur, Maus, Mauspad, WiFi, Windows 11 Pro', 'test'),
(3, 'Komplett PC Set Intel i7 4770 8-Thread 3.90 GHz Business Office Multimedia Computer mit 3 Jahren Garantie! |3.8 GHz | 16GB | 512 GB SSD | DVD±RW | USB3 | Windows 11 Prof.', 'test2'),
(4, 'Komplett PC Entry Gaming/Multimedia Computer | AMD Ryzen3 Pro 2100, 4-Threads, 3.4 GHz | 16GB DDR4 | 256GB SSD + 1TB | Radeon™ Vega3 4GB | 24\" | WLAN | DVD | Win11', 'test3');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  ADD KEY `bname_fk` (`Benutzername`),
  ADD KEY `produktID_fk` (`ProduktID`);

--
-- Indizes für die Tabelle `logindaten`
--
ALTER TABLE `logindaten`
  ADD PRIMARY KEY (`Name`);

--
-- Indizes für die Tabelle `mitarbeiterlogin`
--
ALTER TABLE `mitarbeiterlogin`
  ADD PRIMARY KEY (`Name`);

--
-- Indizes für die Tabelle `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`ProduktID`),
  ADD KEY `produktfk` (`Betreuer`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `produkt`
--
ALTER TABLE `produkt`
  MODIFY `ProduktID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  ADD CONSTRAINT `bname_fk` FOREIGN KEY (`Benutzername`) REFERENCES `logindaten` (`Name`),
  ADD CONSTRAINT `produktID_fk` FOREIGN KEY (`ProduktID`) REFERENCES `produkt` (`ProduktID`) ON UPDATE CASCADE;

--
-- Constraints der Tabelle `produkt`
--
ALTER TABLE `produkt`
  ADD CONSTRAINT `produktfk` FOREIGN KEY (`Betreuer`) REFERENCES `mitarbeiterlogin` (`Name`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
