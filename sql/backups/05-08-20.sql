-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Ago-2020 às 03:51
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
-- Estrutura da tabela `ads`
--

CREATE TABLE `ads` (
  `ad_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `thumb` text NOT NULL,
  `link` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aovivo`
--

CREATE TABLE `aovivo` (
  `aovivo_id` int(255) NOT NULL,
  `link` text NOT NULL,
  `tv_id` int(255) NOT NULL,
  `status` text NOT NULL,
  `titulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aovivo`
--

INSERT INTO `aovivo` (`aovivo_id`, `link`, `tv_id`, `status`, `titulo`) VALUES
(4, 'https://www.youtube.com/?hl=pt&gl=BR', 3, 'Ao vivo', 'The box - Ao vivo');

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
(1, 'Américo Brasiliense', '2020-07-03 23:40:37', '2020-07-08 22:44:42'),
(2, 'Ribeirão Bonito', '2020-07-05 00:36:27', '2020-07-05 00:36:27'),
(3, 'São Carlos', '2020-07-05 00:36:36', '2020-07-05 00:36:36'),
(4, 'Araraquara', '2020-07-06 02:39:25', '2020-07-06 02:39:25'),
(8, 'Cacondes', '2020-07-08 20:44:16', '2020-07-08 20:57:14'),
(9, 'Região', '2020-07-16 20:30:28', '2020-07-16 20:30:28');

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
(13, 'Política', '2020-07-06 03:46:18', '2020-07-08 22:45:49'),
(17, 'Dia-a-Dia', '2020-07-08 21:07:38', '2020-07-08 21:09:31'),
(18, 'Saúde', '2020-07-08 21:07:49', '2020-07-08 21:07:49'),
(19, 'COVID-19', '2020-07-16 20:27:27', '2020-07-16 20:27:27'),
(20, 'Economia', '2020-07-16 20:34:20', '2020-07-16 20:34:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cvs`
--

CREATE TABLE `cvs` (
  `cv_id` int(11) NOT NULL,
  `cv_link` text NOT NULL,
  `tv_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lives`
--

CREATE TABLE `lives` (
  `id_lives` int(255) NOT NULL,
  `url` text NOT NULL,
  `titulo` text NOT NULL,
  `id_tv` int(255) NOT NULL,
  `data_post` date NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `lives`
--

INSERT INTO `lives` (`id_lives`, `url`, `titulo`, `id_tv`, `data_post`, `status`, `created_at`, `updated_at`) VALUES
(10, 'uploads/lives/2020/08/thebox-1596567644.mp3', 'The Box', 3, '2020-08-04', 'Gravada', '2020-08-05 00:00:44', '2020-08-05 00:00:44');

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
(30, 'Araraquara, São Carlos e região têm 115 interrupções de energia por queimadas, aponta CPFL', 'Ocorrências foram registradas pela distribuidora de 1º de janeiro a 15 de junho deste ano.', '<p>Um levantamento feito pelo centro de opera&ccedil;&otilde;es da CPFL Paulista e Santa Cruz mostra que em Araraquara, Am&eacute;rico Brasiliense, Rinc&atilde;o e S&atilde;o Carlos (SP) foram contabilizadas <strong>99 queimadas respons&aacute;veis por interrup&ccedil;&otilde;es no fornecimento de energia</strong>.</p>\r\n\r\n<p>Os dados foram analisados entre 1&ordm; de janeiro a 15 de junho deste ano, mesmo per&iacute;odo em que Caconde, Casa Branca, Mococa, S&atilde;o Jos&eacute; do Rio Pardo e S&atilde;o Sebasti&atilde;o da Grama (SP) registraram <strong>16 inc&ecirc;ndios que afetaram a rede el&eacute;trica</strong>.</p>\r\n\r\n<p>De acordo com o estudo da distribuidora, entre janeiro e junho de 2020, os <strong>nove munic&iacute;pios da regi&atilde;o de cobertura do</strong> <strong>G1 S&atilde;o Carlos e Araraquara somaram 115 casos</strong>. Em 2019, as queimadas resultaram em 284 ocorr&ecirc;ncias de interrup&ccedil;&atilde;o no fornecimento de energia, 19% a mais que as 238 de 2018.</p>\r\n\r\n<p>Considerando o impacto do assunto para a popula&ccedil;&atilde;o, o grupo CPFL Energia, por meio da campanha Guardi&atilde;o da Vida, incentiva a discuss&atilde;o sobre o tema para promover uma reflex&atilde;o sobre as atitudes que poderiam ser evitadas, reduzindo transtornos e at&eacute; salvando vidas.</p>\r\n\r\n<p>A pouca umidade, a vegeta&ccedil;&atilde;o baixa e os ventos fortes s&atilde;o fatores que podem provocar inc&ecirc;ndios na estiagem. Al&eacute;m deles, as queimadas mal controladas para atividades agr&iacute;colas tamb&eacute;m podem colocar em risco o fornecimento de energia.</p>\r\n\r\n<p>Isso porque o calor do fogo, mesmo quando n&atilde;o atinge diretamente os cabos el&eacute;tricos, junto com a fuligem levada pelo vento e grandes volumes de fuma&ccedil;a, pode provocar curtos-circuitos ou rompimento de cabos que interrompem o abastecimento de cidades inteiras.</p>\r\n', 'uploads/images/2020/07/queimada-valinhos.jpg', 17, 3, '2020-07-16', '2020-07-16 20:11:49', '2020-07-16 20:35:13'),
(31, 'Rio Claro e outras 10 cidades da região vão para fase laranja e podem reabrir com restrições', 'Santa Rita do Passa Quatro (SP) é o único município que já estava classificada na pior fase do plano e permaneceu na mesma situação. Município tem decreto de reabertura com regras.', '<p>Rio Claro (SP) e outras dez cidades da &aacute;rea de cobertura da EPTV Central, afiliada da TV Globo, avan&ccedil;aram para a <strong>fase laranja</strong> na 6&ordf; atualiza&ccedil;&atilde;o do Plano S&atilde;o Paulo, anunciada nesta sexta-feira (10) pelo governo do estado.</p>\r\n\r\n<p>A nova fase vale a partir de quarta-feira (15) at&eacute; 30 de julho. Nesta etapa controle, as cidades poder&atilde;o flexibilizar <strong>a abertura de concession&aacute;rias, imobili&aacute;rias, escrit&oacute;rios, com&eacute;rcio e shopping com restri&ccedil;&otilde;es </strong><em>(veja abaixo).</em></p>\r\n\r\n<p>  </p>\r\n\r\n<p>Al&eacute;m dos 11 munic&iacute;pios, os Departamentos Regionais de Sa&uacute;de (DRS) de Araraquara e S&atilde;o Jo&atilde;o da Boa Vista tamb&eacute;m <strong>continuam na fase laranja</strong>.</p>\r\n\r\n<p>A cidade de Santa Rita do Passa Quatro, que j&aacute; estava <strong>classificada na pior fase do plano</strong>, permaneceu na mesma situa&ccedil;&atilde;o. Entretanto, o munic&iacute;pio segue um decreto municipal que flexibiliza aberturas com regras.</p>\r\n\r\n<p>O Plano S&atilde;o Paulo, que chega a sua sexta etapa, foi criado para <strong>classificar as regi&otilde;es em fases por cor, de acordo com os crit&eacute;rios</strong> definidos pela secretaria estadual da Sa&uacute;de e pelo Comit&ecirc; de Conting&ecirc;ncia para Coronav&iacute;rus. Entenda:</p>\r\n\r\n<ul>\r\n	<li>Fase 1, <strong>vermelha</strong>: alerta m&aacute;ximo, funcionamento permitido somente aos servi&ccedil;os essenciais</li>\r\n	<li>Fase 2, <strong>laranja</strong>: controle, possibilidade de aberturas com restri&ccedil;&otilde;es</li>\r\n	<li>Fase 3, <strong>amarela</strong>: abertura de um n&uacute;mero maior de setores</li>\r\n	<li>Fase 4, <strong>verde</strong>: abertura de um n&uacute;mero maior de setores em rela&ccedil;&atilde;o &agrave; fase 3</li>\r\n	<li>Fase 5, <strong>azul</strong>: &quot;normal controlado&quot; - todos os setores em funcionamento, mas mantendo medidas de distanciamento e higiene.</li>\r\n</ul>\r\n', 'uploads/images/2020/07/mapa-ve.jpg', 19, 9, '2020-07-16', '2020-07-16 20:29:51', '2020-07-16 20:30:42'),
(32, 'Servidora pública, filha do prefeito de Américo Brasiliense saca R$ 1,2 mil do auxílio emergencial', 'Em nota, Mirian Dayse Pano disse que se arrependeu e que irá devolver o valor.', '<p>Servidora p&uacute;blica desde 2012, a filha do prefeito de Am&eacute;rico Brasiliense (SP) <strong>recebeu R$ 1,2 mil do aux&iacute;lio emergencial</strong>. O <strong>saque contraria as regras do programa</strong>, j&aacute; que Mirian Dayse Pano &eacute; funcion&aacute;ria da administra&ccedil;&atilde;o municipal.</p>\r\n\r\n<p>Por meio de nota divulgada &agrave; imprensa, Mirian disse que <strong>se arrependeu e que ir&aacute; devolver o valor</strong>.</p>\r\n\r\n<p>O prefeito de Am&eacute;rico Brasiliense, Dirceu Br&aacute;s Pano (PSDB), afirmou que a atitude da filha n&atilde;o tem rela&ccedil;&atilde;o com a administra&ccedil;&atilde;o p&uacute;blica municipal e que <strong>ela deve arcar com as consequ&ecirc;ncias</strong>.</p>\r\n\r\n<p>Em S&atilde;o Paulo, mais de 3,3 mil funcion&aacute;rios p&uacute;blicos da prefeitura receberam aux&iacute;lio emergencial irregularmente. No estado, quase 8 mil servidores sacaram o dinheiro indevidamente, segundo o Tribunal de Contas do estado de S&atilde;o Paulo (TCE-SP).</p>\r\n\r\n<p>Casada e m&atilde;e de dois filhos, Mirian tem 32 anos e trabalha como auxiliar de tributa&ccedil;&atilde;o, fun&ccedil;&atilde;o pela qual <strong>recebe R$ 2,5 mil de sal&aacute;rio</strong>.</p>\r\n\r\n<p>O <strong>saque do aux&iacute;lio ocorreu em abril</strong>, segundo consta na p&aacute;gina do Portal da Transpar&ecirc;ncia.</p>\r\n\r\n<p>Mirian afirmou que o saque foi feito no momento em que o marido estava desempregado.</p>\r\n', 'uploads/images/2020/07/lancamento-do-aplicativo-caixa-auxilio-emergencial-0407201847.jpg', 20, 4, '2020-07-16', '2020-07-16 20:33:57', '2020-07-16 20:34:36'),
(33, 'Em 4 meses, projeto aumenta em 400% produção de marmitas para pessoas em vulnerabilidade', '15 voluntários de Américo Brasiliense e Araraquara (SP) distribuem alimentos para pessoas em situação de rua, famílias carentes e estudantes com dificuldades.', '<p>Para um grupo de volunt&aacute;rios de  Am&eacute;rico Brasiliense  e  Araraquara<a href=\"https://g1.globo.com/sp/sao-carlos-regiao/cidade/araraquara/\">  </a>(SP), as quintas-feiras t&ecirc;m um sabor especial desde que eles come&ccedil;aram a produzir e e<strong>ntregar marmitas para pessoas em situa&ccedil;&atilde;o de vulnerabilidade social</strong>.</p>\r\n\r\n<p>O projeto &quot;O Amor &eacute; Org&acirc;nico&quot; come&ccedil;ou em mar&ccedil;o deste ano com a distribui&ccedil;&atilde;o semanal de  <strong>50 kits de alimenta&ccedil;&atilde;o para caminhoneiros</strong>, que estavam sem postos de apoio devido &agrave; pandemia do novo coronav&iacute;rus, e pessoas em situa&ccedil;&atilde;o de rua.</p>\r\n\r\n<p>Segundo uma das fundadoras da iniciativa, Mariana Marconato, as doa&ccedil;&otilde;es aumentaram muito em quatro meses, o que possibilitou um crescimento de<strong>  400% na produ&ccedil;&atilde;o das marmitas</strong>. Agora, eles ajudam  <strong>mais de 250 pessoas em situa&ccedil;&atilde;o de rua</strong>, al&eacute;m de fam&iacute;lias carentes e estudantes com dificuldades.</p>\r\n\r\n<p>A cria&ccedil;&atilde;o do projeto social foi colaborativa, j&aacute; que Luana de Oliveira e Mariana Marconato ofereceram o espa&ccedil;o para a produ&ccedil;&atilde;o das comidas e Milena Baccarin doou os alimentos org&acirc;nicos que cultiva. Desde ent&atilde;o, a  <strong>rede de solidariedade s&oacute; aumentou  </strong>com o apoio de outros moradores e produtores da regi&atilde;o.</p>\r\n\r\n<p>O projeto  <strong>re&uacute;ne atualmente 15 volunt&aacute;rios fixos</strong>  e consegue se manter exclusivamente com doa&ccedil;&otilde;es de insumos, embalagens e dinheiro. Agora no inverno, eles tamb&eacute;m esperam receber roupas de frio, meias, cobertores e outros itens que possam aquecer as pessoas atendidas.</p>\r\n', 'uploads/images/2020/07/whatsapp-image-2020-06-30-at-20-19-10.jpg', 20, 2, '2020-07-16', '2020-07-16 20:38:42', '2020-07-16 20:38:42'),
(34, 'Araraquara e outras 6 cidades da região recebem 45 ventiladores pulmonares do governo estadual', 'Equipamentos foram distribuídos conforme demandas e permitem a ampliação de UTIs para atendimento de pacientes contaminados pelo coronavírus que estão em estado grave.', '<p>O governo do estado de S&atilde;o Paulo entregou, nesta segunda-feira (15),  <strong>45 ventiladores pulmonares para fortalecimento da rede hospitalar  </strong>em  Araraquara,  S&atilde;o Carlos  e  Am&eacute;rico Brasiliense,  S&atilde;o Jo&atilde;o da Boa Vista,  Vargem Grande do Sul,  S&atilde;o Jos&eacute; do Rio Pardo  e  Mococa  (SP).</p>\r\n\r\n<p>Os novos equipamentos permitem a amplia&ccedil;&atilde;o de Unidades de Terapia Intensiva (UTIs) para garantir  <strong>atendimento a pacientes contaminados pelo coronav&iacute;rus</strong>  que est&atilde;o em estado grave.</p>\r\n\r\n<p>Segundo o governo, os equipamentos foram entregues em todo o estado com  <strong>escolta feita pelo 2&ordm; e 3&ordf; Batalh&otilde;es de Choque da Pol&iacute;cia Militar</strong>.</p>\r\n\r\n<p>Para a regi&atilde;o de Araraquara, foram enviados 18 aparelhos, sendo 10 para a prefeitura de Araraquara, seis para S&atilde;o Carlos e dois para Am&eacute;rico Brasiliense.</p>\r\n\r\n<p>J&aacute; na regi&atilde;o de S&atilde;o Jo&atilde;o da Boa Vista s&atilde;o cinco para a Santa Casa de Miseric&oacute;rdia Dona Carolina, dois para a Prefeitura de Vargem Grande do Sul, 10 para o Hospital S&atilde;o Vicente em S&atilde;o Jos&eacute; do Rio Pardo e 10 para a Santa Casa de Mococa.</p>\r\n\r\n<p>De acordo com o an&uacute;ncio feito pelo governador Jo&atilde;o Doria , nesta segunda-feira (15), o governo estadual j&aacute; recebeu, desde o in&iacute;cio da pandemia do coronav&iacute;rus, um t<strong>otal de 2.360 respiradores</strong>  para ampliar o atendimento &agrave;s pessoas contaminadas.</p>\r\n\r\n<p>A distribui&ccedil;&atilde;o &eacute; t&eacute;cnica e f<strong>eita para locais com maior demanda de interna&ccedil;&otilde;es por Covid-19</strong>  e estrutura para novos leitos, permitindo amplia&ccedil;&atilde;o da capacidade de atendimento da rede p&uacute;blica de sa&uacute;de.</p>\r\n\r\n<p>Segundo o governo estadual, o n&uacute;mero de leitos de terapia intensiva abertos foi dobrado desde o in&iacute;cio da pandemia,  <strong>ultrapassando 7 mil vagas para atendimento a pacientes graves</strong>. Com a chegada de mais respiradores, a rede deve ter ainda mais amplia&ccedil;&atilde;o.</p>\r\n', 'uploads/images/2020/07/foto05-dez-respiradores-eletronicos-enviados-pelo-governo-do-estado-chegam-a-araraquara-15jun20-celso-luis-gallo.jpg', 19, 9, '2020-07-15', '2020-07-16 20:43:43', '2020-07-16 20:43:43');

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
(34, 'Gabriel', 'gabriel@gmail.com', '7363a0d0604902af7b70b271a0b96480', '2020-06-27 08:03:00', '2020-07-08 22:42:57'),
(35, 'admin', 'admin@admin.com', 'e95a14fd5d8be4cbdbdcf559e98afee5', '2020-07-03 23:27:20', '2020-07-03 23:27:20');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aovivo`
--
ALTER TABLE `aovivo`
  ADD PRIMARY KEY (`aovivo_id`),
  ADD KEY `tv_id` (`tv_id`);

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
-- Índices para tabela `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`cv_id`),
  ADD KEY `tv_id` (`tv_id`);

--
-- Índices para tabela `lives`
--
ALTER TABLE `lives`
  ADD PRIMARY KEY (`id_lives`),
  ADD KEY `id_tv` (`id_tv`);

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
-- AUTO_INCREMENT de tabela `aovivo`
--
ALTER TABLE `aovivo`
  MODIFY `aovivo_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `cvs`
--
ALTER TABLE `cvs`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `lives`
--
ALTER TABLE `lives`
  MODIFY `id_lives` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aovivo`
--
ALTER TABLE `aovivo`
  ADD CONSTRAINT `aovivo_ibfk_1` FOREIGN KEY (`tv_id`) REFERENCES `branches` (`branch_id`);

--
-- Limitadores para a tabela `cvs`
--
ALTER TABLE `cvs`
  ADD CONSTRAINT `cvs_ibfk_1` FOREIGN KEY (`tv_id`) REFERENCES `branches` (`branch_id`);

--
-- Limitadores para a tabela `lives`
--
ALTER TABLE `lives`
  ADD CONSTRAINT `lives_ibfk_1` FOREIGN KEY (`id_tv`) REFERENCES `branches` (`branch_id`);

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
