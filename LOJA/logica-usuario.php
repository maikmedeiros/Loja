<?php
	session_start();
	function verificaUsuario(){
		if(!usuarioEstaLogado()){
			header("location: index.php?falhaDeSegurança=true");
			die();
		}
	}


	function usuarioEstaLogado(){
		return isset($_SESSION["usuario_logado"]);

	}

	function usuarioLogado(){
		return $_SESSION["usuario_logado"];
	}

	function logaUsuario($email) {
  	 	$_SESSION["usuario_logado"] = $email;
  	//setcookie("usuario_logado", $email, time() + 120);
	}

	function logout(){
		session_destroy();
	}
?>