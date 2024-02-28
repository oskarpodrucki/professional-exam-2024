-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 11 Sty 2023, 03:58
-- Wersja serwera: 8.0.31-0ubuntu0.22.04.1
-- Wersja PHP: 8.1.2-1ubuntu2.9

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
-- Struktura tabeli dla tabeli `hobby`
--

CREATE TABLE `hobby` (
  `id` int UNSIGNED NOT NULL,
  `nazwa` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `hobby`
--

INSERT INTO `hobby` (`id`, `nazwa`) VALUES
(1, 'muzyka'),
(2, 'film'),
(3, 'biegi'),
(4, 'gimnastyka'),
(5, 'taniec'),
(6, 'komputery'),
(7, 'kryminaly'),
(8, 'nauka'),
(9, 'majsterkowanie'),
(10, 'samochody'),
(11, 'turystyka'),
(12, 'biologia'),
(13, 'sudoku'),
(14, 'numizmatyka'),
(15, 'znaczki pocztowe'),
(16, 'modelarstwo');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `osoby`
--

CREATE TABLE `osoby` (
  `id` int UNSIGNED NOT NULL,
  `Hobby_id` int UNSIGNED NOT NULL,
  `imie` varchar(20) DEFAULT NULL,
  `nazwisko` varchar(50) DEFAULT NULL,
  `rok_urodzenia` year DEFAULT NULL,
  `opis` text,
  `zdjecie` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `osoby`
--

INSERT INTO `osoby` (`id`, `Hobby_id`, `imie`, `nazwisko`, `rok_urodzenia`, `opis`, `zdjecie`) VALUES
(2, 1, 'Monika', 'Kowalska', 1976, 'Z checia Ciebie poznam', 'osoba1.jpg'),
(3, 3, 'Jan', 'Kowalski', 2002, 'Lubie sport', 'osoba5.jpg'),
(4, 5, 'Monika', 'Nowak', 1993, 'ello', 'osoba2.jpg'),
(5, 11, 'Anna', 'Kowalska', 2002, 'Rzym jest cudny!', 'osoba3.jpg'),
(6, 6, 'Grzegorz', 'Konieczny', 1983, 'Polecam nowy procesor XS756FFT', 'osoba6.jpg'),
(7, 3, 'Monika', 'Kopacz', 2009, 'dzis rano 5 km', 'osoba1.jpg'),
(8, 3, 'Rysiek', 'Kowalski', 1993, 'Pobiegamy razem?', 'osoba7.jpg'),
(9, 12, 'Ewa', 'Krzak', 2008, 'pozdrawiam wszystkich', 'osoba1.jpg'),
(10, 3, 'Roksana', 'Rybnik', 1995, 'pozdrawiam', 'osoba3.jpg'),
(11, 15, 'Grzegorz', 'Roh', 1983, 'Poszukuje znaczkow z 1967 roku', 'osoba6.jpg'),
(12, 11, 'Monika', 'Kowalewska', 1976, 'Z checia Ciebie poznam', 'osoba1.jpg'),
(13, 16, 'Jan', 'Trzeciak', 2006, 'moje nowe dzielo', 'osoba5.jpg'),
(14, 5, 'Joanna', 'Rysik', 1993, 'hej1', 'osoba2.jpg'),
(15, 10, 'Anna', 'Kownacka', 2003, 'Szukam przyjaciol', 'osoba3.jpg'),
(16, 6, 'Grzegorz', 'Konieczny', 1983, 'Polecam nowy procesor XS756FFT', 'osoba6.jpg'),
(17, 1, 'Monika', 'Lewandowska', 1967, 'slucham Rocka', 'osoba4.jpg'),
(18, 3, 'Ernest', 'Lubomirski', 2004, 'Pobiegamy razem?', 'osoba8.jpg'),
(19, 6, 'Monika', 'Nowak', 1993, 'ello', 'osoba2.jpg'),
(20, 6, 'Anna', 'Kowalska', 2002, 'Rzym jest cudny!', 'osoba3.jpg'),
(21, 6, 'Grzegorz', 'Konieczny', 1983, 'Polecam nowy procesor XS756FFT', 'osoba6.jpg'),
(22, 2, 'Monika', 'Kowalska', 1976, 'Z checia Ciebie poznam', 'osoba1.jpg'),
(23, 3, 'Jan', 'Kowalski', 2002, 'Lubie sport', 'osoba5.jpg'),
(24, 3, 'Monika', 'Nowak', 1993, 'ello', 'osoba2.jpg'),
(25, 4, 'Anna', 'Kowalska', 2002, 'Rzym jest cudny!', 'osoba3.jpg'),
(26, 5, 'Grzegorz', 'Konieczny', 1983, 'Polecam nowy procesor XS756FFT', 'osoba6.jpg'),
(27, 6, 'Monika', 'Kopacz', 2009, 'dzis rano 5 km', 'osoba1.jpg'),
(28, 7, 'Rysiek', 'Kowalski', 1993, 'Pobiegamy razem?', 'osoba7.jpg'),
(29, 7, 'Ewa', 'Krzak', 2008, 'pozdrawiam wszystkich', 'osoba1.jpg'),
(30, 8, 'Roksana', 'Rybnik', 1995, 'pozdrawiam', 'osoba3.jpg'),
(31, 8, 'Grzegorz', 'Roh', 1983, 'Poszukuje znaczkow z 1967 roku', 'osoba6.jpg'),
(32, 9, 'Monika', 'Kowalewska', 1976, 'Z checia Ciebie poznam', 'osoba1.jpg'),
(33, 12, 'Jan', 'Trzeciak', 2006, 'moje nowe dzielo', 'osoba5.jpg'),
(34, 13, 'Joanna', 'Rysik', 1993, 'hej1', 'osoba2.jpg'),
(35, 14, 'Anna', 'Kownacka', 2003, 'Szukam przyjaciol', 'osoba3.jpg'),
(36, 15, 'Grzegorz', 'Konieczny', 1983, 'Polecam nowy procesor XS756FFT', 'osoba6.jpg'),
(37, 1, 'Monika', 'Lewandowska', 1967, 'slucham Rocka', 'osoba4.jpg'),
(38, 3, 'Ernest', 'Lubomirski', 2004, 'Pobiegamy razem?', 'osoba8.jpg'),
(39, 6, 'Monika', 'Nowak', 1993, 'ello', 'osoba2.jpg'),
(40, 6, 'Anna', 'Kowalska', 2002, 'Rzym jest cudny!', 'osoba3.jpg'),
(41, 6, 'Grzegorz', 'Konieczny', 1983, 'Polecam nowy procesor XS756FFT', 'osoba6.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `osoby`
--
ALTER TABLE `osoby`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `osoby`
--
ALTER TABLE `osoby`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
