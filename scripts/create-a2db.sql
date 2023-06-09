-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema onaopemipo
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema onaopemipo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `onaopemipo` DEFAULT CHARACTER SET utf8 ;
USE `onaopemipo` ;

-- -----------------------------------------------------
-- Table `onaopemipo`.`Parts075`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onaopemipo`.`Parts075` (
  `partNo075` INT NOT NULL,
  `partName075` VARCHAR(45) NULL,
  `currentPrice075` DECIMAL(10,2) NULL,
  `qoh075` INT NULL,
  PRIMARY KEY (`partNo075`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `onaopemipo`.`Parts075`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onaopemipo`.`Parts075` (
  `partNo075` INT NOT NULL,
  `partName075` VARCHAR(45) NULL,
  `currentPrice075` DECIMAL(10,2) NULL,
  `qoh075` INT NULL,
  PRIMARY KEY (`partNo075`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `onaopemipo`.`Clients075`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onaopemipo`.`Clients075` (
  `clientId075` INT NOT NULL,
  `clientName075` VARCHAR(45) NULL,
  `clientPassword075` VARCHAR(45) NULL,
  `clientCity075` VARCHAR(45) NULL,
  `moneyOwed075` VARCHAR(45) NULL,
  PRIMARY KEY (`clientId075`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `onaopemipo`.`POs075`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onaopemipo`.`POs075` (
  `poNo075` INT NOT NULL,
  `clientCompId075` INT NULL,
  `dateOfPO075` DATETIME NULL,
  `status075` VARCHAR(45) NULL,
  PRIMARY KEY (`poNo075`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `onaopemipo`.`Lines075`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onaopemipo`.`Lines075` (
  `poNo075` INT NOT NULL,
  `partNo075` INT NOT NULL,
  `qty075` INT NULL,
  `priceOrdered075` DECIMAL(10,2) NULL,
  PRIMARY KEY (`poNo075`, `partNo075`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
