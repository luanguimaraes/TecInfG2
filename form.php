<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Game News</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
  </head>
  <body>
     <div id="interface">  <!-- bug no xampp? -->
      <div id="top">
        <img src="http://placehold.it/50x40" alt="Place Hold">
        <h1>Game News</h1>
      </div>
      <div id="menu">
        <a href="">Home</a>
        <a href="">Notícias</a>
        <a href="">Nova Notícia</a>
      </div>
      <div id="banner">
        <img src="img/banner.jpg" alt="Place Hold">
      </div>
      <button onclick="topFunction()" id="botao" title="top">^</button>

      <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
          <label for="fname">Título</label>
          <input type="text" id="fname" name="titulo">

          <label for="subject">Resumo</label>
          <textarea id="subject" name="resumo" placeholder="Write something.." style="height:100px"></textarea>

          <label for="subject">Notícia</label>
          <textarea id="subject" name="noticia" style="height:200px"></textarea>

          <label for="fname">Autor</label>
          <input type="text" id="fname" name="autor">

          <label for="fname">Imagem</label>
          <input type="file" id="fname" name="userfile">

          <input type="submit" name="submit">
        </form>

        <?php
    if (isset($_POST['submit'])) {
          include 'connection.php';

          $titulo = $_POST ["titulo"];
          $resumo = $_POST ["resumo"];
          $noticia = $_POST ["noticia"];
          $autor = $_POST ["autor"];
          $foto = $_FILES ["userfile"];

          if (!empty($foto["name"])) {
            echo 'entrou';
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
            $caminho_imagem = "fotos/" . $nome_imagem;
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
          }else{
            echo 'não entrou';
            $nome_imagem = '';
          }

          // Inserir no Banco
          $sql = "INSERT INTO News (titulo, resumo, noticia, autor, nome_imagem, data) VALUES ('$titulo', '$resumo', '$noticia', '$autor', '$nome_imagem', current_timestamp)";
          if($conn->query($sql) === TRUE){
            echo 'Registro adicionado com sucesso';
          }else{
            echo 'Erro: ' . $sql . '<br />' . $conn->error;
          }

          // Fechar conexão
          $conn->close();
    }
        ?>
      </div>


      <div id="bot">
        <h2>teste</h2>
      </div>
      <div id="footer">

      </div>
    </div>
    <script src="js/botao.js"></script>
  </body>
</html>
