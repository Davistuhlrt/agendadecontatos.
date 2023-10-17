-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geraÃ§Ã£o: 17/10/2023 Ã s 02:47
-- VersÃ£o do servidor: 10.4.28-MariaDB
-- VersÃ£o do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agendadecontatos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE `contatos` (
  `codigo` int(11) NOT NULL COMMENT 'Escreva o cÃ³digo',
  `nome` int(200) NOT NULL COMMENT 'Escreva o nome',
  `telefone` decimal(13,0) DEFAULT NULL COMMENT 'Escreva o telefone',
  `e-mail` int(100) NOT NULL COMMENT 'Escreva o e-mail'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Ãndices para tabelas despejadas
--

--
-- Ãndices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Escreva o cÃ³digo';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
