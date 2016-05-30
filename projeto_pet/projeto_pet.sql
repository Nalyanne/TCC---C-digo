-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Abr-2016 às 13:06
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projeto_pet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `rl_agenda`
--

CREATE TABLE IF NOT EXISTS `rl_agenda` (
  `cod_atendimento` int(6) unsigned zerofill NOT NULL,
  `cod_funcionario` int(6) unsigned zerofill NOT NULL,
  `cod_servico` int(6) unsigned zerofill NOT NULL,
  `cod_animal` int(6) unsigned zerofill NOT NULL,
  `hora_servico` time(6) NOT NULL,
  `data_servico` date NOT NULL,
  KEY `cod_atendimento` (`cod_atendimento`,`cod_funcionario`,`cod_servico`,`cod_animal`,`hora_servico`,`data_servico`),
  KEY `cod_funcionario` (`cod_funcionario`),
  KEY `cod_servico` (`cod_servico`),
  KEY `cod_animal` (`cod_animal`),
  KEY `hora_servico` (`hora_servico`),
  KEY `data_servico` (`data_servico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_animal`
--

CREATE TABLE IF NOT EXISTS `tb_animal` (
  `cod_animal` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cod_especie` int(6) unsigned zerofill NOT NULL,
  `cod_raca` int(6) unsigned zerofill NOT NULL,
  `cod_cor` int(6) unsigned zerofill NOT NULL,
  `cod_porte` int(6) unsigned zerofill NOT NULL,
  `CPF` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `pedigree` varchar(50) NOT NULL,
  `historico` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `situacao` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_animal`),
  KEY `cod_especie` (`cod_especie`,`cod_raca`,`cod_cor`,`cod_porte`,`CPF`),
  KEY `cod_especie_2` (`cod_especie`),
  KEY `cod_raca` (`cod_raca`),
  KEY `cod_cor` (`cod_cor`),
  KEY `cod_porte` (`cod_porte`),
  KEY `CPF` (`CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_atendimento`
--

CREATE TABLE IF NOT EXISTS `tb_atendimento` (
  `cod_atendimento` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cod_cliente_CPF` int(6) NOT NULL,
  `cod_animal` int(6) unsigned zerofill NOT NULL,
  `cod_funcionario` int(6) unsigned zerofill NOT NULL,
  `cod_status_atend` int(6) unsigned zerofill NOT NULL,
  `cod_servico` int(6) unsigned zerofill NOT NULL,
  `hora_servico` time(6) NOT NULL,
  `data_servico` date NOT NULL,
  `observacao` varchar(120) NOT NULL,
  `atualizacao` varchar(120) NOT NULL,
  PRIMARY KEY (`cod_atendimento`),
  KEY `cod_cliente_CPF` (`cod_cliente_CPF`,`cod_animal`,`cod_funcionario`,`cod_status_atend`,`cod_servico`),
  KEY `cod_animal` (`cod_animal`),
  KEY `cod_funcionario` (`cod_funcionario`),
  KEY `cod_status_atend` (`cod_status_atend`),
  KEY `cod_servico` (`cod_servico`),
  KEY `hora_servico` (`hora_servico`),
  KEY `hora_servico_2` (`hora_servico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cargo`
--

CREATE TABLE IF NOT EXISTS `tb_cargo` (
  `cod_cargo` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cargo` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`cod_cargo`),
  KEY `cargo` (`cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tb_cargo`
--

INSERT INTO `tb_cargo` (`cod_cargo`, `cargo`) VALUES
(000006, 'Administrador do Sistema'),
(000002, 'Atendente'),
(000001, 'Cuidador de Animais'),
(000005, 'Gerente'),
(000003, 'Serviços Gerais'),
(000004, 'Supervisor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `CPF` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `genero` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` int(20) NOT NULL,
  `CEP` int(8) NOT NULL,
  `endereco` varchar(120) NOT NULL,
  `complemento` varchar(120) NOT NULL,
  PRIMARY KEY (`CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cor`
--

CREATE TABLE IF NOT EXISTS `tb_cor` (
  `cod_cor` int(6) unsigned zerofill NOT NULL,
  `COR` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`cod_cor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_especie`
--

CREATE TABLE IF NOT EXISTS `tb_especie` (
  `cod_especie` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `especie` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_especie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE IF NOT EXISTS `tb_funcionario` (
  `cod_funcionario` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `id_cargo` int(6) unsigned zerofill NOT NULL,
  `dt_nascimento` date NOT NULL,
  `CPF` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(15) NOT NULL,
  `CEP` int(8) NOT NULL,
  `enderco` varchar(120) NOT NULL,
  `complemento` varchar(120) NOT NULL,
  PRIMARY KEY (`cod_funcionario`),
  KEY `cod_cargo` (`id_cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`cod_funcionario`, `nome`, `id_cargo`, `dt_nascimento`, `CPF`, `genero`, `email`, `telefone`, `CEP`, `enderco`, `complemento`) VALUES
(000001, 'Nalyanne Rocha Silva', 000006, '1990-02-19', '033.663.431-50', 'feminino', 'nalyanner.silva@gmail.com', 81333677, 72006630, 'vicente pires, rua 7, casa 29', 'chacara 207');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_porte`
--

CREATE TABLE IF NOT EXISTS `tb_porte` (
  `cod_porte` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `porte` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_porte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_raca`
--

CREATE TABLE IF NOT EXISTS `tb_raca` (
  `cod_raca` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `raca` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_raca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servicos`
--

CREATE TABLE IF NOT EXISTS `tb_servicos` (
  `cod_servico` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `servico` varchar(50) NOT NULL,
  `descricao` varchar(120) NOT NULL,
  `preco` float NOT NULL,
  `duracao` time(6) NOT NULL,
  `validade` date NOT NULL,
  PRIMARY KEY (`cod_servico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_status_atendimento`
--

CREATE TABLE IF NOT EXISTS `tb_status_atendimento` (
  `cod_status_atend` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `status_atendimento` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_status_atend`),
  UNIQUE KEY `cod_status_atend` (`cod_status_atend`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_usuario` (
  `cod_tipo_usuario` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`cod_tipo_usuario`),
  KEY `tipo` (`tipo_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tb_tipo_usuario`
--

INSERT INTO `tb_tipo_usuario` (`cod_tipo_usuario`, `tipo_usuario`) VALUES
(000001, 'Administrador'),
(000002, 'Atendente'),
(000004, 'Gerente'),
(000003, 'Supervisor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `cod_usuario` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cod_funcionario` int(6) unsigned zerofill NOT NULL,
  `cod_tipo_usuario` int(6) unsigned zerofill NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_usuario`),
  KEY `cod_funcionario` (`cod_funcionario`,`cod_tipo_usuario`),
  KEY `cod_funcionario_2` (`cod_funcionario`),
  KEY `cod_tipo_usuario` (`cod_tipo_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cod_usuario`, `cod_funcionario`, `cod_tipo_usuario`, `login`, `senha`) VALUES
(000001, 000001, 000001, 'admin', 'senha1');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `rl_agenda`
--
ALTER TABLE `rl_agenda`
  ADD CONSTRAINT `rl_agenda_ibfk_1` FOREIGN KEY (`cod_atendimento`) REFERENCES `tb_atendimento` (`cod_atendimento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rl_agenda_ibfk_2` FOREIGN KEY (`cod_funcionario`) REFERENCES `tb_funcionario` (`cod_funcionario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rl_agenda_ibfk_3` FOREIGN KEY (`cod_servico`) REFERENCES `tb_servicos` (`cod_servico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rl_agenda_ibfk_4` FOREIGN KEY (`cod_animal`) REFERENCES `tb_animal` (`cod_animal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_animal`
--
ALTER TABLE `tb_animal`
  ADD CONSTRAINT `tb_animal_ibfk_1` FOREIGN KEY (`cod_especie`) REFERENCES `tb_especie` (`cod_especie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_animal_ibfk_2` FOREIGN KEY (`cod_raca`) REFERENCES `tb_raca` (`cod_raca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_animal_ibfk_3` FOREIGN KEY (`cod_cor`) REFERENCES `tb_cor` (`cod_cor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_animal_ibfk_4` FOREIGN KEY (`cod_porte`) REFERENCES `tb_porte` (`cod_porte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_animal_ibfk_5` FOREIGN KEY (`CPF`) REFERENCES `tb_cliente` (`CPF`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_atendimento`
--
ALTER TABLE `tb_atendimento`
  ADD CONSTRAINT `tb_atendimento_ibfk_1` FOREIGN KEY (`cod_cliente_CPF`) REFERENCES `tb_cliente` (`CPF`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_atendimento_ibfk_2` FOREIGN KEY (`cod_animal`) REFERENCES `tb_animal` (`cod_animal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_atendimento_ibfk_3` FOREIGN KEY (`cod_funcionario`) REFERENCES `tb_funcionario` (`cod_funcionario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_atendimento_ibfk_4` FOREIGN KEY (`cod_servico`) REFERENCES `tb_servicos` (`cod_servico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_atendimento_ibfk_5` FOREIGN KEY (`cod_status_atend`) REFERENCES `tb_status_atendimento` (`cod_status_atend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD CONSTRAINT `tb_funcionario_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `tb_cargo` (`cod_cargo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `tb_usuario_ibfk_1` FOREIGN KEY (`cod_funcionario`) REFERENCES `tb_funcionario` (`cod_funcionario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_usuario_ibfk_2` FOREIGN KEY (`cod_tipo_usuario`) REFERENCES `tb_tipo_usuario` (`cod_tipo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
