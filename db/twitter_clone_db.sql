-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Maio-2023 às 23:54
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
-- Estrutura da tabela `tweets`
--

CREATE TABLE `tweets` (
  `id_tweet` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tweet` varchar(140) NOT NULL,
  `inclusion_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tweets`
--

INSERT INTO `tweets` (`id_tweet`, `id_user`, `tweet`, `inclusion_date`) VALUES
(1, 3, '67879780', '2023-05-19 20:36:22'),
(2, 3, 'drtdrtfufut', '2023-05-19 21:25:31'),
(11, 9, 'alan', '2023-05-20 18:22:04');

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
(3, 'Alan', 'alan4tomaz8@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, '6466j', 'alan4tomaz8@gmail.com', 'e0bb021cb3334112dcb20bdf36a8076d'),
(6, 'fgfdhfh', 'iyuiyui@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(7, 'Jorge', 'jorge@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, '4', 'janethsmith@gmail.com', 'e43a09ffc30b44cb1f0db46f87836f40'),
(9, 'Priscila', 'priscila@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'José', 'jose@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_followers`
--

CREATE TABLE `users_followers` (
  `id_user_follower` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_user_following` int(11) NOT NULL,
  `data_record` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users_followers`
--

INSERT INTO `users_followers` (`id_user_follower`, `id_user`, `id_user_following`, `data_record`) VALUES
(36, 3, 4, '2023-05-20 18:21:34'),
(37, 3, 9, '2023-05-20 18:38:30');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id_tweet`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users_followers`
--
ALTER TABLE `users_followers`
  ADD PRIMARY KEY (`id_user_follower`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id_tweet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `users_followers`
--
ALTER TABLE `users_followers`
  MODIFY `id_user_follower` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
