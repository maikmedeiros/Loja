<?php 
	  require_once("banco-usuario.php");
	  require_once("logica-usuario.php");

	  	$usuario = buscaUsuarios($conexao, $_POST["email"], $_POST["senha"]);
	 	if($usuario == null) {
        $_SESSION["danger"] = "Usuário ou Senha Invalida.";
		    header("Location: index.php");
		} else {
		   	logaUsuario($usuario["email"]);
      		$_SESSION["success"] = "Usuário logado com sucesso.";
		  	header("Location: index.php?login=1");
		    
		}
		die();
	  var_dump($usuario);
	  echo $usuario;
?>
