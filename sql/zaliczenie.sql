-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Gru 2021, 21:49
-- Wersja serwera: 10.4.16-MariaDB
-- Wersja PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zaliczenie`
--
CREATE DATABASE IF NOT EXISTS `zaliczenie` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `zaliczenie`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `character_objects`
--

CREATE TABLE `character_objects` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `hp` int(11) NOT NULL,
  `xp` int(11) NOT NULL,
  `gender` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `character_objects`
--

INSERT INTO `character_objects` (`id`, `name`, `hp`, `xp`, `gender`) VALUES
(1, 'postac1', 150, 50, 'k'),
(2, 'postac2', 200, 150, 'm');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `img_src` text COLLATE utf8_polish_ci NOT NULL,
  `title` text COLLATE utf8_polish_ci NOT NULL,
  `level` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `classes`
--

INSERT INTO `classes` (`id`, `name`, `img_src`, `title`, `level`, `parent_id`) VALUES
(1, 'Character', 'img/character.png', 'Postać', 1, 0),
(2, 'Warrior', 'img/warrior.png', 'Wojownik', 2, 1),
(3, 'Marksman', 'img/marksman.png', 'Łucznik', 2, 1),
(4, 'Magician', 'img/magician.png', 'Mag', 2, 1),
(5, 'Healer', 'img/healer.png', 'Uzdrowiciel', 3, 4),
(6, 'DarkWizard', 'img/darkwizard.png', 'Czarnoksiężnik', 3, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `darkwizard_objects`
--

CREATE TABLE `darkwizard_objects` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `hp` int(11) NOT NULL,
  `xp` int(11) NOT NULL,
  `gender` text COLLATE utf8_polish_ci NOT NULL,
  `mana` int(11) NOT NULL,
  `knowledge_points` int(11) NOT NULL,
  `life_steal_power` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `darkwizard_objects`
--

INSERT INTO `darkwizard_objects` (`id`, `name`, `hp`, `xp`, `gender`, `mana`, `knowledge_points`, `life_steal_power`) VALUES
(1, 'czarnoksieznik1', 300, 300, 'm', 300, 300, 300);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `healer_objects`
--

CREATE TABLE `healer_objects` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `hp` int(11) NOT NULL,
  `xp` int(11) NOT NULL,
  `gender` text COLLATE utf8_polish_ci NOT NULL,
  `mana` int(11) NOT NULL,
  `knowledge_points` int(11) NOT NULL,
  `healing_power` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `healer_objects`
--

INSERT INTO `healer_objects` (`id`, `name`, `hp`, `xp`, `gender`, `mana`, `knowledge_points`, `healing_power`) VALUES
(1, 'uzdrowiciel1', 200, 200, 'm', 200, 200, 200);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `magician_objects`
--

CREATE TABLE `magician_objects` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `hp` int(11) NOT NULL,
  `xp` int(11) NOT NULL,
  `gender` text COLLATE utf8_polish_ci NOT NULL,
  `mana` int(11) NOT NULL,
  `knowledge_points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `magician_objects`
--

INSERT INTO `magician_objects` (`id`, `name`, `hp`, `xp`, `gender`, `mana`, `knowledge_points`) VALUES
(1, 'mag1', 200, 200, 'm', 200, 200);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `marksman_objects`
--

CREATE TABLE `marksman_objects` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `hp` int(11) NOT NULL,
  `xp` int(11) NOT NULL,
  `gender` text COLLATE utf8_polish_ci NOT NULL,
  `dexterity` int(11) NOT NULL,
  `speed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `marksman_objects`
--

INSERT INTO `marksman_objects` (`id`, `name`, `hp`, `xp`, `gender`, `dexterity`, `speed`) VALUES
(1, 'lucznik1', 100, 100, 'm', 100, 100);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `warrior_objects`
--

CREATE TABLE `warrior_objects` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `hp` int(11) NOT NULL,
  `xp` int(11) NOT NULL,
  `gender` text COLLATE utf8_polish_ci NOT NULL,
  `strength` int(11) NOT NULL,
  `armor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `warrior_objects`
--

INSERT INTO `warrior_objects` (`id`, `name`, `hp`, `xp`, `gender`, `strength`, `armor`) VALUES
(1, 'wojownik1', 300, 300, 'm', 200, 250);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `character_objects`
--
ALTER TABLE `character_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `darkwizard_objects`
--
ALTER TABLE `darkwizard_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `healer_objects`
--
ALTER TABLE `healer_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `magician_objects`
--
ALTER TABLE `magician_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `marksman_objects`
--
ALTER TABLE `marksman_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `warrior_objects`
--
ALTER TABLE `warrior_objects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `character_objects`
--
ALTER TABLE `character_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `darkwizard_objects`
--
ALTER TABLE `darkwizard_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `healer_objects`
--
ALTER TABLE `healer_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `magician_objects`
--
ALTER TABLE `magician_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `marksman_objects`
--
ALTER TABLE `marksman_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `warrior_objects`
--
ALTER TABLE `warrior_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
