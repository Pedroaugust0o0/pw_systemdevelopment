-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2022 às 15:59
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sorveteria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(240) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `cpf` char(11) NOT NULL,
  `dtns` date NOT NULL,
  `sexo` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `senha`, `cpf`, `dtns`, `sexo`) VALUES
(87, '', 'maria@gmail.com', '333333333', '', '0000-00-00', ''),
(88, '', 'maria@gmail.com', '111111', '', '0000-00-00', ''),
(89, '', 'maria@gmail.com', '4111111111', '', '0000-00-00', ''),
(90, '', 'lorenagabriele125@gmail.com', '4444444444', '', '0000-00-00', ''),
(91, '', 'maria@gmail.com', '2222222222', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereço`
--

CREATE TABLE `endereço` (
  `id` int(11) NOT NULL,
  `rua` varchar(10) NOT NULL,
  `bairro` varchar(11) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereço`
--

INSERT INTO `endereço` (`id`, `rua`, `bairro`, `cidade`, `estado`) VALUES
(1, 'liz', 'jose', 'fortaleza', 'ceara');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `quantidade` varchar(40) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `fornecedor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id`, `quantidade`, `produto`, `fornecedor`) VALUES
(1, '20', 'açai', 'sss');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `nome da empresa` varchar(240) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `endereço` varchar(50) NOT NULL,
  `bairro` text NOT NULL,
  `cep` varchar(8) NOT NULL,
  `contato` varchar(10) NOT NULL,
  `site` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `email`, `senha`) VALUES
(1, '', 0),
(2, '', 0),
(3, '', 0),
(4, '', 0),
(5, '', 0),
(6, '', 0),
(7, 'maria@gmail.com', 1234),
(8, 'maria@gmail.com', 1234),
(9, '', 0),
(10, 'maria@gmail.com', 9866),
(11, 'maria@gmail.com', 9866),
(12, 'maria@gmail.com', 12345),
(13, 'maria@gmail.com', 1234),
(14, '0@gmail.com', 0),
(15, '0@gmail.com', 0),
(16, '0@gmail.com', 85282),
(17, '0@gmail.com', 123456789),
(18, 'maria@gmail.co', 2147483647),
(19, 'maria@gmail.com', 51564886),
(20, 'lorenagabriele125@gmail.com', 41565741),
(21, 'lorenagabriele125@gmail.com', 41565741),
(22, 'maria@gmail.com', 78890),
(23, 'lorenagabriele125@gmail.com', 2345),
(24, 'maria@gmail.com', 1234);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca/modelo`
--

CREATE TABLE `marca/modelo` (
  `id` int(11) NOT NULL,
  `tipo de produto` varchar(20) NOT NULL,
  `código de barras` varchar(40) NOT NULL,
  `cor` varchar(300) NOT NULL,
  `sabores` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `marca/modelo`
--

INSERT INTO `marca/modelo` (`id`, `tipo de produto`, `código de barras`, `cor`, `sabores`) VALUES
(1, ' Sorvete', '345', 'branco', 'coco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimento do estoque`
--

CREATE TABLE `movimento do estoque` (
  `id` int(11) NOT NULL,
  `tipo` varchar(240) NOT NULL,
  `quantidade` varchar(40) NOT NULL,
  `data` date NOT NULL,
  `estoque` varchar(50) NOT NULL,
  `produto` varchar(70) NOT NULL,
  `fornecedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `movimento do estoque`
--

INSERT INTO `movimento do estoque` (`id`, `tipo`, `quantidade`, `data`, `estoque`, `produto`, `fornecedor`) VALUES
(1, 'sor', '20', '0000-00-00', 'ttttt', 'iiiiii', 'kkkkkkkk'),
(2, 'gggg', '20', '0000-00-00', 'ttttt', 'ffffffff', 'uuuuuuuuu'),
(3, 'lllll', '', '0000-00-00', 'ttttt', 'jjjjjjj', 'jjjjjjjj'),
(4, 'oi', '12', '0000-00-00', '12', '12', '12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `quantidade de compras` decimal(20,0) NOT NULL,
  `forma de pagamento` varchar(13) NOT NULL,
  `conta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`id`, `nome`, `quantidade de compras`, `forma de pagamento`, `conta`) VALUES
(1, 'maria', '12', 'avista', 'mmmmmm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `produto` varchar(40) NOT NULL,
  `marcadoproduto` varchar(45) NOT NULL,
  `peso` varchar(10) NOT NULL,
  `datavalidade` date NOT NULL,
  `fornecedor` varchar(40) NOT NULL,
  `qtdecomprada` int(11) NOT NULL,
  `quantidademin` int(8) NOT NULL,
  `quantidademáx` int(8) NOT NULL,
  `preco` decimal(13,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `produto`, `marcadoproduto`, `peso`, `datavalidade`, `fornecedor`, `qtdecomprada`, `quantidademin`, `quantidademáx`, `preco`) VALUES
(26, '', '', '', '0000-00-00', '', 0, 0, 0, '0'),
(27, 'sorvete', 'briks', '13', '2022-06-29', 'Lisboa', 65, 0, 0, '86');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuário`
--

CREATE TABLE `usuário` (
  `id` int(11) NOT NULL,
  `email` varchar(240) NOT NULL,
  `senha` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuário`
--

INSERT INTO `usuário` (`id`, `email`, `senha`) VALUES
(1, 'marialima20@gmail.com', 123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `total de venda` decimal(20,0) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `funcionario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id`, `data`, `total de venda`, `tipo`, `funcionario`) VALUES
(1, '0000-00-00', '14', 'sorvete', 'claudio'),
(2, '0000-00-00', '14', 'sorvete', 'claudio'),
(3, '0000-00-00', '14', 'sorvete', 'cláudio');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `endereço`
--
ALTER TABLE `endereço`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `marca/modelo`
--
ALTER TABLE `marca/modelo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `movimento do estoque`
--
ALTER TABLE `movimento do estoque`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuário`
--
ALTER TABLE `usuário`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de tabela `endereço`
--
ALTER TABLE `endereço`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `marca/modelo`
--
ALTER TABLE `marca/modelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `movimento do estoque`
--
ALTER TABLE `movimento do estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `usuário`
--
ALTER TABLE `usuário`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
