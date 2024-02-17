-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Wrz 2015, 09:36
-- Wersja serwera: 5.6.26
-- Wersja PHP: 5.6.12
 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
 
 
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
 
--
-- Baza danych: `szkola`
--
 
-- --------------------------------------------------------
 
--
-- Struktura tabeli dla tabeli `ocena`
--
 
CREATE TABLE IF NOT EXISTS `ocena` (
  `id` int(10) unsigned NOT NULL,
  `przedmiot_id` int(10) unsigned NOT NULL,
  `uczen_id` int(10) unsigned NOT NULL,
  `ocena` int(10) unsigned DEFAULT NULL,
  `dataWystawienia` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
 
--
-- Zrzut danych tabeli `ocena`
--
 
INSERT INTO `ocena` (`id`, `przedmiot_id`, `uczen_id`, `ocena`, `dataWystawienia`) VALUES
(1, 1, 2, 5, '2015-09-03'),
(2, 1, 2, 6, '2015-09-03'),
(3, 1, 1, 5, '2015-09-03'),
(4, 1, 1, 6, '2015-09-03'),
(5, 1, 2, 1, '2015-09-03'),
(6, 1, 2, 1, '2015-09-03'),
(7, 1, 2, 4, '2015-09-03'),
(8, 4, 1, 3, '2015-09-10'),
(9, 4, 1, 4, '2015-09-15'),
(10, 4, 1, 3, '2015-09-10'),
(11, 4, 1, 4, '2015-09-15'),
(12, 4, 1, 5, '2015-09-10'),
(13, 4, 1, 5, '2015-09-15'),
(14, 4, 2, 3, '2015-09-22'),
(15, 4, 2, 1, '2015-09-15'),
(16, 4, 2, 3, '2015-09-22'),
(17, 4, 2, 1, '2015-09-15');
 
-- --------------------------------------------------------
 
--
-- Struktura tabeli dla tabeli `uczen`
--
 
CREATE TABLE IF NOT EXISTS `uczen` (
  `id` int(10) unsigned NOT NULL,
  `imie` text,
  `nazwisko` text,
  `PESEL` text,
  `klasa` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
 
--
-- Zrzut danych tabeli `uczen`
--
 
INSERT INTO `uczen` (`id`, `imie`, `nazwisko`, `PESEL`, `klasa`) VALUES
(1, 'Ewa', 'Kowalska', '00000000001', '1a'),
(2, 'Jan', 'Kowalski', '00000000002', '1a');
 
--
-- Indeksy dla zrzutów tabel
--
 
--
-- Indexes for table `ocena`
--
ALTER TABLE `ocena`
  ADD PRIMARY KEY (`id`);
 
--
-- Indexes for table `uczen`
--
ALTER TABLE `uczen`
  ADD PRIMARY KEY (`id`);
 
--
-- AUTO_INCREMENT for dumped tables
--
 
--
-- AUTO_INCREMENT dla tabeli `ocena`
--
ALTER TABLE `ocena`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT dla tabeli `uczen`
--
ALTER TABLE `uczen`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;