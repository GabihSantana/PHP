-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/06/2024 às 01:17
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdagendas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `cod` int(11) NOT NULL,
  `nome` varchar(90) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcliente`
--

INSERT INTO `tbcliente` (`cod`, `nome`, `email`) VALUES
(4, 'Gabi', 'gabi@if'),
(5, 'mafe', 'mafe@if'),
(7, 'Snoop', 'snoop@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `cod` int(11) NOT NULL,
  `produto` varchar(100) DEFAULT NULL,
  `datavalidade` date DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `valor` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbproduto`
--

INSERT INTO `tbproduto` (`cod`, `produto`, `datavalidade`, `qtde`, `valor`) VALUES
(3, 'Frango', '2024-02-10', 3, 0.00),
(5, 'Carne', '2024-03-30', 1, 30.00),
(6, 'Brócolis', '2024-04-19', 1, 5.06);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `senha` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbusuario`
--

INSERT INTO `tbusuario` (`codigo`, `nome`, `email`, `senha`) VALUES
(1, 'Gabi', 'gabi@if', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`cod`);

--
-- Índices de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`cod`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
