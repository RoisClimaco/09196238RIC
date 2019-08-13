CREATE DATABASE dbcustomerregistrationsystem;
USE dbcustomerregistrationsystem;
CREATE TABLE `dbcustomerregistrationsystem`.`tblusers` ( `userid` INT NOT NULL , `firstname` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , PRIMARY KEY (`userid`)) ENGINE = InnoDB;