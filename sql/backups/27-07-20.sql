-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jul-2020 às 21:11
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `globaltv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `lives`
--

CREATE TABLE `lives` (
  `id` int(255) NOT NULL,
  `url` text NOT NULL,
  `titulo` text NOT NULL,
  `id_tv` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `lives`
--
ALTER TABLE `lives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tv` (`id_tv`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `lives`
--
ALTER TABLE `lives`
  ADD CONSTRAINT `lives_ibfk_1` FOREIGN KEY (`id_tv`) REFERENCES `branches` (`branch_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
