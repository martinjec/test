/* Create Database */
CREATE DATABASE IF NOT EXISTS `warehouse`;

CREATE TABLE
    `warehouse`.`goods` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `SKU` VARCHAR(255) NOT NULL,
        `name` VARCHAR(255) NOT NULL,
        `price` VARCHAR(255) NOT NULL,
        `info` VARCHAR (255)  NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;