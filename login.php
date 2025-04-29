<?php

include 'db.php';

$a = $_POST['usuario'];
$b = $_POST['email'];
$c = $_POST['senha'];

$query = "SELECT*FROM USUARIOS WHERE USUARIO = '$a' and SENHA = '$c' and EMAIL = '$b'";

$consulta = mysqli_query($conexao, $query);

if (mysqli_num_rows($consulta)==1){
	/*echo 'login feito com sucesso';*/

	session_start();
	$_SESSION['login']=true;
	$_SESSION['usuario']=$usuario;
	
	header('location:index.php');
}
else{
	/*echo 'usuário e/ou senha inválido(s)';*/
	header('location:index.php?erro');	
}