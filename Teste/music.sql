-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Fev-2021 às 20:10
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

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
  `nomeP` varchar(300) NOT NULL,
  `musicaP` varchar(300) NOT NULL,
  `fotoP` text NOT NULL,
  `votosP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `concorrentes`
--

INSERT INTO `concorrentes` (`id`, `nomeP`, `musicaP`, `fotoP`, `votosP`) VALUES
(1, 'Felix', 'Forever Alone', 'img/294430.jpg', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
