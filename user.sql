-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 08, 2023 at 07:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`) VALUES
(1, 'Filip', 'filip@mail.com', '$2y$10$nsy1Q/sjf.KVP3/UfNLkNOvxiKnTw9dlEKOu.ks3MUmlc3o/2nO/G'),
(6, 'Filip', 'filip@mail2.com', '$2y$10$P8gaNP9QQv2t/.Qf5hb7Qee8cevJ6kCIexL8An9WwiVHBx9nBj7g.'),
(7, 'Ana', 'ana@mail.com', '$2y$10$wLimTimjh/z0DO577flrw.cU8GBMnGF1utUu/obZNIo0JQjBicDxS'),
(8, 'Filip', 'filip@mail3.com', '$2y$10$prUqRAMurKmDM1NxrX.C8u04Ns.7uarbwRfty99SV.1AoYpq0Axs2'),
(9, 'Luka', 'test@mail.com', '$2y$10$4ZgkJoqSMUCSGJJpkXS.gOD6f0lMXyDB4w/GiNOM2QG2aZKU01ruS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
