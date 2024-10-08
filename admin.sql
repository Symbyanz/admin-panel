-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 22 2023 г., 08:21
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `admin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `alkostop_codes`
--

CREATE TABLE `alkostop_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `alkostop_codes`
--

INSERT INTO `alkostop_codes` (`value`) VALUES
('2345-3425-3245-3454');

-- --------------------------------------------------------

--
-- Структура таблицы `alkostop_leads`
--

CREATE TABLE `alkostop_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `alkostop_leads`
--

INSERT INTO `alkostop_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('tewsd', '+7(345) 234-5345', '2021-06-17 21:11:09', 0),
('MMMM', '+7(352) 349-5723', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `alkozeroks_codes`
--

CREATE TABLE `alkozeroks_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `alkozeroks_codes`
--

INSERT INTO `alkozeroks_codes` (`value`) VALUES
('2345-3425-3245-3454');

-- --------------------------------------------------------

--
-- Структура таблицы `alkozeroks_leads`
--

CREATE TABLE `alkozeroks_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `alkozeroks_leads`
--

INSERT INTO `alkozeroks_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('Vasya', '+7(235) 234-5343', '2021-07-07 05:39:55', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `articulat_codes`
--

CREATE TABLE `articulat_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articulat_codes`
--

INSERT INTO `articulat_codes` (`value`) VALUES
('2345-3425-3245-3464');

-- --------------------------------------------------------

--
-- Структура таблицы `articulat_leads`
--

CREATE TABLE `articulat_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articulat_leads`
--

INSERT INTO `articulat_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('sdfsdf', '+7(423) 546-3564', '2021-07-07 06:34:01', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `artonin_codes`
--

CREATE TABLE `artonin_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `artonin_codes`
--

INSERT INTO `artonin_codes` (`value`) VALUES
('AAAA-AAAA-AAAA-AAAA');

-- --------------------------------------------------------

--
-- Структура таблицы `artonin_leads`
--

CREATE TABLE `artonin_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `artonin_leads`
--

INSERT INTO `artonin_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('timews', '+79548514565', '2021-06-17 20:48:56', 1),
('Testik', '+7(324) 950-5293', '2021-06-17 21:18:21', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `artroforce_codes`
--

CREATE TABLE `artroforce_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `artroforce_codes`
--

INSERT INTO `artroforce_codes` (`value`) VALUES
('2345-3425-3245-3464');

-- --------------------------------------------------------

--
-- Структура таблицы `artroforce_leads`
--

CREATE TABLE `artroforce_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `artroforce_leads`
--

INSERT INTO `artroforce_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('test', '+7(324) 534-5435', '2021-07-07 15:46:33', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `extraslim2_codes`
--

CREATE TABLE `extraslim2_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `extraslim2_codes`
--

INSERT INTO `extraslim2_codes` (`value`) VALUES
('AAAA-AAAA-AAAA-AAAA');

-- --------------------------------------------------------

--
-- Структура таблицы `extraslim2_leads`
--

CREATE TABLE `extraslim2_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `extraslim2_leads`
--

INSERT INTO `extraslim2_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('Testik', '+7(324) 950-5293', '2021-06-17 21:18:21', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `extraslim_codes`
--

CREATE TABLE `extraslim_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `extraslim_leads`
--

CREATE TABLE `extraslim_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `extraslim_leads`
--

INSERT INTO `extraslim_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('test2', '+7(435) 234-5345', '2021-06-22 02:58:55', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `garcinia_codes`
--

CREATE TABLE `garcinia_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `garcinia_codes`
--

INSERT INTO `garcinia_codes` (`value`) VALUES
('AAAA-AAAA-AAAA-AAAA');

-- --------------------------------------------------------

--
-- Структура таблицы `garcinia_leads`
--

CREATE TABLE `garcinia_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `garcinia_leads`
--

INSERT INTO `garcinia_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('Testik', '+7(324) 950-5293', '2021-06-17 21:18:21', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `imosteon_codes`
--

CREATE TABLE `imosteon_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `imosteon_codes`
--

INSERT INTO `imosteon_codes` (`value`) VALUES
('2345-3425-3245-3464');

-- --------------------------------------------------------

--
-- Структура таблицы `imosteon_leads`
--

CREATE TABLE `imosteon_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `imosteon_leads`
--

INSERT INTO `imosteon_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('test324r', '+7(435) 345-2343', '2021-07-07 19:02:54', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ketobhb_codes`
--

CREATE TABLE `ketobhb_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketobhb_codes`
--

INSERT INTO `ketobhb_codes` (`value`) VALUES
('AAAA-AAAA-AAAA-AAAA');

-- --------------------------------------------------------

--
-- Структура таблицы `ketobhb_leads`
--

CREATE TABLE `ketobhb_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketobhb_leads`
--

INSERT INTO `ketobhb_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('Testik', '+7(324) 950-5293', '2021-06-17 21:18:21', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ketoburn_codes`
--

CREATE TABLE `ketoburn_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketoburn_codes`
--

INSERT INTO `ketoburn_codes` (`value`) VALUES
('AAAA-AAAA-AAAA-AAAA');

-- --------------------------------------------------------

--
-- Структура таблицы `ketoburn_leads`
--

CREATE TABLE `ketoburn_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketoburn_leads`
--

INSERT INTO `ketoburn_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('Testik', '+7(324) 950-5293', '2021-06-17 21:18:21', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ketodetox_codes`
--

CREATE TABLE `ketodetox_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketodetox_codes`
--

INSERT INTO `ketodetox_codes` (`value`) VALUES
('AAAA-AAAA-AAAA-AAAA');

-- --------------------------------------------------------

--
-- Структура таблицы `ketodetox_leads`
--

CREATE TABLE `ketodetox_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketodetox_leads`
--

INSERT INTO `ketodetox_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('Testik', '+7(324) 950-5293', '2021-06-17 21:18:21', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ketodietaplus_codes`
--

CREATE TABLE `ketodietaplus_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketodietaplus_codes`
--

INSERT INTO `ketodietaplus_codes` (`value`) VALUES
('AAAA-AAAA-AAAA-AAAA');

-- --------------------------------------------------------

--
-- Структура таблицы `ketodietaplus_leads`
--

CREATE TABLE `ketodietaplus_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketodietaplus_leads`
--

INSERT INTO `ketodietaplus_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('Testik', '+7(324) 950-5293', '2021-06-17 21:18:21', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ketodieta_codes`
--

CREATE TABLE `ketodieta_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `ketodieta_leads`
--

CREATE TABLE `ketodieta_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketodieta_leads`
--

INSERT INTO `ketodieta_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('test', '+7(345) 243-5346', '2021-06-25 13:15:40', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ketoform2_codes`
--

CREATE TABLE `ketoform2_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketoform2_codes`
--

INSERT INTO `ketoform2_codes` (`value`) VALUES
('AAAA-AAAA-AAAA-AAAA');

-- --------------------------------------------------------

--
-- Структура таблицы `ketoform2_leads`
--

CREATE TABLE `ketoform2_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketoform2_leads`
--

INSERT INTO `ketoform2_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('Testik', '+7(324) 950-5293', '2021-06-17 21:18:21', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ketoform_codes`
--

CREATE TABLE `ketoform_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `ketoform_leads`
--

CREATE TABLE `ketoform_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketoform_leads`
--

INSERT INTO `ketoform_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('trs', '+7(324) 523-4523', '2021-06-17 21:19:58', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ketogeneticultra_codes`
--

CREATE TABLE `ketogeneticultra_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `ketogeneticultra_leads`
--

CREATE TABLE `ketogeneticultra_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketogeneticultra_leads`
--

INSERT INTO `ketogeneticultra_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('Testik', '+7(324) 950-5293', '2021-06-17 21:18:21', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ketogenetic_codes`
--

CREATE TABLE `ketogenetic_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `ketogenetic_leads`
--

CREATE TABLE `ketogenetic_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketogenetic_leads`
--

INSERT INTO `ketogenetic_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('test', '+7(435) 254-3543', '2021-06-22 02:01:34', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ketolight_codes`
--

CREATE TABLE `ketolight_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketolight_codes`
--

INSERT INTO `ketolight_codes` (`value`) VALUES
('TEST3-23DSD-FADS');

-- --------------------------------------------------------

--
-- Структура таблицы `ketolight_leads`
--

CREATE TABLE `ketolight_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketolight_leads`
--

INSERT INTO `ketolight_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('345', '+7(334) 523-4534', '2021-07-13 12:24:11', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ketopills_codes`
--

CREATE TABLE `ketopills_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketopills_codes`
--

INSERT INTO `ketopills_codes` (`value`) VALUES
('AAAA-AAAA-AAAA-AAAA');

-- --------------------------------------------------------

--
-- Структура таблицы `ketopills_leads`
--

CREATE TABLE `ketopills_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ketopills_leads`
--

INSERT INTO `ketopills_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('Testik', '+7(324) 950-5293', '2021-06-17 21:18:21', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `lipozene_codes`
--

CREATE TABLE `lipozene_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lipozene_codes`
--

INSERT INTO `lipozene_codes` (`value`) VALUES
('AAAA-AAAA-AAAA-AAAA');

-- --------------------------------------------------------

--
-- Структура таблицы `lipozene_leads`
--

CREATE TABLE `lipozene_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lipozene_leads`
--

INSERT INTO `lipozene_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('Testik', '+7(324) 950-5293', '2021-06-17 21:18:21', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `neyrosistema_codes`
--

CREATE TABLE `neyrosistema_codes` (
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `neyrosistema_codes`
--

INSERT INTO `neyrosistema_codes` (`value`) VALUES
('5T7E-GYJ8-RWVA-PBVU');

-- --------------------------------------------------------

--
-- Структура таблицы `neyrosistema_leads`
--

CREATE TABLE `neyrosistema_leads` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `neyrosistema_leads`
--

INSERT INTO `neyrosistema_leads` (`name`, `phone`, `datetime`, `status`) VALUES
('', '', '2021-07-07 13:57:41', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
