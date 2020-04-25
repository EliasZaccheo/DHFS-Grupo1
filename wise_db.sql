-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `wise_db` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema wise_db
-- -----------------------------------------------------
USE `wise_db` ;

-- -----------------------------------------------------
-- Table `mydb`.`Ranking`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wise_db`.`Ranking` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `arte` INT(6) UNSIGNED NOT NULL DEFAULT 0,
  `ciencia` INT(6) UNSIGNED NOT NULL DEFAULT 0,
  `cultura` INT(6) UNSIGNED NOT NULL,
  `entretenimiento` INT(6) UNSIGNED NOT NULL DEFAULT 0,
  `gastronomia` INT(6) UNSIGNED NOT NULL DEFAULT 0,
  `deportes` INT(6) UNSIGNED NOT NULL DEFAULT 0,
  `historia` INT(6) UNSIGNED NOT NULL DEFAULT 0,
  `farandula` INT(6) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Admins`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wise_db`.`Admins` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Users_id` INT UNSIGNED NOT NULL,
  `Users_Ranking_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `Users_id`, `Users_Ranking_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_Admins_Users1_idx` (`Users_id` ASC, `Users_Ranking_id` ASC),
  CONSTRAINT `fk_Admins_Users1`
    FOREIGN KEY (`Users_id` , `Users_Ranking_id`)
    REFERENCES `wise_db`.`Users` (`id` , `Ranking_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wise_db`.`Estado` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `estado` VARCHAR(45) NULL,
  `desde` DATE NULL,
  `Admins_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `Admins_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_Estado_Admins1_idx` (`Admins_id` ASC),
  CONSTRAINT `fk_Estado_Admins1`
    FOREIGN KEY (`Admins_id`)
    REFERENCES `wise_db`.`Admins` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wise_db`.`Users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `birthday` DATETIME NULL,
  `email` VARCHAR(45) NULL,
  `profileImage` BLOB NULL,
  `Ranking_id` INT UNSIGNED NOT NULL,
  `alias` VARCHAR(45) NULL,
  `Estado_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `Ranking_id`, `Estado_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  INDEX `fk_Users_Ranking_idx` (`Ranking_id` ASC),
  UNIQUE INDEX `alias_UNIQUE` (`alias` ASC),
  INDEX `fk_Users_Estado1_idx` (`Estado_id` ASC),
  CONSTRAINT `fk_Users_Ranking`
    FOREIGN KEY (`Ranking_id`)
    REFERENCES `wise_db`.`Ranking` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Users_Estado1`
    FOREIGN KEY (`Estado_id`)
    REFERENCES `wise_db`.`Estado` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Preguntas&Respuetas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wise_db`.`Preguntas&Respuetas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `pregunta` VARCHAR(100) NOT NULL,
  `respuesta1` VARCHAR(100) NOT NULL,
  `respuesta2` VARCHAR(100) NOT NULL,
  `respuesta3` VARCHAR(100) NOT NULL,
  `respuesta4` VARCHAR(100) NOT NULL,
  `respuestaCorrecta` VARCHAR(100) NOT NULL,
  `Admins_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `Admins_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_Preguntas&Respuetas_Admins1_idx` (`Admins_id` ASC),
  CONSTRAINT `fk_Preguntas&Respuetas_Admins1`
    FOREIGN KEY (`Admins_id`)
    REFERENCES `wise_db`.`Admins` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
