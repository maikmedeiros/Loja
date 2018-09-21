<?php 	
	require_once("cabecalho.php"); 
	require_once("banco-categoria.php");
	

	$id = $_GET['id'];
  $produtoDao = new ProdutoDAO($conexao);
  $categoriaDAO = new CategoriaDAO($conexao);
	$produto = $produtoDao->buscaProduto($id);
	$categorias = $categoriaDAO->listaCategorias($conexao);
	
    $selecao_usado = $produto->getUsado() ? "checked='checked'" : "";
    $produto->setUsado($selecao_usado);

?>

	<h1>Alterar Produto</h1>
	<form action ="altera-produto.php" method="POST">
		<input type="hidden" name="id" value="<?= $produto->getId() ?>">
		<table class="table">
          <?php 
            include("produto-formulario-base.php");        
          ?>
		    	<tr>
            	<td><button class="btn btn-primary" type="submit">Alterar</button></td>
        	</tr>
		</table>
	</form>
<?php require_once("rodape.php"); ?>

