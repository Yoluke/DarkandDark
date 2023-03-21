<?php
  // Defina as credenciais do banco de dados
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "login";

  // Crie uma conexão com o banco de dados
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verifique se a conexão foi bem-sucedida
  if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
  }

  // Obtenha os valores de entrada do usuário
  $username = $_POST['
