-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 05:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eskola`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` bigint(20) UNSIGNED NOT NULL,
  `kode_materia` varchar(20) NOT NULL,
  `materia` varchar(20) NOT NULL,
  `tinan_akademiko` int(12) NOT NULL,
  `dia_absensi` date NOT NULL,
  `absensi_alunos` bigint(20) UNSIGNED NOT NULL,
  `absensi_professores` bigint(20) UNSIGNED NOT NULL,
  `presente` int(11) NOT NULL,
  `alpha` int(11) NOT NULL,
  `doente` int(11) NOT NULL,
  `lisensa` int(11) NOT NULL,
  `exame_periode` enum('Exame_Primeiro_Periode','Exame_Segundo_Periode','Exame_Terceiro_Periode') NOT NULL DEFAULT 'Exame_Primeiro_Periode'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `kode_materia`, `materia`, `tinan_akademiko`, `dia_absensi`, `absensi_alunos`, `absensi_professores`, `presente`, `alpha`, `doente`, `lisensa`, `exame_periode`) VALUES
(35, '1123QCN', 'Quimica', 2023, '2023-10-22', 6, 14, 1, 0, 0, 0, 'Exame_Primeiro_Periode'),
(36, '1123QCN', 'Quimica', 2023, '2023-10-22', 6, 14, 0, 0, 1, 0, 'Exame_Primeiro_Periode');

-- --------------------------------------------------------

--
-- Table structure for table `akun_alunos`
--

