-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/11/2023 às 15:12
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mercado`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `codigo` int(50) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`codigo`, `nome`) VALUES
(1, 'higiene'),
(2, 'hortifruti'),
(3, 'frios'),
(4, 'acougue');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `codigo_barra` int(50) NOT NULL,
  `cod_categoria` int(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `descricao` text NOT NULL,
  `peso` decimal(10,2) NOT NULL,
  `data_validade` date NOT NULL,
  `data_fabricacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`codigo_barra`, `cod_categoria`, `marca`, `descricao`, `peso`, `data_validade`, `data_fabricacao`) VALUES
(1, 1, 'neve', 'papel higienico 20 rolos dupla folha 10 metros', 0.00, '0000-00-00', '0000-00-00'),
(2, 1, 'sorriso', 'creme dental sabor fruits refrescantes', 0.14, '0000-00-00', '0000-00-00'),
(3, 1, 'rexona', 'sabonete corporal sabor flores da amazonia', 0.25, '0000-00-00', '0000-00-00'),
(100, 2, 'alfanoides', 'alface crespo', 0.35, '0000-00-00', '0000-00-00'),
(101, 2, 'frescolandia', 'pepino japones', 0.10, '0000-00-00', '0000-00-00'),
(102, 2, ' bananocas', ' banana prata', 0.50, '0000-00-00', '0000-00-00'),
(201, 3, 'linguicais', 'linguica mineira', 1.00, '0000-00-00', '0000-00-00'),
(202, 3, 'friboi', 'peca de picanha', 20.00, '0000-00-00', '0000-00-00'),
(203, 3, 'asinhas', ' asas de fango graudo', 10.00, '0000-00-00', '0000-00-00'),
(301, 4, 'presuntinhos', 'presunto sadia peca', 5.00, '0000-00-00', '0000-00-00'),
(302, 4, 'marba', 'mortadela parma alta qualidade', 1.00, '0000-00-00', '0000-00-00'),
(303, 4, 'residente', 'queijo mussarela', 0.90, '0000-00-00', '0000-00-00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codigo_barra`),
  ADD KEY `fk_categoria` (`cod_categoria`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codigo_barra` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
