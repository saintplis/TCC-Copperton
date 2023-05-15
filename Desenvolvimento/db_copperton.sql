-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/05/2023 às 21:32
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
-- Banco de dados: `db_copperton`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `ID_CLIENTE` int(5) NOT NULL,
  `CLI_NOME` char(20) NOT NULL,
  `CLI_SOBRENOME` char(80) NOT NULL,
  `CLI_CPF` varchar(11) NOT NULL,
  `CLI_DTNASC` date NOT NULL,
  `CLI_SEXO` char(1) NOT NULL,
  `CLI_ESTADOCIVIL` char(20) NOT NULL,
  `CLI_EMAIL` varchar(80) NOT NULL,
  `CLI_TELEFONE1` bigint(11) NOT NULL,
  `CLI_TELEFONE2` bigint(11) DEFAULT NULL,
  `CLI_CEP` varchar(8) NOT NULL,
  `CLI_PAIS` char(50) NOT NULL,
  `CLI_UF` char(2) NOT NULL,
  `CLI_CIDADE` varchar(80) NOT NULL,
  `CLI_BAIRRO` varchar(80) NOT NULL,
  `CLI_RUA` varchar(80) NOT NULL,
  `CLI_NUMERO` int(4) NOT NULL,
  `CLI_DTCAD` date NOT NULL DEFAULT current_timestamp(),
  `CLI_STATUS` int(1) NOT NULL DEFAULT 1,
  `CLI_FOTO` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`ID_CLIENTE`, `CLI_NOME`, `CLI_SOBRENOME`, `CLI_CPF`, `CLI_DTNASC`, `CLI_SEXO`, `CLI_ESTADOCIVIL`, `CLI_EMAIL`, `CLI_TELEFONE1`, `CLI_TELEFONE2`, `CLI_CEP`, `CLI_PAIS`, `CLI_UF`, `CLI_CIDADE`, `CLI_BAIRRO`, `CLI_RUA`, `CLI_NUMERO`, `CLI_DTCAD`, `CLI_STATUS`, `CLI_FOTO`) VALUES
(0, 'Rafael', 'Dos Santos', '06998647980', '2005-02-16', 'M', 'Solteiro', 'rafaelsantos.2020dc@gmail.com', 45998064904, 4532238480, '85805420', 'Brasil', 'PR', 'Cascavel', 'Pioneiros Catarinenses', 'Janio Quadros', 370, '2023-05-14', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_login`
--

CREATE TABLE `tb_login` (
  `ID_LOGIN` int(11) NOT NULL,
  `CLI_NOME` char(20) NOT NULL,
  `CLI_EMAIL` varchar(80) NOT NULL,
  `CLI_SENHA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tb_login`
--

INSERT INTO `tb_login` (`ID_LOGIN`, `CLI_NOME`, `CLI_EMAIL`, `CLI_SENHA`) VALUES
(1, 'Rafael', 'rafaelsantos.2020dc@gmail.com', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`ID_CLIENTE`);

--
-- Índices de tabela `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`ID_LOGIN`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `ID_LOGIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
