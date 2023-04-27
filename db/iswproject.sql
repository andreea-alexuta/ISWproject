-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 12:26 AM
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
  `species` enum('Caine','Pisica') NOT NULL,
  `breed` varchar(101) NOT NULL,
  `gen` enum('Femela','Mascul') NOT NULL,
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
('Laila', 'Pisica', 'Mixta', 'Femela', 'Pisica foarte cuminte, dupa cum puteti vedea este si foarte fotogenica', 'Dambovita', 'IMG-64417e5e0d7250.17766740.jpg', 1000, '0771 356 924'),
('Helios', 'Pisica', 'Europeana', 'Mascul', 'Oferim spre adoptie un pisoi foarte cuminte si bland', 'Prahova', 'IMG-64417fc2f0fb81.46532719.jpg', 1001, '0771 734 567'),
('Hobi', 'Caine', 'Sheltie', 'Mascul', 'Un caine superb din rasa Sheltie, este vaccinat, cipat, si foarte ascultator si iubitor', 'Bucuresti', 'IMG-6441802e3d3282.88429566.jpg', 1002, '0732 456 833'),
('Leo', 'Pisica', 'Europeana', 'Mascul', 'Dorim sa gasim o familie iubitoare pentru acest motan foarte fioros', 'Prahova', 'IMG-6441808c2412b5.52739265.jpg', 1003, '0773 756 934'),
('Pichi', 'Caine', 'Metis pechinez', 'Mascul', 'Oferim spre adoptie un caine cuminte si jucaus', 'Brasov', 'IMG-64418383a48c94.17841290.jpg', 1004, '0722 478 324'),
('Kira', 'Caine', 'Shih tzu', 'Femela', 'Catelusa foarte jucausa, uneori chiar prea jucausa, in cautare de o familie iubitoare', 'Brasov', 'IMG-644185e8b5c387.28930147.jpg', 1005, '0787 863 543'),
('Hepi', 'Pisica', 'Siberiana', 'Mascul', 'Motan foarte cuminte si linistit, il ofer spre adoptie deoarece nu ma lasa sa imi fac temele', 'Buzau', 'IMG-644187a6b1d563.00885415.jpg', 1006, '0787 863 543'),
('Casimir', 'Pisica', 'Europeana', 'Mascul', 'Motan foarte cuminte si somnoros in cautare de o familie iubitoare si somnoroasa', 'Brasov', 'IMG-644187eab60149.65712158.png', 1007, '0771 745 999'),
('Goldie', 'Pisica', 'Europeana', 'Mascul', 'Motan blond, foarte cuminte si iubitor', 'Prahova', 'IMG-64418868587e22.52698808.jpg', 1008, '0774 333 457'),
('Pisi', 'Pisica', 'Mixta', 'Mascul', 'Ofer spre adoptie pisoi', 'Brasov', 'IMG-644192ef4a1029.71614735.jpg', 1009, '0771 745 676'),
('Miti', 'Pisica', 'Europeana', 'Femela', 'Pspspspsps', 'Brasov', 'IMG-6447bc0b49c340.27419106.jpg', 1010, '0771 734 411'),
('Lulu', 'Pisica', 'Europeana', 'Femela', 'Pisica iubitoare in cautare de o familie', 'Brasov', 'IMG-6449a3b0b36978.89550174.png', 1012, '0771 734 667'),
('Kiki', 'Caine', 'Bichon', 'Femela', 'Cautam o familie pentru o catelusa foarte cuminte', 'Bacau', 'IMG-644ab2d765afa8.63953682.jpg', 1013, '0756 786 887');

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
('Necunoscut', 'Pisica', 'Europeana', 'Femela', 'Am gasit aceasta pisicuta foarte cuminte si ingrijita, in zona Caminului Memo din Brasov', 'Brasov', '08-04-2023', 'IMG-644189615814a9.13799919.jpg', 1, '0745 876 267'),
('Necunoscut', 'Pisica', 'Europeana', 'Mascul', 'Am gasit aceasta pisica in bagaj', 'Brasov', '19.04.2023', 'IMG-644189e3582566.35520897.jpg', 2, '0734 657 887'),
('Necunoscut', 'Pisica', 'Europeana', 'Femela', 'Am gasit aceasta pisica, este foarte cuminte doar ca se uita cam urat', 'Buzau', '20.04.2023', 'IMG-64418a364e6a18.13170757.jpg', 3, '0734 655 776'),
('Necunoscut', 'Pisica', 'Europeana', 'Mascul', 'Pisica gasita in zona Tractorul, sper sa ii putem gasi familia', 'Brasov', '20.04.2023', 'IMG-64418a9be43ab5.66414392.jpg', 4, '0776 765 889'),
('Necunoscut', 'Pisica', 'Europeana', 'Femela', 'Am gasit aceasta pisicuta langa Caminul Memo', 'Brasov', '20.04.2023', 'IMG-644193afc49044.69069170.jpg', 5, '0771 734 411');

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
('Bobita', 'Caine', 'Bichon ', 'Mascul', 'Am pierdut acest catelus foarte cuminte va rog sa ma ajutati sa il gasesc, dar daca sunteti frizer sa', 'Prahova', '20.04.2023', 'IMG-64418c7e2ec291.03165133.jpg', 500, '0774 656 765'),
('Leona', 'Pisica', 'Maine Coon', 'Mascul', 'Am pierdut acest motan blond, daca il gasiti va rog sa ma anunati cat de repede', 'Brasov', '17.04.2023', 'IMG-64418b654619d9.30691637.jpg', 501, '0773 456 452'),
('Hepi Junior', 'Pisica', 'Siberiana', 'Mascul', 'Ajutati-ma sa gasesc acest motanel', 'Buzau', '20.04.2023', 'IMG-64418bf9859ad4.58037997.jpg', 502, '0771 564 778'),
('Lola', 'Pisica', 'Europeana', 'Femela', 'Am pierdut aceasta pisica in Ploiesti, zona Malu Rosu', 'Prahova', '20.04.2023', 'IMG-64418f3c45cea5.91738898.jpg', 503, '0771 734 411'),
('Rex', 'Pisica', 'Europeana', 'Mascul', 'Motan portocaliu cu alb, pierdut langa Piata Unirii', 'Bucuresti', '26.04.2023', 'IMG-6449448ad57a21.91916430.jpg', 504, '0771 735 678');

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
('alexandra01', 'Bordianu Alexandra', '9db3c8f773c85206e661d7538de50fe7', 'alexandradenisa.bordianu@yahoo.com', '0758722522', 'Brasov', 4);

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
  MODIFY `id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- AUTO_INCREMENT for table `found`
--
ALTER TABLE `found`
  MODIFY `id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lost`
--
ALTER TABLE `lost`
  MODIFY `id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
