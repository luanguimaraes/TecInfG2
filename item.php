<?php
  include 'connection.php';

  $id = $_GET['id'];

  $sql = "SELECT * FROM News WHERE id=" . $id;
  $data = $conn->query($sql);

  if ($data->num_rows > 0) {
    while($item = $data->fetch_assoc()){
      echo '<div class="noticia">';
      if($item['nome_imagem']!=''){
        echo '  <div class="foto"><img src=fotos/'.$item['nome_imagem'].' alt="Image"></div>';
      }
      echo '  <div class="conteudo">';
      echo '    <h3 class="titulo">' . $item['titulo'] . '</h3>';
      echo '    <p class="noticia">' . $item['noticia'] . '</p>';
      echo '    <p class="noticia">' . $item['autor'] . '</p>';
      echo '    <p class="noticia">' . $item['data'] . '</p>';
      echo '  </div>';
      echo '</div>';
    }
  }
  else{
    echo 'Nenhum registro encontrado . <br />';
  }

 ?>
