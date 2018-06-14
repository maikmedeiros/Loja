<?php include("conecta.php");
	  include("banco-usuario.php");
	  include("logica-usuario.php");

	  	$usuario = buscaUsuarios($conexao, $_POST["email"], $_POST["senha"]);
	 	if($usuario == null) {
		    header("Location: index.php?login=0");
		} else {
		   logaUsuario($usuario["email"]);
		   header("Location: index.php?login=1");
		    
		}
		die();
	  var_dump($usuario);
	  echo $usuario;
?>
