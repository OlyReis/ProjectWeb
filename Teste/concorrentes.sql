-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Fev-2021 às 15:59
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `music`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `concorrentes`
--

CREATE TABLE `concorrentes` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `musica` varchar(300) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `votos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `concorrentes`
--

INSERT INTO `concorrentes` (`id`, `nome`, `musica`, `foto`, `votos`) VALUES
(3, 'Christhian YES', 'MUSICA FODA DEMAIS PRA CARALHO', 'img/fodase.jpg', 0),
(4, 'DEU CERTO AI O', 'YES DEU CERTINHO', 'img/astronauta.jpg', 10),
(5, 'John Fredd', 'You Ghost', 'img/pinguim.png', 19),
(7, 'Fierot', 'Joker Mass', 'img/flores.png', 0),
(8, 'Joieler', 'Houser', 'img/olho.jpg', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `concorrentes`
--
ALTER TABLE `concorrentes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `concorrentes`
--
ALTER TABLE `concorrentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
