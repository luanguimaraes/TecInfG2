CREATE DATABASE Jornal;

CREATE TABLE News (
  id int(11) NOT NULL,
  titulo varchar(30) NOT NULL,
  resumo text NOT NULL,
  noticia text NOT NULL,
  autor varchar(30) NOT NULL,
  data date NOT NULL,
  PRIMARY KEY (id)
);