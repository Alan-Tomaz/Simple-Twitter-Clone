-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Maio-2023 às 09:13
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `twitter_clone_db`
--
CREATE DATABASE IF NOT EXISTS `twitter_clone_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `twitter_clone_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `password`) VALUES
(1, 'fhnjghj', 'alan4tomaz8@gmail.com', '876cdca1a05e6b2bf985d692ff3df5f1'),
(2, 'fhnjghj', 'alan4tomaz8@gmail.com', '876cdca1a05e6b2bf985d692ff3df5f1'),
(3, 'Alan', 'alan4tomaz8@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, '6466', 'alan4tomaz8@gmail.com', 'e0bb021cb3334112dcb20bdf36a8076d'),
(5, 'Priscila', 'priscila@gmail.com', '09a69de15cf89bc7fe8c0642f906a4dd'),
(6, 'fgfdhfh', 'iyuiyui@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(7, 'Jorge', 'jorge@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
