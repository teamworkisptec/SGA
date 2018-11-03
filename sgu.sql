-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23-Out-2018 às 13:26
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgu`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `inserirAdministrativo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirAdministrativo` (`nome` VARCHAR(30), `email` VARCHAR(30), `passeword` VARCHAR(30))  BEGIN
	declare qtdID, qtdlogin int;
	set qtdID = 20180001;
    set qtdlogin = (select count(id) from tb_login);
    set qtdID = qtdID + qtdlogin;
	/** Inserção **/
	insert into sgu.tb_login(id,perfil, passe) values (qtdID,'admin',passeword);
	insert into sgu.tb_administrativo(id, nome, email, passe) values (qtdID,nome,email, passeword);
END$$

DROP PROCEDURE IF EXISTS `inserirAvaliacao`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirAvaliacao` (`id_disciplina` VARCHAR(8), `id_docente` INT, `tipo` VARCHAR(8), `datas` DATE)  BEGIN
	insert into tb_avaliacao(id_disciplina, id_docente, tipo, datas)values(id_disciplina, id_docente, tipo, datas);
	
END$$

DROP PROCEDURE IF EXISTS `inserirAvaliacaoDiscente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirAvaliacaoDiscente` (`id_discente` INT, `id_avaliacao` INT, `nota` FLOAT)  BEGIN
	insert into tb_avaliacao_discente (id_discente, id_avaliacao, nota)values(id_discente, id_avaliacao, nota);
	
END$$

DROP PROCEDURE IF EXISTS `inserirChefedep`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirChefedep` (`nome` VARCHAR(30), `email` VARCHAR(30), `passeword` VARCHAR(30), `endereco` VARCHAR(30), `id_departamento` VARCHAR(8))  BEGIN
	declare qtdID, qtdlogin int;
	set qtdID = 20180001;
    set qtdlogin = (select count(id) from tb_login);
    set qtdID = qtdID + qtdlogin;
	/** Inserção **/
	insert into tb_login(id,perfil, passe) values (qtdID,'chedep',passeword);
	insert into tb_chefedepartamento(id, nome, email, passe,endereco,id_departamento) 
    values (qtdID,nome,email, passeword,endereco,id_departamento);

	
END$$

DROP PROCEDURE IF EXISTS `inserirCoordenador`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirCoordenador` (`id_docente` INT, `id_departamento` VARCHAR(8))  BEGIN
	/** Inserção **/
	insert into tb_coordenador( id_docente, id_departamento) values (id_docente,id_departamento);

	
END$$

DROP PROCEDURE IF EXISTS `inserirCurso`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirCurso` (`id` VARCHAR(8), `id_departamento` VARCHAR(8), `nome` VARCHAR(30))  BEGIN
	insert into tb_curso(id,id_departamento,nome)values(id,id_departamento,nome);
	
END$$

DROP PROCEDURE IF EXISTS `inserirCursoCoordenador`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirCursoCoordenador` (`id_curso` VARCHAR(8), `id_coordenador` INT, `datainicio` DATE, `datafim` DATE)  BEGIN
	insert into tb_curso_coordenador (id_curso, id_coordenador, datainicio, datafim)
    values(id_curso, id_coordenador, datainicio, datafim);
	
END$$

DROP PROCEDURE IF EXISTS `inserirCursoDisciplina`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirCursoDisciplina` (`id_curso` VARCHAR(8), `id_disciplina` VARCHAR(8), `anocurso` INT, `semestre` INT, `cargahoraria` INT)  BEGIN
	insert into tb_curso_disciplina (id_curso, id_disciplina , anocurso, semestre, cargahoraria)
    values(id_curso, id_disciplina , anocurso, semestre, cargahoraria);
	
END$$

DROP PROCEDURE IF EXISTS `inserirDepartamento`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirDepartamento` (`id` VARCHAR(8), `nome` VARCHAR(30))  BEGIN
	insert into tb_departamento(id,nome)values(id,nome);
	
END$$

