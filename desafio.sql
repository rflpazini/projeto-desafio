-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Set-2015 às 19:27
-- Versão do servidor: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desafio`
--
CREATE DATABASE IF NOT EXISTS `desafio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `desafio`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro`
--

CREATE TABLE IF NOT EXISTS `carro` (
  `Id` int(11) NOT NULL,
  `Modelo` varchar(150) NOT NULL,
  `Preco` varchar(50) NOT NULL,
  `Cavalos` int(11) NOT NULL,
  `ConsumoEtanol` varchar(50) NOT NULL,
  `ConsumoGasolina` varchar(50) NOT NULL,
  `Revisao` varchar(50) NOT NULL COMMENT 'Valor médio de preço de revisões',
  `Seguro` varchar(50) NOT NULL COMMENT 'Valor médio do preço de seguro',
  `ImagemCarro` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela que contém todos os modelos de carros disponíveis para comparação';

--
-- Extraindo dados da tabela `carro`
--

INSERT INTO `carro` (`Id`, `Modelo`, `Preco`, `Cavalos`, `ConsumoEtanol`, `ConsumoGasolina`, `Revisao`, `Seguro`, `ImagemCarro`) VALUES
(1, 'VW Gol 1.0 2015', '29.500,00', 68, '8,5', '13', '365,00', '2.700,00', 'http://gol2015.net/wp-content/uploads/2014/01/novo-gol-g6-2015.jpg'),
(2, 'Fiat Palio 1.0 2015', '27.900,00', 65, '9,2', '14,5', '388,00', '1.200,00', 'http://fotos.vrum.com.br/patio/MG/7786/246400370_7g.jpg'),
(3, 'Fiat Uno 2015 1.0', '29.713,00', 75, '8,3', '12,3', '360,00', '2.100,00', 'http://topcarrosnovos.com/wp-content/uploads/2014/12/Novo-Fiat-Uno-Sporting-2015-Brasil-Dualogic.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
