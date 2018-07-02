<?php
  include 'connection.php';

  $titulo = $_POST ["titulo"];
  $noticia = $_POST ["noticia"];
  $autor = $_POST ["autor"];

  // Inserir no Banco
  $sql = "INSERT INTO News (titulo, noticia, autor) VALUES ('$titulo', '$noticia', '$autor')";
  if($conn->query($sql) === TRUE){
    echo 'registro adicionado com sucesso';
  }else{
    echo 'Erro: ' . $sql . '<br />' . $conn->error;
  }

  // Fechar conexão
  $conn->close();
