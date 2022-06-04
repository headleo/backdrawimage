-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Nov-2021 às 15:05
-- Versão do servidor: 8.0.27
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Cesar', 'cesar@celke.com.br', '$2y$10$N3TSzBpjifKOE2GEDoBhvOwr6gci538CoAjRpy6PWpBEXMbzI2b5y'),
(2, 'Cesar 2', 'cesar2@celke.com.br', '$2y$10$uvr4t.BXBJkn7vofJ5sGleNvA54xG18T5TftkHztj0KMg9V2DCn0O'),
(3, 'Cesar 3', 'cesar3@celke.com.br', '$2y$10$fpq5cwdPlqtUtdFX9/nExO0I1yaZ1K.R0wAvxa9XMVpPJA/7BF37O'),
(4, 'Cesar 4', 'cesar4@celke.com.br', '$2y$10$YK/u8URmJL8JEBgWTsJYiO1gpo/Imil.9XUBF5ISS5sPcmOnrZER6'),
(5, 'Cesar 5', 'cesar5@celke.com.br', '$2y$10$iaREbWAlJESc1QcZb.SPTOOlrGmlwPZsFz6p7AMeMLo4oIXUlGnua'),
(6, 'Cesar', 'cesar6@celke.com.br', '$2y$10$3PRUYfJVOQhlwrfNfapxCeNpldDv/CAzdmHyIYap1F.lzsRhTUnA6'),
(7, 'Cesar 7', 'cesar7@celke.com.br', '$2y$10$NKzBDlM5o2vER6T7SUTxTemUepeJEgHavbP7RsljaLocvXVMAIwyS'),
(8, 'Cesar', 'cesar8@celke.com.br', '$2y$10$bzDh7c//tVLVy5kW/2KaGe2bO7fUz1qgMPV34OQk9zAHG17HMt3t.'),
(9, 'Cesar 9', 'cesar9@celke.com.br', '$2y$10$cklB1FqRrGo4RhNt6pItguRSOhgAlCblpa/xzOyX1jAaCheAfrJga');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
