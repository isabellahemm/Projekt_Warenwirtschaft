-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 14. Nov 2014 um 13:17
-- Server Version: 5.6.20
-- PHP-Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kunde_lieferant`
--

CREATE TABLE IF NOT EXISTS `kunde_lieferant` (
`kunde_lieferant_ID` int(3) NOT NULL,
  `Kennung` tinyint(1) NOT NULL COMMENT '0=kunde 1=lieferant',
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Anschrift` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `kunde_lieferant`
--

INSERT INTO `kunde_lieferant` (`kunde_lieferant_ID`, `Kennung`, `Name`) VALUES
(1, 0, 'Joern Grahl'),
(2, 1, 'Dirk Weitzel');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bestellung`
--

CREATE TABLE IF NOT EXISTS `bestellung` (
`Bestell_ID` int(3) NOT NULL,
  `Menge` int(5) NOT NULL,
  `Waren_ID` int(3) NOT NULL,
  `kunde_lieferant_ID` int(3) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Daten für Tabelle `bestellung`
--


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ware`
--

CREATE TABLE IF NOT EXISTS `ware` (
`Waren_ID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Einkaufspreis` decimal(10,2) NOT NULL,
  `Verkaufspreis` decimal(10,2) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Daten für Tabelle `ware`
--
--
-- Indexes for dumped tables
--

--
-- Indexes for table `kunde_lieferant`
--
ALTER TABLE `kunde_lieferant`
 ADD PRIMARY KEY (`kunde_lieferant_ID`);

--
-- Indexes for table `bestellung`
--
ALTER TABLE `bestellung`
 ADD PRIMARY KEY (`Bestell_ID`);

--
-- Indexes for table `ware`
--
ALTER TABLE `ware`
 ADD PRIMARY KEY (`Waren_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kunde_lieferant`
--
ALTER TABLE `kunde_lieferant`
MODIFY `kunde_lieferant_ID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bestellung`
--
ALTER TABLE `bestellung`
MODIFY `Bestell_ID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `ware`
--
ALTER TABLE `ware`
MODIFY `Waren_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
