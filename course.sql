-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 06 2020 г., 14:20
-- Версия сервера: 5.5.60-log
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `course`
--

-- --------------------------------------------------------

--
-- Структура таблицы `airport`
--

CREATE TABLE `airport` (
  `idAir` int(11) NOT NULL,
  `Title` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `airport`
--

INSERT INTO `airport` (`idAir`, `Title`) VALUES
(1, 'Аэропорт1');

-- --------------------------------------------------------

--
-- Структура таблицы `flight`
--

CREATE TABLE `flight` (
  `idFLIG` int(11) NOT NULL,
  `idPL` int(11) DEFAULT NULL,
  `NumberOfFlight` int(11) DEFAULT NULL,
  `DestinationCountry` varchar(45) DEFAULT NULL,
  `DepartureDate` date DEFAULT NULL,
  `ReturnDate` date DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `flight`
--

INSERT INTO `flight` (`idFLIG`, `idPL`, `NumberOfFlight`, `DestinationCountry`, `DepartureDate`, `ReturnDate`, `Price`) VALUES
(1, 1, 15375, 'Турция', '2020-04-12', '2020-05-13', 3000),
(2, 1, 56783, 'Япония', '2020-03-14', '2020-05-13', 3000),
(3, 1, 49876, 'Финляндия', '2020-04-12', '2020-05-13', 5000),
(4, 2, 64185, 'Япония', '2020-03-12', '2020-05-13', 5000),
(5, 1, 98371, 'Япония', '2020-03-14', '2020-05-16', 4500),
(6, 1, 1242, 'Иванов', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `hotel`
--

CREATE TABLE `hotel` (
  `idHOT` int(11) NOT NULL,
  `Title` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `CheckInDate` date DEFAULT NULL,
  `DateOfEviction` date DEFAULT NULL,
  `OccupiedPlaces` int(11) DEFAULT NULL,
  `Rent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `hotel`
--

INSERT INTO `hotel` (`idHOT`, `Title`, `Price`, `CheckInDate`, `DateOfEviction`, `OccupiedPlaces`, `Rent`) VALUES
(1, 'Отель1', 45000, '2020-04-12', '2020-04-28', 7, 12000),
(2, 'Отель2', 37000, '2020-04-13', '2020-04-26', 2, 11000);

-- --------------------------------------------------------

--
-- Структура таблицы `plane`
--

CREATE TABLE `plane` (
  `idPlane` int(11) NOT NULL,
  `Title` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `idAirport` int(11) DEFAULT NULL,
  `idCargo` int(11) DEFAULT NULL,
  `NumberOfSeat` int(11) DEFAULT NULL,
  `WolumeWeight` int(11) DEFAULT NULL,
  `Service` int(11) DEFAULT NULL,
  `Type` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `plane`
--

INSERT INTO `plane` (`idPlane`, `Title`, `idAirport`, `idCargo`, `NumberOfSeat`, `WolumeWeight`, `Service`, `Type`) VALUES
(1, 'Самолет1', 1, 1, 10, 20, 50000, 0),
(2, 'Самолет2', 1, 1, 21, 23, 45000, 0),
(3, 'Самолет3', 1, 1, 21, 22, 45000, 0),
(4, 'Самолет4', 1, 2, 22, 32, 70000, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `stock`
--

CREATE TABLE `stock` (
  `idCA` int(11) NOT NULL,
  `Title` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `DateOfDelivery` date DEFAULT NULL,
  `Rent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `stock`
--

INSERT INTO `stock` (`idCA`, `Title`, `Price`, `Weight`, `DateOfDelivery`, `Rent`) VALUES
(1, 'Груз1', 22000, 10, '2020-12-20', 2000),
(2, 'Груз2', 12000, 12, '2020-12-20', 2100);

-- --------------------------------------------------------

--
-- Структура таблицы `tour`
--

CREATE TABLE `tour` (
  `idTOUR` int(11) NOT NULL,
  `Agency` varchar(45) DEFAULT NULL,
  `Title` varchar(45) DEFAULT NULL,
  `TourDate` date DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Tax` int(11) DEFAULT NULL,
  `PopularityRating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tour`
--

INSERT INTO `tour` (`idTOUR`, `Agency`, `Title`, `TourDate`, `Price`, `Tax`, `PopularityRating`) VALUES
(1, 'Сказка', 'Эксукрсия1', '2020-04-20', 7000, 700, 4),
(2, 'Сказка2', 'Эксукрсия2', '2020-04-22', 13000, 1300, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tourists`
--

CREATE TABLE `tourists` (
  `idTO` int(11) NOT NULL,
  `idCARG` int(11) DEFAULT NULL,
  `idTOU` int(11) DEFAULT NULL,
  `idHOT` int(11) DEFAULT NULL,
  `idFLIG` int(11) DEFAULT NULL,
  `Name` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `LastName` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `PD` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `Sex` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Children` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tourists`
--

INSERT INTO `tourists` (`idTO`, `idCARG`, `idTOU`, `idHOT`, `idFLIG`, `Name`, `LastName`, `PD`, `Sex`, `Age`, `Children`) VALUES
(1, 1, NULL, 1, 1, 'Станислав', 'Маркевич', '13423 3422', 'Мужской', 22, 0),
(2, NULL, 2, 1, 2, 'Михаил', 'Маркевич', '65417 4376', 'Мужской', 25, 1),
(3, NULL, 1, 2, 5, 'Николай', 'Ковалев', '76133 3484 ', 'Мужской', 28, 1),
(4, 1, NULL, 1, 2, 'Николай', 'Сергеев', '91823 5628', 'Женский', 28, 1),
(5, NULL, 1, 1, 1, 'Виктор', 'Сидоров', '94817 1731', 'Женский', 21, 1),
(6, 1, NULL, 1, 4, 'Андрей', 'Куликин', '34901 1023', 'Мужской', 21, 1),
(7, NULL, 1, 1, 2, 'Станислав', 'Маркевич', '13423 3422', 'Мужской', 22, 0),
(8, 2, NULL, 2, 2, 'Виктор', 'Кореев', '18292 1721', 'Мужской', 32, 1),
(9, NULL, 1, 1, 1, 'ывыв', 'ывы', '222', 'ыввыв', 11, 1);

--
-- Триггеры `tourists`
--
DELIMITER $$
CREATE TRIGGER `delete` AFTER DELETE ON `tourists` FOR EACH ROW BEGIN
UPDATE `tour` set `PopularityRating` = (SELECT COUNT(`idTOU`) FROM `tourists` WHERE `tour`.`idTOUR`=`tourists`.`idTOU`);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert` AFTER INSERT ON `tourists` FOR EACH ROW BEGIN
UPDATE `tour` set `PopularityRating` = (SELECT COUNT(`idTOU`) FROM `tourists` WHERE `tour`.`idTOUR`=`tourists`.`idTOU`);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `auth_key` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'root', '$2y$13$SO/SunJFkNuRpDO7ekfB0u2OglvBtEx6748Y9trrOhJOYhAdvdmmS', '7YfqjkhpF3RtEOuXyP2LavmAIMo9D1Qe0JGnxVc58r6wCbgNWz4KiTSZsHdlBU');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`idAir`);

--
-- Индексы таблицы `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`idFLIG`),
  ADD KEY `fk_flight_Aircraft1_idx` (`idPL`);

--
-- Индексы таблицы `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`idHOT`);

--
-- Индексы таблицы `plane`
--
ALTER TABLE `plane`
  ADD PRIMARY KEY (`idPlane`),
  ADD KEY `fk_plane_stock1_idx` (`idCargo`),
  ADD KEY `fk_plane_airport1_idx` (`idAirport`);

--
-- Индексы таблицы `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`idCA`);

--
-- Индексы таблицы `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`idTOUR`);

--
-- Индексы таблицы `tourists`
--
ALTER TABLE `tourists`
  ADD PRIMARY KEY (`idTO`),
  ADD KEY `fk_tourists_hotel1_idx` (`idHOT`),
  ADD KEY `fk_tourists_tour1_idx` (`idTOU`),
  ADD KEY `fk_tourists_stock1_idx` (`idCARG`),
  ADD KEY `fk_tourists_flight1_idx` (`idFLIG`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `airport`
--
ALTER TABLE `airport`
  MODIFY `idAir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `flight`
--
ALTER TABLE `flight`
  MODIFY `idFLIG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `hotel`
--
ALTER TABLE `hotel`
  MODIFY `idHOT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `plane`
--
ALTER TABLE `plane`
  MODIFY `idPlane` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `stock`
--
ALTER TABLE `stock`
  MODIFY `idCA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tour`
--
ALTER TABLE `tour`
  MODIFY `idTOUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tourists`
--
ALTER TABLE `tourists`
  MODIFY `idTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `fk_flight_plane1` FOREIGN KEY (`idPL`) REFERENCES `plane` (`idPlane`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `plane`
--
ALTER TABLE `plane`
  ADD CONSTRAINT `fk_plane_airport1` FOREIGN KEY (`idAirport`) REFERENCES `airport` (`idAir`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_plane_stock1` FOREIGN KEY (`idCargo`) REFERENCES `stock` (`idCA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `tourists`
--
ALTER TABLE `tourists`
  ADD CONSTRAINT `fk_tourists_flight1` FOREIGN KEY (`idFLIG`) REFERENCES `flight` (`idFLIG`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tourists_hotel1` FOREIGN KEY (`idHOT`) REFERENCES `hotel` (`idHOT`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tourists_stock1` FOREIGN KEY (`idCARG`) REFERENCES `stock` (`idCA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tourists_tour1` FOREIGN KEY (`idTOU`) REFERENCES `tour` (`idTOUR`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