DROP PROCEDURE IF EXISTS `inserirDiscente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirDiscente` (`nome` VARCHAR(30), `email` VARCHAR(30), `passeword` VARCHAR(30), `endereco` VARCHAR(30))  BEGIN
	declare qtdID, qtdlogin, teste int;
	set qtdID = 20180001;
    set qtdlogin = (select count(id) from tb_login);
    set qtdID = qtdID + qtdlogin;
	/** Agora inserir nas tabelas login e discente **/
	insert into sgu.tb_login(id,perfil, passe) values (qtdID,'disce',passeword);
	insert into sgu.tb_discente(id, nome, email, passe, endereco) values (qtdID,nome,email, passeword,endereco);

	
END$$

DROP PROCEDURE IF EXISTS `inserirDiscenteDisciplina`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirDiscenteDisciplina` (`id_discente` INT, `id_disciplina` VARCHAR(8), `id_docente` INT, `tema` VARCHAR(30), `datas` DATE, `presenca` CHAR)  BEGIN
	insert into tb_discente_disciplina(id_discente, id_disciplina, id_docente, tema, datas,presenca ) 
    values(id_discente, id_disciplina, id_docente, tema, datas,presenca);
    
END$$

DROP PROCEDURE IF EXISTS `inserirDisciplina`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirDisciplina` (`id` VARCHAR(8), `nome` VARCHAR(30), `descricao` VARCHAR(30))  BEGIN
	insert into tb_disciplina(id,nome,descricao)values(id,nome,descricao);
	
END$$

DROP PROCEDURE IF EXISTS `inserirDisciplinaDocente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirDisciplinaDocente` (`id_disciplina` VARCHAR(8), `id_docente` INT, `semestre` INT)  BEGIN
	insert into tb_disciplina_docente(id_disciplina,id_docente,semestre)values(id_disciplina,id_docente,semestre);
	
END$$

DROP PROCEDURE IF EXISTS `inserirDocente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirDocente` (`nome` VARCHAR(30), `email` VARCHAR(30), `passeword` VARCHAR(30), `endereco` VARCHAR(30))  BEGIN
	declare qtdID, qtdlogin int;
	set qtdID = 20180001;
    set qtdlogin = (select count(id) from tb_login);
    set qtdID = qtdID + qtdlogin;
	/** Inserção **/
	insert into sgu.tb_login(id,perfil, passe) values (qtdID,'docen',passeword);
	insert into sgu.tb_docente(id, nome, email, passe, endereco) values (qtdID,nome,email, passeword,endereco);
END$$

DROP PROCEDURE IF EXISTS `inserirHistorico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirHistorico` (`anocurso` INT, `id_discente` INT, `id_disciplina` VARCHAR(8), `datainicio` DATE, `datafim` DATE)  BEGIN
	insert into tb_historico (anocurso, id_discente, id_disciplina, datainicio, datafim)
    values(anocurso, id_discente, id_disciplina, datainicio, datafim);
END$$

DROP PROCEDURE IF EXISTS `inserirHorario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirHorario` (`horainicio` TIME, `horafim` TIME)  BEGIN
	insert into tb_horario(horainicio,horafim)values(horainicio,horafim);
	
END$$

DROP PROCEDURE IF EXISTS `inserirInscricao`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirInscricao` (`nome` VARCHAR(30), `email` VARCHAR(30), `bi` VARCHAR(30), `telefone` INT(11), `id_curso` VARCHAR(8))  BEGIN
	insert into tb_inscricao(nome, email, bi,telefone, id_curso) values (nome, email, bi, telefone, id_curso);
    
END$$

DROP PROCEDURE IF EXISTS `inserirMatricula`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirMatricula` (`id_turma` VARCHAR(8), `id_discente` INT, `datas` DATE)  BEGIN
	insert into sgu.tb_matricula(id_turma,id_discente,datas)values(id_turma,id_discente,datas);
END$$

