-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/02/2025 às 19:18
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
-- Banco de dados: `livraria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `Nome` varchar(20) NOT NULL,
  `Sobrenome` varchar(25) NOT NULL,
  `Telefone` varchar(20) DEFAULT NULL,
  `data_nasc` date NOT NULL,
  `Rua` varchar(30) NOT NULL,
  `Numero` int(4) NOT NULL,
  `Complemento` varchar(40) DEFAULT NULL,
  `Bairro` varchar(30) NOT NULL,
  `Cidade` varchar(30) NOT NULL,
  `Celular` varchar(20) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `rg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `cpf`, `Nome`, `Sobrenome`, `Telefone`, `data_nasc`, `Rua`, `Numero`, `Complemento`, `Bairro`, `Cidade`, `Celular`, `Email`, `rg`) VALUES
(1, '175.299.707-', 'VINICIUS', 'oliveira', '21999352666', '2006-04-04', '', 30, 'nao tem', 'branco', 'rio de janeiro', '21999352666', 'pamonhaoloko@gmail.com', '21'),
(2, '32899086800', 'VINICIUS', 'oliveira', '21999352666', '2006-04-04', '', 30, 'nao tem', 'branco', 'rio de janeiro', '21999352666', 'pamonhaoloko@gmail.com', '21'),
(3, '33333333', 'VINICIUS', 'oliveira', '21999352666', '3333-02-21', '', 30, 'aa', 'branco', 'rio de janeiro', '21999352666', 'viniciusoliveiradevrj@gmail.com', '21');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `Cpf` int(12) NOT NULL,
  `Nome` varchar(20) NOT NULL,
  `Sobrenome` varchar(25) NOT NULL,
  `Telefone` varchar(20) DEFAULT NULL,
  `Data_Nascimento` date NOT NULL,
  `Rua` varchar(30) NOT NULL,
  `Numero` int(4) NOT NULL,
  `Complemento` varchar(40) DEFAULT NULL,
  `Bairro` varchar(30) NOT NULL,
  `Cidade` varchar(30) NOT NULL,
  `Celular` varchar(20) NOT NULL,
  `Email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `Cpf`, `Nome`, `Sobrenome`, `Telefone`, `Data_Nascimento`, `Rua`, `Numero`, `Complemento`, `Bairro`, `Cidade`, `Celular`, `Email`) VALUES
(1, 0, 'Vinicius', 'Oliveira', '21999352666', '3333-03-21', 'sfsafs', 2, 'asdfasd', 'aaaa', 'adasda', '219993527777', 'mamaeamajorge@gmail.com'),
(2, 2147483647, 'Vinicius', 'Oliveira', '21999352666', '3333-02-21', 'sfsafs', 12, 'praca', 'branco', 'rio das ostras', '219993527777', 'pamonhaoloko@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(12) NOT NULL,
  `Titulo` varchar(30) NOT NULL,
  `Editora` varchar(30) NOT NULL,
  `Autor` varchar(25) NOT NULL,
  `Idioma` varchar(14) NOT NULL,
  `Observacao` varchar(50) NOT NULL,
  `Genero` varchar(15) DEFAULT NULL,
  `DataLivro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`id`, `Titulo`, `Editora`, `Autor`, `Idioma`, `Observacao`, `Genero`, `DataLivro`) VALUES
(1, '123123', 'dada', 'dada', 'dada', 'dada', 'dad', '3222-02-21'),
(2, '3123123', 'dasdsa', 'dada', 'dada', 'dada', 'dad', '3333-02-21');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Cpf` (`Cpf`);

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
