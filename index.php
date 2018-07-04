﻿<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Game News</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
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
      <div id="noticias">
        <h2>Noticias</h2>

//News

    <div id="news">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Notícias</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 ">
            <div class="news">
              <div class="row">
                <div class="col-12 col-lg-12 col-xl-12">
                  <div class="content">
                    <h4> <em class="autor">Autor: Siclano</em> </h4>
                    <h3 class="title">Título - Lorem ipsum dolor sit amet,Ut enim ad minim veniam,</h3>
                    <p class="resumo">Resumo da noticia consectetur adipisicing elit, ut labore et dolore.</p>
                    <div class="col-12 ">
                      <div class="picture"><img src="http://placehold.it/960x500" alt="Placeholder"></div>
                    </div>
                    <p class="descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint quae quasi accusantium officia eligendi totam ratione, ex assumenda non voluptas aliquid vitae unde blanditiis, sit expedita adipisci voluptate ab, dolor.Quidem unde, assumenda
                      aperiam pariatur non repellat nisi earum soluta facilis recusandae. Perspiciatis facere esse ducimus, placeat nemo, deserunt eius fugiat reiciendis, amet quam quas quod quae ipsa quidem architecto.</p>
                  </div>
                  <p class="data"><em>Publicado em <time datetime="2018-09-05" pubdate>05 de setembro de 2018</em></time>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 ">
            <div class="news">
              <div class="row">
                <div class="col-12 ">
                  <div class="content"><hr>
                    <h4> <em class="autor">Autor: Siclano</em> </h4>
                    <h3 class="title">Título - Lorem ipsum dolor sit amet,Ut enim ad </h3>
                    <p class="resumo">Resumo da noticia consectetur adipisicing elit, ut  magna aliqua.</p>
                    <div class="col-12 ">
                      <div class="picture"><img src="http://placehold.it/960x500" alt="Placeholder"></div>
                    </div>
                    <p class="descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint quae quasi accusantium officia eligendi totam ratione, ex assumenda non voluptas aliquid vitae unde blanditiis, sit expedita adipisci voluptate ab, dolor.Quidem unde, assumenda
                      aperiam pariatur non repellat nisi earum soluta facilis recusandae. Perspiciatis facere esse ducimus, placeat nemo, deserunt eius fugiat reiciendis, amet quam quas quod quae ipsa quidem architecto.</p>
                  </div>
                  <p class="data"><em>Publicado em <time datetime="2018-09-05" pubdate>05 de setembro de 2018</em></time><hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


        <div class="box">
          <?php
            include 'connection.php';

            $sql = "SELECT * FROM News";
            $data = $conn->query($sql);

            if ($data->num_rows > 0) {
              while($item = $data->fetch_assoc()){
                echo '<div class="noticia">';
                if($item['nome_imagem']==''){
                  echo '  <div class="foto"><img src="img/no-image.jpg" alt="Image"></div>';
                }else{
                  echo '  <div class="foto"><img src=fotos/'.$item['nome_imagem'].' alt="Image"></div>';
                }
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
        <h2>teste</h2>
      </div>
      <div id="footer">

      </div>
    </div>
    <script src="js/botao.js"></script>
  </body>
</html>