DROP PROCEDURE IF EXISTS `inserirTurma`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirTurma` (`id` VARCHAR(8), `id_curso` VARCHAR(8), `nome` VARCHAR(30), `periodo` VARCHAR(30))  BEGIN
	insert into tb_turma(id,id_curso,nome,periodo)values(id,id_curso,nome,periodo);
	
END$$

DROP PROCEDURE IF EXISTS `inserirTurmaDisciplina`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirTurmaDisciplina` (`id` VARCHAR(10), `id_turma` VARCHAR(8), `id_disciplina` VARCHAR(8), `id_horario` INT)  BEGIN
	insert into tb_turma_disciplina(id,id_turma,id_disciplina,id_horario)values(id,id_turma,id_disciplina,id_horario);
END$$

DROP PROCEDURE IF EXISTS `updateAdministrativo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateAdministrativo` (`id` INT, `nome` VARCHAR(30), `email` VARCHAR(30), `passe` VARCHAR(30))  BEGIN
	update tb_administrativo set tb_administrativo.email= email,tb_administrativo.nome = nome,tb_administrativo.passe = passe
    where tb_administrativo.id= id;
    
    update sgu.tb_login set tb_login.passe = passe
    where tb_login.id = id;
END$$

DROP PROCEDURE IF EXISTS `updateDiscente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateDiscente` (`id` INT, `nome` VARCHAR(30), `email` VARCHAR(30), `endereco` VARCHAR(30), `passe` VARCHAR(30))  BEGIN
	update sgu.tb_discente
    set tb_discente.email= email,
		tb_discente.nome = nome,
        tb_discente.endereco = endereco,
		tb_discente.passe = passe
    where tb_discente.id= id;
    
    update sgu.tb_login set tb_login.passe = passe
    where tb_login.id = id;
END$$

DROP PROCEDURE IF EXISTS `updateDocente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateDocente` (`id` INT, `nome` VARCHAR(30), `email` VARCHAR(30), `endereco` VARCHAR(30), `passe` VARCHAR(30))  BEGIN
	update sgu.tb_docente
    set tb_docente.email= email,
		tb_docente.nome = nome,
        tb_docente.endereco = endereco,
		tb_docente.passe = passe
    where tb_docente.id= id;
    
    update sgu.tb_login set tb_login.passe = passe
    where tb_login.id = id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_administrativo`
--

DROP TABLE IF EXISTS `tb_administrativo`;
CREATE TABLE IF NOT EXISTS `tb_administrativo` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `passe` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_avaliacao`
--

