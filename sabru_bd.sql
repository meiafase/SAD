-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Abr-2019 às 02:54
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sabru_bd`
--
CREATE DATABASE IF NOT EXISTS `sabru_bd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sabru_bd`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cell_tb`
--

CREATE TABLE `cell_tb` (
  `id` int(11) NOT NULL,
  `sistema` int(3) DEFAULT NULL,
  `resp1` int(3) DEFAULT NULL,
  `resp2` int(3) DEFAULT NULL,
  `resp3` int(3) DEFAULT NULL,
  `resp4` int(3) DEFAULT NULL,
  `resp5` int(3) DEFAULT NULL,
  `resp6` int(3) DEFAULT NULL,
  `resp7` int(3) DEFAULT NULL,
  `resp8` int(3) DEFAULT NULL,
  `resp9` int(3) DEFAULT NULL,
  `resp10` int(3) DEFAULT NULL,
  `resp_cntd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultado_tb`
--

CREATE TABLE `resultado_tb` (
  `id_resultado` int(11) NOT NULL,
  `modelo_cllr` varchar(100) DEFAULT NULL,
  `nome_cllr` varchar(100) DEFAULT NULL,
  `resp_cntd` varchar(20) DEFAULT NULL,
  `desc` varchar(500) DEFAULT NULL,
  `agree` varchar(200) DEFAULT NULL,
  `disagree` varchar(200) DEFAULT NULL,
  `aceitacao` varchar(20) DEFAULT NULL,
  `arquivo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cell_tb`
--
ALTER TABLE `cell_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resultado_tb`
--
ALTER TABLE `resultado_tb`
  ADD PRIMARY KEY (`id_resultado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cell_tb`
--
ALTER TABLE `cell_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `resultado_tb`
--
ALTER TABLE `resultado_tb`
  MODIFY `id_resultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
