-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Generation Time: Dec 13, 2021 at 11:53 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzeria`
--

-- --------------------------------------------------------

--
-- Table structure for table `About`
--

CREATE TABLE `About` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `About`
--

INSERT INTO `About` (`id`, `title`, `logo`, `description`, `phone`, `email`, `place`, `map`) VALUES
(1, 'A Tutta Pizza', '_immagini/Pizzeria/LOGO.png', 'le nostre pizze descrizione lorem ipsum', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Corsi`
--

CREATE TABLE `Corsi` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Corsi`
--

INSERT INTO `Corsi` (`id`, `name`, `description`, `link`) VALUES
(1, 'Pizzaiolo', 'Impara a fare le nostre pizze. Ci vediamo ogni lunedì mattina!', '#');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_menu`
--

CREATE TABLE `navigation_menu` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `ord` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `navigation_menu`
--

INSERT INTO `navigation_menu` (`id`, `name`, `link`, `type`, `ord`) VALUES
(1, 'La nostra Storia', '#', 'header', 2),
(2, 'Le nostre Pizze', '#', 'header', 2),
(4, 'Il team', '#', 'header', 4),
(5, 'Cosa dicono di noi', '#', 'header', 5),
(6, 'Informazioni', '#', 'header', 6),
(7, 'phone', '1234567890', 'footer', 1),
(8, 'address', 'Via Roma, 10 Arezzo', 'footer', 2),
(10, 'email', 'atuttapizzaarezzo@mail.it', 'footer', 4),
(11, 'Il corso', '#', 'header', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Pizzaioli`
--

CREATE TABLE `Pizzaioli` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Pizzaioli`
--

INSERT INTO `Pizzaioli` (`id`, `name`, `surname`, `img`) VALUES
(1, 'Cosimo', 'Matassini', '/_immagini/Pizzeria/alessio.jpg'),
(2, 'Alessandro', 'Custodi', '/_immagini/Pizzeria/tizio.jpg'),
(3, 'Alessio', 'Rossi', '/_immagini/Pizzeria/alessio.jpg'),
(4, 'Massimo', 'Bianchi', '/_immagini/Pizzeria/massimo.jpg'),
(5, 'Tizio', 'Caio', '/_immagini/Pizzeria/tizio.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Pizze`
--

CREATE TABLE `Pizze` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Pizze`
--

INSERT INTO `Pizze` (`id`, `name`, `description`, `img`, `link`) VALUES
(1, 'Pizza Marinara', 'La pizza marinara è una tipica pizza napoletana realizzata solo con pomodoro fresco, olio, aglio e origano', '/_immagini/Pizzeria/marinara.jpg', '#'),
(2, 'Pizza Margherita', 'La Pizza Margherita viene condita con pomodoro, mozzarella, basilico fresco e olio extravergine', '/_immagini/Pizzeria/margherita.jpg', '#');

-- --------------------------------------------------------

--
-- Table structure for table `Storia`
--

CREATE TABLE `Storia` (
  `id` int NOT NULL,
  `description` varchar(2000) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `About`
--
ALTER TABLE `About`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Corsi`
--
ALTER TABLE `Corsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_menu`
--
ALTER TABLE `navigation_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Pizzaioli`
--
ALTER TABLE `Pizzaioli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Pizze`
--
ALTER TABLE `Pizze`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `About`
--
ALTER TABLE `About`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Corsi`
--
ALTER TABLE `Corsi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `navigation_menu`
--
ALTER TABLE `navigation_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Pizzaioli`
--
ALTER TABLE `Pizzaioli`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Pizze`
--
ALTER TABLE `Pizze`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
