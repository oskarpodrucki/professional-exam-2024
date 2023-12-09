-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 03 Mar 2023, 17:43
-- Wersja serwera: 8.0.32-0ubuntu0.22.04.2
-- Wersja PHP: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `egzamin`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kadra`
--

CREATE TABLE `kadra` (
  `id` int NOT NULL,
  `imie` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL,
  `nazwisko` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL,
  `stanowisko` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_polish_ci;

--
-- Zrzut danych tabeli `kadra`
--

INSERT INTO `kadra` (`id`, `imie`, `nazwisko`, `stanowisko`) VALUES
(1, 'Anna', 'Karenina', 'fryzjerka'),
(2, 'Kasia', 'Figura', 'kosmetyczka'),
(3, 'Zosia', 'Kowalska', 'kosmetyczka'),
(4, 'Misia', 'Kosińska', 'fryzjerka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `id` int NOT NULL,
  `kadra_id` int NOT NULL,
  `rodzaj` int NOT NULL,
  `nazwa` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_polish_ci;

--
-- Zrzut danych tabeli `uslugi`
--

INSERT INTO `uslugi` (`id`, `kadra_id`, `rodzaj`, `nazwa`, `cena`) VALUES
(1, 1, 1, 'Usluga kosmetyczna za 20zl', 20),
(2, 1, 2, 'Usluga fryzjerska za 30zl', 30),
(3, 1, 3, 'Usluga inna za 15 zl', 15),
(4, 1, 1, 'Usluga kosmetyczna za 60 zl', 60);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kadra`
--
ALTER TABLE `kadra`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kadra`
--
ALTER TABLE `kadra`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
