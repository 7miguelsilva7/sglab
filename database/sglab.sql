-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 28-Out-2016 às 22:30
-- Versão do servidor: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sglab`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolas`
--

CREATE TABLE `escolas` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distrito` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logradouro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sigla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `possui_internet_escola` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_internet_escola` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_escola` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `possui_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `possui_analista` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_sala` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pregao1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pregao2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pregao3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pregao4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `possui_internet_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_internet_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lab_montado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qt_computadores_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qt_monitores_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_condicionado_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `impressora_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qt_notebook_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roteador_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `switch_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qt_cadeiras_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siem_id` int(10) UNSIGNED DEFAULT NULL,
  `pessoa_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `escolas`
--

INSERT INTO `escolas` (`id`, `usuario`, `inep`, `cep`, `distrito`, `bairro`, `logradouro`, `numero`, `complemento`, `fone`, `email`, `cel1`, `cel2`, `sigla`, `possui_internet_escola`, `tipo_internet_escola`, `status_escola`, `possui_lab`, `possui_analista`, `tipo_sala`, `pregao1`, `pregao2`, `pregao3`, `pregao4`, `possui_internet_lab`, `tipo_internet_lab`, `lab_montado`, `qt_computadores_lab`, `qt_monitores_lab`, `status_lab`, `ar_condicionado_lab`, `impressora_lab`, `qt_notebook_lab`, `roteador_lab`, `switch_lab`, `qt_cadeiras_lab`, `siem_id`, `pessoa_id`, `created_at`, `updated_at`) VALUES
(3, 'Admin', '29401610', '48901040', 'SEDE', 'Piranga', '', 'SN', '', '', '7miguelsilva7@gmail.com', '', '', '', 'SIM', 'PROJETO BANDA LARGA NAS ESCOLAS', 'ATIVO', 'SIM', 'NÃO', 'NÃO POSSUI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 1, '2016-10-28 16:45:26', '2016-10-28 16:45:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vinculo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_funcionario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siem_id` int(10) UNSIGNED DEFAULT NULL,
  `ocupacao_id` int(10) UNSIGNED DEFAULT NULL,
  `pessoa_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `usuario`, `vinculo`, `status_funcionario`, `siem_id`, `ocupacao_id`, `pessoa_id`, `created_at`, `updated_at`) VALUES
