-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jul-2020 às 16:52
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
(24, 'Prefeito veta lei que previu transparência para terceirizadas', 'É de que há legislação vigente prevendo transparência; vereador diz que tentará derrubar decisão', '<p>Quase um mês depois de aprovada por unanimidade na Câmara de Araraquara, lei de autoria do vereador Rafael de Angeli (PSDB), que prevê transparência nas contratações de empresas terceirizadas que prestam serviços à Prefeitura, foi vetada pelo prefeito Edinho Silva (PT). Justificativa é de que há legislação vigente prevendo mecanismos de acesso à informação dos contratos.</p>\r\n\r\n<p>O objetivo da medida é dar mais transparência em relação as contratações terceirizadas de mão de obra geral, conservação, limpeza, segurança, vigilância, transporte, informática, copeiragem, recepção, reprografia, entre outros serviços. As empresas terão que apresentar informações no prazo de 30 dias a contar da assinatura do contrato administrativo e depois mensalmente.</p>\r\n\r\n<p>Para justificar a não sanção da lei, segundo a Comunicação da Prefeitura, o entendimento é que parte das informações solicitadas constam em legislação vigente, que obrigam a administração pública disponibilizar em seus sites todos os contratos que eles celebram - incluindo-se aqueles que tenham por objeto a terceirização de serviços -, nos quais constam sócios e representantes das respectivas sociedades empresárias contratadas.</p>\r\n\r\n<blockquote>\r\n<p>\"É importante esclarecer que o veto ao projeto de lei se deu por ele infligir o direito à privacidade de seus nomes de funcionários contratados por empresas terceirizadas, que não possuem vínculo empregatício direto com o poder público. Cabe ressaltar que muitos deles trabalham em áreas extremamente sensíveis aos órgãos públicos municipais, tais como segurança, vigilância e informática, e a divulgação ostensiva dos nomes de empregados que atuam nessas áreas sensíveis poderia não só ser periclitante para a própria segurança de tais empregados, mas também para a prestadora do serviço terceirizado, ou mesmo para o órgão público contratante\", diz em nota.</p>\r\n</blockquote>\r\n\r\n<p>Outra justificativa apontada pela Prefeitura é que a proposta possui alta complexidade de execução e teria custos altos com fiscalização, o que consideram desnecessários, uma vez que quando faz a contratação de um serviço terceirizado, deve deslocar um de seus agentes para verificar a execução do que foi contratado e verificar a regularidade.</p>\r\n\r\n<blockquote>\r\n<p>\"É importante ressaltar que o atual governo preza pela transparência e o controle sobre as ações dos órgãos públicos do Município, tendo tido iniciativas pioneiras como a reformulação da Controladoria Geral do Município e do Sistema Municipal de Controle Interno, a instituição e o fortalecimento da Ouvidoria Geral do Município e a implementação da Comissão de Ética Pública do Poder Executivo Municipal de Araraquara. Esses três órgãos juntos foram o \"Sistema Municipal de Governança Pública\" que tem como objetivo fortalecer a transparência e o controle interno no Município\", finaliza.</p>\r\n</blockquote>\r\n\r\n<p>Já o autor da medida - aprovada por unanimidade na Casa de Leis -, considera que a justificativa apresentada pelo prefeito é um \"malabarismo argumentativo\". Com o veto, a proposta retorna ao Legislativo para que os vereadores decidam se mantém, ou derrubam.</p>\r\n\r\n<p>A próxima sessão ordinária da Câmara está marcada para 14 de julho, quando termina o período de dez dias de recesso parlamentar. Mas, apesar de não ter encontros semanais em plenários, os vereadores seguem com atendimentos e encaminhamento de demandas ao Executivo.</p>\r\n', 'uploads/images/2020/07/decotelli-1593999483.jpg', 14, 1, '2020-07-08', '2020-07-06 05:52:17', '2020-07-07 01:19:34'),
(25, 'Veículo utilizado Shopping é encontrado queimado', 'Dois guardas civis municipais que estavam de folga pedalando encontraram o veículo em estrada de terra', '<p>chama no beat do spike</p>\r\n', 'uploads/images/2020/07/maha-mamo-2-1594066453.jpg', 16, 2, '2020-07-06', '2020-07-07 01:14:13', '2020-07-07 01:15:42'),
(26, 'Beach mata minha vibe', 'faço dinheiro igual ICe', 'Hype', 'uploads/images/2020/07/download.jpg', 14, 2, '2020-07-06', '2020-07-07 01:17:37', '2020-07-07 01:17:37');

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
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
