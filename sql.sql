-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema bienesRaices
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bienesRaices
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bienesRaices` DEFAULT CHARACTER SET utf8 ;
USE `bienesRaices` ;

-- -----------------------------------------------------
-- Table `bienesRaices`.`vendedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bienesRaices`.`vendedor` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `celular` VARCHAR(9) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bienesRaices`.`propiedad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bienesRaices`.`propiedad` (
  `id` INT UNSIGNED NOT NULL,
  `titulo` VARCHAR(45) NOT NULL,
  `precio` DECIMAL(10,2) NOT NULL,
  `descripcion` LONGTEXT NULL,
  `habitaciones` INT(2) NOT NULL,
  `servicosHigienicos` INT(2) NOT NULL,
  `estacionamiento` INT(2) NOT NULL,
  `creacion` DATE NOT NULL,
  `imagen` VARCHAR(300) NULL,
  `vendedor_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_propiedad_vendedor_idx` (`vendedor_id` ASC) VISIBLE,
  FULLTEXT INDEX `find_descripcion` (`descripcion`) VISIBLE,
  CONSTRAINT `fk_propiedad_vendedor`
    FOREIGN KEY (`vendedor_id`)
    REFERENCES `bienesRaices`.`vendedor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
