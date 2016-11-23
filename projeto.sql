-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 20-Nov-2016 às 21:09
-- Versão do servidor: 5.5.53-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `usuario` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `comentario` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `local` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`usuario`, `data`, `comentario`, `local`) VALUES
('', '2016-11-20', 'BOM DIA', 'Starbucks'),
('', '2016-11-20', 'Muito bom!', 'Starbucks'),
('', '2016-11-20', 'Muito bom!', 'Starbucks'),
('', '2016-11-20', 'Muito bom!', 'Starbucks'),
('', '2016-11-20', 'Legal', 'Starbucks'),
('', '2016-11-20', 'ok', 'Spremuto'),
('', '2016-11-20', 'TESTE', 'Starbucks'),
('mari', '2016-11-20', 'TESTE2', 'Starbucks');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locais`
--

CREATE TABLE IF NOT EXISTS `locais` (
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `localizacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `locais`
--

INSERT INTO `locais` (`nome`, `imagem`, `localizacao`) VALUES
('Starbucks', 'imagens/starbucks.jpg', 'Em frente ao prédio 19'),
('Spremuto', 'imagens/spremuto.jpg', 'Praça de alimentação'),
('Bobs', 'imagens/bobs.png', 'Praça de alimentação'),
('Casa do Pao de Queijo', 'imagens/casapaodequeijo.jpg', 'Praça de alimentação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `tia` int(8) NOT NULL,
  `usuario` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tia`,`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `tia`, `usuario`, `senha`) VALUES
('MARI', 'mari@mari', 1234, 'mariana', '0dcc3cc42445680eb0908b2b10b825b6ac5bb7c8'),
('kjs', 'kjsdh@kuashd', 27835, 'mari', '5d95cb27f49aafe1eac579adf55ae18deeb49b8c'),
('mari', 'mari@mari', 56421, 'mari', '5d95cb27f49aafe1eac579adf55ae18deeb49b8c'),
('mari', 'mari@mari', 156421, ' ', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
('Doroty', 'doroty@uol.com.br', 12345678, 'doroty', 'ef981a4bb4b218cbbcb4ad5d87be572300773f24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
