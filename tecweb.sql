-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Abr-2019 às 22:19
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aulaphp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecweb`
--

CREATE TABLE `tecweb` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `dataNascimento` date NOT NULL,
  `salario` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tecweb`
--

INSERT INTO `tecweb` (`id`, `nome`, `dataNascimento`, `salario`) VALUES
(8, 'Amanda', '1990-03-22', 4215.55),
(10, 'Kevin', '1998-12-02', 2000.37),
(12, 'Carlos', '1958-05-18', 4695.74),
(13, 'Lara', '1972-01-17', 74750.5),
(14, 'Leonardo', '1965-04-03', 100654),
(18, 'Joice', '2000-12-21', 12215.2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tecweb`
--
ALTER TABLE `tecweb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tecweb`
--
ALTER TABLE `tecweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
