

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema gestante
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `gestante` ;

-- -----------------------------------------------------
-- Schema gestante
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `gestante` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci ;
USE `gestante` ;

-- -----------------------------------------------------
-- Create user
-- -----------------------------------------------------
DROP USER `sisgestante`@`localhost`;
CREATE USER `sisgestante`@`localhost` identified by "123456";
GRANT ALL PRIVILEGES ON gestante.* TO `sisgestante`@`localhost`;
FLUSH PRIVILEGES;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
