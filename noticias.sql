-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Abr-2019 às 11:00
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noticias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE `atividades` (
  `idatividades` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descricao` text NOT NULL,
  `imagem` text NOT NULL,
  `texto` text NOT NULL,
  `publicacao` text NOT NULL,
  `atualizacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `editais`
--

CREATE TABLE `editais` (
  `idEdital` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `subtitulo` text NOT NULL,
  `imagem` text NOT NULL,
  `texto` text NOT NULL,
  `publicacao` text NOT NULL,
  `atualizacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enquetes`
--

CREATE TABLE `enquetes` (
  `idEnquete` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `imagem` text NOT NULL,
  `texto` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `publicacao` text NOT NULL,
  `atualizacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estatuto`
--

CREATE TABLE `estatuto` (
  `idestatuto` int(11) NOT NULL,
  `arquivo` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `idEventos` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `data` text NOT NULL,
  `imagem` text NOT NULL,
  `texto` text NOT NULL,
  `publicacao` text NOT NULL,
  `atualizacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mandato`
--

CREATE TABLE `mandato` (
  `idmandato` int(11) NOT NULL,
  `arquivo` text NOT NULL,
  `ano` varchar(4) NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros`
--

CREATE TABLE `membros` (
  `idmembro` int(11) NOT NULL,
  `nome` text NOT NULL,
  `imagem` text NOT NULL,
  `ano_atuacao` varchar(4) NOT NULL,
  `cargo` text NOT NULL,
  `twitter` text NOT NULL,
  `facebook` text NOT NULL,
  `linkedin` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `idNoticias` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `imagem` varchar(40) NOT NULL,
  `texto` longtext NOT NULL,
  `publicacao` text NOT NULL,
  `atualizacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `senha` varchar(16) NOT NULL,
  `adm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nome`, `email`, `senha`, `adm`) VALUES
(4, 'Daniel', 'daniel@grifro.com', '123456', 1),
(5, 'Vituriano Oliveira Xisto', 'viturianooliveira@gmail.com', 'parede101', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`idatividades`);

--
-- Indexes for table `editais`
--
ALTER TABLE `editais`
  ADD PRIMARY KEY (`idEdital`);

--
-- Indexes for table `enquetes`
--
ALTER TABLE `enquetes`
  ADD PRIMARY KEY (`idEnquete`);

--
-- Indexes for table `estatuto`
--
ALTER TABLE `estatuto`
  ADD PRIMARY KEY (`idestatuto`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idEventos`);

--
-- Indexes for table `mandato`
--
ALTER TABLE `mandato`
  ADD PRIMARY KEY (`idmandato`);

--
-- Indexes for table `membros`
--
ALTER TABLE `membros`
  ADD PRIMARY KEY (`idmembro`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticias`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
  MODIFY `idatividades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `editais`
--
ALTER TABLE `editais`
  MODIFY `idEdital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquetes`
--
ALTER TABLE `enquetes`
  MODIFY `idEnquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `estatuto`
--
ALTER TABLE `estatuto`
  MODIFY `idestatuto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idEventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mandato`
--
ALTER TABLE `mandato`
  MODIFY `idmandato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membros`
--
ALTER TABLE `membros`
  MODIFY `idmembro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
