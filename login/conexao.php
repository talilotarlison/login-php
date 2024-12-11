<?php 

//https://brunocosta.dev/conectar-a-um-banco-de-dados-mysql-utilizando-php-1/

// conexão com banco de dados

$servername = "localhost";
$database = "cadastro";
$username = "root";
$password = "";

# Cria a conexão
$conexao = mysqli_connect($servername, $username, $password, $database);
# Verifica a conexão
if (!$conexao) {
    die("A conexão falhou: " . mysqli_connect_error());
}
echo "Conectado com sucesso!";
//mysqli_close($conexao);

?>