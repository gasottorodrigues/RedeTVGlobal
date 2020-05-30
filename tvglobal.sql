-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 30-Maio-2020 às 17:52
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `tvglobal`
--
CREATE DATABASE IF NOT EXISTS `tvglobal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tvglobal`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entretenimento`
--

CREATE TABLE IF NOT EXISTS `entretenimento` (
  `id_ent` int(255) NOT NULL AUTO_INCREMENT,
  `conteudo_ent` text NOT NULL,
  `tumbnail_ent` text NOT NULL,
  `titulo_ent` text NOT NULL,
  `subtitulo_ent` text NOT NULL,
  PRIMARY KEY (`id_ent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Entretenimento - Page' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `esporte`
--

CREATE TABLE IF NOT EXISTS `esporte` (
  `id_esp` int(255) NOT NULL AUTO_INCREMENT,
  `conteudo_esp` text NOT NULL,
  `tumbnail_esp` text NOT NULL,
  `titulo_esp` text NOT NULL,
  `subtitulo_esp` text NOT NULL,
  PRIMARY KEY (`id_esp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_ent`
--

CREATE TABLE IF NOT EXISTS `fotos_ent` (
  `id_ent` int(255) NOT NULL,
  `idfoto_ent` int(255) NOT NULL AUTO_INCREMENT,
  `urlfoto_ent` text NOT NULL,
  `descricaofoto_pol` text,
  PRIMARY KEY (`idfoto_ent`),
  KEY `id_ent` (`id_ent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_esp`
--

CREATE TABLE IF NOT EXISTS `fotos_esp` (
  `id_esp` int(255) NOT NULL,
  `idfoto_esp` int(255) NOT NULL AUTO_INCREMENT,
  `urlfoto_esp` text NOT NULL,
  `descricaofoto_esp` text,
  PRIMARY KEY (`idfoto_esp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_pol`
--

CREATE TABLE IF NOT EXISTS `fotos_pol` (
  `id_pol` int(255) NOT NULL,
  `idfoto_pol` int(11) NOT NULL AUTO_INCREMENT,
  `urlfoto_pol` text NOT NULL,
  `descricaofoto_pol` text,
  PRIMARY KEY (`idfoto_pol`),
  KEY `id_pol` (`id_pol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `politica`
--

CREATE TABLE IF NOT EXISTS `politica` (
  `id_pol` int(255) NOT NULL AUTO_INCREMENT,
  `conteudo_pol` text NOT NULL,
  `tumbnail_pol` text NOT NULL,
  `titulo_pol` text NOT NULL,
  `subtitulo_pol` text NOT NULL,
  PRIMARY KEY (`id_pol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `fotos_ent`
--
ALTER TABLE `fotos_ent`
  ADD CONSTRAINT `fotos_ent_ibfk_1` FOREIGN KEY (`id_ent`) REFERENCES `entretenimento` (`id_ent`);

--
-- Limitadores para a tabela `fotos_pol`
--
ALTER TABLE `fotos_pol`
  ADD CONSTRAINT `fotos_pol_ibfk_1` FOREIGN KEY (`id_pol`) REFERENCES `politica` (`id_pol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
