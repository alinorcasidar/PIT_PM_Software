-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 10:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pm_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `pictures` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `event_date` date NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `pictures`, `description`, `event_date`, `date_added`) VALUES
(1, 'Raldin Pogi', 'assets/img/Screenshot 2024-08-09 014420.png', 'qwqwq', '2024-09-14', '2024-09-20 19:00:57'),
(2, 'Halixxx', 'assets/img/Screenshot 2024-08-19 215850.png', 'sree', '2024-09-11', '2024-09-20 19:01:10'),
(3, 'Halixxx', 'uploads/Screenshot 2024-08-09 014500.png', 'ssadd', '0000-00-00', '2024-09-20 19:10:13'),
(4, 'as', 'uploads/Screenshot 2024-08-09 014500.png', 'asasa', '2024-09-06', '2024-09-20 19:14:10'),
(5, 'Halixxx', 'assets/img/Screenshot 2024-07-24 025551.png', 'asasas', '2024-09-03', '2024-09-20 19:50:16'),
(6, 'Halixxx', 'assets/img/Screenshot 2024-08-09 014420.png', 'alivcgdc', '2024-09-10', '2024-09-20 19:53:33'),
(7, 'asasas', 'assets/img/Screenshot 2024-08-09 013047.png', 'asasSADSA', '2024-09-11', '2024-09-28 08:01:49'),
(8, 'ASDSADAS', 'assets/img/Screenshot 2024-09-12 002323.png', 'SXASSAS', '2024-09-11', '2024-09-28 08:02:05'),
(9, 'asasas', 'assets/img/Screenshot 2024-08-09 014317.png,assets/img/Screenshot 2024-08-09 014420.png,assets/img/Screenshot 2024-08-09 014500.png', 'asasaas', '2024-09-10', '2024-09-28 10:24:02'),
(10, 'asAAA', 'assets/img/Screenshot 2024-08-09 013047.png,assets/img/Screenshot 2024-08-09 014234.png,assets/img/Screenshot 2024-08-09 014317.png,assets/img/Screenshot 2024-08-09 014420.png,assets/img/Screenshot 2024-08-09 014500.png', 'newww', '2024-09-13', '2024-09-28 10:24:38'),
(11, 'JAJSHAJHSJAS', 'assets/img/Screenshot 2024-08-09 014234.png,assets/img/Screenshot 2024-08-09 014317.png,assets/img/Screenshot 2024-08-09 014420.png', 'ASASA', '2024-09-12', '2024-09-28 10:26:12'),
(12, ',MAbjssMJBs', 'assets/img/Screenshot 2024-08-25 203416.png', 'absjkAJSB', '2024-09-24', '2024-09-28 10:26:46'),
(13, 'PAGKAIN PARA SA BAYAN', 'assets/img/Screenshot 2024-09-15 225016.png', 'This page shares my best articles to read on topics like health, happiness, creativity, productivity and more. The central question that drives my work is, “How can we live better?” To answer that question, I like to write about science-based ways to solve practical problems.\r\n\r\nYou’ll find interesting articles to read on topics like how to stop procrastinating as well as personal recommendations like my list of the best books to read and my minimalist travel guide. Ready to dive in? You can use the categories below to browse my best articles.\r\n\r\n', '2024-09-05', '2024-09-28 10:59:47'),
(14, 'asdsada', 'assets/img/d0abb7b2-7ad9-4546-b908-4b1549cb0019.jpg', 'aassad', '2024-10-09', '2024-10-03 18:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `image_url`, `created_at`) VALUES
(1, 'bnnbans', '2024-09-28 08:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(11) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `event` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`id`, `date`, `event`, `location`, `date_added`) VALUES
(9, '2023-05-24', 'asasds', 'asddsaasd', '2024-09-20 21:42:20'),
(12, '2024-09-11', 'asasa', 'asasas', '2024-09-28 15:20:59'),
(14, '2024-10-16', 'wqqwq', 'wqwqw', '2024-10-08 09:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `user_type` varchar(50) DEFAULT 'authorized',
  `isVerified` tinyint(1) DEFAULT 0,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email_address`, `phone_number`, `password`, `birthday`, `gender`, `user_type`, `isVerified`, `date_added`) VALUES
(1, 'Alinor', 'Casidar', 'casidar.alinor1017@gmail.com', '09675284440', '$2y$10$dV7Wry2QSDjRDUpHqIYVneoylKYkAzfv9PwXHoxtXLS6..9sKVHDm', '2024-09-24', 'male', 'authorized', 1, '2024-09-20 18:59:34'),
(2, 'Alinor', 'Casidar', 'casidar.alinor1019@gmail.com', '09675284440', '$2y$10$91lboAYyPHBNM.3.9MF76OcZ602higSEgtLrWAI.NeJN/heY3ChyC', '2024-09-03', 'female', 'authorized', 1, '2024-09-23 15:52:07'),
(3, 'hi', 'Casidar', 'casidar.alinor1020@gmail.com', '09675284440', '$2y$10$PeRMsPdtevvOmrtpFEQtduF8xtfyjBvoZHFBI70QcspYlUaqqJOOO', '2024-10-31', 'female', 'member', 1, '2024-10-02 19:58:25'),
(5, 'Alinor', 'Casidar', 'casidar.alinor1021@gmail.com', '09675284440', '$2y$10$qgcaOojdKIhlXTjZH8OLLOklyb/xoPyibu1coQ/akkTjdhG3t8VWq', '2024-10-29', 'male', 'member', 1, '2024-10-02 21:07:01'),
(6, 'Alinor', 'Casidar', 'casidar.alinor1022@gmail.com', '09675284440', '$2y$10$/GoTbFgzDEQRNBOBJYCa7OwHSgha2q6wmSDSq3ZibMksj4VMx5uZy', '2024-10-31', 'male', 'authorized', 0, '2024-10-02 21:09:25'),
(7, 'Alinor', 'Casidar', 'casidar.alinor1023@gmail.com', '09675284440', '$2y$10$zd8HQP2bihJSLchObogHdOW7OCyCRFTWBO4Tq4Dnp/EjEDqFPiubS', '2024-10-23', 'male', 'member', 1, '2024-10-02 21:26:34'),
(8, 'asas', 'asas', 'casidar.alinor101732@gmail.com', '09675284440', '$2y$10$nZ5OQKnm./iEjEhTRqUzUupgdtw/b4/9G./wZqjMQXDZJM3q2j7C2', '2024-10-31', 'male', 'member', 1, '2024-10-02 22:28:40'),
(9, 'asas', 'asas', 'casidar.alinor101as732@gmail.com', '09675284440', '$2y$10$ayLuhnkV7CSsiS1vAV446e7LZHaEnqk2Rg9y1EEexB9tUkUr0N0NK', '2024-10-31', 'male', 'member', 1, '2024-10-02 22:29:07'),
(10, 'asas', 'asas', 'casidar.alinor101as73sds2@gmail.com', '09675284440', '$2y$10$1SpG.Wq1NqAntwloY58QN.0rucYce58zF3kweOY4mOAqkURnIHlLC', '2024-10-31', 'male', 'member', 1, '2024-10-02 22:29:55'),
(13, 'asas', 'asas', 'casidar.alinor101as73ssasads2@gmail.com', '09675284440', '$2y$10$Y30lEZ9p9YjQFjonTPZhSeSQ1.sqaAHz.TkOPtHsuS6BUmcmNMpce', '2024-10-31', 'male', 'member', 1, '2024-10-02 22:31:54'),
(14, 'asas', 'asas', 'casidar.alinor101as73ssasadsasas2@gmail.com', '09675284440', '$2y$10$HflXibP2ol7mXz3K6.mmsOxBsCSs0ZpFU.1gs.q5pyuH85lGMvlXS', '2024-10-31', 'male', 'member', 1, '2024-10-02 22:33:07'),
(15, 'Alinor', 'Casidar', 'casidar.alinor1017redsadx@gmail.com', '09675284440', '$2y$10$s8aol0ZSvY2ThySW8SSleuHyGsnu2Ml7HQsoxJg70XlHyLq7HcPhy', '2024-10-16', 'male', 'member', 1, '2024-10-02 22:34:24'),
(16, 'Alinor', 'Casidar', 'casidar.alinor1017redsadasx@gmail.com', '09675284440', '$2y$10$hTGMds2daF/VuiUjNDkPf.H.XZu3qoW/jJ4om2WjIni2gmO8YKYdW', '2024-10-16', 'male', 'member', 1, '2024-10-02 22:35:26'),
(17, 'Alinor', 'Casidar', 'casidar.alinor1030@gmail.com', '09675284440', '$2y$10$Kv/BZga.OnalRzZcF3ZMsuyg1MAfGEKqWHS0VDpmVxqqFU4hxmkpa', '2024-10-23', 'male', 'member', 1, '2024-10-02 22:46:47'),
(18, 'Alinor', 'Casidar', 'casidar.alinor10131@gmail.com', '09675284440', '$2y$10$IHzkexCgBY.516eV.GyyQ.GR7nfdzXOrMPcR6hg19ErHW82dfVSp6', '2024-10-09', 'male', 'member', 1, '2024-10-02 22:59:29'),
(19, 'Alinor', 'Casidar', 'casidar.alinor1035@gmail.com', '09675284440', '$2y$10$cVVD7cQF8xle3HanGDrtxuRTV9ZtgnmJaPpcz3.bqUo4u0Bq6s7IG', '0000-00-00', 'male', 'member', 1, '2024-10-02 23:14:08'),
(20, 'Alinor', 'Casidar', 'casidar.alinor1040@gmail.com', '09675284440', '$2y$10$uIC7vBGU7JMrfy.OdFXf2uuEqKFaQhJzNy8JiF8QMscDGIVfBd9Su', '2024-10-09', 'female', 'member', 1, '2024-10-02 23:18:42'),
(21, 'Alibasir', 'Taunting', 'casidar.alinor1050@gmail.com', '09675284440', '$2y$10$4m.tU5QczI8p.8vtPHTGJ.LiUNNamnjuBgLJk1EudueeYUuGJDXIy', '2024-10-17', 'male', 'member', 1, '2024-10-02 23:20:55'),
(22, 'Alinor', 'Casidar', 'casidar.alinor1080@gmail.com', '09675284440', '$2y$10$1thcuVAG/vrTvR5YfLSt4.p98qIF7cF4P3vZI5lzI0NqZEH0hcDtC', '2024-10-24', 'male', 'member', 1, '2024-10-02 23:56:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_address` (`email_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
