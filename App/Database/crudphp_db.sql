SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crudphp_bd`
--

CREATE DATABASE IF NOT EXISTS `crudphp_bd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `crudphp_bd`;

DELIMITER $$
--
-- Procedimentos
--
CREATE PROCEDURE `deleteClient` (IN `id` INT(11))   DELETE FROM clients WHERE id = id$$

CREATE PROCEDURE `list` ()   SELECT
	id,
	name,
    hidde_email(email) AS email,
    format_born(born) AS born
FROM clients$$

CREATE PROCEDURE `readCli` (IN `id` INT(11))   SELECT
	id,
	name,
    hidde_email(email) AS email,
    format_born(born) AS born
FROM clients WHERE id = id$$

CREATE PROCEDURE `store` (IN `nm` VARCHAR(255), IN `em` VARCHAR(255), IN `dt` DATE)   INSERT INTO clients (name, email, born) VALUES (nm, em, dt)$$

CREATE PROCEDURE `updateCli` (IN `id` INT(11), IN `nom` VARCHAR(255), IN `em` VARCHAR(255), IN `dt` DATE)   UPDATE clients
SET name = nom,
	email = em,
	born = dt
WHERE id = id$$

--
-- Funções
--
CREATE FUNCTION `format_born` (`data` DATE) RETURNS VARCHAR(10) CHARSET utf8mb4  RETURN DATE_FORMAT(data, '%d/%m/%Y')$$

CREATE FUNCTION `hidde_email` (`email` VARCHAR(255)) RETURNS VARCHAR(255) CHARSET utf8mb4  BEGIN
    DECLARE pos INT;
    SET pos = LOCATE('@', email);
    RETURN CONCAT(SUBSTRING(email, 1, pos), '****');
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE `clients` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(895) NOT NULL,
  `email` varchar(345) NOT NULL,
  `born` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
