-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 18 2022 г., 20:16
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mvc_site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chars`
--

CREATE TABLE `chars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `age` int(11) NOT NULL,
  `short_content` text CHARACTER SET utf8 NOT NULL,
  `content` varchar(535) CHARACTER SET utf8 NOT NULL,
  `faculty` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `curs` int(11) NOT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quests` varchar(535) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hits` int(11) NOT NULL,
  `ki` int(11) NOT NULL,
  `skills` varchar(535) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_lim` int(11) NOT NULL,
  `rare_lim` int(11) NOT NULL,
  `unic_lim` int(11) NOT NULL,
  `extra_lim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `chars`
--

INSERT INTO `chars` (`id`, `name`, `age`, `short_content`, `content`, `faculty`, `curs`, `rank`, `quests`, `image`, `hits`, `ki`, `skills`, `com_lim`, `rare_lim`, `unic_lim`, `extra_lim`) VALUES
(1, 'Хуан Веласкез', 30, 'Etiam finibus tincidunt scelerisque. Donec semper sagittis eros, sit amet facilisis purus pellentesque quis. Donec sit amet mi a mauris tincidunt ornare. Sed eget malesuada sapien. Duis vehicula sapien erat, ac dignissim lacus egestas sed. Pellentesque ac diam rutrum, maximus nibh vel, commodo tortor. Integer tempus, risus et venenatis rutrum, lorem ligula auctor sem, eu lobortis dolor sapien in velit. Pellentesque suscipit lorem at eros auctor rutrum. Donec porttitor molestie ipsum et molestie. Phasellus egestas laoreet aliquet.', 'Etiam finibus tincidunt scelerisque. Donec semper sagittis eros, sit amet facilisis purus pellentesque quis. Donec sit amet mi a mauris tincidunt ornare. Sed eget malesuada sapien. Duis vehicula sapien erat, ac dignissim lacus egestas sed. Pellentesque ac diam rutrum, maximus nibh vel, commodo tortor. Integer tempus, risus et venenatis rutrum, lorem ligula auctor sem, eu lobortis dolor sapien in velit. Pellentesque suscipit lorem at eros auctor rutrum. Donec porttitor molestie ipsum et molestie. Phasellus egestas laoreet aliquet.', 'Биотех', 5, 'Майор', 'Нет', '', 0, 0, 'c_fb_30;c_lb_30;e_hpl_100;u_hloc_10', 0, 0, 0, 0),
(2, 'Алекс Фокс', 30, 'Две печени', 'Где родился там и пригодился', 'Биотех', 5, 'Капитан', '<li>Тренировать</li>\r\n<li>Бухать</li>\r\n<li>Колдовать</li>', '', 10, 5, 'c_fb_10;c_lb_10;c_hf_неограничено;c_hl_неограничено;u_hloc_5;c_pb_10;c_hp_неограничено', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'Биотех', 1, 1),
(2, 'Псионики', 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `players`
--

INSERT INTO `players` (`id`, `name`, `login`, `password`, `access`) VALUES
(1, 'Илья Иванов', 'dwarftea', 'razorvu_v_klochya', 0),
(2, 'Семен Бабушкин', 'legolas', 'met_all', 0),
(3, 'Лисяра', 'alex-fox', 'u-suka', 1),
(4, 'Тор', 'GM', '6thlayer', 1),
(5, 'Шотландия', 'irland', 'cuntbrother', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rarity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `skills`
--

INSERT INTO `skills` (`id`, `name`, `rarity`, `code`) VALUES
(1, 'Блок кулака', 'Обычный', 'fb'),
(2, 'Блок ноги', 'Обычный', 'lb'),
(3, 'Хуем по лбу', 'Сверхуникальный', 'hpl'),
(4, 'Удар локтем', 'Редкий', 'hloc'),
(5, 'Удар кулаком', 'Обычный', 'hf'),
(6, 'Удар ногой', 'Обычный', 'hl'),
(7, 'Удар ладонью', 'Обычный', 'hp'),
(8, 'Блок ладони', 'Обычный', 'pb'),
(9, 'Серия ударов 2', 'Редкий', 'ch2'),
(10, 'Контратака', 'Редкий', 'ca'),
(11, 'Удар головой', 'Редкий', 'hh'),
(12, 'Блок от удара головой', 'Редкий', 'hhb');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chars`
--
ALTER TABLE `chars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chars`
--
ALTER TABLE `chars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