(1, '', '', '', 1, 1, 1, '2016-10-29 01:41:05', '2016-10-29 01:41:05'),
(2, '', '', '', 1, 1, 2, '2016-10-29 01:41:16', '2016-10-29 01:41:16'),
(3, '', '', '', 1, 1, 3, '2016-10-29 01:41:22', '2016-10-29 01:41:22'),
(4, '', '', '', 1, 1, 4, '2016-10-29 01:41:31', '2016-10-29 01:41:31'),
(5, '', '', '', 1, 1, 5, '2016-10-29 01:41:38', '2016-10-29 01:41:38'),
(7, '', '', '', 1, 1, 7, '2016-10-29 01:48:00', '2016-10-29 01:48:00'),
(8, '', '', '', 1, 1, 7, '2016-10-29 01:48:05', '2016-10-29 01:48:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_10_31_162633_scaffoldinterfaces', 1),
(4, '2016_10_28_012155_create_permission_tables', 1),
(5, '2016_10_28_015607_siems', 2),
(6, '2016_10_28_020211_pessoas', 2),
(7, '2016_10_28_021040_escolas', 3),
(8, '2016_10_28_021136_ocupacaos', 4),
(11, '2016_10_28_104008_funcionarios', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocupacaos`
--

CREATE TABLE `ocupacaos` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `ocupacaos`
--

INSERT INTO `ocupacaos` (`id`, `usuario`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'ANALISTA EM EDUCAÇÃO', '2016-10-28 17:08:42', '2016-10-28 17:08:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distrito` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logradouro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expedicao_rg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naturalidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nascionalidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `escolaridade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome_mae` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome_pai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `usuario`, `nome`, `cep`, `distrito`, `bairro`, `logradouro`, `numero`, `complemento`, `fone`, `cel1`, `cel2`, `email`, `cpf`, `rg`, `expedicao_rg`, `naturalidade`, `nascionalidade`, `nis`, `escolaridade`, `data_nascimento`, `nome_mae`, `nome_pai`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Miguel dos Santos Silva', '48901040', 'SEDE', 'Piranga', 'Rua Pedro Pacheco de Castro, Casa', '89', 'Casa A', '74 3612 9840', '74988116127', '', '7miguelsilva7@gmail.com', '', '', '', 'Sento-sé', 'Brasileiro', '', 'Superior', '', 'Gertrudes Antônia dos Santos Silva', 'Manoel Pacheco da Silva Santos', '2016-10-28 16:40:03', '2016-10-29 01:04:18'),
(2, 'Admin', 'NÃO POSSUI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-28 16:45:18', '2016-10-28 16:45:18'),
(3, 'Admin', 'Marcos José Chagas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-29 01:22:28', '2016-10-29 01:22:28'),
(4, 'Admin', 'Mariana Athayde Lira e Silva', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-29 01:22:53', '2016-10-29 01:22:53'),
(5, 'Admin', 'Etienne Alves Santana dos Santos', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-29 01:23:44', '2016-10-29 01:23:44'),
(7, 'Admin', 'Karen Tayla', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-29 01:24:30', '2016-10-29 01:24:30'),
(8, 'Admin', 'Neila Gomes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-29 01:24:40', '2016-10-29 01:24:40'),
(9, 'Admin', 'Thiago Leal', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-29 01:34:38', '2016-10-29 01:34:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `scaffoldinterfaces`
--

CREATE TABLE `scaffoldinterfaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `package` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `views` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tablename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `scaffoldinterfaces`
--

INSERT INTO `scaffoldinterfaces` (`id`, `package`, `migration`, `model`, `controller`, `views`, `tablename`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', '/var/www/html/sglab/database/migrations/2016_10_28_015607_siems.php', '/var/www/html/sglab/app/Siem.php', '/var/www/html/sglab/app/Http/Controllers/SiemController.php', '/var/www/html/sglab/resources/views/siem', 'siems', '2016-10-28 04:56:07', '2016-10-28 04:56:07'),
(2, 'Laravel', '/var/www/html/sglab/database/migrations/2016_10_28_020211_pessoas.php', '/var/www/html/sglab/app/Pessoa.php', '/var/www/html/sglab/app/Http/Controllers/PessoaController.php', '/var/www/html/sglab/resources/views/pessoa', 'pessoas', '2016-10-28 05:02:11', '2016-10-28 05:02:11'),
(3, 'Laravel', '/var/www/html/sglab/database/migrations/2016_10_28_021040_escolas.php', '/var/www/html/sglab/app/Escola.php', '/var/www/html/sglab/app/Http/Controllers/EscolaController.php', '/var/www/html/sglab/resources/views/escola', 'escolas', '2016-10-28 05:10:40', '2016-10-28 05:10:40'),
(4, 'Laravel', '/var/www/html/sglab/database/migrations/2016_10_28_021136_ocupacaos.php', '/var/www/html/sglab/app/Ocupacao.php', '/var/www/html/sglab/app/Http/Controllers/OcupacaoController.php', '/var/www/html/sglab/resources/views/ocupacao', 'ocupacaos', '2016-10-28 05:11:36', '2016-10-28 05:11:36'),
(6, 'Laravel', '/var/www/html/sglab/database/migrations/2016_10_28_104008_funcionarios.php', '/var/www/html/sglab/app/Funcionario.php', '/var/www/html/sglab/app/Http/Controllers/FuncionarioController.php', '/var/www/html/sglab/resources/views/funcionario', 'funcionarios', '2016-10-29 01:40:08', '2016-10-29 01:40:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `siems`
--

CREATE TABLE `siems` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_escola` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cod_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `siems`
--

INSERT INTO `siems` (`id`, `usuario`, `siem`, `nome`, `tipo_escola`, `cod_ext`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '213', 'EDUCANDÁRIO JOÃO XXIIII', 'ESCOLA', '', '2016-10-28 16:23:37', '2016-10-28 17:18:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '7miguelsilva7@gmail.com', '$2y$10$22TO8sviVwfir3AfCH67qe36jCSNi/RSTgsU/8Vhh2p3ygAQe7c..', 'W2oDLqfUp6UoxQyJE0pa3Wda8PuWHV8PYN772qhbCoYAYv2CzJQUWTkOkh9U', '2016-10-28 04:47:03', '2016-10-28 16:16:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_has_permissions`
--

CREATE TABLE `user_has_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_has_roles`
--

CREATE TABLE `user_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `escolas_siem_id_foreign` (`siem_id`),
  ADD KEY `escolas_pessoa_id_foreign` (`pessoa_id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `funcionarios_siem_id_foreign` (`siem_id`),
  ADD KEY `funcionarios_ocupacao_id_foreign` (`ocupacao_id`),
  ADD KEY `funcionarios_pessoa_id_foreign` (`pessoa_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocupacaos`
--
ALTER TABLE `ocupacaos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `scaffoldinterfaces`
--
ALTER TABLE `scaffoldinterfaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siems`
--
ALTER TABLE `siems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `user_has_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `user_has_roles_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `escolas`
--
ALTER TABLE `escolas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `ocupacaos`
--
ALTER TABLE `ocupacaos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scaffoldinterfaces`
--
ALTER TABLE `scaffoldinterfaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `siems`
--
ALTER TABLE `siems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `escolas`
--
ALTER TABLE `escolas`
  ADD CONSTRAINT `escolas_pessoa_id_foreign` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `escolas_siem_id_foreign` FOREIGN KEY (`siem_id`) REFERENCES `siems` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_ocupacao_id_foreign` FOREIGN KEY (`ocupacao_id`) REFERENCES `ocupacaos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `funcionarios_pessoa_id_foreign` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `funcionarios_siem_id_foreign` FOREIGN KEY (`siem_id`) REFERENCES `siems` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
