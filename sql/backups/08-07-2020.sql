-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jul-2020 às 15:31
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `globaltv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `branches`
--

INSERT INTO `branches` (`branch_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Américo Brasiliense', '2020-07-03 23:40:37', '2020-07-03 23:40:37'),
(2, 'Ribeirão Bonito', '2020-07-05 00:36:27', '2020-07-05 00:36:27'),
(3, 'São Carlos', '2020-07-05 00:36:36', '2020-07-05 00:36:36'),
(4, 'Araraquara', '2020-07-06 02:39:25', '2020-07-06 02:39:25'),
(5, 'Cacondes', '2020-07-06 02:40:13', '2020-07-06 02:40:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `description` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`cat_id`, `description`, `created_at`, `updated_at`) VALUES
(13, 'Política', '2020-07-06 03:46:18', '2020-07-06 03:46:18'),
(14, 'Saúde', '2020-07-06 03:46:27', '2020-07-06 03:46:27'),
(16, 'Dia-a-dia', '2020-07-06 03:46:45', '2020-07-06 03:46:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `content` mediumtext NOT NULL,
  `thumb_url` text NOT NULL,
  `category` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`news_id`, `title`, `caption`, `content`, `thumb_url`, `category`, `branch`, `date`, `created_at`, `updated_at`) VALUES
(24, 'Prefeito veta lei que previu transparência para terceirizadas', 'É de que há legislação vigente prevendo transparência; vereador diz que tentará derrubar decisão', '<p>Quase um m&ecirc;s depois de aprovada por unanimidade na C&acirc;mara de Araraquara, lei de autoria do vereador Rafael de Angeli (PSDB), que prev&ecirc; transpar&ecirc;ncia nas contrata&ccedil;&otilde;es de empresas terceirizadas que prestam servi&ccedil;os &agrave; Prefeitura, foi vetada pelo prefeito Edinho Silva (PT). Justificativa &eacute; de que h&aacute; legisla&ccedil;&atilde;o vigente prevendo mecanismos de acesso &agrave; informa&ccedil;&atilde;o dos contratos.</p>\r\n\r\n<p>O objetivo da medida &eacute; dar mais transpar&ecirc;ncia em rela&ccedil;&atilde;o as contrata&ccedil;&otilde;es terceirizadas de m&atilde;o de obra geral, conserva&ccedil;&atilde;o, limpeza, seguran&ccedil;a, vigil&acirc;ncia, transporte, inform&aacute;tica, copeiragem, recep&ccedil;&atilde;o, reprografia, entre outros servi&ccedil;os. As empresas ter&atilde;o que apresentar informa&ccedil;&otilde;es no prazo de 30 dias a contar da assinatura do contrato administrativo e depois mensalmente.</p>\r\n\r\n<p>Para justificar a n&atilde;o san&ccedil;&atilde;o da lei, segundo a Comunica&ccedil;&atilde;o da Prefeitura, o entendimento &eacute; que parte das informa&ccedil;&otilde;es solicitadas constam em legisla&ccedil;&atilde;o vigente, que obrigam a administra&ccedil;&atilde;o p&uacute;blica disponibilizar em seus sites todos os contratos que eles celebram - incluindo-se aqueles que tenham por objeto a terceiriza&ccedil;&atilde;o de servi&ccedil;os -, nos quais constam s&oacute;cios e representantes das respectivas sociedades empres&aacute;rias contratadas.</p>\r\n\r\n<blockquote>\r\n<p>&quot;&Eacute; importante esclarecer que o veto ao projeto de lei se deu por ele infligir o direito &agrave; privacidade de seus nomes de funcion&aacute;rios contratados por empresas terceirizadas, que n&atilde;o possuem v&iacute;nculo empregat&iacute;cio direto com o poder p&uacute;blico. Cabe ressaltar que muitos deles trabalham em &aacute;reas extremamente sens&iacute;veis aos &oacute;rg&atilde;os p&uacute;blicos municipais, tais como seguran&ccedil;a, vigil&acirc;ncia e inform&aacute;tica, e a divulga&ccedil;&atilde;o ostensiva dos nomes de empregados que atuam nessas &aacute;reas sens&iacute;veis poderia n&atilde;o s&oacute; ser periclitante para a pr&oacute;pria seguran&ccedil;a de tais empregados, mas tamb&eacute;m para a prestadora do servi&ccedil;o terceirizado, ou mesmo para o &oacute;rg&atilde;o p&uacute;blico contratante&quot;, diz em nota.</p>\r\n</blockquote>\r\n\r\n<p>Outra justificativa apontada pela Prefeitura &eacute; que a proposta possui alta complexidade de execu&ccedil;&atilde;o e teria custos altos com fiscaliza&ccedil;&atilde;o, o que consideram desnecess&aacute;rios, uma vez que quando faz a contrata&ccedil;&atilde;o de um servi&ccedil;o terceirizado, deve deslocar um de seus agentes para verificar a execu&ccedil;&atilde;o do que foi contratado e verificar a regularidade.</p>\r\n\r\n<blockquote>\r\n<p>&quot;&Eacute; importante ressaltar que o atual governo preza pela transpar&ecirc;ncia e o controle sobre as a&ccedil;&otilde;es dos &oacute;rg&atilde;os p&uacute;blicos do Munic&iacute;pio, tendo tido iniciativas pioneiras como a reformula&ccedil;&atilde;o da Controladoria Geral do Munic&iacute;pio e do Sistema Municipal de Controle Interno, a institui&ccedil;&atilde;o e o fortalecimento da Ouvidoria Geral do Munic&iacute;pio e a implementa&ccedil;&atilde;o da Comiss&atilde;o de &Eacute;tica P&uacute;blica do Poder Executivo Municipal de Araraquara. Esses tr&ecirc;s &oacute;rg&atilde;os juntos foram o &quot;Sistema Municipal de Governan&ccedil;a P&uacute;blica&quot; que tem como objetivo fortalecer a transpar&ecirc;ncia e o controle interno no Munic&iacute;pio&quot;, finaliza.</p>\r\n</blockquote>\r\n\r\n<p>J&aacute; o autor da medida - aprovada por unanimidade na Casa de Leis -, considera que a justificativa apresentada pelo prefeito &eacute; um &quot;malabarismo argumentativo&quot;. Com o veto, a proposta retorna ao Legislativo para que os vereadores decidam se mant&eacute;m, ou derrubam.</p>\r\n\r\n<p>A pr&oacute;xima sess&atilde;o ordin&aacute;ria da C&acirc;mara est&aacute; marcada para 14 de julho, quando termina o per&iacute;odo de dez dias de recesso parlamentar. Mas, apesar de n&atilde;o ter encontros semanais em plen&aacute;rios, os vereadores seguem com atendimentos e encaminhamento de demandas ao Executivo.</p>\r\n', 'uploads/images/2020/07/decotelli-1593999483.jpg', 14, 1, '2020-07-08', '2020-07-06 05:52:17', '2020-07-06 06:38:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nickname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `passwd` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `nickname`, `email`, `passwd`, `created_at`, `updated_at`) VALUES
(34, 'Gabriel', 'gabriel@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-06-27 08:03:00', '2020-06-27 08:03:00'),
(35, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '2020-07-03 23:27:20', '2020-07-03 23:27:20');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `description` (`description`);

--
-- Índices para tabela `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `category` (`category`),
  ADD KEY `branch` (`branch`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`branch`) REFERENCES `branches` (`branch_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
