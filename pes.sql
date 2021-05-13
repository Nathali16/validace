-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 13. kvě 2021, 22:49
-- Verze serveru: 10.4.11-MariaDB
-- Verze PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `pes`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `pes`
--

CREATE TABLE `pes` (
  `id` int(11) NOT NULL,
  `nazev` varchar(255) NOT NULL,
  `plemeno` varchar(255) NOT NULL,
  `pohlavi` tinyint(4) NOT NULL,
  `barva` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `pes`
--

INSERT INTO `pes` (`id`, `nazev`, `plemeno`, `pohlavi`, `barva`) VALUES
(1, 'Snížek', 'Zlatý retrívr', 0, 'Zlatá'),
(2, 'MILAN', 'Mops', 0, 'Béžová'),
(3, 'Psička', 'Vořech', 1, 'Růžová');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `pes`
--
ALTER TABLE `pes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `pes`
--
ALTER TABLE `pes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
