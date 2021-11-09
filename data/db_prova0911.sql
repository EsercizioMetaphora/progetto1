-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Generation Time: Nov 09, 2021 at 07:33 PM
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
-- Database: `db_prova0911`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `position` varchar(2000) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `position`, `telephone_number`, `email`) VALUES
(1, 'Montevarchi Via Pippo 2', '055 1234567890', 'alias2k@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) NOT NULL,
  `idelement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `link`, `description`, `img`, `idelement`) VALUES
(1, 'Yoga', '/yoga.php', 'Monday, 18:00', '_immagini/woman-is-practicing-yoga-2021-08-27-13-37-31-utc.jpg', 'yoga'),
(2, 'Arti Marziali', '/arti_marziali.php', 'Wednesday, 18:00', '_immagini/woman-performing-martial-arts-high-kick-at-fight-c-2021-08-29-01-35-55-utc.JPG', 'artimarziali'),
(3, 'Pesistica', '/pesistica.php', 'Con istruttori dedicati', '_immagini\\handsome-bodybuilder-in-the-gym-2021-09-02-14-57-22-utc.jpg', 'pesistica'),
(4, 'Ginnastica', '/ginnastica.php', 'Per tutte le età', '_immagini\\senior-people-workout-with-personal-trainer-in-reh-2021-08-30-00-36-03-utc.jpg', 'ginnastica');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_menu`
--

CREATE TABLE `navigation_menu` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `navigation_menu`
--

INSERT INTO `navigation_menu` (`id`, `name`, `type`, `link`) VALUES
(1, 'Yoga', 'header', '#yoga'),
(2, 'Arti Marziali', 'header', '#artimarziali'),
(3, 'Pesistica', 'header', '#pesistica'),
(4, 'Ginnastica', 'header', '#ginnastica'),
(5, 'About Us', 'footer', '#'),
(6, 'Ciao', 'footer', '#'),
(7, 'Amici', 'footer', '#'),
(8, 'Miei', 'footer', '#');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `surname`, `role`, `img`) VALUES
(1, 'Tommaso', 'Matassini', 'personal trainer', '/_immagini/personaltrainer_tommaso.jpg'),
(2, 'Luca', 'Custodi', 'personal trainer', '/_immagini/personaltrainer_luca.jpg'),
(3, 'Giovanni', 'Rossi', 'personal trainer', '/_immagini/personaltrainer_giovanni.jpg'),
(4, 'Sara', 'Matassini', 'personal trainer', '/_immagini/personaltrainer_sara.jpg'),
(5, 'Lorena', 'Custodi', 'personal trainer', '/_immagini/personaltrainer_lorena.jpg'),
(6, 'Ilaria', 'Membo', 'personal trainer', '/_immagini/personaltrainer_ilaria.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `month_price` int NOT NULL,
  `year_price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `plan_name`, `month_price`, `year_price`) VALUES
(1, 'Basic Plan', 50, 450),
(2, 'Premium Plan', 70, 500),
(3, 'Super Plan', 100, 1000),
(4, 'Zio Peppe Plan', 200, 1700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_menu`
--
ALTER TABLE `navigation_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `navigation_menu`
--
ALTER TABLE `navigation_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
