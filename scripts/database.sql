CREATE DATABASE desafio_bluepex;

USE desafio_bluepex;

CREATE TABLE computadores (
  id int(11) NOT NULL,
  departamento varchar(255) NOT NULL,
  bloco varchar(255) NOT NULL,
  andar varchar(255) NOT NULL,
  td varchar(255) NOT NULL,
  processador varchar(255) NOT NULL,
  placamae varchar(255) NOT NULL,
  memoria varchar(255) NOT NULL,
  placavideo varchar(255) NOT NULL,
  hd varchar(255) NOT NULL,
  so varchar(255) NOT NULL,  
  created datetime NOT NULL,
  modified datetime NOT NULL
);

ALTER TABLE computadores
  ADD PRIMARY KEY (id);
  
ALTER TABLE computadores
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;