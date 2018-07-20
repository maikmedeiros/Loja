<?php 	
	require_once("cabecalho.php"); 
  require_once("banco-categoria.php");
	require_once("logica-usuario.php");
  require_once("class/Produto.php");  
  require_once("class/Categoria.php");  

	$categorias = listaCategorias($conexao);

	verificaUsuario();
?>
<h1>Formulario de Cadastro</h1>
	<form action ="adicionar-produto.php" method="POST">
		<table class="table">
			<?php 
        
        $categoria = new Categoria();
        $categoria->id = 1;

        $produto = new Produto();
        $produto->categoria = $categoria;
        
        $usado = "";
        include("produto-formulario-base.php")
      ?>
			<tr>
            	<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        	</tr>
		</table>
	</form>
<?php require_once("rodape.php"); ?>