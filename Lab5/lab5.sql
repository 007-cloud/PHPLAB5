-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 29 2019 г., 06:24
-- Версия сервера: 10.1.35-MariaDB
-- Версия PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lab5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `data`
--

INSERT INTO `data` (`id`, `from_date`, `to_date`, `full_name`, `email`, `city`) VALUES
(1, '2011-11-22', '2011-11-26', 'Aaron P. Holt', 'AaronPHolt@teleworm.com', 'London'),
(2, '2011-11-23', '2011-11-26', 'Calvin N. Harwood', 'CalvinNHarwood@teleworm.com', 'New York'),
(3, '2011-11-20', '2011-12-14', 'Richard J. Mayo', 'RichardJMayo@teleworm.com', 'London'),
(4, '2011-11-11', '2011-11-30', 'Melissa L. Haffey', 'MelissaLHaffey@teleworm.com', 'London'),
(5, '2011-12-06', '2011-12-15', 'Orlando P. Lucas', 'OrlandoPLucas@teleworm.com', 'New York'),
(6, '2012-11-07', '2011-12-16', 'Tara R. Hale', 'TaraRHale@teleworm.com', 'Paris'),
(7, '2011-12-19', '2011-12-23', 'Stuart D. Jordan', 'StuartDJordan@teleworm.com', 'Paris'),
(8, '2011-12-25', '2011-12-30', 'John R. Howell', 'JohnRHowell@teleworm.com', 'Paris'),
(9, '2011-12-13', '2011-12-30', 'Nick P. Bueche', 'NickPBueche@teleworm.com', 'New York'),
(10, '2011-12-29', '2012-01-04', 'Solomon S. Moreno', 'SolomonSMoreno@teleworm.com', 'Paris');

-- --------------------------------------------------------

--
-- Структура таблицы `datas`
--

CREATE TABLE `datas` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `m_id` int(11) NOT NULL,
  `m_userid` int(11) NOT NULL,
  `m_message` longtext NOT NULL,
  `m_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`m_id`, `m_userid`, `m_message`, `m_date`) VALUES
(1, 1, 'Hello This is Sanzhar Anarbay\'s message!!!', '2019-04-15 03:46:04'),
(2, 2, 'Hello! Yersultan Kalybaev! Student of IITu, 3 rd course, CSSE-1604!', '2019-04-15 03:46:43'),
(3, 3, 'Hello! Adilet Perdesh!!!!', '2019-04-15 03:47:20'),
(4, 4, 'Danabek Duisekov! Student and Web developer!!!', '2019-04-15 03:47:54');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `gender`) VALUES
(1, 'Sanzhar', 'male'),
(2, 'Danabek', 'male'),
(3, 'Madina', 'female'),
(4, 'Ayaulym', 'female'),
(5, 'Yersultan', 'male'),
(6, 'Kenny', 'female'),
(7, 'Jane', 'female'),
(8, 'Lucy', 'female');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Maria Anders', 'Obere Str. 57', 'Berlin', '12209', 'Germany'),
(2, 'Ana Trujillo', 'Avda. de la Construction 2222', 'Mexico D.F.', '5021', 'Mexico'),
(3, 'Antonio Moreno', 'Mataderos 2312', 'Mexico D.F.', '5023', 'Mexico'),
(4, 'Thomas Hardy', '120 Hanover Sq.', 'London', 'WA1 1DP', 'UK'),
(5, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(6, 'Wolski Zbyszek', 'ul. Filtrowa 68', 'Walla', '01-012', 'Poland'),
(7, 'Matti Karttunen', 'Keskuskatu 45', 'Helsinki', '21240', 'Finland'),
(8, 'Karl Jablonski', '305 - 14th Ave. S. Suite 3B', 'Seattle', '98128', 'USA'),
(9, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(10, 'Pirkko Koskitalo', 'Torikatu 38', 'Oulu', '90110', 'Finland');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_surname` varchar(50) NOT NULL,
  `u_username` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_surname`, `u_username`, `u_password`, `u_email`, `age`) VALUES
(1, 'Sanzhar', 'Anarbay', 'sanzharanarbay', 'sanzhar10', 'anarbay.sanzhar1999@gmail.com', 20),
(2, 'Yersultan', 'Kalybaev', 'yersultan.kalybaev', 'qwerty123', 'yersultan.kalybaev@gmail.com', 26),
(3, 'Adilet', 'Perdesh', 'adokperdesh', 'adokadok', 'adik98@gmail.com', 15),
(4, 'Danabek', 'Duisekov', 'danabekduisekov', 'danabek123', 'danabek111@gmail.com', 18);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`m_id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
