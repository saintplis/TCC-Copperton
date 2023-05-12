-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/05/2023 às 11:36
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
  `ID_CLIENTE` int(11) NOT NULL,
  `CLI_NOME` char(20) NOT NULL,
  `CLI_SOBRENOME` char(80) NOT NULL,
  `CLI_CPF` int(11) NOT NULL,
  `CLI_DTNASC` date NOT NULL,
  `CLI_SEXO` char(1) NOT NULL,
  `CLI_ESTADOCIVIL` char(20) NOT NULL,
  `CLI_EMAIL` varchar(80) NOT NULL,
  `CLI_TELEFONE1` int(11) NOT NULL,
  `CLI_TELEFONE2` int(11) DEFAULT NULL,
  `CLI_CEP` int(11) NOT NULL,
  `CLI_PAIS` char(50) NOT NULL,
  `CLI_UF` char(4) NOT NULL,
  `CLI_CIDADE` varchar(80) NOT NULL,
  `CLI_RUA` varchar(80) NOT NULL,
  `CLI_NUMERO` int(11) NOT NULL,
  `CLI_DTCAD` date NOT NULL,
  `CLI_STATUS` char(2) NOT NULL DEFAULT '1',
  `CLI_FOTO` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_login`
--

CREATE TABLE `tb_login` (
  `ID_LOGIN` int(11) NOT NULL,
  `CLI_EMAIL` varchar(80) NOT NULL,
  `LOG_SENHA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `ID_LOGIN` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
