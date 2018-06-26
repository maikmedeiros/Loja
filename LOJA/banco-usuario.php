<?php
  include("conecta.php"); 
	function buscaUsuarios($conexao,$email,$senha){
		$senhaMd5 = md5($senha);
    //Codigo abaixo para escapar das SQL_Injecting
    $email = mysqli_real_escape_string($conexao, $email);
		$query = "select * from usuarios where email = '{$email}' and senha = '{$senhaMd5}'";
		$resultado = mysqli_query ($conexao,$query);
		$usuarios = mysqli_fetch_assoc($resultado);
		return $usuarios;

	}
?>