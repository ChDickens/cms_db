-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 05 2018 г., 21:28
-- Версия сервера: 5.7.20
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(4, 'PHP'),
(12, 'CMS Joomla'),
(13, 'Javascript'),
(15, 'JAVA'),
(16, 'gjghjghjghj'),
(17, 'dsfdsfds'),
(18, 'dsfdsfds');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `tags` text NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `comments_count` int(11) NOT NULL,
  `views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `author`, `date`, `tags`, `image`, `content`, `status`, `comments_count`, `views_count`) VALUES
(1, 2, 'Blog Post Title 1', 'Start Bootstrap', '2018-11-03', 'PHP, javascript', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.', 0, 0, 0),
(2, 3, 'Blog Post Title 2', 'Start Bootstrap', '2018-11-03', 'PHP', 'oboi_full_hd_molodoj_leopard.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.', 0, 0, 0),
(3, 2, 'Blog Post Title 3', 'Start Bootstrap', '2018-11-03', 'javascript', 'oboi_full_hd_molodoj_leopard.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.', 0, 0, 0),
(4, 3, 'Blog Post Title 4', 'Start Bootstrap', '2018-11-03', 'cms', 'oboi_full_hd_molodoj_leopard.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.', 0, 0, 0),
(5, 2, 'парпар', 'asdasd', '2018-11-05', 'паррапрапр', '', ' вапвапвапвап', 1, 0, 0),
(6, 2, 'вапавп', 'вапвап', '2018-11-05', 'выпавы', '', ' выавыа', 1, 0, 0),
(7, 2, 'dsfdsfds', 'asdasd', '2018-11-05', 'sdfdsfdsf', '23-14.jpg', ' dfsdfsdf', 1, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
