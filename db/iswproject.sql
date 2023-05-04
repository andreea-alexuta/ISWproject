-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 08:36 PM
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
  `species` enum('Câine','Pisică') NOT NULL,
  `breed` varchar(101) NOT NULL,
  `gen` enum('Femelă','Mascul') NOT NULL,
  `description` varchar(101) NOT NULL,
  `city` varchar(101) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(601) NOT NULL,
  `id` int(101) NOT NULL,
  `contact` varchar(101) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adopt`
--

INSERT INTO `adopt` (`name`, `species`, `breed`, `gen`, `description`, `city`, `location`, `image`, `id`, `contact`) VALUES
('Laila', 'Pisică', 'Mixtă', 'Femelă', 'Pisică foarte cuminte, după cum puteți vedea este și foarte fotogenica', 'București', 'Titan', 'IMG-64417e5e0d7250.17766740.jpg', 1000, '0771 356 924'),
('Helios', 'Pisică', 'Europeană', 'Mascul', 'Oferim spre adopție un pisoi foarte cuminte și blând', 'Prahova', 'Ploiești', 'IMG-64417fc2f0fb81.46532719.jpg', 1001, '0771 734 567'),
('Hobi', 'Câine', 'Sheltie', 'Mascul', 'Un câine superb din rasa Sheltie, este vaccinat, cipat, și foarte ascultător și iubitor', 'București', 'Pantelimon', 'IMG-6441802e3d3282.88429566.jpg', 1002, '0732 456 833'),
('Leo', 'Pisică', 'Europeană', 'Mascul', 'Dorim să găsim o familie iubitoare pentru acest motan foarte fioros', 'Prahova', 'Apostolache', 'IMG-6441808c2412b5.52739265.jpg', 1003, '0773 756 934'),
('Pichi', 'Câine', 'Metis pechinez', 'Mascul', 'Oferim spre adoptie un caine cuminte si jucaus', 'Brașov', 'Teliu', 'IMG-64418383a48c94.17841290.jpg', 1004, '0722 478 324'),
('Kira', 'Câine', 'Shih tzu', 'Femelă', 'Catelusa foarte jucausa, uneori chiar prea jucausa, in cautare de o familie iubitoare', 'Brașov', 'Ghimbav', 'IMG-644185e8b5c387.28930147.jpg', 1005, '0787 863 543'),
('Hepi', 'Pisică', 'Siberiană', 'Mascul', 'Motan foarte cuminte și liniștit, îl ofer spre adopție deoarece nu mă lasă să îmi fac temele', 'Buzău', 'Cislău', 'IMG-644187a6b1d563.00885415.jpg', 1006, '0787 863 543'),
('Casimir', 'Pisică', 'Europeană', 'Mascul', 'Motan foarte cuminte și somnoros în căutare de o familie iubitoare și somnoroasă', 'Brașov', 'Săcele', 'IMG-644187eab60149.65712158.png', 1007, '0771 745 999'),
('Goldie', 'Pisică', 'Europeană', 'Mascul', 'Motan blond, foarte cuminte și iubitor', 'Prahova', 'Bănești', 'IMG-64418868587e22.52698808.jpg', 1008, '0774 333 457'),
('Miti', 'Pisică', 'Europeană', 'Femelă', 'Pspspspsps', 'Brașov', 'Triaj', 'IMG-6447bc0b49c340.27419106.jpg', 1010, '0771 734 411'),
('Kiki', 'Câine', 'Bichon', 'Femelă', 'Căutăm o familie pentru o cățelușă foarte cuminte', 'București', 'Rahova', 'IMG-644ab2d765afa8.63953682.jpg', 1013, '0756 786 887');

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE `found` (
  `name` varchar(101) NOT NULL,
  `species` enum('Câine','Pisică') NOT NULL,
  `breed` varchar(101) NOT NULL,
  `gen` enum('Femelă','Mascul') NOT NULL,
  `description` varchar(101) NOT NULL,
  `city` varchar(101) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(101) NOT NULL,
  `image` varchar(601) NOT NULL,
  `id` int(101) NOT NULL,
  `contact` varchar(101) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `found`
--

INSERT INTO `found` (`name`, `species`, `breed`, `gen`, `description`, `city`, `location`, `date`, `image`, `id`, `contact`) VALUES
('Necunoscut', 'Pisică', 'Europeană', 'Femelă', 'Am găsit această pisicuță foarte cuminte și ingrijită, în zona Căminului Memo din Brașov', 'Brașov', 'Săcele', '08-04-2023', 'IMG-644189615814a9.13799919.jpg', 1, '0745 876 267'),
('Necunoscut', 'Pisică', 'Europeană', 'Mascul', 'Am găsit această pisică în bagaj', 'Brașov', 'Ghimbav', '19.04.2023', 'IMG-644189e3582566.35520897.jpg', 2, '0734 657 887'),
('Necunoscut', 'Pisică', 'Europeană', 'Femelă', 'Am găsit această pisică, este foarte cuminte doar că se uită cam urât', 'Buzău', 'Dorobanți', '20.04.2023', 'IMG-64418a364e6a18.13170757.jpg', 3, '0734 655 776'),
('Necunoscut', 'Pisică', 'Europeană', 'Mascul', 'Pisica găsită în zona Tractorul, sper să îi putem găsi familia', 'Brașov', 'Cartier Tractorul', '20.04.2023', 'IMG-64418a9be43ab5.66414392.jpg', 4, '0776 765 889'),
('Necunoscut', 'Pisică', 'Europeană', 'Femelă', 'Am găsit această pisicuță lângă Căminul Memo', 'Brașov', 'Cămin Memo', '20.04.2023', 'IMG-644193afc49044.69069170.jpg', 5, '0771 734 411'),
('Hobi', 'Câine', 'Sheltie', 'Mascul', 'Am găsit acest cățel în Micro 5', 'Buzău', 'Cartier Micro 5', '27.04.2023', 'IMG-644b0547462fe3.00114992.jpg', 13, '0784938475');

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE `lost` (
  `name` varchar(101) NOT NULL,
  `species` enum('Câine','Pisică') NOT NULL,
  `breed` varchar(101) NOT NULL,
  `gen` enum('Femelă','Mascul') NOT NULL,
  `description` varchar(101) NOT NULL,
  `city` varchar(101) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(101) NOT NULL,
  `image` varchar(601) NOT NULL,
  `id` int(101) NOT NULL,
  `contact` varchar(101) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`name`, `species`, `breed`, `gen`, `description`, `city`, `location`, `date`, `image`, `id`, `contact`) VALUES
('Bobiță', 'Câine', 'Bichon ', 'Mascul', 'Am pierdut acest cățeluș foarte cuminte vă rog să mă ajutați să îl găsesc', 'Prahova', 'Ploiești, în cartierul Păltiniș', '20.04.2023', 'IMG-64418c7e2ec291.03165133.jpg', 500, '0774 656 765'),
('Leona', 'Pisică', 'Maine Coon', 'Mascul', 'Am pierdut acest motan blond, daca îl găsiți vă rog să mă anunați cât de repede', 'Brașov', 'Zona căminelor memo', '17.04.2023', 'IMG-64418b654619d9.30691637.jpg', 501, '0773 456 452'),
('Hepi Junior', 'Pisică', 'Siberiană', 'Mascul', 'Ajutați-mă să găsesc acest motanel', 'Buzău', 'Micro 5', '20.04.2023', 'IMG-64418bf9859ad4.58037997.jpg', 502, '0771 564 778'),
('Lola', 'Pisică', 'Europeană', 'Femelă', 'Am pierdut această pisică în Ploiești, zona Malu Roșu', 'Prahova', 'Zona Malu Roșu', '20.04.2023', 'IMG-64418f3c45cea5.91738898.jpg', 503, '0771 734 411'),
('Rex', 'Pisică', 'Europeană', 'Mascul', 'Motan portocaliu cu alb, pierdut lângă Piața Unirii', 'București', 'Titan', '26.04.2023', 'IMG-6449448ad57a21.91916430.jpg', 504, '0771 735 678'),
('Rocky', 'Câine', 'Golden Retriever', 'Mascul', 'Poarta o zgardă roșie si este foarte jucăuș', 'Brașov', 'Ghimbav, in apropierea halelor', '27.04.2023', 'IMG-644b03ad350da2.82691769.jpg', 505, '0767884334'),
('Tommy', 'Pisică', 'Europeană', 'Mascul', 'Este un motan portocaliu cu alb', 'Buzău', 'Pătârlagele', '03.04.2023', 'IMG-644b0407d772e3.96724869.png', 506, '0746352467'),
('Kira', 'Câine', 'Shih Tzu', 'Femelă', 'Jucausa si poarta o zgarda rosie', 'Brasov', 'Piața Sfatului', '26.04.2023', 'IMG-644b04af8d5e29.64259108.jpg', 507, '0784635784');

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
('malina09', 'Cabel Malina', '913cfbf1a6763e9479931f1999627604', 'cabel.mali@yahoo.com', '0753628493', 'Brașov', 2),
('cata23', 'Lupu Catalina', '8ca7418bc7c0ebac7b28d867bd960f5b', 'catalupu23@gmail.com', '0739801456', 'Brașov', 3),
('alexandra01', 'Bordianu Alexandra', '9db3c8f773c85206e661d7538de50fe7', 'alexadenisa.bordianu@yahoo.com', '0789354671', 'Brașov', 4),
('andreea0611', 'Alexuță Andreea', 'c1eebd4e5da282c0d71d6090d2ac98ed', 'aneea0611@gmail.com', '0773950156', 'Brașov ', 20);

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
  MODIFY `id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- AUTO_INCREMENT for table `found`
--
ALTER TABLE `found`
  MODIFY `id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lost`
--
ALTER TABLE `lost`
  MODIFY `id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=509;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
