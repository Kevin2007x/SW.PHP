-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/11/2024 às 20:28
-- Versão do servidor: 10.4.27-MariaDB
-- Versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `carro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nome_marca` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nome_marca`) VALUES
(1, 'Toyota'),
(2, 'Ford'),
(3, 'Chevrolet'),
(4, 'Honda');

-- --------------------------------------------------------

--
-- Estrutura para tabela `modelo`
--

CREATE TABLE `modelo` (
  `id_modelo` int(11) NOT NULL,
  `marca_id_marca` int(11) NOT NULL,
  `nome_modelo` varchar(45) NOT NULL,
  `cor_modelo` varchar(20) NOT NULL,
  `ano_modelo` year(4) NOT NULL,
  `placa_modelo` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `modelo`
--

INSERT INTO `modelo` (`id_modelo`, `marca_id_marca`, `nome_modelo`, `cor_modelo`, `ano_modelo`, `placa_modelo`) VALUES
(0, 1, 'Corolla', 'Prata', 2020, 'ABC-1234'),
(0, 2, 'Fiesta', 'Preto', 2019, 'DEF-3456'),
(0, 2, 'Ranger', 'Azul', 2022, 'HIJ-7890'),
(0, 3, 'Onix', 'Vermelho', 2021, 'KLM-2345'),
(0, 3, 'Tracker', 'Cinza', 2023, 'NOP-4567'),
(0, 4, 'Civic', 'Preto', 2020, 'QRS-6789'),
(0, 4, 'HR-V', 'Branco', 2022, 'TUV-8901'),
(0, 1, 'Hilux', 'Branco', 2021, 'XYZ-5678');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Índices de tabela `modelo`
--
ALTER TABLE `modelo`
  ADD UNIQUE KEY `modelo_fkindex1` (`placa_modelo`),
  ADD KEY `marca_id_marca` (`marca_id_marca`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `modelo_ibfk_1` FOREIGN KEY (`marca_id_marca`) REFERENCES `marcas` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
