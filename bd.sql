CREATE DATABASE  IF NOT EXISTS `arqui_lab`;
USE `arqui_lab`;

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `email` varchar(30),
  
  PRIMARY KEY (`id`)
);

INSERT INTO usuario (matricula, nombre, apellidos, email) VALUES ('01088197','Rafael','Garcia','rafa@correo.com');
INSERT INTO usuario (matricula, nombre, apellidos, email) VALUES ('01087554','Humberto','Garza','guayon@correo.com');
INSERT INTO usuario (matricula, nombre, apellidos, email) VALUES ('01082171','Alan','Gandara','elalan@correo.com');
