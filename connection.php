<?php
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'Jornal';

  // Conexão
  $conn = new mysqli($host, $username, $password, $database);

  // Checar coneção
  if($conn->connect_error){
    die("Conexão falhou: " . $conn->connect_error);
  }

  echo 'Conectado ao banco de dados: ' . $database;
  echo '<br />';

 ?>
