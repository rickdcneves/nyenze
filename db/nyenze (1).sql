-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jul-2020 às 18:27
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nyenze`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista`
--

CREATE TABLE `artista` (
  `id` int(11) NOT NULL,
  `sobre` mediumtext DEFAULT NULL,
  `ibam` varchar(22) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `artista`
--

INSERT INTO `artista` (`id`, `sobre`, `ibam`, `id_user`) VALUES
(1, '', '', 6),
(2, NULL, NULL, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'Escultura');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `contacto` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contacto`
--

INSERT INTO `contacto` (`id`, `tipo`, `contacto`, `id_user`) VALUES
(1, 'email', 'ricardodcmeloneves@gmail.com', 4),
(2, 'telefone', '947553985', 4),
(5, 'email', 'nesma@gmail.com', 6),
(6, 'telefone', '913136961', 6),
(7, 'email', 'joao@gmail.com', 7),
(8, 'telefone', '988888888', 7),
(9, 'email', 'axel@gmail.com', 8),
(10, 'telefone', '908876123', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lucro`
--

CREATE TABLE `lucro` (
  `def` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `lucro`
--

INSERT INTO `lucro` (`def`) VALUES
('25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `morada`
--

CREATE TABLE `morada` (
  `id` int(11) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `id_provincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `morada`
--

INSERT INTO `morada` (`id`, `municipio`, `id_provincia`) VALUES
(3, 'Belas', 1),
(4, 'Cacuaco', 1),
(5, 'Cazenga', 1),
(6, 'Icolo e Bengo', 1),
(7, 'Luanda', 1),
(8, 'Quiçama', 1),
(9, 'Kilamba Kiaxi', 1),
(10, 'Talatona', 1),
(11, 'Viana', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `obra`
--

CREATE TABLE `obra` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `descricao` varchar(5000) NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `estado` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `entrega` varchar(200) NOT NULL,
  `altura` decimal(10,0) NOT NULL,
  `largura` decimal(10,0) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `data_publicacao` varchar(20) NOT NULL,
  `id_artista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `obra`
--

INSERT INTO `obra` (`id`, `foto`, `descricao`, `preco`, `estado`, `qtd`, `titulo`, `entrega`, `altura`, `largura`, `id_categoria`, `data_publicacao`, `id_artista`) VALUES
(1, '1595161949.jpg', 'Joia da coroa cultural angolana', '2000', 1, 2, 'Pensador', 'Disponivel', '15', '8', 1, '19/Jul/20', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `provincia`
--

CREATE TABLE `provincia` (
  `id` int(11) NOT NULL,
  `provincia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `provincia`
--

INSERT INTO `provincia` (`id`, `provincia`) VALUES
(1, 'Luanda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `dnasc` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `id_morada` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `descricaolocalizacao` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `genero`, `dnasc`, `pass`, `tipo`, `id_morada`, `id_provincia`, `descricaolocalizacao`) VALUES
(4, 'Ricardo Jorge da Costa Melo Neves', 'M', '1999-12-08', 'e5d8ad9ec4447e17d83f2f04a2d95b4a12ed85e9', 'N/Artista', 4, 1, 'Eco-campo, Rua da Policia, Casa S/N'),
(6, 'Nesma Neves', 'F', '2020-07-16', 'd58531e6ad9b7ffb0c678a6db56bd37e94665b36', 'Artista', 4, 1, 'Centralidade do Sequele'),
(7, 'João Ricardo', 'M', '2020-07-16', '7fecacc41d35e803c6837ad13c7591920ff330eb', 'Artista', 3, 1, 'Kifica'),
(8, 'Axel Norman', 'M', '1998-02-12', '8727b15f00705ed99e8dd198428087f0e5b44d41', 'Admin', 3, 1, 'Centralidade do Kilamba');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `id_artista` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_obra` int(11) NOT NULL,
  `data_venda` varchar(20) NOT NULL,
  `data_estado` varchar(20) NOT NULL,
  `qtd` int(11) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `lucro` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `morada`
--
ALTER TABLE `morada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_provincia` (`id_provincia`);

--
-- Índices para tabela `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_artista` (`id_artista`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Índices para tabela `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_morada` (`id_morada`),
  ADD KEY `id_provincia` (`id_provincia`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_artista` (`id_artista`),
  ADD KEY `id_obra` (`id_obra`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artista`
--
ALTER TABLE `artista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `morada`
--
ALTER TABLE `morada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `obra`
--
ALTER TABLE `obra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `artista`
--
ALTER TABLE `artista`
  ADD CONSTRAINT `artista_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Limitadores para a tabela `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Limitadores para a tabela `morada`
--
ALTER TABLE `morada`
  ADD CONSTRAINT `morada_ibfk_1` FOREIGN KEY (`id_provincia`) REFERENCES `provincia` (`id`);

--
-- Limitadores para a tabela `obra`
--
ALTER TABLE `obra`
  ADD CONSTRAINT `obra_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id`),
  ADD CONSTRAINT `obra_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);

--
-- Limitadores para a tabela `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_morada`) REFERENCES `morada` (`id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_provincia`) REFERENCES `provincia` (`id`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id`),
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`id_obra`) REFERENCES `obra` (`id`),
  ADD CONSTRAINT `venda_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
