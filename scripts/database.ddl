
CREATE DATABASE sapo;

CREATE TABLE secretarias (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR (255) NOT NULL UNIQUE,
    sigla VARCHAR (150) NOT NULL UNIQUE,

    CONSTRAINT pk_cidadao PRIMARY KEY (id)
);