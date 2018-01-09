SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `botepaylasim.com` ;
CREATE SCHEMA IF NOT EXISTS `botepaylasim.com` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `botepaylasim.com` ;

-- -----------------------------------------------------
-- Table `botepaylasim.com`.`uye`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `botepaylasim.com`.`uye` (
  `kullaniciadi` VARCHAR(255) NOT NULL ,
  `eposta` VARCHAR(255) NOT NULL ,
  `sifre` CHAR(40) NOT NULL ,
  `yetki` TINYINT(1) NOT NULL ,
  PRIMARY KEY (`kullaniciadi`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `botepaylasim.com`.`icerik`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `botepaylasim.com`.`icerik` (
  `kod` INT NOT NULL AUTO_INCREMENT ,
  `baslik` VARCHAR(255) NOT NULL ,
  `htmlkod` TEXT NOT NULL ,
  `yukleyen` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`kod`) ,
  INDEX `fk_icerik_uye1_idx` (`yukleyen` ASC) ,
  CONSTRAINT `fk_icerik_uye1`
    FOREIGN KEY (`yukleyen` )
    REFERENCES `botepaylasim.com`.`uye` (`kullaniciadi` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `botepaylasim.com`.`yorum`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `botepaylasim.com`.`yorum` (
  `yapilan` INT NOT NULL ,
  `yapan` VARCHAR(255) NOT NULL ,
  `metin` TEXT NOT NULL ,
  `zaman` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  INDEX `fk_icerik_has_uye_uye1_idx` (`yapan` ASC) ,
  INDEX `fk_icerik_has_uye_icerik_idx` (`yapilan` ASC) ,
  PRIMARY KEY (`yapilan`, `yapan`, `zaman`) ,
  CONSTRAINT `fk_icerik_has_uye_icerik`
    FOREIGN KEY (`yapilan` )
    REFERENCES `botepaylasim.com`.`icerik` (`kod` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_icerik_has_uye_uye1`
    FOREIGN KEY (`yapan` )
    REFERENCES `botepaylasim.com`.`uye` (`kullaniciadi` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `botepaylasim.com` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
