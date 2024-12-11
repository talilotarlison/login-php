
<?php 
session_start(); 
 
if(@$_SESSION['email']){
  header('Location: painel.php');
}


// pegar dados do fomulario
include('conexao.php');

$nome = @$_POST['nome'];
$email = @$_POST['email'];
$senha = @$_POST['senha'];
$senhaConfirma = @$_POST['senhaConfirma'];
// Pega o momento atual
$agora = new DateTime(); 
$data  = $agora->format('d/m/Y H:i'); 

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
  <title>Fazer Cadastro</title>
  <link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/cadastro-styles.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,100,0,0" />
</head>

<body>

  <div class="contener">
    <form id="some-form" method="POST" action="<?= $_SERVER["PHP_SELF"]?>" >
      <div class="logo">
        <img src="https://logodownload.org/wp-content/uploads/2014/09/google-logo-1.png" alt="Google" title="Google">
        <h1>Criar uma Conta</h1>
      </div>
      <div>
        <label for="name">Insira seu nome:</label>
        <input name="nome" autocomplete="off" autofocus id="name" type="text" placeholder="Digite seu nome" required>
      </div>
      <div>
        <label for="email">Insira seu E-mail:</label>
        <input name="email" autocomplete="off" id="email" type="email" placeholder="Digite seu email" required>
      </div>
      <div>
        <label for="senha">Insira sua Senha:</label>
        <input name="senha" autocomplete="off" id="senha" type="password" placeholder="Digite sua senha" required>
      </div>
      <div>
        <label for="senhaConfirma">Confirme sua Senha:</label>
        <input name="senhaConfirma" autocomplete="off" id="senhaConfirma" type="password" placeholder="Confirme sua senha" required>
        <div class="erro">

           <?php

            if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['senhaConfirma'])){
              $nomeVerificado = mysqli_real_escape_string($conexao, trim($nome));
              $emailVerificado = mysqli_real_escape_string($conexao, trim($email));
              $senhaUm = mysqli_real_escape_string($conexao, trim($senha));
              $senhaDois = mysqli_real_escape_string($conexao, trim($senhaConfirma));


            if($senhaUm === $senhaDois){
                  $senhaVerificada = trim(md5($_POST['senha']));
                  $query = "INSERT INTO login (nome, email, senha, data) VALUES ('" . $nomeVerificado ."', '" .$emailVerificado."', '" .$senhaVerificada."', '" .$data."')";
                  // "INSERT INTO login (nome, email, senha) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
                    mysqli_query($conexao, $query);
                    mysqli_close($conexao);
                  echo "<p style='color:green;'>Cadastrado com sucesso!!</p>";
                 // header('Location: index.php');
               }else{
                      echo "Senhas são diferentes!";
                   // sleep(5);
                   // header('Location: index.php');
                }

            }
             
            ?>

         </div>
      </div>
      <div class="botao">
        <a href="index.php" id="Cadastro" class="cadastro">Voltar</a>
        <button id="botaoEnviar" type="submit" name="cadastrar" >Cadastar</button>
      </div>

    </form>
  </div>
  <script src="../js/script.js"></script>
  <script src="../js/login-home.js"></script>

</body>

</html>