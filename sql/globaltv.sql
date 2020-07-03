-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 03-Jul-2020 às 17:47
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `globaltv`
--
CREATE DATABASE IF NOT EXISTS `globaltv` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `globaltv`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`branch_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `description` (`description`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=11 ;

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

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `content` mediumtext NOT NULL,
  `tags` text NOT NULL,
  `date` date NOT NULL,
  `branch` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`news_id`),
  KEY `branch` (`branch`),
  KEY `category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `passwd` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=35 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `nickname`, `email`, `passwd`, `created_at`, `updated_at`) VALUES
(34, 'Gabriel', 'gabriel@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-06-27 08:03:00', '2020-06-27 08:03:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
