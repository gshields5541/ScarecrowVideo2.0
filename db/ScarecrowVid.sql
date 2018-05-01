-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema scarecrowVidDB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema scarecrowVidDB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `scarecrowVidDB` DEFAULT CHARACTER SET utf8 ;
USE `scarecrowVidDB` ;

-- -----------------------------------------------------
-- Table `scarecrowVidDB`.`CUSTOMER`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scarecrowVidDB`.`CUSTOMER` (
  `idCUSTOMER` INT(11) NOT NULL,
  `fname` VARCHAR(20) NULL DEFAULT NULL,
  `lname` VARCHAR(20) NULL DEFAULT NULL,
  `address` VARCHAR(20) NULL DEFAULT NULL,
  `city` VARCHAR(20) NULL DEFAULT NULL,
  `state` VARCHAR(2) NULL DEFAULT NULL,
  `IMDb_ID(1)` VARCHAR(11) NOT NULL,
  `IMDb_ID(2)` VARCHAR(11) NULL DEFAULT NULL,
  `movRenStart` DATETIME NULL DEFAULT NULL,
  `movRenEnd` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idCUSTOMER`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `scarecrowVidDB`.`RENT/BUY`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scarecrowVidDB`.`RENT/BUY` (
  `IMDb_ID` VARCHAR(11) NOT NULL,
  `Type` VARCHAR(5) NULL DEFAULT NULL,
  `Title` VARCHAR(45) NULL DEFAULT NULL,
  `Year` YEAR(4) NULL DEFAULT NULL,
  `Plot` VARCHAR(150) NULL DEFAULT NULL,
  `Actors` VARCHAR(100) NULL DEFAULT NULL,
  `Director` VARCHAR(20) NULL DEFAULT NULL,
  `Writer` VARCHAR(60) NULL DEFAULT NULL,
  `Country` VARCHAR(20) NULL DEFAULT NULL,
  `Languages` VARCHAR(20) NULL DEFAULT NULL,
  `Metascore` VARCHAR(5) NULL DEFAULT NULL,
  `imdbVotes` VARCHAR(5) NULL DEFAULT NULL,
  `imdbRating` VARCHAR(5) NULL DEFAULT NULL,
  `Rated` VARCHAR(4) NULL DEFAULT NULL,
  `Runtime` VARCHAR(5) NULL DEFAULT NULL,
  `Released` VARCHAR(4) NULL DEFAULT NULL,
  `quantity` VARCHAR(4) NOT NULL,
  `price` DECIMAL(6,2) NOT NULL,
  `Genre` VARCHAR(40) NULL DEFAULT NULL,
  PRIMARY KEY (`IMDb_ID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
