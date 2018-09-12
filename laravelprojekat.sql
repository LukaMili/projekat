-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 02:19 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelprojekat`
--

--
-- Dumping data for table `kategorijas`
--

INSERT INTO `kategorijas` (`id`, `naziv`, `created_at`, `updated_at`) VALUES
(1, 'Odeca', NULL, NULL),
(2, 'Obuca', NULL, NULL),
(3, 'Aksesoari', NULL, NULL);

--
-- Dumping data for table `korpas`
--

INSERT INTO `korpas` (`id`, `user_id`, `proizvod_id`, `kolicina`, `created_at`, `updated_at`) VALUES
(11, 4, 13, 1, '2018-09-03 01:09:32', '2018-09-03 01:09:32'),
(12, 4, 16, 1, '2018-09-03 01:10:03', '2018-09-03 01:10:03');

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2018_07_28_005733_create_kategorijas_table', 2),
(8, '2014_10_12_000000_create_users_table', 3),
(9, '2014_10_12_100000_create_password_resets_table', 3),
(10, '2018_07_28_030754_create_kategorijas_table', 3),
(11, '2018_07_29_011748_dodaj_korisniku_rolu_i_stanjeracuna', 4),
(12, '2018_08_18_215719_create_proizvods_table', 5),
(13, '2018_08_26_211455_create_korpas_table', 6),
(14, '2018_08_26_224353_create_transakcijas_table', 7),
(17, '2018_09_04_172800_create_racuns_table', 8),
(18, '2018_09_04_172904_create_stavka_racunas_table', 8);

--
-- Dumping data for table `proizvods`
--

INSERT INTO `proizvods` (`id`, `slika`, `naziv`, `opis`, `kategorija_id`, `kolicina`, `cenaPoKomadu`, `created_at`, `updated_at`) VALUES
(10, '1534684096.jpg', 'Nike KD 11 \"Paranoid\"', 'KD 2017 Kosarkase patike \r\nBoja: Crna/Plava\r\nPlatno', 2, 13, 15000, '2018-08-19 11:08:16', '2018-09-11 20:03:57'),
(11, '1534688600.jpg', 'Air Jordan 1 High Retro', 'Air Jordan 1 High Retro Kosarkase patike\r\nBoja: Plava/Bela\r\nKoza', 2, 25, 19000, '2018-08-19 12:23:20', '2018-09-11 14:39:38'),
(12, '1534690775.jpg', 'Nike Kyrie 4 “Uncle Drew”', 'Nike Kyrie 4 Kosarkase patike\r\n\"Uncle Drew\" Limited edition\r\nBoja: Bela/Plava\r\nPlatno', 2, 4, 14000, '2018-08-19 12:59:35', '2018-09-08 12:24:48'),
(13, '1534691030.jpg', 'Jordan SuperFly Team Slide', 'Air Jordan papuce\r\nSuperFly Team Slide\r\nBoja: Bela\r\nGuma', 2, 50, 4900, '2018-08-19 13:03:50', '2018-09-11 14:40:32'),
(14, '1534694393.jpg', 'Nike LeBron 15 Low \"Ashes\"', 'Lebron James Limited Edition\r\n\"Ashes\" Low\r\nBoja: Siva/Bela/Plava\r\nPlatno', 2, 5, 21000, '2018-08-19 13:59:53', '2018-08-19 13:59:53'),
(15, '1535315187.jpg', 'James Harden Kit', 'Nike NBA Houston Rockets James Harden Jersey #13', 1, 50, 8000, '2018-08-26 18:26:27', '2018-09-03 00:45:09'),
(16, '1535315428.png', 'Kyrie Irving Kit', 'Nike NBA Boston Celtics Swingman Kyrie Irving Jersey', 1, 46, 8000, '2018-08-26 18:30:28', '2018-09-09 13:03:33'),
(17, '1535315565.jpg', 'Shorts Jordan Diamond Mesh', 'White&Red Shorts from Jordan series 2018\r\nTake flight with style', 1, 30, 6000, '2018-08-26 18:32:45', '2018-09-03 00:35:00'),
(18, '1535316132.jpg', 'Jordan Rise Men\'s Basketball Shorts', 'Shorts from Air Jordan Series\r\nRed/White/Black \r\nModern Design\r\nPolyester', 1, 39, 6000, '2018-08-26 18:42:12', '2018-09-09 22:09:06'),
(19, '1535316267.jpg', 'Adidas D Rose Sleeveless Tee', 'White Sleeveless T-Shirt\r\nDerrick Rose Series\r\nWhite/Black\r\nPolyester', 1, 9, 4000, '2018-08-26 18:44:27', '2018-09-03 00:43:08'),
(20, '1536507324.jpg', 'HexPad Shooting Sleeve', 'McDavid shooting sleeve\r\nPolyester\r\nBlack', 3, 100, 4500, '2018-09-09 13:35:24', '2018-09-09 13:35:24'),
(21, '1536507425.jpg', 'Nike Hoops Basketball Sack', 'Nike Hoops Elite Basketball Gym Sack Blue', 3, 100, 5000, '2018-09-09 13:37:05', '2018-09-11 14:40:59'),
(22, '1536507510.jpg', 'Cross Compression Shorts', 'Compression Shorts For Basketball Players\r\nPolyester \r\nBlack', 3, 160, 3500, '2018-09-09 13:38:30', '2018-09-09 13:38:30'),
(23, '1536507765.jpg', 'McDavid Carpal Tunnel Compressor', 'McDavid Carpal Tunnel Compressor\r\nPolyester \r\nBlack', 3, 100, 2500, '2018-09-09 13:42:45', '2018-09-09 13:42:45'),
(24, '1536507849.jpg', 'Adidas 3-Stripes Gym Bag', 'Adidas Basketball Gym Bag Small\r\nBlack / White', 3, 99, 3000, '2018-09-09 13:44:09', '2018-09-09 22:30:02');

--
-- Dumping data for table `racuns`
--

INSERT INTO `racuns` (`id`, `ukupanIznos`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 4000, 2, '2018-09-04 16:01:38', '2018-09-04 16:01:38'),
(2, 14000, 2, '2018-09-08 14:04:12', '2018-09-08 14:04:12'),
(3, 10900, 2, '2018-09-09 22:22:26', '2018-09-09 22:22:26'),
(4, 3000, 2, '2018-09-09 22:30:10', '2018-09-09 22:30:10'),
(5, 15000, 2, '2018-09-11 20:04:03', '2018-09-11 20:04:03');

--
-- Dumping data for table `stavka_racunas`
--

INSERT INTO `stavka_racunas` (`id`, `racun_id`, `iznos`, `nazivProizvoda`, `kolicina`, `proizvod_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4000, 'Adidas D Rose Sleeveless Tee', 1, 19, '2018-09-04 16:01:38', '2018-09-04 16:01:38'),
(2, 2, 14000, 'Nike Kyrie 4 “Uncle Drew”', 1, 12, '2018-09-08 14:04:12', '2018-09-08 14:04:12'),
(3, 3, 6000, 'Jordan Rise Men\'s Basketball Shorts', 1, 18, '2018-09-09 22:22:26', '2018-09-09 22:22:26'),
(4, 3, 4900, 'Jordan SuperFly Team Slide', 1, 13, '2018-09-09 22:22:26', '2018-09-09 22:22:26'),
(5, 4, 3000, 'Adidas 3-Stripes Gym Bag', 1, 24, '2018-09-09 22:30:10', '2018-09-09 22:30:10'),
(6, 5, 15000, 'Nike KD 11 \"Paranoid\"', 1, 10, '2018-09-11 20:04:03', '2018-09-11 20:04:03');

