CREATE DATABASE GUERILLA

-----------------tablas de objetos del juego------------------------
CREATE TABLE unid_batalla (
    unid_batallaID int AUTO_INCREMENT,
    PRIMARY  KEY(unid_batallaID),
    tipo varchar(10) NOT null,
    defensa int NOT null,
    ataque int NOT null,
    salud int NOT null,
);

CREATE TABLE recursos (
    recursosID int AUTO_INCREMENT,
    PRIMARY  KEY(recursosID),
    tipo varchar(10) NOT null,
    valor int NOT null,
);

CREATE TABLE perfil (
    perfilID int AUTO_INCREMENT,
    PRIMARY  KEY(perfilID),
    tipo varchar(10) NOT null,
    valor int NOT null,
);

--------------------tablas de usuario---------------------------------
CREATE TABLE guerilla (
    guerrillaID int AUTO_INCREMENT,
    PRIMARY  KEY(guerrillaID),
    nombre varchar(10) NOT null,
    perfilID int,
    constraint perfilIDFK FOREIGN KEY(perfilID) REFERENCES perfil(perfilID)
    recursosID int,
    constraint recursosIDFK FOREIGN KEY(recursosID) REFERENCES perfil(recursosID)
	unid_batallaID int,
    constraint unid_batallaIDFK FOREIGN KEY(unid_batallaID) REFERENCES perfil(unid_batallaID)
);

CREATE TABLE usuario (
    usuarioID int AUTO_INCREMENT,
    PRIMARY  KEY(usuarioID),
    nombre varchar(10) NOT null,
    correo varchar(50) NOT null,
    guerrillaID int,
    constraint guerrillaIDFK FOREIGN KEY(guerrillaID) REFERENCES guerrilla(guerrillaID)
);

----------------------procedimientos de insercion -------------------

CREATE PROCEDURE sp_insertarUnid_batalla
(tipo varchar(10), defensa int, ataque int, salud int) 
INSERT INTO unid_batalla 
(tipo, defensa, ataque, salud)  VALUES  (tipo, defensa, ataque, salud);

CREATE PROCEDURE sp_insertarRecursos
(tipo varchar(10), valor int) 
INSERT INTO recursos 
(tipo, valor)  VALUES  (tipo, valor);

CREATE PROCEDURE sp_insertarPerfil
(tipo varchar(10), valor int) 
INSERT INTO perfil 
(tipo, valor)  VALUES  (tipo, valor);

CREATE PROCEDURE sp_insertarGuerrilla
(nombre varchar(10), perfilID int,recursosID int ,unid_batallaID int ) 
INSERT INTO guerilla 
(nombre, perfilID, recursosID, unid_batallaID)  VALUES  (nombre, perfilID, recursosID, unid_batallaID);

CREATE PROCEDURE sp_insertarUsuario
(nombre varchar(10), correo varchar(50),guerrillaID int) 
INSERT INTO usuario
(nombre, correo, guerrillaID )  VALUES  (nombre, perfilID, recursosID, unid_batallaID);


-------------------procedimientos de eliminacion---------------------
