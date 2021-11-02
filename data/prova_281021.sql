-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Creato il: Ott 28, 2021 alle 16:02
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
-- Database: `prova_281021`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `step` int NOT NULL,
  `ord` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `category`
--

INSERT INTO `category` (`id`, `name`, `step`, `ord`) VALUES
(1, 'WooCommerce', 1, 1),
(2, 'WordPress', 1, 2),
(3, 'Magento', 1, 3),
(4, 'Laravel', 1, 4),
(5, 'UI/UX Design', 1, 5),
(6, 'Online Tutorial', 2, 6),
(7, 'JavaScript', 2, 7),
(9, 'Lifestyle', 2, 9),
(10, 'Marketing', 2, 10),
(11, 'Magento', 3, 11),
(12, 'UX Design', 3, 12),
(13, 'Marketing', 3, 13);

-- --------------------------------------------------------

--
-- Struttura della tabella `menu_header`
--

CREATE TABLE `menu_header` (
  `id` int NOT NULL,
  `link` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ord` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `menu_header`
--

INSERT INTO `menu_header` (`id`, `link`, `name`, `ord`) VALUES
(1, '/contatti.php', 'Contatti', 1),
(2, '/ordini.php', 'Ordini', 2),
(3, '/prodotti.php', 'Prodotti', 3),
(4, '/sedi.php', 'Sedi', 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `date_day` date NOT NULL,
  `reading_time` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_alt_text` varchar(255) NOT NULL,
  `ord` int NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `active` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `post`
--

INSERT INTO `post` (`id`, `date_day`, `reading_time`, `img`, `img_alt_text`, `ord`, `author`, `title`, `description`, `link`, `active`) VALUES
(1, '2021-04-03', 10, '/assets/images/recent-article/02-recent-article.jpg', 'article02', 1, 'Andrew Hoffman', 'All of these amazing features come at an affordable price!', 'Lorem Ipsum is simply dummy text themes print industry orem psum has been them industry spa also the loep into type setting.', '/errore.php', b'1'),
(2, '2021-04-03', 10, '/assets/images/recent-article/10-recent-article.jpg', 'article10', 1, 'Andrew Hoffman', 'Create beautiful designs that will help convert more...', 'Lorem Ipsum is simply dummy text themes print industry orem psum has been them industry spa also the loep into type setting.', '/errore.php', b'1'),
(3, '2021-04-03', 10, '/assets/images/recent-article/01-recent-article.jpg', 'article01', 1, 'Andrew Hoffman', 'All of these amazing features come at an affordable price!', 'Lorem Ipsum is simply dummy text themes print industry orem psum has been them industry spa also the loep into type setting.', '/errore.php', b'1'),
(4, '2021-04-03', 10, '/assets/images/recent-article/05-recent-article.jpg', 'article05', 1, 'Andrew Hoffman', 'Create beautiful designs that will help convert more...', 'Lorem Ipsum is simply dummy text themes print industry orem psum has been them industry spa also the loep into type setting.', '/errore.php', b'1'),
(5, '2021-04-03', 10, '/assets/images/recent-article/08-recent-article.jpg', 'article08', 1, 'Andrew Hoffman', 'All of these amazing features come at an affordable price!', 'Lorem Ipsum is simply dummy text themes print industry orem psum has been them industry spa also the loep into type setting.', '/errore.php', b'1'),
(6, '2021-04-03', 10, '/assets/images/recent-article/03-recent-article.jpg', 'article03', 1, 'Andrew Hoffman', 'Create beautiful designs that will help convert more...', 'Lorem Ipsum is simply dummy text themes print industry orem psum has been them industry spa also the loep into type setting.', '/errore.php', b'1');

-- --------------------------------------------------------

--
-- Struttura della tabella `slide_show`
--

CREATE TABLE `slide_show` (
  `id` int NOT NULL,
  `date_day` date NOT NULL,
  `reading_time` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_alt_text` varchar(255) NOT NULL,
  `ord` int NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `slide_show`
--

INSERT INTO `slide_show` (`id`, `date_day`, `reading_time`, `img`, `img_alt_text`, `ord`, `author`, `title`, `description`, `link`) VALUES
(1, '2021-04-03', 10, 'assets/images/hero/home-3-hero-image-01.jpg', 'home-hero-01', 1, 'Julian Marshall', 'WooLentor is a powerful WordPress plugin for WooCommerce', 'That necessitates a robust ecommerce platform that optimizes your store & products', ''),
(2, '2021-04-03', 10, 'assets/images/hero/home-3-hero-image-01.jpg', 'home-hero-01', 2, 'Andrew Hoffman', 'All of these amazing features come at an affordable price!', 'That necessitates a robust ecommerce platform that optimizes your store & products', ''),
(3, '2021-04-03', 10, 'assets/images/hero/home-3-hero-image-01.jpg', 'home-hero-01', 3, 'Andrew Hoffman', 'WooLentor is a powerful WordPress plugin for WooCommerce', 'That necessitates a robust ecommerce platform that optimizes your store & products', '');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `menu_header`
--
ALTER TABLE `menu_header`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `slide_show`
--
ALTER TABLE `slide_show`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la tabella `menu_header`
--
ALTER TABLE `menu_header`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `slide_show`
--
ALTER TABLE `slide_show`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
