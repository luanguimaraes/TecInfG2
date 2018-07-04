<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Game News</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/item.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
  </head>
  <body>
     <div id="interface">  <!-- bug no xampp? -->
      <div id="top">
          <img src="http://placehold.it/50x40" alt="Place Hold">
        <h1>Game News</h1>
      </div>
      <div id="menu">
        <a href="index.php">Home</a>
        <a href="index.php#noticias">Notícias</a>
        <a href="form.php#formulario">Nova Notícia</a>
      </div>
      <div id="banner">
        <img src="img/game_news_banner.png" alt="Place Hold">
      </div>
      <button onclick="topFunction()" id="botao" title="top">^</button>
      <div id="noticia">
        <?php
          include 'connection.php';

          $id = $_GET['id'];

          $sql = "SELECT * FROM News WHERE id=" . $id;
          $data = $conn->query($sql);

          if ($data->num_rows > 0) {
            while($item = $data->fetch_assoc()){
              echo '<div class="noticia">';
              if($item['nome_imagem']!=''){
                echo '    <h2 class="titulo">' . $item['titulo'] . '</h2>';
                echo '  <div class="foto_noticia"><img src=fotos/'.$item['nome_imagem'].' alt="Image"></div>';
              }
              echo '  <div class="conteudo">';
              // echo '    <h2 class="titulo">' . $item['titulo'] . '</h2>';
              echo '    <p class="box">' . $item['noticia'] . '</p>';
              echo '    <p class="autor">' ."Por: " . $item['autor'] . '</p>';
              echo '    <p class="dia_post">' ."Postado em: " . $item['data'] . '</p>';
              echo '  </div>';
              echo '</div>';
            }
          }
          else{
            echo 'Nenhum registro encontrado . <br />';
          }

         ?>
      </div>


      <div id="bot">

      </div>
      <div id="footer">

      </div>
    </div>
    <script src="js/botao.js"></script>
  </body>
</html>
