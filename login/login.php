<?php
session_start();
include('conexao.php');

if(empty($_POST['senha']) || empty($_POST['email'])){

header('Location: index.php');
exit();
}


 $email = mysqli_real_escape_string($conexao,$_POST['email']);
 $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

 $query = "SELECT email, senha FROM LOGIN WHERE email =" . "'" . $email . "'". "and senha = md5(" . "'".$senha."'".")";

 $resultado = mysqli_query($conexao, $query);

 $row =  mysqli_num_rows($resultado);

 //echo $row;
 
 if($row == 1){
 	$_SESSION['email'] = $email;
   header('Location: painel.php');
   exit();
 }else{
 	header('Location: index.php');
 	$_SESSION['nao_autorizado'] = true;
 	exit();
 }
