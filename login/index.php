<?php 

session_start(); 

if(@$_SESSION['email']){
  header('Location: painel.php');
}

?>

<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="https://www.omgchrome.com/wp-content/uploads/2012/08/favicon.png"
    type="image/x-icon" />
  <meta name="keywords" content="bookmarks, login, metatag, html" />
  <meta http-equiv="content-language" content="pt-br" />
  <meta name="author" content="Talilo" />
  <meta name="description" content="Este site de login do bookmarks">
  <meta name="robots" content="noindex" />
  <meta name="robots" content="nofollow" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Fazer Login</title>
  <link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,100,0,0" />
</head>

<body>

  <div class="contener">
    <form id="some-form" method="POST" action="login.php">
      <div class="logo">
        <img src="https://logodownload.org/wp-content/uploads/2014/09/google-logo-1.png" alt="Google" title="Google">
        <h1>Fazer login</h1>
      </div>
      <div>
        <label for="email">E-mail:</label>
        <input name='email' autocomplete="off" autofocus id="email" type="text" placeholder="Digite seu email" required>
      </div>
      <div>
        <label for="senha">Senha:</label>
        <input name='senha' id="senha" autocomplete="off" type="password" placeholder="Digite sua senha" required>
        <div class="erro">
          <?php
          if(isset($_SESSION['nao_autorizado'])):
            ?>
            <p>Senha ou email errado!!</p>
          <?php
            endif;
           unset($_SESSION['nao_autorizado']);
          ?>

        </div>
      </div>
      <div class="botao">
        <a href="cadastro.php" id="Cadastro" class="cadastro">Criar conta </a>
        <button id="botao" type="submit">Entrar</button>
      </div>
      <div class="recuperar">
        <a href="#">Esqueceu a senha clique aqui!</a>
      </div>
    </form>
  </div>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/login-home.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
  
</body>

</html>