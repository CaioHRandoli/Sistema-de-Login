-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Tempo de geração: 28-Jan-2024 às 22:02
=======
-- Tempo de geração: 11-Fev-2024 às 17:38
>>>>>>> 8448505 (update)
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemalogin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` char(1) NOT NULL,
  `data_nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`, `tipo`, `data_nasc`) VALUES
(19, 'Caio Randoli', 'caio@gmail.com', 'caiorandoli', '1816ac0b4bf213b0cfaacd48b6127f12', '1', '0101-01-01'),
<<<<<<< HEAD
(20, 'João', 'joao@gmail.com', 'joao', '1816ac0b4bf213b0cfaacd48b6127f12', '2', '2021-01-01'),
=======
(20, 'João', 'joao@gmail.com', 'joao', '1816ac0b4bf213b0cfaacd48b6127f12', '3', '2021-01-01'),
>>>>>>> 8448505 (update)
(21, 'Júlia', 'julia@gmail.com', 'julia', '1816ac0b4bf213b0cfaacd48b6127f12', '2', '1999-01-25'),
(22, 'Caique', 'caique@gmail.com', 'caique', '1816ac0b4bf213b0cfaacd48b6127f12', '2', '1998-04-05');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
