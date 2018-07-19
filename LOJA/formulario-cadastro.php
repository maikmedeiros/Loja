<?php 	
	require_once("cabecalho.php"); 
  require_once("banco-categoria.php");
	require_once("logica-usuario.php");
	$categorias = listaCategorias($conexao);

	verificaUsuario();
?>
<h1>Formulario de Cadastro</h1>
	<form action ="adicionar-produto.php" method="POST">
		<table class="table">
			<?php 
        $produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
        $usado = "";
        include("produto-formulario-base.php")
      ?>
			<tr>
            	<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        	</tr>
		</table>
	</form>
<?php require_once("rodape.php"); ?>