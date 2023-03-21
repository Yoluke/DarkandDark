<?php
// Inicializa a sessão
session_start();

// Verifica se o formulário de login foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Define as credenciais de acesso (substitua com as suas próprias credenciais)
    $username = "Lucas";
    $password = "1234";
    
    // Verifica se as credenciais estão corretas
    if($_POST["username"] == $username && $_POST["password"] == $password) {
        
        // Define a sessão do usuário como autenticada
        $_SESSION["auth"] = true;
        
        // Redireciona o usuário para a página desejada
        header('Location: main_page.html');
        exit();

    } else {
        // Se as credenciais estiverem incorretas, exibe uma mensagem de erro
        $error = "Usuário ou senha incorretos";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Histórias de Terror - Login</title>  
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Histórias de Terror</h1>
      <nav>
        <ul>
          <li><a href="#">Início</a></li>
          <li><a href="#">Histórias</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </nav>
    </div>
    <div class="content">
      <form id="login-form" class="login-form" method="post">
        <h2>Login</h2>
        <?php if(isset($error)) { ?>
        <p class="error"><?php echo $error; ?></p>
        <?php } ?>
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Entrar</button>
      </form>
    </div>
  </div>
  <div class="footer">
    <p class="warning">Conteúdo para maiores de 18 anos - Este site contém histórias de terror</p>
  </div>
  <script src="index.js"></script>
</body>
</html>
