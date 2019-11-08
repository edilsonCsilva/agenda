 CREATE SCHEMA `agenda_contato` ;

 use agenda_contato;
 
 CREATE TABLE `agenda_contato`.`contato` (
 `id` INT NOT NULL AUTO_INCREMENT,
 `nome` VARCHAR(45) NULL,
 `sexo` VARCHAR(1) NULL,
 `idade` INT NULL,
 PRIMARY KEY (`id`));

CREATE USER 'still'@'localhost' IDENTIFIED BY 'still';
GRANT ALL PRIVILEGES ON * . * TO 'still'@'localhost';
FLUSH PRIVILEGES;