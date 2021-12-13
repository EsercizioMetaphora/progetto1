-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Creato il: Dic 13, 2021 alle 11:41
-- Versione del server: 8.0.25
-- Versione PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a-tutta-pizza`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `carousel`
--

CREATE TABLE `carousel` (
  `id` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ricetta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `carousel`
--

INSERT INTO `carousel` (`id`, `img`, `alt`, `description`, `ricetta`) VALUES
(1, '_immagini/Pizzeria/pizza-marinara.jpg', 'marinara', 'Pizza Marinara', 'Ricetta della Marinara'),
(2, '_immagini/Pizzeria/fresh-homemade-italian-pizza-margherita-with-basil-2021-08-26-18-37-05-utc.jpg', 'margherita', 'Pizza Margherita', 'Ricetta della Margherita');

-- --------------------------------------------------------

--
-- Struttura della tabella `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `img`) VALUES
(1, 'I nostri corsi', 'Organizziamo corsi tutti i lunedì mattina', '_immagini/Pizzeria/pizzaioli-senza-frontiere-corso-pizzaiolo-roseto-abruzzo.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `dropdown_menu`
--

CREATE TABLE `dropdown_menu` (
  `id` int NOT NULL,
  `href` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `dropdown_menu`
--

INSERT INTO `dropdown_menu` (`id`, `href`, `description`) VALUES
(1, '#', 'menu1'),
(2, '#', 'menu2');

-- --------------------------------------------------------

--
-- Struttura della tabella `hero`
--

CREATE TABLE `hero` (
  `id` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `hero`
--

INSERT INTO `hero` (`id`, `img`, `title`, `description`) VALUES
(1, '_immagini/Pizzeria/9389fc336a7e7c776184bf72134627ed.jpg', 'A TUTTA PIZZA', 'Dal 1880 facciamo pizza con passione');

-- --------------------------------------------------------

--
-- Struttura della tabella `map`
--

CREATE TABLE `map` (
  `id` int NOT NULL,
  `map_google` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `map`
--

INSERT INTO `map` (`id`, `map_google`, `phone`, `address`, `email`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2895.8917846052727!2d11.87664981549158!3d43.46285637912838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132bed5b44b61075%3A0x134dfafea95fd310!2sVia%20Roma%2C%2010%2C%2052100%20Arezzo%20AR!5e0!3m2!1sen!2sit!4v1639392347284!5m2!1sen!2sit', '06606065065050650', 'Via Roma 10, Arezzo', 'atuttapizza@gmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `navigation_menu`
--

CREATE TABLE `navigation_menu` (
  `id` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `navigation_menu`
--

INSERT INTO `navigation_menu` (`id`, `description`, `href`, `alt`) VALUES
(1, 'la nostra pizza', '#', 'lanostrapizza'),
(2, 'chi siamo', '#', 'chi siamo'),
(3, 'contattaci', '#', 'contattaci');

-- --------------------------------------------------------

--
-- Struttura della tabella `orari`
--

CREATE TABLE `orari` (
  `id` int NOT NULL,
  `icon` varchar(255) NOT NULL,
  `time1` int NOT NULL,
  `time2` int NOT NULL,
  `time3` int NOT NULL,
  `time4` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `orari`
--

INSERT INTO `orari` (`id`, `icon`, `time1`, `time2`, `time3`, `time4`) VALUES
(1, '_immagini/Pizzeria/pizza.png', 11, 16, 18, 23);

-- --------------------------------------------------------

--
-- Struttura della tabella `social`
--

CREATE TABLE `social` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `social`
--

INSERT INTO `social` (`id`, `name`, `href`) VALUES
(1, 'instagram', '#'),
(2, 'twitter', '#'),
(3, 'facebook', '#');

-- --------------------------------------------------------

--
-- Struttura della tabella `team`
--

CREATE TABLE `team` (
  `id` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `team`
--

INSERT INTO `team` (`id`, `img`, `name`, `description`) VALUES
(1, '_immagini/Pizzeria/bearded-man-chef-preparing-pizza-at-local-business-2021-08-26-16-37-08-utc.jpg', 'Gennaro Vincenti', 'Pizzaiolo 1'),
(2, '_immagini/Pizzeria/smiling-bearded-pizzaiolo-holding-fresh-baked-mout-2021-12-09-15-26-13-utc.jpg', 'Gigi Frizzo', 'Pizzaiolo 2'),
(3, '_immagini/Pizzeria/Foto-14-04-19-13-06-16.jpg', 'Filippo Formaggio', 'Pizzaiolo 3');

-- --------------------------------------------------------

--
-- Struttura della tabella `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `testimonials`
--

INSERT INTO `testimonials` (`id`, `description`, `name`, `reference`) VALUES
(1, 'Testimonianza 1', 'Nome1 Cognome1', 'ragione sociale1'),
(2, 'Testimonianza2 ', 'Nome2 Cognome2', 'ragione sociale2'),
(3, 'Testimonianza3', 'Nome3 Cognome3', 'ragione sociale3');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `dropdown_menu`
--
ALTER TABLE `dropdown_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `navigation_menu`
--
ALTER TABLE `navigation_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `orari`
--
ALTER TABLE `orari`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `dropdown_menu`
--
ALTER TABLE `dropdown_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `map`
--
ALTER TABLE `map`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `navigation_menu`
--
ALTER TABLE `navigation_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `orari`
--
ALTER TABLE `orari`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `social`
--
ALTER TABLE `social`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `team`
--
ALTER TABLE `team`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
