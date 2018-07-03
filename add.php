<?php
  include 'connection.php';

  $titulo = $_POST ["titulo"];
  $noticia = $_POST ["noticia"];
  $autor = $_POST ["autor"];
  $foto = $_FILES["foto"];

  // Inserir no Banco
  preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
  $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
  $caminho_imagem = "fotos/" . $nome_imagem;
  move_uploaded_file($foto["tmp_name"], $caminho_imagem);
  $sql = "INSERT INTO News (titulo, noticia, autor, nome_imagem) VALUES ('$titulo', '$noticia', '$autor', $nome_imagem)";
  if($conn->query($sql) === TRUE){
    echo 'registro adicionado com sucesso';
  }else{
    echo 'Erro: ' . $sql . '<br />' . $conn->error;
  }

  // Fechar conexão
  $conn->close();
