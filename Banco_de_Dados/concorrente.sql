-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 11:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `concorrente`
--

CREATE TABLE `concorrente` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `musica` varchar(300) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `votos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `concorrente`
--

INSERT INTO `concorrente` (`id`, `nome`, `musica`, `foto`, `votos`) VALUES
(7, 'Emicida', 'Hoje Cedo', 'img/emicida.jpg', 4),
(8, 'Racionais MC\'s', 'Estilo Cachorro', 'img/mano brown.jpg', 7),
(9, 'Gabriel O Pensador', 'Até quando?', 'img/gabrielOpensador.jpeg', 2),
(10, 'Projota', 'Chuva de Novembro', 'img/servico_vigilancia_detalhes.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concorrente`
--
ALTER TABLE `concorrente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concorrente`
--
ALTER TABLE `concorrente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
