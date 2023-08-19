-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Aug 19, 2023 at 02:37 PM
-- Server version: 10.6.12-MariaDB-1:10.6.12+maria~ubu2004-log
-- PHP Version: 8.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_joabtorres`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'WEBSITE', '2023-08-18 18:50:11', NULL),
(2, 'SISTEMA', '2023-08-18 18:50:11', NULL),
(3, 'APLICATIVO', '2023-08-18 18:50:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `link_demo` text DEFAULT NULL,
  `link_github` text DEFAULT NULL,
  `link_youtube` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category_id`, `title`, `image`, `description`, `tags`, `link_demo`, `link_github`, `link_youtube`, `created_at`, `updated_at`) VALUES
(1, 1, 'SEMMA CASTANHAL', 'images/2023/website-semma.png', 'Desenvolvi o website da Secretária Municipal de Meio Ambiente de Castanhal em janeiro de 2023, com objetivo de ajudar na divulgação de informações públicas da secretaria para a comunidade. <br/> Este website conta um painel administrativo para gerenciar as informações de forma dinâmica ', 'HTML;CSS;JavaScript;Boostrap;JQuery;PHP;MVC;MySQL', 'https://www.semmacastanhal.com.br/', '', '', '2023-08-18 19:28:12', '2023-08-19 12:47:08'),
(2, 2, 'SIGAPA', 'images/2023/sistema-sigapa.png', 'O projeto SIGAPA, foi desenvolvido como trabalho de dissertação de Mestrado, sem fins lucrativos, para a Associação de Pequenos Agricultores do Assentamento 15 de Agosto - APARAA. O projeto é um clone do SIGCOOT, sistema este desenvolvimento por mim como Trabalho de Conclusão de Curso na Graduação. <br />\r\nUsuário: sigapa<br />\r\nSenha: sigapa<br />', 'HTML;CSS;JavaScript;Boostrap;JQuery;PHP;MVC;MySQL', 'https://sigapa.joabtorres.com.br', 'https://github.com/joabtorres/sigapa', NULL, '2023-08-18 19:28:12', NULL),
(3, 1, '\r\n\r\nFaculdade Cavanis', 'images/2023/website-cavanis.png', 'Este projeto foi desenvolvido em 2019, com apoio da Coordenação de Informática da faculdade, no qual eles ajudaram com o levantamento de requisitos para a aplicação. <br/>\r\nO site conta com um painel administrativo para publicação de notícias, mudança de banners na página inicial.', 'HTML;CSS;JavaScript;Bootstrap;PHP;MySQL', 'https://www.cavanis.edu.br/', NULL, NULL, '2023-08-19 16:37:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
