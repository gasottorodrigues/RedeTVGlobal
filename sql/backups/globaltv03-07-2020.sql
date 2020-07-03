-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jun-2020 às 05:08
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
-- Estrutura da tabela `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `description` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`cat_id`, `description`, `created_at`, `updated_at`) VALUES
(2, 'politica', '2020-06-27 05:21:39', '2020-06-27 05:21:39'),
(3, 'esporte', '2020-06-27 05:23:16', '2020-06-27 05:23:16'),
(5, 'jogos', '2020-06-27 05:27:05', '2020-06-27 05:27:05'),
(7, 'ciência', '2020-06-27 05:50:18', '2020-06-27 05:50:18'),
(9, 'economia', '2020-06-27 05:52:08', '2020-06-27 05:52:08'),
(10, 'cornisse', '2020-06-27 05:53:12', '2020-06-27 05:53:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `content` mediumtext NOT NULL,
  `tags` text NOT NULL,
  `date` date NOT NULL,
  `branch` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nickname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `passwd` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `nickname`, `email`, `passwd`, `created_at`, `updated_at`) VALUES
(34, 'Gabriel', 'gabriel@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-06-27 08:03:00', '2020-06-27 08:03:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `description` (`description`);

--
-- Índices para tabela `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `category` (`category`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
