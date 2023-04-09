-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 03:49 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iswproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopt`
--

CREATE TABLE `adopt` (
  `name` varchar(101) NOT NULL,
  `species` varchar(101) NOT NULL,
  `breed` varchar(101) NOT NULL,
  `gen` varchar(101) NOT NULL,
  `description` varchar(101) NOT NULL,
  `city` varchar(101) NOT NULL,
  `image` varchar(601) NOT NULL,
  `id` int(101) NOT NULL,
  `contact` varchar(101) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adopt`
--

INSERT INTO `adopt` (`name`, `species`, `breed`, `gen`, `description`, `city`, `image`, `id`, `contact`) VALUES
('Lulu', 'pisica', 'Europeana', 'Feminin', 'Pisica portocalie foarte cuminte', 'Brasov', 'Lulu.jpg', 1, '0771 340 440'),
('Yuki', 'Caine', 'Husky Siberian', 'Masculin', 'Un caine Husky', 'Brasov', 'Yuki.jpg', 2, '0771 734 999'),
('Vasilica', 'Pisica', 'Ragdoll', 'Feminin', 'Pisi', 'Ploiesti', 'IMG-642f1f9e850486.79203586.jpg', 16, '0777 777 777'),
('Vasilica 2', 'Pisica', 'Ragdoll', 'Feminin', 'ggdrghd', 'sefegd', 'IMG-642fb76939d019.84808021.jpg', 18, 'fsegdsfgdxg');

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE `found` (
  `name` varchar(101) NOT NULL,
  `species` varchar(101) NOT NULL,
  `breed` varchar(101) NOT NULL,
  `gen` varchar(101) NOT NULL,
  `description` varchar(101) NOT NULL,
  `city` varchar(101) NOT NULL,
  `date` varchar(101) NOT NULL,
  `image` varchar(601) NOT NULL,
  `id` int(101) NOT NULL,
  `contact` varchar(101) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `found`
--

INSERT INTO `found` (`name`, `species`, `breed`, `gen`, `description`, `city`, `date`, `image`, `id`, `contact`) VALUES
('Unknown', 'dgdfg', 'sdggds', 'sdgdsg', 'sgdsdg', 'dsgsdg', '11-06-2023', 'IMG-642fc308cb1ec7.42088759.jpg', 1, 'sgsdgs');

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE `lost` (
  `name` varchar(101) NOT NULL,
  `species` varchar(101) NOT NULL,
  `breed` varchar(101) NOT NULL,
  `gen` varchar(101) NOT NULL,
  `description` varchar(101) NOT NULL,
  `city` varchar(101) NOT NULL,
  `date` varchar(101) NOT NULL,
  `image` varchar(601) NOT NULL,
  `id` int(101) NOT NULL,
  `contact` varchar(101) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`name`, `species`, `breed`, `gen`, `description`, `city`, `date`, `image`, `id`, `contact`) VALUES
('Vasi', 'egtfes', 'gsdg', 'sdgdsg', 'sdgds', 'rgsdgsd', '11-06-2023', 'IMG-642fc1805f82c0.83260216.jpg', 3, 'sgdg'),
('Maricica', 'Pisica', 'dthdrgdf', 'bug', 'yigy', 'yi', 'gyigi', 'IMG-642ff9f550fec5.02270569.jpg', 4, 'gyiigi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(101) NOT NULL,
  `name` varchar(101) NOT NULL,
  `password` varchar(101) NOT NULL,
  `email` varchar(101) NOT NULL,
  `phone` varchar(101) NOT NULL,
  `city` varchar(101) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `password`, `email`, `phone`, `city`, `id`) VALUES
('andreea0611', 'Alexuta Andreea', '6c48441b0d58474e829857663a937488', 'andreea0611@yahoo.com', '0771734411', 'Brasov', 1),
('malina09', 'Cabel Malina', '0ff68179820a88f04344b8962fed3d2b', 'cabel.malina@yahoo.com', '0787863543', 'Brasov', 2),
('cata23', 'Lupu Catalina', '8ca7418bc7c0ebac7b28d867bd960f5b', 'catalinalupu23@gmail.com', '0753585672', 'Brasov', 3),
('alexandra01', 'Bordianu Alexandra', '9db3c8f773c85206e661d7538de50fe7', 'alexandradenisa.bordianu@yahoo.com', '0758722522', 'Brasov', 4),
('test', 'Test Test', '098f6bcd4621d373cade4e832627b4f6', 'test@test.com', '0777777777', 'Test', 5),
('marian', 'Marian', '61de80355d479505de9c731f12460625', 'marian@marian.com', '073455433', 'Marian', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopt`
--
ALTER TABLE `adopt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `found`
--
ALTER TABLE `found`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lost`
--
ALTER TABLE `lost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopt`
--
ALTER TABLE `adopt`
  MODIFY `id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `found`
--
ALTER TABLE `found`
  MODIFY `id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lost`
--
ALTER TABLE `lost`
  MODIFY `id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
