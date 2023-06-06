-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 07 2023 г., 02:01
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Flowers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categorys`
--

CREATE TABLE `categorys` (
  `id` int NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categorys`
--

INSERT INTO `categorys` (`id`, `name`) VALUES
(1, 'Струнные'),
(3, 'Клавишные ');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `date` date NOT NULL,
  `status` text NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `products_info` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `date`, `status`, `comment`, `products_info`) VALUES
(13, 4, '2023-05-31', 'Отменен', 'Просто нельзя', '2,1'),
(14, 4, '2023-05-31', 'Подвержден', '', '1,2;2,3;3,5'),
(15, 4, '2023-06-05', 'Отменен', 'я так захотел', '7,5'),
(16, 8, '2023-06-05', 'Новый', '', '9,1'),
(17, 8, '2023-06-05', 'Новый', '', '9,1;9,1');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `year` int NOT NULL,
  `amount` int NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category`, `country`, `year`, `amount`, `image`) VALUES
(9, 'Гитара', 15000, 'Крутая гитара', 'Струнные', 'Россия', 2019, 500, '1.jpeg'),
(10, 'Гитара 2', 50000, 'Крутая гитара 2', 'Струнные', 'Израиль', 2023, 0, '2.jpeg'),
(11, 'Крутая гитара 3', 50010, 'Крутая гитара 3', 'Струнные', 'США', 2018, 302, '3.jpeg'),
(12, 'Пианино', 15000, 'Крутое пианино', 'Клавишные ', 'Мадагаскар', 1991, 140, '6.jpeg'),
(13, 'Крутое пианино', 11202352, 'Крутое пианино 2', 'Клавишные ', 'Нигер', 1986, 18235, '18.png'),
(14, 'Крутое пианино 3', 2141241, 'Крутое пианино 3', 'Клавишные ', 'Израиль', 1917, 1421, '6.jpeg'),
(15, 'Акустическая гитара', 0, 'Крутая акустическая гитара', 'Струнные', 'Франция', 1856, 234523, '14.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `surname` varchar(100) NOT NULL,
  `patronymic` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`) VALUES
(7, 'Админ', 'Админ', 'Админ', 'admin', 'admin@admin.admin', '1341215dbe9acab4361fd6417b2b11bc'),
(9, 'п', 'п', 'g', '1', 'g@g.ru', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