DROP TABLE IF EXISTS `tb_avaliacao`;
CREATE TABLE IF NOT EXISTS `tb_avaliacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disciplina` varchar(8) DEFAULT NULL,
  `id_docente` int(11) DEFAULT NULL,
  `tipo` enum('pp1','pp2','av1','av2','exam','rec') DEFAULT NULL,
  `datas` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_docente` (`id_docente`),
  KEY `id_disciplina` (`id_disciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_avaliacao_discente`
--

DROP TABLE IF EXISTS `tb_avaliacao_discente`;
CREATE TABLE IF NOT EXISTS `tb_avaliacao_discente` (
  `id_discente` int(11) NOT NULL,
  `id_avaliacao` int(11) NOT NULL,
  `nota` float(2,2) DEFAULT NULL,
  PRIMARY KEY (`id_discente`,`id_avaliacao`),
  KEY `id_avaliacao` (`id_avaliacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_chefedepartamento`
--

DROP TABLE IF EXISTS `tb_chefedepartamento`;
CREATE TABLE IF NOT EXISTS `tb_chefedepartamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `passe` varchar(30) NOT NULL,
  `id_departamento` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_departamento` (`id_departamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_coordenador`
--

DROP TABLE IF EXISTS `tb_coordenador`;
CREATE TABLE IF NOT EXISTS `tb_coordenador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_departamento` varchar(8) DEFAULT NULL,
  `id_docente` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_docente` (`id_docente`),
  KEY `id_departamento` (`id_departamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

DROP TABLE IF EXISTS `tb_curso`;
CREATE TABLE IF NOT EXISTS `tb_curso` (
  `id` varchar(8) NOT NULL,
  `id_departamento` varchar(8) NOT NULL,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_departamento` (`id_departamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_curso`
--

INSERT INTO `tb_curso` (`id`, `id_departamento`, `nome`) VALUES
('EINF', 'd001', 'Informatica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso_coordenador`
--

DROP TABLE IF EXISTS `tb_curso_coordenador`;
CREATE TABLE IF NOT EXISTS `tb_curso_coordenador` (
  `id_curso` varchar(8) NOT NULL,
  `id_coordenador` int(11) NOT NULL,
  `datainicio` date DEFAULT NULL,
  `datafim` date DEFAULT NULL,
  PRIMARY KEY (`id_curso`,`id_coordenador`),
  KEY `id_coordenador` (`id_coordenador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso_disciplina`
--

DROP TABLE IF EXISTS `tb_curso_disciplina`;
CREATE TABLE IF NOT EXISTS `tb_curso_disciplina` (
  `id_curso` varchar(8) NOT NULL,
  `id_disciplina` varchar(8) NOT NULL,
  `anocurso` int(11) NOT NULL,
  `semestre` int(11) DEFAULT NULL,
  `cargahoraria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_curso`,`id_disciplina`,`anocurso`),
  KEY `id_disciplina` (`id_disciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_departamento`
--

DROP TABLE IF EXISTS `tb_departamento`;
CREATE TABLE IF NOT EXISTS `tb_departamento` (
  `id` varchar(8) NOT NULL,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_departamento`
--

INSERT INTO `tb_departamento` (`id`, `nome`) VALUES
('d001', 'Engenharia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_discente`
--

DROP TABLE IF EXISTS `tb_discente`;
CREATE TABLE IF NOT EXISTS `tb_discente` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `estado` varchar(8) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `passe` varchar(30) DEFAULT NULL,
  `id_curso` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_curso` (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_discente_disciplina`
--

DROP TABLE IF EXISTS `tb_discente_disciplina`;
CREATE TABLE IF NOT EXISTS `tb_discente_disciplina` (
  `id_discente` int(11) NOT NULL,
  `id_disciplina` varchar(8) NOT NULL,
  `id_docente` int(11) DEFAULT NULL,
  `tema` varchar(30) DEFAULT NULL,
  `datas` date DEFAULT NULL,
  `presenca` enum('F','C') DEFAULT NULL,
  `estado` enum('em_curso','reprov','aprov') DEFAULT 'em_curso',
  PRIMARY KEY (`id_discente`,`id_disciplina`),
  KEY `id_disciplina` (`id_disciplina`),
  KEY `id_docente` (`id_docente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_disciplina`
--

DROP TABLE IF EXISTS `tb_disciplina`;
CREATE TABLE IF NOT EXISTS `tb_disciplina` (
  `id` varchar(8) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_disciplina`
--

INSERT INTO `tb_disciplina` (`id`, `nome`, `descricao`) VALUES
('cpd', 'Computação CIÉNTIFICA', ' funcinamento do pc threat');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_disciplina_docente`
--

DROP TABLE IF EXISTS `tb_disciplina_docente`;
CREATE TABLE IF NOT EXISTS `tb_disciplina_docente` (
  `id_disciplina` varchar(8) NOT NULL,
  `id_docente` int(8) NOT NULL,
  `semestre` int(11) NOT NULL,
  PRIMARY KEY (`id_disciplina`,`id_docente`,`semestre`),
  KEY `id_docente` (`id_docente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_disciplina_docente`
--

INSERT INTO `tb_disciplina_docente` (`id_disciplina`, `id_docente`, `semestre`) VALUES
('cpd', 20180001, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_docente`
--

DROP TABLE IF EXISTS `tb_docente`;
CREATE TABLE IF NOT EXISTS `tb_docente` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `passe` varchar(30) NOT NULL,
  `statu` enum('leciona','nleciona') DEFAULT 'nleciona',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_docente`
--

INSERT INTO `tb_docente` (`id`, `nome`, `email`, `endereco`, `passe`, `statu`) VALUES
(20180001, 'prof', 'prof@gmail.comm', 'Luanda/Maianga', 'prof', 'nleciona');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_historico`
--

DROP TABLE IF EXISTS `tb_historico`;
CREATE TABLE IF NOT EXISTS `tb_historico` (
  `anocurso` int(11) NOT NULL,
  `id_discente` int(11) NOT NULL,
  `id_disciplina` varchar(5) NOT NULL,
  `datainicio` date NOT NULL,
  `datafim` date DEFAULT NULL,
  `pp1` float(2,2) DEFAULT NULL,
  `pp2` float(2,2) DEFAULT NULL,
  `av1` float(2,2) DEFAULT NULL,
  `av2` float(2,2) DEFAULT NULL,
  `exm` float(2,2) DEFAULT NULL,
  `rec` float(2,2) DEFAULT NULL,
  PRIMARY KEY (`anocurso`,`id_discente`,`id_disciplina`,`datainicio`),
  KEY `id_discente` (`id_discente`),
  KEY `id_disciplina` (`id_disciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_horario`
--

DROP TABLE IF EXISTS `tb_horario`;
CREATE TABLE IF NOT EXISTS `tb_horario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `horainicio` time DEFAULT NULL,
  `horafim` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_horario`
--

INSERT INTO `tb_horario` (`id`, `horainicio`, `horafim`) VALUES
(1, '09:00:00', '09:45:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_inscricao`
--

DROP TABLE IF EXISTS `tb_inscricao`;
CREATE TABLE IF NOT EXISTS `tb_inscricao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `bi` varchar(30) DEFAULT NULL,
  `id_curso` varchar(8) DEFAULT NULL,
  `estado` enum('apto','napto') DEFAULT 'apto',
  `ano` int(11) DEFAULT NULL,
  `nota` float(2,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_curso` (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
--

DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE IF NOT EXISTS `tb_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `passe` varchar(30) DEFAULT NULL,
  `perfil` enum('admin','disce','docen','chedep','adm') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20180002 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`id`, `passe`, `perfil`) VALUES
(20180001, 'prof', 'docen');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_matricula`
--

DROP TABLE IF EXISTS `tb_matricula`;
CREATE TABLE IF NOT EXISTS `tb_matricula` (
  `id_turma` varchar(8) NOT NULL,
  `id_discente` int(11) NOT NULL,
  `datas` date DEFAULT NULL,
  PRIMARY KEY (`id_turma`,`id_discente`),
  KEY `id_discente` (`id_discente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma`
--

DROP TABLE IF EXISTS `tb_turma`;
CREATE TABLE IF NOT EXISTS `tb_turma` (
  `id` varchar(5) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `id_curso` varchar(8) DEFAULT NULL,
  `anocurso` int(2) DEFAULT NULL,
  `periodo` enum('manha','tarde','noite') DEFAULT 'manha',
  `qtdmatriculados` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_curso` (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_turma`
--

INSERT INTO `tb_turma` (`id`, `nome`, `id_curso`, `anocurso`, `periodo`, `qtdmatriculados`) VALUES
('A8', 'turma-informatica', 'EINF', NULL, 'manha', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma_disciplina`
--

DROP TABLE IF EXISTS `tb_turma_disciplina`;
CREATE TABLE IF NOT EXISTS `tb_turma_disciplina` (
  `id` enum('domingo','segunda','terca','quarta','quinta','sexta','sabado') NOT NULL,
  `id_turma` varchar(8) NOT NULL,
  `id_disciplina` varchar(8) NOT NULL,
  `id_horario` int(11) NOT NULL,
  PRIMARY KEY (`id_turma`,`id_disciplina`,`id_horario`,`id`),
  KEY `id_disciplina` (`id_disciplina`),
  KEY `id_horario` (`id_horario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_turma_disciplina`
--

INSERT INTO `tb_turma_disciplina` (`id`, `id_turma`, `id_disciplina`, `id_horario`) VALUES
('segunda', 'A8', 'cpd', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_cursodisciplina`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_cursodisciplina`;
CREATE TABLE IF NOT EXISTS `vw_cursodisciplina` (
`CURSO` varchar(30)
,`DISCIPLINA` varchar(30)
,`CARGA_HORARIA` int(11)
,`SEMESTRE` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_departamentos`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_departamentos`;
CREATE TABLE IF NOT EXISTS `vw_departamentos` (
`CODIGO` varchar(8)
,`DEPARTAMENTO` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_discente`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_discente`;
CREATE TABLE IF NOT EXISTS `vw_discente` (
`CODIGO` int(11)
,`DISCENTE` varchar(30)
,`EMAIL` varchar(30)
,`ENDERECO` varchar(30)
,`CURSO` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_disciplina`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_disciplina`;
CREATE TABLE IF NOT EXISTS `vw_disciplina` (
`CODIGO` varchar(8)
,`DISCIPLINA` varchar(30)
,`DESCRICAO` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_docente`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_docente`;
CREATE TABLE IF NOT EXISTS `vw_docente` (
`CODIGO` int(11)
,`NOME` varchar(30)
,`EMAIL` varchar(30)
,`ENDERECO` varchar(30)
,`STATU` enum('leciona','nleciona')
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_horario`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_horario`;
CREATE TABLE IF NOT EXISTS `vw_horario` (
`CODIGO` int(11)
,`INICIO` time
,`FIM` time
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_matriculados`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_matriculados`;
CREATE TABLE IF NOT EXISTS `vw_matriculados` (
`NOME` varchar(30)
,`TURMA` varchar(30)
,`DATA_DE_Matricula` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_turma`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_turma`;
CREATE TABLE IF NOT EXISTS `vw_turma` (
`CODIGO` varchar(5)
,`TURMA` varchar(30)
,`CURSO` varchar(30)
,`PERIODO` enum('manha','tarde','noite')
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_turmadisciplina`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_turmadisciplina`;
CREATE TABLE IF NOT EXISTS `vw_turmadisciplina` (
`SEMANA` enum('domingo','segunda','terca','quarta','quinta','sexta','sabado')
,`HORA` time
,`DISCIPLINA` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_cursodisciplina`
--
DROP TABLE IF EXISTS `vw_cursodisciplina`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_cursodisciplina`  AS  select `tb_curso`.`nome` AS `CURSO`,`tb_disciplina`.`nome` AS `DISCIPLINA`,`tb_curso_disciplina`.`cargahoraria` AS `CARGA_HORARIA`,`tb_curso_disciplina`.`semestre` AS `SEMESTRE` from ((`tb_curso` join `tb_disciplina`) join `tb_curso_disciplina`) where ((`tb_curso`.`id` = `tb_curso_disciplina`.`id_curso`) and (`tb_disciplina`.`id` = `tb_curso_disciplina`.`id_disciplina`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_departamentos`
--
DROP TABLE IF EXISTS `vw_departamentos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_departamentos`  AS  select `tb_departamento`.`id` AS `CODIGO`,`tb_departamento`.`nome` AS `DEPARTAMENTO` from `tb_departamento` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_discente`
--
DROP TABLE IF EXISTS `vw_discente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_discente`  AS  select `tb_discente`.`id` AS `CODIGO`,`tb_discente`.`nome` AS `DISCENTE`,`tb_discente`.`email` AS `EMAIL`,`tb_discente`.`endereco` AS `ENDERECO`,`tb_curso`.`nome` AS `CURSO` from (`tb_discente` join `tb_curso`) where (`tb_discente`.`id_curso` = `tb_curso`.`id`) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_disciplina`
--
DROP TABLE IF EXISTS `vw_disciplina`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_disciplina`  AS  select `tb_disciplina`.`id` AS `CODIGO`,`tb_disciplina`.`nome` AS `DISCIPLINA`,`tb_disciplina`.`descricao` AS `DESCRICAO` from `tb_disciplina` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_docente`
--
DROP TABLE IF EXISTS `vw_docente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_docente`  AS  select `tb_docente`.`id` AS `CODIGO`,`tb_docente`.`nome` AS `NOME`,`tb_docente`.`email` AS `EMAIL`,`tb_docente`.`endereco` AS `ENDERECO`,`tb_docente`.`statu` AS `STATU` from `tb_docente` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_horario`
--
DROP TABLE IF EXISTS `vw_horario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_horario`  AS  select `tb_horario`.`id` AS `CODIGO`,`tb_horario`.`horainicio` AS `INICIO`,`tb_horario`.`horafim` AS `FIM` from `tb_horario` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_matriculados`
--
DROP TABLE IF EXISTS `vw_matriculados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_matriculados`  AS  select `tb_discente`.`nome` AS `NOME`,`tb_turma`.`nome` AS `TURMA`,`tb_matricula`.`datas` AS `DATA_DE_Matricula` from ((`tb_discente` join `tb_turma`) join `tb_matricula`) where ((`tb_matricula`.`id_discente` = `tb_discente`.`id`) and (`tb_matricula`.`id_turma` = `tb_turma`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_turma`
--
DROP TABLE IF EXISTS `vw_turma`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_turma`  AS  select `tb_turma`.`id` AS `CODIGO`,`tb_turma`.`nome` AS `TURMA`,`tb_curso`.`nome` AS `CURSO`,`tb_turma`.`periodo` AS `PERIODO` from (`tb_turma` join `tb_curso`) where (`tb_turma`.`id_curso` = `tb_curso`.`id`) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_turmadisciplina`
--
DROP TABLE IF EXISTS `vw_turmadisciplina`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_turmadisciplina`  AS  select `tb_turma_disciplina`.`id` AS `SEMANA`,`tb_horario`.`horainicio` AS `HORA`,`tb_disciplina`.`nome` AS `DISCIPLINA` from (((`tb_turma_disciplina` join `tb_turma`) join `tb_disciplina`) join `tb_horario`) where ((`tb_turma_disciplina`.`id_turma` = `tb_turma`.`id`) and (`tb_turma_disciplina`.`id_horario` = `tb_horario`.`id`) and (`tb_turma_disciplina`.`id_disciplina` = `tb_disciplina`.`id`)) ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_avaliacao`
--
ALTER TABLE `tb_avaliacao`
  ADD CONSTRAINT `tb_avaliacao_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `tb_docente` (`id`),
  ADD CONSTRAINT `tb_avaliacao_ibfk_2` FOREIGN KEY (`id_disciplina`) REFERENCES `tb_disciplina` (`id`);

--
-- Limitadores para a tabela `tb_avaliacao_discente`
--
ALTER TABLE `tb_avaliacao_discente`
  ADD CONSTRAINT `tb_avaliacao_discente_ibfk_1` FOREIGN KEY (`id_discente`) REFERENCES `tb_discente` (`id`),
  ADD CONSTRAINT `tb_avaliacao_discente_ibfk_2` FOREIGN KEY (`id_avaliacao`) REFERENCES `tb_avaliacao` (`id`);

--
-- Limitadores para a tabela `tb_chefedepartamento`
--
ALTER TABLE `tb_chefedepartamento`
  ADD CONSTRAINT `tb_chefedepartamento_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `tb_departamento` (`id`);

--
-- Limitadores para a tabela `tb_coordenador`
--
ALTER TABLE `tb_coordenador`
  ADD CONSTRAINT `tb_coordenador_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `tb_docente` (`id`),
  ADD CONSTRAINT `tb_coordenador_ibfk_2` FOREIGN KEY (`id_departamento`) REFERENCES `tb_departamento` (`id`);

--
-- Limitadores para a tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD CONSTRAINT `tb_curso_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `tb_departamento` (`id`);

--
-- Limitadores para a tabela `tb_curso_coordenador`
--
ALTER TABLE `tb_curso_coordenador`
  ADD CONSTRAINT `tb_curso_coordenador_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`id`),
  ADD CONSTRAINT `tb_curso_coordenador_ibfk_2` FOREIGN KEY (`id_coordenador`) REFERENCES `tb_coordenador` (`id`);

--
-- Limitadores para a tabela `tb_curso_disciplina`
--
ALTER TABLE `tb_curso_disciplina`
  ADD CONSTRAINT `tb_curso_disciplina_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`id`),
  ADD CONSTRAINT `tb_curso_disciplina_ibfk_2` FOREIGN KEY (`id_disciplina`) REFERENCES `tb_disciplina` (`id`);

--
-- Limitadores para a tabela `tb_discente`
--
ALTER TABLE `tb_discente`
  ADD CONSTRAINT `tb_discente_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`id`);

--
-- Limitadores para a tabela `tb_discente_disciplina`
--
ALTER TABLE `tb_discente_disciplina`
  ADD CONSTRAINT `tb_discente_disciplina_ibfk_1` FOREIGN KEY (`id_discente`) REFERENCES `tb_discente` (`id`),
  ADD CONSTRAINT `tb_discente_disciplina_ibfk_2` FOREIGN KEY (`id_disciplina`) REFERENCES `tb_disciplina` (`id`),
  ADD CONSTRAINT `tb_discente_disciplina_ibfk_3` FOREIGN KEY (`id_docente`) REFERENCES `tb_docente` (`id`);

--
-- Limitadores para a tabela `tb_disciplina_docente`
--
ALTER TABLE `tb_disciplina_docente`
  ADD CONSTRAINT `tb_disciplina_docente_ibfk_1` FOREIGN KEY (`id_disciplina`) REFERENCES `tb_disciplina` (`id`),
  ADD CONSTRAINT `tb_disciplina_docente_ibfk_2` FOREIGN KEY (`id_docente`) REFERENCES `tb_docente` (`id`);

--
-- Limitadores para a tabela `tb_historico`
--
ALTER TABLE `tb_historico`
  ADD CONSTRAINT `tb_historico_ibfk_1` FOREIGN KEY (`id_discente`) REFERENCES `tb_discente` (`id`),
  ADD CONSTRAINT `tb_historico_ibfk_2` FOREIGN KEY (`id_disciplina`) REFERENCES `tb_disciplina` (`id`);

--
-- Limitadores para a tabela `tb_inscricao`
--
ALTER TABLE `tb_inscricao`
  ADD CONSTRAINT `tb_inscricao_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`id`);

--
-- Limitadores para a tabela `tb_matricula`
--
ALTER TABLE `tb_matricula`
  ADD CONSTRAINT `tb_matricula_ibfk_1` FOREIGN KEY (`id_turma`) REFERENCES `tb_turma` (`id`),
  ADD CONSTRAINT `tb_matricula_ibfk_2` FOREIGN KEY (`id_discente`) REFERENCES `tb_discente` (`id`);

--
-- Limitadores para a tabela `tb_turma`
--
ALTER TABLE `tb_turma`
  ADD CONSTRAINT `tb_turma_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`id`);

--
-- Limitadores para a tabela `tb_turma_disciplina`
--
ALTER TABLE `tb_turma_disciplina`
  ADD CONSTRAINT `tb_turma_disciplina_ibfk_1` FOREIGN KEY (`id_turma`) REFERENCES `tb_turma` (`id`),
  ADD CONSTRAINT `tb_turma_disciplina_ibfk_2` FOREIGN KEY (`id_disciplina`) REFERENCES `tb_disciplina` (`id`),
  ADD CONSTRAINT `tb_turma_disciplina_ibfk_3` FOREIGN KEY (`id_horario`) REFERENCES `tb_horario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
