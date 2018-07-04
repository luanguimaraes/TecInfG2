CREATE DATABASE Jornal;

CREATE TABLE News (
  id int(11) NOT NULL AUTO_INCREMENT,
  titulo varchar(100) NOT NULL,
  resumo text NOT NULL,
  noticia text NOT NULL,
  autor varchar(30) NOT NULL,
  data date NOT NULL,
  nome_imagem VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);
