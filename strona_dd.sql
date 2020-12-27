-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Gru 2020, 02:49
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `strona_dd`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `characters`
--

CREATE TABLE `characters` (
  `character_id` int(10) UNSIGNED NOT NULL,
  `owner_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `race_id` int(11) UNSIGNED NOT NULL,
  `class_id` int(11) UNSIGNED NOT NULL,
  `description` varchar(150) NOT NULL DEFAULT 'Brief description.',
  `agility` int(3) UNSIGNED DEFAULT NULL,
  `strength` int(3) UNSIGNED DEFAULT NULL,
  `wisdom` int(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `characters`
--

INSERT INTO `characters` (`character_id`, `owner_id`, `name`, `race_id`, `class_id`, `description`, `agility`, `strength`, `wisdom`) VALUES
(18, 41, 'Tanatos', 2, 2, 'Bard from Mont', 10, 10, 16),
(20, 42, 'asd', 3, 2, 'asd', 15, 16, 19),
(22, 34, 'Donn\'aar', 4, 4, 'Monk of Guntero Kingdom', 20, 11, 11);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(11) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `classes`
--

INSERT INTO `classes` (`class_id`, `name`, `description`) VALUES
(1, 'warrior', 'Strong with sword'),
(2, 'bard', 'Help the others with music. Support.'),
(3, 'warlock', 'Demonic occultist uses power from the demon\'s deep'),
(4, 'barbarian', ''),
(5, 'monk', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `permission_name` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `permissions`
--

INSERT INTO `permissions` (`permission_id`, `permission_name`, `description`) VALUES
(1, 'Administrator', 'Dodaje, usuwa uzytkownikow oraz moderatorow'),
(2, 'Moderator', 'Usuwa uzytkownikow oraz ich person'),
(3, 'Użytkownik', 'Może tworzyć person');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `races`
--

CREATE TABLE `races` (
  `race_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `races`
--

INSERT INTO `races` (`race_id`, `name`, `description`) VALUES
(1, 'human', 'Casual human'),
(2, 'elf', 'Opezdals from Big Woods'),
(3, 'tifling', 'Cursed race which comes from demonic interuption to the Earth'),
(4, 'dwarf', ''),
(5, 'halfling', ''),
(6, 'halfelf', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `status`
--

CREATE TABLE `status` (
  `status_id` int(10) UNSIGNED NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Aktywny'),
(2, 'Zablokowany'),
(3, 'Nieaktywowany');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `surname` varchar(64) NOT NULL,
  `nickname` varchar(60) NOT NULL,
  `email` varchar(65) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `birhday` date DEFAULT NULL,
  `status_id` int(10) UNSIGNED DEFAULT 1,
  `permission_id` int(10) UNSIGNED DEFAULT 3,
  `create_user` datetime DEFAULT current_timestamp(),
  `last_login` datetime DEFAULT NULL,
  `avatar` varchar(100) DEFAULT 'user3-128x128.jpg 	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `nickname`, `email`, `pass`, `birhday`, `status_id`, `permission_id`, `create_user`, `last_login`, `avatar`) VALUES
(29, 'Maciej', 'Kowalski', 'MKowalski123', 'test123@gmail.com', '$2y$10$cxOAuR946bLQwjzAUh9hWecqC5kS2DDFDiH.HhCal8nBOx.3ypeCe', NULL, 1, 1, '2020-06-16 11:55:06', '2020-12-27 02:38:13', 'user3-128x128.jpg 	'),
(34, 'Danylo', 'Bobrivnyk', 'DBobrivnyk', 'test111@mail.ru', '$2y$10$9VF3fFj4f8c54ql3GMZUaO2SJnRX/FH8AIJMUwgU1z4ZHczU.5MeK', NULL, 1, 2, '2020-06-19 13:13:53', '2020-12-26 16:25:10', 'hqdefault.jpg 	'),
(36, 'Hoxi', 'Moxi', 'Hoxtober', 'dany.loki@mail.ru', '$2y$10$2H2RuYTgeDVmZYv0mACOg.j.DdeWQ6w9.pg4GCuIaGb4Hx9oicceW', NULL, 2, 2, '2020-06-19 13:14:44', '2020-06-23 12:00:30', 'user3-128x128.jpg 	'),
(41, 'Andrej', 'Bondarenko', 'doodusbass', 'kukuruza2002@gmail.com', '$2y$10$7dU2ic9nEY9dHTxrAgxq1uZ0OYhkl8aI71BVKSuCFEb7UnKrfaXja', NULL, 2, 3, '2020-06-21 18:45:44', '2020-06-23 11:39:18', 'user3-128x128.jpg 	'),
(42, 'Alexandr', 'Nowak', 'MNowakicz', 'mnowak@gov.pl', '$2y$10$R4PyL4Dxc0cLrTYG7FpwceuIoJXqspyRuFjQ./h8ypbL.ij/jy8H2', NULL, 1, 3, '2020-06-22 09:59:50', '2020-06-23 13:17:05', 'user3-128x128.jpg 	'),
(43, 'Maksim', 'Diachkov', 'kaiyfman', 'makscolt@mail.ru', '$2y$10$y29FtTD8SIfkwAl8mX880.ni5PhZdfLY358d3fQlS4gzedVNB2/Vy', NULL, 1, 2, '2020-06-22 18:35:59', '2020-06-23 11:40:15', 'user3-128x128.jpg 	'),
(49, 'Bo', 'Vik', 'Bovik', 'bovim@asd.ss', '$2y$10$2BDCAukfafipIPpvuq80juyPK/1nN73QcCaoJNZEQnew4CKmY3GH2', NULL, 1, 3, '2020-12-25 17:40:14', NULL, 'user3-128x128.jpg 	'),
(50, 'yupi', 'Mupi', 'Klastra23', 'klastra@gmail.com', '$2y$10$gxH4HV./yAMEwx/ufQTmN.Y3TGZjLl3rljMcLQEs3KhR40vJaYYja', NULL, 3, 3, '2020-12-25 17:40:46', '2020-12-25 18:50:46', 'user3-128x128.jpg 	'),
(54, 'France', 'Kolinski', 'Traitor214', 'hh34@gmail.com', '$2y$10$I0RJPCMrPGNqgeDi/NHZkuRvR2u6tdQAYNbfdUQzAG5WJLwa7dRG.', NULL, 1, 3, '2020-12-27 01:01:49', '2020-12-27 01:02:52', 'user3-128x128.jpg 	'),
(55, 'Victor', 'Granowski', 'VGrano8', 'gr@gmail.com', '$2y$10$qwmLYjVF7V7yZ44jQQX63.9Ew0X0QBJlQhESTJlNMmslOEF9t24LC', NULL, 1, 3, '2020-12-27 01:02:20', NULL, 'user3-128x128.jpg 	');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`character_id`),
  ADD KEY `characters_ownerFK` (`owner_id`),
  ADD KEY `characters_racesFK` (`race_id`),
  ADD KEY `characters_classesFK` (`class_id`);

--
-- Indeksy dla tabeli `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indeksy dla tabeli `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indeksy dla tabeli `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`race_id`);

--
-- Indeksy dla tabeli `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nickname` (`nickname`),
  ADD KEY `user_permisFK` (`permission_id`),
  ADD KEY `user_statusFK` (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `characters`
--
ALTER TABLE `characters`
  MODIFY `character_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `races`
--
ALTER TABLE `races`
  MODIFY `race_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_classesFK` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  ADD CONSTRAINT `characters_ownerFK` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `characters_racesFK` FOREIGN KEY (`race_id`) REFERENCES `races` (`race_id`);

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_permisFK` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`permission_id`),
  ADD CONSTRAINT `user_statusFK` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