CREATE TABLE `akun_alunos` (
  `id_alunos` bigint(20) UNSIGNED NOT NULL,
  `naran_kompleto_alunos` varchar(100) NOT NULL,
  `jenero_alunos` enum('Mane') NOT NULL DEFAULT 'Mane',
  `senha` varchar(100) NOT NULL,
  `status_alunos` enum('Aktivo','La Aktivo') NOT NULL DEFAULT 'Aktivo',
  `fatin_moris_alunos` varchar(100) NOT NULL,
  `paroquia` bigint(20) UNSIGNED NOT NULL,
  `familia` bigint(20) UNSIGNED NOT NULL,
  `loron_moris_alunos` date NOT NULL,
  `alunos_role` bigint(20) UNSIGNED NOT NULL,
  `numero_telemovel_alunos` varchar(30) DEFAULT NULL,
  `tinan_tama` varchar(30) NOT NULL,
  `aktivo_alunos` int(11) NOT NULL,
  `imagem_alunos` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `akun_alunos`
--

INSERT INTO `akun_alunos` (`id_alunos`, `naran_kompleto_alunos`, `jenero_alunos`, `senha`, `status_alunos`, `fatin_moris_alunos`, `paroquia`, `familia`, `loron_moris_alunos`, `alunos_role`, `numero_telemovel_alunos`, `tinan_tama`, `aktivo_alunos`, `imagem_alunos`) VALUES
(6, 'Mario Soares', 'Mane', '$2y$10$gVmh../aiKvStStRKwNTMOchWiKySbryjnPgjnRHWz4ctNgTr47Za', 'Aktivo', 'Fatuberlio', 1, 1, '2023-08-12', 7, '', '2023', 1, NULL),
(14, 'Mariano Soares', 'Mane', '$2y$10$90JaWLjDrl/cUwS4wX3oEuVMlCOQE942dRLz8XkunV.vQAp.I4Drm', 'Aktivo', 'Same', 1, 3, '2023-08-23', 7, '', '2023', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `akun_familia`
--

CREATE TABLE `akun_familia` (
  `id_familia` bigint(20) UNSIGNED NOT NULL,
  `naran_kompleto_familia` varchar(100) NOT NULL,
  `jenero_familia` enum('Mane','Feto') NOT NULL DEFAULT 'Mane',
  `senha` varchar(100) NOT NULL,
  `status_familia` enum('Aktivo','La Aktivo') NOT NULL DEFAULT 'Aktivo',
  `posto_administrativo` varchar(100) NOT NULL,
  `familia_role` bigint(20) UNSIGNED NOT NULL,
  `numero_telemovel` varchar(30) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `akun_familia`
--

INSERT INTO `akun_familia` (`id_familia`, `naran_kompleto_familia`, `jenero_familia`, `senha`, `status_familia`, `posto_administrativo`, `familia_role`, `numero_telemovel`, `imagem`) VALUES
(1, 'Natalio Cristianto Luan Soares', 'Mane', '$2y$10$5k14NMOVUMnK4qPpXtp.xO/VPkBkgeeDAuf8lKXW6ljRJS4tRhXxm', 'Aktivo', 'Fatuberlio', 5, '+6282157675980', NULL),
(2, 'Apriana Francisca Triforca Luan Soares', 'Feto', '$2y$10$Q71Zi.lhNgC752oC5CN3Tu91oNjYYgXxRAakAJuSyjJhBkwYWcBZ.', 'Aktivo', 'Fatuberlio', 5, '+6282157675980', NULL),
(3, 'Igidio Soares', 'Mane', '$2y$10$RYj3nRWB8tay40GNJUDGSutDmQCvO7PIwKSY8pEWKPFa4wsrWTbrC', 'Aktivo', 'Fatuberlio', 5, '+6282157675980', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `akun_instituisaun`
--

CREATE TABLE `akun_instituisaun` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `naran_kompleto` varchar(100) NOT NULL,
  `jenero` enum('Mane','Feto') NOT NULL DEFAULT 'Mane',
  `senha` varchar(100) NOT NULL,
  `status` enum('Solteiro','Solteira','Familia') NOT NULL DEFAULT 'Solteiro',
  `status_servisu` enum('Aktivo','La Aktivo') NOT NULL DEFAULT 'Aktivo',
  `fatin_moris` varchar(100) NOT NULL,
  `loron_moris` date NOT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `aktivo_instituisaun` int(11) NOT NULL,
  `numero_telemovel` varchar(30) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `akun_instituisaun`
--

INSERT INTO `akun_instituisaun` (`id_user`, `naran_kompleto`, `jenero`, `senha`, `status`, `status_servisu`, `fatin_moris`, `loron_moris`, `id_role`, `aktivo_instituisaun`, `numero_telemovel`, `imagem`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 'Natalio Cristianto Luan Soares', 'Mane', '$2y$10$NddSYspOD1o.dpDA8R01keBXXCmjS85pbb1ccYujiNerCZic9dZ.i', 'Solteiro', 'Aktivo', 'Fatuberlio', '1997-12-23', 1, 0, '+6282147675980', NULL, NULL, NULL, NULL),
(14, 'Apriana Francisca Triforca Luan Soares', 'Feto', '$2y$10$1/yUDc.edJABz5B1OYRUn.fwUdEZCIVd.5LI7sWX5SPe31An.TZqa', 'Solteiro', 'Aktivo', 'Fatuberlio', '2002-04-23', 3, 1, '+6282147675980', NULL, NULL, NULL, NULL),
(15, 'Igidio Soares', 'Mane', '$2y$10$NddSYspOD1o.dpDA8R01keBXXCmjS85pbb1ccYujiNerCZic9dZ.i', 'Solteiro', 'Aktivo', 'Fatuberlio', '2002-04-23', 2, 0, '+6282147675980', NULL, NULL, NULL, NULL),
(21, 'Mario Sarmento', 'Mane', '$2y$10$XOGvFyn1ZzVOJeP9kKXn6uT7yZ62E8hgvQMNhOew8ur5Ornm1V3n6', 'Solteiro', 'Aktivo', 'Fatuberlio', '2023-08-05', 2, 0, '+6282147675980', NULL, NULL, NULL, NULL),
(23, 'Maria', 'Feto', '$2y$10$NddSYspOD1o.dpDA8R01keBXXCmjS85pbb1ccYujiNerCZic9dZ.i', 'Solteiro', 'Aktivo', '', '2023-08-23', 7, 0, NULL, NULL, NULL, NULL, NULL),
(29, 'Madre Felomena Soares', 'Feto', '$2y$10$lvJiS4/wyAQjEPOZ47WazeB/49rQ77dfcnrpFwPb/E/Okb10f17yW', 'Solteira', 'Aktivo', 'Same', '2023-08-09', 6, 0, '+6282147675980', NULL, NULL, NULL, NULL),
(32, 'Natalio Luan Soares', 'Mane', '$2y$10$2PHYysNLJyZWwWqsX0jlyeqMRL6mprOMP4PsScv5YP429tYkV.NqS', 'Solteiro', 'Aktivo', 'Same', '2023-08-24', 3, 1, '+6282147675980', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `akun_paroquia`
--

CREATE TABLE `akun_paroquia` (
  `id_paroquia` bigint(20) UNSIGNED NOT NULL,
  `naran_kompleto_paroquia` varchar(100) NOT NULL,
  `jenero_paroquia` enum('Mane','Feto') NOT NULL DEFAULT 'Mane',
  `senha` varchar(100) NOT NULL,
  `status_paroquia` enum('Aktivo','La Aktivo') NOT NULL DEFAULT 'Aktivo',
  `paroquia` varchar(100) NOT NULL,
  `paroquia_role` bigint(20) UNSIGNED NOT NULL,
  `numero_telemovel` varchar(30) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `akun_paroquia`
--

INSERT INTO `akun_paroquia` (`id_paroquia`, `naran_kompleto_paroquia`, `jenero_paroquia`, `senha`, `status_paroquia`, `paroquia`, `paroquia_role`, `numero_telemovel`, `imagem`) VALUES
(1, 'Padre Natalio Luan Soares', 'Mane', '$2y$10$E4/sDtigaO7eyLcqtunCPOREazKP9ugYjxTT/GcrEqpvTsNVZFHZO', 'Aktivo', 'Paroquia Saun Francisco De Assisi', 4, '+6282147675980', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aula`
--

CREATE TABLE `aula` (
  `id_aula` bigint(20) UNSIGNED NOT NULL,
  `aula` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `aula`
--

INSERT INTO `aula` (`id_aula`, `aula`) VALUES
(1, '1A'),
(2, '1B'),
(3, '1C'),
(4, '2A'),
(5, '2B'),
(6, '2C'),
(7, '3A'),
(8, '3B'),
(9, '3C'),
(10, '10 KPA');

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
  `id_horario` bigint(20) UNSIGNED NOT NULL,
  `kode_materia` varchar(20) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `alunos` bigint(20) UNSIGNED NOT NULL,
  `professores` bigint(20) UNSIGNED NOT NULL,
  `loron_materia` varchar(20) NOT NULL,
  `horas_materia` varchar(20) NOT NULL,
  `dia_materia` varchar(20) NOT NULL,
  `aula_horario` bigint(20) UNSIGNED NOT NULL,
  `tinan_horario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `horario`
--

INSERT INTO `horario` (`id_horario`, `kode_materia`, `materia`, `alunos`, `professores`, `loron_materia`, `horas_materia`, `dia_materia`, `aula_horario`, `tinan_horario`) VALUES
(52, '1123QCN', 'Quimica', 6, 14, 'Segunda', '08:00', '2024-08-21', 1, '2023'),
(53, '1223BNC', 'Biologia', 6, 32, 'Terca-Feira', '08:00', '2023-08-29', 4, '2023'),
(54, '2223FCN', 'Fisica', 6, 32, 'Terca-Feira', '08:00', '2023-08-22', 4, '2023'),
(55, '122024 CNF', 'Fisica', 6, 14, 'Segunda', '08:00', '2023-09-13', 6, '2024'),
(57, '122024CNQ', 'Quimica', 6, 14, 'Quarta-Feira', '08:00', '2024-09-13', 4, '2024');

-- --------------------------------------------------------

--
-- Table structure for table `instituisaun`
--

CREATE TABLE `instituisaun` (
  `id_instituisaun` bigint(20) UNSIGNED NOT NULL,
  `naran_kompleto` varchar(100) NOT NULL,
  `jenero` enum('Mane','Feto') NOT NULL DEFAULT 'Mane',
  `status` enum('Solteiro','Solteira','Familia') NOT NULL DEFAULT 'Solteiro',
  `status_servisu` enum('Aktivo','La Aktivo') NOT NULL DEFAULT 'Aktivo',
  `fatin_moris` varchar(100) NOT NULL,
  `loron_moris` date NOT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `instituisaun`
--

INSERT INTO `instituisaun` (`id_instituisaun`, `naran_kompleto`, `jenero`, `status`, `status_servisu`, `fatin_moris`, `loron_moris`, `id_role`, `deleted_at`) VALUES
(7, 'Natalio Cristianto Luan Soares', 'Mane', 'Solteiro', 'Aktivo', 'Fatuberlio', '1997-12-23', 1, NULL),
(8, 'Apriana Francisca Triforca Luan Soares', 'Feto', 'Solteiro', 'Aktivo', 'Fatuberlio', '2002-04-23', 3, NULL),
(9, 'Igidio Soares', 'Mane', 'Solteiro', 'Aktivo', 'Fatuberlio', '2002-04-23', 2, NULL),
(12, 'Joaquin Sarmento', 'Mane', 'Solteiro', 'Aktivo', 'Fatuberlio', '2002-04-23', 5, NULL),
(14, 'Mario Sarmento', 'Mane', 'Solteira', 'Aktivo', 'same', '2023-08-04', 2, NULL),
(17, 'Padre Francisco Soares', 'Mane', 'Solteiro', 'Aktivo', 'Same', '2023-08-04', 4, NULL),
(18, 'Joaquin Soares', 'Mane', 'Solteiro', 'Aktivo', 'Same', '2023-08-04', 5, NULL),
(20, 'Mama', 'Mane', 'Solteiro', 'Aktivo', 'Same', '2023-08-05', 2, '2023-08-05 08:42:07'),
(21, 'Mamamam', 'Feto', 'Solteiro', 'Aktivo', 'www', '2023-08-05', 2, NULL),
(22, 'Natalio Luan Soares', 'Mane', 'Solteiro', 'Aktivo', 'Fatuberlio', '2023-08-07', 3, NULL),
(23, 'Madre Felomena Soares', 'Feto', 'Solteira', 'Aktivo', 'Fatuberlio', '2023-08-09', 6, NULL),
(27, 'Mario', 'Mane', 'Solteiro', 'Aktivo', 'Same', '2023-08-10', 5, NULL),
(28, 'Mario Soares', 'Mane', 'Solteiro', 'Aktivo', 'Same', '2023-08-10', 7, NULL),
(29, 'Padre Natalio Luan Soares', 'Mane', 'Solteiro', 'Aktivo', 'Fatuberlio', '2023-08-12', 4, NULL),
(30, 'Mariano Soares', 'Mane', 'Solteiro', 'Aktivo', 'Same', '2023-08-23', 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `id_materia` bigint(20) UNSIGNED NOT NULL,
  `kode_materia` varchar(20) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `professores` bigint(20) UNSIGNED NOT NULL,
  `aula_materia` bigint(20) UNSIGNED NOT NULL,
  `horas_materia` varchar(20) NOT NULL,
  `loron_materia` varchar(20) NOT NULL,
  `dia_materia` date DEFAULT NULL,
  `tinan_akademiko` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`id_materia`, `kode_materia`, `materia`, `professores`, `aula_materia`, `horas_materia`, `loron_materia`, `dia_materia`, `tinan_akademiko`) VALUES
(25, '1123QCN', 'Quimica', 14, 1, '08:00', 'Segunda', '2024-08-21', '2023'),
(26, '2223FCN', 'Fisica', 32, 4, '08:00', 'Terca-Feira', '2023-08-22', '2023'),
(27, '1223BNC', 'Biologia', 32, 4, '08:00', 'Terca-Feira', '2023-08-29', '2023'),
(28, '1323MNC', 'Matematica', 14, 5, '10:00', 'Quarta-Feira', '2024-08-30', '2024'),
(29, '2323FNC', 'Fisica', 14, 1, '08:00', 'Quinta-Feira', '2023-08-31', '2023'),
(30, '3323GCN', 'Geologia', 14, 9, '08:00', 'Sexta-Feira', '2023-08-25', '2023'),
(31, '2223ECS', 'Economia', 14, 9, '08:00', 'Sabado', '2023-08-26', '2023'),
(43, '122024 CNF', 'Fisica', 14, 6, '08:00', 'Segunda', '2023-09-13', '2024'),
(44, '122024CNQ', 'Quimica', 14, 4, '08:00', 'Quarta-Feira', '2024-09-13', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-08-02-112806', 'App\\Database\\Migrations\\CreateUserRole', 'default', 'App', 1690975840, 1),
(2, '2023-08-03-011039', 'App\\Database\\Migrations\\CreateInstituisaun', 'default', 'App', 1691027041, 2),
(3, '2023-08-03-053100', 'App\\Database\\Migrations\\CreateAkunIntituisaun', 'default', 'App', 1691041747, 3),
(4, '2023-08-10-093509', 'App\\Database\\Migrations\\CreateAkunAlunos', 'default', 'App', 1691662948, 4),
(5, '2023-08-14-021718', 'App\\Database\\Migrations\\CreateAula', 'default', 'App', 1691979667, 5),
(6, '2023-08-14-050422', 'App\\Database\\Migrations\\CreateMateria', 'default', 'App', 1691989640, 6),
(7, '2023-08-14-082831', 'App\\Database\\Migrations\\AkunParoquia', 'default', 'App', 1692002440, 7),
(8, '2023-08-14-131320', 'App\\Database\\Migrations\\CreateFamilia', 'default', 'App', 1692018963, 8),
(9, '2023-08-22-111716', 'App\\Database\\Migrations\\CreatePropinas', 'default', 'App', 1692704001, 9),
(10, '2023-10-21-025122', 'App\\Database\\Migrations\\Valores', 'default', 'App', 1697858078, 10),
(11, '2023-10-22-121754', 'App\\Database\\Migrations\\Absensi', 'default', 'App', 1697977874, 11);

-- --------------------------------------------------------

--
-- Table structure for table `propinas`
--

CREATE TABLE `propinas` (
  `id_propinas` bigint(20) UNSIGNED NOT NULL,
  `naran_alunos` bigint(20) UNSIGNED NOT NULL,
  `propinas` int(11) NOT NULL,
  `aula_alunos` bigint(20) DEFAULT NULL,
  `loron_propinas` date NOT NULL,
  `horas_propinas` varchar(100) NOT NULL,
  `pre_exame` enum('Exame_Primeiro_Periode','Exame_Segundo_Periode','Exame_Terceiro_Periode','') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `propinas`
--

INSERT INTO `propinas` (`id_propinas`, `naran_alunos`, `propinas`, `aula_alunos`, `loron_propinas`, `horas_propinas`, `pre_exame`, `created_at`, `updated_at`, `deleted_at`) VALUES
(26, 14, 50, 10, '2023-08-25', '2023-08-25 19:45:01', 'Exame_Primeiro_Periode', NULL, NULL, NULL),
(27, 6, 50, 6, '2023-09-18', '10:28:11', 'Exame_Terceiro_Periode', NULL, NULL, NULL),
(28, 14, 50, 6, '2023-09-15', '2023-09-15 15:46:36', 'Exame_Primeiro_Periode', NULL, NULL, NULL),
(29, 6, 50, 7, '2023-09-15', '15:58:52', 'Exame_Primeiro_Periode', NULL, NULL, NULL),
(30, 6, 50, 8, '2023-09-18', ' 23:35:58', 'Exame_Primeiro_Periode', NULL, NULL, NULL),
(31, 14, 50, 8, '2023-09-18', '23:41:32', 'Exame_Terceiro_Periode', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrador'),
(2, 'Equipa Formador'),
(3, 'Professores'),
(4, 'Paroquia Dos Alunos'),
(5, 'Familia Dos Alunos'),
(6, 'Administrasaun'),
(7, 'Alunos'),
(8, 'Reitor');

-- --------------------------------------------------------

--
-- Table structure for table `valores`
--

CREATE TABLE `valores` (
  `id_valores` bigint(5) UNSIGNED NOT NULL,
  `kode_materia` varchar(20) NOT NULL,
  `materia` varchar(20) NOT NULL,
  `alunos` bigint(20) UNSIGNED NOT NULL,
  `professores` bigint(20) UNSIGNED NOT NULL,
  `loron_valores` varchar(112) NOT NULL,
  `horas_valores` varchar(112) NOT NULL,
  `exame_periode` enum('Exame_Primeiro_Periode','Exame_Segundo_Periode','Exame_Terceiro_Periode') NOT NULL DEFAULT 'Exame_Primeiro_Periode',
  `tinan_exame` varchar(11) NOT NULL,
  `aula_valores` bigint(20) UNSIGNED NOT NULL,
  `valor_tpc` int(12) NOT NULL,
  `valor_exame` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `valores`
--

INSERT INTO `valores` (`id_valores`, `kode_materia`, `materia`, `alunos`, `professores`, `loron_valores`, `horas_valores`, `exame_periode`, `tinan_exame`, `aula_valores`, `valor_tpc`, `valor_exame`) VALUES
(1, '1123QCN', 'Quimica', 6, 14, 'Segunda', '08:00', 'Exame_Primeiro_Periode', '2023', 1, 9, 8),
(2, '1123QCN', 'Quimica', 6, 14, 'Terca-Feira', '08:00', 'Exame_Primeiro_Periode', '2023', 1, 9, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `absensi_absensi_alunos_foreign` (`absensi_alunos`),
  ADD KEY `absensi_absensi_professores_foreign` (`absensi_professores`);

--
-- Indexes for table `akun_alunos`
--
ALTER TABLE `akun_alunos`
  ADD PRIMARY KEY (`id_alunos`),
  ADD KEY `alunos_role` (`alunos_role`),
  ADD KEY `familia` (`familia`),
  ADD KEY `paroquia` (`paroquia`);

--
-- Indexes for table `akun_familia`
--
ALTER TABLE `akun_familia`
  ADD PRIMARY KEY (`id_familia`),
  ADD KEY `akun_familia_familia_role_foreign` (`familia_role`);

--
-- Indexes for table `akun_instituisaun`
--
ALTER TABLE `akun_instituisaun`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `akun_instituisaun_id_role_foreign` (`id_role`);

--
-- Indexes for table `akun_paroquia`
--
ALTER TABLE `akun_paroquia`
  ADD PRIMARY KEY (`id_paroquia`),
  ADD KEY `akun_paroquia_paroquia_role_foreign` (`paroquia_role`);

--
-- Indexes for table `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id_aula`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `alunos` (`alunos`),
  ADD KEY `professores` (`professores`),
  ADD KEY `aula_horario` (`aula_horario`);

--
-- Indexes for table `instituisaun`
--
ALTER TABLE `instituisaun`
  ADD PRIMARY KEY (`id_instituisaun`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`),
  ADD KEY `professores` (`professores`),
  ADD KEY `aula_materia` (`aula_materia`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propinas`
--
ALTER TABLE `propinas`
  ADD PRIMARY KEY (`id_propinas`),
  ADD KEY `propinas_naran_alunos_foreign` (`naran_alunos`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `valores`
--
ALTER TABLE `valores`
  ADD PRIMARY KEY (`id_valores`),
  ADD KEY `valores_alunos_foreign` (`alunos`),
  ADD KEY `valores_professores_foreign` (`professores`),
  ADD KEY `valores_aula_valores_foreign` (`aula_valores`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `akun_alunos`
--
ALTER TABLE `akun_alunos`
  MODIFY `id_alunos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `akun_familia`
--
ALTER TABLE `akun_familia`
  MODIFY `id_familia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `akun_instituisaun`
--
ALTER TABLE `akun_instituisaun`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `akun_paroquia`
--
ALTER TABLE `akun_paroquia`
  MODIFY `id_paroquia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aula`
--
ALTER TABLE `aula`
  MODIFY `id_aula` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `instituisaun`
--
ALTER TABLE `instituisaun`
  MODIFY `id_instituisaun` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `propinas`
--
ALTER TABLE `propinas`
  MODIFY `id_propinas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `valores`
--
ALTER TABLE `valores`
  MODIFY `id_valores` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_absensi_alunos_foreign` FOREIGN KEY (`absensi_alunos`) REFERENCES `akun_alunos` (`id_alunos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `absensi_absensi_professores_foreign` FOREIGN KEY (`absensi_professores`) REFERENCES `akun_instituisaun` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `akun_familia`
--
ALTER TABLE `akun_familia`
  ADD CONSTRAINT `akun_familia_familia_role_foreign` FOREIGN KEY (`familia_role`) REFERENCES `user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `akun_instituisaun`
--
ALTER TABLE `akun_instituisaun`
  ADD CONSTRAINT `akun_instituisaun_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `akun_paroquia`
--
ALTER TABLE `akun_paroquia`
  ADD CONSTRAINT `akun_paroquia_paroquia_role_foreign` FOREIGN KEY (`paroquia_role`) REFERENCES `user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`alunos`) REFERENCES `akun_alunos` (`id_alunos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horario_ibfk_2` FOREIGN KEY (`professores`) REFERENCES `akun_instituisaun` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horario_ibfk_3` FOREIGN KEY (`aula_horario`) REFERENCES `aula` (`id_aula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instituisaun`
--
ALTER TABLE `instituisaun`
  ADD CONSTRAINT `instituisaun_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`professores`) REFERENCES `akun_instituisaun` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia_ibfk_2` FOREIGN KEY (`aula_materia`) REFERENCES `aula` (`id_aula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `propinas`
--
ALTER TABLE `propinas`
  ADD CONSTRAINT `propinas_naran_alunos_foreign` FOREIGN KEY (`naran_alunos`) REFERENCES `akun_alunos` (`id_alunos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `valores`
--
ALTER TABLE `valores`
  ADD CONSTRAINT `valores_alunos_foreign` FOREIGN KEY (`alunos`) REFERENCES `akun_alunos` (`id_alunos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valores_aula_valores_foreign` FOREIGN KEY (`aula_valores`) REFERENCES `aula` (`id_aula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valores_professores_foreign` FOREIGN KEY (`professores`) REFERENCES `akun_instituisaun` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
