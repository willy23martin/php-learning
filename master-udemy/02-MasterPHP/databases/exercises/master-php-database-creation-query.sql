/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  William Martín Chávez González
 * Created: 2/09/2020
 */

CREATE TABLE coches (
    id INT AUTO_INCREMENT NOT NULL,
    modelo VARCHAR(255) NOT NULL DEFAULT 'N/A',
    marca VARCHAR(255) NOT NULL DEFAULT 'N/A',
    precio INT NOT NULL DEFAULT 0,
    stock INT NOT NULL DEFAULT 0,
    CONSTRAINT pk_coche PRIMARY KEY(id)
)ENGINE=INNODB;

CREATE TABLE grupos (
    id INT AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    ciudad VARCHAR(255) NOT NULL,
    CONSTRAINT pk_grupo PRIMARY KEY (id)
)ENGINE=INNODB;


CREATE TABLE vendedores (
    id INT AUTO_INCREMENT NOT NULL,
    grupo_id INT NOT NULL,
    nombre VARCHAR(255) not null DEFAULT 'N/A',
    apellidos VARCHAR(255) NOT NULL DEFAULT 'N/A',
    cargo VARCHAR(100) NOT NULL DEFAULT 'N/A',
    fecha_alta DATE NOT NULL,
    sueldo FLOAT(20,2) NOT NULL DEFAULT 0,
    comision FLOAT(10,2) NOT NULL DEFAULT 0,
    jefe INT NOT NULL,
    CONSTRAINT pk_vendedor PRIMARY KEY(id),
    CONSTRAINT fk_grupo_id FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=INNODB;


CREATE TABLE clientes (
    id INT AUTO_INCREMENT NOT NULL,
    vendedor_id INT NOT NULL,
    nombre VARCHAR(255) NOT NULL DEFAULT 'N/A',
    ciudad VARCHAR(255) NOT NULL DEFAULT 'N/A',
    gastado BOOLEAN NOT NULL DEFAULT FALSE,
    CONSTRAINT pk_cliente PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_id FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=INNODB;



CREATE TABLE encargos (
    id INT AUTO_INCREMENT NOT NULL,
    cliente_id 	INT NOT NULL,
    coche_id INT NOT NULL,
    cantidad INT NOT NULL DEFAULT 0,
    fecha DATE NOT NULL,
    CONSTRAINT pk_encargo PRIMARY KEY(id),
    CONSTRAINT fk_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=INNODB;