--
-- Dumping data for table `transakcijas`
--

INSERT INTO `transakcijas` (`id`, `iznos`, `komentar`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 10000, 'Korisnik uplatio novac na racun', 2, '2018-08-31 13:35:44', '2018-08-31 13:35:44'),
(3, 10000, 'Korisnik uplatio novac na racun', 2, '2018-08-31 13:35:48', '2018-08-31 13:35:48'),
(4, 10000, 'Korisnik uplatio novac na racun', 2, '2018-08-31 13:36:26', '2018-08-31 13:36:26'),
(5, 5000, 'Korisnik uplatio novac na racun', 2, '2018-08-31 13:49:06', '2018-08-31 13:49:06'),
(6, 50000, 'Korisnik uplatio novac na racun', 4, '2018-09-02 22:00:23', '2018-09-02 22:00:23'),
(7, 4000, 'korisnik platio racun 1', 2, '2018-09-04 15:57:16', '2018-09-04 15:57:16'),
(8, 4000, 'korisnik platio racun 1', 2, '2018-09-04 15:57:54', '2018-09-04 15:57:54'),
(9, 4000, 'korisnik platio racun 1', 2, '2018-09-04 16:01:38', '2018-09-04 16:01:38'),
(10, 5000, 'Korisnik uplatio novac na racun', 2, '2018-09-08 12:24:05', '2018-09-08 12:24:05'),
(11, 12000, 'Korisnik uplatio novac na racun', 2, '2018-09-08 12:24:19', '2018-09-08 12:24:19'),
(12, 14000, 'korisnik platio racun 2', 2, '2018-09-08 14:04:12', '2018-09-08 14:04:12'),
(13, 10000, 'Korisnik uplatio novac na racun', 2, '2018-09-09 13:01:33', '2018-09-09 13:01:33'),
(14, 5000, 'Korisnik uplatio novac na racun', 2, '2018-09-09 21:53:20', '2018-09-09 21:53:20'),
(15, 10900, 'korisnik platio racun 3', 2, '2018-09-09 22:22:26', '2018-09-09 22:22:26'),
(16, 3000, 'korisnik platio racun 4', 2, '2018-09-09 22:30:10', '2018-09-09 22:30:10'),
(17, 2900, 'Korisnik uplatio novac na racun', 2, '2018-09-10 15:26:35', '2018-09-10 15:26:35'),
(18, 1000, 'Korisnik uplatio novac na racun', 2, '2018-09-10 23:25:43', '2018-09-10 23:25:43'),
(19, 1, 'Korisnik uplatio novac na racun', 2, '2018-09-10 23:30:50', '2018-09-10 23:30:50'),
(20, 999, 'Korisnik uplatio novac na racun', 2, '2018-09-10 23:31:00', '2018-09-10 23:31:00'),
(21, 1, 'Korisnik uplatio novac na racun', 2, '2018-09-10 23:31:13', '2018-09-10 23:31:13'),
(22, 999, 'Korisnik uplatio novac na racun', 2, '2018-09-10 23:31:26', '2018-09-10 23:31:26'),
(23, 15000, 'korisnik platio racun 5', 2, '2018-09-11 20:04:03', '2018-09-11 20:04:03'),
(24, 1000, 'Korisnik uplatio novac na racun', 2, '2018-09-11 20:04:25', '2018-09-11 20:04:25');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `stanjeRacuna`) VALUES
(1, 'Luka Milisavljevic', 'lukamilisavljevic@gmail.com', '$2y$10$HycYAJ/Ovs5sAs.3wdM3Qe0yjEDQ6Nw8oqP09AZCs/vRlgQLfg0yW', 'wgSrB57dkT7sGQ2dyeW3k693WTZzKR0mq012caQPaMPinOcZcMTwZQFTxFA9', '2018-07-28 23:15:17', '2018-07-28 23:15:17', 'admin', 0.00),
(2, 'korisnik', 'korisnik@gmail.com', '$2y$10$pItIt/ACZGYycm8YRgEU8efmJsEW/C/ze4630nALpZOsC9vZMs.f.', 'xtz0rAow99pGzPSLNcayJwWssGkVwmdlxqjSAoJrrsyrsLStUqs2dk4odnN9', '2018-07-28 23:34:56', '2018-09-11 20:04:26', 'korisnik', 19000.00),
(4, 'Test', 'test@gmail.com', '$2y$10$q7dYZaEEiZMtfrpJB7jnDOiJDKmFuS8y.KY/DmbSchm73Qt4NH/fO', 'g9vviyLsTSXuQsJc4UXu263AbjSVUmkkeIZ5z0QQSar8ZLi7Kg15rG6GzxMM', '2018-08-10 18:30:38', '2018-09-11 20:02:18', 'korisnik', 50000.00),
(5, 'Djuro Pilicar', 'pilicar@zemun.com', '$2y$10$dpRbC1WvvNa4VtAYWDZX/OEr4821ASnkdqpK4LwMT7epXkB55Tliy', 'nYxBRFZGu77BjdL0i9TNYIg9XYTtHKbKGXP4ECCcGJ2L7DdCA1khoNoo1l0T', '2018-08-18 19:13:26', '2018-08-18 19:13:26', 'korisnik', 0.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
