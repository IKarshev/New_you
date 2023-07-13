-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 13 2023 г., 07:31
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `karshev13_new_yo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--
-- Создание: Окт 31 2022 г., 05:25
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `Detailed_text` text NOT NULL,
  `preview_img_href` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `Detailed_text`, `preview_img_href`) VALUES
(1, 'Botox-X', '2022-11-02', 'Botox-X, процедура для лечение бровей и ресниц. Будет полезна для ослабленных волосков бровей и ресниц, после процедур наращивания, ламинирования, частых окрашиваний краской и хной ,возрастных изменений. Состав препарата укрепляет волоски, придает блеск, стимулирует рост.\r\nДля лечения необходим курс из 4-7 процедур.', 'news_1_1.jpeg'),
(2, 'Осенние мотивы!', '2022-11-02', 'Мы всегда идем в ногу со временем. Осень на дворе и на ногтях наших клиенток!', 'news_2_1.jpg'),
(3, 'Модная стрижка', '2022-11-04', 'Модная стрижка-это уникальная возможность для женщины показать всю силу своей красоты', 'image 3_1.jpg'),
(4, 'Пилинг', '2022-11-09', 'Пилинг—это процесс удаления ороговевших клеток кожи с целью образования новых. \r\nРезультат процедуры-возвращение коже свежего, привлекательного, здорового вида.', 'image 4_1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `news_imgs`
--
-- Создание: Ноя 01 2022 г., 03:22
--

DROP TABLE IF EXISTS `news_imgs`;
CREATE TABLE `news_imgs` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `news_img` varchar(255) NOT NULL,
  `picture_description` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news_imgs`
--

INSERT INTO `news_imgs` (`id`, `news_id`, `news_img`, `picture_description`) VALUES
(1, 1, 'news_1_2.jpeg', ''),
(2, 1, 'news_1_3.jpeg', ''),
(3, 1, 'news_1_4.jpeg', ''),
(4, 2, 'news_2_2.jpg', ''),
(5, 2, 'news_2_3.jpg', ''),
(6, 2, 'news_2_4.jpg', ''),
(7, 3, 'image 3_2.jpg', ''),
(8, 3, 'image 3_3.jpg', ''),
(9, 3, 'image 3_4.jpg', ''),
(10, 3, 'image 3_5.jpg', ''),
(11, 3, 'image 3_6.jpg', ''),
(12, 4, 'image 4_2.jpg', ''),
(13, 4, 'image 4_3.jpg', ''),
(14, 4, 'image 4_4.jpg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--
-- Создание: Ноя 12 2022 г., 14:24
--

DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
  `UserID` int(10) NOT NULL,
  `UserName` varchar(254) NOT NULL,
  `Surname` varchar(254) NOT NULL,
  `TelephoneNumber` varchar(254) NOT NULL,
  `Email` varchar(254) DEFAULT NULL,
  `UserPassword` varchar(254) NOT NULL,
  `is_user_admin` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`UserID`, `UserName`, `Surname`, `TelephoneNumber`, `Email`, `UserPassword`, `is_user_admin`) VALUES
(2, 'Иван', 'Тараскин', '79994665530', 'ivan42222@gmail.com', 'bc0b495115d80d93f077c14522859174', 'false'),
(4, 'Иван', 'Каршев', '79133846136', 'mrforki@mail.ru', 'a3b8ef4998f0b9454b5ebf12695abf3a', 'true'),
(6, 'Наталья', 'Науметуллова', '79137593778', '', '8407d3b2766e249935cdd0ffc6335bb8', 'true');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news_imgs`
--
ALTER TABLE `news_imgs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `news_imgs`
--
ALTER TABLE `news_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `news_imgs`
--
ALTER TABLE `news_imgs`
  ADD CONSTRAINT `news_imgs_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
