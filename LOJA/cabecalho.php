<?php
        include("mostra-alerta.php");
        mostraAlerta("success");
        mostraAlerta("danger");
        error_reporting (E_ALL ^ E_NOTICE);
?>
<html>
	<head>
		<title>Minha Loja</title>
		<meta charset="utf-8">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/loja.css" rel="stylesheet">
	</head>

	<body>
			<div class = "navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php" ><img src="img/icone_loja.png" width="30"></a>
					</div>
					<div>
						<ul class="nav navbar-nav">
							<li><a href="formulario-cadastro.php">ADICIONAR PRODUTO</a></li>
							<li><a href="visualizar-produto.php">VISUALIZAR PRODUTO</a></li>
							<li><a haref="sobre.php">SOBRE</a></li>
						</ul>
					</div>
				</div>
			</div>

		<div class="container">
			<div class="principal">


