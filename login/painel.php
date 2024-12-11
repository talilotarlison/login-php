<?php 
//session_start();
include('verifica_login.php');
//print_r($_SESSION);
//exit();

?>

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
  <title>Painel</title>
  <link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,100,0,0" />
</head>

<body>
<?php
echo "<h2>Seja bem vindo " . $_SESSION["email"];
?>

<h2><a href="logout.php">sair</h2>
  
</body>

</html>