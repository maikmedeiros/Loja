<?php
	function buscaUsuarios($conexao,$email,$senha){
		
		$senhaMd5 = md5($senha);
		$query = "select * from usuarios where email = '{$email}' and senha = '{$senhaMd5}'";
		$resultado = mysqli_query ($conexao,$query);
		$usuarios = mysqli_fetch_assoc($resultado);
		return $usuarios;

	}
?>