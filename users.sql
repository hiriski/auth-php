-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table phpauth.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `register_at`) VALUES
	(1, 'Riski', 'hello@riski.web.id', '$2y$10$KW.hg9yYQ8SOqoq6Wi8n7OZrj9TZaR0DIbqWBb5kiHeXuBCqk75CW', 2, '2020-01-19 08:09:39'),
	(2, 'Huynh', 'huynh@gmail.com', '$2y$10$0havxop.M7qYQSutMZtMVObWi2sL0bTRUQWbOu4GBeeOf/tEw9spq', 1, '2020-01-19 08:14:31'),
	(7, 'Budi', 'budi@gmail.com', '$2y$10$AAwvX.o52MEYa.DkP.9orug6HR8ExlPZ1CEdM5Fy/k39SQhCcKN7i', 1, '2020-02-01 17:26:21');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
