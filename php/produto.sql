-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2018 at 06:09 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_loja`
--

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(20) NOT NULL,
  `situacao` varchar(10) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `gtin` int(20) NOT NULL,
  `ncm` int(20) NOT NULL,
  `preco_custo` decimal(10,0) NOT NULL,
  `preco_venda` decimal(10,0) NOT NULL,
  `preco_promo` decimal(10,0) NOT NULL,
  `peso_liquido` decimal(10,0) NOT NULL,
  `peso_bruto` decimal(10,0) NOT NULL,
  `validade` varchar(256) DEFAULT NULL,
  `condicao` varchar(10) NOT NULL,
  `largura` decimal(10,0) NOT NULL,
  `comprimento` decimal(10,0) NOT NULL,
  `altura` decimal(10,0) NOT NULL,
  `unidade` varchar(15) NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `descricao` text NOT NULL,
  `estoque` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id_produto`, `situacao`, `produto`, `gtin`, `ncm`, `preco_custo`, `preco_venda`, `preco_promo`, `peso_liquido`, `peso_bruto`, `validade`, `condicao`, `largura`, `comprimento`, `altura`, `unidade`, `fabricante`, `categoria`, `descricao`, `estoque`) VALUES
(312312, '1', 'Camisa Azul', 5464, 5446, '450', '70', '480', '3', '45', '19101994', 'Novo', '45', '3', '1', '33', 'cases bahia', 'CatXD', '', 300),
(23131, 'ativado', 'Tapete', 0, 0, '0', '200', '0', '0', '0', '', 'novo', '0', '0', '0', 'Milímetro', 'Rodrigo', 'Sala', '', 10),
(545456, 'ativado', 'Prato de porcelanato', 0, 0, '0', '25', '0', '0', '0', '', 'novo', '0', '0', '0', 'Milímetro', 'Boni Shampoo', 'Cozinha', 'teste', 300);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;