-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09/12/2019 às 01:13
-- Versão do servidor: 10.4.8-MariaDB
-- Versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adocao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dog`
--

CREATE TABLE `dog` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `inst` int(11) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `raca` varchar(50) DEFAULT NULL,
  `aniver` date DEFAULT NULL,
  `sobre` varchar(500) DEFAULT NULL,
  `hist` varchar(500) DEFAULT NULL,
  `habitat` varchar(500) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `carac` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `dog`
--

INSERT INTO `dog` (`id`, `nome`, `inst`, `sexo`, `raca`, `aniver`, `sobre`, `hist`, `habitat`, `imagem`, `carac`) VALUES
(5, 'ed', 1, 'm', 'sdf ', '2019-12-09', 'sfsdfsd', 'sfsdf', 'dsgbvds', '2019.12.09-01.10.28.jpg', 'werfwev');

-- --------------------------------------------------------

--
-- Estrutura para tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `criacao` date DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `ruanumb` int(11) DEFAULT NULL,
  `sobre` varchar(500) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `instituicao`
--

INSERT INTO `instituicao` (`id`, `nome`, `criacao`, `cep`, `estado`, `cidade`, `bairro`, `rua`, `ruanumb`, `sobre`, `email`, `telefone`, `senha`) VALUES
(1, 'Smart', '2019-11-05', 39480000, 'AC', 'Januária', 'Centro', 'Rua Ambrosina Serrão', 72, 'efbdfbdadxfdfbas', 'pedrosg10@hotmail.com', 12335235, '1234');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numb` varchar(10) DEFAULT NULL,
  `habitat` varchar(500) DEFAULT NULL,
  `motivos` varchar(500) DEFAULT NULL,
  `aniver` date DEFAULT NULL,
  `salmin` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `cpf`, `sexo`, `nome`, `cep`, `estado`, `cidade`, `bairro`, `rua`, `numb`, `habitat`, `motivos`, `aniver`, `salmin`, `email`, `telefone`, `senha`) VALUES
(4, 123, 'm', 'Pedro Augusto ', 123, 'AC', 'savs', 'asdvas', 'asd', '1234', 'asdvsad', 'sadvasdv', '2019-11-04', 2, 'pedrosg10@hot.com', 123123, ''),
(5, 2, 'm', 'ADSS', 123, 'AC', 'ADVS', 'ASD', 'SADV', 'ASD', 'asdvas', 'asdv', '2019-12-10', 2, 'pedrosg10@h.com', 1212, '1234');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices de tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices de tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `dog`
--
ALTER TABLE `dog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
