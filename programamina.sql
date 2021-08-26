-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Ago-2021 às 18:52
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `programamina`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `data_comentario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_usuario`, `id_post`, `comentario`, `data_comentario`) VALUES
(1, 2, 5, 'Que massa!', '0000-00-00'),
(2, 1, 5, 'Css3 é muito legal mesmo!', '0000-00-00'),
(3, 2, 2, 'Html é uma lingaguem de estilização!', '0000-00-00'),
(4, 1, 1, 'Php é mó legal', '0000-00-00'),
(5, 1, 6, 'ux é ruin', '0000-00-00'),
(6, 1, 5, '', '0000-00-00'),
(7, 1, 1, 'meu comentario no meu post.', '0000-00-00'),
(8, 1, 5, 'zzzz', '0000-00-00'),
(9, 1, 1, '', '0000-00-00'),
(10, 1, 5, 'css aprendi no 1 semestre da faculdade.', '0000-00-00'),
(11, 1, 5, 'meu comentario no meu post.', '0000-00-00'),
(12, 3, 1, 'Bacana seu post!', '0000-00-00'),
(13, 3, 5, 'css aprendi no 1 semestre da faculdade.', '0000-00-00'),
(14, 1, 0, 'meu comentário teste no post de css!', '0000-00-00'),
(15, 5, 5, 'comentario', '0000-00-00'),
(16, 1, 5, 'comentario', '0000-00-00'),
(17, 1, 1, 'teste de comentário 19/07', '0000-00-00'),
(18, 1, 2, 'Apresentando o projeto', '0000-00-00'),
(19, 1, 10, 'post legal', '0000-00-00'),
(20, 3, 17, 'primeiro comentario', '0000-00-00'),
(21, 1, 9, 'primeiro comentario', '0000-00-00'),
(22, 1, 16, 'primeiro comentario', '0000-00-00'),
(23, 1, 21, 'primeiro comentario', '0000-00-00'),
(24, 1, 17, 'Segundo comentário.', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id_posts` int(255) NOT NULL,
  `id_usuario` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `data_post` varchar(20) DEFAULT NULL,
  `post` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id_posts`, `id_usuario`, `assunto`, `data_post`, `post`) VALUES
(11, '1', 'UX-Oque é?', NULL, '   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages '),
(15, '1', 'ALTER TABLE ADD COLUMN- Sql', '02/08/2021 12:10:18', 'Usar a instrução ALTER TABLE para adicionar colunas a uma tabela automaticamente adiciona essas colunas ao final da tabela. Se você desejar que as colunas fiquem em uma ordem específica na tabela, use o SQL Server Management Studio. No entanto, observe que esta não é uma prática recomendada de design de banco de dados. A prática recomendada é especificar a ordem em que as colunas serão retornadas nos níveis de aplicativo e de consulta. Você não deve confiar no uso de SELECT * para retornar todas as colunas na ordem esperada com base na ordem em que são definidas na tabela. Sempre especifique as colunas por nome em suas consultas e aplicativos na ordem em que você gostaria que elas aparecessem.\r\n\r\nex:ALTER TABLE dbo.doc_exa ADD column_b VARCHAR(20) NULL, column_c INT NULL ;\r\n'),
(16, '1', 'Estilizando LI', '13/08/2021 02:59', 'Iremos usar o css para remover, e muito simples:\r\n\r\ncomo iremos somente mostrar como remover as bolinhas, nós iremos fazer o css dentro do próprio html, mas para ter mais organização no seu código, faça em um arquivo externo.\r\n\r\niremos usar o list-style:none; para remover.'),
(17, '1', 'Php teste', '13/08/2021 04:12', '  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.  '),
(18, '3', 'Estilizando LI - parte 2', '13/08/2021 04:14', '  A política de execução não é um sistema de segurança que restringe as ações do usuário. Por exemplo, os usuários podem ignorar facilmente uma política digitando o conteúdo do script na linha de comando quando não puderem executar um script. Em vez disso, a política de execução ajuda os usuários a definir regras básicas e impede que eles as violem involuntariamente.  '),
(20, '3', 'Estilizando LI - parte 3', '13/08/2021 07:03', 'O elemento HTML (ou a Lista dos Itens de um elemento HTML) é usado para representar um item que faz parte de uma lista. Este item deve estar contido em um elemento pai: uma lista ordenada, uma lista desordenada (), ou um menu (en-US)e representa uma única entidade dessa lista. Em menus e listas desordenadas a relação de itens é exibida, normalmente, usando pontos de marcação (as bolinhas).'),
(21, '6', 'CSS-Grid', '16/08/2021 11:11', 'CSS Grid Layout introduz um sistema bi-dimensional de grid (literalmente \"grades\") para CSS. Grids podem ser usados para o design de layouts de grandes seções de uma webpage, assim como de pequenos elementos de interface. Esse artigo apresenta o CSS Grid Layout e a terminologia que é parte da especificação  CSS Grid Layout Level 1. As funcionalidades demonstradas neste resumo serão posteriormente explicadas em maiores detalhes nas demais seções desse guia.'),
(22, '1', 'Html', '24/08/2021 01:54', 'HTML abreviação para a expressão inglesa HyperText Markup Language, que significa: \"Linguagem de Marcação de Hipertexto\" é uma linguagem de marcação utilizada na construção de páginas na Web. Documentos HTML podem ser interpretados por navegadores. A tecnologia é fruto da junção entre os padrões HyTime e SGML.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `email`, `senha`, `imagem`) VALUES
(1, 'carolini.tsi@gmail.com', 'MTIzNA==', 'e2590aae1c2066a177d53056722d43ca.jpg.jpg'),
(2, '', 'MTIzNA==', '84489749_783129378852149_185468030849908736_n.jpg.jpg'),
(3, 'lizy@gmail.com', 'MTIzNA==', '174600860_128235682565572_1027689003720731259_n.jpg.jpg'),
(4, 'tais.olliveira333@gmail.com', 'MzMz', 'FOTINHO.jpeg.jpeg'),
(5, 'teste@gmail.com', 'MTIzNA==', '103441570_1977093405789244_7841247353563130695_o.jpg.jpg'),
(6, 'tais.oliveira@gmail.com', 'MTIzNDU=', '1622036403096.jpg.jpg'),
(7, 'teste@gmail.com', 'MTIzNA==', '26837.png.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_posts`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id_posts` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
