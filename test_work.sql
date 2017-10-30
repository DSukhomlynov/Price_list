-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 30 2017 г., 15:21
-- Версия сервера: 5.5.53
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_work`
--

-- --------------------------------------------------------

--
-- Структура таблицы `docprice`
--

CREATE TABLE `docprice` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `docprice`
--

INSERT INTO `docprice` (`id`, `datetime`, `status`) VALUES
(1, '2017-10-11 00:00:00', 1),
(2, '2017-10-16 00:00:00', 0),
(3, '2017-10-21 00:00:00', 0),
(4, '2017-10-26 00:00:00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `docpricebody`
--

CREATE TABLE `docpricebody` (
  `id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `docpricebody`
--

INSERT INTO `docpricebody` (`id`, `doc_id`, `product_id`, `price`) VALUES
(1, 1, 1, 2500),
(2, 2, 7, 3000),
(3, 3, 3, 5000),
(4, 3, 4, 3000),
(5, 4, 5, 4000),
(6, 3, 6, 4500),
(8, 1, 2, 3000),
(7, 4, 1, 3000);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `status`) VALUES
(1, 'Lg', 'Стиральная машина', '0'),
(2, 'Bosh', 'Холодильник', '0'),
(3, 'Zanussi', 'Плита', '0'),
(4, 'Beko', 'Сушилка', '0'),
(5, 'HOTPOINT', 'Посудомойка', '1'),
(6, 'LIEBHERR', 'Морозилка', '1'),
(7, 'GROSS', 'Счетчик', '1'),
(8, 'INDEZIT', 'Генератор', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
