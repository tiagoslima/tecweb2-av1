-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Abr-2019 às 23:12
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
(14, 'Leonardo', '1965-04-03', 100654),
(18, 'Joice', '2000-12-21', 12215.2),
(19, 'JoÃ£o', '1995-05-23', 2205.32),
(20, 'Livia', '1988-07-19', 3500.5),
(21, 'Laura', '1977-02-12', 3250.35),
(22, 'Mauro', '1963-08-09', 7500.33),
(23, 'Arnold', '1980-03-30', 1500.67),
(24, 'Marta', '1977-06-28', 3400.77);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
