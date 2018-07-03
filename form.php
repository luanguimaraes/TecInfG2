<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Formulário</title>
    <style media="screen">
      body{
        background-color: ;
      }
    </style>
  </head>
  <body>


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
      Título: <input type="text" name="titulo"><br />
      Notícia: <input type="text" name="noticia"><br />
      Autor: <input type="text" name="autor"><br />
      Foto: <input type="file" name="userfile" />
      <input type="submit" name="submit">
    </form>



    <?php
if (isset($_POST['submit'])) {
      include 'connection.php';

      $titulo = $_POST ["titulo"];
      $noticia = $_POST ["noticia"];
      $autor = $_POST ["autor"];
      $foto = $_FILES["userfile"];

      if (!empty($foto["userfile"])) {
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
        $caminho_imagem = "fotos/" . $nome_imagem;
        move_uploaded_file($foto["tmp_name"], $caminho_imagem);
      }else{
        $nome_imagem = '';
      }

      // Inserir no Banco
      $sql = "INSERT INTO News (titulo, noticia, autor, nome_imagem, data) VALUES ('$titulo', '$noticia', '$autor', '$nome_imagem', current_timestamp)";
      if($conn->query($sql) === TRUE){
        echo 'registro adicionado com sucesso';
      }else{
        echo 'Erro: ' . $sql . '<br />' . $conn->error;
      }

      // Fechar conexão
      $conn->close();
}
    ?>


  </body>
</html>
