<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Game News</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
     <div id="interface">  <!-- bug no xampp? -->
      <div id="top">
        <img src="http://placehold.it/50x40" alt="Place Hold">
        <h1>Game News</h1>
      </div>
      <div id="menu">
        <a href="">Item 1</a>
        <a href="">Item 2</a>
        <a href="">Item 3</a>
      </div>
      <div id="banner">
        <img src="http://placehold.it/1980x720" alt="Place Hold">
      </div>
      <div id="noticias">
        <h2>Noticias</h2>
        <div class="box">
          <?php
            include 'connection.php';

            $sql = "SELECT * FROM News";
            $data = $conn->query($sql);

            if ($data->num_rows > 0) {
              while($item = $data->fetch_assoc()){
                echo '<div class="noticia">';
                echo '  <div class="foto"><img src="http://placehold.it/480x320" alt="Placeholder"></div>';
                echo '  <div class="conteudo">';
                echo '    <h3 class="titulo">' . $item['titulo'] . '</h3>';
                echo '    <p class="resumo">' . $item['noticia'] . '</p>';
                echo '<a href="item.php?id=' . $item['id'] . '">Saiba Mais...</a>';
                echo '  </div>';
                echo '</div>';
              }
            }
            else{
              echo 'Nenhuma notícia encontrada . <br />';
            }
           ?>
        </div>
      </div>
      <div id="bot">

      </div>
      <div id="footer">

      </div>
    </div>
  </body>
</html>
